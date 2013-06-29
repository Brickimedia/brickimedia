<?php

class PhalanxAjax {

	/**
	 * Get given block data
	 */
	public static function getOneBlock() {
		global $wgRequest;
		$id = $wgRequest->getInt( 'id' );

		if ( empty( $id ) ) {
			return false;
		}

		return PhalanxHelper::getOneBlock( $id );
	}

	/**
	 * Test some text against active blocks
	 */
	public static function testBlock() {
		global $wgRequest;
		$text = $wgRequest->getVal( 'text' );

		return PhalanxHelper::testBlock( $text );
	}

	/**
	 * Add a block
	 */
	public static function setBlock() {
		return PhalanxHelper::setBlock();
	}

	public static function removeSingleBlock() {
		global $wgRequest;
		$id = $wgRequest->getInt( 'id' );

		if ( empty( $id ) ) {
			return false;
		}

		return PhalanxHelper::removeFilter( $id );
	}
}
