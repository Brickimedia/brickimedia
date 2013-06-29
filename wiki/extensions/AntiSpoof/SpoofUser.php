<?php

class SpoofUser {

	/**
	 * @param $name string
	 */
	public function __construct( $name ) {
		$this->mName = strval( $name );
		list( $ok, $normalized ) = AntiSpoof::checkUnicodeString( $this->mName );
		$this->mLegal = ( $ok == 'OK' );
		if ( $this->mLegal ) {
			$this->mNormalized = $normalized;
			$this->mError = null;
		} else {
			$this->mNormalized = null;
			$this->mError = $normalized;
		}
	}

	/**
	 * Does the username pass Unicode legality and script-mixing checks?
	 * @return bool
	 */
	public function isLegal() {
		return $this->mLegal;
	}

	/**
	 * Describe the error.
	 * @return null|string
	 */
	public function getError() {
		return $this->mError;
	}

	/**
	 * Get the normalized key form
	 * @return string|null
	 */
	public function getNormalized() {
		return $this->mNormalized;
	}

	/**
	 * @return string
	 */
	protected function getTableName() {
		return 'user';
	}

	/**
	 * @return string
	 */
	protected function getUserColumn() {
		return 'user_name';
	}

	/**
	 * Does the username pass Unicode legality and script-mixing checks?
	 *
	 * @return array empty if no conflict, or array containing conflicting usernames
	 */
	public function getConflicts() {
		$dbr = $this->getDBSlave();

		// Join against the user table to ensure that we skip stray
		// entries left after an account is renamed or otherwise munged.
		$spoofedUsers = $dbr->select(
			array( 'spoofuser', $this->getTableName() ),
			array( 'su_name' ), // Same thing due to the join. Saves extra variableness
			array(
				'su_normalized' => $this->mNormalized,
				'su_name = ' . $this->getUserColumn(),
			),
			__METHOD__,
			array(
				'LIMIT' => 5
			) );

		$spoofs = array();
		foreach ( $spoofedUsers as $row ) {
			array_push( $spoofs, $row->su_name );
		}
		return $spoofs;
	}

	/**
	 * Record the username's normalized form into the database
	 * for later comparison of future names...
	 * @return bool
	 */
	public function record() {
		return self::batchRecord( $this->getDBMaster(), array( $this ) );
	}

	/**
	 * @return array
	 */
	private function insertFields() {
		return array(
			'su_name'       => $this->mName,
			'su_normalized' => $this->mNormalized,
			'su_legal'      => $this->mLegal ? 1 : 0,
			'su_error'      => $this->mError,
		);
	}

	/**
	 * Insert a batch of spoof normalization records into the database.
	 * @param $dbw DatabaseBase
	 * @param $items array of SpoofUser
	 * @return bool
	 */
	public static function batchRecord( $dbw, $items ) {
		if ( !count( $items ) ) {
			return false;
		}
		$fields = array();
		/**
		 * @var $item SpoofUser
		 */
		foreach ( $items as $item ) {
			$fields[] = $item->insertFields();
		}
		$dbw->replace(
			'spoofuser',
			array( 'su_name' ),
			$fields,
			__METHOD__ );
		return true;
	}

	/**
	 * @param $oldName
	 */
	public function update( $oldName ) {
		$dbw = $this->getDBMaster();

		if( $this->record() ) {
			$dbw->delete(
				'spoofuser',
				array( 'su_name' => $oldName ),
				__METHOD__
			);
		}
	}

	/**
	 * @return DatabaseBase
	 */
	protected function getDBSlave() {
		return wfGetDB( DB_SLAVE );
	}

	/**
	 * @return DatabaseBase
	 */
	protected function getDBMaster() {
		return wfGetDB( DB_MASTER );
	}
}
