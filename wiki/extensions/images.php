<?php
# Images tag from BIONICLEsector01
# Made by Steven Wert
# Modified for use on Brickimedia

$wgExtensionFunctions[] = "wfEemageExtension";

$wgExtensionCredits[ 'parserhook' ][] = array(
        'path' => __FILE__,
        'name' => 'Image Tags',
        'author' => '[[User:Swert|Steven Wert]]',
        'url' => 'http://www.biosector01.com',
        'descriptionmsg' => 'imgtag-desc',
        'version' => '1.0',
);

function wfEemageExtension() {
    global $wgParser;
    # register the extension with the WikiText parser
    # the first parameter is the name of the new tag.
    # In this case it defines the tag <example> ... </example>
    # the second parameter is the callback function for
    # processing the text between the tags
    $wgParser->setHook( "img", "renderEemage" );
}

# The callback function for converting the input text to HTML output
function renderEemage( $input, $argv, &$parser ) {
    # $argv is an array containing any arguments passed to the
    # extension like <example argument="foo" bar>..
    # Put this on the sandbox page:  (works in MediaWiki 1.5.5)
    #   <example argument="foo" argument2="bar">Testing text **example** in
    # between the new tags</example>
    $output = "<img src=\"$input\" alt=\"External Image\" />";
    return $output;
}
?>
