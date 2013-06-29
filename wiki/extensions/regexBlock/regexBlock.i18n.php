<?php
/**
 * Internationalisation file for regexBlock extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Bartek ÅapiÅ„ski
 * @author Piotr Molski
 * @author Tomasz Klim
 */
$messages['en'] = array(
	'regexblock' => 'Regex block',
	'regexblock-already-blocked' => '$1 is already blocked.',
	'regexblock-block-log' => "User name or IP address '''$1''' has been blocked.",
	'regexblock-block-success' => 'Block succedeed',
	'regexblock-currently-blocked' => 'Currently blocked addresses:',
	'regexblock-desc' => 'Extension used for blocking users names and IP addresses with regular expressions. Contains both the blocking mechanism and a [[Special:Regexblock|special page]] to add/manage blocks',
	'regexblock-expire-duration' => '1 hour,2 hours,4 hours,6 hours,1 day,3 days,1 week,2 weeks,1 month,3 months,6 months,1 year,infinite', // FIXME: looks like bad i18n. See 'ipboptions' in core
	'regexblock-page-title' => 'Regular expression name block',
	'regexblockstats' => 'Regex block statistics',
	'regexblock-help' => 'Use the form below to block write access from a specific IP address or username.
This should be done only to prevent vandalism, and in accordance with policy.
\'\'This page will allow you to block even non-existing users, and will also block users with names similar to given, i.e. "Test" will be blocked along with "Test 2" etc.
You can also block full IP addresses, meaning that no one logging in from them will be able to edit pages.
Note: partial IP addresses will be treated as usernames in determining blocking.
If no reason is specified, a default generic reason will be used.\'\'',
	'regexblock-page-title-1' => 'Block address using regular expressions',
	'regexblock-reason-ip' => 'This IP address is prevented from editing due to vandalism or other disruption by you or by someone who shares your IP address.
If you believe this is in error, please [[$1|contact us]]',
	'regexblock-reason-name' => 'This username is prevented from editing due to vandalism or other disruption.
If you believe this is in error, please [[$1|contact us]]',
	'regexblock-reason-regex' => 'This username is prevented from editing due to vandalism or other disruption by a user with a similar name.
Please create an alternate user name or [[$1|contact us]] about the problem',
	'regexblock-form-username' => 'IP address or username:',
	'regexblock-form-reason' => 'Reason:',
	'regexblock-form-expiry' => 'Expiry:',
	'regexblock-form-match' => 'Exact match',
	'regexblock-form-account-block' => 'Block creation of new accounts',
	'regexblock-form-submit' => 'Block this user',
	'regexblock-form-submit-empty' => 'Give a user name or an IP address to block.',
	'regexblock-form-submit-regex' => 'Invalid regular expression.',
	'regexblock-form-submit-expiry' => 'Please specify an expiration period.',
	'regexblock-link' => 'block with regular expression',
	'regexblock-match-stats-record' => "$1 blocked '$2' on '$3' at '$4', logging from address '$5'",
	'regexblock-nodata-found' => 'No data found',
	'regexblock-stats-title' => 'Regex block statistics',
	'regexblock-unblock-success' => 'Unblock succeeded',
	'regexblock-unblock-log' => "User name or IP address '''$1''' has been unblocked.",
	'regexblock-unblock-error' => 'Error unblocking $1.
Probably there is no such user.',
	'regexblock-regex-filter' => ' or regex value:', // FIXME: bad i18n. Static formatting and lego
	'regexblock-view-blocked' => 'View blocked by:',
	'regexblock-view-all' => 'All',
	'regexblock-view-go' => 'Go',
	'regexblock-view-match' => '(exact match)',
	'regexblock-view-regex' => '(regex match)',
	'regexblock-view-account' => '(account creation block)',
	'regexblock-view-reason' => 'reason: $1',
	'regexblock-view-reason-default' => 'generic reason',
	'regexblock-view-block-infinite' => 'permanent block',
	'regexblock-view-block-by' => 'blocked by:',
	'regexblock-view-block-unblock' => 'unblock',
	'regexblock-view-stats' => 'stats',
	'regexblock-view-empty' => 'The list of blocked names and addresses is empty.',
	'regexblock-view-time' => 'on $1',
	'right-regexblock' => 'Block users from editing on all wikis on the wiki farm',
);

/** Message documentation (Message documentation)
 * @author Fryed-peach
 * @author Jon Harald SÃ¸by
 * @author Purodha
 * @author Raymond
 * @author SPQRobin
 * @author Siebrand
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'regexblock-already-blocked' => '{{Identical|$1 is already blocked}}',
	'regexblock-desc' => '{{desc}}',
	'regexblock-expire-duration' => '{{Identical|Infinite}}',
	'regexblock-reason-ip' => 'Parameter $1 is <tt>$wgContactLink</tt>, which is by default "<tt>Special:Contact</tt>".',
	'regexblock-reason-name' => 'Parameter $1 is <tt>$wgContactLink</tt>, which is by default "<tt>Special:Contact</tt>".',
	'regexblock-reason-regex' => 'Parameter $1 is <tt>$wgContactLink</tt>, which is by default "<tt>Special:Contact</tt>".',
	'regexblock-form-username' => '{{Identical/IP address or username}}',
	'regexblock-form-reason' => '{{Identical|Reason}}',
	'regexblock-form-expiry' => '{{Identical|Expiry}}',
	'regexblock-form-match' => '{{Identical|Exact match}}',
	'regexblock-match-stats-record' => 'Parameters are:
* $1: regex match
* $2: username
* $3: database name
* $4: date/time
* $5: IP address
* $6: isolated date of $4
* $7: isolated time of $4',
	'regexblock-regex-filter' => 'This is a field name for a text field in a form. In the field a user is expected to type a regex filter. If a regex filter is present, the field is prefilled with it.',
	'regexblock-view-blocked' => 'This is a label followed by a dropdown list of all users who have ever used regexBlock on the wiki, allowing the viewer to filter down the list of regexBlocks, i.e. see all blocks performed by User:X if users X, Y and Z have used regexBlock tool. There is [[mw:File:RegexBlock.png|a screenshot]].',
	'regexblock-view-all' => '{{Identical|All}}',
	'regexblock-view-go' => '{{Identical|Go}}',
	'regexblock-view-match' => '{{Identical|Exact match}}',
	'regexblock-view-time' => '* $1 is a date/time
* $2 is a date (optional)
* $3 is a time (optional)',
	'right-regexblock' => '{{doc-right|regexblock}}',
);

/** Niuean (ko e vagahau NiuÄ“)
 * @author Jose77
 */
$messages['niu'] = array(
	'regexblock-form-reason' => 'Kakano:',
	'regexblock-view-go' => 'Fano',
);

/** Afrikaans (Afrikaans)
 * @author Arnobarnard
 * @author Naudefj
 * @author SPQRobin
 */
$messages['af'] = array(
	'regexblock-already-blocked' => '$1 is reeds geblok.',
	'regexblock-expire-duration' => '1 uur,2 uur,4 uur,6 uur,1 dag,3 dae,1 week,2 weke,1 maand,3 maande,6 maande,1 jaar,onbepaald',
	'regexblock-form-username' => 'IP-adres of gebruikersnaam:',
	'regexblock-form-reason' => 'Rede:',
	'regexblock-form-expiry' => 'Verval:',
	'regexblock-form-match' => 'Presiese resultaat',
	'regexblock-form-submit' => 'Blokkeer die gebruiker',
	'regexblock-nodata-found' => 'Geen data gevind nie',
	'regexblock-view-all' => 'Alles',
	'regexblock-view-go' => 'Laat waai',
	'regexblock-view-match' => '(presiese resultaat)',
	'regexblock-view-reason' => 'rede: $1',
	'regexblock-view-reason-default' => 'algemene rede',
	'regexblock-view-block-infinite' => 'permanente blokkade',
	'regexblock-view-block-by' => 'geblokkeer deur:',
	'regexblock-view-stats' => 'statistieke',
	'regexblock-view-time' => 'op $1',
);

/** Gheg Albanian (GegÃ«)
 * @author Mdupont
 */
$messages['aln'] = array(
	'regexblock-unblock-success' => 'Zhbllokuar sukses',
	'regexblock-unblock-log' => "''$1''Emri i pÃ«rdoruesit ose IP adresa ',' Ã«shtÃ« Ã§bllokoi.",
	'regexblock-unblock-error' => 'Gabim zhbllokimin e $1. Ndoshta nuk ka pÃ«rdorues tÃ« tillÃ«.',
	'regexblock-regex-filter' => 'ose vlera regex:',
	'regexblock-view-blocked' => 'View bllokuar nga:',
	'regexblock-view-all' => 'TÃ« gjithÃ«',
	'regexblock-view-go' => 'Shkoj',
	'regexblock-view-match' => '(Ndeshje e saktÃ«)',
	'regexblock-view-regex' => '(Ndeshje regex)',
	'regexblock-view-account' => '(Krijimi llogari bllok)',
	'regexblock-view-reason' => 'arsye: $1',
	'regexblock-view-reason-default' => 'arsye gjenerike',
	'regexblock-view-block-infinite' => 'bllok i pÃ«rhershÃ«m',
	'regexblock-view-block-by' => 'bllokuar nga:',
	'regexblock-view-block-unblock' => 'zhbllokuar',
	'regexblock-view-stats' => 'Statistikat',
	'regexblock-view-empty' => 'Lista e emrave tÃ« bllokuar dhe adresat Ã«shtÃ« e zbrazÃ«t.',
	'regexblock-view-time' => 'nÃ« $1',
	'right-regexblock' => 'Blloko pÃ«rdoruesit nga redaktimi nÃ« tÃ« gjitha wikis nÃ« fermÃ« wiki',
);

/** Amharic (áŠ áˆ›áˆ­áŠ›)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'regexblock-form-reason' => 'áˆáŠ­áŠ•á‹«á‰µ:',
	'regexblock-view-all' => 'áˆáˆ‰',
);

/** Aragonese (aragonÃ©s)
 * @author Juanpabl
 */
$messages['an'] = array(
	'regexblock-already-blocked' => '$1 ya yera bloqueyato.',
	'regexblock-form-username' => "Adreza IP u nombre d'usuario:",
	'regexblock-form-reason' => 'RazÃ³n:',
	'regexblock-view-all' => 'Todas',
);

/** Arabic (Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©)
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'regexblock' => 'ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… Ù„Ù…Ù†Ø¹',
	'regexblock-already-blocked' => '$1 Ù…Ù…Ù†ÙˆØ¹ Ø¨Ø§Ù„ÙØ¹Ù„.',
	'regexblock-block-log' => "Ø§Ø³Ù… Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù… Ø£Ùˆ Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨ÙŠ '''$1''' ØªÙ… Ù…Ù†Ø¹Ù‡.",
	'regexblock-block-success' => 'Ø§Ù„Ù…Ù†Ø¹ Ù†Ø¬Ø­',
	'regexblock-currently-blocked' => 'Ø§Ù„Ø¹Ù†Ø§ÙˆÙŠÙ† Ø§Ù„Ù…Ù…Ù†ÙˆØ¹Ø© Ø­Ø§Ù„ÙŠØ§:',
	'regexblock-desc' => 'Ø§Ù…ØªØ¯Ø§Ø¯ ÙŠØ³ØªØ®Ø¯Ù… Ù„Ù…Ù†Ø¹ Ø£Ø³Ù…Ø§Ø¡ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† ÙˆØ¹Ù†Ø§ÙˆÙŠÙ† Ø§Ù„Ø£ÙŠØ¨ÙŠ Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… ØªØ¹Ø¨ÙŠØ±Ø§Øª Ù…Ù†ØªØ¸Ù…Ø©. ÙŠØ­ØªÙˆÙŠ Ø¹Ù„Ù‰ Ù…ÙŠÙƒØ§Ù†ÙŠÙƒÙŠØ© Ø§Ù„Ù…Ù†Ø¹ Ùˆ [[Special:Regexblock|ØµÙØ­Ø© Ø®Ø§ØµØ©]] Ù„Ø¥Ø¶Ø§ÙØ©/Ø§Ù„ØªØ­ÙƒÙ… Ø¨Ø¹Ù…Ù„ÙŠØ§Øª Ø§Ù„Ù…Ù†Ø¹',
	'regexblock-expire-duration' => '1 Ø³Ø§Ø¹Ø©,2 Ø³Ø§Ø¹Ø©,4 Ø³Ø§Ø¹Ø©,6 Ø³Ø§Ø¹Ø©,1 ÙŠÙˆÙ…,3 ÙŠÙˆÙ…,1 Ø£Ø³Ø¨ÙˆØ¹,2 Ø£Ø³Ø¨ÙˆØ¹,1 Ø´Ù‡Ø±,3 Ø´Ù‡Ø±,6 Ø´Ù‡Ø±,1 Ø³Ù†Ø©,Ù„Ø§ Ù†Ù‡Ø§Ø¦ÙŠ',
	'regexblock-page-title' => 'Ù…Ù†Ø¹ Ø§Ù„Ø§Ø³Ù… Ø¨ÙˆØ§Ø³Ø·Ø© ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù…',
	'regexblockstats' => 'Ø¥Ø­ØµØ§Ø¡Ø§Øª ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†Ø¹ Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
	'regexblock-help' => 'Ø§Ø³ØªØ®Ø¯Ù… Ø§Ù„Ø§Ø³ØªÙ…Ø§Ø±Ø© Ø¨Ø§Ù„Ø£Ø³ÙÙ„ Ù„Ù…Ù†Ø¹ Ø§Ù„ØªØ­Ø±ÙŠØ± Ù…Ù† Ø¹Ù†ÙˆØ§Ù† Ø£ÙŠØ¨ÙŠ Ø£Ùˆ Ø§Ø³Ù… Ù…Ø³ØªØ®Ø¯Ù… Ù…Ø­Ø¯Ø¯.
Ù‡Ø°Ø§ ÙŠÙ†Ø¨ØºÙŠ Ø£Ù† ÙŠØªÙ… ÙÙ‚Ø· Ù„Ù…Ù†Ø¹ Ø§Ù„ØªØ®Ø±ÙŠØ¨ØŒ ÙˆØ¨Ø§Ù„ØªÙˆØ§ÙÙ‚ Ù…Ø¹ Ø§Ù„Ø³ÙŠØ§Ø³Ø©.
\'\'Ù‡Ø°Ù‡ Ø§Ù„ØµÙØ­Ø© Ø³ØªØ³Ù…Ø­ Ù„Ùƒ Ø¨Ù…Ù†Ø¹ Ø­ØªÙ‰ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† ØºÙŠØ± Ø§Ù„Ù…ÙˆØ¬ÙˆØ¯ÙŠÙ†ØŒ ÙˆØ³ØªÙ…Ù†Ø¹ Ø£ÙŠØ¶Ø§ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† Ø¨Ø£Ø³Ù…Ø§Ø¡ Ù…Ø´Ø§Ø¨Ù‡Ø© Ù„Ù„Ù…Ø¹Ø·Ø§Ø©ØŒØ£ÙŠ Ø£Ù† "Test" Ø³ÙŠØªÙ… Ù…Ù†Ø¹Ù‡Ø§ Ø¨Ø§Ù„Ø¥Ø¶Ø§ÙØ© Ø¥Ù„Ù‰ "Test 2"Ø¥Ù„Ù‰ Ø¢Ø®Ø±Ù‡.
ÙŠÙ…ÙƒÙ†Ùƒ Ø£ÙŠØ¶Ø§ Ù…Ù†Ø¹ Ø¹Ù†Ø§ÙˆÙŠÙ† Ø£ÙŠØ¨ÙŠ ÙƒØ§Ù…Ù„Ø©ØŒ Ù…Ù…Ø§ ÙŠØ¹Ù†ÙŠ Ø£Ù†Ù‡ Ù„Ø§ Ø£Ø­Ø¯ Ù…Ø³Ø¬Ù„Ø§ Ù„Ù„Ø¯Ø®ÙˆÙ„ Ù…Ù†Ù‡Ø§ Ø³ÙŠÙ…ÙƒÙ†Ù‡ ØªØ¹Ø¯ÙŠÙ„ Ø§Ù„ØµÙØ­Ø§Øª.
Ù…Ù„Ø§Ø­Ø¸Ø©: Ø¹Ù†Ø§ÙˆÙŠÙ† Ø§Ù„Ø£ÙŠØ¨ÙŠ Ø§Ù„Ø¬Ø²Ø¦ÙŠØ© Ø³ÙŠØªÙ… Ù…Ø¹Ø§Ù…Ù„ØªÙ‡Ø§ Ø¨ÙˆØ§Ø³Ø·Ø© Ø£Ø³Ù…Ø§Ø¡ Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† ÙÙŠ ØªØ­Ø¯ÙŠØ¯ Ø§Ù„Ù…Ù†Ø¹.
Ù„Ùˆ Ù„Ù… ÙŠØªÙ… ØªØ­Ø¯ÙŠØ¯ Ø³Ø¨Ø¨ØŒ Ø³ÙŠØªÙ… Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø³Ø¨Ø¨ Ø§ÙØªØ±Ø§Ø¶ÙŠ ØªÙ„Ù‚Ø§Ø¦ÙŠ.\'\'',
	'regexblock-page-title-1' => 'Ù…Ù†Ø¹ Ø¹Ù†ÙˆØ§Ù† Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… ØªØ¹Ø¨ÙŠØ±Ø§Øª Ù…Ù†ØªØ¸Ù…Ø©',
	'regexblock-reason-ip' => 'Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨ÙŠ Ù‡Ø°Ø§ Ù…Ù…Ù†ÙˆØ¹ Ù†ØªÙŠØ¬Ø© Ù„Ù„ØªØ®Ø±ÙŠØ¨ Ø£Ùˆ Ø¥Ø³Ø§Ø¡Ø© Ø£Ø®Ø±Ù‰ Ø¨ÙˆØ§Ø³Ø·ØªÙƒ Ø£Ùˆ Ø¨ÙˆØ§Ø³Ø·Ø© Ø´Ø®Øµ ÙŠØ´Ø§Ø±Ùƒ ÙÙŠ Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨ÙŠ Ø§Ù„Ø®Ø§Øµ Ø¨Ùƒ.
Ù„Ùˆ Ø£Ù†Ùƒ ØªØ¹ØªÙ‚Ø¯ Ø£Ù† Ù‡Ø°Ø§ Ø®Ø·Ø£ØŒ Ù…Ù† ÙØ¶Ù„Ùƒ [[$1|Ø§ØªØµÙ„ Ø¨Ù†Ø§]]',
	'regexblock-reason-name' => 'Ø§Ø³Ù… Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù… Ù‡Ø°Ø§ Ù…Ù…Ù†ÙˆØ¹ Ù…Ù† Ø§Ù„ØªØ­Ø±ÙŠØ± Ù†ØªÙŠØ¬Ø© Ù„Ù„ØªØ®Ø±ÙŠØ¨ Ø£Ùˆ Ø¥Ø³Ø§Ø¡Ø© Ø£Ø®Ø±Ù‰.
Ù„Ùˆ ÙƒÙ†Øª ØªØ¹ØªÙ‚Ø¯ Ø£Ù† Ù‡Ø°Ø§ Ø®Ø·Ø£ØŒ Ù…Ù† ÙØ¶Ù„Ùƒ [[$1|Ø§ØªØµÙ„ Ø¨Ù†Ø§]]',
	'regexblock-reason-regex' => 'Ø§Ø³Ù… Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù… Ù‡Ø°Ø§ Ù…Ù…Ù†ÙˆØ¹ Ù…Ù† Ø§Ù„ØªØ­Ø±ÙŠØ± Ù†ØªÙŠØ¬Ø© Ù„Ù„ØªØ®Ø±ÙŠØ¨ Ø£Ùˆ Ø¥Ø³Ø§Ø¡Ø© Ø£Ø®Ø±Ù‰ Ø¨ÙˆØ§Ø³Ø·Ø© Ù…Ø³ØªØ®Ø¯Ù… Ø¨Ø§Ø³Ù… Ù…Ø´Ø§Ø¨Ù‡.
Ù…Ù† ÙØ¶Ù„Ùƒ Ø£Ù†Ø´ÙŠØ¡ Ø§Ø³Ù… Ù…Ø³ØªØ®Ø¯Ù… Ø¨Ø¯ÙŠÙ„ Ø£Ùˆ [[$1|Ø§ØªØµÙ„ Ø¨Ù†Ø§]] Ø­ÙˆÙ„ Ø§Ù„Ù…Ø´ÙƒÙ„Ø©',
	'regexblock-form-username' => 'Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨ÙŠ Ø£Ùˆ Ø§Ø³Ù… Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…:',
	'regexblock-form-reason' => 'Ø§Ù„Ø³Ø¨Ø¨:',
	'regexblock-form-expiry' => 'Ø§Ù„Ø§Ù†ØªÙ‡Ø§Ø¡:',
	'regexblock-form-match' => 'ØªØ·Ø§Ø¨Ù‚ ØªØ§Ù…',
	'regexblock-form-account-block' => 'Ù…Ù†Ø¹ Ø¥Ù†Ø´Ø§Ø¡ Ø§Ù„Ø­Ø³Ø§Ø¨Ø§Øª Ø§Ù„Ø¬Ø¯ÙŠØ¯Ø©',
	'regexblock-form-submit' => 'Ø§Ù…Ù†Ø¹ Ù‡Ø°Ø§ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…',
	'regexblock-form-submit-empty' => 'Ø£Ø¹Ø· Ø§Ø³Ù… Ù…Ø³ØªØ®Ø¯Ù… Ø£Ùˆ Ø¹Ù†ÙˆØ§Ù† Ø£ÙŠØ¨ÙŠ Ù„Ù„Ù…Ù†Ø¹.',
	'regexblock-form-submit-regex' => 'ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… ØºÙŠØ± ØµØ­ÙŠØ­.',
	'regexblock-form-submit-expiry' => 'Ù…Ù† ÙØ¶Ù„Ùƒ Ø­Ø¯Ø¯ ØªØ§Ø±ÙŠØ® Ø§Ù†ØªÙ‡Ø§Ø¡.',
	'regexblock-link' => 'Ù…Ù†Ø¹ Ø¨ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù…',
	'regexblock-match-stats-record' => "$1 Ù…Ù†Ø¹ '$2' ÙÙŠ '$3' ÙÙŠ '$4'ØŒ ØªØ³Ø¬ÙŠÙ„ Ù…Ù† Ø§Ù„Ø¹Ù†ÙˆØ§Ù† '$5'",
	'regexblock-nodata-found' => 'Ù„Ø§ Ø¨ÙŠØ§Ù†Ø§Øª ØªÙ… Ø§Ù„Ø¹Ø«ÙˆØ± Ø¹Ù„ÙŠÙ‡Ø§',
	'regexblock-stats-title' => 'Ø¥Ø­ØµØ§Ø¡Ø§Øª ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†Ø¹ Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
	'regexblock-unblock-success' => 'Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ù†Ø¬Ø­',
	'regexblock-unblock-log' => "Ø§Ø³Ù… Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù… Ø£Ùˆ Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨ÙŠ '''$1''' ØªÙ… Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ø¹Ù†Ù‡.",
	'regexblock-unblock-error' => 'Ø®Ø·Ø£ Ø£Ø«Ù†Ø§Ø¡ Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ø¹Ù† $1.
Ø¹Ù„Ù‰ Ø§Ù„Ø£Ø±Ø¬Ø­ Ù„Ø§ ÙŠÙˆØ¬Ø¯ Ù…Ø³ØªØ®Ø¯Ù… Ø¨Ù‡Ø°Ø§ Ø§Ù„Ø§Ø³Ù….',
	'regexblock-regex-filter' => '  Ø£Ùˆ Ù‚ÙŠÙ…Ø© Ø§Ù„Ø±ÙŠØ¬ÙŠÙƒØ³:',
	'regexblock-view-blocked' => 'Ø¹Ø±Ø¶ Ø§Ù„Ù…Ù…Ù†ÙˆØ¹ Ø¨ÙˆØ§Ø³Ø·Ø©:',
	'regexblock-view-all' => 'Ø§Ù„ÙƒÙ„',
	'regexblock-view-go' => 'Ø§Ø°Ù‡Ø¨',
	'regexblock-view-match' => '(ØªØ·Ø§Ø¨Ù‚ ØªØ§Ù…)',
	'regexblock-view-regex' => '(ØªØ·Ø§Ø¨Ù‚ ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù…)',
	'regexblock-view-account' => '(Ù…Ù†Ø¹ Ø¥Ù†Ø´Ø§Ø¡ Ø­Ø³Ø§Ø¨)',
	'regexblock-view-reason' => 'Ø§Ù„Ø³Ø¨Ø¨: $1',
	'regexblock-view-reason-default' => 'Ø³Ø¨Ø¨ ØªÙ„Ù‚Ø§Ø¦ÙŠ',
	'regexblock-view-block-infinite' => 'Ù…Ù†Ø¹ Ø¯Ø§Ø¦Ù…',
	'regexblock-view-block-by' => 'Ù…Ù…Ù†ÙˆØ¹ Ø¨ÙˆØ§Ø³Ø·Ø©:',
	'regexblock-view-block-unblock' => 'Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹',
	'regexblock-view-stats' => 'Ø¥Ø­ØµØ§Ø¡Ø§Øª',
	'regexblock-view-empty' => 'Ù‚Ø§Ø¦Ù…Ø© Ø§Ù„Ø£Ø³Ù…Ø§Ø¡ ÙˆØ§Ù„Ø¹Ù†Ø§ÙˆÙŠÙ† Ø§Ù„Ù…Ù…Ù†ÙˆØ¹Ø© ÙØ§Ø±ØºØ©.',
	'regexblock-view-time' => 'ÙÙŠ $1',
	'right-regexblock' => 'Ù…Ù†Ø¹ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† Ù…Ù† Ø§Ù„ØªØ¹Ø¯ÙŠÙ„ ÙÙŠ ÙƒÙ„ Ø§Ù„ÙˆÙŠÙƒÙŠØ§Øª ÙÙŠ Ù…Ø²Ø±Ø¹Ø© Ø§Ù„ÙˆÙŠÙƒÙŠ',
);

/** Aramaic (ÜÜªÜ¡ÜÜ)
 * @author Basharh
 */
$messages['arc'] = array(
	'regexblock-form-reason' => 'Ü¥Ü Ü¬Ü:',
	'regexblock-view-all' => 'ÜŸÜ ',
	'regexblock-view-go' => 'Ü™Ü ',
	'regexblock-view-reason' => 'Ü¥Ü Ü¬Ü: $1',
	'regexblock-view-block-by' => 'ÜšÜªÜÜ¡Ü Ü’ÜÜ•:',
	'regexblock-view-block-unblock' => 'Ü›Ü¥Ü˜Ü¢ ÜšÜªÜ¡Ü',
);

/** Egyptian Spoken Arabic (Ù…ØµØ±Ù‰)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'regexblock' => 'ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… Ù„Ù…Ù†Ø¹',
	'regexblock-already-blocked' => '$1 Ù…Ù…Ù†ÙˆØ¹ Ø¨Ø§Ù„ÙØ¹Ù„.',
	'regexblock-block-log' => "Ø§Ø³Ù… Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù… Ø£Ùˆ Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨Ù‰ '''$1''' ØªÙ… Ù…Ù†Ø¹Ù‡.",
	'regexblock-block-success' => 'Ø§Ù„Ù…Ù†Ø¹ Ù†Ø¬Ø­',
	'regexblock-currently-blocked' => 'Ø§Ù„Ø¹Ù†Ø§ÙˆÙŠÙ† Ø§Ù„Ù…Ù…Ù†ÙˆØ¹Ø© Ø­Ø§Ù„ÙŠØ§:',
	'regexblock-desc' => 'Ø§Ù…ØªØ¯Ø§Ø¯ ÙŠØ³ØªØ®Ø¯Ù… Ù„Ù…Ù†Ø¹ Ø£Ø³Ù…Ø§Ø¡ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† ÙˆØ¹Ù†Ø§ÙˆÙŠÙ† Ø§Ù„Ø£ÙŠØ¨Ù‰ Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… ØªØ¹Ø¨ÙŠØ±Ø§Øª Ù…Ù†ØªØ¸Ù…Ø©. ÙŠØ­ØªÙˆÙ‰ Ø¹Ù„Ù‰ Ù…ÙŠÙƒØ§Ù†ÙŠÙƒÙŠØ© Ø§Ù„Ù…Ù†Ø¹ Ùˆ [[Special:Regexblock|ØµÙØ­Ø© Ø®Ø§ØµØ©]] Ù„Ø¥Ø¶Ø§ÙØ©/Ø§Ù„ØªØ­ÙƒÙ… Ø¨Ø¹Ù…Ù„ÙŠØ§Øª Ø§Ù„Ù…Ù†Ø¹',
	'regexblock-expire-duration' => '1 Ø³Ø§Ø¹Ø©,2 Ø³Ø§Ø¹Ø©,4 Ø³Ø§Ø¹Ø©,6 Ø³Ø§Ø¹Ø©,1 ÙŠÙˆÙ…,3 ÙŠÙˆÙ…,1 Ø£Ø³Ø¨ÙˆØ¹,2 Ø£Ø³Ø¨ÙˆØ¹,1 Ø´Ù‡Ø±,3 Ø´Ù‡Ø±,6 Ø´Ù‡Ø±,1 Ø³Ù†Ø©,Ù„Ø§ Ù†Ù‡Ø§Ø¦Ù‰',
	'regexblock-page-title' => 'Ù…Ù†Ø¹ Ø§Ù„Ø§Ø³Ù… Ø¨ÙˆØ§Ø³Ø·Ø© ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù…',
	'regexblockstats' => 'Ø¥Ø­ØµØ§Ø¡Ø§Øª ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†Ø¹ Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
	'regexblock-help' => 'Ø§Ø³ØªØ®Ø¯Ù… Ø§Ù„Ø§Ø³ØªÙ…Ø§Ø±Ø© Ø¨Ø§Ù„Ø£Ø³ÙÙ„ Ù„Ù…Ù†Ø¹ Ø§Ù„ØªØ­Ø±ÙŠØ± Ù…Ù† Ø¹Ù†ÙˆØ§Ù† Ø£ÙŠØ¨Ù‰ Ø£Ùˆ Ø§Ø³Ù… Ù…Ø³ØªØ®Ø¯Ù… Ù…Ø­Ø¯Ø¯.
Ù‡Ø°Ø§ ÙŠÙ†Ø¨ØºÙ‰ Ø£Ù† ÙŠØªÙ… ÙÙ‚Ø· Ù„Ù…Ù†Ø¹ Ø§Ù„ØªØ®Ø±ÙŠØ¨ØŒ ÙˆØ¨Ø§Ù„ØªÙˆØ§ÙÙ‚ Ù…Ø¹ Ø§Ù„Ø³ÙŠØ§Ø³Ø©.
\'\'Ù‡Ø°Ù‡ Ø§Ù„ØµÙØ­Ø© Ø³ØªØ³Ù…Ø­ Ù„Ùƒ Ø¨Ù…Ù†Ø¹ Ø­ØªÙ‰ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† ØºÙŠØ± Ø§Ù„Ù…ÙˆØ¬ÙˆØ¯ÙŠÙ†ØŒ ÙˆØ³ØªÙ…Ù†Ø¹ Ø£ÙŠØ¶Ø§ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† Ø¨Ø£Ø³Ù…Ø§Ø¡ Ù…Ø´Ø§Ø¨Ù‡Ø© Ù„Ù„Ù…Ø¹Ø·Ø§Ø©ØŒØ£Ù‰ Ø£Ù† "Test" Ø³ÙŠØªÙ… Ù…Ù†Ø¹Ù‡Ø§ Ø¨Ø§Ù„Ø¥Ø¶Ø§ÙØ© Ø¥Ù„Ù‰ "Test 2"Ø¥Ù„Ù‰ Ø¢Ø®Ø±Ù‡.
ÙŠÙ…ÙƒÙ†Ùƒ Ø£ÙŠØ¶Ø§ Ù…Ù†Ø¹ Ø¹Ù†Ø§ÙˆÙŠÙ† Ø£ÙŠØ¨Ù‰ ÙƒØ§Ù…Ù„Ø©ØŒ Ù…Ù…Ø§ ÙŠØ¹Ù†Ù‰ Ø£Ù†Ù‡ Ù„Ø§ Ø£Ø­Ø¯ Ù…Ø³Ø¬Ù„Ø§ Ù„Ù„Ø¯Ø®ÙˆÙ„ Ù…Ù†Ù‡Ø§ Ø³ÙŠÙ…ÙƒÙ†Ù‡ ØªØ¹Ø¯ÙŠÙ„ Ø§Ù„ØµÙØ­Ø§Øª.
Ù…Ù„Ø§Ø­Ø¸Ø©: Ø¹Ù†Ø§ÙˆÙŠÙ† Ø§Ù„Ø£ÙŠØ¨Ù‰ Ø§Ù„Ø¬Ø²Ø¦ÙŠØ© Ø³ÙŠØªÙ… Ù…Ø¹Ø§Ù…Ù„ØªÙ‡Ø§ Ø¨ÙˆØ§Ø³Ø·Ø© Ø£Ø³Ù…Ø§Ø¡ Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† ÙÙ‰ ØªØ­Ø¯ÙŠØ¯ Ø§Ù„Ù…Ù†Ø¹.
Ù„Ùˆ Ù„Ù… ÙŠØªÙ… ØªØ­Ø¯ÙŠØ¯ Ø³Ø¨Ø¨ØŒ Ø³ÙŠØªÙ… Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø³Ø¨Ø¨ Ø§ÙØªØ±Ø§Ø¶Ù‰ ØªÙ„Ù‚Ø§Ø¦Ù‰.\'\'',
	'regexblock-page-title-1' => 'Ù…Ù†Ø¹ Ø¹Ù†ÙˆØ§Ù† Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… ØªØ¹Ø¨ÙŠØ±Ø§Øª Ù…Ù†ØªØ¸Ù…Ø©',
	'regexblock-reason-ip' => 'Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨Ù‰ Ù‡Ø°Ø§ Ù…Ù…Ù†ÙˆØ¹ Ù†ØªÙŠØ¬Ø© Ù„Ù„ØªØ®Ø±ÙŠØ¨ Ø£Ùˆ Ø¥Ø³Ø§Ø¡Ø© Ø£Ø®Ø±Ù‰ Ø¨ÙˆØ§Ø³Ø·ØªÙƒ Ø£Ùˆ Ø¨ÙˆØ§Ø³Ø·Ø© Ø´Ø®Øµ ÙŠØ´Ø§Ø±Ùƒ ÙÙ‰ Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨Ù‰ Ø§Ù„Ø®Ø§Øµ Ø¨Ùƒ.
Ù„Ùˆ Ø£Ù†Ùƒ ØªØ¹ØªÙ‚Ø¯ Ø£Ù† Ù‡Ø°Ø§ Ø®Ø·Ø£ØŒ Ù…Ù† ÙØ¶Ù„Ùƒ [[$1|Ø§ØªØµÙ„ Ø¨Ù†Ø§]]',
	'regexblock-reason-name' => 'Ø§Ø³Ù… Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù… Ù‡Ø°Ø§ Ù…Ù…Ù†ÙˆØ¹ Ù…Ù† Ø§Ù„ØªØ­Ø±ÙŠØ± Ù†ØªÙŠØ¬Ø© Ù„Ù„ØªØ®Ø±ÙŠØ¨ Ø£Ùˆ Ø¥Ø³Ø§Ø¡Ø© Ø£Ø®Ø±Ù‰.
Ù„Ùˆ ÙƒÙ†Øª ØªØ¹ØªÙ‚Ø¯ Ø£Ù† Ù‡Ø°Ø§ Ø®Ø·Ø£ØŒ Ù…Ù† ÙØ¶Ù„Ùƒ [[$1|Ø§ØªØµÙ„ Ø¨Ù†Ø§]]',
	'regexblock-reason-regex' => 'Ø§Ø³Ù… Ø§Ù„ÙŠÙˆØ²Ø± Ø¯Ù‡ Ù…Ù…Ù†ÙˆØ¹ Ù…Ù† Ø§Ù„ØªØ­Ø±ÙŠØ± Ù†ØªÙŠØ¬Ø© Ù„Ù„ØªØ®Ø±ÙŠØ¨ Ø£Ùˆ Ø¥Ø³Ø§Ø¡Ø© ØªØ§Ù†ÙŠÙ‡ Ø¨ÙˆØ§Ø³Ø·Ø© ÙŠÙˆØ²Ø± Ø¨Ø¥Ø³Ù… Ù…Ø´Ø§Ø¨Ù‡.
Ù…Ù† ÙØ¶Ù„Ùƒ Ø£Ù†Ø´Ù‰Ø¡ Ø§Ø³Ù… ÙŠÙˆØ²Ø± Ø¨Ø¯ÙŠÙ„ Ø£Ùˆ [[$1|Ø§ØªØµÙ„ Ø¨ÙŠÙ†Ø§]] Ø¨Ø®ØµÙˆØµ Ø§Ù„Ù…Ø´ÙƒÙ„Ø©',
	'regexblock-form-username' => 'Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨Ù‰ Ø£Ùˆ Ø§Ø³Ù… Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…:',
	'regexblock-form-reason' => 'Ø§Ù„Ø³Ø¨Ø¨:',
	'regexblock-form-expiry' => 'Ø§Ù„Ø§Ù†ØªÙ‡Ø§Ø¡:',
	'regexblock-form-match' => 'ØªØ·Ø§Ø¨Ù‚ ØªØ§Ù…',
	'regexblock-form-account-block' => 'Ù…Ù†Ø¹ Ø¥Ù†Ø´Ø§Ø¡ Ø§Ù„Ø­Ø³Ø§Ø¨Ø§Øª Ø§Ù„Ø¬Ø¯ÙŠØ¯Ø©',
	'regexblock-form-submit' => 'Ù…Ù†Ø¹ Ù‡Ø°Ø§ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…',
	'regexblock-form-submit-empty' => 'Ø£Ø¹Ø· Ø§Ø³Ù… Ù…Ø³ØªØ®Ø¯Ù… Ø£Ùˆ Ø¹Ù†ÙˆØ§Ù† Ø£ÙŠØ¨Ù‰ Ù„Ù„Ù…Ù†Ø¹.',
	'regexblock-form-submit-regex' => 'ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… ØºÙŠØ± ØµØ­ÙŠØ­.',
	'regexblock-form-submit-expiry' => 'Ù…Ù† ÙØ¶Ù„Ùƒ Ø­Ø¯Ø¯ ØªØ§Ø±ÙŠØ® Ø§Ù†ØªÙ‡Ø§Ø¡.',
	'regexblock-match-stats-record' => "$1 Ù…Ù†Ø¹ '$2' ÙÙ‰ '$3' ÙÙ‰ '$4'ØŒ ØªØ³Ø¬ÙŠÙ„ Ù…Ù† Ø§Ù„Ø¹Ù†ÙˆØ§Ù† '$5'",
	'regexblock-nodata-found' => 'Ù…Ø§ÙÙŠØ´ Ø¨ÙŠØ§Ù†Ø§Øª Ø§ØªÙ„Ù‚Øª',
	'regexblock-stats-title' => 'Ø¥Ø­ØµØ§Ø¡Ø§Øª ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†Ø¹ Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
	'regexblock-unblock-success' => 'Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ù†Ø¬Ø­',
	'regexblock-unblock-log' => "Ø§Ø³Ù… Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù… Ø£Ùˆ Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø£ÙŠØ¨Ù‰ '''$1''' ØªÙ… Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ø¹Ù†Ù‡.",
	'regexblock-unblock-error' => 'Ø®Ø·Ø£ Ø£Ø«Ù†Ø§Ø¡ Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ø¹Ù† $1.
Ø¹Ù„Ù‰ Ø§Ù„Ø£Ø±Ø¬Ø­ Ù„Ø§ ÙŠÙˆØ¬Ø¯ Ù…Ø³ØªØ®Ø¯Ù… Ø¨Ù‡Ø°Ø§ Ø§Ù„Ø§Ø³Ù….',
	'regexblock-regex-filter' => '   Ø£Ùˆ Ù‚ÙŠÙ…Ø© Ø§Ù„Ø±ÙŠØ¬ÙŠÙƒØ³:',
	'regexblock-view-blocked' => 'Ø¹Ø±Ø¶ Ø§Ù„Ù…Ù…Ù†ÙˆØ¹ Ø¨ÙˆØ§Ø³Ø·Ø©:',
	'regexblock-view-all' => 'Ø§Ù„ÙƒÙ„',
	'regexblock-view-go' => 'Ø§Ø°Ù‡Ø¨',
	'regexblock-view-match' => '(ØªØ·Ø§Ø¨Ù‚ ØªØ§Ù…)',
	'regexblock-view-regex' => '(ØªØ·Ø§Ø¨Ù‚ ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù…)',
	'regexblock-view-account' => '(Ù…Ù†Ø¹ Ø¥Ù†Ø´Ø§Ø¡ Ø­Ø³Ø§Ø¨)',
	'regexblock-view-reason' => 'Ø§Ù„Ø³Ø¨Ø¨: $1',
	'regexblock-view-reason-default' => 'Ø³Ø¨Ø¨ ØªÙ„Ù‚Ø§Ø¦ÙŠ',
	'regexblock-view-block-infinite' => 'Ù…Ù†Ø¹ Ø¯Ø§Ø¦Ù…',
	'regexblock-view-block-by' => 'Ù…Ù…Ù†ÙˆØ¹ Ø¨ÙˆØ§Ø³Ø·Ø©:',
	'regexblock-view-block-unblock' => 'Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹',
	'regexblock-view-stats' => 'Ø³ØªØ§ØªØ³',
	'regexblock-view-empty' => 'Ù‚Ø§Ø¦Ù…Ø© Ø§Ù„Ø£Ø³Ù…Ø§Ø¡ ÙˆØ§Ù„Ø¹Ù†Ø§ÙˆÙŠÙ† Ø§Ù„Ù…Ù…Ù†ÙˆØ¹Ø© ÙØ§Ø±ØºØ©.',
	'regexblock-view-time' => 'ÙÙ‰ $1',
	'right-regexblock' => 'Ù…Ù†Ø¹ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† Ù…Ù† Ø§Ù„ØªØ¹Ø¯ÙŠÙ„ ÙÙ‰ ÙƒÙ„ Ø§Ù„ÙˆÙŠÙƒÙŠØ§Øª ÙÙ‰ Ù…Ø²Ø±Ø¹Ø© Ø§Ù„ÙˆÙŠÙƒÙ‰',
);

/** Azerbaijani (azÉ™rbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'regexblock-form-reason' => 'SÉ™bÉ™b:',
	'regexblock-view-all' => 'HamÄ±sÄ±',
);

/** Belarusian (Ð±ÐµÐ»Ð°Ñ€ÑƒÑÐºÐ°Ñ)
 * @author Ð¢ÐµÑÑ‚
 */
$messages['be'] = array(
	'regexblock-form-reason' => 'ÐŸÑ€Ñ‹Ñ‡Ñ‹Ð½Ð°:',
);

/** Belarusian (TaraÅ¡kievica orthography) (Ð±ÐµÐ»Ð°Ñ€ÑƒÑÐºÐ°Ñ (Ñ‚Ð°Ñ€Ð°ÑˆÐºÐµÐ²Ñ–Ñ†Ð°)â€Ž)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'regexblock' => 'Ð‘Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ Ð· Ð´Ð°Ð¿Ð°Ð¼Ð¾Ð³Ð°Ð¹ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð·Ð°Ñž',
	'regexblock-already-blocked' => '$1 ÑƒÐ¶Ð¾ {{GENDER:$1|Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹|Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ð°Ñ}}.',
	'regexblock-block-log' => "Ð Ð°Ñ…ÑƒÐ½Ð°Ðº {{GENDER:$1|ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–ÐºÐ°|ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–Ñ†Ñ‹}} Ð°Ð»ÑŒÐ±Ð¾ Ð†Ð -Ð°Ð´Ñ€Ð°Ñ '''$1''' Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹.",
	'regexblock-block-success' => 'ÐŸÐ°ÑÑŒÐ¿ÑÑ…Ð¾Ð²Ð°Ðµ Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ',
	'regexblock-currently-blocked' => 'Ð¦ÑÐ¿ÐµÑ€ Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹Ñ Ð°Ð´Ñ€Ð°ÑÑ‹:',
	'regexblock-desc' => 'Ð— Ð´Ð°Ð¿Ð°Ð¼Ð¾Ð³Ð°Ð¹ Ð³ÑÑ‚Ð°Ð³Ð° Ð¿Ð°ÑˆÑ‹Ñ€ÑÐ½ÑŒÐ½Ñ Ð±Ð»ÑÐºÑƒÑŽÑ†Ñ†Ð° Ñ€Ð°Ñ…ÑƒÐ½ÐºÑ– ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–ÐºÐ°Ñž Ñ– Ð†Ð -Ð°Ð´Ñ€Ð°ÑÑ‹ Ð¿Ð° Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ð¼ Ð²Ñ‹Ñ€Ð°Ð·Ð°Ð¼. Ð£Ñ‚Ñ€Ñ‹Ð¼Ð»Ñ–Ð²Ð°Ðµ Ð¼ÑÑ…Ð°Ð½Ñ–Ð·Ð¼ Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ñ Ñ– [[Special:Regexblock|ÑÐ¿ÑÑ†Ñ‹ÑÐ»ÑŒÐ½ÑƒÑŽ ÑÑ‚Ð°Ñ€Ð¾Ð½ÐºÑƒ]] Ð´Ð»Ñ Ð´Ð°Ð´Ð°Ð½ÑŒÐ½Ñ/ÐºÑ–Ñ€Ð°Ð²Ð°Ð½ÑŒÐ½Ñ Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½ÑÐ¼Ñ–',
	'regexblock-expire-duration' => '1 Ð³Ð°Ð´Ð·Ñ–Ð½Ð°,2 Ð³Ð°Ð´Ð·Ñ–Ð½Ñ‹,4 Ð³Ð°Ð´Ð·Ñ–Ð½Ñ‹,6 Ð³Ð°Ð´Ð·Ñ–Ð½Ð°Ñž,1 Ð´Ð·ÐµÐ½ÑŒ,3 Ð´Ð½Ñ–,1 Ñ‚Ñ‹Ð´Ð·ÐµÐ½ÑŒ,2 Ñ‚Ñ‹Ð´Ð½Ñ–,1 Ð¼ÐµÑÑÑ†,3 Ð¼ÐµÑÑÑ†Ñ‹,6 Ð¼ÐµÑÑÑ†Ð°Ñž,1 Ð³Ð¾Ð´,Ð½Ð°Ð·Ð°ÑžÑÑ‘Ð´Ñ‹',
	'regexblock-page-title' => 'Ð‘Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ Ñ€Ð°Ñ…ÑƒÐ½ÐºÐ°Ñž Ð· Ð²Ñ‹ÐºÐ°Ñ€Ñ‹ÑÑ‚Ð°Ð½ÑŒÐ½ÐµÐ¼ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ð°Ð³Ð° Ð²Ñ‹Ñ€Ð°Ð·Ñƒ',
	'regexblockstats' => 'Ð¡Ñ‚Ð°Ñ‚Ñ‹ÑÑ‚Ñ‹ÐºÐ° Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½ÑÑž Ð¿Ð° Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ð¼ Ð²Ñ‹Ñ€Ð°Ð·Ð°Ð¼',
	'regexblock-help' => "Ð’Ñ‹ÐºÐ°Ñ€Ñ‹ÑÑ‚Ð¾ÑžÐ²Ð°Ð¹Ñ†Ðµ Ñ„Ð¾Ñ€Ð¼Ñƒ Ð¿Ð°Ð´Ð°Ð´Ð·ÐµÐ½ÑƒÑŽ Ð½Ñ–Ð¶ÑÐ¹ Ð´Ð»Ñ Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ñ Ñ€ÑÐ´Ð°Ð³Ð°Ð²Ð°Ð½ÑŒÐ½ÑÑž Ð· Ð²Ñ‹Ð·Ð½Ð°Ñ‡Ð°Ð½Ñ‹Ñ… Ñ€Ð°Ñ…ÑƒÐ½ÐºÐ°Ñž Ð°Ð»ÑŒÐ±Ð¾ Ð†Ð -Ð°Ð´Ñ€Ð°ÑÐ¾Ñž.
Ð“ÑÑ‚Ð° Ð¼Ð¾Ð¶Ð½Ð° Ñ€Ð°Ð±Ñ–Ñ†ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÑ– Ð´Ð»Ñ Ð¿Ñ€Ð°Ð´ÑƒÑ…Ñ–Ð»ÐµÐ½ÑŒÐ½Ñ Ð²Ð°Ð½Ð´Ð°Ð»Ñ–Ð·Ð¼Ñƒ Ñ– Ð²Ñ‹ÐºÐ»ÑŽÑ‡Ð½Ð° Ð·Ð³Ð¾Ð´Ð½Ð° Ð· Ð¿Ñ€Ð°Ð²Ñ–Ð»Ð°Ð¼Ñ–.
''Ð“ÑÑ‚Ð° ÑÑ‚Ð°Ñ€Ð¾Ð½ÐºÐ° Ð´Ð°Ð·Ð²Ð¾Ð»Ñ–Ñ†ÑŒ Ð’Ð°Ð¼ Ð±Ð»ÑÐºÐ°Ð²Ð°Ñ†ÑŒ Ð½Ð°Ð²Ð°Ñ‚ Ð½ÐµÑ–ÑÐ½ÑƒÑŽÑ‡Ñ‹Ñ Ñ€Ð°Ñ…ÑƒÐ½ÐºÑ– Ñ– Ñ€Ð°Ñ…ÑƒÐ½ÐºÑ– Ð· Ð¿Ð°Ð´Ð¾Ð±Ð½Ñ‹Ð¼Ñ– Ð½Ð°Ð·Ð²Ð°Ð¼Ñ–, Ð½Ð°Ð¿Ñ€Ñ‹ÐºÐ»Ð°Ð´, Ñ€Ð°Ð·Ð°Ð¼ Ð· Â«Ð¢ÑÑÑ‚Â» Ð±ÑƒÐ´Ð·Ðµ Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹ Ñ– Â«Ð¢ÑÑÑ‚ 2Â» Ñ– Ð³.Ð´.
Ð¢Ð°ÐºÑÐ°Ð¼Ð° Ð’Ñ‹ Ð¼Ð¾Ð¶Ð°Ñ†Ðµ Ð±Ð»ÑÐºÐ°Ð²Ð°Ñ†ÑŒ Ð¿Ð¾ÑžÐ½Ñ‹Ñ Ð†Ð -Ð°Ð´Ñ€Ð°ÑÑ‹, ÑˆÑ‚Ð¾ Ð°Ð·Ð½Ð°Ñ‡Ð°Ðµ, ÑˆÑ‚Ð¾ Ñ–Ñ… Ð±Ð¾Ð»ÑŒÑˆ Ð½ÐµÐ»ÑŒÐ³Ð° Ð±ÑƒÐ´Ð·Ðµ Ð²Ñ‹ÐºÐ°Ñ€Ñ‹ÑÑ‚Ð¾ÑžÐ²Ð°Ñ†ÑŒ Ð´Ð»Ñ Ñ€ÑÐ´Ð°Ð³Ð°Ð²Ð°Ð½ÑŒÐ½Ñ ÑÑ‚Ð°Ñ€Ð¾Ð½Ð°Ðº.
Ð£Ð²Ð°Ð³Ð°: Ñ‡Ð°ÑÑ‚ÐºÐ¾Ð²Ð°Ñ Ð†Ð -Ð°Ð´Ñ€Ð°ÑÑ‹ Ð±ÑƒÐ´ÑƒÑ†ÑŒ Ñ–Ð½Ñ‚ÑÑ€Ð¿Ñ€ÑÑ‚Ð°Ð²Ð°Ñ†Ñ†Ð° ÑÐº Ð½Ð°Ð·Ð²Ñ‹ Ñ€Ð°Ñ…ÑƒÐ½ÐºÐ°Ñž Ñƒ Ð²Ñ‹Ð·Ð½Ð°Ñ‡Ð°Ð½Ñ‹Ñ… Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½ÑÑ….
ÐšÐ°Ð»Ñ– Ð½Ðµ Ð¿Ð°Ð·Ð½Ð°Ñ‡Ð°Ð½Ð°Ñ Ð¿Ñ€Ñ‹Ñ‡Ñ‹Ð½Ð°, Ð±ÑƒÐ´Ð·Ðµ Ð²Ñ‹ÐºÐ°Ñ€Ñ‹ÑÑ‚Ð¾ÑžÐ²Ð°Ñ†Ñ†Ð° Ð°Ð³ÑƒÐ»ÑŒÐ½Ð°Ðµ Ð°Ð¿Ñ–ÑÐ°Ð½ÑŒÐ½Ðµ Ð¿Ð° Ð·Ð¼Ð¾ÑžÑ‡Ð²Ð°Ð½ÑŒÐ½Ñ–.''",
	'regexblock-page-title-1' => 'Ð‘Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ Ð°Ð´Ñ€Ð°ÑÐ¾Ñž Ð· Ð²Ñ‹ÐºÐ°Ñ€Ñ‹ÑÑ‚Ð°Ð½ÑŒÐ½ÐµÐ¼ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ð°Ð³Ð° Ð²Ñ‹Ñ€Ð°Ð·Ñƒ',
	'regexblock-reason-ip' => 'Ð“ÑÑ‚Ð° Ð†Ð -Ð°Ð´Ñ€Ð°Ñ Ð±Ñ‹Ñž Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹ Ð¿Ð° Ð¿Ñ€Ñ‹Ñ‡Ñ‹Ð½Ðµ Ð²Ð°Ð½Ð´Ð°Ð»Ñ–Ð·Ð¼Ñƒ Ñ†Ñ– Ñ–Ð½ÑˆÐ°Ð³Ð° Ð¿Ð°Ñ€ÑƒÑˆÑÐ½ÑŒÐ½Ñ Ð·Ñ€Ð¾Ð±Ð»ÐµÐ½Ð°Ð³Ð° Ð’Ð°Ð¼Ñ– Ð°Ð»ÑŒÐ±Ð¾ ÐºÑ–Ð¼-Ð½ÐµÐ±ÑƒÐ´Ð·ÑŒ Ñ–Ð½ÑˆÑ‹Ð¼, Ñ…Ñ‚Ð¾ ÐºÐ°Ñ€Ñ‹ÑÑ‚Ð°ÐµÑ†Ñ†Ð° Ð³ÑÑ‚Ñ‹Ð¼ Ð†Ð -Ð°Ð´Ñ€Ð°ÑÐ°Ð¼.
ÐšÐ°Ð»Ñ– Ð’Ñ‹ Ð»Ñ–Ñ‡Ñ‹Ñ†Ðµ, ÑˆÑ‚Ð¾ Ð³ÑÑ‚Ð° Ð¿Ð°Ð¼Ñ‹Ð»ÐºÐ°, ÐºÐ°Ð»Ñ– Ð»Ð°ÑÐºÐ°, [[$1|Ð¿Ð°Ð²ÐµÐ´Ð°Ð¼Ñ–Ñ†Ðµ Ð½Ð°Ð¼]]',
	'regexblock-reason-name' => 'Ð“ÑÑ‚Ñ‹ ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–Ðº Ð½Ñ Ð¼Ð¾Ð¶Ð° Ñ€ÑÐ´Ð°Ð³Ð°Ð²Ð°Ñ†ÑŒ Ñƒ Ð²Ñ‹Ð½Ñ–ÐºÑƒ Ð²Ð°Ð½Ð´Ð°Ð»Ñ–Ð·Ð¼Ñƒ Ñ†Ñ– Ñ–Ð½ÑˆÐ°Ð³Ð° Ð¿Ð°Ñ€ÑƒÑˆÑÐ½ÑŒÐ½Ñ.
ÐšÐ°Ð»Ñ– Ð’Ñ‹ Ð»Ñ–Ñ‡Ñ‹Ñ†Ðµ, ÑˆÑ‚Ð¾  Ð³ÑÑ‚Ð° Ð¿Ð°Ð¼Ñ‹Ð»ÐºÐ°, ÐºÐ°Ð»Ñ– Ð»Ð°ÑÐºÐ°, [[$1|Ð¿Ð°Ð²ÐµÐ´Ð°Ð¼Ñ–Ñ†Ðµ Ð½Ð°Ð¼]]',
	'regexblock-reason-regex' => 'Ð“ÑÑ‚Ñ‹ ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–Ðº Ð½Ñ Ð¼Ð¾Ð¶Ð° Ñ€ÑÐ´Ð°Ð³Ð°Ð²Ð°Ñ†ÑŒ Ñƒ Ð²Ñ‹Ð½Ñ–ÐºÑƒ Ð²Ð°Ð½Ð´Ð°Ð»Ñ–Ð·Ð¼Ñƒ Ñ†Ñ– Ñ–Ð½ÑˆÐ°Ð³Ð° Ð¿Ð°Ñ€ÑƒÑˆÑÐ½ÑŒÐ½Ñ, ÑÐºÐ¾Ðµ Ð·Ñ€Ð°Ð±Ñ–Ñž ÑƒÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–Ðº Ð· Ð¿Ð°Ð´Ð¾Ð±Ð½Ñ‹Ð¼ Ñ–Ð¼ÐµÐ½ÐµÐ¼.
ÐšÐ°Ð»Ñ– Ð»Ð°ÑÐºÐ°, ÑÑ‚Ð²Ð°Ñ€Ñ‹Ñ†Ðµ Ñ€Ð°Ñ…ÑƒÐ½Ð°Ðº Ð·ÑŒ Ñ–Ð½ÑˆÐ°Ð¹ Ð½Ð°Ð·Ð²Ð°Ð¹ Ð°Ð»ÑŒÐ±Ð¾ [[$1|Ð¿Ð°Ð²ÐµÐ´Ð°Ð¼Ñ–Ñ†Ðµ Ð½Ð°Ð¼ Ð¿Ñ€Ð° Ð¿Ñ€Ð°Ð±Ð»ÐµÐ¼Ñƒ]]',
	'regexblock-form-username' => 'Ð†Ð -Ð°Ð´Ñ€Ð°Ñ Ð°Ð»ÑŒÐ±Ð¾ Ñ–Ð¼Ñ ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–ÐºÐ°:',
	'regexblock-form-reason' => 'ÐŸÑ€Ñ‹Ñ‡Ñ‹Ð½Ð°:',
	'regexblock-form-expiry' => 'Ð¢ÑÑ€Ð¼Ñ–Ð½:',
	'regexblock-form-match' => 'Ð”Ð°ÐºÐ»Ð°Ð´Ð½Ð°Ñ Ð°Ð´Ð¿Ð°Ð²ÐµÐ´Ð½Ð°ÑÑŒÑ†ÑŒ',
	'regexblock-form-account-block' => 'Ð—Ð°Ð±Ð°Ñ€Ð°Ð½Ñ–Ñ†ÑŒ ÑÑ‚Ð²Ð°Ñ€ÑÐ½ÑŒÐ½Ðµ Ð½Ð¾Ð²Ñ‹Ñ… Ñ€Ð°Ñ…ÑƒÐ½ÐºÐ°Ñž',
	'regexblock-form-submit' => 'Ð—Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ñ†ÑŒ Ð³ÑÑ‚Ð°Ð³Ð° ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–ÐºÐ°',
	'regexblock-form-submit-empty' => 'ÐŸÐ°Ð·Ð½Ð°Ñ‡Ñ†Ðµ Ñ–Ð¼Ñ ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–ÐºÐ° Ð°Ð»ÑŒÐ±Ð¾ Ð†Ð -Ð°Ð´Ñ€Ð°Ñ Ð´Ð»Ñ Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ñ.',
	'regexblock-form-submit-regex' => 'ÐÑÑÐ»ÑƒÑˆÐ½Ñ‹ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹ Ð²Ñ‹Ñ€Ð°Ð·.',
	'regexblock-form-submit-expiry' => 'ÐšÐ°Ð»Ñ– Ð»Ð°ÑÐºÐ°, Ð¿Ð°Ð·Ð½Ð°Ñ‡Ñ†Ðµ Ñ‚ÑÑ€Ð¼Ñ–Ð½ Ð´Ð·ÐµÑÐ½ÑŒÐ½Ñ.',
	'regexblock-link' => 'Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ñ†ÑŒ Ð· Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ð¼ Ð²Ñ‹Ñ€Ð°Ð·Ð°Ð¼',
	'regexblock-match-stats-record' => '$1 Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ñž Â«$2Â» Ñž Â«$3Â» Â«$4Â», ÑƒÐ²Ð°Ð¹ÑˆÐ¾ÑžÑˆÐ°Ð³Ð° Ð· IP-Ð°Ð´Ñ€Ð°ÑÑƒ Â«$5Â»',
	'regexblock-nodata-found' => 'ÐÑ–Ñ‡Ð¾Ð³Ð° Ð½Ñ Ð·Ð½Ð¾Ð¹Ð´Ð·ÐµÐ½Ð°',
	'regexblock-stats-title' => 'Ð¡Ñ‚Ð°Ñ‚Ñ‹ÑÑ‚Ñ‹ÐºÐ° Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½ÑÑž Ð· Ð´Ð°Ð¿Ð°Ð¼Ð¾Ð³Ð°Ð¹ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð·Ð°Ñž',
	'regexblock-unblock-success' => 'Ð Ð°Ð·Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ Ð¿Ð°ÑÑŒÐ¿ÑÑ…Ð¾Ð²Ð°Ðµ',
	'regexblock-unblock-log' => "Ð†Ð¼Ñ ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–ÐºÐ° Ð°Ð»ÑŒÐ±Ð¾ Ð†Ð -Ð°Ð´Ñ€Ð°Ñ '''$1''' Ð±Ñ‹Ñž Ñ€Ð°Ð·Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹.",
	'regexblock-unblock-error' => 'ÐŸÐ°Ð¼Ñ‹Ð»ÐºÐ° Ñ€Ð°Ð·Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ñ $1.
Ð’ÐµÑ€Ð°Ð³Ð¾Ð´Ð½Ð° Ð½ÑÐ¼Ð° Ñ‚Ð°ÐºÐ¾Ð³Ð° ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–ÐºÐ°.',
	'regexblock-regex-filter' => '   Ñ†Ñ– Ð·Ð½Ð°Ñ‡ÑÐ½ÑŒÐ½Ðµ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ð°Ð³Ð° Ð²Ñ‹Ñ€Ð°Ð·Ñƒ:',
	'regexblock-view-blocked' => 'ÐŸÐ°ÐºÐ°Ð·Ð°Ñ†ÑŒ Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹Ñ… Ð¿Ñ€Ð°Ð·:',
	'regexblock-view-all' => 'Ð£ÑÐµ',
	'regexblock-view-go' => 'ÐŸÐ°ÐºÐ°Ð·Ð°Ñ†ÑŒ',
	'regexblock-view-match' => '(Ð´Ð°ÐºÐ»Ð°Ð´Ð½Ð°Ñ Ð°Ð´Ð¿Ð°Ð²ÐµÐ´Ð½Ð°ÑÑŒÑ†ÑŒ)',
	'regexblock-view-regex' => '(Ð°Ð´Ð¿Ð°Ð²ÐµÐ´Ð½Ð°ÑÑŒÑ†ÑŒ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ð°Ð¼Ñƒ Ð²Ñ‹Ñ€Ð°Ð·Ñƒ)',
	'regexblock-view-account' => '(Ð·Ð°Ð±Ð°Ñ€Ð¾Ð½Ð° ÑÑ‚Ð²Ð°Ñ€ÑÐ½ÑŒÐ½Ñ Ñ€Ð°Ñ…ÑƒÐ½ÐºÐ°Ñž)',
	'regexblock-view-reason' => 'Ð¿Ñ€Ñ‹Ñ‡Ñ‹Ð½Ð°: $1',
	'regexblock-view-reason-default' => 'Ð°Ð³ÑƒÐ»ÑŒÐ½Ð°Ñ Ð¿Ñ€Ñ‹Ñ‡Ñ‹Ð½Ð°',
	'regexblock-view-block-infinite' => 'Ð±ÐµÑÑ‚ÑÑ€Ð¼Ñ–Ð½Ð¾Ð²Ð°Ðµ Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ',
	'regexblock-view-block-by' => 'Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹:',
	'regexblock-view-block-unblock' => 'Ñ€Ð°Ð·Ð±Ð»ÑÐºÐ°Ð²Ð°Ñ†ÑŒ',
	'regexblock-view-stats' => 'ÑÑ‚Ð°Ñ‚Ñ‹ÑÑ‚Ñ‹ÐºÐ°',
	'regexblock-view-empty' => 'Ð¡ÑŒÐ¿Ñ–Ñ Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹Ñ… Ñ€Ð°Ñ…ÑƒÐ½ÐºÐ°Ñž Ñ– IP-Ð°Ð´Ñ€Ð°ÑÐ¾Ñž Ð¿ÑƒÑÑ‚Ñ‹.',
	'regexblock-view-time' => '$1',
	'right-regexblock' => 'Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ ÑƒÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–ÐºÐ°Ñž Ð°Ð´ Ñ€ÑÐ´Ð°Ð³Ð°Ð²Ð°Ð½ÑŒÐ½Ñ Ð²Ð° ÑžÑÑ–Ñ… Ð²Ñ–ÐºÑ– Ð³ÑÑ‚Ð°Ð¹ Ð²Ñ–ÐºÑ–-Ñ„ÑÑ€Ð¼Ñ‹',
);

/** Bulgarian (Ð±ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'regexblock-already-blocked' => '$1 Ðµ Ð²ÐµÑ‡Ðµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½.',
	'regexblock-block-log' => "ÐŸÐ¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ» Ð¸Ð»Ð¸ IP Ð°Ð´Ñ€ÐµÑ '''$1''' Ð±ÐµÑˆÐµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½.",
	'regexblock-block-success' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½ÐµÑ‚Ð¾ Ð±ÐµÑˆÐµ ÑƒÑÐ¿ÐµÑˆÐ½Ð¾',
	'regexblock-currently-blocked' => 'Ð¢ÐµÐºÑƒÑ‰Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸ Ð°Ð´Ñ€ÐµÑÐ¸:',
	'regexblock-page-title-1' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ Ð½Ð° Ð°Ð´Ñ€ÐµÑÐ¸ Ñ‡Ñ€ÐµÐ· Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸',
	'regexblock-reason-ip' => 'ÐÐ° Ñ‚Ð¾Ð²Ð° Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»ÑÐºÐ¾ Ð¸Ð¼Ðµ Ð½Ðµ Ðµ Ð¿Ð¾Ð·Ð²Ð¾Ð»ÐµÐ½Ð¾ Ð´Ð° Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð° Ð·Ð°Ñ€Ð°Ð´Ð¸ Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·ÑŠÐ¼ Ð¸Ð»Ð¸ Ð´Ñ€ÑƒÐ³Ð¸ Ñ€Ð°Ð·Ñ€ÑƒÑˆÐ°Ð²Ð°Ñ‰Ð¸ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ Ð¾Ñ‚ Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ», ÐºÐ¾Ð¹Ñ‚Ð¾ ÑÐ¿Ð¾Ð´ÐµÐ»Ñ ÑÑŠÑ‰Ð¸Ñ IP-Ð°Ð´Ñ€ÐµÑ. ÐÐºÐ¾ ÑÐ¼ÑÑ‚Ð°Ñ‚Ðµ, Ñ‡Ðµ Ñ‚Ð¾Ð²Ð° Ðµ Ð³Ñ€ÐµÑˆÐºÐ°, $1',
	'regexblock-reason-name' => 'ÐÐ° Ñ‚Ð¾Ð²Ð° Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»ÑÐºÐ¾ Ð¸Ð¼Ðµ Ð½Ðµ Ðµ Ð¿Ð¾Ð·Ð²Ð¾Ð»ÐµÐ½Ð¾ Ð´Ð° Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð° Ð·Ð°Ñ€Ð°Ð´Ð¸ Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·ÑŠÐ¼ Ð¸Ð»Ð¸ Ð´Ñ€ÑƒÐ³Ð¸ Ñ€Ð°Ð·Ñ€ÑƒÑˆÐ°Ð²Ð°Ñ‰Ð¸ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ. ÐÐºÐ¾ ÑÐ¼ÑÑ‚Ð°Ñ‚Ðµ, Ñ‡Ðµ Ñ‚Ð¾Ð²Ð° Ðµ Ð³Ñ€ÐµÑˆÐºÐ°, $1',
	'regexblock-reason-regex' => 'ÐÐ° Ñ‚Ð¾Ð²Ð° Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»ÑÐºÐ¾ Ð¸Ð¼Ðµ Ð½Ðµ Ðµ Ð¿Ð¾Ð·Ð²Ð¾Ð»ÐµÐ½Ð¾ Ð´Ð° Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð° Ð·Ð°Ñ€Ð°Ð´Ð¸ Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·ÑŠÐ¼ Ð¸Ð»Ð¸ Ð´Ñ€ÑƒÐ³Ð¸ Ñ€Ð°Ð·Ñ€ÑƒÑˆÐ°Ð²Ð°Ñ‰Ð¸ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ Ð¾Ñ‚ Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ» ÑÑŠÑ ÑÑ…Ð¾Ð´Ð½Ð¾ Ð¸Ð¼Ðµ. ÐœÐ¾Ð¶ÐµÑ‚Ðµ Ð´Ð° ÑÑŠÐ·Ð´Ð°Ð´ÐµÑ‚Ðµ Ð´Ñ€ÑƒÐ³Ð° Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»ÑÐºÐ° ÑÐ¼ÐµÑ‚ÐºÐ° Ð¸Ð»Ð¸ Ð´Ð° $1 Ð·Ð° Ð¿Ñ€Ð¾Ð±Ð»ÐµÐ¼Ð°',
	'regexblock-form-username' => 'IP Ð°Ð´Ñ€ÐµÑ Ð¸Ð»Ð¸ Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»ÑÐºÐ¾ Ð¸Ð¼Ðµ:',
	'regexblock-form-reason' => 'ÐŸÑ€Ð¸Ñ‡Ð¸Ð½Ð°:',
	'regexblock-form-expiry' => 'Ð¡Ñ€Ð¾Ðº Ð½Ð° Ð¸Ð·Ñ‚Ð¸Ñ‡Ð°Ð½Ðµ:',
	'regexblock-form-match' => 'ÐŸÑŠÐ»Ð½Ð¾ ÑÑŠÐ²Ð¿Ð°Ð´ÐµÐ½Ð¸Ðµ',
	'regexblock-form-account-block' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ ÑÑŠÐ·Ð´Ð°Ð²Ð°Ð½ÐµÑ‚Ð¾ Ð½Ð° Ð½Ð¾Ð²Ð¸ ÑÐ¼ÐµÑ‚ÐºÐ¸',
	'regexblock-form-submit' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ Ð½Ð° Ñ‚Ð¾Ð·Ð¸ Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»',
	'regexblock-form-submit-regex' => 'ÐÐµÐ²Ð°Ð»Ð¸Ð´ÐµÐ½ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·.',
	'regexblock-form-submit-expiry' => 'ÐÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾ Ðµ Ð´Ð° Ð±ÑŠÐ´Ðµ Ð¿Ð¾ÑÐ¾Ñ‡ÐµÐ½ ÑÑ€Ð¾Ðº Ð½Ð° Ð¸Ð·Ñ‚Ð¸Ñ‡Ð°Ð½Ðµ.',
	'regexblock-unblock-success' => 'ÐžÑ‚Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½ÐµÑ‚Ð¾ Ð±ÐµÑˆÐµ ÑƒÑÐ¿ÐµÑˆÐ½Ð¾',
	'regexblock-unblock-log' => "ÐŸÐ¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»ÑÑ‚ Ð¸Ð»Ð¸ IP Ð°Ð´Ñ€ÐµÑÑŠÑ‚ '''$1''' Ð±ÐµÑˆÐµ Ð¾Ñ‚Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½.",
	'regexblock-unblock-error' => 'Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð¾Ñ‚Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ Ð½Ð° $1.
Ð’ÐµÑ€Ð¾ÑÑ‚Ð½Ð¾ Ð½Ðµ ÑÑŠÑ‰ÐµÑÑ‚Ð²ÑƒÐ²Ð° Ñ‚Ð°ÐºÑŠÐ² Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ».',
	'regexblock-view-blocked' => 'ÐŸÑ€ÐµÐ³Ð»ÐµÐ´ Ð½Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸Ñ‚Ðµ Ð¿Ð¾:',
	'regexblock-view-all' => 'Ð’ÑÐ¸Ñ‡ÐºÐ¸',
	'regexblock-view-go' => 'ÐžÑ‚Ð²Ð°Ñ€ÑÐ½Ðµ',
	'regexblock-view-match' => '(Ð¿ÑŠÐ»Ð½Ð¾ ÑÑŠÐ²Ð¿Ð°Ð´ÐµÐ½Ð¸Ðµ)',
	'regexblock-view-reason' => 'Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð°: $1',
	'regexblock-view-block-infinite' => 'Ð¿ÐµÑ€Ð¼Ð°Ð½ÐµÐ½Ñ‚Ð½Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ',
	'regexblock-view-block-by' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½ Ð¾Ñ‚',
	'regexblock-view-block-unblock' => 'Ð¾Ñ‚Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ',
	'regexblock-view-stats' => 'ÑÑ‚Ð°Ñ‚Ð¸ÑÑ‚Ð¸ÐºÐ¸',
	'regexblock-view-empty' => 'Ð¡Ð¿Ð¸ÑÑŠÐºÑŠÑ‚ Ð½Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸ Ð¸Ð¼ÐµÐ½Ð° Ð¸ Ð°Ð´Ñ€ÐµÑÐ¸ Ðµ Ð¿Ñ€Ð°Ð·ÐµÐ½.',
	'regexblock-view-time' => 'Ð½Ð° $1',
);

/** Bengali (à¦¬à¦¾à¦‚à¦²à¦¾)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'regexblock-form-username' => 'à¦†à¦‡à¦ªà¦¿ à¦ à¦¿à¦•à¦¾à¦¨à¦¾ à¦¬à¦¾ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦°à¦•à¦¾à¦°à§€à¦° à¦¨à¦¾à¦®:',
	'regexblock-form-reason' => 'à¦•à¦¾à¦°à¦£:',
	'regexblock-form-expiry' => 'à¦¯à¦–à¦¨ à¦®à§‡à¦¯à¦¼à¦¾à¦¦à§‹à¦¤à§à¦¤à§€à¦°à§à¦£ à¦¹à¦¬à§‡:',
	'regexblock-form-account-block' => 'à¦¨à¦¤à§à¦¨ à¦…à§à¦¯à¦¾à¦•à¦¾à¦‰à¦¨à§à¦Ÿ à¦¤à§ˆà¦°à¦¿à¦¤à§‡ à¦¬à¦¾à¦§à¦¾ à¦¦à¦¾à¦“',
	'regexblock-form-submit' => 'à¦à¦‡ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦°à¦•à¦¾à¦°à§€à¦•à§‡ à¦¬à¦¾à¦§à¦¾ à¦¦à¦¾à¦“',
	'regexblock-form-submit-empty' => 'à¦¬à¦¾à¦§à¦¾ à¦ªà§à¦°à¦¦à¦¾à¦¨à§‡à¦° à¦œà¦¨à§à¦¯ à¦à¦•à¦Ÿà¦¿ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦°à¦•à¦¾à¦°à§€ à¦¨à¦¾à¦® à¦¬à¦¾ à¦†à¦‡à¦ªà¦¿ à¦ à¦¿à¦•à¦¾à¦¨à¦¾ à¦¦à¦¿à¦¨',
	'regexblock-form-submit-regex' => 'à¦…à¦¬à§ˆà¦§ à¦°à§‡à¦—à§à¦²à¦¾à¦° à¦à¦•à§à¦¸à¦ªà§à¦°à§‡à¦¶à¦¨',
	'regexblock-form-submit-expiry' => 'à¦…à¦¨à§à¦—à§à¦°à¦¹à¦ªà§‚à¦°à§à¦¬à¦• à¦®à§‡à¦¯à¦¼à¦¾à¦¦ à¦‰à¦¤à§à¦¤à§€à¦°à§à¦£à§‡à¦° à¦¸à¦®à¦¯à¦¼à¦¸à§€à¦®à¦¾ à¦‰à¦²à§à¦²à§‡à¦– à¦•à¦°à§à¦¨à¥¤',
	'regexblock-link' => 'à¦°à§‡à¦—à§à¦²à¦¾à¦° à¦à¦•à§à¦¸à¦ªà§à¦°à§‡à¦¶à¦¨à¦¸à¦¹ à¦¬à¦¾à¦§à¦¾à¦¦à¦¾à¦¨',
	'regexblock-nodata-found' => 'à¦•à§‹à¦¨à§‹ à¦¡à§‡à¦Ÿà¦¾ à¦–à§à¦à¦œà§‡ à¦ªà¦¾à¦“à¦¯à¦¼à¦¾ à¦¯à¦¾à¦¯à¦¼à¦¨à¦¿',
	'regexblock-unblock-success' => 'à¦¸à¦«à¦²à¦­à¦¾à¦¬à§‡ à¦¬à¦¾à¦§à¦¾ à¦¤à§à¦²à§‡ à¦¨à§‡à¦“à¦¯à¦¼à¦¾ à¦¹à¦¯à¦¼à§‡à¦›à§‡',
	'regexblock-view-all' => 'à¦¸à¦®à¦¸à§à¦¤',
	'regexblock-view-go' => 'à¦¯à¦¾à¦“',
	'regexblock-view-stats' => 'à¦ªà¦°à¦¿à¦¸à¦‚à¦–à§à¦¯à¦¾à¦¨',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'regexblock' => 'EztaoladennoÃ¹ poellel evit stankaÃ±',
	'regexblock-already-blocked' => '$1 zo stanket dija.',
	'regexblock-block-log' => "Sanket eo bet an implijer pe ar chomlec'h IP '''$1'''.",
	'regexblock-block-success' => 'Stanket eo bet an implijer',
	'regexblock-currently-blocked' => "Chomlec'hioÃ¹ stanket er mare-maÃ± :",
	'regexblock-desc' => "Astenn implijet evit stankaÃ± implijerien pe chomlec'hioÃ¹ IP gant eztaoladennoÃ¹ poellel. Bez ez eus war un dro ur gwikefre stankaÃ± hag [[Special:Regexblock|ur bajenn]] hag a c'hell ouzhpennaÃ± ha meraÃ± ar stankadennoÃ¹",
	'regexblock-expire-duration' => '1 eurvezh, 2 eurvezh, 4 eurvezh, 6 eurvezh, 1 devezh, 3 devezh, 1 sizhunvezh, 2 sizhunvezh, miz, 3 miz, 6 miz, bloaz, da viken',
	'regexblock-page-title' => 'Stankadenn un anv gant un eztaoladenn poellel',
	'regexblockstats' => 'StadegoÃ¹ war ar stankadennoÃ¹ gant eztaoladennoÃ¹ poellel',
	'regexblock-help' => "Grit gant ar furmskrid a-is evit mirout ouzh ur chomlec'h IP pe un anv implijer da skrivaÃ±.
An dra-se ne zle bezaÃ± graet nemet evit mirout ouzh ar vandalerezh ha hervez ar reolennoÃ¹ degemeret evit ar raktres.
''Gant ar bajenn-maÃ± e c'hallit stankaÃ± implijerien dienroll hag ar re ganto anvioÃ¹ damheÃ±vel ouzh an anv lakaet zoken : da skouer, stanket e vo \"Test\" war un dro gant \"Test 2\" hag all.
StankaÃ± a c'hallit ivez chomlec'hioÃ¹ IP klok, ar pezh a dalvez n'hallo ket den ebet kevreet adal ar chomlec'hioÃ¹-se kemmaÃ± pajennoÃ¹.
Notenn : ar chomlec'hioÃ¹ IP diglok a vo sellet outo evel ouzh anvioÃ¹ implijerien e-pad ar stankaÃ±. Mar ne lakaer abeg ebet en evezhiadennoÃ¹ e teuio war wel un abeg dre ziouer.\"",
	'regexblock-page-title-1' => "Stankadenn ur chomlec'h hag a implij eztaoladennoÃ¹ poellel",
	'regexblock-reason-ip' => "Ne c'hell ket ar c'homec'h IP-maÃ± degas an disteraÃ± kemm en abeg d'ar vandalerezh pe obererezhioÃ¹ damheÃ±vel bet graet ganeoc'h pe gant unan all hag a implij ar memes chomlec'h IP.
Ma 'z oc'h sur ez eo ur fazi, [[$1|deuit e darempred ganeomp]].",
	'regexblock-reason-name' => "Ne c'hell ket an implijer-maÃ± degas an disteraÃ± kemm en abeg da vandalerezh pe obererezhioÃ¹ damheÃ±vel.
Ma 'z oc'h sur ez eo ur fazi, [[$1|deuit e darempred ganeomp]].",
	'regexblock-reason-regex' => "Ne c'hell ket an implijer-maÃ± degas an disteraÃ± kemm en abeg da vandalerezh pe obererezhioÃ¹ damheÃ±vel bet graet gant un implijer gant un anv karr.
krouit ur gont all pe [[$1|deuit e darempred ganeomp]] evit menegiÃ± ar gudenn.",
	'regexblock-form-username' => "Chomlec'h IP pe anv implijer :",
	'regexblock-form-reason' => 'Abeg :',
	'regexblock-form-expiry' => 'Termen :',
	'regexblock-form-match' => 'Klotadur rik',
	'regexblock-form-account-block' => 'BerzaÃ± krouidigezh kontoÃ¹ nevez',
	'regexblock-form-submit' => 'StankaÃ± an implijer-maÃ±',
	'regexblock-form-submit-empty' => "Roit un anv implijer pe ur chomlec'h IP da stankaÃ±.",
	'regexblock-form-submit-regex' => 'Eztaoladenn poellel direizh.',
	'regexblock-form-submit-expiry' => 'Diferit un termen, mar plij.',
	'regexblock-link' => 'stankaÃ± gant un eztaoladenn poellel',
	'regexblock-match-stats-record' => "$1 en deus stanket Â« $2 Â» d'an Â« $3 Â» da Â« $4 Â», liammet adalek ar chomlec'h Â« $5 Â»",
	'regexblock-nodata-found' => "N'eus ket bet kavet roadennoÃ¹",
	'regexblock-stats-title' => 'StadegoÃ¹ war ar stankadennoÃ¹ gant eztaoladennoÃ¹ poellel',
	'regexblock-unblock-success' => 'Distanket eo bet an implijer',
	'regexblock-unblock-log' => "Disanket eo bet an implijer pe ar chomlec'h IP '''$1'''.",
	'regexblock-unblock-error' => "Fazi distankaÃ± $1.
Sur a-walc'h n'eus ket eus an implijer-maÃ±.",
	'regexblock-regex-filter' => 'pe talvoudenn un eztaoladenn poellel :',
	'regexblock-view-blocked' => 'Gwelet ar stankadurioÃ¹ gant :',
	'regexblock-view-all' => 'Pep tra',
	'regexblock-view-go' => 'Mont',
	'regexblock-view-match' => '(klotadur rik)',
	'regexblock-view-regex' => '(klotadenn eztaoladenn poellel)',
	'regexblock-view-account' => "(krouidigezh ar c'hontoÃ¹ stanket)",
	'regexblock-view-reason' => 'abeg : $1',
	'regexblock-view-reason-default' => 'abeg dre-vras',
	'regexblock-view-block-infinite' => 'stankadur pad',
	'regexblock-view-block-by' => 'stanket gant :',
	'regexblock-view-block-unblock' => 'distankaÃ±',
	'regexblock-view-stats' => 'stadegoÃ¹',
	'regexblock-view-empty' => "Goullo eo roll an implijerien pe ar chomlec'hioÃ¹ IP bet stanket.",
	'regexblock-view-time' => "d'an $1",
	'right-regexblock' => 'Mirout a ra ouzh an implijerien da zegas kemmoÃ¹ war an holl wikioÃ¹ zo er feurm wiki.',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'regexblock' => 'Regex blokiranje',
	'regexblock-already-blocked' => '$1 je veÄ‡ blokiran.',
	'regexblock-block-log' => "KorisniÄko ime ili IP adresa '''$1''' je blokiran.",
	'regexblock-block-success' => 'Blokada uspjeÅ¡na',
	'regexblock-currently-blocked' => 'Trenutno blokirane adrese:',
	'regexblock-desc' => 'ProÅ¡irenje koje se koristi za blokiranje korisniÄkim imena i IP adresa putem redovnih izraza. SadrÅ¾i i mehanizam za blokiranje i [[Special:Regexblock|posebnu stranicu]] za dodavanj/upravljanje blokadama',
	'regexblock-expire-duration' => '1 sat,2 sata,4 sata,6 sati,1 dan,3 dana,1 sedmica,2 sedmice,1 mjesec,3 mjeseca,6 mjeseci,1 godina,neograniÄeno',
	'regexblock-page-title' => 'Blokiranje imena putem redovnih izraza',
	'regexblockstats' => 'Statistike regex bloka',
	'regexblock-help' => "Koristite obrazac ispod za blokiranje prava pisanja sa odreÄ‘ene IP adrese ili korisniÄkog imena.
Ovo se koristi samo za prevenciju vandalizma i u skladu sa pravilima.
''Ova stranica Ä‡e Vam omoguÄ‡iti da blokirate i one koji nisu korisnici a i korisnike sa sliÄnim imenom tj. ''Test'' Ä‡e biti blokiran zajedno sa ''Test 2'' itd.
MoÅ¾ete takoÄ‘er blokirati pune IP adrese, Å¡to znaÄi da ne niko ne moÅ¾e s njih prijaviti za ureÄ‘ivanje stranica.
PaÅ¾nja: djelimiÄna blokada IP adresa Ä‡e se smatrati kao korisniÄko ime pri odreÄ‘ivanju blokade.
Ako nije naveden razlog, bit Ä‡e koriÅ¡ten uobiÄajeni generiÄki razlog.''",
	'regexblock-page-title-1' => 'Blokiranje adrese koristeÄ‡i obiÄne izraze',
	'regexblock-reason-ip' => 'Ova IP adresa je onemoguÄ‡ena za ureÄ‘ivanje zbog vandalizma ili drugih sliÄnih akcija od strane Vas ili nekog drugog s kim dijelite VaÅ¡u IP adresu.
Ako mislite da je u pitanju greÅ¡ka, molimo [[$1|kontaktirajte nas]]',
	'regexblock-reason-name' => 'Ovo korisniÄko ime je blokirano za ureÄ‘ivanje zbog vandalizma ili drugih nepoÅ¾eljnih radnji.
Ako mislite da je greÅ¡ka, molimo [[$1|kontaktirajte nas]]',
	'regexblock-reason-regex' => 'Ovo korisniÄko ime je onemoguÄ‡eno za ureÄ‘ivanje zbog vandalizma i drugih radnji od strane korisnika sa sliÄnim imenom.
Molimo napravite drugo korisniÄko ime ili [[$1|nas obavijestite]] o problemu',
	'regexblock-form-username' => 'IP adresa ili korisniÄko ime:',
	'regexblock-form-reason' => 'Razlog:',
	'regexblock-form-expiry' => 'IstiÄe:',
	'regexblock-form-match' => 'TaÄno slaganje',
	'regexblock-form-account-block' => 'Blokiranje pravljenja novih raÄuna',
	'regexblock-form-submit' => 'Blokiraj ovog korisnika',
	'regexblock-form-submit-empty' => 'Navedite korisniÄko ime ili IP adresu za blokiranje.',
	'regexblock-form-submit-regex' => 'Nevaljan regularni izraz.',
	'regexblock-form-submit-expiry' => 'Molimo odredite vrijeme isteka.',
	'regexblock-link' => 'blokiranje sa regularnim izrazom',
	'regexblock-match-stats-record' => "$1 blokiran korisnik '$2' na '$3' u '$4', zapisnik sa adrese '$5'",
	'regexblock-nodata-found' => 'Podaci nisu naÄ‘eni',
	'regexblock-stats-title' => 'Statistike blokade putem regexa',
	'regexblock-unblock-success' => 'Deblokiranje uspjelo',
	'regexblock-unblock-log' => "KorisniÄko ime ili IP adresa '''$1''' je deblokiran.",
	'regexblock-unblock-error' => 'GreÅ¡ka pri deblokadi $1.
MoguÄ‡e da ne postoji takav korisnik.',
	'regexblock-regex-filter' => '  ili regex vrijednost:',
	'regexblock-view-blocked' => 'Pregled blokiran od strane:',
	'regexblock-view-all' => 'Sve',
	'regexblock-view-go' => 'Idi',
	'regexblock-view-match' => '(taÄno slaganje)',
	'regexblock-view-regex' => '(slaganje regexa)',
	'regexblock-view-account' => '(blokiranje pravljenja raÄuna)',
	'regexblock-view-reason' => 'razlog: $1',
	'regexblock-view-reason-default' => 'opÄ‡i razlog',
	'regexblock-view-block-infinite' => 'trajna blokada',
	'regexblock-view-block-by' => 'blokirano od strane:',
	'regexblock-view-block-unblock' => 'deblokada',
	'regexblock-view-stats' => 'statistike',
	'regexblock-view-empty' => 'Spisak blokiranih imena i adresa je prazan.',
	'regexblock-view-time' => 'u $1',
	'right-regexblock' => 'Blokiranje korisnika od ureÄ‘ivanja na svim wikijima na wiki farmi',
);

/** Catalan (catalÃ )
 * @author SMP
 * @author Solde
 */
$messages['ca'] = array(
	'regexblock-already-blocked' => '$1 ja estÃ  blocat.',
	'regexblock-form-reason' => 'Motiu:',
	'regexblock-view-go' => 'VÃ©s-hi',
);

/** Chechen (Ð½Ð¾Ñ…Ñ‡Ð¸Ð¹Ð½) */
$messages['ce'] = array(
	'regexblock-form-reason' => 'Ð‘Ð°Ñ…ÑŒÐ°Ð½:',
);

/** Chamorro (Chamoru)
 * @author Jatrobat
 */
$messages['ch'] = array(
	'regexblock-view-go' => 'HÃ¥nao',
);

/** Sorani Kurdish (Ú©ÙˆØ±Ø¯ÛŒ) */
$messages['ckb'] = array(
	'regexblock-form-reason' => 'Ù‡Û†Ú©Ø§Ø±:',
	'regexblock-view-go' => 'Ø¨Ú•Û†',
);

/** Czech (Äesky)
 * @author Chmee2
 */
$messages['cs'] = array(
	'regexblock-form-username' => 'IP adresa nebo uÅ¾ivatelskÃ© jmÃ©no:',
	'regexblock-form-reason' => 'DÅ¯vod:',
	'regexblock-form-expiry' => 'ÄŒas vyprÅ¡enÃ­:',
	'regexblock-form-match' => 'PÅ™esnÃ¡ shoda',
	'regexblock-form-account-block' => 'Blokovat vytvoÅ™enÃ­ novÃ½ch ÃºÄtÅ¯',
	'regexblock-form-submit' => 'Zablokovat tohoto uÅ¾ivatele',
	'regexblock-nodata-found' => 'Nebyly nalezeny Å¾Ã¡dnÃ© Ãºdaje',
	'regexblock-stats-title' => 'Statistika regex blokovÃ¡nÃ­',
	'regexblock-unblock-success' => 'OdblokovÃ¡nÃ­ ÃºspÄ›Å¡nÃ©.',
	'regexblock-unblock-log' => "UÅ¾ivatelskÃ© jmÃ©no nebo IP adresa ''' $1 ''' bylo odblokovÃ¡no.",
	'regexblock-view-blocked' => 'Zobrazit blokovÃ¡nÃ­ od:',
	'regexblock-view-all' => 'VÅ¡echny',
	'regexblock-view-go' => 'JÃ­t na',
	'regexblock-view-match' => '(pÅ™esnÃ¡ shoda)',
	'regexblock-view-regex' => '(vyhovuje reg. vÃ½razu)',
	'regexblock-view-account' => '(blokovÃ¡nÃ­ tvorby ÃºÄtu)',
	'regexblock-view-reason' => 'dÅ¯vod: $1',
	'regexblock-view-reason-default' => 'ObecnÃ½ dÅ¯vod',
	'regexblock-view-block-infinite' => 'TrvalÃ½ blok',
	'regexblock-view-block-by' => 'ZablokovÃ¡n:',
	'regexblock-view-block-unblock' => 'ZruÅ¡it blokovÃ¡nÃ­',
	'regexblock-view-stats' => 'Statistiky',
);

/** Church Slavic (ÑÐ»Ð¾Ð²Ñ£ÌÐ½ÑŒÑÐºÑŠ / â°”â°Žâ°‘â°‚â°¡â°â° â°”â°â°Ÿ)
 * @author ÐžÐ¹Ð›
 */
$messages['cu'] = array(
	'regexblock-form-username' => 'IP Ñ‡Ð¸ÑÐ»Ð¾ Ð¸Ð»Ð¸ Ð¿Ð¾ÌÐ»ÑŒê™ƒÑ”Ð²Ð°Ñ‚Ñ”Ð»ê™— Ð¸ÌÐ¼Ñ§ :',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'regexblock-view-all' => 'Oll',
);

/** Danish (dansk)
 * @author Byrial
 * @author Jon Harald SÃ¸by
 */
$messages['da'] = array(
	'regexblock-form-reason' => 'Begrundelse:',
	'regexblock-view-blocked' => 'Vis blokerede af:',
);

/** German (Deutsch)
 * @author ChrisiPK
 * @author Church of emacs
 * @author Imre
 * @author Kghbln
 * @author Melancholie
 * @author Purodha
 * @author Revolus
 * @author SVG
 * @author Umherirrender
 */
$messages['de'] = array(
	'regexblock' => 'Regex-Sperre',
	'regexblock-already-blocked' => '$1 ist bereits gesperrt.',
	'regexblock-block-log' => "Benutzername oder IP-Adresse '''$1''' wurde gesperrt",
	'regexblock-block-success' => 'Die Sperrung war erfolgreich.',
	'regexblock-currently-blocked' => 'Derzeit gesperrte Adressen:',
	'regexblock-desc' => 'ErmÃ¶glicht das Sperren von Benutzernamen und IP-Adressen mit Hilfe regulÃ¤rer AusdrÃ¼cke. Es wird ein Sperrmechanismus bereitgestellt sowie eine [[Special:Regexblock|Spezialseite]] zum HinzufÃ¼gen und Verwalten von Sperrungen ergÃ¤nzt',
	'regexblock-expire-duration' => '1 Stunde,2 Stunden,4 Stunden,6 Stunden,1 Tag,3 Tage,1 Woche,2 Wochen,1 Monat,3 Monate,6 Monate,1 Jahr,unbegrenzt',
	'regexblock-page-title' => 'Sperre von Benutzerkonten anhand regulÃ¤rer AusdrÃ¼cke',
	'regexblockstats' => 'Regex-Sperrstatistiken',
	'regexblock-help' => "Verwende das folgende Formular, um den Schreibzugriff einer bestimmten IP-Adresse oder eines Benutzerkontos zu sperren.

Diese Funktion sollte nur zur Verhinderung von Vandalismus und anderem Fehlverhalten, gemÃ¤ÃŸ der bestehenden Richtlinien, eingesetzt werden. ''Diese Seite ermÃ¶glicht es auch, nicht vorhandene Benutzerkonten zu sperren, sowie solche, die einen Ã¤hnliche Namen zu bestehenden Benutzerkonten haben. Beispielsweise bewirkt die Sperre von â€žTestâ€ auch die Sperre von â€žTest 2â€œ, usw.

Du kannst auch IP-Adressen sperren, so dass niemand, der sich unter der entsprechenden IP-Adressen anmeldet, Seiten bearbeiten kann. Achtung: Teile von IP-Adressen werden beim Sperren als Benutzername aufgefasst.

Falls kein Sperrgrund angegeben wird, wird eine StandardbegrÃ¼ndung verwendet.''",
	'regexblock-page-title-1' => 'Sperre Adressen anhand regulÃ¤rer AusdrÃ¼cke',
	'regexblock-reason-ip' => 'Aufgrund von Vandalismus oder anderem Fehlverhalten durch dich oder jemanden, der diese IP-Adresse mitbenutzt, wurde dieser IP-Adresse das Schreibrecht entzogen. [[$1|Kontaktiere uns]] bitte, sofern du denkst, dass es sich hierbei um einen Fehler handelt.',
	'regexblock-reason-name' => 'Aufgrund von Vandalismus oder anderem Fehlverhalten wurde diesem Benutzernamen das Schreibrecht entzogen. [[$1|Kontaktiere uns]] bitte, sofern du denkst, dass es sich hierbei um einen Fehler handelt.',
	'regexblock-reason-regex' => 'Aufgrund von Vandalismus oder anderem Fehlverhalten durch einen Benutzer mit einem Ã¤hnlichen Benutzernamen, wurde diesem Benutzernamen das Schreibrecht entzogen. Bitte erstelle entweder ein Benutzerkonto mit einem anderen Benutzernamen oder [[$1|kontaktiere uns]] bezÃ¼glich dieses Problems.',
	'regexblock-form-username' => 'IP-Adresse oder Benutzername:',
	'regexblock-form-reason' => 'Grund:',
	'regexblock-form-expiry' => 'Sperrdauer:',
	'regexblock-form-match' => 'Genauer Treffer',
	'regexblock-form-account-block' => 'Das Erstellen neuer Benutzerkonten blockieren',
	'regexblock-form-submit' => 'IP-Adresse/Benutzer sperren',
	'regexblock-form-submit-empty' => 'Bitte gib einen Benutzernamen oder eine IP-Adresse fÃ¼r die Sperrung an.',
	'regexblock-form-submit-regex' => 'Dies ist ein ungÃ¼ltiger regulÃ¤rer Ausdruck.',
	'regexblock-form-submit-expiry' => 'Bitte gib einen Sperrzeitraum an.',
	'regexblock-link' => 'mit regulÃ¤rem Ausdruck sperren',
	'regexblock-match-stats-record' => '$1 sperrte â€ž$2â€œ auf â€ž$3â€œ am $6 um $7 Uhr, angemeldet Ã¼ber Adresse â€ž$5â€œ',
	'regexblock-nodata-found' => 'Es wurden keine Daten gefunden.',
	'regexblock-stats-title' => 'Regex-Sperrstatistiken',
	'regexblock-unblock-success' => 'Die Entsperrung war erfolgreich.',
	'regexblock-unblock-log' => "Benutzername oder IP-Adresse '''$1''' wurde entsperrt",
	'regexblock-unblock-error' => 'Beim Entsperren von $1 ist ein Fehler aufgetreten. Vermutlich gibt es keinen solchen Benutzer.',
	'regexblock-regex-filter' => ' oder regulÃ¤rer Ausdruck:',
	'regexblock-view-blocked' => 'Ansicht gesperrt von:',
	'regexblock-view-all' => 'Alle',
	'regexblock-view-go' => 'Los',
	'regexblock-view-match' => '(genauer Treffer)',
	'regexblock-view-regex' => '(Regex-Treffer)',
	'regexblock-view-account' => '(Benutzerkontenerstellung blockiert)',
	'regexblock-view-reason' => 'Grund: $1',
	'regexblock-view-reason-default' => 'allgemeiner Grund',
	'regexblock-view-block-infinite' => 'permanente Sperrung',
	'regexblock-view-block-by' => 'gesperrt von:',
	'regexblock-view-block-unblock' => 'entsperren',
	'regexblock-view-stats' => 'Statistiken',
	'regexblock-view-empty' => 'Die Liste der gesperrten Benutzernamen und IP-Adressen ist leer.',
	'regexblock-view-time' => 'am $2 um $3 Uhr',
	'right-regexblock' => 'Benutzer auf allen Wikis der Wikifarm sperren',
);

/** German (formal address) (Deutsch (Sie-Form)â€Ž)
 * @author Imre
 * @author Kghbln
 * @author Revolus
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'regexblock-help' => "Verwenden Sie das folgende Formular, um den Schreibzugriff einer bestimmten IP-Adresse oder eines Benutzerkontos zu sperren.

Diese Funktion sollte nur zur Verhinderung von Vandalismus und anderem Fehlverhalten, gemÃ¤ÃŸ der bestehenden Richtlinien, eingesetzt werden. ''Diese Seite ermÃ¶glicht es auch, nicht vorhandene Benutzerkonten zu sperren, sowie solche, die einen Ã¤hnliche Namen zu bestehenden Benutzerkonten haben. Beispielsweise bewirkt die Sperre von â€žTestâ€ auch die Sperre von â€žTest 2â€œ, usw.

Sie kÃ¶nnen auch IP-Adressen sperren, so dass niemand, der sich unter der entsprechenden IP-Adressen anmeldet, Seiten bearbeiten kann. Achtung: Teile von IP-Adressen werden beim Sperren als Benutzername aufgefasst.

Falls kein Sperrgrund angegeben wird, wird eine StandardbegrÃ¼ndung verwendet.''",
	'regexblock-reason-ip' => 'Aufgrund von Vandalismus oder anderem Fehlverhalten durch Sie oder jemanden, der diese IP-Adresse mitbenutzt, wurde dieser IP-Adresse das Schreibrecht entzogen. [[$1|Kontaktiere Sie uns]] bitte, sofern Sie denken, dass es sich hierbei um einen Fehler handelt.',
	'regexblock-reason-name' => 'Aufgrund von Vandalismus oder anderem Fehlverhalten wurde diesem Benutzernamen das Schreibrecht entzogen. [[$1|Kontaktieren Sie uns]] bitte, sofern Sie denken, dass es sich hierbei um einen Fehler handelt.',
	'regexblock-reason-regex' => 'Aufgrund von Vandalismus oder anderem Fehlverhalten durch einen Benutzer mit einem Ã¤hnlichen Benutzernamen, wurde diesem Benutzernamen das Schreibrecht entzogen. Bitte erstellen Sie entweder ein Benutzerkonto mit einem anderen Benutzernamen oder [[$1|kontaktieren Sie uns]] bezÃ¼glich dieses Problems.',
	'regexblock-form-submit-empty' => 'Bitte geben Sie einen Benutzernamen oder eine IP-Adresse fÃ¼r die Sperrung an.',
	'regexblock-form-submit-expiry' => 'Bitte geben Sie einen Sperrzeitraum an.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'regexblock-block-log' => "NameyÃª karberi ya zi adresa IPÃª '''$1'''  kÄ±lit biya.",
	'regexblock-form-username' => 'Adresa IP yana namey karberi:',
	'regexblock-view-all' => 'PÃªro',
	'regexblock-view-go' => 'Åžo',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'regexblock' => 'BlokÄ›rowanje pÅ›ez regularne wuraze',
	'regexblock-already-blocked' => '$1 jo juÅ¾o blokÄ›rowany.',
	'regexblock-block-log' => "WuÅ¾ywarske mÄ› abo IP-adresa '''$1''' jo se blokÄ›rowaÅ‚o.",
	'regexblock-block-success' => 'BlokÄ›rowanje wuspÄ›Å¡ne',
	'regexblock-currently-blocked' => 'Tuchylu blokÄ›rowane adrese:',
	'regexblock-desc' => 'RozÅ¡yrjenje za blokÄ›rowanje wuÅ¾ywarskich mjenjow a IP-adresow pÅ›ez regularne wuraze. WopÅ›imujo ako blokÄ›rowaÅ„ski mechanizm tak teke [[Special:Regexblock|specialny bok]] za pÅ›idanje/zastojanje blokÄ›rowanjow',
	'regexblock-expire-duration' => '1 gÃ³Åºina,2 gÃ³Åºinje,4 gÃ³Åºiny,6 gÃ³Åºinow,1 ÅºeÅ„,3 dny,1 tyÅºeÅ„,2 tyÅºenja,1 mjasec,3 mjasece,6 mjasecow,1 lÄ›to,njewÄ›sty',
	'regexblock-page-title' => 'BlokÄ›rowanje mjenjow pÅ›ez regularne wuraze',
	'regexblockstats' => 'Statistika blokÄ›rowanjow pÅ›ez regularne wuraze',
	'regexblock-help' => 'WuÅ¾yj slÄ›dujucy formular, aby blokÄ›rowaÅ‚ pisaÅ„ski pÅ›istup za IP-adresu abo wuÅ¾ywarske mÄ›.
To by mÄ›Å‚o se jano cyniÅ›, aby zajÅºowaÅ‚o wandalizm a w makanju z zasadach.
\'\'ToÅ› ten bok buÅºo Å›i zmÃ³Å¾njaÅ›, samo njeeksistujucych wuÅ¾ywarjow blokÄ›rowaÅ› a buÅºo teke wuÅ¾ywarjow z pÃ³dobnym mjenim blokÄ›rowaÅ›, t.j. "Test" buÅºo se gromaÅºe "Test 2" atd. blokÄ›rowaÅ›. MÃ³Å¾oÅ¡ teke dopoÅ‚ne IP-adrese blokÄ›rowaÅ›, to groni, aÅ¾ nichto, kÃ³taryÅ¾ se z nimi pÅ›izjawja, njamÃ³Å¾o boki wobÅºÄ›Å‚aÅ›. PÅ›ispomnjeÅ›e: ÅºÄ›lne IP-adrese wobchadaju se ako wuÅ¾ywarske mjenja, aby rozsuÅºiÅ‚ wo blokÄ›rowanju. Jolic pÅ›icyna njejo pÃ³dana, buÅºo se powÅ¡ykna pÅ›icyna wuÅ¾iwaÅ›.\'\'',
	'regexblock-page-title-1' => 'Adresu z pomocu regularnych wurazow blokÄ›rowaÅ›',
	'regexblock-reason-ip' => 'ToÅ› tej IP-adresy se zawoborujo wobÅºÄ›Å‚owanje dla wandalizma abo drugego mÃ³lenja wÃ³t tebje abo nÄ›kogo, kÃ³taryÅ¾ ma samsku IP-adresu.
Jolic wÄ›riÅ¡, aÅ¾ to jo zmÃ³lenje, pÅ¡osym [[$1|staj se z nami do zwiska]].',
	'regexblock-reason-name' => 'ToÅ› tomu wuÅ¾ywarskemu mjenjeju se zawoborujo wobÅºÄ›Å‚owanje, dla wandalizma abo drugego mÃ³lenja.
Jolic wÄ›riÅ¡, aÅ¾ to jo zamÃ³lenje, pÅ¡osym [[$1|staj se z nami do zwiska]].',
	'regexblock-reason-regex' => 'ToÅ› tomu wuÅ¾ywarskemu mjenjeju se zawoborujo wobÅºÄ›Å‚owanje, dla wandalizma abo drugego mÃ³lenja wÃ³t wuÅ¾ywarja z pÃ³dobnym mjenim.
PÅ¡osym napÃ³raj druge wuÅ¾ywarske mÄ› abo [[$1|informÄ›ruj nas]] wÃ³ toÅ› tom problemje.',
	'regexblock-form-username' => 'IP-adresa abo wuÅ¾ywarske mÄ›:',
	'regexblock-form-reason' => 'PÅ›icyna:',
	'regexblock-form-expiry' => 'WÃ³tbÄ›gnjo:',
	'regexblock-form-match' => 'Eksaktne makanje',
	'regexblock-form-account-block' => 'ZaÅ‚oÅ¾enje nowych kontow blokÄ›rowaÅ›',
	'regexblock-form-submit' => 'ToÅ› togo wuÅ¾ywarja blokÄ›rowaÅ›',
	'regexblock-form-submit-empty' => 'PÃ³daj wuÅ¾ywarske mÄ› abo IP-adresu za blokÄ›rowanje.',
	'regexblock-form-submit-regex' => 'NjepÅ‚aÅ›iwy regularny wuraz.',
	'regexblock-form-submit-expiry' => 'PÅ¡osym pÃ³daj cas pÅ›epadnjenja.',
	'regexblock-link' => 'z regularnym wurazom blokÄ›rowaÅ›',
	'regexblock-match-stats-record' => "$1 jo blokÄ›rowaÅ‚ '$2' na '$3' '$4', pÅ›izjawjony wÃ³t adrese '$5'",
	'regexblock-nodata-found' => 'Å½edne daty namakane',
	'regexblock-stats-title' => 'Statistika blokÄ›rowanjow pÅ›ez regularne wuraze',
	'regexblock-unblock-success' => 'PÅ›ipuÅ¡Ä‡enje wuspÄ›Å¡nje',
	'regexblock-unblock-log' => "WuÅ¾ywarske mÄ› abo IP-adrese '''$1''' jo se pÅ›ipuÅ¡Ä‡iÅ‚o.",
	'regexblock-unblock-error' => 'ZmÃ³lka pÅ›i pÅ›ipuÅ¡Ä‡anju $1.
Nejskerjej taki wuÅ¾ywaÅ• njejo.',
	'regexblock-regex-filter' => 'abo gÃ³dnota regularnego wuraza:',
	'regexblock-view-blocked' => 'NaglÄ›d blokÄ›rowany wÃ³t:',
	'regexblock-view-all' => 'WÅ¡ykne',
	'regexblock-view-go' => 'Å¹i',
	'regexblock-view-match' => '(eksaktne makanje)',
	'regexblock-view-regex' => '(wÃ³tpowÄ›dujo regularnemu wurazoju)',
	'regexblock-view-account' => '(BlokÄ›rowanje zaÅ‚oÅ¾enja kontow)',
	'regexblock-view-reason' => 'PÅ›icyna: $1',
	'regexblock-view-reason-default' => 'powÅ¡ykna pÅ›icyna',
	'regexblock-view-block-infinite' => 'wobstawne blokÄ›rowanje',
	'regexblock-view-block-by' => 'blokÄ›rowany wÃ³t:',
	'regexblock-view-block-unblock' => 'pÅ›ipuÅ¡Ä‡iÅ›',
	'regexblock-view-stats' => 'statistiske pÃ³daÅ›a',
	'regexblock-view-empty' => 'LisÄ‡ina blokÄ›rowanych mjenjow a adresow jo prozna.',
	'regexblock-view-time' => 'na $1',
	'right-regexblock' => 'Zawoborujo wuÅ¾ywarjam wobÅºÄ›Å‚owanje na wÅ¡ych wikijach na wikijowej farmje',
);

/** Ewe (eÊ‹egbe)
 * @author Natsubee
 */
$messages['ee'] = array(
	'regexblock-form-expiry' => 'Nuwuwu:',
	'regexblock-view-go' => 'Yi',
);

/** Greek (Î•Î»Î»Î·Î½Î¹ÎºÎ¬)
 * @author Consta
 * @author Dada
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'regexblock' => 'Î¤Î±ÎºÏ„Î¹ÎºÎ® Î­ÎºÏ†ÏÎ±ÏƒÎ· Ï†ÏÎ±Î³Î®Ï‚',
	'regexblock-already-blocked' => 'ÎŸ $1 ÎµÎ¯Î½Î±Î¹ Î®Î´Î· Ï†ÏÎ±Î³Î¼Î­Î½Î¿Ï‚',
	'regexblock-block-success' => 'Î— Ï†ÏÎ±Î³Î® Ï€Î­Ï„Ï…Ï‡Îµ',
	'regexblock-currently-blocked' => 'Î¥Ï€Î¬ÏÏ‡Î¿Ï…ÏƒÎµÏ‚ Ï†ÏÎ±Î³Î¼Î­Î½ÎµÏ‚ Î´Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÎ¹Ï‚:',
	'regexblock-page-title' => 'ÎšÎ±Î½Î¿Î½Î¹ÎºÎ® Ï†ÏÎ±Î³Î® Î¿Î½ÏŒÎ¼Î±Ï„Î¿Ï‚ Î­ÎºÏ†ÏÎ±ÏƒÎ·Ï‚',
	'regexblockstats' => 'Î¤Î±ÎºÏ„Î¹ÎºÎ® Î­ÎºÏ†ÏÎ±ÏƒÎ· ÏƒÏ„Î±Ï„Î¹ÏƒÏ„Î¹ÎºÏŽÎ½ Ï†ÏÎ±Î³Î®Ï‚',
	'regexblock-form-username' => 'Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· IP Î® ÏŒÎ½Î¿Î¼Î± Ï‡ÏÎ®ÏƒÏ„Î·',
	'regexblock-form-reason' => 'Î›ÏŒÎ³Î¿Ï‚:',
	'regexblock-form-expiry' => 'Î›Î®Î¾Î·:',
	'regexblock-form-match' => 'Î‘ÎºÏÎ¹Î²Î®Ï‚ Î±Î½Ï„Î¹ÏƒÏ„Î¿Î¹Ï‡Î¯Î±',
	'regexblock-form-account-block' => 'Î¦ÏÎ±Î³Î® Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î±Ï‚ Î½Î­Ï‰Î½ Î»Î¿Î³Î±ÏÎ¹Î±ÏƒÎ¼ÏŽÎ½',
	'regexblock-form-submit' => 'Î¦ÏÎ±Î³Î® Î±Ï…Ï„Î¿Ï Ï„Î¿Ï… Ï‡ÏÎ®ÏƒÏ„Î·',
	'regexblock-form-submit-regex' => 'ÎœÎ· Î­Î³ÎºÏ…ÏÎ· Ï„Î±ÎºÏ„Î¹ÎºÎ® Î­ÎºÏ†ÏÎ±ÏƒÎ·',
	'regexblock-form-submit-expiry' => 'Î Î±ÏÎ±ÎºÎ±Î»Î¿ÏÎ¼Îµ Î¿ÏÎ¯ÏƒÏ„Îµ Î¼Î¹Î± Ï€ÎµÏÎ¯Î¿Î´Î¿ Î»Î®Î¾Î·Ï‚.',
	'regexblock-nodata-found' => 'Î”ÎµÎ½ Î²ÏÎ­Î¸Î·ÎºÎ±Î½ Î´ÎµÎ´Î¿Î¼Î­Î½Î±',
	'regexblock-unblock-success' => 'Î— Î¬ÏÏƒÎ· Ï†ÏÎ±Î³Î®Ï‚ Î¿Î»Î¿ÎºÎ»Î·ÏÏŽÎ¸Î·ÎºÎµ ÎµÏ€Î¹Ï„Ï…Ï‡ÏŽÏ‚',
	'regexblock-regex-filter' => ' Î® Ï„Î¹Î¼Î® Ï„Î±ÎºÏ„Î¹ÎºÎ®Ï‚ Î­ÎºÏ†ÏÎ±ÏƒÎ·Ï‚:',
	'regexblock-view-blocked' => 'Î ÏÎ¿Î²Î¿Î»Î® Ï†ÏÎ±Î³Î¼Î­Î½Ï‰Î½ Î±Ï€ÏŒ:',
	'regexblock-view-all' => 'ÎŒÎ»Î±',
	'regexblock-view-go' => 'Î Î®Î³Î±Î¹Î½Îµ',
	'regexblock-view-match' => '(Î±ÎºÏÎ¹Î²Î®Ï‚ Î±Î½Ï„Î¹ÏƒÏ„Î¿Î¹Ï‡Î¯Î±)',
	'regexblock-view-regex' => '(Î±Î½Ï„Î¹ÏƒÏ„Î¿Î¹Ï‡Î¯Î± Ï„Î±ÎºÏ„Î¹ÎºÎ®Ï‚ Î­ÎºÏ†ÏÎ±ÏƒÎ·Ï‚)',
	'regexblock-view-account' => '(Ï†ÏÎ±Î³Î® Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î±Ï‚ Î»Î¿Î³Î±ÏÎ¹Î±ÏƒÎ¼Î¿Ï)',
	'regexblock-view-reason' => 'Î›ÏŒÎ³Î¿Ï‚: $1',
	'regexblock-view-reason-default' => 'Î³ÎµÎ½Î¹ÎºÏŒÏ‚ Î»ÏŒÎ³Î¿Ï‚',
	'regexblock-view-block-infinite' => 'Î¼ÏŒÎ½Î¹Î¼Î· Ï†ÏÎ±Î³Î®',
	'regexblock-view-block-by' => 'Ï†ÏÎ±Î³Î¼Î­Î½Î¿Ï‚ Î±Ï€ÏŒ:',
	'regexblock-view-block-unblock' => 'Î¬ÏÏƒÎ· Ï†ÏÎ±Î³Î®Ï‚',
	'regexblock-view-stats' => 'ÏƒÏ„Î±Ï„Î¹ÏƒÏ„Î¹ÎºÎ¬',
	'regexblock-view-time' => 'ÏƒÏ„Î¹Ï‚ $1',
);

/** Esperanto (Esperanto)
 * @author LyzTyphone
 * @author Michawiki
 * @author Yekrats
 */
$messages['eo'] = array(
	'regexblock-already-blocked' => '$1 jam estas forbarita.',
	'regexblock-block-log' => "Salutnomo aÅ­ IP-adreso '''$1''' estis forbarita.",
	'regexblock-block-success' => 'Forbaro sukcesis',
	'regexblock-currently-blocked' => 'Nune forbaritaj adresoj:',
	'regexblock-form-username' => 'IP Adreso aÅ­ salutnomo:',
	'regexblock-form-reason' => 'Kialo:',
	'regexblock-form-expiry' => 'Findato:',
	'regexblock-form-match' => 'Preciza kongruo',
	'regexblock-form-submit' => 'Bloki la uzanton',
	'regexblock-form-submit-regex' => 'Malvalida regulara esprimo.',
	'regexblock-unblock-success' => 'Malforbaro sukcesis',
	'regexblock-unblock-log' => "Salutnomo aÅ­ IP-adreso '''$1''' estis restarigita.",
	'regexblock-unblock-error' => 'Eraro malforbarante $1.
VerÅajne ne estas uzanto kun tiu nomo.',
	'regexblock-view-all' => 'Äˆiuj',
	'regexblock-view-go' => 'Ek!',
	'regexblock-view-reason' => 'kialo: $1',
	'regexblock-view-reason-default' => 'malspecifa kialo',
	'regexblock-view-block-infinite' => 'Ä‰iama bloko',
	'regexblock-view-block-by' => 'forbarita de:',
	'regexblock-view-block-unblock' => 'restarigu',
	'regexblock-view-stats' => 'statistikoj',
	'regexblock-view-time' => 'je $1',
);

/** Spanish (espaÃ±ol)
 * @author Crazymadlover
 * @author Hamilton Abreu
 * @author Imre
 * @author Jatrobat
 * @author Piolinfax
 * @author Sanbec
 * @author Translationista
 */
$messages['es'] = array(
	'regexblock' => 'Bloque de expresiÃ³n regular',
	'regexblock-already-blocked' => '"$1" ya estÃ¡ bloqueado.',
	'regexblock-block-log' => "Nombre de usuario o direcciÃ³n IP '''$1''' ha sido bloqueada.",
	'regexblock-block-success' => 'Bloqueo fue un Ã©xito',
	'regexblock-currently-blocked' => 'Direcciones actualmente bloqueadas:',
	'regexblock-desc' => 'ExtensiÃ³n usada para bloquear nombres de usuario y direcciones de IP con expresiones regulares. Contiene el mecanismo de bloqueo y una [[Special:Regexblock|special page]] para aÃ±adir/administrar bloqueos',
	'regexblock-expire-duration' => '1 hora,2 horas,4 horas,6 horas,1 dÃ­a,3 dÃ­as,1 semana,2 semanas,1 mes,3 meses,6 meses,1 aÃ±o,infinito',
	'regexblock-page-title' => 'Bloque de nombre de expresiones regulares',
	'regexblockstats' => 'EstadÃ­sticas del bloque de expresiones regulares',
	'regexblock-help' => 'Utilice el formulario de abajo para bloquear acceso de escritura de un usuario o direcciÃ³n IP especÃ­ficos.
Esto se deberÃ¡ hacer para prevenir actos vandÃ¡licos y en concordancia con la polÃ­tica.
\'\'Esta pÃ¡gina le permite incluso bloquear usuarios no existentes, y tambiÃ©n bloquearÃ¡ usuarios con nombres similares al introducido. Por ejemplo: "Prueba" se bloquearÃ¡ en conjunto con "Prueba 2", etc.
TambiÃ©n puede bloquear direcciones completas de IP, con lo que nadie que acceda al sistema desde ahÃ­ pueda editar pÃ¡ginas.
ObservaciÃ³n: Las direcciones IP parciales serÃ¡n tratadas como nombres de usuario en la determinaciÃ³n de bloqueos.
Si no se especifica una razÃ³n, se utilizarÃ¡ una razÃ³n genÃ©rica predeterminada.\'\'',
	'regexblock-page-title-1' => 'Bloquear direcciones por medio de expresiones regulares',
	'regexblock-reason-ip' => 'Esta direcciÃ³n IP estÃ¡ prevenida de editar a causa de vandalismo u otra desorganizaciÃ³n tuya o pde alguien que comparte tu direcciÃ³n IP.
Si crees que esto es un error, por favor [[$1|contactanos]]',
	'regexblock-reason-name' => 'Este nombre de usuario estÃ¡ prevenido de editar a causa de vandalismo u otra desorganizaciÃ³n.
Si crees que esto es un error, por favor [[$1|contactanos]]',
	'regexblock-reason-regex' => 'Este nombre de usuario estÃ¡ prevenido de editar a causa de vandalismo u otra desorganizaciÃ³n hecha por un usuario con un nombre similar.
Por favor crea un nombre alternativo o [[$1|contactanos]] acerca del problema',
	'regexblock-form-username' => 'DirecciÃ³n IP o nombre de usuario:',
	'regexblock-form-reason' => 'Motivo:',
	'regexblock-form-expiry' => 'ExpiraciÃ³n:',
	'regexblock-form-match' => 'Coincidencia exacta',
	'regexblock-form-account-block' => 'Bloquear creaaciÃ³n de nuevas cuentas',
	'regexblock-form-submit' => 'Bloquear este usuario',
	'regexblock-form-submit-empty' => 'De un nombre de usuario o una direcciÃ³n IP a bloquear.',
	'regexblock-form-submit-regex' => 'ExpresiÃ³n regular invÃ¡lida.',
	'regexblock-form-submit-expiry' => 'Por favor especifique un periodo de expiraciÃ³n.',
	'regexblock-link' => 'bloque con expresiÃ³n regular',
	'regexblock-match-stats-record' => "$1 bloqueado '$2' en '$3' en '$4', iniciando sesiÃ³n desde direcciÃ³n '$5'",
	'regexblock-nodata-found' => 'Sin datos encontrados',
	'regexblock-stats-title' => 'EstadÃ­sticas del bloque de expresiones regulares',
	'regexblock-unblock-success' => 'Desbloqueo fue un Ã©xito',
	'regexblock-unblock-log' => "Nombre de usuario o direcciÃ³n IP '''$1''' ha sido bloqueada.",
	'regexblock-unblock-error' => 'Error desbloqueando $1.
Probablemente no existe tal usuario.',
	'regexblock-regex-filter' => 'o valor de expresiÃ³n regular:',
	'regexblock-view-blocked' => 'Ver bloqueos por:',
	'regexblock-view-all' => 'Todos',
	'regexblock-view-go' => 'Ir',
	'regexblock-view-match' => '(coincidencia exacta)',
	'regexblock-view-regex' => '(coincidencia de expresiÃ³n regular)',
	'regexblock-view-account' => '(bloqueo de creaciÃ³n de cuenta)',
	'regexblock-view-reason' => 'Motivo: $1',
	'regexblock-view-reason-default' => 'razÃ³n genÃ©rica',
	'regexblock-view-block-infinite' => 'bloqueo permanente',
	'regexblock-view-block-by' => 'bloqueado por:',
	'regexblock-view-block-unblock' => 'desbloquear',
	'regexblock-view-stats' => 'EstadÃ­sticas',
	'regexblock-view-empty' => 'La lista de nombres y direcciones bloqueadas estÃ¡ vacÃ­a',
	'regexblock-view-time' => 'en $1',
	'right-regexblock' => 'Bloquea el permiso de usuario de editar en todas las wikis de la granja wiki',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'regexblock-expire-duration' => '1 tund,2 tundi,4 tundi,6 tundi,1 pÃ¤ev,3 pÃ¤eva,1 nÃ¤dal,2 nÃ¤dalat,1 kuu,3 kuud,6 kuud,1 aasta,igavene',
	'regexblock-form-username' => 'IP-aadress vÃµi kasutajanimi:',
	'regexblock-form-reason' => 'PÃµhjus:',
	'regexblock-form-expiry' => 'Aegub:',
	'regexblock-form-submit' => 'Blokeeri see kasutaja',
);

/** Basque (euskara)
 * @author An13sa
 * @author Kobazulo
 * @author à¶´à·ƒà·’à¶³à·” à¶šà·à·€à·’à¶±à·Šà¶¯
 */
$messages['eu'] = array(
	'regexblock-form-username' => 'IP helbidea edo lankide izena:',
	'regexblock-form-reason' => 'Arrazoia:',
	'regexblock-form-expiry' => 'Iraungipena:',
	'regexblock-form-submit' => 'Erabiltzaile hau blokeatu',
	'regexblock-nodata-found' => 'Ez da daturik aurkitu',
	'regexblock-view-all' => 'Dena',
	'regexblock-view-go' => 'Joan',
	'regexblock-view-reason' => 'arrazoia: $1',
);

/** Persian (ÙØ§Ø±Ø³ÛŒ)
 * @author Zack90
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'regexblock' => 'Ù…Ø³Ø¯ÙˆØ¯Ú©Ø±Ø¯Ù† Ø¨Ø§ Ø¹Ø¨Ø§Ø±Øª Ø¨Ø§Ù‚Ø§Ø¹Ø¯Ù‡',
	'regexblock-already-blocked' => '$1 Ø¯Ø± Ø­Ø§Ù„ Ø­Ø§Ø¶Ø± Ù…Ø³Ø¯ÙˆØ¯ Ø´Ø¯Ù‡â€ŒØ§Ø³Øª.',
	'regexblock-block-log' => "Ù†Ø§Ù… Ú©Ø§Ø±Ø¨Ø±ÛŒ ÛŒØ§ Ù†Ø´Ø§Ù†ÛŒ Ø¢ÛŒâ€ŒÙ¾ÛŒ '''$1''' Ù…Ø³Ø¯ÙˆØ¯ Ø´Ø¯Ù‡â€ŒØ§Ø³Øª.",
	'regexblock-block-success' => 'Ù…Ø³Ø¯ÙˆØ¯Ú©Ø±Ø¯Ù† Ø¨Ø§ Ù…ÙˆÙÙ‚ÛŒØª Ø§Ù†Ø¬Ø§Ù… Ø´Ø¯',
	'regexblock-currently-blocked' => 'Ù†Ø´Ø§Ù†ÛŒâ€ŒÙ‡Ø§ÛŒÛŒ Ú©Ù‡ Ø¯Ø± Ø­Ø§Ù„ Ø­Ø§Ø¶Ø± Ù…Ø³Ø¯ÙˆØ¯ Ø´Ø¯Ù‡â€ŒØ§Ù†Ø¯:',
	'regexblock-expire-duration' => 'Û± Ø³Ø§Ø¹Øª,Û² Ø³Ø§Ø¹Øª,Û´ Ø³Ø§Ø¹Øª,Û¶ Ø³Ø§Ø¹Øª,Û± Ø±ÙˆØ²,Û³ Ø±ÙˆØ²,Û± Ù‡ÙØªÙ‡,Û² Ù‡ÙØªÙ‡,Û± Ù…Ø§Ù‡,Û³ Ù…Ø§Ù‡,Û¶ Ù…Ø§Ù‡,Û± Ø³Ø§Ù„,Ø¨ÛŒâ€ŒÙ¾Ø§ÛŒØ§Ù†',
	'regexblock-form-username' => 'Ù†Ø´Ø§Ù†ÛŒ Ø¢ÛŒâ€ŒÙ¾ÛŒ ÛŒØ§ Ù†Ø§Ù… Ú©Ø§Ø±Ø¨Ø±ÛŒ:',
	'regexblock-form-reason' => 'Ø¯Ù„ÛŒÙ„:',
	'regexblock-form-expiry' => 'Ø²Ù…Ø§Ù† Ø³Ø±Ø¢Ù…Ø¯Ù†:',
	'regexblock-form-match' => 'ØªØ·Ø¨ÛŒÙ‚ Ø¯Ù‚ÛŒÙ‚',
	'regexblock-form-account-block' => 'Ù…Ø³Ø¯ÙˆØ¯Ú©Ø±Ø¯Ù† Ø§ÛŒØ¬Ø§Ø¯ Ø­Ø³Ø§Ø¨â€ŒÙ‡Ø§ÛŒ Ú©Ø§Ø±Ø¨Ø±ÛŒ Ø¬Ø¯ÛŒØ¯',
	'regexblock-form-submit' => 'Ù…Ø³Ø¯ÙˆØ¯Ú©Ø±Ø¯Ù† Ø§ÛŒÙ† Ú©Ø§Ø±Ø¨Ø±',
	'regexblock-form-submit-empty' => 'ÛŒÚ© Ù†Ø§Ù… Ú©Ø§Ø±Ø¨Ø±ÛŒ ÛŒØ§ Ù†Ø´Ø§Ù†ÛŒ Ø¢ÛŒâ€ŒÙ¾ÛŒ Ø¨Ø±Ø§ÛŒ Ù…Ø³Ø¯ÙˆØ¯Ø´Ø¯Ù† Ø¨Ø¯Ù‡ÛŒØ¯.',
	'regexblock-form-submit-regex' => 'Ø¹Ø¨Ø§Ø±Øª Ø¨Ø§Ù‚Ø§Ø¹Ø¯Ù‡Ù” Ù†Ø§Ù…Ø¹ØªØ¨Ø±',
	'regexblock-link' => 'Ù…Ø³Ø¯ÙˆØ¯ Ú©Ø±Ø¯Ù† Ø¨Ø§ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§Ø² Ø¹Ø¨Ø§Ø±Øª Ø¨Ø§Ù‚Ø§Ø¹Ø¯Ù‡',
	'regexblock-nodata-found' => 'Ù‡ÛŒÚ† Ø¯Ø§Ø¯Ù‡â€ŒØ§ÛŒ ÛŒØ§ÙØª Ù†Ø´Ø¯',
	'regexblock-regex-filter' => ' ÛŒØ§ Ù…Ù‚Ø¯Ø§Ø± Ø¹Ø¨Ø§Ø±Øª Ø¨Ø§Ù‚Ø§Ø¹Ø¯Ù‡:',
	'regexblock-view-blocked' => 'Ù†Ù…Ø§ÛŒØ´ Ù…Ø³Ø¯ÙˆØ¯Ù‡â€ŒØ´Ø¯Ù‡â€ŒÙ‡Ø§ ØªÙˆØ³Ø·:',
	'regexblock-view-all' => 'Ù‡Ù…Ù‡',
	'regexblock-view-go' => 'Ø±ÙØªÙ†',
	'regexblock-view-account' => '(Ù…Ø³Ø¯ÙˆØ¯Ú©Ø±Ø¯Ù† Ø§ÛŒØ¬Ø§Ø¯ Ø­Ø³Ø§Ø¨)',
	'regexblock-view-reason' => 'Ø¯Ù„ÛŒÙ„: $1',
	'regexblock-view-reason-default' => 'Ø¯Ù„ÛŒÙ„ Ø¹Ù…ÙˆÙ…ÛŒ',
	'regexblock-view-block-infinite' => 'Ù…Ø³Ø¯ÙˆØ¯Ú©Ø±Ø¯Ù† Ø¯Ø§Ø¦Ù…',
	'regexblock-view-block-by' => 'Ù…Ø³Ø¯ÙˆØ¯Ú©Ù†Ù†Ø¯Ù‡:',
	'regexblock-view-block-unblock' => 'Ø¢Ø²Ø§Ø¯Ø³Ø§Ø²ÛŒ',
	'regexblock-view-stats' => 'Ø¢Ù…Ø§Ø±',
	'regexblock-view-time' => 'Ø¯Ø± $1',
);

/** Finnish (suomi)
 * @author Crt
 * @author Option
 * @author Str4nd
 */
$messages['fi'] = array(
	'regexblock-already-blocked' => '$1 on jo estetty.',
	'regexblock-block-log' => "KÃ¤yttÃ¤jÃ¤tunnus tai IP-osoite '''$1''' on nyt estetty.",
	'regexblock-block-success' => 'EstÃ¤minen onnistui',
	'regexblock-currently-blocked' => 'TÃ¤llÃ¤ hetkellÃ¤ estetyt osoitteet:',
	'regexblock-expire-duration' => '1 tunti,2 tuntia,4 tuntia,6 tuntia,1 vuorokausi,3 vuorokautta,1 viikko,2 viikkoa,1 kuukausi,3 kuukautta,6 kuukautta,1 vuosi,ikuinen',
	'regexblock-form-username' => 'IP-osoite tai kÃ¤yttÃ¤jÃ¤tunnus:',
	'regexblock-form-reason' => 'Syy:',
	'regexblock-form-expiry' => 'Kesto:',
	'regexblock-form-match' => 'Tarkka osuma',
	'regexblock-form-account-block' => 'EstÃ¤ uusien tunnusten luonti',
	'regexblock-form-submit' => 'EstÃ¤ tÃ¤mÃ¤ kÃ¤yttÃ¤jÃ¤',
	'regexblock-form-submit-empty' => 'Anna estettÃ¤vÃ¤n kÃ¤yttÃ¤jÃ¤tunnus tai IP-osoite.',
	'regexblock-nodata-found' => 'Tietoja ei lÃ¶ytynyt',
	'regexblock-unblock-success' => 'Eston poisto onnistui',
	'regexblock-unblock-log' => "Eston poistaminen kÃ¤yttÃ¤jÃ¤tunnukselta tai IP-osoitteelta '''$1''' on onnistunut.",
	'regexblock-unblock-error' => 'Virhe purkaessa estoa $1.
TodennÃ¤kÃ¶isesti kyseistÃ¤ kÃ¤yttÃ¤jÃ¤Ã¤ ei ole olemassa.',
	'regexblock-view-all' => 'Kaikki',
	'regexblock-view-go' => 'Siirry',
	'regexblock-view-match' => '(tarkka osuma)',
	'regexblock-view-account' => '(tunnusten luominen estetty)',
	'regexblock-view-reason' => 'syy: $1',
	'regexblock-view-reason-default' => 'yleinen syy',
	'regexblock-view-block-infinite' => 'pysyvÃ¤ esto',
	'regexblock-view-block-by' => 'estÃ¤nyt:',
	'regexblock-view-block-unblock' => 'poista esto',
	'regexblock-view-stats' => 'tilastot',
	'regexblock-view-empty' => 'Estettyjen kÃ¤yttÃ¤jÃ¤tunnuksien sekÃ¤ osoitteiden lista on tyhjÃ¤.',
	'right-regexblock' => 'EstÃ¤Ã¤ kÃ¤yttÃ¤jiÃ¤ muokkaamasta kaikissa wikifarmin wikeissÃ¤',
);

/** French (franÃ§ais)
 * @author Crochet.david
 * @author IAlex
 * @author Urhixidur
 * @author Verdy p
 */
$messages['fr'] = array(
	'regexblock' => 'Expressions rationnelles pour bloquer un utilisateur ou une IP',
	'regexblock-already-blocked' => '$1 est dÃ©jÃ  bloquÃ©.',
	'regexblock-block-log' => "Lâ€™Utilisateur ou lâ€™adresse IP '''$1''' a Ã©tÃ© bloquÃ©.",
	'regexblock-block-success' => 'Le blocage a rÃ©ussi',
	'regexblock-currently-blocked' => 'Adresses actuellement bloquÃ©es :',
	'regexblock-desc' => 'Extension utilisÃ©e pour bloquer des utilisateurs ou des adresses IP avec des expressions rationnelles. Contient Ã  la fois un mÃ©canisme de blocage ainsi quâ€™[[Special:Regexblock|une page]] pouvant ajouter et gÃ©rer les blocages.',
	'regexblock-expire-duration' => '1 heure,2 heures,4 heures,6 hours,1 jour,3 jours,1 semaine,2 semaines,1 mois,3 mois,6 mois,1 and,infini',
	'regexblock-page-title' => 'Blocage dâ€™un nom par une expression rationnelle',
	'regexblockstats' => 'Statistiques sur les blocages par expressions rationnelles',
	'regexblock-help' => "Utilisez le formulaire ci-dessous pour bloquer lâ€™accÃ¨s en Ã©criture dâ€™une adresse IP ou dâ€™un nom dâ€™utilisateur.
Ceci doit Ãªtre fait uniquement pour Ã©viter tout vandalisme et conformÃ©ment aux rÃ¨gles prescrites sur le projet.
''Cette page vous permet mÃªme de bloquer des utilisateurs non enregistrÃ©s et ceux prÃ©sentant des noms similaires au nom donnÃ© : par exemple, Â« Test Â» sera bloquÃ© en mÃªme temps que Â« Test 2 Â» etc. Vous pouvez aussi bloquer des adresses IP complÃ¨tes, ce qui signifie que personne connectÃ© depuis celles-ci ne pourra modifier des pages. Note : des adresses IP partielles seront considÃ©rÃ©es comme des noms dâ€™utilisateur lors du blocage. Si aucun motif nâ€™est indiquÃ© en commentaire, un motif par dÃ©faut sera indiquÃ©.''",
	'regexblock-page-title-1' => 'Blocage dâ€™une adresse utilisant une expression rationnelle',
	'regexblock-reason-ip' => 'Cette adresse IP nâ€™a pas les droits de modification pour cause de vandalisme ou autres mÃ©faits analogues commis par vous ou quelquâ€™un dâ€™autre partageant cette adresse IP.
Si vous Ãªtes persuadÃ©{{GENDER:||e|(e)}} quâ€™il sâ€™agit dâ€™une erreur, [[$1|contactez-nous]].',
	'regexblock-reason-name' => 'Cet utilisateur nâ€™a pas les droits de modification pour cause de vandalisme ou autres mÃ©faits analogues.
Si vous Ãªtes persuadÃ©{{GENDER:||e|(e)}} quâ€™il sâ€™agit dâ€™une erreur, [[$1|contactez-nous]].',
	'regexblock-reason-regex' => 'Cet utilisateur est Ã©cartÃ© de toute modification pour cause de vandalisme ou autres faits analogues commis par un utilisateur ayant un nom similaire. Veuillez crÃ©er un autre compte ou [[$1|contactez-nous]] pour signaler le problÃ¨me.',
	'regexblock-form-username' => 'Adresse IP ou Utilisateur :',
	'regexblock-form-reason' => 'Motif :',
	'regexblock-form-expiry' => 'Expiration :',
	'regexblock-form-match' => 'Terme exact',
	'regexblock-form-account-block' => 'Interdire la crÃ©ation dâ€™un nouveau compte.',
	'regexblock-form-submit' => 'Bloquer cet utilisateur',
	'regexblock-form-submit-empty' => 'Indiquez un nom dâ€™utilisateur ou une adresse IP Ã  bloquer.',
	'regexblock-form-submit-regex' => 'Expression rationnelle incorrecte.',
	'regexblock-form-submit-expiry' => 'PrÃ©cisez une pÃ©riode dâ€™expiration.',
	'regexblock-link' => 'bloquer avec un expression rationnelle',
	'regexblock-match-stats-record' => '$1 a bloquÃ© Â« $2 Â» le Â« $3 Â» Ã  Â« $4 Â», connectÃ© depuis lâ€™adresse Â« $5 Â»',
	'regexblock-nodata-found' => 'Aucune donnÃ©e trouvÃ©e',
	'regexblock-stats-title' => 'Statistiques des blocages par expressions rationnelles',
	'regexblock-unblock-success' => 'Le dÃ©blocage a rÃ©ussi',
	'regexblock-unblock-log' => "Lâ€™utilisateur ou lâ€™adresse IP '''$1''' a Ã©tÃ© dÃ©bloquÃ©.",
	'regexblock-unblock-error' => 'Erreur de dÃ©blocage de $1. Lâ€™utilisateur nâ€™existe probablement pas.',
	'regexblock-regex-filter' => '  ou une expression rationnelle :',
	'regexblock-view-blocked' => 'Voir les blocages par :',
	'regexblock-view-all' => 'Tous',
	'regexblock-view-go' => 'Lancer',
	'regexblock-view-match' => '(terme exact)',
	'regexblock-view-regex' => '(expression rationnelle)',
	'regexblock-view-account' => '(crÃ©ation des comptes bloquÃ©e)',
	'regexblock-view-reason' => 'motif : $1',
	'regexblock-view-reason-default' => 'aucun motif indiquÃ©',
	'regexblock-view-block-infinite' => 'blocage permanent',
	'regexblock-view-block-by' => 'bloquÃ© par :',
	'regexblock-view-block-unblock' => 'dÃ©bloquer',
	'regexblock-view-stats' => 'statistiques',
	'regexblock-view-empty' => 'La liste des utilisateurs et des adresses IP bloquÃ©s est vide.',
	'regexblock-view-time' => 'le $1',
	'right-regexblock' => 'Bloquer en Ã©criture les utilisateurs sur tout les wikis de la ferme wiki',
);

/** Franco-ProvenÃ§al (arpetan)
 * @author Cedric31
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'regexblock' => 'BlocÃ¢jo per Ã¨xprÃ¨ssions racionÃ¨les',
	'regexblock-already-blocked' => '$1 est ja blocÃ¢.',
	'regexblock-block-success' => 'Lo blocÃ¢jo at reussi',
	'regexblock-currently-blocked' => 'AdrÃ¨ces blocÃ¢s houÃ© :',
	'regexblock-page-title' => 'BlocÃ¢jo dâ€™un nom per una Ã¨xprÃ¨ssion racionÃ¨la',
	'regexblockstats' => 'Statistiques des blocÃ¢jos per Ã¨xprÃ¨ssions racionÃ¨les',
	'regexblock-form-username' => 'AdrÃ¨ce IP ou ben nom dâ€™usanciÃ©r :',
	'regexblock-form-reason' => 'RÃªson :',
	'regexblock-form-expiry' => 'Ãˆxpiracion :&#160;',
	'regexblock-form-match' => 'CorrÃ¨spondance justa',
	'regexblock-form-account-block' => 'DÃ¨fendre la crÃ¨acion dâ€™un compto novÃ©l',
	'regexblock-form-submit' => 'Blocar ceti usanciÃ©r',
	'regexblock-form-submit-regex' => 'ÃˆxprÃ¨ssion racionÃ¨la fÃ´ssa.',
	'regexblock-link' => 'blocar avouÃ©c una Ã¨xprÃ¨ssion racionÃ¨la',
	'regexblock-match-stats-record' => '$1 at blocÃ¢ Â« $2 Â» lo Â« $3 Â» a Â« $4 Â», branchiÃª dÃªs lâ€™adrÃ¨ce Â« $5 Â»',
	'regexblock-nodata-found' => 'Gins de balyÃª trovÃ¢',
	'regexblock-stats-title' => 'Statistiques des blocÃ¢jos per Ã¨xprÃ¨ssions racionÃ¨les',
	'regexblock-unblock-success' => 'Lo dÃ¨blocÃ¢jo at reussi',
	'regexblock-unblock-log' => "Lâ€™usanciÃ©r ou ben lâ€™adrÃ¨ce IP '''$1''' at Ã©tÃ¢ dÃ¨blocÃ¢.",
	'regexblock-regex-filter' => ' ou ben una Ã¨xprÃ¨ssion racionÃ¨la :',
	'regexblock-view-blocked' => 'VÃªre los blocÃ¢jos per :',
	'regexblock-view-all' => 'TÃ´s',
	'regexblock-view-go' => 'LanciÃ©r',
	'regexblock-view-match' => '(corrÃ¨spondance justa)',
	'regexblock-view-regex' => '(Ã¨xprÃ¨ssion racionÃ¨la)',
	'regexblock-view-account' => '(dÃ¨fensa de la crÃ¨acion de comptos)',
	'regexblock-view-reason' => 'rÃªson : $1',
	'regexblock-view-reason-default' => 'rÃªson gÂ·Ã¨nÃ¨rica',
	'regexblock-view-block-infinite' => 'blocÃ¢jo sen fin',
	'regexblock-view-block-by' => 'blocÃ¢ per :',
	'regexblock-view-block-unblock' => 'dÃ¨blocar',
	'regexblock-view-stats' => 'statistiques',
	'regexblock-view-time' => 'lo $1',
);

/** Western Frisian (Frysk)
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'regexblock-already-blocked' => '$1 is al Ãºtsluten.',
	'regexblock-form-expiry' => 'Ferrint nei:',
	'regexblock-view-all' => 'Alles',
);

/** Irish (Gaeilge)
 * @author à¶´à·ƒà·’à¶³à·” à¶šà·à·€à·’à¶±à·Šà¶¯
 */
$messages['ga'] = array(
	'regexblock-form-reason' => 'FÃ¡th:',
	'regexblock-form-expiry' => 'Am Ã©aga:',
	'regexblock-view-all' => 'An t-iomlÃ¡n',
	'regexblock-view-go' => 'Gabh',
);

/** Galician (galego)
 * @author Alma
 * @author ToliÃ±o
 * @author XosÃ©
 */
$messages['gl'] = array(
	'regexblock' => 'Bloqueo Regex',
	'regexblock-already-blocked' => '$1 xa estÃ¡ bloqueado.',
	'regexblock-block-log' => "O nome de usuario ou o enderezo IP '''$1''' foi bloqueado.",
	'regexblock-block-success' => 'Bloqueo con Ã©xito',
	'regexblock-currently-blocked' => 'Enderezos actualmente bloqueados:',
	'regexblock-desc' => 'ExtensiÃ³n usada para bloquear nomes de usuario e mais enderezos IP con expresiÃ³ns regulares. ContÃ©n o mecanismo de bloqueo e unha [[Special:Regexblock|pÃ¡xina especial]] para engadir/xestionar bloqueos',
	'regexblock-expire-duration' => '1 hora,2 horas,4 horas,6 horas,1 dÃ­a,3 dÃ­as,1 semana,2 semanas,1 mes,3 meses,6 meses,1 ano,para sempre',
	'regexblock-page-title' => 'Bloqueo do nome da expresiÃ³n regular',
	'regexblockstats' => 'EstatÃ­sticas do bloqueo por expresiÃ³ns regulares',
	'regexblock-help' => "Use o formulario de embaixo para bloquear o acceso de escritura desde un determinado enderezo IP ou nome de usuario.
Isto deberÃ­a facerse sÃ³ para previr vandalismo, e segundo a polÃ­tica e normas de bloqueo.
''Esta pÃ¡xina permitiralle bloquear incluso usuarios que non existen, e usuarios con nomes semellantes ao dado, Ã© dicir, Â«TestÂ» serÃ¡ bloqueado xunto con Â«Test 2Â», etc. TamÃ©n pode bloquear enderezos IP completos, no sentido de que ninguÃ©n rexistrado nos mesmos serÃ¡ capaz de editar pÃ¡xinas. Nota: os enderezos IP parciais serÃ¡n tratados polos nomes de usuarios na determinaciÃ³n do bloqueo. Se non se especifica a razÃ³n, serÃ¡ usado por defecto un motivo xenÃ©rico.''",
	'regexblock-page-title-1' => 'Bloquear un enderezo usando expresiÃ³ns regulares',
	'regexblock-reason-ip' => 'A este enderezo IP estalle prohibido editar debido a vandalismo ou outras actividades negativas realizadas por vostede ou por alguÃ©n que comparte o seu enderezo IP.
Se pensa que se trata dun erro, [[$1|pÃ³Ã±ase en contacto con nÃ³s]]',
	'regexblock-reason-name' => 'A este nome de usuario estalle prohibido editar debido a vandalismo ou outras actividades negativas.
Se pensa que se trata dun erro, [[$1|contacte con nÃ³s]]',
	'regexblock-reason-regex' => 'A este nome de usuario estalle prohibido editar debido a vandalismo ou outras actividades negativas realizadas por parte dun usuario cun nome semellante.
Cree un nome de usuario diferente ou [[$1|contacte con nÃ³s]] para falar sobre o problema',
	'regexblock-form-username' => 'Enderezo IP ou nome de usuario:',
	'regexblock-form-reason' => 'Motivo:',
	'regexblock-form-expiry' => 'Remate:',
	'regexblock-form-match' => 'Procura exacta',
	'regexblock-form-account-block' => 'Bloqueada a creaciÃ³n de novas contas',
	'regexblock-form-submit' => 'Bloquear este usuario',
	'regexblock-form-submit-empty' => 'Dar un nome de usuario ou un enderezo IP para bloquear.',
	'regexblock-form-submit-regex' => 'ExpresiÃ³n regular non vÃ¡lida.',
	'regexblock-form-submit-expiry' => 'Especifique un perÃ­odo de caducidade.',
	'regexblock-link' => 'bloquear cunha expresiÃ³n regular',
	'regexblock-match-stats-record' => '$1 bloqueou a "$2" en "$3" Ã¡s $4, rexistrado desde o enderezo "$5"',
	'regexblock-nodata-found' => 'Non se atoparon os datos',
	'regexblock-stats-title' => 'EstatÃ­sticas do bloqueo por expresiÃ³ns regulares',
	'regexblock-unblock-success' => 'O desbloqueo foi un Ã©xito',
	'regexblock-unblock-log' => "O nome de usuario ou o enderezo IP '''$1''' foi desbloqueado.",
	'regexblock-unblock-error' => 'Erro desbloqueando $1. Probabelmente non existe tal usuario.',
	'regexblock-regex-filter' => '  ou o valor regex:',
	'regexblock-view-blocked' => 'Ver bloqueado por:',
	'regexblock-view-all' => 'Todo',
	'regexblock-view-go' => 'Continuar',
	'regexblock-view-match' => '(procura exacta)',
	'regexblock-view-regex' => '(coincidencia regex)',
	'regexblock-view-account' => '(bloqueo de creaciÃ³n de contas)',
	'regexblock-view-reason' => 'motivo: $1',
	'regexblock-view-reason-default' => 'razÃ³n xenÃ©rica',
	'regexblock-view-block-infinite' => 'bloqueo permanente',
	'regexblock-view-block-by' => 'bloqueado por:',
	'regexblock-view-block-unblock' => 'desbloquear',
	'regexblock-view-stats' => 'estatÃ­sticas',
	'regexblock-view-empty' => 'A lista dos nomes e enderezos bloqueados estÃ¡ baleira.',
	'regexblock-view-time' => 'en $1',
	'right-regexblock' => 'Bloquearlles aos usuarios a ediciÃ³n en todos os wikis na granxa',
);

/** Gothic (Gothic)
 * @author Crazymadlover
 * @author Jocke Pirat
 */
$messages['got'] = array(
	'regexblock-form-reason' => 'ð†ðŒ°ðŒ¹ð‚ðŒ¹ðŒ½ðŒ°:',
);

/** Ancient Greek (á¼ˆÏÏ‡Î±Î¯Î± á¼‘Î»Î»Î·Î½Î¹Îºá½´)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'regexblock-form-reason' => 'Î‘á¼°Ï„Î¯Î±:',
	'regexblock-form-expiry' => 'Î›á¿†Î¾Î¹Ï‚:',
	'regexblock-view-all' => 'á¼…Ï€Î±ÏƒÎ±Î¹',
	'regexblock-view-go' => 'á¼¹Î­Î½Î±Î¹',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'regexblock' => 'Regex-Sperri',
	'regexblock-already-blocked' => '$1 isch scho gsperrt.',
	'regexblock-block-log' => "Benutzername oder IP-AdrÃ¤ss '''$1''' isch gsperrt wore.",
	'regexblock-block-success' => 'Sperrig erfolgryych',
	'regexblock-currently-blocked' => 'Zur Zyt gsperrti AdrÃ¤sse:',
	'regexblock-desc' => 'Erwyterig zum Sperre vu BenutzernÃ¤men un IP-AdrÃ¤sse mit regulÃ¤ren Uusdrick. S het e Sperrmechanismus din un e [[Special:Regexblock|Spezialsyte]] go Sperrine zuefiege un verwalte',
	'regexblock-expire-duration' => '1 Stund,2 Stunde,4 Stunde,6 Stunde,1 Tag,3 TÃ¤g,1 Wuche,2 Wuche,1 Monet,3 Monet,6 Monet,1 Johr,fir immer',
	'regexblock-page-title' => 'Namesperri mit regulÃ¤ren Uusdrick',
	'regexblockstats' => 'Regex-Sperrstatischtike',
	'regexblock-help' => "Bruuch des Formular go ne IP-AdrÃ¤ss oder e aagmÃ¤ldete Benutzer z sperren.
Die Funktion sott nume yygsetzt wÃ¤re go Vandalismus verhindere un alliwyl nume no dr Richtlinie.
''Die Seite erlaubt s au Benuttzer z sperre, wu s gar nit git, un Benutzer, wu Ã¤hnligi NÃ¤me hÃ¤n wie sonigi, wu s scho git, z. B. wird mit â€žTestâ€ au â€žTest 2â€œ usw. gsperrt .
Du chasch au gani IP-AdrÃ¤sse sperre, ass nieme meh sich unter dÃ¤ne IP-AdrÃ¤sse cha aamaÃ¤lde, Syte bearbeite usw.
Obacht: Teil vu IP-AdrÃ¤sse wÃ¤re bim Sperre as Benutzernamen ufgfasst.
WÃ¤nn kei Sperrgrund aagee wird, wird e Standard-Grund bruucht.''",
	'regexblock-page-title-1' => 'AdrÃ¤sse mit regulÃ¤ren Uusdrick sperre',
	'regexblock-reason-ip' => 'DÃ¤re IP-AdrÃ¤ss isch s verbote Bearbeitige z mache, wel vu dÃ¤re IP-AdrÃ¤ss â€“ vu Dir oder eberem mit dr nÃ¤mligen IP_AdrÃ¤ss -  Vandalismus oder schÃ¤dlig Verhalten uusgangen isch.
WÃ¤nn Du dÃ¤nksch, ass es sich dodebyy um e FÃ¤hler handlet, no [[$1|nimm Kontakt zuen is uf]].',
	'regexblock-reason-name' => 'DÃ¤m Benutzername isch s verbote, Bearbeitige z mache, wÃ¤ge Vandalismus oder anderem schÃ¤ndlige Verhalte.
WÃ¤nn Du dÃ¤nksch, ass es sich dodebyy um e FÃ¤hler handlet, no [[$1|nimm Kontakt zuen is uf]]',
	'regexblock-reason-regex' => 'DÃ¤m Benutzername isch s verbote, Bearbeitige z mache, wÃ¤ge Vandalismus oder anderem schÃ¤ndlige Verhalte.
Bitte mÃ¤lde Di mit eme andere Benutzernamen aa oder [[$1|nimm Kontakt zuen is uf]] zum ProblÃ¤m.',
	'regexblock-form-username' => 'IP-AdrÃ¤ss oder Benutzername:',
	'regexblock-form-reason' => 'Grund:',
	'regexblock-form-expiry' => 'Ablaufdatum:',
	'regexblock-form-match' => 'Gnaue TrÃ¤ffer',
	'regexblock-form-account-block' => 'S Aalege vu neje Benutzerkonte sperre',
	'regexblock-form-submit' => 'DÃ¤Ã¤ Benutzer sperre',
	'regexblock-form-submit-empty' => 'E Benutzernamen oder e IP-AdrÃ¤ss fir d Sperrig aagee.',
	'regexblock-form-submit-regex' => 'Nit giltige regulÃ¤ren Uusdruck.',
	'regexblock-form-submit-expiry' => 'Bitte wehl e Verfallszytruum.',
	'regexblock-link' => 'mit eme regulÃ¤re Uusdruck sperre',
	'regexblock-match-stats-record' => '$1 het â€ž$2â€œ uf â€ž$3â€œ um â€ž$4â€œ gsperrt, aagmÃ¤ldet vu dr AdrÃ¤ss â€ž$5â€œ',
	'regexblock-nodata-found' => 'Kei Date gfunde',
	'regexblock-stats-title' => 'Regex-Sperrstatischtike',
	'regexblock-unblock-success' => 'Entsperrig erfolgryych',
	'regexblock-unblock-log' => "Benutzername oder IP-AdrÃ¤ss '''$1''' isch entsperrt wore.",
	'regexblock-unblock-error' => 'FÃ¤hler bim Entsperre vu $1.
Wahrschyns git s kei sonige Benutzer.',
	'regexblock-regex-filter' => '   oder regulÃ¤ren Uusdruck:',
	'regexblock-view-blocked' => 'Aasicht gsperrt vu:',
	'regexblock-view-all' => 'Alli',
	'regexblock-view-go' => 'Gang',
	'regexblock-view-match' => '(gnaue TrÃ¤ffer)',
	'regexblock-view-regex' => '(Regex-TrÃ¤ffer)',
	'regexblock-view-account' => '(Benutzerkonteaalege gsperrt)',
	'regexblock-view-reason' => 'Grund: $1',
	'regexblock-view-reason-default' => 'allgmeine Grund',
	'regexblock-view-block-infinite' => 'permanenti Sperrig',
	'regexblock-view-block-by' => 'gsperrt vu:',
	'regexblock-view-block-unblock' => 'entsperre',
	'regexblock-view-stats' => 'Statischtike',
	'regexblock-view-empty' => 'D Lischt vu dr gsperrte NÃ¤men un AdrÃ¤ssen isch lÃ¤Ã¤r.',
	'regexblock-view-time' => 'am $1',
	'right-regexblock' => 'Nimmt Benutzer s RÃ¤cht uf allene Wiki vum Wiki-Hof Bearbeitige z mache',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'regexblock-form-username' => 'Enmys IP ny ennym ymmydeyr:',
	'regexblock-form-reason' => 'Fa:',
	'regexblock-view-go' => 'Gow',
	'regexblock-view-reason' => 'fa: $1',
);

/** Hausa (Hausa) */
$messages['ha'] = array(
	'regexblock-form-reason' => 'Dalili:',
	'regexblock-view-all' => 'Duka',
);

/** Hawaiian (Hawai`i)
 * @author Kalani
 * @author Singularity
 */
$messages['haw'] = array(
	'regexblock-expire-duration' => '1 hola,2 hola,4 hola,6 hola,1 lÄ,3 lÄ,1 pule,2 pule,1 mahina,3 mahina,6 mahina,1 makahiki,pau Ê»ole',
	'regexblock-form-reason' => 'Kumu:',
);

/** Hebrew (×¢×‘×¨×™×ª)
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'regexblock' => '×—×¡×™×ž×” ×œ×¤×™ ×‘×™×˜×•×™×™× ×¨×’×•×œ×¨×™×™×',
	'regexblock-already-blocked' => '$1 ×›×‘×¨ ×—×¡×•×.',
	'regexblock-block-log' => "×›×ª×•×‘×ª ×”Ö¾IP ××• ×©× ×”×ž×©×ª×ž×© '''$1''' × ×—×¡×ž×•.",
	'regexblock-block-success' => '×”×—×¡×™×ž×” ×‘×•×¦×¢×” ×‘×”×¦×œ×—×”',
	'regexblock-currently-blocked' => '×”×›×ª×•×‘×•×ª ×”×—×¡×•×ž×•×ª × ×›×•×Ÿ ×œ×¢×›×©×™×•:',
	'regexblock-desc' => '×”×¨×—×‘×” ×”×ž×©×ž×©×ª ×œ×—×¡×™×ž×ª ×©×ž×•×ª ×•×›×ª×•×‘×•×ª IP ×©×œ ×ž×©×ª×ž×©×™× ×‘×¢×–×¨×ª ×‘×™×˜×•×™×™× ×¨×’×•×œ×¨×™×™×. ×”×™× ×ž×›×™×œ×” ×’× ××ª ×ž× ×’× ×•×Ÿ ×”×—×¡×™×ž×” ×•×’× [[Special:Regexblock|×“×£ ×ž×™×•×—×“]] ×œ×”×•×¡×¤×ª/× ×™×”×•×œ ×”×—×¡×™×ž×•×ª.',
	'regexblock-expire-duration' => '×©×¢×”,×©×¢×ª×™×™×,4 ×©×¢×•×ª,6 ×©×¢×•×ª,×™×•×,3 ×™×ž×™×,×©×‘×•×¢,×©×‘×•×¢×™×™×,×—×•×“×©,3 ×—×•×“×©×™×,6 ×—×•×“×©×™×,×©× ×”,×œ×¦×ž×™×ª×•×ª',
	'regexblock-page-title' => '×—×¡×™×ž×ª ×©× ×œ×¤×™ ×‘×™×˜×•×™ ×¨×’×•×œ×¨×™',
	'regexblockstats' => '×¡×˜×˜×™×¡×˜×™×§×ª ×”×—×¡×™×ž×” ×‘××ž×¦×¢×•×ª ×‘×™×˜×•×™×™× ×¨×’×•×œ×¨×™×™×',
	'regexblock-help' => "×”×©×ª×ž×©×• ×‘×˜×•×¤×¡ ×©×œ×”×œ×Ÿ ×›×“×™ ×œ×—×¡×•× ×’×™×©×” ×œ×›×ª×™×‘×” ×ž×¤× ×™ ×©× ×ž×©×ª×ž×© ××• ×›×ª×•×‘×ª IP ×ž×¡×•×™×ž×™×.
×™×© ×œ×¢×©×•×ª ×–××ª ×¨×§ ×›×“×™ ×œ×”×™×ž× ×¢ ×ž×”×©×—×ª×”, ×•×‘×”×ª×× ×œ×ž×“×™× ×™×•×ª.
'''×“×£ ×–×” ×™××¤×©×¨ ×œ×›× ×œ×—×¡×•× ××¤×™×œ×• ×ž×©×ª×ž×©×™× ×©××™× × ×§×™×™×ž×™×, ×•×’× ×™×—×¡×•× ×ž×©×ª×ž×©×™× ×©× ×©×ž×•×ª ×”×“×•×ž×™× ×œ×©× ×©×¦×•×™×™×Ÿ, ×œ×“×•×’×ž×”: \"×‘×“×™×§×”\" ×ª×™×—×¡× ×™×—×“ ×¢× \"×‘×“×™×§×” 2\" ×•×›×•'.
×ª×•×›×œ×• ×’× ×œ×—×¡×•× ×›×ª×•×‘×•×ª IP ×ž×œ××•×ª, ×›×œ×•×ž×¨ ×©×›×œ ×ž×™ ×©×ž×ª×—×‘×¨ ×ž×›×ª×•×‘×ª ×–×• ×œ× ×™×•×›×œ ×œ×¢×¨×•×š ×“×¤×™×.
×”×¢×¨×”: ×›×ª×•×‘×•×ª IP ×—×œ×§×™×•×ª ×ª×™×—×©×‘× ×” ×œ×©×ž×•×ª ×ž×©×ª×ž×©×™× ×‘×–×™×”×•×™ ×”×—×¡×™×ž×”.
×× ×œ× ×¦×•×™× ×” ×¡×™×‘×”, ×™×¢×©×” ×©×™×ž×•×© ×‘×”×•×“×¢×” ×›×œ×œ×™×ª ×›×‘×¨×™×¨×ª ×ž×—×“×œ.'''",
	'regexblock-page-title-1' => '×—×¡×™×ž×ª ×›×ª×•×‘×ª ×‘××ž×¦×¢×•×ª ×‘×™×˜×•×™×™× ×¨×’×•×œ×¨×™×™×',
	'regexblock-reason-ip' => '×”×¢×¨×™×›×” ×ž×›×ª×•×‘×ª IP ×–×• × ×—×¡×ž×” ×¢×§×‘  ×”×©×—×ª×” ××• ×”×¤×¨×¢×” ××—×¨×ª ×¢×œ ×™×“×™×›× ××• ×¢×œ ×™×“×™ ×ž×™×©×”×• ××—×¨ ×”×—×•×œ×§ ××™×ª×›× ××ª ×›×ª×•×‘×ª ×”Ö¾IP.
×× ××ª× ×—×•×©×‘×™× ×©×–×• ×˜×¢×•×ª, ×× × [[$1|×¦×¨×• ×§×©×¨]]',
	'regexblock-reason-name' => '×”×¢×¨×™×›×” ×ž×—×©×‘×•×Ÿ ×ž×©×ª×ž×© ×–×” × ×—×¡×ž×” ×¢×§×‘ ×”×©×—×ª×” ××• ×”×¤×¨×¢×” ××—×¨×ª.
×× ××ª× ×—×•×©×‘×™× ×©×–×• ×˜×¢×•×ª, ×× × [[$1|×¦×¨×• ×§×©×¨]]',
	'regexblock-reason-regex' => '×”×¨×©××•×ª ×”×¢×¨×™×›×” ×©×œ ×©× ×ž×©×ª×ž×© ×–×” × ×©×œ×œ×• ×¢×§×‘ ×”×©×—×ª×” ××• ×”×¤×¨×¢×” ××—×¨×ª ×¢×œ ×™×“×™ ×ž×©×ª×ž×© ×‘×¢×œ ×©× ×ž×©×ª×ž×© ×“×•×ž×”.
×× × ×¦×¨×• ×©× ×ž×©×ª×ž×© ×—×œ×•×¤×™ ××• [[$1|×¦×¨×• ×§×©×¨]] ××•×“×•×ª ×”×‘×¢×™×”.',
	'regexblock-form-username' => '×›×ª×•×‘×ª IP ××• ×©× ×ž×©×ª×ž×©:',
	'regexblock-form-reason' => '×¡×™×‘×”:',
	'regexblock-form-expiry' => '×¤×§×™×¢×”:',
	'regexblock-form-match' => '×”×ª××ž×” ×ž×“×•×™×§×ª',
	'regexblock-form-account-block' => '×—×¡×™×ž×ª ×™×¦×™×¨×ª ×—×©×‘×•× ×•×ª ×—×“×©×™×',
	'regexblock-form-submit' => '×—×¡×™×ž×ª ×ž×©×ª×ž×© ×–×”',
	'regexblock-form-submit-empty' => '×›×ª×‘×• ×©× ×ž×©×ª×ž×© ××• ×›×ª×•×‘×ª IP ×œ×—×¡×™×ž×”.',
	'regexblock-form-submit-regex' => '×‘×™×˜×•×™ ×¨×’×•×œ×¨×™ ×‘×œ×ª×™ ×ª×§×™×Ÿ.',
	'regexblock-form-submit-expiry' => '×× × ×¦×™×™× ×• ××ª ×ž×©×š ×”×–×ž×Ÿ ×¢×“ ×œ×¤×§×™×¢×ª ×”×—×¡×™×ž×”.',
	'regexblock-link' => '×—×¡×™×ž×” ×‘××ž×¦×¢×•×ª ×‘×™×˜×•×™×™× ×¨×’×•×œ××¨×™×™×',
	'regexblock-match-stats-record' => "$1 × ×—×¡× '$2' ×‘Ö¾'$3' ×‘Ö¾'$4', ×‘×¢×ª ×”×ª×—×‘×¨×•×ª ×ž×”×›×ª×•×‘×ª '$5'",
	'regexblock-nodata-found' => '×œ× × ×ž×¦××• × ×ª×•× ×™×',
	'regexblock-stats-title' => '×¡×˜×˜×™×¡×˜×™×§×ª ×”× ×ª×•× ×™× ×”×¨×’×•×œ×¨×™×™×',
	'regexblock-unblock-success' => '×©×—×¨×•×¨ ×”×—×¡×™×ž×” ×”×•×©×œ× ×‘×”×¦×œ×—×”',
	'regexblock-unblock-log' => "×›×ª×•×‘×ª ×”Ö¾IP ××• ×©× ×”×ž×©×ª×ž×© '''$1''' ×©×•×—×¨×¨×• ×ž×—×¡×™×ž×”.",
	'regexblock-unblock-error' => '×©×’×™××” ×‘×©×—×¨×•×¨ $1.
×›× ×¨××” ×©××™×Ÿ ×ž×©×ª×ž×© ×›×–×”.',
	'regexblock-regex-filter' => '  ××• ×¢×¨×š ×‘×™×˜×•×™ ×¨×’×•×œ×¨×™:',
	'regexblock-view-blocked' => '×¦×¤×™×™×” ×‘×—×¡×™×ž×•×ª ×©×‘×•×¦×¢×• ×¢×œ ×™×“×™:',
	'regexblock-view-all' => '×›×•×œ×',
	'regexblock-view-go' => '×”×¦×’×”',
	'regexblock-view-match' => '(×”×ª××ž×” ×ž×“×•×™×§×ª)',
	'regexblock-view-regex' => '(×”×ª××ž×ª ×‘×™×˜×•×™ ×¨×’×•×œ×¨×™)',
	'regexblock-view-account' => '(×—×¡×™×ž×ª ×™×¦×™×¨×ª ×—×©×‘×•× ×•×ª)',
	'regexblock-view-reason' => '×¡×™×‘×”: $1',
	'regexblock-view-reason-default' => '×¡×™×‘×” ×›×œ×œ×™×ª',
	'regexblock-view-block-infinite' => '×—×¡×™×ž×” ×§×‘×•×¢×”',
	'regexblock-view-block-by' => '× ×—×¡× ×¢×œ ×™×“×™:',
	'regexblock-view-block-unblock' => '×©×—×¨×•×¨ ×—×¡×™×ž×”',
	'regexblock-view-stats' => '×¡×˜×˜×™×¡×˜×™×§×”',
	'regexblock-view-empty' => '×¨×©×™×ž×ª ×”×©×ž×•×ª ×•×”×›×ª×•×‘×•×ª ×”×—×¡×•×ž×™× ×¨×™×§×”.',
	'regexblock-view-time' => '×‘Ö¾$1',
	'right-regexblock' => '×—×¡×™×ž×ª ×ž×©×ª×ž×©×™× ×ž×¢×¨×™×›×” ×‘×›×œ ××ª×¨×™ ×”×•×•×™×§×™ ×©×‘×—×•×•×ª ×”×•×•×™×§×™',
);

/** Hindi (à¤¹à¤¿à¤¨à¥à¤¦à¥€)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'regexblock' => 'à¤°à¥‡à¤œà¤à¤•à¥à¤¸à¤¬à¥à¤²à¥‰à¤•',
	'regexblock-already-blocked' => '$1 à¤•à¥‹ à¤ªà¤¹à¤²à¥‡à¤¸à¥‡ à¤¬à¥à¤²à¥‰à¤• à¤•à¤¿à¤¯à¤¾ à¤¹à¥à¤† à¤¹à¥ˆà¤‚à¥¤',
	'regexblock-block-log' => "'''$1''' à¤‡à¤¸ à¤¸à¤¦à¤¸à¥à¤¯ à¤¨à¤¾à¤® à¤…à¤¥à¤µ à¤†à¤¯à¤ªà¥€ à¤à¤¡à¥à¤°à¥‡à¤¸à¤•à¥‹ à¤¬à¥à¤²à¥‰à¤• à¤•à¤° à¤¦à¤¿à¤¯à¤¾ à¤¹à¥ˆà¤‚à¥¤",
	'regexblock-block-success' => 'à¤¬à¥à¤²à¥‰à¤• à¤¯à¤¶à¤¸à¥à¤µà¥€',
	'regexblock-currently-blocked' => 'à¤…à¤­à¥€ à¤¬à¥à¤²à¥‰à¤• à¤•à¤¿à¤¯à¥‡ à¤¹à¥à¤ à¤à¤¡à¥à¤°à¥‡à¤¸:',
	'regexblock-page-title' => 'à¤°à¥‡à¤—à¥à¤¯à¥à¤²à¤° à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨ à¤¨à¤¾à¤® à¤¬à¥à¤²à¥‰à¤•',
	'regexblockstats' => 'à¤°à¥‡à¤œà¤à¤•à¥à¤¸ à¤¬à¥à¤²à¥‰à¤• à¤¸à¤¾à¤‚à¤–à¥à¤¯à¤¿à¤•à¥€',
	'regexblock-page-title-1' => 'à¤°à¥‡à¤—à¥à¤¯à¥à¤²à¤° à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨à¤•à¤¾ à¤‡à¤¸à¥à¤¤à¥‡à¤®à¤¾à¤² à¤•à¤°à¤•à¥‡ à¤à¤¡à¥à¤°à¥‡à¤¸ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¥‡à¤‚',
	'regexblock-form-username' => 'à¤†à¤‡à¤ªà¥€ à¤à¤¡à¥à¤°à¥‡à¤¸ à¤¯à¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤®:',
	'regexblock-form-reason' => 'à¤•à¤¾à¤°à¤£:',
	'regexblock-form-expiry' => 'à¤¸à¤®à¤¾à¤ªà¥à¤¤à¥€:',
	'regexblock-form-match' => 'à¤¸à¤¹à¥€ à¤®à¥ˆà¤š',
	'regexblock-form-account-block' => 'à¤¨à¤¯à¤¾ à¤–à¤¾à¤¤à¤¾ à¤–à¥‹à¤²à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤¯à¥‡ à¤ªà¥à¤°à¤¤à¤¿à¤¬à¤‚à¤§à¤¿à¤¤ à¤•à¤°à¥‡à¤‚',
	'regexblock-form-submit' => 'à¤‡à¤¸ à¤¸à¤¦à¤¸à¥à¤¯à¤•à¥‹ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¥‡à¤‚',
	'regexblock-form-submit-empty' => 'à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤¨à¥‡à¤•à¥‡ à¤²à¤¿à¤¯à¥‡ à¤à¤• à¤¸à¤¦à¤¸à¥à¤¯ à¤¨à¤¾à¤® à¤¯à¤¾ à¤†à¤‡à¤ªà¥€ à¤à¤¡à¥à¤°à¥‡à¤¸ à¤¦à¥‡à¤‚à¥¤',
	'regexblock-form-submit-regex' => 'à¤—à¤²à¤¤ à¤°à¥‡à¤—à¥à¤¯à¥à¤²à¤° à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨à¥¤',
	'regexblock-form-submit-expiry' => 'à¤•à¥ƒà¤ªà¤¯à¤¾ à¤¸à¤®à¤¾à¤ªà¥à¤¤à¤¿ à¤•à¤¾à¤²à¤¾à¤µà¤§à¤¿ à¤¦à¥‡à¤‚à¥¤',
	'regexblock-stats-title' => 'à¤°à¥‡à¤œà¤à¤•à¥à¤¸ à¤¬à¥à¤²à¥‰à¤• à¤¸à¤¾à¤‚à¤–à¥à¤¯à¤¿à¤•à¥€',
	'regexblock-unblock-success' => 'à¤…à¤¨à¤¬à¥à¤²à¥‰à¤• à¤¯à¤¶à¤¸à¥à¤µà¥€',
	'regexblock-unblock-log' => "à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤® à¤¯à¤¾ à¤†à¤‡à¤ªà¥€ à¤à¤¡à¥à¤°à¥‡à¤¸ '''$1''' à¤•à¥‹ à¤…à¤¨à¤¬à¥à¤²à¥‰à¤• à¤•à¤¿à¤¯à¤¾à¥¤",
	'regexblock-unblock-error' => '$1 à¤•à¥‹ à¤…à¤¨à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤¨à¥‡à¤®à¥‡à¤‚ à¤¸à¤®à¤¸à¥à¤¯à¤¾à¥¤
à¤¶à¤¾à¤¯à¤¦ à¤à¤¸à¤¾ à¤¸à¤¦à¤¸à¥à¤¯ à¤…à¤¸à¥à¤¤à¤¿à¤¤à¥à¤µà¤®à¥‡à¤‚ à¤¨à¤¹à¥€à¤‚à¥¤',
	'regexblock-view-blocked' => 'à¤œà¤¿à¤¸à¤¨à¥‡ à¤¬à¥à¤²à¥‰à¤• à¤•à¤¿à¤¯à¤¾ à¤‰à¤¸à¤•à¥‡ à¤…à¤¨à¥à¤¸à¤¾à¤° à¤¸à¥‚à¤šà¥€ à¤¦à¥‡à¤–à¥‡à¤‚:',
	'regexblock-view-all' => 'à¤¸à¤­à¥€',
	'regexblock-view-go' => 'à¤œà¤¾à¤¯à¥‡à¤‚',
	'regexblock-view-match' => '(à¤¸à¤¹à¥€ à¤®à¥ˆà¤š)',
	'regexblock-view-regex' => '(à¤°à¥‡à¤œà¤à¤•à¥à¤¸ à¤®à¥ˆà¤š)',
	'regexblock-view-account' => '(à¤–à¤¾à¤¤à¤¾ à¤–à¥‹à¤²à¤¨à¥‡ à¤ªà¤° à¤¬à¥à¤²à¥‰à¤•)',
	'regexblock-view-reason' => 'à¤•à¤¾à¤°à¤£: $1',
	'regexblock-view-reason-default' => 'à¤¸à¤°à¥à¤µà¤¸à¤¾à¤§à¤¾à¤°à¤£ à¤•à¤¾à¤°à¤£',
	'regexblock-view-block-infinite' => 'à¤¹à¤®à¥‡à¤¶à¤¾ à¤•à¥‡ à¤²à¤¿à¤¯à¥‡ à¤¬à¥à¤²à¥‰à¤•',
	'regexblock-view-block-by' => 'à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¥à¤¤à¤¾',
	'regexblock-view-block-unblock' => 'à¤…à¤¨à¤¬à¥à¤²à¥‰à¤•',
	'regexblock-view-stats' => 'à¤¸à¤¾à¤‚à¤–à¥à¤¯à¤¿à¤•à¥€',
	'regexblock-view-empty' => 'à¤¬à¥à¤²à¥‰à¤• à¤•à¤¿à¤¯à¥‡ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤® à¤”à¤° à¤†à¤‡à¤ªà¥€ à¤à¤¡à¥à¤°à¥‡à¤¸à¥‹à¤‚à¤•à¥€ à¤¸à¥‚à¤šà¥€ à¤–à¤¾à¤²à¥€ à¤¹à¥ˆà¤‚à¥¤',
	'regexblock-view-time' => '$1 à¤ªà¤°',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 */
$messages['hil'] = array(
	'regexblock-form-reason' => 'Rason:',
	'regexblock-view-go' => 'Lakat',
);

/** Croatian (hrvatski)
 * @author Dnik
 * @author Ex13
 * @author Herr Mlinka
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'regexblock' => 'Blokiranje pomoÄ‡u regularnih izraza',
	'regexblock-already-blocked' => '$1 je veÄ‡ blokiran.',
	'regexblock-block-log' => "Suradnik ili IP-adresa '''$1''' su blokirani.",
	'regexblock-block-success' => 'Blokiranje uspjelo',
	'regexblock-currently-blocked' => 'Trenutno blokirane adrese:',
	'regexblock-expire-duration' => '1 sat,2 sata,4 sata,6 sati,1 dan,3 dana,1 tjedan,2 tjedna,1 mjesec,3 mjeseca,6 mjeseci,1 godina,zauvijek',
	'regexblock-page-title' => 'Blokiranje pomoÄ‡u regularnih izraza',
	'regexblockstats' => 'Statistika blokiranja regularnim izrazima',
	'regexblock-help' => "Rabite donju formu za blokiranje odreÄ‘enih IP adresa ili suradnika. TO treba Äiniti samo radi sprjeÄavanja vandalizama, u skladu s pravilima.

''Ova stranica omoguÄ‡ava vam blokiranje suradniÄkih imena prema uzorku (postojeÄ‡ih i novih), npr. ako blokirate Â« Test 2Â», blokirat Ä‡ete i Â« Test Â» itd. MoÅ¾ete takoÄ‘er blokirati IP adrese, Å¡to znaÄi da nitko tko se prijavi s njih neÄ‡e moÄ‡i ureÄ‘ivati. Napomena: djelomiÄne IP adrese bit Ä‡e analizirane prema suradniÄkim imenima u odreÄ‘ivanju trajanja bloka. Ukoliko razlog nije dan, bit Ä‡e navedeno generiÄko objaÅ¡njenje.''",
	'regexblock-page-title-1' => 'Blokiraj adresu koristeÄ‡i regularni izraz',
	'regexblock-reason-ip' => 'Ova IP adresa je sprijeÄena ureÄ‘ivati stranice zbog vandalizma ili drugog vaÅ¡eg prekrÅ¡aja ili nekog s kim dijelite IP adresu. 
Ukoliko mislite da je posrijedi greÅ¡ka, molimo [[$1|kontaktirajte nas]]',
	'regexblock-reason-name' => 'Ovo je suradniÄko ime sprijeÄeno ureÄ‘ivati zbog vandalizma ili nekog drugog prekrÅ¡aja. Ukoliko mislite da je posrijedi greÅ¡ka, molimo [[$1|kontaktirajte nas]]',
	'regexblock-reason-regex' => 'Ovo je suradniÄko ime sprijeÄeno ureÄ‘ivati zbog vandalizma ili nekog drugog prekrÅ¡aja suradnika sliÄnog imena. Molimo stvorite drugo suradniÄko ime ili nas [[$1|kontaktirajte]] o problemu',
	'regexblock-form-username' => 'IP-adresa ili ime suradnika:',
	'regexblock-form-reason' => 'Razlog:',
	'regexblock-form-expiry' => 'Istek bloka:',
	'regexblock-form-match' => 'ToÄno podudaranje',
	'regexblock-form-account-block' => 'Blokiraj stvaranje novih raÄuna',
	'regexblock-form-submit' => 'Blokiraj ovog suradnika',
	'regexblock-form-submit-empty' => 'Unesite ime suradnika ili IP-adresu za blokiranje.',
	'regexblock-form-submit-regex' => 'PogreÅ¡an regularni izraz.',
	'regexblock-form-submit-expiry' => 'Molimo odredite razdoblje isteka.',
	'regexblock-stats-title' => 'Statistika blokiranja reg. izrazima',
	'regexblock-unblock-success' => 'Deblokiranje uspjelo',
	'regexblock-unblock-log' => "Suradnik ili IP adresa '''$1''' je deblokiran.",
	'regexblock-unblock-error' => 'GreÅ¡ka prilikom deblokiranja $1. Taj suradnik vjerojatno ne postoji.',
	'regexblock-view-blocked' => 'Pregled po onom tko je blokirao:',
	'regexblock-view-all' => 'Svi',
	'regexblock-view-go' => 'Kreni',
	'regexblock-view-match' => '(toÄno podudaranje)',
	'regexblock-view-regex' => '(podudaranje reg. izrazom)',
	'regexblock-view-account' => '(blokiranje otvaranja raÄuna)',
	'regexblock-view-reason' => 'razlog: $1',
	'regexblock-view-reason-default' => 'uobiÄajeni razlog',
	'regexblock-view-block-infinite' => 'trajna blokada',
	'regexblock-view-block-by' => 'blokiran od:',
	'regexblock-view-block-unblock' => 'deblokiraj',
	'regexblock-view-stats' => 'statistika',
	'regexblock-view-empty' => 'Popis blokiranih imena i adresa je prazan.',
	'regexblock-view-time' => 'u $1',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'regexblock' => 'Blokowanje pÅ™ez regularne wurazy',
	'regexblock-already-blocked' => '$1 je hiÅ¾o zablokowany.',
	'regexblock-block-log' => "WuÅ¾iwarske mjeno abo IP-adresa '''$1''' je so blokowaÅ‚o/blokowaÅ‚a.",
	'regexblock-block-success' => 'Blokowanje wuspÄ›Å¡ne',
	'regexblock-currently-blocked' => 'Tuchwilu zablokowane adresy:',
	'regexblock-desc' => 'RozÅ¡Ä›rjenje wuÅ¾iwane za blokowanje wuÅ¾iwarskich mjenow a IP-adresow z regularnymi wurazami. Wobsahuje blokowanski mechanizm kaÅ¾ teÅ¾ [[Special:Regexblock|specialnu stronu]] za pÅ™idaÄ‡e/zrjadowanje blokowanjow',
	'regexblock-expire-duration' => '1 hodÅºina, 2 hodÅºinje, 4 hodÅºiny, 6 hodÅºin, 1 dÅºeÅ„, 3 dny, 1 tydÅºeÅ„, 2 njedÅºeli, 1 mÄ›sac, 3 mÄ›sacy, 6 mÄ›sacow, 1 lÄ›to, njeskÃ³nÄny',
	'regexblock-page-title' => 'Blokowanje mjenow regularnych wurazow',
	'regexblockstats' => 'Regex Block Statistika',
	'regexblock-help' => 'WuÅ¾ij formular deleka, zo by pisanski pÅ™istup ze specifiskeje adresy abo wuÅ¾iwarskeho mjena blokowaÅ‚. To mÄ›Å‚o so jenoÅ¾ ÄiniÄ‡, zo by wandalizmej zadÅºÄ›waÅ‚o a wotpowÄ›dujo prawidÅ‚am. \'\'Tuta strona budÅºe Ä‡e dowoleÄ‡, samo njeeksistowacych wuÅ¾iwarjow blokowaÄ‡ a budÅºe teÅ¾ wuÅ¾iwarjow z mjenom, kotreÅ¾ je datemu podobne, blokowaÄ‡, t.r. "test" budÅºe so runje tak blokowaÄ‡ kaÅ¾ "test 2" atd. MÃ³Å¾eÅ¡ dospoÅ‚ne OP-adresy blokowaÄ‡, zo by nÄ›chtÃ³, kiÅ¾ so z nich pÅ™izjewja, strony wobdÅºÄ›Å‚aÄ‡ mÃ³hÅ‚. KedÅºbu: dÅºÄ›lne IP-adresy so pÅ™ez wuÅ¾iwarske mjeno wuÅ¾iwaja, zo by blokowanje postajiÅ‚o. Jeli pÅ™iÄina njeje podata, budÅºe so powÅ¡itkowna pÅ™iÄina wuÅ¾iwaÄ‡.\'\'',
	'regexblock-page-title-1' => 'Adresu z pomocu regularnych wurazow blokowaÄ‡',
	'regexblock-reason-ip' => 'Tuta IP-adresa so dla wandalizma abo mylenje pÅ™ez tebje abo nÄ›koho druheho, kiÅ¾ IP-adresu z tobu dÅºÄ›li, za wobdÅºÄ›Å‚owanje zawÄ›ra. Jeli mysliÅ¡, zo to je zmylk, proÅ¡u [[$1|skontaktuj nas]].',
	'regexblock-reason-name' => 'Tute wuÅ¾iwarske mjeno so dla wandalizma abo druheho mylenja za wobdÅºÄ›Å‚owanje zawÄ›ra. Jeli mysliÅ¡, zo to je zmylk, proÅ¡u [[$1|skontaktuj nas]].',
	'regexblock-reason-regex' => 'Tute wuÅ¾iwarske mjeno so dla wandalizma abo druheho mylenja pÅ™ez wuÅ¾iwarja z podobnym mjenom zawÄ›ra. ProÅ¡u wutwor druhe wuÅ¾iwarske mjeno abo [[$1|informuj nas]] wo tutym problemje.',
	'regexblock-form-username' => 'IP-adresa abo wuÅ¾iwarske mjeno:',
	'regexblock-form-reason' => 'PÅ™iÄina:',
	'regexblock-form-expiry' => 'Spadnjenje:',
	'regexblock-form-match' => 'Eksaktny wotpowÄ›dnik',
	'regexblock-form-account-block' => 'Wutworjenje nowych kontow blokowaÄ‡',
	'regexblock-form-submit' => 'Tutoho wuÅ¾iwarja blokowaÄ‡',
	'regexblock-form-submit-empty' => 'Podaj wuÅ¾iwarske mjeno abo IP-adresu za blokowanje.',
	'regexblock-form-submit-regex' => 'NjepÅ‚aÄ‡iwy regularny wuraz.',
	'regexblock-form-submit-expiry' => 'Podaj proÅ¡u periodu spadnjenja.',
	'regexblock-link' => 'z regularnym wurazom blokowaÄ‡',
	'regexblock-match-stats-record' => "$1 jo blokÄ›rowaÅ‚ '$2' na '$3' pola '$4' pÅ™i pÅ™izjewjenju wot adresy '$5'",
	'regexblock-nodata-found' => 'Å½ane daty namakane',
	'regexblock-stats-title' => 'Regex Block Statistiske podaÄ‡a',
	'regexblock-unblock-success' => 'Wotblokowanje wuspÄ›Å¡ne',
	'regexblock-unblock-log' => "WuÅ¾iwarske mjeno abo IP-adresa '''$1''' wotblokowana.",
	'regexblock-unblock-error' => 'Zmylk pÅ™i wotblokowanju $1. Najskerje tajki wuÅ¾iwar njeje.',
	'regexblock-regex-filter' => 'abo hÃ³dnota regularneho wuraza:',
	'regexblock-view-blocked' => 'Wobhladanje zablokowane wot:',
	'regexblock-view-all' => 'WÅ¡Ä›',
	'regexblock-view-go' => 'DÅºi',
	'regexblock-view-match' => '(eksaktny wotpowÄ›dnik)',
	'regexblock-view-regex' => '(wotpowÄ›duje regularnemu wurazej)',
	'regexblock-view-account' => '(wutworjenje konta blokowaÄ‡)',
	'regexblock-view-reason' => 'pÅ™iÄina: $1',
	'regexblock-view-reason-default' => 'powÅ¡itkowna pÅ™iÄina',
	'regexblock-view-block-infinite' => 'trajne blokowanje',
	'regexblock-view-block-by' => 'zablokowany wot:',
	'regexblock-view-block-unblock' => 'wotblokowaÄ‡',
	'regexblock-view-stats' => 'statistiske podaÄ‡a',
	'regexblock-view-empty' => 'LisÄ‡ina zablokowanych mjenow a adresow je prÃ³zdna.',
	'regexblock-view-time' => '$1',
	'right-regexblock' => 'WuÅ¾iwarjam wobdÅºÄ›Å‚owanje na wÅ¡Ä›ch wikijach na wikijowej farmje zadÅºÄ›waÄ‡',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'regexblock' => 'RegulÃ¡ris kifejezÃ©s alapÃº blokkolÃ¡s',
	'regexblock-already-blocked' => '$1 mÃ¡r blokkolva van.',
	'regexblock-block-log' => "A(z) '''$1''' felhasznÃ¡lÃ³nÃ©v vagy IP-cÃ­m blokkolva.",
	'regexblock-block-success' => 'A blokk sikeres',
	'regexblock-currently-blocked' => 'Jelenleg blokkolt cÃ­mek:',
	'regexblock-desc' => 'KiterjesztÃ©s felhasznÃ¡lÃ³i nevek Ã©s IP-cÃ­mek blokkolÃ¡sÃ¡ra regulÃ¡ris kifejezÃ©sek segÃ­tsÃ©gÃ©vel. Tartalmazza a blokkolÃ¡si mechanizmust Ã©s egy [[Special:Regexblock|speciÃ¡lis lapot]] a blokkok kezelÃ©sÃ©re',
	'regexblock-expire-duration' => '1 Ã³ra:1 hour,2 Ã³ra:2 hours,4 Ã³ra:4 hours,6 Ã³ra:6 hours,1 nap:1 day,3 nap:3 days,1 hÃ©t:1 week,2 hÃ©t:2 weeks,1 hÃ³nap:1 month,3 hÃ³nap:3 months,6 hÃ³nap:6 months,1 Ã©v:1 year,vÃ©gtelen:infinite',
	'regexblock-page-title' => 'NÃ©v blokkolÃ¡sa regulÃ¡ris kifejezÃ©s segÃ­tsÃ©gÃ©vel',
	'regexblockstats' => 'RegulÃ¡ris kifejezÃ©s alapÃº blokkok statisztikÃ¡ja',
	'regexblock-help' => "HasznÃ¡ld az alÃ¡bbi Å±rlapot egy megadott IP-cÃ­m vagy felhasznÃ¡lÃ³nÃ©v Ã­rÃ¡si jogosultsÃ¡gÃ¡nak blokkolÃ¡sÃ¡ra.
Ezt csak vandalizmus megelÅ‘zÃ©se cÃ©ljÃ¡bÃ³l szabad hasznÃ¡lni, Ã¶sszhangban az irÃ¡nyelvekkel.
''Ezen a lapon akÃ¡r nem lÃ©tezÅ‘ felhasznÃ¡lÃ³kat is blokkolhatsz, Ã©s a blokk Ã©rinteni fogja a megadotthoz hasonlÃ³ felhasznÃ¡lÃ³neveket is. Azaz â€žtesztâ€ blokkolva lesz â€žteszt 2â€-vel egyÃ¼tt, stb.
Blokkolhatsz teljes IP-cÃ­meket is, ami azt jelenti, hogy azokrÃ³l bejelentkezve senki nem fog tudni szerkeszteni.
MegjegyzÃ©s: rÃ©szleges IP-cÃ­mek felhasznÃ¡lÃ³nÃ©vkÃ©nt lesznek Ã©rtelmezve a blokk feldolgozÃ¡sÃ¡nÃ¡l.
Ha nem adsz meg indoklÃ¡st, Ã¡ltalÃ¡nos ok lesz feltÃ¼ntetve.''",
	'regexblock-page-title-1' => 'CÃ­m blokkolÃ¡sa regulÃ¡ris kifejezÃ©sek segÃ­tsÃ©gÃ©vel',
	'regexblock-reason-ip' => 'Ezen IP-cÃ­m szerkesztÃ©si jogosultsÃ¡ga blokkolva van vandalizmus vagy mÃ¡s kÃ¡ros tevÃ©kenysÃ©g miatt, amit te, vagy valaki veled azonos IP-cÃ­met hasznÃ¡lÃ³ kÃ¶vetett el.
Ha Ãºgy gondolod, hogy hiba tÃ¶rtÃ©nt, [[$1|vedd fel velÃ¼nk a kapcsolatot]]',
	'regexblock-reason-name' => 'Ezen felhasznÃ¡lÃ³nÃ©v szerkesztÃ©si jogosultsÃ¡ga blokkolva van vandalizmus vagy mÃ¡s kÃ¡ros tevÃ©kenysÃ©g miatt.
Ha Ãºgy gondolod, hogy hiba tÃ¶rtÃ©nt, [[$1|vedd fel velÃ¼nk a kapcsolatot]]',
	'regexblock-reason-regex' => 'Ezen IP-cÃ­m szerkesztÃ©si jogosultsÃ¡ga blokkolva van vandalizmus vagy mÃ¡s kÃ¡ros tevÃ©kenysÃ©g miatt, amit hasonlÃ³ nevÅ± felhasznÃ¡lÃ³ kÃ¶vetett el.
KÃ©rlek regisztrÃ¡lj mÃ¡s nÃ©ven, vagy [[$1|vedd fel velÃ¼nk a kapcsolatot]]',
	'regexblock-form-username' => 'IP-cÃ­m vagy felhasznÃ¡lÃ³i nÃ©v:',
	'regexblock-form-reason' => 'IndoklÃ¡s:',
	'regexblock-form-expiry' => 'LejÃ¡rat:',
	'regexblock-form-match' => 'Pontos talÃ¡lat',
	'regexblock-form-account-block' => 'Ãšj fiÃ³kok lÃ©trehozÃ¡sÃ¡nak tiltÃ¡sa',
	'regexblock-form-submit' => 'Blokkold ezt a felhasznÃ¡lÃ³t',
	'regexblock-form-submit-empty' => 'Add meg a blokkolandÃ³ felhasznÃ¡lÃ³nevet vagy IP-cÃ­met.',
	'regexblock-form-submit-regex' => 'Ã‰rvÃ©nytelen regulÃ¡ris kifejezÃ©s.',
	'regexblock-form-submit-expiry' => 'Add meg a blokk lejÃ¡ratÃ¡t.',
	'regexblock-link' => 'blokkolÃ¡s regulÃ¡ris kifejezÃ©ssel',
	'regexblock-match-stats-record' => '$1 blokkolta â€ž$2â€ felhasznÃ¡lÃ³t itt: â€ž$3â€ ekkor: â€ž$4â€, naplÃ³zÃ¡s a(z) â€ž$5â€ cÃ­mrÅ‘l',
	'regexblock-nodata-found' => 'Nem talÃ¡lhatÃ³ adat',
	'regexblock-stats-title' => 'RegulÃ¡ris kifejezÃ©s blokk statisztika',
	'regexblock-unblock-success' => 'A blokk feloldÃ¡sa sikerÃ¼lt',
	'regexblock-unblock-log' => "A(z) '''$1''' felhasznÃ¡lÃ³nÃ©v vagy IP-cÃ­m blokkja feloldva.",
	'regexblock-unblock-error' => 'Hiba $1 blokkjÃ¡nak feloldÃ¡sakor.
LehetsÃ©ges hogy nincs ilyen felhasznÃ¡lÃ³.',
	'regexblock-regex-filter' => ' vagy regulÃ¡ris kifejezÃ©s:',
	'regexblock-view-blocked' => 'Blokkok megtekintÃ©se a blokkot kiosztÃ³ felhasznÃ¡lÃ³ szerint:',
	'regexblock-view-all' => 'Mind',
	'regexblock-view-go' => 'Menj',
	'regexblock-view-match' => '(pontos talÃ¡lat)',
	'regexblock-view-regex' => '(keresÃ©s regulÃ¡ris kifejezÃ©ssel)',
	'regexblock-view-account' => '(fiÃ³klÃ©trehozÃ¡s tiltÃ¡sa)',
	'regexblock-view-reason' => 'indoklÃ¡s: $1',
	'regexblock-view-reason-default' => 'Ã¡ltalÃ¡nos indok',
	'regexblock-view-block-infinite' => 'vÃ©gleges blokk',
	'regexblock-view-block-by' => 'blokkolta:',
	'regexblock-view-block-unblock' => 'blokkolÃ¡s feloldÃ¡sa',
	'regexblock-view-stats' => 'statisztikÃ¡k',
	'regexblock-view-empty' => 'A blokkolt felhasznÃ¡lÃ³nevek Ã©s IP-cÃ­mek listÃ¡ja Ã¼res.',
	'regexblock-view-time' => 'ekkor: $1',
	'right-regexblock' => 'FelhasznÃ¡lÃ³k blokkolÃ¡sa az wikifarmon talÃ¡lhatÃ³ Ã¶sszes wikin',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'regexblock' => 'Blocar con regex',
	'regexblock-already-blocked' => '"$1" es ja blocate.',
	'regexblock-block-log' => "Le nomine de usator o adresse IP '''$1''' ha essite blocate.",
	'regexblock-block-success' => 'Blocada succedite',
	'regexblock-currently-blocked' => 'Adresses actualmente blocate:',
	'regexblock-desc' => 'Extension usate pro blocar le nomines e adresses IP de usatores per medio de expressiones regular. Contine e le mechanismo de blocar e un [[Special:Regexblock|pagina special]] pro adder/gerer blocadas',
	'regexblock-expire-duration' => '1 hora,2 horas,4 horas,6 horas,1 die,3 dies,1 septimana,2 septimanas,1 mense,3 menses,6 menses,1 anno,infinite',
	'regexblock-page-title' => 'Blocada de un nomine per expression regular',
	'regexblockstats' => 'Statisticas super blocadas per expressiones regular',
	'regexblock-help' => 'Usa le formulario in basso pro blocar le accesso a scriber ab un adresse IP o nomine de usator specific.
Isto debe facite solmente pro impedir le vandalismo, e in concordantia con le politica in vigor.
\'\'Iste pagina te permitte blocar mesmo usatores non existente, e pote equalmente blocar usatores con nomines similar al date, i.e. "Test" essera blocate insimul con "Test 2", etc.
Tu pote tamben blocar adresses IP complete, isto vole dicer que necuno connectente se de istes potera modificar paginas.
Nota: le adresses IP partial essera considerate como nomines de usator in le determination del blocada.
Si nulle motivo es specificate, un motivo generic predefenite essera usate.\'\'',
	'regexblock-page-title-1' => 'Blocar adresses per medio de expressiones regular',
	'regexblock-reason-ip' => 'Iste adresse IP es impedite de facer modificationes pro causa de vandalismo o de altere disruption per te o per alcuno altere qui usa un adresse IP in commun con te. Si tu crede que isto es un error, per favor [[$1|contacta nos]].',
	'regexblock-reason-name' => 'Iste nomine de usator es impedite de facer modificationes pro causa de vandalismo o de altere disruption.
Si tu crede que isto sia un error, per favor [[$1|contacta nos]].',
	'regexblock-reason-regex' => 'Iste nomine de usator es impedite de facer modificationes pro causa de vandalismo o de altere disruption per un usator con un nomine similar.
Per favor crea un nomine de usator alternative o [[$1|contacta nos]] a proposito de iste problema.',
	'regexblock-form-username' => 'Adresse IP o nomine de usator:',
	'regexblock-form-reason' => 'Motivo:',
	'regexblock-form-expiry' => 'Expiration:',
	'regexblock-form-match' => 'Correspondentia exacte',
	'regexblock-form-account-block' => 'Blocar le creation de nove contos',
	'regexblock-form-submit' => 'Blocar iste usator',
	'regexblock-form-submit-empty' => 'Specifica un nomine de usator o adresse IP a blocar.',
	'regexblock-form-submit-regex' => 'Expression regular invalide.',
	'regexblock-form-submit-expiry' => 'Per favor specifica un periodo de expiration.',
	'regexblock-link' => 'blocar con expression regular',
	'regexblock-match-stats-record' => "$1 blocava '$2' in '$3' al '$4', connectite ab le adresse '$5'",
	'regexblock-nodata-found' => 'Nulle datos trovate',
	'regexblock-stats-title' => 'Statisticas de blocadas per expressiones regular',
	'regexblock-unblock-success' => 'Disblocada succedite',
	'regexblock-unblock-log' => "Le nomine de usator o adresse IP '''$1''' ha essite disblocate.",
	'regexblock-unblock-error' => 'Error durante le disblocada de $1.
Probabilemente non existe tal usator.',
	'regexblock-regex-filter' => ' o valor regex:',
	'regexblock-view-blocked' => 'Vider blocadas per:',
	'regexblock-view-all' => 'Totes',
	'regexblock-view-go' => 'Va',
	'regexblock-view-match' => '(correspondentia exacte)',
	'regexblock-view-regex' => '(correspondentia per expression regular)',
	'regexblock-view-account' => '(blocada de creation de contos)',
	'regexblock-view-reason' => 'motivo: $1',
	'regexblock-view-reason-default' => 'motivo generic',
	'regexblock-view-block-infinite' => 'blocada permanente',
	'regexblock-view-block-by' => 'blocate per:',
	'regexblock-view-block-unblock' => 'disblocar',
	'regexblock-view-stats' => 'statisticas',
	'regexblock-view-empty' => 'Le lista de nomines e adresses blocate es vacue.',
	'regexblock-view-time' => 'le $1',
	'right-regexblock' => 'Blocar usatores de modificar in tote le wikis del ferma de wikis',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Irwangatot
 * @author IvanLanin
 * @author Rex
 */
$messages['id'] = array(
	'regexblock' => 'Pemblokiran regex',
	'regexblock-already-blocked' => '$1 telah diblokir.',
	'regexblock-block-log' => "Nama pengguna atau alamat IP '''$1''' telah diblokir.",
	'regexblock-block-success' => 'Pemblokiran berhasil',
	'regexblock-currently-blocked' => 'Alamat yang sedang diblokir:',
	'regexblock-desc' => 'Ekstensi yang digunakan untuk memblokir pengguna nama dan alamat IP dengan ekspresi reguler. Berisi baik mekanisme pemblokiran dan suatu [[Special:Regexblock|halaman istimewa]] untuk menambah/mengelola blokir',
	'regexblock-expire-duration' => '1 jam,2 jam,4 jam,6 jam,1 hari,3 hari,1 minggu,2 minggu,1 bulan,3 bulan,6 bulan,1 tahun,selamanya',
	'regexblock-page-title' => 'Pemblokiran nama dengan ekspresi reguler',
	'regexblockstats' => 'Statistik pemblokiran regex',
	'regexblock-help' => 'Gunakan formulir di bawah untuk memblokir akses menulis dari alamat IP atau nama pengguna tertentu.
Gunakan ini hanya untuk mencegah vandalisme dan sesuai dengan kebijakan.
\'\'Halaman ini memungkinkan Anda untuk bahkan memblokir pengguna yang belum ada, dan juga akan memblokir pengguna dengan nama yang serupa dengan yang diberikan, yaitu "Pengujian" akan diblokir sebagaimana "Pengujian 2", dll.
Anda juga dapat memblokir seluruh alamat IP, yang berarti bahwa tidak ada yang bisa masuk log dan menyunting halaman.
Catatan: alamat IP parsial akan diperlakukan seperti nama pengguna dalam penentuan blokir.
Jika tidak ada alasan yang diberikan, suatu alasan generik baku akan digunakan.\'\'',
	'regexblock-page-title-1' => 'Blokir alamat menggunakan ekspresi reguler',
	'regexblock-reason-ip' => 'Alamat IP ini dicekal untuk menyunting karena vandalisme atau gangguan yang dilakukan oleh Anda atau orang lain yang berbagi IP dengan Anda.
Jika menurut Anda ini adalah suatu kesalahan, silakan [[$1|hubungi kami]]',
	'regexblock-reason-name' => 'Pengguna ini dicegah dari penyuntingan karena vandalisme atau kekacauan lain.
Jika anda percaya ini adalah kesalahan, silakan [[$1|hubungi kami]]',
	'regexblock-reason-regex' => 'Pengguna ini dicegah dari penyuntingan karena vandalisme atau kekacauan lain oleh pengguna dengan nama yang mirip.
Silakan buat nama pengguna lain atau [[$1|hubungi kami]] tentang permasalahan ini',
	'regexblock-form-username' => 'Alamat IP atau nama pengguna:',
	'regexblock-form-reason' => 'Alasan:',
	'regexblock-form-expiry' => 'Kedaluwarsa:',
	'regexblock-form-match' => 'Pertandingan tepat',
	'regexblock-form-account-block' => 'Blokir pembuatan akun baru',
	'regexblock-form-submit' => 'Blok pengguna ini',
	'regexblock-form-submit-empty' => 'Memberikan nama pengguna atau alamat IP yang dapat diblokir.',
	'regexblock-form-submit-regex' => 'Ekspresi regular tidak valid.',
	'regexblock-form-submit-expiry' => 'Tolong tentukan periode kedaluwarsa.',
	'regexblock-link' => 'blokir dengan ekspresi reguler',
	'regexblock-match-stats-record' => "$1 diblok '$2' pada '$3' saat '$4', masuk log dari alamat '$5'",
	'regexblock-nodata-found' => 'Tanggal tidak ditemukan',
	'regexblock-stats-title' => 'Statistik blokir regex',
	'regexblock-unblock-success' => 'Buka blokir berhasil',
	'regexblock-unblock-log' => "Nama pengguna atau alamat IP '''$1''' telah dibuka diblokirnya.",
	'regexblock-unblock-error' => 'Kesalahan buka blokir $1.
Mungkin tidak ada pengguna seperti itu.',
	'regexblock-regex-filter' => 'atau nilai regex:',
	'regexblock-view-blocked' => 'Lihat pemblokiran oleh:',
	'regexblock-view-all' => 'Semua',
	'regexblock-view-go' => 'Tuju ke',
	'regexblock-view-match' => '(pertandingan tepat)',
	'regexblock-view-regex' => '(kecocokan regex)',
	'regexblock-view-account' => '(pembuatan akun diblokir)',
	'regexblock-view-reason' => 'alasan: $1',
	'regexblock-view-reason-default' => 'alasan generik',
	'regexblock-view-block-infinite' => 'blok permanen',
	'regexblock-view-block-by' => 'diblokir oleh:',
	'regexblock-view-block-unblock' => 'buka blokir',
	'regexblock-view-stats' => 'stat',
	'regexblock-view-empty' => 'Daftar nama dan alamat yang diblokir kosong.',
	'regexblock-view-time' => 'pada $1',
	'right-regexblock' => 'Memblokir pengguna untuk menyunting pada semua wiki di kebun wiki',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'regexblock-form-reason' => 'MgbÃ¡ghapá»¥tÃ :',
	'regexblock-form-expiry' => 'GbÃ¡ okÃ :',
	'regexblock-view-all' => 'HanÃ­le',
	'regexblock-view-go' => 'GÃ¡',
	'regexblock-view-reason' => 'mgbÃ¡hÃ pá»¥tÃ¡: $1',
	'regexblock-view-time' => 'na $1',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'regexblock-form-expiry' => 'Expiro:',
);

/** Icelandic (Ã­slenska)
 * @author S.Ã–rvarr.S
 */
$messages['is'] = array(
	'regexblock-already-blocked' => '$1 er nÃº Ã¾egar Ã­ banni.',
	'regexblock-form-reason' => 'ÃstÃ¦Ã°a:',
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 * @author F. Cosoleto
 */
$messages['it'] = array(
	'regexblock' => 'Blocco Regex',
	'regexblock-already-blocked' => '$1 Ã¨ giÃ  bloccato.',
	'regexblock-block-log' => "Il nome utente o indirizzo IP '''$1''' Ã¨ stato bloccato.",
	'regexblock-block-success' => 'Blocco eseguito',
	'regexblock-currently-blocked' => 'Indirizzi attualmente bloccati:',
	'regexblock-desc' => 'Estensione utilizzata per bloccare i nomi utente e gli indirizzi IP con le espressioni regolari. Contiene il meccanismo di blocco e una [[Special:Regexblock|pagina speciale]] per aggiungere/gestire i blocchi',
	'regexblock-expire-duration' => '1 ora, 2 ore, 4 ore, 6 ore, 1 giorno, 3 giorni, 1 settimana, 2 settimane, 1 mese, 3 mesi, 6 mesi, 1 anno, infinito',
	'regexblockstats' => 'Statistiche di blocco regex',
	'regexblock-page-title-1' => 'Blocco indirizzo utilizzando le espressioni regolari',
	'regexblock-form-username' => 'Indirizzo IP o nome utente:',
	'regexblock-form-reason' => 'Motivo:',
	'regexblock-form-expiry' => 'Scadenza del blocco:',
	'regexblock-form-match' => 'Corrispondenza esatta',
	'regexblock-form-account-block' => 'Bloccare creazione di nuovi account',
	'regexblock-form-submit' => "Blocca l'utente",
	'regexblock-form-submit-empty' => 'Dare un nome utente o un indirizzo IP da bloccare.',
	'regexblock-form-submit-regex' => 'Espressione regolare non valida.',
	'regexblock-form-submit-expiry' => 'Si prega di specificare un periodo di scadenza.',
	'regexblock-link' => 'bloccare con espressioni regolari',
	'regexblock-match-stats-record' => '$1 ha bloccato "$2" su "$3" il $6 alle $7, connesso dall\'indirizzo "$5"',
	'regexblock-nodata-found' => 'Nessun dato trovato',
	'regexblock-stats-title' => 'Statistiche di blocco regex',
	'regexblock-unblock-success' => 'Sblocco eseguito',
	'regexblock-unblock-log' => "Il nome utente o indirizzo IP '''$1''' Ã¨ stato sbloccato.",
	'regexblock-unblock-error' => "Errore nello sblocco di $1.
Probabilmente non c'Ã¨ nessun utente con questo nome.",
	'regexblock-regex-filter' => " o valore dell'espressione regolare:",
	'regexblock-view-blocked' => 'Visualizza bloccati da:',
	'regexblock-view-all' => 'Tutti',
	'regexblock-view-go' => 'Vai',
	'regexblock-view-match' => '(corrispondenza esatta)',
	'regexblock-view-regex' => '(corrispondenza espressione regolare)',
	'regexblock-view-account' => '(blocco creazione utenze)',
	'regexblock-view-reason' => 'motivo: $1',
	'regexblock-view-reason-default' => 'motivazione generica',
	'regexblock-view-block-infinite' => 'blocco permanente',
	'regexblock-view-block-by' => 'bloccato da:',
	'regexblock-view-block-unblock' => 'sblocca',
	'regexblock-view-stats' => 'statistiche',
	'regexblock-view-empty' => "L'elenco dei nomi e degli indirizzi bloccati Ã¨ vuoto.",
	'regexblock-view-time' => 'il $2 alle $3',
	'right-regexblock' => 'Blocca utenti in scrittura su tutti i siti della wiki farm',
);

/** Japanese (æ—¥æœ¬èªž)
 * @author Fryed-peach
 * @author Hosiryuhosi
 * @author Shirayuki
 * @author é’å­å®ˆæ­Œ
 */
$messages['ja'] = array(
	'regexblock' => 'æ­£è¦è¡¨ç¾ãƒ–ãƒ­ãƒƒã‚¯',
	'regexblock-already-blocked' => '$1 ã¯æ—¢ã«ãƒ–ãƒ­ãƒƒã‚¯ã•ã‚Œã¦ã„ã¾ã™ã€‚',
	'regexblock-block-log' => "åˆ©ç”¨è€…åã‚‚ã—ãã¯IPã‚¢ãƒ‰ãƒ¬ã‚¹ '''$1''' ã¯ãƒ–ãƒ­ãƒƒã‚¯ã•ã‚Œã¾ã—ãŸã€‚",
	'regexblock-block-success' => 'ãƒ–ãƒ­ãƒƒã‚¯ã«æˆåŠŸã—ã¾ã—ãŸ',
	'regexblock-currently-blocked' => 'ç¾åœ¨ãƒ–ãƒ­ãƒƒã‚¯ã•ã‚Œã¦ã„ã‚‹ã‚¢ãƒ‰ãƒ¬ã‚¹:',
	'regexblock-desc' => 'åˆ©ç”¨è€…åã‚„IPã‚¢ãƒ‰ãƒ¬ã‚¹ã‚’æ­£è¦è¡¨ç¾ã‚’ä½¿ã£ã¦ãƒ–ãƒ­ãƒƒã‚¯ã™ã‚‹ãŸã‚ã®æ‹¡å¼µæ©Ÿèƒ½ã€‚ãƒ–ãƒ­ãƒƒã‚¯æ©Ÿæ§‹ã¨ãƒ–ãƒ­ãƒƒã‚¯ã‚’è¿½åŠ ãƒ»ç®¡ç†ã™ã‚‹ãŸã‚ã®[[Special:Regexblock|ç‰¹åˆ¥ãƒšãƒ¼ã‚¸]]ã®ä¸¡æ–¹ã‚’å«ã‚€',
	'regexblock-expire-duration' => '1æ™‚é–“,2æ™‚é–“,4æ™‚é–“,6æ™‚é–“,1æ—¥,3æ—¥,1é€±é–“,2é€±é–“,1ã‹æœˆ,3ã‹æœˆ,6ã‹æœˆ,1å¹´,ç„¡æœŸé™',
	'regexblock-page-title' => 'æ­£è¦è¡¨ç¾ã«ã‚ˆã‚‹åˆ©ç”¨è€…åã®ãƒ–ãƒ­ãƒƒã‚¯',
	'regexblockstats' => 'æ­£è¦è¡¨ç¾ãƒ–ãƒ­ãƒƒã‚¯çµ±è¨ˆ',
	'regexblock-help' => 'ä»¥ä¸‹ã®ãƒ•ã‚©ãƒ¼ãƒ ã‚’ä½¿ç”¨ã—ã¦ç‰¹å®šã®IPã‚¢ãƒ‰ãƒ¬ã‚¹ã¾ãŸã¯åˆ©ç”¨è€…åã‹ã‚‰ã®æ›¸ãè¾¼ã¿ã‚¢ã‚¯ã‚»ã‚¹ã‚’ãƒ–ãƒ­ãƒƒã‚¯ã—ã¾ã™ã€‚
ã“ã‚Œã¯è’ã‚‰ã—ã‚’é˜²ãç›®çš„ã®ã¿ã«ä½¿ç”¨ã™ã‚‹ã¹ãã§ã‚ã‚Šã€æ–¹é‡ã¨åˆè‡´ã—ã¦ã„ã‚‹ã¹ãã§ã™ã€‚
\'\'ã“ã®ãƒšãƒ¼ã‚¸ã‚’ä½¿ç”¨ã™ã‚‹ã¨ã¾ã å­˜åœ¨ã—ã¦ã„ãªã„åˆ©ç”¨è€…ã•ãˆãƒ–ãƒ­ãƒƒã‚¯ã§ãã¾ã™ã€‚
ã¾ãŸã€æŒ‡å®šã—ãŸåå‰ã«é¡žä¼¼ã—ãŸåˆ©ç”¨è€…ã‚‚ãƒ–ãƒ­ãƒƒã‚¯ã—ã¾ã™ã€‚ã¤ã¾ã‚Šã€"Test" ã‚’ãƒ–ãƒ­ãƒƒã‚¯ã™ã‚‹ã¨ "Test 2" ã‚‚ãƒ–ãƒ­ãƒƒã‚¯ã•ã‚Œã¾ã™ã€‚
ã•ã‚‰ã«ã€å®Œå…¨ãªIPã‚¢ãƒ‰ãƒ¬ã‚¹ã‚‚ãƒ–ãƒ­ãƒƒã‚¯ã§ãã¾ã™ã€‚ã¤ã¾ã‚Šã€ãã“ã‹ã‚‰ãƒ­ã‚°ã‚¤ãƒ³ã—ã¦ã„ã‚‹ã™ã¹ã¦ã®äººãŒç·¨é›†ã§ããªã„ã‚ˆã†ã«ã§ãã‚‹ã¨ã„ã†ã“ã¨ã§ã™ã€‚
æ³¨ï¼šéƒ¨åˆ†çš„ãªIPã‚¢ãƒ‰ãƒ¬ã‚¹ã®å ´åˆã¯ã€ãƒ–ãƒ­ãƒƒã‚¯ã®åˆ¤å®šã®éš›ã«ãã‚Œã‚’åˆ©ç”¨è€…åã¨ã—ã¦å‡¦ç†ã—ã¾ã™ã€‚
ç†ç”±ã‚’æŒ‡å®šã—ãªã‹ã£ãŸå ´åˆã¯ã€æ—¢å®šã®ä¸€èˆ¬çš„ãªç†ç”±ã‚’ä½¿ç”¨ã—ã¾ã™ã€‚\'\'',
	'regexblock-page-title-1' => 'æ­£è¦è¡¨ç¾ã‚’ä½¿ã£ã¦ã‚¢ãƒ‰ãƒ¬ã‚¹ã‚’ãƒ–ãƒ­ãƒƒã‚¯ã™ã‚‹',
	'regexblock-reason-ip' => 'ã‚ãªãŸã€ã‚‚ã—ãã¯ã‚ãªãŸã¨IPã‚¢ãƒ‰ãƒ¬ã‚¹ã‚’å…±æœ‰ã™ã‚‹ã ã‚Œã‹ã«ã‚ˆã‚‹è’ã‚‰ã—ãªã©ã®ç ´å£Šè¡Œç‚ºã®ãŸã‚ã€ã“ã®IPã‚¢ãƒ‰ãƒ¬ã‚¹ã¯ç·¨é›†ãŒç¦æ­¢ã•ã‚Œã¦ã„ã¾ã™ã€‚ã“ã‚ŒãŒé–“é•ã„ã ã¨ãŠè€ƒãˆãªã‚‰ã€[[$1|æˆ‘ã€…ã«é€£çµ¡]]ã—ã¦ãã ã•ã„',
	'regexblock-reason-name' => 'ã“ã®åˆ©ç”¨è€…åã¯è’ã‚‰ã—ãªã©ã®ç ´å£Šè¡Œç‚ºã®ãŸã‚ç·¨é›†ãŒç¦æ­¢ã•ã‚Œã¦ã„ã¾ã™ã€‚ã“ã‚ŒãŒé–“é•ã„ã ã¨ãŠè€ƒãˆãªã‚‰ã€[[$1|æˆ‘ã€…ã«é€£çµ¡]]ã—ã¦ãã ã•ã„',
	'regexblock-reason-regex' => 'é¡žä¼¼ã—ãŸåå‰ã®åˆ©ç”¨è€…ã«ã‚ˆã‚‹è’ã‚‰ã—ãªã©ã®ç ´å£Šè¡Œç‚ºã®ãŸã‚ã€ã“ã®åˆ©ç”¨è€…åã¯ç·¨é›†ãŒç¦æ­¢ã•ã‚Œã¦ã„ã¾ã™ã€‚åˆ¥ã®åå‰ã§ã‚¢ã‚«ã‚¦ãƒ³ãƒˆã‚’ä½œæˆã•ã‚Œã‚‹ã‹ã€ã“ã®å•é¡Œã«ã¤ã„ã¦[[$1|æˆ‘ã€…ã«é€£çµ¡]]ã—ã¦ãã ã•ã„',
	'regexblock-form-username' => 'IPã‚¢ãƒ‰ãƒ¬ã‚¹ã¾ãŸã¯åˆ©ç”¨è€…å:',
	'regexblock-form-reason' => 'ç†ç”±ï¼š',
	'regexblock-form-expiry' => 'æœ‰åŠ¹æœŸé™ï¼š',
	'regexblock-form-match' => 'å®Œå…¨ä¸€è‡´',
	'regexblock-form-account-block' => 'æ–°è¦ã‚¢ã‚«ã‚¦ãƒ³ãƒˆã®ä½œæˆã‚’ãƒ–ãƒ­ãƒƒã‚¯ã™ã‚‹',
	'regexblock-form-submit' => 'ã“ã®åˆ©ç”¨è€…ã‚’ãƒ–ãƒ­ãƒƒã‚¯ã™ã‚‹',
	'regexblock-form-submit-empty' => 'ãƒ–ãƒ­ãƒƒã‚¯ã™ã‚‹åˆ©ç”¨è€…åã‹IPã‚¢ãƒ‰ãƒ¬ã‚¹ã‚’å…¥åŠ›ã—ã¦ãã ã•ã„ã€‚',
	'regexblock-form-submit-regex' => 'ç„¡åŠ¹ãªæ­£è¦è¡¨ç¾ã§ã™ã€‚',
	'regexblock-form-submit-expiry' => 'æœŸé™ã‚’è¨­å®šã—ã¦ãã ã•ã„ã€‚',
	'regexblock-link' => 'æ­£è¦è¡¨ç¾ã‚’ä½¿ã£ã¦ãƒ–ãƒ­ãƒƒã‚¯',
	'regexblock-match-stats-record' => '$1 ãŒ $2 (ã‚¢ãƒ‰ãƒ¬ã‚¹ $5) ã‚’ $3 ã§ $4 ã«ãƒ–ãƒ­ãƒƒã‚¯ã—ã¾ã—ãŸ',
	'regexblock-nodata-found' => 'è©²å½“ãƒ‡ãƒ¼ã‚¿ãªã—',
	'regexblock-stats-title' => 'æ­£è¦è¡¨ç¾ãƒ–ãƒ­ãƒƒã‚¯ã®çµ±è¨ˆ',
	'regexblock-unblock-success' => 'ãƒ–ãƒ­ãƒƒã‚¯ã®è§£é™¤ã«æˆåŠŸã—ã¾ã—ãŸ',
	'regexblock-unblock-log' => "åˆ©ç”¨è€…åã¾ãŸã¯IPã‚¢ãƒ‰ãƒ¬ã‚¹ '''$1''' ã®ãƒ–ãƒ­ãƒƒã‚¯ã‚’è§£é™¤ã—ã¾ã—ãŸã€‚",
	'regexblock-unblock-error' => '$1 ã®ãƒ–ãƒ­ãƒƒã‚¯è§£é™¤ã®ã‚¨ãƒ©ãƒ¼ã§ã™ã€‚
ãŠãã‚‰ãã€åˆ©ç”¨è€…ãŒå­˜åœ¨ã—ã¾ã›ã‚“ã€‚',
	'regexblock-regex-filter' => ' ã‚ã‚‹ã„ã¯æ­£è¦è¡¨ç¾:',
	'regexblock-view-blocked' => 'æŒ‡å®šã—ãŸåˆ©ç”¨è€…ã«ã‚ˆã‚‹ãƒ–ãƒ­ãƒƒã‚¯ã‚’è¡¨ç¤º:',
	'regexblock-view-all' => 'ã™ã¹ã¦',
	'regexblock-view-go' => 'è¡¨ç¤º',
	'regexblock-view-match' => '(å®Œå…¨ä¸€è‡´)',
	'regexblock-view-regex' => '(æ­£è¦è¡¨ç¾ãƒžãƒƒãƒ)',
	'regexblock-view-account' => '(ã‚¢ã‚«ã‚¦ãƒ³ãƒˆä½œæˆãƒ–ãƒ­ãƒƒã‚¯)',
	'regexblock-view-reason' => 'ç†ç”±: $1',
	'regexblock-view-reason-default' => 'ä¸€èˆ¬ã®ç†ç”±',
	'regexblock-view-block-infinite' => 'ç„¡æœŸé™ãƒ–ãƒ­ãƒƒã‚¯',
	'regexblock-view-block-by' => 'ãƒ–ãƒ­ãƒƒã‚¯å®Ÿè¡Œè€…:',
	'regexblock-view-block-unblock' => 'ãƒ–ãƒ­ãƒƒã‚¯è§£é™¤',
	'regexblock-view-stats' => 'çµ±è¨ˆ',
	'regexblock-view-empty' => 'ãƒ–ãƒ­ãƒƒã‚¯ã•ã‚ŒãŸåˆ©ç”¨è€…åã¨ã‚¢ãƒ‰ãƒ¬ã‚¹ã®ä¸€è¦§ã«ã¯é …ç›®ãŒã‚ã‚Šã¾ã›ã‚“ã€‚',
	'regexblock-view-time' => '$1',
	'right-regexblock' => 'åˆ©ç”¨è€…ã‚’ã‚¦ã‚£ã‚­ãƒ•ã‚¡ãƒ¼ãƒ ä¸Šã®ã™ã¹ã¦ã®ã‚¦ã‚£ã‚­ã§æŠ•ç¨¿ãƒ–ãƒ­ãƒƒã‚¯',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'regexblock-already-blocked' => '$1 wis diblokir',
	'regexblock-block-log' => "Panganggo utawa alamat IP '''$1''' wis diblokir.",
	'regexblockstats' => 'Statistik pamblokiran regex',
	'regexblock-help' => "Nganggoa formulir ing ngisor iki kanggo mblokir aksÃ¨s panulisan saka sawijining alamat IP tartamtu utawa jeneng panganggo.
Iki nanging namung kudu dilakokakÃ© waÃ© kanggo menggak vandalisme, lan miturut kawicaksanan sing ana.
''Nganggo kaca iki panjenengan uga bisa mblokir panganggo-panganggo sing durung ana, lan uga mblokir panganggo sing duwÃ© jeneng mÃ¨mper karo jeneng sing wis ana. ContonÃ© Â« Test Â» bakal diblokir karo Â« Test 2 Â» lsp.
Panjenengan uga bisa mblokir alamat-alamat IP sacara pol-polan, dadi tegesÃ© ora ana sing bisa log mlebu saka kana lan nyunting kaca-kaca.
Cathetan: alamat IP parsial bakal dianggep miturut jeneng panganggo yÃ¨n arep diblokir.
YÃ¨n ora ana alesan sing diwÃ¨nÃ¨hakÃ©, sawijining alesan umum baku bakal dienggo.",
	'regexblock-form-username' => 'Alamat IP utawa jeneng panganggo:',
	'regexblock-form-reason' => 'Alesan:',
	'regexblock-form-match' => 'Persis cocog',
	'regexblock-view-blocked' => 'Ndeleng diblokir dÃ©ning:',
	'regexblock-view-all' => 'KabÃ¨h',
	'regexblock-view-go' => 'GolÃ¨k',
	'regexblock-view-reason' => 'alesan: $1',
	'regexblock-view-reason-default' => 'alesan umum',
	'regexblock-view-block-infinite' => 'blokade permanÃ¨n',
	'regexblock-view-block-by' => 'diblokir dÃ©ning:',
);

/** Georgian (áƒ¥áƒáƒ áƒ—áƒ£áƒšáƒ˜)
 * @author David1010
 * @author Malafaya
 */
$messages['ka'] = array(
	'regexblock-form-username' => 'IP áƒ›áƒ˜áƒ¡áƒáƒ›áƒáƒ áƒ—áƒ˜ áƒáƒœ áƒ›áƒáƒ›áƒ®áƒ›áƒáƒ áƒ”áƒ‘áƒšáƒ˜áƒ¡ áƒ¡áƒáƒ®áƒ”áƒšáƒ˜:',
	'regexblock-form-reason' => 'áƒ›áƒ˜áƒ–áƒ”áƒ–áƒ˜:',
	'regexblock-form-expiry' => 'áƒ˜áƒ¬áƒ£áƒ áƒ”áƒ‘áƒ:',
	'regexblock-form-submit' => 'áƒáƒ› áƒ›áƒáƒ›áƒ®áƒ›áƒáƒ áƒ”áƒ‘áƒšáƒ˜áƒ¡ áƒ“áƒáƒ‘áƒšáƒáƒ™áƒ•áƒ',
	'regexblock-nodata-found' => 'áƒ›áƒáƒœáƒáƒªáƒ”áƒ›áƒ˜ áƒ•áƒ”áƒ  áƒ›áƒáƒ˜áƒ«áƒ”áƒ‘áƒœáƒ',
	'regexblock-view-all' => 'áƒ§áƒ•áƒ”áƒšáƒ',
	'regexblock-view-go' => 'áƒ›áƒ˜áƒ“áƒ˜',
	'regexblock-view-match' => '(áƒ–áƒ£áƒ¡áƒ¢áƒ˜ áƒ¨áƒ”áƒ¡áƒáƒ‘áƒáƒ›áƒ˜áƒ¡áƒáƒ‘áƒ)',
	'regexblock-view-reason' => 'áƒ›áƒ˜áƒ–áƒ”áƒ–áƒ˜: $1',
	'regexblock-view-block-unblock' => 'áƒ‘áƒšáƒáƒ™áƒ˜áƒ¡ áƒ›áƒáƒ®áƒ¡áƒœáƒ',
	'regexblock-view-stats' => 'áƒ¡áƒ¢áƒáƒ¢áƒ˜áƒ¡áƒ¢áƒ˜áƒ™áƒ',
);

/** Kalaallisut (kalaallisut)
 * @author Qaqqalik
 */
$messages['kl'] = array(
	'regexblock-expire-duration' => '1 tiimi,2 tiimit,4 tiimit,6 tiimit,ulloq 1,ullut 3,sap akunn 1,sap akunn 2,1 qaammat,qaammatit 3,qaammatit 6,ukioq 1,killeqanngitsoq',
);

/** Khmer (áž—áž¶ážŸáž¶ážáŸ’áž˜áŸ‚ážš)
 * @author Chhorran
 * @author Lovekhmer
 * @author Thearith
 * @author áž‚áž¸áž˜ážŸáŸŠáŸ’ážšáž»áž“
 */
$messages['km'] = array(
	'regexblock-already-blocked' => '$1ážáŸ’ážšáž¼ážœáž”áž¶áž“áž áž¶áž˜ážƒáž¶ážáŸ‹ážšáž½áž…áž áž¾áž™áŸ”',
	'regexblock-block-log' => "áž¢ážáŸ’ážáž“áž¶áž˜áž¬ áž¢áž¶ážŸáž™ážŠáŸ’áž‹áž¶áž“IP '''$1''' áž”áž¶áž“ážáŸ’ážšáž¼ážœážšáž¶áŸ†áž„ážáŸ’áž‘áž”áŸ‹áŸ”",
	'regexblock-block-success' => 'ážšáž¶áŸ†áž„ážáŸ’áž‘áž”áŸ‹ážŠáŸ„áž™áž‡áŸ„áž‚áž‡áŸáž™',
	'regexblock-currently-blocked' => 'áž¢áž¶ážŸáž™ážŠáŸ’áž‹áž¶áž“ážŠáŸ‚áž›ážáŸ’ážšáž¼ážœáž”áž¶áž“áž áž¶áž˜ážƒáž¶ážáŸ‹áž”áž…áŸ’áž…áž»áž”áŸ’áž”áž“áŸ’áž“áŸ–',
	'regexblock-form-username' => 'áž¢áž¶ážŸáž™ážŠáŸ’áž‹áž¶áž“IP áž¬áž¢ážáŸ’ážáž“áž¶áž˜áŸ–',
	'regexblock-form-reason' => 'áž˜áž¼áž›áž áŸážáž»áŸ–',
	'regexblock-form-expiry' => 'áž•áž»ážáž€áŸ†ážŽážáŸ‹:',
	'regexblock-form-account-block' => 'ážšáž¶áŸ†áž„ážáŸ’áž‘áž”áŸ‹â€‹áž€áž¶ážšáž”áž„áŸ’áž€áž¾ážâ€‹áž‚ážŽáž“áž¸â€‹ážáŸ’áž˜áž¸',
	'regexblock-form-submit' => 'áž áž¶áž˜ážƒáž¶ážáŸ‹áž¢áŸ’áž“áž€áž”áŸ’ážšáž¾áž”áŸ’ážšáž¶ážŸáŸ‹áž“áŸáŸ‡',
	'regexblock-form-submit-empty' => 'áž•áŸ’ážáž›áŸ‹áž¢ážáŸ’ážáž“áž¶áž˜áž¬áž¢áž¶ážŸáž™ážŠáŸ’áž‹áž¶áž“IPážŠáž¾áž˜áŸ’áž”áž¸áž áž¶áž˜ážƒáž¶ážáŸ‹áŸ”',
	'regexblock-form-submit-expiry' => 'ážŸáž¼áž˜â€‹áž’áŸ’ážœáž¾áž€áž¶ážšâ€‹áž”áž‰áŸ’áž‡áž¶áž€áŸ‹â€‹áž€áž¶áž›áž”ážšáž·áž…áŸ’áž†áŸáž‘â€‹ážŠáŸ‚áž›â€‹ážáŸ’ážšáž¼ážœâ€‹áž•áž»ážáž€áŸ†ážŽážáŸ‹â€‹áŸ”',
	'regexblock-unblock-success' => 'áž”áž¶áž“ážˆáž”áŸ‹áž áž¶áž˜ážƒáž¶ážáŸ‹ážŠáŸ„áž™áž‡áŸ„áž‚áž‡áŸáž™',
	'regexblock-unblock-log' => "áž¢ážáŸ’ážáž“áž¶áž˜áž¬ áž¢áž¶ážŸáž™ážŠáŸ’áž‹áž¶áž“ IP '''$1''' áž”áž¶áž“ážáŸ’ážšáž¼ážœâ€‹áž›áŸ‚áž„ážšáž¶áŸ†áž„ážáŸ’áž‘áž”áŸ‹â€‹áŸ”",
	'regexblock-view-blocked' => 'áž˜áž¾áž›â€‹áž€áž¶ážšâ€‹ážšáž¶áŸ†áž„ážáŸ’áž‘áž”áŸ‹â€‹ážŠáŸ„áž™:',
	'regexblock-view-all' => 'áž‘áž¶áŸ†áž„áž¢ážŸáŸ‹',
	'regexblock-view-go' => 'áž‘áŸ…',
	'regexblock-view-account' => '(ážšáž¶áŸ†áž„ážáŸ’áž‘áž”áŸ‹â€‹áž€áž¶ážšáž”áž„áŸ’áž€áž¾ážâ€‹áž‚ážŽáž“áž¸)',
	'regexblock-view-reason' => 'áž˜áž¼áž›áž áŸážáž»áŸ– $1',
	'regexblock-view-block-by' => 'ážáŸ’ážšáž¼ážœáž”áž¶áž“ážšáž¶áŸ†áž„ážáŸ’áž‘áž”áŸ‹ážŠáŸ„áž™áŸ–',
	'regexblock-view-block-unblock' => 'ážˆáž”áŸ‹áž áž¶áž˜ážƒáž¶ážáŸ‹',
	'regexblock-view-stats' => 'ážŸáŸ’ážáž·ážáž·',
	'regexblock-view-empty' => 'áž”áž‰áŸ’áž‡áž¸áž¢ážáŸ’ážáž“áž¶áž˜áž“áž·áž„áž¢áž¶ážŸáž™ážŠáŸ’áž‹áž¶áž“IPáž‚ážºáž‘áž‘áŸáŸ”',
	'regexblock-view-time' => 'áž“áŸ… $1',
);

/** Kannada (à²•à²¨à³à²¨à²¡)
 * @author Nayvik
 */
$messages['kn'] = array(
	'regexblock-form-reason' => 'à²•à²¾à²°à²£:',
	'regexblock-view-all' => 'à²Žà²²à³à²²à²¾',
	'regexblock-view-go' => 'à²¹à³‹à²—à³',
);

/** Korean (í•œêµ­ì–´)
 * @author ì•„ë¼
 */
$messages['ko'] = array(
	'regexblock-form-username' => 'IP ì£¼ì†Œ ë˜ëŠ” ì‚¬ìš©ìž ì´ë¦„:',
);

/** Krio (Krio)
 * @author Jose77
 * @author Lloffiwr
 * @author Psubhashish
 */
$messages['kri'] = array(
	'regexblock-view-go' => 'Go to am',
);

/** Kinaray-a (Kinaray-a)
 * @author Jose77
 */
$messages['krj'] = array(
	'regexblock-view-go' => 'Agto',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'regexblock' => 'Sperre Ã¶vver <i lang="en">regular expressions</i>',
	'regexblock-already-blocked' => '$1 es ald jesperrt.',
	'regexblock-block-log' => "DÃ¤ Metmaacher met dÃ¤m Name '''\$1''' odder de <code lang=\"en\">IP</code>-Address es jesperrt woode.",
	'regexblock-block-success' => 'Jesperrt',
	'regexblock-currently-blocked' => 'Addresse, di em Momang jesperrt sin:',
	'regexblock-desc' => 'MÃ¤Ã¤t et mÃ¼jjelesch, Metmaacher  un IP-Addresse Ã¶vver <i lang="en">regular expressions</i> ze sperre. Deit sperre, un hÃ¤t en [[Special:Regexblock|SÃ¶ndersigg]], Ã¶m de Sperre ze verwallde.',
	'regexblock-expire-duration' => '1 Stund:1 hour,2 Stund:2 hours,3 Stund:3 hours,6 Stund:6 hours,12 Stund:12 hours,1 Dach:1 day,3 DÃ¤ch:3 days,1 Woch:1 week,2 Woche:2 weeks,3 Woche:3 weeks,1 Mond:1 month,3 Mond:3 months,6 Mond:6 months,9 Mond:9 months,1 Johr:1 year,2 Johre:2 years,3 Johre:3 years,Iewich:infinite',
	'regexblock-page-title' => 'Name Sperre Ã¶vver <i lang="en">regular expressions</i>',
	'regexblockstats' => 'Statistike Ã¶vver et {{int:Regexblock-page-title}}',
	'regexblock-help' => 'En hee dÃ¤m Fommulaa kanns De en besptemmpte <code lang="en">IP</code>-AddreÃŸ odder enem Metmaacher singe Name shperre un dÃ¤nne domet et Schriive em Wikki verbeede.
Dat sullt mer bloÃŸ donn, Ã¶m Kappottmaacherei ze verhindere, un nur noh dÃ¤ RÃ¤jelle, di mer dofÃ¶r han.
\'\'Die Sigg hee mÃ¤Ã¤t et mÃ¼jjelesch, Metmaacher ze shperre, die et (noch) nit jitt. Mer hann och leish Metmaacher met Ã¤hnlesche Name en einem RÃ¶tsch shperre. Zom Beishpell â€žEns VersÃ¶keâ€œ weet metjeshperrt, wam_mer â€žEns VersÃ¶ke 2â€œ shperre deiht, un esu wigger. Mer kann och janze <code lang="en">IP</code>-Addresse shperre, wat bedÃ¼gg, dat keine, dÃ¤ vun dÃ¤ AddreÃŸ enlogge deiht, mieh Sigge Ã¤ndere darf. OpjepaÃŸ: Hallve <code lang="en">IP</code>-Addresse wÃ¤de als Name vun Metmaachere aanjesinnf, wann et Ã¶m et Beshtemme vun Shperre jeiht. Wann keine Jrond fÃ¶r et Shperre aanjejovve es, weed ene Shtandatt-Tex jenumme.\'\'',
	'regexblock-page-title-1' => 'Addresse Ã¶vver <i lang="en">regular expressions</i> sperre',
	'regexblock-reason-ip' => 'Et es jraad verbodde, met hee dÃ¤ IP-AddrÃ¤ÃŸ aam Wiki jet ze Ã¤ndere.
Dat litt dodraan, dat zoh vill DriÃŸ drÃ¶vver jemaat wood.
Dat moÃŸ Ã¤vver nit vun Dir jekumme sin, et kann vun Jedem jekumme sin,
dÃ¤ di Address och ens jehatt hÃ¤t.
Wann De meins, dat dat esu nit sinn sullt, dann donn [[$1|Desch melde]].',
	'regexblock-reason-name' => 'DÃ¤ Metmaacher-Name es jesperrt un kann kei Sigge Ã¤ndere.
FÃ¶r jewÃ¶hnlesch deiht dat bedÃ¼gge, dat dÃ¤ zevill DriÃŸ jemaat hÃ¤t.
Wann de meins, dat es nit en Odenung, [[$1|lohÃŸ et uns weÃŸe]].',
	'regexblock-reason-regex' => 'DÃ¤ Metmaacher-Name es jesperrt un mer kann med em kei Sigge Ã¤ndere.
Dat litt dodraan, dat zoh vill DriÃŸ Ã¶vver ene janz Ã¤Ã¤hnlijje Name jemaat wood.
Wann de meins, dat es nit en Odenung, [[$1|lohÃŸ et uns weÃŸe]], odder nemm janz ene andere Metmaacher-Name. Kanns jo flÃ¶ck ene neue aanmelde.',
	'regexblock-form-username' => 'De <code lang="en">IP</code>-AddreÃŸ odder enem Metmacher singe Name:',
	'regexblock-form-reason' => 'Aanlass:',
	'regexblock-form-expiry' => 'Endt aam:',
	'regexblock-form-match' => 'Akkeraate Treffer',
	'regexblock-form-account-block' => 'Donn et neu Aanmelde verbeede',
	'regexblock-form-submit' => 'Donn dÃ¤ Metmaacher Sperre',
	'regexblock-form-submit-empty' => 'Jiff enem Metmacher singe Name odder en <code lang="en">IP</code>-AddreÃŸ fÃ¶r zem Sperre aan.',
	'regexblock-form-submit-regex' => 'En onjÃ¶ltijje <i lang="en">regular expression</i>.',
	'regexblock-form-submit-expiry' => 'BeÃŸ esu joot, un donn en Zick fÃ¶r et Engk fun de Shperr aanjevve.',
	'regexblock-link' => 'SchpÃ¤rre Ã¶vver <i lang="en">regular expression</i>e ennreschhte.',
	'regexblock-match-stats-record' => 'DÃ¤ UÃŸdrock â€ž$1â€œ hÃ¤t Ã¶m/aam $4 fÃ¶r en Sperr en â€ž$3â€œ fÃ¶r {{GENDER:$2|dÃ¤|et|dÃ¤ Metmaacher|dat|de}} â€ž$2â€œ jesorrsch, beim Enlogge vun dÃ¤ IP-AddreeÃŸ $5',
	'regexblock-nodata-found' => 'Kein Date jefonge',
	'regexblock-stats-title' => 'Shtatistike fÃ¶r de Shperre Ã¶vver <i lang="en">regular expressions</i>',
	'regexblock-unblock-success' => 'Nimmieh jeshperrt',
	'regexblock-unblock-log' => "DÃ¤ Metmacher odder de <code lang=\"en\">IP</code>-AddreÃŸ '''â€ž\$1â€œ''' es widder frei jejovve.",
	'regexblock-unblock-error' => 'FÃ¤hler beim Sperr-OphÃ¤vve. Ene Metmaacher â€ž<nowiki>$1</nowiki>â€œ jit et nit.',
	'regexblock-regex-filter' => ' odder en <i lang="en">regular expression</i>:',
	'regexblock-view-blocked' => 'SÃ¶k bloÃŸ de Sperre uÃŸ vun dÃ¤m Metmaacher:',
	'regexblock-view-all' => 'All',
	'regexblock-view-go' => 'LohÃŸ Jonn!',
	'regexblock-view-match' => '(akkeraat jetroffe)',
	'regexblock-view-regex' => '(<i lang="en">regular expression</i> jetroffe)',
	'regexblock-view-account' => '(Neu Aanmelde verbodde)',
	'regexblock-view-reason' => 'Jrond: $1',
	'regexblock-view-reason-default' => 'â€” keine Jrund aanjejovve â€”',
	'regexblock-view-block-infinite' => 'fÃ¶r iewisch jesperrt',
	'regexblock-view-block-by' => 'Jesperrt vum:',
	'regexblock-view-block-unblock' => 'Sperr ophÃ¤vve',
	'regexblock-view-stats' => 'Shtatistike',
	'regexblock-view-empty' => 'De LeÃŸ me de jesperrte Metmaacher ier Name un Adresse eÃŸ leddisch.',
	'regexblock-view-time' => 'aam $2 Ã¶m $3 Uhr',
	'right-regexblock' => 'Donn dÃ¤nne Metmaacher en alle Wikis em eije Shtall voll Wikis et Ã„andere verbeede',
);

/** Luxembourgish (LÃ«tzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'regexblock' => 'BegrÃ«ffer fir e Benotzer oder eng IP-Adress ze spÃ¤ren',
	'regexblock-already-blocked' => '$1 ass scho gespaart.',
	'regexblock-block-log' => "De Benotzer oder d'IP-Adress '''$1''' gouf gespaart.",
	'regexblock-block-success' => "D'SpÃ¤r ass elo ageschalt",
	'regexblock-currently-blocked' => 'Aktuell gespaarten Adressen:',
	'regexblock-desc' => "Erweiderung fir d'SpÃ¤re vu Benotzernimm an IP-Adressen mat regulÃ¤ren AusdrÃ©ck. D'Erweiderung huet esouwuel e SpÃ¤r-Mechansmus wÃ©i och eng [[Special:Regexblock|SpezialsÃ¤it]] fir SpÃ¤ren derbÃ¤izesetzen/ze gerÃ©ieren",
	'regexblock-expire-duration' => '1 Stonn,2 Stonnen, 4 Stonnen,6 Stonnen,1 Dag,3 Deeg,1 Woch,2 Wochen,1 Mount,3 MÃ©int,6 MÃ©int,1 Joer,onbegrenzt',
	'regexblock-page-title' => 'SpÃ¤r vun engem Numm mat engem regulÃ¤rem Ausdrock',
	'regexblockstats' => 'Regex SpÃ¤rstatistiken',
	'regexblock-page-title-1' => 'Adress spÃ¤ren andem regulÃ¤r AusdrÃ©ck (Regex) benotzt ginn',
	'regexblock-reason-ip' => "DÃ«s IP-Adress ass wÃ©inst Vandalismus oder anerem Schiedlechem Verhalen vun Iech oder engem Aneren dee mat Iech dÃ©i selwÃ«scht IP-Adress deelt fir d'Ã„nner vu SÃ¤ite gespaart. Wann Dir mengt dÃ«st fir e Feeler, da [[$1|kontaktÃ©iert eis]] w.e.g.",
	'regexblock-reason-name' => 'DÃ«se Benotzernumm ass wÃ©inst Vandalismus oder aus Ã¤hnlechen Ursaache gespaart an dÃ¤erf keng Ã„nnerunge maachen. 
Wann Dir iwwerzeecht sidd datt et sech Ã«m ee Feeler handelt, [[$1|kontaktÃ©iert eis w.e.g.]]',
	'regexblock-reason-regex' => 'DÃ«se Benotzernumm ass wÃ©int Vandalismus oder anerem schiedleche Verhale vun engem Benotzer mat engem Ã¤hnleche Benotzernumm gespaart fir Ã„nnerungen a SÃ¤iten ze maachen. Wielt w.e.g. en anere Benotzernumm oder [[$1|kontaktÃ©iert eis]] wÃ©inst deem Problem.',
	'regexblock-form-username' => 'IP-Adress oder Benotzer:',
	'regexblock-form-reason' => 'Grond:',
	'regexblock-form-account-block' => 'UleeÃ« vun neie Benotzerkonte spÃ¤ren',
	'regexblock-form-submit' => 'DÃ«se Benotzer spÃ¤ren',
	'regexblock-form-submit-empty' => 'Gitt e Benotzernumm oder eng IP-Adress un fir ze spÃ¤ren.',
	'regexblock-form-submit-expiry' => "Gitt w.e.g. en ZÃ¤itraum fir d'SpÃ¤r un.",
	'regexblock-match-stats-record' => "$1 huet '$2' de(n) '$3' Ã«m '$4' gespaart, ageloggt vun der Adress '$5'",
	'regexblock-nodata-found' => 'Keng Date fonnt',
	'regexblock-stats-title' => 'Regex SpÃ¤rstatistik',
	'regexblock-unblock-success' => 'SpÃ¤r opgehuewen',
	'regexblock-unblock-log' => "D'SpÃ¤r vum Benotzer oder vun der IP-Adress '''$1'''' gouf opgehuewen.",
	'regexblock-unblock-error' => 'Feeler beim Ophiewe vun der SpÃ¤r vum $1.
Warscheinlech gÃ«tt et esou e Benotzer net.',
	'regexblock-view-blocked' => "Weis d'SpÃ¤re vum:",
	'regexblock-view-all' => 'Alleguer',
	'regexblock-view-go' => 'Lass',
	'regexblock-view-regex' => '(Regex-Treffer)',
	'regexblock-view-account' => '(Opmaache vu Benotzerkonte gespaart)',
	'regexblock-view-reason' => 'Grond: $1',
	'regexblock-view-reason-default' => 'allgemenge Grond',
	'regexblock-view-block-infinite' => 'permanent SpÃ¤r',
	'regexblock-view-block-by' => 'gespaart vum:',
	'regexblock-view-block-unblock' => 'SpÃ¤r ophiewen',
	'regexblock-view-stats' => 'Statistik',
	'regexblock-view-empty' => "D'LÃ«scht vun de gespaarte Benotzer an IP-Adressen ass eidel.",
	'regexblock-view-time' => 'den $1',
	'right-regexblock' => 'SpÃ¤r Benotzer fir Ã„nnerungen op alle WikiÃ«n vun der Wiki-Farm',
);

/** Latgalian (latgaÄ¼u)
 * @author Dark Eagle
 */
$messages['ltg'] = array(
	'regexblock-view-all' => 'Vysi',
);

/** Moksha (Ð¼Ð¾ÐºÑˆÐµÐ½ÑŒ)
 * @author Jarmanj Turtash
 * @author Khazar II
 */
$messages['mdf'] = array(
	'regexblock-already-blocked' => '"$1" ÑÑ‘Ð»ÐºÑ„Ð¾Ð»ÑŒ Ð½Ð¸',
);

/** Eastern Mari (Ð¾Ð»Ñ‹Ðº Ð¼Ð°Ñ€Ð¸Ð¹)
 * @author Ð¡Ð°Ð¹
 */
$messages['mhr'] = array(
	'regexblock-form-reason' => 'ÐÐ¼Ð°Ð»:',
);

/** Macedonian (Ð¼Ð°ÐºÐµÐ´Ð¾Ð½ÑÐºÐ¸)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'regexblock' => 'Ð‘Ð»Ð¾Ðº Ð¿Ð¾ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·',
	'regexblock-already-blocked' => '$1 Ðµ Ð²ÐµÑœÐµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½.',
	'regexblock-block-log' => "ÐšÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¾Ñ‚Ð¾ Ð¸Ð¼Ðµ Ð¸Ð»Ð¸ IP-Ð°Ð´Ñ€ÐµÑÐ°Ñ‚Ð° '''$1''' Ðµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð°.",
	'regexblock-block-success' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµÑ‚Ð¾ ÑƒÑÐ¿ÐµÐ°',
	'regexblock-currently-blocked' => 'ÐœÐ¾Ð¼ÐµÐ½Ñ‚Ð°Ð»Ð½Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸ Ð°Ð´Ñ€ÐµÑÐ¸:',
	'regexblock-desc' => 'Ð”Ð¾Ð´Ð°Ñ‚Ð¾Ðº Ð·Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¸ Ð¸Ð¼Ð¸ÑšÐ° Ð¸ IP-Ð°Ð´Ñ€ÐµÑÐ¸ ÑÐ¾ Ð¿Ð¾Ð¼Ð¾Ñˆ Ð½Ð° Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸. Ð“Ð¾ ÑÐ¾Ð´Ñ€Ð¶Ð¸ Ð¼ÐµÑ…Ð°Ð½Ð¸Ð·Ð¼Ð¾Ñ‚ Ð·Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð¸ [[Special:Regexblock|ÑÐ¿ÐµÑ†Ð¸Ñ˜Ð°Ð»Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð°]] Ð·Ð° Ð´Ð°Ð²Ð°ÑšÐµ/Ñ€Ð°ÐºÐ¾Ð²Ð¾Ð´ÐµÑšÐµ ÑÐ¾ Ð±Ð»Ð¾ÐºÐ¾Ð²Ð¸',
	'regexblock-expire-duration' => '1 Ñ‡Ð°Ñ,2 Ñ‡Ð°ÑÐ°,4 Ñ‡Ð°ÑÐ°,6 Ñ‡Ð°ÑÐ°,1 Ð´ÐµÐ½,3 Ð´ÐµÐ½Ð°,1 Ð½ÐµÐ´ÐµÐ»Ð°,2 Ð½ÐµÐ´ÐµÐ»Ð¸,1 Ð¼ÐµÑÐµÑ†,3 Ð¼ÐµÑÐµÑ†Ð¸,6 Ð¼ÐµÑÐµÑ†Ð¸,1 Ð³Ð¾Ð´Ð¸Ð½Ð°,Ð±ÐµÐ· Ñ€Ð¾Ðº',
	'regexblock-page-title' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° Ð¸Ð¼Ðµ Ð¿Ð¾ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·',
	'regexblockstats' => 'Ð¡Ñ‚Ð°Ñ‚Ð¸ÑÑ‚Ð¸ÐºÐ° Ð·Ð° Ð±Ð»Ð¾Ðº Ð¿Ð¾ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·',
	'regexblock-help' => "ÐšÐ¾Ñ€Ð¸ÑÑ‚ÐµÑ‚Ðµ Ð³Ð¾ Ð¾Ð±Ñ€Ð°Ð·ÐµÑ†Ð¾Ñ‚ Ð¿Ð¾Ð´Ð¾Ð»Ñƒ Ð·Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° Ð¿Ñ€Ð¸ÑÑ‚Ð°Ð¿ ÐºÐ¾Ð½ ÑƒÑ€ÐµÐ´ÑƒÐ²Ð°ÑšÐµ Ð¾Ð´ Ð¸Ð·Ð²ÐµÑÐ½Ð° IP-Ð°Ð´Ñ€ÐµÑÐ° Ð¸Ð»Ð¸ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¾ Ð¸Ð¼Ðµ.
ÐžÐ²Ð° Ñ‚Ñ€ÐµÐ±Ð° Ð´Ð° ÑÐµ ÑƒÐ¿Ð¾Ñ‚Ñ€ÐµÐ±ÑƒÐ²Ð° ÑÐ°Ð¼Ð¾ Ð·Ð° ÑÐ¿Ñ€ÐµÑ‡ÑƒÐ²Ð°ÑšÐµ Ð½Ð° Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·Ð°Ð¼, Ð¸ Ð²Ð¾ ÑÐ¾Ð³Ð»Ð°ÑÐ½Ð¾ÑÑ‚ ÑÐ¾ Ð¿Ñ€Ð°Ð²Ð¸Ð»Ð°Ñ‚Ð°.
''ÐžÐ²Ð°Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð° Ð²Ð¸ Ð¾Ð²Ð¾Ð·Ð¼Ð¾Ð¶ÑƒÐ²Ð° Ð´Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ‚Ðµ Ð´ÑƒÑ€Ð¸ Ð¸ Ð½ÐµÐ¿Ð¾ÑÑ‚Ð¾ÐµÑ‡ÐºÐ¸ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ†Ð¸, Ð¸ Ð´Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ‚Ðµ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ†Ð¸ ÑÐ¾ Ð¸Ð¼Ð¸ÑšÐ° ÑÐ»Ð¸Ñ‡Ð½Ð¸ Ð½Ð° Ð·Ð°Ð´Ð°Ð´ÐµÐ½Ð¸Ñ‚Ðµ, Ñ‚.Ðµ. â€žTestâ€œ ÑœÐµ Ð±Ð¸Ð´Ðµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½ Ð·Ð°ÐµÐ´Ð½Ð¾ ÑÐ¾ â€žTest 2â€œ Ð¸ Ñ‚Ð½.
ÐœÐ¾Ð¶ÐµÑ‚Ðµ Ð¸ Ð´Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ‚Ðµ Ð¿Ð¾Ð»Ð½Ð¸ IP-Ð°Ð´Ñ€ÐµÑÐ¸, ÑˆÑ‚Ð¾ Ð·Ð½Ð°Ñ‡Ð¸ Ð´ÐµÐºÐ° Ð½Ð¸ÐµÐ´ÐµÐ½ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ðº Ð½Ð°Ñ˜Ð°Ð²ÐµÐ½ ÑÐ¾ Ñ‚Ð°Ð° IP-Ð°Ð´Ñ€ÐµÑÐ° Ð½ÐµÐ¼Ð° Ð´Ð° Ð¼Ð¾Ð¶Ðµ Ð´Ð° ÑƒÑ€ÐµÐ´ÑƒÐ²Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð¸.
ÐÐ°Ð¿Ð¾Ð¼ÐµÐ½Ð°: Ð´ÐµÐ»ÑƒÐ¼Ð½Ð¸Ñ‚Ðµ IP-Ð°Ð´Ñ€ÐµÑÐ¸ ÑœÐµ ÑÐµ ÑÐ¼ÐµÑ‚Ð°Ð°Ñ‚ Ð·Ð° ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¸ Ð¸Ð¼Ð¸ÑšÐ° Ð¿Ñ€Ð¸ Ð¾Ð´Ð»ÑƒÑ‡ÑƒÐ²Ð°ÑšÐµÑ‚Ð¾ Ð´Ð°Ð»Ð¸ Ð´Ð° ÑÐµ Ð´Ð°Ð´Ðµ Ð±Ð»Ð¾Ðº.
ÐÐºÐ¾ Ð½ÐµÐ¼Ð° Ð½Ð°Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¾ Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð°, Ñ‚Ð¾Ð³Ð°Ñˆ ÑœÐµ ÑÐµ ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð¸ Ð¾ÑÐ½Ð¾Ð²Ð½Ð¾ Ð·Ð°Ð´Ð°Ð´ÐµÐ½Ð°Ñ‚Ð° Ð¾Ð¿ÑˆÑ‚Ð° Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð°.''",
	'regexblock-page-title-1' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° Ð°Ð´Ñ€ÐµÑÐ¸ ÑÐ¾ Ð¿Ð¾Ð¼Ð¾Ñˆ Ð½Ð° Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸',
	'regexblock-reason-ip' => 'ÐÐ° Ð¾Ð²Ð°Ð° IP-Ð°Ð´Ñ€ÐµÑÐ° Ñ Ðµ Ð¾Ð½ÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶ÐµÐ½Ð¾ ÑƒÑ€ÐµÐ´ÑƒÐ²Ð°ÑšÐµ Ð¿Ð¾Ñ€Ð°Ð´Ð¸ Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·Ð°Ð¼ Ð¸Ð»Ð¸ Ð´Ñ€ÑƒÐ³Ð¸ Ð¿Ð¾Ñ€ÐµÐ¼ÐµÑ‚ÑƒÐ²Ð°Ñ‡ÐºÐ¸ Ð´ÐµÑ˜ÑÑ‚Ð²Ð° Ð½Ð°Ð¿Ñ€Ð°Ð²ÐµÐ½Ð¸ Ð¾Ð´ Ð²Ð°Ñ Ð¸Ð»Ð¸ Ð¸Ð»Ð¸ Ð½ÐµÐºÐ¾Ñ˜ ÑˆÑ‚Ð¾ Ñ˜Ð° ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð¸ Ð¸ÑÑ‚Ð°Ñ‚Ð° IP-Ð°Ð´Ñ€ÐµÑÐ°.
ÐÐºÐ¾ ÑÐ¼ÐµÑ‚Ð°Ñ‚Ðµ Ð´ÐµÐºÐ° Ð¾Ð²Ð° Ðµ Ð³Ñ€ÐµÑˆÐºÐ°, Ñ‚Ð¾Ð³Ð°Ñˆ [[$1|ÐºÐ¾Ð½Ñ‚Ð°ÐºÑ‚Ð¸Ñ€Ð°Ñ˜Ñ‚Ðµ Ð½Ã¨]]',
	'regexblock-reason-name' => 'ÐÐ° Ð¾Ð²Ð° ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¾ Ð¸Ð¼Ðµ Ðµ Ð¼Ñƒ Ðµ Ð¾Ð½ÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶ÐµÐ½Ð¾ Ð´Ð° ÑƒÑ€ÐµÐ´ÑƒÐ²Ð° Ð¿Ð¾Ñ€Ð°Ð´Ð¸ Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·Ð°Ð¼ Ð¸Ð»Ð¸ Ð´Ñ€ÑƒÐ³Ð¸ Ð¿Ð¾Ñ€ÐµÐ¼ÐµÑ‚ÑƒÐ²Ð°Ñ‡ÐºÐ¸ Ð´ÐµÑ˜ÑÑ‚Ð²Ð°.
ÐÐºÐ¾ ÑÐ¼ÐµÑ‚Ð°Ñ‚Ðµ Ð´ÐµÐºÐ° Ð¾Ð²Ð° Ðµ Ð³Ñ€ÐµÑˆÐºÐ°, [[$1|ÐºÐ¾Ð½Ñ‚Ð°ÐºÑ‚Ð¸Ñ€Ð°Ñ˜Ñ‚Ðµ Ð½Ã¨]]',
	'regexblock-reason-regex' => 'ÐÐ° Ð¾Ð²Ð° ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¾ Ð¸Ð¼Ðµ Ð¼Ñƒ Ðµ Ð¾Ð½ÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶ÐµÐ½Ð¾ Ð´Ð° ÑƒÑ€ÐµÐ´ÑƒÐ²Ð° Ð¿Ð¾Ñ€Ð°Ð´Ð¸ Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·Ð°Ð¼ Ð¸Ð»Ð¸ Ð´Ñ€ÑƒÐ³Ð¸ Ð¿Ð¾Ñ€ÐµÐ¼ÐµÑ‚ÑƒÐ²Ð°Ñ‡ÐºÐ¸ Ð´ÐµÑ˜ÑÑ‚Ð²Ð° Ð¾Ð´ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ðº ÑÐ¾ ÑÐ»Ð¸Ñ‡Ð½Ð¾ Ð¸Ð¼Ðµ.
Ð¡Ð¾Ð·Ð´Ð°Ñ˜Ñ‚Ðµ Ð´Ñ€ÑƒÐ³Ð¾ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¾ Ð¸Ð¼Ðµ Ð¸Ð»Ð¸ [[$1|ÐºÐ¾Ð½Ñ‚Ð°ÐºÑ‚Ð¸Ñ€Ð°Ñ˜Ñ‚Ðµ Ð½Ã¨]] Ð²Ð¾ Ð²Ñ€ÑÐºÐ° ÑÐ¾ Ð¾Ð²Ð¾Ñ˜ Ð¿Ñ€Ð¾Ð±Ð»ÐµÐ¼',
	'regexblock-form-username' => 'IP-Ð°Ð´Ñ€ÐµÑÐ° Ð¸Ð»Ð¸ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¾ Ð¸Ð¼Ðµ:',
	'regexblock-form-reason' => 'ÐŸÑ€Ð¸Ñ‡Ð¸Ð½Ð°:',
	'regexblock-form-expiry' => 'Ð˜ÑÑ‚ÐµÐºÑƒÐ²Ð°:',
	'regexblock-form-match' => 'Ð¢Ð¾ÐºÐ¼Ñƒ Ñ‚Ð°ÐºÐ°',
	'regexblock-form-account-block' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° ÑÐ¾Ð·Ð´Ð°Ð²Ð°ÑšÐµÑ‚Ð¾ Ð½Ð° Ð½Ð¾Ð²Ð¸ ÑÐ¼ÐµÑ‚ÐºÐ¸',
	'regexblock-form-submit' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜ Ð³Ð¾ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸ÐºÐ¾Ð²',
	'regexblock-form-submit-empty' => 'ÐÐ°Ð²ÐµÐ´ÐµÑ‚Ðµ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¾ Ð¸Ð¼Ðµ Ð¸Ð»Ð¸ IP-Ð°Ð´Ñ€ÐµÑÐ° Ð·Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ.',
	'regexblock-form-submit-regex' => 'ÐÐµÐ²Ð°Ð¶ÐµÑ‡ÐºÐ¸ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·.',
	'regexblock-form-submit-expiry' => 'ÐÐ°Ð·Ð½Ð°Ñ‡ÐµÑ‚Ðµ Ñ€Ð¾Ðº Ð½Ð° Ð¸ÑÑ‚ÐµÐºÑƒÐ²Ð°ÑšÐµ.',
	'regexblock-link' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜ ÑÐ¾ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·',
	'regexblock-match-stats-record' => '$1 Ð³Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑˆÐµ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸ÐºÐ¾Ñ‚ â€ž$2â€œ Ð½Ð° â€ž$3â€œ Ð½Ð° â€ž$4â€œ, Ð½Ð°Ñ˜Ð°Ð²ÑƒÐ²Ð°Ñ˜ÑœÐ¸ ÑÐµ Ð¾Ð´ Ð°Ð´Ñ€ÐµÑÐ°Ñ‚Ð° â€ž$5â€œ',
	'regexblock-nodata-found' => 'ÐÐµÐ¼Ð° Ð¿Ñ€Ð¾Ð½Ð°Ñ˜Ð´ÐµÐ½Ð¾ Ð¿Ð¾Ð´Ð°Ñ‚Ð¾Ñ†Ð¸',
	'regexblock-stats-title' => 'Ð¡Ñ‚Ð°Ñ‚Ð¸ÑÑ‚Ð¸ÐºÐ¸ Ð·Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ ÑÐ¾ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·',
	'regexblock-unblock-success' => 'ÐžÐ´Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµÑ‚Ð¾ ÑƒÑÐ¿ÐµÐ°',
	'regexblock-unblock-log' => "ÐšÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¾Ñ‚Ð¾ Ð¸Ð¼Ðµ Ð¸Ð»Ð¸ IP-Ð°Ð´Ñ€ÐµÑÐ°Ñ‚Ð° '''$1''' Ðµ Ð¾Ð´Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð°.",
	'regexblock-unblock-error' => 'Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð¾Ð´Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° $1.
Ð’ÐµÑ€Ð¾Ñ˜Ð°Ñ‚Ð½Ð¾ Ñ‚Ð°ÐºÐ¾Ð² ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ðº Ð½Ðµ Ð¿Ð¾ÑÑ‚Ð¾Ð¸.',
	'regexblock-regex-filter' => 'Ð¸Ð»Ð¸ Ð²Ñ€ÐµÐ´Ð½Ð¾ÑÑ‚Ð° Ð½Ð° Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ð¸Ð¾Ñ‚ Ð¸Ð·Ñ€Ð°Ð·:',
	'regexblock-view-blocked' => 'ÐŸÑ€ÐµÐ³Ð»ÐµÐ´Ð°Ñ˜ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸ Ð¿Ð¾:',
	'regexblock-view-all' => 'Ð¡Ã¨',
	'regexblock-view-go' => 'ÐžÐ´Ð¸',
	'regexblock-view-match' => '(Ñ‚Ð¾ÐºÐ¼Ñƒ Ñ‚Ð°ÐºÐ°)',
	'regexblock-view-regex' => '(ÑÐ¾Ð²Ð¿Ð°Ñ“Ð°ÑšÐµ ÑÐ¾ Ñ€ÐµÐ³. Ð¸Ð·Ñ€Ð°Ð·)',
	'regexblock-view-account' => '(Ð±Ð»Ð¾Ðº Ð½Ð° ÑÐ¾Ð·Ð´Ð°Ð²Ð°ÑšÐµ ÑÐ¼ÐµÑ‚ÐºÐ¸)',
	'regexblock-view-reason' => 'Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð°: $1',
	'regexblock-view-reason-default' => 'Ð¾Ð¿ÑˆÑ‚Ð° Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð°',
	'regexblock-view-block-infinite' => 'Ð±ÐµÑÐºÐ¾Ð½ÐµÑ‡ÐµÐ½ Ð±Ð»Ð¾Ðº',
	'regexblock-view-block-by' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½ Ð¾Ð´:',
	'regexblock-view-block-unblock' => 'Ð¾Ð´Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜',
	'regexblock-view-stats' => 'ÑÑ‚Ð°Ñ‚Ð¸ÑÑ‚Ð¸ÐºÐ¸',
	'regexblock-view-empty' => 'Ð¡Ð¿Ð¸ÑÐ¾ÐºÐ¾Ñ‚ Ð½Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸ Ð¸Ð¼Ð¸ÑšÐ° Ð¸ Ð°Ð´Ñ€ÐµÑÐ¸ Ðµ Ð¿Ñ€Ð°Ð·ÐµÐ½.',
	'regexblock-view-time' => 'Ð½Ð° $1',
	'right-regexblock' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ†Ð¸ Ð¾Ð´ ÑƒÑ€ÐµÐ´ÑƒÐ²Ð°ÑšÐµ Ð½Ð° ÑÐ¸Ñ‚Ðµ Ð²Ð¸ÐºÐ¸Ñ˜Ð° Ð½Ð° Ð²Ð¸ÐºÐ¸-Ñ„Ð°Ñ€Ð¼Ð°Ñ‚Ð°',
);

/** Malayalam (à´®à´²à´¯à´¾à´³à´‚)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'regexblock-already-blocked' => '$1 à´‡à´¤à´¿à´¨à´•à´‚ à´¤à´¨àµà´¨àµ† à´¤à´Ÿà´¯à´ªàµà´ªàµ†à´Ÿàµà´Ÿà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ.',
	'regexblock-block-log' => "'''$1''' à´Žà´¨àµà´¨ à´‰à´ªà´¯àµ‹à´•àµà´¤àµƒà´¨à´¾à´®à´‚ à´…à´²àµà´²àµ†à´™àµà´•à´¿àµ½ à´.à´ªà´¿. à´µà´¿à´²à´¾à´¸à´‚ à´¤à´Ÿà´¯à´ªàµà´ªàµ†à´Ÿàµà´Ÿà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ.",
	'regexblock-block-success' => 'à´¤à´Ÿà´¯àµ½ à´µà´¿à´œà´¯à´¿à´šàµà´šà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ',
	'regexblock-currently-blocked' => 'à´¨à´¿à´²à´µà´¿àµ½ à´¤à´Ÿà´¯à´ªàµà´ªàµ†à´Ÿàµà´Ÿ à´µà´¿à´²à´¾à´¸à´™àµà´™àµ¾:',
	'regexblock-reason-ip' => 'à´¤à´¾à´™àµà´•à´³àµ‹ à´®à´±àµà´±àµ‹à´°àµ‹ à´¨à´Ÿà´¤àµà´¤à´¿à´¯ à´¨à´¶àµ€à´•à´°à´£ à´ªàµà´°à´µàµ¼à´¤àµà´¤à´¨à´‚ à´®àµ‚à´²à´‚ à´¤à´¾à´™àµà´•àµ¾ à´‡à´ªàµà´ªàµ‹àµ¾ à´‰à´ªà´¯àµ‹à´—à´¿à´•àµà´•àµà´¨àµà´¨ à´.à´ªà´¿. à´µà´¿à´²à´¾à´¸à´‚ à´¤à´¿à´°àµà´¤àµà´¤àµ½ à´¨à´Ÿà´¤àµà´¤àµà´¨àµà´¨à´¤à´¿àµ½ à´¨à´¿à´¨àµà´¨àµ à´¤à´Ÿà´¯à´ªàµà´ªàµ†à´Ÿàµà´Ÿà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ.
à´‡à´¤àµ à´’à´°àµ à´ªà´¿à´´à´µà´¾à´£àµ†à´¨àµà´¨àµ à´¤à´¾à´™àµà´•àµ¾ à´•à´°àµà´¤àµà´¨àµà´¨àµ†à´™àµà´•à´¿àµ½ à´¦à´¯à´µà´¾à´¯à´¿ [[$1|à´žà´™àµà´™à´³àµ† à´¬à´¨àµà´§à´ªàµà´ªàµ†à´Ÿàµà´•]]',
	'regexblock-reason-name' => 'à´¨à´¶àµ€à´•à´°à´£ à´ªàµà´°à´µàµ¼à´¤àµà´¤à´¨à´™àµà´™àµ¾ à´®àµ‚à´²à´‚ à´¤à´¾à´™àµà´•à´³àµà´Ÿàµ† à´‰à´ªà´¯àµ‹à´•àµà´¤àµƒà´¨à´¾à´®à´¤àµà´¤àµ† à´¤à´¿à´°àµà´¤àµà´¤àµ½ à´¨à´Ÿà´¤àµà´¤àµà´¨àµà´¨à´¤à´¿àµ½ à´¨à´¿à´¨àµà´¨àµ à´¤à´Ÿà´žàµà´žà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ. à´‡à´¤àµŠà´°àµ à´ªà´¿à´´à´µà´¾à´£àµ†à´¨àµà´¨àµ à´¤à´¾à´™àµà´•àµ¾ à´•à´°àµà´¤àµà´¨àµà´¨àµ†à´™àµà´•à´¿àµ½ à´¦à´¯à´µà´¾à´¯à´¿ [[$1|à´žà´™àµà´™à´³àµ† à´¬à´¨àµà´§à´ªàµà´ªàµ†à´Ÿàµà´•]]',
	'regexblock-reason-regex' => 'à´ˆ à´‰à´ªà´¯àµ‹à´•àµà´¤àµƒà´¨à´¾à´®à´¤àµà´¤àµ‹à´Ÿàµ à´¸à´¾à´®àµà´¯à´®àµà´³àµà´³ à´‰à´ªà´¯àµ‹à´•àµà´¤à´¾à´µà´¿à´¨àµà´±àµ† à´¨à´¶àµ€à´•à´°à´£ à´ªàµà´°à´µàµ¼à´¤àµà´¤à´¨à´™àµà´™àµ¾ à´®àµ‚à´²à´‚ à´ˆ à´‰à´ªà´¯àµ‹à´•àµà´¤àµƒà´¨à´¾à´®à´¤àµà´¤àµ† à´¤à´¿à´°àµà´¤àµà´¤àµ½ à´¨à´Ÿà´¤àµà´¤àµà´¨àµà´¨à´¤à´¿àµ½ à´¨à´¿à´¨àµà´¨àµ à´¤à´Ÿà´žàµà´žà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ. 
à´’à´¨àµà´¨àµà´•à´¿àµ½ à´ªàµà´¤à´¿à´¯ à´‰à´ªà´¯àµ‹à´•àµà´¤àµƒà´¨à´¾à´®à´‚ à´‰à´£àµà´Ÿà´¾à´•àµà´•àµà´• à´…à´²àµà´²àµ†à´™àµà´•à´¿àµ½ à´ˆ à´ªàµà´°à´¶àµà´¨à´¤àµà´¤àµ†à´•àµà´•àµà´±à´¿à´šàµà´šàµ [[$1|à´žà´™àµà´™à´³àµ† à´…à´±à´¿à´¯à´¿à´•àµà´•àµà´•]]',
	'regexblock-form-username' => 'à´.à´ªà´¿. à´µà´¿à´²à´¾à´¸à´‚ à´…à´²àµà´²àµ†à´™àµà´•à´¿àµ½ à´‰à´ªà´¯àµ‹à´•àµà´¤àµƒà´¨à´¾à´®à´‚:',
	'regexblock-form-reason' => 'à´•à´¾à´°à´£à´‚:',
	'regexblock-form-expiry' => 'à´•à´¾à´²à´¾à´µà´§à´¿:',
	'regexblock-form-match' => 'à´•àµƒà´¤àµà´¯à´®à´¾à´¯à´¿ à´¯àµ‹à´œà´¿à´•àµà´•àµà´¨àµà´¨à´µ',
	'regexblock-form-account-block' => 'à´ªàµà´¤à´¿à´¯ à´…à´‚à´—à´¤àµà´µà´™àµà´™àµ¾ à´¸àµƒà´·àµà´Ÿà´¿à´•àµà´•àµà´¨àµà´¨à´¤àµ à´¤à´Ÿà´¯àµà´•',
	'regexblock-form-submit' => ' à´ˆ  à´‰à´ªà´¯àµ‹à´•àµà´¤à´¾à´µà´¿à´¨àµ† à´¤à´Ÿà´¯àµà´•',
	'regexblock-form-submit-empty' => 'à´¤à´Ÿà´¯àµà´µà´¾àµ» à´µàµ‡à´£àµà´Ÿà´¿à´¯àµà´³àµà´³ à´‰à´ªà´¯àµ‹à´•àµà´¤àµƒà´¨à´¾à´®à´®àµ‹ à´.à´ªà´¿. à´µà´¿à´²à´¾à´¸à´®àµ‹ à´šàµ‡àµ¼à´•àµà´•àµà´•.',
	'regexblock-form-submit-expiry' => 'à´¦à´¯à´µà´¾à´¯à´¿ à´¤à´Ÿà´¯à´²à´¿à´¨àµ à´’à´°àµ à´•à´¾à´²à´¾à´µà´§à´¿ à´¤à´¿à´°à´žàµà´žàµ†à´Ÿàµà´•àµà´•àµà´•.',
	'regexblock-unblock-success' => 'à´¸àµà´µà´¤à´¨àµà´¤àµà´°à´®à´¾à´•àµà´•àµ½ à´µà´¿à´œà´¯à´¿à´šàµà´šà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ',
	'regexblock-unblock-log' => "'''$1''' à´Žà´¨àµà´¨ à´‰à´ªà´¯àµ‹à´•àµà´¤àµƒà´¨à´¾à´®à´‚ à´…à´²àµà´²àµ†à´™àµà´•à´¿àµ½ à´.à´ªà´¿.à´µà´¿à´²à´¾à´¸à´‚ à´¸àµà´µà´¤à´¨àµà´¤àµà´°à´®à´¾à´•àµà´•à´¿à´¯à´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ.",
	'regexblock-unblock-error' => '$1à´¨àµ† à´¸àµà´µà´¤à´¨àµà´¤àµà´°à´®à´¾à´•àµà´•àµà´¨àµà´¨à´¤à´¿àµ½ à´ªà´¿à´´à´µàµ. à´…à´™àµà´™à´¨àµ†à´¯àµŠà´°àµ à´‰à´ªà´¯àµ‹à´•àµà´¤à´¾à´µàµ à´¨à´¿à´²à´µà´¿à´²à´¿à´²àµà´²à´¾à´¯à´¿à´°à´¿à´•àµà´•àµà´‚ à´Žà´¨àµà´¨à´¤à´¾à´µàµà´‚ à´•à´¾à´°à´£à´‚.',
	'regexblock-view-all' => 'à´Žà´²àµà´²à´¾à´‚',
	'regexblock-view-go' => 'à´ªàµ‹à´•àµ‚',
	'regexblock-view-match' => '(à´•àµƒà´¤àµà´¯à´®à´¾à´¯à´¿ à´¯àµ‹à´œà´¿à´•àµà´•àµà´¨àµà´¨à´µ)',
	'regexblock-view-account' => '(à´…à´‚à´—à´¤àµà´µà´‚ à´¸àµƒà´·àµà´Ÿà´¿à´•àµà´•àµà´¨àµà´¨à´¤àµ à´¤à´Ÿà´¯àµ½)',
	'regexblock-view-reason' => 'à´•à´¾à´°à´£à´‚: $1',
	'regexblock-view-reason-default' => 'à´¸à´¾à´®à´¾à´¨àµà´¯à´®à´¾à´¯ à´•à´¾à´°à´£à´‚',
	'regexblock-view-block-infinite' => 'à´¸àµà´¥à´¿à´°à´®à´¾à´¯ à´¤à´Ÿà´¯àµ½',
	'regexblock-view-block-by' => 'à´¤à´Ÿà´žàµà´žà´¤àµ:',
	'regexblock-view-block-unblock' => 'à´¸àµà´µà´¤à´¨àµà´¤àµà´°à´®à´¾à´•àµà´•àµà´•',
	'regexblock-view-time' => '$1 à´¨àµâ€Œ',
);

/** Mongolian (Ð¼Ð¾Ð½Ð³Ð¾Ð»)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'regexblock-form-reason' => 'Ð¨Ð°Ð»Ñ‚Ð³Ð°Ð°Ð½:',
	'regexblock-view-all' => 'Ð‘Ò¯Ð³Ð´Ð¸Ð¹Ð³',
	'regexblock-view-go' => 'Ð¯Ð²Ð°Ñ…',
);

/** Marathi (à¤®à¤°à¤¾à¤ à¥€)
 * @author Htt
 * @author Kaustubh
 */
$messages['mr'] = array(
	'regexblock' => 'à¤°à¥‡à¤œà¤à¤•à¥à¤¸à¤¬à¥à¤²à¥‰à¤•',
	'regexblock-already-blocked' => '$1 à¤²à¤¾ à¤…à¤—à¥‹à¤¦à¤°à¤š à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¥‡ à¤†à¤¹à¥‡.',
	'regexblock-block-log' => "'''$1''' à¤¯à¤¾ à¤¸à¤¦à¤¸à¥à¤¯ à¤¨à¤¾à¤µ à¤…à¤¥à¤µ à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¥à¤¯à¤¾à¤²à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¥‡ à¤†à¤¹à¥‡.",
	'regexblock-block-success' => 'à¤¬à¥à¤²à¥‰à¤• à¤¯à¤¶à¤¸à¥à¤µà¥€',
	'regexblock-currently-blocked' => 'à¤¸à¤§à¥à¤¯à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¥‡ à¤ªà¤¤à¥à¤¤à¥‡:',
	'regexblock-desc' => 'à¤¨à¥‡à¤¹à¤®à¥€à¤šà¥€ à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨à¥à¤¸ à¤µà¤¾à¤ªà¤°à¥‚à¤¨ à¤¸à¤¦à¤¸à¥à¤¯ à¤¨à¤¾à¤µà¥‡ à¤µ à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¥‡ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€à¤šà¥‡ à¤à¤•à¥à¤¸à¥à¤Ÿà¥‡à¤‚à¤¶à¤¨. à¤¯à¤¾à¤®à¤§à¥à¤¯à¥‡ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤£à¥‡ à¤¤à¤¸à¥‡à¤š à¤¬à¥à¤²à¥‰à¤•à¤šà¥‡ à¤µà¥à¤¯à¤µà¤¸à¥à¤¥à¤¾à¤ªà¤¨ à¤•à¤°à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€à¤šà¥‡ [[Special:Regexblock|à¤µà¤¿à¤¶à¥‡à¤· à¤ªà¤¾à¤¨]], à¤¦à¥‹à¤˜à¤¾à¤‚à¤šà¤¾ à¤¸à¤®à¤¾à¤µà¥‡à¤¶ à¤†à¤¹à¥‡',
	'regexblock-page-title' => 'à¤¨à¥‡à¤¹à¤®à¥€à¤šà¥‡ à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨ à¤¨à¤¾à¤µ à¤¬à¥à¤²à¥‰à¤•',
	'regexblockstats' => 'à¤°à¥‡à¤œà¤à¤•à¥à¤¸ à¤¬à¥à¤²à¥‰à¤• à¤¸à¤¾à¤‚à¤–à¥à¤¯à¤¿à¤•à¥€',
	'regexblock-help' => "à¤–à¤¾à¤²à¥€à¤² à¤…à¤°à¥à¤œ à¤µà¤¿à¤¶à¤¿à¤·à¥à¤Ÿ à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¤¾ à¤•à¤¿à¤‚à¤µà¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤µ à¤¯à¤¾à¤‚à¤¨à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€ à¤µà¤¾à¤ªà¤°à¤¤à¤¾ à¤¯à¥‡à¤ˆà¤².
à¤¹à¥‡ à¤«à¤•à¥à¤¤ à¤‰à¤¤à¥à¤ªà¤¾à¤¤ à¤°à¥‹à¤–à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€à¤š à¤µà¤¾à¤ªà¤°à¤¾à¤¯à¤šà¥‡ à¤†à¤¹à¥‡, à¤¤à¤¸à¥‡à¤š à¤¨à¥€à¤¤à¥€à¤²à¤¾ à¤§à¤°à¥‚à¤¨ à¤…à¤¸à¤²à¥à¤¯à¤¾à¤šà¥€ à¤–à¤¾à¤¤à¥à¤°à¥€ à¤•à¤°à¤¾.
''à¤¹à¥‡ à¤ªà¤¾à¤¨ à¤µà¤¾à¤ªà¤°à¥à¤¨ à¤¤à¥à¤®à¥à¤¹à¤¾à¤²à¤¾ à¤…à¤¸à¥à¤¤à¤¿à¤¤à¥à¤µà¤¾à¤¤ à¤¨à¤¸à¤²à¥‡à¤²à¥‡ à¤¸à¤¦à¤¸à¥à¤¯ à¤¸à¥à¤¦à¥à¤§à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤¤à¤¾ à¤¯à¥‡à¤¤à¥€à¤², à¤¤à¤¸à¥‡à¤š à¤¦à¤¿à¤²à¥‡à¤²à¥à¤¯à¤¾ à¤¨à¤¾à¤µà¤¾à¤¶à¥€ à¤¸à¤¾à¤§à¤°à¥à¤®à¥à¤¯ à¤°à¤¾à¤–à¤£à¤¾à¤°à¥€ à¤¸à¤¦à¤¸à¥à¤¯ à¤¨à¤¾à¤µà¥‡ à¤¸à¥à¤¦à¥à¤§à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥€ à¤œà¤¾à¤¤à¥€à¤². à¤‰à¤¦à¤¾. Â« Test 2 Â» à¤¸à¥‹à¤¬à¤¤ Â« Test Â» à¤¸à¥à¤¦à¥à¤§à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤¹à¥‹à¤ˆà¤².
à¤¤à¥à¤®à¥à¤¹à¥€ à¤¸à¤‚à¤ªà¥‚à¤°à¥à¤£ à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¤¾ à¤¸à¥à¤¦à¥à¤§à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¥‚ à¤¶à¤•à¤¤à¤¾, à¤¯à¤¾à¤®à¥à¤³à¥‡ à¤¤à¥à¤¯à¤¾ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¥à¤¯à¤¾à¤µà¤°à¥‚à¤¨ à¤ªà¥à¤°à¤µà¥‡à¤¶ à¤•à¤°à¤£à¤¾à¤°à¥â€à¤¯à¤¾ à¤•à¥à¤£à¤¾à¤²à¤¾à¤¹à¥€ à¤¸à¤‚à¤ªà¤¾à¤¦à¤¨à¥‡ à¤•à¤°à¤¤à¤¾ à¤¯à¥‡à¤£à¤¾à¤° à¤¨à¤¾à¤¹à¥€à¤¤.
à¤¸à¥‚à¤šà¤¨à¤¾: à¤¬à¥à¤²à¥‰à¤• à¤ à¤°à¤µà¤¿à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€ à¤…à¤°à¥à¤§à¥‡ à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¥‡ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤µà¤¾à¤¨à¥‡ à¤µà¤¾à¤ªà¤°à¤²à¥‡ à¤œà¤¾à¤¤à¥€à¤².
à¤œà¤° à¤•à¤¾à¤°à¤£ à¤¦à¤¿à¤²à¥‡ à¤¨à¤¸à¥‡à¤² à¤¤à¤° à¤à¤• à¤…à¤µà¤¿à¤šà¤° à¤¸à¤¾à¤§à¤¾à¤°à¤£ à¤•à¤¾à¤°à¤£ à¤²à¤¿à¤¹à¤¿à¤²à¥‡ à¤œà¤¾à¤ˆà¤².''",
	'regexblock-page-title-1' => 'à¤¨à¥‡à¤¹à¤®à¥€à¤šà¥à¤¯à¤¾ à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨à¥à¤¸à¤šà¤¾ à¤µà¤¾à¤ªà¤° à¤•à¤°à¥à¤¨ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤¾',
	'regexblock-reason-ip' => 'à¤¹à¥à¤¯à¤¾ à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¥à¤¯à¤¾à¤²à¤¾ à¤¸à¤‚à¤ªà¤¾à¤¦à¤¨à¤¾à¤‚à¤ªà¤¾à¤¸à¥‚à¤¨ à¤°à¥‹à¤–à¤£à¥à¤¯à¤¾à¤¤ à¤†à¤²à¥‡à¤²à¥‡ à¤†à¤¹à¥‡ à¤•à¤¾à¤°à¤£ à¤¤à¥à¤®à¥à¤¹à¥€ à¤…à¤¥à¤µà¤¾ à¤‡à¤¤à¤° à¤•à¥‹à¤£à¥€à¤¤à¤°à¥€ à¤¯à¤¾ à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¥à¤¯à¤¾à¤µà¤°à¥‚à¤¨ à¤•à¥‡à¤²à¥‡à¤²à¤¾ à¤‰à¤¤à¥à¤ªà¤¾à¤¤ à¤†à¤¹à¥‡à¤¤.
à¤œà¤° à¤¤à¥à¤®à¤šà¥à¤¯à¤¾ à¤®à¤¤à¥‡ à¤¹à¥‡ à¤šà¥à¤•à¥‚à¤¨ à¤à¤¾à¤²à¥‡ à¤†à¤¹à¥‡, à¤¤à¤° [[$1|à¤†à¤®à¤šà¥à¤¯à¤¾à¤¶à¥€ à¤¸à¤‚à¤ªà¤°à¥à¤• à¤¸à¤¾à¤§à¤¾]]',
	'regexblock-reason-name' => 'à¤¹à¥à¤¯à¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤µà¤¾à¤²à¤¾ à¤‰à¤¤à¥à¤ªà¤¾à¤¤ à¤…à¤¥à¤µà¤¾ à¤‡à¤¤à¤° à¤•à¤¾à¤°à¤£à¤¾à¤‚à¤®à¥à¤³à¥‡ à¤¸à¤‚à¤ªà¤¾à¤¦à¤¨à¤¾à¤‚à¤ªà¤¾à¤¸à¥‚à¤¨ à¤°à¥‹à¤–à¤£à¥à¤¯à¤¾à¤¤ à¤†à¤²à¥‡à¤²à¥‡ à¤†à¤¹à¥‡.
à¤¤à¥à¤®à¤šà¥à¤¯à¤¾ à¤®à¤¤à¥‡ à¤¹à¥‡ à¤šà¥à¤•à¥‚à¤¨ à¤à¤¾à¤²à¥‡ à¤†à¤¹à¥‡, à¤¤à¤° $1 à¤•à¤°à¤¾',
	'regexblock-reason-regex' => 'à¤¹à¥à¤¯à¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤µà¤¾à¤¶à¥€ à¤¸à¤¾à¤®à¥à¤¯ à¤…à¤¸à¤£à¤¾à¤°à¥â€à¤¯à¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤µà¤¾à¤µà¤°à¥‚à¤¨ à¤à¤¾à¤²à¥‡à¤²à¤¾ à¤‰à¤¤à¥à¤ªà¤¾à¤¤ à¤…à¤¥à¤µà¤¾ à¤‡à¤¤à¤° à¤•à¤¾à¤°à¤£à¤¾à¤‚à¤®à¥à¤³à¥‡ à¤¯à¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤µà¤¾à¤²à¤¾ à¤¸à¤‚à¤ªà¤¾à¤¦à¤¨à¤¾à¤‚à¤ªà¤¾à¤¸à¥‚à¤¨ à¤°à¥‹à¤–à¤£à¥à¤¯à¤¾à¤¤ à¤†à¤²à¥‡à¤²à¥‡ à¤†à¤¹à¥‡.
à¤•à¥ƒà¤ªà¤¯à¤¾ à¤¦à¥à¤¸à¤°à¥‡ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤µ à¤¤à¤¯à¤¾à¤° à¤•à¤°à¤¾ à¤•à¤¿à¤‚à¤µà¤¾ à¤¯à¤¾ à¤¸à¤‚à¤¦à¥‡à¤¶à¤¾à¤¬à¤¦à¥à¤¦à¤² à¤µà¤¿à¤•à¤¿à¤¯à¤¾à¤¶à¥€ à¤¸à¤‚à¤ªà¤°à¥à¤• ($1) à¤•à¤°à¤¾',
	'regexblock-form-username' => 'à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¤¾ à¤•à¤¿à¤‚à¤µà¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤µ:',
	'regexblock-form-reason' => 'à¤•à¤¾à¤°à¤£:',
	'regexblock-form-expiry' => 'à¤¸à¤®à¤¾à¤ªà¥à¤¤à¥€:',
	'regexblock-form-match' => 'à¤¤à¤‚à¤¤à¥‹à¤¤à¤‚à¤¤ à¤œà¥à¤³à¤£à¥€',
	'regexblock-form-account-block' => 'à¤¨à¤µà¥€à¤¨ à¤–à¤¾à¤¤à¥‡ à¤¤à¤¯à¤¾à¤° à¤•à¤°à¤£à¥‡ à¤…à¤µà¤°à¥à¤¦à¥à¤§ à¤•à¤°à¤¾',
	'regexblock-form-submit' => 'à¤¯à¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¾à¤²à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤¾',
	'regexblock-form-submit-empty' => 'à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€ à¤à¤• à¤¸à¤¦à¤¸à¥à¤¯ à¤¨à¤¾à¤µ à¤•à¤¿à¤‚à¤µà¤¾ à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¤¾ à¤¦à¥à¤¯à¤¾.',
	'regexblock-form-submit-regex' => 'à¤šà¥à¤•à¥€à¤šà¥‡ à¤°à¥‡à¤—à¥à¤¯à¥à¤²à¤° à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨.',
	'regexblock-form-submit-expiry' => 'à¤•à¥ƒà¤ªà¤¯à¤¾ à¤¸à¤®à¤¾à¤ªà¥à¤¤à¥€à¤šà¤¾ à¤•à¤¾à¤²à¤¾à¤µà¤§à¥€ à¤¦à¥à¤¯à¤¾.',
	'regexblock-stats-title' => 'à¤°à¥‡à¤œà¤à¤•à¥à¤¸ à¤¬à¥à¤²à¥‰à¤• à¤¸à¤¾à¤‚à¤–à¥à¤¯à¤¿à¤•à¥€',
	'regexblock-unblock-success' => 'à¤…à¤¨à¤¬à¥à¤²à¥‰à¤• à¤¯à¤¶à¤¸à¥à¤µà¥€',
	'regexblock-unblock-log' => "à¤¸à¤¦à¤¸à¥à¤¯ à¤¨à¤¾à¤µ à¤•à¤¿à¤‚à¤µà¤¾ à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¤¾ '''$1''' à¤…à¤¨à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¤¾ à¤†à¤¹à¥‡.",
	'regexblock-unblock-error' => '$1 à¤²à¤¾ à¤…à¤¨à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤£à¥à¤¯à¤¾à¤¤ à¤¤à¥à¤°à¥à¤Ÿà¥€.
à¤•à¤¦à¤¾à¤šà¤¿à¤¤ à¤…à¤¸à¤¾ à¤¸à¤¦à¤¸à¥à¤¯ à¤…à¤¸à¥à¤¤à¤¿à¤¤à¥à¤µà¤¾à¤¤ à¤¨à¤¾à¤¹à¥€.',
	'regexblock-view-blocked' => 'à¤œà¥à¤¯à¤¾à¤¨à¥‡ à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡ à¤¤à¥à¤¯à¤¾à¤ªà¥à¤°à¤®à¤¾à¤£à¥‡ à¤¯à¤¾à¤¦à¥€ à¤ªà¤¹à¤¾:',
	'regexblock-view-all' => 'à¤¸à¤°à¥à¤µ',
	'regexblock-view-go' => 'à¤šà¤²à¤¾',
	'regexblock-view-match' => '(à¤¤à¤‚à¤¤à¥‹à¤¤à¤‚à¤¤ à¤œà¥à¤³à¤£à¥€)',
	'regexblock-view-regex' => '(à¤°à¥‡à¤œà¤à¤•à¥à¤¸ à¤œà¥à¤³à¤£à¥€)',
	'regexblock-view-account' => '(à¤–à¤¾à¤¤à¥‡ à¤¤à¤¯à¤¾à¤° à¤•à¤°à¤£à¥‡ à¤…à¤µà¤°à¥à¤¦à¥à¤§ à¤•à¥‡à¤²à¥‡)',
	'regexblock-view-reason' => 'à¤•à¤¾à¤°à¤£: $1',
	'regexblock-view-reason-default' => 'à¤¸à¤°à¥à¤µà¤¸à¤¾à¤§à¤¾à¤°à¤£ à¤•à¤¾à¤°à¤£',
	'regexblock-view-block-infinite' => 'à¤•à¤¾à¤¯à¤®à¤¸à¥à¤µà¤°à¥‚à¤ªà¥€ à¤¬à¥à¤²à¥‰à¤•',
	'regexblock-view-block-by' => 'à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¥à¤¤à¤¾:',
	'regexblock-view-block-unblock' => 'à¤…à¤¨à¤¬à¥à¤²à¥‰à¤•',
	'regexblock-view-stats' => 'à¤¸à¤¾à¤‚à¤–à¥à¤¯à¤¿à¤•à¥€',
	'regexblock-view-empty' => 'à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¥à¤¯à¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¨à¤¾à¤µ à¤¤à¤¸à¥‡à¤š à¤†à¤¯à¤ªà¥€ à¤…à¤‚à¤•à¤ªà¤¤à¥à¤¤à¥à¤¯à¤¾à¤‚à¤šà¥€ à¤¯à¤¾à¤¦à¥€ à¤°à¤¿à¤•à¤¾à¤®à¥€ à¤†à¤¹à¥‡.',
	'regexblock-view-time' => '$1 à¤µà¤°',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aurora
 */
$messages['ms'] = array(
	'regexblock-form-reason' => 'Sebab:',
	'regexblock-form-expiry' => 'Tamat:',
	'regexblock-view-all' => 'Semua',
	'regexblock-view-go' => 'Pergi',
);

/** Maltese (Malti)
 * @author Chrisportelli
 * @author Roderick Mallia
 */
$messages['mt'] = array(
	'regexblock-already-blocked' => '"$1" diÄ¡Ã  bblokkjat',
	'regexblock-expire-duration' => 'siegÄ§a,sagÄ§tejn,4 sigÄ§at,6 sigÄ§at,Ä¡urnata,3 Ä¡ranet,Ä¡imgÄ§a,Ä¡imgÄ§atejn,xahar,3 xhur,6 xhur,sena,infinta',
	'regexblock-view-go' => 'Mur',
);

/** Erzya (ÑÑ€Ð·ÑÐ½ÑŒ)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'regexblock-already-blocked' => '"$1" ÑƒÑˆ ÑÐ°Ð¹Ð¼Ð°Ñ ÑÐ°ÐµÐ·ÑŒ.',
	'regexblock-form-reason' => 'Ð¢ÑƒÐ²Ñ‚Ð°Ð»Ð¾ÑÑŒ:',
	'regexblock-form-expiry' => 'Ð¢Ð°ÑˆÑ‚Ð¾Ð¼Ð¾Ð¼Ð° ÑˆÐºÐ°Ð·Ð¾:',
	'regexblock-view-all' => 'Ð’ÐµÑÐµ',
	'regexblock-view-go' => 'ÐÐ´Ñ',
);

/** Mazanderani (Ù…Ø§Ø²ÙØ±ÙˆÙ†ÛŒ)
 * @author Ù…Ø­Ú©
 */
$messages['mzn'] = array(
	'regexblock-expire-duration' => 'Û± Ø³Ø§Ø¹Øª,Û² Ø³Ø§Ø¹Øª,Û´ Ø³Ø§Ø¹Øª,Û¶ Ø³Ø§Ø¹Øª,Û± Ø±ÙˆØ²,Û³ Ø±ÙˆØ²,Û± Ù‡ÙØªÙ‡,Û² Ù‡ÙØªÙ‡,Û± Ù…Ø§Ù‡,Û³ Ù…Ø§Ù‡,Û¶ Ù…Ø§Ù‡,Û± Ø³Ø§Ù„,Ø¨ÛŒâ€ŒÙ¾Ø§ÛŒÙˆÙ†',
);

/** Nahuatl (NÄhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'regexblock-form-username' => 'IP nozo tlatequitiltilÄ«ltÅcÄitl:',
	'regexblock-form-reason' => 'Äªxtlamatiliztli:',
	'regexblock-form-expiry' => 'Motlamia:',
	'regexblock-form-account-block' => 'TicquÄ«xtÄ«z yancuÄ«c cuentah Ä«tlachÄ«hualiz',
	'regexblock-form-submit' => 'TicquÄ«xtÄ«z inÄ«n tlatequitiltilÄ«lli',
	'regexblock-view-all' => 'MochÄ«ntÄ«n',
	'regexblock-view-go' => 'YÄuh',
	'regexblock-view-reason' => 'Ä«xtlamatiliztli: $1',
	'regexblock-view-stats' => 'tlapÅhualli',
	'regexblock-view-time' => 'Ä«pan $1',
);

/** Norwegian BokmÃ¥l (norsk (bokmÃ¥l)â€Ž)
 * @author Audun
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'regexblock' => 'Regex-blokkering',
	'regexblock-already-blocked' => 'Â«$1Â» er allerede blokkert',
	'regexblock-block-log' => "Brukeren '''$1''' har blitt blokkert.",
	'regexblock-block-success' => 'Blokkering lyktes',
	'regexblock-currently-blocked' => 'NÃ¥vÃ¦rende blokkerte adresser:',
	'regexblock-desc' => 'Utvidelse som brukes for Ã¥ blokkere brukernavn og IP-adresser ved hjelp av regulÃ¦re uttrykk. Inneholder bÃ¥de blokkeringsmekanismen og en [[Special:Regexblock|spesialside]] for Ã¥ legge til og endre blokkeringer',
	'regexblock-expire-duration' => 'Ã©n time,2 timer,fire timer,seks timer,Ã©n dag,tre dager,Ã©n uke,to uker,Ã©n mÃ¥ned,tre mÃ¥neder,seks mÃ¥neder, ett Ã¥r, uendelig',
	'regexblock-page-title' => 'Tittelblokkering ved hjelp av regulÃ¦re uttrykk',
	'regexblockstats' => 'Regex-blokkeringsstatistikk',
	'regexblock-help' => "Bruk skjemaet nedenfor for Ã¥ blokkere visse IP-adresser eller brukernavn fra Ã¥ redigere. Dette burde gjÃ¸res kun for Ã¥ forhindre hÃ¦rverk, og i fÃ¸lge med retningslinjene. ''Denne siden vil la deg blokkere ogsÃ¥ ikke-eksisterende brukere, og vil ogsÃ¥ blokkere brukere med navn som ligner det som blir gitt. F.eks. vil Â«TestÂ» blokkeres sammen med Â«Test 2Â» osv. Du kan ogsÃ¥ blokkere fulle IP-adresser, hvilket betyr at ingen som logger pÃ¥ via disse kan redigere sider. Merk delvise IP-adresser vil behandles som brukernavn under blokkering. Om ingen begrunnelse oppgis vil en standardbegrunnelse bli brukt.''",
	'regexblock-page-title-1' => 'Blokker adresse ved hjelp av regulÃ¦re uttrykk',
	'regexblock-reason-ip' => 'Denne IP-adressen er hindret fra Ã¥ redigere pÃ¥ grunn av hÃ¦rverk eller annen forstyrrelse av deg eller noen andre som bruker samme IP-adresse. Om du mener dette er en feil, vennligst [[$1|kontakt oss]]',
	'regexblock-reason-name' => 'Dette brukernavnet er hindret fra Ã¥ redigere pÃ¥ grunn av hÃ¦rverk eller annen forstyrrelse. Om du mener dette er en feil, vennligst [[$1|kontakt oss]]',
	'regexblock-reason-regex' => 'Dette brukernavnet er forhindret fra redigering pÃ¥ grunn av hÃ¦rverk eller annen forstyrrelse av en bruker med lignende navn. Vennligst opprett et annet brukernavn eller [[$1|kontakt oss]] om problemet.',
	'regexblock-form-username' => 'IP-adresse eller brukernavn:',
	'regexblock-form-reason' => 'Ã…rsak:',
	'regexblock-form-expiry' => 'Varighet:',
	'regexblock-form-match' => 'NÃ¸yaktig treff',
	'regexblock-form-account-block' => '{{int:ipbcreateaccount}}',
	'regexblock-form-submit' => 'Blokker denne brukeren',
	'regexblock-form-submit-empty' => 'Angi et brukernavn eller en IP-adresse Ã¥ blokkere.',
	'regexblock-form-submit-regex' => 'Ugyldig regulÃ¦rt uttrykk',
	'regexblock-form-submit-expiry' => 'Angi en utlÃ¸pstid.',
	'regexblock-link' => 'blokker med et regulÃ¦rt uttrykk',
	'regexblock-match-stats-record' => "$1 blokkerte '$2' pÃ¥ '$3' den '$4',fra IP-adressen '$5'",
	'regexblock-nodata-found' => 'Ingen data funnet',
	'regexblock-stats-title' => 'Statistikk for blokkering med regulÃ¦re uttrykk',
	'regexblock-unblock-success' => 'Avblokkering lyktes',
	'regexblock-unblock-log' => "Brukernavnet eller IP-adressen '''$1''' er blitt avblokkert",
	'regexblock-unblock-error' => 'Feil under avblokkering av $1. Det er trolig ingen brukere med det navnet.',
	'regexblock-regex-filter' => ' eller regex-verdi:',
	'regexblock-view-blocked' => 'Vis de blokkerte etter:',
	'regexblock-view-all' => 'Alle',
	'regexblock-view-go' => '{{int:Go}}',
	'regexblock-view-match' => '(nÃ¸yaktig treff)',
	'regexblock-view-regex' => '(regex-treff)',
	'regexblock-view-account' => '(kontooppretting slÃ¥tt av)',
	'regexblock-view-reason' => 'begrunnelse: $1',
	'regexblock-view-reason-default' => 'generisk grunn',
	'regexblock-view-block-infinite' => 'permanent blokkering',
	'regexblock-view-block-by' => 'blokkert av:',
	'regexblock-view-block-unblock' => 'avblokker',
	'regexblock-view-stats' => 'statistikk',
	'regexblock-view-empty' => 'listen over blokkerte navn og adresser er tom.',
	'regexblock-view-time' => '$1',
	'right-regexblock' => 'Blokker brukere fra Ã¥ endre pÃ¥ alle wikier pÃ¥ wiki-farmen',
);

/** Dutch (Nederlands)
 * @author Meno25
 * @author SPQRobin
 * @author Siebrand
 * @author Tvdm
 */
$messages['nl'] = array(
	'regexblock' => 'RegexBlokkeren',
	'regexblock-already-blocked' => '$1 is al geblokkeerd.',
	'regexblock-block-log' => "Gebruikersnaam of IP-adres '''$1''' is geblokkeerd.",
	'regexblock-block-success' => 'Het blokkeren is gelukt',
	'regexblock-currently-blocked' => 'Op dit moment geblokkeerde IP-adressen:',
	'regexblock-desc' => 'Uitbreiding die wordt gebruikt voor het blokkeren van gebruikers en IP-adress met een reguliere expressie. Bevat zowel een blokkademechanisme als een [[Special:Regexblock|speciale pagina]] voor het toevoegen en beheren van blokkades',
	'regexblock-expire-duration' => '1 uur,2 uur,4 uur,6 uur,1 dag,3 dagen,1 week,2 weken,1 maand,3 maanden,6 maanden,1 jaar,onbepaald',
	'regexblock-page-title' => 'Namen blokkeren met reguliere uitdrukkingen',
	'regexblockstats' => 'Statistieken van regex-blokkeren',
	'regexblock-help' => "Gebruik het onderstaande formulier om schrijftoegang voor een IP-adres of gebruiker te ontzeggen. Dit hoort eigenlijk alleen te gebeuren om vandalisme te voorkomen, en dient in overeenstemming te zijn met het beleid. ''U kunt zelfs gebruikers die nog niet bestaan blokkeren. Daarnaast worden ook gebruikers met gelijkende namen geblokkeerd. \"Test\" wordt samen met \"Test 2\", enzovoort geblokkeerd. U kunt ook een IP-adres blokkeren, wat betekent dat niemand van dat IP-adres pagina's kan bewerken. Opmerking: IP-adressen worden behandeld als gebruikersnamen bij het bepalen van blokkades. Als er geen reden is opgegeven, dan wordt er een standaard reden gebruikt.''",
	'regexblock-page-title-1' => 'IP-adres blokkeren met behulp van reguliere uitdrukkingen',
	'regexblock-reason-ip' => 'Gebruikers vanaf dit IP-adres mogen niet bewerken wegens vandalisme of verstoring door u of door iemand met hetzelfde IP-adres.
Als u denk dat dit ten onrechte is, [[$1|neem dan contact met ons op]].',
	'regexblock-reason-name' => 'Deze gebruiker mag niet bewerken wegens vandalisme of verstoring.
Als u denkt dat dit ten onrechte is, [[$1|neem dan contact met ons op]]',
	'regexblock-reason-regex' => 'Deze gebruiker mag niet bewerken wegens vandalisme of verstoring door een gebruiker met een gelijkluidende naam.
Kies een andere gebruikersnaam of [[$1|neem contact met ons op]] over het probleem.',
	'regexblock-form-username' => 'IP-adres of gebruikersnaam:',
	'regexblock-form-reason' => 'Reden:',
	'regexblock-form-expiry' => 'Vervalt:',
	'regexblock-form-match' => 'Voldoet precies',
	'regexblock-form-account-block' => 'Het aanmaken van nieuwe gebruikers blokkeren',
	'regexblock-form-submit' => 'Deze gebruiker blokkeren',
	'regexblock-form-submit-empty' => 'Geef een gebruikersnaam of een IP-adres om te blokkeren.',
	'regexblock-form-submit-regex' => 'Ongeldige reguliere uitdrukking.',
	'regexblock-form-submit-expiry' => 'Geef een vervaltermijn op.',
	'regexblock-link' => 'blokkeren met reguliere expressies',
	'regexblock-match-stats-record' => '$1 blokkeerde "$2" op "$3" om "$4", werkend via IP-adres "$5"',
	'regexblock-nodata-found' => 'Er zijn geen gegevens aangetroffen',
	'regexblock-stats-title' => 'Regex-blokkeringsstatistieken',
	'regexblock-unblock-success' => 'Het deblokkeren is gelukt',
	'regexblock-unblock-log' => "Gebruikersnaam of IP-adres '''$1''' zijn gedeblokkeerd.",
	'regexblock-unblock-error' => 'Een fout bij het deblokkeren van $1. Waarschijnlijk bestaat er geen gebruiker met die naam.',
	'regexblock-regex-filter' => 'of reguliere expressiewaarde:',
	'regexblock-view-blocked' => 'Blokkades weergeven door:',
	'regexblock-view-all' => 'Alles',
	'regexblock-view-go' => 'OK',
	'regexblock-view-match' => '(voldoet precies)',
	'regexblock-view-regex' => '(voldoet aan regex)',
	'regexblock-view-account' => '(blokkade aanmaken gebruikers)',
	'regexblock-view-reason' => 'reden: $1',
	'regexblock-view-reason-default' => 'algemene reden',
	'regexblock-view-block-infinite' => 'permanente blokkade',
	'regexblock-view-block-by' => 'geblokkeerd door:',
	'regexblock-view-block-unblock' => 'blokkade opheffen',
	'regexblock-view-stats' => 'statistieken',
	'regexblock-view-empty' => 'De lijst van geblokkeerde namen en IP-adressen is leeg.',
	'regexblock-view-time' => 'op $1',
	'right-regexblock' => "Rechten om te bewerken intrekken voor gebruikers in alle wiki's van een wikifarm",
);

/** Norwegian Nynorsk (norsk (nynorsk)â€Ž)
 * @author Harald Khan
 * @author Jon Harald SÃ¸by
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'regexblock' => 'Regex-blokkering',
	'regexblock-already-blocked' => '$1 er alt blokkert.',
	'regexblock-block-log' => "Brukarnamnet eller IP-adressa '''$1''' har blitt blokkert.",
	'regexblock-block-success' => 'Blokkering lukkast',
	'regexblock-currently-blocked' => 'Noverande blokkerte adresser:',
	'regexblock-desc' => 'Utviding nytta for blokkering av brukarnamn og IP-adressar ved hjelp av regulÃ¦re uttrykk. Innheld bÃ¥de blokkeringsmekanismen og ei [[Special:Regexblock|spesialsida]] for Ã¥ leggja til og endra blokkeringar.',
	'regexblock-expire-duration' => 'Ã©in time,to timar,fire timar,seks timar,Ã©in dag,tre dagar,Ã©i veka,to veker,Ã©in mÃ¥nad,tre mÃ¥nader,seks mÃ¥nader,eitt Ã¥r,endelaus',
	'regexblock-page-title' => 'Namneblokkering ved hjelp av regulÃ¦rt uttrykk',
	'regexblockstats' => 'Regex-blokkeringsstatistikk',
	'regexblock-help' => "Nytt skjemaet nedanfor for Ã¥ hindra visse IP-adresser eller brukarnamn frÃ¥ Ã¥ endra. 
Dette bÃ¸r berre bli gjort for Ã¥ hindra hÃ¦rverk, og i fÃ¸lgje med retningslinene. 
''Denne sida vil la deg Ã²g blokkera ikkje-eksisterande brukarar, og vil Ã²g blokkera brukarar med namn som liknar det som blir oppgjeve. Til dÃ¸mes vil Â«TestÂ» bli blokkert saman med Â«Test 2Â» osb. 
Du kan Ã²g blokkera fulle IP-adresser, noko som tyder at ingen som loggar pÃ¥ gjennom desse kan endra sider. 
Merk: delvise IP-adresser vil bli handsama som brukarnamn under blokkering. Om ingen Ã¥rsak er oppgjeven vil ein standardÃ¥rsak bli nytta.''",
	'regexblock-page-title-1' => 'Blokker adressa ved hjelp av regulÃ¦re uttrykk',
	'regexblock-reason-ip' => 'Denne IP-adressa er hindra frÃ¥ Ã¥ endra sider grunna hÃ¦rverk eller anna forstyrring av deg eller andre som nyttar den same IP-adressa. [[$1|Kontakt oss]] om du meiner at dette er ein feil.',
	'regexblock-reason-name' => 'Brukarnamnet ditt er hindra frÃ¥ Ã¥ endra sider grunna hÃ¦rverk eller anna forstyrring.
[[$1|Kontakt oss]] om du meiner at dette er ein feil.',
	'regexblock-reason-regex' => 'Dette brukarnamnet er hindra frÃ¥ Ã¥ endra sider grunna hÃ¦rverk eller anna forstyrring av ein brukar med eit liknande namn. 
Opprett eit anna brukarnamn eller [[$1|kontakt oss]] om problemet.',
	'regexblock-form-username' => 'IP-adressa eller brukarnamn:',
	'regexblock-form-reason' => 'Ã…rsak:',
	'regexblock-form-expiry' => 'OpphÃ¸yrstid:',
	'regexblock-form-match' => 'NÃ¸yaktig treff',
	'regexblock-form-account-block' => 'Blokker oppretting av nye kontoar',
	'regexblock-form-submit' => 'Blokker denne brukaren',
	'regexblock-form-submit-empty' => 'Oppgje eit brukarnamn eller ei IP-adressa til Ã¥ blokkera.',
	'regexblock-form-submit-regex' => 'Ugyldig regulÃ¦rt uttrykk.',
	'regexblock-form-submit-expiry' => 'Oppgje ei tid for enden pÃ¥ blokkeringa.',
	'regexblock-link' => 'blokker med regulÃ¦rutrykk',
	'regexblock-match-stats-record' => '$1 blokkerte Â«$2Â» pÃ¥ Â«$3Â» den Â«$4Â», frÃ¥ IP-adressa Â«$5Â»',
	'regexblock-nodata-found' => 'Fann ingen data',
	'regexblock-stats-title' => 'Statistikk for blokkering med regulÃ¦re uttrykk',
	'regexblock-unblock-success' => 'Avblokkering lukkast',
	'regexblock-unblock-log' => "Brukarnamnet eller IP-adressa '''$1''' har blitt avblokkert.",
	'regexblock-unblock-error' => 'Det oppstod ein feil under avblokkeringa av $1. 
Truleg finst det ingen brukar med dette namnet.',
	'regexblock-regex-filter' => ' eller regex-verdi:',
	'regexblock-view-blocked' => 'Syn dei blokkerte etter:',
	'regexblock-view-all' => 'Alle',
	'regexblock-view-go' => 'GÃ¥',
	'regexblock-view-match' => '(nÃ¸yaktig treff)',
	'regexblock-view-regex' => '(regex-treff)',
	'regexblock-view-account' => '(kontooppretting slege av)',
	'regexblock-view-reason' => 'Ã¥rsak: $1',
	'regexblock-view-reason-default' => 'generisk Ã¥rsak',
	'regexblock-view-block-infinite' => 'permanent blokkering',
	'regexblock-view-block-by' => 'blokkert av:',
	'regexblock-view-block-unblock' => 'avblokker',
	'regexblock-view-stats' => 'statistikk',
	'regexblock-view-empty' => 'Lista over blokkerte namn og adresser er tom.',
	'regexblock-view-time' => '$1',
	'right-regexblock' => 'Blokker brukarar frÃ¥ Ã¥ endra pÃ¥ alle wikiane i wikisamlinga',
);

/** Novial (Novial)
 * @author Malafaya
 */
$messages['nov'] = array(
	'regexblock-form-reason' => 'Resone:',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'regexblock-block-log' => "Leina la moÅ¡omiÅ¡i goba IP atrese '''$1''' e thibilwe.",
	'regexblock-form-username' => 'IP Atrese goba leina la moÅ¡omiÅ¡i:',
	'regexblock-form-reason' => 'Lebaka:',
	'regexblock-form-submit-empty' => 'Efa leina la moÅ¡omiÅ¡i goba IP atrese go thiba.',
	'regexblock-view-all' => 'Kamoka',
	'regexblock-view-go' => 'Sepela',
	'regexblock-view-reason' => 'lebaka: $1',
	'regexblock-view-block-by' => 'thibilwe ke:',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'regexblock' => 'Expressions regularas per blocar un utilizaire o una IP',
	'regexblock-already-blocked' => '$1 ja es blocat.',
	'regexblock-block-log' => "Lâ€™Utilizaire o lâ€™adreÃ§a IP '''$1''' es estat blocat.",
	'regexblock-block-success' => 'Lo blocatge a capitat',
	'regexblock-currently-blocked' => 'AdreÃ§as actualament blocadas :',
	'regexblock-desc' => "Extension utilizada per blocar d'utilizaires o d'adreÃ§as IP amb d'expressions regularas. Conten a l'encÃ²p un mecanisme de blocatge e mai [[Special:Regexblock|una pagina]] podent apondre e gerir los blocatges",
	'regexblock-expire-duration' => '1 ora,2 oras,4 oras,6 oras,1 jorn,3 jorns,1 setmana,2 setmanas,1 mes,3 meses,6 meses,1 an,infinit',
	'regexblock-page-title' => 'Blocatge dâ€™un nom per una expression regulara',
	'regexblockstats' => 'Estatisticas suls blocatges per expressions regularas',
	'regexblock-help' => "Utilizatz lo formulari Ã§aijÃ³s per blocar lâ€™accÃ¨s en escritura una adreÃ§a IP o un nom dâ€™utilizaire. AquÃ² deu Ã¨sser fach unicament per evitar tot vandalisme e conformadament a las rÃ¨glas prescrichas sul projÃ¨cte. ''Aquesta pagina vos autoriza quitament a blocar d'utilizaires pas enregistrats e permet tanben de blocar d'utilizaires que presentan de noms similars. Per exemple, Â« TÃ¨st Â» serÃ  blocada al meteis temps que Â« TÃ¨st 2 Â» etc. Tanben podÃ¨tz blocar d'adreÃ§as IP entiÃ¨ras, Ã§Ã² que significa que degun que trabalha pas dempuÃ¨i elas poirÃ  pas editar de paginas. NÃ²ta : d'adreÃ§as IP parcialas serÃ n consideradas coma de noms dâ€™utilizaire al moment del blocatge. Se cap de motiu es pas indicat en comentari, un motiu per defaut serÃ  indicat.''",
	'regexblock-page-title-1' => 'Blocatge dâ€™una adreÃ§a utilizant una expression regulara',
	'regexblock-reason-ip' => 'Aquesta adreÃ§a IP es apartada de tota edicon per causa de vandalisme o autres faches analÃ²gs per vos o qualquâ€™un mai que pertatja vÃ²stra adreÃ§a IP. 
Se sÃ¨tz segur{{GENDER:||a|}} que sâ€™agÃ­s dâ€™una error, [[$1|contactatz-nos]]',
	'regexblock-reason-name' => 'Aqueste utilizaire es apartat de tota edicion per causa de vandalisme o autres faches analÃ²gs.
Se sÃ¨tz segur{{GENDER:||a}} que sâ€™agÃ­s dâ€™una error, [[$1|contactatz-nos]].',
	'regexblock-reason-regex' => "Aqueste utilizaire es apartat de tota edicion per causa de vandalisme o autres faches analÃ²gs per un utilizaire qu'a un nom similar. Creatz un autre compte o [[$1|contactatz-nos]] per senhalar lo problÃ¨ma.",
	'regexblock-form-username' => 'AdreÃ§a IP o Utilizaire :',
	'regexblock-form-reason' => 'Motiu :',
	'regexblock-form-expiry' => 'Expiracion :',
	'regexblock-form-match' => 'TÃ¨rme exacte',
	'regexblock-form-account-block' => 'Interdire la creacion dâ€™un compte novÃ¨l.',
	'regexblock-form-submit' => 'Blocar aqueste Utilizaire',
	'regexblock-form-submit-empty' => 'Indicatz un nom dâ€™utilizaire o una adreÃ§a IP de blocar.',
	'regexblock-form-submit-regex' => 'Expression regulara incorrÃ¨cta.',
	'regexblock-form-submit-expiry' => 'Precisatz un periÃ²de dâ€™expiracion.',
	'regexblock-link' => 'blocar amb una expression racionala',
	'regexblock-match-stats-record' => "$1 a blocat Â« $2 Â» lo Â« $3 Â» a Â« $4 Â», connectat dempuÃ¨i l'adreÃ§a Â« $5 Â»",
	'regexblock-nodata-found' => 'Cap de donada pas trobada',
	'regexblock-stats-title' => 'Estatisticas dels blocatges per expressions regularas',
	'regexblock-unblock-success' => 'Lo desblocatge a capitat',
	'regexblock-unblock-log' => "Lâ€™utilizaire o lâ€™adreÃ§a IP '''$1''' es estat desblocat.",
	'regexblock-unblock-error' => 'Error de deblocatge de $1. Lâ€™utilizaire existÃ­s probablament pas.',
	'regexblock-regex-filter' => '  o una expression racionala :',
	'regexblock-view-blocked' => 'Veire los blocatges per :',
	'regexblock-view-all' => 'Totes',
	'regexblock-view-go' => 'Amodar',
	'regexblock-view-match' => '(tÃ¨rme exacte)',
	'regexblock-view-regex' => '(expression regulara)',
	'regexblock-view-account' => '(creacion dels comptes blocada)',
	'regexblock-view-reason' => 'motiu : $1',
	'regexblock-view-reason-default' => 'cap de motiu indicat',
	'regexblock-view-block-infinite' => 'blocatge permanent',
	'regexblock-view-block-by' => 'blocat per :',
	'regexblock-view-block-unblock' => 'desblocar',
	'regexblock-view-stats' => 'estatisticas',
	'regexblock-view-empty' => 'La lista dels utilizaires e de las adreÃ§as IP blocats es voida.',
	'regexblock-view-time' => 'lo $1',
	'right-regexblock' => 'Blocar en escritura los utilizaires sus totes los wikis de la bÃ²ria wiki',
);

/** Ossetic (Ð˜Ñ€Ð¾Ð½)
 * @author Amikeco
 */
$messages['os'] = array(
	'regexblock-form-reason' => 'ÐÑ…Ñ…Ð¾Ñ:',
);

/** Punjabi (à¨ªà©°à¨œà¨¾à¨¬à©€)
 * @author Gman124
 */
$messages['pa'] = array(
	'regexblock-view-all' => 'à¨¸à¨­',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'regexblock-form-username' => 'IP-Adress odder Yuusernaame:',
	'regexblock-form-reason' => 'Grund:',
	'regexblock-view-all' => 'All',
	'regexblock-view-go' => 'Geh los',
	'regexblock-view-reason' => 'Grund: $1',
);

/** Polish (polski)
 * @author Derbeth
 * @author Maikking
 * @author McMonster
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'regexblock' => 'Blokada z uÅ¼yciem wyraÅ¼enia regularnego',
	'regexblock-already-blocked' => '$1 jest juÅ¼ zablokowany.',
	'regexblock-block-log' => "Nazwa uÅ¼ytkownika lub adres IP '''$1''' zostaÅ‚y zablokowane.",
	'regexblock-block-success' => 'PomyÅ›lnie zablokowano',
	'regexblock-currently-blocked' => 'Obecnie zablokowane adresy:',
	'regexblock-desc' => 'Rozszerzenie umoÅ¼liwiajÄ…ce blokowanie nazw uÅ¼ytkownikÃ³w oraz adresÃ³w IP opisanych wyraÅ¼eniami regularnymi. Zawiera mechanizm blokujÄ…cy oraz [[Special:Regexblock|stronÄ™ specjalnÄ…]] dla dodawania i zarzÄ…dzania blokadami',
	'regexblock-expire-duration' => '1 godzina,2 godziny,4 godziny,6 godzin,1 dzieÅ„,3 dni,1 tydzieÅ„,2 tygodnie,1 miesiÄ…c,3 miesiÄ…ce,6 miesiÄ™cy,1 rok,na zawsze',
	'regexblock-page-title' => 'Blokada nazwy z uÅ¼yciem wyraÅ¼enia regularnego',
	'regexblockstats' => 'Statystyki blokad z uÅ¼yciem wyraÅ¼eÅ„ regularnych',
	'regexblock-help' => "UÅ¼yj poniÅ¼szego formularza do zablokowania moÅ¼liwoÅ›ci wykonywania zapisu okreÅ›lonemu uÅ¼ytkownikowi lub spod wskazanego adresu IP.
Powinno byÄ‡ to wykonywane zgodnie z obowiÄ…zujÄ…cymi zasadami, wyÅ‚Ä…cznie w celu zapobiegania wandalizmom.
''Na tej stronie moÅ¼esz zablokowaÄ‡ rÃ³wnieÅ¼ nieistniejÄ…ce konta uÅ¼ytkownikÃ³w oraz konta o nazwach podobnych do zadanej, â€žTestâ€ zostanie zablokowany razem z â€žTest 2â€ itd.
MoÅ¼esz rÃ³wnieÅ¼ zablokowaÄ‡ adresy IP, co spowoduje, Å¼e nikt bez zalogowania nie bÄ™dzie mÃ³gÅ‚ z nich edytowaÄ‡ stron.
Uwaga: adresy IP bÄ™dÄ… traktowane jak nazwa uÅ¼ytkownika w celu ustalenia blokowania.
JeÅ¼eli nie podano powodu blokady, zostaniu uÅ¼yty domyÅ›lny typowy opis blokady.''",
	'regexblock-page-title-1' => 'Zablokuj adres, uÅ¼ywajÄ…c wyraÅ¼enia regularnego',
	'regexblock-reason-ip' => 'Ten adres IP zostaÅ‚ zablokowany z powodu wandalizmu lub innego naruszenia zasad przez Ciebie lub przez kogoÅ›, z kim wspÃ³Å‚dzielisz ten adres IP.
JeÅ¼eli uwaÅ¼asz, Å¼e nastÄ…piÅ‚a pomyÅ‚ka [[$1|skontaktuj siÄ™ z nami]]',
	'regexblock-reason-name' => 'Nazwa uÅ¼ytkownika zostaÅ‚a zablokowana z powodu wandalizmu lub innego naruszenia zasad.
JeÅ¼eli uwaÅ¼asz, Å¼e nastÄ…piÅ‚a pomyÅ‚ka [[$1|skontaktuj siÄ™ z nami]]',
	'regexblock-reason-regex' => 'Nazwa uÅ¼ytkownika zostaÅ‚a zablokowana z powodu wandalizmu lub innego naruszenia zasad, wykonanych przez uÅ¼ytkownika o bardzo podobnej nazwie.
UtwÃ³rz innÄ… nazwÄ™ uÅ¼ytkownika lub [[$1|skontaktuj siÄ™ z nami]] w celu rozwiÄ…zania problemu.',
	'regexblock-form-username' => 'Adres IP lub nazwa uÅ¼ytkownika:',
	'regexblock-form-reason' => 'PowÃ³d',
	'regexblock-form-expiry' => 'Czas blokady:',
	'regexblock-form-match' => 'DokÅ‚adnie',
	'regexblock-form-account-block' => 'Zablokuj moÅ¼liwoÅ›Ä‡ tworzenia nowych kont',
	'regexblock-form-submit' => 'Zablokuj uÅ¼ytkownika',
	'regexblock-form-submit-empty' => 'Podaj nazwÄ™ uÅ¼ytkownika lub adres IP do zablokowania.',
	'regexblock-form-submit-regex' => 'NieprawidÅ‚owe wyraÅ¼enie regularne',
	'regexblock-form-submit-expiry' => 'OkreÅ›l czas zakoÅ„czenia blokady.',
	'regexblock-link' => 'blokada z wykorzystaniem wyraÅ¼enia regularnego',
	'regexblock-match-stats-record' => '$1 zablokowaÅ‚o â€ž$2â€ w â€ž$3â€ o â€ž$4â€, zalogowanego â€ž$5â€',
	'regexblock-nodata-found' => 'Nie odnaleziono danych',
	'regexblock-stats-title' => 'Statystyki blokad z uÅ¼yciem wyraÅ¼eÅ„ regularnych',
	'regexblock-unblock-success' => 'Odblokowano',
	'regexblock-unblock-log' => "UÅ¼ytkownik lub adres IP '''$1''' zostaÅ‚ odblokowany.",
	'regexblock-unblock-error' => 'BÅ‚Ä…d przy odblokowaniu $1.
Prawdopodobnie brak takiego uÅ¼ytkownika.',
	'regexblock-regex-filter' => ' lub wyraÅ¼enie regularne',
	'regexblock-view-blocked' => 'PokaÅ¼ zablokowanych, posortowanych wedÅ‚ug',
	'regexblock-view-all' => 'Wszystkie',
	'regexblock-view-go' => 'PrzejdÅº',
	'regexblock-view-match' => '(dokÅ‚adnie)',
	'regexblock-view-regex' => '(dopasowanie wyraÅ¼enia regularnego)',
	'regexblock-view-account' => '(blokada tworzenia konta)',
	'regexblock-view-reason' => 'powÃ³d: $1',
	'regexblock-view-reason-default' => 'typowa przyczyna',
	'regexblock-view-block-infinite' => 'blokada staÅ‚a',
	'regexblock-view-block-by' => 'zablokowany przez',
	'regexblock-view-block-unblock' => 'odblokuj',
	'regexblock-view-stats' => 'statystyki',
	'regexblock-view-empty' => 'Lista zablokowanych nazw i adresÃ³w jest pusta.',
	'regexblock-view-time' => '$1',
	'right-regexblock' => 'Blokowanie uÅ¼ytkownikom moÅ¼liwoÅ›ci edycji na wszystkich wiki w obrÄ™bie farmy',
);

/** Piedmontese (PiemontÃ¨is)
 * @author BorichÃ¨t
 * @author DragonÃ²t
 */
$messages['pms'] = array(
	'regexblock' => 'Blocagi regex',
	'regexblock-already-blocked' => "$1 a l'Ã© giÃ  blocÃ ",
	'regexblock-block-log' => "Ã‹l nÃ²m utent o l'adrÃ«ssa IP '''$1''' a l'Ã© stÃ it blocÃ .",
	'regexblock-block-success' => 'Blocagi bin fÃ it',
	'regexblock-currently-blocked' => 'AdrÃ«sse blocÃ  al moment:',
	'regexblock-desc' => 'Estension dovrÃ  pÃ«r blochÃ© nÃ²m utent e adrÃ«sse IP con espression regolar. A conten Ã«l mecanism Ã«d blocagi e na [[Special:Regexblock|pÃ gina special]] pÃ«r giontÃ©/gestÃ¬ ij blocagi.',
	'regexblock-expire-duration' => '1 ora, 2 ore, 4 ore, 6 ore, 1 di, 3 di, 1 sman-a, 2 sman-e, 1 mÃ¨is, 3 mÃ¨is, 6 mÃ¨is, 1 ann, sensa fin',
	'regexblock-page-title' => "Blocagi dÃ«l nÃ²m con n'espression regolar",
	'regexblockstats' => 'StatÃ¬stiche Ã«d blocagi regex',
	'regexblock-help' => "Deuvra Ã«l formolari sÃ¬-sota pÃ«r blochÃ© l'acess an scritura a na specÃ¬fica adrÃ«ssa IP o nÃ²m utent.
SÃ²n a dovrÃ¬a esse fÃ it mach pÃ«r evitÃ© vandalism, e d'acÃ²rdi con ij deuit.
''Sta pÃ gina-sÃ¬ at pÃ«rmÃ«t Ã«d blochÃ© Ã«dcÃ² utent pa esistent, e a blÃ²ca Ã«dcÃ² utent con nÃ²m smijant a col dÃ it, visadÃ¬ \"Test\" a sarÃ  blocÃ  ansema a \"Test 2\" e via fÃ²rt.
It peule Ã«dcÃ² blochÃ© adrÃ«sse IP, visadÃ¬ che pi gnun intrand da lÃ¬ a podrÃ  modifichÃ© dle pÃ gine.
NÃ²ta: adrÃ«sse IP parsiaj a saran tratÃ  com nÃ²m utent pÃ«r determinÃ© Ã«l blocagi.
Se gnun-e rason a son specificÃ , a sarÃ  dovrÃ  na rason genÃ©rica stÃ ndard.''",
	'regexblock-page-title-1' => 'BlÃ²ca adrÃ«ssa an dovrand espression regolar',
	'regexblock-reason-ip' => "St'adrÃ«ssa IP-sÃ¬ a peul pa modifichÃ© pÃ«r vandalism o Ã utr dann fÃ it da ti o da cheicun che a condivid  toa adrÃ«ssa IP.
S'it chÃ«rde che son a sia n'eror, pÃ«r piasÃ¬ [[$1|contatne]]",
	'regexblock-reason-name' => "Sto nÃ²m utent-sÃ¬ a peul pa modifichÃ© pÃ«r vandalism o Ã utr dann.
S'it chÃ«rde che a sia n'eror, pÃ«r piasÃ¬ [[$1|contatne]]",
	'regexblock-reason-regex' => "Sto nÃ²m utent-sÃ¬ a peul pa modifichÃ¨ pÃ«r vandalism o Ã utr dann fÃ it na n'utent con nÃ²m Ã«smijant.
PÃ«r piasÃ¬ crea n'Ã utr nÃ²m utent o [[$1|contatne]] pÃ«r parlÃ© dÃ«l problema.",
	'regexblock-form-username' => 'AdrÃ«ssa IP o nÃ²m utent:',
	'regexblock-form-reason' => 'Rason:',
	'regexblock-form-expiry' => 'Fin:',
	'regexblock-form-match' => 'PrÃ²pi istess',
	'regexblock-form-account-block' => 'BlÃ²ca la creassion Ã«d neuv cont',
	'regexblock-form-submit' => "BlÃ²ca st'utent-sÃ¬",
	'regexblock-form-submit-empty' => "Da un nÃ²m utent o n'adrÃ«ssa IP da blochÃ©.",
	'regexblock-form-submit-regex' => 'Espression regolar pa bon-a.',
	'regexblock-form-submit-expiry' => 'PÃ«r piasÃ¬ specÃ¬fica un temp Ã«d fin.',
	'regexblock-link' => 'blÃ²ca con espression regolar',
	'regexblock-match-stats-record' => "$1 a l'ha blocÃ  '$2' su '$3' a '$4', registrand da l'adrÃ«ssa '$5'",
	'regexblock-nodata-found' => 'Pa gnun dat trovÃ ',
	'regexblock-stats-title' => 'StatÃ¬stiche dij blocagi regex',
	'regexblock-unblock-success' => 'DÃ«sblocagi andÃ it bin',
	'regexblock-unblock-log' => "Ã‹l nÃ²m utent o l'adrÃ«ssa IP '''$1''' a l'Ã© stÃ it blocÃ .",
	'regexblock-unblock-error' => 'Eror an dÃ«sblocand $1.
A peul esse che a-i sia pa col utent.',
	'regexblock-regex-filter' => '  o valor regex:',
	'regexblock-view-blocked' => 'Visualisassion blocÃ  da:',
	'regexblock-view-all' => 'TÃ¹it',
	'regexblock-view-go' => 'Va',
	'regexblock-view-match' => '(prÃ²pi parÃ¨j)',
	'regexblock-view-regex' => '(corÃ«spondensa regex)',
	'regexblock-view-account' => '(blocagi Ã«d la creassion Ã«d cont)',
	'regexblock-view-reason' => 'rason: $1',
	'regexblock-view-reason-default' => 'rason genÃ©rica',
	'regexblock-view-block-infinite' => 'blocagi pÃ«rmanent',
	'regexblock-view-block-by' => 'blocÃ  da:',
	'regexblock-view-block-unblock' => 'dÃ«sblochÃ©',
	'regexblock-view-stats' => 'statÃ¬stiche',
	'regexblock-view-empty' => "La lista Ã«d nÃ²m e adrÃ«sse blocÃ  a l'Ã© veuida.",
	'regexblock-view-time' => 'dzora $1',
	'right-regexblock' => "BlÃ²ca utent pÃ«r le modÃ¬fiche dzora a tute le wiki dl'ansema Ã«d wiki",
);

/** Pashto (Ù¾ÚšØªÙˆ)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'regexblock-already-blocked' => 'Ù¾Ø± $1 Ø¯ Ù¾Ø®ÙˆØ§ Ù†Ù‡ Ø¨Ù†Ø¯ÙŠØ² Ù„Ú«ÛØ¯Ù„ÛŒ.',
	'regexblock-block-log' => "Ù¾Ù‡ Ú©Ø§Ø±Ù† Ù†ÙˆÙ… Ø§Ùˆ ÙŠØ§ Ø¯ '''$1''' Ù¾Ù‡ IP Ù¾ØªÛ Ø¨Ù†Ø¯ÙŠØ² Ù„Ú«ÛØ¯Ù„ÛŒ.",
	'regexblock-block-success' => 'Ø¨Ù†Ø¯ÙŠØ² Ù¾Ù‡ Ø¨Ø±ÙŠØ§Ù„ÙŠØªÙˆØ¨ Ø³Ø±Ù‡ ÙˆÙ„Ú«ÛØ¯Ù‡',
	'regexblock-currently-blocked' => 'Ø¯ Ø¯Ù… Ù…Ù‡Ø§Ù„ Ø¨Ù†Ø¯ÙŠØ² Ù„Ú«ÛØ¯Ù„Û Ù¾ØªÛ:',
	'regexblock-expire-duration' => '1 Ø³Ø§Ø¹ØªØŒ2 Ø³Ø§Ø¹ØªÙˆÙ†Ù‡ØŒ4 Ø³Ø§Ø¹ØªÙˆÙ†Ù‡ØŒ6 Ø³Ø§Ø¹ØªÙˆÙ†Ù‡ØŒ1 ÙˆØ±Ú3 ÙˆØ±ÚÛØŒ1 Ø§ÙˆÙ†ÛØŒ2 Ø§ÙˆÙ†ÛØŒ1 Ù…ÙŠØ§Ø´ØªØŒ3 Ù…ÙŠØ§Ø´ØªÛØŒ6 Ù…ÙŠØ§Ø´ØªÛØŒ1 Ú©Ø§Ù„ØŒ Ù„Ø§Ù…Ø­Ø¯ÙˆØ¯Ù‡',
	'regexblock-form-username' => 'IP Ù¾ØªÙ‡ ÙŠØ§ Ú©Ø§Ø±Ù†-Ù†ÙˆÙ…:',
	'regexblock-form-reason' => 'Ø³Ø¨Ø¨:',
	'regexblock-form-expiry' => 'Ø¯ Ù¾Ø§ÛŒ Ù†ÛÙ¼Ù‡:',
	'regexblock-form-account-block' => 'Ø¯ Ù†ÙˆØ¤ Ú©Ø§Ø±Ù†-Ø­Ø³Ø§Ø¨ÙˆÙ†Ùˆ Ù¾Ù‡ Ø¬ÙˆÚ“ÛØ¯Ùˆ Ø¨Ù†Ø¯ÙŠØ² Ù„Ú«ÙˆÙ„',
	'regexblock-form-submit' => 'Ù¾Ù‡ Ø¯Û Ú©Ø§Ø±Ù† Ø¨Ù†Ø¯ÙŠØ² Ù„Ú«ÙˆÙ„',
	'regexblock-form-submit-expiry' => 'Ù„Ø·ÙØ§Ù‹ ÙŠÙˆÙ‡ Ù†ÙˆÛ Ù¾Ø§ÛŒ Ù…ÙˆØ¯Ù‡ ÙˆÙ¼Ø§Ú©Û.',
	'regexblock-nodata-found' => 'Ø§ÙˆÙ…ØªÙˆÚ© Ùˆ Ù†Ù‡ Ù…ÙˆÙ†Ø¯Ù„ Ø´Ùˆ',
	'regexblock-unblock-success' => 'Ø¨Ù†Ø¯ÙŠØ² Ù¾Ù‡ Ø¨Ø±ÙŠØ§Ù„ÙŠØªÙˆØ¨ Ø³Ø±Ù‡ Ù„ÙŠØ±ÙŠ Ø´Ùˆ',
	'regexblock-view-all' => 'Ù¼ÙˆÙ„',
	'regexblock-view-go' => 'ÙˆØ±ÚÙ‡',
	'regexblock-view-reason' => 'Ø³Ø¨Ø¨: $1',
	'regexblock-view-block-unblock' => 'Ø¨Ù†Ø¯ÙŠØ² Ù„Ø±Û Ú©ÙˆÙ„',
);

/** Portuguese (portuguÃªs)
 * @author Hamilton Abreu
 * @author Lijealso
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'regexblock' => 'Bloqueio de expressÃµes regulares',
	'regexblock-already-blocked' => '$1 jÃ¡ estÃ¡ bloqueada.',
	'regexblock-block-log' => "Nome de utilizador ou endereÃ§o IP '''$1''' foi bloqueado.",
	'regexblock-block-success' => 'Bloqueio com sucesso',
	'regexblock-currently-blocked' => 'EndereÃ§os actualmente bloqueados:',
	'regexblock-desc' => 'ExtensÃ£o usada para bloquear nomes de utilizador ou endereÃ§os IP atravÃ©s de expressÃµes regulares. ContÃ©m o mecanismo e uma [[Special:Regexblock|pÃ¡gina especial]] para adicionar/gerir os bloqueios',
	'regexblock-expire-duration' => '1 hora,2 horas,4 horas,6 horas,1 dia,3 dias,1 semana,2 semanas,1 mÃªs,3 meses,6 meses,1 ano,infinito',
	'regexblock-page-title' => 'Bloqueio de nomes de expressÃµes regulares',
	'regexblockstats' => 'EstatÃ­sticas de bloqueio de expressÃµes regulares',
	'regexblock-help' => 'Use o formulÃ¡rio abaixo para bloquear o acesso de escrita a um endereÃ§o IP ou nome de utilizador especÃ­ficos.
Isto deverÃ¡ ser feito apenas para prevenir vandalismo, e de acordo com as normas.
\'\'Esta pÃ¡gina permitir-lhe-Ã¡ bloquear atÃ© mesmo utilizadores nÃ£o existentes, e tambÃ©m bloquearÃ¡ utilizadores com nomes semelhantes ao dado, isto Ã©, "Teste" serÃ¡ bloqueado juntamente com "Teste 2", etc.
TambÃ©m pode bloquear endereÃ§os IP completos, significando isto que ninguÃ©m proveniente deles poderÃ¡ editar pÃ¡ginas.
Nota: endereÃ§os IP parciais serÃ£o tratados como nomes de utilizador na determinaÃ§Ã£o do bloqueio.
Se nenhum motivo for especificado, serÃ¡ usado um motivo genÃ©rico predefinido.\'\'',
	'regexblock-page-title-1' => 'Bloquear endereÃ§o utilizando expressÃµes regulares',
	'regexblock-reason-ip' => 'Este endereÃ§o IP estÃ¡ impedido de editar devido a vandalismo ou outra perturbaÃ§Ã£o por si ou outra pessoa que partilha o seu endereÃ§o IP.
Se crÃª que se trata de um erro, por favor, [[$1|entre em contacto]]',
	'regexblock-reason-name' => 'Este nome de utilizador estÃ¡ impedido de editar devido a vandalismo ou outro tipo de disrupÃ§Ã£o. Se julgar tratar-se de um erro, por favor [[$1|entre em contacto]]',
	'regexblock-reason-regex' => 'Este nome de utilizador estÃ¡ impedido de editar devido a vandalismo ou outra perturbaÃ§Ã£o por um utilizador com um nome semelhante.
Por favor, crie um nome de utilizador alternativo ou [[$1|avise-nos]] sobre o problema',
	'regexblock-form-username' => 'EndereÃ§o IP ou nome de utilizador:',
	'regexblock-form-reason' => 'Motivo:',
	'regexblock-form-expiry' => 'Validade:',
	'regexblock-form-match' => 'CorrespondÃªncia exata',
	'regexblock-form-account-block' => 'Bloquear criaÃ§Ã£o de novas contas',
	'regexblock-form-submit' => 'Bloquear este Utilizador',
	'regexblock-form-submit-empty' => 'ForneÃ§a um nome de utilizador ou um endereÃ§o IP para bloquear.',
	'regexblock-form-submit-regex' => 'ExpressÃ£o regular invÃ¡lida.',
	'regexblock-form-submit-expiry' => 'Por favor, seleccione um perÃ­odo de expiraÃ§Ã£o.',
	'regexblock-link' => 'bloqueio com expressÃ£o regular',
	'regexblock-match-stats-record' => "$1 bloqueou '$2' em '$3' em '$4', proveniente do endereÃ§o '$5'",
	'regexblock-nodata-found' => 'NÃ£o foram encontrados dados',
	'regexblock-stats-title' => 'EstatÃ­sticas de bloqueio com expressÃµes regulares',
	'regexblock-unblock-success' => 'Desbloqueio bem sucedido',
	'regexblock-unblock-log' => "O nome de utilizador ou endereÃ§o IP '''$1''' foi desbloqueado.",
	'regexblock-unblock-error' => 'Erro ao desbloquear $1. Provavelmente nÃ£o existe esse utilizador.',
	'regexblock-regex-filter' => '  ou valor de regex:',
	'regexblock-view-blocked' => 'Ver bloqueios por:',
	'regexblock-view-all' => 'Todos',
	'regexblock-view-go' => 'Ir',
	'regexblock-view-match' => '(correspondÃªncia exata)',
	'regexblock-view-regex' => '(correspondÃªncia a regex)',
	'regexblock-view-account' => '(bloqueio de criaÃ§Ã£o de conta)',
	'regexblock-view-reason' => 'motivo: $1',
	'regexblock-view-reason-default' => 'motivo genÃ©rico',
	'regexblock-view-block-infinite' => 'bloqueio permanente',
	'regexblock-view-block-by' => 'bloqueado por:',
	'regexblock-view-block-unblock' => 'desbloquear',
	'regexblock-view-stats' => 'estatÃ­sticas',
	'regexblock-view-empty' => 'Esta lista de nomes e endereÃ§os bloqueados estÃ¡ vazia.',
	'regexblock-view-time' => 'em $1',
	'right-regexblock' => 'Bloquear a ediÃ§Ã£o aos utilizadores de todas as wikis da fazenda',
);

/** Brazilian Portuguese (portuguÃªs do Brasil)
 * @author Eduardo.mps
 * @author Giro720
 */
$messages['pt-br'] = array(
	'regexblock' => 'Bloqueio por expressÃµes regulares',
	'regexblock-already-blocked' => '$1 jÃ¡ estÃ¡ bloqueada.',
	'regexblock-block-log' => "Nome de utilizador ou endereÃ§o IP '''$1''' foi bloqueado.",
	'regexblock-block-success' => 'Bloqueio com sucesso',
	'regexblock-currently-blocked' => 'EndereÃ§os bloqueados atualmente:',
	'regexblock-desc' => 'ExtensÃ£o usada para bloquear nomes de utilizador ou endereÃ§os IP atravÃ©s de expressÃµes regulares. ContÃ©m o mecanismo e uma [[Special:Regexblock|pÃ¡gina especial]] para adicionar/gerenciar os bloqueios.',
	'regexblock-expire-duration' => '1 hora,2 horas,4 horas,6 horas,1 dia,3 dias,1 semana,2 semanas,1 mÃªs,3 meses,6 meses,1 ano,infinito',
	'regexblock-page-title' => 'Bloqueio de nomes por expressÃµes regulares',
	'regexblockstats' => 'EstatÃ­sticas de bloqueio por expressÃµes regulares',
	'regexblock-help' => 'Use o formulÃ¡rio abaixo para bloquear o acesso de escrita a um endereÃ§o IP ou nome de utilizador especÃ­ficos.
Isto deverÃ¡ ser feito apenas para prevenir vandalismo, e de acordo com as polÃ­ticas.
\'\'Esta pÃ¡gina lhe permitirÃ¡ bloquear atÃ© mesmo utilizadores nÃ£o existentes, e tambÃ©m bloquearÃ¡ utilizadores com nomes semelhantes ao dado, p. ex. "Teste" serÃ¡ bloqueado juntamente com "Teste 2", etc.
VocÃª pode tambÃ©m bloquear endereÃ§os IP completos, significando isto que ninguÃ©m proveniente deles poderÃ¡ editar pÃ¡ginas.
Nota: endereÃ§os IP parciais serÃ£o tratados como nomes de utilizadores na determinaÃ§Ã£o do bloqueio.
Se nenhum motivo for especificado, um motivo genÃ©rico padrÃ£o serÃ¡ usado.\'\'',
	'regexblock-page-title-1' => 'Bloquear endereÃ§o utilizando expressÃµes regulares',
	'regexblock-reason-ip' => 'Este endereÃ§o IP estÃ¡ impedido de editar devido a vandalismo ou outra perturbaÃ§Ã£o por si ou outra pessoa que compartilha o seu endereÃ§o IP.
Se vocÃª acredita que se trata de um erro, por favor, [[$1|contate-nos]]',
	'regexblock-reason-name' => 'Este nome de utilizador estÃ¡ impedido de editar devido a vandalismo ou outro tipo de disrupÃ§Ã£o. Se julgar tratar-se de um erro, por favor [[$1|contate-nos]]',
	'regexblock-reason-regex' => 'Este nome de utilizador estÃ¡ impedido de editar devido a vandalismo ou outra perturbaÃ§Ã£o por um utilizador com um nome semelhante.
Por favor, crie um nome de utilizador alternativo ou [[$1|contate-nos]] sobre o problema',
	'regexblock-form-username' => 'EndereÃ§o IP ou nome de utilizador:',
	'regexblock-form-reason' => 'Motivo:',
	'regexblock-form-expiry' => 'Validade:',
	'regexblock-form-match' => 'CorrespondÃªncia exata',
	'regexblock-form-account-block' => 'Bloquear criaÃ§Ã£o de novas contas',
	'regexblock-form-submit' => 'Bloquear este Utilizador',
	'regexblock-form-submit-empty' => 'ForneÃ§a um nome de utilizador ou um endereÃ§o IP para bloquear.',
	'regexblock-form-submit-regex' => 'ExpressÃ£o regular invÃ¡lida.',
	'regexblock-form-submit-expiry' => 'Por favor, seleccione um perÃ­odo de expiraÃ§Ã£o.',
	'regexblock-link' => 'bloqueio com expressÃ£o regular',
	'regexblock-match-stats-record' => "$1 bloqueou '$2' em '$3' em '$4', proveniente do endereÃ§o '$5'",
	'regexblock-nodata-found' => 'Nenhum dado encontrado',
	'regexblock-stats-title' => 'EstatÃ­sticas de bloqueio de expressÃµes regulares',
	'regexblock-unblock-success' => 'Desbloqueio bem sucedido',
	'regexblock-unblock-log' => "O nome de utilizador ou endereÃ§o IP '''$1''' foi desbloqueado.",
	'regexblock-unblock-error' => 'Erro ao desbloquear $1. Provavelmente nÃ£o existe esse utilizador.',
	'regexblock-regex-filter' => 'ou valor de regex:',
	'regexblock-view-blocked' => 'Ver bloqueios por:',
	'regexblock-view-all' => 'Todos',
	'regexblock-view-go' => 'Ir',
	'regexblock-view-match' => '(correspondÃªncia exata)',
	'regexblock-view-regex' => '(correspondÃªncia por regex)',
	'regexblock-view-account' => '(bloqueio de criaÃ§Ã£o de conta)',
	'regexblock-view-reason' => 'motivo: $1',
	'regexblock-view-reason-default' => 'motivo genÃ©rico',
	'regexblock-view-block-infinite' => 'bloqueio permanente',
	'regexblock-view-block-by' => 'bloqueado por:',
	'regexblock-view-block-unblock' => 'desbloquear',
	'regexblock-view-stats' => 'estatÃ­sticas',
	'regexblock-view-empty' => 'Esta lista de nomes e endereÃ§os bloqueados estÃ¡ vazia.',
	'regexblock-view-time' => 'em $1',
	'right-regexblock' => 'Bloquear a ediÃ§Ã£o a utilizadores em todos os wikis da farm de wikis',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'regexblock-reason-regex' => "Kay ruraqpa sutinqa llamk'apuymanta hark'asqam, yaqa kaqlla sutiyuq ruraq wandaluchaptinmi, millaykunata ruraptinmi. Ama hina kaspa, huk ruraqpa sutiykita kamariy icha [[$1|qillqarimuwayku]] kay sasachakuymanta rimanakunanchikpaq",
	'regexblock-form-submit' => "Kay ruraqta hark'ay",
	'regexblock-match-stats-record' => '$1 sutiyuqqa \'$2\' sutiyuqta hark\'an \'$3\' p\'unchawpi \'$4\' pachapi, \'$5\' tiyaymanta hallch\'aspa
<!--
structure:
"hark\'an" = "blocked"
"$1 sutiyuqqa" = "the one who has the name $1" and so on
-->',
);

/** Tarifit (Tarifit)
 * @author Jose77
 */
$messages['rif'] = array(
	'regexblock-view-all' => 'Maá¹›á¹›a',
	'regexblock-view-go' => 'Raá¸¥ É£a',
);

/** Romanian (romÃ¢nÄƒ)
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'regexblock' => 'Blocare regex',
	'regexblock-already-blocked' => '$1 este deja blocat.',
	'regexblock-currently-blocked' => 'Adrese blocate Ã®n prezent:',
	'regexblock-form-username' => 'AdresÄƒ IP sau nume de utilizator:',
	'regexblock-form-reason' => 'Motiv:',
	'regexblock-form-expiry' => 'Expirare:',
	'regexblock-form-account-block' => 'BlocheazÄƒ crearea de conturi noi',
	'regexblock-form-submit' => 'BlocheazÄƒ acest utilizator',
	'regexblock-form-submit-regex' => 'Expresie regulatÄƒ incorectÄƒ.',
	'regexblock-unblock-success' => 'Deblocare cu succes',
	'regexblock-unblock-log' => "Utilizatorul sau adresa IP '''$1''' a fost deblocat.",
	'regexblock-view-all' => 'ToÈ›i',
	'regexblock-view-go' => 'MergeÈ›i',
	'regexblock-view-account' => '(blocare creare conturi)',
	'regexblock-view-reason' => 'motiv: $1',
	'regexblock-view-reason-default' => 'motiv generic',
	'regexblock-view-block-infinite' => 'blocare permanentÄƒ',
	'regexblock-view-block-by' => 'blocat de cÄƒtre:',
	'regexblock-view-block-unblock' => 'deblocare',
	'regexblock-view-stats' => 'statistici',
	'regexblock-view-empty' => 'Lista de nume È™i adrese blocate este goalÄƒ.',
	'regexblock-view-time' => 'pe $1',
);

/** tarandÃ­ne (tarandÃ­ne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'regexblock-form-reason' => 'Mutive:',
	'regexblock-view-all' => 'Tutte',
	'regexblock-view-go' => 'Veje',
);

/** Russian (Ñ€ÑƒÑÑÐºÐ¸Ð¹)
 * @author Ferrer
 * @author Innv
 * @author MaxSem
 * @author ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€ Ð¡Ð¸Ð³Ð°Ñ‡Ñ‘Ð²
 */
$messages['ru'] = array(
	'regexblock' => 'RegexBlock',
	'regexblock-already-blocked' => '$1 ÑƒÐ¶Ðµ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½.',
	'regexblock-block-log' => "Ð˜Ð¼Ñ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ° Ð¸Ð»Ð¸ IP-Ð°Ð´Ñ€ÐµÑ '''$1''' Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½.",
	'regexblock-block-success' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ° Ð²Ñ‹Ð¿Ð¾Ð»Ð½ÐµÐ½Ð° ÑƒÑÐ¿ÐµÑˆÐ½Ð¾',
	'regexblock-currently-blocked' => 'Ð—Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ñ‹Ðµ ÑÐµÐ¹Ñ‡Ð°Ñ Ð°Ð´Ñ€ÐµÑÐ°:',
	'regexblock-desc' => 'Ð Ð°ÑÑˆÐ¸Ñ€ÐµÐ½Ð¸Ðµ, Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÑŽÑ‰ÐµÐµÑÑ Ð´Ð»Ñ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ¸ Ð¸Ð¼Ñ‘Ð½ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ¾Ð² Ð¸ IP-Ð°Ð´Ñ€ÐµÑÐ¾Ð² Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹. Ð¡Ð¾Ð´ÐµÑ€Ð¶Ð¸Ñ‚ Ð¼ÐµÑ…Ð°Ð½Ð¸Ð·Ð¼ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ Ð¸ [[Special:Regexblock|ÑÐ»ÑƒÐ¶ÐµÐ±Ð½ÑƒÑŽ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñƒ]] Ð´Ð»Ñ Ð´Ð¾Ð±Ð°Ð²Ð»ÐµÐ½Ð¸Ñ Ð¸ ÑƒÐ¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð¸Ñ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ°Ð¼Ð¸',
	'regexblock-expire-duration' => '1 Ñ‡Ð°Ñ,2 Ñ‡Ð°ÑÐ°,4 Ñ‡Ð°ÑÐ°,6 Ñ‡Ð°ÑÐ¾Ð²,1 Ð´ÐµÐ½ÑŒ,3 Ð´Ð½Ñ,1 Ð½ÐµÐ´ÐµÐ»Ñ,2 Ð½ÐµÐ´ÐµÐ»Ð¸,1 Ð¼ÐµÑÑÑ†,3 Ð¼ÐµÑÑÑ†Ð°,6 Ð¼ÐµÑÑÑ†ÐµÐ²,1 Ð³Ð¾Ð´,Ð±ÐµÑÑÑ€Ð¾Ñ‡Ð½Ð¾',
	'regexblock-page-title' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ Ð¸Ð¼ÐµÐ½Ð¸ Ð¿Ð¾ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ð¾Ð¼Ñƒ Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸ÑŽ',
	'regexblockstats' => 'Ð¡Ñ‚Ð°Ñ‚Ð¸ÑÑ‚Ð¸ÐºÐ° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð¾Ðº Ð¿Ð¾ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ð¼ Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸ÑÐ¼',
	'regexblock-help' => "Ð˜ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐ¹Ñ‚Ðµ Ð¿Ñ€Ð¸Ð²ÐµÐ´Ñ‘Ð½Ð½ÑƒÑŽ Ð½Ð¸Ð¶Ðµ Ñ„Ð¾Ñ€Ð¼Ñƒ Ð´Ð»Ñ Ð·Ð°Ð¿Ñ€ÐµÑ‚Ð° Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ÑÑ‚Ð¸ Ð·Ð°Ð¿Ð¸ÑÐ¸ Ð´Ð»Ñ Ð¾Ð¿Ñ€ÐµÐ´ÐµÐ»Ñ‘Ð½Ð½Ð¾Ð³Ð¾ IP-Ð°Ð´Ñ€ÐµÑÐ° Ð¸Ð»Ð¸ Ð¸Ð¼ÐµÐ½Ð¸ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ°.
Ð­Ñ‚Ð¾ ÑÐ»ÐµÐ´ÑƒÐµÑ‚ Ð´ÐµÐ»Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð´Ð»Ñ Ð¿Ñ€ÐµÐ´Ð¾Ñ‚Ð²Ñ€Ð°Ñ‰ÐµÐ½Ð¸Ñ Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·Ð¼Ð°, Ñ€ÑƒÐºÐ¾Ð²Ð¾Ð´ÑÑ‚Ð²ÑƒÑÑÑŒ Ð¿Ñ€Ð°Ð²Ð¸Ð»Ð°Ð¼Ð¸.
''Ð­Ñ‚Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð° Ð¿Ð¾Ð·Ð²Ð¾Ð»Ð¸Ñ‚ Ð²Ð°Ð¼ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð´Ð°Ð¶Ðµ Ð½ÐµÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÑŽÑ‰Ð¸Ñ… ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ¾Ð², Ð° Ñ‚Ð°ÐºÐ¶Ðµ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€ÑƒÐµÑ‚ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ¾Ð² Ñ Ð¿Ð¾Ñ…Ð¾Ð¶Ð¸Ð¼Ð¸ Ð¸Ð¼ÐµÐ½Ð°Ð¼Ð¸, Ñ‚. Ðµ. Ð²Ð¼ÐµÑÑ‚Ðµ Ñ Â«TestÂ» Ð±ÑƒÐ´ÐµÑ‚ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½ Ð¸ Â«Test 2Â» Ð¸ Ñ‚. Ð´.
Ð’Ñ‹ Ñ‚Ð°ÐºÐ¶Ðµ Ð¼Ð¾Ð¶ÐµÑ‚Ðµ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð¿Ð¾Ð»Ð½Ñ‹Ð¹ IP-Ð°Ð´Ñ€ÐµÑ, Ñ‡Ñ‚Ð¾ Ð¾Ð·Ð½Ð°Ñ‡Ð°ÐµÑ‚, Ñ‡Ñ‚Ð¾ ÐµÐ³Ð¾ Ð±Ð¾Ð»ÑŒÑˆÐµ Ð½ÐµÐ»ÑŒÐ·Ñ Ð±Ñ‹Ð´ÐµÑ‚ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ Ð´Ð»Ñ Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†.
Ð—Ð°Ð¼ÐµÑ‡Ð°Ð½Ð¸Ðµ: Ñ‡Ð°ÑÑ‚Ð¸Ñ‡Ð½Ð¾ IP-Ð°Ð´Ñ€ÐµÑÐ° Ð±ÑƒÐ´ÑƒÑ‚ Ð¾Ñ‡Ð¸Ñ‰ÐµÐ½Ñ‹ Ð¸Ð¼ÐµÐ½Ð°Ð¼Ð¸ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ¾Ð² Ð¿Ñ€Ð¸ Ð¾Ð¿Ñ€ÐµÐ´ÐµÐ»Ñ‘Ð½Ð½Ñ‹Ñ… Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ°Ñ….
Ð•ÑÐ»Ð¸ Ð½Ðµ ÑƒÐºÐ°Ð·Ð°Ð½Ð° Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð°, Ñ‚Ð¾ Ð±ÑƒÐ´ÐµÑ‚ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð¾ Ð¾Ð±Ñ‰ÐµÐµ Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸Ðµ Ð¿Ð¾ ÑƒÐ¼Ð¾Ð»Ñ‡Ð°Ð½Ð¸ÑŽ.''",
	'regexblock-page-title-1' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ° Ð°Ð´Ñ€ÐµÑÐ¾Ð² Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹',
	'regexblock-reason-ip' => 'Ð­Ñ‚Ð¾Ñ‚ IP-Ð°Ð´Ñ€ÐµÑ Ð¾Ñ‚ÑÑ‚Ñ€Ð°Ð½Ñ‘Ð½ Ð¾Ñ‚ Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ Ð¸Ð·-Ð·Ð° Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·Ð¼Ð° Ð¸Ð»Ð¸ Ð´Ñ€ÑƒÐ³Ð¸Ñ… Ð½Ð°Ñ€ÑƒÑˆÐµÐ½Ð¸Ð¹, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð¼Ð¾Ð³Ð»Ð¸ ÑÐ¾Ð²ÐµÑ€ÑˆÐ¸Ñ‚ÑŒ Ð²Ñ‹ Ð¸Ð»Ð¸ ÐºÑ‚Ð¾-Ñ‚Ð¾ Ð´Ñ€ÑƒÐ³Ð¾Ð¹, Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÑŽÑ‰Ð¸Ð¹ Ñ‚Ð°ÐºÐ¾Ð¹ Ð¶Ðµ IP-Ð°Ð´Ñ€ÐµÑ.
Ð•ÑÐ»Ð¸ Ð²Ñ‹ ÑÑ‡Ð¸Ñ‚Ð°ÐµÑ‚Ðµ, Ñ‡Ñ‚Ð¾ ÑÑ‚Ð¾ Ð¾ÑˆÐ¸Ð±ÐºÐ°, Ð¿Ð¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, [[$1|ÑÐ²ÑÐ¶Ð¸Ñ‚ÐµÑÑŒ Ñ Ð½Ð°Ð¼Ð¸]]',
	'regexblock-reason-name' => 'Ð­Ñ‚Ð¾ Ð¸Ð¼Ñ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ° Ð¾Ñ‚ÑÑ‚Ñ€Ð°Ð½Ñ‘Ð½Ð¾ Ð¾Ñ‚ Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ Ð¸Ð·-Ð·Ð° Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·Ð¼Ð° Ð¸Ð»Ð¸ Ð´Ñ€ÑƒÐ³Ð¸Ñ… Ð½Ð°Ñ€ÑƒÑˆÐµÐ½Ð¸Ð¹.
Ð•ÑÐ»Ð¸ Ð²Ñ‹ ÑÑ‡Ð¸Ñ‚Ð°ÐµÑ‚Ðµ, Ñ‡Ñ‚Ð¾ ÑÑ‚Ð¾ Ð¾ÑˆÐ¸Ð±ÐºÐ°, Ð¿Ð¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, [[$1|ÑÐ²ÑÐ¶Ð¸Ñ‚ÐµÑÑŒ Ñ Ð½Ð°Ð¼Ð¸]]',
	'regexblock-reason-regex' => 'Ð­Ñ‚Ð¾ Ð¸Ð¼Ñ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ° Ð¾Ñ‚ÑÑ‚Ñ€Ð°Ð½Ñ‘Ð½Ð¾ Ð¾Ñ‚ Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ Ð¸Ð·-Ð·Ð° Ð²Ð°Ð½Ð´Ð°Ð»Ð¸Ð·Ð¼Ð° Ð¸Ð»Ð¸ Ð´Ñ€ÑƒÐ³Ð¸Ñ… Ð½Ð°Ñ€ÑƒÑˆÐµÐ½Ð¸Ð¹, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ ÑÐ¾Ð²ÐµÑ€ÑˆÐ¸Ð» ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸Ðº Ñ Ð¿Ð¾Ñ…Ð¾Ð¶Ð¸Ð¼ Ð¸Ð¼ÐµÐ½ÐµÐ¼.
ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, ÑÐ¾Ð·Ð´Ð°Ð¹Ñ‚Ðµ Ð´Ñ€ÑƒÐ³Ð¾Ðµ Ð¸Ð¼Ñ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ° Ð¸Ð»Ð¸ [[$1|ÑÐ¾Ð¾Ð±Ñ‰Ð¸Ñ‚Ðµ Ð½Ð°Ð¼]] Ð¾ Ð¿Ñ€Ð¾Ð±Ð»ÐµÐ¼Ðµ',
	'regexblock-form-username' => 'IP-Ð°Ð´Ñ€ÐµÑ Ð¸Ð»Ð¸ Ð¸Ð¼Ñ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ°:',
	'regexblock-form-reason' => 'ÐŸÑ€Ð¸Ñ‡Ð¸Ð½Ð°:',
	'regexblock-form-expiry' => 'Ð˜ÑÑ‚ÐµÐºÐ°ÐµÑ‚:',
	'regexblock-form-match' => 'Ð¢Ð¾Ñ‡Ð½Ð¾Ðµ ÑÐ¾Ð¾Ñ‚Ð²ÐµÑ‚ÑÑ‚Ð²Ð¸Ðµ',
	'regexblock-form-account-block' => 'Ð—Ð°Ð¿Ñ€ÐµÑ‚Ð¸Ñ‚ÑŒ ÑÐ¾Ð·Ð´Ð°Ð½Ð¸Ðµ Ð½Ð¾Ð²Ñ‹Ñ… ÑƒÑ‡Ñ‘Ñ‚Ð½Ñ‹Ñ… Ð·Ð°Ð¿Ð¸ÑÐµÐ¹',
	'regexblock-form-submit' => 'Ð—Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ ÑÑ‚Ð¾Ð³Ð¾ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ°',
	'regexblock-form-submit-empty' => 'Ð£ÐºÐ°Ð¶Ð¸Ñ‚Ðµ Ð¸Ð¼Ñ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ° Ð¸Ð»Ð¸ IP-Ð°Ð´Ñ€ÐµÑ Ð´Ð»Ñ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ¸.',
	'regexblock-form-submit-regex' => 'ÐžÑˆÐ¸Ð±Ð¾Ñ‡Ð½Ð¾Ðµ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ð¾Ðµ Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ.',
	'regexblock-form-submit-expiry' => 'ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, ÑƒÐºÐ°Ð¶Ð¸Ñ‚Ðµ Ð²Ñ€ÐµÐ¼Ñ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ.',
	'regexblock-link' => 'Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ñ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ð¼ Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸ÐµÐ¼',
	'regexblock-match-stats-record' => '$1 Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð» Â«$2Â» Ð½Ð° Â«$3Â» Ð½Ð° Â«$4Â», Ð²Ð¾ÑˆÐµÐ´ÑˆÐµÐ³Ð¾ Ð² ÑÐ¸ÑÑ‚ÐµÐ¼Ñƒ Ñ Ð°Ð´Ñ€ÐµÑÐ° Â«$5Â»',
	'regexblock-nodata-found' => 'ÐÐ¸Ñ‡ÐµÐ³Ð¾ Ð½Ðµ Ð½Ð°Ð¹Ð´ÐµÐ½Ð¾',
	'regexblock-stats-title' => 'Ð¡Ñ‚Ð°Ñ‚Ð¸ÑÑ‚Ð¸ÐºÐ° RegexBlock',
	'regexblock-unblock-success' => 'Ð Ð°Ð·Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ° Ð²Ñ‹Ð¿Ð¾Ð»Ð½ÐµÐ½Ð° ÑƒÑÐ¿ÐµÑˆÐ½Ð¾',
	'regexblock-unblock-log' => "Ð˜Ð¼Ñ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ° Ð¸Ð»Ð¸ IP-Ð°Ð´Ñ€ÐµÑ '''$1''' Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½.",
	'regexblock-unblock-error' => 'ÐžÑˆÐ¸Ð±ÐºÐ° Ñ€Ð°Ð·Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ¸ $1.
Ð’Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾, Ñ‚Ð°ÐºÐ¾Ð³Ð¾ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ° Ð½Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚.',
	'regexblock-regex-filter' => '  Ð¸Ð»Ð¸ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ð¾Ð³Ð¾ Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ:',
	'regexblock-view-blocked' => 'ÐŸÑ€Ð¾ÑÐ¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ñ‹Ñ…:',
	'regexblock-view-all' => 'Ð’ÑÐµ',
	'regexblock-view-go' => 'Ð’Ñ‹Ð¿Ð¾Ð»Ð½Ð¸Ñ‚ÑŒ',
	'regexblock-view-match' => '(Ñ‚Ð¾Ñ‡Ð½Ð¾Ðµ ÑÐ¾Ð¾Ñ‚Ð²ÐµÑ‚ÑÑ‚Ð²Ð¸Ðµ)',
	'regexblock-view-regex' => '(ÑÐ¾Ð¾Ñ‚Ð²ÐµÑ‚ÑÑ‚Ð²Ð¸Ðµ Ñ€ÐµÐ³. Ð²Ñ‹Ñ€.)',
	'regexblock-view-account' => '(Ð·Ð°Ð¿Ñ€ÐµÑ‚ ÑÐ¾Ð·Ð´Ð°Ð½Ð¸Ñ ÑƒÑ‡Ñ‘Ñ‚Ð½Ñ‹Ñ… Ð·Ð°Ð¿Ð¸ÑÐµÐ¹)',
	'regexblock-view-reason' => 'Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð°: $1',
	'regexblock-view-reason-default' => 'Ð¾Ð±Ñ‰Ð°Ñ Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð°',
	'regexblock-view-block-infinite' => 'Ð±ÐµÑÑÑ€Ð¾Ñ‡Ð½Ð°Ñ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ°',
	'regexblock-view-block-by' => 'Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½:',
	'regexblock-view-block-unblock' => 'Ñ€Ð°Ð·Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ',
	'regexblock-view-stats' => 'ÑÑ‚Ð°Ñ‚Ð¸ÑÑ‚Ð¸ÐºÐ°',
	'regexblock-view-empty' => 'Ð¡Ð¿Ð¸ÑÐ¾Ðº Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ñ‹Ñ… Ð¸Ð¼Ñ‘Ð½ Ð¸ Ð°Ð´Ñ€ÐµÑÐ¾Ð² Ð¿ÑƒÑÑ‚.',
	'regexblock-view-time' => '$1',
	'right-regexblock' => 'Ð—Ð°Ð¿Ñ€ÐµÑ‚Ð¸Ñ‚ÑŒ ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ°Ð¼ Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð²Ð¾ Ð²ÑÐµÑ… Ð²Ð¸ÐºÐ¸ ÑÑ‚Ð¾Ð¹ Ð²Ð¸ÐºÐ¸-Ñ„ÐµÑ€Ð¼Ñ‹',
);

/** Rusyn (Ñ€ÑƒÑÐ¸Ð½ÑŒÑÐºÑ‹Ð¹)
 * @author Gazeb
 */
$messages['rue'] = array(
	'regexblock-form-reason' => 'ÐŸÑ€Ð¸Ñ‡Ñ–Ð½Ð°:',
	'regexblock-form-expiry' => 'ÐšÑ–Ð½Ñ‡Ñ–Ñ‚ÑŒ:',
	'regexblock-form-submit' => 'Ð—Ð°Ð±Ð»Ð¾ÐºÐ¾Ð²Ð°Ñ‚Ð¸ Ñ‚Ð¾Ð³Ð¾ Ñ…Ð¾ÑÐ½Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ',
	'regexblock-view-all' => 'Ð’ÑˆÑ‹Ñ‚ÐºÑ‹',
	'regexblock-view-go' => 'Ð†Ñ‚Ð¸ Ð½Ð°',
	'regexblock-view-block-unblock' => 'Ð¾Ð´Ð±Ð»Ð¾ÐºÐ¾Ð²Ð°Ñ‚Ð¸',
);

/** Sassaresu (Sassaresu)
 * @author Felis
 */
$messages['sdc'] = array(
	'regexblock-already-blocked' => '$1 Ã¨ giÃ  broccaddu.',
);

/** Sinhala (à·ƒà·’à¶‚à·„à¶½)
 * @author à¶´à·ƒà·’à¶³à·” à¶šà·à·€à·’à¶±à·Šà¶¯
 */
$messages['si'] = array(
	'regexblock-view-all' => 'à·ƒà·’à¶ºà¶½à·Šà¶½',
	'regexblock-view-go' => 'à¶ºà¶±à·Šà¶±',
);

/** Slovak (slovenÄina)
 * @author Helix84
 */
$messages['sk'] = array(
	'regexblock' => 'RegexBlock',
	'regexblock-already-blocked' => '$1 je uÅ¾ zablokovanÃ½.',
	'regexblock-block-log' => "PouÅ¾Ã­vateÄ¾skÃ© meno alebo IP adresa '''$1''' bolo zablokovanÃ©.",
	'regexblock-block-success' => 'Blokovanie ÃºspeÅ¡nÃ©',
	'regexblock-currently-blocked' => 'MomentÃ¡lne zablokovanÃ© adresy:',
	'regexblock-desc' => 'RozÅ¡Ã­renie na blokovanie pouÅ¾Ã­vateÄ¾skÃ½ch mien a IP adries na zÃ¡klade regulÃ¡rnych vÃ½razov. Obsahuje mechanizmus blokovania a [[Special:Regexblock|Å¡peciÃ¡lnu strÃ¡nku]] na pridÃ¡vanie a sprÃ¡vu blokovanÃ­',
	'regexblock-expire-duration' => '1 hodina,2 hodiny,4 hodiny,6 hodÃ­n,1 deÅˆ,3 dni,1 tÃ½Å¾deÅˆ,2 tÃ½Å¾dne,1 mesiac,3 mesiace,6 mesiacov,1 rok,na neurÄito',
	'regexblock-page-title' => 'Blokovanie mena na zÃ¡klade regulÃ¡rneho vÃ½razu',
	'regexblockstats' => 'Å tatistika regex blokovanÃ­',
	'regexblock-help' => "PouÅ¾ite tento formulÃ¡r na zablokovanie Ãºprav z urÄitej IP adresy alebo pouÅ¾Ã­vateÄ¾skÃ©ho mena. Toto by sa malo vyuÅ¾Ã­vaÅ¥ iba na predchÃ¡dzanie vandalizmu a v sÃºlade so zÃ¡sadami blokovania. ''TÃ¡to strÃ¡nka vÃ½m umoÅ¾nÃ­ zablokovaÅ¥ aj momentÃ¡lne neexistujÃºcich pouÅ¾Ã­vateÄ¾ov a pouÅ¾Ã­vateÄ¾ov s podobnÃ½mi menami ako bolo zadanÃ©, t.j. okrem Â« Test Â» bude zablokovanÃ½ aj Â« Test 2 Â» atÄ. MÃ´Å¾ete tieÅ¾ zablokovaÅ¥ celÃ© IP adresy, Äo znamenÃ¡, Å¾e nikto, kto z nich pristupuje nebude mÃ´cÅ¥ upravovaÅ¥ strÃ¡nky. Pozn.: ÄiastoÄnÃ© IP adresy budÃº povaÅ¾ovanÃ© za pouÅ¾Ã­vateÄ¾skÃ© menÃ¡. Ak nebude uvedenÃ½ dÃ´vod, pouÅ¾ije sa Å¡tandardnÃ½ vÅ¡eobecnÃ½ dÃ´vod.''",
	'regexblock-page-title-1' => 'ZablokovaÅ¥ adresu na zÃ¡klade regulÃ¡rneho vÃ½razu',
	'regexblock-reason-ip' => 'Tejto IP adrese bolo zakÃ¡zanÃ© upravovanie kvÃ´li vandalizmu alebo inej ruÅ¡ivej Äinnosti, ktorÃº ste vykonÃ¡vali vy alebo niekto s kÃ½m mÃ¡te spoloÄnÃº vaÅ¡u IP adresu. Ak verÃ­te, Å¾e toto je omyl, prosÃ­m [[$1|kontaktujte nÃ¡s]].',
	'regexblock-reason-name' => 'Tomuto pouÅ¾Ã­vateÄ¾skÃ©mu menu bolo zakÃ¡zanÃ© upravovanie kvÃ´li vandalizmu alebo inej ruÅ¡ivej Äinnosti. Ak verÃ­te, Å¾e toto je omyl, prosÃ­m [[$1|kontaktujte nÃ¡s]].',
	'regexblock-reason-regex' => 'Tomuto pouÅ¾Ã­vateÄ¾skÃ©mu menu bolo zakÃ¡zanÃ© upravovanie kvÃ´li vandalizmu alebo inej ruÅ¡ivej Äinnosti pouÅ¾Ã­vateÄ¾a s podobnÃ½m menom. ProsÃ­m, vytvorte si alternatÃ­vny pouÅ¾Ã­vateÄ¾skÃ½ ÃºÄet alebo nÃ¡s ohÄ¾adne problÃ©mu [[$1|kontaktujte]].',
	'regexblock-form-username' => 'IP adresa alebo meno pouÅ¾Ã­vateÄ¾a:',
	'regexblock-form-reason' => 'DÃ´vod:',
	'regexblock-form-expiry' => 'VyprÅ¡Ã­:',
	'regexblock-form-match' => 'PresnÃ¡ zhoda',
	'regexblock-form-account-block' => 'ZablokovaÅ¥ moÅ¾nosÅ¥ tvorby novÃ½ch ÃºÄtov',
	'regexblock-form-submit' => 'ZablokovaÅ¥ tohto pouÅ¾Ã­vateÄ¾a',
	'regexblock-form-submit-empty' => 'Zadajte pouÅ¾Ã­vateÄ¾skÃ© meno alebo IP adresu, ktorÃ¡ sa mÃ¡ zablokovaÅ¥.',
	'regexblock-form-submit-regex' => 'NeplatnÃ½ regulÃ¡rny vÃ½raz.',
	'regexblock-form-submit-expiry' => 'ProsÃ­m zadajte, kedy mÃ¡ blokovanie skonÄiÅ¥.',
	'regexblock-link' => 'zablokovaÅ¥ regulÃ¡rnym vÃ½razom',
	'regexblock-match-stats-record' => '$1 zablokoval ÃºÄet â€ž$2â€œ na â€ž$3â€œ $4, zÃ¡znam z adresy â€ž$5â€œ',
	'regexblock-nodata-found' => 'Neboli nÃ¡jdenÃ© Å¾iadne Ãºdaje',
	'regexblock-stats-title' => 'Å tatistiky regex blokovanÃ­',
	'regexblock-unblock-success' => 'Odblokovanie ÃºspeÅ¡nÃ©',
	'regexblock-unblock-log' => "PouÅ¾Ã­vateÄ¾skÃ© meno alebo IP adresa '''$1''' bolo odblokovanÃ©",
	'regexblock-unblock-error' => 'Chyba pri odblokovanÃ­ $1. TakÃ½ pouÅ¾Ã­vateÄ¾ pravdepodobne neexistuje.',
	'regexblock-regex-filter' => '  alebo hodnota reg. vÃ½razu:',
	'regexblock-view-blocked' => 'ZobraziÅ¥ blokovania od:',
	'regexblock-view-all' => 'VÅ¡etci',
	'regexblock-view-go' => 'VykonaÅ¥',
	'regexblock-view-match' => '(presnÃ¡ zhoda)',
	'regexblock-view-regex' => '(vyhovuje reg. vÃ½razu)',
	'regexblock-view-account' => '(blokovanie tvorby ÃºÄtov)',
	'regexblock-view-reason' => 'dÃ´vod: $1',
	'regexblock-view-reason-default' => 'vÅ¡eobecnÃ½ dÃ´vod',
	'regexblock-view-block-infinite' => 'trvalÃ© blokovanie',
	'regexblock-view-block-by' => 'zablokoval ho:',
	'regexblock-view-block-unblock' => 'odblokovaÅ¥',
	'regexblock-view-stats' => 'Å¡tatistiky',
	'regexblock-view-empty' => 'Zoznam blokovanÃ½ch mien a IP adries je prÃ¡zdny.',
	'regexblock-view-time' => '$1',
	'right-regexblock' => 'ZablokovaÅ¥ Ãºpravy pouÅ¾Ã­vateÄ¾ov na vÅ¡etkÃ½ch wiki z tejto wiki farmy',
);

/** Slovenian (slovenÅ¡Äina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'regexblock-form-reason' => 'Razlog:',
);

/** Serbian (Cyrillic script) (ÑÑ€Ð¿ÑÐºÐ¸ (Ñ›Ð¸Ñ€Ð¸Ð»Ð¸Ñ†Ð°)â€Ž)
 * @author FriedrickMILBarbarossa
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Ð–ÐµÑ™ÐºÐ¾ Ð¢Ð¾Ð´Ð¾Ñ€Ð¾Ð²Ð¸Ñ›
 * @author ÐœÐ¸Ñ…Ð°Ñ˜Ð»Ð¾ ÐÐ½Ñ’ÐµÐ»ÐºÐ¾Ð²Ð¸Ñ›
 */
$messages['sr-ec'] = array(
	'regexblock-block-success' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ñ˜Ðµ ÑƒÑÐ¿ÐµÐ»Ð¾',
	'regexblock-currently-blocked' => 'Ð¢Ñ€ÐµÐ½ÑƒÑ‚Ð½Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ Ð°Ð´Ñ€ÐµÑÐµ:',
	'regexblock-page-title-1' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜ Ð°Ð´Ñ€ÐµÑÑƒ ÐºÐ¾Ñ€Ð¸ÑÑ‚ÐµÑ›Ð¸ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ðµ Ð¸Ð·Ñ€Ð°Ð·Ðµ',
	'regexblock-form-username' => 'Ð˜ÐŸ Ð°Ð´Ñ€ÐµÑÐ° Ð¸Ð»Ð¸ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸Ñ‡ÐºÐ¾ Ð¸Ð¼Ðµ:',
	'regexblock-form-reason' => 'Ð Ð°Ð·Ð»Ð¾Ð³:',
	'regexblock-form-expiry' => 'Ð˜ÑÑ‚Ð¸Ñ‡Ðµ:',
	'regexblock-form-match' => 'Ð¢Ð°Ñ‡Ð½Ð¾ Ð¿Ð¾ÐºÐ»Ð°Ð¿Ð°ÑšÐµ',
	'regexblock-form-submit' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜ Ð¾Ð²Ð¾Ð³ ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸ÐºÐ°',
	'regexblock-view-all' => 'Ð¡Ð²Ðµ',
	'regexblock-view-go' => 'Ð˜Ð´Ð¸',
	'regexblock-view-reason' => 'Ñ€Ð°Ð·Ð»Ð¾Ð³: $1',
	'regexblock-view-reason-default' => 'Ð¾Ð¿ÑˆÑ‚Ð¸ Ñ€Ð°Ð·Ð»Ð¾Ð³',
	'regexblock-view-block-infinite' => 'Ñ‚Ñ€Ð°Ñ˜Ð½Ð° Ð±Ð»Ð¾ÐºÐ°Ð´Ð°',
	'regexblock-view-block-by' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð¾:',
	'regexblock-view-block-unblock' => 'Ð¾Ð´Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜',
	'regexblock-view-stats' => 'ÑÑ‚Ð°Ñ‚Ð¸ÑÑ‚Ð¸ÐºÐµ',
	'regexblock-view-time' => '$2 Ñƒ $3',
);

/** Serbian (Latin script) (srpski (latinica)â€Ž)
 * @author FriedrickMILBarbarossa
 * @author Michaello
 * @author Rancher
 * @author Ð–ÐµÑ™ÐºÐ¾ Ð¢Ð¾Ð´Ð¾Ñ€Ð¾Ð²Ð¸Ñ›
 */
$messages['sr-el'] = array(
	'regexblock-block-success' => 'Blokiranje je uspelo',
	'regexblock-currently-blocked' => 'Trenutno blokirane adrese:',
	'regexblock-page-title-1' => 'Blokiraj adresu koristeÄ‡i regularne izraze',
	'regexblock-form-username' => 'IP adresa ili korisniÄko ime:',
	'regexblock-form-reason' => 'Razlog:',
	'regexblock-form-expiry' => 'IstiÄe:',
	'regexblock-form-match' => 'TaÄno poklapanje',
	'regexblock-form-submit' => 'Blokiraj ovog korisnika',
	'regexblock-view-all' => 'Sve',
	'regexblock-view-go' => 'Idi',
	'regexblock-view-reason' => 'razlog: $1',
	'regexblock-view-reason-default' => 'opÅ¡ti razlog',
	'regexblock-view-block-infinite' => 'trajna blokada',
	'regexblock-view-block-by' => 'blokirao:',
	'regexblock-view-block-unblock' => 'odblokiraj',
	'regexblock-view-stats' => 'statistike',
	'regexblock-view-time' => '$2 u $3',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'regexblock-already-blocked' => '$1 geus dipeungpeuk.',
	'regexblock-form-reason' => 'Alesan:',
);

/** Swedish (svenska)
 * @author Fluff
 * @author M.M.S.
 * @author Najami
 * @author Sertion
 */
$messages['sv'] = array(
	'regexblock' => 'Regex-blockering',
	'regexblock-already-blocked' => '"$1" Ã¤r redan blockerad.',
	'regexblock-block-log' => "AnvÃ¤ndarnamnet eller IP-adressen '''$1''' har blockerats.",
	'regexblock-block-success' => 'Blockering lyckades',
	'regexblock-currently-blocked' => 'Nuvarande blockerade adresser:',
	'regexblock-desc' => 'TillÃ¤gg som anvÃ¤nds fÃ¶r att blockera anvÃ¤ndarnamn och IP-adresser med hjÃ¤lp av reguljÃ¤ra uttryck. InnehÃ¥ller bÃ¥de blockeringsmekansimen och en [[Special:Regexblock|specialsida]] fÃ¶r att lÃ¤gga till och Ã¤ndra blockeringar',
	'regexblock-expire-duration' => '1 timme,2 timmar,4 timmar,6 timmar,1 dag,3 dagar,1 vecka,2 veckor,1 mÃ¥nad,3 mÃ¥nader,6 mÃ¥nader,1 Ã¥r, oÃ¤ndlig',
	'regexblock-page-title' => 'Blockering med hjÃ¤lp av reguljÃ¤ra uttryck',
	'regexblockstats' => 'Regex-blockeringsstatistik',
	'regexblock-help' => 'AnvÃ¤nd formulÃ¤ret nedan fÃ¶r att blockera vissa IP-adresser eller anvÃ¤ndarnamn frÃ¥n att redigera. 
Det hÃ¤r borde endast gÃ¶ras fÃ¶r att fÃ¶rhindra vandalism, i fÃ¶ljd med riktlinjerna.
\'\'Den hÃ¤r sidan lÃ¥ter dig Ã¤ven blockera ej existerande anvÃ¤ndare, och kommer ocksÃ¥ blockera anvÃ¤ndare med liknande namn. t.ex. kommer "Test" blockeras samtidigt med "Test 2" o.s.v.
Du kan ocksÃ¥ blockera fulla IP-adresser, vilket betyder att ingen som loggar in via dessa kan redigera sidor.
Notera att delvisa IP-adresser kommer behandlas som anvÃ¤ndarnamn under blockering.
Om ingen beskrivning uppges kommer en standardbeskrivning anvÃ¤ndas.\'\'',
	'regexblock-page-title-1' => 'Blockera adress med hjÃ¤lp av reguljÃ¤ra uttryck',
	'regexblock-reason-ip' => 'Den hÃ¤r IP-adressen Ã¤r blockerad frÃ¥n att redigera pÃ¥ grund av vandalism eller annan fÃ¶rstÃ¶relse av dig eller nÃ¥gon annan som anvÃ¤nder samma IP-adress.
Om du anser att detta Ã¤r fel, var god [[$1|kontakta oss]]',
	'regexblock-reason-name' => 'Det hÃ¤r anvÃ¤ndarnamnet Ã¤r blockerat frÃ¥n att redigera pÃ¥ grund av vandalism eller annan fÃ¶rstÃ¶relse.
Om du anser att detta Ã¤r fel, var god [[$1|kontakta oss]]',
	'regexblock-reason-regex' => 'Den hÃ¤r IP-adressen Ã¤r blockerad frÃ¥n att redigera pÃ¥ grund av vandalism eller annan fÃ¶rstÃ¶relse av en anvÃ¤ndare med liknande namn. 
Var god skapa ett annat anvÃ¤ndarnamn eller [[$1|kontakta oss]] om problemet.',
	'regexblock-form-username' => 'IP adress eller anvÃ¤ndarnamn:',
	'regexblock-form-reason' => 'Anledning:',
	'regexblock-form-expiry' => 'UtgÃ¥ng:',
	'regexblock-form-match' => 'Exakt trÃ¤ff',
	'regexblock-form-account-block' => 'Blockera skapandet av nya konton',
	'regexblock-form-submit' => 'Blockera den hÃ¤r anvÃ¤ndaren',
	'regexblock-form-submit-empty' => 'Ange ett anvÃ¤ndarnamn eller en IP-adress att blockera.',
	'regexblock-form-submit-regex' => 'Ogiltigt reguljÃ¤rt uttryck',
	'regexblock-form-submit-expiry' => 'Var god ange en utgÃ¥ngstid.',
	'regexblock-link' => 'blockering med reguljÃ¤ra uttryck',
	'regexblock-match-stats-record' => "$1 blockerade '$2' pÃ¥ $3 vid $4, loggade in frÃ¥n $5",
	'regexblock-nodata-found' => 'Hittade ingen data',
	'regexblock-stats-title' => 'Regex-blockeringsstatistik',
	'regexblock-unblock-success' => 'Avblockering lyckades',
	'regexblock-unblock-log' => "AnvÃ¤ndarnamnet eller IP-adressen '''$1''' har avblockerats",
	'regexblock-unblock-error' => 'Fel under avblockering av $1.
Troligen sÃ¥ finns det ingen anvÃ¤ndare med det namnet.',
	'regexblock-regex-filter' => ' eller det reguljÃ¤ra uttrycket:',
	'regexblock-view-blocked' => 'Visa de blockerade efter:',
	'regexblock-view-all' => 'Alla',
	'regexblock-view-go' => 'GÃ¥',
	'regexblock-view-match' => '(exakt trÃ¤ff)',
	'regexblock-view-regex' => '(regex-trÃ¤ff)',
	'regexblock-view-account' => '(kontoskapande blockerat)',
	'regexblock-view-reason' => 'anledning: $1',
	'regexblock-view-reason-default' => 'generisk grund',
	'regexblock-view-block-infinite' => 'permanent blockering',
	'regexblock-view-block-by' => 'blockerad av:',
	'regexblock-view-block-unblock' => 'avblockera',
	'regexblock-view-stats' => 'statistik',
	'regexblock-view-empty' => 'Listan Ã¶ver blockerade namn och adresser Ã¤r tom.',
	'regexblock-view-time' => 'pÃ¥ $1',
	'right-regexblock' => 'Blockerar anvÃ¤ndare frÃ¥n att redigera pÃ¥ alla wikis i wikisamlingen',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'regexblock-already-blocked' => '$1 tayari amezuiwa',
	'regexblock-form-reason' => 'Sababu:',
	'regexblock-form-submit' => 'Zuia mtumiaji huyu',
	'regexblock-nodata-found' => 'Hakuna takwimu imepatikana',
	'regexblock-view-all' => 'Zote',
	'regexblock-view-go' => 'Enda',
	'regexblock-view-reason' => 'sababu: $1',
	'regexblock-view-time' => 'kwa $1',
);

/** Silesian (Å›lÅ¯nski)
 * @author Herr Kriss
 */
$messages['szl'] = array(
	'regexblock-form-reason' => 'ÄŒymu:',
	'regexblock-form-expiry' => 'Wygaso:',
);

/** Tamil (à®¤à®®à®¿à®´à¯)
 * @author Karthi.dr
 * @author Shanmugamp7
 * @author TRYPPN
 * @author Trengarasu
 */
$messages['ta'] = array(
	'regexblock-form-username' => 'à®.à®ªà®¿. à®®à¯à®•à®µà®°à®¿ à®…à®²à¯à®²à®¤à¯ à®ªà®¯à®©à®°à¯ à®ªà¯†à®¯à®°à¯:',
	'regexblock-form-reason' => 'à®•à®¾à®°à®£à®®à¯:',
	'regexblock-form-expiry' => 'à®•à®¾à®²à®¾à®µà®¤à®¿:',
	'regexblock-form-match' => 'à®®à®¿à®•à®šà¯à®šà®°à®¿à®¯à®¾à®© à®ªà¯Šà®°à¯à®¤à¯à®¤à®®à¯',
	'regexblock-form-account-block' => 'à®ªà¯à®¤à®¿à®¯ à®•à®£à®•à¯à®•à¯à®•à®³à¯ à®‰à®°à¯à®µà®¾à®•à¯à®•à¯à®µà®¤à¯ˆ à®¤à®Ÿà¯',
	'regexblock-form-submit' => 'à®‡à®¨à¯à®¤à®ªà¯ à®ªà®¯à®©à®°à¯ˆà®¤à¯ à®¤à®Ÿà¯ˆà®šà¯†à®¯à¯',
	'regexblock-form-submit-empty' => 'à®¤à®Ÿà¯ˆ à®šà¯†à®¯à¯à®¯à®ªà¯à®ªà®Ÿ à®µà¯‡à®£à¯à®Ÿà®¿à®¯ à®ªà®¯à®©à®°à¯ à®ªà¯†à®¯à®°à¯ à®…à®²à¯à®²à®¤à¯ à®.à®ªà®¿. à®®à¯à®•à®µà®°à®¿à®¯à¯ˆà®¤à¯ à®¤à®°à®µà¯à®®à¯',
	'regexblock-nodata-found' => 'à®¤à®°à®µà¯ à®à®¤à¯à®®à¯ à®•à®¾à®£à®ªà¯à®ªà®Ÿà®µà®¿à®²à¯à®²à¯ˆ',
	'regexblock-unblock-success' => 'à®¤à®Ÿà¯ˆ à®¨à¯€à®•à¯à®•à®²à¯ à®µà¯†à®±à¯à®±à®¿à®¯à®Ÿà¯ˆà®¨à¯à®¤à®¤à¯',
	'regexblock-unblock-log' => "à®ªà®¯à®©à®°à¯ à®ªà¯†à®¯à®°à¯ à®…à®²à¯à®²à®¤à¯ à®à®ªà®¿ à®®à¯à®•à®µà®°à®¿ '''$1''' à®©à¯ à®¤à®Ÿà¯ˆ à®¨à¯€à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯",
	'regexblock-view-all' => 'à®…à®©à¯ˆà®¤à¯à®¤à¯à®®à¯',
	'regexblock-view-go' => 'à®šà¯†à®²à¯',
	'regexblock-view-match' => '(à®®à®¿à®•à®šà¯à®šà®°à®¿à®¯à®¾à®© à®ªà¯Šà®°à¯à®¤à¯à®¤à®®à¯)',
	'regexblock-view-account' => '(à®•à®£à®•à¯à®•à¯ à®‰à®°à¯à®µà®¾à®•à¯à®•à¯à®¤à®²à¯ à®¤à®Ÿà¯ˆ)',
	'regexblock-view-reason' => 'à®•à®¾à®°à®£à®®à¯: $1',
	'regexblock-view-reason-default' => '(à®ªà¯Šà®¤à¯à®µà®¾à®© à®•à®¾à®°à®£à®®à¯)',
	'regexblock-view-block-infinite' => 'à®¨à®¿à®°à®¨à¯à®¤à®°à®¤à¯ à®¤à®Ÿà¯ˆ',
	'regexblock-view-block-by' => 'à®¤à®Ÿà¯à®¤à¯à®¤à®µà®°à¯:',
	'regexblock-view-block-unblock' => 'à®¤à®Ÿà¯ˆ à®¨à¯€à®•à¯à®•à¯',
	'regexblock-view-stats' => 'à®ªà¯à®³à¯à®³à®¿à®µà®¿à®µà®°à®™à¯à®•à®³à¯',
	'regexblock-view-empty' => 'à®¤à®Ÿà¯ˆ à®šà¯†à®¯à¯à®¯à®ªà¯à®ªà®Ÿà¯à®Ÿ à®ªà¯†à®¯à®°à¯à®•à®³à¯ à®®à®±à¯à®±à¯à®®à¯ à®®à¯à®•à®µà®°à®¿à®•à®³à¯ à®ªà®Ÿà¯à®Ÿà®¿à®¯à®²à¯ à®µà¯†à®±à¯à®±à®¾à®• à®‰à®³à¯à®³à®¤à¯.',
	'regexblock-view-time' => '$1 à®…à®©à¯à®±à¯',
);

/** Telugu (à°¤à±†à°²à±à°—à±)
 * @author Veeven
 */
$messages['te'] = array(
	'regexblock-already-blocked' => '$1à°¨à°¿ à°‡à°¦à°¿à°µà°°à°•à±‡ à°¨à°¿à°·à±‡à°§à°¿à°‚à°šà°¾à°°à±.',
	'regexblock-block-log' => "'''$1''' à°…à°¨à±‡ à°µà°¾à°¡à±à°•à°°à°¿à°ªà±‡à°°à± à°²à±‡à°¦à°¾ à°à°ªà±€ à°šà°¿à°°à±à°¨à°¾à°®à°¾à°¨à°¿ à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà°¾à°‚.",
	'regexblock-block-success' => 'à°¨à°¿à°°à±‹à°§à°‚ à°µà°¿à°œà°¯à°µà°‚à°¤à°®à±ˆà°‚à°¦à°¿',
	'regexblock-currently-blocked' => 'à°ªà±à°°à°¸à±à°¤à±à°¤à°‚ à°¨à°¿à°°à±‹à°§à°‚à°²à±‹ à°‰à°¨à±à°¨ à°šà°¿à°°à±à°¨à°¾à°®à°¾à°²à±:',
	'regexblock-form-username' => 'IP à°šà°¿à°°à±à°¨à°¾à°®à°¾ à°²à±‡à°¦à°¾ à°µà°¾à°¡à±à°•à°°à°¿ à°ªà±‡à°°à±:',
	'regexblock-form-reason' => 'à°•à°¾à°°à°£à°‚:',
	'regexblock-form-expiry' => 'à°•à°¾à°²à°ªà°°à°¿à°®à°¿à°¤à°¿:',
	'regexblock-form-account-block' => 'à°•à±Šà°¤à±à°¤ à°–à°¾à°¤à°¾à°²à± à°¸à±ƒà°·à±à°Ÿà°¿à°‚à°šà°¡à°‚ à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà±',
	'regexblock-form-submit' => 'à°ˆ à°µà°¾à°¡à±à°•à°°à°¿à°¨à°¿ à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà°‚à°¡à°¿',
	'regexblock-form-submit-empty' => 'à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà°¾à°²à±à°¸à°¿à°¨ à°µà°¾à°¡à±à°•à°°à°¿ à°ªà±‡à°°à± à°²à±‡à°¦à°¾ à°à°ªà±€ à°šà°¿à°°à±à°¨à°¾à°®à°¾ à°‡à°µà±à°µà°‚à°¡à°¿.',
	'regexblock-form-submit-regex' => 'à°¤à°ªà±à°ªà±à°¡à± à°°à±†à°—à±à°¯à±à°²à°°à± à°Žà°•à±à°¸à±&zwnj;à°ªà±à°°à±†à°·à°¨à±.',
	'regexblock-form-submit-expiry' => 'à°¦à°¯à°šà±‡à°¸à°¿ à°“ à°•à°¾à°²à°ªà°°à°¿à°®à°¿à°¤à°¿ à°‡à°µà±à°µà°‚à°¡à°¿.',
	'regexblock-nodata-found' => 'à°­à±‹à°—à°Ÿà±à°Ÿà°¾ à°à°®à±€ à°¦à±Šà°°à°•à°²à±‡à°¦à±',
	'regexblock-unblock-success' => 'à°¨à°¿à°°à±‹à°§à°ªà± à°Žà°¤à±à°¤à°¿à°µà±‡à°¤ à°µà°¿à°œà°¯à°µà°‚à°¤à°®à±ˆà°‚à°¦à°¿',
	'regexblock-unblock-log' => "'''$1''' à°…à°¨à±‡ à°µà°¾à°¡à±à°•à°°à°¿ à°ªà±‡à°°à± à°²à±‡à°¦à°¾ à°à°ªà±€ à°šà°¿à°°à±à°¨à°¾à°®à°¾à°ªà±ˆ à°¨à°¿à°°à±‹à°§à°‚ à°Žà°¤à±à°¤à°¿à°µà±‡à°¸à°¾à°°à±.",
	'regexblock-view-all' => 'à°…à°¨à±à°¨à±€',
	'regexblock-view-go' => 'à°µà±†à°³à±à°³à±',
	'regexblock-view-account' => '(à°–à°¾à°¤à°¾ à°¸à±ƒà°·à±à°Ÿà°¿à°‚à°ªà± à°¨à°¿à°°à±‹à°§à°‚)',
	'regexblock-view-reason' => 'à°•à°¾à°°à°£à°‚: $1',
	'regexblock-view-reason-default' => 'à°¸à°¾à°§à°¾à°°à°£ à°•à°¾à°°à°£à°‚',
	'regexblock-view-block-infinite' => 'à°¶à°¾à°¶à±à°µà°¤ à°¨à°¿à°°à±‹à°§à°‚',
	'regexblock-view-block-by' => 'à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà°¿à°¨à°¦à°¿:',
	'regexblock-view-block-unblock' => 'à°¨à°¿à°°à±‹à°§à°‚ à°Žà°¤à±à°¤à°¿à°µà±‡à°¯à°‚à°¡à°¿',
	'regexblock-view-stats' => 'à°—à°£à°¾à°‚à°•à°¾à°²à±',
	'regexblock-view-empty' => 'à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà°¿à°¨ à°ªà±‡à°°à±à°²à± à°®à°°à°¿à°¯à± à°šà°¿à°°à±à°¨à°¾à°®à°¾à°² à°œà°¾à°¬à°¿à°¤à°¾ à°–à°¾à°³à±€à°—à°¾ à°‰à°‚à°¦à°¿.',
	'regexblock-view-time' => '$1 à°¨à°¾à°¡à±',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'regexblock-form-reason' => 'Motivu:',
	'regexblock-view-all' => 'Hotu',
	'regexblock-view-go' => 'BÃ¡',
	'regexblock-view-reason' => 'motivu: $1',
);

/** Tajik (Cyrillic script) (Ñ‚Ð¾Ò·Ð¸ÐºÓ£)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'regexblock-already-blocked' => '"$1" Ð°Ð»Ð»Ð°ÐºÐ°Ð¹ Ð±Ð°ÑÑ‚Ð° ÑˆÑƒÐ´Ð°Ð°ÑÑ‚.',
	'regexblock-block-log' => "ÐÐ¾Ð¼Ð¸ ÐºÐ¾Ñ€Ð±Ð°Ñ€Ó£ Ñ‘ Ð½Ð¸ÑˆÐ¾Ð½Ð°Ð¸ '''$1''' Ð±Ð°ÑÑ‚Ð° ÑˆÑƒÐ´.",
	'regexblock-block-success' => 'Ð‘Ð°ÑÑ‚Ð°Ð½ Ð¼ÑƒÐ²Ð°Ñ„Ñ„Ð°Ò› ÑˆÑƒÐ´',
	'regexblock-currently-blocked' => 'ÐÐ¸ÑˆÐ¾Ð½Ð°Ò³Ð¾Ð¸ Ð±Ð°ÑÑ‚Ð°ÑˆÑƒÐ´Ð°Ð¸ ÐºÑƒÐ½ÑƒÐ½Ó£:',
	'regexblock-form-username' => 'ÐÐ¸ÑˆÐ¾Ð½Ð°Ð¸ IP Ñ‘ Ð½Ð¾Ð¼Ð¸ ÐºÐ¾Ñ€Ð±Ð°Ñ€Ó£:',
	'regexblock-form-reason' => 'Ð”Ð°Ð»ÐµÐ»:',
	'regexblock-form-match' => 'ÐœÑƒÑ‚Ð¾Ð±Ð¸Ò›Ð°Ñ‚Ð¸ Ð´Ð°Ò›Ð¸Ò›',
	'regexblock-form-account-block' => 'Ð­Ò·Ð¾Ð´Ð¸ Ð±Ð°ÑÑ‚Ð°Ð½Ð¸ Ò³Ð¸ÑÐ¾Ð±Ò³Ð¾Ð¸ Ò·Ð°Ð´Ð¸Ð´',
	'regexblock-form-submit' => 'Ð‘Ð°ÑÑ‚Ð°Ð½Ð¸ Ð¸Ð½ ÐšÐ¾Ñ€Ð±Ð°Ñ€',
	'regexblock-form-submit-empty' => 'Ð‘Ð°Ñ€Ð¾Ð¸ Ð±Ð°ÑÑ‚Ð°Ð½ Ð½Ð¾Ð¼Ð¸ ÐºÐ¾Ñ€Ð±Ð°Ñ€Ó£ Ñ‘ Ð½Ð¸ÑˆÐ¾Ð½Ð°Ð¸ IP Ð´Ð¸Ò³ÐµÐ´.',
	'regexblock-form-submit-regex' => 'Ð˜Ð±Ð¾Ñ€Ð°Ð¸ Ð¾Ð´Ð´Ð¸Ð¸ Ð½Ð¾Ð¼Ó¯ÑŠÑ‚Ð°Ð±Ð°Ñ€.',
	'regexblock-form-submit-expiry' => 'Ð›ÑƒÑ‚Ñ„Ð°Ð½ Ð´Ð°Ð²Ñ€Ð°Ð¸ Ð±Ð° Ñ…Ð¾Ñ‚Ð¸Ð¼Ð°Ñ€Ð°ÑÐ¸Ñ€Ð¾ Ð¼ÑƒÑˆÐ°Ñ…Ñ…Ð°Ñ ÐºÑƒÐ½ÐµÐ´.',
	'regexblock-stats-title' => 'ÐžÐ¼Ð¾Ñ€Ð¸ Ð‘Ð°ÑÑ‚Ð°Ð½Ð¸ Regex',
	'regexblock-unblock-success' => 'Ð‘Ð¾Ð· ÐºÐ°Ñ€Ð´Ð°Ð½ Ð°Ð· Ð±Ð°ÑÑ‚Ð°Ð½ Ð¼ÑƒÐ²Ð°Ñ„Ñ„Ð°Ò› ÑˆÑƒÐ´',
	'regexblock-unblock-log' => "ÐÐ¾Ð¼Ð¸ ÐºÐ¾Ñ€Ð±Ð°Ñ€Ó£ Ñ‘ Ð½Ð¸ÑˆÐ¾Ð½Ð°Ð¸ IP '''$1''' Ð°Ð· Ð±Ð°ÑÑ‚Ð°Ð½ Ð±Ð¾Ð· ÑˆÑƒÐ´.",
	'regexblock-unblock-error' => 'Ð¥Ð°Ñ‚Ð¾ Ð´Ð°Ñ€ Ð±Ð¾Ð· ÐºÐ°Ñ€Ð´Ð°Ð½Ð¸ $1.
Ð­Ò³Ñ‚Ð¸Ð¼Ð¾Ð»Ð°Ð½ Ñ‡ÑƒÐ½Ð¸Ð½ ÐºÐ¾Ñ€Ð±Ð°Ñ€Ðµ Ð½ÐµÑÑ‚.',
	'regexblock-view-all' => 'Ò²Ð°Ð¼Ð°',
	'regexblock-view-go' => 'Ð‘Ð¸Ñ€Ð°Ð²',
	'regexblock-view-match' => '(Ð¼ÑƒÑ‚Ð¾Ð±Ð¸Ò›Ð°Ñ‚Ð¸ Ð´Ð°Ò›Ð¸Ò›)',
	'regexblock-view-account' => '(Ð±Ð°ÑÑ‚Ð°Ð½Ð¸ ÑÒ·Ð¾Ð´Ð¸ Ò³Ð¸ÑÐ¾Ð±Ð¸ Ò·Ð°Ð´Ð¸Ð´)',
	'regexblock-view-reason' => 'Ð´Ð°Ð»ÐµÐ»: $1',
	'regexblock-view-reason-default' => 'Ð´Ð°Ð»ÐµÐ»Ð¸ ÑƒÐ¼ÑƒÐ¼Ó£',
	'regexblock-view-block-infinite' => 'Ð±Ð°ÑÑ‚Ð°Ð½Ð¸ Ð´Ð¾Ð¸Ð¼Ó£',
	'regexblock-view-block-by' => 'Ð±Ð°ÑÑ‚Ð° ÑˆÑƒÐ´ Ñ‚Ð°Ð²Ð°ÑÑÑƒÑ‚Ð¸',
	'regexblock-view-block-unblock' => 'Ð±Ð¾Ð· ÐºÐ°Ñ€Ð´Ð°Ð½',
	'regexblock-view-stats' => 'Ð¾Ð¼Ð¾Ñ€',
	'regexblock-view-empty' => 'Ð¤ÐµÒ³Ñ€Ð¸ÑÑ‚Ð¸ Ð½Ð¾Ð¼Ò³Ð¾ Ð²Ð° Ð½Ð¸ÑˆÐ¾Ð½Ð°Ò³Ð¾Ð¸ Ð±Ð°ÑÑ‚Ð° ÑˆÑƒÐ´Ð° Ñ…Ð¾Ð»Ó£ Ð°ÑÑ‚.',
	'regexblock-view-time' => 'Ð´Ð°Ñ€ $1',
);

/** Tajik (Latin script) (tojikÄ«)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'regexblock-already-blocked' => '"$1" allakaj basta ÅŸudaast.',
	'regexblock-block-log' => "Nomi korbarÄ« jo niÅŸonai '''$1''' basta ÅŸud.",
	'regexblock-block-success' => 'Bastan muvaffaq ÅŸud',
	'regexblock-currently-blocked' => 'NiÅŸonahoi bastaÅŸudai kununÄ«:',
	'regexblock-form-username' => 'NiÅŸonai IP jo nomi korbarÄ«:',
	'regexblock-form-reason' => 'Dalel:',
	'regexblock-form-match' => 'Mutobiqati daqiq',
	'regexblock-form-account-block' => 'EÃ§odi bastani hisobhoi Ã§adid',
	'regexblock-form-submit' => 'Bastani in Korbar',
	'regexblock-form-submit-empty' => 'Baroi bastan nomi korbarÄ« jo niÅŸonai IP dihed.',
	'regexblock-form-submit-regex' => "Iborai oddiji nomÅ«'tabar.",
	'regexblock-form-submit-expiry' => 'Lutfan davrai ba xotimarasiro muÅŸaxxas kuned.',
	'regexblock-stats-title' => 'Omori Bastani Regex',
	'regexblock-unblock-success' => 'Boz kardan az bastan muvaffaq ÅŸud',
	'regexblock-unblock-log' => "Nomi korbarÄ« jo niÅŸonai IP '''$1''' az bastan boz ÅŸud.",
	'regexblock-unblock-error' => 'Xato dar boz kardani $1.
Ehtimolan cunin korbare nest.',
	'regexblock-view-all' => 'Hama',
	'regexblock-view-go' => 'Birav',
	'regexblock-view-match' => '(mutobiqati daqiq)',
	'regexblock-view-account' => '(bastani eÃ§odi hisobi Ã§adid)',
	'regexblock-view-reason' => 'dalel: $1',
	'regexblock-view-reason-default' => 'daleli umumÄ«',
	'regexblock-view-block-infinite' => 'bastani doimÄ«',
	'regexblock-view-block-unblock' => 'boz kardan',
	'regexblock-view-stats' => 'omor',
	'regexblock-view-empty' => 'Fehristi nomho va niÅŸonahoi basta ÅŸuda xolÄ« ast.',
	'regexblock-view-time' => 'dar $1',
);

/** Thai (à¹„à¸—à¸¢)
 * @author Octahedron80
 */
$messages['th'] = array(
	'regexblock-expire-duration' => '1 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡,2 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡,4 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡,6 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡,1 à¸§à¸±à¸™,3 à¸§à¸±à¸™,1 à¸ªà¸±à¸›à¸”à¸²à¸«à¹Œ,2 à¸ªà¸±à¸›à¸”à¸²à¸«à¹Œ,1 à¹€à¸”à¸·à¸­à¸™,3 à¹€à¸”à¸·à¸­à¸™,6 à¹€à¸”à¸·à¸­à¸™,1 à¸›à¸µ,à¸•à¸¥à¸­à¸”à¸à¸²à¸¥',
	'regexblock-form-reason' => 'à¹€à¸«à¸•à¸¸à¸œà¸¥:',
	'regexblock-view-all' => 'à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”',
);

/** Turkmen (TÃ¼rkmenÃ§e)
 * @author Hanberke
 */
$messages['tk'] = array(
	'regexblock-view-all' => 'Ã„hlisi',
	'regexblock-view-go' => 'Git',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'regexblock' => 'Paghadlang na pangpangkaraniwang pagsasaad',
	'regexblock-already-blocked' => 'Hinadlangan na si $1.',
	'regexblock-block-log' => "Hinadlangan na ang pangalan ng tagagamit o adres ng IP na '''$1'''.",
	'regexblock-block-success' => 'Nagtagumpay ang paghadlang',
	'regexblock-currently-blocked' => 'Pangkalasalukuyang hinahadlangang mga adres:',
	'regexblock-desc' => 'Karugtong na ginagamit para sa paghahadlang ng mga pangalan ng mga tagagamit at mga adres ng IP sa pamamagitan ng pangkaraniwang mga pagsasaad.  Naglalaman ng kapwa mekanismong panghadlang at isang [[Special:Regexblock|natatanging pahina]] upang makapagdagdag/makapamahala ng mga paghahadlang.',
	'regexblock-expire-duration' => '1 oras,2 oras,4 na oras,6 na oras,1 araw,3 mga araw,1 linggo,2 linggo,1 buwan,3 buwan,6 na buwan,1 taon,walang hanggan',
	'regexblock-page-title' => 'Paghadlang sa pangalan ng pangkaraniwang pagsasaad',
	'regexblockstats' => 'Mga estadistika ng paghadlang na pangpangkaraniwang pagsasaad',
	'regexblock-help' => 'Gamitin ang pormularyo sa ibaba upang mahadlangan ang pagpuntang makapagsusulat mula sa isang partikular na adres ng IP o pangalan ng tagagamit.  
Dapat na gawin lamang ito upang maiwasan ang bandalismo/pambababoy, at alinsunod sa patakaran.
\'\'Magpapahintulot ang pahina ito upang mahadlangang mo kahit ang hindi umiiral na mga tagagamit, at haharangan din ang mga tagagamit na may mga pangalan katulad ng ibinigay, halimbawa na ang "Subok" na mahahadlangang kasama ng "Subok 2" atbp.
Maaari mo ring hadlangan ang buong adres ng IP, na may ibig sabihing walang sinumang lalagda mula sa mga ito ang magkakaroon ng kakayanang makapagbago ng mga pahina.
Paunawa: ang hindi buong mga adres ng IP ay tatratuhin ayon sa mga pangalan ng tagagamit para sa pagtukoy ng paghahadlang.
Kapag walang dahilang tinukoy, isang likas na nakatakdang panglahatan dahil ang gagamitin.\'\'',
	'regexblock-page-title-1' => 'Hadlangan ang adres sa pamamagitan ng paggamit ng pangkaraniwang mga pagsasaad',
	'regexblock-reason-ip' => 'Ang adres ng IP na ito ay pinagbawalan sa paggawa ng pagbabago dahil sa pambababoy o iba pang pang-aabala mo o ng isang nakikisalo sa iyong adres ng IP.
Kung naniniwala kang isa itong kamalian, paki [[$1|makipag-ugnayan sa amin]]',
	'regexblock-reason-name' => 'Ang pangalan ng tagagamit na ito ay pinagbawalan sa paggawa ng pagbabago dahil sa pambababoy o iba pang pang-aabala.
Kung naniniwala kang isa itong kamalian, paki [[$1|makipag-ugnayan sa amin]]',
	'regexblock-reason-regex' => 'Ang pangalan ng tagagamit na ito ay pinagbawalan sa paggawa ng pagbabago dahil sa pambababoy o iba pang pang-aabala ng isang tagagamit na may kahawig na pangalan.
Pakilikha ang isang kapalit na pangalan ng tagagamit o [[$1|makipag-ugnayan sa amin]] hinggil sa suliranin',
	'regexblock-form-username' => 'Adres ng IP o pangalan ng tagagamit:',
	'regexblock-form-reason' => 'Dahilan:',
	'regexblock-form-expiry' => 'Katapusan:',
	'regexblock-form-match' => 'Tugmang-tugma',
	'regexblock-form-account-block' => 'Hadlangan ang paglikha ng bagong mga kuwenta',
	'regexblock-form-submit' => 'Hadlangan ang tagagamit na ito',
	'regexblock-form-submit-empty' => 'Magbigay ng isang pangalan ng tagagamit o isang adres ng IP na hahadlangan.',
	'regexblock-form-submit-regex' => 'Hindi tanggap na pangkaraniwang pagsasaad.',
	'regexblock-form-submit-expiry' => 'Pakitukoy ang isang panahon ng pagtatapos.',
	'regexblock-link' => 'hadlangan na may karaniwang pananalita',
	'regexblock-match-stats-record' => "Hinadlangan ni $1 sa '$2' noong '$3' sa '$4', lumalagda mula sa adres na '$5'",
	'regexblock-nodata-found' => 'Walang natagpuang dato',
	'regexblock-stats-title' => 'Mga estadistika ng paghadlang sa pangkaraniwang pagsasaad',
	'regexblock-unblock-success' => 'Nagtagumpay ang pagtanggal ng hadlang',
	'regexblock-unblock-log' => "Tinanggal na ang pagkakahadlang sa pangalan ng tagagamit o adres ng IP na '''$1'''.",
	'regexblock-unblock-error' => 'Kamalian sa pagtatanggal ng hadlang kay $1.
Marahal ay walang ganyang tagagamit.',
	'regexblock-regex-filter' => '  o halaga ng pangkaraniwang pagsasaad:',
	'regexblock-view-blocked' => 'Tingnan ang hinadlangan ni:',
	'regexblock-view-all' => 'Lahat',
	'regexblock-view-go' => 'Gawin na',
	'regexblock-view-match' => '(tugmang-tugma)',
	'regexblock-view-regex' => '(tugma sa pangkaraniwang pagsasaad)',
	'regexblock-view-account' => '(paghadlang sa paglikha ng kuwenta)',
	'regexblock-view-reason' => 'dahilan: $1',
	'regexblock-view-reason-default' => 'pangkalahatang dahilan',
	'regexblock-view-block-infinite' => 'pamalagiang paghadlang',
	'regexblock-view-block-by' => 'hinadlangan ni:',
	'regexblock-view-block-unblock' => 'tanggalin sa pagkakahadlang',
	'regexblock-view-stats' => 'mga estadistika',
	'regexblock-view-empty' => 'Walang laman ang talaan ng hinadlangang mga pangalan at mga adres.',
	'regexblock-view-time' => 'noong $1',
	'right-regexblock' => 'Hadlangan ang mga tagagamit na makagawa ng mga pagbabago sa lahat ng mga wiki na nasa linangan ("bukid") ng wiki',
);

/** Ñ‚Ð¾Ð»Ñ‹ÑˆÓ™ Ð·Ñ‹Ð²Ð¾Ð½ (Ñ‚Ð¾Ð»Ñ‹ÑˆÓ™ Ð·Ñ‹Ð²Ð¾Ð½)
 * @author Erdemaslancan
 */
$messages['tly'] = array(
	'regexblock-view-go' => 'Ð”Ð°Ð²Ð°Ñ€Ð´',
);

/** Turkish (TÃ¼rkÃ§e)
 * @author Karduelis
 * @author Suelnur
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'regexblock' => 'Regex bloÄŸu',
	'regexblock-block-success' => 'Engel baÅŸarÄ±lÄ±',
	'regexblock-currently-blocked' => 'HalihazÄ±rda engellenmiÅŸ olan adresler:',
	'regexblock-page-title' => 'KurallÄ± ifade ad engeli',
	'regexblockstats' => 'Regex blok istatistikleri',
	'regexblock-form-username' => 'IP adresi veya kullanÄ±cÄ± adÄ±:',
	'regexblock-form-reason' => 'Neden:',
	'regexblock-form-expiry' => 'BitiÅŸ tarihi:',
	'regexblock-form-match' => 'Tam eÅŸleÅŸme',
	'regexblock-form-account-block' => 'Yeni hesap oluÅŸturulmasÄ±nÄ± engelle',
	'regexblock-form-submit' => 'Bu kullanÄ±cÄ±yÄ± engelle',
	'regexblock-form-submit-regex' => 'GeÃ§ersiz kurallÄ± ifade',
	'regexblock-form-submit-expiry' => 'LÃ¼tfen bir bitiÅŸ sÃ¼resi belirtin.',
	'regexblock-unblock-success' => 'Engel kaldÄ±rma baÅŸarÄ±sÄ±z oldu',
	'regexblock-view-all' => 'Hepsi',
	'regexblock-view-go' => 'Git',
	'regexblock-view-match' => '(tam eÅŸleÅŸme)',
	'regexblock-view-regex' => '(regex eÅŸleÅŸmesi)',
	'regexblock-view-reason' => 'gerekÃ§e: $1',
	'regexblock-view-reason-default' => 'genel neden',
	'regexblock-view-block-infinite' => 'sÃ¼resiz engel',
	'regexblock-view-block-by' => 'engelleyen:',
	'regexblock-view-block-unblock' => 'engeli kaldÄ±r',
	'regexblock-view-empty' => 'EngellenmiÅŸ ad ve adres listesi boÅŸ.',
);

/** Uyghur (Arabic script) (Ø¦Û‡ÙŠØºÛ‡Ø±Ú†Û•)
 * @author Alfredie
 */
$messages['ug-arab'] = array(
	'regexblock-view-go' => 'ÙƒÛ†Ú†ÛˆØ´',
);

/** Uyghur (Latin script) (Uyghurche)
 * @author Jose77
 */
$messages['ug-latn'] = array(
	'regexblock-view-go' => 'KÃ¶chÃ¼sh',
);

/** Ukrainian (ÑƒÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°)
 * @author Prima klasy4na
 * @author Ð¢ÐµÑÑ‚
 */
$messages['uk'] = array(
	'regexblock-already-blocked' => '$1 Ð²Ð¶Ðµ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¾Ð²Ð°Ð½Ð¸Ð¹.',
	'regexblock-form-username' => "IP-Ð°Ð´Ñ€ÐµÑÐ° Ð°Ð±Ð¾ Ñ–Ð¼'Ñ ÐºÐ¾Ñ€Ð¸ÑÑ‚ÑƒÐ²Ð°Ñ‡Ð°:",
	'regexblock-form-reason' => 'ÐŸÑ€Ð¸Ñ‡Ð¸Ð½Ð°:',
	'regexblock-form-expiry' => 'Ð—Ð°ÐºÑ–Ð½Ñ‡ÐµÐ½Ð½Ñ:',
	'regexblock-view-all' => 'Ð£ÑÑ–',
);

/** Urdu (Ø§Ø±Ø¯Ùˆ)
 * @author à¶´à·ƒà·’à¶³à·” à¶šà·à·€à·’à¶±à·Šà¶¯
 */
$messages['ur'] = array(
	'regexblock-form-reason' => 'ÙˆØ¬Û:',
	'regexblock-form-expiry' => 'Ø®ØªÙ…:',
	'regexblock-form-match' => 'Ø¹ÛŒÙ† Ù…Ø·Ø§Ø¨Ù‚ Ù…ÛŒÚ†',
	'regexblock-form-submit' => 'ÛŒÛ Ø¨Ù„Ø§Ú©',
	'regexblock-view-all' => 'Ø³Ø¨',
	'regexblock-view-go' => 'Ø¬Ø§Ù†Ø§',
);

/** Veps (vepsÃ¤n kelâ€™)
 * @author Ð˜Ð³Ð¾Ñ€ÑŒ Ð‘Ñ€Ð¾Ð´ÑÐºÐ¸Ð¹
 */
$messages['vep'] = array(
	'regexblock-form-reason' => 'SÃ¼:',
	'regexblock-view-all' => 'Kaik',
	'regexblock-view-stats' => 'statistik',
);

/** Vietnamese (Tiáº¿ng Viá»‡t)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'regexblock' => 'Cáº¥m báº±ng biá»ƒu thá»©c chÃ­nh quy',
	'regexblock-already-blocked' => 'â€œ$1â€ Ä‘Ã£ bá»‹ cáº¥m rá»“i.',
	'regexblock-block-log' => "TÃªn ngÆ°á»i dÃ¹ng hoáº·c Ä‘á»‹a chá»‰ IP '''$1''' Ä‘Ã£ bá»‹ cáº¥m.",
	'regexblock-block-success' => 'Cáº¥m thÃ nh cÃ´ng',
	'regexblock-currently-blocked' => 'CÃ¡c Ä‘á»‹a chá»‰ hiá»‡n Ä‘ang bá»‹ cáº¥m:',
	'regexblock-desc' => 'Pháº§n má»Ÿ rá»™ng dÃ¹ng Ä‘á»ƒ cáº¥m nhá»¯ng tÃªn ngÆ°á»i dÃ¹ng vÃ  Ä‘á»‹a chá»‰ IP báº±ng biá»ƒu thá»©c chÃ­nh quy. CÃ³ cáº£ cÆ¡ cháº¿ cáº¥m vÃ  má»™t [[Special:Regexblock|trang Ä‘áº·c biá»‡t]] Ä‘á»ƒ thÃªm/quáº£n lÃ½ viá»‡c cáº¥m',
	'regexblock-expire-duration' => '1 tiáº¿ng,2 tiáº¿ng,4 tiáº¿ng,6 tiáº¿ng,1 ngÃ y,3 ngÃ y,1 tuáº§n,2 tuáº§n,1 thÃ¡ng,3 thÃ¡ng,6 thÃ¡ng,1 nÄƒm,vÃ´ háº¡n',
	'regexblock-page-title' => 'Cáº¥m tÃªn theo Biá»ƒu thá»©c chÃ­nh quy',
	'regexblockstats' => 'Thá»‘ng kÃª cáº¥m Regex',
	'regexblock-help' => "HÃ£y dÃ¹ng máº«u dÆ°á»›i Ä‘Ã¢y Ä‘á»ƒ cáº¥m quyá»n viáº¿t bÃ i cá»§a má»™t Ä‘á»‹a chá»‰ IP hoáº·c tÃªn ngÆ°á»i dÃ¹ng cá»¥ thá»ƒ.
Äiá»u nÃ y chá»‰ nÃªn thá»±c hiá»‡n Ä‘á»ƒ ngÄƒn cháº·n phÃ¡ hoáº¡i, vÃ  theo Ä‘Ãºng vá»›i quy Ä‘á»‹nh.
''Trang nÃ y sáº½ cho phÃ©p báº¡n tháº­m chÃ­ cáº¥m cáº£ nhá»¯ng thÃ nh viÃªn khÃ´ng tá»“n táº¡i, vÃ  cÅ©ng sáº½ cáº¥m nhá»¯ng thÃ nh viÃªn cÃ³ tÃªn tÆ°Æ¡ng tá»± vá»›i tÃªn Ä‘Æ°a ra, nghÄ©a lÃ  Â« Test Â» sáº½ bá»‹ cáº¥m cÃ¹ng vá»›i Â« Test 2 Â» v.v.
Báº¡n cÅ©ng cÃ³ thá»ƒ cáº¥m cÃ¡c dáº£i Ä‘á»‹a chá»‰ IP Ä‘áº§y Ä‘á»§, nghÄ©a lÃ  khÃ´ng ai Ä‘Äƒng nháº­p tá»« cÃ¡c IP Ä‘Ã³ cÃ³ thá»ƒ thá»±c hiá»‡n sá»­a Ä‘á»•i trang.
ChÃº Ã½: cÃ¡c Ä‘á»‹a chá»‰ IP bÃ¡n pháº§n sáº½ Ä‘Æ°á»£c Ä‘á»‘i xá»­ nhÆ° tÃªn ngÆ°á»i dÃ¹ng trong viá»‡c xÃ¡c Ä‘á»‹nh cáº¥m.
Náº¿u khÃ´ng Ä‘Æ°a ra lÃ½ do gÃ¬, má»™t lÃ½ do chung chung máº·c Ä‘á»‹nh sáº½ Ä‘Æ°á»£c sá»­ dá»¥ng.''",
	'regexblock-page-title-1' => 'Cáº¥m Ä‘á»‹a chá»‰ sá»­ dá»¥ng biá»ƒu thá»©c chÃ­nh quy',
	'regexblock-reason-ip' => 'Äá»‹a chá»‰ IP nÃ y bá»‹ cháº·n khÃ´ng Ä‘Æ°á»£c sá»­a Ä‘á»•i do phÃ¡ hoáº¡i hoáº·c vi pháº¡m cá»§a báº¡n hoáº·c bá»Ÿi ai Ä‘Ã³ dÃ¹ng chung Ä‘á»‹a chá»‰ IP vá»›i báº¡n.
Náº¿u báº¡n tin ráº±ng Ä‘Ã¢y lÃ  nháº§m láº«n, xin hÃ£y [[$1|liÃªn láº¡c vá»›i chÃºng tÃ´i]].',
	'regexblock-reason-name' => 'TÃªn ngÆ°á»i dÃ¹ng nÃ y bá»‹ cháº·n khÃ´ng Ä‘Æ°á»£c sá»­a Ä‘á»•i do phÃ¡ hoáº¡i hoáº·c hÃ nh vi vi pháº¡m khÃ¡c.
Náº¿u báº¡n tin ráº±ng Ä‘Ã¢y lÃ  nháº§m láº«n, xin hÃ£y [[$1|liÃªn láº¡c vá»›i chÃºng tÃ´i]].',
	'regexblock-reason-regex' => 'TÃªn ngÆ°á»i dÃ¹ng nÃ y bá»‹ cháº·n khÃ´ng Ä‘Æ°á»£c sá»­a Ä‘á»•i do phÃ¡ hoáº¡i hoáº·c hÃ nh vi vi pháº¡m khÃ¡c cá»§a má»™t thÃ nh viÃªn cÃ³ tÃªn tÆ°Æ¡ng tá»± nhÆ° tháº¿ nÃ y.
Xin hÃ£y táº¡o má»™t tÃªn ngÆ°á»i dÃ¹ng thay tháº¿ hoáº·c [[$1|liÃªn láº¡c vá»›i chÃºng tÃ´i]] vá» váº¥n Ä‘á» nÃ y.',
	'regexblock-form-username' => 'Äá»‹a chá»‰ IP hoáº·c tÃªn ngÆ°á»i dÃ¹ng:',
	'regexblock-form-reason' => 'LÃ½ do:',
	'regexblock-form-expiry' => 'Thá»i háº¡n:',
	'regexblock-form-match' => 'Khá»›p chÃ­nh xÃ¡c',
	'regexblock-form-account-block' => 'Cáº¥m má»Ÿ tÃ i khoáº£n má»›i',
	'regexblock-form-submit' => 'Cáº¥m ngÆ°á»i dÃ¹ng nÃ y',
	'regexblock-form-submit-empty' => 'Cung cáº¥p má»™t tÃªn ngÆ°á»i dÃ¹ng hoáº·c má»™t Ä‘á»‹a chá»‰ IP Ä‘á»ƒ cáº¥m.',
	'regexblock-form-submit-regex' => 'Biá»ƒu thá»©c chÃ­nh quy khÃ´ng há»£p lá»‡.',
	'regexblock-form-submit-expiry' => 'Xin xÃ¡c Ä‘á»‹nh thá»i háº¡n cáº¥m.',
	'regexblock-link' => 'cáº¥m dÃ¹ng biá»ƒu thá»©c chÃ­nh quy',
	'regexblock-match-stats-record' => '$1 Ä‘Ã£ cáº¥m â€œ$2â€ táº¡i â€œ$3â€ ngÃ y $4, Ä‘á»‹a chá»‰ IP lÃ  $5',
	'regexblock-nodata-found' => 'KhÃ´ng tÃ¬m tháº¥y dá»¯ liá»‡u',
	'regexblock-stats-title' => 'Thá»‘ng kÃª cáº¥m regex',
	'regexblock-unblock-success' => 'Bá» cáº¥m thÃ nh cÃ´ng',
	'regexblock-unblock-log' => "TÃªn ngÆ°á»i dÃ¹ng hoáº·c Ä‘á»‹a chá»‰ IP '''$1''' Ä‘Ã£ Ä‘Æ°á»£c bá» cáº¥m.",
	'regexblock-unblock-error' => 'Lá»—i khi bá» cáº¥m $1.
CÃ³ thá»ƒ khÃ´ng cÃ³ thÃ nh viÃªn nÃ o nhÆ° váº­y.',
	'regexblock-regex-filter' => '  hoáº·c biá»ƒu thá»©c chÃ­nh quy:',
	'regexblock-view-blocked' => 'Xem nhá»¯ng láº§n cáº¥m do:',
	'regexblock-view-all' => 'Táº¥t cáº£',
	'regexblock-view-go' => 'Xem',
	'regexblock-view-match' => '(khá»›p chÃ­nh xÃ¡c)',
	'regexblock-view-regex' => '(khá»›p chÃ­nh xÃ¡c)',
	'regexblock-view-account' => '(cáº¥m má»Ÿ tÃ i khoáº£n)',
	'regexblock-view-reason' => 'lÃ½ do: $1',
	'regexblock-view-reason-default' => 'lÃ½ do chung chung',
	'regexblock-view-block-infinite' => 'cáº¥m vÄ©nh viá»…n',
	'regexblock-view-block-by' => 'bá»‹ cáº¥m bá»Ÿi:',
	'regexblock-view-block-unblock' => 'bá» cáº¥m',
	'regexblock-view-stats' => 'thá»‘ng kÃª',
	'regexblock-view-empty' => 'Danh sÃ¡ch cÃ¡c tÃªn vÃ  Ä‘á»‹a chá»‰ bá»‹ cáº¥m Ä‘ang trá»‘ng.',
	'regexblock-view-time' => 'vÃ o $1',
	'right-regexblock' => 'Cáº¥m ngÆ°á»i dÃ¹ng khÃ´ng Ä‘Æ°á»£c sá»­a Ä‘á»•i táº¡i wiki nÃ o trong máº¡ng wiki',
);

/** VolapÃ¼k (VolapÃ¼k)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'regexblock-already-blocked' => '$1 ya peblokon.',
	'regexblock-block-log' => "Gebananem/Ladet-IP: '''$1''' peblokon.",
	'regexblock-block-success' => 'Blokam eplÃ¶pon',
	'regexblock-currently-blocked' => 'Ladets-IP peblokÃ¶l:',
	'regexblock-expire-duration' => 'dÃ¼p 1,dÃ¼ps 2,dÃ¼ps 4,dÃ¼ps 6,del 1,dels 3,vig 1,vigs 2,mul 1,muls 3,muls 6,yel 1,nenfinik',
	'regexblock-form-username' => 'Ladet-IP u gebananem:',
	'regexblock-form-reason' => 'Kod:',
	'regexblock-form-expiry' => 'Dul jÃ¼:',
	'regexblock-form-account-block' => 'BlokÃ¶n jafami kalas nulik',
	'regexblock-form-submit' => 'BlokÃ¶n gebani at',
	'regexblock-form-submit-empty' => 'PenolÃ¶s gebananemi u ladeti-IP ad blokÃ¶n.',
	'regexblock-match-stats-record' => 'Geban: $1 Ã¤blokon eli â€ž$2â€œ su â€ž$3â€œ tÃ¼ â€ž$4â€œ, se ladet: â€ž$5â€œ',
	'regexblock-nodata-found' => 'NÃ¼nods nonik petuvons',
	'regexblock-unblock-success' => 'SÃ¤blokam eplÃ¶pon',
	'regexblock-unblock-log' => "Gebananem/Ladet-IP: '''$1''' pesÃ¤blokon.",
	'regexblock-view-all' => 'Valik',
	'regexblock-view-go' => 'LedunÃ¶n',
	'regexblock-view-reason' => 'kod: $1',
	'regexblock-view-block-infinite' => 'blokam laidÃ¼pik',
	'regexblock-view-block-by' => 'peblokon fa:',
	'regexblock-view-block-unblock' => 'sÃ¤blokÃ¶n',
	'regexblock-view-stats' => 'statits',
	'regexblock-view-empty' => 'Lised gebananemas e ladetas-IP peblokÃ¶las vagon.',
	'regexblock-view-time' => 'in $1',
	'right-regexblock' => 'BlokÃ¶n gebanis in vÃ¼ks valik vÃ¼kafarma',
);

/** Wu (å´è¯­) */
$messages['wuu'] = array(
	'regexblock-form-reason' => 'ç†ç”±ï¼š',
);

/** Yiddish (×™×™Ö´×“×™×©)
 * @author ×¤×•×™×œ×™×©×¢×¨
 */
$messages['yi'] = array(
	'regexblock-already-blocked' => '$1 ××™×– ×©×•×™×Ÿ ×‘×œ××§×™×¨×˜.',
	'regexblock-form-reason' => '××•×¨×–×Ö·×š:',
	'regexblock-form-expiry' => '××•×™×¡×œ××–:',
	'regexblock-view-all' => '×Ö·×œ×¢',
	'regexblock-view-go' => '×’×™×™×Ÿ',
);

/** Simplified Chinese (ä¸­æ–‡ï¼ˆç®€ä½“ï¼‰â€Ž)
 * @author Gzdavidwong
 * @author Liangent
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'regexblock-block-success' => 'å°ç¦æˆåŠŸ',
	'regexblock-expire-duration' => '1å°æ—¶ï¼Œ2å°æ—¶ï¼Œ4å°æ—¶ï¼Œ6å°æ—¶ï¼Œ1å¤©ï¼Œ3å¤©ï¼Œ1å‘¨ï¼Œ2å‘¨ï¼Œ1ä¸ªæœˆï¼Œ3ä¸ªæœˆï¼Œ6ä¸ªæœˆï¼Œ1å¹´ï¼Œæ— é™æœŸ',
	'regexblock-form-username' => 'IPåœ°å€æˆ–ç”¨æˆ·åï¼š',
	'regexblock-form-reason' => 'åŽŸå› ï¼š',
	'regexblock-form-expiry' => 'åˆ°æœŸæ—¥ï¼š',
	'regexblock-form-submit' => 'å°ç¦è¿™ä½ç”¨æˆ·',
	'regexblock-nodata-found' => 'æ‰¾ä¸åˆ°æ•°æ®',
	'regexblock-view-all' => 'å…¨éƒ¨',
	'regexblock-view-go' => 'æäº¤',
	'regexblock-view-reason' => 'åŽŸå› ï¼š$1',
	'regexblock-view-reason-default' => 'ä¸€èˆ¬åŽŸå› ',
	'regexblock-view-block-infinite' => 'æ°¸ä¹…å°ç¦',
	'regexblock-view-block-unblock' => 'è§£é™¤å°ç¦',
	'regexblock-view-stats' => 'ç»Ÿè®¡',
);

/** Traditional Chinese (ä¸­æ–‡ï¼ˆç¹é«”ï¼‰â€Ž)
 * @author Gzdavidwong
 * @author Mark85296341
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'regexblock-block-success' => 'å°ç¦æˆåŠŸ',
	'regexblock-expire-duration' => '1å°æ™‚ï¼Œ2å°æ™‚ï¼Œ4å°æ™‚ï¼Œ6å°æ™‚ï¼Œ1å¤©ï¼Œ3å¤©ï¼Œ1é€±ï¼Œ2é€±ï¼Œä¸€å€‹æœˆï¼Œä¸‰å€‹æœˆï¼Œå…­å€‹æœˆï¼Œä¸€å¹´ï¼Œæ°¸ä¹…',
	'regexblock-form-username' => 'IP ä½å€æˆ–ä½¿ç”¨è€…åç¨±ï¼š',
	'regexblock-form-reason' => 'åŽŸå› ï¼š',
	'regexblock-form-expiry' => 'åˆ°æœŸæ—¥ï¼š',
	'regexblock-form-submit' => 'å°ç¦è©²åä½¿ç”¨è€…',
	'regexblock-nodata-found' => 'æ‰¾ä¸åˆ°è³‡æ–™',
	'regexblock-view-all' => 'å…¨éƒ¨',
	'regexblock-view-go' => 'æäº¤',
	'regexblock-view-reason' => 'åŽŸå› ï¼š$1',
	'regexblock-view-reason-default' => 'ä¸€èˆ¬åŽŸå› ',
	'regexblock-view-block-infinite' => 'æ°¸ä¹…å°ç¦',
	'regexblock-view-block-unblock' => 'è§£é™¤ç¦å°',
	'regexblock-view-stats' => 'çµ±è¨ˆ',
);
