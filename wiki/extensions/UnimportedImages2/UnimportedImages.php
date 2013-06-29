<?php

# Not an entry point
if(!defined('MEDIAWIKI')) {
	die('This file is a MediaWiki extension, it is not a valid entry point');
}

# Define stuff
$dir = dirname(__FILE__) . '/';

# Credits
$wgExtensionCredits['specialpage'][] = array(
        'path' => __FILE__,
        'name' => 'Unimported Images',
        'author' => '[[m:User:UltrasonicNXT (Brickimedia)|Adam Carter]] and [[m:User:George (Brickimedia)|George Barnick]]',
        'descriptionmsg' => 'unimportedimages-desc',
        'version' => '1.4',
);

$wgAutoloadClasses['SpecialUnimportedImages'] = $dir . 'SpecialUnimportedImages.php';
$wgSpecialPages['UnimportedImages'] = 'SpecialUnimportedImages';

$wgAutoloadClasses['SpecialImportedImages'] = $dir . 'SpecialImportedImages.php';
$wgSpecialPages['ImportedImages'] = 'SpecialImportedImages';

#i18n
$wgExtensionMessagesFiles['UnimportedImages'] = $dir . 'UnimportedImages.i18n.php';
#alias
$wgExtensionMessagesFiles[ 'UnimportedImagesAlias' ] = __DIR__ . '/UnimportedImages.alias.php';

#Special Page Groups
$wgSpecialPageGroups[ 'UnimportedImages' ] = 'media';
$wgSpecialPageGroups[ 'ImportedImages' ] = 'media';

?>