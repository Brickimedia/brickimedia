<?php

//$wgReadOnly = "Sorry, content is currently being imported. Any actions that will modify the database have been disabled";
$wgSitename      = "Lego Message Boards Wiki";
$wgMetaNamespace = "LMBW";

$wgDBprefix         = "";
$wgLogo             = "";
$wgFavicon          = "$wgScriptPath/images/favicons/lmbw.ico";

$wgLanguageCode = "en";
$wgGroupPermissions['*']['edit'] = true;
$wgGroupPermissions['user']['upload'] = false;
$wgGroupPermissions['sysop']['upload'] = true;
$wgGroupPermissions['sysadmin']['upload'] = true;
$wgGroupPermissions['import']['import'] = true;
$wgGroupPermissions['import']['importupload'] = true;
$wgGroupPermissions['import']['noratelimit'] = true;
$wgGroupPermissions['import']['apihighlimits'] = true;
$wgGroupPermissions['autoconfirmed']['edit'] = true;
$wgGroupPermissions['*']['createtalk'] = true;
$wgGroupPermissions['*']['createpage'] = true;

#beta test group
$wgGroupPermissions['betatest']['read'] = true; //allow beta testers to read
