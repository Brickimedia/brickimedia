<?php
/**
* Internationalisation file for SpamRegex extension.
*
* @file
* @ingroup Extensions
*/

$messages = array();

/** English
* @author Bartek ÅapiÅ„ski
*/
$messages['en'] = array(
'spamregex' => 'Spam regex',
'spamregex-desc' => '[[Special:SpamRegex|Filter]] out unwanted phrases in edited pages, based on regular expressions',
'spamregex-error-unblocking' => 'Error unblocking "$1". Probably there is no such pattern.',
'spamregex-summary' => "The text was found in the page's summary.",
'spamregex-intro' => 'Use this form to effectively block expressions from saving into a page\'s text.
If the text contains the given expression, change would not be saved and an explanation will be displayed to user that tried to save the page.
Caution advised, expressions should not be too short or too common.',
'spamregex-page-title' => 'Spam regex unwanted expressions block',
'spamregex-currently-blocked' => "'''Currently blocked phrases:'''",
'spamregex-move' => 'The reason you entered contained a blocked phrase.',
'spamregex-no-currently-blocked' => "'''There are no blocked phrases.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 remove]) added by $5 on $6 at $7",
'spamregex-page-title-1' => 'Block phrase using regular expressions',
'spamregex-unblock-success' => 'Unblock succedeed',
'spamregex-unblock-message' => "Phrase '''$1''' has been unblocked from editing.",
'spamregex-page-title-2' => 'Block phrases from saving using regular expressions',
'spamregex-block-success' => 'Block succedeed',
'spamregex-block-message' => "Phrase '''$1''' has been blocked.",
'spamregex-warning-1' => 'Give a phrase to block.',
'spamregex-error-1' => 'Invalid regular expression.',
'spamregex-warning-2' => 'Please check at least one blocking mode.',
'spamregex-already-blocked' => '"$1" is already blocked',
'spamregex-phrase-block' => 'Phrase to block:',
'spamregex-phrase-block-text' => 'block phrase in page text',
'spamregex-phrase-block-summary' => 'block phrase in summary',
'spamregex-block-submit' => 'Block&nbsp;this&nbsp;phrase',
'spamregex-text' => '(Text)',
'spamregex-summary-log' => '(Summary)',
'right-spamregex' => 'Block spam phrases through [[Special:SpamRegex]]',
);

/** Message documentation (Message documentation)
* @author Jon Harald SÃ¸by
* @author Purodha
* @author Siebrand
* @author The Evil IP address
*/
$messages['qqq'] = array(
'spamregex-desc' => '{{desc}}',
'spamregex-log' => 'Parameters:
* $1 is spam text
* $2 is a description
* $3 is an unblock link
* $4 is the IP address to be unblocked
* $5 is a username
* $6 is a date
* $7 is a time',
'spamregex-already-blocked' => '{{Identical|$1 is already blocked}}',
'spamregex-text' => '{{Identical|Text}}',
'spamregex-summary-log' => '{{Identical|Summary}}',
'right-spamregex' => '{{doc-right|spamregex}}',
);

/** Niuean (ko e vagahau NiuÄ“)
* @author Jose77
*/
$messages['niu'] = array(
'spamregex-summary-log' => '(Fakakatoakatoa)',
);

/** Afrikaans (Afrikaans)
* @author Naudefj
* @author SPQRobin
*/
$messages['af'] = array(
'spamregex-already-blocked' => '"$1" is reeds geblok',
'spamregex-text' => '(Teks)',
'spamregex-summary-log' => '(Opsomming)',
);

/** Amharic (áŠ áˆ›áˆ­áŠ›)
* @author Codex Sinaiticus
*/
$messages['am'] = array(
'spamregex-text' => '(áŒ½áˆ•áˆá‰µ)',
);

/** Aragonese (aragonÃ©s)
* @author Juanpabl
*/
$messages['an'] = array(
'spamregex-already-blocked' => '"$1" ya yera bloqueyato',
);

/** Arabic (Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©)
* @author Meno25
* @author OsamaK
*/
$messages['ar'] = array(
'spamregex' => 'ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… Ù„Ø³Ø¨Ø§Ù…',
'spamregex-desc' => '[[Special:SpamRegex|Ù…ÙØ±Ø´Ù‘Ø­]] Ø§Ù„Ø¹Ø¨Ø§Ø±Ø§Øª ØºÙŠØ± Ø§Ù„Ù…Ø±ØºÙˆØ¨ ÙÙŠÙ‡Ø§ ÙÙŠ Ø§Ù„ØµÙØ­Ø§Øª Ø§Ù„Ù…Ø¹Ø¯Ù„Ø©ØŒ Ø¨Ø§Ù„Ø§Ø¹ØªÙ…Ø§Ø¯ Ø¹Ù„Ù‰ Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
'spamregex-error-unblocking' => 'Ø®Ø·Ø£ Ø±ÙØ¹ Ù…Ù†Ø¹ "$1". Ø¹Ù„Ù‰ Ø§Ù„Ø£Ø±Ø¬Ø­ Ù„Ø§ ÙŠÙˆØ¬Ø¯ Ù†Ù…Ø· ÙƒÙ‡Ø°Ø§.',
'spamregex-summary' => 'Ø§Ù„Ù†Øµ ØªÙ… Ø§Ù„Ø¹Ø«ÙˆØ± Ø¹Ù„ÙŠÙ‡ ÙÙŠ Ù…Ù„Ø®Øµ Ø§Ù„ØµÙØ­Ø©.',
'spamregex-intro' => 'Ø§Ø³ØªØ®Ø¯Ù… Ù‡Ø°Ù‡ Ø§Ù„Ø§Ø³ØªÙ…Ø§Ø±Ø© Ù„Ù…Ù†Ø¹ ØªØ¹Ø¨ÙŠØ±Ø§Øª Ù…Ù† Ø§Ù„Ø­ÙØ¸ ÙÙŠ Ù†Øµ ØµÙØ­Ø© Ø¨ÙƒÙØ§Ø¡Ø©.
Ù„Ùˆ Ø£Ù† Ø§Ù„Ù†Øµ ÙŠØ­ØªÙˆÙŠ Ø¹Ù„Ù‰ Ø§Ù„ØªØ¹Ø¨ÙŠØ± Ø§Ù„Ù…Ø¹Ø·Ù‰ØŒ Ù„Ù† ÙŠØªÙ… Ø­ÙØ¸ Ø§Ù„ØªØºÙŠÙŠØ± ÙˆØ³ÙŠØªÙ… Ø¹Ø±Ø¶ ØªÙØ³ÙŠØ± Ù„Ù„Ù…Ø³ØªØ®Ø¯Ù… Ø§Ù„Ø°ÙŠ Ø­Ø§ÙˆÙ„ Ø­ÙØ¸ Ø§Ù„ØµÙØ­Ø©.
ÙŠÙ†ØµØ­ Ø¨Ø§Ù„Ø­Ø°Ø±ØŒ Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª Ù„Ø§ ÙŠÙ†Ø¨ØºÙŠ Ø£Ù† ØªÙƒÙˆÙ† Ù‚ØµÙŠØ±Ø© Ø¬Ø¯Ø§ Ø£Ùˆ Ø´Ø§Ø¦Ø¹Ø© Ø¬Ø¯Ø§.',
'spamregex-page-title' => 'Ù…Ù†Ø¹ ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… Ù„Ø³Ø¨Ø§Ù… Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª ØºÙŠØ± Ø§Ù„Ù…Ø±ØºÙˆØ¨ ÙÙŠÙ‡Ø§',
'spamregex-currently-blocked' => "'''Ø§Ù„Ø¹Ø¨Ø§Ø±Ø§Øª Ø§Ù„Ù…Ù…Ù†ÙˆØ¹Ø© Ø­Ø§Ù„ÙŠØ§:'''",
'spamregex-move' => 'Ø§Ù„Ø³Ø¨Ø¨ Ø§Ù„Ø°ÙŠ Ø£Ø¯Ø®Ù„ØªÙ‡ ÙŠØ­ØªÙˆÙŠ Ø¹Ù„Ù‰ Ø¹Ø¨Ø§Ø±Ø© Ù…Ù…Ù†ÙˆØ¹Ø©.',
'spamregex-no-currently-blocked' => "'''Ù„Ø§ ØªÙˆØ¬Ø¯ Ø¹Ø¨Ø§Ø±Ø§Øª Ù…Ù…Ù†ÙˆØ¹Ø©.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 Ø¥Ø²Ø§Ù„Ø©]) Ø£Ø¶ÙŠÙ Ø¨ÙˆØ§Ø³Ø·Ø© $5 ÙÙŠ $6 Ø§Ù„Ø³Ø§Ø¹Ø© $7",
'spamregex-page-title-1' => 'Ù…Ù†Ø¹ Ø¹Ø¨Ø§Ø±Ø© Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
'spamregex-unblock-success' => 'Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ù†Ø¬Ø­',
'spamregex-unblock-message' => "Ø§Ù„Ø¹Ø¨Ø§Ø±Ø© '''$1''' ØªÙ… Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ø¹Ù†Ù‡Ø§ Ø¶Ø¯ Ø§Ù„ØªØ­Ø±ÙŠØ±.",
'spamregex-page-title-2' => 'Ù…Ù†Ø¹ Ø§Ù„Ø¹Ø¨Ø§Ø±Ø§Øª Ù…Ù† Ø§Ù„Ø­ÙØ¸ Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
'spamregex-block-success' => 'Ø§Ù„Ù…Ù†Ø¹ Ù†Ø¬Ø­',
'spamregex-block-message' => "Ø§Ù„Ø¹Ø¨Ø§Ø±Ø© '''$1''' ØªÙ… Ù…Ù†Ø¹Ù‡Ø§.",
'spamregex-warning-1' => 'Ø£Ø¹Ø· Ø¹Ø¨Ø§Ø±Ø© Ù„Ù„Ù…Ù†Ø¹.',
'spamregex-error-1' => 'ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… ØºÙŠØ± ØµØ­ÙŠØ­.',
'spamregex-warning-2' => 'Ù…Ù† ÙØ¶Ù„Ùƒ Ø¹Ù„Ù… Ø¹Ù„Ù‰ Ù†Ù…Ø· Ù…Ù†Ø¹ ÙˆØ§Ø­Ø¯ Ø¹Ù„Ù‰ Ø§Ù„Ø£Ù‚Ù„.',
'spamregex-already-blocked' => '"$1" Ù…Ù…Ù†ÙˆØ¹Ø© Ø¨Ø§Ù„ÙØ¹Ù„',
'spamregex-phrase-block' => 'Ø§Ù„Ø¹Ø¨Ø§Ø±Ø© Ù„Ù„Ù…Ù†Ø¹:',
'spamregex-phrase-block-text' => 'Ù…Ù†Ø¹ Ø¹Ø¨Ø§Ø±Ø© ÙÙŠ Ù†Øµ ØµÙØ­Ø©',
'spamregex-phrase-block-summary' => 'Ù…Ù†Ø¹ Ø¹Ø¨Ø§Ø±Ø© ÙÙŠ Ù…Ù„Ø®Øµ',
'spamregex-block-submit' => 'Ù…Ù†Ø¹&nbsp;Ù‡Ø°Ù‡&nbsp;Ø§Ù„Ø¹Ø¨Ø§Ø±Ø©',
'spamregex-text' => '(Ù†Øµ)',
'spamregex-summary-log' => '(Ù…Ù„Ø®Øµ)',
'right-spamregex' => 'Ù…Ù†Ø¹ Ø¹Ø¨Ø§Ø±Ø§Øª Ø§Ù„Ø³Ø¨Ø§Ù… Ù…Ù† Ø®Ù„Ø§Ù„ [[Special:SpamRegex]]',
);

/** Aramaic (ÜÜªÜ¡ÜÜ)
* @author Basharh
*/
$messages['arc'] = array(
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 Ü ÜšÜ]) ÜÜ¬Ü¬Ü˜Ü£Ü¦ Ü’ÜÜ• $5 Ü’$6 Ü«Ü¥Ü¬Ü $7",
);

/** Egyptian Spoken Arabic (Ù…ØµØ±Ù‰)
* @author Ghaly
* @author Meno25
*/
$messages['arz'] = array(
'spamregex' => 'ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… Ù„Ø³Ø¨Ø§Ù…',
'spamregex-desc' => '[[Special:SpamRegex|ÙÙ„ØªØ±]] Ø§Ù„Ø¹Ø¨Ø§Ø±Ø§Øª ØºÙŠØ± Ø§Ù„Ù…Ø±ØºÙˆØ¨ ÙÙŠÙ‡Ø§ ÙÙ‰ Ø§Ù„ØµÙØ­Ø§Øª Ø§Ù„Ù…Ø¹Ø¯Ù„Ø©ØŒ Ø¨Ø§Ù„Ø§Ø¹ØªÙ…Ø§Ø¯ Ø¹Ù„Ù‰ Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
'spamregex-error-unblocking' => 'Ø®Ø·Ø£ Ø±ÙØ¹ Ù…Ù†Ø¹ "$1". Ø¹Ù„Ù‰ Ø§Ù„Ø£Ø±Ø¬Ø­ Ù„Ø§ ÙŠÙˆØ¬Ø¯ Ù†Ù…Ø· ÙƒÙ‡Ø°Ø§.',
'spamregex-summary' => 'Ø§Ù„Ù†Øµ ØªÙ… Ø§Ù„Ø¹Ø«ÙˆØ± Ø¹Ù„ÙŠÙ‡ ÙÙ‰ Ù…Ù„Ø®Øµ Ø§Ù„ØµÙØ­Ø©.',
'spamregex-intro' => 'Ø§Ø³ØªØ®Ø¯Ù… Ø§Ù„Ø§Ø³ØªÙ…Ø§Ø±Ø© Ø¯Ù‰ Ù„Ù…Ù†Ø¹ ØªØ¹Ø¨ÙŠØ±Ø§Øª Ù…Ù† Ø§Ù„Ø­ÙØ¸ ÙÙ‰ Ù†Øµ ØµÙØ­Ø© Ø¨ÙƒÙØ§Ø¡Ø©.
Ù„Ùˆ Ø£Ù† Ø§Ù„Ù†Øµ ÙŠØ­ØªÙˆÙ‰ Ø¹Ù„Ù‰ Ø§Ù„ØªØ¹Ø¨ÙŠØ± Ø§Ù„Ù…Ø¹Ø·Ù‰ØŒ Ù…Ø´ Ù‡Ø§ÙŠØªØ­ÙØ¸ Ø§Ù„ØªØºÙŠÙŠØ± Ùˆ Ù‡Ø§ÙŠØªØ¹Ø±Ø¶ ØªÙØ³ÙŠØ± Ù„Ù„ÙŠÙˆØ²Ø± Ø§Ù„Ù„Ù‰ Ø­Ø§ÙˆÙ„ Ø­ÙØ¸ Ø§Ù„ØµÙØ­Ø©.
ÙŠÙ†ØµØ­ Ø¨Ø§Ù„Ø­Ø°Ø±ØŒ Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª Ù„Ø§Ø²Ù… Ù…Ø§ØªÙƒÙˆÙ†Ø´ Ù‚ØµÙŠØ±Ø© Ø¬Ø¯Ø§ Ø£Ùˆ Ø´Ø§Ø¦Ø¹Ø© Ø¬Ø¯Ø§.',
'spamregex-page-title' => 'Ù…Ù†Ø¹ ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… Ù„Ø³Ø¨Ø§Ù… Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª ØºÙŠØ± Ø§Ù„Ù…Ø±ØºÙˆØ¨ ÙÙŠÙ‡Ø§',
'spamregex-currently-blocked' => "'''Ø§Ù„Ø¹Ø¨Ø§Ø±Ø§Øª Ø§Ù„Ù…Ù…Ù†ÙˆØ¹Ø© Ø­Ø§Ù„ÙŠØ§:'''",
'spamregex-move' => 'Ø§Ù„Ø³Ø¨Ø¨ Ø§Ù„Ø°Ù‰ Ø£Ø¯Ø®Ù„ØªÙ‡ ÙŠØ­ØªÙˆÙ‰ Ø¹Ù„Ù‰ Ø¹Ø¨Ø§Ø±Ø© Ù…Ù…Ù†ÙˆØ¹Ø©.',
'spamregex-no-currently-blocked' => "'''Ù„Ø§ ØªÙˆØ¬Ø¯ Ø¹Ø¨Ø§Ø±Ø§Øª Ù…Ù…Ù†ÙˆØ¹Ø©.'''",
'spamregex-page-title-1' => 'Ù…Ù†Ø¹ Ø¹Ø¨Ø§Ø±Ø© Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
'spamregex-unblock-success' => 'Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ù†Ø¬Ø­',
'spamregex-unblock-message' => "Ø§Ù„Ø¹Ø¨Ø§Ø±Ø© '''$1''' ØªÙ… Ø±ÙØ¹ Ø§Ù„Ù…Ù†Ø¹ Ø¹Ù†Ù‡Ø§ Ø¶Ø¯ Ø§Ù„ØªØ­Ø±ÙŠØ±.",
'spamregex-page-title-2' => 'Ù…Ù†Ø¹ Ø§Ù„Ø¹Ø¨Ø§Ø±Ø§Øª Ù…Ù† Ø§Ù„Ø­ÙØ¸ Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ù„ØªØ¹Ø¨ÙŠØ±Ø§Øª Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø©',
'spamregex-block-success' => 'Ø§Ù„Ù…Ù†Ø¹ Ù†Ø¬Ø­',
'spamregex-block-message' => "Ø§Ù„Ø¹Ø¨Ø§Ø±Ø© '''$1''' ØªÙ… Ù…Ù†Ø¹Ù‡Ø§.",
'spamregex-warning-1' => 'Ø£Ø¹Ø· Ø¹Ø¨Ø§Ø±Ø© Ù„Ù„Ù…Ù†Ø¹.',
'spamregex-error-1' => 'ØªØ¹Ø¨ÙŠØ± Ù…Ù†ØªØ¸Ù… ØºÙŠØ± ØµØ­ÙŠØ­.',
'spamregex-warning-2' => 'Ù…Ù† ÙØ¶Ù„Ùƒ Ø¹Ù„Ù… Ø¹Ù„Ù‰ Ù†Ù…Ø· Ù…Ù†Ø¹ ÙˆØ§Ø­Ø¯ Ø¹Ù„Ù‰ Ø§Ù„Ø£Ù‚Ù„.',
'spamregex-already-blocked' => '"$1" Ù…Ù…Ù†ÙˆØ¹Ø© Ø¨Ø§Ù„ÙØ¹Ù„',
'spamregex-phrase-block' => 'Ø§Ù„Ø¹Ø¨Ø§Ø±Ø© Ù„Ù„Ù…Ù†Ø¹:',
'spamregex-phrase-block-text' => 'Ù…Ù†Ø¹ Ø¹Ø¨Ø§Ø±Ø© ÙÙ‰ Ù†Øµ ØµÙØ­Ø©',
'spamregex-phrase-block-summary' => 'Ù…Ù†Ø¹ Ø¹Ø¨Ø§Ø±Ø© ÙÙ‰ Ù…Ù„Ø®Øµ',
'spamregex-block-submit' => 'Ù…Ù†Ø¹&nbsp;Ù‡Ø°Ù‡&nbsp;Ø§Ù„Ø¹Ø¨Ø§Ø±Ø©',
'spamregex-text' => '(Ù†Øµ)',
'spamregex-summary-log' => '(Ù…Ù„Ø®Øµ)',
'right-spamregex' => 'Ù…Ù†Ø¹ Ø¹Ø¨Ø§Ø±Ø§Øª Ø§Ù„Ø³Ø¨Ø§Ù… Ù…Ù† Ø®Ù„Ø§Ù„ [[Special:SpamRegex]]',
);

/** Asturian (asturianu)
* @author Xuacu
*/
$messages['ast'] = array(
'spamregex' => 'Spam regex',
'spamregex-desc' => "[[Special:SpamRegex|PeÃ±era]] les frases que nun se quieren nes pÃ¡xines editaes, basandose n'espresiones regulares",
'spamregex-error-unblocking' => 'Error al desbloquiar "$1". Ye probable que nun esista esi patrÃ³n.',
'spamregex-summary' => "El testu s'atopÃ³ nel resume de la pÃ¡xina.",
'spamregex-intro' => "Usa esti formulariu pa bloquiar espresiones de mou efectivu y que nun se puedan guardar nel testu d'una pÃ¡xina.
Si'l testu contiÃ©n la espresiÃ³n dada, el cambiu nun podrÃ¡ guardase y s'amosarÃ¡ una esplicaciÃ³n al usuariu qu'intentÃ³ guardar la pÃ¡xina.
Ten especial procuru, les espresiones nun tendrÃ­en de ser demasiao curties nin mui comÃºnes.",
'spamregex-page-title' => "BloquÃ©u d'espresiones nun deseaes spam regex",
'spamregex-currently-blocked' => "'''Frases bloquiaes anguaÃ±o:'''",
'spamregex-move' => "El motivu qu'escribisti contiÃ©n una frase bloquiada.",
'spamregex-no-currently-blocked' => "'''Nun hai frases bloquiaes.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 desaniciar]) amestada por $5 el $6 a les $7",
'spamregex-page-title-1' => 'Bloquiar frase usando espresiones regulares',
'spamregex-unblock-success' => 'DesbloquÃ©u correutu',
'spamregex-unblock-message' => "La frase '''$1''' se desbloquiÃ³ pa ediciÃ³n.",
'spamregex-page-title-2' => 'Bloquiar el guardÃ¡u de frases usando espresiones regulares',
'spamregex-block-success' => 'BloquÃ©u correutu',
'spamregex-block-message' => "Se bloquiÃ³ la frase '''$1'''.",
'spamregex-warning-1' => 'Da una frase pa bloquiar.',
'spamregex-error-1' => 'EspresiÃ³n regular invÃ¡lida.',
'spamregex-warning-2' => 'Por favor, marca polo menos un mou de bloquÃ©u.',
'spamregex-already-blocked' => '"$1" yÃ¡ ta bloquiÃ¡u',
'spamregex-phrase-block' => 'Frase a bloquiar:',
'spamregex-phrase-block-text' => 'bloquiar una frase del testu de la pÃ¡xina',
'spamregex-phrase-block-summary' => 'bloquiar una frase del resume',
'spamregex-block-submit' => 'Bloquiar&nbsp;esta&nbsp;frase',
'spamregex-text' => '(Testu)',
'spamregex-summary-log' => '(Resume)',
'right-spamregex' => 'Bloquiar les frases de spam con [[Special:SpamRegex]]',
);

/** Azerbaijani (azÉ™rbaycanca)
* @author Cekli829
*/
$messages['az'] = array(
'spamregex-text' => '(MÉ™tn)',
'spamregex-summary-log' => '(XÃ¼lasÉ™)',
);

/** Belarusian (Ð±ÐµÐ»Ð°Ñ€ÑƒÑÐºÐ°Ñ)
* @author Ð¢ÐµÑÑ‚
*/
$messages['be'] = array(
'spamregex-text' => '(Ð¢ÑÐºÑÑ‚)',
);

/** Belarusian (TaraÅ¡kievica orthography) (Ð±ÐµÐ»Ð°Ñ€ÑƒÑÐºÐ°Ñ (Ñ‚Ð°Ñ€Ð°ÑˆÐºÐµÐ²Ñ–Ñ†Ð°)â€Ž)
* @author EugeneZelenko
* @author Jim-by
* @author Red Winged Duck
*/
$messages['be-tarask'] = array(
'spamregex' => 'Ð ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ Ð²Ñ‹Ñ€Ð°Ð·Ñ‹ Ð´Ð»Ñ Ð±Ð°Ñ€Ð°Ñ†ÑŒÐ±Ñ‹ ÑÐ° ÑÐ¿Ð°Ð¼Ð°Ð¼',
'spamregex-desc' => '[[Special:SpamRegex|Ð¤Ñ–Ð»ÑŒÑ‚Ñ€Ð°Ð²Ð°Ð½ÑŒÐ½Ðµ]] Ð½ÐµÐ¶Ð°Ð´Ð°Ð½Ñ‹Ñ… Ñ„Ñ€Ð°Ð·Ð°Ñž Ð½Ð° Ñ€ÑÐ´Ð°Ð³ÑƒÐµÐ¼Ñ‹Ñ… ÑÑ‚Ð°Ñ€Ð¾Ð½ÐºÐ°Ñ… Ð· Ð²Ñ‹ÐºÐ°Ñ€Ñ‹ÑÑ‚Ð°Ð½ÑŒÐ½ÐµÐ¼ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð·Ð°Ñž',
'spamregex-error-unblocking' => 'ÐŸÐ°Ð¼Ñ‹Ð»ÐºÐ° Ñ€Ð°Ð·Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ñ Â«$1Â». Ð’ÐµÑ€Ð°Ð³Ð¾Ð´Ð½Ð° Ð½Ðµ Ñ–ÑÐ½ÑƒÐµ Ñ‚Ð°ÐºÐ¾Ð³Ð° ÑžÐ·Ð¾Ñ€Ñƒ.',
'spamregex-summary' => 'Ð¢ÑÐºÑÑ‚ Ð±Ñ‹Ñž Ð·Ð½Ð¾Ð¹Ð´Ð·ÐµÐ½Ñ‹ Ñž ÐºÐ°Ñ€Ð¾Ñ‚ÐºÑ–Ð¼ Ð°Ð¿Ñ–ÑÐ°Ð½ÑŒÐ½Ñ– Ð·ÑŒÐ¼ÐµÐ½Ð°Ñž ÑÑ‚Ð°Ñ€Ð¾Ð½ÐºÑ–.',
'spamregex-intro' => 'ÐšÐ°Ñ€Ñ‹ÑÑ‚Ð°Ð¹Ñ†ÐµÑÑ Ð³ÑÑ‚Ð°Ð¹ Ñ„Ð¾Ñ€Ð¼Ð°Ð¹, ÐºÐ°Ð± ÑÑ„ÑÐºÑ‚Ñ‹ÑžÐ½Ð° Ð±Ð»ÑÐºÐ°Ð²Ð°Ñ†ÑŒ Ñ„Ñ€Ð°Ð·Ñ‹ Ð°Ð´ Ð·Ð°Ñ…Ð°Ð²Ð°Ð½ÑŒÐ½Ñ Ñž Ñ‚ÑÐºÑÑŒÑ†Ðµ ÑÑ‚Ð°Ñ€Ð¾Ð½ÐºÑ–.
ÐšÐ°Ð»Ñ– Ñ‚ÑÐºÑÑ‚ ÑƒÑ‚Ñ€Ñ‹Ð¼Ð»Ñ–Ð²Ð°Ðµ Ð¿Ð°Ð´Ð°Ð´Ð·ÐµÐ½Ñ‹Ñ Ð²Ñ‹Ñ€Ð°Ð·Ñ‹, Ð·ÑŒÐ¼ÐµÐ½Ñ‹ Ð½Ñ Ð±ÑƒÐ´ÑƒÑ†ÑŒ Ð·Ð°Ñ…Ð°Ð²Ð°Ð½Ñ‹Ñ Ñ– Ð±ÑƒÐ´Ð·Ðµ Ð¿Ð°ÐºÐ°Ð·Ð°Ð½Ð°Ðµ Ñ‚Ð»ÑƒÐ¼Ð°Ñ‡ÑÐ½ÑŒÐ½Ðµ Ð´Ð»Ñ ÑžÐ´Ð·ÐµÐ»ÑŒÐ½Ñ–ÐºÐ°, ÑÐºÑ– ÑÐ¿Ñ€Ð°Ð±Ð°Ð²Ð°Ñž Ð·Ð°Ñ…Ð°Ð²Ð°Ñ†ÑŒ ÑÑ‚Ð°Ñ€Ð¾Ð½ÐºÑƒ.
ÐŸÐ°Ð¼ÑÑ‚Ð°Ð¹Ñ†Ðµ, ÑˆÑ‚Ð¾ Ð²Ñ‹Ñ€Ð°Ð·Ñ‹ Ð½Ðµ Ð¿Ð°Ð²Ñ–Ð½Ð½Ñ‹ Ð±Ñ‹Ñ†ÑŒ Ð·Ð°Ð½Ð°Ð´Ñ‚Ð° ÐºÐ°Ñ€Ð¾Ñ‚ÐºÑ–Ð¼Ñ– Ñ†Ñ– Ð°Ð³ÑƒÐ»ÑŒÐ½Ð° ÑžÐ¶Ñ‹Ð²Ð°ÐµÐ¼Ñ‹Ð¼Ñ–.',
'spamregex-page-title' => 'Ð‘Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ ÑÐ¿Ð°Ð¼Ð° Ð· Ð´Ð°Ð¿Ð°Ð¼Ð¾Ð³Ð°Ð¹ Ð½ÐµÐ¿Ð°Ð¶Ð°Ð´Ð°Ð½Ñ‹Ñ… Ñ„Ñ€Ð°Ð·Ð°Ñž',
'spamregex-currently-blocked' => "'''Ð¦ÑÐ¿ÐµÑ€Ð°ÑˆÐ½Ñ–Ñ Ð²Ñ‹Ñ€Ð°Ð·Ñ‹ Ð´Ð»Ñ Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ñ:'''",
'spamregex-move' => 'ÐŸÑ€Ñ‹Ñ‡Ñ‹Ð½Ð° Ñž Ñ‚Ñ‹Ð¼, ÑˆÑ‚Ð¾ Ð’Ñ‹ ÑžÐ²ÑÐ»Ñ– Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑƒÑŽ Ñ„Ñ€Ð°Ð·Ñƒ.',
'spamregex-no-currently-blocked' => "'''ÐÑÐ¼Ð° Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹Ñ… Ñ„Ñ€Ð°Ð·Ð°Ñž.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 Ð²Ñ‹Ð´Ð°Ð»Ñ–Ñ†ÑŒ]) Ð´Ð°Ð´Ð°Ð´Ð·ÐµÐ½Ñ‹ $5 Ñž $6 $7",
'spamregex-page-title-1' => 'Ð‘Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ Ñ„Ñ€Ð°Ð·Ñ‹ Ð· Ð´Ð°Ð¿Ð°Ð¼Ð¾Ð³Ð°Ð¹ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð·Ð°Ñž',
'spamregex-unblock-success' => 'Ð Ð°Ð·Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ð°',
'spamregex-unblock-message' => "Ð¤Ñ€Ð°Ð·Ð° '''$1''' Ð±Ñ‹Ð»Ð° Ñ€Ð°Ð·Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ð°Ñ Ð´Ð»Ñ Ñ€ÑÐ´Ð°Ð³Ð°Ð²Ð°Ð½ÑŒÐ½Ñ.",
'spamregex-page-title-2' => 'Ð‘Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ Ñ„Ñ€Ð°Ð·Ð°Ñž Ð°Ð´ Ð·Ð°Ñ…Ð°Ð²Ð°Ð½ÑŒÐ½Ñ Ð· Ð´Ð°Ð¿Ð°Ð¼Ð¾Ð³Ð°Ð¹ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð·Ð°Ñž',
'spamregex-block-success' => 'Ð—Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ð°',
'spamregex-block-message' => "Ð¤Ñ€Ð°Ð·Ð° '''$1''' Ð±Ñ‹Ð»Ð° Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ð°Ñ.",
'spamregex-warning-1' => 'ÐŸÐ°Ð´Ð°Ð¹Ñ†Ðµ Ñ„Ñ€Ð°Ð·Ñƒ Ð´Ð»Ñ Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ñ.',
'spamregex-error-1' => 'ÐÑÑÐ»ÑƒÑˆÐ½Ñ‹ Ñ€ÑÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹ Ð²Ñ‹Ñ€Ð°Ð·.',
'spamregex-warning-2' => 'ÐšÐ°Ð»Ñ– Ð»Ð°ÑÐºÐ°, Ð¿Ñ€Ð°Ð²ÐµÑ€Ñ†Ðµ Ð´Ð·ÐµÑÐ½ÑŒÐ½Ðµ Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ñ Ñ…Ð°Ñ†Ñ Ð± Ð°Ð´Ð·Ñ–Ð½ Ñ€Ð°Ð·.',
'spamregex-already-blocked' => 'Â«$1Â» ÑƒÐ¶Ð¾ Ð·Ð°Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½Ñ‹',
'spamregex-phrase-block' => 'Ð¤Ñ€Ð°Ð·Ð° Ð´Ð° Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ñ:',
'spamregex-phrase-block-text' => 'Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ Ñ„Ñ€Ð°Ð·Ñ‹ Ñž Ñ‚ÑÐºÑÑŒÑ†Ðµ ÑÑ‚Ð°Ñ€Ð¾Ð½ÐºÑ–',
'spamregex-phrase-block-summary' => 'Ð±Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ Ñ„Ñ€Ð°Ð·Ñ‹ Ñž ÐºÐ°Ñ€Ð¾Ñ‚ÐºÑ–Ð¼ Ð°Ð¿Ñ–ÑÐ°Ð½ÑŒÐ½Ñ– Ð·ÑŒÐ¼ÐµÐ½Ð°Ñž ÑÑ‚Ð°Ñ€Ð¾Ð½ÐºÑ–',
'spamregex-block-submit' => 'Ð‘Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ&nbsp;Ð³ÑÑ‚Ð°Ð³Ð°&nbsp;Ð²Ñ‹Ñ€Ð°Ð·Ñƒ',
'spamregex-text' => '(Ð¢ÑÐºÑÑ‚)',
'spamregex-summary-log' => '(ÐšÐ°Ñ€Ð¾Ñ‚ÐºÐ°Ðµ Ð°Ð¿Ñ–ÑÐ°Ð½ÑŒÐ½Ðµ Ð·ÑŒÐ¼ÐµÐ½Ð°Ñž ÑÑ‚Ð°Ñ€Ð¾Ð½ÐºÑ–)',
'right-spamregex' => 'Ð‘Ð»ÑÐºÐ°Ð²Ð°Ð½ÑŒÐ½Ðµ ÑÐ¿Ð°Ð¼Ð°Ð²Ñ‹Ñ… Ñ„Ñ€Ð°Ð·Ð°Ñž Ð· Ð´Ð°Ð¿Ð°Ð¼Ð¾Ð³Ð°Ð¹ [[Special:SpamRegex]]',
);

/** Bulgarian (Ð±ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸)
* @author DCLXVI
* @author Spiritia
*/
$messages['bg'] = array(
'spamregex-desc' => '[[Special:SpamRegex|Ð¤Ð¸Ð»Ñ‚Ñ€Ð¸Ñ€Ð°Ð½Ðµ]] Ð½Ð° Ð½ÐµÐ¶ÐµÐ»Ð°Ð½Ð¸ Ñ„Ñ€Ð°Ð·Ð¸ Ð² Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð°Ð½Ð¸Ñ‚Ðµ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð¸ Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰Ñ‚Ð° Ð½Ð° Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸',
'spamregex-summary' => 'Ð¢ÐµÐºÑÑ‚ÑŠÑ‚ Ðµ Ð½Ð°Ð¼ÐµÑ€ÐµÐ½ Ð² Ñ€ÐµÐ·ÑŽÐ¼ÐµÑ‚Ð¾ Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð°Ñ‚Ð°.',
'spamregex-currently-blocked' => "'''Ð¢ÐµÐºÑƒÑ‰Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸ Ñ„Ñ€Ð°Ð·Ð¸:'''",
'spamregex-move' => 'Ð’ÑŠÐ²ÐµÐ´ÐµÐ½Ð°Ñ‚Ð° Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð° ÑÑŠÐ´ÑŠÑ€Ð¶Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð° Ñ„Ñ€Ð°Ð·Ð°.',
'spamregex-no-currently-blocked' => "'''ÐÑÐ¼Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸ Ñ„Ñ€Ð°Ð·Ð¸.'''",
'spamregex-page-title-1' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð¸ Ñ‡Ñ€ÐµÐ· Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸',
'spamregex-unblock-success' => 'Ð£ÑÐ¿ÐµÑˆÐ½Ð¾ Ñ€Ð°Ð·Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ',
'spamregex-unblock-message' => "Ð¤Ñ€Ð°Ð·Ð°Ñ‚Ð° '''$1''' Ð±ÐµÑˆÐµ Ð¾Ñ‚Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð° Ð·Ð° Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð°Ð½Ðµ.",
'spamregex-page-title-2' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ Ð½Ð° ÑÑŠÑ…Ñ€Ð°Ð½ÐµÐ½Ð¸ÐµÑ‚Ð¾ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð° Ð¿Ð¾ÑÑ€ÐµÐ´ÑÑ‚Ð²Ð¾Ð¼ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸',
'spamregex-block-success' => 'Ð£ÑÐ¿ÐµÑˆÐ½Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ',
'spamregex-block-message' => "Ð¤Ñ€Ð°Ð·Ð°Ñ‚Ð° '''$1''' Ð±ÐµÑˆÐµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð°.",
'spamregex-error-1' => 'ÐÐµÐ²Ð°Ð»Ð¸Ð´ÐµÐ½ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·.',
'spamregex-already-blocked' => 'â€ž$1â€œ Ðµ Ð²ÐµÑ‡Ðµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½',
'spamregex-phrase-block' => 'Ð¤Ñ€Ð°Ð·Ð° Ð·Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ:',
'spamregex-phrase-block-text' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð° Ð² Ñ‚ÐµÐºÑÑ‚Ð° Ð½Ð° ÑÑ‚Ð°Ñ‚Ð¸ÑÑ‚Ð°',
'spamregex-phrase-block-summary' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð° Ð² Ñ€ÐµÐ·ÑŽÐ¼ÐµÑ‚Ð¾',
'spamregex-block-submit' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ&nbsp;Ð½Ð°&nbsp;Ñ„Ñ€Ð°Ð·Ð°Ñ‚Ð°',
'spamregex-text' => '(Ð¢ÐµÐºÑÑ‚)',
'spamregex-summary-log' => '(Ð ÐµÐ·ÑŽÐ¼Ðµ)',
'right-spamregex' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ðµ Ð½Ð° ÑÐ¿Ð°Ð¼ Ñ„Ñ€Ð°Ð·Ð¸ Ñ‡Ñ€ÐµÐ· [[Special:SpamRegex]]',
);

/** Bengali (à¦¬à¦¾à¦‚à¦²à¦¾)
* @author Bellayet
*/
$messages['bn'] = array(
'spamregex-text' => '(à¦²à§‡à¦–à¦¾)',
'spamregex-summary-log' => '(à¦¸à¦¾à¦°à¦¾à¦‚à¦¶)',
);

/** Breton (brezhoneg)
* @author Fohanno
* @author Fulup
* @author Y-M D
*/
$messages['br'] = array(
'spamregex' => 'Strob regex (Spam regex)',
'spamregex-desc' => "[[Special:SpamRegex|Sil]] ar frazennoÃ¹ dic'hoantaus er pajennoÃ¹, diazezet war eztaoladennoÃ¹ poellel",
'spamregex-error-unblocking' => 'Fazi distankaÃ± "$1". Sur a-walc\'h n\'eus ket a batrom.',
'spamregex-summary' => 'Kavet eo bet an destenn e diverradur ar bajenn.',
'spamregex-intro' => "Grit gant ar furmskrid-maÃ± da virout da vat ma vo lakaaet troiennoÃ¹ zo e testenn ur bajenn.
M'en em gav an troiennoÃ¹ resisaet en destenn ne vo ket tu da enrollaÃ± hag un displegadenn a vo diskouezet d'an implijer a glask saveteiÃ± ar bajenn.
Diwallit mat : arabat lakaat troiennoÃ¹ re verr pe stank betek re.",
'spamregex-page-title' => 'Stankadenn eztaoladennoÃ¹ poellel ar stroboÃ¹',
'spamregex-currently-blocked' => "'''FrazennoÃ¹ stanket evit bremaÃ± :'''",
'spamregex-move' => "An abeg hoc'h eus ebarzhet a oa ennaÃ± ur frazenn stanket.",
'spamregex-no-currently-blocked' => "'''N'eus frazenn stanket ebet.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 dilemel]) ouzhpennet gant $5 d'ar $6 da $7",
'spamregex-page-title-1' => 'Stankadenn ur frazenn hag a implij eztaoladennoÃ¹ poellel',
'spamregex-unblock-success' => 'Distanket eo bet an implijer.',
'spamregex-unblock-message' => "Distanket eo bet ar bajenn '''$1''' evit an embann.",
'spamregex-page-title-2' => 'Stankadenn frazennoÃ¹ en ur implijout eztaoladennoÃ¹ poellel',
'spamregex-block-success' => 'Graet eo ar stankadur',
'spamregex-block-message' => "Stanket eo bet ar frazenn '''$1'''",
'spamregex-warning-1' => 'ReiÃ± ur frazenn da stankaÃ±.',
'spamregex-error-1' => 'Eztaoladenn poellel direizh.',
'spamregex-warning-2' => "Mar plij dibabit d'an nebeutaÃ± un doare stankaÃ±.",
'spamregex-already-blocked' => 'Â« $1 Â» zo stanket dija',
'spamregex-phrase-block' => 'Frazenn da stankaÃ± :',
'spamregex-phrase-block-text' => 'stankaÃ± ar frazenn e testenn ar bajenn',
'spamregex-phrase-block-summary' => 'stankaÃ± ar frazenn en evezhiadenn',
'spamregex-block-submit' => 'StankaÃ±&nbsp;ar&nbsp;frazenn-se',
'spamregex-text' => '(Testenn)',
'spamregex-summary-log' => '(Diverradur)',
'right-spamregex' => 'StankaÃ± stroboÃ¹ dre [[Special:SpamRegex]]',
);

/** Bosnian (bosanski)
* @author CERminator
*/
$messages['bs'] = array(
'spamregex' => 'Regularni izrazi spama',
'spamregex-desc' => '[[Special:SpamRegex|Izdvajanje]] neÅ¾eljenih fraza u ureÄ‘enim stranicama, na osnovu regularnih izraza',
'spamregex-error-unblocking' => 'GreÅ¡ka pri deblokadi "$1". MoguÄ‡e je da nema takve Å¡eme.',
'spamregex-summary' => 'Tekst je pronaÄ‘en u saÅ¾etku stranice',
'spamregex-intro' => 'Koristite ovaj obrazac za efektivno blokiranje izraza od njihovog spremanja u tekst stranice.
Ako tekst sadrÅ¾i dati izraz, izmjena se neÄ‡e saÄuvati i bit Ä‡e prikazano obrazloÅ¾enje korisniku koji pokuÅ¡ava spremiti stranicu.
PreporuÄuje se oprez, da izrazi ne budu previÅ¡e kratki niti previÅ¡e uobiÄajeni.',
'spamregex-page-title' => 'Spam filter za blokiranje neÅ¾eljenih izraza',
'spamregex-currently-blocked' => "'''Trenutno blokirane fraze:'''",
'spamregex-move' => 'Razlog koji ste unijeli sadrÅ¾i blokiranu frazu.',
'spamregex-no-currently-blocked' => "'''Nema blokiranih fraza.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 ukloni]) dodano od strane $5 dana $6 u $7",
'spamregex-page-title-1' => 'Blokiranje fraze koristeÄ‡i obiÄne izraze',
'spamregex-unblock-success' => 'Deblokada uspjeÅ¡na',
'spamregex-unblock-message' => "Fraza '''$1''' je deblokirana za ureÄ‘ivanje.",
'spamregex-page-title-2' => 'Blokiranje fraze od spremanja koristeÄ‡i redovne izraze',
'spamregex-block-success' => 'Blokada uspjeÅ¡na',
'spamregex-block-message' => "Fraza '''$1''' je blokirana.",
'spamregex-warning-1' => 'Navedite frazu za blokiranje.',
'spamregex-error-1' => 'Nevaljan regularni izraz.',
'spamregex-warning-2' => 'Molimo odaberite najmanje jedan naÄin blokade',
'spamregex-already-blocked' => '"$1" je veÄ‡ blokiran',
'spamregex-phrase-block' => 'Fraza za blokadu:',
'spamregex-phrase-block-text' => 'blokirana fraza u tekstu stranice',
'spamregex-phrase-block-summary' => 'blokirana fraza u saÅ¾etku',
'spamregex-block-submit' => 'Blokiraj&nbsp;ovu&nbsp;frazu',
'spamregex-text' => '(Tekst)',
'spamregex-summary-log' => '(SaÅ¾etak)',
'right-spamregex' => 'Blokiranje spam fraza putem [[Special:SpamRegex]]',
);

/** Catalan (catalÃ )
* @author SMP
*/
$messages['ca'] = array(
'spamregex-already-blocked' => 'Â«$1Â» ja estÃ blocat',
'right-spamregex' => 'Blocar frases de spam a travÃ©s de [[Special:SpamRegex]]',
);

/** Sorani Kurdish (Ú©ÙˆØ±Ø¯ÛŒ)
* @author Marmzok
*/
$messages['ckb'] = array(
'spamregex-text' => '(Ø¯Û•Ù‚)',
'spamregex-summary-log' => '(Ù¾ÙˆØ®ØªÛ•)',
);

/** Danish (dansk)
* @author Jon Harald SÃ¸by
*/
$messages['da'] = array(
'spamregex-text' => '(Tekst)',
);

/** German (Deutsch)
* @author ChrisiPK
* @author Kghbln
* @author Revolus
* @author SVG
* @author Umherirrender
*/
$messages['de'] = array(
'spamregex' => 'Spam-Regex',
'spamregex-desc' => 'ErgÃ¤nzt eine [[Special:SpamRegex|Spezialseite]] mit der auf regulÃ¤ren AusdrÃ¼cken basierende Phrasen gefiltert werden kÃ¶nnen',
'spamregex-error-unblocking' => 'Beim Entsperren von $1 ist ein Fehler aufgetreten. Vermutlich gibt es kein solches Muster.',
'spamregex-summary' => 'Der Text befand sich in der Zusammenfassung.',
'spamregex-intro' => 'Benutze dieses Formular, um effektiv zu verhindern, dass angegebene Phrasen in den Text einer Seite eingefÃ¼gt werden.
Wenn der Text die angegebene Phrase enthÃ¤lt, wird die Ã„nderung nicht gespeichert und ein Hinweis an den Benutzer ausgegeben, der versucht hat, die Seite zu speichern.
Sei aber vorsichtig, Phrasen sollten nicht zu kurz oder zu allgemein sein.',
'spamregex-page-title' => 'Verhinderung von Spam anhand unerwÃ¼nschter regulÃ¤rer AusdrÃ¼cke',
'spamregex-currently-blocked' => "'''Derzeit gesperrte Phrasen:'''",
'spamregex-move' => 'Die Zusammenfassung, die du angabst, enthÃ¤lt eine gesperrte Phrase.',
'spamregex-no-currently-blocked' => "'''Es gibt derzeit keine gesperrten Phrasen.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 entfernen]) hinzugefÃ¼gt von $5 am $6 um $7 Uhr",
'spamregex-page-title-1' => 'Sperre von Phrasen anhand regulÃ¤rer AusdrÃ¼cke',
'spamregex-unblock-success' => 'Die Entsperrung war erfolgreich.',
'spamregex-unblock-message' => "Die Phrase '''$1''' wurde fÃ¼r Bearbeitungen entsperrt.",
'spamregex-page-title-2' => 'Verhinderung des Speicherns von Phrase anhand regulÃ¤rer AusdrÃ¼cke',
'spamregex-block-success' => 'Die Sperrung war erfolgreich.',
'spamregex-block-message' => "Die Phrase '''$1''' wurde fÃ¼r Bearbeitungen gesperrt.",
'spamregex-warning-1' => 'Bitte gib eine Phrase fÃ¼r die Sperrung an.',
'spamregex-error-1' => 'Dies ist ein ungÃ¼ltiger regulÃ¤rer Ausdruck.',
'spamregex-warning-2' => 'Bitte wÃ¤hle mindestens eine Sperrmethode aus.',
'spamregex-already-blocked' => 'â€ž$1â€œ ist bereits gesperrt',
'spamregex-phrase-block' => 'Zu sperrende Phrase:',
'spamregex-phrase-block-text' => 'Phrase im Seitentext sperren',
'spamregex-phrase-block-summary' => 'Phrase in der Zusammenfassung sperren',
'spamregex-block-submit' => 'Phrase sperren',
'spamregex-text' => '(Text)',
'spamregex-summary-log' => '(Zusammenfassung)',
'right-spamregex' => 'Ungewollte Phrasen Ã¼ber [[Special:SpamRegex]] blockieren',
);

/** German (formal address) (Deutsch (Sie-Form)â€Ž)
* @author ChrisiPK
* @author Imre
* @author Kghbln
*/
$messages['de-formal'] = array(
'spamregex-intro' => 'Benutzen Sie dieses Formular, um effektiv zu verhindern, dass angegebene Phrasen in den Text einer Seite eingefÃ¼gt werden.
Wenn der Text die angegebene Phrase enthÃ¤lt, wird die Ã„nderung nicht gespeichert und ein Hinweis an den Benutzer ausgegeben, der versucht hat, die Seite zu speichern.
Seien Sie aber vorsichtig, Phrasen sollten nicht zu kurz oder zu allgemein sein.',
'spamregex-move' => 'Die Zusammenfassung, die Sie angaben, enthÃ¤lt eine gesperrte Phrase.',
'spamregex-warning-1' => 'Bitte geben Sie eine Phrase fÃ¼r die Sperrung an.',
'spamregex-warning-2' => 'Bitte wÃ¤hlen Sie mindestens eine Sperrmethode aus.',
);

/** Lower Sorbian (dolnoserbski)
* @author Michawiki
*/
$messages['dsb'] = array(
'spamregex' => 'SpamRegex',
'spamregex-desc' => 'Njewitane fraze na wobÅºÄ›Å‚anych bokach z pomocu regularnych wurazow [[Special:SpamRegex|wufiltrowaÅ›]]',
'spamregex-error-unblocking' => 'ZmÃ³lka pÅ›i pÅ›ipuÅ¡Ä‡anju "$1". Nejskerjej taki muster njeeksistÄ›rujo.',
'spamregex-summary' => 'Tekst jo se namakaÅ‚ w zespominanju boka.',
'spamregex-intro' => 'WuÅ¾yj toÅ› ten formular, aby zajÅºowaÅ‚, aÅ¾ by se skÅ‚adowali wuraze do teksta boka.
Jolic tekst wopÅ›imujo pÃ³dany wuraz, zmÄ›na njeby se skÅ‚adowaÅ‚a a wujasnjenje pokaÅ¾o se wuÅ¾iwarjeju, kÃ³taryÅ¾ jo wopytaÅ‚ bok skÅ‚adowaÅ›.
BuÅº pak wobglÄ›dniwy, wuraze njeby pÅ›ekrotke abo pÅ›epowÅ¡ykne byÅ›.',
'spamregex-page-title' => 'Njewitane wuraze z pomocu regularnych wurazow blokÄ›rowaÅ›',
'spamregex-currently-blocked' => "'''Tuchylu blokÄ›rowane fraze:'''",
'spamregex-move' => 'PÅ›icyna, kÃ³taruÅ¾ sy zapÃ³daÅ‚, wopÅ›imujo blokÄ›rowanu frazu.',
'spamregex-no-currently-blocked' => "'''Njejsu blokÄ›rowane fraze.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 wÃ³tpÃ³raÅ›]) pÅ›idany wÃ³t $5 $6 $7",
'spamregex-page-title-1' => 'Frazu z pomocu regularnych wurazow blokÄ›rowaÅ›',
'spamregex-unblock-success' => 'PÅ›ipuÅ¡Ä‡enje wuspÄ›Å¡ne',
'spamregex-unblock-message' => "Fraza '''$1''' jo se pÅ›ipuÅ¡Ä‡iÅ‚a za wobÅºÄ›Å‚anje.",
'spamregex-page-title-2' => 'Fraze pÅ›eÅ›iwo skÅ‚adowanjeju z pomocu regularnych wurazow blokÄ›rowaÅ›',
'spamregex-block-success' => 'BlokÄ›rowanje wuspÄ›Å¡ne',
'spamregex-block-message' => "Fraza '''$1''' jo se blokÄ›rowaÅ‚a.",
'spamregex-warning-1' => 'PÃ³daj frazu za blokÄ›rowanje.',
'spamregex-error-1' => 'NjepÅ‚aÅ›iwy regularny wuraz.',
'spamregex-warning-2' => 'PÅ¡osym wubjeÅ• nanejmjenjej jaden blokÄ›rowaÅ„ski modus.',
'spamregex-already-blocked' => '"$1" jo juÅ¾o blokÄ›rowany.',
'spamregex-phrase-block' => 'Fraza, kÃ³taraÅ¾ ma se blokÄ›rowaÅ›:',
'spamregex-phrase-block-text' => 'Frazu w bokowem teksÄ‡e blokÄ›rowaÅ›',
'spamregex-phrase-block-summary' => 'frazu w zespominanju blokÄ›rowaÅ›',
'spamregex-block-submit' => 'ToÅ›&nbsp;tu&nbsp;frazu&nbsp;blokÄ›rowaÅ›',
'spamregex-text' => '(Tekst)',
'spamregex-summary-log' => '(Zespominanje)',
'right-spamregex' => 'Njewitane fraze pÅ›ez [[Special:SpamRegex]] blokÄ›rowaÅ›',
);

/** Greek (Î•Î»Î»Î·Î½Î¹ÎºÎ¬)
* @author Consta
* @author Lou
* @author ZaDiak
*/
$messages['el'] = array(
'spamregex' => 'Î¤Î±ÎºÏ„Î¹ÎºÎ® Î­ÎºÏ†ÏÎ±ÏƒÎ· spam',
'spamregex-summary' => 'Î¤Î¿ ÎºÎµÎ¯Î¼ÎµÎ½Î¿ Î²ÏÎ­Î¸Î·ÎºÎµ ÏƒÏ„Î·Î½ Ï€ÎµÏÎ¯Î»Î·ÏˆÎ· Ï„Î·Ï‚ ÏƒÎµÎ»Î¯Î´Î±Ï‚.',
'spamregex-currently-blocked' => "'''Î¥Ï€Î¬ÏÏ‡Î¿Ï…ÏƒÎµÏ‚ Ï†ÏÎ±Î³Î¼Î­Î½ÎµÏ‚ Ï†ÏÎ¬ÏƒÎµÎ¹Ï‚:'''",
'spamregex-no-currently-blocked' => "'''Î”ÎµÎ½ Ï…Ï€Î¬ÏÏ‡Î¿Ï…Î½ Ï†ÏÎ±Î³Î¼Î­Î½ÎµÏ‚ Ï†ÏÎ¬ÏƒÎµÎ¹Ï‚.'''",
'spamregex-unblock-success' => 'Î— Î±Ï€ÏŒÏ†ÏÎ±Î¾Î· Î¿Î»Î¿ÎºÎ»Î·ÏÏŽÎ¸Î·ÎºÎµ ÎµÏ€Î¹Ï„Ï…Ï‡ÏŽÏ‚.',
'spamregex-block-success' => 'Î— Ï†ÏÎ±Î³Î® Î®Ï„Î±Î½ ÎµÏ€Î¹Ï„Ï…Ï‡Î®Ï‚',
'spamregex-block-message' => "Î— Ï†ÏÎ¬ÏƒÎ· '''$1''' Î­Ï‡ÎµÎ¹ Ï†ÏÎ±Î³ÎµÎ¯.",
'spamregex-warning-1' => 'Î”ÏŽÏƒÏ„Îµ Î¼Î¹Î± Ï†ÏÎ¬ÏƒÎ· Î³Î¹Î± Ï†ÏÎ±Î³Î®.',
'spamregex-warning-2' => 'Î Î±ÏÎ±ÎºÎ±Î»ÏŽ ÎµÎ»Î­Î³Î¾Ï„Îµ Ï„Î¿Ï…Î»Î¬Ï‡Î¹ÏƒÏ„Î¿Î½ Î¼Î¹Î± Î»ÎµÎ¹Ï„Î¿Ï…ÏÎ³Î¯Î± Ï†ÏÎ±Î³Î®Ï‚.',
'spamregex-already-blocked' => 'ÎŸ "$1" ÎµÎ¯Î½Î±Î¹ Î®Î´Î· Ï†ÏÎ±Î³Î¼Î­Î½Î¿Ï‚',
'spamregex-phrase-block' => 'Î¦ÏÎ¬ÏƒÎ· Î³Î¹Î± Ï†ÏÎ±Î³Î®:',
'spamregex-phrase-block-text' => 'Î³ÏÎ±Ï†Î® Ï†ÏÎ¬ÏƒÎ·Ï‚ ÏƒÏ„Î¿ ÎºÎµÎ¯Î¼ÎµÎ½Î¿ Ï„Î·Ï‚ ÏƒÎµÎ»Î¯Î´Î±Ï‚',
'spamregex-phrase-block-summary' => 'Ï†ÏÎ±Î³Î® Ï†ÏÎ¬ÏƒÎ· ÏƒÏ„Î· ÏƒÏÎ½Î¿ÏˆÎ·',
'spamregex-block-submit' => 'Î¦ÏÎ±Î³Î®&nbsp;Ï„Î·Ï‚&nbsp;Ï†ÏÎ¬ÏƒÎ·Ï‚',
'spamregex-text' => '(ÎºÎµÎ¯Î¼ÎµÎ½Î¿)',
'spamregex-summary-log' => '(Î ÎµÏÎ¯Î»Î·ÏˆÎ·)',
);

/** Esperanto (Esperanto)
* @author Melancholie
* @author Yekrats
*/
$messages['eo'] = array(
'spamregex-summary' => 'La teksto estis trovita en la resumo de la paÄo.',
'spamregex-currently-blocked' => "'''Nune forbaritaj frazeroj:'''",
'spamregex-move' => 'La kialo kiun vi enigis enhavis forbaritajn frazeron.',
'spamregex-no-currently-blocked' => "'''Ne estas iuj ajn forbaritaj vortaj kombinaÄµoj.'''",
'spamregex-page-title-1' => 'Forbari frazero uzante regularajn esprimojn',
'spamregex-unblock-success' => 'Malforbaro sukcesis',
'spamregex-unblock-message' => "Frazero '''$1''' estis malforbarita de redaktado.",
'spamregex-page-title-2' => 'Malpermesigi frazerojn kontraÅ­ konservado per regularaj esprimoj',
'spamregex-block-success' => 'Forbaro sukcesis',
'spamregex-block-message' => "Frazero '''$1''' estis forbarita.",
'spamregex-warning-1' => 'Eligi frazeron por forbari.',
'spamregex-error-1' => 'Nevalida regula esprimo.',
'spamregex-already-blocked' => '"$1" jam estas forbarita.',
'spamregex-phrase-block' => 'Vorta kombinaÄµo por forbari:',
'spamregex-phrase-block-text' => 'forbari frazon en paÄa teksto',
'spamregex-phrase-block-summary' => 'forbari frazeron en resumo',
'spamregex-block-submit' => 'Forbari&nbsp;Ä‰i&nbsp;tiun&nbsp;frazeron',
'spamregex-text' => '(Teksto)',
'spamregex-summary-log' => '(Resumo)',
);

/** Spanish (espaÃ±ol)
* @author Antur
* @author Crazymadlover
* @author Dferg
* @author Fitoschido
* @author Imre
*/
$messages['es'] = array(
'spamregex' => 'Spam regex',
'spamregex-desc' => '[[Special:SpamRegex|Filtrar]] frases no deseadas en pÃ¡ginas editadas, basadas en expresiones regulares',
'spamregex-error-unblocking' => 'Error al desbloquear Â«$1Â». Probablemente no exista tal ruta.',
'spamregex-summary' => 'El texto fue encontrado en el resumen de la pÃ¡gina.',
'spamregex-intro' => 'Use este formulario para evitar la inclusiÃ³n de expresiones en el texto de una pÃ¡gina.
Si el texto contiene la expresion dada, no se grabarÃ¡ el cambio y se mostrarÃ¡ una explicaciÃ³n al usuario que intenta guardar la pÃ¡gina.
Sea cuidadoso, las expresiones a prohibir no deberÃ­an ser muy cortas o muy comunes.',
'spamregex-page-title' => 'Bloqueo de expresiones no deseadas spam regex',
'spamregex-currently-blocked' => "'''Frases actualmente bloqueadas:'''",
'spamregex-move' => 'La razÃ³n que ha ingresado contiene una frase bloqueada.',
'spamregex-no-currently-blocked' => "'''No hay frases bloqueadas.'''",
'spamregex-log' => " '''$1''' $2 ([{{SERVER}}$3&text=$4 borrado]) agregado por $5 sobre $6 en $7",
'spamregex-page-title-1' => 'Bloquear frase usando expresiones regulares',
'spamregex-unblock-success' => 'Desbloqueo exitoso',
'spamregex-unblock-message' => "La frase '''$1''' ha sido desbloqueada de la ediciÃ³n.",
'spamregex-page-title-2' => 'Bloquear frases desde el grabado usando expresiones regulares',
'spamregex-block-success' => 'Bloqueo exitoso',
'spamregex-block-message' => "La frase '''$1''' ha sido bloqueada.",
'spamregex-warning-1' => 'Proporcione una frase a bloquear.',
'spamregex-error-1' => 'ExpresiÃ³n regular no vÃ¡lida.',
'spamregex-warning-2' => 'Marque al menos un modo de bloqueo.',
'spamregex-already-blocked' => 'Â«$1Â» ya estÃ¡ bloqueado',
'spamregex-phrase-block' => 'Frase a bloquear:',
'spamregex-phrase-block-text' => 'bloquear frase en texto de pÃ¡gina',
'spamregex-phrase-block-summary' => 'bloquear frase en resumen',
'spamregex-block-submit' => 'Bloquear&nbsp;esta&nbsp;frase',
'spamregex-text' => '(Texto)',
'spamregex-summary-log' => '(Resumen)',
'right-spamregex' => 'Bloquear frases spam a traves de [[Special:SpamRegex]]',
);

/** Estonian (eesti)
* @author Avjoska
*/
$messages['et'] = array(
'spamregex-unblock-success' => 'Blokeerimise tÃ¼histamine Ãµnnestus',
'spamregex-block-success' => 'Blokeerimine Ãµnnestus',
);

/** Basque (euskara)
* @author An13sa
* @author Kobazulo
*/
$messages['eu'] = array(
'spamregex-currently-blocked' => "'''Gaur egun blokeatutako esaldiak:'''",
'spamregex-no-currently-blocked' => "'''Ez dago blokeatutako esaldirik.'''",
'spamregex-warning-1' => 'Idatz ezazu blokeatzeko esaldi bat.',
'spamregex-phrase-block' => 'Blokeatu beharreko esaldia:',
'spamregex-block-submit' => 'Esaldi&nbsp;hau&nbsp;blokeatu',
'spamregex-text' => '(Testu)',
'spamregex-summary-log' => '(Laburpen)',
);

/** Persian (ÙØ§Ø±Ø³ÛŒ)
* @author ZxxZxxZ
*/
$messages['fa'] = array(
'spamregex-currently-blocked' => "'''Ø¹Ø¨Ø§Ø±Øªâ€ŒÙ‡Ø§ÛŒ Ù…Ø³Ø¯ÙˆØ¯Ø´Ø¯Ù‡Ù” Ú©Ù†ÙˆÙ†ÛŒ:'''",
'spamregex-block-success' => 'Ù…Ø³Ø¯ÙˆØ¯Ú©Ø±Ø¯Ù† Ø¨Ø§ Ù…ÙˆÙÙ‚ÛŒØª Ø§Ù†Ø¬Ø§Ù… Ø´Ø¯',
'spamregex-block-message' => "Ø¹Ø¨Ø§Ø±Øª '''$1''' Ù…Ø³Ø¯ÙˆØ¯ Ø´Ø¯Ù‡â€ŒØ§Ø³Øª.",
'spamregex-text' => '(Ù…ØªÙ†)',
'spamregex-summary-log' => '(Ø®Ù„Ø§ØµÙ‡)',
);

/** Finnish (suomi)
* @author Silvonen
* @author Str4nd
*/
$messages['fi'] = array(
'spamregex-error-unblocking' => 'Ilmauksen â€$1â€ eston poisto ei onnistunut. SitÃ¤ ei todennÃ¤kÃ¶isesti ole estetty.',
'spamregex-summary' => 'Teksti lÃ¶ytyi sivun yhteenvedosta.',
'spamregex-currently-blocked' => "'''Estetyt ilmaukset:'''",
'spamregex-move' => 'Antamasi syy sisÃ¤lsi estetyn ilmauksen.',
'spamregex-no-currently-blocked' => "'''EstettyjÃ¤ ilmauksia ei ole.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 poista]) lisÃ¤si $5 $6 klo $7",
'spamregex-page-title-1' => 'EstÃ¤ ilmaus sÃ¤Ã¤nnÃ¶llisten lausekkeiden avulla',
'spamregex-unblock-success' => 'Eston poisto onnistui',
'spamregex-unblock-message' => "Ilmauksen '''$1''' esto on poistettu.",
'spamregex-page-title-2' => 'EstÃ¤ ilmausten tallentaminen sÃ¤Ã¤nnÃ¶llisten lausekkeiden avulla',
'spamregex-block-success' => 'Esto onnistui',
'spamregex-block-message' => "Ilmaus '''$1''' on estetty.",
'spamregex-warning-1' => 'Anna estettÃ¤vÃ¤ ilmaus.',
'spamregex-error-1' => 'Virheellinen sÃ¤Ã¤nnÃ¶llinen lauseke.',
'spamregex-warning-2' => 'Valitse ainakin yksi estotapa.',
'spamregex-already-blocked' => 'â€$1â€ on jo estetty',
'spamregex-phrase-block' => 'EstettÃ¤vÃ¤ ilmaus:',
'spamregex-phrase-block-text' => 'estÃ¤ ilmaus sivun tekstissÃ¤',
'spamregex-phrase-block-summary' => 'estÃ¤ ilmaus yhteenvedossa',
'spamregex-block-submit' => 'EstÃ¤&nbsp;tÃ¤mÃ¤&nbsp;ilmaus',
'spamregex-text' => '(Teksti)',
'spamregex-summary-log' => '(Yhteenveto)',
);

/** French (franÃ§ais)
* @author Grondin
* @author IAlex
* @author Meno25
* @author Urhixidur
*/
$messages['fr'] = array(
'spamregex' => 'Expressions rationnelles de pourriels',
'spamregex-desc' => '[[Special:SpamRegex|Filtre]], dans les pages, les phrases ou mots indÃ©sirables, basÃ© sur des expressions rationnelles',
'spamregex-error-unblocking' => 'Erreur de dÃ©blocage de Â« $1 Â». Il nâ€™y a pas probablement aucun modÃ¨le.',
'spamregex-summary' => 'Le texte en question a Ã©tÃ© dÃ©tectÃ© dans le commentaire de la page.',
'spamregex-intro' => 'Utilisez ce formulaire pour bloquer effectivement les expressions pouvant Ãªtre sauvegardÃ©es dans une page texte. Si le texte contient les expressions dÃ©finies, les changements ne pourront Ãªtre sauvegardÃ©s et un motif explicatif sera affichÃ© Ã lâ€™utilisateur qui a voulu sauvegarder la page. Il est important de prendre en considÃ©ration que les expressions ne devront Ãªtre ni trop longues ni trop courantes.',
'spamregex-page-title' => 'Blocage des expressions rationnelles de pourriels',
'spamregex-currently-blocked' => "'''Phrases actuellement bloquÃ©es :'''",
'spamregex-move' => 'Le motif que vous avez inscrit contenait une phrase bloquÃ©e.',
'spamregex-no-currently-blocked' => "'''Il nâ€™y a aucune phrase bloquÃ©e.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 supprimer]) ajoutÃ© par $5 le $6 Ã $7",
'spamregex-page-title-1' => 'Blocage dâ€™une phrase utilisant des expressions rationnelles',
'spamregex-unblock-success' => 'Le dÃ©blocage a rÃ©ussi',
'spamregex-unblock-message' => "La phrase '''$1''' a Ã©tÃ© dÃ©bloquÃ©e Ã lâ€™Ã©dition.",
'spamregex-page-title-2' => 'Blocage des phrases en utilisant des expressions rationnelles',
'spamregex-block-success' => 'Le blocage a rÃ©ussi',
'spamregex-block-message' => "La phrase '''$1''' a Ã©tÃ© bloquÃ©e.",
'spamregex-warning-1' => 'Indiquez une phrase Ã bloquer.',
'spamregex-error-1' => 'Expression rationnelle invalide.',
'spamregex-warning-2' => 'Choisissez au moins un mode de blocage.',
'spamregex-already-blocked' => 'Â« $1 Â» est dÃ©jÃ bloquÃ©',
'spamregex-phrase-block' => 'Phrase Ã bloquer :',
'spamregex-phrase-block-text' => 'bloquer la phrase dans le texte de la page',
'spamregex-phrase-block-summary' => 'bloquer la phrase dans le commentaire',
'spamregex-block-submit' => 'Bloquer&nbsp;cette&nbsp;phrase',
'spamregex-text' => '(Texte)',
'spamregex-summary-log' => '(Commentaire)',
'right-spamregex' => 'Bloquer du spam depuis [[Special:SpamRegex]]',
);

/** Franco-ProvenÃ§al (arpetan)
* @author Cedric31
* @author ChrisPtDe
*/
$messages['frp'] = array(
'spamregex' => 'ÃˆxprÃ¨ssions racionÃ¨les de spames',
'spamregex-currently-blocked' => "'''FrÃ¢ses ora blocÃ¢s :'''",
'spamregex-no-currently-blocked' => "'''Y at gins de frÃ¢sa blocÃ¢.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 enlevar]) apondu per $5 lo $6 a $7",
'spamregex-unblock-success' => 'Lo dÃ¨blocÃ¢jo at reussi',
'spamregex-block-success' => 'Lo blocÃ¢jo at reussi',
'spamregex-block-message' => "La frÃ¢sa '''$1''' at Ã©tÃ¢ blocÃ¢.",
'spamregex-error-1' => 'ÃˆxprÃ¨ssion racionÃ¨la fÃ´ssa.',
'spamregex-already-blocked' => 'Â« $1 Â» est ja blocÃ¢',
'spamregex-phrase-block' => 'FrÃ¢sa a blocar :',
'spamregex-phrase-block-text' => 'blocar la frÃ¢sa dens lo tÃ¨xto de la pÃ¢ge',
'spamregex-phrase-block-summary' => 'blocar la frÃ¢sa dens lo rÃ¨sumÃ¢',
'spamregex-block-submit' => 'Blocar&nbsp;cela&nbsp;frÃ¢sa',
'spamregex-text' => '(TÃ¨xto)',
'spamregex-summary-log' => '(RÃ¨sumÃ¢)',
);

/** Western Frisian (Frysk)
* @author Snakesteuben
*/
$messages['fy'] = array(
'spamregex-already-blocked' => '"$1" is al Ãºtsluten',
);

/** Irish (Gaeilge)
* @author à¶´à·ƒà·’à¶³à·” à¶šà·à·€à·’à¶±à·Šà¶¯
*/
$messages['ga'] = array(
'spamregex-summary-log' => '(Achoimre)',
);

/** Galician (galego)
* @author Alma
* @author ToliÃ±o
* @author XosÃ©
*/
$messages['gl'] = array(
'spamregex' => 'SpamRegex',
'spamregex-desc' => '[[Special:SpamRegex|Filtro]] de frases non desexadas nas pÃ¡xinas editadas, baseado en expresiÃ³ns regulares',
'spamregex-error-unblocking' => 'Erro ao desbloquear "$1". Probablemente non hai tal patrÃ³n.',
'spamregex-summary' => 'O texto atopouse no resumo da pÃ¡xina.',
'spamregex-intro' => 'Use este formulario para bloquear de maneira efectiva expresiÃ³ns para que non se poidan gardar no texto dunha pÃ¡xina.
Se o texto contÃ©n a expresiÃ³n dada, o cambio non poderÃ¡ ser gardado e unha explicaciÃ³n serÃ¡ amosada ao usuario que intentou gardar a pÃ¡xina.
TeÃ±a en conta que as expresiÃ³ns non deberÃ­an ser moi curtas ou moi comÃºns.',
'spamregex-page-title' => 'Bloqueo spam regex de expresiÃ³ns non desexadas',
'spamregex-currently-blocked' => "'''Frases actualmente bloqueadas:'''",
'spamregex-move' => 'O motivo que inseriu contÃ©n unha frase bloqueada.',
'spamregex-no-currently-blocked' => "'''Non hai frases bloqueadas.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 eliminar]) engadido por $5 o $6 Ã¡s $7",
'spamregex-page-title-1' => 'Bloquear frase usando expresiÃ³ns regulares',
'spamregex-unblock-success' => 'Desbloqueo con Ã©xito',
'spamregex-unblock-message' => "A frase '''$1''' foi desbloqueada para a ediciÃ³n.",
'spamregex-page-title-2' => 'Bloquear frases usando expresiÃ³ns regulares para que non poidan ser guardadas',
'spamregex-block-success' => 'Bloqueo con Ã©xito',
'spamregex-block-message' => "A frase '''$1''' foi bloqueada.",
'spamregex-warning-1' => 'Dar unha frase para bloquear.',
'spamregex-error-1' => 'ExpresiÃ³n regular non vÃ¡lida.',
'spamregex-warning-2' => 'Por favor, comprobe, polo menos, un modo de bloqueo.',
'spamregex-already-blocked' => '"$1" xa estÃ¡ bloqueado',
'spamregex-phrase-block' => 'Frase para bloquear:',
'spamregex-phrase-block-text' => 'bloquear unha frase no texto da pÃ¡xina',
'spamregex-phrase-block-summary' => 'bloquear frase no resumo',
'spamregex-block-submit' => 'Bloquear&nbsp;esta&nbsp;frase',
'spamregex-text' => '(Texto)',
'spamregex-summary-log' => '(Resumo)',
'right-spamregex' => 'Bloquear as frases de spam mediante [[Special:SpamRegex]]',
);

/** Ancient Greek (á¼ˆÏÏ‡Î±Î¯Î± á¼‘Î»Î»Î·Î½Î¹Îºá½´)
* @author Crazymadlover
*/
$messages['grc'] = array(
'spamregex-summary-log' => '(Î£ÏÎ½Î¿ÏˆÎ¹Ï‚)',
);

/** Swiss German (Alemannisch)
* @author Als-Holder
* @author Melancholie
*/
$messages['gsw'] = array(
'spamregex' => 'Spam regex',
'spamregex-desc' => '[[Special:SpamRegex|Filter]] nit gwinschti Phrasen us gÃ¤nderete Syte uus, basiert uf regulÃ¤re Uusdrick',
'spamregex-error-unblocking' => 'Het â€ž$1â€œ nit chenne frejgee. Wahrschyyns git kei sonigs Muschter.',
'spamregex-summary' => 'Dr TÃ¤xt isch in dr ZÃ¤mmefassig gfunde wore.',
'spamregex-intro' => 'VerwÃ¤nd des Formular go effektiv verhindere, ass Phrase, wu aagee wore sin, in dr TÃ¤xt yygee wÃ¤re.
WÃ¤nn s im TÃ¤xt Phrase het, wu aagee sin, no wird d Ã„nderig nit gspycheret un e Hiiwyys an de Benutzer uusgee, wu versuecht het, d Syte z spychere.
Bii aber vorsichtig, Phrase sotte nit z churz oder zue allgmein syy.',
'spamregex-page-title' => 'Nit gwinschti Uusdrick filtere',
'spamregex-currently-blocked' => "'''Im MomÃ¤nt gsperrti Phrase:'''",
'spamregex-move' => 'In dr ZÃ¤mmefassig, wu Du aagee hesch, het s e gsperrti Phrase.',
'spamregex-no-currently-blocked' => "'''S git im MomÃ¤nt kei gsperrti Phrase.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 useneh]) zuegfiegt vu $5 am $6 am $7",
'spamregex-page-title-1' => 'Sperr Phrase as regulÃ¤re Uusdruck',
'spamregex-unblock-success' => 'Entsperrig erfolgryych',
'spamregex-unblock-message' => "Phrase â€ž'''$1'''â€œ isch fir Bearbeitige entsperrt.",
'spamregex-page-title-2' => 'Sperr s Spychere vu dr Phrase as regulÃ¤re Uusdruck',
'spamregex-block-success' => 'Sperrig erfolgryych',
'spamregex-block-message' => "Phrase â€ž'''$1'''â€œ isch gsperrt wore.",
'spamregex-warning-1' => 'Phrase zum Sperren aagee',
'spamregex-error-1' => 'Nit giltige regulÃ¤re Uusdruck.',
'spamregex-warning-2' => 'Bitte wehl zmindescht ei Sperrmethod uus.',
'spamregex-already-blocked' => 'â€ž$1â€œ isch scho gsperrt',
'spamregex-phrase-block' => 'Phrase, wu soll gsperrt wÃ¤re:',
'spamregex-phrase-block-text' => 'Phrase im SytetÃ¤xt sperre',
'spamregex-phrase-block-summary' => 'Phrase in dr ZÃ¤mmefassig sperre',
'spamregex-block-submit' => 'Phrase sperre',
'spamregex-text' => '(TÃ¤xt)',
'spamregex-summary-log' => '(ZÃ¤mmefassig)',
'right-spamregex' => 'Sperr nit gwinschti Phrase iber [[Special:SpamRegex]]',
);

/** Hausa (Hausa) */
$messages['ha'] = array(
'spamregex-summary-log' => '(TaÆ™aici)',
);

/** Hebrew (×¢×‘×¨×™×ª)
* @author Rotemliss
* @author YaronSh
*/
$messages['he'] = array(
'spamregex' => '×‘×™×˜×•×™ ×¨×’×•×œ×¨×™ ×œ×¡×¤××',
'spamregex-desc' => '[[Special:SpamRegex|×¡×™× ×•×Ÿ]] ×ž×•× ×—×™× ×‘×œ×ª×™ ×¨×¦×•×™×™× ×‘×“×¤×™× ×©× ×¢×¨×›×™×, ×‘×”×ª×‘×¡×¡ ×¢×œ ×‘×™×˜×•×™×™× ×¨×’×•×œ×¨×™×™×',
'spamregex-error-unblocking' => '×©×’×™××” ×‘×‘×™×˜×•×œ ×—×¡×™×ž×ª "$1". ×™×™×ª×›×Ÿ ×©×œ× ×§×™×™×ž×ª ×ª×‘× ×™×ª ×›×–×•.',
'spamregex-summary' => '×”×˜×§×¡×˜ × ×ž×¦× ×‘×ª×§×¦×™×¨ ×”×“×£.',
'spamregex-intro' => '×”×©×ª×ž×©×• ×‘×˜×•×¤×¡ ×–×” ×›×“×™ ×œ×—×¡×•× ×‘××•×¤×Ÿ ×™×¢×™×œ ××ª ××¤×©×¨×•×ª ×”×©×ž×™×¨×” ×©×œ ×‘×™×˜×•×™×™× ×ž×¡×•×™×ž×™× ×œ×˜×§×¡×˜ ×”×“×£.
×× ×”×˜×§×¡×˜ ×ž×›×™×œ ××ª ×”×‘×™×˜×•×™ ×”× ×ª×•×Ÿ, ×”×©×™× ×•×™ ×œ× ×™×™×©×ž×¨, ×•×‘×ž×§×•× ×–××ª ×™×•×¤×™×¢ ×”×¡×‘×¨ ×œ×ž×©×ª×ž×© ×©× ×™×¡×” ×œ×©×ž×•×¨ ××ª ×”×“×£.
×©×™×ž×• ×œ×‘, ×ž×•×ž×œ×¥ ×œ×”×™×ž× ×¢ ×ž×‘×™×˜×•×™×™× ×§×¦×¨×™× ×ž×“×™ ××• × ×¤×•×¦×™× ×ž×“×™.',
'spamregex-page-title' => '×—×¡×™×ž×ª ×‘×™×˜×•×™×™ ×¡×¤×× ×‘×œ×ª×™ ×¨×¦×•×™×™×',
'spamregex-currently-blocked' => "'''×ž×•× ×—×™× ×”× ×—×¡×ž×™× × ×›×•×Ÿ ×œ×¢×›×©×™×•:'''",
'spamregex-move' => '×”×¡×™×‘×” ×©×›×ª×‘×ª× ×ž×›×™×œ×” ×ž×•× ×— ×©× ×—×¡×.',
'spamregex-no-currently-blocked' => "'''××™×Ÿ ×ž×•× ×—×™× ×—×¡×•×ž×™×.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 ×”×¡×¨×”]) × ×•×¡×¤×” ×¢×œ ×™×“×™ $5 ×‘Ö¾$7, $6",
'spamregex-page-title-1' => '×—×¡×™×ž×ª ×‘×™×˜×•×™ ×‘××ž×¦×¢×•×ª ×‘×™×˜×•×™×™× ×¨×’×•×œ×¨×™×™×',
'spamregex-unblock-success' => '×”×¡×¨×ª ×”×—×¡×™×ž×” ×”×•×©×œ×ž×” ×‘×”×¦×œ×—×”',
'spamregex-unblock-message' => "×”×•×¡×¨×” ×—×¡×™×ž×ª ×”×ž×•× ×— '''$1''' ×ž×¢×¨×™×›×”.",
'spamregex-page-title-2' => '×—×¡×™×ž×ª ×ž×•× ×—×™× ×ž×©×ž×™×¨×” ×‘××ž×¦×¢×•×ª ×©×™×ž×•×© ×‘×‘×™×˜×•×™×™× ×¨×’×•×œ×¨×™×™×',
'spamregex-block-success' => '×”×—×¡×™×ž×” ×”×•×©×œ×ž×” ×‘×”×¦×œ×—×”',
'spamregex-block-message' => "×”×ž×•× ×— '''$1''' × ×—×¡×.",
'spamregex-warning-1' => '×”×§×œ×™×“×• ×ž×•× ×— ×œ×—×¡×™×ž×”.',
'spamregex-error-1' => '×”×‘×™×˜×•×™ ×”×¨×’×•×œ×¨×™ ××™× ×• ×ª×§×™×Ÿ.',
'spamregex-warning-2' => '×× × ×¡×ž× ×• ×œ×¤×—×•×ª ×ž×¦×‘ ×—×¡×™×ž×” ××—×“.',
'spamregex-already-blocked' => '"$1" ×›×‘×¨ × ×—×¡×',
'spamregex-phrase-block' => '×ž×•× ×— ×œ×—×¡×™×ž×”:',
'spamregex-phrase-block-text' => '×—×¡×™×ž×ª ×”×ž×•× ×— ×‘×˜×§×¡×˜ ×©×‘×“×£',
'spamregex-phrase-block-summary' => '×—×¡×™×ž×ª ×”×ž×•× ×— ×‘×ª×§×¦×™×¨',
'spamregex-block-submit' => '×—×¡×™×ž×ª&nbsp;×ž×•× ×—&nbsp;×–×”',
'spamregex-text' => '(×˜×§×¡×˜)',
'spamregex-summary-log' => '(×ª×§×¦×™×¨)',
'right-spamregex' => '×—×¡×™×ž×ª ×ž×•× ×—×™ ×¡×¤×× ×“×¨×š [[Special:SpamRegex]]',
);

/** Hindi (à¤¹à¤¿à¤¨à¥à¤¦à¥€)
* @author Kaustubh
* @author Siddhartha Ghai
*/
$messages['hi'] = array(
'spamregex-already-blocked' => '"$1" à¤•à¥‹ à¤ªà¤¹à¤²à¥‡à¤¸à¥‡ à¤¬à¥à¤²à¥‰à¤• à¤•à¤¿à¤¯à¤¾ à¤¹à¥à¤† à¤¹à¥ˆà¤‚',
'spamregex-summary-log' => '(à¤¸à¤‚à¤•à¥à¤·à¤¿à¤ªà¥à¤¤ à¤œà¤¾à¤¨à¤•à¤¾à¤°à¥€)',
);

/** Hiligaynon (Ilonggo)
* @author Jose77
*/
$messages['hil'] = array(
'spamregex-summary-log' => '(Kabilogan)',
);

/** Croatian (hrvatski)
* @author Dalibor Bosits
*/
$messages['hr'] = array(
'spamregex-summary-log' => '(SaÅ¾etak)',
);

/** Upper Sorbian (hornjoserbsce)
* @author Michawiki
*/
$messages['hsb'] = array(
'spamregex' => 'SpamRegex',
'spamregex-desc' => 'Njewitane frazy na wobdÅºÄ›Å‚anych stronach z pomocu regularnych wurazow [[Special:SpamRegex|wufiltrowaÄ‡]]',
'spamregex-error-unblocking' => 'Zmylk pÅ™i wotblokowanju "$1". Snano tajki muster njeeksistuje.',
'spamregex-summary' => 'Tekst je so w zjeÄ‡u strony namakaÅ‚.',
'spamregex-intro' => 'WuÅ¾ij tutÃ³n formular, zo by wurazy skutkownje pÅ™eÄ‡iwo skÅ‚adowanju w teksÄ‡e strony blokowaÅ‚. Jel tekst daty wuraz wobsahuje, zmÄ›na njeby so skÅ‚adowaÅ‚a a wujasnjenje so wuÅ¾iwarjej, kiÅ¾ je spytaÅ‚ stronu skÅ‚adowaÄ‡, pokaza. Jewi so warnowanje, zo wurazy njesmÄ›dÅºa pÅ™ekrÃ³tke abo pÅ™epowÅ¡itkowne byÄ‡.',
'spamregex-page-title' => 'Spam Regex Blokowanje njepoÅ¾adanych wurazow',
'spamregex-currently-blocked' => "'''Tuchwilu zablokowane frazy:'''",
'spamregex-move' => 'PÅ™iÄina, kotruÅ¾ sy podaÅ‚, je zablokowanu frazu wobsahowaÅ‚a.',
'spamregex-no-currently-blocked' => "'''Zablokowane frazy njejsu.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 wotstroniÄ‡]) pÅ™idaty wot $5 na $6 $7",
'spamregex-page-title-1' => 'Frazu, kotraÅ¾ regularne wurazy wuÅ¾iwa, blokowaÄ‡',
'spamregex-unblock-success' => 'Wotblokowanje wuspÄ›Å¡ne',
'spamregex-unblock-message' => "Fraza '''$1''' bu za wobdÅºÄ›Å‚owanje dopuÅ¡Ä‡ena.",
'spamregex-page-title-2' => 'Frazy z pomocu regularnych wurazow za skÅ‚adowanje blokowaÄ‡',
'spamregex-block-success' => 'Blokowanje wuspÄ›Å¡ne',
'spamregex-block-message' => "Fraza '''$1''' bu zablokowana.",
'spamregex-warning-1' => 'Podaj frazu za blokowanje.',
'spamregex-error-1' => 'NjepÅ‚aÄ‡iwy regularny wuraz.',
'spamregex-warning-2' => 'ProÅ¡u pÅ™epruwuj znajmjeÅ„Å¡a jedyn blokowanski modus.',
'spamregex-already-blocked' => '"$1" je hiÅ¾o zablokowany',
'spamregex-phrase-block' => 'Fraza, kotraÅ¾ ma so blokowaÄ‡:',
'spamregex-phrase-block-text' => 'frazu w teksÄ‡e stronya blokowaÄ‡',
'spamregex-phrase-block-summary' => 'frazu w zjeÄ‡u blokowaÄ‡',
'spamregex-block-submit' => 'Tutu&nbsp;frazu&nbsp;blokowaÄ‡',
'spamregex-text' => '(Tekst)',
'spamregex-summary-log' => '(ZjeÄ‡e)',
'right-spamregex' => 'Spamowe wurazy pÅ™ez [[Special:SpamRegex]] blokowaÄ‡',
);

/** Hungarian (magyar)
* @author Glanthor Reviol
*/
$messages['hu'] = array(
'spamregex' => 'Spam regulÃ¡ris kifejezÃ©s',
'spamregex-desc' => 'NemkÃ­vÃ¡natos kifejezÃ©sek [[Special:SpamRegex|kiszÅ±rÃ©se]] a szerkesztett lapokrÃ³l, regulÃ¡ris kifejezÃ©sek alapjÃ¡n',
'spamregex-error-unblocking' => 'Hiba a(z) â€ž$1â€ blokkolÃ¡sÃ¡nak feloldÃ¡sakor. ValÃ³szÃ­nÅ±leg nincs ilyen minta.',
'spamregex-summary' => 'SzÃ¶vegtalÃ¡lat a lap Ã¶sszefoglalÃ³jÃ¡ban.',
'spamregex-intro' => 'HasznÃ¡ld ezt az Å±rlapot kifejezÃ©sek lapszÃ¶vegbe mentÃ©sÃ©nek hatÃ©kony blokkolÃ¡sÃ¡hoz.
Ha a szÃ¶veg tartalmazza a megadott kifejezÃ©st, a vÃ¡ltoztatÃ¡s nem kerÃ¼l mentÃ©sre Ã©s egy magyarÃ¡zat jelenik meg a felhasznÃ¡lÃ³nak, aki menteni prÃ³bÃ¡lta a lapot.
Javasolt az Ã³vatossÃ¡g, a kifejezÃ©sek nem lehetnek tÃºl rÃ¶videk vagy tÃºl gyakoriak.',
'spamregex-page-title' => 'Nem kÃ­vÃ¡natos kifejezÃ©sek blokkolÃ¡sa',
'spamregex-currently-blocked' => "'''Jelenleg blokkolt kifejezÃ©sek:'''",
'spamregex-move' => 'A megadott indoklÃ¡s blokkolt kifejezÃ©st tartalmazott.',
'spamregex-no-currently-blocked' => "'''Nincsenek blokkolt kifejezÃ©sek.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 eltÃ¡volÃ­tÃ¡s]) hozzÃ¡adta $5 ekkor: $6 $7",
'spamregex-page-title-1' => 'KifejezÃ©s blokkolÃ¡sa regulÃ¡ris kifejezÃ©sek hasznÃ¡latÃ¡val',
'spamregex-unblock-success' => 'A blokk feloldÃ¡sa sikerÃ¼lt',
'spamregex-unblock-message' => "A(z) '''$1''' kifejezÃ©s blokkolÃ¡sa feloldva a szerkesztÃ©sbÅ‘l.",
'spamregex-page-title-2' => 'KifejezÃ©sek blokkolÃ¡sa mentÃ©s elÅ‘tt regulÃ¡ris kifejezÃ©sek hasznÃ¡latÃ¡val',
'spamregex-block-success' => 'A blokkolÃ¡s sikerÃ¼lt',
'spamregex-block-message' => "A(z) '''$1''' kifejezÃ©s blokkolva.",
'spamregex-warning-1' => 'Adj meg egy blokkolandÃ³ kifejezÃ©st.',
'spamregex-error-1' => 'Ã‰rvÃ©nytelen regulÃ¡ris kifejezÃ©s.',
'spamregex-warning-2' => 'KÃ©rlek vÃ¡lassz legalÃ¡bb egy blokkolÃ¡si mÃ³dot.',
'spamregex-already-blocked' => 'â€ž$1â€ mÃ¡r blokkolva van',
'spamregex-phrase-block' => 'BlokkolandÃ³ kifejezÃ©s:',
'spamregex-phrase-block-text' => 'kifejezÃ©s blokklÃ¡sa a lap szÃ¶vegÃ©ben',
'spamregex-phrase-block-summary' => 'kifejezÃ©s blokklÃ¡sa az Ã¶sszefoglalÃ³ban',
'spamregex-block-submit' => 'KifejezÃ©s blokkolÃ¡sa',
'spamregex-text' => '(SzÃ¶veg)',
'spamregex-summary-log' => '(Ã–sszefoglalÃ³)',
'right-spamregex' => 'Ã–sszetett spam kifejezÃ©sek blokkolÃ¡sa a [[Special:SpamRegex]] lapon',
);

/** Interlingua (interlingua)
* @author McDutchie
*/
$messages['ia'] = array(
'spamregex' => 'Regex antispam',
'spamregex-desc' => '[[Special:SpamRegex|Filtrar]] phrases non desirabile in paginas modificate, a base de expressiones regular',
'spamregex-error-unblocking' => 'Error durante le disblocada de "$1". Probabilemente non existe tal patrono.',
'spamregex-summary' => 'Le texto esseva trovate in le summario del pagina.',
'spamregex-intro' => 'Usa iste formulario pro effectivemente blocar certe expressiones de figurar in le texto de un pagina.
Si le texto de un modification contine un expression date hic, le modification non es immagazinate, e un explication se monstra al usator qui voleva publicar le pagina.
Caution avisate: le expressiones non debe esser troppo curte o troppo commun.',
'spamregex-page-title' => 'Blocada de expressiones non desirate per medio de regex antispam',
'spamregex-currently-blocked' => "'''Phrases actualmente blocate:'''",
'spamregex-move' => 'Le motivo que tu entrava contineva un phrase blocate.',
'spamregex-no-currently-blocked' => "'''Il non ha phrases blocate.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 disblocar]) addite per $5 le $6 a $7",
'spamregex-page-title-1' => 'Blocar un phrase per medio de expressiones regular',
'spamregex-unblock-success' => 'Disblocada succedite',
'spamregex-unblock-message' => "Le phrase '''$1''' ha essite disblocate de figurar in modificationes.",
'spamregex-page-title-2' => 'Blocar phrases de esser publicate per medio de expressiones regular',
'spamregex-block-success' => 'Blocada succedite',
'spamregex-block-message' => "Le phrase '''$1''' ha essite blocate.",
'spamregex-warning-1' => 'Da un phrase a blocar.',
'spamregex-error-1' => 'Expression regular invalide.',
'spamregex-warning-2' => 'Per favor selige al minus un modo de blocada.',
'spamregex-already-blocked' => '"$1" es ja blocate',
'spamregex-phrase-block' => 'Phrase a blocar:',
'spamregex-phrase-block-text' => 'blocar phrase in texto de pagina',
'spamregex-phrase-block-summary' => 'blocar phrase in summario',
'spamregex-block-submit' => 'Blocar&nbsp;iste&nbsp;phrase',
'spamregex-text' => '(Texto)',
'spamregex-summary-log' => '(Summario)',
'right-spamregex' => 'Blocar phrases de spam per medio de [[Special:SpamRegex]]',
);

/** Indonesian (Bahasa Indonesia)
* @author Bennylin
* @author IvanLanin
*/
$messages['id'] = array(
'spamregex' => 'Regex spam',
'spamregex-desc' => '[[Special:SpamRegex|Menyaring]] frasa yang tak diinginkan di halaman yang disunting, didasarkan pada ekspresi regular (regex).',
'spamregex-error-unblocking' => 'Kesalahan menghapus blokir "$1". Mungkin pola tersebut tak ditemukan.',
'spamregex-summary' => 'Teks tersebut ditemukan di ringkasan halaman.',
'spamregex-intro' => 'Gunakan isian ini untuk secara efektif memblokir penyimpanan ekspresi ke teks halaman.
Jika teks mengandung ekspresi tertentu, perubahan tidak akan disimpan dan penjelasan akan ditampilkan kepada pengguna yang mencoba untuk menyimpan halaman.
Disarankan agar ekspresi tidak terlalu pendek atau terlalu umum.',
'spamregex-page-title' => 'Blok ekspresi yang tidak diinginkan spam regex',
'spamregex-currently-blocked' => "'''Frasa yang sedang diblokir:'''",
'spamregex-move' => 'Alasan yang Anda masukkan mengandung suatu frasa yang diblokir.',
'spamregex-no-currently-blocked' => "''Tidak ada frasa yang diblokir.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 hapus]) ditambahkan oleh $5 pada $6 pukul $7",
'spamregex-page-title-1' => 'Blokir frasa dengan menggunakan ekspresi reguler',
'spamregex-unblock-success' => 'Pembukaan blokir berhasil',
'spamregex-unblock-message' => "Frasa '''$1''' telah dibuka blokirnya.",
'spamregex-page-title-2' => 'Blokir penyimpanan frasa dengan menggunakan ekspresi regular',
'spamregex-block-success' => 'Pemblokir berhasil',
'spamregex-block-message' => "Frasa '''$1''' telah diblokir.",
'spamregex-warning-1' => 'Berikan suatu frasa untuk diblokir',
'spamregex-error-1' => 'Ekspresi regular tidak valid.',
'spamregex-warning-2' => 'Silakan pilih paling tidak satu mode blokir.',
'spamregex-already-blocked' => '"$1" telah diblokir',
'spamregex-phrase-block' => 'Frasa untuk diblokir:',
'spamregex-phrase-block-text' => 'blokir frasa dalam teks halaman',
'spamregex-phrase-block-summary' => 'blokir frasa dalam ringkasan',
'spamregex-block-submit' => 'Blokirnbsp;frasa&nbsp;ini',
'spamregex-text' => '(Teks)',
'spamregex-summary-log' => '(Ringkasan)',
'right-spamregex' => 'Blokir frasa spam melalui [[Special:SpamRegex]]',
);

/** Icelandic (Ã­slenska)
* @author S.Ã–rvarr.S
*/
$messages['is'] = array(
'spamregex-already-blocked' => 'â€ž$1â€œ er nÃº Ã¾egar Ã­ banni',
);

/** Italian (italiano)
* @author Beta16
* @author Darth Kule
*/
$messages['it'] = array(
'spamregex-summary' => "Il testo Ã¨ stato trovato nell'oggetto della pagina.",
'spamregex-currently-blocked' => "'''Frasi attualmente bloccate:'''",
'spamregex-no-currently-blocked' => "'''Non ci sono frasi bloccate.'''",
'spamregex-unblock-success' => 'Sblocco eseguito',
'spamregex-block-success' => 'Blocco eseguito',
'spamregex-block-message' => "La frase '''$1''' Ã¨ stata bloccata.",
'spamregex-warning-1' => 'Inserisci una frase da bloccare.',
'spamregex-error-1' => 'Espressione regolare non valida.',
'spamregex-already-blocked' => '"$1" Ã¨ giÃ bloccato',
'spamregex-phrase-block' => 'Frase da bloccare:',
'spamregex-phrase-block-text' => 'frase bloccata nel testo della pagina',
'spamregex-phrase-block-summary' => "frase bloccata nell'oggetto",
'spamregex-block-submit' => 'Blocca&nbsp;questa&nbsp;frase',
'spamregex-text' => '(Testo)',
'spamregex-summary-log' => '(Oggetto)',
);

/** Japanese (æ—¥æœ¬èªž)
* @author Fryed-peach
* @author Shirayuki
* @author é’å­å®ˆæ­Œ
*/
$messages['ja'] = array(
'spamregex' => 'ã‚¹ãƒ‘ãƒ æ­£è¦è¡¨ç¾ãƒ•ã‚£ãƒ«ã‚¿ãƒ¼',
'spamregex-desc' => 'ç·¨é›†ã•ã‚ŒãŸãƒšãƒ¼ã‚¸ã‹ã‚‰æœ›ã¾ãªã„èªžå¥ã‚’æ­£è¦è¡¨ç¾ã«åŸºã¥ã„ã¦[[Special:SpamRegex|é™¤åŽ»ã™ã‚‹]]',
'spamregex-error-unblocking' => 'ã€Œ$1ã€ã®ãƒ–ãƒ­ãƒƒã‚¯è§£é™¤ä¸­ã®ã‚¨ãƒ©ãƒ¼ã§ã™ã€‚ãŠãã‚‰ãã€ãã®ã‚ˆã†ãªãƒ‘ã‚¿ãƒ¼ãƒ³ã¯å­˜åœ¨ã—ã¾ã›ã‚“ã€‚',
'spamregex-summary' => 'ãã®æ–‡å­—åˆ—ã¯ãƒšãƒ¼ã‚¸ã®è¦ç´„æ–‡ã§è¦‹ã¤ã‹ã‚Šã¾ã—ãŸã€‚',
'spamregex-intro' => 'ã“ã®ãƒ•ã‚©ãƒ¼ãƒ ã‚’ä½¿ç”¨ã™ã‚‹ã¨ã€ã‚ã‚‹èªžå¥ã‚’ãƒšãƒ¼ã‚¸ã®æ–‡ç« ã«ä¿å­˜ã•ã‚Œãªã„ã‚ˆã†ã«ã€åŠ¹çŽ‡çš„ã«ãƒ–ãƒ­ãƒƒã‚¯ã§ãã¾ã™ã€‚
æ–‡ç« ãŒæŒ‡å®šã•ã‚ŒãŸèªžå¥ã‚’å«ã‚€å ´åˆã¯ã€å¤‰æ›´ã¯ä¿å­˜ã•ã‚Œãšã€ãƒšãƒ¼ã‚¸ã‚’ä¿å­˜ã—ã‚ˆã†ã¨ã—ãŸåˆ©ç”¨è€…ã«èª¬æ˜Žæ–‡ãŒè¡¨ç¤ºã•ã‚Œã¾ã™ã€‚
èªžå¥ã¨ã—ã¦çŸ­ã™ãŽã‚‹ã‚‚ã®ã‚„ã‚ã¾ã‚Šã«ã‚ã‚Šãµã‚ŒãŸã‚‚ã®ã‚’æŒ‡å®šã—ãªã„ã‚ˆã†ã«æ³¨æ„ã—ã¦ãã ã•ã„ã€‚',
'spamregex-page-title' => 'ã‚¹ãƒ‘ãƒ æ­£è¦è¡¨ç¾ãƒ•ã‚£ãƒ«ã‚¿ãƒ¼ã«ã‚ˆã‚‹æœ›ã¾ãªã„èªžå¥ã®ãƒ–ãƒ­ãƒƒã‚¯',
'spamregex-currently-blocked' => "'''ç¾åœ¨ãƒ–ãƒ­ãƒƒã‚¯ã•ã‚Œã¦ã„ã‚‹èªžå¥:'''",
'spamregex-move' => 'ã‚ãªãŸãŒå…¥åŠ›ã—ãŸç†ç”±ã«ã¯ãƒ–ãƒ­ãƒƒã‚¯ã•ã‚Œã¦ã„ã‚‹èªžå¥ãŒå«ã¾ã‚Œã¦ã„ã¾ã—ãŸã€‚',
'spamregex-no-currently-blocked' => "'''ãƒ–ãƒ­ãƒƒã‚¯ã•ã‚Œã¦ã„ã‚‹èªžå¥ã¯ã‚ã‚Šã¾ã›ã‚“ã€‚'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 é™¤åŽ»]) ãŒã€$5 ã«ã‚ˆã‚Š $6 $7 ã«è¿½åŠ ",
'spamregex-page-title-1' => 'æ­£è¦è¡¨ç¾ã‚’ä½¿ã£ã¦èªžå¥ã‚’ãƒ–ãƒ­ãƒƒã‚¯',
'spamregex-unblock-success' => 'ãƒ–ãƒ­ãƒƒã‚¯ã®è§£é™¤ã«æˆåŠŸã—ã¾ã—ãŸ',
'spamregex-unblock-message' => "ã€Œ'''$1'''ã€ã¨ã„ã†èªžå¥ã‚’ä½¿ãˆã‚‹ã‚ˆã†ãƒ–ãƒ­ãƒƒã‚¯è§£é™¤ã—ã¾ã—ãŸã€‚",
'spamregex-page-title-2' => 'æ­£è¦è¡¨ç¾ã‚’ä½¿ç”¨ã—ã¦ã€èªžå¥ã‚’ä¿å­˜ã§ããªã„ã‚ˆã†ãƒ–ãƒ­ãƒƒã‚¯',
'spamregex-block-success' => 'ãƒ–ãƒ­ãƒƒã‚¯ã«æˆåŠŸã—ã¾ã—ãŸ',
'spamregex-block-message' => "ã€Œ'''$1'''ã€ã¨ã„ã†èªžå¥ã‚’ãƒ–ãƒ­ãƒƒã‚¯ã—ã¾ã—ãŸã€‚",
'spamregex-warning-1' => 'ãƒ–ãƒ­ãƒƒã‚¯ã™ã‚‹èªžå¥ã‚’æŒ‡å®šã—ã¦ãã ã•ã„ã€‚',
'spamregex-error-1' => 'æ­£è¦è¡¨ç¾ãŒç„¡åŠ¹ã§ã™ã€‚',
'spamregex-warning-2' => 'ãƒ–ãƒ­ãƒƒã‚¯æŒ‡å®šã‚’å°‘ãªãã¨ã‚‚1ã¤é¸æŠžã—ã¦ãã ã•ã„ã€‚',
'spamregex-already-blocked' => 'ã€Œ$1ã€ã¯æ—¢ã«ãƒ–ãƒ­ãƒƒã‚¯ã•ã‚Œã¦ã„ã¾ã™',
'spamregex-phrase-block' => 'ãƒ–ãƒ­ãƒƒã‚¯ã™ã‚‹èªžå¥:',
'spamregex-phrase-block-text' => 'èªžå¥ã‚’æœ¬æ–‡ä¸­ã§ãƒ–ãƒ­ãƒƒã‚¯',
'spamregex-phrase-block-summary' => 'èªžå¥ã‚’è¦ç´„æ–‡ä¸­ã§ãƒ–ãƒ­ãƒƒã‚¯',
'spamregex-block-submit' => 'ã“ã®èªžå¥ã‚’ãƒ–ãƒ­ãƒƒã‚¯',
'spamregex-text' => '(æœ¬æ–‡)',
'spamregex-summary-log' => '(è¦ç´„)',
'right-spamregex' => '[[Special:SpamRegex]] ã‚’ä½¿ç”¨ã—ã¦ã‚¹ãƒ‘ãƒ èªžå¥ã‚’ãƒ–ãƒ­ãƒƒã‚¯',
);

/** Javanese (Basa Jawa)
* @author Meursault2004
*/
$messages['jv'] = array(
'spamregex' => 'SpamRegex',
'spamregex-block-message' => "Ukara '''$1''' wis diblokir.",
'spamregex-warning-1' => 'WÃ¨nÃ¨hana ukara sing kudu diblokir.',
'spamregex-already-blocked' => '"$1" wis diblokir',
'spamregex-phrase-block' => 'Ukara sing diblokir:',
'spamregex-text' => '(TÃ¨ks)',
'spamregex-summary-log' => '(Ringkesan)',
);

/** Georgian (áƒ¥áƒáƒ áƒ—áƒ£áƒšáƒ˜)
* @author David1010
*/
$messages['ka'] = array(
'spamregex-text' => '(áƒ¢áƒ”áƒ¥áƒ¡áƒ¢áƒ˜)',
'spamregex-summary-log' => '(áƒ áƒ”áƒ–áƒ˜áƒ£áƒ›áƒ”)',
);

/** Kazakh (Cyrillic script) (Ò›Ð°Ð·Ð°Ò›ÑˆÐ° (ÐºÐ¸Ñ€Ð¸Ð»)â€Ž)
* @author GaiJin
*/
$messages['kk-cyrl'] = array(
'spamregex-summary-log' => '(Ð¢Ò¯Ð¹Ñ–Ð½Ð´ÐµÐ¼ÐµÑÑ–)',
);

/** Kazakh (Latin script) (qazaqÅŸa (latÄ±n)â€Ž)
* @author GaiJin
*/
$messages['kk-latn'] = array(
'spamregex-summary-log' => '(TÃ¼Ã½indemesi)',
);

/** Khmer (áž—áž¶ážŸáž¶ážáŸ’áž˜áŸ‚ážš)
* @author Chhorran
* @author Lovekhmer
* @author Thearith
*/
$messages['km'] = array(
'spamregex-summary' => 'áž¢áž€áŸ’ážŸážšâ€‹ážáŸ’ážšáž¼ážœâ€‹áž”áž¶áž“â€‹ážšáž€ážƒáž¾áž‰â€‹áž“áŸ…áž€áŸ’áž“áž»áž„â€‹ážŸáŸáž…áž€áŸ’ážŠáž¸ážŸáž„áŸ’ážáŸáž”â€‹áž“áŸƒâ€‹áž‘áŸ†áž–áŸážšâ€‹áŸ”',
'spamregex-block-success' => 'áž áž¶áž˜ážƒáž¶ážáŸ‹ážŠáŸ„áž™áž‡áŸ„áž‚áž‡áŸáž™',
'spamregex-block-message' => "ážƒáŸ’áž›áž¶ '''$1''' ážáŸ’ážšáž¼ážœâ€‹áž”áž¶áž“â€‹áž‘áž”áŸ‹ážŸáŸ’áž€áž¶ážáŸ‹â€‹áŸ”",
'spamregex-warning-1' => 'áž•áŸ’ážŠáž›áŸ‹â€‹ážƒáŸ’áž›áž¶â€‹áž˜áž½áž™â€‹ážŠáž¾áž˜áŸ’áž”áž¸â€‹áž‘áž”áŸ‹ážŸáŸ’áž€áž¶ážáŸ‹â€‹áŸ”',
'spamregex-warning-2' => 'ážŸáž¼áž˜â€‹áž–áž·áž“áž·ážáŸ’áž™â€‹ážšáž”áŸ€áž”â€‹áž‘áž”áŸ‹ážŸáŸ’áž€áž¶ážáŸ‹â€‹áž™áŸ‰áž¶áž„áž áŸ„áž…â€‹áž˜áž½áž™â€‹áŸ”',
'spamregex-already-blocked' => '"$1" ážáŸ’ážšáž¼ážœâ€‹áž”áž¶áž“â€‹áž‘áž”áŸ‹ážŸáŸ’áž€áž¶ážáŸ‹â€‹áž áž¾áž™',
'spamregex-phrase-block' => 'ážƒáŸ’áž›áž¶â€‹â€‹ážáŸ’ážšáž¼ážœâ€‹áž‘áž”áŸ‹ážŸáŸ’áž€áž¶ážáŸ‹â€‹áŸ–',
'spamregex-phrase-block-text' => 'áž‘áž”áŸ‹ážŸáŸ’áž€áž¶ážáŸ‹â€‹ážƒáŸ’áž›áž¶â€‹áž“áŸ…â€‹áž€áŸ’áž“áž»áž„â€‹áž¢ážáŸ’ážáž”áž‘â€‹áž‘áŸ†áž–áŸážš',
'spamregex-phrase-block-summary' => 'áž‘áž”áŸ‹ážŸáŸ’áž€áž¶ážáŸ‹â€‹ážƒáŸ’áž›áž¶â€‹áž‡áž¶â€‹ážŸáž„áŸ’ážáŸáž”',
'spamregex-block-submit' => 'áž‘áž”áŸ‹ážŸáŸ’áž€áž¶ážáŸ‹&nbsp;ážƒáŸ’áž›áž¶&nbsp;áž“áŸáŸ‡',
'spamregex-text' => '(ážƒáŸ’áž›áž¶)',
'spamregex-summary-log' => '(ážŸáŸáž…áž€áŸ’ážáž¸ážŸáž„áŸ’ážáŸáž”)',
);

/** Kannada (à²•à²¨à³à²¨à²¡)
* @author Nayvik
*/
$messages['kn'] = array(
'spamregex-text' => '(à²ªà² à³à²¯)',
'spamregex-summary-log' => '(à²¸à²¾à²°à²¾à²‚à²¶)',
);

/** Colognian (Ripoarisch)
* @author Purodha
*/
$messages['ksh'] = array(
'spamregex' => 'Spam regex',
'spamregex-desc' => 'Ã–vver <i lang="en">regular expressions</i>, [[Special:SpamRegex|sÃ¶k esu en TexstÃ¶cke eruÃŸ]] uÃŸ fresch jeÃ¤nderte Sigge, di mer doh nit han welle.',
'spamregex-error-unblocking' => 'Ene FÃ¤hler es opjetrodde: Mer kunnte â€ž$1â€œ nit frei jevve. Wascheinlesch jit et esu e Dinge nit.',
'spamregex-summary' => 'DÃ¤ Tex wood en dÃ¤ ZosammefaÃŸung fÃ¶r di Sigg jevonge.',
'spamregex-intro' => "Ã–vver dat Fommulaa hee kanns De TextstÃ¶cke un <i lang=\"en\">regular expressions</i>
sperre, dat se nit em Tex fun Sigge enjedrare wÃ¤de kÃ¼nne.
Wann esu jet en ener Sigg steiht, die eine avspeichere well, dann jeiht
dat nit, un dÃ¤ kritt ene FÃ¤hler jemeldt.
<br />
'''OpjepaÃŸ:''' Maat Ãœhr jesperrte UÃŸdrÃ¶ck nit zo koot un nit zo jewÃ¶Ã¶nlesch!",
'spamregex-page-title' => 'Spam regex â€” TexshtÃ¶ck sperre, die mer nit avspeichere wolle.',
'spamregex-currently-blocked' => "'''De aktoÃ¤ll jesperrte TexstÃ¶cke:'''",
'spamregex-move' => 'Wat De unger â€ž{{int:Summary}}â€œ enjejovve hÃ¤ÃŸ, dat jeiht esu nit,
do es e StÃ¶ck Tex dren, dÃ¤ jesperrt es.',
'spamregex-no-currently-blocked' => "'''Mer han_er kei jesperrt_TexstÃ¶ck.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 fott domet!]) â€” dobei jedonn {{GENDER:$5|vum|vum|vum Metmaacher|vum|vun der}} $5 aam $6 Ã¶m $7 Uhr",
'spamregex-page-title-1' => 'Als en <i lang="en">regular expression</i> sperre',
'spamregex-unblock-success' => 'Frei jejovve',
'spamregex-unblock-message' => 'Dat TextstÃ¶ck â€ž$1â€œ es frei jejovve.',
'spamregex-page-title-2' => 'TexshtÃ¶ck med <i lang="en">regular expressions</i> jÃ¤je et Avspeichere sperre',
'spamregex-block-success' => 'Jesperrt',
'spamregex-block-message' => "Dat TexstÃ¶ck â€ž'''$1'''â€œ es jesperrt.",
'spamregex-warning-1' => 'Wat sull dann nu jesperrt wÃ¤de? Jif do jet en!',
'spamregex-error-1' => 'Dat es en kappodde <i lang="en">regular expression</i>.',
'spamregex-warning-2' => 'WinnischÃŸtens ein Aat ze Sperre bruch e HÃ¶ksche!',
'spamregex-already-blocked' => 'â€ž$1â€œ es ald jesperrt',
'spamregex-phrase-block' => 'Dat TexstÃ¶ck fÃ¶r zom Sperre',
'spamregex-phrase-block-text' => 'esu e TexstÃ¶ck em Tex fun en de Sigge sperre',
'spamregex-phrase-block-summary' => 'esu e TexstÃ¶ck en de Zosammefassung sperre',
'spamregex-block-submit' => 'Dat&nbsp;TexstÃ¶ck&nbsp;sperre',
'spamregex-text' => '(Tex)',
'spamregex-summary-log' => '(ZosammefaÃŸung)',
'right-spamregex' => '<i lang="en">SPAM</i>-WÃ¶Ã¶ter Ã¶vver <i lang="en">[[Special:SpamRegex]]</i> sperre',
);

/** Kurdish (Latin script) (KurdÃ® (latÃ®nÃ®)â€Ž)
* @author George Animal
*/
$messages['ku-latn'] = array(
'spamregex-text' => '(NivÃ®s)',
);

/** Luxembourgish (LÃ«tzebuergesch)
* @author Robby
*/
$messages['lb'] = array(
'spamregex-desc' => '[[Special:SpamRegex|Filter]] onerwÃ«nscht Setz aus geÃ¤nnerte SÃ¤iten eraus, op Basis vu regulÃ¤ren AusdrÃ©ck',
'spamregex-error-unblocking' => 'Feeler bÃ¤im ophiewe vun der SpÃ¤r: "$1". Et gÃ«tt wahrscheinlech keen esou e Muster.',
'spamregex-summary' => 'DÃ«sen Text gouf am ResumÃ© vun der SÃ¤it fonnt',
'spamregex-currently-blocked' => "'''SÃ¤tz dÃ©i elo gespaart sinn:'''",
'spamregex-no-currently-blocked' => "'''Et gÃ«tt keng gespaarte SÃ¤tz.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 ewechhuelen]) derbÃ¤igesat vum $5 de(n) $6 Ã«m $7 Auer",
'spamregex-unblock-success' => 'SpÃ¤r ass opgehuewen',
'spamregex-block-success' => 'Gespaart',
'spamregex-block-message' => "De Saatz '''$1''' gouf gespaart.",
'spamregex-already-blocked' => '"$1" ass scho gespaart',
'spamregex-phrase-block' => 'Saatz fir ze spÃ¤ren',
'spamregex-phrase-block-text' => 'Saatz am Text vun enger SÃ¤it spÃ¤ren',
'spamregex-phrase-block-summary' => 'Saatz am ResumÃ© spÃ¤ren',
'spamregex-block-submit' => 'SpÃ¤r&nbsp;dÃ«se&nbsp;Saz',
'spamregex-text' => '(Text)',
'spamregex-summary-log' => '(ResumÃ©)',
);

/** Moksha (Ð¼Ð¾ÐºÑˆÐµÐ½ÑŒ)
* @author Jarmanj Turtash
* @author Khazar II
*/
$messages['mdf'] = array(
'spamregex-already-blocked' => '"$1" ÑÑ‘Ð»ÐºÑ„Ð¾Ð»ÑŒ Ð½Ð¸',
);

/** Eastern Mari (Ð¾Ð»Ñ‹Ðº Ð¼Ð°Ñ€Ð¸Ð¹)
* @author Ð¡Ð°Ð¹
*/
$messages['mhr'] = array(
'spamregex-summary-log' => '(Ð§Ñ‹Ð»Ð°Ð¶Ðµ)',
);

/** Macedonian (Ð¼Ð°ÐºÐµÐ´Ð¾Ð½ÑÐºÐ¸)
* @author Bjankuloski06
*/
$messages['mk'] = array(
'spamregex' => 'Ð¤Ð¸Ð»Ñ‚ÐµÑ€ Ð·Ð° ÑÐ¿Ð°Ð¼',
'spamregex-desc' => '[[Special:SpamRegex|Ð¤Ð¸Ð»Ñ‚Ñ€Ð¸Ñ€Ð°ÑšÐµ]] Ð½Ð° Ð½ÐµÐ¿Ð¾Ð¶ÐµÐ»Ð½Ð¸ Ñ„Ñ€Ð°Ð·Ð¸ Ð²Ð¾ ÑƒÑ€ÐµÐ´ÑƒÐ²Ð°Ð½Ð¸Ñ‚Ðµ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð¸, Ð·Ð°ÑÐ½Ð¾Ð²Ð°Ð½Ð¾ Ð½Ð° Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸',
'spamregex-error-unblocking' => 'Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð¾Ð´Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµÑ‚Ð¾ Ð½Ð° â€ž$1â€œ. Ð’ÐµÑ€Ð¾Ñ˜Ð°Ñ‚Ð½Ð¾ Ð½ÐµÐ¼Ð° Ñ‚Ð°ÐºÐ²Ð° ÑˆÐµÐ¼Ð°.',
'spamregex-summary' => 'Ð¢ÐµÐºÑÑ‚Ð¾Ñ‚ Ðµ Ð¿Ñ€Ð¾Ð½Ð°Ñ˜Ð´ÐµÐ½ Ð²Ð¾ Ð¾Ð¿Ð¸ÑÐ¾Ñ‚ Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð°Ñ‚Ð°.',
'spamregex-intro' => 'ÐšÐ¾Ñ€Ð¸ÑÑ‚ÐµÑ‚Ðµ Ð³Ð¾ Ð¾Ð²Ð¾Ñ˜ Ð¾Ð±Ñ€Ð°Ð·ÐµÑ† Ð·Ð° ÐµÑ„ÐµÐºÑ‚Ð¸Ð²Ð½Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° Ð¸Ð·Ñ€Ð°Ð·Ð¸ ÐºÐ¾Ð¸ Ð½Ðµ ÑÐ°ÐºÐ°Ñ‚Ðµ Ð´Ð° Ð¼Ð¾Ð¶Ð°Ñ‚ Ð´Ð° ÑÐµ Ð·Ð°Ñ‡ÑƒÐ²ÑƒÐ²Ð°Ð°Ñ‚ Ð²Ð¾ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð¸.
ÐÐºÐ¾ Ñ‚ÐµÐºÑÑ‚Ð¾Ñ‚ Ð³Ð¾ ÑÐ¾Ð´Ñ€Ð¶Ð¸ Ð·Ð°Ð´Ð°Ð´ÐµÐ½Ð¸Ð¾Ñ‚ Ð¸Ð·Ñ€Ð°Ð·, Ð¿Ñ€Ð¾Ð¼ÐµÐ½Ð¸Ñ‚Ðµ Ð½ÐµÐ¼Ð° Ð´Ð° ÑÐµ Ð·Ð°Ñ‡ÑƒÐ²Ð°Ð°Ñ‚ Ð¸ Ð½Ð° ÐºÐ¾Ñ€Ð¸ÑÐ½Ð¸ÐºÐ¾Ñ‚ ÐºÐ¾Ñ˜ Ð³Ð¾ Ð²Ð½ÐµÐ» Ð¸Ð·Ñ€Ð°Ð·Ð¾Ñ‚ ÑœÐµ Ð¼Ñƒ ÑÐµ Ð¿Ð¾Ñ˜Ð°Ð²Ð¸ Ð¾Ð±Ñ€Ð°Ð·Ð»Ð¾Ð¶ÐµÐ½Ð¸Ðµ.
Ð‘Ð¸Ð´ÐµÑ‚Ðµ Ð²Ð½Ð¸Ð¼Ð°Ñ‚ÐµÐ»Ð½Ð¸, Ð·Ð°Ð´Ð°Ð´ÐµÐ½Ð¸Ñ‚Ðµ Ð¸Ð·Ñ€Ð°Ð·Ð¸ Ð½Ðµ Ñ‚Ñ€ÐµÐ±Ð° Ð´Ð° Ð±Ð¸Ð´Ð°Ñ‚ Ð¿Ñ€ÐµÐºÑ€Ð°Ñ‚ÐºÐ¸ Ð¸Ð»Ð¸ Ð¿Ñ€ÐµÑ‡ÐµÑÑ‚Ð¸.',
'spamregex-page-title' => 'Ð¡Ð¿Ð°Ð¼-Ñ„Ð¸Ð»Ñ‚ÐµÑ€ Ð·Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° Ð½ÐµÐ¿Ð¾Ð¶ÐµÐ»Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸',
'spamregex-currently-blocked' => "'''ÐœÐ¾Ð¼ÐµÐ½Ñ‚Ð°Ð»Ð½Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸ Ñ„Ñ€Ð°Ð·Ð¸:'''",
'spamregex-move' => 'ÐŸÑ€Ð¸Ñ‡Ð¸Ð½Ð°Ñ‚Ð° ÐºÐ¾Ñ˜Ð°ÑˆÑ‚Ð¾ Ñ˜Ð° Ð²Ð½ÐµÑÐ¾Ð²Ñ‚Ðµ ÑÐ¾Ð´Ñ€Ð¶ÐµÑˆÐµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð° Ñ„Ñ€Ð°Ð·Ð°.',
'spamregex-no-currently-blocked' => "'''ÐÐµÐ¼Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸ Ñ„Ñ€Ð°Ð·Ð¸.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 Ð¾Ñ‚ÑÑ‚Ñ€Ð°Ð½Ð¸]) Ð´Ð¾Ð´Ð°Ð´ÐµÐ½Ð¾ Ð¾Ð´ $5 Ð½Ð° $6 Ð²Ð¾ $7",
'spamregex-page-title-1' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð° ÑÐ¾ Ð¿Ð¾Ð¼Ð¾Ñˆ Ð½Ð° Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·',
'spamregex-unblock-success' => 'ÐžÐ´Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµÑ‚Ð¾ ÑƒÑÐ¿ÐµÐ°',
'spamregex-unblock-message' => "Ð¤Ñ€Ð°Ð·Ð°Ñ‚Ð° '''$1''' Ðµ Ð¾Ð´Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð° Ð·Ð° ÑƒÑ€ÐµÐ´ÑƒÐ²Ð°ÑšÐµ.",
'spamregex-page-title-2' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° Ð·Ð°Ñ‡ÑƒÐ²ÑƒÐ²Ð°ÑšÐµÑ‚Ð¾ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð¸ ÑÐ¾ Ð¿Ð¾Ð¼Ð¾Ñˆ Ð½Ð° Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸',
'spamregex-block-success' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµÑ‚Ð¾ ÑƒÑÐ¿ÐµÐ°',
'spamregex-block-message' => "Ð¤Ñ€Ð°Ð·Ð°Ñ‚Ð° '''$1''' Ðµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð°.",
'spamregex-warning-1' => 'ÐÐ°Ð²ÐµÐ´ÐµÑ‚Ðµ Ñ„Ñ€Ð°Ð·Ð° Ð·Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ.',
'spamregex-error-1' => 'ÐÐµÐ²Ð°Ð¶ÐµÑ‡ÐºÐ¸ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€ÐµÐ½ Ð¸Ð·Ñ€Ð°Ð·.',
'spamregex-warning-2' => 'ÐžÐ´Ð±ÐµÑ€ÐµÑ‚Ðµ Ð±Ð°Ñ€ÐµÐ¼ ÐµÐ´ÐµÐ½ Ñ€ÐµÐ¶Ð¸Ð¼ Ð½Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ.',
'spamregex-already-blocked' => 'â€ž$1â€œ Ðµ Ð²ÐµÑœÐµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¾',
'spamregex-phrase-block' => 'Ð¤Ñ€Ð°Ð·Ð° Ð·Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ:',
'spamregex-phrase-block-text' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð° Ð²Ð¾ Ñ‚ÐµÐºÑÑ‚Ð¾Ñ‚ Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð°Ñ‚Ð°',
'spamregex-phrase-block-summary' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð° Ð²Ð¾ Ð¾Ð¿Ð¸ÑÐ¾Ñ‚ Ð½Ð° Ð¸Ð·Ð¼ÐµÐ½Ð¸',
'spamregex-block-submit' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜&nbsp;Ñ˜Ð°&nbsp;Ð¾Ð²Ð°Ð°&nbsp;Ñ„Ñ€Ð°Ð·Ð°',
'spamregex-text' => '(Ð¢ÐµÐºÑÑ‚)',
'spamregex-summary-log' => '(ÐžÐ¿Ð¸Ñ)',
'right-spamregex' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ð½Ð° ÑÐ¿Ð°Ð¼-Ñ„Ñ€Ð°Ð·Ð¸ ÑÐ¾ Ð¿Ð¾Ð¼Ð¾Ñˆ Ð½Ð° [[Special:SpamRegex]]',
);

/** Malayalam (à´®à´²à´¯à´¾à´³à´‚)
* @author Shijualex
*/
$messages['ml'] = array(
'spamregex-unblock-success' => 'à´¸àµà´µà´¤à´¨àµà´¤àµà´°à´®à´¾à´•àµà´•àµ½ à´µà´¿à´œà´¯à´¿à´šàµà´šà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ',
'spamregex-block-success' => 'à´¤à´Ÿà´¯àµ½ à´µà´¿à´œà´¯à´¿à´šàµà´šà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ',
'spamregex-already-blocked' => '"$1" à´‡à´¤à´¿à´¨à´•à´‚ à´¤à´¨àµà´¨àµ† à´¤à´Ÿà´¯à´ªàµà´ªàµ†à´Ÿàµà´Ÿà´¿à´°à´¿à´•àµà´•àµà´¨àµà´¨àµ.',
'spamregex-summary-log' => '(à´šàµà´°àµà´•àµà´•à´‚)',
);

/** Mongolian (Ð¼Ð¾Ð½Ð³Ð¾Ð»)
* @author Chinneeb
*/
$messages['mn'] = array(
'spamregex-summary-log' => '(Ð¢Ð¾Ð²Ñ‡ Ð°Ð³ÑƒÑƒÐ»Ð³Ð°)',
);

/** Marathi (à¤®à¤°à¤¾à¤ à¥€)
* @author Kaustubh
* @author Mahitgar
*/
$messages['mr'] = array(
'spamregex' => 'à¤¸à¥à¤ªà¥…à¤®à¤°à¥‡à¤œà¤à¤•à¥à¤¸',
'spamregex-desc' => 'à¤¸à¤‚à¤ªà¤¾à¤¦à¤¿à¤¤ à¤ªà¤¾à¤¨à¤¾à¤‚à¤®à¤§à¥€à¤² à¤¨à¤•à¥‹ à¤…à¤¸à¤²à¥‡à¤²à¥à¤¯à¤¾ à¤¨à¥‹à¤‚à¤¦à¥€ à¤°à¥‡à¤—à¥à¤¯à¥à¤²à¤° à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨ à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤ªà¥à¤°à¤£à¤¾à¤²à¥€ à¤µà¤¾à¤ªà¤°à¥‚à¤¨ [[Special:SpamRegex|à¤µà¥‡à¤—à¤³à¥à¤¯à¤¾ à¤•à¤°à¤¾]].',
'spamregex-summary' => 'à¤¯à¤¾ à¤ªà¤¾à¤¨à¤¾à¤šà¥à¤¯à¤¾ à¤¸à¤¾à¤°à¤¾à¤‚à¤¶à¤¾à¤®à¤§à¥à¤¯à¥‡ à¤¹à¤¾ à¤®à¤œà¤•à¥‚à¤° à¤¸à¤¾à¤ªà¤¡à¤²à¤¾.',
'spamregex-intro' => 'à¤à¤–à¤¾à¤¦à¥à¤¯à¤¾ à¤ªà¤¾à¤¨à¤¾à¤šà¥à¤¯à¤¾ à¤®à¤œà¤•à¥‚à¤°à¤¾à¤¤ à¤•à¤¾à¤¹à¥€ à¤«à¥à¤°à¥‡à¤œà¥‡à¤¸ à¤œà¤¤à¤¨ à¤¹à¥‹à¤£à¥à¤¯à¤¾à¤ªà¤¾à¤¸à¥‚à¤¨ à¤ªà¥‚à¤°à¥à¤£à¤ªà¤£à¥‡ à¤¥à¤¾à¤‚à¤¬à¤µà¤¿à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€ à¤¹à¥à¤¯à¤¾ à¤…à¤°à¥à¤œà¤¾à¤šà¤¾ à¤µà¤¾à¤ªà¤° à¤•à¤°à¤¾.
à¤œà¤° à¤®à¤œà¤•à¥‚à¤°à¤¾ à¤®à¤§à¥à¤¯à¥‡ à¤¦à¤¿à¤²à¥‡à¤²à¥‡ à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨ à¤†à¤²à¥‡ à¤¤à¤° à¤¬à¤¦à¤² à¤œà¤¤à¤¨ à¤¹à¥‹à¤£à¤¾à¤° à¤¨à¤¾à¤¹à¥€à¤¤, à¤µ à¤œà¤¤à¤¨ à¤•à¤°à¥ à¤‡à¤šà¥à¤›à¤¿à¤£à¤¾à¤°à¥â€à¤¯à¤¾ à¤¸à¤¦à¤¸à¥à¤¯à¤¾à¤²à¤¾ à¤•à¤¾à¤°à¤£ à¤¦à¤°à¥à¤¶à¤µà¤¿à¤²à¥‡ à¤œà¤¾à¤ˆà¤².
à¤•à¤¾à¤³à¤œà¥€ à¤˜à¥à¤¯à¤¾, à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨à¥à¤¸ à¤–à¥‚à¤ª à¤›à¥‹à¤Ÿà¥‡ à¤•à¤¿à¤‚à¤µà¤¾ à¤¨à¥‡à¤¹à¤®à¥€à¤šà¥à¤¯à¤¾ à¤µà¤¾à¤ªà¤°à¤¾à¤¤à¤²à¥‡ à¤¨à¤•à¥‹à¤¤.',
'spamregex-page-title' => 'à¤¸à¥à¤ªà¥…à¤® à¤°à¥‡à¤œà¤à¤•à¥à¤¸ à¤¨à¤•à¥‹ à¤…à¤¸à¤²à¥‡à¤²à¥à¤¯à¤¾ à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨à¥à¤¸ à¤¬à¥à¤²à¥‰à¤•',
'spamregex-currently-blocked' => "'''à¤¸à¤§à¥à¤¯à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¥‡ à¤«à¥à¤°à¥‡à¤œà¥‡à¤¸:'''",
'spamregex-no-currently-blocked' => "'''à¤¸à¤§à¥à¤¯à¤¾ à¤à¤•à¤¹à¥€ à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¤¾ à¤«à¥à¤°à¥‡à¤œ à¤¨à¤¾à¤¹à¥€.'''",
'spamregex-page-title-1' => 'à¤°à¥‡à¤—à¥à¤¯à¥à¤²à¤° à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨à¥à¤¸ à¤µà¤¾à¤ªà¤°à¥‚à¤¨ à¤«à¥à¤°à¥‡à¤œ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤¾',
'spamregex-unblock-success' => 'à¤…à¤¨à¤¬à¥à¤²à¥‰à¤• à¤¯à¤¶à¤¸à¥à¤µà¥€',
'spamregex-unblock-message' => "à¤«à¥à¤°à¥‡à¤œ '''$1''' à¤²à¤¾ à¤¸à¤‚à¤ªà¤¾à¤¦à¤¿à¤¤ à¤•à¤°à¤£à¥à¤¯à¤¾à¤ªà¤¾à¤¸à¥‚à¤¨ à¤…à¤¨à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¥‡ à¤†à¤¹à¥‡.",
'spamregex-page-title-2' => 'à¤°à¥‡à¤—à¥à¤¯à¥à¤²à¤° à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨à¥à¤¸à¤šà¤¾ à¤µà¤¾à¤ªà¤° à¤•à¤°à¥‚à¤¨ à¤«à¥à¤°à¥‡à¤œà¥‡à¤¸ à¤œà¤¤à¤¨ à¤¹à¥‹à¤£à¥à¤¯à¤¾à¤ªà¤¾à¤¸à¥‚à¤¨ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤¾',
'spamregex-block-success' => 'à¤¬à¥à¤²à¥‰à¤• à¤¯à¤¶à¤¸à¥à¤µà¥€',
'spamregex-block-message' => "à¤«à¥à¤°à¥‡à¤œ '''$1''' à¤²à¤¾ à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¥‡ à¤†à¤¹à¥‡.",
'spamregex-warning-1' => 'à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€ à¤à¤• à¤«à¥à¤°à¥‡à¤œ à¤¦à¥à¤¯à¤¾.',
'spamregex-error-1' => 'à¤šà¥à¤•à¥€à¤šà¥€ à¤°à¥‡à¤—à¥à¤¯à¥à¤²à¤° à¤à¤•à¥à¤¸à¥à¤ªà¥à¤°à¥‡à¤¶à¤¨à¥à¤¸.',
'spamregex-warning-2' => 'à¤•à¥ƒà¤ªà¤¯à¤¾ à¤•à¤®à¥€à¤¤à¤•à¤®à¥€ à¤à¤• à¤¬à¥à¤²à¥‰à¤•à¤¿à¤‚à¤— à¤®à¥‹à¤¡ à¤¤à¤ªà¤¾à¤¸à¤¾.',
'spamregex-already-blocked' => '"$1" à¤²à¤¾ à¤…à¤—à¥‹à¤¦à¤°à¤š à¤¬à¥à¤²à¥‰à¤• à¤•à¥‡à¤²à¥‡à¤²à¥‡ à¤†à¤¹à¥‡',
'spamregex-phrase-block' => 'à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€ à¤«à¥à¤°à¥‡à¤œ:',
'spamregex-phrase-block-text' => 'à¤ªà¤¾à¤¨à¤¾à¤šà¥à¤¯à¤¾ à¤®à¤œà¤•à¥‚à¤°à¤¾à¤¤à¥‚à¤¨ à¤«à¥à¤°à¥‡à¤œ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤¾',
'spamregex-phrase-block-summary' => 'à¤¸à¤¾à¤°à¤¾à¤‚à¤¶à¤¾à¤¤à¥‚à¤¨ à¤«à¥à¤°à¥‡à¤œ à¤¬à¥à¤²à¥‰à¤• à¤•à¤°à¤¾',
'spamregex-block-submit' => 'à¤¹à¥€&nbsp;à¤«à¥à¤°à¥‡à¤œ&nbsp;à¤¬à¥à¤²à¥‰à¤•&nbsp;à¤•à¤°à¤¾',
'spamregex-text' => '(à¤®à¤œà¤•à¥‚à¤°)',
'spamregex-summary-log' => 'à¤†à¤¢à¤¾à¤µà¤¾',
);

/** Malay (Bahasa Melayu)
* @author Anakmalaysia
*/
$messages['ms'] = array(
'spamregex-summary-log' => '(Ringkasan)',
);

/** Maltese (Malti)
* @author Roderick Mallia
*/
$messages['mt'] = array(
'spamregex-already-blocked' => '"$1" diÄ¡Ã bblokkjat',
);

/** Erzya (ÑÑ€Ð·ÑÐ½ÑŒ)
* @author Botuzhaleny-sodamo
*/
$messages['myv'] = array(
'spamregex-already-blocked' => '"$1" ÑƒÑˆ ÑÐ°Ð¹Ð¼Ð°Ñ ÑÐ°ÐµÐ·ÑŒ',
);

/** Nahuatl (NÄhuatl)
* @author Fluence
*/
$messages['nah'] = array(
'spamregex-summary-log' => '(TlahcuilÅltÅn)',
);

/** Norwegian BokmÃ¥l (norsk (bokmÃ¥l)â€Ž)
* @author Nghtwlkr
* @author Unhammer
*/
$messages['nb'] = array(
'spamregex' => 'SpamRegex',
'spamregex-desc' => '[[Special:SpamRegex|Filtrer ut]] uÃ¸nskede fraser i redigerte sider, basert pÃ¥ regulÃ¦re uttrykk',
'spamregex-error-unblocking' => 'Feil ved avblokkering av Â«$1Â». Det er nok ikke noe slikt mÃ¸nster.',
'spamregex-summary' => 'Teksten ble funnet i sidens sammendrag.',
'spamregex-intro' => 'Bruk dette skjemaet for Ã¥ effektivt blokkere uttrykk fra Ã¥ bli lagret pÃ¥ sidene. Om teksten inneholder gitt uttrykk, vil endringen ikke bli lagret, og en forklaring vil vises til brukeren som prÃ¸vde Ã¥ lagre siden. VÃ¦r obs pÃ¥ at uttrykk ikke bÃ¸r vÃ¦re for korte eller for vanlige.',
'spamregex-page-title' => 'Blokkering av uÃ¸nskede uttrykk med regulÃ¦re uttrykk',
'spamregex-currently-blocked' => "'''NÃ¥vÃ¦rende blokkerte fraser:'''",
'spamregex-move' => 'Ã…rsaken du skrev inn inneholdt en blokkert frase.',
'spamregex-no-currently-blocked' => "'''Det er ingen blokkerte fraser.'''",
'spamregex-log' => "'''$1''' $2 ([{{SERVER}}$3&text=$4 fjern]) lagt til av $5 den $6 klokka $7",
'spamregex-page-title-1' => 'Blokker frase ved hjelp av regulÃ¦re uttrykk',
'spamregex-unblock-success' => 'Avblokkering lyktes',
'spamregex-unblock-message' => "Frasen '''$1''' er ikke lenger blokkert.",
'spamregex-page-title-2' => 'Blokker fraser fra Ã¥ kunne lagres ved hjelp av regulÃ¦re uttrykk.',
'spamregex-block-success' => 'Blokkering lyktes',
'spamregex-block-message' => "Frasen '''$1''' er blokkert.",
'spamregex-warning-1' => 'Oppgi en frase Ã¥ blokkere.',
'spamregex-error-1' => 'Ugyldig regulÃ¦rt uttrykk.',
'spamregex-warning-2' => 'Du mÃ¥ velge minst en blokkeringsmodus.',
'spamregex-already-blocked' => 'Â«$1Â» er allerede blokkert',
'spamregex-phrase-block' => 'Frase Ã¥ blokkere:',
'spamregex-phrase-block-text' => 'blokker frase i sidetekst',
'spamregex-phrase-block-summary' => 'blokker frase i sammendrag',
'spamregex-block-submit' => 'Blokker&nbsp;denne&nbsp;frasen',
'spamregex-text' => '(Tekst)',
'spamregex-summary-log' => '(Sammendrag)',
'right-spamregex' => 'Blokker spamfraser gjennom [[Special:SpamRegex]]',
);

/** Low German (PlattdÃ¼Ã¼tsch)
* @author Slomox
*/
$messages['nds'] = array(
'spamregex-text' => '(Text)',
);

/** Dutch (Nederlands)
* @author SPQRobin
* @author Siebrand
* @author Tvdm
*/
$messages['nl'] = array(
'spamregex' => 'SpamRegex',
'spamregex-desc' => "Ongewilde zinnen [[Special:SpamRegex|uitfilteren]] in bewerkte pagina's, gebaseerd op reguliere expressies",
'spamregex-error-unblocking' => 'Fout bij het opheffen van de blokkade van "$1". Wellicht bestaat het patroon niet.',
'spamregex-summary' => 'De tekst is gevonden in de paginasamenvatting.',
'spamregex-intro' => 'Gebruik dit formulier om doeltreffend te voorkomen dat uitdrukkingen worden opgeslagen in een paginatekst.
Als de tekst de gegeven uitdrukkingen bevat, dan wordt de wijziging niet opgeslagen en wordt een uitleg aan de gebruiker weergegeven die de pagina probeerde op te slaan.
Zorg dat de uitdrukkingen niet te kort of veelvoorkomend zijn.',
'spamregex-page-title' => 'Blokkeren van uitdrukkingen met regex',
'spamregex-currently-blocked' => "'''Huidig geblokkeerde zinnen:'''",
'spamregex-move' => 'De opgegeven reden bevat een tekstdeel dat op de zwarte lijst staat.',
'spamregex-no-currently-blocked' => "'''Er zijn geen geblokkeerde zinnen.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 verwijderen]) toegevoegd door $5 op $6 om $7",
'spamregex-page-title-1' => 'Zinnen blokkeren met reguliere uitdrukkingen',
'spamregex-unblock-success' => 'Deblokkade gelukt',
'spamregex-unblock-message' => "Zin '''$1''' is gedeblokkeerd van bewerkingen.",
'spamregex-page-title-2' => 'Zinnen blokkeren van opslaan met reguliere uitdrukkingen',
'spamregex-block-success' => 'Blokkade gelukt.',
'spamregex-block-message' => "Zin '''$1''' is geblokkeerd.",
'spamregex-warning-1' => 'Geef een zin om te blokkeren.',
'spamregex-error-1' => 'Ongeldige reguliere uitdrukking.',
'spamregex-warning-2' => 'Gelieve tenminste Ã©Ã©n blokkeermogelijkheid aan te klikken.',
'spamregex-already-blocked' => '"$1" is al geblokkeerd',
'spamregex-phrase-block' => 'Zin om te blokkeren:',
'spamregex-phrase-block-text' => 'zin blokkeren in paginatekst',
'spamregex-phrase-block-summary' => 'zin blokkeren in samenvatting',
'spamregex-block-submit' => 'Deze&nbsp;zin&nbsp;blokkeren',
'spamregex-text' => '(Tekst)',
'spamregex-summary-log' => '(Samenvatting)',
'right-spamregex' => 'Spamwoorden blokkeren via [[Special:SpamRegex]]',
);

/** Norwegian Nynorsk (norsk (nynorsk)â€Ž)
* @author Frokor
* @author Gunnernett
* @author Harald Khan
* @author Jon Harald SÃ¸by
* @author Njardarlogar
*/
$messages['nn'] = array(
'spamregex' => 'SpamRegex',
'spamregex-desc' => '[[Special:SpamRegex|Filtrer ut]] uÃ¸nska fraser i endra sider, basert pÃ¥ regulÃ¦re uttrykk',
'spamregex-error-unblocking' => 'Feil ved avblokkering av Â«$1Â». Eit slikt mÃ¸nster finst nok ikkje.',
'spamregex-summary' => 'Teksten vart funne i samandraget til sida.',
'spamregex-intro' => 'Bruk dette skjemaet for Ã¥ effektivt blokkere uttrykk frÃ¥ Ã¥ bli lagra pÃ¥ sidene. Om teksten inneheld visse uttrykk, vil endringa ikkje bli lagra, og ei forklaring vil visast til brukaren som prÃ¸vde Ã¥ lagre sida. Ver obs pÃ¥ at uttrykk ikkje bÃ¸r vere for korte eller for vanlege.',
'spamregex-page-title' => 'Blokkering av uÃ¸nska uttrykk med regulÃ¦re uttrykk',
'spamregex-currently-blocked' => "'''Noverande blokkerte uttrykk:'''",
'spamregex-move' => 'Ã…rsaka du skreiv inn inneheldt eit blokkert uttrykk.',
'spamregex-no-currently-blocked' => "'''Det er ingen blokkerte uttrykk.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 fjern]) lagt til av $5 den $6 klokka $7",
'spamregex-page-title-1' => 'Blokker uttrykk ved hjelp av regulÃ¦re uttrykk',
'spamregex-unblock-success' => 'Avblokkering utfÃ¸rt',
'spamregex-unblock-message' => "Uttrykket '''$1''' er ikkje lenger blokkert.",
'spamregex-page-title-2' => 'Blokker uttrykk frÃ¥ Ã¥ kunne lagrast ved hjelp av regulÃ¦re uttrykk.',
'spamregex-block-success' => 'Blokkeringa er utfÃ¸rd',
'spamregex-block-message' => "Uttrykket '''$1''' er blokkert.",
'spamregex-warning-1' => 'Oppgje eit uttrykk som skal blokkerast.',
'spamregex-error-1' => 'Ugyldig regulÃ¦rt uttrykk.',
'spamregex-warning-2' => 'Du mÃ¥ velje minst ein blokkeringsmodus.',
'spamregex-already-blocked' => 'Â«$1Â» er alt blokkert',
'spamregex-phrase-block' => 'Uttrykk Ã¥ blokkere:',
'spamregex-phrase-block-text' => 'blokker uttrykk i sidetekst',
'spamregex-phrase-block-summary' => 'blokker uttrykk i samandrag',
'spamregex-block-submit' => 'Blokker&nbsp;dette&nbsp;uttrykket',
'spamregex-text' => '(Tekst)',
'spamregex-summary-log' => '(Samandrag)',
'right-spamregex' => 'Blokkera spamfrasar gjennom [[Special:SpamRegex]]',
);

/** Occitan (occitan)
* @author Cedric31
*/
$messages['oc'] = array(
'spamregex' => 'Expressions regularas de Spams',
'spamregex-desc' => "[[Special:SpamRegex|Filtre]], dins las paginas, las frasas o mots indesirables, basat sus d'expressions regularas",
'spamregex-error-unblocking' => 'Error de desblocatge de Â« $1 Â». I a probablament pas cap de modÃ¨l.',
'spamregex-summary' => 'Lo tÃ¨xte en question es estat detectat dins lo comentari de la pagina.',
'spamregex-intro' => "Utilizatz aqueste formulari per blocar efiÃ¨chament las expressions que pÃ²don Ã¨sser salvadas dins una pagina tÃ¨xte. Se lo tÃ¨xte conten las expressions definidas, los cambiaments poirÃ n pas Ã¨sser salvats e un motiu explicatiu serÃ afichat a lâ€™utilizaire qu'a volgut salvar la pagina. Es important de prene en consideracion que las expressions deurÃ n pas Ã¨sser ni trÃ²p longas ni trÃ²p correntas.",
'spamregex-page-title' => 'Blocatge de las expressions regularas de spams',
'spamregex-currently-blocked' => "'''Frasas actualament blocadas :'''",
'spamregex-move' => "Lo motiu qu'avÃ¨tz inscrich conteniÃ¡ una frasa blocada.",
'spamregex-no-currently-blocked' => "'''I a pas cap de frasa blocada.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 suprimir]) apondut per $5 lo $6 a $7",
'spamregex-page-title-1' => "Blocatge dâ€™una frasa utilizant d'expressions regularas",
'spamregex-unblock-success' => 'Lo desblocatge a capitat',
'spamregex-unblock-message' => "La frasa '''$1''' es estada desblocada a lâ€™edicion.",
'spamregex-page-title-2' => "Blocatge de las frasas en utilizant d'expression regularas",
'spamregex-block-success' => 'Lo blocatge a capitat',
'spamregex-block-message' => "La frasa '''$1''' a estada blocada.",
'spamregex-warning-1' => 'Indicatz una frasa de blocar.',
'spamregex-error-1' => 'Expression regulara invalida.',
'spamregex-warning-2' => 'CausissÃ¨tz almens un mÃ²de de blocatge.',
'spamregex-already-blocked' => 'Â« $1 Â» ja es blocat',
'spamregex-phrase-block' => 'Frasa de blocar :',
'spamregex-phrase-block-text' => 'blocar la frasa dins lo tÃ¨xte de lâ€™article',
'spamregex-phrase-block-summary' => 'blocar la frasa dins lo comentari',
'spamregex-block-submit' => 'Blocar&nbsp;aquesta&nbsp;frasa',
'spamregex-text' => '(TÃ¨xte)',
'spamregex-summary-log' => '(Comentari)',
'right-spamregex' => 'Blocar de spam dempuÃ¨i [[Special:SpamRegex]]',
);

/** Oriya (à¬“à­œà¬¿à¬†)
* @author Jose77
*/
$messages['or'] = array(
'spamregex-summary-log' => '(à¬¸à¬¾à¬°à¬•à¬¥à¬¾)',
);

/** PÃ¤lzisch (PÃ¤lzisch)
* @author Manuae
*/
$messages['pfl'] = array(
'spamregex-currently-blocked' => "'''Im Aachebligg gschberde Ausdrigg:'''",
);

/** Polish (polski)
* @author Derbeth
* @author Leinad
* @author Maikking
* @author Sp5uhe
* @author Wpedzich
*/
$messages['pl'] = array(
'spamregex' => 'Spam regex',
'spamregex-desc' => '[[Special:SpamRegex|Filtrowanie]] niepoÅ¼Ä…danych zwrotÃ³w na edytowanych stronach z uÅ¼yciem wyraÅ¼eÅ„ regularnych',
'spamregex-error-unblocking' => 'BÅ‚Ä…d odblokowania â€ž$1â€. Prawdopodobnie nie ma takiego wzorca.',
'spamregex-summary' => 'Tekst zostaÅ‚ odnaleziony w opisie zmian.',
'spamregex-intro' => 'Formularz sÅ‚uÅ¼y do skutecznego blokowania zapisu stron zawierajÄ…cych okreÅ›lone wyraÅ¼enie.
JeÅ¼eli tekst zawiera zadane wyraÅ¼enie, zmiany nie zostanÄ… zapisane, a uÅ¼ytkownikowi, ktÃ³ry chciaÅ‚ zapisaÄ‡ stronÄ™ zostanie wyÅ›wietlone wyjaÅ›nienie.
NaleÅ¼y zwrÃ³ciÄ‡ uwagÄ™, by wyraÅ¼ania nie byÅ‚y zbyt krÃ³tkie lub zbyt czÄ™sto wystÄ™pujÄ…ce.',
'spamregex-page-title' => 'Spam regex â€“ blokada niepoÅ¼Ä…danych wyraÅ¼eÅ„',
'spamregex-currently-blocked' => "'''Aktualnie zablokowane wyraÅ¼enia:'''",
'spamregex-move' => 'PowÃ³d ktÃ³ry wpisaÅ‚eÅ› zawiera zabroniony zwrot.',
'spamregex-no-currently-blocked' => "'''Nie ma zablokowanych wyraÅ¼eÅ„.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 usuÅ„]) dodane przez $5 dnia $6 o $7",
'spamregex-page-title-1' => 'Blokuj frazÄ™ za pomocÄ… wyraÅ¼enia regularnego',
'spamregex-unblock-success' => 'Odblokowano',
'spamregex-unblock-message' => "Edycja frazy '''$1''' zostaÅ‚a odblokowana.",
'spamregex-page-title-2' => 'Blokuj zapis zwrotÃ³w z wykorzystaniem wyraÅ¼eÅ„ regularnych',
'spamregex-block-success' => 'Zablokowano',
'spamregex-block-message' => "WyraÅ¼enie '''$1''' zostaÅ‚o zablokowane.",
'spamregex-warning-1' => 'Podaj wyraÅ¼enie do zablokowania.',
'spamregex-error-1' => 'NieprawidÅ‚owe wyraÅ¼enie regularne.',
'spamregex-warning-2' => 'Wybierz co najmniej jeden sposÃ³b blokowania.',
'spamregex-already-blocked' => 'â€ž$1â€ jest juÅ¼ zablokowany',
'spamregex-phrase-block' => 'WyraÅ¼enie do zablokowania:',
'spamregex-phrase-block-text' => 'blokuj zwrot w treÅ›ci strony',
'spamregex-phrase-block-summary' => 'blokuj zwrot w opisie zmian',
'spamregex-block-submit' => 'Blokuj&nbsp;to&nbsp;wyraÅ¼enie',
'spamregex-text' => '(Tekst)',
'spamregex-summary-log' => '(Podsumowanie)',
'right-spamregex' => 'Blokowanie spamu, przez blokowanie zwrotÃ³w na stronie [[Special:SpamRegex]]',
);

/** Piedmontese (PiemontÃ¨is)
* @author BorichÃ¨t
* @author DragonÃ²t
*/
$messages['pms'] = array(
'spamregex' => 'Regex dÃ« spam',
'spamregex-desc' => '[[Special:SpamRegex|A filtra]] fras pa vorsÃ¹e an pÃ gine modificÃ , basÃ dzora a espression regolar',
'spamregex-error-unblocking' => 'Eror an sblocand "$1". Probabilment col model a-i Ã© pa.',
'spamregex-summary' => "Ã‹l test a l'Ã© stÃ it trovÃ ant Ã«l somari dla pÃ gina.",
'spamregex-intro' => "Deuvra sta forma-sÃ¬ pÃ«r vietÃ© efetivament Ã«d salvÃ© j'espression ant Ã«l test Ã«d na pÃ gina.
Se Ã«l test a conten l'espression dÃ ita, Ã«l cambi a sarÃ pa salvÃ e na spiegassion a sarÃ visualisÃ a l'utent ch'a l'ha provÃ a salvÃ© la pÃ gina.
As sugeriss che l'espression a dovrÃ¬a esse pa trÃ²p curta o trÃ²p comun-a.",
'spamregex-page-title' => "Blocagi Ã«d j'espression pa vorsÃ¹e dÃ« spam regex",
'spamregex-currently-blocked' => "'''Fras blocÃ al moment:'''",
'spamregex-move' => "La rason ch'it l'has anserÃ¬ a contnÃ¬a na fras blocÃ .",
'spamregex-no-currently-blocked' => "'''A-i Ã© pa gnun-e fras blocÃ .'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 gava]) giontÃ da $5 dzora $6 a $7",
'spamregex-page-title-1' => "BlÃ²ca fras ch'a deuvra d'espression regolar",
'spamregex-unblock-success' => 'Sblocagi andÃ it bin',
'spamregex-unblock-message' => "La fras '''$1''' a l'Ã© stÃ ita sblocÃ e a peul esse modificÃ .",
'spamregex-page-title-2' => 'BlÃ²ca le fras (a peulo pa esse salvÃ ) an dovrand espression regolar',
'spamregex-block-success' => 'Blocagi andÃ it bin',
'spamregex-block-message' => "La fras '''$1''' a l'Ã© stÃ ita blocÃ .",
'spamregex-warning-1' => 'DÃ na fras da blochÃ©.',
'spamregex-error-1' => 'Espression regolar pa bon-a.',
'spamregex-warning-2' => 'PÃ«r piasÃ¬ contrÃ²la almanch na manera Ã«d blochÃ©.',
'spamregex-already-blocked' => '"$1" a l\'Ã© giÃ blocÃ .',
'spamregex-phrase-block' => 'Fras da blochÃ©:',
'spamregex-phrase-block-text' => 'blÃ²ca fras ant Ã«l test Ã«d pÃ gina',
'spamregex-phrase-block-summary' => 'blÃ²ca fras ant Ã«l resumÃ©',
'spamregex-block-submit' => 'BlÃ²ca&nbsp;sta&nbsp;fras',
'spamregex-text' => '(Test)',
'spamregex-summary-log' => '(ResumÃ©)',
'right-spamregex' => 'BlÃ²ca fras dÃ« spam con [[Special:SpamRegex]]',
);

/** Pashto (Ù¾ÚšØªÙˆ)
* @author Ahmed-Najib-Biabani-Ibrahimkhel
*/
$messages['ps'] = array(
'spamregex-text' => '(Ù…ØªÙ†)',
'spamregex-summary-log' => '(Ù„Ù†Ú‰ÙŠØ²)',
);

/** Portuguese (portuguÃªs)
* @author Hamilton Abreu
* @author Lijealso
* @author Malafaya
* @author Waldir
*/
$messages['pt'] = array(
'spamregex' => 'ExpressÃ£o regular de spam',
'spamregex-desc' => '[[Special:SpamRegex|Filtrar]] frases indesejadas em pÃ¡ginas editadas, com base em expressÃµes regulares',
'spamregex-error-unblocking' => 'Erro ao desbloquear "$1". Provavelmente, nÃ£o existe tal padrÃ£o.',
'spamregex-summary' => 'O texto foi encontrado no resumo da pÃ¡gina.',
'spamregex-intro' => 'Use este formulÃ¡rio para efetivamente bloquear expressÃµes de serem gravadas no texto de uma pÃ¡gina.
Se o texto contÃ©m a dada expressÃ£o, as alteraÃ§Ãµes nÃ£o serÃ£o gravadas e uma explicaÃ§Ã£o serÃ¡ apresentada ao utilizador que tentou gravar a pÃ¡gina.
Pede-se atenÃ§Ã£o: as expressÃµes nÃ£o deverÃ£o ser demasiado curtas ou demasiado comuns.',
'spamregex-page-title' => "Bloco de expressÃµes regulares ''(regex)'' das expressÃµes de ''spam'' indesejadas",
'spamregex-currently-blocked' => "'''Frases presentemente bloqueadas:'''",
'spamregex-move' => 'O motivo que introduziu continha uma frase bloqueada.',
'spamregex-no-currently-blocked' => "'''NÃ£o hÃ¡ frases bloqueadas.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 remover]) adicionado por $5 em $6 em $7",
'spamregex-page-title-1' => 'Bloquear frase usando expressÃµes regulares',
'spamregex-unblock-success' => 'Desbloqueio com sucesso',
'spamregex-unblock-message' => "A frase '''$1''' foi desbloqueada da ediÃ§Ã£o.",
'spamregex-page-title-2' => 'Impedir pÃ¡ginas de serem gravadas usando expressÃµes regulares',
'spamregex-block-success' => 'Bloqueio bem sucedido',
'spamregex-block-message' => "A frase '''$1''' foi bloqueada.",
'spamregex-warning-1' => 'ForneÃ§a uma frase a bloquear.',
'spamregex-error-1' => 'ExpressÃ£o regular invÃ¡lida.',
'spamregex-warning-2' => 'Por favor selecione pelo menos um modo de bloqueio.',
'spamregex-already-blocked' => '"$1" jÃ¡ estÃ¡ bloqueado',
'spamregex-phrase-block' => 'Frase a bloquear:',
'spamregex-phrase-block-text' => 'bloquear frase no texto da pÃ¡gina',
'spamregex-phrase-block-summary' => 'bloquear frase no resumo',
'spamregex-block-submit' => 'Bloquear&nbsp;esta&nbsp;frase',
'spamregex-text' => '(Texto)',
'spamregex-summary-log' => '(Resumo)',
'right-spamregex' => 'Bloquear frases de spam atravÃ©s de [[Special:SpamRegex]]',
);

/** Brazilian Portuguese (portuguÃªs do Brasil)
* @author Eduardo.mps
*/
$messages['pt-br'] = array(
'spamregex' => 'ExpressÃ£o regular de spam',
'spamregex-desc' => '[[Special:SpamRegex|Filtrar]] frases indesejadas em pÃ¡ginas editadas, com base em expressÃµes regulares',
'spamregex-error-unblocking' => 'Erro ao desbloquear "$1". Provavelmente, nÃ£o existe tal padrÃ£o.',
'spamregex-summary' => 'O texto foi encontrado no sumÃ¡rio da pÃ¡gina.',
'spamregex-intro' => 'Use este formulÃ¡rio para efetivamente bloquear expressÃµes de serem gravadas no texto de uma pÃ¡gina.
Se o texto contÃ©m a expressÃ£o dada, as alteraÃ§Ãµes nÃ£o serÃ£o gravadas e uma explicaÃ§Ã£o serÃ¡ apresentada ao utilizador que tentou gravar a pÃ¡gina.
Pede-se atenÃ§Ã£o: as expressÃµes nÃ£o deverÃ£o ser demasiado curtas ou demasiado comuns.',
'spamregex-page-title' => 'Bloco de expressÃµes indesejadas da expressÃ£o regular de spam',
'spamregex-currently-blocked' => "'''Frases atualmente bloqueadas:'''",
'spamregex-move' => 'O motivo que vocÃª introduziu contÃ©m uma frase bloqueada.',
'spamregex-no-currently-blocked' => "'''NÃ£o hÃ¡ frases bloqueadas.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 remover]) adicionado por $5 em $6 em $7",
'spamregex-page-title-1' => 'Bloquear frase usando expressÃµes regulares',
'spamregex-unblock-success' => 'Desbloqueio com sucesso',
'spamregex-unblock-message' => "A frase '''$1''' foi desbloqueada de ediÃ§Ãµes.",
'spamregex-page-title-2' => 'Impedir pÃ¡ginas de serem gravadas usando expressÃµes regulares',
'spamregex-block-success' => 'Bloqueio bem sucedido',
'spamregex-block-message' => "A frase '''$1''' foi bloqueada.",
'spamregex-warning-1' => 'ForneÃ§a uma frase a bloquear.',
'spamregex-error-1' => 'ExpressÃ£o regular invÃ¡lida.',
'spamregex-warning-2' => 'Por favor selecione pelo menos um modo de bloqueio.',
'spamregex-already-blocked' => '"$1" jÃ¡ estÃ¡ bloqueado',
'spamregex-phrase-block' => 'Frase a bloquear:',
'spamregex-phrase-block-text' => 'bloquear frase no texto da pÃ¡gina',
'spamregex-phrase-block-summary' => 'bloquear frase no sumÃ¡rio',
'spamregex-block-submit' => 'Bloquear&nbsp;esta&nbsp;frase',
'spamregex-text' => '(Texto)',
'spamregex-summary-log' => '(SumÃ¡rio)',
'right-spamregex' => 'Bloquear frases de spam atravÃ©s de [[Special:SpamRegex]]',
);

/** Tarifit (Tarifit)
* @author Jose77
*/
$messages['rif'] = array(
'spamregex-summary-log' => '(Asgbr)',
);

/** Romanian (romÃ¢nÄƒ)
* @author KlaudiuMihaila
*/
$messages['ro'] = array(
'spamregex-no-currently-blocked' => "'''Nu existÄƒ expresii blocate.'''",
'spamregex-unblock-success' => 'Deblocare cu succes',
'spamregex-block-success' => 'Blocare cu succes',
'spamregex-block-message' => "Expresia '''$1''' a fost blocatÄƒ.",
'spamregex-error-1' => 'Expresie regulatÄƒ incorectÄƒ.',
'spamregex-already-blocked' => '"$1" este deja blocat',
'spamregex-text' => '(Text)',
'spamregex-summary-log' => '(Rezumat)',
);

/** tarandÃ­ne (tarandÃ­ne)
* @author Joetaras
*/
$messages['roa-tara'] = array(
'spamregex-text' => '(Teste)',
'spamregex-summary-log' => '(Riepileghe)',
);

/** Russian (Ñ€ÑƒÑÑÐºÐ¸Ð¹)
* @author Rubin
* @author ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€ Ð¡Ð¸Ð³Ð°Ñ‡Ñ‘Ð²
*/
$messages['ru'] = array(
'spamregex' => 'Ð¡Ð¿Ð°Ð¼-Ñ„Ð¸Ð»ÑŒÑ‚Ñ€',
'spamregex-desc' => '[[Special:SpamRegex|Ð¤Ð¸Ð»ÑŒÑ‚Ñ€]] Ð½ÐµÐ¶ÐµÐ»Ð°Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ñ… Ñ„Ñ€Ð°Ð· Ð¿Ñ€Ð¸ Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ð¸ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†, Ð¾ÑÐ½Ð¾Ð²Ð°Ð½Ð½Ñ‹Ð¹ Ð½Ð° Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸ÑÑ…',
'spamregex-error-unblocking' => 'ÐžÑˆÐ¸Ð±ÐºÐ° Ñ€Ð°Ð·Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ Â«$1Â». Ð’ÐµÑ€Ð¾ÑÑ‚Ð½Ð¾, Ñ‚Ð°ÐºÐ¾Ð¹ ÑˆÐ°Ð±Ð»Ð¾Ð½ Ð¾Ñ‚ÑÑƒÑ‚ÑÑ‚Ð²ÑƒÐµÑ‚.',
'spamregex-summary' => 'Ð¢ÐµÐºÑÑ‚ Ð±Ñ‹Ð» Ð¾Ð±Ð½Ð°Ñ€ÑƒÐ¶ÐµÐ½ Ð² Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸Ð¸ Ð¸Ð·Ð¼ÐµÐ½ÐµÐ½Ð¸Ð¹.',
'spamregex-intro' => 'Ð˜ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐ¹Ñ‚Ðµ ÑÑ‚Ñƒ Ñ„Ð¾Ñ€Ð¼Ñƒ Ñ‡Ñ‚Ð¾Ð±Ñ‹ ÑÑ„Ñ„ÐµÐºÑ‚Ð¸Ð²Ð½Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð¿Ð¾ÑÐ²Ð»ÐµÐ½Ð¸Ñ Ð² Ñ‚ÐµÐºÑÑ‚Ðµ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ† Ð·Ð°Ð´Ð°Ð½Ð½Ñ‹Ñ… Ñ„Ñ€Ð°Ð·.
Ð•Ð»Ð¸ Ñ‚ÐµÐºÑÑ‚ ÑÐ¾Ð´ÐµÑ€Ð¶Ð¸Ñ‚ Ð·Ð°Ð´Ð°Ð½Ð½Ð¾Ðµ Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ, Ð¿Ñ€Ð°Ð²ÐºÐ° Ð½Ðµ Ð±ÑƒÐ´ÐµÑ‚ ÑÐ¾Ñ…Ñ€Ð°Ð½ÐµÐ½Ð°, Ð° ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÑƒ, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ ÐµÑ‘ Ð¿Ñ€Ð¾Ð²Ñ‘Ð», Ð±ÑƒÐ´ÐµÑ‚ Ð¿Ð¾ÐºÐ°Ð·Ð°Ð½Ð¾ Ð¿Ñ€ÐµÐ´ÑƒÐ¿Ñ€ÐµÐ¶Ð´ÐµÐ½Ð¸Ðµ.
Ð’Ð°Ð¶Ð½Ð¾Ðµ Ð·Ð°Ð¼ÐµÑ‡Ð°Ð½Ð¸Ðµ, Ð·Ð°Ð´Ð°Ð²Ð°ÐµÐ¼Ñ‹Ðµ Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ Ð½Ðµ Ð´Ð¾Ð»Ð¶Ð½Ñ‹ Ð±Ñ‹Ñ‚ÑŒ ÑÐ»Ð¸ÑˆÐºÐ¾Ð¼ ÐºÐ¾Ñ€Ð¾Ñ‚ÐºÐ¸Ð¼Ð¸ Ð¸Ð»Ð¸ ÑÐ»Ð¸ÑˆÐºÐ¾Ð¼ Ñ‡Ð°ÑÑ‚Ð¾ Ð²ÑÑ‚Ñ€ÐµÑ‡Ð°ÑŽÑ‰Ð¸Ð¼Ð¸ÑÑ.',
'spamregex-page-title' => 'Ð¡Ð¿Ð°Ð¼-Ñ„Ð¸Ð»ÑŒÑ‚Ñ€ Ð½ÐµÐ¶ÐµÐ»Ð°Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹',
'spamregex-currently-blocked' => "'''Ð’ Ð½Ð°ÑÑ‚Ð¾ÑÑ‰Ð¸Ð¹ Ð¼Ð¾Ð¼ÐµÐ½Ñ‚ Ð±Ð»Ð¾ÐºÐ¸Ñ€ÑƒÑŽÑ‚ÑÑ Ñ„Ñ€Ð°Ð·Ñ‹:'''",
'spamregex-move' => 'ÐŸÑ€Ð¸Ñ‡Ð¸Ð½Ð°, Ð¿Ð¾ ÐºÐ¾Ñ‚Ð¾Ñ€Ð¾Ð¹ Ð²Ñ‹ Ð´Ð¾Ð±Ð°Ð²Ð»ÑÐµÑ‚Ðµ ÑÑ‚Ñƒ Ñ„Ñ€Ð°Ð·Ñƒ Ð´Ð»Ñ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ¸.',
'spamregex-no-currently-blocked' => "'''ÐÐµÑ‚ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ñ‹Ñ… Ñ„Ñ€Ð°Ð·.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 ÑƒÐ´Ð°Ð»Ð¸Ñ‚ÑŒ]) Ð´Ð¾Ð±Ð°Ð²Ð»ÐµÐ½Ð° $5 $6 $7",
'spamregex-page-title-1' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ° Ñ„Ñ€Ð°Ð·Ñ‹ Ñ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð¸ÐµÐ¼ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹',
'spamregex-unblock-success' => 'Ð Ð°Ð·Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ° Ð²Ñ‹Ð¿Ð¾Ð»Ð½ÐµÐ½Ð°',
'spamregex-unblock-message' => "Ð—Ð°Ð¿Ñ€ÐµÑ‚ Ð½Ð° Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð¸Ðµ Ñ„Ñ€Ð°Ð·Ñ‹ '''$1''' ÑÐ½ÑÑ‚.",
'spamregex-page-title-2' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ° Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð¸Ñ Ñ„Ñ€Ð°Ð·Ñ‹ Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ñ… Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹',
'spamregex-block-success' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ° Ð²Ñ‹Ð¿Ð¾Ð»Ð½ÐµÐ½Ð°',
'spamregex-block-message' => "Ð¤Ñ€Ð°Ð·Ð° '''$1''' Ð·Ð°Ð¿Ñ€ÐµÑ‰ÐµÐ½Ð° Ð´Ð»Ñ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð¸Ñ.",
'spamregex-warning-1' => 'Ð£ÐºÐ°Ð¶Ð¸Ñ‚Ðµ Ñ„Ñ€Ð°Ð·Ñƒ Ð´Ð»Ñ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ¸.',
'spamregex-error-1' => 'ÐžÑˆÐ¸Ð±Ð¾Ñ‡Ð½Ð¾Ðµ Ñ€ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ð¾Ðµ Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ.',
'spamregex-warning-2' => 'ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð²Ñ‹Ð±ÐµÑ€Ð¸Ñ‚Ðµ Ñ…Ð¾Ñ‚Ñ Ð±Ñ‹ Ð¾Ð´Ð¸Ð½ Ñ€ÐµÐ¶Ð¸Ð¼ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ.',
'spamregex-already-blocked' => 'Â«$1Â» ÑƒÐ¶Ðµ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð°',
'spamregex-phrase-block' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ñ„Ñ€Ð°Ð·Ñƒ:',
'spamregex-phrase-block-text' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ° Ñ„Ñ€Ð°Ð·Ñ‹ Ð² Ñ‚ÐµÐºÑÑ‚Ðµ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñ‹',
'spamregex-phrase-block-summary' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ° Ñ„Ñ€Ð°Ð·Ñ‹ Ð² Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸Ð¸ Ð¸Ð·Ð¼ÐµÐ½ÐµÐ½Ð¸Ð¹',
'spamregex-block-submit' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ ÑÑ‚Ñƒ Ñ„Ñ€Ð°Ð·Ñƒ',
'spamregex-text' => '(Ð¢ÐµÐºÑÑ‚)',
'spamregex-summary-log' => '(Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸Ðµ)',
'right-spamregex' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ ÑÐ¿Ð°Ð¼-Ñ„Ñ€Ð°Ð· Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ [[Special:SpamRegex]]',
);

/** Rusyn (Ñ€ÑƒÑÐ¸Ð½ÑŒÑÐºÑ‹Ð¹)
* @author Gazeb
*/
$messages['rue'] = array(
'spamregex-text' => '(Ð¢ÐµÐºÑÑ‚)',
);

/** Sassaresu (Sassaresu)
* @author Felis
*/
$messages['sdc'] = array(
'spamregex-already-blocked' => '"$1" Ã¨ giÃ broccaddu',
);

/** Sinhala (à·ƒà·’à¶‚à·„à¶½)
* @author à¶´à·ƒà·’à¶³à·” à¶šà·à·€à·’à¶±à·Šà¶¯
*/
$messages['si'] = array(
'spamregex-text' => '(à¶´à·à¶¨à¶º)',
'spamregex-summary-log' => '(à·ƒà·à¶»à·à¶‚à·à¶º)',
);

/** Slovak (slovenÄina)
* @author Helix84
*/
$messages['sk'] = array(
'spamregex' => 'SpamRegex',
'spamregex-desc' => '[[Special:SpamRegex|Filtrovanie]] neÅ¾elanÃ½ch vÃ½razov v upravovanÃ½ch strÃ¡nkach na zÃ¡klade regulÃ¡rnych vÃ½razov',
'spamregex-error-unblocking' => 'Chyba pri odblokovanÃ­ â€ž$1â€. TakÃ½ vzor pravdepodobne neexistuje.',
'spamregex-summary' => 'Text bol nÃ¡jdenÃ½ v zhrnutÃ­ Ãºprav strÃ¡nky.',
'spamregex-intro' => 'Tento formulÃ¡r slÃºÅ¾i na efektÃ­vne zamedzenie ukladania neÅ¾iaduceho textu strÃ¡nok. Ak text obsahuje uvedenÃ½ vÃ½raz, zmeny nebude moÅ¾nÃ© uloÅ¾iÅ¥ a pouÅ¾Ã­vateÄ¾ovi sa zobrazÃ­ upozornenie. OdporÃºÄa sa opatrnosÅ¥ - vÃ½razy by nemali byÅ¥ prÃ­liÅ¡ krÃ¡tke ani beÅ¾ne sa vyskytujÃºce.',
'spamregex-page-title' => 'Blokovanie neÅ¾iaduceho spamu pomocou regulÃ¡rnych vÃ½razov',
'spamregex-currently-blocked' => "'''MomentÃ¡lne zablokovanÃ© frÃ¡zy.'''",
'spamregex-move' => 'DÃ´vod, ktorÃ½ ste zadali, obsahoval zablokovanÃ½ vÃ½raz.',
'spamregex-no-currently-blocked' => "'''Nie sÃº Å¾iadne zablokovanÃ© frÃ¡zy.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 odstrÃ¡niÅ¥]) pridal $5 $6 $7",
'spamregex-page-title-1' => 'ZablokovaÅ¥ frÃ¡zu pomocou regulÃ¡rnych vÃ½razov',
'spamregex-unblock-success' => 'Odblokovanie ÃºspeÅ¡nÃ©',
'spamregex-unblock-message' => 'Bol zruÅ¡enÃ½ zÃ¡kaz uloÅ¾iÅ¥ frÃ¡zu â€ž$1â€œ.',
'spamregex-page-title-2' => 'BlokovaÅ¥ ukladanie frÃ¡z pomocou regulÃ¡rnych vÃ½razov',
'spamregex-block-success' => 'Blokovanie ÃºspeÅ¡nÃ©',
'spamregex-block-message' => "FrÃ¡za '''$1''' bola zablokovanÃ¡.",
'spamregex-warning-1' => 'Zadajte frÃ¡zu, ktorÃº chcete blokovaÅ¥.',
'spamregex-error-1' => 'NeplatnÃ½ regulÃ¡rny vÃ½raz.',
'spamregex-warning-2' => 'ProsÃ­m, oznaÄte aspoÅˆ jeden reÅ¾im blokovania.',
'spamregex-already-blocked' => 'â€ž$1â€œ je uÅ¾ blokovanÃ©',
'spamregex-phrase-block' => 'BlokovaÅ¥ frÃ¡zu:',
'spamregex-phrase-block-text' => 'blokovaÅ¥ frÃ¡zu v texte strÃ¡nky',
'spamregex-phrase-block-summary' => 'blokovaÅ¥ frÃ¡zu v zhrnutÃ­ Ãºprav',
'spamregex-block-submit' => 'BlokovaÅ¥&nbsp;tÃºto&nbsp;frÃ¡zu',
'spamregex-text' => '(v texte)',
'spamregex-summary-log' => '(v zhrnutÃ­)',
'right-spamregex' => 'BlokovaÅ¥ spam v texte pomocou [[Special:SpamRegex]]',
);

/** Slovenian (slovenÅ¡Äina)
* @author Dbc334
*/
$messages['sl'] = array(
'spamregex-summary-log' => '(Povzetek)',
);

/** Southern Sami (Ã…arjelsaemien)
* @author M.M.S.
*/
$messages['sma'] = array(
'spamregex-text' => '(Tjaalege)',
);

/** Serbian (Cyrillic script) (ÑÑ€Ð¿ÑÐºÐ¸ (Ñ›Ð¸Ñ€Ð¸Ð»Ð¸Ñ†Ð°)â€Ž)
* @author Rancher
* @author Ð–ÐµÑ™ÐºÐ¾ Ð¢Ð¾Ð´Ð¾Ñ€Ð¾Ð²Ð¸Ñ›
* @author ÐœÐ¸Ñ…Ð°Ñ˜Ð»Ð¾ ÐÐ½Ñ’ÐµÐ»ÐºÐ¾Ð²Ð¸Ñ›
*/
$messages['sr-ec'] = array(
'spamregex' => 'Ð ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·Ð¸ Ð·Ð° ÑÐ¿Ð°Ð¼',
'spamregex-desc' => '[[Special:SpamRegex|Ð¤Ð¸Ð»Ñ‚Ñ€Ð¸Ñ€Ð°Ñ˜Ñ‚Ðµ]] Ð½ÐµÐ¶ÐµÑ™ÐµÐ½Ðµ Ñ„Ñ€Ð°Ð·Ðµ Ñƒ Ð¸Ð·Ð¼ÐµÑšÐµÐ½Ð¸Ð¼ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð°Ð¼Ð°, Ð¿Ð¾Ð¼Ð¾Ñ›Ñƒ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ð¸Ñ… Ð¸Ð·Ñ€Ð°Ð·Ð°',
'spamregex-error-unblocking' => 'Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸Ð»Ð¸ÐºÐ¾Ð¼ Ð´ÐµÐ±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐ° â€ž$1â€. Ð’ÐµÑ€Ð¾Ð²Ð°Ñ‚Ð½Ð¾ Ñ‚Ð° Ñ„Ñ€Ð°Ð·Ð° Ð¸ Ð½Ð¸Ñ˜Ðµ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð°.',
'spamregex-summary' => 'Ð¢ÐµÐºÑÑ‚ ÑÐµ Ð½Ð°ÑˆÐ°Ð¾ Ñƒ Ð¾Ð¿Ð¸ÑÑƒ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ðµ.',
'spamregex-currently-blocked' => "'''Ð—Ð°Ð±Ñ€Ð°ÑšÐµÐ½Ðµ Ñ„Ñ€Ð°Ð·Ðµ:'''",
'spamregex-move' => 'Ð Ð°Ð·Ð»Ð¾Ð³ ÐºÐ¾Ñ˜Ð¸ ÑÑ‚Ðµ Ð½Ð°Ð²ÐµÐ»Ð¸ Ñ˜Ðµ ÑÐ°Ð´Ñ€Ð¶Ð°Ð¾ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ñƒ Ñ„Ñ€Ð°Ð·Ñƒ.',
'spamregex-no-currently-blocked' => "'''ÐÐµÐ¼Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð¸Ñ… Ñ„Ñ€Ð°Ð·Ð°.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 ÑƒÐºÐ»Ð¾Ð½Ð¸]) Ð´Ð¾Ð´Ð°Ñ‚ ÑÐ° $5 Ð½Ð° $6 Ñƒ $7",
'spamregex-page-title-1' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜ Ñ„Ñ€Ð°Ð·Ðµ ÐºÐ¾Ñ€Ð¸ÑÑ‚ÐµÑ›Ð¸ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ðµ Ð¸Ð·Ñ€Ð°Ð·Ðµ',
'spamregex-unblock-success' => 'ÐŸÑ€Ð¸ÑÑ‚ÑƒÐ¿ Ñ˜Ðµ Ð²Ñ€Ð°Ñ›ÐµÐ½',
'spamregex-unblock-message' => "Ð¤Ñ€Ð°Ð·Ð° '''$1''' Ñ˜Ðµ Ð±Ð¸Ð»Ð° Ð´ÐµÐ±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð° Ð·Ð° Ð¸Ð·Ð¼ÐµÐ½Ðµ.",
'spamregex-block-success' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐµ Ñ˜Ðµ ÑƒÑÐ¿ÐµÐ»Ð¾',
'spamregex-block-message' => "Ð¤Ñ€Ð°Ð·Ð° '''$1''' Ñ˜Ðµ ÑÐ°Ð´Ð° Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½Ð°.",
'spamregex-warning-1' => 'Ð£Ð½ÐµÑÐ¸Ñ‚Ðµ Ñ„Ñ€Ð°Ð·Ñƒ ÐºÐ¾Ñ˜Ñƒ Ð¶ÐµÐ»Ð¸Ñ‚Ðµ Ð´Ð° Ð·Ð°Ð±Ñ€Ð°Ð½Ð¸Ñ‚Ðµ.',
'spamregex-error-1' => 'ÐÐµÐ²Ð°Ð»Ð¸Ð´Ð°Ð½ Ñ€ÐµÐ³ÑƒÐ»Ð°Ñ€Ð½Ð¸ Ð¸Ð·Ñ€Ð°Ð·.',
'spamregex-warning-2' => 'ÐœÐ¾Ð»Ð¸Ð¼Ð¾ Ð’Ð°Ñ Ð´Ð° Ð¾Ð·Ð½Ð°Ñ‡Ð¸Ñ‚Ðµ Ð¼Ð°ÐºÐ°Ñ€ Ñ˜ÐµÐ´Ð°Ð½ Ð½Ð°Ñ‡Ð¸Ð½ Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°ÑšÐ°.',
'spamregex-already-blocked' => 'â€ž$1â€œ Ñ˜Ðµ Ð²ÐµÑ› Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ð½',
'spamregex-phrase-block' => 'Ð—Ð°Ð±Ñ€Ð°ÑšÐµÐ½Ð° Ñ„Ñ€Ð°Ð·Ð°:',
'spamregex-phrase-block-text' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜Ñ‚Ðµ Ñ„Ñ€Ð°Ð·Ñƒ Ñƒ Ñ‚ÐµÐºÑÑ‚Ñƒ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ðµ',
'spamregex-phrase-block-summary' => 'Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜Ñ‚Ðµ Ñ„Ñ€Ð°Ð·Ñƒ Ñƒ Ð¾Ð¿Ð¸ÑÑƒ Ð¸Ð·Ð¼ÐµÐ½Ðµ',
'spamregex-block-submit' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜Ñ‚Ðµ&nbsp;Ð¾Ð²Ñƒ&nbsp;Ñ„Ñ€Ð°Ð·Ñƒ',
'spamregex-text' => '(Ð¢ÐµÐºÑÑ‚)',
'spamregex-summary-log' => '(Ð¾Ð¿Ð¸Ñ)',
'right-spamregex' => 'Ð‘Ð»Ð¾ÐºÐ¸Ñ€Ð°Ñ˜Ñ‚Ðµ ÑÐ¿Ð°Ð¼-Ñ„Ñ€Ð°Ð·Ðµ Ð¿Ð¾Ð¼Ð¾Ñ›Ñƒ [[Special:SpamRegex]]',
);

/** Serbian (Latin script) (srpski (latinica)â€Ž)
* @author Michaello
* @author Rancher
* @author Ð–ÐµÑ™ÐºÐ¾ Ð¢Ð¾Ð´Ð¾Ñ€Ð¾Ð²Ð¸Ñ›
*/
$messages['sr-el'] = array(
'spamregex' => 'Regularni izrazi za spam',
'spamregex-desc' => '[[Special:SpamRegex|Filtrirajte]] neÅ¾eljene fraze u izmenjenim stranicama, pomoÄ‡u regularnih izraza',
'spamregex-error-unblocking' => 'GreÅ¡ka prilikom deblokiranja â€ž$1â€. Verovatno ta fraza i nije blokirana.',
'spamregex-summary' => 'Tekst se naÅ¡ao u opisu stranice.',
'spamregex-currently-blocked' => "'''Zabranjene fraze:'''",
'spamregex-move' => 'Razlog koji ste naveli je sadrÅ¾ao blokiranu frazu.',
'spamregex-no-currently-blocked' => "'''Nema blokiranih fraza.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 ukloni]) dodat sa $5 na $6 u $7",
'spamregex-page-title-1' => 'Blokiraj fraze koristeÄ‡i regularne izraze',
'spamregex-unblock-success' => 'Pristup je vraÄ‡en',
'spamregex-unblock-message' => "Fraza '''$1''' je bila deblokirana za izmene.",
'spamregex-block-success' => 'Blokiranje je uspelo',
'spamregex-block-message' => "Fraza '''$1''' je sada blokirana.",
'spamregex-warning-1' => 'Unesite frazu koju Å¾elite da zabranite.',
'spamregex-error-1' => 'Nevalidan regularni izraz.',
'spamregex-warning-2' => 'Molimo Vas da oznaÄite makar jedan naÄin blokiranja.',
'spamregex-already-blocked' => '"$1" je veÄ‡ blokirana',
'spamregex-phrase-block' => 'Zabranjena fraza:',
'spamregex-phrase-block-text' => 'blokirajte frazu u tekstu stranice',
'spamregex-phrase-block-summary' => 'blokirajte frazu u opisu izmene',
'spamregex-block-submit' => 'Blokirajte&nbsp;ovu&nbsp;frazu',
'spamregex-text' => '(Tekst)',
'spamregex-summary-log' => '(opis)',
'right-spamregex' => 'Blokirajte spam-fraze pomoÄ‡u [[Special:SpamRegex]]',
);

/** Sundanese (Basa Sunda)
* @author Irwangatot
*/
$messages['su'] = array(
'spamregex-already-blocked' => '"$1" geus dipeungpeuk',
);

/** Swedish (svenska)
* @author Boivie
* @author M.M.S.
* @author Najami
*/
$messages['sv'] = array(
'spamregex' => 'SpamRegex',
'spamregex-desc' => '[[Special:SpamRegex|Filtrera ut]] oÃ¶nskade fraser i redigerade sidor, baserade pÃ¥ reguljÃ¤ra uttryck',
'spamregex-error-unblocking' => 'Fel vid avblockering av "$1". FÃ¶rmodligen finns det inget sÃ¥dand mÃ¶nster.',
'spamregex-summary' => 'Texten hittades i sidans sammanfattning.',
'spamregex-intro' => 'AnvÃ¤nd det hÃ¤r formulÃ¤ret fÃ¶r att effektivt blockera uttryck frÃ¥n att sparas pÃ¥ sidorna.
Om texten innehÃ¥ller det angivna uttrycket, kommer Ã¤ndringen inte att sparas, och en fÃ¶rklaring kommer visas fÃ¶r anvÃ¤ndaren som fÃ¶rsÃ¶kte att spara sidan.
Var observant pÃ¥ att uttryck inte bÃ¶r vara fÃ¶r korta eller fÃ¶r vanliga.',
'spamregex-page-title' => 'Blockering av oÃ¶nskade uttryck med reguljÃ¤ra uttryck',
'spamregex-currently-blocked' => "'''Nuvarande blockerade fraser:'''",
'spamregex-move' => 'Anledningen du skrev in innehÃ¶ll en blockerad fras.',
'spamregex-no-currently-blocked' => "'''Det finns inga blockerade fraser.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 ta bort]) lagd till av $5 den $6 kl $7",
'spamregex-page-title-1' => 'Blockera fras med hjÃ¤lp av reguljÃ¤ra uttryck',
'spamregex-unblock-success' => 'Avblockering lyckades',
'spamregex-unblock-message' => "Frasen '''$1''' Ã¤r inte lÃ¤ngre blockerad.",
'spamregex-page-title-2' => 'Blockera fraser frÃ¥n att kunna sparas med hjÃ¤lp av reguljÃ¤ra uttryck',
'spamregex-block-success' => 'Blockering lyckades',
'spamregex-block-message' => "Frasen '''$1''' har blockerats.",
'spamregex-warning-1' => 'Ange en fras att blockera.',
'spamregex-error-1' => 'Ogiltigt reguljÃ¤rt uttryck.',
'spamregex-warning-2' => 'Du mÃ¥ste vÃ¤lja minst en blockeringsmetod.',
'spamregex-already-blocked' => '"$1" Ã¤r redan blockerad',
'spamregex-phrase-block' => 'Fras att blockera:',
'spamregex-phrase-block-text' => 'blockera fras i sidtext',
'spamregex-phrase-block-summary' => 'blockera fras i sammanfattning',
'spamregex-block-submit' => 'Blockera&nbsp;den&nbsp;hÃ¤r&nbsp;frasen',
'spamregex-text' => '(Text)',
'spamregex-summary-log' => '(Sammanfattning)',
'right-spamregex' => 'Blockera spamfraser genom [[Special:SpamRegex]]',
);

/** Tamil (à®¤à®®à®¿à®´à¯)
* @author Trengarasu
*/
$messages['ta'] = array(
'spamregex-text' => '(à®‰à®°à¯ˆ)',
'spamregex-summary-log' => '(à®šà¯à®°à¯à®•à¯à®•à®®à¯)',
);

/** Telugu (à°¤à±†à°²à±à°—à±)
* @author Veeven
*/
$messages['te'] = array(
'spamregex-summary' => 'à°ªà±‡à°œà±€ à°¯à±Šà°•à±à°• à°¸à°‚à°—à±à°°à°¹à°‚à°²à±‹ à°† à°ªà°¾à° à±à°¯à°‚ à°•à°¨à°¬à°¡à°¿à°‚à°¦à°¿.',
'spamregex-currently-blocked' => "'''à°ªà±à°°à°¸à±à°¤à±à°¤à°‚ à°¨à°¿à°°à±‹à°§à°‚à°²à±‹ à°‰à°¨à±à°¨ à°ªà°¦à°¬à°‚à°§à°¾à°²à±:'''",
'spamregex-unblock-success' => 'à°¨à°¿à°°à±‹à°§à°‚ à°Žà°¤à±à°¤à°¿à°µà±‡à°¤ à°µà°¿à°œà°¯à°µà°‚à°¤à°‚',
'spamregex-block-success' => 'à°¨à°¿à°°à±‹à°§à°‚ à°µà°¿à°œà°¯à°µà°‚à°¤à°®à°¯à±à°¯à°¿à°‚à°¦à°¿',
'spamregex-error-1' => 'à°¤à°ªà±à°ªà±à°¡à± à°°à±†à°—à±à°¯à±à°²à°°à± à°Žà°•à±à°¸à±&zwnj;à°ªà±à°°à±†à°·à°¨à±.',
'spamregex-warning-2' => 'à°•à°¨à±€à°¸à°‚ à°’à°•à±à°• à°¨à°¿à°°à±‹à°§à°ªà± à°ªà°¦à±à°§à°¤à°¿à°¨à±ˆà°¨à°¾ à°Žà°‚à°šà±à°•à±‹à°‚à°¡à°¿.',
'spamregex-already-blocked' => '"$1"à°¨à°¿ à°ˆà°¸à°°à°¿à°•à±‡ à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà°¾à°‚',
'spamregex-phrase-block' => 'à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà°¾à°²à±à°¸à°¿à°¨ à°ªà°¦à°¬à°‚à°§à°‚:',
'spamregex-phrase-block-text' => 'à°ªà°¦à°¬à°‚à°§à°¾à°¨à±à°¨à°¿ à°ªà±‡à°œà±€ à°ªà°¾à° à±à°¯à°‚à°²à±‹ à°‰à°‚à°Ÿà±‡ à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà±',
'spamregex-phrase-block-summary' => 'à°ªà°¦à°¬à°‚à°§à°¾à°¨à±à°¨à°¿ à°¸à°‚à°—à±à°°à°¹à°‚à°²à±‹ à°‰à°‚à°Ÿà±‡ à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà±',
'spamregex-block-submit' => 'à°ˆ&nbsp;à°ªà°¦à°¬à°‚à°§à°¾à°¨à±à°¨à°¿&nbsp;à°¨à°¿à°°à±‹à°§à°¿à°‚à°šà°‚à°¡à°¿',
'spamregex-text' => '(à°ªà°¾à° à±à°¯à°‚)',
'spamregex-summary-log' => '(à°¸à°‚à°—à±à°°à°¹à°‚)',
);

/** Tetum (tetun)
* @author MF-Warburg
*/
$messages['tet'] = array(
'spamregex-text' => '(Testu)',
'spamregex-summary-log' => '(Rezumu)',
);

/** Tajik (Cyrillic script) (Ñ‚Ð¾Ò·Ð¸ÐºÓ£)
* @author Ibrahim
*/
$messages['tg-cyrl'] = array(
'spamregex-error-1' => 'Ð˜Ð±Ð¾Ñ€Ð°Ð¸ Ð¾Ð´Ð´Ð¸Ð¸ Ð½Ð¾Ð¼Ó¯ÑŠÑ‚Ð°Ð±Ð°Ñ€',
'spamregex-already-blocked' => '"$1" Ð°Ð»Ð»Ð°ÐºÐ°Ð¹ Ð±Ð°ÑÑ‚Ð° ÑˆÑƒÐ´Ð°Ð°ÑÑ‚',
'spamregex-text' => '(ÐœÐ°Ñ‚Ð½)',
'spamregex-summary-log' => '(Ð¥ÑƒÐ»Ð¾ÑÐ°)',
);

/** Tajik (Latin script) (tojikÄ«)
* @author Liangent
*/
$messages['tg-latn'] = array(
'spamregex-error-1' => "Iborai oddiji nomÅ«'tabar",
'spamregex-already-blocked' => '"$1" allakaj basta ÅŸudaast',
'spamregex-text' => '(Matn)',
'spamregex-summary-log' => '(Xulosa)',
);

/** Turkmen (TÃ¼rkmenÃ§e)
* @author Hanberke
*/
$messages['tk'] = array(
'spamregex-text' => '(Tekst)',
);

/** Tagalog (Tagalog)
* @author AnakngAraw
*/
$messages['tl'] = array(
'spamregex' => "Pangkaraniwang pagsasaad na pang-\"manlulusob\" (''spam'')",
'spamregex-desc' => '[[Special:SpamRegex|Salain]]g tinatanggal ang hindi ninanais na mga parirala sa loob ng mga pahinang binago, batay sa pangkaraniwang mga pagsasaad',
'spamregex-error-unblocking' => 'Kamalian sa pagtatanggal ng hadlang sa "$1". Marahil walang ganyang gayahan (parisan/padron).',
'spamregex-summary' => 'Natagpuan ang teksto mula sa loob ng buod ng pahina.',
'spamregex-intro' => 'Gamitin ang pormularyong ito upang ganap na mahadlangan ang mga pagsasaad mula sa pagsasagip patungo sa teksto ng isang pahina.
Kung naglalaman ang teksto ng ibinigay na pagsasaad, hindi masasagip ang pagbabago at ipapakita sa tagagamit na sumubok na magsagip ng pahina ang isang paliwanag.
Imimungkahi ang pagiingat, hindi dapat na napakaiksi o napakapangkaraniwan ang mga pagsasaad.',
'spamregex-page-title' => "Paghahadlang sa hindi ninanais na mga pagpapahayag ng pangkaraniwang pagsasaad ng \"manlulusob\" (''spam'')",
'spamregex-currently-blocked' => "'''Pangkasalukuyang hinahadlangang mga parirala:'''",
'spamregex-move' => 'Naglalaman ng isang hinadlangang parirala ang ipinasok/inilagay mong dahilan.',
'spamregex-no-currently-blocked' => "'''Walang hinahadlangang mga parirala.'''",
'spamregex-log' => "* '''$1''' $2 ([{{SERVER}}$3&text=$4 tanggalin]) idinagdag ni $5 noong $6 noong $7",
'spamregex-page-title-1' => 'Hinadlangang parirala na gumagamit ng pangkaraniwang mga pagsasaad',
'spamregex-unblock-success' => 'Nagtagumpay ang pagtanggal ng paghadlang/pagharang',
'spamregex-unblock-message' => "Tinanggal ang pagkakaharang mula sa pamamatnugot (paggawa ng pagbabago) ang pariralang '''$1'''.",
'spamregex-page-title-2' => 'Hadlangan ang pagsasagip ng mga parirala na ginagamitan ng pangkaraniwang mga pagsasaad',
'spamregex-block-success' => 'Nagtagumpay ang paghadlang',
'spamregex-block-message' => "Hinadlangan na ang pariralang '''$1'''.",
'spamregex-warning-1' => 'Magbigay ng isang pariralang hahadlangan.',
'spamregex-error-1' => 'Hindi tanggap na pangkaraniwang pagsasaad.',
'spamregex-warning-2' => 'Pakilagyan ng tsek ang kahit na isang modalidad ng paghahadlang.',
'spamregex-already-blocked' => 'Nahadlangan na ang "$1"',
'spamregex-phrase-block' => 'Pariralang hahadlangan:',
'spamregex-phrase-block-text' => 'hadlangan ang pariralang nasa teksto ng pahina',
'spamregex-phrase-block-summary' => 'hadlangan ang pariralang nasa buod',
'spamregex-block-submit' => 'Hadlangan&nbsp;ang&nbsp;pariralang&nbsp;ito',
'spamregex-text' => '(Teksto)',
'spamregex-summary-log' => '(Buod)',
'right-spamregex' => 'Hadlangan ang mga pariralang manlulusob sa pamamagitan ng [[Special:SpamRegex]]',
);

/** Turkish (TÃ¼rkÃ§e)
* @author Karduelis
* @author Vito Genovese
*/
$messages['tr'] = array(
'spamregex' => 'Reklam regexi',
'spamregex-unblock-success' => 'Engel kaldÄ±rma iÅŸlemi baÅŸarÄ±lÄ±',
'spamregex-error-1' => 'GeÃ§ersiz kurallÄ± ifade.',
'spamregex-text' => '(Metin)',
'spamregex-summary-log' => '(Ã–zet)',
);

/** Ukrainian (ÑƒÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°)
* @author Prima klasy4na
* @author Ð¢ÐµÑÑ‚
*/
$messages['uk'] = array(
'spamregex-already-blocked' => '"$1" Ð²Ð¶Ðµ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¾Ð²Ð°Ð½Ð¸Ð¹',
'spamregex-text' => '(Ð¢ÐµÐºÑÑ‚)',
'spamregex-summary-log' => '(Ð¾Ð¿Ð¸Ñ)',
);

/** Urdu (Ø§Ø±Ø¯Ùˆ)
* @author à¶´à·ƒà·’à¶³à·” à¶šà·à·€à·’à¶±à·Šà¶¯
*/
$messages['ur'] = array(
'spamregex-text' => '(Ù¹ÛŒÚ©Ø³Ù¹)',
'spamregex-summary-log' => '(Ø®Ù„Ø§ØµÛ)',
);

/** Veps (vepsÃ¤n kelâ€™)
* @author Ð˜Ð³Ð¾Ñ€ÑŒ Ð‘Ñ€Ð¾Ð´ÑÐºÐ¸Ð¹
*/
$messages['vep'] = array(
'spamregex-text' => '(Tekst)',
);

/** Vietnamese (Tiáº¿ng Viá»‡t)
* @author Minh Nguyen
* @author Vinhtantran
*/
$messages['vi'] = array(
'spamregex-page-title-1' => 'Cáº¥m cá»¥m tá»« dÃ¹ng biá»ƒu thá»©c chÃ­nh quy',
'spamregex-unblock-success' => 'Bá» cáº¥m thÃ nh cÃ´ng',
'spamregex-block-success' => 'Cáº¥m thÃ nh cÃ´ng',
'spamregex-block-message' => "Cá»¥m tá»« '''$1''' Ä‘Ã£ bá»‹ cáº¥m.",
'spamregex-error-1' => 'Biá»ƒu thá»©c chÃ­nh quy khÃ´ng há»£p lá»‡.',
'spamregex-already-blocked' => 'â€œ$1â€ Ä‘Ã£ bá»‹ cáº¥m rá»“i',
'spamregex-phrase-block' => 'Cá»¥m tá»« Ä‘á»ƒ cáº¥m:',
'spamregex-phrase-block-text' => 'cáº¥m cá»¥m tá»« trong ná»™i dung trang',
'spamregex-phrase-block-summary' => 'cáº¥m cá»¥m tá»« trong tÃ³m lÆ°á»£c',
'spamregex-block-submit' => 'Cáº¥m&nbsp;cá»¥m&nbsp;tá»«&nbsp;nÃ y',
'spamregex-text' => '(VÄƒn báº£n)',
'spamregex-summary-log' => '(TÃ³m lÆ°á»£c)',
);

/** VolapÃ¼k (VolapÃ¼k)
* @author Malafaya
*/
$messages['vo'] = array(
'spamregex-text' => '(VÃ¶dem)',
);

/** Yiddish (×™×™Ö´×“×™×©)
* @author ×¤×•×™×œ×™×©×¢×¨
*/
$messages['yi'] = array(
'spamregex-text' => '(×˜×¢×§×¡×˜)',
);

/** Simplified Chinese (ä¸­æ–‡ï¼ˆç®€ä½“ï¼‰â€Ž)
* @author Liangent
*/
$messages['zh-hans'] = array(
'spamregex-text' => 'ï¼ˆæ–‡å­—ï¼‰',
'spamregex-summary-log' => 'ï¼ˆæ‘˜è¦ï¼‰',
);

/** Traditional Chinese (ä¸­æ–‡ï¼ˆç¹é«”ï¼‰â€Ž)
* @author Liangent
*/
$messages['zh-hant'] = array(
'spamregex-text' => 'ï¼ˆæ–‡å­—ï¼‰',
'spamregex-summary-log' => 'ï¼ˆæ‘˜è¦ï¼‰',
);