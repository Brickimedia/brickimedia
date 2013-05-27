<?php
# Example WikiMedia extension
# with WikiMedia's extension mechanism it is possible to define
# new tags of the form
# <TAGNAME> some text </TAGNAME>
# the function registered by the extension gets the text between the
# tags as input and can transform it into arbitrary HTML code.
# Note: The output is not interpreted as WikiText but directly
#       included in the HTML output. So Wiki markup is not supported.
# To activate the extension, include it from your LocalSettings.php
# with: include("extensions/YourExtensionName.php");

$wgExtensionFunctions[] = "wfEemageExtension";

$wgExtensionCredits[ 'parserhooks' ][] = array(
        'path' => __FILE__,
        'name' => 'Image Tags',
        'author' => '[[User:Swert|Swert]]',
        'url' => 'http://www.biosector01.com',
        'descriptionmsg' => 'chat-desc',
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