<?php 



function xLoadMain(){

	$x = intval(file_get_contents(dirname( __FILE__ ) . "/counter"));

	$x++;

	file_put_contents(dirname( __FILE__ ) . "/counter", strval($x));



	$xLoadHooks = array(

		2     => 'every2Load',

		5     => 'every5Load',

		10    => 'every10Load',

		20    => 'every20Load',

		50    => 'every50Load',

		100   => 'every100Load',

		200   => 'every200Load',

		500   => 'every500Load',

		1000  => 'every1000Load',

		2000  => 'every2000Load',

		5000  => 'every5000Load',

		10000 => 'every10000Load',

	);



	foreach( $xLoadHooks as $no => $hook ){

		if( $x % $no == 0 ){

			wfRunHooks( $hook );

		}

	}

}



$wgExtensionFunctions[] = 'xLoadMain';



$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'EveryXLoad',
	'author' =>'[[m:UltrasonicNXT (Brickimedia)|Adam Carter]]',
	'description' => 'Creates \'everyXLoad\' hooks, that can be used anywhere else in MediaWiki for 
		performing tasks that do not need to be run on every load',
	'version'  => 1.0,
);