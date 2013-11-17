<?php

/*
 I'm sick of wondering which groups are getting rights from where. Voila, central coordination! - Adrian
*/

#all
$wgGroupPermissions['*']['createaccount']    = true;
$wgGroupPermissions['*']['read']             = true;
$wgGroupPermissions['*']['edit']             = true;
$wgGroupPermissions['*']['createpage']       = true;
$wgGroupPermissions['*']['createtalk']       = true;
$wgGroupPermissions['*']['writeapi']         = true;
$wgGroupPermissions['*']['comment'] = true;

#users
$wgGroupPermissions['user']['move']             = true;
$wgGroupPermissions['user']['move-subpages']    = true;
$wgGroupPermissions['user']['move-rootuserpages'] = true; // can move root userpages
//$wgGroupPermissions['user']['movefile']         = true;       // Disabled for now due to possible bugs and security concerns
$wgGroupPermissions['user']['read']             = true;
$wgGroupPermissions['user']['edit']             = true;
$wgGroupPermissions['user']['createpage']       = true;
$wgGroupPermissions['user']['createtalk']       = true;
$wgGroupPermissions['user']['writeapi']         = true;
$wgGroupPermissions['user']['upload']           = true;
$wgGroupPermissions['user']['reupload']         = true;
$wgGroupPermissions['user']['reupload-shared']  = true;
$wgGroupPermissions['user']['minoredit']        = true;
$wgGroupPermissions['user']['purge']            = true; // can use ?action=purge without clicking "ok"
$wgGroupPermissions['user']['sendemail']        = true;
$wgGroupPermissions['user']['patrolmarks']      = true; // let anons see what was patrolled
$wgGroupPermissions['user']['createblogpost'] = true;

#autoconfirmed
$wgGroupPermissions['autoconfirmed']['ajaxpoll-vote'] = true;
$wgGroupPermissions['autoconfirmed']['autoconfirmed'] = true;
$wgGroupPermissions['autoconfirmed']['vote'] = true;
$wgGroupPermissions['autoconfirmed']['upload_by_url'] = true;
$wgGroupPermissions['autoconfirmed']['chat'] = true;
$wgGroupPermissions['autoconfirmed']['abusefilter-log-detail'] = true;
$wgGroupPermissions['autoconfirmed']['abusefilter-view'] = true;
$wgGroupPermissions['autoconfirmed']['abusefilter-log'] = true;
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;

#patroller
$wgGroupPermissions['patroller']['noratelimit'] = true;
$wgGroupPermissions['patroller']['suppressredirect'] = true;
$wgGroupPermissions['patroller']['patrol'] = true;
$wgGroupPermissions['patroller']['autopatrol'] = true;
$wgGroupPermissions['patroller']['movefile'] = true;
$wgGroupPermissions['patroller']['globalblock-exempt'] = true;
$wgGroupPermissions['patroller']['rollback'] = true; #HAH! It's part of patroller now! :D

#reviewer
$wgGroupPermissions['reviewer']['edit'] = true;
$wgGroupPermissions['reviewer']['changeRating'] = true;


#BOT
$wgGroupPermissions['bot']['bot']              = true;
$wgGroupPermissions['bot']['autoconfirmed']    = true;
$wgGroupPermissions['bot']['nominornewtalk']   = true;
$wgGroupPermissions['bot']['autopatrol']       = true;
$wgGroupPermissions['bot']['suppressredirect'] = true;
$wgGroupPermissions['bot']['apihighlimits']    = true;
$wgGroupPermissions['bot']['writeapi']         = true;
$wgGroupPermissions['bot']['editprotected']    = true; // can edit all protected pages without cascade protection enabled

#sysop
$wgGroupPermissions['sysop']['block']            = true;
$wgGroupPermissions['sysop']['createaccount']    = true;
$wgGroupPermissions['sysop']['delete']           = true;
$wgGroupPermissions['sysop']['bigdelete']        = true; // can be separately configured for pages with > $wgDeleteRevisionsLimit revs
$wgGroupPermissions['sysop']['deletedhistory']   = true; // can view deleted history entries, but not see or restore the text
$wgGroupPermissions['sysop']['deletedtext']      = true; // can view deleted revision text
$wgGroupPermissions['sysop']['undelete']         = true;
$wgGroupPermissions['sysop']['editinterface']    = true;
$wgGroupPermissions['sysop']['editusercss']      = true;
$wgGroupPermissions['sysop']['edituserjs']       = true;
$wgGroupPermissions['sysop']['import']           = true;
$wgGroupPermissions['sysop']['importupload']     = true;
$wgGroupPermissions['sysop']['edit'] = true;
$wgGroupPermissions['sysop']['move']             = true;
$wgGroupPermissions['sysop']['move-subpages']    = true;
$wgGroupPermissions['sysop']['move-rootuserpages'] = true;
$wgGroupPermissions['sysop']['patrol']           = true;
$wgGroupPermissions['sysop']['autopatrol']       = true;
$wgGroupPermissions['sysop']['protect']          = true;
$wgGroupPermissions['sysop']['proxyunbannable']  = true;
$wgGroupPermissions['sysop']['rollback']         = true;
$wgGroupPermissions['sysop']['upload']           = true;
$wgGroupPermissions['sysop']['reupload']         = true;
$wgGroupPermissions['sysop']['reupload-shared']  = true;
$wgGroupPermissions['sysop']['unwatchedpages']   = true;
$wgGroupPermissions['sysop']['autoconfirmed']    = true;
$wgGroupPermissions['sysop']['upload_by_url']    = true;
$wgGroupPermissions['sysop']['ipblock-exempt']   = true;
$wgGroupPermissions['sysop']['blockemail']       = true;
$wgGroupPermissions['sysop']['markbotedits']     = true;
$wgGroupPermissions['sysop']['apihighlimits']    = true;
$wgGroupPermissions['sysop']['browsearchive']    = true;
$wgGroupPermissions['sysop']['noratelimit']      = true;
$wgGroupPermissions['sysop']['movefile']         = true;
$wgGroupPermissions['sysop']['unblockself']      = true;
$wgGroupPermissions['sysop']['suppressredirect'] = true;
$wgGroupPermissions['sysop']['trackback']        = true;
$wgGroupPermissions['sysop']['deleterevision'] = true; #for admins too!
$wgGroupPermissions['sysop']['deletelogentry'] = true; #for admins too!
$wgGroupPermissions['sysop']['interwiki'] = true;
$wgGroupPermissions['sysop']['commentadmin'] = true;
$wgGroupPermissions['sysop']['protectsite'] = true;
$wgGroupPermissions['sysop']['abusefilter-view-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-log-private'] = true;
$wgGroupPermissions['sysop']['skipcaptcha'] = true;
$wgGroupPermissions['sysop']['globalblock-exempt'] = true;
$wgAddGroups['sysop'] = array( 'bot', 'patroller', 'chatmod', 'blockedfromchat' );
$wgRemoveGroups['sysop'] = array( 'bot', 'patroller', 'chatmod', 'blockedfromchat' );

#bureaucrat
$wgGroupPermissions['bureaucrat']['renameuser'] = false;
$wgGroupPermissions['bureaucrat']['userrights'] = false;
$wgAddGroups['bureaucrat'] = array( 'sysop', 'bot', 'rollback', 'patroller', 'bureaucrat', 'chatmod' );
$wgRemoveGroups['bureaucrat'] = array( 'sysop', 'bot', 'rollback', 'patroller', 'bureaucrat', 'chatmod' );

#oversight
$wgGroupPermissions['oversight']['suppressrevision'] = true;
$wgGroupPermissions['oversight']['hideuser'] = true;
$wgGroupPermissions['oversight']['suppressionlog'] = true;
$wgGroupPermissions['oversight']['abusefilter-hidden-log'] = true;
$wgGroupPermissions['oversight']['abusefilter-hide-log'] = true;

#checkuser
$wgGroupPermissions['checkuser']['lookupuser'] = true;  
$wgGroupPermissions['checkuser']['checkuser'] = true;  
$wgGroupPermissions['checkuser']['checkuser-log'] = true;  

#global sysadmin
$wgGroupPermissions['sysadmin']['edit'] = true;
$wgGroupPermissions['sysadmin']['renameuser'] = true;
$wgGroupPermissions['sysadmin']['siteadmin'] = true;
$wgGroupPermissions['sysadmin']['editusercss'] = true;
$wgGroupPermissions['sysadmin']['edituserjs'] = true;
$wgGroupPermissions['sysadmin']['editinterface'] = true;
$wgGroupPermissions['sysadmin']['editprotected'] = true;
$wgGroupPermissions['sysadmin']['usermerge'] = true;
$wgGroupPermissions['sysadmin']['protectsite'] = true;
$wgGroupPermissions['sysadmin']['autopatrol'] = true;
$wgGroupPermissions['sysadmin']['updatepoints'] = true;
$wgGroupPermissions['sysadmin']['import'] = true;
$wgGroupPermissions['sysadmin']['importupload'] = true;

#emailconfirmed
$wgAutopromote['emailconfirmed'] = APCOND_EMAILCONFIRMED;
$wgImplicitGroups[] = 'emailconfirmed'; //hides from user list

$wgAddGroups['sysadmin'] = array( 'sysadmin' );
$wgRemoveGroups['sysadmin'] = array( 'sysadmin' );

