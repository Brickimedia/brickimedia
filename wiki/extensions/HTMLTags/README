HTML Tags extension for MediaWiki.

This extension defines a tag function, <htmltag>, that allows users to place
HTML tags on the page that may not be otherwise allowed by the MediaWiki
parser.

For more information, see the extension homepage at:
https://www.mediawiki.org/wiki/Extension:HTML_Tags

== Overview ==

<htmltag> can only display tags and attributes that are allowed for that wiki.
Tags and attributes are allowed through the use of the global variable
$wgHTMLTagsAttributes in LocalSetting.php. To allow the use of the <a> tag,
for instance, with the attributes 'href' and 'class', you would add the
following to LocalSettings.php:

$wgHTMLTagsAttributes['a'] = array( 'href', 'class' );

A user could then display an <a> tag on the wiki, with those attributes, with
text like the following:

<htmltag tagname="a" href="http://example.com" class="link">See here</htmltag>

Calling <htmltag> with a tag name that is not allowed will result in an error
message; calling it with an attribute that is not allowed will simply lead to
the attribute being ignored.

== License ==

HTML Tags is available under the GNU Public License.
 
== Authors ==

HTML Tags was written by Yaron Koren.
