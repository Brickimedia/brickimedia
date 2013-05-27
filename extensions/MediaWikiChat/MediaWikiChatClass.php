<?php ini_set('memory_limit', '128M');class MediaWikiChat {		public $data;		function now(){		$m = explode(' ', microtime() );		return intval(			    $m[1]			   ) * 100 			   +		   	   intval(		   	   	$m[0]		   	   * 100		   	   );	}		function getAvatar( $id ){		if (is_file('/var/www/wiki/images/avatars/'.$id.'_s.png')) {			$avatar = '/images/avatars/'.$id.'_s.png';		} elseif (is_file('/var/www/wiki/images/avatars/'.$id.'_s.jpg')) {			$avatar = '/images/avatars/'.$id.'_s.jpg';		} else {			$avatar = '/images/avatars/default_s.gif';		}				return $avatar;	}		function sendMessage( $message ){        global $wgUser;	  	if( $wgUser -> isAllowed('chat') ){	  			  		if( $message != '' ){	  						global $wgUser;						$dbw = wfGetDB( DB_MASTER );				$id = $wgUser -> getID();				$name = $wgUser -> getName();				$timestamp = MediaWikiChat::now();						$dbw -> insert(					'chat',					array(						'chat_user_id' => $id,						'chat_user_name' => $name,						'chat_timestamp' => $timestamp,						'chat_message' => $message,						'chat_type' => 'message'					)				);						// Somewhere else in your code where you want to generate a log entry				$logEntry = new ManualLogEntry( 'chat', 'send' ); // Action bar in log foo				$logEntry->setPerformer( $wgUser ); // User object, the user who did this action				$page = Title::newFromText( 'Special:Chat' );				$logEntry->setTarget( $page ); // The page that this log entry affects				//$logEntry->setComment( $reason ); // User provided comment, optional				$logEntry->setParameters( array(						'4::message' => $message,				) );						$logid = $logEntry->insert();				/*				// Add a log entry.
				$pageTitle = Title::newFromID( $this->PageID );
				$message = wfMsgForContent(
					'comments-create-text',
					$pageTitle->getPrefixedText() . "#comment-{$commentId}",
					$text
				);
		
				$log = new LogPage( 'comments', true /* show in RecentChanges?  );
				$log->addEntry( '+ comment', $wgUser->getUserPage(), $message );
		
				wfRunHooks( 'Comment::add', array( $this, $commentId, $this->PageID ) );*/						return $timestamp;	  		} else {	  			return "blank messages not allowed";	  		}	  	} else {	  		return false;	  	}	}	
	function sendPM( $message, $toname, $toid ){
		global $wgUser;
		if( $wgUser -> isAllowed('chat') ){
			global $wgUser;
	
			$dbw = wfGetDB( DB_MASTER );
	
			$fromid = $wgUser -> getID();
			$fromname = $wgUser -> getName();
			$timestamp = MediaWikiChat::now();
			//$fromid = $wgUser -> getID();
			//$fromname = $wgUser -> getName();
	
			$dbw -> insert(
					'chat',
					array(							'chat_to_id' => $toid,							'chat_to_name' => $toname,							'chat_user_id' => $fromid,							'chat_user_name' => $fromname,							'chat_timestamp' => $timestamp,							'chat_message' => $message,							'chat_type' => 'private message'
					)
			);
	
			return $timestamp;
		} else {
			return false;
		}
	}
	function getOnline(){        global $wgUser;	  	if( $wgUser -> isAllowed('chat') ){
	
			$dbr = wfGetDB( DB_SLAVE );
	
			$timestamp = MediaWikiChat::now() - 2 * 60 * 100;//minus 2 mins
	
			$res = $dbr -> select(
				'chat_users',
				array( 'cu_user_name', 'cu_user_id' ),
				array( "cu_timestamp > $timestamp", "cu_user_id != {$wgUser -> getId()}" )
			);
	
			$data = array();
	
			foreach( $res as $row ){
					
				$id = $row -> cu_user_id;
				$name = $row -> cu_user_name;
				//$avatar = MediaWikiChat::getAvatar( $id );
	
				$data[] = array($name, $id);
			}
			//return array_unique($data);			return $data;	  	} else {	  		trigger_error( "You are blocked from chat", E_USER_ERROR );	  		return false;	  	}
	
	}		function getOnlineText(){		global $wgUser;		if( $wgUser -> isAllowed('chat') ){				$dbr = wfGetDB( DB_SLAVE );				$timestamp = MediaWikiChat::now() - 2 * 60;//minus 2 mins				$res = $dbr -> selectSQLText(					'chat_users',					array( 'cu_user_name', 'cu_user_id' ),					array( "cu_timestamp > $timestamp", "cu_user_id != {$wgUser -> getId()}" )			);						return $res;					} else {			trigger_error( "You are blocked from chat", E_USER_ERROR );			return false;		}		}		function getOnlineRaw(){		global $wgUser;		if( $wgUser -> isAllowed('chat') ){				$dbr = wfGetDB( DB_SLAVE );				$timestamp = MediaWikiChat::now() - 2 * 60;//minus 2 mins				$res = $dbr -> select(					'chat_users',					array( 'cu_user_name', 'cu_user_id' ),					array( "cu_timestamp > $timestamp", "cu_user_id != {$wgUser -> getId()}" )			);						return $res;					} else {			trigger_error( "You are blocked from chat", E_USER_ERROR );			return false;		}		}		function getInterval(){				$dbr = wfGetDB( DB_SLAVE );				$res = $dbr -> select(			'chat',			'chat_timestamp',			'',			__METHOD__,			array(				'LIMIT' => 5,				'ODER BY' => '`chat_timestamp` DESC'
			)		);				$res2 = $dbr -> selectSQLText(
				'chat',
				'chat_timestamp',
				'',
				__METHOD__,
				array(
						'LIMIT' => 5,
						'ORDER BY' => '`chat_timestamp` DESC'
				)
		);				//echo $res2;				//return;				//var_dump($res -> result);		return get_class_methods($res);				$latest = $res -> fetchRow();		$latest = $latest['chat_timestamp'];		$res -> fetchRow();		$res -> fetchRow();		$res -> fetchRow();		$oldest = $res -> fetchRow();		$oldest = $oldest['chat_timestamp'];				$av = ($latest - $oldest) / 5;				return $av;	}		function parseMessage( $message ){				$s2 = wfMessage('smileys') -> plain();				$sm2 = explode( '* ', $s2 );				$this -> data['debug']['log'][] = 'parse';				$this -> data['debug']['log'][] = $sm2;				if( is_array( $sm2 ) ){						foreach( $sm2 as $line ){								$bits = explode( ' ', $line );								if( count( $bits ) > 1 ){									$chars = trim( $bits[0] );					$filename = trim( $bits[1] );				
					$image = "[[!File:$filename|x20px|alt=$chars|link=|$chars]]";
					
					$smileys -> $chars = $image;				}			}		}				$this -> data['messager'] = $message;				$message = ' ' . $message . ' ';				if( is_object( $smileys ) ){
			foreach( $smileys as $chars => $image ){							$chars = preg_quote( $chars );							$this -> data['debug']['messager1'][] = $message;	
				//$message = preg_replace( '( |\n)'.$chars.'( |\n)', ' '.$image.' ', '\n'.$message.'\n' );				//$message = preg_replace( '`.?$`', 'ss', $message );				//$image = 'image';				$message = preg_replace( '` '.$chars.' `', ' '.$image.' ', $message );	
				//$match = preg_match( '( |\n)'.$chars.'( |\n)', '\n'.$message.'\n', $matches);				//$this -> data['debug']['matches'][] = $matches;							//$this -> data['debug']['chars'][] = '( |\n)'.$chars.'( |\n)';				//$this -> data['debug']['image'][] = ' '.$image.' ';				$this -> data['debug']['messager2'][] = $message;
			}		}					$message = trim( $message );
		$message = str_ireplace( '[[File:', '[[:File:', $message );		$message = str_ireplace( '[[!File:', '[[File:', $message );				$opts = new ParserOptions();		$opts -> setEditSection( false );		$opts -> setExternalLinkTarget( '_blank' );		$opts -> setAllowSpecialInclusion( false );		$opts -> setAllowExternalImages( false );				$parser = new Parser();		$parseOut = $parser -> parseLight( $message, Title::newFromText( 'Special:Chat' ), $opts );				return $parseOut -> getText();				//return $message;	}		function getNew(){		global $wgUser;				$dbr = wfGetDB( DB_SLAVE );		$dbw = wfGetDB( DB_MASTER );				$this -> data = array();				$resT = $dbr -> select(			'chat_users',			array( 'cu_timestamp' ),			array( "cu_user_id = {$wgUser -> getId()}" )		);				$resTt = $dbr -> selectSQLText(			'chat_users',			array( 'cu_timestamp' ),			array( "cu_user_id = {$wgUser -> getId()}" )		);
		$fO = $resT -> fetchObject();				if( is_object( $fO ) ){			$lastCheck = $fO -> cu_timestamp;		} else {			$lastCheck = 0;		}				if( !$lastCheck ){			$dbw -> insert(				'chat_users',				array(					'cu_user_id' => $wgUser -> getId(),					'cu_user_name' => $wgUser -> getName(),					'cu_timestamp' => 0,				)			);			$lastCheck = 0;		}				//var_dump( $lastCheck );		//echo $resTt;		//var_dump( $resT -> fetchRow() );		//var_dump( $resT -> fetchObject() );				$thisCheck = MediaWikiChat::now();				$updateT = $dbw -> update(			'chat_users',			array(				'cu_timestamp' => $thisCheck,				'cu_user_name' => $wgUser -> getName()
		 	),			array(				'cu_user_id' => $wgUser -> getId(),
		 	)		);		
		$res = $dbr -> select(
			'chat',
			array( 'chat_user_name', 'chat_user_id', 'chat_message', 'chat_timestamp' ),
			array( "chat_timestamp > $lastCheck", "chat_type = 'message'" ),			'',
			__METHOD__,
			array(
				'LIMIT' => 20,
			)
		);/*		$text = $dbr -> selectSQLText(			'chat',			array( 'chat_user_name', 'chat_user_id', 'chat_message', 'chat_timestamp' ),			array( "chat_timestamp > $mwCheck" )		);*/
		$this -> data['debug']['log'][] = $lastCheck;
		$this -> data['debug']['log'][] = 'test';				foreach( $res as $row ){							$id = $row -> chat_user_id;			$name = $row -> chat_user_name;			$message = $row -> chat_message;			$timestamp = $row -> chat_timestamp;			$avatar = MediaWikiChat::getAvatar( $id );						$message = $this -> parseMessage( $message );					$this -> data['messages'][] = array(				'name' => $name,				'message' => $message,				'timestamp' => $timestamp,			);
			$this -> data['users'][$name][1] = $avatar;			$this -> data['users'][$name][0] = $id;		}
		$this -> data['debug']['lastcheck'] = $lastCheck;		$this -> data['debug']['thischeck'] = $thisCheck;				$resPM = $dbr -> select(
				'chat',
				array( 'chat_user_name', 'chat_user_id', 'chat_message', 'chat_timestamp', 'chat_to_id', 'chat_to_name' ),
				array( "chat_timestamp > $lastCheck", "chat_type = 'private message'", "chat_to_name = '{$wgUser -> getName()}' OR chat_user_name = '{$wgUser -> getName()}'" ),
				'',
				__METHOD__,
				array(
						'LIMIT' => 20,
				)
		);		//$resPMt = $dbr -> selectSQLText(
		//);
		//$data['log'][] = $resPM;		//$data['log'][] = $resPM;		//$data['log'][] = $resPMt;				foreach( $resPM as $row ){			$message = $row -> chat_message;			$timestamp = $row -> chat_timestamp;

			$fromid = $row -> chat_user_id;
			$fromname = $row -> chat_user_name;			$toid = $row -> chat_to_id;			$toname = $row -> chat_to_name;						$convwith = "convwith was not defined";			$this -> data['debug']['log'][] = $convwith;			if($fromname == $wgUser -> getName()){				$convwith = $toname;				//$convid = $toid;			} else {				$convwith = $fromname;				//$convid = $fromid;			}						//echo $convwith;						$fromavatar = MediaWikiChat::getAvatar( $fromid );			$toavatar = MediaWikiChat::getAvatar( $toid );
				
			$message = MediaWikiChat::parseMessage( $message );						$this -> data['debug']['log'][] = $convwith;
		
			$this -> data['pms'][] = array(
					'message' => $message,
					'timestamp' => $timestamp,					'from' => $fromname,					'conv' => $convwith
			);

			$this -> data['users'][$fromname][1] = $fromavatar;
			$this -> data['users'][$toname][1] = $toavatar;			$this -> data['users'][$fromname][0] = $fromid;			$this -> data['users'][$toname][0] = $toid;
		}				$this -> data['me'] = $wgUser -> getName();				$this -> data['users'][$wgUser -> getName()] = array(				$wgUser -> getId(),				MediaWikiChat::getAvatar( $wgUser -> getId() )
		);				$onlineUsers = MediaWikiChat::getOnline();				//$this -> $data['debug']['log'][] = serialize($onlineUsers);				foreach( $onlineUsers as $user){						//$this -> $data['debug']['log'][] = $user;						$this -> data['online'][] = $user[0];			$x = MediaWikiChat::getAvatar($user[1]);						$this -> data['users'][$user[0]][1] = MediaWikiChat::getAvatar($user[1]);		}
		//$this -> data['onlinetext'] = MediaWikiChat::getOnlineText();		//$this -> data['onlineraw'] = MediaWikiChat::getOnlineRaw();		//$this -> data['onlinefout'] = MediaWikiChat::getOnline();		

		$this -> data['interval'] = MediaWikiChat::getInterval();		/*			if($res -> numRows() < 1){			$this -> data['debug']['error'][] = "ERROR: No rows";		}		*/		$this -> data['now'] = MediaWikiChat::now();				$this -> data['mods'] = array();				foreach( $this -> data['users'] as $name => $arr ){			$user = User::newFromName( $name );			$groups = $user -> getGroups();						if( in_array( 'chatmod', $groups ) || in_array( 'sysop', $groups ) ){				$this -> data['mods'][] = $name;			}		}				global $bmProject;				if( $bmProject = 'lmbw' ){		//	var_dump( $this -> data );		}				return json_encode($this -> data);			}	}