<?php 


$wgLogTypes[] = 'globalnewusers';

$wgLogActionsHandlers['globalnewusers/*'] = 'LogFormatter';
/* Or if you want catch-all, do
$wgLogActionsHandlers['foo/*'] = 'LogFormatter';
 * Or if you need some extra logic, you can write your own formatter and do
$wgLogActionsHandlers['foo/*'] = 'FooLogFormatter';
 * See https://svn.wikimedia.org/doc/classLogFormatter.html
 */

$logpath = "/var/www/wiki/extensions/GlobalNewUsers/log";    
$lines = file($logpath, FILE_IGNORE_NEW_LINES);

foreach( $lines as $log ){
	$data = explode("#", $log);
	$username = $data[0];
	$id = User::idFromName($username);
	$user = User::newFromId($id);
	
	$project = $data[1];
	
	$logEntry = new ManualLogEntry( 'globalnewusers', 'newuser' ); // Action bar in log foo
	$logEntry->setPerformer( $user ); // User object, the user who did this action
	
	$logEntry->setTarget( Title::NewFromText('Special:UserLogin') ); // The page that this log entry affects
	
	//$logEntry->setComment( $reason ); // User provided comment, optional
	$logEntry->setParameters( array(
		'4::paramname' => $project,
		// 'hiddenparam' => 'ugly stuff',
	) );
	
	$logid = $logEntry->insert();
	
}