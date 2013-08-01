<?php
$messages = array();

/** English
 * @author Nimish Gautam
 * @author Sam Reed
 * @author Brandon Harris
 * @author Trevor Parscal
 * @author Arthur Richards
 */
$messages['en'] = array(
	'articlefeedback' => 'Article feedback dashboard',
	'articlefeedback-desc' => 'Article feedback',
	/* ext.articleFeedback and jquery.articleFeedback */
	'articlefeedback-error' => 'An error has occurred. Please try again later.',
	'articlefeedback-form-switch-label' => 'Rate this page',
	'articlefeedback-form-panel-title' => 'Rate this page',
	'articlefeedback-form-panel-explanation' => 'What\'s this?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Remove this rating',
	'articlefeedback-form-panel-expertise' => 'I am highly knowledgeable about this topic (optional)',
	'articlefeedback-form-panel-expertise-studies' => 'I have a relevant college/university degree',
	'articlefeedback-form-panel-expertise-profession' => 'It is part of my profession',
	'articlefeedback-form-panel-expertise-hobby' => 'It is a deep personal passion',
	'articlefeedback-form-panel-expertise-other' => 'The source of my knowledge is not listed here',
	'articlefeedback-form-panel-helpimprove' => 'I would like to help improve Wikipedia, send me an e-mail (optional)',
	'articlefeedback-form-panel-helpimprove-note' => 'We will send you a confirmation e-mail. We will not share your e-mail address with outside parties as per our $1.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'email@example.org', // Optional
	'articlefeedback-form-panel-helpimprove-privacy' => 'feedback privacy statement',
	'articlefeedback-form-panel-submit' => 'Submit ratings',
	'articlefeedback-form-panel-pending' => 'Your ratings have not been submitted yet',
	'articlefeedback-form-panel-success' => 'Saved successfully',
	'articlefeedback-form-panel-expiry-title' => 'Your ratings have expired',
	'articlefeedback-form-panel-expiry-message' => 'Please reevaluate this page and submit new ratings.',
	'articlefeedback-report-switch-label' => 'View page ratings',
	'articlefeedback-report-panel-title' => 'Page ratings',
	'articlefeedback-report-panel-description' => 'Current average ratings.',
	'articlefeedback-report-empty' => 'No ratings',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|one rating|$1 ratings}}',
	'articlefeedback-field-trustworthy-label' => 'Trustworthy',
	'articlefeedback-field-trustworthy-tip' => 'Do you feel this page has sufficient citations and that those citations come from trustworthy sources?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Lacks reputable sources',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Few reputable sources',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Adequate reputable sources',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Good reputable sources',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Great reputable sources',
	'articlefeedback-field-complete-label' => 'Complete',
	'articlefeedback-field-complete-tip' => 'Do you feel that this page covers the essential topic areas that it should?',
	'articlefeedback-field-complete-tooltip-1' => 'Missing most information',
	'articlefeedback-field-complete-tooltip-2' => 'Contains some information',
	'articlefeedback-field-complete-tooltip-3' => 'Contains key information, but with gaps',
	'articlefeedback-field-complete-tooltip-4' => 'Contains most key information',
	'articlefeedback-field-complete-tooltip-5' => 'Comprehensive coverage',
	'articlefeedback-field-objective-label' => 'Objective',
	'articlefeedback-field-objective-tip' => 'Do you feel that this page shows a fair representation of all perspectives on the issue?',
	'articlefeedback-field-objective-tooltip-1' => 'Heavily biased',
	'articlefeedback-field-objective-tooltip-2' => 'Moderate bias',
	'articlefeedback-field-objective-tooltip-3' => 'Minimal bias',
	'articlefeedback-field-objective-tooltip-4' => 'No obvious bias',
	'articlefeedback-field-objective-tooltip-5' => 'Completely unbiased',
	'articlefeedback-field-wellwritten-label' => 'Well-written',
	'articlefeedback-field-wellwritten-tip' => 'Do you feel that this page is well-organized and well-written?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Incomprehensible',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Difficult to understand',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Adequate clarity',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Good clarity',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Exceptional clarity',
	'articlefeedback-pitch-reject' => 'Maybe later',
	'articlefeedback-pitch-or' => 'or',
	'articlefeedback-pitch-thanks' => 'Thanks! Your ratings have been saved.',
	'articlefeedback-pitch-join-message' => 'Did you want to create an account?',
	'articlefeedback-pitch-join-body' => 'An account will help you track your edits, get involved in discussions, and be a part of the community.',
	'articlefeedback-pitch-join-accept' => 'Create an account',
	'articlefeedback-pitch-join-login' => 'Log in',
	'articlefeedback-pitch-edit-message' => 'Did you know that you can edit this page?',
	'articlefeedback-pitch-edit-body' => '',
	'articlefeedback-pitch-edit-accept' => 'Edit this page',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	/* Special:ArticleFeedback */
	'articleFeedback-table-caption-dailyhighsandlows' => 'Today\'s highs and lows',
	'articleFeedback-table-caption-dailyhighs' => 'Pages with highest ratings: $1',
	'articleFeedback-table-caption-dailylows' => 'Pages with lowest ratings: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'This week\'s most changed',
	'articleFeedback-table-caption-recentlows' => 'Recent lows',
	'articleFeedback-table-heading-page' => 'Page',
	'articleFeedback-table-heading-average' => 'Average',
	'articlefeedback-table-noratings' => '-',
	'articleFeedback-copy-above-highlow-tables' => 'This is an experimental feature.  Please provide feedback on the [$1 discussion page].',
	'articlefeedback-dashboard-bottom' => "'''Note''': We will continue to experiment with different ways of surfacing articles in these dashboards.  At present, the dashboards include the following articles:
* Pages with highest/lowest ratings: articles that have received at least 10 ratings within the last 24 hours.  Averages are calculated by taking the mean of all ratings submitted within the last 24 hours.
* Recent lows: articles that got 70% or more low (2 stars or lower) ratings in any category in the last 24 hours. Only articles that have received at least 10 ratings in the last 24 hours are included.",
	/* Special:Preferences */
	'articlefeedback-disable-preference' => "Don't show the Article feedback widget on pages",
	/* EmailCapture */
	'articlefeedback-emailcapture-response-body' => 'Hello!

Thank you for expressing interest in helping to improve {{SITENAME}}.

Please take a moment to confirm your e-mail by clicking on the link below:

$1

You may also visit:

$2

And enter the following confirmation code:

$3

We will be in touch shortly with how you can help improve {{SITENAME}}.

If you did not initiate this request, please ignore this e-mail and we will not send you anything else.

Best wishes, and thank you,
The {{SITENAME}} team',
);

/** Message documentation (Message documentation)
 * @author Amire80
 * @author Arthur Richards
 * @author Brandon Harris
 * @author EugeneZelenko
 * @author Krinkle
 * @author Minh Nguyen
 * @author Mormegil
 * @author Nedergard
 * @author Nemo bis
 * @author Nike
 * @author Praveenp
 * @author Purodha
 * @author Raymond
 * @author Sam Reed
 * @author Shirayuki
 * @author Siebrand
 * @author Toliño
 * @author Umherirrender
 * @author Yekrats
 */
$messages['qqq'] = array(
	'articlefeedback' => 'The title of the feature. It is about reader feedback.

Please visit http://prototype.wikimedia.org/articleassess/Main_Page for a prototype installation.',
	'articlefeedback-desc' => '{{desc}}',
	'articlefeedback-form-panel-explanation' => '{{Identical|What is this}}',
	'articlefeedback-form-panel-explanation-link' => 'Do not translate "Project:". Also translate the "ArticleFeedback" special page name at [[Special:AdvancedTranslate]].',
	'articlefeedback-form-panel-helpimprove' => 'This message should use {{SITENAME}}.', # Fuzzy
	'articlefeedback-form-panel-helpimprove-note' => '$1 is a link pointing to the privacy policy. The link text is in the {{msg-mw|articlefeedback-form-panel-helpimprove-privacy}} message.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => '{{Optional}}',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Used in {{msg-mw|articlefeedback-form-panel-helpimprove-note}}.',
	'articlefeedback-report-ratings' => "This message is used in JavaScript by module 'jquery.articleFeedback'.
*$1 - the rating count (integer)",
	'articlefeedback-field-complete-label' => 'This is an adjective, as in the question "Is this article complete?"',
	'articlefeedback-pitch-or' => '{{Identical|Or}}',
	'articlefeedback-pitch-join-body' => 'Based on {{msg-mw|Articlefeedback-pitch-join-message}}.',
	'articlefeedback-pitch-join-accept' => '{{Identical|Create an account}}',
	'articlefeedback-pitch-join-login' => '{{Identical|Log in}}',
	'articlefeedback-pitch-edit-body' => '{{notranslate}}',
	'articlefeedback-privacyurl' => 'This URL can be changed to point to a translated version of the page if it exists.',
	'articleFeedback-table-heading-page' => 'This is used in the [[mw:Extension:ArticleFeedback|Article Feedback extension]].
{{Identical|Page}}',
	'articleFeedback-table-heading-average' => '{{Identical|Average}}',
	'articlefeedback-table-noratings' => '{{Optional}}

Text to display in a table cell if there is no number to be shown',
	'articleFeedback-copy-above-highlow-tables' => 'The variable $1 will contain a full URL to a discussion page where the dashboard can be discussed - since the dashboard is powered by a special page, we can not rely on the built-in MediaWiki talk page.',
	'articlefeedback-emailcapture-response-body' => 'Body of an e-mail sent to a user wishing to participate in [[mw:Extension:ArticleFeedback|article feedback]] (see the extension documentation).
* <code>$1</code> – URL of the confirmation link
* <code>$2</code> – URL to type in the confirmation code manually.
* <code>$3</code> – Confirmation code for the user to type in',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 * @author පසිඳු කාවින්ද
 */
$messages['af'] = array(
	'articlefeedback' => 'Bladsybeoordeling', # Fuzzy
	'articlefeedback-desc' => 'Bladsybeoordeling',
	'articlefeedback-error' => "Is 'n fout. Probeer asseblief weer later.",
	'articlefeedback-form-switch-label' => 'Beoordeel hierdie bladsy',
	'articlefeedback-form-panel-title' => 'Beoordeel hierdie bladsy',
	'articlefeedback-form-panel-explanation' => 'Wat is dit?',
	'articlefeedback-form-panel-clear' => 'Verwyder hierdie gradering',
	'articlefeedback-form-panel-expertise' => 'Ek is hoogs kundige oor hierdie onderwerp (opsioneel)',
	'articlefeedback-form-panel-expertise-profession' => 'Dit is deel van my beroep',
	'articlefeedback-form-panel-expertise-hobby' => "Dit is 'n diep persoonlike passie",
	'articlefeedback-form-panel-expertise-other' => 'Die bron van my kennis is nie hier gelys',
	'articlefeedback-form-panel-helpimprove' => "Ek sou graag wou help verbeter Wikipedia, stuur vir my 'n e-pos (opsioneel)",
	'articlefeedback-form-panel-helpimprove-privacy' => 'Privaatheidsbeleid',
	'articlefeedback-form-panel-submit' => 'Stuur beoordeling',
	'articlefeedback-form-panel-pending' => 'Jou graderings is nog nie ingedien',
	'articlefeedback-form-panel-success' => 'Suksesvol gestoor',
	'articlefeedback-form-panel-expiry-title' => 'U graderings het verstryk',
	'articlefeedback-form-panel-expiry-message' => 'Let asseblief hierdie bladsy te herevalueer en nuwe graderings.',
	'articlefeedback-report-switch-label' => 'Wys bladsygraderings',
	'articlefeedback-report-panel-title' => 'Bladsygraderings',
	'articlefeedback-report-panel-description' => 'Huidige gemiddelde gradering.',
	'articlefeedback-report-empty' => 'Geen beoordelings',
	'articlefeedback-report-ratings' => '$1 beoordelings',
	'articlefeedback-field-trustworthy-label' => 'Betroubaar',
	'articlefeedback-field-trustworthy-tip' => 'Voel jy hierdie bladsy het genoeg aanhalings en ​​dat dié aanhalings kom uit betroubare bronne?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Sonder betroubare bronne',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Weinig betroubare bronne',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Voldoende betroubare bronne',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Goeie betroubare bronne',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Uitstekend betroubare bronne',
	'articlefeedback-field-complete-label' => 'Voltooid',
	'articlefeedback-field-complete-tip' => 'Het jy voel dat hierdie bladsy dek die noodsaaklike onderwerp gebiede wat dit moet?',
	'articlefeedback-field-complete-tooltip-1' => 'Die meeste inligting ontbreek',
	'articlefeedback-field-complete-tooltip-2' => 'Bevat sommige inligting',
	'articlefeedback-field-complete-tooltip-3' => 'Bevat belangrike inligting, maar met die leemtes',
	'articlefeedback-field-complete-tooltip-4' => 'Bevat die mees belangrike inligting',
	'articlefeedback-field-complete-tooltip-5' => 'Omvattende dekking',
	'articlefeedback-field-objective-label' => 'Onbevooroordeeld',
	'articlefeedback-field-objective-tip' => "Het jy voel dat hierdie bladsy toon 'n ​​billike verteenwoordiging van alle perspektiewe oor die kwessie?",
	'articlefeedback-field-objective-tooltip-1' => 'Swaar partydig',
	'articlefeedback-field-objective-tooltip-2' => 'Matig partydig',
	'articlefeedback-field-objective-tooltip-3' => 'Bietjie partydig',
	'articlefeedback-field-objective-tooltip-4' => 'Geen duidelike partydigheid',
	'articlefeedback-field-objective-tooltip-5' => 'Glad nie partydig nie',
	'articlefeedback-field-wellwritten-label' => 'Goed geskryf',
	'articlefeedback-field-wellwritten-tip' => 'Het jy voel dat hierdie bladsy is goed georganiseer en goed geskryf?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Onverstaanbaar',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Moeilik om te verstaan',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Voldoende duidelikheid',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Heel duidelikheid',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Uitsonderlik duidelik',
	'articlefeedback-pitch-reject' => 'Miskien later',
	'articlefeedback-pitch-or' => 'of',
	'articlefeedback-pitch-thanks' => 'Dankie! U beoordeling is gestoor.',
	'articlefeedback-pitch-join-message' => "Het jy wil 'n rekening te skep?",
	'articlefeedback-pitch-join-body' => "'N Rekening sal jou help om liedjies van jou wysigings, betrokke te raak in gesprekke, en' n deel van die gemeenskap.",
	'articlefeedback-pitch-join-accept' => "Skep 'n gebruiker",
	'articlefeedback-pitch-join-login' => 'Meld aan',
	'articlefeedback-pitch-edit-message' => 'Het jy geweet dat jy kan hierdie bladsy wysig?',
	'articlefeedback-pitch-edit-accept' => 'Wysig hierdie bladsy',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Vandag se hoogte- en laagtepunte',
	'articleFeedback-table-caption-dailyhighs' => 'Bladsye met die hoogste graderings: $1',
	'articleFeedback-table-caption-dailylows' => 'Bladsye met die laagste graderings: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Hierdie week se mees veranderde',
	'articleFeedback-table-caption-recentlows' => 'Onlangse laagtepunte',
	'articleFeedback-table-heading-page' => 'Bladsy',
	'articleFeedback-table-heading-average' => 'Gemiddelde',
	'articlefeedback-disable-preference' => 'Moenie toon die artikel terugvoer widget op bladsye',
);

/** Aragonese (aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'articleFeedback-table-heading-page' => 'Pachina',
);

/** Arabic (العربية)
 * @author Ciphers
 * @author DRIHEM
 * @author Meno25
 * @author Mido
 * @author OsamaK
 * @author روخو
 * @author زكريا
 */
$messages['ar'] = array(
	'articlefeedback' => 'لوحة التغذية الراجعة للمقالة',
	'articlefeedback-desc' => 'ملاحظات على المقالات',
	'articlefeedback-error' => 'لقد حدث خطأ. كرر المحاولة لاحقا.',
	'articlefeedback-form-switch-label' => 'قيم هذه الصفحة',
	'articlefeedback-form-panel-title' => 'قيم هذه الصفحة',
	'articlefeedback-form-panel-explanation' => 'ما هذا؟',
	'articlefeedback-form-panel-explanation-link' => 'Project:تعليقات_المقالة',
	'articlefeedback-form-panel-clear' => 'إزالة هذا التقييم',
	'articlefeedback-form-panel-expertise' => 'أنا على دراية كبيرة بهذا الموضوع (اختياري)',
	'articlefeedback-form-panel-expertise-studies' => 'أنا حاصل على درجة جامعية مناسبة',
	'articlefeedback-form-panel-expertise-profession' => 'من اختصاصي المهني',
	'articlefeedback-form-panel-expertise-hobby' => 'من أحب هواياتي',
	'articlefeedback-form-panel-expertise-other' => 'مصدر معرفتي غير مدرج هنا',
	'articlefeedback-form-panel-helpimprove' => 'أود المساعدة على تحسين ويكيبيديا، أرسل لي رسالة بالبريد الإلكتروني (اختياري)',
	'articlefeedback-form-panel-helpimprove-note' => 'سوف نرسل لك رسالة تأكيد بالبريد إلكتروني، لن نشاطر بريدك الإلكتروني مع أطراف خارجة ولا من طرفنا $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'ردود بيان الخصوصية',
	'articlefeedback-form-panel-submit' => 'أرسل التقييمات',
	'articlefeedback-form-panel-pending' => 'ما زالت تقييمك لم يرسل',
	'articlefeedback-form-panel-success' => 'حُفظ بنجاح',
	'articlefeedback-form-panel-expiry-title' => 'لم يعد تقييمك صالحا',
	'articlefeedback-form-panel-expiry-message' => 'أعد تقييم هذه الصفحة وأرسل هذا التقييم.',
	'articlefeedback-report-switch-label' => 'عرض تقييمات الصفحة',
	'articlefeedback-report-panel-title' => 'تقييمات الصفحة',
	'articlefeedback-report-panel-description' => 'متوسط التقييمات الحالية.',
	'articlefeedback-report-empty' => 'لا توجد تقييمات',
	'articlefeedback-report-ratings' => 'تقييمات $1', # Fuzzy
	'articlefeedback-field-trustworthy-label' => 'جدير بالثقة',
	'articlefeedback-field-trustworthy-tip' => 'هل تظن أن لهذه الصفحة استشهادات كافية وأن تلك الاستشهادات تأتي من مصادر جديرة بالثقة؟',
	'articlefeedback-field-trustworthy-tooltip-1' => 'ينقص مصادر مشهورة',
	'articlefeedback-field-trustworthy-tooltip-2' => 'بضع مصادر مشهورة',
	'articlefeedback-field-trustworthy-tooltip-3' => 'ما يكفي من المصادر المشهورة',
	'articlefeedback-field-trustworthy-tooltip-4' => 'مصادر مشهورة حسنة',
	'articlefeedback-field-trustworthy-tooltip-5' => 'مصادر مشهورة فضلى',
	'articlefeedback-field-complete-label' => 'مكتمل',
	'articlefeedback-field-complete-tip' => 'هل تشعر بأن هذه الصفحة تغطي مجالات الموضوع الأساسية كما ينبغي؟',
	'articlefeedback-field-complete-tooltip-1' => 'ينقص معظم المعلومات',
	'articlefeedback-field-complete-tooltip-2' => 'به بعض المعلومات',
	'articlefeedback-field-complete-tooltip-3' => 'به معلومات أساسية، لكنها غير منظمة',
	'articlefeedback-field-complete-tooltip-4' => 'به معظم المعلومات الأساسية',
	'articlefeedback-field-complete-tooltip-5' => 'إحاطة بالمفهوم',
	'articlefeedback-field-objective-label' => 'غير متحيز',
	'articlefeedback-field-objective-tip' => 'هل تشعر أن تظهر هذه الصفحة هي تمثيل عادل لجميع وجهات النظر حول هذ الموضوع؟',
	'articlefeedback-field-objective-tooltip-1' => 'تحيز واضح',
	'articlefeedback-field-objective-tooltip-2' => 'شيء من تحيز',
	'articlefeedback-field-objective-tooltip-3' => 'تحيز طفيف',
	'articlefeedback-field-objective-tooltip-4' => 'ما من تحيز واضح',
	'articlefeedback-field-objective-tooltip-5' => 'ما من تحيز',
	'articlefeedback-field-wellwritten-label' => 'مكتوبة بشكل جيد',
	'articlefeedback-field-wellwritten-tip' => 'هل تشعر بأن هذه الصفحة منظمة تنظيماً جيدا ومكتوبة بشكل جيد؟',
	'articlefeedback-field-wellwritten-tooltip-1' => 'مبهم',
	'articlefeedback-field-wellwritten-tooltip-2' => 'صعب الفهم',
	'articlefeedback-field-wellwritten-tooltip-3' => 'وضوح كاف',
	'articlefeedback-field-wellwritten-tooltip-4' => 'وضوح جيد',
	'articlefeedback-field-wellwritten-tooltip-5' => 'وضوح كامل',
	'articlefeedback-pitch-reject' => 'ربما لاحقا',
	'articlefeedback-pitch-or' => 'أو',
	'articlefeedback-pitch-thanks' => 'قد حفظ تقييمك فشكرا',
	'articlefeedback-pitch-join-message' => 'أتريد إنشاء حساب؟',
	'articlefeedback-pitch-join-body' => 'حساب سوف يساعدك على تتبع ما تحرره، والمشاركة في النقاشات، الانضمام إلى المجتمع.',
	'articlefeedback-pitch-join-accept' => 'أنشئ حسابا',
	'articlefeedback-pitch-join-login' => 'تسجيل الدخول',
	'articlefeedback-pitch-edit-message' => 'أتعلم أن بإمكانك تحرير هذه الصفحة؟',
	'articlefeedback-pitch-edit-accept' => 'تعديل هذه الصفحة',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'تقييمات اليوم',
	'articleFeedback-table-caption-dailyhighs' => 'أعلى الصفحات تقييما: $1',
	'articleFeedback-table-caption-dailylows' => 'أدنى الصفحات تقييما: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'أشد الصفحات تغيرا هذا الأسبوع',
	'articleFeedback-table-caption-recentlows' => 'المتدنية حديثا',
	'articleFeedback-table-heading-page' => 'صفحة',
	'articleFeedback-table-heading-average' => 'متوسط',
	'articleFeedback-copy-above-highlow-tables' => 'هذه خاصية قيد التجربة. أعطي تقييمك في [صفحة نقاش $1].',
	'articlefeedback-dashboard-bottom' => "'''تنبيه''': سنستمر في تجربة مختلف طرق التعريف بالمقالات على هذه اللوحة (لوحة القيادة). الآن، توجد على لوحة القيادة المقالات التالية:
* أعلى المقالات تقييما وأدناها: وهي التي قيمت على الأقل عشر مرات في الساعات الأربع والعشرين الأخيرة. المتوسط يحسب بقياس القيمة الوسطى للجميع التقييمات المرسلة في الساعات الأربع والعشرين الأخيرة.
* المتدنية حديثا: وهي ما حصل على ما لا يقل عن سبعين بالمئة (نجمتين) في التقييم على أي تصنيف في الساعات الأربع والعشرين الأخيرة. لا تحتسب إلا المقالات التي حصلت على ما لا يقل عن عشرة تقييمات  في الساعات الأربع والعشرين الأخيرة.",
	'articlefeedback-disable-preference' => 'لا تظهر ودجة تقييم المقالات في الصفحات',
	'articlefeedback-emailcapture-response-body' => 'أهلا!

شكرا لك على رغبتك في المساعدة على تحسين {{SITENAME}}.

أكد بريدك الإلكتروتي بالضغط على الزر أسفله: 

$1

يمكنك أيضا زيارة:

$2

وإدخال رمز التأكيد التالي:

$3

سوف نتصل بك عما قريب لإطلاعك عن كيفية المساعدة على تحسين {{SITENAME}}.

إن لم تكن من قدم هذا الطلب، فلا تبالي بهذه الرسالة ولم نرسل لك رسالة أخرى.

مع أحر التماني، وشكرا،
فريق {{SITENAME}}',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'articlefeedback-desc' => 'প্ৰবন্ধৰ প্ৰতিক্ৰিয়া',
	'articlefeedback-form-panel-explanation' => 'এইয়া কি?',
	'articlefeedback-field-trustworthy-label' => 'বিশ্বাসযোগ্য',
	'articlefeedback-field-complete-label' => 'সম্পূর্ণ',
	'articlefeedback-field-objective-label' => 'বস্তুনিষ্ঠ',
	'articlefeedback-field-wellwritten-label' => 'ভালদৰে লিখিত',
	'articlefeedback-pitch-reject' => 'সম্ভৱত পাছত',
	'articlefeedback-pitch-or' => 'অথবা',
	'articlefeedback-pitch-join-accept' => 'নতুন একাউণ্ট সৃষ্টি কৰক',
	'articlefeedback-pitch-join-login' => 'প্ৰৱেশ',
	'articlefeedback-pitch-edit-accept' => 'এই পৃষ্ঠা সম্পাদনা কৰক',
	'articleFeedback-table-heading-page' => 'পৃষ্ঠা',
	'articleFeedback-table-heading-average' => 'গড়',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author Vago
 * @author Wertuose
 */
$messages['az'] = array(
	'articlefeedback-form-panel-explanation' => 'Bu nədir?',
	'articlefeedback-report-panel-title' => 'Səhifənin qiyməti',
	'articlefeedback-report-empty' => 'Qiymət yoxdur',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Yaxşı etibarlı mənbələr',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Əla etibarlı mənbələr',
	'articlefeedback-field-complete-tooltip-1' => 'Məlumatın böyük hissəsi yoxdur',
	'articlefeedback-pitch-join-login' => 'Daxil ol',
	'articleFeedback-table-heading-page' => 'Səhifə',
);

/** Bashkir (башҡортса)
 * @author Assele
 * @author Haqmar
 * @author Roustammr
 * @author ҒатаУлла
 */
$messages['ba'] = array(
	'articlefeedback' => 'Мәҡәлә кире белдереүҙәрен баһалау панеле',
	'articlefeedback-desc' => 'Мәҡәлә баһаһы',
	'articlefeedback-error' => 'Хата килеп сыҡты. Зинһар, һуңыраҡ яңынан ҡабатлап ҡарағыҙ.',
	'articlefeedback-form-switch-label' => 'Был битте баһалау',
	'articlefeedback-form-panel-title' => 'Был битте баһалау',
	'articlefeedback-form-panel-explanation' => 'Был нимә?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Был баһаламаны юйырға',
	'articlefeedback-form-panel-expertise' => 'Мин был һорау менән яҡшы танышмын (теләк буйынса)',
	'articlefeedback-form-panel-expertise-studies' => 'Мин был һорау буйынса юғары белем алғанмын',
	'articlefeedback-form-panel-expertise-profession' => 'Был — минең һөнәремдең өлөшө',
	'articlefeedback-form-panel-expertise-hobby' => 'Был — минең оло шәхси мауығыуым',
	'articlefeedback-form-panel-expertise-other' => 'Минең белемем сығанағы бында күрһәтелмәгән',
	'articlefeedback-form-panel-submit' => 'Баһаламаны ебәрергә',
	'articlefeedback-form-panel-success' => 'Уңышлы һаҡланды',
	'articlefeedback-form-panel-expiry-title' => 'Һеҙҙең баһаламаларығыҙ иҫкергән',
	'articlefeedback-form-panel-expiry-message' => 'Зинһар, был битте ҡабаттан ҡарап сығығыҙ һәм яңы баһалама ебәрегеҙ.',
	'articlefeedback-report-switch-label' => 'Биттең баһаламаларын күрһәтергә',
	'articlefeedback-report-panel-title' => 'Биттең баһаламалары',
	'articlefeedback-report-panel-description' => 'Ағымдағы уртаса баһалар.',
	'articlefeedback-report-empty' => 'Баһаламалар юҡ',
	'articlefeedback-report-ratings' => '$1 баһалама',
	'articlefeedback-field-trustworthy-label' => 'Дөрөҫлөк',
	'articlefeedback-field-trustworthy-tip' => 'Һеҙ был биттә етәрлек сығанаҡтар бар һәм сығанаҡтар ышаныслы, тип һанайһығыҙмы?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Мәртәбәле сығанаҡтар юҡ',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Мәртәбәле сығанаҡтар аҙ',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Мәртәбәле сығанаҡтар',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Яҡшы авторитетлы сығанаҡтар',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Бик яҡшы авторитетлы сығанаҡтар',
	'articlefeedback-field-complete-label' => 'Тулылыҡ',
	'articlefeedback-field-complete-tip' => 'Һеҙ был бит төп һорауҙарҙы етәрлек кимәлдә аса, тип һанайһығыҙмы?',
	'articlefeedback-field-complete-tooltip-1' => 'Мәғлүмәттең күп өлөшө юҡ',
	'articlefeedback-field-complete-tooltip-2' => 'Өлөшләтә мәғлүмәт бар',
	'articlefeedback-field-complete-tooltip-3' => 'Төп мәғлүмәттәр бар, тик бушлыҡтар менән',
	'articlefeedback-field-complete-tooltip-4' => 'Төп мәғлүмәттәр бар',
	'articlefeedback-field-complete-tooltip-5' => 'Тулы мәғлүмәт',
	'articlefeedback-field-objective-label' => 'Битарафлыҡ',
	'articlefeedback-field-objective-tip' => 'Һеҙ был бит ҡағылған һорау буйынса бөтә фекерҙәрҙе лә ғәҙел сағылдыра, тип һанайһығыҙмы?',
	'articlefeedback-field-objective-tooltip-1' => 'Ныҡ бер яҡлы',
	'articlefeedback-field-objective-tooltip-2' => 'Уртаса бер яҡлы',
	'articlefeedback-field-objective-tooltip-3' => 'Аҙ бер яҡлы',
	'articlefeedback-field-objective-tooltip-4' => 'Тарафһыҙ',
	'articlefeedback-field-objective-tooltip-5' => 'Тулыһынса тарафһыҙ',
	'articlefeedback-field-wellwritten-label' => 'Уҡымлылыҡ',
	'articlefeedback-field-wellwritten-tip' => 'Һеҙ был бит яҡшы ойошторолған һәм яҡшы яҙылған, тип һанайһығыҙмы?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Аңлайышһыҙ',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Аңлауы ҡыйын',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Уртаса асыҡлыҡ',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Яҡшы асыҡлыҡ',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Бик яҡшы асыҡлыҡ',
	'articlefeedback-pitch-reject' => 'Бәлки, һуңғараҡ',
	'articlefeedback-pitch-or' => 'йәки',
	'articlefeedback-pitch-thanks' => 'Рәхмәт! Һеҙҙең баһаламағыҙ һаҡланды.',
	'articlefeedback-pitch-join-message' => 'Иҫәп яҙмаһын булдырырға теләр инегеҙме?',
	'articlefeedback-pitch-join-body' => 'Иҫәп яҙмаһы һеҙгә үҙгәртеүҙәрегеҙҙе күҙәтергә, фекер алышыуҙарҙа ҡатнашырға һәм берләшмәнең өлөшө булып торорға ярҙам итәсәк.',
	'articlefeedback-pitch-join-accept' => 'Иҫәп яҙмаһын булдырырға',
	'articlefeedback-pitch-join-login' => 'Танылыу',
	'articlefeedback-pitch-edit-message' => 'Һеҙ был битте мөхәррирләп була икәнен беләһегеҙме?',
	'articlefeedback-pitch-edit-accept' => 'Был битте үҙгәртергә',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Бөгөнгө юғарылар һәм түбәндәр',
	'articleFeedback-table-heading-page' => 'Бит',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Renessaince
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'articlefeedback' => 'Дошка водгукаў да артыкулаў',
	'articlefeedback-desc' => 'Адзнака артыкулаў',
	'articlefeedback-error' => 'Узьнікла памылка. Калі ласка, паспрабуйце потым',
	'articlefeedback-form-switch-label' => 'Адзначце гэтую старонку',
	'articlefeedback-form-panel-title' => 'Адзначце гэтую старонку',
	'articlefeedback-form-panel-explanation' => 'Што гэта?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Адзнака артыкула',
	'articlefeedback-form-panel-clear' => 'Выдаліць гэтую адзнаку',
	'articlefeedback-form-panel-expertise' => 'Я маю значныя веды па гэтай тэме (па жаданьні)',
	'articlefeedback-form-panel-expertise-studies' => 'Я маю адпаведную ступень вышэйшай адукацыі',
	'articlefeedback-form-panel-expertise-profession' => 'Гэта частка маёй прафэсіі',
	'articlefeedback-form-panel-expertise-hobby' => 'Гэта мая асабістая жарсьць',
	'articlefeedback-form-panel-expertise-other' => 'Крыніцы маіх ведаў няма ў гэтым сьпісе',
	'articlefeedback-form-panel-helpimprove' => 'Я жадаю дапамагчы палепшыць {{GRAMMAR:вінавальны|{{SITENAME}}}}, дашліце мне ліст (па жаданьні)',
	'articlefeedback-form-panel-helpimprove-note' => 'Вам будзе дасланы электронны ліст з пацьверджаньнем. Ваш адрас ня будзе разгалошаны зьнешнім бакам паводле $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'водгук пра правілы адносна прыватнасьці',
	'articlefeedback-form-panel-submit' => 'Даслаць адзнакі',
	'articlefeedback-form-panel-pending' => 'Вашыя адзнакі не адпраўленыя',
	'articlefeedback-form-panel-success' => 'Пасьпяхова захаваны',
	'articlefeedback-form-panel-expiry-title' => 'Вашыя адзнакі састарэлі',
	'articlefeedback-form-panel-expiry-message' => 'Калі ласка, адзначце зноў гэтую старонку і дашліце новыя адзнакі.',
	'articlefeedback-report-switch-label' => 'Паказаць адзнакі старонкі',
	'articlefeedback-report-panel-title' => 'Адзнакі старонкі',
	'articlefeedback-report-panel-description' => 'Цяперашнія сярэднія адзнакі.',
	'articlefeedback-report-empty' => 'Адзнакаў няма',
	'articlefeedback-report-ratings' => '$1 {{PLURAL:$1|адзнака|адзнакі|адзнакаў}}',
	'articlefeedback-field-trustworthy-label' => 'Надзейны',
	'articlefeedback-field-trustworthy-tip' => 'Вы лічыце, што гэтая старонка мае дастаткова цытатаў, і яны паходзяць з крыніц вартых даверу?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Няма аўтарытэтных крыніцаў',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Няшмат аўтарытэтных крыніцаў',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Дастаткова аўтарытэтных крыніцаў',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Добрыя аўтарытэтныя крыніцы',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Выдатныя аўтарытэтныя крыніцы',
	'articlefeedback-field-complete-label' => 'Скончанасьць',
	'articlefeedback-field-complete-tip' => 'Вы лічыце, што гэтая старонка раскрывае асноўныя пытаньні тэмы як сьлед?',
	'articlefeedback-field-complete-tooltip-1' => 'Большая частка інфармацыі адсутнічае',
	'articlefeedback-field-complete-tooltip-2' => 'Утрымлівае некаторую інфармацыю',
	'articlefeedback-field-complete-tooltip-3' => 'Утрымлівае ключавую інфармацыю, але ёсьць пропускі',
	'articlefeedback-field-complete-tooltip-4' => 'Утрымлівае самую важную інфармацыю',
	'articlefeedback-field-complete-tooltip-5' => 'Вычарпальны ахоп тэмы',
	'articlefeedback-field-objective-label' => "Аб'ектыўны",
	'articlefeedback-field-objective-tip' => 'Вы лічыце, што на гэтай старонцы адлюстраваныя усе пункты гледжаньня на пытаньне?',
	'articlefeedback-field-objective-tooltip-1' => 'Вельмі тэндэнцыйны',
	'articlefeedback-field-objective-tooltip-2' => 'Памяркоўна тэндэнцыйны',
	'articlefeedback-field-objective-tooltip-3' => 'Крыху тэндэнцыйны',
	'articlefeedback-field-objective-tooltip-4' => 'Няма адназначнай тэндэнцыйнасьці',
	'articlefeedback-field-objective-tooltip-5' => 'Поўнасьцю бесстароньні',
	'articlefeedback-field-wellwritten-label' => 'Добра напісаны',
	'articlefeedback-field-wellwritten-tip' => 'Вы лічыце, што гэтая старонка добра арганізаваная і добра напісаная?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Незразумелая',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Складаная для зразуменьня',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Дастаткова зразумелая',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Добра зразумелая',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Выключна добра зразумелая',
	'articlefeedback-pitch-reject' => 'Можа потым',
	'articlefeedback-pitch-or' => 'ці',
	'articlefeedback-pitch-thanks' => 'Дзякуй! Вашая адзнака была захаваная.',
	'articlefeedback-pitch-join-message' => 'Вы жадаеце стварыць рахунак?',
	'articlefeedback-pitch-join-body' => 'Рахунак дапаможа Вам сачыць за Вашымі рэдагаваньнямі, удзельнічаць у абмеркаваньнях і быць часткай супольнасьці.',
	'articlefeedback-pitch-join-accept' => 'Стварыць рахунак',
	'articlefeedback-pitch-join-login' => 'Увайсьці ў сыстэму',
	'articlefeedback-pitch-edit-message' => 'Вы ведалі, што можаце рэдагаваць гэтую старонку?',
	'articlefeedback-pitch-edit-accept' => 'Рэдагаваць гэтую старонку',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Правілы_адносна_прыватнасьці_водгукаў',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Сёньняшнія ўзьлёты і падзеньні',
	'articleFeedback-table-caption-dailyhighs' => 'Артыкулы з найвышэйшымі адзнакамі: $1',
	'articleFeedback-table-caption-dailylows' => 'Артыкулы з найніжэйшымі адзнакамі: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Найбольш зьмененыя на гэтым тыдні',
	'articleFeedback-table-caption-recentlows' => 'Апошнія падзеньні',
	'articleFeedback-table-heading-page' => 'Старонка',
	'articleFeedback-table-heading-average' => 'Сярэдняе',
	'articleFeedback-copy-above-highlow-tables' => 'Гэта экспэрымэнтальная магчымасьць. Калі ласка, падайце Ваш водгук на [$1 старонцы абмеркаваньня].',
	'articlefeedback-dashboard-bottom' => "'''Заўвага''': Мы ўсё яшчэ працягваем экспэрымэнтаваць з апрацоўкай артыкулаў на гэтых пляцоўках.  У цяперашні час пляцоўкі ўтрымліваюць наступныя артыкулы:
* Старонкі з вышэйшымі/ніжэйшымі адзнакамі: артыкулы, якія атрымалі ня менш 10 адзнакаў за апошнія 24 гадзіны. Сярэдняя адзнака вылічаная на падставе усіх адзнакаў атрыманых за апошнія 24 гадзіны.
* Апошнія самыя нізкія адзнакі: артыкулы, якія маюць 70% ці болей нізкіх (2 зоркі ці ніжэй) адзнакаў у любой катэгорыі за апошнія 24 гадзіны. Улічваюцца толькі артыкулы якія атрымалі ня менш 10 адзнакаў за апошнія 24 гадзіны.",
	'articlefeedback-disable-preference' => 'Не паказваць на старонках віджэт адзнакі артыкула',
	'articlefeedback-emailcapture-response-body' => 'Вітаем!

Дзякуй, за дапамогу ў паляпшэньні {{GRAMMAR:родны|{{SITENAME}}}}.

Калі ласка, знайдзіце час каб пацьвердзіць Ваш адрас электроннай пошты. Перайдзіце па спасылцы пададзенай ніжэй: 

$1

Таксама, Вы можаце наведаць:

$2

І увесьці наступны код пацьверджаньня:

$3

Хутка мы перададзім Вам інфармацыю, як Вы можаце дапамагчы ў паляпшэньні {{GRAMMAR:родны|{{SITENAME}}}}.

Калі Вы не дасылалі гэты запыт, калі ласка, праігнаруйце гэты ліст, і мы больш не будзем Вас турбаваць.

З найлепшымі пажаданьнямі, і дзякуй Вам,
Каманда {{GRAMMAR:родны|{{SITENAME}}}}',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Spiritia
 * @author Turin
 */
$messages['bg'] = array(
	'articlefeedback-form-switch-label' => 'Оценяване на страницата',
	'articlefeedback-form-panel-title' => 'Оценяване на страницата',
	'articlefeedback-form-panel-explanation' => 'Какво е това?',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Защита на личните данни', # Fuzzy
	'articlefeedback-report-switch-label' => 'Преглеждане на оценките на страницата',
	'articlefeedback-report-empty' => 'Няма оценки',
	'articlefeedback-pitch-or' => 'или',
	'articlefeedback-pitch-thanks' => 'Благодарности! Вашите оценки бяха съхранени.',
	'articlefeedback-pitch-join-message' => 'Желаете ли да си регистрирате сметка?',
	'articlefeedback-pitch-join-accept' => 'Създаване на сметка',
	'articlefeedback-pitch-join-login' => 'Влизане',
	'articlefeedback-pitch-edit-message' => 'Знаете ли, че можете да редактирате тази страница?',
	'articlefeedback-pitch-edit-accept' => 'Редактиране на тази страница',
	'articleFeedback-table-caption-dailyhighs' => 'Страници с най-високи оценки: $1',
	'articleFeedback-table-caption-dailylows' => 'Страници с най-ниски оценки: $1',
	'articleFeedback-table-heading-page' => 'Страница',
	'articleFeedback-copy-above-highlow-tables' => 'Това е експериментална функцоиналност. Можете да дадете мнения и препоръки на [$1 беседата].',
	'articlefeedback-disable-preference' => 'Без показване на притурката за Оценяване на статиите в страниците',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'articlefeedback' => 'নিবন্ধ প্রতিক্রিয়া ড্যাসবোর্ড', # Fuzzy
	'articlefeedback-desc' => 'নিবন্ধ প্রতিক্রিয়া',
	'articlefeedback-error' => 'একটি ত্রুটি দেখা দিয়েছে। অনুগ্রহপূর্বক পরবর্তীতে আবার চেষ্টা করুন।',
	'articlefeedback-form-switch-label' => 'এই পাতায় রেট করুন',
	'articlefeedback-form-panel-title' => 'এই পাতায় রেট করুন',
	'articlefeedback-form-panel-explanation' => 'এইটি কী?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'এই রেটিং অপসারণ করো',
	'articlefeedback-form-panel-expertise' => 'আমি এই বিষয় সম্পর্কে উচ্চমানের জ্ঞান রাখি (ঐচ্ছিক)',
	'articlefeedback-form-panel-expertise-studies' => 'আমার এই সম্পর্কিত কলেজ/বিশ্ববিদ্যালয় ডিগ্রি রয়েছে',
	'articlefeedback-form-panel-expertise-profession' => 'এটি আমার পেশার অংশ',
	'articlefeedback-form-panel-expertise-hobby' => 'এটি আমার খুবই পছন্দের একটি ব্যাক্তিগত শখ',
	'articlefeedback-form-panel-expertise-other' => 'এ বিষয়ে আমার জ্ঞানের উৎস এই তালিকায় নেই',
	'articlefeedback-form-panel-helpimprove' => 'আমি উইকিপিডিয়ার উন্নয়নে সাহায্য করতে চাই, আমাকে ই-মেইল পাঠান (ঐচ্ছিক)',
	'articlefeedback-form-panel-helpimprove-note' => 'আমরা আপনাকে একটি নিশ্চিতকরণ ই-মেইল পাঠাবো। আমরা কারও সাথে আপনার ই-মেইল ঠিকানা শেয়ার করবো না। $1', # Fuzzy
	'articlefeedback-form-panel-helpimprove-privacy' => 'প্রতিক্রিয়া গোপনীয়তা সংক্রান্ত বিবৃতি',
	'articlefeedback-form-panel-submit' => 'রেটিং জমা দাও',
	'articlefeedback-form-panel-pending' => 'আপনার রেটিং এখনও জমা হয়নি',
	'articlefeedback-form-panel-success' => 'সফলভাবে সংরক্ষিত',
	'articlefeedback-form-panel-expiry-title' => 'আপনার রেটিং মেয়াদ উত্তীর্ণ হয়ে গেছে',
	'articlefeedback-form-panel-expiry-message' => 'অনুগ্রহ করে এই পাতাটি পূনর্বিবেচনা করুন, এবং নতুন রেটিং প্রদান করুন।',
	'articlefeedback-report-switch-label' => 'পাতার রেটিং দেখাও',
	'articlefeedback-report-panel-title' => 'পাতার রেটিং',
	'articlefeedback-report-panel-description' => 'বর্তমান গড় রেটিং।',
	'articlefeedback-report-empty' => 'রেটিং নেই',
	'articlefeedback-report-ratings' => '$1 রেটিং', # Fuzzy
	'articlefeedback-field-trustworthy-label' => 'বিশ্বস্ত',
	'articlefeedback-field-trustworthy-tip' => 'আপনি কী মনে করেন এই পাতায় যথেষ্ট পরিমাণ তথ্যসূত্র রয়েছে এবং সেগুলো বিশ্বস্ত সূত্র হতে এসেছে?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'সুখ্যাত তথ্যসূত্রের অভাব রয়েছে',
	'articlefeedback-field-trustworthy-tooltip-2' => 'কিছু সুখ্যাত তথ্যসূত্র রয়েছে',
	'articlefeedback-field-trustworthy-tooltip-3' => 'পর্যাপ্ত সুখ্যাত তথ্যসূত্র রয়েছে',
	'articlefeedback-field-trustworthy-tooltip-4' => 'ভাল পরিমাণে সুখ্যাত তথ্যসূত্র রয়েছে',
	'articlefeedback-field-trustworthy-tooltip-5' => 'প্রচুর পরিমাণে সুখ্যাত তথ্যসূত্র রয়েছে',
	'articlefeedback-field-complete-label' => 'সম্পূর্ণ',
	'articlefeedback-field-complete-tip' => 'আপনি কী মনে করেনে এই পাতায় প্রয়োজনীয় সকল বিষয় সম্পর্কে ধারাণা দিতে পেরেছে?',
	'articlefeedback-field-complete-tooltip-1' => 'অধিকাংশ তথ্য অনুপস্থিত',
	'articlefeedback-field-complete-tooltip-2' => 'কিছু তথ্য রয়েছে',
	'articlefeedback-field-complete-tooltip-3' => 'মূল তথ্যগুলো রয়েছে, তবে অনেক শূন্যস্থান রয়েছে',
	'articlefeedback-field-complete-tooltip-4' => 'অধিকাংশ মূল তথ্য রয়েছে',
	'articlefeedback-field-objective-label' => 'উদ্দেশ্য',
	'articlefeedback-field-objective-tip' => 'আপনি কি মনে করেন, এই পাতাটি সকল পক্ষের মতামত বা দৃষ্টিভঙ্গির ন্যায্য উপস্থাপনে সমর্থ হয়েছে?',
	'articlefeedback-field-objective-tooltip-1' => 'অত্যন্ত পক্ষপাতদুষ্ট',
	'articlefeedback-field-objective-tooltip-2' => 'সংযমী পক্ষপাত',
	'articlefeedback-field-objective-tooltip-3' => 'নূন্যতম পক্ষপাত',
	'articlefeedback-field-objective-tooltip-4' => 'সুস্পষ্ট পক্ষপাত নেই',
	'articlefeedback-field-objective-tooltip-5' => 'সম্পূর্ণ নিরপেক্ষ',
	'articlefeedback-field-wellwritten-label' => 'ভালোভাবে লিখিত',
	'articlefeedback-field-wellwritten-tip' => 'আপনি কী মনে করেন এই পাতাটি ভালোভাবে সাজানো ও ভালোভাবে লেখা হয়েছে?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'অবোধ্য',
	'articlefeedback-field-wellwritten-tooltip-2' => 'বোঝা কঠিন',
	'articlefeedback-field-wellwritten-tooltip-3' => 'যথেষ্ট স্পষ্ট',
	'articlefeedback-field-wellwritten-tooltip-4' => 'ভাল স্পষ্ট',
	'articlefeedback-field-wellwritten-tooltip-5' => 'অসাধারণ স্পষ্ট',
	'articlefeedback-pitch-reject' => 'সম্ভবত পরে',
	'articlefeedback-pitch-or' => 'অথবা',
	'articlefeedback-pitch-thanks' => 'ধন্যবাদ! আপনার রেটিং সংরক্ষিত হয়েছে।',
	'articlefeedback-pitch-join-message' => 'আপনি কি কোনো অ্যাকাউন্ট তৈরি করতে চান?',
	'articlefeedback-pitch-join-body' => 'একটি অ্যাকাউন্ট আপনার সম্পাদনাগুলো অনুসরণ করতে, আলোচনায় অংশ নিতে, এবং সম্প্রদায়ের অংশ হতে আপনাকে সাহায্য করবে।',
	'articlefeedback-pitch-join-accept' => 'অ্যাকাউন্ট তৈরি করুন',
	'articlefeedback-pitch-join-login' => 'প্রবেশ',
	'articlefeedback-pitch-edit-message' => 'আপনি কী জানেন যে আপনি এই পাতা সম্পাদনা করতে পারেন?',
	'articlefeedback-pitch-edit-accept' => 'পাতাটি সম্পাদনা করুন',
	'articleFeedback-table-heading-page' => 'পাতা',
	'articleFeedback-table-heading-average' => 'গড়',
	'articlefeedback-disable-preference' => 'পাতায় নিবন্ধ প্রতিক্রিয়া উইজেটটি দেখিও না',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Gwendal
 * @author Y-M D
 */
$messages['br'] = array(
	'articlefeedback' => 'Taolenn vourzh priziañ ar pennad (Bet : AFT4)', # Fuzzy
	'articlefeedback-desc' => 'Priziadenn ar pennad',
	'articlefeedback-error' => "C'hoarvezet ez eus ur fazi. Esaeit en-dro diwezhtaoc'h, mar plij.",
	'articlefeedback-form-switch-label' => "Reiñ un notenn d'ar bajenn-mañ",
	'articlefeedback-form-panel-title' => "Reiñ un notenn d'ar bajenn-mañ",
	'articlefeedback-form-panel-explanation' => 'Petra eo se ?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Lemel an notenn-mañ',
	'articlefeedback-form-panel-expertise' => 'Gouzout a ran mat-tre diouzh an danvez-se (diret)',
	'articlefeedback-form-panel-expertise-studies' => 'Un diplom skol-veur pe skol-uhel a zere am eus tapet',
	'articlefeedback-form-panel-expertise-profession' => 'Ul lodenn eus ma micher eo',
	'articlefeedback-form-panel-expertise-hobby' => 'Dik on gant an danvez-se ent personel',
	'articlefeedback-form-panel-expertise-other' => "Orin ma anaouedegezh n'eo ket renablet aze",
	'articlefeedback-form-panel-helpimprove' => 'Me a garfe skoazellañ da wellaat Wikipedia, kasit din ur postel (diret)',
	'articlefeedback-form-panel-helpimprove-note' => "Kaset e vo deoc'h ur postel kadarnaat. Ne vo ket kaset ho chomlec'h postel da zen ebet all hervez hor $1",
	'articlefeedback-form-panel-helpimprove-privacy' => 'Disklêriadur prevezded evit ar respont',
	'articlefeedback-form-panel-submit' => 'Kas ar priziadennoù',
	'articlefeedback-form-panel-pending' => "N'eo ket bet kaset ho priziadenn evit c'hoazh",
	'articlefeedback-form-panel-success' => 'Enrollet ervat',
	'articlefeedback-form-panel-expiry-title' => "Aet eo ho priziadenn d'he zermen",
	'articlefeedback-form-panel-expiry-message' => 'Adpriziit ar bajenn-mañ ha kasit en-dro ho priziadenn nevez.',
	'articlefeedback-report-switch-label' => 'Gwelet notennoù ar bajenn',
	'articlefeedback-report-panel-title' => 'Priziadennoù ar bajenn',
	'articlefeedback-report-panel-description' => 'Notennoù keitat evit ar mare.',
	'articlefeedback-report-empty' => 'Priziadenn ebet',
	'articlefeedback-report-ratings' => '$1 priziadenn',
	'articlefeedback-field-trustworthy-label' => 'A fiziañs',
	'articlefeedback-field-trustworthy-tip' => "Ha soñjal a ra deoc'h ez eus arroudennoù a-walc'h er bajenn-mañ ? Ha diwar mammennoù sirius e teuont ?",
	'articlefeedback-field-trustworthy-tooltip-1' => "Mankout a ra mammennoù a-feson a c'hallfed fiziout warno",
	'articlefeedback-field-trustworthy-tooltip-2' => "Nebeut a vammennoù a c'hallfed fiziout warno",
	'articlefeedback-field-trustworthy-tooltip-3' => "Mammennoù a c'haller fiziout warno zo, evel m'eo dleet",
	'articlefeedback-field-trustworthy-tooltip-4' => "Mammennoù a-feson a c'haller fiziout warno",
	'articlefeedback-field-trustworthy-tooltip-5' => "Mammennoù eus an dibab a c'haller fiziout warno",
	'articlefeedback-field-complete-label' => 'Graet',
	'articlefeedback-field-complete-tip' => "Ha soñjal a ra deoc'h e vez graet mat tro temoù pennañ ar sujed ?",
	'articlefeedback-field-complete-tooltip-1' => 'Mankout a ra ar pep brasañ eus an titouroù',
	'articlefeedback-field-complete-tooltip-2' => 'Tammoù titouroù zo',
	'articlefeedback-field-complete-tooltip-3' => 'E-barzh emañ an titouroù pennañ met mankoù zo ivez',
	'articlefeedback-field-complete-tooltip-4' => 'E-barzh emañ ar pep brasañ eus an titouroù pennañ',
	'articlefeedback-field-complete-tooltip-5' => 'Klok eo an teul',
	'articlefeedback-field-objective-label' => 'Diuntu',
	'articlefeedback-field-objective-tip' => "Ha soñjal a ra deoc'h e vez kavet displeget er bajenn-mañ, en un doare reizh a-walc'h, holl tuioù ar sujed ?",
	'articlefeedback-field-objective-tooltip-1' => 'Tuek betek re',
	'articlefeedback-field-objective-tooltip-2' => "Tuek a-walc'h",
	'articlefeedback-field-objective-tooltip-3' => 'Un tammig tuek',
	'articlefeedback-field-objective-tooltip-4' => "Neptu a-walc'h evit doare",
	'articlefeedback-field-objective-tooltip-5' => 'Neptu-rik',
	'articlefeedback-field-wellwritten-label' => 'Skrivet brav',
	'articlefeedback-field-wellwritten-tip' => "Ha soñjal a ra deoc'h eo skrivet brav ha frammet mat ar bajenn-mañ ?",
	'articlefeedback-field-wellwritten-tooltip-1' => 'Digomprenus',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Diaes da gompren',
	'articlefeedback-field-wellwritten-tooltip-3' => "Sklaer a-walc'h",
	'articlefeedback-field-wellwritten-tooltip-4' => 'Sklaer-kenañ',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Peursklaer',
	'articlefeedback-pitch-reject' => "Diwezhatoc'hik marteze",
	'articlefeedback-pitch-or' => 'pe',
	'articlefeedback-pitch-thanks' => 'Trugarez ! Enrollet eo bet ho priziadenn.',
	'articlefeedback-pitch-join-message' => "Krouiñ ur gont a felle deoc'h ober ?",
	'articlefeedback-pitch-join-body' => "Gant ur gont e c'hallot heuliañ ar c'hemmoù degaset ganeoc'h, kemer perzh e kaozeadennoù ha bezañ ezel eus ar gumuniezh.",
	'articlefeedback-pitch-join-accept' => 'Krouiñ ur gont',
	'articlefeedback-pitch-join-login' => 'Kevreañ',
	'articlefeedback-pitch-edit-message' => "Ha gouzout a rit e c'hallit degas kemmoù war ar bajenn-mañ ?",
	'articlefeedback-pitch-edit-accept' => 'Degas kemmoù war ar bajenn-mañ',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Berzh ha droukverzh an devezh',
	'articleFeedback-table-caption-dailyhighs' => 'Pajennoù gwellañ priziet : $1',
	'articleFeedback-table-caption-dailylows' => 'Pajennoù priziet an nebeutañ : $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Ar re gemmet ar muiañ er sizhun-mañ',
	'articleFeedback-table-caption-recentlows' => 'Droukverzh nevesañ',
	'articleFeedback-table-heading-page' => 'Pajenn',
	'articleFeedback-table-heading-average' => 'Keidenn',
	'articleFeedback-copy-above-highlow-tables' => "Un arc'hwel arnodel eo hemañ. Lakait an evezhiadennoù er [$1 bajenn gaozeal].",
	'articlefeedback-dashboard-bottom' => "'''Notenn''' : Kenderc'hel a raimp da amprouiñ doareoù disheñvel da ginnig ar pennadoù en taolennoù-bourzh-mañ. Evit ar mare emañ enno ar pennadoù da-heul :
* Pajennoù ar gwellañ/fallañ priziet : pennadoù zo bet priziet da nebeutañ 10 gwezh e-kerzh an devezh diwezhañ. C'hoarvezout a ra ar c'heidennoù diwar jediñ keidenn an holl briziadennoù bet abaoe 24 eurvezh.
* Pennadoù a zisplij : pennadoù bet priziet gant 2 steredenn pe nebeutoc'h, e-pad 70 % eus an amzer pe pelloc'h, ne vern o rummad e-pad ar 24 eurvezh tremenet. Ne sell nemet ouzh ar pennadoù bet priziet da nebeutañ 10 gwezh e-pad ar 24 eurvezh diwezhañ.",
	'articlefeedback-disable-preference' => 'Arabat diskwel ar bitrak Priziañ ar pennadoù er pajennoù.',
	'articlefeedback-emailcapture-response-body' => "Demat deoc'h !

Trugarez deoc'h da vezañ diskouezet bezañ dedennet d'hor skoazellañ evit gwellaat {{SITENAME}}.

Kemerit ur pennadig amzer evit kadarnaat ho chomlec'h postel en ur glikañ war al liamm a-is : 

$1

Gallout a rit ivez mont da welet :

$2

Ha merkañ ar c'hod kadarnaat da-heul :

$3

A-barzh pell ez aimp e darempred ganeoc'h evit ho skoazellañ da wellaat {{SITENAME}}.

Ma n'eo ket deuet ar goulenn ganeoc'h, na rit ket van ouzh ar postel-mañ, ne vo ket kaset mann ebet all deoc'h.

A wir galon ganeoc'h ha trugarez deoc'h,
Skipailh {{SITENAME}}",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'articlefeedback' => 'Tabla za ocjenjivanje članaka', # Fuzzy
	'articlefeedback-desc' => 'Ocjenjivanje članaka (probna verzija)', # Fuzzy
	'articlefeedback-error' => 'Desila se greška. Molimo pokušajte kasnije.',
	'articlefeedback-form-switch-label' => 'Ocijeni ovu stranicu',
	'articlefeedback-form-panel-title' => 'Ocijeni ovu stranicu',
	'articlefeedback-form-panel-explanation' => 'Šta je ovo?',
	'articlefeedback-form-panel-explanation-link' => 'Project:OcjenjivanjeČlanaka',
	'articlefeedback-form-panel-clear' => 'Ukloni ovu ocjenu',
	'articlefeedback-form-panel-expertise' => 'Visoko sam obrazovan o ovoj temi (neobavezno)',
	'articlefeedback-form-panel-expertise-studies' => 'Imam odgovarajući fakultetsku/univerzitetsku diplomu',
	'articlefeedback-form-panel-expertise-profession' => 'Ovo je dio moje struke',
	'articlefeedback-form-panel-expertise-hobby' => 'Ovo je moja duboka lična strast',
	'articlefeedback-form-panel-expertise-other' => 'Izvor mog znanja nije prikazan ovdje',
	'articlefeedback-form-panel-helpimprove' => 'Želio bih pomoći da unaprijedim Wikipediju, pošalji mi e-mail (neobavezno)',
	'articlefeedback-form-panel-helpimprove-note' => 'Poslat ćemo vam e-mail potvrde. Nećemo dijeliti vašu adresu ni s kim. $1', # Fuzzy
	'articlefeedback-form-panel-helpimprove-privacy' => 'Politika privatnosti', # Fuzzy
	'articlefeedback-form-panel-submit' => 'Pošalji ocjene',
	'articlefeedback-form-panel-pending' => 'Vaše ocjene još nisu poslane',
	'articlefeedback-form-panel-success' => 'Uspješno sačuvano',
	'articlefeedback-form-panel-expiry-title' => 'Vaše ocjene su istekle',
	'articlefeedback-form-panel-expiry-message' => 'Molimo ponovo ocijenite ovu stranicu i pošaljite nove ocjene.',
	'articlefeedback-report-switch-label' => 'Prikaži ocjene stranice',
	'articlefeedback-report-panel-title' => 'Ocjene stranice',
	'articlefeedback-report-panel-description' => 'Trenutni prosječni rejtinzi.',
	'articlefeedback-report-empty' => 'Bez ocjena',
	'articlefeedback-report-ratings' => '$1 ocjena',
	'articlefeedback-field-trustworthy-label' => 'Vjerodostojno',
	'articlefeedback-field-trustworthy-tip' => 'Da li smatrate da ova stranica ima dovoljno izvora i da su oni iz provjerljivih izvora?',
	'articlefeedback-field-complete-label' => 'Završeno',
	'articlefeedback-field-complete-tip' => 'Da li mislite da ova stranica pokriva osnovna područja teme koja bi trebala?',
	'articlefeedback-field-objective-label' => 'Nepristrano',
	'articlefeedback-field-objective-tip' => 'Da li smatrate da ova stranica prikazuje neutralni prikaz iz svih perspektiva o temi?',
	'articlefeedback-field-wellwritten-label' => 'Dobro napisano',
	'articlefeedback-field-wellwritten-tip' => 'Da li mislite da je ova stranica dobro organizirana i dobro napisana?',
	'articlefeedback-pitch-reject' => 'Možda kasnije',
	'articlefeedback-pitch-or' => 'ili',
	'articlefeedback-pitch-thanks' => 'Hvala! Vaše ocjene su spremljene.',
	'articlefeedback-pitch-join-message' => 'Da li želite napraviti račun?',
	'articlefeedback-pitch-join-body' => 'Račun će vam pomoći da pratite vaše izmjene, da se uključite u razgovore i da budete dio zajednice.',
	'articlefeedback-pitch-join-accept' => 'Napravi račun',
	'articlefeedback-pitch-join-login' => 'Prijavi se',
	'articlefeedback-pitch-edit-message' => 'Da li znate da možete urediti ovu stranicu?',
	'articlefeedback-pitch-edit-accept' => 'Uredite ovu stranicu',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Današnji najviši i najniži',
	'articleFeedback-table-caption-dailyhighs' => 'Stranice sa najvišim ocjenama: $1',
	'articleFeedback-table-caption-dailylows' => 'Stranice sa najnižim ocjenama: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Najviše mijenjano ove sedmice',
	'articleFeedback-table-caption-recentlows' => 'Nedavne najniže ocjene',
	'articleFeedback-table-heading-page' => 'Stranica',
	'articleFeedback-table-heading-average' => 'Prosjek',
	'articleFeedback-copy-above-highlow-tables' => 'Ovo je probna osobina. Molimo da nam pošaljete povratne informacije na [$1 stranicu za razgovor].',
	'articlefeedback-dashboard-bottom' => "'''Napomena''': Mi ćemo nastaviti da probavamo sa raznim načinima prikaza članaka na ovim tablama.  Trenutno, table uključuju slijedeće članke:
* Stranice sa najboljim/najslabijim ocjenama: članke koji imaju najmanje 10 ocjena u posljednja 24 sata.  Prosjeci su računati tako što su izračunati prosjeci svih poslanih ocjena u posljednja 24 sata.
* Nedavne padovi: članci koji su dobili 70% ili manje (2 zvijezde ili niže) ocjene u bilo kojoj kategoriji u posljednja 24 sata. Samo članci koji su dobili najmanje 10 ocjena u posljednja 24 sata su ovdje uključeni.",
	'articlefeedback-disable-preference' => 'Ne prikazuj dodatak Povratne informacije o članku na stranicama',
	'articlefeedback-emailcapture-response-body' => 'Zdravo!

Hvala što ste izrazili zanimanje za poboljšanje {{SITENAME}}.

Molimo vas potvrdite vaš e-mail putem klika na link ispod: 

$1

Također možete posjetiti:

$2

I unijeti slijedeći kod potvrde:

$3

Bit ćemo ubrzo u kontaktu podacima kako možete pomoći oko poboljšanja {{SITENAME}}.

Ako niste inicirali ovaj zahtjev, molimo zanemarite ovaj e-mail i nećemo vam slati ništa više.

Srdačne čestitke i hvala najljepša,
Vaš {{SITENAME}} tim',
);

/** Catalan (català)
 * @author Aleator
 * @author Arnaugir
 * @author BroOk
 * @author El libre
 * @author Gemmaa
 * @author Solde
 * @author Toniher
 */
$messages['ca'] = array(
	'articlefeedback' => "Panell d'avaluació d'articles",
	'articlefeedback-desc' => "Avaluació de l'article",
	'articlefeedback-error' => "S'ha produït un error. Si us plau provi una altra vegada més tard.",
	'articlefeedback-form-switch-label' => 'Valoreu aquesta pàgina',
	'articlefeedback-form-panel-title' => 'Valoreu la pàgina',
	'articlefeedback-form-panel-explanation' => 'Què és això?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Esborra aquesta valoració',
	'articlefeedback-form-panel-expertise' => 'Estic molt ben informat sobre aquest tema (opcional)',
	'articlefeedback-form-panel-expertise-studies' => 'Tinc un rellevant college/llicenciatura',
	'articlefeedback-form-panel-expertise-profession' => 'És part de la meva professió',
	'articlefeedback-form-panel-expertise-hobby' => 'És una passió profunda personal',
	'articlefeedback-form-panel-expertise-other' => 'La font del meu coneixement no apareix aquí',
	'articlefeedback-form-panel-helpimprove' => "M'agradaria ajudar a millorar la Wikipedia, enviar-me un correu electrònic (opcional)",
	'articlefeedback-form-panel-helpimprove-note' => 'Us enviarem un correu electrònic de confirmació. No compartirem la seva adreça de correu electrònic amb tercers com per la nostra  $1 .',
	'articlefeedback-form-panel-helpimprove-privacy' => 'declaració de privacitat de resposta',
	'articlefeedback-form-panel-submit' => 'Enviar les valoracions',
	'articlefeedback-form-panel-pending' => 'Les vostres valoracions encara no han estat enviades',
	'articlefeedback-form-panel-success' => 'Desat correctament',
	'articlefeedback-form-panel-expiry-title' => 'El seu índexs han caducat',
	'articlefeedback-form-panel-expiry-message' => 'Si us plau reavalueu aquesta pàgina i envieu noves valoracions.',
	'articlefeedback-report-switch-label' => 'Veure valoracions de la pàgina',
	'articlefeedback-report-panel-title' => 'Valoracions de la pàgina',
	'articlefeedback-report-panel-description' => 'Actual mitjana de qualificacions.',
	'articlefeedback-report-empty' => 'No hi ha valoracions',
	'articlefeedback-report-ratings' => '$1 valoracions',
	'articlefeedback-field-trustworthy-label' => 'Digne de confiança',
	'articlefeedback-field-trustworthy-tip' => 'Creu que aquesta pàgina conté cites suficients i que aquestes provenen de fonts de confiança?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'No té fonts de bona reputació',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Algunes fonts de bona reputació',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Fonts de bona reputació adequadas',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Bones fonts de bona reputació',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Grans fonts de bona reputació',
	'articlefeedback-field-complete-label' => 'Complet',
	'articlefeedback-field-complete-tip' => 'Consideres que aquesta pàgina aborda els temes essencials que havien de ser coberts?',
	'articlefeedback-field-complete-tooltip-1' => 'Falta més informació',
	'articlefeedback-field-complete-tooltip-2' => 'Conté informació',
	'articlefeedback-field-complete-tooltip-3' => 'Conté la informació clau, però amb llacunes',
	'articlefeedback-field-complete-tooltip-4' => 'Conté la majoria de la informació clau',
	'articlefeedback-field-complete-tooltip-5' => 'Cobertura completa',
	'articlefeedback-field-objective-label' => 'Imparcial',
	'articlefeedback-field-objective-tip' => "Creus que aquesta pàgina representa, de forma equilibrada, tots els punts de vista sobre l'assumpte?",
	'articlefeedback-field-objective-tooltip-1' => 'Fortament esbiaixat',
	'articlefeedback-field-objective-tooltip-2' => 'Biaix moderat',
	'articlefeedback-field-objective-tooltip-3' => 'Biaix mínim',
	'articlefeedback-field-objective-tooltip-4' => 'No hi ha biaix evident',
	'articlefeedback-field-objective-tooltip-5' => 'Completament imparcial',
	'articlefeedback-field-wellwritten-label' => 'Ben escrit',
	'articlefeedback-field-wellwritten-tip' => 'Creu que aquesta pàgina està ben organitzada i ben escrita?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Incomprensible',
	'articlefeedback-field-wellwritten-tooltip-2' => "Difícil d'entendre",
	'articlefeedback-field-wellwritten-tooltip-3' => 'Claredat adequada',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Bona claredat',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Claredat excepcional',
	'articlefeedback-pitch-reject' => 'Potser més tard',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => "Gràcies! S'han desat les seves classificacions.",
	'articlefeedback-pitch-join-message' => 'Vols crear un compte?',
	'articlefeedback-pitch-join-accept' => 'Crea un compte',
	'articlefeedback-pitch-join-login' => 'Inicia sessió',
	'articlefeedback-pitch-edit-message' => 'Sabíeu que podeu modificar aquesta pàgina?',
	'articlefeedback-pitch-edit-accept' => 'Modifica aquesta pàgina',
	'articleFeedback-table-caption-dailyhighsandlows' => "Els alts i baixos d'avui",
	'articleFeedback-table-caption-dailyhighs' => 'Pàgines amb valoracions més altes: $1',
	'articleFeedback-table-caption-dailylows' => 'Pàgines amb valoracions més baixes: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Les més canviades aquesta setmana',
	'articleFeedback-table-caption-recentlows' => 'Baixos recents',
	'articleFeedback-table-heading-page' => 'Pàgina',
	'articleFeedback-table-heading-average' => 'Mitjana',
	'articlefeedback-disable-preference' => "No mostris el giny de comentaris d'articles a les pàgines",
);

/** Chechen (нохчийн)
 * @author Sasan700
 */
$messages['ce'] = array(
	'articlefeedback-form-panel-submit' => 'Дlадахьийта хетарг', # Fuzzy
);

/** Czech (česky)
 * @author Chmee2
 * @author Jkjk
 * @author Kuvaly
 * @author Mormegil
 * @author Mr. Richard Bolla
 */
$messages['cs'] = array(
	'articlefeedback' => 'Přehled hodnocení článků', # Fuzzy
	'articlefeedback-desc' => 'Odezva na články',
	'articlefeedback-error' => 'Došlo k chybě. Zkuste to prosím později.',
	'articlefeedback-form-switch-label' => 'Hodnoťte tuto stránku',
	'articlefeedback-form-panel-title' => 'Ohodnoťte tuto stránku',
	'articlefeedback-form-panel-explanation' => 'Co tohle je?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Hodnocení článků',
	'articlefeedback-form-panel-clear' => 'Odstranit hodnocení',
	'articlefeedback-form-panel-expertise' => 'Mám rozsáhlé znalosti tohoto tématu (nepovinné)',
	'articlefeedback-form-panel-expertise-studies' => 'Mám příslušný vysokoškolský titul',
	'articlefeedback-form-panel-expertise-profession' => 'Jde o součást mé profese',
	'articlefeedback-form-panel-expertise-hobby' => 'Je to můj velký koníček',
	'articlefeedback-form-panel-expertise-other' => 'Původ mých znalostí zde není uveden',
	'articlefeedback-form-panel-helpimprove' => 'Rád bych pomohl vylepšit Wikipedii, pošlete mi e-mail (nepovinné)',
	'articlefeedback-form-panel-helpimprove-note' => 'Pošleme vám potvrzovací e-mail. Vaši e-mailovou adresu nikomu dalšímu neposkytneme, jak píšeme v $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'zásadách o soukromí',
	'articlefeedback-form-panel-submit' => 'Odeslat hodnocení',
	'articlefeedback-form-panel-pending' => 'Vaše hodnocení zatím nebylo odesláno',
	'articlefeedback-form-panel-success' => 'Úspěšně uloženo',
	'articlefeedback-form-panel-expiry-title' => 'Platnost vašeho hodnocení vypršela',
	'articlefeedback-form-panel-expiry-message' => 'Ohodnoťte prosím stránku znovu a zadejte nové hodnocení.',
	'articlefeedback-report-switch-label' => 'Zobrazit hodnocení',
	'articlefeedback-report-panel-title' => 'Hodnocení stránky',
	'articlefeedback-report-panel-description' => 'Aktuální průměrné hodnocení',
	'articlefeedback-report-empty' => 'Bez hodnocení',
	'articlefeedback-report-ratings' => '$1 hodnocení',
	'articlefeedback-field-trustworthy-label' => 'Důvěryhodnost',
	'articlefeedback-field-trustworthy-tip' => 'Máte pocit, že tato stránka dostatečně odkazuje na zdroje a použité zdroje jsou důvěryhodné?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Chybí věrohodné zdroje',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Málo věrohodných zdrojů',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Postačující věrohodné zdroje',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Kvalitní věrohodné zdroje',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Skvělé věrohodné zdroje',
	'articlefeedback-field-complete-label' => 'Úplnost',
	'articlefeedback-field-complete-tip' => 'Máte pocit, že tato stránka pokrývá všechny důležité části tématu?',
	'articlefeedback-field-complete-tooltip-1' => 'Chybí většina informací',
	'articlefeedback-field-complete-tooltip-2' => 'Nějaké informace obsahuje',
	'articlefeedback-field-complete-tooltip-3' => 'Klíčové informace obsahuje, ale s mezerami',
	'articlefeedback-field-complete-tooltip-4' => 'Obsahuje většinu klíčových informací',
	'articlefeedback-field-complete-tooltip-5' => 'Vyčerpávající pokrytí',
	'articlefeedback-field-objective-label' => 'Objektivita',
	'articlefeedback-field-objective-tip' => 'Máte pocit, že tato stránka spravedlivě pokrývá všechny pohledy na dané téma?',
	'articlefeedback-field-objective-tooltip-1' => 'Silně zkreslené',
	'articlefeedback-field-objective-tooltip-2' => 'Mírné zkreslení',
	'articlefeedback-field-objective-tooltip-3' => 'Minimální zkreslení',
	'articlefeedback-field-objective-tooltip-4' => 'Bez viditelných zkreslení',
	'articlefeedback-field-objective-tooltip-5' => 'Naprosto nezaujaté',
	'articlefeedback-field-wellwritten-label' => 'Čitelnost',
	'articlefeedback-field-wellwritten-tip' => 'Máte pocit, že tato stránka je správně organizována a dobře napsána?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Nesrozumitelné',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Obtížné pochopit',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Dostatečná srozumitelnost',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Dobrá srozumitelnost',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Výjimečná srozumitelnost',
	'articlefeedback-pitch-reject' => 'Možná později',
	'articlefeedback-pitch-or' => 'nebo',
	'articlefeedback-pitch-thanks' => 'Děkujeme! Vaše hodnocení bylo uloženo.',
	'articlefeedback-pitch-join-message' => 'Chtěli byste si založit uživatelský účet?',
	'articlefeedback-pitch-join-body' => 'Účet vám umožní sledovat vaše editace, účastnit se diskusí a stát se součástí komunity.',
	'articlefeedback-pitch-join-accept' => 'Založit účet',
	'articlefeedback-pitch-join-login' => 'Přihlásit se',
	'articlefeedback-pitch-edit-message' => 'Věděli jste, že můžete tuto stránku upravit?',
	'articlefeedback-pitch-edit-accept' => 'Editovat stránku',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dnešní maxima a minima',
	'articleFeedback-table-caption-dailyhighs' => 'Stránky s nejvyšším hodnocením: $1',
	'articleFeedback-table-caption-dailylows' => 'Stránky s nejnižším hodnocením: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Největší změny tohoto týdne',
	'articleFeedback-table-caption-recentlows' => 'Nedávná minima',
	'articleFeedback-table-heading-page' => 'Stránka',
	'articleFeedback-table-heading-average' => 'Průměr',
	'articleFeedback-copy-above-highlow-tables' => 'Toto je pokusná funkce. Sdělte nám svůj názor na [$1 diskusní stránce].',
	'articlefeedback-dashboard-bottom' => "'''Poznámka''': I nadále budeme experimentovat s různými způsoby zobrazení článků na tomto přehledu. V současné chvíli přehled zahrnuje následující články:
* Stránky s nejvyšším/nejnižším hodnocením: články, které za posledních 24 hodin byly hodnoceny nejméně 10krát. Průměry se počítají ze všech hodnocení odeslaných v posledních 24 hodinách.
* Nedávná minima: články, které mají za posledních 24 hodin 70 % nebo více nízkých hodnocení (2 hvězdičky nebo horší) v libovolné kategorii. Zahrnuty jsou jen články, které byly za posledních 24 hodin hodnoceny nejméně 10krát.",
	'articlefeedback-disable-preference' => 'Nezobrazovat na stránkách komponentu pro hodnocení článků',
	'articlefeedback-emailcapture-response-body' => 'Dobrý den!

Děkujeme za vyjádření zájmu pomoci vylepšit {{grammar:4sg|{{SITENAME}}}}.

Věnujte prosím chvilku potvrzení vaší e-mailové adresy kliknutím na následující odkaz:

$1

Také můžete navštívit:

$2

A zadat následující potvrzovací kód:

$3

Brzy se vám ozveme s informacemi, jak můžete pomoci {{grammar:4sg|{{SITENAME}}}} vylepšit.

Pokud tato žádost nepochází od vás, ignorujte prosím tento e-mail, nic dalšího vám posílat nebudeme.

Děkujeme, s pozdravem
tým {{grammar:2sg|{{SITENAME}}}}',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 * @author Pwyll
 */
$messages['cy'] = array(
	'articlefeedback' => 'Dangosfwrdd adborth erthygl', # Fuzzy
	'articlefeedback-desc' => 'Adborth am erthygl',
	'articlefeedback-error' => 'Cafwyd gwall. Ceisiwch eto nes ymlaen os gwelwch yn dda.',
	'articlefeedback-form-switch-label' => "Rhowch sgôr i'r dudalen hon.",
	'articlefeedback-form-panel-title' => "Rhowch sgôr i'r dudalen hon.",
	'articlefeedback-form-panel-explanation' => 'Beth yw hwn?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Dilëer y sgôr hwn.',
	'articlefeedback-form-panel-expertise' => 'Rwyf yn hynod wybodus am y pwnc hwn (dewisol).',
	'articlefeedback-form-panel-expertise-studies' => 'Mae gennyf radd coleg/prifysgol perthnasol.',
	'articlefeedback-form-panel-expertise-profession' => "Mae'n rhan o'm swyddogaeth",
	'articlefeedback-form-panel-expertise-hobby' => "Mae'n ddiddordeb personol, dwfn.",
	'articlefeedback-form-panel-expertise-other' => 'Ni rhestrir ffynhonnell fy ngwybodaeth yn y fan hon',
	'articlefeedback-form-panel-helpimprove' => 'Hoffwn gynorthwyo i wella Wicipedia, danfonwch e-bost ataf (dewisol)',
	'articlefeedback-form-panel-helpimprove-note' => "Byddwn yn danfon e-bost atoch i gadarnhau. Ni fyddwn yn rhannu'ch cyfeiriad e-bost gyda neb o'r tu allan, yn ôl ein $1.",
	'articlefeedback-form-panel-helpimprove-privacy' => 'datganiad ar breifatrwydd adborth',
	'articlefeedback-form-panel-submit' => 'Cyflwyno sgôr',
	'articlefeedback-form-panel-pending' => "Nid yw'ch sgôr wedi cael ei gyflwyno eto",
	'articlefeedback-form-panel-success' => 'Cadwyd yn llwyddiannus',
	'articlefeedback-form-panel-expiry-title' => "Mae'ch sgôr wedi dirwyn i ben",
	'articlefeedback-form-panel-expiry-message' => 'Ail-werthuswch y dudalen hon a chyflwynwch sgôr newydd os gwelwch yn dda',
	'articlefeedback-report-switch-label' => "Gweld sgôrau'r dudalen",
	'articlefeedback-report-panel-title' => "Sgôrau'r dudalen",
	'articlefeedback-report-panel-description' => 'Sgôrau cyfartalog ar hyn o bryd',
	'articlefeedback-report-empty' => 'Dim sgôr',
	'articlefeedback-report-ratings' => '$1 sgôr',
	'articlefeedback-field-trustworthy-label' => 'Dibynadwy',
	'articlefeedback-field-trustworthy-tip' => "Ydych chi'n credu fod gan y dudalen hon ddigon o gyfeiriadau a bod y cyfeiriadau hynny'n dod o ffynonnellau dibynadwy?",
	'articlefeedback-field-trustworthy-tooltip-1' => 'Heb ddigon o ffynonnellau dibynadwy',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Ambell ffynhonnell ddibynadwy',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Ffynonnellau dibynadwy digonol',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Ffynonnellau dibynadwy da',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Ffynonnellau dibynadwy rhagorol',
	'articlefeedback-field-complete-label' => 'Cyflawn',
	'articlefeedback-field-complete-tip' => "Ydych chi'n teimlo fod y dudalen hon yn ymdrin â'r meysydd pynciol allweddol a ddylai fod yno?",
	'articlefeedback-field-complete-tooltip-1' => "Gyda'r mwyaf o wybodaeth coll",
	'articlefeedback-field-complete-tooltip-2' => 'Yn cynnwys peth gwybodaeth',
	'articlefeedback-field-complete-tooltip-3' => 'Yn cynnwys y prif wybodaeth, ond gyda bylchau',
	'articlefeedback-field-complete-tooltip-4' => "Yn cynnwys y rhan fwyaf o'r prif wybodaeth",
	'articlefeedback-field-complete-tooltip-5' => 'Ymdriniaeth gynhwysfawr',
	'articlefeedback-field-objective-label' => 'Gwrthrychol',
	'articlefeedback-field-objective-tip' => "Ydych chi'n teimlo fod y dudalen yn ddarlun teg o'r holl safbwyntiau am y pwnc?",
	'articlefeedback-field-objective-tooltip-1' => 'Yn llawn tuedd',
	'articlefeedback-field-objective-tooltip-2' => 'Peth tuedd',
	'articlefeedback-field-objective-tooltip-3' => 'Ychydig bach o duedd',
	'articlefeedback-field-objective-tooltip-4' => 'Dim tuedd amlwg',
	'articlefeedback-field-objective-tooltip-5' => 'Yn gwbl ddi-duedd',
	'articlefeedback-field-wellwritten-label' => "Wedi'i ysgrifennu'n dda",
	'articlefeedback-field-wellwritten-tip' => "Ydych chi'n teimlo fod y dudalen hon wedi'i threfnu a'i hysgrifennu'n llwyddiannus?",
	'articlefeedback-field-wellwritten-tooltip-1' => 'Annealladwy',
	'articlefeedback-field-wellwritten-tooltip-2' => "Anodd i'w deall",
	'articlefeedback-field-wellwritten-tooltip-3' => 'Eglurder boddhaol',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Eglurder da',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Hynod eglur',
	'articlefeedback-pitch-reject' => 'Nes ymlaen efallai',
	'articlefeedback-pitch-or' => 'neu',
	'articlefeedback-pitch-thanks' => 'Diolch! Cadwyd eich sgôrau.',
	'articlefeedback-pitch-join-message' => 'Oeddech chi eisiau creu cyfrif?',
	'articlefeedback-pitch-join-body' => "Bydd cyfrif yn eich galluogi i dracio'ch golygiadau, gymryd rhan mewn trafodaethau, a bod yn rhan o'r gymuned.",
	'articlefeedback-pitch-join-accept' => 'Crëwch gyfrif',
	'articlefeedback-pitch-join-login' => 'Mewngofnodi',
	'articlefeedback-pitch-edit-message' => "Wyddoch chi y gallech chi olygu'r dudalen hon?",
	'articlefeedback-pitch-edit-accept' => 'Golygwch y dudalen hon',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Uchafbwyntiau ac iselfannau heddiw',
	'articleFeedback-table-caption-dailyhighs' => "Tudalennau gyda'r sgôrau uchaf: $1",
	'articleFeedback-table-caption-dailylows' => "Tudalennau gyda'r sgôrau isaf: $1",
	'articleFeedback-table-caption-weeklymostchanged' => 'Newidiadau mwyaf yr wythnos hon',
	'articleFeedback-table-caption-recentlows' => 'Iselfannau diweddar',
	'articleFeedback-table-heading-page' => 'Tudalen',
	'articleFeedback-table-heading-average' => 'Cyfartaledd',
	'articleFeedback-copy-above-highlow-tables' => 'Nodwedd arbrofol yw hon. Darparwch adborth ar [dudalen sgwrs $1] os gwelwch yn dda.',
	'articlefeedback-dashboard-bottom' => "'''Noder''': Byddwn yn parhau i arbrofi gyda ffyrdd gwahanol o gyflwyno erthyglau ar y dangosfyrddau hyn. Ar hyn o bryd, mae'r dangosfyrddau'n cynnwys yr erthyglau canlynol:
* Tudalennau gyda'r sgôrau uchaf/isaf: erthyglau sydd wedi derbyn 10 sgôr o leiaf yn ystod y 24 awr diwethaf. Daw'r cyfartaleddau trwy gymryd y cymedr o'r holl sgôrau a gyflwynwyd yn ystod y 24 awr diwethaf.
* Iselfannau diweddar: erthyglau a gafodd sgôrau o 70% neu'n is (2 seren neu'n is) mewn unrhyw gategori yn ystod y 24 awr diwethaf. Dim ond erthyglau a dderbyniodd 10 sgôr o leiaf yn ystod y 24 awr diwethaf sy'n cael eu cynnwys.",
	'articlefeedback-disable-preference' => 'Peidiwch dangos y teclyn adborth erthygl ar dudalennau.',
	'articlefeedback-emailcapture-response-body' => "Helo!
Diolch am ddangos eich diddordeb i wella {{SITENAME}}.

A fyddech gystal â chadarnhau eich e-bost trwy glicio ar y ddolen isod:
$1

Hefyd gallwch ymweld â:
$2

A nodi'r côd cadarnhau canlynol:
$3

Byddwn ni mewn cysylltiad â chi'n fuan ynglyn â sut y gallwch chi wella {{SITENAME}}.

Os nad oeddech wedi gwneud y cais hwn, anwybyddwch yr e-bost hwn os gwelwch yn dda. Ni fyddwn yn danfon dim byd arall atoch.

Dymuniadau gorau, a diolch,
Tîm {{SITENAME}}",
);

/** Danish (dansk)
 * @author Hylle
 * @author Peter Alberti
 * @author Sarrus
 * @author Tjernobyl
 */
$messages['da'] = array(
	'articlefeedback-error' => 'En fejl opstod. Prøv venligst igen senere.',
	'articlefeedback-form-switch-label' => 'Bedøm denne side',
	'articlefeedback-form-panel-title' => 'Bedøm denne side',
	'articlefeedback-form-panel-explanation' => 'Hvad er dette?',
	'articlefeedback-form-panel-clear' => 'Fjern denne vurdering',
	'articlefeedback-form-panel-expertise-studies' => 'Jeg har en relevant universitetsgrad',
	'articlefeedback-form-panel-expertise-profession' => 'Det er en del af mit erhverv',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Behandling af personlige oplysninger', # Fuzzy
	'articlefeedback-form-panel-success' => 'Gemt',
	'articlefeedback-form-panel-expiry-title' => 'Dine vurderinger er udløbet',
	'articlefeedback-report-switch-label' => 'Vis sidevurderinger',
	'articlefeedback-report-panel-title' => 'Sidevurderinger',
	'articlefeedback-report-empty' => 'Ingen bedømmelser',
	'articlefeedback-report-ratings' => '$1 bedømmelser',
	'articlefeedback-field-trustworthy-label' => 'Pålidelig',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Mangler troværdige kilder',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Få troværdige kilder',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Tilstrækkelige, troværdige kilder',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Gode troværdige kilder',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Fremragende troværdige kilder',
	'articlefeedback-field-complete-label' => 'Fuldstændig',
	'articlefeedback-field-complete-tooltip-1' => 'Mangler de fleste oplysninger',
	'articlefeedback-field-complete-tooltip-2' => 'Indeholder nogen information',
	'articlefeedback-field-complete-tooltip-3' => 'Indeholder vigtig information, men der mangler noget',
	'articlefeedback-field-complete-tooltip-4' => 'Indeholder de vigtigste informationer',
	'articlefeedback-field-complete-tooltip-5' => 'Gennemgribende dækning',
	'articlefeedback-field-objective-label' => 'Objektiv',
	'articlefeedback-field-wellwritten-label' => 'Velskrevet',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Uforståelig',
	'articlefeedback-pitch-reject' => 'Måske senere',
	'articlefeedback-pitch-or' => 'eller',
	'articlefeedback-pitch-join-message' => 'Ønskede du at oprette en konto?',
	'articlefeedback-pitch-join-accept' => 'Opret en konto',
	'articlefeedback-pitch-join-login' => 'Log ind',
	'articlefeedback-pitch-edit-message' => 'Vidste du, at du kan redigere denne side?',
	'articlefeedback-pitch-edit-accept' => 'Redigér denne side',
	'articleFeedback-table-heading-page' => 'Side',
	'articleFeedback-table-heading-average' => 'Gennemsnit',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 * @author Purodha
 */
$messages['de'] = array(
	'articlefeedback' => 'Arbeits- und Übersichtsseite zu Seiteneinschätzungen',
	'articlefeedback-desc' => 'Ermöglicht das Einschätzen von Seiten',
	'articlefeedback-error' => 'Ein Fehler ist aufgetreten. Bitte versuche es später erneut.',
	'articlefeedback-form-switch-label' => 'Diese Seite einschätzen',
	'articlefeedback-form-panel-title' => 'Diese Seite einschätzen',
	'articlefeedback-form-panel-explanation' => 'Worum handelt es sich?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Artikeleinschätzung',
	'articlefeedback-form-panel-clear' => 'Diese Einschätzung entfernen',
	'articlefeedback-form-panel-expertise' => 'Ich habe umfangreiche Kenntnisse zu diesem Thema (optional)',
	'articlefeedback-form-panel-expertise-studies' => 'Ich habe einen entsprechenden Abschluss/Hochschulabschluss',
	'articlefeedback-form-panel-expertise-profession' => 'Es ist ein Teil meines Berufes',
	'articlefeedback-form-panel-expertise-hobby' => 'Ich habe ein sehr starkes persönliches Interesse an diesem Thema',
	'articlefeedback-form-panel-expertise-other' => 'Die Grund für meine Kenntnisse ist hier nicht aufgeführt',
	'articlefeedback-form-panel-helpimprove' => 'Ich möchte dabei helfen, {{SITENAME}} zu verbessern. Senden Sie mir bitte eine E-Mail. (optional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Wir werden dir eine Bestätigungs-E-Mail senden. Wir geben deine E-Mail-Adresse, gemäß unserer $1, nicht an Dritte weiter.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Datenschutzerklärung für Rückmeldungen',
	'articlefeedback-form-panel-submit' => 'Einschätzung senden',
	'articlefeedback-form-panel-pending' => 'Deine Bewertung wurde noch nicht übertragen',
	'articlefeedback-form-panel-success' => 'Erfolgreich gespeichert',
	'articlefeedback-form-panel-expiry-title' => 'Deine Einschätzung liegt zu lange zurück.',
	'articlefeedback-form-panel-expiry-message' => 'Bitte beurteile die Seite erneut und speichere eine neue Einschätzung.',
	'articlefeedback-report-switch-label' => 'Einschätzungen zu dieser Seite ansehen',
	'articlefeedback-report-panel-title' => 'Einschätzungen zu dieser Seite',
	'articlefeedback-report-panel-description' => 'Aktuelle Durchschnittsergebnisse der Einschätzungen',
	'articlefeedback-report-empty' => 'Keine Einschätzungen',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|Eine Einschätzung|$1 Einschätzungen}}',
	'articlefeedback-field-trustworthy-label' => 'Vertrauenswürdig',
	'articlefeedback-field-trustworthy-tip' => 'Hast du den Eindruck, dass diese Seite über genügend Quellenangaben verfügt und diese zudem aus vertrauenswürdigen Quellen stammen?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Enthält keine seriösen Quellenangaben',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Enthält wenig seriöse Quellenangaben',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Enthält angemessen seriöse Quellen',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Enthält seriöse Quellenangaben',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Enthält sehr seriöse Quellenangaben',
	'articlefeedback-field-complete-label' => 'Vollständig',
	'articlefeedback-field-complete-tip' => 'Hast du den Eindruck, dass diese Seite alle wichtigen Aspekte enthält, die mit dessen Inhalt zusammenhängen?',
	'articlefeedback-field-complete-tooltip-1' => 'Enthält kaum Informationen',
	'articlefeedback-field-complete-tooltip-2' => 'Enthält einige Informationen',
	'articlefeedback-field-complete-tooltip-3' => 'Enthält wichtige Information- en, hat aber Lücken',
	'articlefeedback-field-complete-tooltip-4' => 'Enthält die meisten wichtigen Informationen',
	'articlefeedback-field-complete-tooltip-5' => 'Enthält umfassende Informationen',
	'articlefeedback-field-objective-label' => 'Sachlich',
	'articlefeedback-field-objective-tip' => 'Hast du den Eindruck, dass diese Seite eine ausgewogene Darstellung aller mit deren Inhalt verbundenen Aspekte enthält?',
	'articlefeedback-field-objective-tooltip-1' => 'Ist sehr einseitig',
	'articlefeedback-field-objective-tooltip-2' => 'Ist mäßig einseitig',
	'articlefeedback-field-objective-tooltip-3' => 'Ist kaum einseitig',
	'articlefeedback-field-objective-tooltip-4' => 'Ist nicht offensichtlich einseitig',
	'articlefeedback-field-objective-tooltip-5' => 'Ist nicht einseitig',
	'articlefeedback-field-wellwritten-label' => 'Gut geschrieben',
	'articlefeedback-field-wellwritten-tip' => 'Hast du den Eindruck, dass diese Seite gut strukturiert sowie geschrieben wurde?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Ist unverständlich',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Ist schwer verständlich',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Ist ausreichend verständlich',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Ist gut verständlich',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Ist außergewöhnlich gut verständlich',
	'articlefeedback-pitch-reject' => 'Vielleicht später',
	'articlefeedback-pitch-or' => 'oder',
	'articlefeedback-pitch-thanks' => 'Vielen Dank! Deine Einschätzung wurde gespeichert.',
	'articlefeedback-pitch-join-message' => 'Wolltest du ein Benutzerkonto anlegen?',
	'articlefeedback-pitch-join-body' => 'Ein Benutzerkonto hilft dir deine Bearbeitungen besser nachvollziehen zu können, dich einfacher an Diskussionen zu beteiligen sowie ein Teil der Benutzergemeinschaft zu werden.',
	'articlefeedback-pitch-join-accept' => 'Benutzerkonto erstellen',
	'articlefeedback-pitch-join-login' => 'Anmelden',
	'articlefeedback-pitch-edit-message' => 'Wusstest du, dass du diese Seite bearbeiten kannst?',
	'articlefeedback-pitch-edit-accept' => 'Diese Seite bearbeiten',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Heutige Hochs und Tiefs',
	'articleFeedback-table-caption-dailyhighs' => 'Artikel mit den höchsten Bewertungen: $1',
	'articleFeedback-table-caption-dailylows' => 'Artikel mit den niedrigsten Bewertungen: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Diese Woche am meisten geändert',
	'articleFeedback-table-caption-recentlows' => 'Aktuelle Tiefs',
	'articleFeedback-table-heading-page' => 'Seite',
	'articleFeedback-table-heading-average' => 'Durchschnitt',
	'articleFeedback-copy-above-highlow-tables' => 'Dies ist ein experimenteller Funktionsbestandteil. Bitte hierzu auf der [$1 Diskussionsseite] eine Rückmeldung geben.',
	'articlefeedback-dashboard-bottom' => "'''Hinweis:''' Wir werden weiterhin unterschiedliche Möglichkeiten ausprobieren, Artikel auf diesen Arbeits- und Übersichtseiten anzuzeigen. Momentan werden hier die folgenden Artikel angezeigt:
* Seiten mit den höchsten/niedrigsten Bewertungen: Artikel, die mindestens zehn Bewertungen während der vergangenen 24 Stunden erhalten haben. Die Durchschnittswerte sind dabei der Mittelwert aller Bewertungen während der vergangenen 24 Stunden.
* Aktuelle schlechte Bewertungen: Artikel, die während der vergangenen 24 Stunden 70 % oder schlechtere Bewertungen (zwei Sterne oder weniger) in jeder der Kategorien erhalten haben. Lediglich Artikel mit wenigstens zehn Bewertungen während der vergangenen 24 Stunden werden dabei einbezogen.",
	'articlefeedback-disable-preference' => 'Das Widget zum Einschätzen von Seiten nicht anzeigen',
	'articlefeedback-emailcapture-response-body' => 'Hallo!

Vielen Dank für dein Interesse an der Verbesserung von {{SITENAME}}.

Bitte nimm dir einen Moment Zeit, deine E-Mail-Adresse zu bestätigen, indem du auf den folgenden Link klickst:

$1

Du kannst auch die folgende Seite besuchen:

$2

Gib dort den nachfolgenden Bestätigungscode ein:

$3

Wir melden uns in Kürze dazu, wie du helfen kannst, {{SITENAME}} zu verbessern.

Sofern du diese Anfrage nicht ausgelöst hast, ignoriere einfach diese E-Mail. Wir werden dir dann nichts mehr zusenden.

Viele Grüße und vielen Dank,
Das {{SITENAME}}-Team',
);

/** Swiss High German (Schweizer Hochdeutsch)
 * @author Filzstift
 */
$messages['de-ch'] = array(
	'articlefeedback-form-panel-helpimprove' => 'Ich möchte dabei helfen, {{SITENAME}} zu verbessern. Senden Sie mir bitte ein E-Mail. (optional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Wir werden dir ein Bestätigungs-E-Mail senden. Wir geben deine E-Mail-Adresse, gemäss unserer $1, nicht an Dritte weiter.',
	'articlefeedback-emailcapture-response-body' => 'Hallo!

Vielen Dank für dein Interesse an der Verbesserung von {{SITENAME}}.

Bitte nimm dir einen Moment Zeit, deine E-Mail-Adresse zu bestätigen, indem du auf den folgenden Link klickst:

$1

Du kannst auch die folgende Seite besuchen:

$2

Gib dort den nachfolgenden Bestätigungscode ein:

$3

Wir melden uns in Kürze dazu, wie du helfen kannst, {{SITENAME}} zu verbessern.

Sofern du diese Anfrage nicht ausgelöst hast, ignoriere einfach dieses E-Mail. Wir werden dir dann nichts mehr zusenden.

Viele Grüsse und vielen Dank,
Das {{SITENAME}}-Team',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Catrope
 * @author Imre
 * @author Kghbln
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'articlefeedback-error' => 'Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.',
	'articlefeedback-form-panel-helpimprove' => 'Ich möchte dabei helfen, {{SITENAME}} zu verbessern. Senden Sie mir bitte eine E-Mail. (optional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Wir werden Ihnen eine Bestätigungs-E-Mail senden. Wir geben Ihre E-Mail-Adresse, gemäß unserer $1, nicht an Dritte weiter.',
	'articlefeedback-form-panel-pending' => 'Ihre Bewertung wurde noch nicht übertragen',
	'articlefeedback-form-panel-expiry-title' => 'Ihre Einschätzung liegt zu lange zurück.',
	'articlefeedback-form-panel-expiry-message' => 'Bitte beurteilen Sie die Seite erneut und speichern Sie eine neue Einschätzung.',
	'articlefeedback-field-trustworthy-tip' => 'Haben Sie den Eindruck, dass diese Seite über genügend Quellenangaben verfügt und diese zudem aus vertrauenswürdigen Quellen stammen?',
	'articlefeedback-field-complete-tip' => 'Haben Sie den Eindruck, dass diese Seite alle wichtigen Aspekte enthält, die mit dessen Inhalt zusammenhängen?',
	'articlefeedback-field-objective-tip' => 'Haben Sie den Eindruck, dass diese Seite eine ausgewogene Darstellung aller mit dessen Inhalt verbundenen Aspekte enthält?',
	'articlefeedback-field-wellwritten-tip' => 'Haben Sie den Eindruck, dass diese Seite gut strukturiert sowie geschrieben wurde?',
	'articlefeedback-pitch-thanks' => 'Vielen Dank! Ihre Einschätzung wurde gespeichert.',
	'articlefeedback-pitch-join-message' => 'Wollten Sie ein Benutzerkonto anlegen?',
	'articlefeedback-pitch-join-body' => 'Ein Benutzerkonto hilft Ihnen, Ihre Bearbeitungen besser nachvollziehen zu können, sich einfacher an Diskussionen zu beteiligen sowie ein Teil der Benutzergemeinschaft zu werden.',
	'articlefeedback-pitch-edit-message' => 'Wussten Sie, dass Sie diese Seite bearbeiten können?',
	'articlefeedback-emailcapture-response-body' => 'Hallo!

Vielen Dank für Ihr Interesse an der Verbesserung von {{SITENAME}}.

Bitte nehmen Sie sich einen Moment Zeit, Ihre E-Mail-Adresse zu bestätigen, indem Sie auf den folgenden Link klicken:

$1

Sie können auch die folgende Seite besuchen:

$2

Geben Sie dort den nachfolgenden Bestätigungscode ein:

$3

Wir melden uns in Kürze dazu, wie Sie helfen können, {{SITENAME}} zu verbessern.

Sofern Sie diese Anfrage nicht ausgelöst haben, ignorieren Sie einfach diese E-Mail. Wir werden Ihnen dann nichts mehr zusenden.

Viele Grüße und vielen Dank,
Das {{SITENAME}}-Team',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'articlefeedback' => 'Panela wesiqe peyd rıştışi',
	'articlefeedback-desc' => 'Wesiqe peyd rıştış',
	'articlefeedback-form-switch-label' => 'Na pela bıercıne',
	'articlefeedback-form-panel-title' => 'Na pela bıercıne',
	'articlefeedback-form-panel-explanation' => 'No çıko?',
	'articlefeedback-report-panel-description' => 'Averacê ercanyış dê newki.',
	'articlefeedback-report-empty' => 'Ercınayış çıniyo',
	'articlefeedback-field-trustworthy-label' => 'Ke emelêno',
	'articlefeedback-field-complete-label' => 'Temamyayo',
	'articlefeedback-field-objective-label' => 'Obcektiv',
	'articlefeedback-field-wellwritten-label' => 'Weş nusneyayo',
	'articlefeedback-pitch-reject' => 'Belkina bahdo',
	'articlefeedback-pitch-or' => 'ya zi',
	'articlefeedback-pitch-join-message' => 'Şıma qayılê xo rê hesab vırazê?',
	'articlefeedback-pitch-join-accept' => 'Yew hesab vıraze',
	'articlefeedback-pitch-join-login' => 'Cı kewe',
	'articlefeedback-pitch-edit-accept' => 'Ena pele bıvurne',
	'articleFeedback-table-caption-recentlows' => 'Kewtenê peyêni',
	'articleFeedback-table-heading-page' => 'Pele',
	'articleFeedback-table-heading-average' => 'Averac',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'articlefeedback-error' => 'Zmólka jo nastała. Pšosym wopytaj pózdźej hyšći raz.',
	'articlefeedback-form-switch-label' => 'Toś ten bok pógódnośiś',
	'articlefeedback-form-panel-title' => 'Toś ten bok pógódnośiś',
	'articlefeedback-form-panel-explanation' => 'Co to jo?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Toś to pogódnośenje wótpóraś',
	'articlefeedback-form-panel-expertise' => 'Mam wobšyrne znaśa k toś tej temje (na žycenje)',
	'articlefeedback-form-panel-expertise-studies' => 'Som wušu šulu/uniwersitu wótzamknuł',
	'articlefeedback-form-panel-expertise-profession' => 'Jo źěl mójogo pówołanja',
	'articlefeedback-form-panel-expertise-hobby' => 'Jo kšuta wósobinska zagóritosć.',
	'articlefeedback-form-panel-expertise-other' => 'Žrědło mójich znajobnosćow njejo how pódane',
	'articlefeedback-form-panel-submit' => 'Pógódnośenja wótpósłaś',
	'articlefeedback-form-panel-pending' => 'Twóje pógódnośenja hyšći njejsu se wótpósłali',
	'articlefeedback-form-panel-success' => 'Wuspěšnje składowany',
	'articlefeedback-form-panel-expiry-title' => 'Twóje pógódnośenja su pśepadnyli',
	'articlefeedback-report-switch-label' => 'Pogódnośenja boka pokazaś',
	'articlefeedback-report-empty' => 'Žedne pogódnośenja',
	'articlefeedback-report-ratings' => '$1 pogódnosénjow',
	'articlefeedback-field-trustworthy-label' => 'Dowěry gódny',
	'articlefeedback-field-complete-label' => 'Dopołny',
	'articlefeedback-field-complete-tooltip-1' => 'Wopśimujo mało informacijow',
	'articlefeedback-field-complete-tooltip-2' => 'Wopśimujo někotare informcije',
	'articlefeedback-field-complete-tooltip-3' => 'Wopśimujo wažne informacije, ale z proznymi flakami',
	'articlefeedback-field-complete-tooltip-4' => 'Wopśimujo nejwažnjejše informacije',
	'articlefeedback-field-objective-label' => 'Wěcowny',
	'articlefeedback-field-wellwritten-label' => 'Derje napisany',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Śěžko zbadny',
	'articlefeedback-pitch-reject' => 'Snaź pózdźej',
	'articlefeedback-pitch-or' => 'abo',
	'articlefeedback-pitch-join-accept' => 'Konto załožyś',
	'articlefeedback-pitch-join-login' => 'Pśizjawiś',
	'articlefeedback-pitch-edit-accept' => 'Toś ten nastawk wobźěłaś',
	'articleFeedback-table-caption-dailyhighs' => 'Boki z nejwyšymi pógódnośenjami: $1',
	'articleFeedback-table-caption-dailylows' => 'Boki z nejwyšymi pógódnośenjami: $1',
	'articleFeedback-table-heading-page' => 'Bok',
	'articleFeedback-table-heading-average' => 'Pśerězk',
	'articleFeedback-copy-above-highlow-tables' => 'To jo eksperimentelna funkcija. Pšosym zawóstaj swój komentar na [$1 diskusijnem boku].',
);

/** Greek (Ελληνικά)
 * @author AK
 * @author Geraki
 * @author Glavkos
 * @author Kiolalis
 * @author Omnipaedista
 * @author ZaDiak
 * @author Απεργός
 */
$messages['el'] = array(
	'articlefeedback' => 'Ταμπλό ανατροφοδότησης άρθρου', # Fuzzy
	'articlefeedback-desc' => 'Αξιολόγηση Άρθρου (πιλοτική έκδοση)', # Fuzzy
	'articlefeedback-error' => 'Παρουσιάστηκε σφάλμα. Πρακαλούμε να δοκιμάσετε αργότερα.',
	'articlefeedback-form-switch-label' => 'Βαθμολογήστε αυτή τη σελίδα',
	'articlefeedback-form-panel-title' => 'Βαθμολογήστε αυτή τη σελίδα',
	'articlefeedback-form-panel-explanation' => 'Τι είναι αυτό;',
	'articlefeedback-form-panel-explanation-link' => 'Project:ΑνατροφοδότησηΆρθρου',
	'articlefeedback-form-panel-clear' => 'Καταργήστε αυτή την αξιολόγηση',
	'articlefeedback-form-panel-expertise' => 'Είμαι πολύ καλά πληροφορημένος σχετικά με αυτό το θέμα (προαιρετικό)',
	'articlefeedback-form-panel-expertise-studies' => 'Έχω ένα αντίστοιχο πτυχίο κολλεγίου/πανεπιστημίου',
	'articlefeedback-form-panel-expertise-profession' => 'Είναι μέρος του επαγγέλματος μου',
	'articlefeedback-form-panel-expertise-hobby' => 'Είναι ένα βαθύ  προσωπικό πάθος',
	'articlefeedback-form-panel-expertise-other' => 'Η πηγή της γνώσης μου δεν αναφέρεται εδώ',
	'articlefeedback-form-panel-helpimprove' => 'Θα ήθελα να συμβάλλω  στη βελτίωση της Wikipedia, στείλτε μου ένα e-mail (προαιρετικά)',
	'articlefeedback-form-panel-helpimprove-note' => 'Θα σας στείλουμε ένα μήνυμα e-mail για επιβεβαίωση. Δεν θα γνωστοποιήσουμε την ηλεκτρονική σας διεύθυνση σε τρίτους σύμφωνα με την $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'πολιτική ιδιωτικότητας ανατροφοδότησης',
	'articlefeedback-form-panel-submit' => 'Υποβολή βαθμολογιών',
	'articlefeedback-form-panel-pending' => 'Οι βαθμολογήσεις σας δεν έχουν καταχωρηθεί ακόμη',
	'articlefeedback-form-panel-success' => 'Αποθηκεύτηκαν με επιτυχία',
	'articlefeedback-form-panel-expiry-title' => 'Οι βαθμολογήσεις σας έχουν λήξει',
	'articlefeedback-form-panel-expiry-message' => 'Παρακαλούμε να επανεκτιμήσετε αυτή τη σελίδα και να υποβάλετε νέες βαθμολογίες.',
	'articlefeedback-report-switch-label' => 'Δείτε τις βαθμολογήσεις της σελίδας',
	'articlefeedback-report-panel-title' => 'Βαθμολογήσεις σελίδας',
	'articlefeedback-report-panel-description' => 'Τρέχουσες μέσες βαθμολογίες.',
	'articlefeedback-report-empty' => 'Δεν υπάρχουν αξιολογήσεις',
	'articlefeedback-report-ratings' => '$1 αξιολογήσεις',
	'articlefeedback-field-trustworthy-label' => 'Αξιόπιστη',
	'articlefeedback-field-trustworthy-tip' => 'Αισθάνεστε ότι αυτή η σελίδα αυτή έχει επαρκείς παραπομπές και ότι οι παραπομπές προέρχονται από αξιόπιστες πηγές;',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Δεν διαθέτει αξιόπιστες πηγές',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Λίγες αξιόπιστες πηγές',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Επαρκείς αξιόπιστες πηγές',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Καλές αξιόπιστες πηγές',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Πολύ καλές αξιόπιστες πηγές',
	'articlefeedback-field-complete-label' => 'Πλήρης',
	'articlefeedback-field-complete-tip' => 'Πιστεύετε ότι η σελίδα αυτή καλύπτει τις βασικές θεματικές περιοχές που θα έπρεπε;',
	'articlefeedback-field-complete-tooltip-1' => 'Απουσία των περισσότερων πληροφοριών',
	'articlefeedback-field-complete-tooltip-2' => 'Περιέχει μερικές πληροφορίες',
	'articlefeedback-field-complete-tooltip-3' => 'Περιέχει βασικές πληροφορίες, αλλά με κενά',
	'articlefeedback-field-complete-tooltip-4' => 'Περιέχει τις πιο κρίσιμες πληροφορίες',
	'articlefeedback-field-complete-tooltip-5' => 'Πλήρης κάλυψη',
	'articlefeedback-field-objective-label' => 'Στόχος',
	'articlefeedback-field-objective-tip' => 'Αισθάνεστε ότι η σελίδα αυτή δείχνει μια ίση αντιπροσώπευση όλων των πλευρών σε αυτό το θέμα;',
	'articlefeedback-field-objective-tooltip-1' => 'Βαριά προκατειλημμένη',
	'articlefeedback-field-objective-tooltip-2' => 'Μέτρια προκατειλημμένη',
	'articlefeedback-field-objective-tooltip-3' => 'Ελάχιστα προκατειλημμένη',
	'articlefeedback-field-objective-tooltip-4' => 'Καμιά προφανής προκατάληψη',
	'articlefeedback-field-objective-tooltip-5' => 'Εντελώς αμερόληπτη',
	'articlefeedback-field-wellwritten-label' => 'Καλογραμμένο',
	'articlefeedback-field-wellwritten-tip' => 'Αισθάνεστε ότι αυτή η σελίδα είναι καλά οργανωμένη και γραμμένη;',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Ακατανόητο',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Δυσνόητο',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Επαρκής σαφήνεια',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Καλή σαφήνεια',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Εξαιρετική σαφήνεια',
	'articlefeedback-pitch-reject' => 'Ίσως αργότερα',
	'articlefeedback-pitch-or' => 'ή',
	'articlefeedback-pitch-thanks' => 'Ευχαριστούμε! Οι βαθμολογίες σας έχουν αποθηκευτεί.',
	'articlefeedback-pitch-join-message' => 'Μήπως θέλετε να δημιουργήσετε ένα λογαριασμό;',
	'articlefeedback-pitch-join-body' => 'Ένας λογαριασμός θα σας βοηθήσει να παρακολουθείτε τις αλλαγές σας, να πάρετε μέρος σε συζητήσεις, και να είστε μέρος της κοινότητας.',
	'articlefeedback-pitch-join-accept' => 'Δημιουργήστε έναν λογαριασμό',
	'articlefeedback-pitch-join-login' => 'Είσοδος',
	'articlefeedback-pitch-edit-message' => 'Ξέρατε ότι μπορείτε να επεξεργαστείτε αυτή τη σελίδα;',
	'articlefeedback-pitch-edit-accept' => 'Επεξεργαστείτε αυτή τη σελίδα',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Σημερινά υψηλά και χαμηλά',
	'articleFeedback-table-caption-dailyhighs' => 'Σελίδες με την υψηλότερη βαθμολογία: $1',
	'articleFeedback-table-caption-dailylows' => 'Σελίδες με τις χαμηλότερες βαθμολογίες: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Τα πιο αλλαγμένα αυτής της εβδομάδας',
	'articleFeedback-table-caption-recentlows' => 'Πρόσφατα χαμηλά',
	'articleFeedback-table-heading-page' => 'Σελίδα',
	'articleFeedback-table-heading-average' => 'Μέσος όρος',
	'articleFeedback-copy-above-highlow-tables' => 'Αυτό είναι ένα πειραματικό χαρακτηριστικό. Παρακαλούμε να παράσχετε ανατροφοδότηση στη [$1 σελίδα συζήτησης].',
	'articlefeedback-disable-preference' => 'Να μην εμφανίζεται το εργαλείο ανατροφοδότησης Άρθρων στις σελίδες',
	'articlefeedback-emailcapture-response-body' => 'Γεια σας!

Ευχαριστούμε που δείξατε ενδιαφέρον στη βελτίωση της Βικπέδιας.

Παρακαλούμε να αφιερώσετε λίγο χρόνο για να επιβεβαιώσετε την διεύθυνση ηλεκτρονικού ταχυδρομείου σας πατώντας τον παρακάτω σύνδεσμο: 

$1

Μπορείτε επίσης να επισκεφτείτε:

$2

Και να πληκτρολογήσετε τον ακόλουθο κωδικό επιβεβαίωσης:

$3

Θα επικοινωνήσουμε μαζί σας σύντομα για το πώς μπορείτε να βοηθήσετε στη βελτίωση της Βικιπέδιας.

Εάν δεν ξεκινήσατε εσείς αυτό το αίτημα, παρακαλούμε να αγνοήσετε αυτό το μήνυμα και δε θα σας στείλουμε τίποτα άλλο.

Τις καλύτερες ευχές, και σας ευχαριστούμε,
Η ομάδα της Βικιπέδιας',
);

/** Esperanto (Esperanto)
 * @author Blahma
 * @author Yekrats
 */
$messages['eo'] = array(
	'articlefeedback' => 'Stirpanelo pri artikolo-komentoj',
	'articlefeedback-desc' => 'Artikola takso',
	'articlefeedback-error' => 'Eraro okazis. Bonvolu reprovi baldaŭ.',
	'articlefeedback-form-switch-label' => 'Taksi ĉi tiun paĝon',
	'articlefeedback-form-panel-title' => 'Taksi ĉi tiun paĝon',
	'articlefeedback-form-panel-explanation' => 'Kio estas tio ĉi?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Forigi ĉi tiun taksadon',
	'articlefeedback-form-panel-expertise' => 'Mi estas fake sperta pri ĉi tiu temo (nedeviga)',
	'articlefeedback-form-panel-expertise-studies' => 'Mi havas ĉi-teman diplomon de kolegio aŭ universitato',
	'articlefeedback-form-panel-expertise-profession' => 'Ĝi estas parto de mia profesio.',
	'articlefeedback-form-panel-expertise-hobby' => 'Ĝi estas profunda persona pasio',
	'articlefeedback-form-panel-expertise-other' => 'La fonto de mia scio ne estas montrita ĉi tie',
	'articlefeedback-form-panel-helpimprove' => 'Mi volus helpi plibonigi Vikipedion; sendu al mi retpoŝton (nedeviga)',
	'articlefeedback-form-panel-helpimprove-note' => 'Ni sendos al vi konfirmantan retpoŝton. Ni ne donos vian retpoŝtan adreson al iu ajn ekstere laŭ nia $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Regularo pri respekto de la privateco',
	'articlefeedback-form-panel-submit' => 'Sendi taksojn',
	'articlefeedback-form-panel-pending' => 'Viaj taksoj ne jam estas sendita.',
	'articlefeedback-form-panel-success' => 'Sukcese konservita',
	'articlefeedback-form-panel-expiry-title' => 'Viaj taksoj findatiĝis',
	'articlefeedback-form-panel-expiry-message' => 'Bonvolu retaksi ĉi tiun paĝon kaj sendi novajn taksojn.',
	'articlefeedback-report-switch-label' => 'Vidi taksadon de paĝoj',
	'articlefeedback-report-panel-title' => 'Taksado de paĝoj',
	'articlefeedback-report-panel-description' => 'Aktualaj averaĝaj taksoj.',
	'articlefeedback-report-empty' => 'Sen takso',
	'articlefeedback-report-ratings' => '$1 taksoj',
	'articlefeedback-field-trustworthy-label' => 'Fidinda',
	'articlefeedback-field-trustworthy-tip' => 'Ĉu vi opinias ke ĉi tiu paĝo havas sufiĉajn citaĵojn kaj tiuj citaĵoj venas de fidindaj fontoj?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Mankas fidelaj informofontoj',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Malmultaj fidelaj informofontoj',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Sufiĉaj fidelaj informofontoj',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Bonaj fidelaj informofontoj',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Bonegaj fidelaj informofontoj',
	'articlefeedback-field-complete-label' => 'Kompleta',
	'articlefeedback-field-complete-tip' => 'Ĉu vi opinias ke ĉi tiu paĝo kovras la esencan temon de la subjekto?',
	'articlefeedback-field-complete-tooltip-1' => 'Mankas preskaŭ ĉiu infomo',
	'articlefeedback-field-complete-tooltip-2' => 'Enhavas iom da informo',
	'articlefeedback-field-complete-tooltip-3' => 'Enhavas gravan informon, sed mankas iom',
	'articlefeedback-field-complete-tooltip-4' => 'Enhavas plej gravan informon',
	'articlefeedback-field-complete-tooltip-5' => 'Ampleksa verko',
	'articlefeedback-field-objective-label' => 'Objektiva',
	'articlefeedback-field-objective-tip' => 'Ĉu vi opinias ke ĉi tiu paĝo montras justan reprezentadon de ĉiuj perspektivoj pri la afero?',
	'articlefeedback-field-objective-tooltip-1' => 'Malobjektivega',
	'articlefeedback-field-objective-tooltip-2' => 'Malobjektiva',
	'articlefeedback-field-objective-tooltip-3' => 'Mezoblektiva',
	'articlefeedback-field-objective-tooltip-4' => 'Objektiva',
	'articlefeedback-field-objective-tooltip-5' => 'Objektivega',
	'articlefeedback-field-wellwritten-label' => 'Bone verkita',
	'articlefeedback-field-wellwritten-tip' => 'Ĉu vi opinias ke ĉi tiu paĝo estas bone organizita kaj bone verkita?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Nekomprenebla',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Kofuze',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Sufiĉe klara',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Bone klara',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Bonege klara',
	'articlefeedback-pitch-reject' => 'Eble baldaŭ',
	'articlefeedback-pitch-or' => 'aŭ',
	'articlefeedback-pitch-thanks' => 'Dankon! Viaj taksoj estis konservitaj.',
	'articlefeedback-pitch-join-message' => 'Ĉu vi volus krei konton?',
	'articlefeedback-pitch-join-body' => 'Konto helpos al vi atenti viajn redaktojn, interdiskuti, kaj esti parto de la komunumo.',
	'articlefeedback-pitch-join-accept' => 'Krei konton',
	'articlefeedback-pitch-join-login' => 'Ensaluti',
	'articlefeedback-pitch-edit-message' => 'Ĉu vi scias ke vi povas redakti ĉi tiun paĝon?',
	'articlefeedback-pitch-edit-accept' => 'Redakti ĉi tiun paĝon',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'La altoj kaj malaltoj hodiaŭ',
	'articleFeedback-table-caption-dailyhighs' => 'Paĝoj kun la plej bonaj taksoj: $1',
	'articleFeedback-table-caption-dailylows' => 'Paĝoj kun la plej malbonaj taksoj: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Plej ŝanĝitaj ĉi-semajne',
	'articleFeedback-table-caption-recentlows' => 'Lastatempaj malaltoj',
	'articleFeedback-table-heading-page' => 'Paĝo',
	'articleFeedback-table-heading-average' => 'Averaĝo',
	'articleFeedback-copy-above-highlow-tables' => 'Ĉi tiu estas eksperimenta eco. Bonvolu provizi komentojn en la [$1 diskuto-paĝo].',
	'articlefeedback-dashboard-bottom' => "'''Notu''': Ni eksperimentos plu pri aliaj fojo enmeti artikolojn en kontrolskatoloj. Nune, la kontrolskatoloj inkluzivas la jenaj artikoloj:
* Paĝoj kun la plej bonaj aŭ malbonaj rangoj: artikoloj ricevis almenaŭ 10 taksojn en la lastaj 24 horoj. Averaĝoj estas kalkulitaj laŭ la averaĝaj taskoj faritaj en la lastaj 24 horoj.
* Lastaj malaltaĵoj: Artikoloj ricevantaj 70% aŭ pli malgrandajn (2 steloj aŭ malpli) taksojn en iu kategorio en la lasta 24 horoj. Nur artikoloj ricevantaj almenaŭ 10 taksojn en la lastaj 24 horoj estas inkluzivitaj.",
	'articlefeedback-disable-preference' => 'Ne montri la funkcion pri artikoloj opinioj en paĝoj',
	'articlefeedback-emailcapture-response-body' => 'Saluton!

Dankon por esprimante intereson por helpi plibonigi je {{SITENAME}}.

Bonvolu konfirmi vian retpoŝtadreson klakante la jenan ligilon:

$1

Vi povas ankaŭ viziti:

$2

Kaj enigi la jenan konfirmkodon:

$3

Ni mesaĝos vin baldaŭ pri kiel vi povas plibonigi je {{SITENAME}}.

Se vi ne eksendis ĉi tiun peton, bonvolu ignori ĉi tiu retpoŝto, kaj ni ne sendos al vi ion ajn.

Koran dankon,
La teamo {{SITENAME}}',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Dferg
 * @author Drini
 * @author Fitoschido
 * @author Locos epraix
 * @author Mashandy
 * @author Od1n
 * @author Platonides
 * @author Sanbec
 * @author Translationista
 */
$messages['es'] = array(
	'articlefeedback' => 'Panel de evaluación de artículos',
	'articlefeedback-desc' => 'Evaluación del artículo',
	'articlefeedback-error' => 'Ha ocurrido un error. Por favor inténtalo de nuevo más tarde.',
	'articlefeedback-form-switch-label' => 'Evalúa este artículo',
	'articlefeedback-form-panel-title' => 'Evalúa este artículo',
	'articlefeedback-form-panel-explanation' => '¿Qué es esto?',
	'articlefeedback-form-panel-explanation-link' => 'Project:EvaluaciónArtículo',
	'articlefeedback-form-panel-clear' => 'Quitar esta evaluación',
	'articlefeedback-form-panel-expertise' => 'Estoy muy bien informado sobre este tema (opcional)',
	'articlefeedback-form-panel-expertise-studies' => 'Tengo un grado universitario relevante',
	'articlefeedback-form-panel-expertise-profession' => 'Es parte de mi profesión',
	'articlefeedback-form-panel-expertise-hobby' => 'Es una pasión personal',
	'articlefeedback-form-panel-expertise-other' => 'La fuente de mi conocimiento no está en esta lista',
	'articlefeedback-form-panel-helpimprove' => 'Me gustaría ayudar a mejorar Wikipedia, enviarme un correo electrónico (opcional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Te enviaremos un correo electrónico de confirmación. No compartiremos tu dirección de correo electrónico con terceros por nuestra $1.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'correo@ejemplo.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Declaración de privacidad de los comentarios',
	'articlefeedback-form-panel-submit' => 'Enviar calificaciones',
	'articlefeedback-form-panel-pending' => 'Tu valoración aún no ha sido enviada',
	'articlefeedback-form-panel-success' => 'Guardado correctamente',
	'articlefeedback-form-panel-expiry-title' => 'Tus calificaciones han caducado',
	'articlefeedback-form-panel-expiry-message' => 'Por favor, reevalúa esta página y envía calificaciones nuevas.',
	'articlefeedback-report-switch-label' => 'Ver las calificaciones de la página',
	'articlefeedback-report-panel-title' => 'Evaluaciones de la página',
	'articlefeedback-report-panel-description' => 'Promedio actual de calificaciones.',
	'articlefeedback-report-empty' => 'No hay valoraciones',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|una valoración|$1 valoraciones}}',
	'articlefeedback-field-trustworthy-label' => 'Confiable',
	'articlefeedback-field-trustworthy-tip' => '¿Este artículo posee suficientes referencias y éstas vienen de fuentes de confianza?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Carece de fuentes confiables',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Pocas fuentes confiables',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Fuentes confiables adecuadas',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Buenas fuentes confiables',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Muy buenas fuentes confiables',
	'articlefeedback-field-complete-label' => 'Completo',
	'articlefeedback-field-complete-tip' => '¿Crees que este artículo abarca las áreas esenciales que deberían incluirse sobre el tema?',
	'articlefeedback-field-complete-tooltip-1' => 'Falta mucha información',
	'articlefeedback-field-complete-tooltip-2' => 'Contiene algo de información',
	'articlefeedback-field-complete-tooltip-3' => 'Contiene información clave, pero con carencias',
	'articlefeedback-field-complete-tooltip-4' => 'Contiene la mayoría de información clave',
	'articlefeedback-field-complete-tooltip-5' => 'Cobertura completa',
	'articlefeedback-field-objective-label' => 'Objetivo',
	'articlefeedback-field-objective-tip' => '¿Crees que este artículo muestra una representación justa de todas las perspectivas sobre el tema?',
	'articlefeedback-field-objective-tooltip-1' => 'Fuertemente sesgado',
	'articlefeedback-field-objective-tooltip-2' => 'Sesgo moderado',
	'articlefeedback-field-objective-tooltip-3' => 'Sesgo mínimo',
	'articlefeedback-field-objective-tooltip-4' => 'No hay sesgo evidente',
	'articlefeedback-field-objective-tooltip-5' => 'Totalmente imparcial',
	'articlefeedback-field-wellwritten-label' => 'Bien escrito',
	'articlefeedback-field-wellwritten-tip' => '¿Crees que el artículo está bien organizado y escrito adecuadamente?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Incomprensible',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Difícil de entender',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Suficiente claridad',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Buena claridad',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Claridad excepcional',
	'articlefeedback-pitch-reject' => 'Quizá más tarde',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => '¡Gracias! Se han guardado tus valoraciones.',
	'articlefeedback-pitch-join-message' => '¿Quieres crear una cuenta?',
	'articlefeedback-pitch-join-body' => 'Una cuenta te ayudará a realizar un seguimiento de tus cambios y te permitirá participar en debates y ser parte de la comunidad.',
	'articlefeedback-pitch-join-accept' => 'Crear una cuenta',
	'articlefeedback-pitch-join-login' => 'Iniciar sesión',
	'articlefeedback-pitch-edit-message' => '¿Sabías que puedes editar esta página?',
	'articlefeedback-pitch-edit-accept' => 'Editar esta página',
	'articlefeedback-privacyurl' => 'https://wikimediafoundation.org/wiki/Feedback_privacy_statement/es',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Altibajos de hoy',
	'articleFeedback-table-caption-dailyhighs' => 'Páginas con las calificaciones más altas: $1',
	'articleFeedback-table-caption-dailylows' => 'Páginas con las calificaciones más bajas: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Lo más modificado de la semana',
	'articleFeedback-table-caption-recentlows' => 'Calificaciones bajas recientes',
	'articleFeedback-table-heading-page' => 'Página',
	'articleFeedback-table-heading-average' => 'Promedio',
	'articleFeedback-copy-above-highlow-tables' => 'Esta es una característica experimental. Por favor, proporciona tus comentarios en su [$1 página de discusión].',
	'articlefeedback-dashboard-bottom' => "'''Nota''': Esta es una característica experimental. Por ahora, los tableros incluyen la siguiente información:
* Páginas con las calificaciones más altas y más bajas: para aquellos artículos que han recibido al menos diez calificaciones en las últimas 24 horas, se calcula el promedio de las calificaciones enviadas en dicho período.
* Calificaciones bajas recientes: aquellos artículos que han recibido al menos diez calificaciones en las últimas 24 horas, de las cuales al menos el 70% corresponden a calificaciones bajas (dos estrellas o menos) en cualquiera de las categorías.",
	'articlefeedback-disable-preference' => "No mostrar el ''widget'' de comentarios de artículos en las páginas",
	'articlefeedback-emailcapture-response-body' => '¡Hola!

Te agradecemos el interés por ayudar a mejorar {{SITENAME}}.

Por favor, toma un momento para confirmar tu correo electrónico haciendo clic en el siguiente enlace:

$1

Quizás quieras visitar:

$2

E ingresa el siguiente código de confirmación:

$3

Nos pondremos en contacto contigo con información para para ayudarte a mejorar {{SITENAME}}.

Si tú no realizaste esta solicitud, por favor ignora este correo y no te enviaremos más información.

Agradecidos y con los mejores deseos,
El equipo de {{SITENAME}}.',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'articlefeedback' => 'Artiklite tagasiside ülevaade',
	'articlefeedback-desc' => 'Artikli tagasiside',
	'articlefeedback-error' => 'Ilmnes tõrge. Palun proovi hiljem uuesti.',
	'articlefeedback-form-switch-label' => 'Hinda seda lehekülge',
	'articlefeedback-form-panel-title' => 'Selle lehekülje hindamine',
	'articlefeedback-form-panel-explanation' => 'Mis see on?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Artikli tagasiside',
	'articlefeedback-form-panel-clear' => 'Eemalda see hinnang',
	'articlefeedback-form-panel-expertise' => 'Mul on sellel alal väga head teadmised (valikuline)',
	'articlefeedback-form-panel-expertise-studies' => 'Mul on vastav kõrgharidus',
	'articlefeedback-form-panel-expertise-profession' => 'See on seotud minu elukutsega',
	'articlefeedback-form-panel-expertise-hobby' => 'Ma olen sellest teemast sügavalt huvitatud',
	'articlefeedback-form-panel-expertise-other' => 'Minu teadmiste allikas on nimetamata',
	'articlefeedback-form-panel-helpimprove' => 'Soovin aidata Vikipeediat täiustada. Saatke mulle palun e-kiri. (valikuline)',
	'articlefeedback-form-panel-helpimprove-note' => 'Me saadame sulle kinnitus-e-kirja. $1 järgi ei jaga me sinu e-posti aadressi kellegi kolmandaga.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Privaatsuspõhimõtete',
	'articlefeedback-form-panel-submit' => 'Saada hinnang',
	'articlefeedback-form-panel-pending' => 'Sinu hinnangut pole veel saadetud.',
	'articlefeedback-form-panel-success' => 'Edukalt salvestatud',
	'articlefeedback-form-panel-expiry-title' => 'Sinu hinnangud on aegunud.',
	'articlefeedback-form-panel-expiry-message' => 'Palun iseloomusta uuesti seda lehekülge ja saada uued hinnangud.',
	'articlefeedback-report-switch-label' => 'Vaata leheküljele antud hinnanguid',
	'articlefeedback-report-panel-title' => 'Leheküljele antud hinnangud',
	'articlefeedback-report-panel-description' => 'Praegused keskmised hinnangud',
	'articlefeedback-report-empty' => 'Hinnanguteta',
	'articlefeedback-report-ratings' => '$1 hinnangut',
	'articlefeedback-field-trustworthy-label' => 'Usaldusväärne',
	'articlefeedback-field-trustworthy-tip' => 'Kas sinu meelest on artikkel vajalikul määral viidatud ja kas viidatakse usaldusväärsetele allikatele?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Usaldusväärsed allikad puuduvad',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Vähe usaldusväärseid allikaid',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Sobivad usaldusväärsed allikad',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Head usaldusväärsed allikad',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Väga head usaldusväärsed allikad',
	'articlefeedback-field-complete-label' => 'Täielik',
	'articlefeedback-field-complete-tip' => 'Kas sinu meelest on artiklis kõik põhiline käsitletud?',
	'articlefeedback-field-complete-tooltip-1' => 'Suurem osa teabest puudub',
	'articlefeedback-field-complete-tooltip-2' => 'Osa teabest on olemas',
	'articlefeedback-field-complete-tooltip-3' => 'Olulisim on käsitletud, aga lünklikult',
	'articlefeedback-field-complete-tooltip-4' => 'Suurem osa olulisimast teabest on olemas',
	'articlefeedback-field-complete-tooltip-5' => 'Igakülgne käsitlus',
	'articlefeedback-field-objective-label' => 'Erapooletu',
	'articlefeedback-field-objective-tip' => 'Kas sinu meelest on artiklis kõik vaatenurgad võrdselt esindatud?',
	'articlefeedback-field-objective-tooltip-1' => 'Väga erapoolik',
	'articlefeedback-field-objective-tooltip-2' => 'Erapoolik',
	'articlefeedback-field-objective-tooltip-3' => 'Natuke erapoolik',
	'articlefeedback-field-objective-tooltip-4' => 'Ilmse erapoolikuseta',
	'articlefeedback-field-objective-tooltip-5' => 'Täiesti erapooletu',
	'articlefeedback-field-wellwritten-label' => 'Hästi kirjutatud',
	'articlefeedback-field-wellwritten-tip' => 'Kas sinu meelest on see artikkel hästi üles ehitatud ja kirjutatud?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Arusaamatu',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Raskesti mõistetav',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Piisavalt arusaadav',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Selgesti kirjutatud',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Erakordselt selgesti kirjutatud',
	'articlefeedback-pitch-reject' => 'Ehk hiljem',
	'articlefeedback-pitch-or' => 'või',
	'articlefeedback-pitch-thanks' => 'Suur tänu! Sinu hinnang on salvestatud.',
	'articlefeedback-pitch-join-message' => 'Kas tahtsid konto luua?',
	'articlefeedback-pitch-join-body' => 'Konto abil saad oma muudatustel silma peal hoida, aruteludes osaleda ja olla kogukonna liige.',
	'articlefeedback-pitch-join-accept' => 'Loo konto',
	'articlefeedback-pitch-join-login' => 'Logi sisse',
	'articlefeedback-pitch-edit-message' => 'Kas teadsid, et saad seda lehekülge redigeerida?',
	'articlefeedback-pitch-edit-accept' => 'Redigeeri',
	'articleFeedback-table-caption-dailyhighs' => 'Parimate hinnangutega leheküljed: $1',
	'articleFeedback-table-caption-dailylows' => 'Halvimate hinnangutega leheküljed: $1',
	'articleFeedback-table-caption-recentlows' => 'Viimased madalalt hinnatud artiklid',
	'articleFeedback-table-heading-page' => 'Lehekülg',
	'articleFeedback-table-heading-average' => 'Keskmine',
	'articleFeedback-copy-above-highlow-tables' => 'See on katsefunktsioon. Palun anna [$1 aruteluleheküljel] tagasisidet.',
	'articlefeedback-disable-preference' => 'Ära näita lehekülgedel artikli tagasiside dialoogikasti',
	'articlefeedback-emailcapture-response-body' => 'Tere!

Aitäh, et näitasid üles huvi {{GRAMMAR:genitive|{{SITENAME}}}} täiustamise vastu.

Palun leia hetk, et oma e-posti aadress kinnitada. Selleks klõpsa allolevale lingile:

$1

Samuti võid külastata lehekülge

$2

ja sisestada seal järgmise kinnituskoodi:

$3

Anname sulle peagi teada, kuidas saad {{GRAMMAR:partitive|{{SITENAME}}}} täiustada.

Kui sa pole sellist teadet palunud, siis eira seda e-kirja ja me ei saada sulle rohkem midagi.

Kõike paremat!

{{GRAMMAR:genitive|{{SITENAME}}}} meeskond',
);

/** Basque (euskara)
 * @author Abel2es
 * @author An13sa
 * @author Joxemai
 * @author Theklan
 */
$messages['eu'] = array(
	'articlefeedback' => 'Artikulu feedbackaren arbela',
	'articlefeedback-desc' => 'Artikuluaren ekarpenak',
	'articlefeedback-error' => 'Arazo bat egon da. Saia zaitez beranduago.',
	'articlefeedback-form-switch-label' => 'Kalifikatu orri hau',
	'articlefeedback-form-panel-title' => 'Kalifikatu orri hau',
	'articlefeedback-form-panel-explanation' => 'Zer da hau?',
	'articlefeedback-form-panel-clear' => 'Balorazio hau ezabatu',
	'articlefeedback-form-panel-expertise' => 'Gai honen inguruko ezagutza handia dut (aukerazkoa)',
	'articlefeedback-form-panel-expertise-studies' => 'Unibertsitateko titulazio bat dut gai honetan',
	'articlefeedback-form-panel-expertise-profession' => 'Nire ogibidearen parte da',
	'articlefeedback-form-panel-expertise-hobby' => 'Oso gogoko dudan gai bat da',
	'articlefeedback-form-panel-expertise-other' => 'Nire ezagutzaren jatorria ez da goiko aukeren artean agertzen',
	'articlefeedback-form-panel-helpimprove' => 'Wikipedia hobetzen lagundu nahi dut, bidalidazue e-posta bat (aukeran)',
	'articlefeedback-form-panel-helpimprove-note' => 'E-posta bat bidaliko dizugu baieztatzeko. Ez diogu zure helbidea beste inori bidaliko gure $1-en arabera.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Feedback pribazitate arauak',
	'articlefeedback-form-panel-submit' => 'Bidali balorazioa',
	'articlefeedback-form-panel-pending' => 'Zure balorazioak ez dira oraindik bidali',
	'articlefeedback-form-panel-success' => 'Ondo gorde da',
	'articlefeedback-form-panel-expiry-title' => 'Zure balorazioak iraungi du',
	'articlefeedback-form-panel-expiry-message' => 'Mesedez, berriro ebaluatu orrialde hau eta bidali zure balorazio berria.',
	'articlefeedback-report-switch-label' => 'Ikus orriaren balorazioak',
	'articlefeedback-report-panel-title' => 'Orrialdearen balorazioak',
	'articlefeedback-report-panel-description' => 'Oraingo bataz besteko balorazioa.',
	'articlefeedback-report-empty' => 'Ez dago baloraziorik',
	'articlefeedback-report-ratings' => '$1 balorazio',
	'articlefeedback-field-trustworthy-label' => 'Sinisgarria',
	'articlefeedback-field-complete-label' => 'Osorik',
	'articlefeedback-field-objective-label' => 'Helburua',
	'articlefeedback-field-wellwritten-label' => 'Ondo idatzia',
	'articlefeedback-pitch-reject' => 'Agian beranduago',
	'articlefeedback-pitch-or' => 'edo',
	'articlefeedback-pitch-thanks' => 'Eskerrik asko! Zure balorazioa bidali da.',
	'articlefeedback-pitch-join-message' => 'Kontu bat sortu nahi al zenuen?',
	'articlefeedback-pitch-join-body' => 'Kontu bat sortzeak lagunduko dizu zure aldaketak jarraitzen, eztabaidetan parte hartzen eta komunitatearen parte izaten.',
	'articlefeedback-pitch-join-accept' => 'Kontua sortu',
	'articlefeedback-pitch-join-login' => 'Saioa hasi',
	'articlefeedback-pitch-edit-message' => 'Ba al zenekien artikulu hau alda zenezakeela?',
	'articlefeedback-pitch-edit-accept' => 'Orrialde hau aldatu',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Gaurko goi eta beheak',
	'articleFeedback-table-caption-dailyhighs' => 'Baloraziorik altuena duten orrialdeak: $1',
	'articleFeedback-table-caption-dailylows' => 'Balorazio eskasena duten orrialdeak: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Aste honetan gehien aldatu direnak',
	'articleFeedback-table-caption-recentlows' => 'Balorazio eskasa izan duten azkenak',
	'articleFeedback-table-heading-page' => 'Orrialdea',
	'articleFeedback-table-heading-average' => 'Bataz bestekoa',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Huji
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'articlefeedback' => 'صفحهٔ آمار بازخورد مقاله',
	'articlefeedback-desc' => 'ارزیابی مقاله‌ها',
	'articlefeedback-error' => 'خطایی رخ داده است. لطفا بعداً دوباره سعی کنید.',
	'articlefeedback-form-switch-label' => 'رای دادن به این صفحه',
	'articlefeedback-form-panel-title' => 'رای دادن به این صفحه',
	'articlefeedback-form-panel-explanation' => 'این چیست؟',
	'articlefeedback-form-panel-explanation-link' => 'Project:بازخورد مقاله',
	'articlefeedback-form-panel-clear' => 'حذف این رتبه بندی',
	'articlefeedback-form-panel-expertise' => 'من دربارهٔ این موضوع آگاهی زیادی دارم (اختیاری)',
	'articlefeedback-form-panel-expertise-studies' => 'من یک مدرک دانشگاهی مرتبط دارم',
	'articlefeedback-form-panel-expertise-profession' => 'این بخشی از حرفهٔ من است',
	'articlefeedback-form-panel-expertise-hobby' => 'این یک علاقهٔ شدید شخصی است',
	'articlefeedback-form-panel-expertise-other' => 'منبع دانش من در اینجا فهرست نشده است',
	'articlefeedback-form-panel-helpimprove' => 'من می‌خواهم برای بهبود {{SITENAME}} کمک کنم، به من یک پست الکترونیکی بفرستید (اختیاری)',
	'articlefeedback-form-panel-helpimprove-note' => 'ما به شما یک تأییدیهٔ پست الکترونیکی خواهیم فرستاد. مطابق $1، ما نشانی شما را با هیچ کس به اشتراک نخواهیم گذاشت.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'بیانیهٔ محرمانگی بازخورد',
	'articlefeedback-form-panel-submit' => 'ثبت رأی',
	'articlefeedback-form-panel-pending' => 'رأی شما هنوز ثبت نشده است',
	'articlefeedback-form-panel-success' => 'با موفقیت ذخیره شد',
	'articlefeedback-form-panel-expiry-title' => 'رأی شما منقضی شده است',
	'articlefeedback-form-panel-expiry-message' => 'لطفاً این صفحه را مجدد مورد ارزیابی قرار دهید و رأی جدید را ثبت کنید.',
	'articlefeedback-report-switch-label' => 'مشاهدهٔ آرای صفحه',
	'articlefeedback-report-panel-title' => 'درجه‌بندی صفحه',
	'articlefeedback-report-panel-description' => 'میانگین رتبه بندی‌های فعلی.',
	'articlefeedback-report-empty' => 'بدون رأی',
	'articlefeedback-report-ratings' => '$1 رأی',
	'articlefeedback-field-trustworthy-label' => 'قابل اعتماد',
	'articlefeedback-field-trustworthy-tip' => 'آیا احساس می‌کنید که این صفحه به اندازهٔ کافی مستند می‌باشد و آن اسناد از منابع قابل اعتمادی آمده‌اند؟',
	'articlefeedback-field-trustworthy-tooltip-1' => 'فاقد منابع معتبر',
	'articlefeedback-field-trustworthy-tooltip-2' => 'تعداد کمی معتبر منابع دارد',
	'articlefeedback-field-trustworthy-tooltip-3' => 'منابع معتبر کافی دارد',
	'articlefeedback-field-trustworthy-tooltip-4' => 'منابع معتبر خوب دارد',
	'articlefeedback-field-trustworthy-tooltip-5' => 'منابع معتبر عالی دارد',
	'articlefeedback-field-complete-label' => 'کامل بودن',
	'articlefeedback-field-complete-tip' => 'آیا احساس می‌کنید که این صفحهٔ پوشش کافی در محدودهٔ عنوان دارد که باید داشته باشد؟',
	'articlefeedback-field-complete-tooltip-1' => 'بدون اطلاعات کافی',
	'articlefeedback-field-complete-tooltip-2' => 'شامل اطلاعات کم می‌باشد',
	'articlefeedback-field-complete-tooltip-3' => 'حاوی اطلاعات کلیدی است اما با شکاف',
	'articlefeedback-field-complete-tooltip-4' => 'دارای بیشترین اطلاعات کلیدی است',
	'articlefeedback-field-complete-tooltip-5' => 'پوشش جامع',
	'articlefeedback-field-objective-label' => 'بی‌طرفی',
	'articlefeedback-field-objective-tip' => 'آیا شما احساس می‌کنید که این صفحه بازنمایی عادلانه از را تمام دیدگاه مسئله، نشان می‌دهد؟',
	'articlefeedback-field-objective-tooltip-1' => 'به شدت مغرضانه',
	'articlefeedback-field-objective-tooltip-2' => 'تعصب متوسط',
	'articlefeedback-field-objective-tooltip-3' => 'تعصب حداقل',
	'articlefeedback-field-objective-tooltip-4' => 'بدون تعصب آشکار',
	'articlefeedback-field-objective-tooltip-5' => 'کاملا بی‌غرض',
	'articlefeedback-field-wellwritten-label' => 'خوب نوشته شده',
	'articlefeedback-field-wellwritten-tip' => 'آیا شما احساس می کنید که این صفحه به خوبی سازمان یافته و خوب نوشته شده است؟',
	'articlefeedback-field-wellwritten-tooltip-1' => 'دور از فهم',
	'articlefeedback-field-wellwritten-tooltip-2' => 'درک دشوار',
	'articlefeedback-field-wellwritten-tooltip-3' => 'وضوح کافی',
	'articlefeedback-field-wellwritten-tooltip-4' => 'وضوح خوب',
	'articlefeedback-field-wellwritten-tooltip-5' => 'وضوح استثنایی',
	'articlefeedback-pitch-reject' => 'شاید بعداً',
	'articlefeedback-pitch-or' => 'یا',
	'articlefeedback-pitch-thanks' => 'با تشکر! رتبه‌بندی‌های شما، ذخیره شده‌است.',
	'articlefeedback-pitch-join-message' => 'می‌خواستید یک حساب کاربری ایجاد کنید؟',
	'articlefeedback-pitch-join-body' => 'یک حساب کاربری به شما کمک می‌کند ویرایش‌هایتان را پی‌گیری کنید، در بحث‌ها درگیر شوید، و بخشی از جامعه باشید.',
	'articlefeedback-pitch-join-accept' => 'ایجاد یک حساب کاربری',
	'articlefeedback-pitch-join-login' => 'ورود به سامانه',
	'articlefeedback-pitch-edit-message' => 'آیا می‌دانید که می‌توانید این صفحه را ویرایش کنید؟',
	'articlefeedback-pitch-edit-accept' => 'ویرایش این صفحه',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement/fa',
	'articleFeedback-table-caption-dailyhighsandlows' => 'بالاترین‌ها و پایین‌ترین‌های امروز',
	'articleFeedback-table-caption-dailyhighs' => 'صفحه‌های دارای بالاترین رتبه: $1',
	'articleFeedback-table-caption-dailylows' => 'صفحه‌های دارای پایین‌ترین رتبه: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'بیشترین تغییر این هفته',
	'articleFeedback-table-caption-recentlows' => 'سطوح پایین اخیر',
	'articleFeedback-table-heading-page' => 'صفحه',
	'articleFeedback-table-heading-average' => 'میانگین',
	'articleFeedback-copy-above-highlow-tables' => 'این یک ویژگی تجربی است.  لطفاً بازخورد را در [$1 صفحهٔ بحث] ارائه دهید.',
	'articlefeedback-disable-preference' => 'ابزار نظرسنجی مقاله را در صفحه‌ها نشان نده',
	'articlefeedback-emailcapture-response-body' => 'سلام!

از شما برای ابراز علاقه در بهبود {{SITENAME}} تشکر می‌کنم.

لطفاً لحظه‌ای برای تأیید پست الکترونیکی خود با کلیک بر روی پیوند مقابل وقت بگذارید: 

$1

شما همچنین می‌توانید صفحهٔ مقابل را مشاهده کنید:

$2

و کد تأیید مقابل را وارد کنید:

$3

ما به زودی با شما برای چگونگی کمک به {{SITENAME}} تماس می‌گیریم.

اگر شما این درخواست را نکرده بودید، لطفاً این درخواست را نادیده بگیرید و ما چیز دیگری برای شما ارسال نمی‌کنیم.

با تشکر از شما، بهترین آرزوها را برایتان داریم،
گروه {{SITENAME}}',
);

/** Finnish (suomi)
 * @author Nedergard
 * @author Nike
 * @author Olli
 * @author Pxos
 */
$messages['fi'] = array(
	'articlefeedback' => 'Sivujen palautteen koostesivu',
	'articlefeedback-desc' => 'Sivujen palaute',
	'articlefeedback-error' => 'Virhe ilmaantui. Yritä myöhemmin uudelleen.',
	'articlefeedback-form-switch-label' => 'Anna tälle sivulle arvosana',
	'articlefeedback-form-panel-title' => 'Anna tälle sivulle arvosana',
	'articlefeedback-form-panel-explanation' => 'Mikä tämä on?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Sivujen palaute',
	'articlefeedback-form-panel-clear' => 'Poista tämä arvostelu',
	'articlefeedback-form-panel-expertise' => 'Tunnen tämän aihepiirin hyvin (vapaaehtoinen)',
	'articlefeedback-form-panel-expertise-studies' => 'Minulla on vastaava yliopiston tai ammattioppilaitoksen loppututkinto',
	'articlefeedback-form-panel-expertise-profession' => 'Tämä on osa ammattiani',
	'articlefeedback-form-panel-expertise-hobby' => 'Olen erittäin kiinnostunut aiheesta',
	'articlefeedback-form-panel-expertise-other' => 'Tietojeni lähde ei ole näkyvillä tässä',
	'articlefeedback-form-panel-helpimprove' => 'Haluaisin auttaa Wikipedian kehittämisessä, lähettäkää minulle sähköposti (vapaaehtoinen)',
	'articlefeedback-form-panel-helpimprove-note' => 'Lähetämme sinulle vahvistussähköpostin. Emme jaa osoitettasi kenellekään, katso $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'palautteen tietosuoja',
	'articlefeedback-form-panel-submit' => 'Lähetä arvostelut',
	'articlefeedback-form-panel-pending' => 'Arvostelujasi ei ole vielä lähetetty',
	'articlefeedback-form-panel-success' => 'Tallennus onnistui',
	'articlefeedback-form-panel-expiry-title' => 'Arvostelusi ovat vanhentuneet',
	'articlefeedback-form-panel-expiry-message' => 'Arvostele sivu uudelleen ja lähetä uudet arvostelut.',
	'articlefeedback-report-switch-label' => 'Näytä sivun arvostelut',
	'articlefeedback-report-panel-title' => 'Sivun arvostelut',
	'articlefeedback-report-panel-description' => 'Arvosanojen keskiarvo tällä hetkellä.',
	'articlefeedback-report-empty' => 'Ei arvosteluja',
	'articlefeedback-report-ratings' => '$1 arvostelua',
	'articlefeedback-field-trustworthy-label' => 'Luotettavuus',
	'articlefeedback-field-trustworthy-tip' => 'Onko tällä sivulla mielestäsi riittävät lähdeviitteet ja viittaavaatko ne luotettaviin lähteisiin?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Ei käytä luotettavia lähteitä',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Muutamia luotettavia lähteitä',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Riittävät luotettavat lähteet',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Hyvät luotettavat lähteet',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Erinomaiset luotettavat lähteet',
	'articlefeedback-field-complete-label' => 'Kattavuus',
	'articlefeedback-field-complete-tip' => 'Kattaako tämä sivu mielestäsi kaikki olennaiset asiat aiheesta?',
	'articlefeedback-field-complete-tooltip-1' => 'Suurin osa tiedoista puuttuu',
	'articlefeedback-field-complete-tooltip-2' => 'Sisältää joitain tietoja',
	'articlefeedback-field-complete-tooltip-3' => 'Sisältää perustiedot, mutta puutteitakin on',
	'articlefeedback-field-complete-tooltip-4' => 'Sisältää suurimman osan perustiedoista',
	'articlefeedback-field-complete-tooltip-5' => 'Kattavat tiedot',
	'articlefeedback-field-objective-label' => 'Puolueettomuus',
	'articlefeedback-field-objective-tip' => 'Onko sinun mielestäsi tällä sivulla tasapuolinen näkökulma asioihin?',
	'articlefeedback-field-objective-tooltip-1' => 'Hyvin puolueellinen',
	'articlefeedback-field-objective-tooltip-2' => 'Jonkin verran puolueellinen',
	'articlefeedback-field-objective-tooltip-3' => 'Vähän puolueellinen',
	'articlefeedback-field-objective-tooltip-4' => 'Ei ilmeistä puolueellisuutta',
	'articlefeedback-field-objective-tooltip-5' => 'Täysin puolueeton',
	'articlefeedback-field-wellwritten-label' => 'Hyvin kirjoitettu',
	'articlefeedback-field-wellwritten-tip' => 'Onko tämä sivu mielestäsi hyvin jäsennelty ja kirjoitettu?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Erittäin sekava',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Vaikea ymmärtää',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Riittävän selkeä',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Hyvin selkeä',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Poikkeuksellisen selkeä',
	'articlefeedback-pitch-reject' => 'Ehkä myöhemmin',
	'articlefeedback-pitch-or' => 'tai',
	'articlefeedback-pitch-thanks' => 'Kiitos! Arvostelusi on tallennettu.',
	'articlefeedback-pitch-join-message' => 'Halusitko luoda käyttäjätunnuksen?',
	'articlefeedback-pitch-join-body' => 'Tunnus auttaa sinua seuraamaan omia muutoksiasi, osallistumaan keskusteluihin, ja lisäksi olet osa yhteisöä.',
	'articlefeedback-pitch-join-accept' => 'Luo tunnus',
	'articlefeedback-pitch-join-login' => 'Kirjaudu sisään',
	'articlefeedback-pitch-edit-message' => 'Tiesitkö, että voit muokata tätä sivua?',
	'articlefeedback-pitch-edit-accept' => 'Muokkaa tätä sivua',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Tämän päivän ennätykset',
	'articleFeedback-table-caption-dailyhighs' => 'Sivut, joilla on parhaimmat arvostelut: $1',
	'articleFeedback-table-caption-dailylows' => 'Sivut, joilla on huonoimmat arvostelut: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Tällä viikolla eniten muutettu',
	'articleFeedback-table-caption-recentlows' => 'Viimeisimmät huonot arvostelut',
	'articleFeedback-table-heading-page' => 'Sivu',
	'articleFeedback-table-heading-average' => 'Keskiarvo',
	'articleFeedback-copy-above-highlow-tables' => 'Tämä on kokeellinen ominaisuus.  Anna palautetta [$1 keskustelusivulla].',
	'articlefeedback-dashboard-bottom' => "'''Huomautus''': Jatkamme sivujen arvostelukokeiluja näillä alustoilla. Tällä hetkellä arvostelu on näkyvillä seuraavan kaltaisissa sivuissa:
* Sivut, joilla on parhaimmat/huonoimmat arvostelut: sivut, jotka ovat saaneet ainakin 10 arvostelua viimeisten 24 tunnin aikana.  Keskiarvo lasketaan kaikista arvosanoista, jotka on lähetetty viimeisten 24 tuntien aikana.
* Viimeisimmät huonot arvostelut: sivut, jotka ovat saaneet 70 % tai enemmän huonoja (2 tähteä tai vähemmän) arvosteluja missä tahansa luokassa viimeisten 24  tunnin aikana. Vain sivut, joille on tullut ainakin 10 arvostelua viimeisten 24  tunnin aikana otetaan mukaan.",
	'articlefeedback-disable-preference' => 'Älä näytä Sivun palaute -toimintoa sivuilla',
	'articlefeedback-emailcapture-response-body' => 'Hei!

Kiitos mielenkiinnon osoittamisesta sivun {{SITENAME}} parantamiseen.

Käytäthän hetken sähköpostiosoitteesi vahvistamiseen napsauttamalla allaolevaa linkkiä:

$1

Voit myös käydä:

$2

Ja syöttää seuraavan vahvistuskoodin:

$3

Otamme sinuun pian yhteyttä, ja kerromme kuinka voit auttaa sivuston {{SITENAME}} parantamisessa.

Jos et tehnyt itse tätä pyyntöä, hylkää sähköposti ja emme lähetä sinulle enää uutta viestiä.

Kiitos! Terveisin,
{{SITENAME}} tiimi',
);

/** French (français)
 * @author Boniface
 * @author Crochet.david
 * @author F. Cosoleto
 * @author Faure.thomas
 * @author Gomoko
 * @author IAlex
 * @author Jean-Frédéric
 * @author Od1n
 * @author Peter17
 * @author Seb35
 * @author Sherbrooke
 * @author Urhixidur
 * @author Verdy p
 * @author Wikinade
 */
$messages['fr'] = array(
	'articlefeedback' => 'Tableau de bord de l’évaluation d’article',
	'articlefeedback-desc' => 'Évaluation d’article',
	'articlefeedback-error' => 'Une erreur s’est produite. Veuillez réessayer plus tard.',
	'articlefeedback-form-switch-label' => 'Évaluer cette page',
	'articlefeedback-form-panel-title' => 'Évaluer cette page',
	'articlefeedback-form-panel-explanation' => 'Qu’est-ce que ceci ?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Supprimer cette évaluation',
	'articlefeedback-form-panel-expertise' => 'Je connais très bien ce sujet (facultatif)',
	'articlefeedback-form-panel-expertise-studies' => "Je suis diplômé(e) de l'enseignement supérieur (université ou grande école)",
	'articlefeedback-form-panel-expertise-profession' => 'Cela fait partie de ma profession',
	'articlefeedback-form-panel-expertise-hobby' => 'C’est une passion profonde et personnelle',
	'articlefeedback-form-panel-expertise-other' => 'La source de ma connaissance n’est pas répertoriée ici',
	'articlefeedback-form-panel-helpimprove' => "J’aimerais contribuer à l'amélioration de {{SITENAME}}, envoyez-moi un courriel (facultatif)",
	'articlefeedback-form-panel-helpimprove-note' => 'Nous vous enverrons un courriel de confirmation. Nous ne communiquerons pas votre adresse électronique à des tiers (selon $1).',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'courriel@exemple.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Politique de confidentialité',
	'articlefeedback-form-panel-submit' => 'Soumettre une évaluation',
	'articlefeedback-form-panel-pending' => 'Votre évaluation n’a pas encore été enregistrée',
	'articlefeedback-form-panel-success' => 'Enregistré avec succès',
	'articlefeedback-form-panel-expiry-title' => 'Votre évaluation a expiré',
	'articlefeedback-form-panel-expiry-message' => 'Veuillez réévaluer cette page et soumettre votre nouvelle évaluation.',
	'articlefeedback-report-switch-label' => 'Voir les évaluations de la page',
	'articlefeedback-report-panel-title' => 'Évaluation des pages',
	'articlefeedback-report-panel-description' => 'Notations moyennes actuelles.',
	'articlefeedback-report-empty' => 'Aucune évaluation',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|une notation|$1 notations}}',
	'articlefeedback-field-trustworthy-label' => 'Digne de confiance',
	'articlefeedback-field-trustworthy-tip' => 'Pensez-vous que cette page soit étayée de suffisamment de références et que celles-ci proviennent de sources fiables ?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Manque de sources fiables',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Peu de sources fiables',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Sources fiables suffisantes',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Bonnes sources fiables',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Très bonnes sources fiables',
	'articlefeedback-field-complete-label' => 'Complet',
	'articlefeedback-field-complete-tip' => 'Pensez-vous que cette page couvre les aspects essentiels du sujet ?',
	'articlefeedback-field-complete-tooltip-1' => 'Il manque la plupart des informations',
	'articlefeedback-field-complete-tooltip-2' => 'Il y a quelques informations',
	'articlefeedback-field-complete-tooltip-3' => 'Il y a les informations clés, mais avec des manques',
	'articlefeedback-field-complete-tooltip-4' => 'Contient la plupart des informations clés',
	'articlefeedback-field-complete-tooltip-5' => 'Couverture exhaustive',
	'articlefeedback-field-objective-label' => 'Impartial',
	'articlefeedback-field-objective-tip' => 'Pensez-vous que cette page fournit une présentation équitable de toutes les perspectives du sujet traité ?',
	'articlefeedback-field-objective-tooltip-1' => 'Fortement biaisé',
	'articlefeedback-field-objective-tooltip-2' => 'Biais modérés',
	'articlefeedback-field-objective-tooltip-3' => 'Biais minimal',
	'articlefeedback-field-objective-tooltip-4' => 'Pas de biais évident',
	'articlefeedback-field-objective-tooltip-5' => 'Pas du tout biaisé',
	'articlefeedback-field-wellwritten-label' => 'Bien écrit',
	'articlefeedback-field-wellwritten-tip' => 'Pensez-vous que cette page soit bien organisée et bien écrite ?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Incompréhensible',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Difficile à comprendre',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Clarté satisfaisante',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Bonne clarté',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Clarté exceptionnelle',
	'articlefeedback-pitch-reject' => 'Peut-être plus tard',
	'articlefeedback-pitch-or' => 'ou',
	'articlefeedback-pitch-thanks' => 'Merci ! Votre évaluation a bien été enregistrée.',
	'articlefeedback-pitch-join-message' => 'Vouliez-vous créer un compte ?',
	'articlefeedback-pitch-join-body' => 'Avoir un compte vous permettra de garder trace de vos modifications, de participer aux discussions et de faire partie de la communauté.',
	'articlefeedback-pitch-join-accept' => 'Créer un compte',
	'articlefeedback-pitch-join-login' => 'Se connecter',
	'articlefeedback-pitch-edit-message' => 'Saviez-vous que vous pouvez modifier cette page ?',
	'articlefeedback-pitch-edit-accept' => 'Modifier cette page',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement/fr',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Les hauts et les bas d’aujourd’hui',
	'articleFeedback-table-caption-dailyhighs' => 'Pages ayant obtenu les évaluations les plus hautes : $1',
	'articleFeedback-table-caption-dailylows' => 'Pages ayant obtenu les évaluations les plus basses : $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Les plus modifiés cette semaine',
	'articleFeedback-table-caption-recentlows' => 'Dernières cotes basses',
	'articleFeedback-table-heading-page' => 'Page',
	'articleFeedback-table-heading-average' => 'Moyenne',
	'articleFeedback-copy-above-highlow-tables' => 'Il s’agit d’une fonctionnalité expérimentale. Merci de laisser vos commentaires sur la [$1 page de discussion].',
	'articlefeedback-dashboard-bottom' => "'''Note''' : Nous allons continuer à expérimenter avec différentes façons de représenter les articles dans ces tableaux de bord. Ceux-ci contiennent les articles suivants :
* pages qui ont les taux les plus faibles ou plus élevés : ce sont les articles qui ont reçu au moins 10 évaluations dans les dernières 24 heures. Les moyennes sont obtenues en calculant la moyenne de toutes les évaluations des dernières 24 heures.
* bas récents : articles qui ont reçu deux étoiles ou moins, 70 % du temps ou plus, peu importe la catégorie dans les dernières 24 heures. Cela s’applique seulement aux articles qui ont reçu au moins 10 évaluations dans les dernières 24 heures.",
	'articlefeedback-disable-preference' => 'Ne pas afficher le widget Évaluation d’article sur les pages',
	'articlefeedback-emailcapture-response-body' => "Bonjour !

Merci pour l'intérêt que vous portez à l'amélioration de {{SITENAME}}.

Veuillez, s'il vous plaît, confirmer votre adresse électronique en cliquant sur le lien ci-dessous :

$1

Vous pouvez aussi visiter :

$2

et entrer le code de confirmation suivant :

$3

Nous vous contacterons rapidement pour vous faire savoir comment vous pouvez contribuer à l'amélioration de {{SITENAME}}.

En revanche si vous n'êtes pas à l'origine de cette demande, il vous suffit d'ignorer ce courriel : nous ne vous en enverrons aucun autre.

Merci à vous et à très bientôt,

L’équipe de {{SITENAME}}",
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'articlefeedback' => 'Grelye de bôrd de l’èvaluacion d’articllo',
	'articlefeedback-desc' => 'Èvaluacion d’articllo',
	'articlefeedback-error' => 'Una èrror est arrevâ. Volyéd tornar èprovar ples târd.',
	'articlefeedback-form-switch-label' => 'Èstimar cela pâge',
	'articlefeedback-form-panel-title' => 'Èstimar cela pâge',
	'articlefeedback-form-panel-explanation' => 'Qu’est-o qu’il est ?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Èstimacion d’articllo',
	'articlefeedback-form-panel-clear' => 'Enlevar cela èstimacion',
	'articlefeedback-form-panel-expertise' => 'Su brâvament bien enformâ sur cél sujèt (u chouèx)',
	'articlefeedback-form-panel-expertise-studies' => 'Dètegno un diplomo d’ètudes supèriores (univèrsitât ou ben granta ècoula)',
	'articlefeedback-form-panel-expertise-profession' => 'Cen fât partia de mon metiér',
	'articlefeedback-form-panel-expertise-hobby' => 'O est una passion provonda a mè',
	'articlefeedback-form-panel-expertise-other' => 'La sôrsa de ma cognessence est pas listâ ique',
	'articlefeedback-form-panel-helpimprove' => 'J’amerê édiér a mèlyorar Vouiquipèdia, mandâd-mè un mèssâjo (u chouèx)',
	'articlefeedback-form-panel-helpimprove-note' => 'Nos vos manderens un mèssâjo de confirmacion. Nos partagierens pas voutra adrèce èlèctronica avouéc des parties de defôr, d’aprés $1.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'mèssâjo@ègzemplo.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Dècllaracion de confidencialitât des avis',
	'articlefeedback-form-panel-submit' => 'Mandar les èstimacions',
	'articlefeedback-form-panel-pending' => 'Voutres èstimacions ont p’oncor étâ somêses',
	'articlefeedback-form-panel-success' => 'Encartâ avouéc reusséta',
	'articlefeedback-form-panel-expiry-title' => 'Voutres èstimacions ont èxpirâs',
	'articlefeedback-form-panel-expiry-message' => 'Volyéd tornar èstimar cela pâge et pués sometre voutra novèla èstimacion.',
	'articlefeedback-report-switch-label' => 'Vêre les èstimacions de la pâge',
	'articlefeedback-report-panel-title' => 'Èstimacions de la pâge',
	'articlefeedback-report-panel-description' => 'Èstimacions moyenes d’ora.',
	'articlefeedback-report-empty' => 'Gins d’èstimacion',
	'articlefeedback-report-ratings' => 'Èstimacions $1',
	'articlefeedback-field-trustworthy-label' => 'Digno de confiance',
	'articlefeedback-field-trustworthy-tip' => 'Pensâd-vos que cela pâge at sufisament de citacions et que cetes vegnont de sôrses dignes de fiance ?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Manca de sôrses fiâbles',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Pou de sôrses fiâbles',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Sôrses fiâbles sufisentes',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Bônes sôrses fiâbles',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Rudes bônes sôrses fiâbles',
	'articlefeedback-field-complete-label' => 'Complèt',
	'articlefeedback-field-complete-tip' => 'Pensâd-vos que cela pâge côvre los tèmos èssencièls du sujèt ?',
	'articlefeedback-field-complete-tooltip-1' => 'Manque la plepârt de les enformacions',
	'articlefeedback-field-complete-tooltip-2' => 'Y at quârques enformacions',
	'articlefeedback-field-complete-tooltip-3' => 'Y at les enformacions cllâfs, mas avouéc des manques',
	'articlefeedback-field-complete-tooltip-4' => 'Y at la plepârt de les enformacions cllâfs',
	'articlefeedback-field-complete-tooltip-5' => 'Cuvèrta complèta',
	'articlefeedback-field-objective-label' => 'Emparciâl',
	'articlefeedback-field-objective-tip' => 'Pensâd-vos que cela pâge balye una presentacion èquitâbla de totes les pèrspèctives du sujèt trètâ ?',
	'articlefeedback-field-objective-tooltip-1' => 'Fortament bièsiê',
	'articlefeedback-field-objective-tooltip-2' => 'Biès moderâs',
	'articlefeedback-field-objective-tooltip-3' => 'Biès minimâl',
	'articlefeedback-field-objective-tooltip-4' => 'Gins de biès visiblo',
	'articlefeedback-field-objective-tooltip-5' => 'Pas du tot bièsiê',
	'articlefeedback-field-wellwritten-label' => 'Bien ècrit',
	'articlefeedback-field-wellwritten-tip' => 'Pensâd-vos que cela pâge seye bien organisâ et bien ècrita ?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Pas compréhensiblo',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Mâlésiê a comprendre',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Cllartât justa',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Bôna cllartât',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Cllartât èxcèpcionèla',
	'articlefeedback-pitch-reject' => 'Pôt-étre ples târd',
	'articlefeedback-pitch-or' => 'ou ben',
	'articlefeedback-pitch-thanks' => 'Grant-marci ! Voutra èstimacion at étâ encartâ.',
	'articlefeedback-pitch-join-message' => 'Volévâd-vos fâre un compto ?',
	'articlefeedback-pitch-join-body' => 'Un compto vos édierat a siuvre voutros changements, vos molyér dens les discussions et fâre partia de la comunôtât.',
	'articlefeedback-pitch-join-accept' => 'Fâre un compto',
	'articlefeedback-pitch-join-login' => 'Sè branchiér',
	'articlefeedback-pitch-edit-message' => 'Saviâd-vos que vos pouede changiér cela pâge ?',
	'articlefeedback-pitch-edit-accept' => 'Changiér ceta pâge',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Los hôts et bâs d’houé',
	'articleFeedback-table-caption-dailyhighs' => 'Pâges avouéc quotes les ples hôtes : $1',
	'articleFeedback-table-caption-dailylows' => 'Pâges avouéc quotes les ples bâsses : $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Los ples changiês de cela semana',
	'articleFeedback-table-caption-recentlows' => 'Dèrriérs bâs',
	'articleFeedback-table-heading-page' => 'Pâge',
	'articleFeedback-table-heading-average' => 'Moyena',
	'articleFeedback-copy-above-highlow-tables' => 'O est una fonccionalitât èxpèrimentâla. Volyéd balyér voutron avis sur la [$1 pâge de discussion].',
	'articlefeedback-dashboard-bottom' => "'''Nota :''' nos volens continuar a èxpèrimentar difèrentes façons de reprèsentar los articllos dens celos tablôs de bôrd.  Ora, celos contegnont cetos articllos :
* pâges qu’ont les quotes les ples hôtes / fêbles : sont los articllos qu’ont reçus u muens 10 èstimacions dens les 24 hores passâs.  Les moyenes sont avues en calculent la moyena de totes les èstimacions de les 24 hores passâs.
* bâs novéls : sont los articllos qu’ont reçus 70 % ou ben una quota ples fêbla (2 ètêles ou ben muens) dens una catègorie quinta que seye dens les 24 hores passâs. Cen s’aplique ren qu’ux articllos qu’ont reçus u muens 10 èstimacions dens les 24 hores passâs.",
	'articlefeedback-disable-preference' => 'Pas fâre vêre lo vouidgèt Èstimacion d’articllo sur les pâges',
	'articlefeedback-emailcapture-response-body' => 'Bonjorn !

Grant-marci d’avêr èxprimâ voutron entèrèt por édiér a mèlyorar {{SITENAME}}.

Volyéd prendre un moment por confirmar voutra adrèce èlèctronica en cliquent sur lo lim ce-desot : 

$1

Vos pouede asse-ben visitar :

$2

et pués buchiér ceti code de confirmacion :

$3

Nos nos volens d’abôrd veriér vers vos avouéc la façon que vos pouede édiér a mèlyorar {{SITENAME}}.

Se vos éd pas fêt cela demanda, volyéd ignorar ceti mèssâjo et pués nos vos manderens ren d’ôtro.

Mèlyors vôs, et grant-marci,

L’èquipa de {{SITENAME}}',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'articlefeedback-pitch-join-login' => 'Logáil isteach',
	'articlefeedback-pitch-edit-accept' => 'Athraigh an lch seo',
	'articleFeedback-table-heading-page' => 'Leathanach',
);

/** Galician (galego)
 * @author F. Cosoleto
 * @author Toliño
 */
$messages['gl'] = array(
	'articlefeedback' => 'Panel de avaliación de artigos',
	'articlefeedback-desc' => 'Avaliación de artigos',
	'articlefeedback-error' => 'Houbo un erro. Inténteo de novo máis tarde.',
	'articlefeedback-form-switch-label' => 'Avaliar esta páxina',
	'articlefeedback-form-panel-title' => 'Avaliar esta páxina',
	'articlefeedback-form-panel-explanation' => 'Que é isto?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Avaliación de artigos',
	'articlefeedback-form-panel-clear' => 'Eliminar a avaliación',
	'articlefeedback-form-panel-expertise' => 'Estou moi ben informado sobre este tema (opcional)',
	'articlefeedback-form-panel-expertise-studies' => 'Teño un grao escolar ou universitario pertinente',
	'articlefeedback-form-panel-expertise-profession' => 'É parte da miña profesión',
	'articlefeedback-form-panel-expertise-hobby' => 'É unha das miñas afeccións persoais',
	'articlefeedback-form-panel-expertise-other' => 'A fonte do meu coñecemento non está nesta lista',
	'articlefeedback-form-panel-helpimprove' => 'Gustaríame axudar a mellorar a Wikipedia; enviádeme un correo electrónico (opcional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Enviarémoslle un correo electrónico de confirmación. Non compartiremos o seu enderezo con terceiras partes fóra da nosa $1',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'correo@exemplo.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'declaración de confidencialidade dos comentarios',
	'articlefeedback-form-panel-submit' => 'Enviar a avaliación',
	'articlefeedback-form-panel-pending' => 'Non enviou as súas valoracións',
	'articlefeedback-form-panel-success' => 'Gardado correctamente',
	'articlefeedback-form-panel-expiry-title' => 'As súas avaliacións caducaron',
	'articlefeedback-form-panel-expiry-message' => 'Volva avaliar esta páxina e envíe as novas valoracións.',
	'articlefeedback-report-switch-label' => 'Ollar as avaliacións da páxina',
	'articlefeedback-report-panel-title' => 'Avaliacións da páxina',
	'articlefeedback-report-panel-description' => 'Avaliacións medias.',
	'articlefeedback-report-empty' => 'Sen avaliacións',
	'articlefeedback-report-ratings' => '$1 avaliacións',
	'articlefeedback-field-trustworthy-label' => 'Fidedigno',
	'articlefeedback-field-trustworthy-tip' => 'Cre que esta páxina ten citas suficientes e que estas son de fontes fiables?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Carece de fontes fidedignas',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Ten poucas fontes respectables',
	'articlefeedback-field-trustworthy-tooltip-3' => 'As fontes son suficientes',
	'articlefeedback-field-trustworthy-tooltip-4' => 'As fontes son boas',
	'articlefeedback-field-trustworthy-tooltip-5' => 'As fontes son excelentes',
	'articlefeedback-field-complete-label' => 'Completo',
	'articlefeedback-field-complete-tip' => 'Cre que esta páxina aborda as áreas esenciais do tema que debería?',
	'articlefeedback-field-complete-tooltip-1' => 'Carece da información máis importante',
	'articlefeedback-field-complete-tooltip-2' => 'Contén información parcial',
	'articlefeedback-field-complete-tooltip-3' => 'Contén a información clave, pero aínda faltan datos',
	'articlefeedback-field-complete-tooltip-4' => 'Contén a meirande parte da información clave',
	'articlefeedback-field-complete-tooltip-5' => 'Contén toda a información importante',
	'articlefeedback-field-objective-label' => 'Imparcial',
	'articlefeedback-field-objective-tip' => 'Cre que esta páxina mostra unha representación xusta de todas as perspectivas do tema?',
	'articlefeedback-field-objective-tooltip-1' => 'Moi parcial',
	'articlefeedback-field-objective-tooltip-2' => 'Moderadamente parcial',
	'articlefeedback-field-objective-tooltip-3' => 'Minimamente parcial',
	'articlefeedback-field-objective-tooltip-4' => 'Sen parcialidades obvias',
	'articlefeedback-field-objective-tooltip-5' => 'Completamente imparcial',
	'articlefeedback-field-wellwritten-label' => 'Ben escrito',
	'articlefeedback-field-wellwritten-tip' => 'Cre que esta páxina está ben organizada e escrita?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Incomprensible',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Difícil de entender',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Claridade adecuada',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Claridade boa',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Claridade excepcional',
	'articlefeedback-pitch-reject' => 'Talvez logo',
	'articlefeedback-pitch-or' => 'ou',
	'articlefeedback-pitch-thanks' => 'Grazas! Gardáronse as súas valoracións.',
	'articlefeedback-pitch-join-message' => 'Quere crear unha conta?',
	'articlefeedback-pitch-join-body' => 'Unha conta axudará a seguir as súas edicións, participar en conversas e ser parte da comunidade.',
	'articlefeedback-pitch-join-accept' => 'Crear unha conta',
	'articlefeedback-pitch-join-login' => 'Rexistro',
	'articlefeedback-pitch-edit-message' => 'Sabía que pode editar esta páxina?',
	'articlefeedback-pitch-edit-accept' => 'Editar esta páxina',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement/gl',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Os altos e baixos de hoxe',
	'articleFeedback-table-caption-dailyhighs' => 'Artigos coas valoracións máis altas: $1',
	'articleFeedback-table-caption-dailylows' => 'Artigos coas valoracións máis baixas: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Os máis modificados esta semana',
	'articleFeedback-table-caption-recentlows' => 'Últimos baixos',
	'articleFeedback-table-heading-page' => 'Páxina',
	'articleFeedback-table-heading-average' => 'Media',
	'articleFeedback-copy-above-highlow-tables' => 'Esta é unha característica experimental. Deixe os seus comentarios na [$1 páxina de conversa].',
	'articlefeedback-dashboard-bottom' => "'''Nota:''' Continuaremos experimentando diferentes xeitos de seleccionar artigos neste taboleiro. Polo de agora, os taboleiros inclúen os seguintes artigos:
* Páxinas coas mellores/peores valoracións: artigos que recibiron, polo menos, 10 avaliacións nas últimas 24 horas. As medias calcúlanse tomando a media de todas as valoracións enviadas nas últimas 24 horas.
* Os baixos máis recentes: artigos que tiveron un 70% ou menos (2 estrelas ou menos) das valoracións en calquera categoría nas últimas 24 horas. Soamente se inclúen os artigos que recibiron, polo menos, 10 avaliacións nas últimas 24 horas.",
	'articlefeedback-disable-preference' => 'Non mostrar o widget de avaliación de artigos nas páxinas',
	'articlefeedback-emailcapture-response-body' => 'Ola!

Grazas por expresar interese en axudar a mellorar {{SITENAME}}.

Tome un momento para confirmar o seu correo electrónico premendo na ligazón que hai a continuación: 

$1

Tamén pode visitar:

$2

E inserir o seguinte código de confirmación:

$3

Poñerémonos en contacto con vostede para informarlle sobre como axudar a mellorar {{SITENAME}}.

Se vostede non fixo esta petición, ignore esta mensaxe e non lle enviaremos máis nada.

Os mellores desexos e grazas,
O equipo de {{SITENAME}}',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'articlefeedback' => 'Arbets- un Ibersichtssyte fir Artikelbeurteilige',
	'articlefeedback-desc' => 'Macht e Ruggmäldig zue Artikel megli',
	'articlefeedback-error' => 'S het e Fähler gee. Bitte versuech s speter nomol.',
	'articlefeedback-form-switch-label' => 'Die Syte yyschetze',
	'articlefeedback-form-panel-title' => 'Die Syte yyschetze',
	'articlefeedback-form-panel-explanation' => 'Was isch des de?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Artikelbeurteilig',
	'articlefeedback-form-panel-clear' => 'Yyschetzig uuseneh',
	'articlefeedback-form-panel-expertise' => 'Ich haa umfangrychi Chänntnis zue däm Thema (optional)',
	'articlefeedback-form-panel-expertise-studies' => 'Ich haa ne entsprächende Hochschuelabschluss',
	'articlefeedback-form-panel-expertise-profession' => 'S isch Teil vu myym Beruef',
	'articlefeedback-form-panel-expertise-hobby' => 'Ich haa ne seli stark persenlig Inträssi an däm Thema',
	'articlefeedback-form-panel-expertise-other' => 'Dr Grund fir myy Chänntnis isch do nit ufgfiert',
	'articlefeedback-form-panel-helpimprove' => 'Ich wott debi hälfe, {{SITENAME}} z verbessre. Schicket mir bitte es Mail. (optional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Mir schicke dir es Bstätigungsmail. Dyni E-Mail-Adräss wird sälbstverständli aa niemern wytergee. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Dateschutzerklerig fir Ruckmäldige',
	'articlefeedback-form-panel-submit' => 'Yyschetzig ibertrage',
	'articlefeedback-form-panel-pending' => 'Dyni Beurteilig isch no nit veröffentlicht worde',
	'articlefeedback-form-panel-success' => 'Erfolgrych gspycheret',
	'articlefeedback-form-panel-expiry-title' => 'Dyy Yyschetzig isch z lang här.',
	'articlefeedback-form-panel-expiry-message' => 'Bitte tue d Syte nomol beurteile un e neji yyschetzitg spychere.',
	'articlefeedback-report-switch-label' => 'Yyschetzige zue däre Syte aaluege',
	'articlefeedback-report-panel-title' => 'Yyschetzige vu dr Syte',
	'articlefeedback-report-panel-description' => 'Aktuälli Durschnittsergebnis vu dr Yyschetzige',
	'articlefeedback-report-empty' => 'Kei Yyschetzige',
	'articlefeedback-report-ratings' => '$1 Yyschetzige',
	'articlefeedback-field-trustworthy-label' => 'Vertröueswirdig',
	'articlefeedback-field-trustworthy-tip' => 'Hesch Du dr Yydruck, ass es in däm Artikel gnue Quällenaagabe het un ass mer däne Quälle cha tröue?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Git kei zueverlässigi Quelle aa',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Git wenig zueverlässigi Quelle aa',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Git ussryychend zueverlässigi Quelle aa',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Gueti un zueverlässigi Quelle',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Git sehr zueverlässigi Quelle aa',
	'articlefeedback-field-complete-label' => 'Vollständig',
	'articlefeedback-field-complete-tip' => 'Hesch Du dr Yydruck, ass in däm Artikel aali Aschpäkt ufgfiert sin, wu mit däm Thema zämmehange?',
	'articlefeedback-field-complete-tooltip-1' => 'Di meiste Informatione fääle no',
	'articlefeedback-field-complete-tooltip-2' => 'Enthält bstimmti Informatione',
	'articlefeedback-field-complete-tooltip-3' => 'Enthält d Hauptinformatione, aber es het no Lücke',
	'articlefeedback-field-complete-tooltip-4' => 'Enthält di meiste Hauptinformatione',
	'articlefeedback-field-complete-tooltip-5' => 'Enthält umfassendi Informatione',
	'articlefeedback-field-objective-label' => 'Nit voryygnuu',
	'articlefeedback-field-objective-tip' => 'Hesch Du dr Yydruck, ass dää Artikel e uusgwogeni Darstellig isch vu allne Aschpäkt, wu mit däm Thema verbunde sin?',
	'articlefeedback-field-objective-tooltip-1' => 'De Inhalt isch sehr eisytig',
	'articlefeedback-field-objective-tooltip-2' => 'De Inhalt isch e weng eisytig',
	'articlefeedback-field-objective-tooltip-3' => 'Fast nit eisytig',
	'articlefeedback-field-objective-tooltip-4' => 'Kei offesichtlichi Eisytigkeit',
	'articlefeedback-field-objective-tooltip-5' => 'De Inhalt isch nit eisytig',
	'articlefeedback-field-wellwritten-label' => 'Guet gschribe',
	'articlefeedback-field-wellwritten-tip' => 'Hesch Du dr Yydruck, ass dää Artikel guet strukturiert un gschribe isch?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Unverständlig',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Schwer verständlig',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Ussryychend verständlig',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Guet verständlig',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Bsunders chlar verständlig',
	'articlefeedback-pitch-reject' => 'Villicht speter',
	'articlefeedback-pitch-or' => 'oder',
	'articlefeedback-pitch-thanks' => 'Dankschen! Dyy Yyschetzig isch gspycheret wore.',
	'articlefeedback-pitch-join-message' => 'Hesch e Benutzerkonto welle aalege?',
	'articlefeedback-pitch-join-body' => 'E Benutzerkonto hilft der dyni Bearbeitige besser noovollzie z chenne, eifacher bi Diskussione mitzmache un e Teil vu dr Benutzergmeinschaft z wäre.',
	'articlefeedback-pitch-join-accept' => 'Benutzerkonto aalege',
	'articlefeedback-pitch-join-login' => 'Aamälde',
	'articlefeedback-pitch-edit-message' => 'Hesch gwisst, ass du dä Artikel chasch bearbeite?',
	'articlefeedback-pitch-edit-accept' => 'Die Syte bearbeite',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Di Hööche- un Diefpunkt vo hüt',
	'articleFeedback-table-caption-dailyhighs' => 'Artikel mit de beschte Bewertige: $1',
	'articleFeedback-table-caption-dailylows' => 'Artikel mit de schlächteste Bewertige: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'In derre Wuche am meiste gänderet',
	'articleFeedback-table-caption-recentlows' => 'Aktuelli Diefpünkt',
	'articleFeedback-table-heading-page' => 'Syte',
	'articleFeedback-table-heading-average' => 'Durschnitt',
	'articleFeedback-copy-above-highlow-tables' => 'Des isch e Versuechsfunktion. Bitte gib uff de [$1 Diskussionssyte] e Ruggmäldig dezue.',
	'articlefeedback-dashboard-bottom' => "'''Hywyys''': Mir experimentiere wyter mit verschidne Mögligkeite zume Artikel uff dänne Übersichtssyte uffzeige. Zur Zit werde doo die Artikel aazeigt:
*Syte mit de beschte/schlächteschte Bewertige: Artikel wo derwyylischt de letschte 24 Stunde mindestens 10 Bewertige kriegt hen. De Durchschnitt wird durch alli Beurteilige in de letschte 24 Stunde berächnet.
*Aktuelli schlächti Bewertige: Artikel wo derwyylischt de letschte 24 Stunde e Bewertige vo 70% oder niidriger übercho hen (2 Stärnli oder weniger), in allene Kategorie. Numme Artikel wo derwyylscht de letschte 24 Stunde mindestens 10 Bewertige übercho hen, sin beruggsichtigt.",
	'articlefeedback-disable-preference' => 'S Widget zur Syte-Beurteilig nit aazeige',
	'articlefeedback-emailcapture-response-body' => 'Sali!
Merci für dyni Intress, {{SITENAME}} z verbessre!
Bitte nimm der en Augeblick, zume dyni E-Mail-Adräss z bstätige. Des goot über de Link unte:

$1

Du chasch au uff die Syte go:

$2

Un dörte de Code yygee:

$3

Mir benoochrichtige dich deno bal mit Informatione, wie du chasch {{SITENAME}} verbessre.

Wänn du im Fall die Aafroog nit gstellt hesch, no ignorier die E-Mail bitte, un mir unternämme nüüt wyters.

Viili Griess un viile Dank,
D Mitarbeiter vo {{SITENAME}}',
);

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 * @author KartikMistry
 */
$messages['gu'] = array(
	'articlefeedback' => 'લેખ પ્રતિસાદ ડૅશબોર્ડ',
	'articlefeedback-desc' => 'Article feedback',
	'articlefeedback-error' => 'ક્ષતિ ઉદ્ભવી છે. ફરી પ્રયત્ન કરો.',
	'articlefeedback-form-panel-explanation' => 'આ શું છે?',
	'articlefeedback-field-trustworthy-label' => 'વિશ્વાસુ',
	'articlefeedback-field-complete-label' => 'પૂર્ણ',
	'articlefeedback-field-complete-tooltip-1' => 'મોટાભાગની માહિતી ખૂટતી છે',
	'articlefeedback-pitch-or' => 'અથવા',
	'articlefeedback-pitch-join-accept' => 'નવું ખાતું ખોલો',
	'articlefeedback-pitch-join-login' => 'પ્રવેશ કરો',
	'articlefeedback-pitch-edit-accept' => 'આ પાનામાં ફેરફાર કરો',
	'articleFeedback-table-heading-page' => 'પાનું',
	'articleFeedback-table-heading-average' => 'સરેરાશ',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Nahum
 * @author YaronSh
 */
$messages['he'] = array(
	'articlefeedback' => 'לוח בקרה למשוב על ערך',
	'articlefeedback-desc' => 'משוב על ערך',
	'articlefeedback-error' => 'אירעה שגיאה. נא לנסות שוב מאוחר יותר.',
	'articlefeedback-form-switch-label' => 'תנו הערכה לדף הזה',
	'articlefeedback-form-panel-title' => 'תנו הערכה לדף הזה',
	'articlefeedback-form-panel-explanation' => 'מה זה?',
	'articlefeedback-form-panel-explanation-link' => 'Project:משוב על דפים',
	'articlefeedback-form-panel-clear' => 'הסר דירוג זה',
	'articlefeedback-form-panel-expertise' => 'יש לי ידע רב על הנושא הזה (לא חובה)',
	'articlefeedback-form-panel-expertise-studies' => 'יש לי תואר אקדמי בנושא הזה',
	'articlefeedback-form-panel-expertise-profession' => 'זה חלק מהמקצוע שלי',
	'articlefeedback-form-panel-expertise-hobby' => 'זה מעורר בי תשוקה רבה',
	'articlefeedback-form-panel-expertise-other' => 'מקור הידע שלי לא מופיע כאן',
	'articlefeedback-form-panel-helpimprove' => 'אני רוצה לעזור לשפר את ויקיפדיה, שלחו לי מכתב על זה (לא חובה)',
	'articlefeedback-form-panel-helpimprove-note' => 'אנו נשלח לך מכתב אימות בדוא״ל. לא נשתף את הכתובת עם איש בהתאם ל$1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'הצהרת פרטיות על משוב',
	'articlefeedback-form-panel-submit' => 'לשלוח דירוגים',
	'articlefeedback-form-panel-pending' => 'הדירוגים שלכם לא נשלחו',
	'articlefeedback-form-panel-success' => 'נשמר בהצלחה',
	'articlefeedback-form-panel-expiry-title' => 'הדירוגים שלכם פגו',
	'articlefeedback-form-panel-expiry-message' => 'נא להעריך את הדף מחדש ולשלוח דירוגים חדשים.',
	'articlefeedback-report-switch-label' => 'להציג את ההערכות שניתנו לדף',
	'articlefeedback-report-panel-title' => 'הערכות שניתנו לדף הזה',
	'articlefeedback-report-panel-description' => 'ממוצע הדירוגים הנוכחי.',
	'articlefeedback-report-empty' => 'אין דירוגים',
	'articlefeedback-report-ratings' => '$1 דירוגים',
	'articlefeedback-field-trustworthy-label' => 'אמין',
	'articlefeedback-field-trustworthy-tip' => 'האם להערכתך יש בדף הזה הפניות מספיקות למקורות מהימנים?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'חסרים מקורות מהימנים',
	'articlefeedback-field-trustworthy-tooltip-2' => 'מעט מקורות מהימנים',
	'articlefeedback-field-trustworthy-tooltip-3' => 'מקורות מהימנים סבירים',
	'articlefeedback-field-trustworthy-tooltip-4' => 'מקורות מהימנים טובים',
	'articlefeedback-field-trustworthy-tooltip-5' => 'מקורות מהימנים מעולים',
	'articlefeedback-field-complete-label' => 'מלא',
	'articlefeedback-field-complete-tip' => 'האם להערכתך הדף הזה סוקר את התחומים החיוניים הנוגעים בנושא?',
	'articlefeedback-field-complete-tooltip-1' => 'רוב המידע חסר',
	'articlefeedback-field-complete-tooltip-2' => 'קיים חלק מהמידע',
	'articlefeedback-field-complete-tooltip-3' => 'מכיל מידע עיקרי, אבל יש חוסרים',
	'articlefeedback-field-complete-tooltip-4' => 'מכיל את רוב המידע העיקרי',
	'articlefeedback-field-complete-tooltip-5' => 'סיקור מקיף',
	'articlefeedback-field-objective-label' => 'לא מוטה',
	'articlefeedback-field-objective-tip' => 'האם להערכתך הדף הזה מייצג באופן הולם את כל נקודות המבט על הנושא?',
	'articlefeedback-field-objective-tooltip-1' => 'מוטה מאוד',
	'articlefeedback-field-objective-tooltip-2' => 'קיימת הטיה מסוימת',
	'articlefeedback-field-objective-tooltip-3' => 'קיימת הטיה מזערית',
	'articlefeedback-field-objective-tooltip-4' => 'אין הטיה מובהקת',
	'articlefeedback-field-objective-tooltip-5' => 'אין שום הטיה',
	'articlefeedback-field-wellwritten-label' => 'כתוב היטב',
	'articlefeedback-field-wellwritten-tip' => 'האם להערכתך הדף הזה מאורגן וכתוב היטב?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'לא ברור כלל',
	'articlefeedback-field-wellwritten-tooltip-2' => 'קשה להבנה',
	'articlefeedback-field-wellwritten-tooltip-3' => 'ברור באופן סביר',
	'articlefeedback-field-wellwritten-tooltip-4' => 'ברור',
	'articlefeedback-field-wellwritten-tooltip-5' => 'ברור מאוד',
	'articlefeedback-pitch-reject' => 'אולי מאוחר יותר',
	'articlefeedback-pitch-or' => 'או',
	'articlefeedback-pitch-thanks' => 'תודה! הדירוגים שלך נשמרו.',
	'articlefeedback-pitch-join-message' => 'אתם רוצים ליצור חשבון?',
	'articlefeedback-pitch-join-body' => 'החשבון יעזור לכם לעקוב אחר העריכות שלכם, להיות מעורבים בדיונים ולהיות חלק מהקהילה.',
	'articlefeedback-pitch-join-accept' => 'יצירת חשבון',
	'articlefeedback-pitch-join-login' => 'כניסה לחשבון',
	'articlefeedback-pitch-edit-message' => 'הידעתם שאתם יכולים לערוך את הדף הזה?',
	'articlefeedback-pitch-edit-accept' => 'לערוך את הדף הזה',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'התוצאות הגבוהות והנמוכות היום',
	'articleFeedback-table-caption-dailyhighs' => 'ערכים עם הדירוגים הגבוהים ביותר: $1',
	'articleFeedback-table-caption-dailylows' => 'ערכים עם הדירוגים הנמוכים ביותר: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'מה השתנה השבוע יותר מכול',
	'articleFeedback-table-caption-recentlows' => 'תוצאות נמוכות לאחרונה',
	'articleFeedback-table-heading-page' => 'דף',
	'articleFeedback-table-heading-average' => 'ממוצע',
	'articleFeedback-copy-above-highlow-tables' => 'זוהי תכונה ניסיונית. נשמח לקבל משוב ב[$1 דף השיחה].',
	'articlefeedback-dashboard-bottom' => "'''שימו לב''': אנחנו נמשיך לערוך ניסויים עם דרכים שונות להציף ערכים בלוחות הבקרה האלה. כעת לוחות הברה כוללים את הערכים הבאים:
* דפים עם דירוגים גבוהים ביותר או נמוכים ביותר: ערכים שקיבלו לפחות 10 דירוגים ב־24 השעות האחרונות. הממוצעים מחושבים לפי ממוצע על הדירוגים ב־24 השעות האחרונות.
* נמוכים אחרונים: ערכים שקיבלו דירוג של 70% נמוך (2 כוכבים או פחות) בקטגוריה כלשהי ב־24 השעות האחרונות. רק ערכים שקיבלו לפחות 10 דירוגים ב־24 השעות האחרונות כלולים.",
	'articlefeedback-disable-preference' => 'לא להציג את כלי דירוג הערכים בדפים',
	'articlefeedback-emailcapture-response-body' => 'שלום!

תודה שהבעתם עניין בסיוע לשיפור אתר {{SITENAME}}.

אנא הקדישו רגע לאשר את הדואר האלקטרוני שלכם על־ידי לחיצה על הקישור להלן:

$1

אפשר גם לבקר בקישור הבא:

$2

ולהזין את קוד האישור הבא:

$3

נהיה בקשר לאחר זמן קצר ונספר לכם על דרכים לסייע לשפר את אתר {{SITENAME}}.

אם לא יזמת את הבקשה הזאת, נא להתעלם מהמכתב הזה ולא נשלח לך שום דבר אחר.

כל טוב, ותודה

צוות {{SITENAME}}',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Mayur
 * @author Siddhartha Ghai
 * @author Vibhijain
 */
$messages['hi'] = array(
	'articlefeedback' => 'लेख प्रतिक्रिया डैशबोर्ड', # Fuzzy
	'articlefeedback-desc' => 'लेख सुझाव प्रतिक्रिया',
	'articlefeedback-error' => 'कोई त्रुटि उत्पन्न हुई। कृपया बाद में पुन: प्रयास करें।',
	'articlefeedback-form-switch-label' => 'इस पन्ने का मूल्यांकन करें।',
	'articlefeedback-form-panel-title' => 'इस पन्ने का मूल्यांकन करें।',
	'articlefeedback-form-panel-explanation' => 'यह क्या है?',
	'articlefeedback-form-panel-explanation-link' => 'Project:विकिपीडिया आकलन',
	'articlefeedback-form-panel-clear' => 'यह रेटिंग हटाये।',
	'articlefeedback-form-panel-expertise' => 'मैं इस विषय (वैकल्पिक) के बारे में अत्यधिक जानकारी रखता हूँ।',
	'articlefeedback-form-panel-expertise-studies' => 'मैंरे पास एक प्रासंगिक कॉलेज/ विश्वविद्यालय की डिग्री है।',
	'articlefeedback-form-panel-expertise-profession' => 'यह मेरे पेशे का हिस्सा है।',
	'articlefeedback-form-panel-expertise-hobby' => 'यह एक गहरी व्यक्तिगत जुनून है।',
	'articlefeedback-form-panel-expertise-other' => 'मेरी जानकारी के स्रोत यहाँ सूचीबद्ध नहीं है।',
	'articlefeedback-form-panel-helpimprove' => 'मैं विकिपीडिया में सुधार करने में मदद करना चाहता हूँ, मुझे एक ई-मेल भेजें (वैकल्पिक)।',
	'articlefeedback-form-panel-helpimprove-note' => 'हम आपको एक पुष्टिकरण ई-मेल भेज देंगे। हम आपका पता किसी के साथ साझा नहीं करेंगे।$1', # Fuzzy
	'articlefeedback-form-panel-helpimprove-privacy' => 'गोपनीयता नीति', # Fuzzy
	'articlefeedback-form-panel-submit' => 'मूल्याँकन जमा करें।',
	'articlefeedback-form-panel-pending' => 'आपके मूल्यांकन अभी तक जमा नहीं किये गये।',
	'articlefeedback-form-panel-success' => 'सफलतापूर्वक सहेजा गया',
	'articlefeedback-form-panel-expiry-title' => 'आपके मूल्यांकन की अवधि समाप्त हो गयी है।',
	'articlefeedback-form-panel-expiry-message' => 'कृपया इस पृष्ठ को पुन जाँचकर अपना मूल्याँकन जमा करे।',
	'articlefeedback-report-switch-label' => 'पृष्ठ मूल्यांकन देखें',
	'articlefeedback-report-panel-title' => 'पृष्ठ रेटिंग',
	'articlefeedback-report-panel-description' => 'वर्तमान औसत रेटिंग।',
	'articlefeedback-report-empty' => 'कोई मूल्यांकन नहीं',
	'articlefeedback-report-ratings' => '$1 रेटिंग',
	'articlefeedback-field-trustworthy-label' => 'विश्वसनीय',
	'articlefeedback-field-trustworthy-tip' => 'क्या आपको लगता है कि इस पृष्ठ में पर्याप्त सन्दर्भ है और वह सन्दर्भ विश्वसनीय स्त्रोतों से है।',
	'articlefeedback-field-trustworthy-tooltip-1' => 'सम्मानित सूत्रों का अभाव',
	'articlefeedback-field-trustworthy-tooltip-2' => 'सम्मानित सूत्रों का अभाव',
	'articlefeedback-field-trustworthy-tooltip-3' => 'पर्याप्त सम्मानित स्रोत',
	'articlefeedback-field-trustworthy-tooltip-4' => 'अच्छे सम्मानित स्रोत',
	'articlefeedback-field-trustworthy-tooltip-5' => 'महान सम्मानित स्रोत',
	'articlefeedback-field-complete-label' => 'पूर्ण',
	'articlefeedback-field-complete-tip' => 'क्या आपको लगता है कि यह पृष्ठ विषय से सम्बन्धित समस्त आवश्यक विषयों को समेटें हुए है।',
	'articlefeedback-field-complete-tooltip-1' => 'सबसे अधिक जानकारी गुम',
	'articlefeedback-field-complete-tooltip-2' => 'कुछ जानकारी शामिल है',
	'articlefeedback-field-complete-tooltip-3' => 'महत्वपूर्ण जानकारी शामिल है, लेकिन अंतराल के साथ',
	'articlefeedback-field-complete-tooltip-4' => 'सबसे महत्वपूर्ण जानकारी शामिल है।',
	'articlefeedback-field-complete-tooltip-5' => 'व्यापक कवरेज',
	'articlefeedback-field-objective-label' => 'निष्पक्षता',
	'articlefeedback-field-objective-tip' => 'क्या आपको लगता है कि  यह पृष्ठ समस्त प्रतिनिधित्व मुद्दों पर निष्पक्ष है।',
	'articlefeedback-field-objective-tooltip-1' => 'काफि पक्षपाती',
	'articlefeedback-field-objective-tooltip-2' => 'उदारवादी पूर्वाग्रह',
	'articlefeedback-field-objective-tooltip-3' => 'कम से कम पूर्वाग्रह',
	'articlefeedback-field-objective-tooltip-4' => 'कोई स्पष्ट पूर्वाग्रह नहीं',
	'articlefeedback-field-objective-tooltip-5' => 'पूरी तरह से निष्पक्ष',
	'articlefeedback-field-wellwritten-label' => 'अच्छी तरह से लिखा हुआ।',
	'articlefeedback-field-wellwritten-tip' => 'क्या आपको लगता है कि यह पृष्ठ पूर्ण रुप से संगठित है अच्छी तरह से लिखा हुआ है।',
	'articlefeedback-field-wellwritten-tooltip-1' => 'समझ से बाहर',
	'articlefeedback-field-wellwritten-tooltip-2' => 'समझने के लिए मुश्किल',
	'articlefeedback-field-wellwritten-tooltip-3' => 'पर्याप्त स्पष्टता',
	'articlefeedback-field-wellwritten-tooltip-4' => 'अच्छी स्पष्टता',
	'articlefeedback-field-wellwritten-tooltip-5' => 'असाधारण स्पष्टता',
	'articlefeedback-pitch-reject' => 'शायद बाद में',
	'articlefeedback-pitch-or' => 'या',
	'articlefeedback-pitch-thanks' => 'धन्यवाद! आपका मूल्याँकन सहेजा गया।',
	'articlefeedback-pitch-join-message' => 'क्या आप एक खाता बनाना चाहते हैं?',
	'articlefeedback-pitch-join-body' => 'एक खाता से आपको आपके संपादन के ट्रैक रखने, विचार विमर्श में शामिल होने और समुदाय का एक हिस्सा बनने में मदद मिलेगी।',
	'articlefeedback-pitch-join-accept' => 'नया खाता बनाएँ',
	'articlefeedback-pitch-join-login' => 'लॉग इन',
	'articlefeedback-pitch-edit-message' => 'क्या आप जानते थे कि आप इस पृष्ठ को संपादित कर सकते हैं?',
	'articlefeedback-pitch-edit-accept' => 'यह पृष्ठ सम्पादित करें',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'आज के उतार-चढ़ाव',
	'articleFeedback-table-caption-dailyhighs' => 'सर्वोच्च रेटिंग वाले पृष्ठ:$1',
	'articleFeedback-table-caption-dailylows' => 'निम्नतम् रेटिंग वाले पृष्ठ:$1',
	'articleFeedback-table-caption-weeklymostchanged' => 'इस सप्ताह के सबसे अधिक बदलाव',
	'articleFeedback-table-caption-recentlows' => 'हाल ही की न्यूनतम रेटिंग',
	'articleFeedback-table-heading-page' => 'पृष्ठ',
	'articleFeedback-table-heading-average' => 'औसत',
	'articleFeedback-copy-above-highlow-tables' => 'यह एक प्रायोगिक सुविधा है।  कृपया अपनी राय  [$1 चर्चा पृष्ठ] पर अवश्य दें।',
	'articlefeedback-dashboard-bottom' => "'''नोट''': हम इन डैशबोर्ड्स में लेख सरफेसिंग के विभिन्न तरीकों का प्रयोग करेंगे। वर्तमान में डैशबोर्ड्स निम्न लेख शामिल किये हुए है-
*उच्चतम एवं निम्नतम रेटिंग वाले पृष्ठ: जिन लेखों ने पिछ्हले २४ घंटों में १० से अधिक रेटिंग प्राप्त की हैं। पिछले २४ घंटों में प्राप्त रेटिंग के औसत से औसत मान निकाला जाता  है।
*हाल ही के उतार: जिन लेखों ने ७०% या २ से कम रेटिंग पिछले २४ घंटों में प्राप्त की है। केवल पिछले २४ घण्टों में १० से अधिक रेटिंग प्राप्त करने वाले लेख शामिल किये गये है।",
	'articlefeedback-disable-preference' => 'लेख प्रतिक्रिया विजेट पृष्ठों पर न दिखाएँ',
	'articlefeedback-emailcapture-response-body' => 'नमस्कार!

{{SITENAME}} को बेहतर बनाने में रुचि व्यक्त करने के लिए धन्यवाद।

कृपया नीचे दिए गए लिंक पर क्लिक कर के अपने ई-मेल की पुष्टि करने के लिए एक क्षण लें:

$1

आप निम्न लिंक पर भी जा सकते हैं:

$2

और निम्नलिखित पुष्टिकरण कोड प्रविष्ट कर सकते हैं:

$3

हम शीघ्र ही {{SITENAME}} में सुधार करने सम्बंधित जानकारी के साथ आपसे संपर्क करेंगे।

यदि आपने यह अनुरोध आरंभ नहीं किया था, कृपया इस ई-मेल पर ध्यान न दें और हम आपको और कुछ नहीं भेजेंगे।

शुभकामनाएँ, और आपका धन्यवाद!
{{SITENAME}} टीम',
);

/** Fiji Hindi (Latin script) (Fiji Hindi)
 * @author Karthi.dr
 */
$messages['hif-latn'] = array(
	'articlefeedback-pitch-join-accept' => 'Nawaa account banao',
	'articlefeedback-pitch-join-login' => 'Log in karo',
	'articlefeedback-pitch-edit-accept' => 'Ii panna ke badlo',
	'articleFeedback-table-heading-page' => 'Panna',
);

/** Croatian (hrvatski)
 * @author Herr Mlinka
 * @author Roberta F.
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'articlefeedback' => 'Ocjenjivanje članaka', # Fuzzy
	'articlefeedback-desc' => 'Ocjenjivanje članaka (probna inačica)', # Fuzzy
	'articlefeedback-error' => 'Došlo je do pogrješke. 
Molimo, pokušajte ponovno kasnije.',
	'articlefeedback-form-switch-label' => 'Ocijeni ovu stranicu',
	'articlefeedback-form-panel-title' => 'Ocijeni ovu stranicu',
	'articlefeedback-form-panel-clear' => 'Ukloni ovu ocijenu',
	'articlefeedback-form-panel-expertise' => 'Visoko sam obrazovan o ovoj temi', # Fuzzy
	'articlefeedback-form-panel-expertise-studies' => 'Imam odgovarajući fakultetski/sveučilišni stupanj',
	'articlefeedback-form-panel-expertise-profession' => 'To je dio moje struke',
	'articlefeedback-form-panel-expertise-hobby' => 'To je duboka osobna strast',
	'articlefeedback-form-panel-expertise-other' => 'Izvor moga znanja nije na ovom popisu',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Zaštita privatnosti', # Fuzzy
	'articlefeedback-form-panel-submit' => 'Pošaljite povratnu informaciju', # Fuzzy
	'articlefeedback-form-panel-success' => 'Uspješno spremljeno',
	'articlefeedback-form-panel-expiry-title' => 'Vaše su ocjene istekle',
	'articlefeedback-form-panel-expiry-message' => 'Molimo ponovno ocijenite ovu stranicu te pošaljite nove ocjene.',
	'articlefeedback-report-switch-label' => 'Prikaži ocjene ove stranice',
	'articlefeedback-report-panel-title' => 'Ocjene stranice',
	'articlefeedback-report-panel-description' => 'Trenutačni prosjek ocjena.',
	'articlefeedback-report-empty' => 'Nema ocjena',
	'articlefeedback-report-ratings' => '$1 ocjena',
	'articlefeedback-field-trustworthy-label' => 'Vjerodostojno',
	'articlefeedback-field-trustworthy-tip' => 'Smatrate li da ova stranica ima dovoljno izvora i da su oni iz vjerodostojnih izvora?',
	'articlefeedback-field-complete-label' => 'Zaokružena cjelina teme',
	'articlefeedback-field-complete-tip' => 'Mislite li da ova stranica pokriva osnovna područja teme koja bi trebala?',
	'articlefeedback-field-objective-label' => 'Nepristrano',
	'articlefeedback-field-objective-tip' => 'Da li smatrate da ova stranica prikazuje neutralni prikaz iz svih perspektiva o temi?',
	'articlefeedback-field-wellwritten-label' => 'Dobro napisano',
	'articlefeedback-field-wellwritten-tip' => 'Mislite li da je ova stranica dobro organizirana i dobro napisana?',
	'articlefeedback-pitch-reject' => 'Možda kasnije',
	'articlefeedback-pitch-or' => 'ili',
	'articlefeedback-pitch-thanks' => 'Hvala! Vaše su ocjene sačuvane.',
	'articlefeedback-pitch-join-message' => 'Želite li kreirati korisnički račun?',
	'articlefeedback-pitch-join-body' => 'Korisnički će vam račun olakšati praćenje vaših uređivanja, uključivanje u rasprave te će te lakše postati dijelom zajednice.',
	'articlefeedback-pitch-join-accept' => 'Otvori novi suradnički račun',
	'articlefeedback-pitch-join-login' => 'Prijavite se',
	'articlefeedback-pitch-edit-message' => 'Jeste li znali da možete uređivati ovu stranicu?',
	'articlefeedback-pitch-edit-accept' => 'Uredi ovu stranicu',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'articlefeedback' => 'Přehladna strona k posudkam',
	'articlefeedback-desc' => 'Pohódnoćenje nastawkow',
	'articlefeedback-error' => 'Zmylk je wustupił.
Prošu spytaj pozdźišo hišće raz.',
	'articlefeedback-form-switch-label' => 'Tutu stronu pohódnoćić',
	'articlefeedback-form-panel-title' => 'Tutu stronu pohódnoćić',
	'articlefeedback-form-panel-explanation' => 'Što to je?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Tute pohódnoćenje wotstronić',
	'articlefeedback-form-panel-expertise' => 'Mam wobšěrne znajomosće wo tutej temje (na přeće)',
	'articlefeedback-form-panel-expertise-studies' => 'Sym na wotpowědnej wyšej šuli/uniwersiće studował',
	'articlefeedback-form-panel-expertise-profession' => 'Je dźěl mojeho powołanja',
	'articlefeedback-form-panel-expertise-hobby' => 'Je mój konik',
	'articlefeedback-form-panel-expertise-other' => 'Žórło mojich znajomosćow njeje tu podate',
	'articlefeedback-form-panel-helpimprove' => 'Bych rady pomhał {{GRAMMAR:akuzatiw|{{SITENAME}}}} polěpšić, pósćelće mi e-mejl (opcionalny)',
	'articlefeedback-form-panel-helpimprove-note' => 'Pósćelemy ći wobkrućensku e-mejl. Po našich $1 njedamy třećam twoju e-mejlowu adresu.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Deklaracija priwatnosće za posudki',
	'articlefeedback-form-panel-submit' => 'Posudki pósłać',
	'articlefeedback-form-panel-pending' => 'Twoje posudki hišće njejsu so wotpósłali',
	'articlefeedback-form-panel-success' => 'wuspěšnje składowany',
	'articlefeedback-form-panel-expiry-title' => 'Twoje pohódnoćenja su spadnyli',
	'articlefeedback-form-panel-expiry-message' => 'Prošu pohódnoć tutu stronu znowa a pósćel nowe pohódnoćenja.',
	'articlefeedback-report-switch-label' => 'Pohódnoćenja strony pokazać',
	'articlefeedback-report-panel-title' => 'Pohódnoćenja strony',
	'articlefeedback-report-panel-description' => 'Aktualne přerězkowe pohódnoćenja.',
	'articlefeedback-report-empty' => 'Žane pohódnoćenja',
	'articlefeedback-report-ratings' => '$1 {{PLURAL:$1|pohódnoćenje|pohódnoćeni|pohódnoćenja|pohódnoćenjow}}',
	'articlefeedback-field-trustworthy-label' => 'Dowěry hódny',
	'articlefeedback-field-trustworthy-tip' => 'Měniće, zo tuta strona ma dosć citatow a zo tute citaty su z dowěry hódnych žórłow?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Njewobsahuje dowěryhódne žórła',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Wobsahuje mało dowěryhódnych žórłow',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Wobsahuje přisprawne dowěryhódne žórła',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Wobsahuje dobre dowěryhódne žórła',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Wobsahuje wuběrne dowěryhódne žórła',
	'articlefeedback-field-complete-label' => 'Dospołny',
	'articlefeedback-field-complete-tip' => 'Měnicé, zo tuta strona wobkedźbuje wšitke bytostne temowe pola, kotrež měła wobsahować?',
	'articlefeedback-field-complete-tooltip-1' => 'Wobsahuje mało informacijow',
	'articlefeedback-field-complete-tooltip-2' => 'Wobsahuje někotre informacije',
	'articlefeedback-field-complete-tooltip-3' => 'Wobsahuje wažne informacije, ma wšak mjezery',
	'articlefeedback-field-complete-tooltip-4' => 'Wobsahuje najwjace wažnych informacijow',
	'articlefeedback-field-complete-tooltip-5' => 'Wobšěrne informacije',
	'articlefeedback-field-objective-label' => 'Wěcowny',
	'articlefeedback-field-objective-tip' => 'Měniš, zo tuta strona pokazuje wurunane předstajenje wšěch perspektiwow tutoho problema?',
	'articlefeedback-field-objective-tooltip-1' => 'Jara předsudny',
	'articlefeedback-field-objective-tooltip-2' => 'Trochu předsudny',
	'articlefeedback-field-objective-tooltip-3' => 'Lědma předsudny',
	'articlefeedback-field-objective-tooltip-4' => 'Po wšěm zdaću njepředsudny',
	'articlefeedback-field-objective-tooltip-5' => 'Cyle njepředsudny',
	'articlefeedback-field-wellwritten-label' => 'Derje napisany',
	'articlefeedback-field-wellwritten-tip' => 'Měniš, zo tuta strona je derje zorganizowana a derje napisana?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Njezrozumliwy',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Ćežko zrozumliwy',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Dosć jasny',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Jasny',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Jara jasny',
	'articlefeedback-pitch-reject' => 'Snano pozdźišo',
	'articlefeedback-pitch-or' => 'abo',
	'articlefeedback-pitch-thanks' => 'Měj dźak! Twoje pohódnoćenja su so składowali.',
	'articlefeedback-pitch-join-message' => 'Sy chcył konto załožić?',
	'articlefeedback-pitch-join-body' => 'Konto budźe ći pomhać twoje změny slědować, so na diskusijach wobdźělić a dźěl zhromadźenstwa być.',
	'articlefeedback-pitch-join-accept' => 'Konto załožić',
	'articlefeedback-pitch-join-login' => 'Přizjewić',
	'articlefeedback-pitch-edit-message' => 'Sy wědźał, zo móžeš tutu stronu wobdźěłać?',
	'articlefeedback-pitch-edit-accept' => 'Tutu stronu wobdźěłać',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dźensniše wysoke a niske stawy',
	'articleFeedback-table-caption-dailyhighs' => 'Strony z najwyšimi posudkami: $1',
	'articleFeedback-table-caption-dailylows' => 'Strony z najnišimi posudkami: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Tutón tydźeń najhusćišo změnjeny',
	'articleFeedback-table-caption-recentlows' => 'Aktualne niske stawy',
	'articleFeedback-table-heading-page' => 'Strona',
	'articleFeedback-table-heading-average' => 'Přerězk',
	'articleFeedback-copy-above-highlow-tables' => 'To je eksperimentelna funkcija. Prošu daj swój komentar na [$1 diskusijnej stronje].',
	'articlefeedback-dashboard-bottom' => "'''Kedźbu:''' Eksperimentujemy dale z wšelakimi móžnosćemi, kak dadźa so nastawki na tutych přehladnych stronach zwobraznić. Tuchwilu so slědowace nastawki zwobraznjeja:
* Strony z najwyšimi/najnišimi pohódnoćenjemi: nastawki, kotrež su znajmjeńša 10 pohódnoćenjow za poslednich 24 hodźin dóstali. Přerězki wobličuja so ze srjedźneje hódnoty wšěch pohódnoćenjow, kotrež su so za poslednich 24 hodźin podali.
* Najnowše špatne pohódnoćenja: nastawki, kotrež su 70 % abo špatniše pohódnoćenja (2 hwěžce abo mjenje) w kóždej z kategorijow za poslednich 24 hodźin dóstali. Jenož nastawki, kotrež su znajmjeńša 10 pohódnoćenjow w poslednich 24 hodźinach dóstali su zapřijate.",
	'articlefeedback-disable-preference' => 'Asistent za posudźenje nastawkow na stronje njepokazać',
	'articlefeedback-emailcapture-response-body' => 'Halo!

Wulki dźak za twój zajim {{GRAMMAR:akuzatiw|{{SITENAME}}}} polěpšić.

Prošu bjer sej wokomik časa, zo by swoju e-mejl přez kliknjenje na slědowacy wotkaz wobkrućił:

$1

Móžeš tež slědowacu stronu wopytać:

$2

Zapodaj potom slědowacy wobkrućenski kod:

$3

Stajimy so za krótki čas z tobu do zwiska, zo bychmy ći zdźělili, kak móžeš pomhać, {{GRAMMAR:akuzatiw|{{SITENAME}}}} polěpšić.

Jeli njejsy tute naprašowanje pósłał, ignoruj prošu tutu e-mejl a njepósćelemy ći ničo wjace.

Z najlěpšimi postrowami a wulki dźak,
Team {{GRAMMAR:genitiw|{{SITENAME}}}}',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Dj
 * @author Hunyadym
 * @author Misibacsi
 * @author Samat
 * @author Tgr
 */
$messages['hu'] = array(
	'articlefeedback' => 'Cikk értékelés vezérlőpult',
	'articlefeedback-desc' => 'Cikk értékelése',
	'articlefeedback-error' => 'Hiba történt. Kérlek, próbálkozz később.',
	'articlefeedback-form-switch-label' => 'Szócikk értékelése',
	'articlefeedback-form-panel-title' => 'Szócikk értékelése',
	'articlefeedback-form-panel-explanation' => 'Mi ez?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Cikkértékelés',
	'articlefeedback-form-panel-clear' => 'Értékelés eltávolítása',
	'articlefeedback-form-panel-expertise' => 'Jól ismerem ezt a témát (nem kötelező)',
	'articlefeedback-form-panel-expertise-studies' => 'Szakirányú felsőoktatási végzettségem van',
	'articlefeedback-form-panel-expertise-profession' => 'A munkám része',
	'articlefeedback-form-panel-expertise-hobby' => 'Szenvedélyem a téma',
	'articlefeedback-form-panel-expertise-other' => 'Más okból vagyok jártas benne',
	'articlefeedback-form-panel-helpimprove' => 'Szeretnék segíteni a Wikipédia fejlesztésében, küldjetek nekem egy e-mailt (nem kötelező)',
	'articlefeedback-form-panel-helpimprove-note' => 'Küldeni fogunk neked egy visszaigazoló e-mailt. Nem osztjuk meg külső személyekkel az e-mail címedet az $1 szerint.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'visszajelzési adatvédelmi irányelvek',
	'articlefeedback-form-panel-submit' => 'Értékelés elküldése',
	'articlefeedback-form-panel-pending' => 'Az értékelésed még nem lett elküldve',
	'articlefeedback-form-panel-success' => 'Sikeresen elmentve',
	'articlefeedback-form-panel-expiry-title' => 'Az értékelésed elavult',
	'articlefeedback-form-panel-expiry-message' => 'Kérlek, olvasd át újra az oldalt, és küldd be az új értékelésedet',
	'articlefeedback-report-switch-label' => 'Szócikk értékelésének megtekintése',
	'articlefeedback-report-panel-title' => 'Oldal értékelése',
	'articlefeedback-report-panel-description' => 'Jelenlegi átlagos értékelés.',
	'articlefeedback-report-empty' => 'Nincs értékelés',
	'articlefeedback-report-ratings' => '$1 értékelés',
	'articlefeedback-field-trustworthy-label' => 'Megbízható',
	'articlefeedback-field-trustworthy-tip' => 'Elég részletesen vannak-e megadva a források, és megbízhatóak-e?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Hiányoznak a megbízható források',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Kevés a megbízható forrás',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Tűrhetően el van látva megbízható forrásokkal',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Jól el van látva megbízható forrásokkal',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Kitűnően el van látva megbízható forrásokkal',
	'articlefeedback-field-complete-label' => 'Teljes',
	'articlefeedback-field-complete-tip' => 'Elég alaposan tárgyalja-e a fontos témákat?',
	'articlefeedback-field-complete-tooltip-1' => 'Hiányzik a legtöbb információ',
	'articlefeedback-field-complete-tooltip-2' => 'Tartalmaz némi információt',
	'articlefeedback-field-complete-tooltip-3' => 'Tartalmazza a legfontosabb információkat, de hiányosságokkal',
	'articlefeedback-field-complete-tooltip-4' => 'Tartalmazza a legtöbb fontos információt',
	'articlefeedback-field-complete-tooltip-5' => 'Minden fontos informciót tartalmaz',
	'articlefeedback-field-objective-label' => 'Objektív',
	'articlefeedback-field-objective-tip' => 'Elfogulatlanul mutatja-e be az összes nézőpontot?',
	'articlefeedback-field-objective-tooltip-1' => 'Erősen elfogult',
	'articlefeedback-field-objective-tooltip-2' => 'Mérsékelten elfogult',
	'articlefeedback-field-objective-tooltip-3' => 'Csak minimálisan elfogult',
	'articlefeedback-field-objective-tooltip-4' => 'Nincs nyilvánvaló elfogultság',
	'articlefeedback-field-objective-tooltip-5' => 'Teljesen elfogulatlan',
	'articlefeedback-field-wellwritten-label' => 'Jól megírt',
	'articlefeedback-field-wellwritten-tip' => 'Áttekinthető és jól érthető-e a szócikk?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Érthetetlen',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Nehezen érthető',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Valamennyire érthető',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Jól érthető',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Nagyon jól érthető',
	'articlefeedback-pitch-reject' => 'Talán később',
	'articlefeedback-pitch-or' => 'vagy',
	'articlefeedback-pitch-thanks' => 'Köszönjük! Az értékelést elmentettük.',
	'articlefeedback-pitch-join-message' => 'Szerettél volna regisztrálni?',
	'articlefeedback-pitch-join-body' => 'Ha regisztrálsz, könnyen nyomon tudod követni a szerkesztéseidet, jobban be tudsz kapcsolódni a megbeszélésekbe, és a közösség tagjává válhatsz.',
	'articlefeedback-pitch-join-accept' => 'Fiók létrehozása',
	'articlefeedback-pitch-join-login' => 'Bejelentkezés',
	'articlefeedback-pitch-edit-message' => 'Tudtad, hogy szerkesztheted ezt az oldalt?',
	'articlefeedback-pitch-edit-accept' => 'Oldal szerkesztése',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'A napi legjobbak és legrosszabbak',
	'articleFeedback-table-caption-dailyhighs' => 'Legtöbbre értékelt szócikkek: $1',
	'articleFeedback-table-caption-dailylows' => 'Legkevesebbre értékelt szócikkek: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'A héten legtöbbet változott',
	'articleFeedback-table-caption-recentlows' => 'Közelmúltbeli mélypontok',
	'articleFeedback-table-heading-page' => 'Szócikk',
	'articleFeedback-table-heading-average' => 'Átlag',
	'articleFeedback-copy-above-highlow-tables' => 'Ey egy kísérleti funkció, a [$1 vitalapján] tudoad véleményezni.',
	'articlefeedback-dashboard-bottom' => "'''Megjegyzés''': Folyamatosan kísérletezni fogunk a cikkek listázásának különböző módjaival. Jelenleg a listák a következő cikkeket tartalmazzák:
* a legmagasabbra illetve legalacsonyabbra értékelt szócikkek. Az átlagba csak az elmúlt 24 órában leadott értékelések számítanak bele, és legalább tíz ilyennek kell lennie;
* közelmúltbeli mélypontok: olyan szócikkek, amelyek valamelyik kérdésre legalább 70%-ban kaptak 1 vagy 2 csillagot az elmúlt 24 órában. Csak a legalább 10 értékelést kapott szócikkek szerepelnek.",
	'articlefeedback-disable-preference' => 'Ne mutassa többet a cikkértékelő dobozt',
	'articlefeedback-emailcapture-response-body' => 'Szia!

Köszönjük, hogy érdeklődtél a {{SITENAME}} fejlesztése iránt.

Kérlek, erősítsd meg az e-mail címedet az alábbi linkre kattintva:

$1

Ha ez valamiért nem működne, látogasd meg ezt az oldalt:

$2

és ott írd be az ellenőrző kódot:

$3

Rövidesen jelezzük, hogyan tudsz segíteni a {{SITENAME}} fejlesztésében.

Ha nem te kérted ezt a levelet, hagyd figyelmen kívül, és nem fogunk több levelet küldeni.

A legjobbakat kívánva
A {{SITENAME}} csapata',
);

/** Interlingua (interlingua)
 * @author Catrope
 * @author McDutchie
 */
$messages['ia'] = array(
	'articlefeedback' => 'Pannello de evalutation de articulos',
	'articlefeedback-desc' => 'Evalutation de articulos',
	'articlefeedback-error' => 'Un error ha occurrite. Per favor reproba plus tarde.',
	'articlefeedback-form-switch-label' => 'Evalutar iste pagina',
	'articlefeedback-form-panel-title' => 'Evalutar iste pagina',
	'articlefeedback-form-panel-explanation' => 'Que es isto?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Commentar articulos',
	'articlefeedback-form-panel-clear' => 'Remover iste evalutation',
	'articlefeedback-form-panel-expertise' => 'Io es multo ben informate super iste thema (optional)',
	'articlefeedback-form-panel-expertise-studies' => 'Io ha un grado relevante de collegio/universitate',
	'articlefeedback-form-panel-expertise-profession' => 'Illo face parte de mi profession',
	'articlefeedback-form-panel-expertise-hobby' => 'Es un passion personal profunde',
	'articlefeedback-form-panel-expertise-other' => 'Le origine de mi cognoscentia non es listate hic',
	'articlefeedback-form-panel-helpimprove' => 'Io volerea adjutar a meliorar Wikipedia, per favor invia me un e-mail (optional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Nos te inviara un e-mail de confirmation. Nos non divulgara tu adresse de e-mail a exterior personas secundo nostre $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'declaration de confidentialitate super le evalutation',
	'articlefeedback-form-panel-submit' => 'Submitter evalutationes',
	'articlefeedback-form-panel-pending' => 'Tu evalutationes non ha essite submittite',
	'articlefeedback-form-panel-success' => 'Salveguardate con successo',
	'articlefeedback-form-panel-expiry-title' => 'Tu evalutationes ha expirate',
	'articlefeedback-form-panel-expiry-message' => 'Per favor re-evaluta iste pagina e submitte nove evalutationes.',
	'articlefeedback-report-switch-label' => 'Monstrar evalutationes',
	'articlefeedback-report-panel-title' => 'Evalutationes del pagina',
	'articlefeedback-report-panel-description' => 'Le media actual de evalutationes.',
	'articlefeedback-report-empty' => 'Nulle evalutation',
	'articlefeedback-report-ratings' => '$1 evalutationes',
	'articlefeedback-field-trustworthy-label' => 'Digne de fide',
	'articlefeedback-field-trustworthy-tip' => 'Pensa tu que iste pagina ha sufficiente citationes e que iste citationes refere a fontes digne de fide?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Care de fontes digne de fide',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Pauc fontes digne de fide',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Adequate fontes digne de fide',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Bon fontes digne de fide',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Excellente fontes digne de fide',
	'articlefeedback-field-complete-label' => 'Complete',
	'articlefeedback-field-complete-tip' => 'Pensa tu que iste pagina coperi le themas essential que illo deberea coperir?',
	'articlefeedback-field-complete-tooltip-1' => 'Manca le major parte del information',
	'articlefeedback-field-complete-tooltip-2' => 'Contine alcun information',
	'articlefeedback-field-complete-tooltip-3' => 'Contine information importante, ma con lacunas',
	'articlefeedback-field-complete-tooltip-4' => 'Contine le major parte del information importante',
	'articlefeedback-field-complete-tooltip-5' => 'Contine information comprehensive',
	'articlefeedback-field-objective-label' => 'Impartial',
	'articlefeedback-field-objective-tip' => 'Pensa tu que iste pagina monstra un representation juste de tote le perspectivas super le question?',
	'articlefeedback-field-objective-tooltip-1' => 'Multo partial',
	'articlefeedback-field-objective-tooltip-2' => 'Moderatemente partial',
	'articlefeedback-field-objective-tooltip-3' => 'Minimalmente partial',
	'articlefeedback-field-objective-tooltip-4' => 'Non obviemente partial',
	'articlefeedback-field-objective-tooltip-5' => 'Completemente impartial',
	'articlefeedback-field-wellwritten-label' => 'Ben scribite',
	'articlefeedback-field-wellwritten-tip' => 'Pensa tu que iste pagina es ben organisate e ben scribite?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Incomprehensibile',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Difficile a comprender',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Adequatemente clar',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Ben clar',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Exceptionalmente clar',
	'articlefeedback-pitch-reject' => 'Forsan plus tarde',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => 'Gratias! Tu evalutation ha essite salveguardate.',
	'articlefeedback-pitch-join-message' => 'Vole tu crear un conto?',
	'articlefeedback-pitch-join-body' => 'Un conto te adjuta a traciar tu modificationes, a participar in discussiones e a facer parte del communitate.',
	'articlefeedback-pitch-join-accept' => 'Crear conto',
	'articlefeedback-pitch-join-login' => 'Aperir session',
	'articlefeedback-pitch-edit-message' => 'Sapeva tu que tu pote modificar iste pagina?',
	'articlefeedback-pitch-edit-accept' => 'Modificar iste articulo',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Altos e bassos de hodie',
	'articleFeedback-table-caption-dailyhighs' => 'Articulos le plus appreciate: $1',
	'articleFeedback-table-caption-dailylows' => 'Articulos le minus appreciate: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Le plus modificate iste septimana',
	'articleFeedback-table-caption-recentlows' => 'Bassos recente',
	'articleFeedback-table-heading-page' => 'Pagina',
	'articleFeedback-table-heading-average' => 'Medie',
	'articleFeedback-copy-above-highlow-tables' => 'Iste function es experimental.  Per favor lassa tu opinion in le [$1 pagina de discussion].',
	'articlefeedback-dashboard-bottom' => "'''Nota''': Nos continua a experimentar con differente modos de mitter articulos in evidentia in iste pannellos.  A presente, le pannellos include le sequente articulos:
* Paginas con le evalutationes le plus alte/basse: articulos que ha recipite al minus 10 evalutationes durante le ultime 24 horas.  Le media es calculate usante tote le evalutationes submittite durante le ultime 24 horas.
* Bassos recente: articulos que recipeva 70% o plus de evalutationes basse (2 stellas o minus) in qualcunque categoria durante le ultime 24 horas. Solmente le articulos que ha recipite al minus 10 evalutationes durante le ultime 24 horas es includite.",
	'articlefeedback-disable-preference' => 'Non monstrar le widget de evalutation de articulos in paginas',
	'articlefeedback-emailcapture-response-body' => 'Salute!

Gratias pro tu interesse in adjutar a meliorar {{SITENAME}}.

Per favor prende un momento pro confirmar tu adresse de e-mail. Clicca super le ligamine sequente:

$1

Alternativemente, visita:

$2

...e entra le sequente codice de confirmation:

$3

Nos va tosto contactar te pro explicar como tu pote adjutar a meliorar {{SITENAME}}.

Si tu non ha initiate iste requesta, per favor ignora iste e-mail e nos non te inviara altere cosa.

Optime salutes, e multe gratias,
Le equipa de {{SITENAME}}',
);

/** Indonesian (Bahasa Indonesia)
 * @author Anakmalaysia
 * @author Farras
 * @author IvanLanin
 * @author Kenrick95
 */
$messages['id'] = array(
	'articlefeedback' => 'Dasbor umpan balik artikel',
	'articlefeedback-desc' => 'Penilaian artikel (versi percobaan)', # Fuzzy
	'articlefeedback-error' => 'Telah terjadi sebuah kesalahan. Silakan coba lagi nanti.',
	'articlefeedback-form-switch-label' => 'Berikan nilai halaman ini',
	'articlefeedback-form-panel-title' => 'Nilai halaman ini',
	'articlefeedback-form-panel-explanation' => 'Apa ini?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Hapus penilaian ini',
	'articlefeedback-form-panel-expertise' => 'Saya sangat mengetahui topik ini (opsional)',
	'articlefeedback-form-panel-expertise-studies' => 'Saya memiliki gelar perguruan tinggi yang relevan',
	'articlefeedback-form-panel-expertise-profession' => 'Itu bagian dari profesi saya',
	'articlefeedback-form-panel-expertise-hobby' => 'Itu merupakan hasrat pribadi yang mendalam',
	'articlefeedback-form-panel-expertise-other' => 'Sumber pengetahuan saya tidak tercantum di sini',
	'articlefeedback-form-panel-helpimprove' => 'Saya ingin membantu meningkatkan Wikipedia. Kirimi saya surel (opsional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Kami akan mengirim surel konfirmasi. Kami tidak akan berbagi alamat Anda dengan siapa pun sesuai $1 kami.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'ketentuan privasi umpan balik',
	'articlefeedback-form-panel-submit' => 'Kirim peringkat',
	'articlefeedback-form-panel-pending' => 'Penilaian Anda belum dikirim',
	'articlefeedback-form-panel-success' => 'Berhasil disimpan',
	'articlefeedback-form-panel-expiry-title' => 'Peringkat Anda sudah kedaluwarsa',
	'articlefeedback-form-panel-expiry-message' => 'Silakan evaluasi kembali halaman ini dan kirimkan peringkat baru.',
	'articlefeedback-report-switch-label' => 'Lihat penilaian halaman',
	'articlefeedback-report-panel-title' => 'Penilaian halaman',
	'articlefeedback-report-panel-description' => 'Peringkat rata-rata saat ini',
	'articlefeedback-report-empty' => 'Belum berperingkat',
	'articlefeedback-report-ratings' => '$1 penilaian',
	'articlefeedback-field-trustworthy-label' => 'Dapat dipercaya',
	'articlefeedback-field-trustworthy-tip' => 'Apakah Anda merasa bahwa halaman ini memiliki cukup kutipan dan bahwa kutipan tersebut berasal dari sumber tepercaya?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Kekurangan sumber tepercaya',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Beberapa sumber tepercaya',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Sumber tepercaya yang memadai',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Sumber tepercaya yang baik',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Sumber tepercaya yang sangat baik',
	'articlefeedback-field-complete-label' => 'Lengkap',
	'articlefeedback-field-complete-tip' => 'Apakah Anda merasa bahwa halaman ini mencakup wilayah topik penting yang seharusnya?',
	'articlefeedback-field-complete-tooltip-1' => 'Kekurangan sebagian besar informasi',
	'articlefeedback-field-complete-tooltip-2' => 'Berisi beberapa informasi',
	'articlefeedback-field-complete-tooltip-3' => 'Berisi informasi penting, tetapi dengan kesenjangan',
	'articlefeedback-field-complete-tooltip-4' => 'Berisi sebagian besar informasi penting',
	'articlefeedback-field-complete-tooltip-5' => 'Cakupan komprehensif',
	'articlefeedback-field-objective-label' => 'Tidak bias',
	'articlefeedback-field-objective-tip' => 'Apakah Anda merasa bahwa halaman ini menunjukkan representasi yang adil dari semua perspektif tentang masalah ini?',
	'articlefeedback-field-objective-tooltip-1' => 'Sangat menyimpang',
	'articlefeedback-field-objective-tooltip-2' => 'Menyimpang',
	'articlefeedback-field-objective-tooltip-3' => 'Menyimpang minim',
	'articlefeedback-field-objective-tooltip-4' => 'Tidak ada penyimpangan',
	'articlefeedback-field-objective-tooltip-5' => 'Seluruhnya tidak menyimpang',
	'articlefeedback-field-wellwritten-label' => 'Ditulis dengan baik',
	'articlefeedback-field-wellwritten-tip' => 'Apakah Anda merasa bahwa halaman ini disusun dan ditulis dengan baik?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'TIdak dapat dimengerti',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Sulit dipahami',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Kejelasan memadai',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Kejelasan baik',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Kejelasan yang luar biasa',
	'articlefeedback-pitch-reject' => 'Mungkin nanti',
	'articlefeedback-pitch-or' => 'atau',
	'articlefeedback-pitch-thanks' => 'Terima kasih! Penilaian Anda telah disimpan.',
	'articlefeedback-pitch-join-message' => 'Apakah Anda ingin membuat akun?',
	'articlefeedback-pitch-join-body' => 'Akun akan membantu Anda melacak suntingan Anda, terlibat dalam diskusi, dan menjadi bagian dari komunitas.',
	'articlefeedback-pitch-join-accept' => 'Buat account',
	'articlefeedback-pitch-join-login' => 'Masuk log',
	'articlefeedback-pitch-edit-message' => 'Tahukah Anda bahwa Anda dapat menyunting laman ini?',
	'articlefeedback-pitch-edit-accept' => 'Sunting halaman ini',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Kenaikan dan penurunan hari ini',
	'articleFeedback-table-caption-dailyhighs' => 'Artikel berperingkat tertinggi: $1',
	'articleFeedback-table-caption-dailylows' => 'Artikel berperingkat terendah: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Paling berubah minggu ini',
	'articleFeedback-table-caption-recentlows' => 'Penurunan terbaru',
	'articleFeedback-table-heading-page' => 'Halaman',
	'articleFeedback-table-heading-average' => 'Rata-rata',
	'articleFeedback-copy-above-highlow-tables' => 'Ini adalah fitur percobaan. Harap berikan masukan pada [$1 halaman pembicaraan].',
	'articlefeedback-disable-preference' => 'Jangan tampilkan widget umpan balik artikel pada halaman',
	'articlefeedback-emailcapture-response-body' => 'Halo!

Terima kasih atas minat Anda untuk membantu meningkatkan {{SITENAME}}.

Harap luangkan waktu untuk mengonfirmasi surel Anda dengan mengklik pranala di bawah ini:

$1

Anda juga dapat mengunjungi:

$2

Dan masukkan kode konfirmasi berikut:

$3

Dalam waktu dekat, kami akan menghubungi Anda dan menerangkan bagaimana cara membantu peningkatan {{SITENAME}}.

Jika Anda tidak mengajukan permintaan ini, harap mengabaikan surel ini dan kami akan tidak mengirimkan apa pun.

Salam, dan terima kasih,
Tim {{SITENAME}}',
);

/** Iloko (Ilokano)
 * @author Ansumang
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'articlefeedback' => 'Pagipatarayan ti pangipagarupan ti artikulo', # Fuzzy
	'articlefeedback-desc' => 'Pangipagarupan ti artikulo',
	'articlefeedback-error' => 'Adda biddut a napasamak. Pangngaasi a padasem to no madamdama.',
	'articlefeedback-form-switch-label' => 'Pategam daytoy a panid',
	'articlefeedback-form-panel-title' => 'Pategam daytoy a panid',
	'articlefeedback-form-panel-explanation' => 'Ania daytoy?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Pangipagarupan ti Artikulo',
	'articlefeedback-form-panel-clear' => 'Ikkaten daytoy a pategan',
	'articlefeedback-form-panel-expertise' => 'Siak ket nangato ti pannakaammok maipanggep  iti daytoy a topiko (saan a nasken a mapili)',
	'articlefeedback-form-panel-expertise-studies' => 'Addaanak ti maipaay a kolehio/unibersidad a grado',
	'articlefeedback-form-panel-expertise-profession' => 'Paset daytoy iti pagsapulak',
	'articlefeedback-form-panel-expertise-hobby' => 'Daytoy ket kabudbukudak a regget',
	'articlefeedback-form-panel-expertise-other' => 'Ti nagtaudan ti panakaammok ket saan a nailista ditoy',
	'articlefeedback-form-panel-helpimprove' => 'Kayatko kuma ti tumulong a parang-ayen ti Wikipedia, patulodendak ti e-surat (saan a nasken a mapili)',
	'articlefeedback-form-panel-helpimprove-note' => 'Agipatulod kamin to ti kaniam ti pagsingkedan nga e-surat. Saan mi nga ibingbingay ti pagtaemgam nga e-surat kadagiti adda dita ruar a gunglo a kas tunggal maysa-mi a /nga $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'pribado a sarita ti insao para ti panagipagarupan',
	'articlefeedback-form-panel-submit' => 'Ited dagiti pangpatpateg',
	'articlefeedback-form-panel-pending' => 'Dagiti pangpatpategam ket saan pay a naited',
	'articlefeedback-form-panel-success' => 'Balligi ti panakaidulin',
	'articlefeedback-form-panel-expiry-title' => 'Nagpaso dagiti pagipatpategam',
	'articlefeedback-form-panel-expiry-message' => 'Pangngaasi a kitaem manen daytoy a panid ken agited kadagiti baro a pategan.',
	'articlefeedback-report-switch-label' => 'Kitaen dagit pategan ti panid',
	'articlefeedback-report-panel-title' => 'Dagiti pategan ti panid',
	'articlefeedback-report-panel-description' => 'Agdama a patengngaan kadagiti pategan.',
	'articlefeedback-report-empty' => 'Awan dagiti pategan',
	'articlefeedback-report-ratings' => '$1 dagiti pategan',
	'articlefeedback-field-trustworthy-label' => 'Natalek',
	'articlefeedback-field-trustworthy-tip' => 'Mariknam kadi a daytoy a panid ket addaan kadagiti umdas a dakamat ken dagita a dakamat ket natalged dagiti nagtaudan da?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Agkurang kadagiti nadayaw a nagtaudan',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Manmano dagiti nadayaw a nagtaudan',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Makaanay dagiti nadayaw a nagtaudan',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Nasayaat dagiti nadayaw a nagtaudan',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Nalatak dagiti nadayaw a nagtaudan',
	'articlefeedback-field-complete-label' => 'Kompleto',
	'articlefeedback-field-complete-tip' => 'Mariknam kadi a daytoy a panid ket masakup na ti masapul a topiko a disso a rumbeng kuma?',
	'articlefeedback-field-complete-tooltip-1' => 'Agkurang ti kaadduan a pakaammo',
	'articlefeedback-field-complete-tooltip-2' => 'Aglaon ti manmano a pakaammo',
	'articlefeedback-field-complete-tooltip-3' => 'Aglaon ti nasken a pakaammo, ngem addaan dagiti buang',
	'articlefeedback-field-complete-tooltip-4' => 'Aglaon ti kaadu a nasken a pakaammo',
	'articlefeedback-field-complete-tooltip-5' => 'Nasayaat ti pannakasakup na',
	'articlefeedback-field-objective-label' => 'Napanggep',
	'articlefeedback-field-objective-tip' => 'Mariknam kadi a daytoy a panid ket agiparang ti nasayaat a pannakabagi iti amin a kita iti daytoy a banag?',
	'articlefeedback-field-objective-tooltip-1' => 'Di nalinteg unay',
	'articlefeedback-field-objective-tooltip-2' => 'Natimbeng a di nalinteg',
	'articlefeedback-field-objective-tooltip-3' => 'Bassit a di nalinteg',
	'articlefeedback-field-objective-tooltip-4' => 'Awan ti napatak a di nalinteg',
	'articlefeedback-field-objective-tooltip-5' => 'Kompleto a saan a di nalinteg',
	'articlefeedback-field-wellwritten-label' => 'Nakarakad ti pannakaisurat na',
	'articlefeedback-field-wellwritten-tip' => 'Mariknam kadi a daytoy a panid ket nakarakad ti pannaka-urnos na, ken nakarakad ti pannakaisurat na?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Saan maawatan',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Narigat a maawatan',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Makaanay ti kalawag na',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Nasayaat ti kalawag na',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Mailaklaksid ti kalawag na',
	'articlefeedback-pitch-reject' => 'Siguro no madamdama',
	'articlefeedback-pitch-or' => 'wenno',
	'articlefeedback-pitch-thanks' => 'Agyaman! Dagita pategam ket naidulinen.',
	'articlefeedback-pitch-join-message' => 'Kayatmo ti agaramid ti pakabilangan?',
	'articlefeedback-pitch-join-body' => 'Ti pakabilangan ket tulongan na ka a mangsurot dagit inurnos mo, makiraman kadagiti pagtungtungan, ken ag-paset ka iti komunidad.',
	'articlefeedback-pitch-join-accept' => 'Agaramid ti pakabilangan',
	'articlefeedback-pitch-join-login' => 'Sumrek',
	'articlefeedback-pitch-edit-message' => 'Amom kadi a mabalin mo nga urnosen daytoy a panid?',
	'articlefeedback-pitch-edit-accept' => 'Urnosen daytoy a panid',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Sarita ti insao a pribado ti panagipagrupan',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dagiti nangato ken nababa tatta nga aldaw',
	'articleFeedback-table-caption-dailyhighs' => 'Dagiti panid nga addaan kadagiti kangatuan a pategan: $1',
	'articleFeedback-table-caption-dailylows' => 'Dagiti panid nga addaan kadagiti kababaan a pategan: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Ti kaaduan a nasukatan iti daytoy a lawas',
	'articleFeedback-table-caption-recentlows' => 'Dagiti kaudian kababaan',
	'articleFeedback-table-heading-page' => 'Panid',
	'articleFeedback-table-heading-average' => 'Natimbengan',
	'articleFeedback-copy-above-highlow-tables' => 'Daytoy ket subsubokan laeng a langa. Pangngaasi nga agited ti panagipagarupan idiay [$1 pagtungtungan a panid].',
	'articlefeedback-dashboard-bottom' => "'''Paammo''':Agtultuloy kami nga agsusubok ti sabsabali a waya ti panagibarabaw kadagiti artikulo kadagitoy a pagipatarayan. Iti agdama, ti pagipatarayan ket nairaman ti sumaganad nga artikulo:
* Dagiti panid nga addan dagiti kangatuan/kababaan a pategan: dagiti artikulo a nakaawat ti kabassitan a 10 a pategan iti uneg ti 24 nga oras. Ti pagtimbengan ket kalkulo babaen tipang-ala ti katengngaan kadagiti amin a pategan a naited
iti uneg ti 24 nga oras.
* Dagiti kinaudi a kababaan: dagiti artikulo a nakaala ti 70% wenno kaad-adu a nababa ( 2 a bituen wenno nabab-baba) a dagiti pategan iti ania man a kategoria iti kinaudi a 24 nga oras. Dagiti artikulo laeng a nakaala ti kababaan a 10 a pategan iti kinaudi a 24 nga oras dagiti mairaman.",
	'articlefeedback-disable-preference' => 'Saan nga iparang ti Artikulo a pangipagarupan a widget kadagiti paid',
	'articlefeedback-emailcapture-response-body' => 'Kablaaw!

Agyaman para iti panagi-yebkas ti pammateg iti panagitulong ti panag ti parang-ay {{SITENAME}}.

Pangngaasi nga agala ti kanito tapno mapasingkedan ti e-surat mo babaen ti panag-takla iti panilpo dita baba:

$1

Mabalin mo met a sarungkaren ti:

$2

Ken ikabil ti sumaganad a pagsingkedan a kodigo:

$3

Dakami ket sagiden da kan to no madamdama  no kasano ka a makatulong ti panagparang-ay ti {{SITENAME}}.

No saan mo nga inrugi daytoy a  kiddaw, pangngaasi a saan mo nga ikaskaso daytoy nga e-surat ken saan kami nga agipatulod ti ania man.

Dagiti kasayaatan a  tarigaygay, ken agyaman kami kania yo,
Timpuyog ti {{SITENAME}}',
);

/** Italian (italiano)
 * @author Aushulz
 * @author Beta16
 * @author F. Cosoleto
 * @author Pietrodn
 * @author Ximo17
 */
$messages['it'] = array(
	'articlefeedback' => 'Cruscotto valutazione pagine',
	'articlefeedback-desc' => 'Valutazione pagina',
	'articlefeedback-error' => 'Si è verificato un errore. 
Riprova più tardi.',
	'articlefeedback-form-switch-label' => 'Valuta questa pagina',
	'articlefeedback-form-panel-title' => 'Valuta questa pagina',
	'articlefeedback-form-panel-explanation' => "Cos'è questo?",
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Cancella questo giudizio',
	'articlefeedback-form-panel-expertise' => 'Conosco molto bene questo argomento (opzionale)',
	'articlefeedback-form-panel-expertise-studies' => 'Ho una laurea pertinente alla materia',
	'articlefeedback-form-panel-expertise-profession' => 'È parte della mia professione',
	'articlefeedback-form-panel-expertise-hobby' => 'È una profonda passione personale',
	'articlefeedback-form-panel-expertise-other' => 'La fonte della mia conoscenza non è elencata qui',
	'articlefeedback-form-panel-helpimprove' => 'Vorrei contribuire a migliorare Wikipedia, inviatemi una e-mail (facoltativo)',
	'articlefeedback-form-panel-helpimprove-note' => 'Ti invieremo una e-mail di conferma. Non condivideremo il tuo indirizzo di posta elettronica con terze parti ($1).',
	'articlefeedback-form-panel-helpimprove-privacy' => 'informazioni sulla privacy',
	'articlefeedback-form-panel-submit' => 'Invia voti',
	'articlefeedback-form-panel-pending' => 'Le tue valutazioni non sono state ancora inviate',
	'articlefeedback-form-panel-success' => 'Salvato con successo',
	'articlefeedback-form-panel-expiry-title' => 'Le tue valutazioni sono obsolete',
	'articlefeedback-form-panel-expiry-message' => 'Valuta nuovamente questa pagina ed inviaci i tuoi giudizi.',
	'articlefeedback-report-switch-label' => 'Vedi le valutazioni della pagina',
	'articlefeedback-report-panel-title' => 'Giudizio pagina',
	'articlefeedback-report-panel-description' => 'Valutazione media attuale.',
	'articlefeedback-report-empty' => 'Nessuna valutazione',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|un voto|$1 voti}}',
	'articlefeedback-field-trustworthy-label' => 'Affidabile',
	'articlefeedback-field-trustworthy-tip' => 'Ritieni che questa pagina abbia citazioni sufficienti e che queste citazioni provengano da fonti attendibili?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Manca di fonti affidabili',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Poche fonti affidabili',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Adeguate fonti affidabili',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Buone fonti affidabili',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Eccellenti fonti affidabili',
	'articlefeedback-field-complete-label' => 'Completa',
	'articlefeedback-field-complete-tip' => 'Ritieni che questa pagina copra le aree tematiche essenziali che dovrebbe?',
	'articlefeedback-field-complete-tooltip-1' => 'Manca la maggior parte delle informazioni',
	'articlefeedback-field-complete-tooltip-2' => 'Contiene alcune informazioni',
	'articlefeedback-field-complete-tooltip-3' => 'Contiene le informazioni chiave, ma con lacune',
	'articlefeedback-field-complete-tooltip-4' => 'Contiene la maggior parte delle informazioni chiave',
	'articlefeedback-field-complete-tooltip-5' => 'Trattazione completa',
	'articlefeedback-field-objective-label' => 'Obiettiva',
	'articlefeedback-field-objective-tip' => 'Ritieni che questa pagina mostri una rappresentazione equa di tutti i punti di vista sul tema?',
	'articlefeedback-field-objective-tooltip-1' => 'Fortemente di parte',
	'articlefeedback-field-objective-tooltip-2' => 'Moderatamente di parte',
	'articlefeedback-field-objective-tooltip-3' => 'Minimamente di parte',
	'articlefeedback-field-objective-tooltip-4' => 'Nessun pregiudizio ovvio',
	'articlefeedback-field-objective-tooltip-5' => 'Completamente imparziale',
	'articlefeedback-field-wellwritten-label' => 'Ben scritta',
	'articlefeedback-field-wellwritten-tip' => 'Ritieni che questa pagina sia ben organizzata e ben scritta?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Incomprensibile',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Difficile da capire',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Abbastanza chiaro',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Molto chiaro',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Eccezionalmente comprensibile',
	'articlefeedback-pitch-reject' => 'Forse più tardi',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => 'Grazie! Le tue valutazioni sono state salvate.',
	'articlefeedback-pitch-join-message' => 'Vuoi creare un account?',
	'articlefeedback-pitch-join-body' => 'Un account ti aiuterà a tenere traccia delle tue modifiche, a partecipare a discussioni e ad essere parte della comunità.',
	'articlefeedback-pitch-join-accept' => 'Crea un nuovo utente',
	'articlefeedback-pitch-join-login' => 'Entra',
	'articlefeedback-pitch-edit-message' => 'Sai che è possibile modificare questa pagina?',
	'articlefeedback-pitch-edit-accept' => 'Modifica questa pagina',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Alti e bassi di oggi',
	'articleFeedback-table-caption-dailyhighs' => 'Pagine con punteggi più alti: $1',
	'articleFeedback-table-caption-dailylows' => 'Pagine con punteggi più bassi: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Più modificati della settimana',
	'articleFeedback-table-caption-recentlows' => 'Bassi recenti',
	'articleFeedback-table-heading-page' => 'Pagina',
	'articleFeedback-table-heading-average' => 'Media',
	'articleFeedback-copy-above-highlow-tables' => 'Questa è una funzione sperimentale. Lascia un feedback sulla [$1 pagina di discussione].',
	'articlefeedback-dashboard-bottom' => "'''Nota''': Continueremo a sperimentare diversi modi di far apparire le voci su questi cruscotti. Allo stato attuale, i cruscotti includono le seguenti voci:
* Le pagine con il rating più alto/basso: ossia le voci che hanno ricevuto almeno 10 voti nelle ultime 24 ore. Le medie vengono calcolate facendo la media di tutte le valutazioni inviate nelle ultime 24 ore.
* Minimi recenti: le voci che hanno ottenuto il 70% o meno (da 2 stelle in giù) dei voti più bassi in qualsiasi categoria nelle ultime 24 ore. Sono incluse solo le voci che hanno ricevuto almeno 10 voti nelle ultime 24 ore.",
	'articlefeedback-disable-preference' => 'Non mostrare il widget di valutazione sulle pagine (Article Feedback)',
	'articlefeedback-emailcapture-response-body' => "Ciao e grazie per l'interesse mostrato nel contribuire a migliorare {{SITENAME}}.

Per favore, conferma il tuo indirizzo email cliccando sul collegamento sottostante:

$1

Si può anche visitare:

$2

e inserire il seguente codice di conferma:

$3

Nel caso non sei stato tu a fare questa richiesta, ti preghiamo di ignorare questa email e di conseguenza non ne riceverai più altre da parte nostra.

Grazie e a presto,
{{SITENAME}}.",
);

/** Japanese (日本語)
 * @author Akaniji
 * @author Anakmalaysia
 * @author F. Cosoleto
 * @author Fryed-peach
 * @author Marine-Blue
 * @author Ohgi
 * @author Schu
 * @author Shirayuki
 * @author Whym
 * @author Yanajin66
 * @author 青子守歌
 */
$messages['ja'] = array(
	'articlefeedback' => '記事へのフィードバックのダッシュボード',
	'articlefeedback-desc' => '記事へのフィードバック',
	'articlefeedback-error' => 'エラーが発生しました。後でもう一度試してください。',
	'articlefeedback-form-switch-label' => 'このページを評価',
	'articlefeedback-form-panel-title' => 'このページを評価',
	'articlefeedback-form-panel-explanation' => 'これは何?',
	'articlefeedback-form-panel-explanation-link' => 'Project:記事へのフィードバック',
	'articlefeedback-form-panel-clear' => 'この評価を除去',
	'articlefeedback-form-panel-expertise' => 'この話題について高度な知識を持っている (自由選択)',
	'articlefeedback-form-panel-expertise-studies' => '関連する大学の学位を持っている',
	'articlefeedback-form-panel-expertise-profession' => '自分の職業の一部である',
	'articlefeedback-form-panel-expertise-hobby' => '個人的に深い情熱を注いでいる',
	'articlefeedback-form-panel-expertise-other' => '自分の知識源はこの選択肢にない',
	'articlefeedback-form-panel-helpimprove' => 'ウィキペディアの改善に協力するためのメールを受け取る（任意）',
	'articlefeedback-form-panel-helpimprove-note' => 'あなたに確認メールをお送りします。私たちは$1に従います。メールアドレスを外部と共有することはありません。',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'email@example.jp',
	'articlefeedback-form-panel-helpimprove-privacy' => 'フィードバックのプライバシーについての表明',
	'articlefeedback-form-panel-submit' => '評価を送信',
	'articlefeedback-form-panel-pending' => 'あなたはまだ評価を送信していません',
	'articlefeedback-form-panel-success' => '保存しました',
	'articlefeedback-form-panel-expiry-title' => 'あなたの評価の有効期限が切れました',
	'articlefeedback-form-panel-expiry-message' => 'このページを再評価して、その新しい評価を送信してください。',
	'articlefeedback-report-switch-label' => 'ページの評価を表示',
	'articlefeedback-report-panel-title' => 'ページの評価',
	'articlefeedback-report-panel-description' => '現在の評価の平均です。',
	'articlefeedback-report-empty' => '評価なし',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|$1 件の評価}}',
	'articlefeedback-field-trustworthy-label' => '信頼性',
	'articlefeedback-field-trustworthy-tip' => 'このページは、十分な出典があり、それらの出典は信頼できる情報源によるものですか?',
	'articlefeedback-field-trustworthy-tooltip-1' => '信頼できる情報源が欠落している',
	'articlefeedback-field-trustworthy-tooltip-2' => 'わずかに信頼できる情報源',
	'articlefeedback-field-trustworthy-tooltip-3' => '十分に信頼できる情報源',
	'articlefeedback-field-trustworthy-tooltip-4' => 'かなり信頼できる情報源',
	'articlefeedback-field-trustworthy-tooltip-5' => '非常に信頼できる情報源',
	'articlefeedback-field-complete-label' => '網羅性',
	'articlefeedback-field-complete-tip' => 'このページは、必要不可欠な話題を含んでいると感じますか?',
	'articlefeedback-field-complete-tooltip-1' => 'ほとんどの情報が欠落している',
	'articlefeedback-field-complete-tooltip-2' => 'ある程度の情報を含んでいる',
	'articlefeedback-field-complete-tooltip-3' => '主要な情報を含んでいるが、食い違いがある',
	'articlefeedback-field-complete-tooltip-4' => '大部分の主要な情報を含んでいる',
	'articlefeedback-field-complete-tooltip-5' => '包括的に網羅している',
	'articlefeedback-field-objective-label' => '客観性',
	'articlefeedback-field-objective-tip' => 'このページは、ある問題に対するすべての観点を平等に説明していると思いますか?',
	'articlefeedback-field-objective-tooltip-1' => '大きく偏っている',
	'articlefeedback-field-objective-tooltip-2' => 'ある程度偏っている',
	'articlefeedback-field-objective-tooltip-3' => 'わずかに偏っている',
	'articlefeedback-field-objective-tooltip-4' => '明らかな偏りはない',
	'articlefeedback-field-objective-tooltip-5' => '完全に公平である',
	'articlefeedback-field-wellwritten-label' => '文章力',
	'articlefeedback-field-wellwritten-tip' => 'この記事は、良く整理され、良く書かれていると思いますか?',
	'articlefeedback-field-wellwritten-tooltip-1' => '理解できない',
	'articlefeedback-field-wellwritten-tooltip-2' => '理解するのが困難',
	'articlefeedback-field-wellwritten-tooltip-3' => '十分な明快さがある',
	'articlefeedback-field-wellwritten-tooltip-4' => 'かなりの明快さがある',
	'articlefeedback-field-wellwritten-tooltip-5' => '非常に優れた明快さがある',
	'articlefeedback-pitch-reject' => 'あとで',
	'articlefeedback-pitch-or' => 'または',
	'articlefeedback-pitch-thanks' => 'ありがとうございます。評価を保存しました。',
	'articlefeedback-pitch-join-message' => 'アカウントを作成しましょう。',
	'articlefeedback-pitch-join-body' => 'アカウントを作成することで、自分の編集を振り返るのが容易になり、議論に参加しやすくなり、コミュニティの一員にもなれます。',
	'articlefeedback-pitch-join-accept' => 'アカウント作成',
	'articlefeedback-pitch-join-login' => 'ログイン',
	'articlefeedback-pitch-edit-message' => 'このページを編集できることをご存じですか?',
	'articlefeedback-pitch-edit-accept' => 'このページを編集',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement/ja',
	'articleFeedback-table-caption-dailyhighsandlows' => '今日の最高値と最低値',
	'articleFeedback-table-caption-dailyhighs' => '最も評価が高いページ: $1',
	'articleFeedback-table-caption-dailylows' => '最も評価が低いページ: $1',
	'articleFeedback-table-caption-weeklymostchanged' => '今週もっとも変わったもの',
	'articleFeedback-table-caption-recentlows' => '最近低いもの',
	'articleFeedback-table-heading-page' => 'ページ',
	'articleFeedback-table-heading-average' => '平均',
	'articlefeedback-table-noratings' => '-',
	'articleFeedback-copy-above-highlow-tables' => 'これは開発中の機能です。[$1 議論ページ]でフィードバックをお寄せください。',
	'articlefeedback-disable-preference' => '記事へのフィードバック ウィジェットをページに表示しない',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'articlefeedback' => 'Dasbor lebon saran artikel',
	'articlefeedback-desc' => 'Lebon saran artikel',
	'articlefeedback-error' => 'Ana kasalahan. Coba manèh mengko.',
	'articlefeedback-form-switch-label' => 'Biji kaca iki',
	'articlefeedback-form-panel-title' => 'Biji kaca iki',
	'articlefeedback-form-panel-explanation' => 'Apa iki?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Busak biji iki',
	'articlefeedback-form-panel-expertise' => 'Kula ngerti tenan babagan iki (pilihan)',
	'articlefeedback-form-panel-expertise-studies' => 'Kula nduwèni gelar perguruan dhuwur/universitar sing ana kaitané',
	'articlefeedback-form-panel-expertise-profession' => 'Iki bagéyan padamelan kula',
	'articlefeedback-form-panel-expertise-hobby' => 'Iki kakarepan pribadi kula sing jero',
	'articlefeedback-form-panel-expertise-other' => 'Sumber kawruhku ora kadaptar nèng kéné',
	'articlefeedback-form-panel-helpimprove' => 'Kula pingin mbenahi Wikipédia, kirimi kula layang èlèktronik (pilihan)',
	'articlefeedback-form-panel-helpimprove-note' => 'Awak dhéwé bakal ngirimi Sampéyan layang èlèktronik pepesthèn. Awak dhéwé ora bakal ngedumaké alamat layang èlèktronik Sampéyan nèng sapa waé $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'parnyatan pripasi lebon saran',
	'articlefeedback-form-panel-submit' => 'Kirim biji',
	'articlefeedback-form-panel-pending' => 'Biji Sampéyan durung dikirim',
	'articlefeedback-form-panel-success' => 'Suksès disimpen',
	'articlefeedback-form-panel-expiry-title' => 'Biji Sampéyan wis kedaluwarsa',
	'articlefeedback-form-panel-expiry-message' => 'Mangga balèni mbiji kaca iki lan kirim biji anyar.',
	'articlefeedback-report-switch-label' => 'Delok biji kaca',
	'articlefeedback-report-panel-title' => 'Biji kaca',
	'articlefeedback-report-panel-description' => 'Biji reratan saiki.',
	'articlefeedback-report-empty' => 'Ora ana biji',
	'articlefeedback-report-ratings' => 'Biji $1',
	'articlefeedback-field-trustworthy-label' => 'Mitayani',
	'articlefeedback-field-trustworthy-tip' => 'Apa kaca iki nduwèni cukup kutipan lan kutipan kasebat kaasal saka sumber sing mitayani?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Sumber sing mitayani kurang',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Sumber sing mitayani sithik',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Sumber sing mitayani cukup',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Sumber sing mitayani apik',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Sumber sing mitayani apik banget',
	'articlefeedback-field-complete-label' => 'Jangkep',
	'articlefeedback-field-complete-tip' => 'Apa kaca iki ngemot wilayah topik wigati sing sakuduné?',
	'articlefeedback-field-complete-tooltip-1' => 'Kélangan sebagéyan gedhé inpormasi',
	'articlefeedback-field-complete-tooltip-2' => 'Kaisi sapérangan inpormasi',
	'articlefeedback-field-complete-tooltip-3' => 'Kaisi inpormasi kunci, nanging mawa slisih',
	'articlefeedback-field-complete-tooltip-4' => 'Kaisi sebagéyan gedhé inpormasi kunci',
	'articlefeedback-field-complete-tooltip-5' => 'Cakepan amba',
	'articlefeedback-field-objective-label' => 'Obyèktip',
	'articlefeedback-field-objective-tip' => 'Apa kaca iki nuduhaké réprésentasi sing adil saka kabèh sudhut pandhang ngenani topik iki?',
	'articlefeedback-field-objective-tooltip-1' => 'Abot sisih banget',
	'articlefeedback-field-objective-tooltip-2' => 'Rada abot sisih',
	'articlefeedback-field-objective-tooltip-3' => 'Ora patia abot sisih',
	'articlefeedback-field-objective-tooltip-4' => 'Ora ana abot sisih',
	'articlefeedback-field-objective-tooltip-5' => 'Ora abot sisih banget',
	'articlefeedback-field-wellwritten-label' => 'Katulis apik',
	'articlefeedback-field-wellwritten-tip' => 'Apa kaca iki katata apik lan katulis apik?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Ora bisa dingertèni',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Angèl dingertèni',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Cukup cetha',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Cetha',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Cetha banget',
	'articlefeedback-pitch-reject' => 'Mungkin wektu liya',
	'articlefeedback-pitch-or' => 'utawa',
	'articlefeedback-pitch-thanks' => 'Matur nuwun! Biji Sampéyan wis kasimpen.',
	'articlefeedback-pitch-join-message' => 'Sampéyan pingin nggawé akun?',
	'articlefeedback-pitch-join-body' => 'Akun bakal ngèwangi Sampéyan nlusur suntingan Sampéyan, melu nèng rembugan, lan dadi bagéyan komunitas.',
	'articlefeedback-pitch-join-accept' => 'Gawé akun',
	'articlefeedback-pitch-join-login' => 'Mlebu log',
	'articlefeedback-pitch-edit-message' => 'Apa Sampéyan ngerti yèn Sampéyan bisa nyunting kaca iki?',
	'articlefeedback-pitch-edit-accept' => 'Sunting kaca iki',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Pamunggahan lan pamedhunan dina iki',
	'articleFeedback-table-caption-dailyhighs' => 'Kaca mawa biji paling dhuwur: $1',
	'articleFeedback-table-caption-dailylows' => 'Kaca mawa biji paling cendhèk: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Paling akèh diowah minggu iki',
	'articleFeedback-table-caption-recentlows' => 'Pamendhunan paling anyar',
	'articleFeedback-table-heading-page' => 'Kaca',
	'articleFeedback-table-heading-average' => 'Reratan',
	'articleFeedback-copy-above-highlow-tables' => 'Iki fitur njajal-njajal. Mangga nyadhiyakaké lebon saran nèng [$1 kaca parembugan].',
	'articlefeedback-disable-preference' => 'Aja tuduhaké widget lebon sara Artikel nèng kaca',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 * @author Dawid Deutschland
 * @author ITshnik
 * @author გიორგიმელა
 */
$messages['ka'] = array(
	'articlefeedback' => 'სტატიის შეფასების დაფა',
	'articlefeedback-desc' => 'სტატიის შეფასება',
	'articlefeedback-error' => 'სამწუხაროდ, შეცდომა წარმოიშვა. გთხოვთ, სცადეთ მოგვიანებით.',
	'articlefeedback-form-switch-label' => 'შეაფასეთ ეს გვერდი',
	'articlefeedback-form-panel-title' => 'შეაფასეთ ეს გვერდი',
	'articlefeedback-form-panel-explanation' => 'რა არის ეს?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'შეფასების წაშლა',
	'articlefeedback-form-panel-expertise' => 'მე გარკვეული ვარ სტატიის საგანში (სურვილისამებრ)',
	'articlefeedback-form-panel-expertise-studies' => 'სტატიის საგანი უმაღლეს სასწავლებელში ვისწავლე',
	'articlefeedback-form-panel-expertise-profession' => 'სტატიის საგანი ჩემი პროფესიის ნაწილია',
	'articlefeedback-form-panel-expertise-hobby' => 'სტატიის საგანი ჩემი ჰობია',
	'articlefeedback-form-panel-expertise-other' => 'ჩემი ცოდნის წყარო აქ მოცემული არაა',
	'articlefeedback-form-panel-helpimprove' => 'მე მსურს დაგეხმაროთ „ვიკიპედიის„ გაუმჯობესებაში, გამომიგზავნეთ ელ-ფოსტა (სურვილისამებრ)',
	'articlefeedback-form-panel-helpimprove-note' => 'ჩვენ გამოვაგზავნით დამადასტურებელ წერილს. ჩვენ არავის გადავცემთ თქვენი ელ-ფოსტის მისამართს. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'კონფიდენციალობის პოლიტიკა',
	'articlefeedback-form-panel-submit' => 'შეფასება',
	'articlefeedback-form-panel-pending' => 'თქვენი შეფასება ჯერ არ გაგზავნილა',
	'articlefeedback-form-panel-success' => 'შენახულია წარმატებით',
	'articlefeedback-form-panel-expiry-title' => 'თქვენი შეფასება მოძველდა',
	'articlefeedback-form-panel-expiry-message' => 'გთოხვთ, გადახედეთ ამ გვერდს და თავიდან შეაფასეთ.',
	'articlefeedback-report-switch-label' => 'გვერდის შეფასებების ჩვენება',
	'articlefeedback-report-panel-title' => 'გვერდის შეფასებები',
	'articlefeedback-report-panel-description' => 'შეფასების ამჟამინდელი შედეგები',
	'articlefeedback-report-empty' => 'შეფასებები არაა',
	'articlefeedback-report-ratings' => '$1 შეფასება',
	'articlefeedback-field-trustworthy-label' => 'სანდოობა',
	'articlefeedback-field-trustworthy-tip' => 'ფიქრობთ, რომ ეს სტატია საკმარისი რაოდენობით შეიცავს სანდო და გადამოწმებად წყაროებს?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'არაა ინფორმაციის ავტორიტეტული წყარო',
	'articlefeedback-field-trustworthy-tooltip-2' => 'ინფორმაციის ავტორიტეტული წყაროების რაოდენობა არასაკმარისია',
	'articlefeedback-field-trustworthy-tooltip-3' => 'ადექვატური ავტორიტეტული წყაროები',
	'articlefeedback-field-trustworthy-tooltip-4' => 'ინფორმაციის კარგი წყაროებია',
	'articlefeedback-field-trustworthy-tooltip-5' => 'ინფორმაციის შესანიშნავი წყაროებია',
	'articlefeedback-field-complete-label' => 'დასრულებულობა',
	'articlefeedback-field-complete-tip' => 'მიიჩნევთ თუ არა, რომ სტატიაში სრულიად ასახულია საგანთან დაკავშირებული მნიშვნელოვანი ასპექტები?',
	'articlefeedback-field-complete-tooltip-1' => 'ინფორმაციის დიდი ნაწილი არ არის ასახული',
	'articlefeedback-field-complete-tooltip-2' => 'შეიცავს ცოტა ინფორმაციას',
	'articlefeedback-field-complete-tooltip-3' => 'შეიცავს ინფორმაციის დიდ ნაწილს, მაგრამ ბევრი თეთრი ლაქაა',
	'articlefeedback-field-complete-tooltip-4' => 'შეიცავს ძირითად ინფორმაციას',
	'articlefeedback-field-complete-tooltip-5' => 'სტატიის საგანი შესანიშნავადაა გაშუქებული',
	'articlefeedback-field-objective-label' => 'მიუკერძოებელია',
	'articlefeedback-field-objective-tip' => 'მიგაჩნიათ, რომ სტატია მიუკერძოებლადაა დაწერილი?',
	'articlefeedback-field-objective-tooltip-1' => 'ძალიან მიკერძოებულია',
	'articlefeedback-field-objective-tooltip-2' => 'საშუალოდ მიკერძოებულია',
	'articlefeedback-field-objective-tooltip-3' => 'მინიმალურად მიკერძოებულია',
	'articlefeedback-field-objective-tooltip-4' => 'მიკერძოება არ ეტყობა',
	'articlefeedback-field-objective-tooltip-5' => 'სრულიად მიუკერძოებელია',
	'articlefeedback-field-wellwritten-label' => 'კარგად დაწერილი',
	'articlefeedback-field-wellwritten-tip' => 'მიგაჩნიათ, რომ ეს სტატია კარგი სტრუქტურის მქოენა და კარგადაა დაწერილი?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'გაუგებარი',
	'articlefeedback-field-wellwritten-tooltip-2' => 'გასაგებად ძნელი',
	'articlefeedback-field-wellwritten-tooltip-3' => 'ადექვატურად დაწერილი',
	'articlefeedback-field-wellwritten-tooltip-4' => 'გასაგებად დაწერილია',
	'articlefeedback-field-wellwritten-tooltip-5' => 'საოცრად გასაგებია',
	'articlefeedback-pitch-reject' => 'შესაძლოა, მაგრამ მოგვიანებით',
	'articlefeedback-pitch-or' => 'ან',
	'articlefeedback-pitch-thanks' => 'გმადლობთ! შეფასება შენახულია.',
	'articlefeedback-pitch-join-message' => 'იცით, რომ შეგიძლიათ ანგარიშის შექმნა?',
	'articlefeedback-pitch-join-body' => 'ანგარიშის მეშვეობით თქვენ შეძლებთ განხილვებში მონაწილეობის მიღება, გახდებით ქართული ვიკიპედიის საზოგადოების წევრი.',
	'articlefeedback-pitch-join-accept' => 'ანგარიშის შექმნა',
	'articlefeedback-pitch-join-login' => 'შესვლა',
	'articlefeedback-pitch-edit-message' => 'იცით, რომ თქვენ ამ სტატიის რედაქტირება შეგიძლიათ?',
	'articlefeedback-pitch-edit-accept' => 'ამ გვერდის რედაქტირება',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'დღევანდელი აღზევება და დაცემა',
	'articleFeedback-table-caption-dailyhighs' => 'გვერდები უმაღლესი შეფასებით: $1',
	'articleFeedback-table-caption-dailylows' => 'გვერდები უარესი შეფასებით: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'ამ კვირაში ყველაზე მეტად შეცვლილი',
	'articleFeedback-table-caption-recentlows' => 'ბოლოდროინდელი დაცემები',
	'articleFeedback-table-heading-page' => 'გვერდი',
	'articleFeedback-table-heading-average' => 'საშუალო',
);

/** Kirmanjki (Kırmancki)
 * @author Mirzali
 */
$messages['kiu'] = array(
	'articlefeedback-form-panel-explanation' => 'No çıko?',
	'articlefeedback-field-objective-label' => 'Bêteref',
	'articlefeedback-pitch-or' => 'ya ki',
	'articlefeedback-pitch-join-login' => 'Cı kuye',
	'articlefeedback-pitch-edit-accept' => 'Na pele bıvurne',
	'articleFeedback-table-heading-page' => 'Pele',
);

/** Korean (한국어)
 * @author Freebiekr
 * @author Klutzy
 * @author Kwj2772
 * @author Ricolyuki
 * @author 아라
 */
$messages['ko'] = array(
	'articlefeedback' => '문서 평가 현황',
	'articlefeedback-desc' => '항목 평가',
	'articlefeedback-error' => '오류가 발생했습니다. 나중에 다시 시도해주세요.',
	'articlefeedback-form-switch-label' => '문서 평가하기',
	'articlefeedback-form-panel-title' => '문서 평가하기',
	'articlefeedback-form-panel-explanation' => '어떤 기능인가요?',
	'articlefeedback-form-panel-explanation-link' => 'Project:문서 평가',
	'articlefeedback-form-panel-clear' => '평가 제거하기',
	'articlefeedback-form-panel-expertise' => '이 문서에 대해 전문적인 지식이 있습니다(선택사항)',
	'articlefeedback-form-panel-expertise-studies' => '관련 대학 학위를 가지고 있습니다',
	'articlefeedback-form-panel-expertise-profession' => '직업과 관련되어 있습니다',
	'articlefeedback-form-panel-expertise-hobby' => '개인적으로 큰 관심이 있습니다',
	'articlefeedback-form-panel-expertise-other' => '기타',
	'articlefeedback-form-panel-helpimprove' => '위키백과 개선을 위한 이메일을 받습니다(선택사항)',
	'articlefeedback-form-panel-helpimprove-note' => '확인 메일을 보낼 것입니다. 당신의 이메일 주소를  $1에 따라 외부와 공유하지 않겠습니다.',
	'articlefeedback-form-panel-helpimprove-privacy' => '피드백 개인정보 정책',
	'articlefeedback-form-panel-submit' => '평가 제출',
	'articlefeedback-form-panel-pending' => '평가를 제출하지 않았습니다',
	'articlefeedback-form-panel-success' => '저장 완료',
	'articlefeedback-form-panel-expiry-title' => '평가 유효 기간이 지났습니다',
	'articlefeedback-form-panel-expiry-message' => '문서를 다시 평가한 다음 제출해주세요.',
	'articlefeedback-report-switch-label' => '문서 평가 보기',
	'articlefeedback-report-panel-title' => '문서 평가',
	'articlefeedback-report-panel-description' => '평가 평균값입니다.',
	'articlefeedback-report-empty' => '평가 없음',
	'articlefeedback-report-ratings' => '평가 $1개',
	'articlefeedback-field-trustworthy-label' => '신뢰성',
	'articlefeedback-field-trustworthy-tip' => '이 문서를 뒷받침하는 충분한 출처가 있고, 그 출처가 믿을 수 있다고 생각하시나요?',
	'articlefeedback-field-trustworthy-tooltip-1' => '평판이 좋은 출처 부재',
	'articlefeedback-field-trustworthy-tooltip-2' => '평판이 좋은 출처 부족',
	'articlefeedback-field-trustworthy-tooltip-3' => '평판이 좋은 출처 적당',
	'articlefeedback-field-trustworthy-tooltip-4' => '평판이 좋은 출처 다수',
	'articlefeedback-field-trustworthy-tooltip-5' => '평판이 좋은 출처 상당수',
	'articlefeedback-field-complete-label' => '완전성',
	'articlefeedback-field-complete-tip' => '이 문서에서 다루어야 하는 내용을 충분히 담고 있다고 생각하시나요?',
	'articlefeedback-field-complete-tooltip-1' => '정보 대부분이 없음',
	'articlefeedback-field-complete-tooltip-2' => '정보 일부 포함',
	'articlefeedback-field-complete-tooltip-3' => '주요 정보 있지만 빠진 것도 있음',
	'articlefeedback-field-complete-tooltip-4' => '주요 정보 대부분 포함',
	'articlefeedback-field-complete-tooltip-5' => '광범위하게 다룸',
	'articlefeedback-field-objective-label' => '객관성',
	'articlefeedback-field-objective-tip' => '이 문서는 여러 관점을 공정하게 다루고 있다고 생각하시나요?',
	'articlefeedback-field-objective-tooltip-1' => '매우 편향됨',
	'articlefeedback-field-objective-tooltip-2' => '편향이 적당함',
	'articlefeedback-field-objective-tooltip-3' => '편향이 아주 적음',
	'articlefeedback-field-objective-tooltip-4' => '명백한 편향이 없음',
	'articlefeedback-field-objective-tooltip-5' => '편향이 전혀 없음',
	'articlefeedback-field-wellwritten-label' => '글의 짜임새',
	'articlefeedback-field-wellwritten-tip' => '이 문서가 짜임새있게 잘 구성되어있다고 생각하시나요?',
	'articlefeedback-field-wellwritten-tooltip-1' => '이해할 수 없음',
	'articlefeedback-field-wellwritten-tooltip-2' => '이해하기 어려움',
	'articlefeedback-field-wellwritten-tooltip-3' => '적당하게 명확함',
	'articlefeedback-field-wellwritten-tooltip-4' => '매우 명확함',
	'articlefeedback-field-wellwritten-tooltip-5' => '아주 명확함',
	'articlefeedback-pitch-reject' => '나중에 평가하기',
	'articlefeedback-pitch-or' => '또는',
	'articlefeedback-pitch-thanks' => '감사합니다! 평가가 저장되었습니다.',
	'articlefeedback-pitch-join-message' => '계정을 만들고 싶으신가요?',
	'articlefeedback-pitch-join-body' => '계정을 만들면 편집 내역을 확인하고 토론에 참여하거나, 커뮤니티의 일원으로 활동하기 쉬워집니다.',
	'articlefeedback-pitch-join-accept' => '계정 만들기',
	'articlefeedback-pitch-join-login' => '로그인',
	'articlefeedback-pitch-edit-message' => '이 문서를 편집할 수 있는지 알고 있었나요?',
	'articlefeedback-pitch-edit-accept' => '이 문서 편집하기',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => '오늘의 최고값과 최저값',
	'articleFeedback-table-caption-dailyhighs' => '가장 높은 평가를 받은 문서: $1',
	'articleFeedback-table-caption-dailylows' => '가장 낮은 평가를 받은 문서: $1',
	'articleFeedback-table-caption-weeklymostchanged' => '이번 주에 가장 많이 바뀐 문서',
	'articleFeedback-table-caption-recentlows' => '최근의 평점 낮은 문서',
	'articleFeedback-table-heading-page' => '문서',
	'articleFeedback-table-heading-average' => '평균',
	'articleFeedback-copy-above-highlow-tables' => '실험적인 기능입니다. 기능에 대한 의견을 [$1 토론란]에 남겨 주세요.',
	'articlefeedback-dashboard-bottom' => "'''참고''': 우리는 이 평가 상자에서 문서를 다양하게 나타내는 실험을 계속할 것입니다. 지금 평가 상자는 다음 문서를 나타냅니다:
* 최고/최저 평가를 받은 문서: 지난 24시간 이내에 평가를 10번 이상 받은 문서로  제출된 평가 모두의 산술평균을 구해 평균으로 합니다. 
* 최근 낮은 평가를 받은 문서: 지난 24시간 이내에 분류에 상관 없이 70%이상이 낮게(별 2개 이하) 평가한 문서로  평가를 10번 이상 받은 문서만 나타납니다.",
	'articlefeedback-disable-preference' => '문서에 평가 도구 표시하지 않기',
	'articlefeedback-emailcapture-response-body' => '안녕하세요!

{{SITENAME}}에 개선하는 것을 돕는 데 관심을 보여주어서 감사합니다.

잠시 시간을 내어 아래의 링크를 클릭하여 이메일을 확인하세요:

$1

다음 웹사이트를 방문할 수도 있습니다:

$2

그리고 다음 확인 코드를 입력하세요:

$3

곧 {{SITENAME}} 개선을 어떻게 도울지와 관련해 연락하겠습니다.

이 요청을 하지 않았다면 이 메일을 무시하세요. 그러면 그 밖의 어떤 것도 보내지 않을 것입니다.

감사합니다.
{{SITENAME}}팀',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'articlefeedback' => 'Enschäzonge för Sigge — Övverbleck',
	'articlefeedback-desc' => 'Enschäzonge för Sigge',
	'articlefeedback-error' => 'Ene Fähler es dozwesche jukumme.
Versöhg et shpääder norr_ens.',
	'articlefeedback-form-switch-label' => 'Heh di Sigg enschäze',
	'articlefeedback-form-panel-title' => 'Heh di Sigg enschäze',
	'articlefeedback-form-panel-explanation' => 'Wat sul dat heh bedügge?',
	'articlefeedback-form-panel-explanation-link' => 'Project:{{int:articlefeedback-desc}}',
	'articlefeedback-form-panel-clear' => 'Enschäzong fott nämme',
	'articlefeedback-form-panel-expertise' => 'Esch han vill Ahnong vun däm Theema (kam_mer fott lohße)',
	'articlefeedback-form-panel-expertise-studies' => 'Esch han dat aan ene Huhscholl udder aan der Univäsitäät shtudeet, un han ene Afschloß jemaat',
	'articlefeedback-form-panel-expertise-profession' => 'Et jehöt bei minge Beroof',
	'articlefeedback-form-panel-expertise-hobby' => 'Esch han e deef Inträße aan dä Saach',
	'articlefeedback-form-panel-expertise-other' => 'Söns jät, wat heh nit opjeföhrd es',
	'articlefeedback-form-panel-helpimprove' => 'Esch däät jähn methällfe, {{GRAMMAR:Nominativ|{{SITENAME}}}} bäßer ze maache. Doht mer en <i lang="en">e-mail</i> schecke. (Kam_mer fott lohße)',
	'articlefeedback-form-panel-helpimprove-note' => 'Mr schecke Der en <i lang="en">e-mail</i> zum Beschtäteje.
Mer jävve Ding Adräß för de <i lang="en">e-mail</i> aan Keine vun Ußerhallef wigger, wi en dä $1 faßjelaat.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'e-mail@example.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Rääjelle för der Daateschotz un de Jeheimhaldung för Röckmäldonge',
	'articlefeedback-form-panel-submit' => 'Lohß jonn!',
	'articlefeedback-form-panel-pending' => 'Din Enschäzonge sin noch nicht huhjelaade',
	'articlefeedback-form-panel-success' => 'Afjeshpeishert.',
	'articlefeedback-form-panel-expiry-title' => 'Ding Enschäzonge sen enzwesche övverhollt',
	'articlefeedback-form-panel-expiry-message' => 'Donn di Sigg heh neu Enschaäze, bes esu joot,',
	'articlefeedback-report-switch-label' => 'Enschäzunge vun heh dä Sigg beloore',
	'articlefeedback-report-panel-title' => 'Enschäzunge vun heh dä Sigg',
	'articlefeedback-report-panel-description' => 'De dorschnettlesche Enschäzunge.',
	'articlefeedback-report-empty' => 'Kein Enschäzunge',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|Ein Enschäzung|$1 Enschäzunge|Kein Enschäzung}}',
	'articlefeedback-field-trustworthy-label' => 'Verdent Vertroue',
	'articlefeedback-field-trustworthy-tip' => 'Meins De, dat heh di Sigg jenooch Quälle aanjitt, un dat mer dänne jläuve kann?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Kein verläßlesche Quelle aanjejovve',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Nit vill verläßlesche Quelle aanjejovve',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Jraad jenoch verläßlesche Quelle aanjejovve',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Joode un verläßlesche Quelle aanjejovve',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Fantastesche un verläßlesche Quelle aanjejovve',
	'articlefeedback-field-complete-label' => 'Kumplätt',
	'articlefeedback-field-complete-tip' => 'Meins De, dat heh di Sigg all dat enthallde deiht, wat weeshtesh un nüüdesch is, dat nix draan fählt?',
	'articlefeedback-field-complete-tooltip-1' => 'Et fählt et mießte, wat mer lässe well',
	'articlefeedback-field-complete-tooltip-2' => 'E beßje es doh, wat mer lässe well',
	'articlefeedback-field-complete-tooltip-3' => 'Et Weschteschßte es doh, wat mer lässe well, ävver et fählt och öhnlesch jät',
	'articlefeedback-field-complete-tooltip-4' => 'Vun de Houpsaache es et miehßte doh',
	'articlefeedback-field-complete-tooltip-5' => 'Üßföhrlesch',
	'articlefeedback-field-objective-label' => 'Opjäktiev',
	'articlefeedback-field-objective-tip' => 'Meins De, dat heh di Sigg ob en aanschtändije un ußjewoore Aat all de Aanseshte un Bedraachtungswiese vun der iehrem Teema widderjitt?',
	'articlefeedback-field-objective-tooltip-1' => 'Es övverhoup nit opjäktiev',
	'articlefeedback-field-objective-tooltip-2' => 'Es nit besönders opjäktiev',
	'articlefeedback-field-objective-tooltip-3' => 'Es nit esu janz opjäktiev, ävver et jeiht esu',
	'articlefeedback-field-objective-tooltip-4' => 'Süüd opjäktiev uß',
	'articlefeedback-field-objective-tooltip-5' => 'Es janz opjäktiev',
	'articlefeedback-field-wellwritten-label' => 'Joot jeschrevve',
	'articlefeedback-field-wellwritten-tip' => 'Fengks De heh di Sigg joot zosamme_jeschtalld un joot jeschrevve?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Verschteiht mer nit',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Schwer ze verschtonn',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Verschtändlesch jenooch',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Joot ze verschtonn',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Ußerjewöhlesch joot ze verschtonn',
	'articlefeedback-pitch-reject' => 'Shpääder velleish',
	'articlefeedback-pitch-or' => 'udder',
	'articlefeedback-pitch-thanks' => 'Mer donn uns bedangke. Ding Enschäzonge sin faßjehallde.',
	'articlefeedback-pitch-join-message' => 'Wells De Desch aanmällde?',
	'articlefeedback-pitch-join-body' => 'Med en Aanmälldong kanns De leisch Ding eije Beidrääsch verfollje, beim Klaafe metmaache un e Deil vun der Jemeinschaff sin.',
	'articlefeedback-pitch-join-accept' => 'Aaanmälde',
	'articlefeedback-pitch-join-login' => 'Enlogge',
	'articlefeedback-pitch-edit-message' => 'Häß De jewoß, dat De heh di Sigg ändere kanns?',
	'articlefeedback-pitch-edit-accept' => 'Donn heh di Sigg ändere',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement/ksh',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Hühje un Deefe vun hück',
	'articleFeedback-table-caption-dailyhighs' => 'Sigge met de beste Enschäzonge: $1',
	'articleFeedback-table-caption-dailylows' => 'Sigge met de schläächteste Enschäzonge: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Diß Woch et miehtß jeändert',
	'articleFeedback-table-caption-recentlows' => 'Köözlejje Deefe',
	'articleFeedback-table-heading-page' => 'Sigg',
	'articleFeedback-table-heading-average' => 'Dorschnett',
	'articleFeedback-copy-above-highlow-tables' => 'Mer sin dat heeh aam upropeere.
Doht uns op di [$1 Klaafsigg] schrieve, wad Er dovun hallde doht.',
	'articlefeedback-dashboard-bottom' => "'''Opjepaß''': Mer donn ongerscheidlijje Aate ußprobeere, Atikelle heh en dä Övverseeschte ze zeije. Em Momang sin dobei:
* Sigge met de hühßte un de deefste Enschäzonge - die mieh wie zehn Mohl en de verjangene 24 Schtonde enjeschäz woode sen. Der Dorschnett weed us alle Enschäzonge us dä 24 Schtonde ußjerääschnet.
* Sigge met de deefste Enschäzonge köözlesch - die mieh wie 70% Mohl en de verjangene 24 Schtonde schlääsch enjeschäz woode sen, met 2 Schtähnscher udder winnijer. Bloß Atikelle met zehn Enschäzonge us dä 24 Schtonde sen met dobei.",
	'articlefeedback-disable-preference' => 'Donn dä Knopp zum Sigge Enschäze nit op de Sigge aanzeije',
	'articlefeedback-emailcapture-response-body' => 'Ene schönne Daach,

mer bedangke uns för Ding Enträße, {{GRAMMAR:Akkusativ|{{SITENAME}}}} bäßer ze maache.

Nemm Der ene Momang, öm Ding e-mail Adräß ze beschtääteje, un donn däm Lingk heh follje:

$1

Do kanns och op heh di Sigg jonn:

$2

un dann dä Kood heh enjävve:

$3

Mer mälde ons bahl bei Der, wi de met {{GRAMMAR:Dativ|{{SITENAME}}}} hälfe kanns.

Wann De dat heh sällver nit aanjschtüße häs, donn nix, un mer don Der och nix mieh schecke.

Ene schööne Jrohß!

De Jemeinschaff vun {{GRAMMAR:Nominativ|{{SITENAME}}}}',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'articlefeedback-form-panel-explanation' => 'Ev çi ye?',
	'articlefeedback-report-switch-label' => 'Encaman nîşan bide', # Fuzzy
	'articlefeedback-pitch-edit-accept' => 'Vê rûpelê biguherîne',
	'articleFeedback-table-heading-page' => 'Rûpel',
);

/** Kirghiz (Кыргызча)
 * @author Chorobek
 */
$messages['ky'] = array(
	'articlefeedback-pitch-join-login' => 'Кирүү',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Catrope
 * @author Robby
 */
$messages['lb'] = array(
	'articlefeedback' => 'Iwwerbléck-Säit Artikelbewäertung',
	'articlefeedback-desc' => 'Artikel Feedback',
	'articlefeedback-error' => 'Et ass e Feeler geschitt. Probéiert w.e.g. méi spéit nach emol.',
	'articlefeedback-form-switch-label' => 'Dës Säit bewäerten',
	'articlefeedback-form-panel-title' => 'Dës Säit bewäerten',
	'articlefeedback-form-panel-explanation' => 'Wat ass dat?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Artikel-Feedback',
	'articlefeedback-form-panel-clear' => 'Dës Bewäertung ewechhuelen',
	'articlefeedback-form-panel-expertise' => 'Ech weess gutt iwwer dëse Sujet Bescheed (fakultativ)',
	'articlefeedback-form-panel-expertise-studies' => 'Ech hunn een Ofschloss an der Schoul/op der Universitéit zu deem Sujet',
	'articlefeedback-form-panel-expertise-profession' => 'Et ass en Deel vu mengem Beruff',
	'articlefeedback-form-panel-expertise-hobby' => 'Ech si passionéiert vun deem Sujet',
	'articlefeedback-form-panel-expertise-other' => "D'Quell vu mengem Wëssen ass hei net opgezielt",
	'articlefeedback-form-panel-helpimprove' => 'Ech wëll hëllefe fir {{SITENAME}} ze verbesseren, schéckt mir eng E-Mail (fakultativ)',
	'articlefeedback-form-panel-helpimprove-note' => 'Mir schécken Iech eng Confirmatiouns-Mail. Mir ginn Är E-Mailadress u kee weider esou wéi an eise(n) $1 virgesinn ass.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Dateschutz vum Feedback',
	'articlefeedback-form-panel-submit' => 'Bewäertunge schécken',
	'articlefeedback-form-panel-pending' => 'Äre Bewäertunge goufen nach net ageschéckt',
	'articlefeedback-form-panel-success' => 'Gespäichert',
	'articlefeedback-form-panel-expiry-title' => 'Är Bewäertung ass ofgelaf',
	'articlefeedback-form-panel-expiry-message' => 'Bewäert dëse Säit w.e.g. nach emol a späichert déi nei Bewäertung.',
	'articlefeedback-report-switch-label' => 'Bewäertunge vun der Säit weisen',
	'articlefeedback-report-panel-title' => 'Bewäertunge vun der Säit',
	'articlefeedback-report-panel-description' => 'Aktuell duerchschnëttlech Bewäertung.',
	'articlefeedback-report-empty' => 'Keng Bewäertungen',
	'articlefeedback-report-ratings' => '$1 Bewäertungen',
	'articlefeedback-field-trustworthy-label' => 'Vertrauenswürdeg',
	'articlefeedback-field-trustworthy-tip' => 'Hutt Dir den Androck datt dës Säit genuch Zitater huet an datt dës Zitater aus vertrauenswierdege Quelle kommen?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Seriéis Quelle feelen',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Wéineg seriéis Quellen',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Adequat seriéis Quellen',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Genuch seriéis Quellen',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Vill seriéis Quellen',
	'articlefeedback-field-complete-label' => 'Komplett',
	'articlefeedback-field-complete-tip' => 'Hutt dir den Androck datt dës Säit déi wesentlech Aspekter vun dësem Sujet behandelt déi solle beliicht ginn?',
	'articlefeedback-field-complete-tooltip-1' => 'Kaum Informatiounen',
	'articlefeedback-field-complete-tooltip-2' => 'E puer Informatiounen',
	'articlefeedback-field-complete-tooltip-3' => 'Wichteg Informatiounen awer net komplett',
	'articlefeedback-field-complete-tooltip-4' => 'All wichteg Informatioune stinn dran',
	'articlefeedback-field-complete-tooltip-5' => 'Komplett Informatiounen',
	'articlefeedback-field-objective-label' => 'Net virageholl',
	'articlefeedback-field-objective-tip' => 'Hutt Dir den Androck datt dës Säit eng ausgeglache Presentatioun vun alle Perspektive vun dësem Thema weist?',
	'articlefeedback-field-objective-tooltip-1' => 'Staark eesäiteg',
	'articlefeedback-field-objective-tooltip-2' => 'E bëssen eesäiteg',
	'articlefeedback-field-objective-tooltip-3' => 'Eng Grëtz eesäiteg',
	'articlefeedback-field-objective-tooltip-4' => 'Net offensichtlech eesäiteg',
	'articlefeedback-field-objective-tooltip-5' => 'Guer net eesäiteg',
	'articlefeedback-field-wellwritten-label' => 'Gutt geschriwwen',
	'articlefeedback-field-wellwritten-tip' => 'Hutt Dir den Androck datt dës Säit gutt strukturéiert a gutt geschriwwen ass?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Onverständlech',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Schwéier ze verstoen',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Kloer',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Ganz kloer',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Aussergewéinlech kloer',
	'articlefeedback-pitch-reject' => 'Vläicht méi spéit',
	'articlefeedback-pitch-or' => 'oder',
	'articlefeedback-pitch-thanks' => 'Merci! Är Bewäertung gouf gespäichert.',
	'articlefeedback-pitch-join-message' => 'Wollt Dir e Benotzerkont opmaachen?',
	'articlefeedback-pitch-join-body' => 'E Benotzerkont hëlleft Iech Är Ännerungen am Aen ze behalen, Iech méi einfach un Diskussiounen ze bedeelegen an en Deel vun der Gemeinschaft ze sinn.',
	'articlefeedback-pitch-join-accept' => 'Benotzerkont opmaachen',
	'articlefeedback-pitch-join-login' => 'Aloggen',
	'articlefeedback-pitch-edit-message' => 'Wosst Dir datt Dir dës Säit ännere kënnt?',
	'articlefeedback-pitch-edit-accept' => 'Dës Säit änneren',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => "D'Héichten an d'Déifte vun haut",
	'articleFeedback-table-caption-dailyhighs' => 'Säite mat den héchste Bewäertungen: $1',
	'articleFeedback-table-caption-dailylows' => 'Säite mat den niddregste Bewäertungen: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Déi gréisst Ännerungen an dëser Woch',
	'articleFeedback-table-caption-recentlows' => 'Rezent schlecht Bewäertungen',
	'articleFeedback-table-heading-page' => 'Säit',
	'articleFeedback-table-heading-average' => 'Duerchschnëtt',
	'articleFeedback-copy-above-highlow-tables' => 'Dëst ass eng experimentell Fonctioun. Gitt eis w.e.g. Äre Feedback op der [$1 Diskussiouns-Säit].',
	'articlefeedback-dashboard-bottom' => "'''Informatioun:''' Mir probéiere weider ënnerschiddlech Méiglechkeeten aus fir Artikelen op dësen Arbechts- an Iwwersichtsäiten ze weisen. Momentan ginn hei dës Artikele gewisen:
* Säite mat de beschten / schlechtste Bewäertungen: Artikel déi mindestens zéng Bewäertungen während de leschte 24 Stonne kritt hunn. D'Durchschnëttswäerter sinn dobäi de Mëttelwäert vun alle Bewäertunge vun de leschte 24 Stonnen.
* Aktuell schlechte Bewäertungen: Artikel déi während de leschte 24 Stonne 70 % oder méi schlecht Bewäertungen (zwee Stären oder manner) an enger Kategorien kritt hunn. Nëmmen Artikel mat mindestens zéng Bewäertunge während de leschte 24 Stonne ginn dobäi berücksichtegt",
	'articlefeedback-disable-preference' => 'De Widget vun der Artikelbewäertung net op de Säite weisen',
	'articlefeedback-emailcapture-response-body' => 'Bonjour! 

Merci fir Ären Interessie fir {{SITENAME}} ze verbesseren.

Huelt Iech w.e.g. een Ament Zäit fir Är Mailadress ze confirméieren, andeem Dir op dëse Link klickt:

$1

Dir kënnt och dës Säit besichen:

$2

Gitt do dëse Confirmatiouns-Code an:

$3

Mir mellen eis geschwënn, fir Iech ze soe, wéi Dir hëllefe kënnt fir {{SITENAME}} ze verbesseren.

Wann Dir dës Ufro net ausgeléist hutt, ignoréiert dës Mail einfach. Mir schécken Iech dann och näischt méi.

E schéine Bonjour a villmools Merci,
Är {{SITENAME}}-Equipe',
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 * @author Pahles
 */
$messages['li'] = array(
	'articlefeedback' => 'Dashboard veur paginabeoerdeiling', # Fuzzy
	'articlefeedback-desc' => 'Paginabeoordeiling (tesversie)', # Fuzzy
	'articlefeedback-error' => "'n Fout is opgetraoje. Perbeer 't later obbenuuts.",
	'articlefeedback-form-switch-label' => 'Dees pagina waardere',
	'articlefeedback-form-panel-title' => 'Dees pagina waardere',
	'articlefeedback-form-panel-explanation' => 'Wat is dit?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Paginatrökkoppeling',
	'articlefeedback-form-panel-clear' => 'Dees beoerdeiling ewegsjaffe',
	'articlefeedback-form-panel-expertise' => 'Ich bin hiel good geïnformeerd euver dit óngerwerp (optioneel)',
	'articlefeedback-form-panel-expertise-studies' => "Ich höb 'n relevante opleiding gevolg op HBO/WO-niveau",
	'articlefeedback-form-panel-expertise-profession' => 'Dit óngerwerp is óngerdeil van mien beroep',
	'articlefeedback-form-panel-expertise-hobby' => "Dit is 'n deepgeveulde persuunlike passie",
	'articlefeedback-form-panel-expertise-other' => 'De bron van mien kènnis is gein käösoptie',
	'articlefeedback-form-panel-helpimprove' => "Ich wil gaer helpe Wikipedia te verbetere, sjik mich 'ne e-mail (optioneel)",
	'articlefeedback-form-panel-helpimprove-note' => "Veer sjikke dich 'ne bevestigingse-mail. Veer deile dien e-mailadres neet mit extern partieë per oos $1",
	'articlefeedback-form-panel-helpimprove-privacy' => 'privacyverklaoring euver trökkoppeling',
	'articlefeedback-form-panel-submit' => 'Beoerdeilinge opsjlaon',
	'articlefeedback-form-panel-pending' => 'Dien beoerdeilinge zeen neet opgesjlage',
	'articlefeedback-form-panel-success' => 'Opgesjlage',
	'articlefeedback-form-panel-expiry-title' => 'Dien beoerdeilinge zeen verloupe',
	'articlefeedback-form-panel-expiry-message' => 'Beoerdeil dees pagina esuchbleef obbenuuts en sjlaag dien beoerdeiling op.',
	'articlefeedback-report-switch-label' => 'Paginabeoerdeilinge weergaeve',
	'articlefeedback-report-panel-title' => 'Paginabeoerdeilinge',
	'articlefeedback-report-panel-description' => 'Hujige gemiddelde beoerdeilinge',
	'articlefeedback-report-empty' => 'Gein beoerdeilinge',
	'articlefeedback-report-ratings' => '$1 beoerdeilinge',
	'articlefeedback-field-trustworthy-label' => 'Betroewbaar',
	'articlefeedback-field-trustworthy-tip' => 'Vundjs te dat dees pagina voldoonde bronvermeljinge haet en dat de bronvermeljinge betroewbaar zeen?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Zónger betroewbaar brónne',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Wienig betroewbaar brónne',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Voldoonde betroewbaar brónne',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Good betroewbaar brónne',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Oetsjtaekend betroewbaar brónne',
	'articlefeedback-field-complete-label' => 'Aof',
	'articlefeedback-field-complete-tip' => 'Vundjs te dat dees pagina de essensie van dit óngerwerp besjtrik?',
	'articlefeedback-field-complete-tooltip-1' => 'Mieste infermasie óntbrik',
	'articlefeedback-field-complete-tooltip-2' => 'Bevat einige infermasie',
	'articlefeedback-field-complete-tooltip-3' => 'Bevat wichtige infermasie, mer mit gater',
	'articlefeedback-field-complete-tooltip-4' => 'Bevat de meist wichtige infermasie',
	'articlefeedback-field-complete-tooltip-5' => 'Oetgebreide dèkking',
	'articlefeedback-field-objective-label' => 'Ónbeveuroerdeild',
	'articlefeedback-field-objective-tip' => "Venjs te dat dees pagina 'n ierleke weergaaf is van alle invalsheuk veur dit óngerwerp?",
	'articlefeedback-field-objective-tooltip-1' => 'Zier pertiedig',
	'articlefeedback-field-objective-tooltip-2' => 'Matig pertiedig',
	'articlefeedback-field-objective-tooltip-3' => 'Bitje pertiedig',
	'articlefeedback-field-objective-tooltip-4' => 'Gein dudelike pertiedigheid',
	'articlefeedback-field-objective-tooltip-5' => 'Gaar neet pertiedig',
	'articlefeedback-field-wellwritten-label' => 'Good gesjreve',
	'articlefeedback-field-wellwritten-tip' => "Venjs te dat dees pagina 'n korrekte opbouw haet en good is gesjreve?",
	'articlefeedback-field-wellwritten-tooltip-1' => 'Ónbegriepelik',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Meujelik te begriepe',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Voldoonde dudelik',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Hiel dudelik',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Oetzunderlik dudelik',
	'articlefeedback-pitch-reject' => 'Neet noe',
	'articlefeedback-pitch-or' => 'of',
	'articlefeedback-pitch-thanks' => 'Bedank! Dien beoerdeiling is opgesjlage.',
	'articlefeedback-pitch-join-message' => "Wils te 'ne gebroeker aanmake?",
	'articlefeedback-pitch-join-accept' => 'Gebroeker aanmake',
	'articlefeedback-pitch-join-login' => 'Aanmèlle',
	'articlefeedback-pitch-edit-accept' => 'Dees pagina bewirke',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement/nl',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Huugde- en deepdepunte van vendaag',
	'articleFeedback-table-caption-dailyhighs' => "Pagina's mit de hoegste waarderinge: $1",
	'articleFeedback-table-caption-dailylows' => "Pagina's mit de liegste waarderinge: $1",
	'articleFeedback-table-caption-weeklymostchanged' => 'Dees week de meiste verangeringe',
	'articleFeedback-table-caption-recentlows' => 'Recente deepdepunte',
	'articleFeedback-table-heading-page' => 'Pagina',
	'articleFeedback-table-heading-average' => 'Gemiddelde',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Ignas693
 * @author Perkunas
 */
$messages['lt'] = array(
	'articlefeedback' => 'Straipsnis atsiliepimus Panel', # Fuzzy
	'articlefeedback-desc' => 'Straipsnio atsiliepimai',
	'articlefeedback-error' => 'Įvyko klaida. Bandykite dar kartą vėliau.',
	'articlefeedback-form-switch-label' => 'Įvertinti šį puslapį',
	'articlefeedback-form-panel-title' => 'Įvertinti šį puslapį',
	'articlefeedback-form-panel-explanation' => 'Kas tai?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Pašalinti šį įvertinimą',
	'articlefeedback-form-panel-expertise' => 'Aš labai gerai nusimanau apie šią temą (neprivaloma)',
	'articlefeedback-form-panel-expertise-studies' => 'Turiu atitinkamą kolegijos / universiteto diplomą',
	'articlefeedback-form-panel-expertise-profession' => 'Tai dalis mano profesijos',
	'articlefeedback-form-panel-expertise-hobby' => 'Tai yra asmeninė aistra',
	'articlefeedback-form-panel-expertise-other' => 'Mano žinių šaltinio čia nėra',
	'articlefeedback-form-panel-helpimprove' => 'Norėčiau padėti pagerinti Vikipediją, siųskite man e-mail (neprivaloma)',
	'articlefeedback-form-panel-helpimprove-note' => 'Mes jums atsiųsime patvirtinimą elektroniniu paštu. Mes nesidaliname Jūsų adresu su bet kuo. $1', # Fuzzy
	'articlefeedback-form-panel-helpimprove-privacy' => 'Privatumo politika', # Fuzzy
	'articlefeedback-form-panel-submit' => 'Pateikti įvertinimus',
	'articlefeedback-form-panel-pending' => 'Jūsų įvertinimai nebuvo pateikti',
	'articlefeedback-form-panel-success' => 'Išsaugota sėkmingai',
	'articlefeedback-form-panel-expiry-title' => 'Jūsų įvertinimai baigėsi',
	'articlefeedback-form-panel-expiry-message' => 'Prašome reevaluate šiame puslapyje ir pateikti naują reitingai.',
	'articlefeedback-report-switch-label' => 'Peržiūrėti puslapio reitinus',
	'articlefeedback-report-panel-title' => 'Puslapio reitingai',
	'articlefeedback-report-panel-description' => 'Dabartinis vidutinis reitingai.',
	'articlefeedback-report-empty' => 'Nėra vertinimų',
	'articlefeedback-report-ratings' => '$1 vertinimas',
	'articlefeedback-field-trustworthy-label' => 'Patikimas',
	'articlefeedback-field-trustworthy-tip' => 'Jūs manote, šiame puslapyje yra pakankamai citatos ir šių citatų yra iš patikimų šaltinių?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Trūksta patikimų šaltinių',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Trūksta patikimų šaltinių',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Pakankamai patikimi šaltiniai',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Trūksta patikimų šaltinių',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Pakankamai patikimi šaltiniai',
	'articlefeedback-field-complete-label' => 'Užbaigti',
	'articlefeedback-field-complete-tip' => 'Ar manote, kad šis puslapis apima esminius temas, kad ji turėtų?',
	'articlefeedback-field-complete-tooltip-1' => 'Trūksta daugumos informacijos',
	'articlefeedback-field-complete-tooltip-2' => 'Yra informacijos',
	'articlefeedback-field-complete-tooltip-3' => 'Yra svarbiausia informacija, tačiau su spragas',
	'articlefeedback-field-complete-tooltip-4' => 'Yra informacijos',
	'articlefeedback-field-complete-tooltip-5' => 'Visapusiška',
	'articlefeedback-field-objective-label' => 'Tikslas',
	'articlefeedback-field-objective-tip' => 'Ar manote, kad šis puslapis rodo tikrosios atstovavimo visų perspektyvų klausimu?',
	'articlefeedback-field-objective-tooltip-1' => 'Labai neobjektyvūs',
	'articlefeedback-field-objective-tooltip-2' => 'Vidutinis šališkumo',
	'articlefeedback-field-objective-tooltip-3' => 'Minimalus poslinkis',
	'articlefeedback-field-objective-tooltip-4' => 'Akivaizdus įstrižinės',
	'articlefeedback-field-objective-tooltip-5' => 'Visiškai nešališkas',
	'articlefeedback-field-wellwritten-label' => 'Gerai parašyta',
	'articlefeedback-field-wellwritten-tip' => 'Ar manote, kad šis puslapis yra gerai organizuotas ir gerai parašytas?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Nesuprantamas',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Sunku suprasti',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Tinkamą aiškumo',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Gera aiškumo',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Išimtiniais aiškumo',
	'articlefeedback-pitch-reject' => 'Galbūt vėliau',
	'articlefeedback-pitch-or' => 'arba',
	'articlefeedback-pitch-thanks' => 'Ačiū! Jūsų įvertinimai buvo išsaugoti.',
	'articlefeedback-pitch-join-message' => 'Ar norėjote sukurti paskyrą?',
	'articlefeedback-pitch-join-body' => 'Sąskaitą padės jums stebėti savo redagavimo, įsitraukti į diskusijas, ir Bendrijos dalis.',
	'articlefeedback-pitch-join-accept' => 'Sukurti paskyrą',
	'articlefeedback-pitch-join-login' => 'Prisijungti',
	'articlefeedback-pitch-edit-message' => 'Ar žinote, kad galite redaguoti šį puslapį?',
	'articlefeedback-pitch-edit-accept' => 'Redaguoti šį puslapį',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Šiandienos aukštų ir rekordinį lygį',
	'articleFeedback-table-caption-dailyhighs' => 'Straipsniai su aukščiausiais įvertinimais: $1',
	'articleFeedback-table-caption-dailylows' => 'Straipsniai su žemiausiais įvertinimais: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Šią savaitę labiausiai pasikeitę',
	'articleFeedback-table-caption-recentlows' => 'Neseniai rekordinį lygį',
	'articleFeedback-table-heading-page' => 'Puslapis',
	'articleFeedback-table-heading-average' => 'Vidurkis',
	'articleFeedback-copy-above-highlow-tables' => 'Tai eksperimentinė funkcija. Prašome pateikti atsiliepimus [$1 discussion page].',
	'articlefeedback-dashboard-bottom' => '"" Pastaba "": mes ir toliau eksperimentuoti su įvairiais būdais dangos straipsniuose, šių skelbimų lentos.  Šiuo metu informacijos skydus įtraukti šie straipsniai:
 * puslapių su didžiausią ir mažiausią reitingai: straipsniai, kurie yra gavę ne mažiau kaip 10 reitingai per paskutines 24 valandas.  Vidurkiai apskaičiuojami imant visų reitingai, per paskutines 24 valandas vidurkis.
 * neseniai rekordinį lygį: straipsniai, kad gavo 70 % arba daugiau žemas (2 žvaigždučių arba mažesnis) klases į bet kurią kategoriją, paskutines 24 valandas. Čia taip pat įtraukiami tik straipsniuose, gavo ne mažiau kaip 10 reitingai per paskutines 24 valandas.',
	'articlefeedback-disable-preference' => 'Nerodyti straipsnio atsiliepimus valdikliui puslapiuose',
	'articlefeedback-emailcapture-response-body' => 'labas!
N!Dėkojame už susidomėjimą padedant didinti {{SITENAME}}.
N!Prašome Skirkite laiko patvirtinti savo el. pašto spustelėję žemiau esančią nuorodą:
N!$1
N!Jūs taip pat gali aplankyti:
N!$2
N!Ir įveskite šiuos patvirtinimo kodas:
N!$3
N!Mes bus susisiekti netrukus su kaip jūs galite padėti pagerinti {{SITENAME}}.
N!Jei jūs nepradėjo šį prašymą, prašome ignoruoti šį el. laišką ir mes ne išsiųs jums nieko kito.
N!Geriausias pageidavimus, ir Dėkojame jums
{{SITENAME}} komanda',
);

/** Mizo (Mizo ţawng)
 * @author RMizo
 */
$messages['lus'] = array(
	'articlefeedback' => 'Thuziak tehna dawhkan', # Fuzzy
	'articlefeedback-desc' => 'Thuziak tehna',
	'articlefeedback-error' => 'Thil dik lo a thleng.
Nakin deuhvah tum nawn leh rawh.',
	'articlefeedback-form-switch-label' => 'He phêk ţhat leh ţhat loh chungchang i ngaihdan sawi rawh le!',
	'articlefeedback-form-panel-title' => 'Fạksèlna',
	'articlefeedback-form-panel-explanation' => 'Hei hi engnge ni?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Ngaihdan paihna',
	'articlefeedback-form-panel-expertise' => 'He thil chungchang hi ka thiamzawng a ni (hei hi chu tihmâkmawh a ni lo)',
	'articlefeedback-form-panel-expertise-studies' => 'Hemi chungchang hi zirna sangah ka zirbing tawh',
	'articlefeedback-form-panel-expertise-profession' => 'Ka eizawnna pakhat a ni',
	'articlefeedback-form-panel-expertise-hobby' => 'Ka tuizawng ngawih ngawih a ni',
	'articlefeedback-form-panel-expertise-other' => 'Ka hriatna chhan hetah sawi tel a ni lo tlat',
	'articlefeedback-form-panel-helpimprove' => 'Wikizémpui tihhmasawnna kawngah tel vè ka duh a, e-lehkha min thawn rawh (hei chu a ngai kher lo)',
	'articlefeedback-form-panel-helpimprove-note' => 'Finfiahna e-lehkha kan rawn thawn ang che. Kan $1 zulzuiin i e-chenhmun hi tumah hrilh an ni lo vang.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'ngaihdan sawina chungchanga inthupna thü',
	'articlefeedback-form-panel-submit' => 'Ngaihdan thehluhna',
	'articlefeedback-form-panel-pending' => 'I ngaihdan thehluh a la ni lo',
	'articlefeedback-form-panel-success' => 'Hlawhtling taka thehluh a ni',
	'articlefeedback-form-panel-expiry-title' => 'I ngaihdan i sawi kha a rin theih tawh hrih loh',
	'articlefeedback-form-panel-expiry-message' => 'Khawngaihin he phêk hi ennawn leh la i ngaihdan thar thehlut leh hram rawh.',
	'articlefeedback-report-switch-label' => 'He phêk ţhatzawng tehna enna',
	'articlefeedback-report-panel-title' => 'Phêk tehna',
	'articlefeedback-report-panel-description' => 'Ţhatzia tehna awmsate chawhrual',
	'articlefeedback-report-empty' => 'Tehna a la awm lo',
	'articlefeedback-report-ratings' => 'Ngaihdan $1',
	'articlefeedback-field-trustworthy-label' => 'Rintlâkzáwng',
	'articlefeedback-field-trustworthy-tip' => 'He phêk hian thulâkna hnar rintlâk a nei tamtâwkin i hria em?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Thulakna hnar rintlâk a tlachham angreng ka ti',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Thulâkna hnar rintlâk a nei tlém ka ti',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Thulâkna hnar rintlâk a ngah tâwk ve thawkhat ka ti',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Thulâkna hnar rintlâk a nei tam thawkhat hlëah ka ngai',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Thulâkna hnar rintlâk a ngah filawr lakah ka ngai',
	'articlefeedback-field-complete-label' => 'Kǐmchạnzáwng',
	'articlefeedback-field-complete-tip' => 'He thuziak hian ziah tel ngei tùr chi a ziak kim thawkhatah i ngai em?',
	'articlefeedback-field-complete-tooltip-1' => 'Hriat tùr alawi a awm lo',
	'articlefeedback-field-complete-tooltip-2' => 'Hriattlâk a awm ve pheuh pheuh',
	'articlefeedback-field-complete-tooltip-3' => 'A pawimawh zual chu a tel, mahsé famkim lutuk lovin',
	'articlefeedback-field-complete-tooltip-4' => 'Hriat tùr pawimawh zual chu a telh deuh vek',
	'articlefeedback-field-complete-tooltip-5' => 'A fün kim khawp mai',
	'articlefeedback-field-objective-label' => 'Làizia',
	'articlefeedback-field-objective-tip' => 'He thu hian thulai a la tâwk thawkhatin i hria em?',
	'articlefeedback-field-objective-tooltip-1' => 'Nger lam a nei nasa',
	'articlefeedback-field-objective-tooltip-2' => 'A lai lek lek',
	'articlefeedback-field-objective-tooltip-3' => 'A lái thawkhat',
	'articlefeedback-field-objective-tooltip-4' => 'Nger lam langsar lutuk a nei lo',
	'articlefeedback-field-objective-tooltip-5' => 'A lai fel fak',
	'articlefeedback-field-wellwritten-label' => 'Inziahphung',
	'articlefeedback-field-wellwritten-tip' => 'He phêk hi an zîak ţha thawkhatin a inrem dàn te a fel tâwk thawkhatah i ngai em?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Chhe bon',
	'articlefeedback-field-wellwritten-tooltip-2' => 'A thuziak a hriatthiam hleih theih loh',
	'articlefeedback-field-wellwritten-tooltip-3' => 'A fiah ṭha pangngai',
	'articlefeedback-field-wellwritten-tooltip-4' => 'A fiah ṭha khawp mai',
	'articlefeedback-field-wellwritten-tooltip-5' => 'A fiah ṭha namén lo',
	'articlefeedback-pitch-reject' => 'Nakinah ni hrih rawh se',
	'articlefeedback-pitch-or' => 'emaw',
	'articlefeedback-pitch-thanks' => 'Kan lawm e! I ngaihdan/tehna chhinchhiah fel a ni ta.',
	'articlefeedback-pitch-join-message' => 'Siangchan i siam duh em?',
	'articlefeedback-pitch-join-body' => 'Siangchan hian i thuziak khawih danglamah te, sawihonaa i telnaah te a puih viau dawn che bâkah thawhhona kawtchhuahah a kaihruai dawn che a ni.',
	'articlefeedback-pitch-join-accept' => 'Siangchan siamna',
	'articlefeedback-pitch-join-login' => 'Luhna',
	'articlefeedback-pitch-edit-message' => 'He thuziak hi i siam danglam thei tih i hria em?',
	'articlefeedback-pitch-edit-accept' => 'Siamṭhatna',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Vawiin rüam leh tlangte',
	'articleFeedback-table-caption-dailyhighs' => 'Phêk dah sàn ber berte: $1',
	'articleFeedback-table-caption-dailylows' => 'Phêk dah hniamho: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Tun kar chhunga khawih danglam nasat berte',
	'articleFeedback-table-caption-recentlows' => 'Rüam thar',
	'articleFeedback-table-heading-page' => 'Phek',
	'articleFeedback-table-heading-average' => 'Chawhrual',
	'articleFeedback-copy-above-highlow-tables' => 'Hei hi enchhinna thil a la ni hrih a. [$1 sawihona phekah] i ngaihdàn chu i sawi thei ang.',
	'articlefeedback-emailcapture-response-body' => 'E khai! 

{{SITENAME}} tihhmasawnna kawnga i tha i phal avangin kan lawm takzet.

A hnuaia zawmna khu hmetin khawngaihin i e-chenhmun finfiah hram rawh le:

$1

Chu lovah pawh

$2 

hi tlawhin finfiahna thuruk

$3

hi i ziaklût thei bawk ang.

{{SITENAME}} tihhmasawnna kawnga i thawh theih dan chungchangah thurawn kan rawn pe thuai ang che.

Hemi dikna hi i duh lo a nih chuan he e-lehkha thawn hi ngaihthah la thudang kan rawn thawn tawh hrih lo vang che.

Duhsakna kan hlanin lawmthu kan hrilh mawlh mawlh a che,

{{SITENAME}}-a i thawhpuite',
);

/** Latvian (latviešu)
 * @author GreenZeb
 * @author Papuass
 */
$messages['lv'] = array(
	'articlefeedback' => 'Raksta atsauksmju panelis',
	'articlefeedback-desc' => 'Raksta atsauksmes',
	'articlefeedback-error' => 'Radusies kļūda. Lūdzu, mēģiniet vēlāk vēlreiz.',
	'articlefeedback-form-switch-label' => 'Novērtējiet šo lapu',
	'articlefeedback-form-panel-title' => 'Novērtējiet šo lapu',
	'articlefeedback-form-panel-explanation' => 'Kas tas ir?',
	'articlefeedback-form-panel-clear' => 'Noņemt šo vērtējumu',
	'articlefeedback-form-panel-expertise' => 'Es esmu ļoti zinošs par šo tēmu (atzīmēt pēc izvēles)',
	'articlefeedback-form-panel-expertise-studies' => 'Man ir attiecīgās jomas augstākās izglītības grāds',
	'articlefeedback-form-panel-expertise-profession' => 'Tā ir daļa no mana amata',
	'articlefeedback-form-panel-expertise-hobby' => 'Tā ir dziļa personiska aizraušanās',
	'articlefeedback-form-panel-expertise-other' => 'Manu zināšanu ieguves veids nav šajā sarakstā',
	'articlefeedback-form-panel-helpimprove' => 'Es vēlētos palīdzēt uzlabot Vikipēdiju, sūtiet man e-pastu (atzīmēt pēc izvēles)',
	'articlefeedback-form-panel-helpimprove-note' => 'Mēs Jums nosūtīsim apstiprinājuma e-pastu. Mēs citām personām nedarīsim zināmu Jūsu adresi. $1', # Fuzzy
	'articlefeedback-form-panel-helpimprove-privacy' => 'Privātuma politika', # Fuzzy
	'articlefeedback-form-panel-submit' => 'Iesniegt vērtējumus',
	'articlefeedback-form-panel-pending' => 'Jūsu vērtējumi vēl nav iesniegti',
	'articlefeedback-form-panel-success' => 'Veiksmīgi saglabāts',
	'articlefeedback-form-panel-expiry-title' => 'Jūsu vērtējuma derīguma termiņš ir beidzies',
	'articlefeedback-form-panel-expiry-message' => 'Lūdzu, pārskatiet šo lapu un iesniedziet jaunus vērtējumus.',
	'articlefeedback-report-switch-label' => 'Skatīt lapas vērtējumus',
	'articlefeedback-report-panel-title' => 'Lapas vērtējumi',
	'articlefeedback-report-panel-description' => 'Pašreizējais vidējais vērtējums.',
	'articlefeedback-report-empty' => 'Nav vērtējumu',
	'articlefeedback-report-ratings' => '$1 vērtējumi',
	'articlefeedback-field-trustworthy-label' => 'Uzticamība',
	'articlefeedback-field-trustworthy-tip' => 'Vai Jums šķiet, ka lapai ir diezgan daudz citātu un ka šie citāti nāk no uzticamiem avotiem?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Trūkst autoritatīvu avotu',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Daži autoritatīvi avoti',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Pieņemami autoritatīvi avoti',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Labi autoritatīvi avoti',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Lieliski autoritatīvi avoti',
	'articlefeedback-field-complete-label' => 'Pabeigtība',
	'articlefeedback-field-complete-tip' => 'Vai Jums šķiet, ka šī lapa apskata visas nepieciešamās temata jomas, ko būtu nepieciešams pieminēt?',
	'articlefeedback-field-objective-label' => 'Objektivitāte',
	'articlefeedback-field-objective-tip' => 'Vai Jums šķiet, ka šī lapa parāda pareizu satura attēlojumu no visiem šī jautājuma skatījumiem?',
	'articlefeedback-field-wellwritten-label' => 'Informācijas izklāsts',
	'articlefeedback-field-wellwritten-tip' => 'Vai Jums šķiet, ka šī lapa ir labi strukturēta un informatīva?',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Grūti saprast',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Atbilstoša skaidrība',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Laba skaidrība',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Izcila skaidrība',
	'articlefeedback-pitch-reject' => 'Varbūt vēlāk',
	'articlefeedback-pitch-or' => 'vai',
	'articlefeedback-pitch-thanks' => 'Paldies! Jūsu vērtējumi ir saglabāti.',
	'articlefeedback-pitch-join-message' => 'Vai vēlaties izveidot kontu?',
	'articlefeedback-pitch-join-body' => 'Konts palīdzēs Jums pārskatīt savus labojumus, sekmīgāk piedalīties diskusijās un iekļauties kopienā.',
	'articlefeedback-pitch-join-accept' => 'Izveidot kontu',
	'articlefeedback-pitch-join-login' => 'Pieteikties',
	'articlefeedback-pitch-edit-message' => 'Vai Jūs zināt, ka varat rediģēt šo lapu?',
	'articlefeedback-pitch-edit-accept' => 'Izmainīt šo lapu',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Šodienas kāpumi un kritumi',
	'articleFeedback-table-caption-dailyhighs' => 'Lapas ar visaugstāko vērtējumu: $1',
	'articleFeedback-table-caption-dailylows' => 'Lapas ar viszemāko vērtējumu: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Šajā nedēļā visvairāk mainītie',
	'articleFeedback-table-caption-recentlows' => 'Pēdējie kritumi',
	'articleFeedback-table-heading-page' => 'Lapa',
	'articleFeedback-table-heading-average' => 'Vidēji',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'articlefeedback' => "Tabilaon'ny fanamarihana ny lahatsoratra", # Fuzzy
	'articlefeedback-desc' => 'Fanamarihana ny lahatsoratra',
	'articlefeedback-error' => 'Nisy hadisoana nitranga. Avereno ny fanovanao rehefa aveo',
	'articlefeedback-form-switch-label' => 'Hanamarika ity pejy ity',
	'articlefeedback-form-panel-explanation' => 'Inona ity ?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Hanala ity fanamarihana ity',
	'articlefeedback-form-panel-expertise' => 'Betsaka ny zavatra fantako mikasika io taranja io (azo tsy fenoina)',
	'articlefeedback-form-panel-expertise-profession' => 'Mikasika ny asako io',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'articlefeedback' => 'Табла на оценки за статии',
	'articlefeedback-desc' => 'Пилотна верзија на „Оценување на статии“',
	'articlefeedback-error' => 'Се појави грешка. Обидете се повторно.',
	'articlefeedback-form-switch-label' => 'Оценете ја страницава',
	'articlefeedback-form-panel-title' => 'Оценете ја страницава',
	'articlefeedback-form-panel-explanation' => 'Што е ова?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ОценувањеНаСтатии',
	'articlefeedback-form-panel-clear' => 'Отстрани ја оценкава',
	'articlefeedback-form-panel-expertise' => 'Имам големи познавања на оваа тематика (незадолжително)',
	'articlefeedback-form-panel-expertise-studies' => 'Имам релевантно више/факултетско образование',
	'articlefeedback-form-panel-expertise-profession' => 'Ова е во полето на мојата професија',
	'articlefeedback-form-panel-expertise-hobby' => 'Ова е моја длабока лична пасија',
	'articlefeedback-form-panel-expertise-other' => 'Изворот на моите сознанија не е наведен тука',
	'articlefeedback-form-panel-helpimprove' => 'Сакам да помогнам во подобрувањето на Википедија - испратете ми е-пошта (незадолжително)',
	'articlefeedback-form-panel-helpimprove-note' => 'Ќе ви испратиме порака за потврда. Вашата адреса не ја даваме никому, согласно одредбите на нашите $1.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'epošta@primer.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'заштита на личните податоци кога искажувате мислења',
	'articlefeedback-form-panel-submit' => 'Поднеси оценки',
	'articlefeedback-form-panel-pending' => 'Вашите оценки не се поднесени',
	'articlefeedback-form-panel-success' => 'Успешно зачувано',
	'articlefeedback-form-panel-expiry-title' => 'Вашите оценки истекоа',
	'articlefeedback-form-panel-expiry-message' => 'Прегледајте ја страницава повторно и дајте ѝ нови оценки.',
	'articlefeedback-report-switch-label' => 'Оценки за страницата',
	'articlefeedback-report-panel-title' => 'Оценки за страницата',
	'articlefeedback-report-panel-description' => 'Тековни просечи оценки.',
	'articlefeedback-report-empty' => 'Нема оценки',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|една оценка|$1 оценки}}',
	'articlefeedback-field-trustworthy-label' => 'Веродостојност',
	'articlefeedback-field-trustworthy-tip' => 'Дали сметате дека страницава има доволно наводи и дека изворите се веродостојни?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Нема меродавни извори',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Малку меродавни извори',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Достатни меродавни извори',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Солидни меродавни извори',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Одлични меродавни извори',
	'articlefeedback-field-complete-label' => 'Исцрпност',
	'articlefeedback-field-complete-tip' => 'Дали сметате дека статијава ги обработува најважните основни теми што треба да се обработат?',
	'articlefeedback-field-complete-tooltip-1' => 'Недостасуваат највеќето информации',
	'articlefeedback-field-complete-tooltip-2' => 'Содржи извесни информации',
	'articlefeedback-field-complete-tooltip-3' => 'Содржи клучни информации, но со празнини или пропусти',
	'articlefeedback-field-complete-tooltip-4' => 'Го содржи поголемиот дел клучните информации',
	'articlefeedback-field-complete-tooltip-5' => 'Сеопфатна покриеност',
	'articlefeedback-field-objective-label' => 'Непристрасност',
	'articlefeedback-field-objective-tip' => 'Дали сметате дека статијава на праведен начин ги застапува сите гледишта по оваа проблематика?',
	'articlefeedback-field-objective-tooltip-1' => 'Многу пристрасна',
	'articlefeedback-field-objective-tooltip-2' => 'Умерено пристрасна',
	'articlefeedback-field-objective-tooltip-3' => 'Минимално пристрасна',
	'articlefeedback-field-objective-tooltip-4' => 'Нема воочлива пристрасност',
	'articlefeedback-field-objective-tooltip-5' => 'Сосема непристрасна',
	'articlefeedback-field-wellwritten-label' => 'Добро напишана',
	'articlefeedback-field-wellwritten-tip' => 'Дали сметате дека страницава е добро организирана и убаво напишана?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Неразбирлива',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Тешко се разбира',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Достатно јасна',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Мошне јасна',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Исклучително јасна',
	'articlefeedback-pitch-reject' => 'Можеби подоцна',
	'articlefeedback-pitch-or' => 'или',
	'articlefeedback-pitch-thanks' => 'Ви благодариме! Вашите оценки се зачувани.',
	'articlefeedback-pitch-join-message' => 'Дали сакате да создадете сметка?',
	'articlefeedback-pitch-join-body' => 'Ако имате сметка ќе можете да ги следите вашите уредувања, да се вклучувате во дискусии и да бидете дел од заедницата',
	'articlefeedback-pitch-join-accept' => 'Направи сметка',
	'articlefeedback-pitch-join-login' => 'Најавете се',
	'articlefeedback-pitch-edit-message' => 'Дали знаете дека можете да ја уредите страницава?',
	'articlefeedback-pitch-edit-accept' => 'Уреди ја страницава',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement/mk?uselang=mk',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Издигања и падови за денес',
	'articleFeedback-table-caption-dailyhighs' => 'Статии со највисоки оценки: $1',
	'articleFeedback-table-caption-dailylows' => 'Статии со најниски оценки: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Најизменети за неделава',
	'articleFeedback-table-caption-recentlows' => 'Скорешни падови',
	'articleFeedback-table-heading-page' => 'Страница',
	'articleFeedback-table-heading-average' => 'Просечно',
	'articleFeedback-copy-above-highlow-tables' => 'Ова е експериментална функција. Искажете го вашето мислење на [$1 страницатата за разговор].',
	'articlefeedback-dashboard-bottom' => "'''Напомена''': Ќе продолжиме да експериментираме со различни начини на истакнување на статии во овие контролни табли.  Моментално таблите ги истакнуваат следниве статии:
* Страници со највисоки/најниски оценки: статии што добиле барем 10 оценки во текот на последните 24 часа.  Просекот се пресметува со наоѓање на средината на сите оценки дадени во последните 24 часа.
* Неодамна нискооценети: статии со 70% или повеќе ниски оценки (2 ѕвезди и помалку) во било која категорија во последните 24 часа. Се бројат само статии со барем 10 оценки добиени во последните 24 часа.",
	'articlefeedback-disable-preference' => 'Не го прикажувај прилогот „Оценување на статии“ во страниците',
	'articlefeedback-emailcapture-response-body' => 'Здраво!

Ви благодариме што изразивте интерес да помогнете во развојот на {{SITENAME}}.

Потврдете ја вашата е-пошта на следнава врска: 

$1

Можете да ја посетите и страницата:

$2

Внесете го следниов потврден кон:

$3

Набргу ќе ви пишеме како можете да помогнете во подобрувањето на {{SITENAME}}.

Ако го немате побарано ова, занемарате ја поракава, и ние повеќе ништо нема да ви испраќаме.

Ви благодариме и сè најдобро,
Екипата на {{SITENAME}}',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'articlefeedback' => 'ലേഖനത്തെക്കുറിച്ചുള്ള പ്രതികരണ ഡാഷ്ബോർഡ്',
	'articlefeedback-desc' => 'ലേഖനത്തെക്കുറിച്ചുള്ള പ്രതികരണം',
	'articlefeedback-error' => 'എന്തോ പിഴവുണ്ടായിരിക്കുന്നു. ദയവായി പിന്നീട് വീണ്ടും ശ്രമിക്കുക.',
	'articlefeedback-form-switch-label' => 'ഈ താളിനു നിലവാരമിടുക',
	'articlefeedback-form-panel-title' => 'ഈ താളിനു നിലവാരമിടുക',
	'articlefeedback-form-panel-explanation' => 'എന്താണിത്?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ലേഖനാഭിപ്രായം',
	'articlefeedback-form-panel-clear' => 'ഈ നിലവാരമിടൽ നീക്കം ചെയ്യുക',
	'articlefeedback-form-panel-expertise' => 'എനിക്ക് ഈ വിഷയത്തിൽ വളരെ അറിവുണ്ട് (ഐച്ഛികം)',
	'articlefeedback-form-panel-expertise-studies' => 'എനിക്ക് ബന്ധപ്പെട്ട വിഷയത്തിൽ കലാലയ/യൂണിവേഴ്സിറ്റി ബിരുദമുണ്ട്',
	'articlefeedback-form-panel-expertise-profession' => 'ഇതെന്റെ ജോലിയുടെ ഭാഗമാണ്',
	'articlefeedback-form-panel-expertise-hobby' => 'ഇതെനിക്ക് അഗാധ താത്പര്യമുള്ളവയിൽ പെടുന്നു',
	'articlefeedback-form-panel-expertise-other' => 'എന്റെ അറിവിന്റെ ഉറവിടം ഇവിടെ നൽകിയിട്ടില്ല',
	'articlefeedback-form-panel-helpimprove' => 'വിക്കിപീഡിയ മെച്ചപ്പെടുത്താൻ ഞാനാഗ്രഹിക്കുന്നു, ഇമെയിൽ അയച്ചു തരിക (ഐച്ഛികം)',
	'articlefeedback-form-panel-helpimprove-note' => 'ഞങ്ങൾ താങ്കൾക്ക് ഒരു സ്ഥിരീകരണ ഇമെയിൽ അയയ്ക്കുന്നതാണ്. താങ്കളുടെ ഇമെയിൽ വിലാസം $1 പ്രകാരം ഞങ്ങൾ പുറത്തുള്ള ആരുമായും പങ്കുവെയ്ക്കുന്നതല്ല.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'പ്രതികരണത്തെക്കുറിച്ചുള്ള സ്വകാര്യതാ പ്രസ്താവന',
	'articlefeedback-form-panel-submit' => 'നിലവാരമിടലുകൾ സമർപ്പിക്കുക',
	'articlefeedback-form-panel-pending' => 'താങ്കളുടെ നിലവാരമിടലുകൾ സമർപ്പിക്കപ്പെട്ടിട്ടില്ല',
	'articlefeedback-form-panel-success' => 'വിജയകരമായി സേവ് ചെയ്തിരിക്കുന്നു',
	'articlefeedback-form-panel-expiry-title' => 'താങ്കളിട്ട നിലവാരങ്ങൾ കാലഹരണപ്പെട്ടിരിക്കുന്നു',
	'articlefeedback-form-panel-expiry-message' => 'ദയവായി ഈ താൾ പുനർമൂല്യനിർണ്ണയം ചെയ്ത് പുതിയ നിലവാരമിടലുകൾ സമർപ്പിക്കുക.',
	'articlefeedback-report-switch-label' => 'ഈ താളിനു ലഭിച്ച നിലവാരം കാണുക',
	'articlefeedback-report-panel-title' => 'താളിന്റെ നിലവാരം',
	'articlefeedback-report-panel-description' => 'ഇപ്പോഴത്തെ നിലവാരമിടലുകളുടെ ശരാശരി.',
	'articlefeedback-report-empty' => 'നിലവാരമിടലുകൾ ഒന്നുമില്ല',
	'articlefeedback-report-ratings' => '$1 നിലവാരമിടലുകൾ',
	'articlefeedback-field-trustworthy-label' => 'വിശ്വാസയോഗ്യം',
	'articlefeedback-field-trustworthy-tip' => 'ഈ താളിൽ വിശ്വസനീയങ്ങളായ സ്രോതസ്സുകളെ ആശ്രയിക്കുന്ന ആവശ്യമായത്ര അവലംബങ്ങൾ ഉണ്ടെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'ഗണനീയമായ സ്രോതസ്സുകളില്ല',
	'articlefeedback-field-trustworthy-tooltip-2' => 'ഗണനീയമായ കുറച്ച് സ്രോതസ്സുകൾ മാത്രം',
	'articlefeedback-field-trustworthy-tooltip-3' => 'ഗണനീയമായ സ്രോതസ്സുകൾ സാമാന്യമുണ്ട്',
	'articlefeedback-field-trustworthy-tooltip-4' => 'ഗണനീയമായ സ്രോതസ്സുകൾ നല്ലവണ്ണമുണ്ട്',
	'articlefeedback-field-trustworthy-tooltip-5' => 'ഗണനീയമായ സ്രോതസ്സുകൾ നിരവധി',
	'articlefeedback-field-complete-label' => 'സമ്പൂർണ്ണം',
	'articlefeedback-field-complete-tip' => 'ഈ താൾ അത് ഉൾക്കൊള്ളേണ്ട എല്ലാ മേഖലകളും ഉൾക്കൊള്ളുന്നതായി താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-field-complete-tooltip-1' => 'ബഹുഭൂരിഭാഗം വിവരങ്ങളും ഇല്ല',
	'articlefeedback-field-complete-tooltip-2' => 'കുറച്ചു വിവരങ്ങൾ മാത്രം',
	'articlefeedback-field-complete-tooltip-3' => 'അടിസ്ഥാന വിവരങ്ങളുണ്ട്, പക്ഷേ തുടർച്ചയില്ല',
	'articlefeedback-field-complete-tooltip-4' => 'ബഹുഭൂരിഭാഗം അടിസ്ഥാനവിവരങ്ങളും ഉണ്ട്',
	'articlefeedback-field-complete-tooltip-5' => 'വിസ്തൃതമായ പരിധിയിലുൾപ്പെടുത്തിയിട്ടുണ്ട്.',
	'articlefeedback-field-objective-label' => 'പക്ഷപാതരഹിതം',
	'articlefeedback-field-objective-tip' => 'ഈ താളിൽ വിഷയത്തിന്റെ എല്ലാ വശത്തിനും അർഹമായ പ്രാതിനിധ്യം ലഭിച്ചതായി താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-field-objective-tooltip-1' => 'അത്യധികം പക്ഷപാതമുണ്ട്',
	'articlefeedback-field-objective-tooltip-2' => 'സാമാന്യം പക്ഷപാതമുണ്ട്',
	'articlefeedback-field-objective-tooltip-3' => 'കുറച്ചു പക്ഷപാതമുണ്ട്',
	'articlefeedback-field-objective-tooltip-4' => 'പക്ഷപാതം വ്യക്തമല്ല',
	'articlefeedback-field-objective-tooltip-5' => 'പൂർണ്ണമായും പക്ഷപാതരഹിതം',
	'articlefeedback-field-wellwritten-label' => 'നന്നായി രചിച്ചത്',
	'articlefeedback-field-wellwritten-tip' => 'ഈ താൾ നന്നായി ക്രമീകരിക്കപ്പെട്ടതും നന്നായി എഴുതപ്പെട്ടതുമാണെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'തീർത്തും ദുർഗ്രഹം',
	'articlefeedback-field-wellwritten-tooltip-2' => 'മനസ്സിലാക്കാൻ ബുദ്ധിമുട്ടുള്ളത്',
	'articlefeedback-field-wellwritten-tooltip-3' => 'ആവശ്യത്തിനു വ്യക്തതയുണ്ട്',
	'articlefeedback-field-wellwritten-tooltip-4' => 'നല്ല വ്യക്തതയുണ്ട്',
	'articlefeedback-field-wellwritten-tooltip-5' => 'അസാമാന്യ വ്യക്തതയുണ്ട്',
	'articlefeedback-pitch-reject' => 'പിന്നീട് ആലോചിക്കാം',
	'articlefeedback-pitch-or' => 'അഥവാ',
	'articlefeedback-pitch-thanks' => 'നന്ദി! താങ്കൾ നടത്തിയ മൂല്യനിർണ്ണയം സേവ് ചെയ്തിരിക്കുന്നു.',
	'articlefeedback-pitch-join-message' => 'താങ്കൾക്കും അംഗത്വം എടുക്കണമെന്നില്ലേ?',
	'articlefeedback-pitch-join-body' => 'അംഗത്വമെടുക്കുന്നത് താങ്കളുടെ തിരുത്തലുകൾ പിന്തുടരാനും, ചർച്ചകളിൽ പങ്കാളിയാകാനും, സമൂഹത്തിന്റെ ഭാഗമാകാനും സഹായമാകും.',
	'articlefeedback-pitch-join-accept' => 'അംഗത്വമെടുക്കുക',
	'articlefeedback-pitch-join-login' => 'പ്രവേശിക്കുക',
	'articlefeedback-pitch-edit-message' => 'ഈ താൾ തിരുത്താനാവും എന്ന് താങ്കൾക്കറിയാമോ?',
	'articlefeedback-pitch-edit-accept' => 'ഈ താൾ തിരുത്തുക',
	'articleFeedback-table-caption-dailyhighsandlows' => 'ഇന്നത്തെ കയറ്റിറക്കങ്ങൾ',
	'articleFeedback-table-caption-dailyhighs' => 'ഉയർന്ന നിലവാരമിട്ട ലേഖനങ്ങൾ: $1',
	'articleFeedback-table-caption-dailylows' => 'താഴ്ന്ന നിലവാരമിട്ട ലേഖനങ്ങൾ: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'ഈ ആഴ്ചയിൽ ഏറ്റവുമധികം മാറിയത്',
	'articleFeedback-table-caption-recentlows' => 'സമീപകാല ഇറക്കങ്ങൾ',
	'articleFeedback-table-heading-page' => 'താൾ',
	'articleFeedback-table-heading-average' => 'ശരാശരി',
	'articleFeedback-copy-above-highlow-tables' => 'ഇത് പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള സൗകര്യമാണ്. അഭിപ്രായങ്ങൾ [$1 സംവാദം താളിൽ] തീർച്ചയായും അറിയിക്കുക.',
	'articlefeedback-disable-preference' => 'ലേഖനത്തെക്കുറിച്ചുള്ള പ്രതികരണം ഘടകം താളുകളിൽ പ്രദർശിപ്പിക്കേണ്ടതില്ല.',
	'articlefeedback-emailcapture-response-body' => 'നമസ്കാരം!

{{SITENAME}} മെച്ചപ്പെടുത്താനുള്ള സഹായം ചെയ്യാൻ സന്നദ്ധത പ്രകടിപ്പിച്ചതിന് ആത്മാർത്ഥമായ നന്ദി.

താഴെ നൽകിയിരിക്കുന്ന കണ്ണിയിൽ ഞെക്കി താങ്കളുടെ ഇമെയിൽ ദയവായി സ്ഥിരീകരിക്കുക: 

$1

താങ്കൾക്ക് ഇതും സന്ദർശിക്കാവുന്നതാണ്:

$2

എന്നിട്ട് താഴെ കൊടുത്തിരിക്കുന്ന സ്ഥിരീകരണ കോഡ് നൽകുക:

$3

{{SITENAME}} സംരംഭം മെച്ചപ്പെടുത്താൻ താങ്കൾക്ക് എങ്ങനെ സഹായിക്കാനാകും എന്ന് തീരുമാനിക്കാൻ ഞങ്ങൾ താങ്കളുമായി ഉടനെ ബന്ധപ്പെടുന്നതായിരിക്കും.

താങ്കളുടെ ഇച്ഛ പ്രകാരം അല്ല ഈ അഭ്യർത്ഥനയെങ്കിൽ, ഈ ഇമെയിൽ അവഗണിക്കുക, ഞങ്ങൾ താങ്കൾക്ക് പിന്നീടൊന്നും അയച്ച് ബുദ്ധിമുട്ടിയ്ക്കില്ല.

ആശംസകൾ, നന്ദി,
{{SITENAME}} സ്നേഹിതർ',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aviator
 */
$messages['ms'] = array(
	'articlefeedback' => 'Papan pemuka maklum balas rencana',
	'articlefeedback-desc' => 'Maklum balas rencana',
	'articlefeedback-error' => 'Berlakunya ralat. Sila cuba lagi kemudian.',
	'articlefeedback-form-switch-label' => 'Nilai laman ini',
	'articlefeedback-form-panel-title' => 'Nilai laman ini',
	'articlefeedback-form-panel-explanation' => 'Apakah ini?',
	'articlefeedback-form-panel-explanation-link' => 'Project:MaklumBalasRencana',
	'articlefeedback-form-panel-clear' => 'Tarik balik markah ini',
	'articlefeedback-form-panel-expertise' => 'Saya berpengetahuan tinggi tentang topik ini (pilihan)',
	'articlefeedback-form-panel-expertise-studies' => 'Saya memegang ijazah kolej/maktab/universiti yang berkenaan',
	'articlefeedback-form-panel-expertise-profession' => 'Kerjaya saya menyentuh tentang topik ini',
	'articlefeedback-form-panel-expertise-hobby' => 'Saya amat berminat dengan topik ini secara peribadi',
	'articlefeedback-form-panel-expertise-other' => 'Sumber pengetahuan saya tidak tersenarai di sini',
	'articlefeedback-form-panel-helpimprove' => 'Saya ingin membantu memperbaiki Wikipedia, hantarkan saya e-mel (pilihan)',
	'articlefeedback-form-panel-helpimprove-note' => 'Kami akan menghantar e-mel pengesahan kepada anda. Kami tidak akan berkongsi alamat anda dengan pihak luar mengikut $1 kami.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'emel@contoh.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'kenyataan keperibadian maklum balas',
	'articlefeedback-form-panel-submit' => 'Serahkan penilaian',
	'articlefeedback-form-panel-pending' => 'Penilaian anda belum diserahkan',
	'articlefeedback-form-panel-success' => 'Berjaya disimpan',
	'articlefeedback-form-panel-expiry-title' => 'Penilaian anda telah luput',
	'articlefeedback-form-panel-expiry-message' => 'Sila nilai semula laman ini dan serahkan penilaian baru.',
	'articlefeedback-report-switch-label' => 'Lihat penilaian laman',
	'articlefeedback-report-panel-title' => 'Penilaian laman',
	'articlefeedback-report-panel-description' => 'Purata penilaian semasa.',
	'articlefeedback-report-empty' => 'Tiada penilaian',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|satu penilaian|$1 penilaian}}',
	'articlefeedback-field-trustworthy-label' => 'Boleh dipercayai',
	'articlefeedback-field-trustworthy-tip' => 'Adakah anda berpendapat bahawa laman ini mempunyai petikan yang mencukupi, dan petikan-petikan itu datang dari sumber-sumber yang boleh dipercayai?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Ketandusan sumber yang bereputasi baik',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Kekurangan sumber yang bereputasi baik',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Cukup sumber yang bereputasi baik',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Banyak sumber yang bereputasi baik',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Banyak sekali sumber yang bereputasi baik',
	'articlefeedback-field-complete-label' => 'Lengkap',
	'articlefeedback-field-complete-tip' => 'Adakah anda berpendapat bahawa laman ini merangkumi bahan-bahan topik terpenting yang sewajarnya?',
	'articlefeedback-field-complete-tooltip-1' => 'Ketandusan maklumat',
	'articlefeedback-field-complete-tooltip-2' => 'Sedikit maklumat',
	'articlefeedback-field-complete-tooltip-3' => 'Mengandungi maklumat penting, tetapi berlompang',
	'articlefeedback-field-complete-tooltip-4' => 'Mengandungi kebanyakan maklumat penting',
	'articlefeedback-field-complete-tooltip-5' => 'Liputan menyeluruh',
	'articlefeedback-field-objective-label' => 'Objektif',
	'articlefeedback-field-objective-tip' => 'Adakah anda berpendapat bahawa laman ini menunjukkan pernyataan yang adil daripada semua sudut pandangan tentang isu ini?',
	'articlefeedback-field-objective-tooltip-1' => 'Terlalu berat sebelah',
	'articlefeedback-field-objective-tooltip-2' => 'Sederhana berat sebelah',
	'articlefeedback-field-objective-tooltip-3' => 'Sedikit berat sebelah',
	'articlefeedback-field-objective-tooltip-4' => 'Tiada berat sebelah yang ketara',
	'articlefeedback-field-objective-tooltip-5' => 'Langsung tidak berat sebelah',
	'articlefeedback-field-wellwritten-label' => 'Kemas',
	'articlefeedback-field-wellwritten-tip' => 'Adakah anda berpendapat bahawa laman ini disusun dan ditulis dengan kemas?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Tidak boleh difahami',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Sukar difahami',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Cukup boleh difahami',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Mudah difahami',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Amat mudah difahami',
	'articlefeedback-pitch-reject' => 'Lain kalilah',
	'articlefeedback-pitch-or' => 'atau',
	'articlefeedback-pitch-thanks' => 'Terima kasih! Penilaian anda telah disimpan.',
	'articlefeedback-pitch-join-message' => 'Adakah anda ingin membuka akaun?',
	'articlefeedback-pitch-join-body' => 'Akaun akan membantu anda menjejaki suntingan anda, melibatkan diri dalam perbincangan, dan menyertai komuniti.',
	'articlefeedback-pitch-join-accept' => 'Buka akaun',
	'articlefeedback-pitch-join-login' => 'Log masuk',
	'articlefeedback-pitch-edit-message' => 'Tahukah anda bahawa anda boleh menyunting laman ini?',
	'articlefeedback-pitch-edit-accept' => 'Sunting laman ini',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Penilaian tertinggi dan terendah hari ini',
	'articleFeedback-table-caption-dailyhighs' => 'Laman yang tertinggi penilaiannya: $1',
	'articleFeedback-table-caption-dailylows' => 'Laman yang terendah penilaiannya: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Laman yang paling banyak berubah minggu ini',
	'articleFeedback-table-caption-recentlows' => 'Penilaian terendah terkini',
	'articleFeedback-table-heading-page' => 'Laman',
	'articleFeedback-table-heading-average' => 'Purata',
	'articleFeedback-copy-above-highlow-tables' => 'Ciri ini sedang diuji kaji. Sila berikan maklum balas di [$1 laman perbincangan].',
	'articlefeedback-dashboard-bottom' => "'''Perhatian''': Kami akan terus menguji kaji cara-cara lain untuk menimbulkan rencana di papan pemuka ini. Ketika ini, papan pemuka merangkumi rencana-rencana berikut:
* Laman yang tertinggi/terendah penilaiannya: rencana yang menerima sekurang-kurangnya 10 penilaian dalam masa 24 jam yang lalu.  Puratanya dihitung dengan mengambil min semua penilaian yang diterima dalam masa 24 jam yang lalu.
* Penilaian terendah terkini: rencana yang menerima 70% atau lebih penilaian rendah (2 bintang ke bawah) dalam mana-mana kategori dalam masa 24 jam yang lalu; hanya mengambil kira rencana yang menerima sekurang-kurangnya 10 penilaian dalam masa 24 jam yang lalu.",
	'articlefeedback-disable-preference' => 'Jangan tunjukkan widget Maklum balas rencana pada laman',
	'articlefeedback-emailcapture-response-body' => 'Selamat sejahtera!

Terima kasih kerana menunjukkan minat untuk membantu mempertingkatkan {{SITENAME}}.

Sila luangkan sedikit masa untuk mengesahkan e-mel anda dengan mengklik pautan berikut: 

$1

Anda juga boleh melawati:

$2

Dan isikan kod pengesahan yang berikut:

$3

Kami akan menghubungi anda sebentar lagi dengan cara-cara untuk anda mempertingkat mutu {{SITENAME}}.

Jika bukan anda yang membuat permohonan ini, sila abaikan e-mel ini dan kami tidak akan menghantar apa-apa lagi kepada anda.

Sekian, terima kasih,
Pasukan {{SITENAME}}',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'articlefeedback-desc' => 'Rispons tal-artiklu',
	'articlefeedback-error' => 'Kien hemm żball. Jekk jogħġbok, ipprova iktar tard.',
	'articlefeedback-form-switch-label' => 'Ivvaluta din il-paġna',
	'articlefeedback-form-panel-title' => 'Ivvaluta din il-paġna',
	'articlefeedback-form-panel-explanation' => "X'inhi din?",
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Neħħi din il-valutazzjoni',
	'articlefeedback-form-panel-expertise' => 'Għandi għarfien tajjeb ħafna dwar dan is-suġġet (mhux obbligatorju)',
	'articlefeedback-form-panel-expertise-studies' => 'Għandi grad minn kulleġġ/università dwar is-suġġett',
	'articlefeedback-form-panel-expertise-profession' => 'Hija parti mix-xogħol tiegħi',
	'articlefeedback-form-panel-expertise-hobby' => 'Hija passjoni profonda personali',
	'articlefeedback-form-panel-expertise-other' => 'Is-sors tal-għarfien tiegħi mhux imniżżla hawnhekk',
	'articlefeedback-form-panel-helpimprove' => 'Nixtieq ngħin lill-Wikipedija, ibgħatuli ittra-e (mhux obbligatorju)',
	'articlefeedback-form-panel-helpimprove-note' => "Aħna se nibgħatulek ittra-e ta' konferma. Mhux se nqassmu l-indirizz elettroniku tiegħek mal-ebda terza persuna ($1).",
	'articlefeedback-form-panel-helpimprove-privacy' => 'informazzjoni dwar il-privatezza',
	'articlefeedback-form-panel-submit' => 'Ibgħat il-voti',
	'articlefeedback-form-panel-pending' => 'Il-valutazzjoni tiegħek għadhom ma ntbagħtux',
	'articlefeedback-form-panel-success' => 'Salvati korrettament',
	'articlefeedback-form-panel-expiry-title' => 'Il-voti tiegħek skadew',
	'articlefeedback-form-panel-expiry-message' => "Erġa' agħti l-valutazzjoni tiegħek u ibgħat voti ġodda.",
	'articlefeedback-report-switch-label' => 'Ara l-valutazzjoni tal-paġna',
	'articlefeedback-report-panel-title' => 'Valutazzjoni tal-paġna',
	'articlefeedback-report-panel-description' => 'Medja tal-valutazzjoni attwali.',
	'articlefeedback-report-empty' => 'L-ebda vot',
	'articlefeedback-report-ratings' => '$1 voti',
	'articlefeedback-field-trustworthy-label' => 'Affidabbli',
	'articlefeedback-field-trustworthy-tip' => 'Tħoss li din l-paġna għandha biżżejjed referenzi u li dawn ir-reerenzi ġejjin minn sorsi affidabbli?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Nieqes minn sorsi affidabbli',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Ftit sorsi affidabbli',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Sorsi affidabbli adegwati',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Sorsi affidabbli tajbin',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Sorsi affidabbli eċċellenti',
	'articlefeedback-field-complete-label' => 'Kompluta',
	'articlefeedback-field-complete-tip' => 'Tħoss li din il-paġna tkopri l-oqsma essenzjali tas-suġġett?',
	'articlefeedback-field-complete-tooltip-1' => 'Nieqsa ħafna mill-informazzjoni',
	'articlefeedback-field-complete-tooltip-2' => 'Għandha ftit informazzjoni',
	'articlefeedback-field-complete-tooltip-3' => "Għandha l-informazzjoni prinċipali, imma b'ċerti nuqqasijiet",
	'articlefeedback-field-complete-tooltip-4' => 'Għandha l-parti prinċipali tal-informazzjoni importanti',
	'articlefeedback-field-complete-tooltip-5' => 'Kopertura komprensiva',
	'articlefeedback-field-objective-label' => 'Objettiva',
	'articlefeedback-field-objective-tip' => 'Tħoss li din il-paġna turi rappreżentazzjoni ġusta tal-perspettivi kollha tal-punti di vista fuq is-suġġett?',
	'articlefeedback-field-objective-tooltip-1' => 'Preġudikata ħafna',
	'articlefeedback-field-objective-tooltip-2' => 'Preġudizzju moderat',
	'articlefeedback-field-objective-tooltip-3' => 'Preġudizzju minimu',
	'articlefeedback-field-objective-tooltip-4' => 'L-ebda preġudizzju ovvju',
	'articlefeedback-field-objective-tooltip-5' => 'Kompletament imparzjali',
	'articlefeedback-field-wellwritten-label' => 'Kitba tajba',
	'articlefeedback-field-wellwritten-tip' => 'Tħoss li din il-paġna hi organizzata u miktuba tajjeb?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Inkomprensibbli',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Diffiċli biex tifimha',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Ċara biżżejjed',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Ċara ħafna',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Ċarezza eċċezzjonali',
	'articlefeedback-pitch-reject' => 'Forsi iktar tard',
	'articlefeedback-pitch-or' => 'jew',
	'articlefeedback-pitch-thanks' => 'Grazzi! Il-valutazzjoni tiegħek ġiet salvata.',
	'articlefeedback-pitch-join-message' => 'Ridt toħloq kont?',
	'articlefeedback-pitch-join-body' => "Kont iħallik iżomm traċċa tal-modifiki tiegħek, tipparteċipa f'diskussjonijiet u li tkun parti mill-komunità.",
	'articlefeedback-pitch-join-accept' => 'Oħloq kont',
	'articlefeedback-pitch-join-login' => 'Idħol',
	'articlefeedback-pitch-edit-message' => "Kont taf li tista' timmodifika din il-paġna?",
	'articlefeedback-pitch-edit-accept' => 'Immodifika din il-paġna',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'L-ogħla u l-baxxi tal-ġurnata',
	'articleFeedback-table-caption-dailyhighs' => 'Paġni bl-ogħla valutazzjoni: $1',
	'articleFeedback-table-caption-dailylows' => 'Paġni bl-inqas valutazzjoni: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'L-iktar li mbiddlu fil-ġimgħa',
	'articleFeedback-table-caption-recentlows' => 'Il-baxxi l-iktar riċenti',
	'articleFeedback-table-heading-page' => 'Paġna',
	'articleFeedback-table-heading-average' => 'Medja',
	'articleFeedback-copy-above-highlow-tables' => "Din hija funzjoni sperimentali. Ħalli r-rispons tiegħek fil-[$1 paġna ta' diskussjoni].",
	'articlefeedback-disable-preference' => "Turix il-''widget'' tal-valutazzjoni fuq il-paġni (Article Feedback)",
	'articlefeedback-emailcapture-response-body' => "Grazzi talli wrejt interess li ttejjeb lil {{SITENAME}}.

Ħu mument sabiex tiċċekkja l-indirizz elettroniku tiegħek billi tagħfas fuq il-ħoloqa t'hawn taħt:

$1

Tista' wkoll iżżur:

$2

U ddaħħal dan il-kodiċi ta' konferma:

$3

Aħna nkunu f'kuntatt miegħek ma ndumux fuq kif tista' tgħin ittejjeb lil {{SITENAME}}.

Jekk m'għamiltx din ir-rikjesta, injora din il-posta u aħna mhux se nibgħatulek xejn iktar.

Xewqat sbieħ u grazzi,
It-tim ta' {{SITENAME}}",
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'articlefeedback-field-wellwritten-label' => 'Парсте сёрмадозь',
	'articlefeedback-pitch-or' => 'эли',
	'articlefeedback-pitch-edit-accept' => 'Витнемс-петнемс те лопанть',
	'articleFeedback-table-heading-page' => 'Лопазо',
);

/** Nahuatl (Nāhuatl)
 * @author Teòtlalili
 */
$messages['nah'] = array(
	'articlefeedback-pitch-or' => 'nòso',
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Event
 * @author Nghtwlkr
 * @author Sjurhamre
 * @author Stigmj
 */
$messages['nb'] = array(
	'articlefeedback' => 'Panelbord for artikkelvurdering', # Fuzzy
	'articlefeedback-desc' => 'Artikkelvurdering (pilotversjon)', # Fuzzy
	'articlefeedback-error' => 'En feil har oppstått. Prøv igjen senere.',
	'articlefeedback-form-switch-label' => 'Vurder denne siden',
	'articlefeedback-form-panel-title' => 'Vurder denne siden',
	'articlefeedback-form-panel-explanation' => 'Hva er dette?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Fjern denne vurderingen',
	'articlefeedback-form-panel-expertise' => 'Jeg er svært kunnskapsrik på dette området (valgfritt)',
	'articlefeedback-form-panel-expertise-studies' => 'Jeg har en relevant høyskole-/universitetsgrad',
	'articlefeedback-form-panel-expertise-profession' => 'Det er en del av yrket mitt',
	'articlefeedback-form-panel-expertise-hobby' => 'Det er en dypt personlig hobby/lidenskap',
	'articlefeedback-form-panel-expertise-other' => 'Kilden til min kunnskap er ikke listet opp her',
	'articlefeedback-form-panel-helpimprove' => 'Jeg ønsker å bidra til å forbedre Wikipedia, send meg en e-post (valgfritt)',
	'articlefeedback-form-panel-helpimprove-note' => 'Vi vil sende deg en bekreftelse på e-post. Vi vil ikke dele adressen din med noen andre i henhold til vår $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'personvernerklæring for tilbakemeldinger',
	'articlefeedback-form-panel-submit' => 'Send vurdering',
	'articlefeedback-form-panel-pending' => 'Vurderingene dine har ikke blitt sendt inn',
	'articlefeedback-form-panel-success' => 'Lagret',
	'articlefeedback-form-panel-expiry-title' => 'Vurderingen din har utløpt',
	'articlefeedback-form-panel-expiry-message' => 'Revurder denne siden og send inn din nye vurdering.',
	'articlefeedback-report-switch-label' => 'Vis sidevurderinger',
	'articlefeedback-report-panel-title' => 'Sidevurderinger',
	'articlefeedback-report-panel-description' => 'Gjeldende gjennomsnittskarakter.',
	'articlefeedback-report-empty' => 'Ingen vurderinger',
	'articlefeedback-report-ratings' => '$1 vurderinger',
	'articlefeedback-field-trustworthy-label' => 'Pålitelig',
	'articlefeedback-field-trustworthy-tip' => 'Føler du at denne siden har tilstrekkelig med siteringer og at disse siteringene kommer fra pålitelige kilder?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Mangler troverdige kilder',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Få troverdige kilder',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Tilstrekkelig troverdige kilder',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Godt anerkjente kilder',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Spesielt anerkjente kilder',
	'articlefeedback-field-complete-label' => 'Fullstendig',
	'articlefeedback-field-complete-tip' => 'Føler du at denne siden dekker de vesentlige emneområdene som den burde?',
	'articlefeedback-field-complete-tooltip-1' => 'Mangler det meste av informasjonen',
	'articlefeedback-field-complete-tooltip-2' => 'Inneholder noe informasjon',
	'articlefeedback-field-complete-tooltip-3' => 'Inneholder viktig informasjon, med noen mangler',
	'articlefeedback-field-complete-tooltip-4' => 'Inneholder det meste av nøkkelinformasjonen',
	'articlefeedback-field-complete-tooltip-5' => 'Omfattende dekning',
	'articlefeedback-field-objective-label' => 'Objektiv',
	'articlefeedback-field-objective-tip' => 'Føler du at denne siden viser en rettferdig representasjon av alle perspektiv på problemet?',
	'articlefeedback-field-objective-tooltip-1' => 'Sterkt subjektivt',
	'articlefeedback-field-objective-tooltip-2' => 'Moderat subjektivt',
	'articlefeedback-field-objective-tooltip-3' => 'Minimalt subjektivt',
	'articlefeedback-field-objective-tooltip-4' => 'Ingen åpenbar subjektivitet',
	'articlefeedback-field-objective-tooltip-5' => 'Helt objektivt',
	'articlefeedback-field-wellwritten-label' => 'Velskrevet',
	'articlefeedback-field-wellwritten-tip' => 'Føler du at denne siden er godt organisert og godt skrevet?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Uforståelig',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Vanskelig å forstå',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Tilstrekkelig klart',
	'articlefeedback-field-wellwritten-tooltip-4' => 'God klarhet',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Enestående klarhet',
	'articlefeedback-pitch-reject' => 'Kanskje senere',
	'articlefeedback-pitch-or' => 'eller',
	'articlefeedback-pitch-thanks' => 'Takk. Dine vurderinger har blitt lagret.',
	'articlefeedback-pitch-join-message' => 'Ville du opprette en konto?',
	'articlefeedback-pitch-join-body' => 'En konto hjelper deg å spore dine endringer, bli involvert i diskusjoner og være en del av fellesskapet.',
	'articlefeedback-pitch-join-accept' => 'Opprett konto',
	'articlefeedback-pitch-join-login' => 'Logg inn',
	'articlefeedback-pitch-edit-message' => 'Visste du at du kan redigere denne siden?',
	'articlefeedback-pitch-edit-accept' => 'Rediger denne siden',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dagens oppturer og nedturer',
	'articleFeedback-table-caption-dailyhighs' => 'Artikler med høyest vurdering: $1',
	'articleFeedback-table-caption-dailylows' => 'Artikler med lavest vurdering: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Mest endret denne uken',
	'articleFeedback-table-caption-recentlows' => 'Ukens nedturer',
	'articleFeedback-table-heading-page' => 'Side',
	'articleFeedback-table-heading-average' => 'Gjennomsnitt',
	'articleFeedback-copy-above-highlow-tables' => 'Dette er en eksperimentell funksjon.  Vennligst gi tilbakemelding på [$1 diskusjonssiden].',
	'articlefeedback-dashboard-bottom' => "'''NB''': Vi vil fortsette å eksperimentere med forskjellige måter å eksponere artikler i disse oversiktene.  For tiden inkluderer oversiktene følgende artikler:
 * sider med høyeste/laveste rangering: artikler som har mottatt minst 10 rangeringer innen de siste 24 timene.  Middelverdien blir beregnet fra alle rangeringer mottatt det siste døgnet.
 * siste lavrangeringer: artikler som har fått 70% eller lavere (2 stjerner eller lavere) klassifisering i vilkårlig kategori de siste 24 timene. Bare artikler som har mottatt minst 10 rangeringer de siste 24 timene blir inkludert.",
	'articlefeedback-disable-preference' => 'Skjul Artikkeltilbakemelding på sidene',
	'articlefeedback-emailcapture-response-body' => 'Hei!

Takk for din interesse i å hjelpe oss med å forbedre {{SITENAME}}. Vennligst bekreft e-posten din ved å klikke på lenken under:

$1

Du kan også besøke:

$2

Og angi følgende bekreftelseskode:

$3

Vi tar snart kontakt for å forklare hvordan du kan forbedre {{SITENAME}}.

Om du ikke har bedt om denne e-posten, vennligst ignorer den. Den blir i så fall den siste du får fra oss.


Takk skal du ha og lykke til!

Hilsen {{SITENAME}}-teamet',
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam
 * @author Bhawani Gautam Rhk
 * @author RajeshPandey
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'articlefeedback-desc' => 'लेखकोबारेमा पृष्ठपोषण',
	'articlefeedback-form-panel-title' => 'यस पृष्ठलाई मूल्यांकन गर्नुहोस',
	'articlefeedback-form-panel-explanation' => 'यो के हो ?',
	'articlefeedback-form-panel-success' => 'सफलता पूर्वक संग्रह गरियो',
	'articlefeedback-field-trustworthy-label' => 'विश्वस्त',
	'articlefeedback-field-complete-label' => 'पूर्ण',
	'articlefeedback-pitch-or' => 'अथवा',
	'articlefeedback-pitch-join-message' => 'के  तपाईं खाता बनाउन चाहनुहुन्थ्यो?',
	'articlefeedback-pitch-join-accept' => 'खाता खोल्ने',
	'articlefeedback-pitch-join-login' => 'प्रवेश गर्ने',
	'articlefeedback-pitch-edit-message' => 'के तपाईंलाई यो पृष्ठ सम्पादन गर्न सकिन्छ भनेर थाहा थियो?',
	'articlefeedback-pitch-edit-accept' => 'यो पृष्ठ सम्पादन गर्ने',
);

/** Dutch (Nederlands)
 * @author Catrope
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 * @author Tjcool007
 */
$messages['nl'] = array(
	'articlefeedback' => 'Dashboard voor paginaterugkoppeling',
	'articlefeedback-desc' => 'Paginabeoordeling',
	'articlefeedback-error' => 'Er is een fout opgetreden.
Probeer het later opnieuw.',
	'articlefeedback-form-switch-label' => 'Deze pagina waarderen',
	'articlefeedback-form-panel-title' => 'Deze pagina waarderen',
	'articlefeedback-form-panel-explanation' => 'Wat is dit?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Paginaterugkoppeling',
	'articlefeedback-form-panel-clear' => 'Deze beoordeling verwijderen',
	'articlefeedback-form-panel-expertise' => 'Ik ben zeer goed geïnformeerd over dit onderwerp (optioneel)',
	'articlefeedback-form-panel-expertise-studies' => 'Ik heb een relevante opleiding gevolgd op HBO/WO-niveau',
	'articlefeedback-form-panel-expertise-profession' => 'Dit onderwerp is onderdeel van mijn beroep',
	'articlefeedback-form-panel-expertise-hobby' => 'Dit is een diepgevoelde persoonlijke passie',
	'articlefeedback-form-panel-expertise-other' => 'De bron van mijn kennis is geen keuzeoptie',
	'articlefeedback-form-panel-helpimprove' => 'Ik wil graag helpen Wikipedia te verbeteren, stuur me een e-mail (optioneel)',
	'articlefeedback-form-panel-helpimprove-note' => 'We sturen u een bevestigingse-mail. We delen uw e-mailadres niet met externe partijen per ons $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'privacyverklaring over terugkoppeling',
	'articlefeedback-form-panel-submit' => 'Beoordelingen opslaan',
	'articlefeedback-form-panel-pending' => 'Uw waarderingen zijn niet opgeslagen',
	'articlefeedback-form-panel-success' => 'Opgeslagen',
	'articlefeedback-form-panel-expiry-title' => 'Uw beoordelingen zijn verlopen',
	'articlefeedback-form-panel-expiry-message' => 'Beoordeel deze pagina alstublieft opnieuw en sla uw beoordeling op.',
	'articlefeedback-report-switch-label' => 'Paginawaarderingen weergeven',
	'articlefeedback-report-panel-title' => 'Paginawaarderingen',
	'articlefeedback-report-panel-description' => 'Huidige gemiddelde beoordelingen.',
	'articlefeedback-report-empty' => 'Geen beoordelingen',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|één beoordeling|$1 beoordelingen}}',
	'articlefeedback-field-trustworthy-label' => 'Betrouwbaar',
	'articlefeedback-field-trustworthy-tip' => 'Vindt u dat deze pagina voldoende bronvermeldingen heeft en dat de bronvermeldingen betrouwbaar zijn?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Zonder betrouwbare bronnen',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Weinig betrouwbare bronnen',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Voldoende betrouwbare bronnen',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Goede betrouwbare bronnen',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Uitstekend betrouwbare bronnen',
	'articlefeedback-field-complete-label' => 'Voltooid',
	'articlefeedback-field-complete-tip' => 'Vindt u dat deze pagina de essentie van dit onderwerp bestrijkt?',
	'articlefeedback-field-complete-tooltip-1' => 'Meeste informatie ontbreekt',
	'articlefeedback-field-complete-tooltip-2' => 'Bevat enige informatie',
	'articlefeedback-field-complete-tooltip-3' => 'Bevat belangrijke informatie, maar met gaten',
	'articlefeedback-field-complete-tooltip-4' => 'Bevat de meeste belangrijke informatie',
	'articlefeedback-field-complete-tooltip-5' => 'Uitgebreide dekking',
	'articlefeedback-field-objective-label' => 'Onbevooroordeeld',
	'articlefeedback-field-objective-tip' => 'Vindt u dat deze pagina een eerlijke weergave is van alle invalshoeken voor dit onderwerp?',
	'articlefeedback-field-objective-tooltip-1' => 'Zeer partijdig',
	'articlefeedback-field-objective-tooltip-2' => 'Matig partijdig',
	'articlefeedback-field-objective-tooltip-3' => 'Beetje partijdig',
	'articlefeedback-field-objective-tooltip-4' => 'Geen duidelijke partijdigheid',
	'articlefeedback-field-objective-tooltip-5' => 'Helemaal niet partijdig',
	'articlefeedback-field-wellwritten-label' => 'Goed geschreven',
	'articlefeedback-field-wellwritten-tip' => 'Vindt u dat deze pagina een correcte opbouw heeft en goed is geschreven?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Onbegrijpelijk',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Moeilijk te begrijpen',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Voldoende duidelijk',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Heel duidelijk',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Uitzonderlijk duidelijk',
	'articlefeedback-pitch-reject' => 'Nu niet',
	'articlefeedback-pitch-or' => 'of',
	'articlefeedback-pitch-thanks' => 'Bedankt!
Uw beoordeling is opgeslagen.',
	'articlefeedback-pitch-join-message' => 'Wilt u een gebruiker aanmaken?',
	'articlefeedback-pitch-join-body' => 'Als u een gebruiker hebt, kunt u uw bewerkingen beter volgen, meedoen aan overleg en een vollediger onderdeel zijn van de gemeenschap.',
	'articlefeedback-pitch-join-accept' => 'Gebruiker aanmaken',
	'articlefeedback-pitch-join-login' => 'Aanmelden',
	'articlefeedback-pitch-edit-message' => 'Wist u dat u deze pagina kunt bewerken?',
	'articlefeedback-pitch-edit-accept' => 'Deze pagina bewerken',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement/nl',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Hoogte- en dieptepunten van vandaag',
	'articleFeedback-table-caption-dailyhighs' => "Pagina's met de hoogste waarderingen: $1",
	'articleFeedback-table-caption-dailylows' => "Pagina's met de laagste waarderingen: $1",
	'articleFeedback-table-caption-weeklymostchanged' => 'Deze week de meeste wijzigingen',
	'articleFeedback-table-caption-recentlows' => 'Recente dieptepunten',
	'articleFeedback-table-heading-page' => 'Pagina',
	'articleFeedback-table-heading-average' => 'Gemiddelde',
	'articleFeedback-copy-above-highlow-tables' => 'Dit is experimentele functionaliteit. Geef alstublieft terugkoppeling op de [$1 overlegpagina].',
	'articlefeedback-dashboard-bottom' => "'''Let op''': We gaan door met experimenteren met verschillende manieren van het weergeven van pagina's in deze dashboards. Op dit moment bevatten de dashboards onder meer de volgende pagina's:
* Pagina's met de hoogste / laagste waarderingen: pagina's die ten minste tien waarderingen hebben gekregen in de afgelopen 24 uur. Gemiddelden worden berekend door het gemiddelde te nemen van alle waarderingen in de afgelopen 24 uur.
* Recente dieptepunten: pagina's die 70% of meer laag (twee sterren of lager) worden gewaardeerd in elke categorie in de afgelopen 24 uur. Alleen pagina's die op zijn minst tien waarderingen hebben gekregen in de afgelopen 24 uur worden opgenomen.",
	'articlefeedback-disable-preference' => "Widget paginaterugkoppeling niet op pagina's weergeven",
	'articlefeedback-emailcapture-response-body' => 'Hallo!

Dank u wel voor uw interesse in het verbeteren van {{SITENAME}}.

Bevestig alstublieft uw e-mailadres door op de volgende verwijziging te klikken:

$1

U kunt ook gaan naar:

$2

En daar de volgende bevestigingscode invoeren:

$3

We nemen binnenkort contact met u op over hoe u kunt helpen {{SITENAME}} te verbeteren.

Als u niet hebt gevraagd om dit bericht, negeer deze e-mail dan en dan krijgt u geen e-mail meer van ons.

Dank u!

Met vriendelijke groet,

Het team van {{SITENAME}}',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'articlefeedback-form-panel-helpimprove-note' => 'We sturen je een bevestigingse-mail. We delen je e-mailadres niet met externe partijen per ons $1',
	'articlefeedback-form-panel-expiry-title' => 'Je beoordelingen zijn verlopen',
	'articlefeedback-field-trustworthy-tip' => 'Vind je dat deze pagina voldoende bronvermeldingen heeft en dat de bronvermeldingen betrouwbaar zijn?',
	'articlefeedback-field-complete-tip' => 'Vind je dat deze pagina de essentie van dit onderwerp bestrijkt?',
	'articlefeedback-field-objective-tip' => 'Vind je dat deze pagina een eerlijke weergave is van alle invalshoeken voor dit onderwerp?',
	'articlefeedback-field-wellwritten-tip' => 'Vind je dat deze pagina een correcte opbouw heeft een goed is geschreven?',
	'articlefeedback-pitch-thanks' => 'Bedankt!
Je beoordeling is opgeslagen.',
	'articlefeedback-pitch-join-message' => 'Wil je een gebruiker aanmaken?',
	'articlefeedback-pitch-join-body' => 'Als je een gebruiker hebt, kan je je bewerkingen beter volgen, meedoen aan overleg en een vollediger onderdeel zijn van de gemeenschap.',
	'articlefeedback-pitch-edit-message' => 'Wist je dat je deze pagina kunt bewerken?',
	'articlefeedback-emailcapture-response-body' => 'Hallo!

Dank je wel voor je interesse in het verbeteren van {{SITENAME}}.

Bevestig alsjeblieft je e-mailadres door op de volgende verwijziging te klikken:

$1

Je kunt ook gaan naar:

$2

En daar de volgende bevestigingscode invoeren:

$3

We nemen binnenkort contact met je op over hoe u kunt helpen {{SITENAME}} te verbeteren.

Als je niet hebt gevraagd om dit bericht, negeer deze e-mail dan en dan krijg je geen e-mail meer van ons.

Dank je!

Groetjes,

Het team van {{SITENAME}}',
);

/** Norwegian Nynorsk (norsk (nynorsk)‎)
 * @author Nghtwlkr
 */
$messages['nn'] = array(
	'articlefeedback-pitch-or' => 'eller',
	'articlefeedback-pitch-join-login' => 'Logg inn',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Jnanaranjan Sahu
 * @author Odisha1
 * @author Psubhashish
 * @author Shisir 1945
 */
$messages['or'] = array(
	'articlefeedback' => 'ଲେଖା ମତାମତ ଘୋଷଣାନାମା', # Fuzzy
	'articlefeedback-desc' => 'ଲେଖା ମତାମତ',
	'articlefeedback-error' => 'କିଛିଗୋଟେ ଅସୁବିଧା ହେଲା, ଦୟାକରି ଆଉଥରେ ଚେଷ୍ଟା କରନ୍ତୁ ।',
	'articlefeedback-form-switch-label' => 'ଏହି ପୃଷ୍ଠାଟିକୁ ତଉଲିବେ',
	'articlefeedback-form-panel-title' => 'ଏହି ପୃଷ୍ଠାଟିକୁ ତଉଲିବେ',
	'articlefeedback-form-panel-explanation' => 'ଏହା କଣ ?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ଲେଖାମତାମତ',
	'articlefeedback-form-panel-clear' => 'ଏହି ତଉଲକୁ ହଟାଇବେ',
	'articlefeedback-form-panel-expertise' => 'ମୋର ଏହି ଲେଖା ବାବଦରେ ବହୁତ ଜ୍ଞାନ ଅଛି (ଇଚ୍ଛାଧୀନ)',
	'articlefeedback-form-panel-expertise-studies' => 'ମୁଁ ଏହି ପ୍ରସଙ୍ଗରେ ମହାବିଦ୍ୟାଳୟ/ବିଶ୍ଵବିଦ୍ୟାଳୟରୁ ସ୍ନାତୋକ ପାଇଛି',
	'articlefeedback-form-panel-expertise-profession' => 'ଏହା ମୋ ବ୍ୟବସାୟର ଏକ ଅଂଶବିଶେଷ',
	'articlefeedback-form-panel-expertise-hobby' => 'ଏହା ମୋ ନିଜ ମନର ଗଭୀର ବ୍ୟାକୁଳତା',
	'articlefeedback-form-panel-expertise-other' => 'ମୋ ଜ୍ଞାନର ଉତ୍ସ ଏହି ତାଲିକାରେ ନାହିଁ',
	'articlefeedback-form-panel-helpimprove' => 'ମୁଁ ଉଇକିପେଡିଆର ଉନ୍ନତିରେ ସାହାଯ୍ୟ କରିବାକୁ ଚାହେଁ, ମୋତେ ଗୋଟେ ଇ-ମେଲ ପଠାନ୍ତୁ (ଇଚ୍ଛାଧୀନ)',
	'articlefeedback-form-panel-helpimprove-privacy' => 'ମତାମତ ପାଇଁ ଗୁମର ନୀତି',
	'articlefeedback-form-panel-submit' => 'ତଉଲକୁ ପଇଠ କରିବେ',
	'articlefeedback-form-panel-pending' => 'ଆପଣଙ୍କ ତଉଲ ଏ ପର୍ଯ୍ୟନ୍ତ ପଇଠ ହୋଇନାହିଁ',
	'articlefeedback-form-panel-success' => 'ସାଇତିବା ସଫଳ ହେଲା',
	'articlefeedback-form-panel-expiry-title' => 'ଆପଣଙ୍କ ତଉଲର ସମୟ ଶେଷ ହେଇଯାଇଛି',
	'articlefeedback-form-panel-expiry-message' => 'ଦୟାକରି ଏହି ପୃଷ୍ଠାଟିକୁ ପୁନଃ ମୂଲ୍ୟାଙ୍କନକରି ନୂଆ ତଉଲ ପଇଠ କରନ୍ତୁ',
	'articlefeedback-report-switch-label' => 'ପୃଷ୍ଠାର ତଉଲକୁ ଦେଖିବେ',
	'articlefeedback-report-panel-title' => 'ପୃଷ୍ଠା ତଉଲ',
	'articlefeedback-report-panel-description' => 'ବର୍ତମାନର ହାରାହାରି ତଉଲଗୁଡିକ ।',
	'articlefeedback-report-empty' => 'ତଉଲ ନାହିଁ',
	'articlefeedback-report-ratings' => '$1 ତଉଲ',
	'articlefeedback-field-trustworthy-label' => 'ବିଶ୍ୱାସଯୋଗ୍ୟ',
	'articlefeedback-field-trustworthy-tooltip-1' => 'ଜଣାଶୁଣା ଆଧାର ନାହିଁ',
	'articlefeedback-field-trustworthy-tooltip-2' => 'ବହୁତ କମ ଜଣାଶୁଣା ଆଧାର',
	'articlefeedback-field-trustworthy-tooltip-3' => 'ଯଥେଷ୍ଟ ଜଣାଶୁଣା ଆଧାର ଅଛି',
	'articlefeedback-field-trustworthy-tooltip-4' => 'ବହୁତ ଭଲ ଜଣାଶୁଣା ଆଧାର ଅଛି',
	'articlefeedback-field-trustworthy-tooltip-5' => 'ମହାନ ଜଣାଶୁଣା ଆଧାର',
	'articlefeedback-field-complete-label' => 'ଶେଷ',
	'articlefeedback-field-complete-tip' => 'ଆପଣଙ୍କୁ ଲାଗୁଛି କି ଏହି ପୃଷ୍ଠାରେ ଯାହାସବୁ ଦରକାରୀ ଲେଖା ରହିବା କଥା ତାହା ଅଛି ?',
	'articlefeedback-field-complete-tooltip-1' => 'ବହୁତ ଗୁଡିଏ ତଥ୍ୟ ନାହି',
	'articlefeedback-field-complete-tooltip-2' => 'କିଛି ସୂଚନା ଅଛି',
	'articlefeedback-field-complete-tooltip-3' => 'କିଛି ମୁଳ ସୂଚନା ଅଛି, କିନ୍ତୁ ମଝିରେ ମଝିରେ ଛାଡିକି ଅଛି',
	'articlefeedback-field-complete-tooltip-4' => 'ଅଧିକ ମୂଳ ସୂଚନାଗୁଡିକ ଅଛି',
	'articlefeedback-field-complete-tooltip-5' => 'ବିସ୍ତୀର୍ଣ ବିବରଣୀ ଅଛି',
	'articlefeedback-field-objective-label' => 'ଉଦ୍ଧେଶ୍ୟ',
	'articlefeedback-field-objective-tooltip-1' => 'ଅତ୍ୟନ୍ତ ପକ୍ଷପାତମୂଳକ',
	'articlefeedback-field-objective-tooltip-2' => 'ମଝାମଝି ପକ୍ଷପାତମୂଳକ',
	'articlefeedback-field-objective-tooltip-3' => 'ଅଳ୍ପ ପକ୍ଷପାତମୂଳକ',
	'articlefeedback-field-objective-tooltip-4' => 'ଜଣାଯାଉନଥିବା ପକ୍ଷପାତ',
	'articlefeedback-field-objective-tooltip-5' => 'ପୁରାପୁରି ପକ୍ଷପାତମୂଳକ',
	'articlefeedback-field-wellwritten-label' => 'ଭଲ ଲେଖା',
	'articlefeedback-field-wellwritten-tip' => 'ଆପଣଙ୍କୁ ଲାଗୁଛି କି ଏହି ପ୍ରୁଷ୍ଠାଟି ଭଲ ଭାବେ ସଜଡା ଯାଇଛି ଓ ଲେଖାଯାଇଛି ?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'ବିସ୍ତ୍ରୁତ ବିବରଣୀ ନାହିଁ',
	'articlefeedback-field-wellwritten-tooltip-2' => 'ବୁଝିବା ପାଇଁ ଅସୁବିଧା',
	'articlefeedback-field-wellwritten-tooltip-3' => 'ଯଥେଷ୍ଟ ସ୍ପଷ୍ଟତା',
	'articlefeedback-field-wellwritten-tooltip-4' => 'ଭଲ ସ୍ପଷ୍ଟତା',
	'articlefeedback-field-wellwritten-tooltip-5' => 'ଅଲଗାପ୍ରକାର ସ୍ପଷ୍ଟତା',
	'articlefeedback-pitch-reject' => 'ବୋଧେ ପରେ',
	'articlefeedback-pitch-or' => 'କିମ୍ବା',
	'articlefeedback-pitch-thanks' => 'ଧନ୍ୟବାଦ ! ଆପଣଙ୍କ ତଉଲକୁ ସାଇତାଯାଇଛି ।',
	'articlefeedback-pitch-join-message' => 'ଆପଣ ଗୋଟିଏ ନୂଆ ଖାତା ଖୋଲିବାକୁ ଚାହୁଁଛନ୍ତି କି ?',
	'articlefeedback-pitch-join-body' => 'ଗୋଟିଏ ଖାତା ଖୋଲିଲେ ଏହା ଆପଣଙ୍କ ବଦଳ ଗୁଡିକର ଦେଖା, ଆଲୋଚନାର ଭାଗନେବା ଓ ଏହି ଦଳ ସହ ଯୋଡ଼ି ରହିବାରେ ସହଯୋଗ କରିବ ।',
	'articlefeedback-pitch-join-accept' => 'ନୂଆ ଖାତାଟିଏ ଖୋଲନ୍ତୁ',
	'articlefeedback-pitch-join-login' => 'ଲଗଇନ',
	'articlefeedback-pitch-edit-message' => 'ଆପଣ ଜାଣିଛନ୍ତି କି ଆପଣ ଏହି ପୃଷ୍ଠାକୁ ବଦଳାଇ ପାରିବେ?',
	'articlefeedback-pitch-edit-accept' => 'ଏହି ପୃଷ୍ଠାଟିକୁ ବଦଳାଇବେ',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'ଆଜିର ଉଚ୍ଚତମ ଓ ନ୍ୟୁନତମ',
	'articleFeedback-table-caption-dailyhighs' => 'ଅଧିକ ଲୋକପ୍ରିୟତା ଥିବା ପୃଷ୍ଠାଗୁଡିକ : $1',
	'articleFeedback-table-caption-dailylows' => 'କମ ଲୋକପ୍ରିୟତା ଥିବା ପୃଷ୍ଠାଗୁଡିକ : $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'ଏହି ସପ୍ତାହରେ ସବୁଠୁ ଅଧିକଥର ବଦଳାଯାଇଥିବା',
	'articleFeedback-table-caption-recentlows' => 'ଏବେକାର ନ୍ୟୁନତମ',
	'articleFeedback-table-heading-page' => 'ପୃଷ୍ଠା',
	'articleFeedback-table-heading-average' => 'ହାରାହାରି',
	'articleFeedback-copy-above-highlow-tables' => 'ଏହା ଗୋଟିଏ ପରୀକ୍ଷା ମୂଳକ ଗୁଣ । ଦୟାକରି [$1 ଆଲୋଚନା ପୃଷ୍ଠା]ରେ ଆପଣଙ୍କ ମତାମତ ଦିଅନ୍ତୁ ।',
	'articlefeedback-disable-preference' => 'ଲେଖା ମତାମତ ବିଭାଗଟିକୁ ପୃଷ୍ଠାଗୁଡିକରେ ଦେଖନ୍ତୁ ନାହିଁ',
);

/** Ossetic (Ирон)
 * @author Amikeco
 */
$messages['os'] = array(
	'articleFeedback-table-heading-average' => 'Рæстæмбис',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'articlefeedback-pitch-or' => 'odder',
	'articleFeedback-table-heading-page' => 'Blatt',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'articlefeedback-pitch-or' => 'oda',
	'articleFeedback-table-heading-page' => 'Said',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Olgak85
 * @author Przemub
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'articlefeedback' => 'Ocena artykułu',
	'articlefeedback-desc' => 'Ocena artykułu',
	'articlefeedback-error' => 'Wystąpił błąd. Proszę spróbować ponownie później.',
	'articlefeedback-form-switch-label' => 'Oceń tę stronę',
	'articlefeedback-form-panel-title' => 'Oceń tę stronę',
	'articlefeedback-form-panel-explanation' => 'Co to jest?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Ocena artykułu',
	'articlefeedback-form-panel-clear' => 'Usuń ranking',
	'articlefeedback-form-panel-expertise' => 'Posiadam szeroką wiedzę w tym temacie (opcjonalne)',
	'articlefeedback-form-panel-expertise-studies' => 'Znam to zagadnienie ze szkoły średniej lub ze studiów',
	'articlefeedback-form-panel-expertise-profession' => 'Zagadnienie związane jest z moim zawodem',
	'articlefeedback-form-panel-expertise-hobby' => 'Bardzo wnikliwie interesuję się tym tematem',
	'articlefeedback-form-panel-expertise-other' => 'Źródła mojej wiedzy nie ma na liście',
	'articlefeedback-form-panel-helpimprove' => 'Chciałbym pomóc rozwijać Wikipedię – wyślij do mnie e‐maila (opcjonalne)',
	'articlefeedback-form-panel-helpimprove-note' => 'Otrzymasz od nas potwierdzenie e-mailem. Twój adres nie zostanie przekazany osobom trzecim. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Zasady ochrony prywatności',
	'articlefeedback-form-panel-submit' => 'Prześlij opinię',
	'articlefeedback-form-panel-pending' => 'Twoja ocena nie została jeszcze zapisana',
	'articlefeedback-form-panel-success' => 'Zapisano',
	'articlefeedback-form-panel-expiry-title' => 'Twoje oceny są nieaktualne',
	'articlefeedback-form-panel-expiry-message' => 'Dokonaj ponownej oceny tej strony i zapisz jej wynik',
	'articlefeedback-report-switch-label' => 'Jak strona była oceniana',
	'articlefeedback-report-panel-title' => 'Ocena strony',
	'articlefeedback-report-panel-description' => 'Aktualna średnia ocen.',
	'articlefeedback-report-empty' => 'Brak ocen',
	'articlefeedback-report-ratings' => '$1 {{PLURAL:$1|ocena|oceny|ocen}}',
	'articlefeedback-field-trustworthy-label' => 'Godna zaufania',
	'articlefeedback-field-trustworthy-tip' => 'Czy uważasz, że strona ma wystarczającą liczbę odnośników i że odnoszą się one do wiarygodnych źródeł?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Brak wiarygodnych źródeł',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Niewiele wiarygodnych źródeł',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Wystarczająca liczba wiarygodnych źródeł',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Dobra liczba wiarygodnych źródeł',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Bardzo wiele wiarygodnych źródeł',
	'articlefeedback-field-complete-label' => 'Wyczerpanie tematu',
	'articlefeedback-field-complete-tip' => 'Czy uważasz, że strona porusza wszystkie istotne aspekty, które powinna?',
	'articlefeedback-field-complete-tooltip-1' => 'Brak wielu informacji',
	'articlefeedback-field-complete-tooltip-2' => 'Zawiera trochę informacji',
	'articlefeedback-field-complete-tooltip-3' => 'Zawiera najważniejsze informacje, ale ma braki',
	'articlefeedback-field-complete-tooltip-4' => 'Zawiera większość najważniejszych informacji',
	'articlefeedback-field-complete-tooltip-5' => 'Wyczerpuje temat',
	'articlefeedback-field-objective-label' => 'Neutralna',
	'articlefeedback-field-objective-tip' => 'Czy uważasz, że strona prezentuje wszystkie punkty widzenia na to zagadnienie?',
	'articlefeedback-field-objective-tooltip-1' => 'Bardzo tendencyjna',
	'articlefeedback-field-objective-tooltip-2' => 'Umiarkowanie tendencyjna',
	'articlefeedback-field-objective-tooltip-3' => 'Minimalnie tendencyjna',
	'articlefeedback-field-objective-tooltip-4' => 'Brak jednoznacznej tendencyjności',
	'articlefeedback-field-objective-tooltip-5' => 'Całkowicie bezstronny',
	'articlefeedback-field-wellwritten-label' => 'Dobrze napisana',
	'articlefeedback-field-wellwritten-tip' => 'Czy uważasz, że strona jest właściwie sformatowana oraz zrozumiale napisana?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Niezrozumiała',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Trudna do zrozumienia',
	'articlefeedback-field-wellwritten-tooltip-3' => 'W miarę zrozumiała',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Dobrze zrozumiała',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Wyjątkowo dobrze zrozumiała',
	'articlefeedback-pitch-reject' => 'Może później',
	'articlefeedback-pitch-or' => 'lub',
	'articlefeedback-pitch-thanks' => 'Dziękujemy! Wystawione przez Ciebie oceny zostały zapisane.',
	'articlefeedback-pitch-join-message' => 'Czy chcesz utworzyć konto?',
	'articlefeedback-pitch-join-body' => 'Posiadanie konta ułatwia śledzenie wprowadzanych zmian, udział w dyskusjach oraz integrację ze społecznością.',
	'articlefeedback-pitch-join-accept' => 'Utwórz konto',
	'articlefeedback-pitch-join-login' => 'Zaloguj się',
	'articlefeedback-pitch-edit-message' => 'Czy wiesz, że możesz edytować tę stronę?',
	'articlefeedback-pitch-edit-accept' => 'Edytuj tę stronę',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Najwyższe i najniższe w dniu dzisiejszym',
	'articleFeedback-table-caption-dailyhighs' => 'Artykuły najwyżej oceniane: $1',
	'articleFeedback-table-caption-dailylows' => 'Artykuły najniżej oceniane: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Najczęściej zmieniane w tym tygodniu',
	'articleFeedback-table-caption-recentlows' => 'Najniższe ostatnio',
	'articleFeedback-table-heading-page' => 'Strona',
	'articleFeedback-table-heading-average' => 'Średnio',
	'articleFeedback-copy-above-highlow-tables' => 'To jest rozwiązanie eksperymentalne. Wyraź swoją opinię na jego temat na [$1 stronie dyskusji].',
	'articlefeedback-dashboard-bottom' => "'''Uwaga''' – będziemy nadal eksperymentować z różnymi metodami poprawiania artykułów. Obecnie pracujemy nad następującymi artykułami:
 * Strony oceniane najwyżej i najniżej – artykuły, które zostały co najmniej 10 razy ocenione w ciągu ostatnich 24 godzin. Wartości średnie są obliczane poprzez wyciągnięcie średniej ze wszystkich ocen z ostatnich 24 godzin.
 * Ostatnio słabe – artykuły, które uzyskały 70% lub więcej ocen negatywnych (2 gwiazdki lub mniej) w każdej kategorii, w ciągu ostatnich 24 godzin. Uwzględniane są tylko te artykuły, które otrzymały przynajmniej 10 ocen w ostatnich 24 godzinach.",
	'articlefeedback-disable-preference' => 'Nie pokazuj na stronach widżetu opinii o artykule',
	'articlefeedback-emailcapture-response-body' => 'Witaj!

Dziękujemy za zainteresowanie udoskonalaniem {{GRAMMAR:D.lp|{{SITENAME}}}}.

Poświęć chwilę na potwierdzenie swojego adres e‐mail – kliknij link

$1

Możesz również odwiedzić

$2

i wprowadzić kod potwierdzający

$3

Będziemy nadal współpracować, aby udoskonalić {{GRAMMAR:B.lp|{{SITENAME}}}}.

Jeśli to nie Ty spowodowałeś wysłanie tego e‐maila, wystarczy że go zignorujesz – niczego więcej do Ciebie nie wyślemy.

Pozdrawiamy i dziękujemy,
zespół {{GRAMMAR:D.lp|{{SITENAME}}}}.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'articlefeedback' => "Cruscòt ëd valutassion ëd j'artìcoj",
	'articlefeedback-desc' => "Version pilòta dla valutassion ëd j'artìcoj",
	'articlefeedback-error' => "A l'é capitaje n'eror. Për piasì preuva pi tard.",
	'articlefeedback-form-switch-label' => 'Valuté costa pàgina',
	'articlefeedback-form-panel-title' => 'Valuté costa pàgina',
	'articlefeedback-form-panel-explanation' => "Lòn ch'a l'é sossì?",
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Gava sta valutassion',
	'articlefeedback-form-panel-expertise' => 'Mi i conòsso pròpe bin cost argoment (opsional)',
	'articlefeedback-form-panel-expertise-studies' => "Mi i l'heu un tìtol dë studi universitari pertinent",
	'articlefeedback-form-panel-expertise-profession' => "A l'é part ëd mia profession",
	'articlefeedback-form-panel-expertise-hobby' => "A l'é na passion përsonal ancreusa",
	'articlefeedback-form-panel-expertise-other' => "La sorziss ëd mia conossensa a l'é pa listà ambelessì",
	'articlefeedback-form-panel-helpimprove' => 'Am piasrìa giuté a amelioré Wikipedia, mandeme un mëssagi an pòsta eletrònica (opsional)',
	'articlefeedback-form-panel-helpimprove-note' => 'I-j mandroma un mëssagi ëd confirmassion. I condividroma pa soa adrëssa con part esterne second nòst $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'prinsipi ëd confidensialità dij sugeriment',
	'articlefeedback-form-panel-submit' => 'Spedì le valutassion',
	'articlefeedback-form-panel-pending' => "Toe valutassion a son pa anco' stàite mandà",
	'articlefeedback-form-panel-success' => 'Salvà për da bin',
	'articlefeedback-form-panel-expiry-title' => 'Toe valutassion a son scadùe',
	'articlefeedback-form-panel-expiry-message' => "Për piasì, ch'a vàluta torna costa pagina e ch'a spedissa soa neuva valutassion.",
	'articlefeedback-report-switch-label' => 'Vëdde le valutassion ëd le pàgine',
	'articlefeedback-report-panel-title' => 'Valutassion ëd le pàgine',
	'articlefeedback-report-panel-description' => 'Valutassion medie atuaj.',
	'articlefeedback-report-empty' => 'Gnun-a valutassion',
	'articlefeedback-report-ratings' => '$1 valutassion',
	'articlefeedback-field-trustworthy-label' => 'Fidà',
	'articlefeedback-field-trustworthy-tip' => "A pensa che costa pàgina a l'abia a basta ëd citassion e che coste citassion a rivo da 'd sorgiss fidà?",
	'articlefeedback-field-trustworthy-tooltip-1' => 'A manco ëd sorgiss sigure',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Pòche sorziss sigure',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Bastansa sorgiss sigure',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Bon-e sorziss sigure',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Sorgiss sigure motobin bon-e',
	'articlefeedback-field-complete-label' => 'Completa',
	'articlefeedback-field-complete-tip' => "A pensa che costa pàgina a coata ij tema essensiaj dl'argoment com a dovrìa?",
	'articlefeedback-field-complete-tooltip-1' => "A manca la pi part dj'anformassion",
	'articlefeedback-field-complete-tooltip-2' => 'A conten quàiche anformassion',
	'articlefeedback-field-complete-tooltip-3' => "A conten d'anformassion ciav, ma con dij përtus",
	'articlefeedback-field-complete-tooltip-4' => "A conten la pè part dj'anformassion ciav",
	'articlefeedback-field-complete-tooltip-5' => 'Covertura completa',
	'articlefeedback-field-objective-label' => 'Obietiv',
	'articlefeedback-field-objective-tip' => 'A pensa che costa pàgina a smon na giusta rapresentassion ëd tute le prospetive dël problema?',
	'articlefeedback-field-objective-tooltip-1' => 'Pesantement parsial',
	'articlefeedback-field-objective-tooltip-2' => 'Moderatament parsial',
	'articlefeedback-field-objective-tooltip-3' => 'Minimament parsial',
	'articlefeedback-field-objective-tooltip-4' => 'Gnun-a parsialità evidenta',
	'articlefeedback-field-objective-tooltip-5' => "Nen d'autut parsial",
	'articlefeedback-field-wellwritten-label' => 'Scrivù bin',
	'articlefeedback-field-wellwritten-tip' => 'A pensa che costa pàgina a sia bin organisà e bin ëscrivùa?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Pa comprensìbil',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Malfé capì',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Ciarëssa adeguà',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Ciarëssa bon-a',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Ciarëssa ecessional',
	'articlefeedback-pitch-reject' => 'Miraco pì tard',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => 'Mersì! Soe valutassion a son ëstàite salvà.',
	'articlefeedback-pitch-join-message' => 'Veus-to creé un cont?',
	'articlefeedback-pitch-join-body' => 'Un cont a-j giutrà a steje dapress a soe modìfiche, a lo amplichërà ant le discussion e lo farà part ëd la comunità.',
	'articlefeedback-pitch-join-accept' => 'Crea un cont',
	'articlefeedback-pitch-join-login' => 'Intra',
	'articlefeedback-pitch-edit-message' => "A lo savìa ch'a peul modifiché costa pàgina?",
	'articlefeedback-pitch-edit-accept' => "Modìfica st'artìcol-sì",
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => "J'àut e ij bass d'ancheuj",
	'articleFeedback-table-caption-dailyhighs' => 'Pàgine con le mej valutassion: $1',
	'articleFeedback-table-caption-dailylows' => 'Pàgine con le pes valutassion: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Ij pì modificà dë sta sman-a',
	'articleFeedback-table-caption-recentlows' => 'Bass recent',
	'articleFeedback-table-heading-page' => 'Pàgina',
	'articleFeedback-table-heading-average' => 'Media',
	'articleFeedback-copy-above-highlow-tables' => "Costa a l'é na funsionalità sperimental. Për piasì, ch'a fasa ij sò coment an sla [pàgina ëd discussion ëd $1]",
	'articlefeedback-dashboard-bottom' => "'''Nòta''': Noi i continuëroma a sperimenté ëd manere diferente d'arpresenté j'artìcoj andrinta a coste tablò. Al present, ël tablò a conten costi artìcoj:
* Pàgine con le mej/pes valutassion: artìcoj che a l'han arseivù almanch 10 valutassion ant j'ùltime 24 ore. Le medie a son calcolà an pijand la media ëd tute le valutassion spedìe ant j'ùltime 24 ore.
* Pi bass recent: artìcoj ch'a l'han pijà lë 70% o valutassion pi basse (2 stèile o men) an tute le categorìe ant j'ùltime 24 ore. Mach j'artìcoj ch'a l'han arseivù almanch 10 valutassion ant j'ùltime 24 ore a son comprèis.",
	'articlefeedback-disable-preference' => "Smon-e nen la tàula ëd valutassion ëd j'Artìcol an sle pàgine",
	'articlefeedback-emailcapture-response-body' => "Cerea!

Mersì për avèj signalà sò anteresse a giuté a amelioré {{SITENAME}}.

Për piasì, ch'a treuva un moment për confirmé soa adrëssa ëd pòsta eletrònica an sgnacand an sla liura sì-sota:

$1

A peul ëdcò visité:

$2

E anserì ël còdes ëd confirmassion sì-sota:

$3

I saroma tòst an contat con la manera ëd coma a peul giuté a amelioré {{SITENAME}}.

S'a l'ha pa ancaminà chiel costa arcesta, për piasì ch'a lassa perde 's mëssagi e noi i-j manderoma pi gnente d'àutr.

Tante bele ròbe, e mersì,
L'echip ëd {{SITENAME}}",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'articlefeedback-form-switch-label' => 'دا مخ ارزول',
	'articlefeedback-form-panel-title' => 'دا مخ ارزول',
	'articlefeedback-form-panel-explanation' => 'دا څه دی؟',
	'articlefeedback-form-panel-expertise-profession' => 'دا زما د مسلک برخه دی',
	'articlefeedback-form-panel-submit' => 'ارزونې سپارل',
	'articlefeedback-form-panel-success' => 'بريالی خوندي شو',
	'articlefeedback-report-switch-label' => 'مخ ارزونې کتل',
	'articlefeedback-report-panel-title' => 'مخ ارزونه',
	'articlefeedback-field-trustworthy-label' => 'د باور وړ',
	'articlefeedback-field-trustworthy-tooltip-1' => 'د کره سرچينو نه بې برخې',
	'articlefeedback-field-trustworthy-tooltip-2' => 'لږ شمېر کره سرچينې لري',
	'articlefeedback-field-trustworthy-tooltip-3' => 'د کره سرچينو نه بسيا دی',
	'articlefeedback-field-trustworthy-tooltip-4' => 'ښې کره سرچينې لري',
	'articlefeedback-field-trustworthy-tooltip-5' => 'ډېرې ښې کره سرچينې لري',
	'articlefeedback-field-complete-label' => 'بشپړ',
	'articlefeedback-field-complete-tooltip-1' => 'اکثره مالومات نه لري',
	'articlefeedback-field-complete-tooltip-2' => 'يو څه مالومات لري',
	'articlefeedback-field-wellwritten-label' => 'ښه ليکل شوی',
	'articlefeedback-pitch-reject' => 'کېدای شي وروسته',
	'articlefeedback-pitch-or' => 'يا',
	'articlefeedback-pitch-join-message' => 'آيا غوښتل مو چې يو ګڼون جوړ کړۍ؟',
	'articlefeedback-pitch-join-accept' => 'يو ګڼون جوړول',
	'articlefeedback-pitch-join-login' => 'ننوتل',
	'articlefeedback-pitch-edit-accept' => 'دا مخ سمول',
	'articleFeedback-table-heading-page' => 'مخ',
);

/** Portuguese (português)
 * @author Giro720
 * @author Hamilton Abreu
 * @author Helder.wiki
 * @author SandroHc
 * @author Waldir
 */
$messages['pt'] = array(
	'articlefeedback' => 'Painel de avaliação de artigos',
	'articlefeedback-desc' => 'Avaliação de artigos',
	'articlefeedback-error' => 'Ocorreu um erro. Tente novamente mais tarde, por favor.',
	'articlefeedback-form-switch-label' => 'Avaliar esta página',
	'articlefeedback-form-panel-title' => 'Avaliar esta página',
	'articlefeedback-form-panel-explanation' => 'O que é isto?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Avaliação de Artigos',
	'articlefeedback-form-panel-clear' => 'Remover esta avaliação',
	'articlefeedback-form-panel-expertise' => 'Conheço este assunto muito profundamente (opcional)',
	'articlefeedback-form-panel-expertise-studies' => 'Tenho estudos relevantes do secundário ou universidade',
	'articlefeedback-form-panel-expertise-profession' => 'Faz parte dos meus conhecimentos profissionais',
	'articlefeedback-form-panel-expertise-hobby' => 'É uma das minhas paixões pessoais',
	'articlefeedback-form-panel-expertise-other' => 'A fonte do meu conhecimento não está listada aqui',
	'articlefeedback-form-panel-helpimprove' => 'Gostava de ajudar a melhorar a Wikipédia; enviem-me um correio electrónico (opcional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Irá receber uma mensagem de confirmação por correio electrónico. O seu endereço de correio electrónico não será partilhado com entidades externas, de acordo com a nossa $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'declaração de confidencialidade dos comentários',
	'articlefeedback-form-panel-submit' => 'Enviar avaliações',
	'articlefeedback-form-panel-pending' => 'As suas avaliações não foram enviadas',
	'articlefeedback-form-panel-success' => 'Gravado',
	'articlefeedback-form-panel-expiry-title' => 'As suas avaliações expiraram',
	'articlefeedback-form-panel-expiry-message' => 'Volte a avaliar esta página e envie as novas avaliações, por favor.',
	'articlefeedback-report-switch-label' => 'Ver avaliações',
	'articlefeedback-report-panel-title' => 'Avaliações',
	'articlefeedback-report-panel-description' => 'Avaliações médias actuais.',
	'articlefeedback-report-empty' => 'Não existem avaliações',
	'articlefeedback-report-ratings' => '$1 avaliações',
	'articlefeedback-field-trustworthy-label' => 'De confiança',
	'articlefeedback-field-trustworthy-tip' => 'Considera que esta página tem citações suficientes e que essas citações provêm de fontes fidedignas?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Não tem fontes fidedignas',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Tem poucas fontes fidedignas',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Adequada em fontes fidedignas',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Boa em fontes fidedignas',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Excelente em fontes fidedignas',
	'articlefeedback-field-complete-label' => 'Completa',
	'articlefeedback-field-complete-tip' => 'Considera que esta página aborda os temas essenciais que deviam ser cobertos?',
	'articlefeedback-field-complete-tooltip-1' => 'Falta grande parte da informação',
	'articlefeedback-field-complete-tooltip-2' => 'Contém alguma informação',
	'articlefeedback-field-complete-tooltip-3' => 'Contém a informação importante, mas com falhas',
	'articlefeedback-field-complete-tooltip-4' => 'Contém a maior parte da informação importante',
	'articlefeedback-field-complete-tooltip-5' => 'Cobre o assunto de forma abrangente',
	'articlefeedback-field-objective-label' => 'Objectiva',
	'articlefeedback-field-objective-tip' => 'Acha que esta página representa, de forma equilibrada, todos os pontos de vista sobre o assunto?',
	'articlefeedback-field-objective-tooltip-1' => 'Muito parcial',
	'articlefeedback-field-objective-tooltip-2' => 'Moderadamente parcial',
	'articlefeedback-field-objective-tooltip-3' => 'Minimamente parcial',
	'articlefeedback-field-objective-tooltip-4' => 'Sem parcialidades óbvias',
	'articlefeedback-field-objective-tooltip-5' => 'Completamente imparcial',
	'articlefeedback-field-wellwritten-label' => 'Bem escrita',
	'articlefeedback-field-wellwritten-tip' => 'Acha que esta página está bem organizada e bem escrita?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Incompreensível',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Difícil de entender',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Adequadamente clara',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Bastante clara',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Extremamente clara',
	'articlefeedback-pitch-reject' => 'Talvez mais tarde',
	'articlefeedback-pitch-or' => 'ou',
	'articlefeedback-pitch-thanks' => 'Obrigado! As suas avaliações foram gravadas.',
	'articlefeedback-pitch-join-message' => 'Queria criar uma conta?',
	'articlefeedback-pitch-join-body' => 'Uma conta permite-lhe seguir as suas edições, participar nos debates e fazer parte da comunidade.',
	'articlefeedback-pitch-join-accept' => 'Criar conta',
	'articlefeedback-pitch-join-login' => 'Autenticação',
	'articlefeedback-pitch-edit-message' => 'Sabia que pode editar esta página?',
	'articlefeedback-pitch-edit-accept' => 'Editar esta página',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'As melhores e piores de hoje',
	'articleFeedback-table-caption-dailyhighs' => 'Páginas com as avaliações mais elevadas: $1',
	'articleFeedback-table-caption-dailylows' => 'Páginas com as avaliações mais baixas: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'As mais alteradas da semana',
	'articleFeedback-table-caption-recentlows' => 'As piores mais recentes',
	'articleFeedback-table-heading-page' => 'Página',
	'articleFeedback-table-heading-average' => 'Média',
	'articleFeedback-copy-above-highlow-tables' => 'Esta funcionalidade é experimental. Deixe os seus comentários na [$1 página de discussão], por favor.',
	'articlefeedback-dashboard-bottom' => "'''Nota''': Continuaremos a experimentar diferentes critérios de selecção de artigos para estes painéis. De momento, os painéis incluem os seguintes:
* Páginas com as avaliações mais altas e mais baixas: páginas que receberam pelo menos 10 avaliações nas últimas 24 horas. As médias são calculadas pela média de todas as avaliações recebidas nas últimas 24 horas.
* As piores mais recentes: páginas com 70% ou mais de avaliações baixas (2 estrelas ou menos) em qualquer categoria nas últimas 24 horas. Só são incluídas as páginas que receberam pelo menos 10 avaliações nas últimas 24 horas.",
	'articlefeedback-disable-preference' => 'Não mostrar nas páginas o widget da avaliação de artigos',
	'articlefeedback-emailcapture-response-body' => 'Olá,

Obrigado por expressar interesse em ajudar a melhorar a {{SITENAME}}.

Confirme o seu endereço de correio electrónico, clicando o link abaixo, por favor:

$1

Também pode visitar:

$2

E introduzir o seguinte código de confirmação:

$3

Em breve irá receber informações sobre como pode ajudar a melhorar a {{SITENAME}}.

Se não originou este pedido, ignore esta mensagem e não voltará a ser contactado.

Cumprimentos,
A equipa da {{SITENAME}}',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Giro720
 * @author MetalBrasil
 * @author Pedroca cerebral
 * @author Rafael Vargas
 * @author Raylton P. Sousa
 * @author 555
 */
$messages['pt-br'] = array(
	'articlefeedback' => 'Painel de avaliação de artigos', # Fuzzy
	'articlefeedback-desc' => 'Avaliação do artigo (versão de testes)', # Fuzzy
	'articlefeedback-error' => 'Ocorreu um erro. Por favor, tente novamente mais tarde.',
	'articlefeedback-form-switch-label' => 'Avaliar esta página',
	'articlefeedback-form-panel-title' => 'Avaliar esta página',
	'articlefeedback-form-panel-explanation' => 'O que é isso?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Avaliação de Artigos',
	'articlefeedback-form-panel-clear' => 'Remover esta avaliação',
	'articlefeedback-form-panel-expertise' => 'Estou muito bem informado sobre este tema (opcional)',
	'articlefeedback-form-panel-expertise-studies' => 'Tenho um título universitário relacionado',
	'articlefeedback-form-panel-expertise-profession' => 'Faz parte dos meus conhecimentos profissionais',
	'articlefeedback-form-panel-expertise-hobby' => 'É uma das minhas paixões pessoais',
	'articlefeedback-form-panel-expertise-other' => 'A fonte dos meus conhecimentos, não está listada aqui',
	'articlefeedback-form-panel-helpimprove' => 'Eu gostaria de ajudar a melhorar a Wikipédia; enviem-me um e-mail (opcional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Nós enviaremos a você um e-mail de confirmação. Nós não iremos fornecer seu endereço de e-mail com terceiros, de acordo com a nossa $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'declaração de confidencialidade dos comentários',
	'articlefeedback-form-panel-submit' => 'Enviar avaliações',
	'articlefeedback-form-panel-pending' => 'As suas avaliações não foram enviadas',
	'articlefeedback-form-panel-success' => 'Gravado com sucesso',
	'articlefeedback-form-panel-expiry-title' => 'As suas avaliações expiraram',
	'articlefeedback-form-panel-expiry-message' => 'Volte a avaliar esta página e envie as novas avaliações, por favor.',
	'articlefeedback-report-switch-label' => 'Ver avaliações',
	'articlefeedback-report-panel-title' => 'Avaliações',
	'articlefeedback-report-panel-description' => 'Classificações médias atuais.',
	'articlefeedback-report-empty' => 'Não existem avaliações',
	'articlefeedback-report-ratings' => '$1 avaliações',
	'articlefeedback-field-trustworthy-label' => 'Confiável',
	'articlefeedback-field-trustworthy-tip' => 'Você considera que esta página tem citações suficientes e que essas citações provêm de fontes fiáveis?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Carece de fontes respeitáveis',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Poucas fontes confiáveis',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Adequada em fontes confiáveis',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Fontes de boa procedência',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Fontes muito confiáveis',
	'articlefeedback-field-complete-label' => 'Completa',
	'articlefeedback-field-complete-tip' => 'Você considera que esta página aborda os temas essenciais que deviam ser cobertos?',
	'articlefeedback-field-complete-tooltip-1' => 'Falta grande parte da informação',
	'articlefeedback-field-complete-tooltip-2' => 'Contém alguma informação',
	'articlefeedback-field-complete-tooltip-3' => 'Contém a informação principal, mas com falhas',
	'articlefeedback-field-complete-tooltip-4' => 'Contém a maior parte da informação importante',
	'articlefeedback-field-complete-tooltip-5' => 'Cobre o assunto de forma abrangente',
	'articlefeedback-field-objective-label' => 'Imparcial',
	'articlefeedback-field-objective-tip' => 'Você acha que esta página representa, de forma equilibrada, todos os pontos de vista sobre o assunto?',
	'articlefeedback-field-objective-tooltip-1' => 'Muito parcial',
	'articlefeedback-field-objective-tooltip-2' => 'Moderadamente parcial',
	'articlefeedback-field-objective-tooltip-3' => 'Minimamente parcial',
	'articlefeedback-field-objective-tooltip-4' => 'Sem parcialidades óbvias',
	'articlefeedback-field-objective-tooltip-5' => 'completamente imparcial',
	'articlefeedback-field-wellwritten-label' => 'Bem escrito',
	'articlefeedback-field-wellwritten-tip' => 'Acha que esta página está bem organizada e bem escrita?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Imcompreensível',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Difícil de entender',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Clareza adequada',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Boa clareza',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Clareza excepcional',
	'articlefeedback-pitch-reject' => 'Talvez mais tarde',
	'articlefeedback-pitch-or' => 'ou',
	'articlefeedback-pitch-thanks' => 'Obrigado! As suas avaliações foram salvas.',
	'articlefeedback-pitch-join-message' => 'Você queria criar uma conta?',
	'articlefeedback-pitch-join-body' => 'Uma conta permite-lhe seguir as suas edições, participar nos debates e fazer parte da comunidade.',
	'articlefeedback-pitch-join-accept' => 'Criar conta',
	'articlefeedback-pitch-join-login' => 'Autenticação',
	'articlefeedback-pitch-edit-message' => 'Sabia que pode editar esta página?',
	'articlefeedback-pitch-edit-accept' => 'Editar esta página',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Os melhores e piores de hoje',
	'articleFeedback-table-caption-dailyhighs' => 'Artigos com as avaliações mais elevadas: $1',
	'articleFeedback-table-caption-dailylows' => 'Artigos com as avaliações mais baixas: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Os mais alterados da semana',
	'articleFeedback-table-caption-recentlows' => 'Os piores mais recentes',
	'articleFeedback-table-heading-page' => 'Página',
	'articleFeedback-table-heading-average' => 'Média',
	'articleFeedback-copy-above-highlow-tables' => 'Esta funcionalidade é experimental. Deixe os seus comentários na [$1 página de discussão], por favor.',
	'articlefeedback-dashboard-bottom' => "'''Nota''': Continuaremos a experimentar diferentes critérios de selecção de artigos para estes painéis. De momento, os painéis incluem os seguintes:
* Páginas com as avaliações mais altas e mais baixas: artigos que receberam pelo menos 10 avaliações nas últimas 24 horas. As médias são calculadas pela média de todas as avaliações recebidas nas últimas 24 horas.
* Os piores mais recentes: artigos com 70% ou mais de avaliações baixas (2 estrelas ou menos) em qualquer categoria nas últimas 24 horas. Só são incluídos os artigos que receberam pelo menos 10 avaliações nas últimas 24 horas.",
	'articlefeedback-disable-preference' => 'Não mostrar nas páginas o widget da avaliação de artigos',
	'articlefeedback-emailcapture-response-body' => 'Olá,

Obrigado por expressar interesse em ajudar a melhorar a {{SITENAME}}.

Confirme o seu endereço de e-mail, clicando o link abaixo, por favor:

$1

Você também pode visitar:

$2

E, então, introduzir o seguinte código de confirmação:

$3

Em breve você irá receber informações sobre como você poderá ajudar a melhorar a {{SITENAME}}.

Se você não iniciou este pedido, ignore esta mensagem e não voltará a ser contactado.

Cumprimentos,
A equipe da {{SITENAME}}',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 * @author Strainu
 */
$messages['ro'] = array(
	'articlefeedback' => 'Panou de control evaluare articol',
	'articlefeedback-desc' => 'Evaluare articol',
	'articlefeedback-error' => 'A apărut o eroare. Vă rugăm să reîncercați mai târziu.',
	'articlefeedback-form-switch-label' => 'Evaluează această pagină',
	'articlefeedback-form-panel-title' => 'Evaluare pagină',
	'articlefeedback-form-panel-explanation' => 'Ce este acesta?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Evaluare_articol',
	'articlefeedback-form-panel-clear' => 'Elimină această evaluare',
	'articlefeedback-form-panel-expertise' => 'Dețin cunoștințe solide despre acest subiect (opțional)',
	'articlefeedback-form-panel-expertise-studies' => 'Am o diplomă relevantă la nivel de colegiu/universitate',
	'articlefeedback-form-panel-expertise-profession' => 'Este parte din profesia mea',
	'articlefeedback-form-panel-expertise-hobby' => 'Este o pasiune personală puternică',
	'articlefeedback-form-panel-expertise-other' => 'Nivelul cunoștințelor mele nu se află în această listă',
	'articlefeedback-form-panel-helpimprove' => 'Aș dori să contribui la îmbunătățirea Wikipediei; trimite-mi un e-mail (opțional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Vă vom trimite un e-mail de confirmare. Nu vom face cunoscută adresa dumneavoastră de e-mail altor părți, conform $1.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'declarației de confidențialitate privind feedback-ul',
	'articlefeedback-form-panel-submit' => 'Trimite evaluările',
	'articlefeedback-form-panel-pending' => 'Evaluările dumneavoastră nu au fost încă trimise',
	'articlefeedback-form-panel-success' => 'Salvat cu succes',
	'articlefeedback-form-panel-expiry-title' => 'Evaluările dumneavoastră au expirat',
	'articlefeedback-form-panel-expiry-message' => 'Vă rugăm să reevaluați această pagină și să trimiteți noi clasificări.',
	'articlefeedback-report-switch-label' => 'Vezi evaluările paginii',
	'articlefeedback-report-panel-title' => 'Evaluări pagină',
	'articlefeedback-report-panel-description' => 'Media evaluărilor actuale.',
	'articlefeedback-report-empty' => 'Nu există evaluări',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|evaluare|$1 evaluări}}',
	'articlefeedback-field-trustworthy-label' => 'De încredere',
	'articlefeedback-field-trustworthy-tip' => 'Credeți că pagina de față conține suficiente referințe și că acestea provin din surse de încredere?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Îi lipsesc sursele respectabile',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Doar câteva surse respectabile',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Surse respectabile adecvate',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Surse respectabile bune',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Surse respectabile foarte bune',
	'articlefeedback-field-complete-label' => 'Completă',
	'articlefeedback-field-complete-tip' => 'Credeți că pagina de față acoperă subiectul într-o manieră satisfăcătoare?',
	'articlefeedback-field-complete-tooltip-1' => 'Îi lipsește mare parte din informație',
	'articlefeedback-field-complete-tooltip-2' => 'Conține câteva informații',
	'articlefeedback-field-complete-tooltip-3' => 'Conține informații esențiale, dar cu lipsuri',
	'articlefeedback-field-complete-tooltip-4' => 'Conține mare parte din informațiile esențiale',
	'articlefeedback-field-complete-tooltip-5' => 'Acoperă foarte bine subiectul',
	'articlefeedback-field-objective-label' => 'Obiectivă',
	'articlefeedback-field-objective-tip' => 'Credeți că pagina de față tratează echitabil toate perspectivele și opiniile cu privire la subiect?',
	'articlefeedback-field-objective-tooltip-1' => 'Puternic părtinitoare',
	'articlefeedback-field-objective-tooltip-2' => 'Destul de neutră',
	'articlefeedback-field-objective-tooltip-3' => 'Aproape neutră',
	'articlefeedback-field-objective-tooltip-4' => 'Fără părtinire evidentă',
	'articlefeedback-field-objective-tooltip-5' => 'Complet imparțială',
	'articlefeedback-field-wellwritten-label' => 'Bine scrisă',
	'articlefeedback-field-wellwritten-tip' => 'Credeți că pagina de față este bine organizată și bine redactată?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Neinteligibilă',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Dificil de înțeles',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Claritate adecvată',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Claritate bună',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Claritate excepțională',
	'articlefeedback-pitch-reject' => 'Poate mai târziu',
	'articlefeedback-pitch-or' => 'sau',
	'articlefeedback-pitch-thanks' => 'Vă mulțumim! Evaluările dumneavoastră au fost contorizate.',
	'articlefeedback-pitch-join-message' => 'Ați dori să vă creați un cont?',
	'articlefeedback-pitch-join-body' => 'Un cont de utilizator v-ar ajuta să țineți evidența contribuțiile dumneavoastră, să luați parte la discuții și să faceți parte din comunitate.',
	'articlefeedback-pitch-join-accept' => 'Creează un cont',
	'articlefeedback-pitch-join-login' => 'Autentificare',
	'articlefeedback-pitch-edit-message' => 'Știați că puteți modifica această pagină?',
	'articlefeedback-pitch-edit-accept' => 'Modifică această pagină',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Cele mai bune și cele mai slabe evaluări de astăzi',
	'articleFeedback-table-caption-dailyhighs' => 'Paginile cu cele mai bune evaluări: $1',
	'articleFeedback-table-caption-dailylows' => 'Paginile cu cele mai slabe evaluări: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Cea mai modificată din această săptămână',
	'articleFeedback-table-caption-recentlows' => 'Minime recente',
	'articleFeedback-table-heading-page' => 'Pagina',
	'articleFeedback-table-heading-average' => 'Medie',
	'articleFeedback-copy-above-highlow-tables' => 'Aceasta este o unealtă experimentală. Vă rugăm să ne oferiți reacții pe [$1 pagina de discuție].',
	'articlefeedback-dashboard-bottom' => "'''Notă''': Vom continua să experimentăm diferite moduri de reprezentare ale articolului în aceste tablouri de bord. În prezent conțin articolele următoare:
* Pagini cu cel mai mare și cel mai mic calificativ: articole care au fost evaluate de cel puțin 10 ori în ultimele 24 de ore. Mediile sunt calculate luând în considerare toate evaluările trimise în ultimele 24 de ore.
* Recent scăzute: articole care au primit cel puțin 70% calificative slabe (2 stele sau mai puțin) în orice categorie în ultimele 24 de ore. Numai articolele care au primit cel puțin 10 evaluări în ultimele 24 de ore sunt incluse.",
	'articlefeedback-disable-preference' => 'Nu afișa widgetul pentru evaluarea articolelor în cadrul paginilor',
	'articlefeedback-emailcapture-response-body' => 'Bună ziua!

Vă mulțumim pentru interesul arătat față de procesul de îmbunătățire al proiectului {{SITENAME}}.

Vă rugăm să vă confirmați adresa de e-mail accesând legătura de mai jos: 

$1

Ați putea vizita de asemenea și:

$2

Și să introduceți următorul cod de confirmare:

$3

Vă vom contacta curând în legătură cu modul în care vă puteți implica în procesul de îmbunătățire al proiectului {{SITENAME}}.

Dacă nu sunteți dumneavoastră persoana care a cerut aceste indicații, vă rugăm să ignorați acest e-mail; nu vă vom mai trimite alte mesaje.

Vă mulțumim și vă urăm toate cele bune,
Echipa proiectului {{SITENAME}}',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'articlefeedback' => "Cruscotte d'a valutazione de le vôsce",
	'articlefeedback-desc' => "Segnalazione sus 'a vôsce",
	'articlefeedback-error' => "'N'errore s'a verificate. Pe piacere pruève arrete.",
	'articlefeedback-form-switch-label' => 'Valute sta pàgene',
	'articlefeedback-form-panel-title' => 'Valute sta pàgene',
	'articlefeedback-form-panel-explanation' => 'Ce jè quiste?',
	'articlefeedback-form-panel-explanation-link' => "Project:FeedbackD'aVôsce",
	'articlefeedback-form-panel-clear' => 'Live stu pundegge',
	'articlefeedback-form-panel-expertise' => "Ije stoche forte forte sus a st'argumènde (opzionale)",
	'articlefeedback-form-panel-expertise-studies' => "Tènghe 'nu grade de scole/università 'mbortande",
	'articlefeedback-form-panel-expertise-profession' => "Jè parte d'a professiona meje",
	'articlefeedback-form-panel-expertise-hobby' => "Queste jè 'na passiona profonda meje",
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'email@esembie.org',
	'articlefeedback-form-panel-helpimprove-privacy' => "'mbormaziune sus a le regole p'a privacy",
	'articlefeedback-form-panel-submit' => 'Conferme le pundegge',
	'articlefeedback-form-panel-pending' => "'U vote tune non g'ha state confermate",
	'articlefeedback-form-panel-success' => 'Reggistrate cu successe',
	'articlefeedback-form-panel-expiry-title' => 'Le pundegge tune onne scadute',
	'articlefeedback-report-switch-label' => "Vide 'u pundegge d'a pàgene",
	'articlefeedback-report-panel-title' => "Pundegge d'a pàgene",
	'articlefeedback-report-panel-description' => 'Pundegge medie corrende.',
	'articlefeedback-report-empty' => 'Nisciune pundegge',
	'articlefeedback-report-ratings' => '$1 pundegge',
	'articlefeedback-field-trustworthy-label' => 'Avveramende affidabbele',
	'articlefeedback-field-trustworthy-tooltip-1' => "Assenze de sorgende cu 'na reputazione",
	'articlefeedback-field-trustworthy-tooltip-2' => "Sorgende cu 'na reputazione so picche",
	'articlefeedback-field-trustworthy-tooltip-3' => "Sorgende cu 'na reputazione sonde adeguate",
	'articlefeedback-field-trustworthy-tooltip-4' => "Bbuène sorgende cu 'na reputazione",
	'articlefeedback-field-trustworthy-tooltip-5' => "Sorgende cu 'na reputazione granne granne",
	'articlefeedback-field-complete-label' => 'Comblete',
	'articlefeedback-field-complete-tooltip-1' => "Mangante assaije 'mbormaziune",
	'articlefeedback-field-complete-tooltip-2' => "Tène quacche 'mbormazione",
	'articlefeedback-field-complete-tooltip-3' => "Tène 'mbormaziune chiave, ma cu le bochere",
	'articlefeedback-field-complete-tooltip-4' => "Tène assaije 'mbormaziune chiave",
	'articlefeedback-field-complete-tooltip-5' => 'Coperture combrensive',
	'articlefeedback-field-objective-label' => 'Obbiettive',
	'articlefeedback-field-objective-tooltip-1' => 'Assaije de parte',
	'articlefeedback-field-objective-tooltip-2' => 'Moderatamende de parte',
	'articlefeedback-field-objective-tooltip-3' => "'Nu picche de parte",
	'articlefeedback-field-objective-tooltip-4' => 'Quase quase obbiettive',
	'articlefeedback-field-objective-tooltip-5' => 'Combletamende obbiettive',
	'articlefeedback-field-wellwritten-label' => 'Scritte bbuène',
	'articlefeedback-field-wellwritten-tip' => 'Vuè ca sta pàgene jè organizzata bbuène e scritta bbone?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Incombrensibbele',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Difficele da capìe',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Chiarezze adeguate',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Chiarezza bbone',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Eccezzionalmende chiare',
	'articlefeedback-pitch-reject' => 'Forse cchiù tarde',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => "Grazie! 'U vote tune ha state reggistrate.",
	'articlefeedback-pitch-join-message' => "Vu è ccu ccreje 'nu cunde?",
	'articlefeedback-pitch-join-accept' => "Ccreje 'nu cunde utende",
	'articlefeedback-pitch-join-login' => 'Tràse',
	'articlefeedback-pitch-edit-accept' => 'Cange sta pàgene',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Le megghie e le pesce de osce',
	'articleFeedback-table-caption-dailyhighs' => "Pàggene cu 'u pundegge cchiù ierte: $1",
	'articleFeedback-table-caption-dailylows' => "Pàggene cu 'u pundegge cchiù vasce: $1",
	'articleFeedback-table-caption-weeklymostchanged' => 'Le cangiaminde maggiore de sta sumàne',
	'articleFeedback-table-caption-recentlows' => 'Urteme discese',
	'articleFeedback-table-heading-page' => 'Pàgene',
	'articleFeedback-table-heading-average' => 'Medie',
	'articlefeedback-table-noratings' => '-',
	'articleFeedback-copy-above-highlow-tables' => "Quiste jè 'na caratteristeche sperimendale. Pe piacere vide ce manne 'nu feedback sus a [$1 pàgene de le 'ngazzaminde].",
	'articlefeedback-emailcapture-response-body' => "Cià!

Grazie purcé è avute inderesse a dà 'na màne pe migliorà {{SITENAME}}.

Pe piacere pigghiate 'nu mumende pe confermà 'a mail toje cazzanne 'u collegamende aqquà sotte:

$1

Tu puè pure 'ndrucà:

$2

E sckaffe 'u seguende codece de conferme:

$3

Rumanime in condatte e te decime cumme ne puè dà 'na mane pe migliorà {{SITENAME}}.

Ce tu non g'è mannate sta richieste, pe piacere no sce penzanne a sta e-mail e nuje no te manname cchiù ninde.

Statte bbuène e grazie,
'A squadre de {{SITENAME}}",
);

/** Russian (русский)
 * @author AlexSm
 * @author Assele
 * @author Catrope
 * @author DCamer
 * @author Dim Grits
 * @author Kaganer
 * @author MaxSem
 * @author Ole Yves
 * @author Александр Сигачёв
 * @author Сrower
 */
$messages['ru'] = array(
	'articlefeedback' => 'Панель оценок статьи', # Fuzzy
	'articlefeedback-desc' => 'Оценка статьи',
	'articlefeedback-error' => 'Произошла ошибка. Пожалуйста, повторите попытку позже.',
	'articlefeedback-form-switch-label' => 'Оцените эту страницу',
	'articlefeedback-form-panel-title' => 'Оцените эту страницу',
	'articlefeedback-form-panel-explanation' => 'Что это?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Удалить эту оценку',
	'articlefeedback-form-panel-expertise' => 'Я хорошо знаком с этой темой (опционально)',
	'articlefeedback-form-panel-expertise-studies' => 'По данной теме я получил образование в колледже / университете',
	'articlefeedback-form-panel-expertise-profession' => 'Это часть моей профессии',
	'articlefeedback-form-panel-expertise-hobby' => 'Это моё большое личное увлечение',
	'articlefeedback-form-panel-expertise-other' => 'Источник моих знаний здесь не указан',
	'articlefeedback-form-panel-helpimprove' => 'Я хотел бы помочь улучшить Википедию, отправьте мне письмо (опционально)',
	'articlefeedback-form-panel-helpimprove-note' => 'Мы отправим вам письмо с подтверждением. Мы не передадим ваш адрес кому-либо ещё. $1',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'email@example.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Политика конфиденциальности',
	'articlefeedback-form-panel-submit' => 'Отправить оценку',
	'articlefeedback-form-panel-pending' => 'Ваши оценки ещё не были отправлены',
	'articlefeedback-form-panel-success' => 'Информация сохранена',
	'articlefeedback-form-panel-expiry-title' => 'Ваши оценки устарели',
	'articlefeedback-form-panel-expiry-message' => 'Пожалуйста, пересмотрите эту страницу и укажите новые оценки.',
	'articlefeedback-report-switch-label' => 'Показать оценки страницы',
	'articlefeedback-report-panel-title' => 'Оценки страницы',
	'articlefeedback-report-panel-description' => 'Текущие средние оценки.',
	'articlefeedback-report-empty' => 'Нет оценок',
	'articlefeedback-report-ratings' => 'оценок: $1',
	'articlefeedback-field-trustworthy-label' => 'Достоверность',
	'articlefeedback-field-trustworthy-tip' => 'Считаете ли вы, что на этой странице достаточно ссылок на источники, что источники являются достоверными?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Нет авторитетных источников',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Мало авторитетных источников',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Адекватные авторитетные источники',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Хорошие авторитетные источники',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Отличные авторитетные источники',
	'articlefeedback-field-complete-label' => 'Полнота',
	'articlefeedback-field-complete-tip' => 'Считаете ли вы, что эта страница в достаточной мере раскрывает основные вопросы темы?',
	'articlefeedback-field-complete-tooltip-1' => 'Отсутствует большая часть сведений',
	'articlefeedback-field-complete-tooltip-2' => 'Содержит некоторые сведения',
	'articlefeedback-field-complete-tooltip-3' => 'Содержит основные сведения, есть пропуски',
	'articlefeedback-field-complete-tooltip-4' => 'Содержит основные сведения',
	'articlefeedback-field-complete-tooltip-5' => 'Всеобъемлющий охват',
	'articlefeedback-field-objective-label' => 'Беспристрастность',
	'articlefeedback-field-objective-tip' => 'Считаете ли вы, что эта страница объективно отражает все точки зрения по данной теме?',
	'articlefeedback-field-objective-tooltip-1' => 'Сильно предвзятая',
	'articlefeedback-field-objective-tooltip-2' => 'Умеренно предвзятая',
	'articlefeedback-field-objective-tooltip-3' => 'Минимально предвзятая',
	'articlefeedback-field-objective-tooltip-4' => 'Нет очевидной предвзятости',
	'articlefeedback-field-objective-tooltip-5' => 'Полностью беспристрастная',
	'articlefeedback-field-wellwritten-label' => 'Стиль изложения',
	'articlefeedback-field-wellwritten-tip' => 'Считаете ли вы, что эта страница хорошо организована и хорошо написана?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Непонятная',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Сложная для понимания',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Нормальная ясность изложения',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Хорошая ясность изложения',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Исключительная ясность изложения',
	'articlefeedback-pitch-reject' => 'Может быть, позже',
	'articlefeedback-pitch-or' => 'или',
	'articlefeedback-pitch-thanks' => 'Спасибо! Ваши оценки сохранены.',
	'articlefeedback-pitch-join-message' => 'Вы хотели бы создать учётную запись?',
	'articlefeedback-pitch-join-body' => 'Учётная запись поможет вам отслеживать изменения, участвовать в обсуждениях, быть частью сообщества.',
	'articlefeedback-pitch-join-accept' => 'Создать учётную запись',
	'articlefeedback-pitch-join-login' => 'Представиться',
	'articlefeedback-pitch-edit-message' => 'Знаете ли вы, что эту страницу можно редактировать?',
	'articlefeedback-pitch-edit-accept' => 'Править эту страницу',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Сегодняшние взлёты и падения',
	'articleFeedback-table-caption-dailyhighs' => 'Статьи с наивысшими оценками: $1',
	'articleFeedback-table-caption-dailylows' => 'Статьи с самыми низкими оценками: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Наиболее изменившиеся на этой неделе',
	'articleFeedback-table-caption-recentlows' => 'Недавние падения',
	'articleFeedback-table-heading-page' => 'Страница',
	'articleFeedback-table-heading-average' => 'Среднее',
	'articlefeedback-table-noratings' => '-',
	'articleFeedback-copy-above-highlow-tables' => 'Это экспериментальная возможность. Пожалуйста, оставьте отзыв на [$1 странице обсуждения].',
	'articlefeedback-dashboard-bottom' => "'''Примечание'''. Мы будем продолжать экспериментировать с различными способами наполнения этой панели. Сейчас на неё попадают следующие статьи:
* Страницы с самым высокими/низкими оценками: статьи, получившие не менее 10 оценок за последние 24 часа. Средние значения рассчитываются после обработки всех оценок за последние 24 часа.
* Последние минимумы: статьи, получившие 70% и ниже (2 звезды и ниже) в любой из категорий за последние 24 часа. Учитываются только статьи, получившие не менее 10 оценок за последние 24 часа.",
	'articlefeedback-disable-preference' => 'Не показывать на страницах виджет обратной связи',
	'articlefeedback-emailcapture-response-body' => 'Здравствуйте!

Спасибо за интерес к улучшению проекта {{SITENAME}}.

Пожалуйста, потратьте несколько секунд, чтобы подтвердить адрес электронной почты, нажав на ссылку ниже:

$1

Вы можете также посетить:

$2

И ввести следующий код подтверждения:

$3

Вскоре мы сообщим вам, как можно помочь в улучшении проекта {{SITENAME}}.

Если вы не отправляли подобного запроса, пожалуйста, проигнорируйте это сообщение, и мы больше не будем вас тревожить.

С наилучшими пожеланиями и благодарностью
Команда проекта {{SITENAME}}',
);

/** Rusyn (русиньскый)
 * @author Dim Grits
 * @author Gazeb
 */
$messages['rue'] = array(
	'articlefeedback' => 'Панель оцінок статї', # Fuzzy
	'articlefeedback-desc' => 'Оцінка статї (експеріменталный варіант)', # Fuzzy
	'articlefeedback-error' => 'Дішло ку хыбі. Просиме, попробуйте пізнїше.',
	'articlefeedback-form-switch-label' => 'Оцїнити тоту сторінку',
	'articlefeedback-form-panel-title' => 'Оцїньте тоту сторінку',
	'articlefeedback-form-panel-explanation' => 'Што є тото?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Годночіня статей',
	'articlefeedback-form-panel-clear' => 'Одстранити годночіня',
	'articlefeedback-form-panel-expertise' => 'Мам россягле знаня о тій темі (волительне)',
	'articlefeedback-form-panel-expertise-studies' => 'Мам прислушный высокошкольскый тітул',
	'articlefeedback-form-panel-expertise-profession' => 'Іде о часть моёй професії',
	'articlefeedback-form-panel-expertise-hobby' => 'Є то моє велике гобі',
	'articlefeedback-form-panel-expertise-other' => 'Жрідло мого знаня гев не є зазначене',
	'articlefeedback-form-panel-helpimprove' => 'Хотїв бы єм помочі вылїпшыти Вікіпедію, пошлите мі імейл (волительне)',
	'articlefeedback-form-panel-helpimprove-note' => 'Пошлеме вам потверджовачій імейл. Вашу імейлову адресу никому не даме. $1', # Fuzzy
	'articlefeedback-form-panel-helpimprove-privacy' => 'Політіка охраны особных дат', # Fuzzy
	'articlefeedback-form-panel-submit' => 'Одослати оцїнку',
	'articlefeedback-form-panel-pending' => 'Ваша оцїнка іщі не была одослана',
	'articlefeedback-form-panel-success' => 'Успішно уложене',
	'articlefeedback-form-panel-expiry-title' => 'Вашы оцїнкы застарїли',
	'articlefeedback-form-panel-expiry-message' => 'Просиме оцїньте сторінку знова і зазначте новый рейтінґ.',
	'articlefeedback-report-switch-label' => 'Указати рейтінґ сторінкы',
	'articlefeedback-report-panel-title' => 'Рейтінґ сторінкы',
	'articlefeedback-report-panel-description' => 'Актуалны середнї рейтінґы.',
	'articlefeedback-report-empty' => 'Без оцїнкы',
	'articlefeedback-report-ratings' => '$1 оцїнок',
	'articlefeedback-field-trustworthy-label' => 'Достовірность',
	'articlefeedback-field-trustworthy-tip' => 'Маєте чутя, же тота сторінка достаточно одказує на жрідла і хоснованы жрідла суть способны довірованя?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Хыбують авторітны жрідла',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Недостаток достовірных жрідел',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Адекватны авторітны жрідла',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Дорбы авторітны жрідла',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Чудовы авторітны жрідла',
	'articlefeedback-field-complete-label' => 'Комплетность',
	'articlefeedback-field-complete-tip' => 'Маєте чутя, же тота сторінка покрывать вшыткы важны части темы?',
	'articlefeedback-field-complete-tooltip-1' => 'Хыбує велика часть інформацій',
	'articlefeedback-field-complete-tooltip-2' => 'Обсягує даяку інформацію',
	'articlefeedback-field-complete-tooltip-3' => 'Обсягує ключову інформацію, але з недостатками',
	'articlefeedback-field-complete-tooltip-4' => 'Обсягує найключовішу інформацію',
	'articlefeedback-field-complete-tooltip-5' => 'Комплексне покрытя темы',
	'articlefeedback-field-objective-label' => 'Обєктівіта',
	'articlefeedback-field-objective-tip' => 'Маєте чутя, же тота сторінка справедливо покрывать вшыткы погляды на даны темы?',
	'articlefeedback-field-objective-tooltip-1' => 'Силно фалошне',
	'articlefeedback-field-objective-tooltip-2' => 'Мірно фалошне',
	'articlefeedback-field-objective-tooltip-3' => 'Маленько фалошне',
	'articlefeedback-field-objective-tooltip-4' => 'Без ясных фалешных інформацій',
	'articlefeedback-field-objective-tooltip-5' => 'Абсолутно непредвзяте',
	'articlefeedback-field-wellwritten-label' => 'Написане добрым штілом',
	'articlefeedback-field-wellwritten-tip' => 'Маєте чутя, же тота сторінка є правилно орґанізована о добрї написана?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Незрозуміле',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Тяжко порозуміти',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Достаточно зрозуміле',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Добрї зрозуміле',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Вынятково легко ся чітать',
	'articlefeedback-pitch-reject' => 'Може пізнїше',
	'articlefeedback-pitch-or' => 'або',
	'articlefeedback-pitch-thanks' => 'Дякуєме! Вашы оцїнкы были уложены.',
	'articlefeedback-pitch-join-message' => 'Хотїли бы сьте створити конто хоснователя?',
	'articlefeedback-pitch-join-body' => 'Конто вам уможнить слїдовати вашы едітованя, брати участь на діскузіях і стати ся частёв комуніты.',
	'articlefeedback-pitch-join-accept' => 'Вытворити конто',
	'articlefeedback-pitch-join-login' => 'Приголосити ся',
	'articlefeedback-pitch-edit-message' => 'Ці вы знали, же можете управити тоту сторінку?',
	'articlefeedback-pitch-edit-accept' => 'Едітовату тоту сторінку',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Днешнї максіма і мініма',
	'articleFeedback-table-caption-dailyhighs' => 'Сторінкы з найвысшыма оцїнками: $1',
	'articleFeedback-table-caption-dailylows' => 'Сторінкы з найнизшыма оцїнками: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Найвекшы зміны того тыждня',
	'articleFeedback-table-caption-recentlows' => 'Недавны мініма',
	'articleFeedback-table-heading-page' => 'Сторінка',
	'articleFeedback-table-heading-average' => 'Середнє',
	'articleFeedback-copy-above-highlow-tables' => 'Тото є експеріментална функція. Дайте знати ваш назор на [$1 діскузній сторінцї].',
	'articlefeedback-dashboard-bottom' => "'''Позначка''': Будеме продовжовати експеріментованя з різныма способами наповнїня статей на тім панелї. Теперь панел обсягує наступны статї:
* Статї з найвысшым/найнизшым рейтінґом: Статї, котры обтримали холем 10 рейтінґів почас остатнїх 24 годин. Середня годнота є рахована по спрацованю вшыткых рейтінґів за остатнїх 24 годин.
* Чінны оутсайдеры: Статї, котры обтримали ниже 70% і ниже (2 звіздочкы і ниже) оцїнкы в будь-якій катеґорії за остатнї 24 годины. Рахують ся лем статї, котры обтримали холем 10 оцїнок за остатнїх 24 годин.",
	'articlefeedback-disable-preference' => 'Не указовати на статях компоненту про оцїнку сторінок',
	'articlefeedback-emailcapture-response-body' => 'Добрый день!

Дякуєме за выядрїня інтересу помочі вылїпшыти {{grammar:4sg|{{SITENAME}}}}.

Просиме, найдьте собі минутку на потверджіня вашой імейловой адресы кликнутём на наступный одказ:

$1

Можете тыж навщівити:

$2

І задати наступный код потверджіня:

$3

Дораз ся вам озвеме з інформаціями, як можете помочі {{grammar:4sg|{{SITENAME}}}} вылїпшыти.

Кідь тота жадость не походить од вас, іґноруйте тот імейл, ніч веце вам засылати не будеме.

Дякуєме і поздравуєме
тім {{grammar:2sg|{{SITENAME}}}}',
);

/** Sanskrit (संस्कृतम्)
 * @author Ansumang
 * @author Shubha
 */
$messages['sa'] = array(
	'articlefeedback-desc' => 'लेख-प्रतिस्पन्दः',
	'articlefeedback-error' => 'कश्चन दोषः जातः । पुनः प्रयतताम् ।',
	'articlefeedback-pitch-or' => 'अथवापि',
	'articlefeedback-pitch-join-message' => 'लेखायाः निर्माणम् ऐच्छत् किम् ?',
	'articlefeedback-pitch-join-accept' => 'सदस्यता प्राप्यताम्',
	'articlefeedback-pitch-join-login' => 'प्रविश्यताम्',
	'articlefeedback-pitch-edit-message' => 'किं भवान् जानाति यत् इदं पृष्ठं सम्पादयितुं शक्यम् ?',
	'articlefeedback-pitch-edit-accept' => 'इदं पृष्ठं सम्पाद्यताम्',
	'articleFeedback-table-heading-page' => 'पृष्ठम्',
);

/** Sakha (саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'articlefeedback' => 'Ыстатыйаны сыаналааһын хаптаһына', # Fuzzy
	'articlefeedback-desc' => 'Ыстатыйаны сыаналааһын (тургутуллар барыла)', # Fuzzy
	'articlefeedback-error' => 'Туох эрэ алҕас таҕыста. Хойутуу боруобалаар.',
	'articlefeedback-form-switch-label' => 'Бу сирэйи сыаналаа',
	'articlefeedback-form-panel-title' => 'Бу сирэйи сыаналаа',
	'articlefeedback-form-panel-explanation' => 'Бу тугуй?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Бу сыананы сот',
	'articlefeedback-form-panel-expertise' => 'Бу тиэмэни бэркэ билэбин (толоруу булгуччута суох)',
	'articlefeedback-form-panel-expertise-studies' => 'Бу тиэмэни колледжка/университекка үөрэппитим',
	'articlefeedback-form-panel-expertise-profession' => 'Идэм сорҕото',
	'articlefeedback-form-panel-expertise-hobby' => 'Мин дьарыктанар үлүһүйүүм, сүрүн дьулҕаным',
	'articlefeedback-form-panel-expertise-other' => 'Туох сыһыаннааҕым туһунан манна ыйыллыбатах',
	'articlefeedback-form-panel-helpimprove' => 'Бикипиэдьийэни тупсарарга көмө буолуом этэ, сурукта ыытыҥ (толорор булгуччута суох)',
	'articlefeedback-form-panel-helpimprove-note' => 'Бигэргэтэр сурук ыытыахпыт. Аадырыскын кимиэхэ да биэриэхпит суоҕа. $1', # Fuzzy
	'articlefeedback-form-panel-helpimprove-privacy' => 'Кистээһин сиэрэ', # Fuzzy
	'articlefeedback-form-panel-submit' => 'Сыанабылы ыытыы',
	'articlefeedback-form-panel-pending' => 'Эн сыанабылыҥ өссө да ыытылла илик',
	'articlefeedback-form-panel-success' => 'Бигэргэтилиннэ',
	'articlefeedback-form-panel-expiry-title' => 'Сыанабылыҥ эргэрбит',
	'articlefeedback-form-panel-expiry-message' => 'Бука диэн бу сирэйи хат көр уонна саҥа сыаната быс.',
	'articlefeedback-report-switch-label' => 'Сирэй сыанабылларын көрдөр',
	'articlefeedback-report-panel-title' => 'Сирэйи сыаналааһын',
	'articlefeedback-report-panel-description' => 'Билиҥҥи орто сыанабыллар.',
	'articlefeedback-report-empty' => 'Сыанабыл суох',
	'articlefeedback-report-ratings' => '$1 сыанабыл',
	'articlefeedback-field-trustworthy-label' => 'Итэҕэтиилээҕэ',
	'articlefeedback-field-complete-label' => 'Толорута',
	'articlefeedback-field-complete-tip' => 'Бу сирэй тиэмэ сүрүн ис хоһоонун арыйар дуо?',
	'articlefeedback-field-objective-label' => 'Тутулуга суоҕа',
	'articlefeedback-field-objective-tip' => 'Бу сирэй араас көрүүлэри тэҥҥэ, тугу да күөмчүлээбэккэ көрдөрөр дии саныыгын дуо?',
	'articlefeedback-field-wellwritten-label' => 'Суруйуу истиилэ',
	'articlefeedback-field-wellwritten-tip' => 'Бу сирэй бэркэ сааһыланан суруллубут дии саныыгын дуо?',
	'articlefeedback-pitch-reject' => 'Баҕар кэлин',
	'articlefeedback-pitch-or' => 'эбэтэр',
	'articlefeedback-pitch-thanks' => 'Махтал! Эн сыанабылыҥ бигэргэтилиннэ.',
	'articlefeedback-pitch-join-message' => 'Манна бэлиэтэниэххин баҕараҕын дуо?',
	'articlefeedback-pitch-join-body' => 'Ааккын бэлиэтээтэххинэ уларытыылары кэтээн көрөр, ырытыыларга кыттар уонна маннааҕы дьон сорҕото буолар кыахтаныаҥ.',
	'articlefeedback-pitch-join-accept' => 'Саҥа ааты бэлиэтииргэ',
	'articlefeedback-pitch-join-login' => 'Ааккын эт',
	'articlefeedback-pitch-edit-message' => 'Бу сирэйи уларытар кыахтааххын ээ.',
	'articlefeedback-pitch-edit-accept' => 'Бу сирэйи уларыт',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Бүгүү тахсыылар уонна түһүүлэр',
	'articleFeedback-table-caption-dailyhighs' => 'Уһулуччу сыанабылы ылбыт ыстатыйалар: $1',
	'articleFeedback-table-caption-dailylows' => 'Саамай намыһах сыанабылы ылбыт ыстатыйалар: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Бу нэдиэлэҕэ саамай элбэхтэ уларыйбыттар',
	'articleFeedback-table-caption-recentlows' => 'Соторутааҥы түһүүлэр',
	'articleFeedback-table-heading-page' => 'Сирэй',
	'articleFeedback-table-heading-average' => 'Орто',
	'articleFeedback-copy-above-highlow-tables' => 'Бу кыах тургутулла турар. Бука диэн, санааҕын [$1 сирэйгэ] суруй.',
);

/** Sicilian (sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'articlefeedback-field-wellwritten-label' => 'Scrittu bonu',
	'articlefeedback-pitch-join-login' => 'Trasi',
	'articleFeedback-table-heading-page' => 'Pàggina',
);

/** Serbo-Croatian (srpskohrvatski / српскохрватски)
 * @author OC Ripper
 */
$messages['sh'] = array(
	'articleFeedback-copy-above-highlow-tables' => 'Ovo je probna mogućnost. Molimo vas da pošaljete povratnu informaciju na [$1 stranicu za razgovor].',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'articlefeedback' => 'ලිපි ප්‍රතිචාර උපකරණ පුවරුව', # Fuzzy
	'articlefeedback-desc' => 'ලිපි ප්‍රතිචාරය',
	'articlefeedback-error' => 'දෝෂයක් හට ගැනුණි. කරුණාකර නැවත උත්සහ කරන්න.',
	'articlefeedback-form-switch-label' => 'මෙම පිටුවේ තරාතිරම සකසන්න',
	'articlefeedback-form-panel-title' => 'මෙම පිටුවේ තරාතිරම සකසන්න',
	'articlefeedback-form-panel-explanation' => 'මේක මොකක්ද?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ලිපිප්‍රතිචාරය',
	'articlefeedback-form-panel-clear' => 'මෙම තරාතිරම ඉවත් කරන්න',
	'articlefeedback-form-panel-expertise' => 'මම මෙම විෂය පිලිබඳ හොඳ දැනුම් තේරුම් ඇති කෙනෙක් (අමතර)',
	'articlefeedback-form-panel-expertise-studies' => 'මා සතුව උචිත විද්‍යාල/විශ්ව විද්‍යාල පදවියක් තිබෙනවා',
	'articlefeedback-form-panel-expertise-profession' => 'එය මගේ වෘත්තියේ කොටසක්',
	'articlefeedback-form-panel-expertise-hobby' => 'එය ගැඹුරු පුද්ගලික ළැදිකමක්',
	'articlefeedback-form-panel-expertise-other' => 'මගේ දැනුමෙහි මූලාශ්‍ර මෙහි ලයිස්තුගත කොට නොමැත',
	'articlefeedback-form-panel-helpimprove' => 'විකිපිඩියාව වැඩි දියුණු කිරීමට මම කැමතියි, මට විද්‍යුත් තැපැලක් එවන්න (අමතර)',
	'articlefeedback-form-panel-helpimprove-note' => 'අපි ඔබට තහවුරුකිරීමේ ඊ-තැපෑලක් එවන්නෙමු. අපගේ $1 අනුව අපි ඔබගේ ඊ-තැපැල් ලිපිනය වෙනත් පාර්ශවයන් සමඟ හුවමාරු කරන්නේ නැහැ.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'ප්‍රතිචාර පෞද්ගලිකත්ව ප්‍රකාශය',
	'articlefeedback-form-panel-submit' => 'තරාතිරම් යොමන්න',
	'articlefeedback-form-panel-pending' => 'ඔබේ තරාතිරම් තවමත් යොමු කර නොමැත',
	'articlefeedback-form-panel-success' => 'සාර්ථකව සුරකින ලදී',
	'articlefeedback-form-panel-expiry-title' => 'ඔබේ තරාතිරම් කල් ඉකුත් වී ඇත',
	'articlefeedback-form-panel-expiry-message' => 'කරුණාකර මෙම පිටුව යලිඅගයාත්මක කරමින් නව තරාතිරම් යොමන්න.',
	'articlefeedback-report-switch-label' => 'පිටු තරාතිරම් නරඹන්න',
	'articlefeedback-report-panel-title' => 'පිටු තරාතිරම',
	'articlefeedback-report-panel-description' => 'වත්මන් සාමාන්‍ය තරාතිරම්.',
	'articlefeedback-report-empty' => 'තරාතිරම් නොමැත',
	'articlefeedback-report-ratings' => 'තරාතිරම් $1',
	'articlefeedback-field-trustworthy-label' => 'විශ්වසනීය',
	'articlefeedback-field-trustworthy-tip' => 'ඔබට හැඟෙනවාද මෙම පිටුව සතුව ප්‍රමාණවත් උපුටා දැක්වීම හා ඒවා විශ්වාශනිය මූලාශ්‍ර වලින් පැමිණි එවයි කියා?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'අඩුපාඩු සහිත සම්භාවනීය මූලාශ්‍ර ඇත',
	'articlefeedback-field-trustworthy-tooltip-2' => 'සම්භාවනීය මූලාශ්‍ර ස්වල්පයක් ඇත',
	'articlefeedback-field-trustworthy-tooltip-3' => 'ප්‍රමාණවත් සම්භාවනීය මූලාශ්‍ර ඇත',
	'articlefeedback-field-trustworthy-tooltip-4' => 'හොඳ සම්භාවනීය මූලාශ්‍ර ඇත',
	'articlefeedback-field-trustworthy-tooltip-5' => 'හොඳ සම්භාවනීය මූලාශ්‍ර ඇත',
	'articlefeedback-field-complete-label' => 'සම්පූර්ණයි',
	'articlefeedback-field-complete-tip' => 'ඔබට හැඟෙනවාද මෙම පිටුව උපරිම අයුරින් අත්‍යවශ්‍ය විෂය ප්‍රමාණයක් ආවරණය කර ඇති කියා?',
	'articlefeedback-field-complete-tooltip-1' => 'ගොඩක් තොරතුරු මග හැරී ඇත',
	'articlefeedback-field-complete-tooltip-2' => 'සමහර තොරතුරු අඩංගු වේ',
	'articlefeedback-field-complete-tooltip-3' => 'ප්‍රධාන තොරතුරු අඩංගුයි, නමුත් පරතර සමඟ',
	'articlefeedback-field-complete-tooltip-4' => 'ගොඩක් ප්‍රධාන තොරතුරු අඩංගු වේ',
	'articlefeedback-field-complete-tooltip-5' => 'පුළුල් ආවරණයක් සහිතයි',
	'articlefeedback-field-objective-label' => 'විෂය මූලික',
	'articlefeedback-field-objective-tip' => 'ඔබට හැඟෙනවාද මෙම පිටුව විසින් වාදපදයෙහි සියලුම දෘෂ්ටිකෝණ සතුටුදායක අයුරින් නිරුපණය කර ඇති කියා?',
	'articlefeedback-field-objective-tooltip-1' => 'බෙභෙවින් අගතියමය',
	'articlefeedback-field-objective-tooltip-2' => 'මධ්‍යස්ත අගතිය',
	'articlefeedback-field-objective-tooltip-3' => 'අවම අගතිය',
	'articlefeedback-field-objective-tooltip-4' => 'පැහැදිලි ලෙස පෙනෙන අගති නැත',
	'articlefeedback-field-objective-tooltip-5' => 'සම්පූර්ණයෙන් අපක්ෂපාතී',
	'articlefeedback-field-wellwritten-label' => 'හොදින් ලියා ඇත',
	'articlefeedback-field-wellwritten-tip' => 'ඔබට හිතෙනවද මෙම පිටුව හොඳින් සංවිධානය කර හොඳින් ලියා ඇතැයි කියා?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'තේරුම්ගත නොහැකි',
	'articlefeedback-field-wellwritten-tooltip-2' => 'තේරුම් ගැනීමට අපහසු',
	'articlefeedback-field-wellwritten-tooltip-3' => 'ප්‍රමාණවත් විෂදත්වය',
	'articlefeedback-field-wellwritten-tooltip-4' => 'හොඳ විෂදත්වය',
	'articlefeedback-field-wellwritten-tooltip-5' => 'විශේෂිත විෂදත්වය',
	'articlefeedback-pitch-reject' => 'සමහරවිට පසුව',
	'articlefeedback-pitch-or' => 'හෝ',
	'articlefeedback-pitch-thanks' => 'ස්තුතියි! ඔබේ තරාතිරම් සුරකින ලදී.',
	'articlefeedback-pitch-join-message' => 'ඔබට ගිණුමක් තැනීමට අවශ්‍යද?',
	'articlefeedback-pitch-join-accept' => 'ගිණුමක් තනන්න',
	'articlefeedback-pitch-join-login' => 'පිවිසෙන්න',
	'articlefeedback-pitch-edit-message' => 'ඔබට මෙම පිටුව සංස්කරණය කල හැකි බව ඔබ දන්නවද?',
	'articlefeedback-pitch-edit-accept' => 'මෙම පිටුව සංස්කරණය කරන්න',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'අද උසස්ම සහ අවමයන්',
	'articleFeedback-table-caption-dailyhighs' => 'උසස්ම තරාතිරම් සහිත පිටු: $1',
	'articleFeedback-table-caption-dailylows' => 'අඩුම තරාතිරම් සහිත පිටු: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'මෙම සතියේ ගොඩක්ම වෙනස් වූ',
	'articleFeedback-table-caption-recentlows' => 'මෑත අවමයන්',
	'articleFeedback-table-heading-page' => 'පිටුව',
	'articleFeedback-table-heading-average' => 'සාමාන්‍යය',
	'articleFeedback-copy-above-highlow-tables' => 'මෙය පරීක්ෂාත්මක මූණුවරකි.  කරුණාකර [$1 සාකච්ඡා පිටුවෙහි] ප්‍රතිචාරය ලබා දෙන්න.',
	'articlefeedback-disable-preference' => 'ලිපි ප්‍රතිචාර ගැජටය පිටුවල පෙනවන්න එපා',
	'articlefeedback-emailcapture-response-body' => 'කොහොමද!

{{SITENAME}} වැඩිදියුණු කිරීම සඳහා උපකාර කිරීමට කැමැත්ත ප්‍රකාශ කළාට ස්තුතියි.

කරුණාකර පහත දැක්වෙන සබැඳිය මත ක්ලික් කිරීම මඟින් ඔබේ විද්‍යුත් තැපැල් ලිපිනය තහවුරු කිරීම සඳහා මොහොතක් ගත කරන්න: 

$1

ඔබට මෙයටද යා හැක:

$2

ඉන්පසු පහත දැක්වෙන තහවුරු කිරීමේ කේතය යොදන්න:

$3

ඔබට {{SITENAME}} වැඩිදියුණු කල හැක්කේ කෙසේදැයි දන්වමින් අපි ඔබව විගසින් දැනුවත් කරන්නෙමු.

ඔබ විසින් මෙම අයැදුම ඇතුළත් කලේ නැතිනම්, කරුණාකර මෙම පණිවුඩය නොසලකන්න ඉන්පසු අපි ඔබට වෙන මොනවත් එවන්නේ නැහැ.

සුභපැතුම්, සහ ස්තුතියි,
{{SITENAME}} හී කණ්ඩායම',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'articlefeedback' => 'Hodnotenie článku', # Fuzzy
	'articlefeedback-desc' => 'Hodnotenie článku (pilotná verzia)', # Fuzzy
	'articlefeedback-error' => 'Vyskytla sa chyba. Prosím, skúste to neskôr.',
	'articlefeedback-form-switch-label' => 'Ohodnotiť túto stránku',
	'articlefeedback-form-panel-title' => 'Ohodnotiť túto stránku',
	'articlefeedback-form-panel-explanation' => 'Čo je toto?',
	'articlefeedback-form-panel-clear' => 'Odstrániť toto hodnotenie',
	'articlefeedback-form-panel-expertise' => 'Mám veľké vedomosti o tejto téme (nepovinné)',
	'articlefeedback-form-panel-expertise-studies' => 'Mám v tejto oblasti univerzitný titul',
	'articlefeedback-form-panel-expertise-profession' => 'Je to súčasť mojej profesie',
	'articlefeedback-form-panel-expertise-hobby' => 'Je to moja hlboká osobná vášeň',
	'articlefeedback-form-panel-expertise-other' => 'Zdroj mojich vedomostí tu nie je uvedený',
	'articlefeedback-form-panel-helpimprove' => 'Chcel by som pomôcť zlepšeniu Wikipédie, pošlite mi e-mail (nepovinné)',
	'articlefeedback-form-panel-helpimprove-note' => 'Pošleme vám potvrdzovací email. Vašu adresu neposkytneme nikomu inému. $1', # Fuzzy
	'articlefeedback-form-panel-helpimprove-privacy' => 'Ochrana súkromia', # Fuzzy
	'articlefeedback-form-panel-submit' => 'Odoslať hodnotenie',
	'articlefeedback-form-panel-success' => 'Úspešne uložené',
	'articlefeedback-form-panel-expiry-title' => 'Platnosť vášho hodnotenia vypršala',
	'articlefeedback-form-panel-expiry-message' => 'Prosím, znova vyhodnoťte túto stránku a odošlite nové hodnotenie.',
	'articlefeedback-report-switch-label' => 'Zobraziť hodnotenia stránky',
	'articlefeedback-report-panel-title' => 'Hodnotenia stránky',
	'articlefeedback-report-panel-description' => 'Súčasné priemerné hodnotenie.',
	'articlefeedback-report-empty' => 'Bez hodnotenia',
	'articlefeedback-report-ratings' => '$1 {{PLURAL:$1|hodnotenie|hodnotenia|hodnotení}}',
	'articlefeedback-field-trustworthy-label' => 'Dôveryhodná',
	'articlefeedback-field-trustworthy-tip' => 'Máte pocit, že táto stránka má dostatočné citácie a že tieto citácie pochádzajú z dôveryhodných zdrojov?',
	'articlefeedback-field-complete-label' => 'Úplná',
	'articlefeedback-field-complete-tip' => 'Máte pocit, že táto stránka pokrýva základné tematické oblasti, ktoré by mala?',
	'articlefeedback-field-objective-label' => 'Objektívna',
	'articlefeedback-field-objective-tip' => 'Máte pocit, že táto stránka zobrazuje spravodlivé zastúpenie všetkých pohľadov na problematiku?',
	'articlefeedback-field-wellwritten-label' => 'Dobre napísaná',
	'articlefeedback-field-wellwritten-tip' => 'Máte pocit, že táto stránka je dobre organizovaná a dobre napísaná?',
	'articlefeedback-pitch-reject' => 'Možno neskôr',
	'articlefeedback-pitch-or' => 'alebo',
	'articlefeedback-pitch-thanks' => 'Vďaka! Vaše hodnotenie bolo uložené.',
	'articlefeedback-pitch-join-message' => 'Chceli ste si vytvoriť účet?',
	'articlefeedback-pitch-join-body' => 'Účtu vám pomôže sledovať vaše úpravy, zapojiť sa do diskusií a stať sa súčasťou komunity.',
	'articlefeedback-pitch-join-accept' => 'Vytvoriť účet',
	'articlefeedback-pitch-join-login' => 'Prihlásiť sa',
	'articlefeedback-pitch-edit-message' => 'Vedeli ste, že môžete túto stránku upravovať?',
	'articlefeedback-pitch-edit-accept' => 'Upraviť túto stránku',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dnešné maximá a minimá',
	'articleFeedback-table-caption-weeklymostchanged' => 'Tento týždeň sa najviac menil',
	'articleFeedback-table-caption-recentlows' => 'Nedávne minimá',
	'articleFeedback-table-heading-page' => 'Stránka',
	'articleFeedback-table-heading-average' => 'Priemer',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'articlefeedback' => 'Pregledna plošča povratnih informacij člankov',
	'articlefeedback-desc' => 'Povratna informacija članka',
	'articlefeedback-error' => 'Prišlo je do napake. Prosimo, poskusite znova pozneje.',
	'articlefeedback-form-switch-label' => 'Ocenite to stran',
	'articlefeedback-form-panel-title' => 'Ocenite to stran',
	'articlefeedback-form-panel-explanation' => 'Kaj je to?',
	'articlefeedback-form-panel-explanation-link' => 'Project:PovratnaInformacijaOČlankih',
	'articlefeedback-form-panel-clear' => 'Odstrani oceno',
	'articlefeedback-form-panel-expertise' => 'S to temo sem zelo dobro seznanjen (neobvezno)',
	'articlefeedback-form-panel-expertise-studies' => 'Imam ustrezno fakultetno/univerzitetno diplomo',
	'articlefeedback-form-panel-expertise-profession' => 'Je del mojega poklica',
	'articlefeedback-form-panel-expertise-hobby' => 'To je globoka osebna strast',
	'articlefeedback-form-panel-expertise-other' => 'Vir mojega znanja tukaj ni naveden',
	'articlefeedback-form-panel-helpimprove' => 'Rad bi pomagal izboljšati Wikipedijo, zato mi pošljite e-pošto (neobvezno)',
	'articlefeedback-form-panel-helpimprove-note' => 'Poslali vam bomo potrditveno e-pošto. Vašega naslova v skladu z našo $1 ne bomo delili z zunanjimi strankami.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'izjavo o zasebnosti povratnih informacij',
	'articlefeedback-form-panel-submit' => 'Pošlji ocene',
	'articlefeedback-form-panel-pending' => 'Vaše ocene niso bile poslane',
	'articlefeedback-form-panel-success' => 'Uspešno shranjeno',
	'articlefeedback-form-panel-expiry-title' => 'Vaše ocene so potekle',
	'articlefeedback-form-panel-expiry-message' => 'Prosimo, ponovno ocenite to stran in pošljite nove ocene.',
	'articlefeedback-report-switch-label' => 'Prikaži ocene strani',
	'articlefeedback-report-panel-title' => 'Ocene strani',
	'articlefeedback-report-panel-description' => 'Trenutne povprečne ocene.',
	'articlefeedback-report-empty' => 'Brez ocen',
	'articlefeedback-report-ratings' => '$1 ocen',
	'articlefeedback-field-trustworthy-label' => 'Zanesljivo',
	'articlefeedback-field-trustworthy-tip' => 'Menite, da ima ta stran dovolj navedkov in da ta navajanja prihajajo iz zanesljivih virov?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Manjkajo ugledni viri',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Nekaj uglednih virov',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Ustrezno število uglednih virov',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Dobri ugledni viri',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Odlični ugledni viri',
	'articlefeedback-field-complete-label' => 'Celovito',
	'articlefeedback-field-complete-tip' => 'Menite, da ta stran zajema temeljna tematska področja, ki bi jih naj?',
	'articlefeedback-field-complete-tooltip-1' => 'Manjka večina informacij',
	'articlefeedback-field-complete-tooltip-2' => 'Vsebuje nekatere informacije',
	'articlefeedback-field-complete-tooltip-3' => 'Vsebuje ključne informacije, vendar z vrzelmi',
	'articlefeedback-field-complete-tooltip-4' => 'Vsebuje večino ključnih informacij',
	'articlefeedback-field-complete-tooltip-5' => 'Celovita pokritost',
	'articlefeedback-field-objective-label' => 'Nepristransko',
	'articlefeedback-field-objective-tip' => 'Menite, da ta stran prikazuje pravično zastopanost vseh pogledov na obravnavano temo?',
	'articlefeedback-field-objective-tooltip-1' => 'Močno pristransko',
	'articlefeedback-field-objective-tooltip-2' => 'Zmerno pristransko',
	'articlefeedback-field-objective-tooltip-3' => 'Minimalno pristransko',
	'articlefeedback-field-objective-tooltip-4' => 'Brez očitne pristranskosti',
	'articlefeedback-field-objective-tooltip-5' => 'Popolnoma nepristransko',
	'articlefeedback-field-wellwritten-label' => 'Dobro napisano',
	'articlefeedback-field-wellwritten-tip' => 'Menite, da je ta stran dobro organizirana in dobro napisana?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Nerazumljivo',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Težko razumljivo',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Zadostno jasno',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Dobro jasno',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Izjemno jasno',
	'articlefeedback-pitch-reject' => 'Morda kasneje',
	'articlefeedback-pitch-or' => 'ali',
	'articlefeedback-pitch-thanks' => 'Hvala! Vaše ocene so zabeležene.',
	'articlefeedback-pitch-join-message' => 'Ste želeli ustvariti račun?',
	'articlefeedback-pitch-join-body' => 'Račun vam bo pomagal slediti vašim urejanjem, se vključiti v razpravo in biti del skupnosti.',
	'articlefeedback-pitch-join-accept' => 'Ustvari račun',
	'articlefeedback-pitch-join-login' => 'Prijavite se',
	'articlefeedback-pitch-edit-message' => 'Ali ste vedeli, da lahko uredite ta članek?',
	'articlefeedback-pitch-edit-accept' => 'Uredi stran',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Današnji vzponi in padci',
	'articleFeedback-table-caption-dailyhighs' => 'Članki z najvišjimi ocenami: $1',
	'articleFeedback-table-caption-dailylows' => 'Članki z najnižjimi ocenami: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Ta teden najbolj spremenjeno',
	'articleFeedback-table-caption-recentlows' => 'Nedavni padci',
	'articleFeedback-table-heading-page' => 'Stran',
	'articleFeedback-table-heading-average' => 'Povprečje',
	'articleFeedback-copy-above-highlow-tables' => 'To je preizkusna funkcija. Prosimo, podajte povratno informacijo na [$1 pogovorni strani].',
	'articlefeedback-dashboard-bottom' => "'''Opomba''': Nadaljevali bomo z raziskovanjem različnih načinov prikazovanja člankov na teh preglednih ploščah. Pregledna plošča trenutno vključuje naslednje članke:
* Strani z najvišjimi/najnižjimi ocenami: članki, ki so v zadnjih 24 urah prejeli vsaj 10 ocen. Povprečja predstavljajo sredino vseh ocen, podanih v zadnjih 24 urah.
* Nedavni padci: članki, ki so v zadnjih 24 urah prejeli 70&nbsp;% ali več nizkih (dve zvezdici ali manj) ocen v kateri koli kategoriji. Vključeni so samo članki, ki so v zadnjih 24 urah prejeli vsaj 10 ocen.",
	'articlefeedback-disable-preference' => 'Na strani ne pokaži gradnika Povratna informacija članka',
	'articlefeedback-emailcapture-response-body' => 'Pozdravljeni!

Zahvaljujemo se vam za izkazano zanimanje za pomoč pri izboljševanju {{GRAMMAR:rodilnik|{{SITENAME}}}}.

Prosimo, vzemite si trenutek in potrdite vaš e-poštni naslov s klikom na spodnjo povezavo:

$1

Obiščete lahko tudi:

$2

in vnesete spodnjo potrditveno kodo:

$3

Kmalu vam bomo sporočili, kako lahko pomagate izboljšati {{GRAMMAR:tožilnik|{{SITENAME}}}}.

Če tega niste zahtevali, prosimo, prezrite to e-pošto in ničesar več vam ne bomo poslali.

Hvala in najlepše želje,
ekipa {{GRAMMAR:rodilnik|{{SITENAME}}}}',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'articlefeedback' => 'Табла за оцењивање чланака',
	'articlefeedback-desc' => 'Оцењивање чланака',
	'articlefeedback-error' => 'Дошло је до грешке. Покушајте поново.',
	'articlefeedback-form-switch-label' => 'Оцени ову страницу',
	'articlefeedback-form-panel-title' => 'Оцењивање странице',
	'articlefeedback-form-panel-explanation' => 'Шта је ово?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Оцењивање чланака',
	'articlefeedback-form-panel-clear' => 'Уклони оцену',
	'articlefeedback-form-panel-expertise' => 'Имам велико познавање ове теме (необавезно)',
	'articlefeedback-form-panel-expertise-studies' => 'Имам релевантно више/факултетско образовање',
	'articlefeedback-form-panel-expertise-profession' => 'Ово је поље моје струке',
	'articlefeedback-form-panel-expertise-hobby' => 'Ово је моја дубока лична страст',
	'articlefeedback-form-panel-expertise-other' => 'Извор мог знања није наведен овде',
	'articlefeedback-form-panel-helpimprove' => 'Желим да помогнем у побољшавању Википедије — пошаљи ми е-поруку (необавезно)',
	'articlefeedback-form-panel-helpimprove-note' => 'Послаћемо вам поруку за потврду. Вашу адресу не дајемо никоме, сагласно с одредбама наше $1.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'eposta@primer.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'заштите личних података при слању повратних информација',
	'articlefeedback-form-panel-submit' => 'Пошаљи оцене',
	'articlefeedback-form-panel-pending' => 'Ваше оцене још нису послате',
	'articlefeedback-form-panel-success' => 'Успешно сачувано',
	'articlefeedback-form-panel-expiry-title' => 'Ваше оцене су истекле',
	'articlefeedback-form-panel-expiry-message' => 'Прегледајте страницу поново и пошаљите нове оцене.',
	'articlefeedback-report-switch-label' => 'Оцене странице',
	'articlefeedback-report-panel-title' => 'Оцене странице',
	'articlefeedback-report-panel-description' => 'Тренутне просечне оцене.',
	'articlefeedback-report-empty' => 'Нема оцена.',
	'articlefeedback-report-ratings' => '$1 оцена',
	'articlefeedback-field-trustworthy-label' => 'Веродостојност',
	'articlefeedback-field-trustworthy-tip' => 'Сматрате ли да ова страница има довољно навода и да су извори веродостојни?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Нема меродавних извора',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Мало меродавних извора',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Довољни меродавни извори',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Солидни меродавни извори',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Одлични меродавни извори',
	'articlefeedback-field-complete-label' => 'Исцрпност',
	'articlefeedback-field-complete-tip' => 'Сматрате ли да ова страница покрива најважније основне теме које треба да обрађује?',
	'articlefeedback-field-complete-tooltip-1' => 'Недостаје највише података',
	'articlefeedback-field-complete-tooltip-2' => 'Садржи извесне податке',
	'articlefeedback-field-complete-tooltip-3' => 'Садржи кључне податке, али с празнинама или пропустима',
	'articlefeedback-field-complete-tooltip-4' => 'Садржи већину кључних података',
	'articlefeedback-field-complete-tooltip-5' => 'Свеобухватна покривеност',
	'articlefeedback-field-objective-label' => 'Непристраност',
	'articlefeedback-field-objective-tip' => 'Сматрате ли да су на овој страници све тачке гледишта равноправно приказане?',
	'articlefeedback-field-objective-tooltip-1' => 'Веома пристрасна',
	'articlefeedback-field-objective-tooltip-2' => 'Умерено пристрасна',
	'articlefeedback-field-objective-tooltip-3' => 'Минимално пристрасна',
	'articlefeedback-field-objective-tooltip-4' => 'Нема приметне пристрасности',
	'articlefeedback-field-objective-tooltip-5' => 'Сасвим непристрасна',
	'articlefeedback-field-wellwritten-label' => 'Добро написано',
	'articlefeedback-field-wellwritten-tip' => 'Сматрате ли да је ова страница добро организована и лепо написана?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Неразумљиво',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Тешко за разумевање',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Довољно јасно',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Веома јасно',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Крајње јасно',
	'articlefeedback-pitch-reject' => 'Можда касније',
	'articlefeedback-pitch-or' => 'или',
	'articlefeedback-pitch-thanks' => 'Хвала! Ваше оцене су сачуване.',
	'articlefeedback-pitch-join-message' => 'Желите ли да отворите налог?',
	'articlefeedback-pitch-join-body' => 'Ако имате налог, моћи ћете да пратите своје измене, да се укључите у разговоре и да будете део заједнице.',
	'articlefeedback-pitch-join-accept' => 'Отворите налог',
	'articlefeedback-pitch-join-login' => 'Пријави ме',
	'articlefeedback-pitch-edit-message' => 'Јесте ли знали да можете да уређујете страницу?',
	'articlefeedback-pitch-edit-accept' => 'Уреди ову страницу',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement?uselang=sr-ec',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Издизања и падови за данас',
	'articleFeedback-table-caption-dailyhighs' => 'Странице с највишим оценама: $1',
	'articleFeedback-table-caption-dailylows' => 'Странице с најнижим оценама: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Највише мењани ове недеље',
	'articleFeedback-table-caption-recentlows' => 'Скорашњи падови',
	'articleFeedback-table-heading-page' => 'Страница',
	'articleFeedback-table-heading-average' => 'Просек',
	'articlefeedback-table-noratings' => '-',
	'articleFeedback-copy-above-highlow-tables' => 'Ово је пробна могућност. Молимо вас да пошаљете повратну информацију на [$1 страницу за разговор].',
	'articlefeedback-dashboard-bottom' => "'''Напомена''': Ми ћемо да испробавамо с различитим начинима приказивања чланака у овим управљачким таблама. Тренутно, табле укључују следеће чланке:
* Странице с највишим и најнижим оценама: чланци који имају најмање 10 оцена у последња 24 часа. Просек се рачуна тако што се израчунају просеци свих послатих оцена у последња 24 часа.
* Недавни падови: чланци који су добили 70% или мање (2 звезде или ниже) оцене у било којој категорији у последња 24 часа. Овде су укључени само чланци који су добили најмање 10 оцена у последња 24 часа.",
	'articlefeedback-disable-preference' => 'Не приказуј елемент „Оцењивање чланака“ на страницама',
	'articlefeedback-emailcapture-response-body' => 'Здраво!

Хвала вам што сте показали жељу да помогнете у унапређењу пројекта {{SITENAME}}.

Одвојите тренутак да потврдите вашу е-адресу кликом на везу испод:

$1

Можете посетити и:

$2

Након тога, унесите следећи потврдни код:

$3

Ускоро ћемо вас обавестити о томе како нам можете помоћи.

Ако сте добили ову поруку грешком, само је занемарите.

Све најлепше,
{{SITENAME}}',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'articlefeedback' => 'Tabla za ocenjivanje članaka',
	'articlefeedback-desc' => 'Ocenjivanje članaka',
	'articlefeedback-error' => 'Došlo je do greške. Pokušajte ponovo.',
	'articlefeedback-form-switch-label' => 'Oceni ovu stranicu',
	'articlefeedback-form-panel-title' => 'Ocenjivanje stranice',
	'articlefeedback-form-panel-explanation' => 'Šta je ovo?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Ocenjivanje_članaka',
	'articlefeedback-form-panel-clear' => 'Ukloni ovu ocenu',
	'articlefeedback-form-panel-expertise' => 'Imam veliko poznavanje ove teme (neobavezno)',
	'articlefeedback-form-panel-expertise-studies' => 'Imam relevantno više/fakultetsko obrazovanje',
	'articlefeedback-form-panel-expertise-profession' => 'Ovo je polje moje struke',
	'articlefeedback-form-panel-expertise-hobby' => 'Ovo je moja duboka lična strast',
	'articlefeedback-form-panel-expertise-other' => 'Izvor mog znanja nije naveden ovde',
	'articlefeedback-form-panel-helpimprove' => 'Želim da pomognem u poboljšavanju Vikipedije — pošalji mi e-poruku (neobavezno)',
	'articlefeedback-form-panel-helpimprove-note' => 'Poslaćemo vam poruku za potvrdu. Vašu adresu ne dajemo nikome, saglasno s odredbama naše $1.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'eposta@primer.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'zaštite ličnih podataka pri slanju povratnih informacija',
	'articlefeedback-form-panel-submit' => 'Pošalji ocene',
	'articlefeedback-form-panel-pending' => 'Vaše ocene još nisu poslate',
	'articlefeedback-form-panel-success' => 'Uspešno sačuvano',
	'articlefeedback-form-panel-expiry-title' => 'Vaše ocene su istekle',
	'articlefeedback-form-panel-expiry-message' => 'Pregledajte stranicu ponovo i pošaljite nove ocene.',
	'articlefeedback-report-switch-label' => 'Ocene stranice',
	'articlefeedback-report-panel-title' => 'Ocene stranice',
	'articlefeedback-report-panel-description' => 'Trenutne prosečne ocene.',
	'articlefeedback-report-empty' => 'Nema ocena.',
	'articlefeedback-report-ratings' => '$1 ocena',
	'articlefeedback-field-trustworthy-label' => 'Verodostojnost',
	'articlefeedback-field-trustworthy-tip' => 'Smatrate li da ova stranica ima dovoljno navoda i da su izvori verodostojni?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Nema merodavnih izvora',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Malo merodavnih izvora',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Dovoljni merodavni izvori',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Solidni merodavni izvori',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Odlični merodavni izvori',
	'articlefeedback-field-complete-label' => 'Iscrpnost',
	'articlefeedback-field-complete-tip' => 'Smatrate li da ova stranica pokriva najvažnije osnovne teme koje treba da obrađuje?',
	'articlefeedback-field-complete-tooltip-1' => 'Nedostaje najviše podataka',
	'articlefeedback-field-complete-tooltip-2' => 'Sadrži izvesne podatke',
	'articlefeedback-field-complete-tooltip-3' => 'Sadrži ključne podatke, ali s prazninama ili propustima',
	'articlefeedback-field-complete-tooltip-4' => 'Sadrži većinu ključnih podataka',
	'articlefeedback-field-complete-tooltip-5' => 'Sveobuhvatna pokrivenost',
	'articlefeedback-field-objective-label' => 'Nepristranost',
	'articlefeedback-field-objective-tip' => 'Smatrate li da su na ovoj stranici sve tačke gledišta ravnopravno prikazane?',
	'articlefeedback-field-objective-tooltip-1' => 'Veoma pristrasna',
	'articlefeedback-field-objective-tooltip-2' => 'Umereno pristrasna',
	'articlefeedback-field-objective-tooltip-3' => 'Minimalno pristrasna',
	'articlefeedback-field-objective-tooltip-4' => 'Nema primetne pristrasnosti',
	'articlefeedback-field-objective-tooltip-5' => 'Sasvim nepristrasna',
	'articlefeedback-field-wellwritten-label' => 'Dobro napisano',
	'articlefeedback-field-wellwritten-tip' => 'Smatrate li da je ova stranica dobro organizovana i lepo napisana?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Nerazumljivo',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Teško se razume',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Dovoljno jasno',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Veoma jasno',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Ekstremno jasno',
	'articlefeedback-pitch-reject' => 'Možda kasnije',
	'articlefeedback-pitch-or' => 'ili',
	'articlefeedback-pitch-thanks' => 'Hvala! Vaše ocene su sačuvane.',
	'articlefeedback-pitch-join-message' => 'Želite li da otvorite nalog?',
	'articlefeedback-pitch-join-body' => 'Ako imate nalog, moći ćete da pratite svoje izmene, da se uključite u razgovore i da budete deo zajednice.',
	'articlefeedback-pitch-join-accept' => 'Otvori nalog',
	'articlefeedback-pitch-join-login' => 'Prijavi me',
	'articlefeedback-pitch-edit-message' => 'Jeste li znali da možete da uređujete ovu stranicu?',
	'articlefeedback-pitch-edit-accept' => 'Uredi ovu stranicu',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement?uselang=sr-ec',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Izdizanja i padovi za danas',
	'articleFeedback-table-caption-dailyhighs' => 'Stranice s najvišim ocenama: $1',
	'articleFeedback-table-caption-dailylows' => 'Stranice s najnižim ocenama: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Najviše menjani ove nedelje',
	'articleFeedback-table-caption-recentlows' => 'Skorašnji padovi',
	'articleFeedback-table-heading-page' => 'Stranica',
	'articleFeedback-table-heading-average' => 'Prosek',
	'articlefeedback-table-noratings' => '-',
	'articleFeedback-copy-above-highlow-tables' => 'Ovo je probna mogućnost. Molimo vas da pošaljete povratnu informaciju na [$1 stranicu za razgovor].',
	'articlefeedback-dashboard-bottom' => "'''Napomena''': Mi ćemo da isprobavamo s različitim načinima prikazivanja članaka u ovim upravljačkim tablama. Trenutno, table uključuju sledeće članke:
* Stranice s najvišim i najnižim ocenama: članci koji imaju najmanje 10 ocena u poslednja 24 časa. Prosek se računa tako što se izračunaju proseci svih poslatih ocena u poslednja 24 časa.
* Nedavni padovi: članci koji su dobili 70% ili manje (2 zvezde ili niže) ocene u bilo kojoj kategoriji u poslednja 24 časa. Ovde su uključeni samo članci koji su dobili najmanje 10 ocena u poslednja 24 časa.",
	'articlefeedback-disable-preference' => 'Ne prikazuj spravicu „Ocenjivanje članaka“ na stranicama',
	'articlefeedback-emailcapture-response-body' => 'Zdravo!

Hvala vam što ste pokazali želju da pomognete u unapređenju projekta {{SITENAME}}.

Odvojite trenutak da potvrdite vašu e-adresu klikom na vezu ispod:

$1

Možete posetiti i:

$2

Nakon toga, unesite sledeći potvrdni kod:

$3

Uskoro ćemo vas obavestiti o tome kako nam možete pomoći.

Ako ste dobili ovu poruku greškom, samo je zanemarite.

Sve najlepše,
{{SITENAME}}',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Boivie
 * @author Fluff
 * @author Lokal Profil
 * @author Tobulos1
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'articlefeedback' => 'Instrumentpanel för artikelbedömning',
	'articlefeedback-desc' => 'Artikelbedömning',
	'articlefeedback-error' => 'Ett fel har uppstått. Försök igen senare.',
	'articlefeedback-form-switch-label' => 'Betygsätt denna sida',
	'articlefeedback-form-panel-title' => 'Betygsätt denna sida',
	'articlefeedback-form-panel-explanation' => 'Vad är detta?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Artikelbedömning',
	'articlefeedback-form-panel-clear' => 'Ta bort detta betyg',
	'articlefeedback-form-panel-expertise' => 'Jag är mycket kunnig i detta ämne (valfritt)',
	'articlefeedback-form-panel-expertise-studies' => 'Jag har en relevant högskole-/universitetsexamen',
	'articlefeedback-form-panel-expertise-profession' => 'Det är en del av mitt yrke',
	'articlefeedback-form-panel-expertise-hobby' => 'Det är en djupt personlig passion',
	'articlefeedback-form-panel-expertise-other' => 'Källan till min kunskap inte är listad här',
	'articlefeedback-form-panel-helpimprove' => 'Jag skulle vilja bidra till att förbättra Wikipedia, skicka mig ett e-post (valfritt)',
	'articlefeedback-form-panel-helpimprove-note' => 'Vi kommer att skicka en bekräftelse via e-post. Vi delar inte ut din e-postadress till några utomstående parter enligt vår $1.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'epost@exempel.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'sekretesspolicy för feedback',
	'articlefeedback-form-panel-submit' => 'Skicka betyg',
	'articlefeedback-form-panel-pending' => 'Ditt betyg har inte skickats in ännu',
	'articlefeedback-form-panel-success' => 'Sparat',
	'articlefeedback-form-panel-expiry-title' => 'Dina betyg har gått ut',
	'articlefeedback-form-panel-expiry-message' => 'Vänligen omvärdera denna sida och skicka nya omdömen.',
	'articlefeedback-report-switch-label' => 'Visa sidbetyg',
	'articlefeedback-report-panel-title' => 'Sidbetyg',
	'articlefeedback-report-panel-description' => 'Nuvarande genomsnittliga betyg.',
	'articlefeedback-report-empty' => 'Inga betyg',
	'articlefeedback-report-ratings' => '$1 betyg',
	'articlefeedback-field-trustworthy-label' => 'Trovärdig',
	'articlefeedback-field-trustworthy-tip' => 'Känner du att denna sida har tillräckliga citat och att dessa citat kommer från pålitliga källor?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Saknar ansedda källor',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Få ansedda källor',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Tillräckligt ansedda källor',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Bra ansedda källor',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Fantastiskt ansedda källor',
	'articlefeedback-field-complete-label' => 'Heltäckande',
	'articlefeedback-field-complete-tip' => 'Känner du att den här sidan täcker de väsentliga ämnesområden som det ska?',
	'articlefeedback-field-complete-tooltip-1' => 'Saknar mest information',
	'articlefeedback-field-complete-tooltip-2' => 'Innehåller en del information',
	'articlefeedback-field-complete-tooltip-3' => 'Innehåller nyckelinformation, men har luckor',
	'articlefeedback-field-complete-tooltip-4' => 'Innehåller mest nyckelinformation',
	'articlefeedback-field-complete-tooltip-5' => 'Heltäckande innehåll',
	'articlefeedback-field-objective-label' => 'Objektiv',
	'articlefeedback-field-objective-tip' => 'Känner du att den här sidan visar en rättvis representation av alla perspektiv på frågan?',
	'articlefeedback-field-objective-tooltip-1' => 'Starkt partisk',
	'articlefeedback-field-objective-tooltip-2' => 'Måttligt partisk',
	'articlefeedback-field-objective-tooltip-3' => 'Minimalt partisk',
	'articlefeedback-field-objective-tooltip-4' => 'Ingen uppenbar partiskhet',
	'articlefeedback-field-objective-tooltip-5' => 'Helt opartisk',
	'articlefeedback-field-wellwritten-label' => 'Välskriven',
	'articlefeedback-field-wellwritten-tip' => 'Tycker du att den här sidan är väl organiserad och välskriven?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Obegriplig',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Svårt att förstå',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Tillräcklig klarhet',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Bra klarhet',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Exceptionell klarhet',
	'articlefeedback-pitch-reject' => 'Kanske senare',
	'articlefeedback-pitch-or' => 'eller',
	'articlefeedback-pitch-thanks' => 'Tack! Ditt betyg har sparats.',
	'articlefeedback-pitch-join-message' => 'Ville du skapa ett konto?',
	'articlefeedback-pitch-join-body' => 'Ett konto kommer att hjälpa dig att spåra ändringar, engagera dig i diskussioner, och vara en del av samhället.',
	'articlefeedback-pitch-join-accept' => 'Skapa ett konto',
	'articlefeedback-pitch-join-login' => 'Logga in',
	'articlefeedback-pitch-edit-message' => 'Visste du att du kan redigera denna sida?',
	'articlefeedback-pitch-edit-accept' => 'Redigera denna sida',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dagens toppar och dalar',
	'articleFeedback-table-caption-dailyhighs' => 'Sidor med högst betyg: $1',
	'articleFeedback-table-caption-dailylows' => 'Sidor med lägst betyg: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Veckans mest ändrade',
	'articleFeedback-table-caption-recentlows' => 'Senaste dalar',
	'articleFeedback-table-heading-page' => 'Sida',
	'articleFeedback-table-heading-average' => 'Genomsnittlig',
	'articleFeedback-copy-above-highlow-tables' => 'Detta är en experimentell funktion. Lämna feedback på [$1 diskussionssidan].',
	'articlefeedback-dashboard-bottom' => "'''OBS''': Vi kommer att fortsätta experimentera med olika sätt att belysa artiklar i dessa instrumentpaneler. För närvarande inkluderar instrumentpanelen följande artiklar:
* Sidor med den högst/lägst betyg: Artiklar som har fått minst tio betygsättningar inom de senaste 24 timmarna. Medelvärden räknas ut genom att ta genomsnittet av alla betygssättningar som har skickats in inom de senaste 24 timmarna.
* Nyliga bottenrekord: Artiklar som fått 70 % eller fler låga (två stjärnor eller lägre) betygssättningar i någon kategori under de senaste 24 timmarna. Endast artiklar som fått minst tio betygssättningar inom de senaste 24 timmarna inkluderas.",
	'articlefeedback-disable-preference' => 'Visa inte artikelbedömnings-widget på sidor',
	'articlefeedback-emailcapture-response-body' => 'Hej!

Tack för att ha uttryckt intresse av att hjälpa till att förbättra {{SITENAME}}.

Var god ta en stund att bekräfta din e-post genom att klicka på länken nedan:

$1

Du kan också besöka:

$2

Och ange följande bekräftelsekod:

$3

Vi kommer att kontakta dig inom kort med hur du kan förbättra {{SITENAME}}.

Om du inte påbörjade denna begäran, ignorera detta e-postmeddelande och vi kommer inte skicka någonting annat.

Tack och lycka till!
{{SITENAME}}-teamet',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Lloffiwr
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'articlefeedback-desc' => 'Maoni ya nakala',
	'articlefeedback-error' => 'Hitilafu imetokea. Tafadhali jaribu tena baadaye.',
	'articlefeedback-form-switch-label' => 'Pima ukurasa huu',
	'articlefeedback-form-panel-title' => 'Pima ukurasa huu',
	'articlefeedback-form-panel-explanation' => 'Kitu gani hiki?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Ondoa daraja hili',
	'articlefeedback-form-panel-expertise' => 'I am highly knowledgeable about this topic (ya hiari)', # Fuzzy
	'articlefeedback-form-panel-expertise-studies' => 'Nina shahada husika ya chuo/chuo kikuu',
	'articlefeedback-form-panel-expertise-profession' => 'Ni sehemu ya taaluma yangu',
	'articlefeedback-form-panel-expertise-hobby' => 'Ni shauku kina binafsi',
	'articlefeedback-form-panel-expertise-other' => 'Chanzo cha maarifa yangu hakijaorodheshwa hapa',
	'articlefeedback-form-panel-helpimprove' => 'Ningependa kusaidia kuboresha Wikipedia, nitumie barua pepe (kwa hiari)',
	'articlefeedback-form-panel-helpimprove-note' => 'Sisi tutakutumia uthibitisho wa barua pepe. Sisi hatutagawa barua pepe na vyama vya nje kulingana na $1 yetu.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'taarifa ya maoni ya faragha',
	'articlefeedback-form-panel-submit' => 'Wasilisha vipimo',
	'articlefeedback-form-panel-pending' => 'Vipimo vyako havijawasilishwa bado',
	'articlefeedback-form-panel-success' => 'Imefanikiwa kuhifadhiwa',
	'articlefeedback-form-panel-expiry-title' => 'Muda wa vipimo vyako umekwisha',
	'articlefeedback-field-objective-label' => 'Lengo',
	'articlefeedback-pitch-reject' => 'Labda baadaye',
	'articlefeedback-pitch-or' => 'au',
	'articlefeedback-pitch-join-accept' => 'Sajili akaunti',
	'articlefeedback-pitch-join-login' => 'Ingia',
	'articlefeedback-pitch-edit-message' => 'Je, ulijua kwamba unaweza kuhariri ukurasa huu?',
	'articlefeedback-pitch-edit-accept' => 'Hariri ukurasa huu',
	'articleFeedback-table-heading-page' => 'Ukurasa',
	'articleFeedback-table-heading-average' => 'Wastani',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 * @author TRYPPN
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'articlefeedback-desc' => 'கட்டுரை கருத்து',
	'articlefeedback-error' => 'ஒரு பிழை ஏற்பட்டுள்ளது. தயவுகூர்ந்து பிறகு மீண்டும் முயற்சிக்கவும்.',
	'articlefeedback-form-switch-label' => 'இப்பக்கத்தை மதிப்பிடு',
	'articlefeedback-form-panel-title' => 'இப்பக்கத்தை மதிப்பிடு',
	'articlefeedback-form-panel-explanation' => 'இது என்ன?',
	'articlefeedback-form-panel-explanation-link' => 'Project: ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'இந்த மதிப்பீட்டை நீக்கு',
	'articlefeedback-form-panel-expertise' => 'நான் இந்த தலைப்பு (விருப்பதேர்வு) பற்றி அதிக அறிவுடையவன்.',
	'articlefeedback-form-panel-expertise-studies' => 'நான் பொருத்தமான கல்லூரி/பல்கலைக்கழக பட்டம் பெற்றிருக்கிறேன்.',
	'articlefeedback-form-panel-expertise-profession' => 'இது என் தொழிலின் ஒரு பகுதி',
	'articlefeedback-form-panel-expertise-hobby' => 'இது ஓர் ஆழமான தனிப்பட்ட விருப்பமாகும்',
	'articlefeedback-form-panel-expertise-other' => 'என் அறிவின் மூலம் இங்கே பட்டியலிடப்படவில்லை',
	'articlefeedback-form-panel-helpimprove' => 'நான் விக்கிபீடியா மேம்பட உதவி செய்ய விரும்புகிறேன்,எனக்கு ஒரு மின்னஞ்சல் அனுப்பவும்(விருப்பத்தேர்வு)',
	'articlefeedback-form-panel-helpimprove-note' => 'நாங்கள் உங்களுக்கு ஒரு உறுதிப்படுத்தல் மின்னஞ்சல் அனுப்புவோம்.நாங்கள் உங்களுடைய மின்னஞ்சல் முகவரியை எங்களுடைய $1 ன் படி வேறு எந்த வெளி நபருடனும் பகிர்ந்து கொள்ள மாட்டோம்.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'கருத்து தனியுரிமை அறிக்கை',
	'articlefeedback-form-panel-submit' => 'மதிப்பீடுகளை சமர்ப்பிக்கவும்',
	'articlefeedback-form-panel-pending' => 'உங்கள் மதிப்பீடுகள் இதுவரை சமர்ப்பிக்கப்படவில்லை.',
	'articlefeedback-form-panel-success' => 'வெற்றிகரமாக சேமிக்கப்பட்டது',
	'articlefeedback-form-panel-expiry-title' => 'உங்கள் மதிப்பீடு காலாவதியாகிவிட்டது.',
	'articlefeedback-form-panel-expiry-message' => 'தயவுசெய்து மறுபடியும் இந்த பக்கத்தை ஆய்வு செய்து புதிய மதிப்பீட்டைச் சமர்ப்பிக்கவும்.',
	'articlefeedback-report-switch-label' => 'பக்க மதிப்பீடுகளை காண்',
	'articlefeedback-report-panel-title' => 'பக்க மதிப்பீடுகள்',
	'articlefeedback-report-panel-description' => 'நடப்பு சராசரி மதிப்பீடுகள்.',
	'articlefeedback-report-empty' => 'மதிப்பீடுகள் இல்லை',
	'articlefeedback-report-ratings' => '$1 மதிப்பீடுகள்',
	'articlefeedback-field-trustworthy-label' => 'நம்பகத்தன்மை',
	'articlefeedback-field-trustworthy-tip' => 'நீங்கள் இந்த பக்கம் போதுமான மேற்கோள்களை கொண்டுள்ளதாக உணர்கிறீர்களா மேலும் அந்த மேற்கோள்கள் நம்பகத்தன்மையுள்ள ஆதாரங்கள் மூலம் பெறப்பட்டவையா ?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'மதிப்புவாய்ந்த மூலங்கள் பின்தங்கியுள்ளது',
	'articlefeedback-field-trustworthy-tooltip-2' => 'சில மதிப்புவாய்ந்த மூலங்கள்',
	'articlefeedback-field-trustworthy-tooltip-3' => 'போதுமான நம்பக்கூடிய  தகவல்கள்',
	'articlefeedback-field-trustworthy-tooltip-4' => 'நல்ல நம்பக்கூடிய  தகவல்கள்',
	'articlefeedback-field-trustworthy-tooltip-5' => 'சிறந்த நம்பக்கூடிய மூலங்களிருந்து தகவல்கள்',
	'articlefeedback-field-complete-label' => 'நிறைவு',
	'articlefeedback-field-complete-tip' => 'தேவையான அத்தியாவசிய தலைப்பு பகுதிகளை இப்பக்கம் உள்ளடக்கியுள்ளது என நீங்கள் உணர்கிறீர்களா?',
	'articlefeedback-field-complete-tooltip-1' => 'காணாத பெரும்பாலான தகவல்',
	'articlefeedback-field-complete-tooltip-2' => 'சில தகவலை கொண்டுள்ளது',
	'articlefeedback-field-complete-tooltip-3' => 'முக்கிய தகவல் உள்ளது ஆனால் இடைவெளிகளை கொண்டு',
	'articlefeedback-field-complete-tooltip-4' => 'பெரும்பாலான முக்கிய தகவல்களை கொண்டுள்ளது',
	'articlefeedback-field-complete-tooltip-5' => 'விரிவான காப்பு(coverage)',
	'articlefeedback-field-objective-label' => 'நோக்கம்',
	'articlefeedback-field-objective-tooltip-1' => 'மிக அதிகளவாக சார்புடைய',
	'articlefeedback-field-objective-tooltip-2' => 'மிதமான விகிதாச்சாரமுடைய',
	'articlefeedback-field-objective-tooltip-3' => 'மிகச்சிறு விகிதாச்சாரம்',
	'articlefeedback-field-objective-tooltip-4' => 'வெளிப்படையாக விகிதாச்சாரம்(bias) இல்லை',
	'articlefeedback-field-objective-tooltip-5' => 'முற்றிலும் நடுநிலையானது',
	'articlefeedback-field-wellwritten-label' => 'நன்றாக எழுதப்பட்டது.',
	'articlefeedback-field-wellwritten-tip' => 'இந்த பக்கம் நன்றாக ஒழுங்கமைக்கப்பட்ட மற்றும் நன்றாக எழுதப்பட்ட பக்கம் என நீங்கள் உணர்கிறீர்களா?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'அறியக்கூடாதது',
	'articlefeedback-field-wellwritten-tooltip-2' => 'புரிந்துகொள்ள கடினமானது',
	'articlefeedback-field-wellwritten-tooltip-3' => 'போதுமான தெளிவு',
	'articlefeedback-field-wellwritten-tooltip-4' => 'நல்ல தெளிவு',
	'articlefeedback-field-wellwritten-tooltip-5' => 'விதிவிலக்கான தெளிவு',
	'articlefeedback-pitch-reject' => 'ஒருவேளை பின்னர்',
	'articlefeedback-pitch-or' => 'அல்லது',
	'articlefeedback-pitch-thanks' => 'நன்றி! உங்கள் மதிப்பீடு சேமிக்கப்பட்டுள்ளது.',
	'articlefeedback-pitch-join-message' => 'நீங்கள் ஒரு கணக்கை உருவாக்க விரும்புகிறீர்களா?',
	'articlefeedback-pitch-join-body' => 'ஒரு கணக்கு உங்கள் திருத்தங்களை தொடர உதவும்,மேலும் விவாதங்களில் கலந்து கொள்ள இயலும், மற்றும் இந்த சமுதாயத்தின் ஒரு பகுதியாக இருக்கும்.',
	'articlefeedback-pitch-join-accept' => 'ஒரு கணக்கை உருவாக்கு',
	'articlefeedback-pitch-join-login' => 'புகுபதிகை',
	'articlefeedback-pitch-edit-message' => 'இந்த பக்கத்தை நீங்கள் திருத்த இயலும் என்பது உங்களுக்கு தெரியுமா?',
	'articlefeedback-pitch-edit-accept' => 'இந்த பக்கத்தை திருத்து',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'இன்றைய ஏற்ற மற்றும் இறக்கங்கள்',
	'articleFeedback-table-caption-dailyhighs' => 'மிக உயர்ந்த மதிப்பீடு உள்ள  பக்கங்கள்:$1',
	'articleFeedback-table-caption-dailylows' => 'மிக குறைந்த மதிப்பீடு உள்ள  பக்கங்கள்:$1',
	'articleFeedback-table-caption-weeklymostchanged' => 'இந்த வாரம் மிகவும் மாறியுள்ளவை',
	'articleFeedback-table-caption-recentlows' => 'சமீபத்திய இறக்கங்கள்',
	'articleFeedback-table-heading-page' => 'பக்கம்',
	'articleFeedback-table-heading-average' => 'சராசரி',
	'articleFeedback-copy-above-highlow-tables' => 'இது ஒரு பரிசோதனை அம்சம்.  தயவுகூர்ந்து  [ $1  விவாத பக்கத்தில்]கருத்துகளை அளிக்கவும்.',
	'articlefeedback-disable-preference' => 'கட்டுரைப் பின்னூட்டக் கருவியைப் பக்கங்களில் காட்ட வேண்டாம்',
	'articlefeedback-emailcapture-response-body' => 'வணக்கம்!

{{SITENAME}}வை மேம்படுத்த உதவுவதில் உங்கள் ஆர்வத்தை வெளிப்படுத்தியமைக்கு நன்றி.

தயவுசெய்து கீழே உள்ள இணைப்பை சொடுக்குவதன் மூலம் உங்கள் மின்னஞ்சலை உறுதிப்படுத்த ஒரு நிமிடம் எடுத்துக்கொள்ளுங்கள்:

$1

நீங்கள் இங்கு சென்று:

$2

கீழ்க்காணும் உறுதிப்படுத்தல் குறியீட்டை உள்ளிடவும்:

$3

{{SITENAME}} தளத்தை மேம்படுத்தலில் நீங்கள் எவ்வாறு உதவலாம் என்பதை நாங்கள் விரைவில் உங்களுக்கு தெரிவிக்கிறோம்.

நீங்கள் இந்தக் கோரிக்கையை ஆரம்பிக்கவில்லையெனில், தயவுசெய்து இந்த மின்னஞ்சலை புறக்கணித்துவிடவும் மேலும் வேறு எதுவும் நாங்கள் அனுப்ப மாட்டோம்.

வாழ்த்துக்கள், மற்றும் நன்றிகளுடன்,
{{SITENAME}} குழு',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'articlefeedback' => 'వ్యాసపు ప్రతిస్పందన కేంద్రం',
	'articlefeedback-form-panel-explanation' => 'ఇది ఏమిటి?',
	'articlefeedback-form-panel-helpimprove-privacy' => 'గోప్యతా విధానం', # Fuzzy
	'articlefeedback-report-panel-title' => 'పుట మూల్యాంకన',
	'articlefeedback-report-ratings' => '$1 మూల్యాంకనలు',
	'articlefeedback-field-complete-label' => 'సంపూర్ణత',
	'articlefeedback-field-complete-tooltip-1' => 'చాలా వరకు సమాచారం లేదు',
	'articlefeedback-field-complete-tooltip-2' => 'కొంత సమాచారం ఉంది',
	'articlefeedback-field-complete-tooltip-3' => 'కీలక సమాచారం ఉంది, కానీ ఖాళీలున్నాయి',
	'articlefeedback-field-complete-tooltip-4' => 'అత్యంత కీలక సమాచారం ఉంది',
	'articlefeedback-field-complete-tooltip-5' => 'సమగ్రంగా ఉంది',
	'articlefeedback-field-objective-label' => 'నిష్పాక్షికత',
	'articlefeedback-pitch-or' => 'లేదా',
	'articlefeedback-pitch-join-message' => 'మీరు ఖాతాని సృష్టించుకోవాలనుకుంటున్నారా?',
	'articlefeedback-pitch-join-accept' => 'ఖాతాని సృష్టించుకోండి',
	'articlefeedback-pitch-join-login' => 'ప్రవేశించండి',
	'articlefeedback-pitch-edit-message' => 'ఈ పేజీని మీరు కూడా సరిదిద్దవచ్చని మీకు తెలుసా?',
	'articlefeedback-pitch-edit-accept' => 'ఈ పుటని మార్చండి',
	'articleFeedback-table-caption-dailyhighsandlows' => 'నేటి హెచ్చు తగ్గులు',
	'articleFeedback-table-caption-recentlows' => 'ఇటీవలి తగ్గులు',
	'articleFeedback-table-heading-page' => 'పుట',
	'articleFeedback-table-heading-average' => 'సగటు',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'articleFeedback-table-heading-page' => 'Pájina',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'articlefeedback' => 'Makala berlen baha', # Fuzzy
	'articlefeedback-desc' => 'Makala berlen baha (synag warianty)', # Fuzzy
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'articlefeedback' => 'Tapalodo ng tugon sa artikulo',
	'articlefeedback-desc' => 'Pagtugon sa artikulo',
	'articlefeedback-error' => 'Naganap ang isang kamalian.  Paki subukan uli mamaya.',
	'articlefeedback-form-switch-label' => 'Antasan ang pahinang ito',
	'articlefeedback-form-panel-title' => 'Antasan ang pahinang ito',
	'articlefeedback-form-panel-explanation' => 'Ano ba ito?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Alisin ang antas na ito',
	'articlefeedback-form-panel-expertise' => 'Talagang maalam ako hinggil sa paksang ito (maaaring wala ito)',
	'articlefeedback-form-panel-expertise-studies' => 'Mayroon akong kaugnay na baitang sa dalubhasaan/pamantasan',
	'articlefeedback-form-panel-expertise-profession' => 'Bahagi ito ng aking propesyon',
	'articlefeedback-form-panel-expertise-hobby' => 'Isa itong malalim na pansariling hilig',
	'articlefeedback-form-panel-expertise-other' => 'Hindi nakatala rito ang pinagmulan ng aking kaalaman',
	'articlefeedback-form-panel-helpimprove' => 'Nais kong painamin ang Wikipedia, padalhan ako ng isang e-liham (maaaring wala ito)',
	'articlefeedback-form-panel-helpimprove-note' => 'Padadalhan ka namin ng isang e-liham ng pagtitiyak. Hindi namin ibabahagi ang tirahan mo ng e-liham sa panlabas na mga partido alinsunod sa aming $1.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'eliham@halimbawa.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'tugon sa patakaran sa paglilihim',
	'articlefeedback-form-panel-submit' => 'Ipadala ang mga antas',
	'articlefeedback-form-panel-pending' => 'Hindi pa naipapasa ang mga pag-aantas mo',
	'articlefeedback-form-panel-success' => 'Matagumpay na nasagip',
	'articlefeedback-form-panel-expiry-title' => 'Paso na ang mga pag-aantas mo',
	'articlefeedback-form-panel-expiry-message' => 'Mangyaring pakisuring muli ang pahinang ito at magpasa ng bagong mga antas.',
	'articlefeedback-report-switch-label' => 'Tingnan ang mga antas ng pahina',
	'articlefeedback-report-panel-title' => 'Mga antas ng pahina',
	'articlefeedback-report-panel-description' => 'Pangkasalukuyang pangkaraniwang mga antas.',
	'articlefeedback-report-empty' => 'Walang mga antas',
	'articlefeedback-report-ratings' => '$1 mga antas',
	'articlefeedback-field-trustworthy-label' => 'Mapagkakatiwalaan',
	'articlefeedback-field-trustworthy-tip' => 'Pakiramdam mo ba na ang pahinang ito ay may sapat na mga pagbabanggit ng pinagsipian at ang mga pagbabanggit na ito ay mula sa mapagkakatiwalaang mga pinagkunan?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Kulang ng mararangal na mga pinagmulan',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Mangilan-ngilan ang mararangal na mga pinagmulan',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Sapat ang mararangal na mga pinagmulan',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Mabuti ang mararangal na mga pinagmulan',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Mahuhusay na mararangal na mga pinagmulan',
	'articlefeedback-field-complete-label' => 'Buo',
	'articlefeedback-field-complete-tip' => 'Sa tingin mo ba ang pahinang ito ay sumasakop sa mahahalagang mga lugar ng paksang nararapat?',
	'articlefeedback-field-complete-tooltip-1' => 'Wala ang karamihan ng kabatiran',
	'articlefeedback-field-complete-tooltip-2' => 'Naglalaman ng ilang kabatiran',
	'articlefeedback-field-complete-tooltip-3' => 'Naglalaman ng susing kabatiran, ngunit mayroong mga puwang',
	'articlefeedback-field-complete-tooltip-4' => 'Naglalaman ng karamihan sa susing kabatiran',
	'articlefeedback-field-complete-tooltip-5' => 'Malawak ang nasasaklawan',
	'articlefeedback-field-objective-label' => 'Palayunin',
	'articlefeedback-field-objective-tip' => 'Nararamdaman mo ba na ang pahinang ito ay nagpapakita ng patas na pagkatawan sa lahat ng mga pananaw hinggil sa paksa?',
	'articlefeedback-field-objective-tooltip-1' => 'Matindi ang pagka may kinikilingan',
	'articlefeedback-field-objective-tooltip-2' => 'Katamtaman ang pagka may kinikilingan',
	'articlefeedback-field-objective-tooltip-3' => 'May pinaka mababang pagkiling',
	'articlefeedback-field-objective-tooltip-4' => 'Walang nahahalatang pagka may kinikilingan',
	'articlefeedback-field-objective-tooltip-5' => 'Lubos na walang kinikilingan',
	'articlefeedback-field-wellwritten-label' => 'Mainam ang pagkakasulat',
	'articlefeedback-field-wellwritten-tip' => 'Sa tingin mo ba ang pahinang ito ay maayos ang pagkakabuo at mabuti ang pagkakasulat?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Hindi maunawaan',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Mahirap unawain',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Sapat ang kalinawan',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Mabuti ang kalinawan',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Katangi-tangi ang kalinawan',
	'articlefeedback-pitch-reject' => 'Maaaring mamaya',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => 'Salamat! Nasagip na ang iyong mga pag-aantas.',
	'articlefeedback-pitch-join-message' => 'Ninais mo bang makalikha ng isang akawnt?',
	'articlefeedback-pitch-join-body' => 'Ang isang akawnt ay makakatulong sa iyong masubaybayan ang mga binago mo, makalahok sa mga usapan, at maging isang bahagi ng pamayanan.',
	'articlefeedback-pitch-join-accept' => 'Lumikha ng isang akawnt',
	'articlefeedback-pitch-join-login' => 'Lumagdang papasok',
	'articlefeedback-pitch-edit-message' => 'Alam mo bang mababago mo ang pahinang ito?',
	'articlefeedback-pitch-edit-accept' => 'Baguhin ang pahinang ito',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Mga matataas at mga mabababa sa araw na ito',
	'articleFeedback-table-caption-dailyhighs' => 'Mga artikulong may pinakamataas na mga kaantasan: $1',
	'articleFeedback-table-caption-dailylows' => 'Mga artikulong may pinakamababang mga kaantasan: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Pinaka nabago sa linggong ito',
	'articleFeedback-table-caption-recentlows' => 'Kamakailang mga mabababa',
	'articleFeedback-table-heading-page' => 'Pahina',
	'articleFeedback-table-heading-average' => 'Karaniwan',
	'articlefeedback-table-noratings' => '-',
	'articleFeedback-copy-above-highlow-tables' => 'Isa itong tampok na pang-eksperimento. Paki magbigay ng tugon doon sa [$1 pahina ng talakayan].',
	'articlefeedback-dashboard-bottom' => "'''Paunawa''': Magpapatuloy kami sa pag-eeksperimento ng iba't ibang mga paraan ng paglalatag ng mga artikulo sa mga tapalodong ito. Sa kasalukuyan, kasama sa mga tapalodo ang sumusunod na mga artikulo:
* Mga pahinang mayroong pinaka mataas na/pinaka mababang kaantasan: mga artikulong nakatanggap ng hindi bababa sa 10 mga pag-aantas sa loob ng huling 24 mga oras. Ang mga pamantungan ay tinutuos sa pamamagitan ng pagkuha ng kaimbian o ''mean'' ng lahat ng mga kaantasan na naipasa sa loob ng huling 24 mga oras.
* Kamakailang mga kababaan: mga artikulong nakakuha ng 70% o mas marami pang mga kaantasang mababa (2 mga bituin o mas mababa pa) sa loob ng anumang kategorya sa loob ng huling 24 mga oras. Tanging mga artikulong nakatanggap lamang ng kahit na 10 mga pag-aantas sa loob ng huling 24 mga oras ang isinama.",
	'articlefeedback-disable-preference' => 'Huwag ipakita ang widyet ng tugon sa Artikulo sa ibabaw ng mga pahina',
	'articlefeedback-emailcapture-response-body' => 'Kumusta!

Salamat sa pagpapahayag mo ng pagnanais na makatulong sa pagpapainam ng {{SITENAME}}.

Mangyaring kumuha ng isang sandli upang tiyakin ang iyong e-liham sa pamamagitan ng pagpindot sa kawing na nasa ibaba: 

$1

Maaari mo ring dalawin ang:

$2

At ipasok ang sumusunod na kodigo ng pagtitiyak:

$3

Makikipag-ugnayan kami sa loob ng ilang mga sandali sa kung paano ka makakatulong sa pagpapainam ng {{SITENAME}}.

Kung hindi ikaw ang nagpasimula ng kahilingang ito, mangyaring huwag pansinin ang e-liham na ito at hindi na kami magpapadala ng iba pa.

Pinakamainam na mga mithiin para sa iyo at nagpapasalamat,
Ang pangkat ng {{SITENAME}}',
);

/** толышә зывон (толышә зывон)
 * @author Erdemaslancan
 */
$messages['tly'] = array(
	'articleFeedback-table-heading-page' => 'Мәғолә',
);

/** Turkish (Türkçe)
 * @author 82-145
 * @author CnkALTDS
 * @author Emperyan
 * @author Incelemeelemani
 * @author Joseph
 * @author Karduelis
 * @author Reedy
 * @author Stultiwikia
 */
$messages['tr'] = array(
	'articlefeedback' => 'Madde geri bildirimi gösterge paneli', # Fuzzy
	'articlefeedback-desc' => 'Madde geribildirimi',
	'articlefeedback-error' => 'Bir hata oluştu. Lütfen daha sonra yeniden deneyin.',
	'articlefeedback-form-switch-label' => 'Bu sayfayı değerlendirin',
	'articlefeedback-form-panel-title' => 'Bu sayfayı değerlendirin',
	'articlefeedback-form-panel-explanation' => 'Bu nedir?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Bu değerlendirmeyi kaldır',
	'articlefeedback-form-panel-expertise' => 'Bu konu hakkında oldukça bilgiliyim (isteğe bağlı)',
	'articlefeedback-form-panel-expertise-studies' => 'Bu konu hakkında eğitim gördüm',
	'articlefeedback-form-panel-expertise-profession' => 'Mesleğimin bir parçası',
	'articlefeedback-form-panel-expertise-hobby' => 'Bu konuya tutkuyla bağlıyım',
	'articlefeedback-form-panel-expertise-other' => 'Burada benim konu hakkındaki bilgi seviyem listelenmiyor',
	'articlefeedback-form-panel-helpimprove' => "Vikipedi'yi geliştirmede yardımcı olmak istiyorum, bana e-posta gönderebilirsiniz (isteğe bağlı)",
	'articlefeedback-form-panel-helpimprove-note' => 'Size bir onay e-postası göndereceğiz. $1 e-posta adresiniz proje dışında üçüncü şahıslar ile paylaşmıyoruz.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'email@example.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Geri bildirim gizlilik açıklaması',
	'articlefeedback-form-panel-submit' => 'Değerlendirmeleri kaydet',
	'articlefeedback-form-panel-pending' => 'Değerlendirmeleriniz henüz kaydedilmedi',
	'articlefeedback-form-panel-success' => 'Başarıyla kaydedildi',
	'articlefeedback-form-panel-expiry-title' => 'Oylama zaman aşımına uğradı',
	'articlefeedback-form-panel-expiry-message' => 'Lütfen bu sayfayı yeniden değerlendirin ve yeni oyunuzu gönderin.',
	'articlefeedback-report-switch-label' => 'Sayfa değerlendirmelerini görüntüle',
	'articlefeedback-report-panel-title' => 'Sayfa değerlendirmeleri',
	'articlefeedback-report-panel-description' => 'Şu anki değerlendirme ortalaması',
	'articlefeedback-report-empty' => 'Değerlendirme yok',
	'articlefeedback-report-ratings' => '$1 oylandı',
	'articlefeedback-field-trustworthy-label' => 'Güvenilir',
	'articlefeedback-field-trustworthy-tip' => 'Bu sayfada yeterli alıntılar bulunduğunu ve bu alıntıların güvenilir kaynaklardan geldiğini hissediyor musunuz?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Güvenilir kaynaklardan yoksun',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Birkaç güvenli kaynak mevcut',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Yeterli bilinen kaynağı var',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Oldukça güvenli kaynaklardan',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Büyük saygın kaynaklardan',
	'articlefeedback-field-complete-label' => 'Tamamlanmış',
	'articlefeedback-field-complete-tip' => 'Bu sayfanın konuyla ilgili yer alması gereken tüm bilgileri içerdiğini düşünüyor musunuz?',
	'articlefeedback-field-complete-tooltip-1' => 'Bilgilerin çoğu eksik',
	'articlefeedback-field-complete-tooltip-2' => 'Bazı bilgileri içeriyor',
	'articlefeedback-field-complete-tooltip-3' => 'Önemli bilgiler içeriyor ancak eksiklikler var',
	'articlefeedback-field-complete-tooltip-4' => 'Çok önemli bilgileri içeriyor',
	'articlefeedback-field-complete-tooltip-5' => 'Kapsamlı bilgi',
	'articlefeedback-field-objective-label' => 'Tarafsız',
	'articlefeedback-field-objective-tip' => 'Bu sayfanın konu hakkındaki tüm bakış açılarını iyi bir şekilde yansıttığını düşünüyor musunuz?',
	'articlefeedback-field-objective-tooltip-1' => 'Aşırı önyargılı',
	'articlefeedback-field-objective-tooltip-2' => 'Orta seviyede önyargılı',
	'articlefeedback-field-objective-tooltip-3' => 'Az önyargılı',
	'articlefeedback-field-objective-tooltip-4' => 'Önyargı yok',
	'articlefeedback-field-objective-tooltip-5' => 'Tamamen tarafsız',
	'articlefeedback-field-wellwritten-label' => 'İyi yazılmış',
	'articlefeedback-field-wellwritten-tip' => 'Bu sayfanın ne derece düzenli yazılmış olduğunu düşünüyorsunuz?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Anlaşılamıyor',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Anlamak zor',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Yeterli seviyede',
	'articlefeedback-field-wellwritten-tooltip-4' => 'İyi seviyede',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Olağanüstü gözüküyor',
	'articlefeedback-pitch-reject' => 'Belki ileride',
	'articlefeedback-pitch-or' => 'veya',
	'articlefeedback-pitch-thanks' => 'Teşekkürler! Değerlendirmeleriniz kaydedildi.',
	'articlefeedback-pitch-join-message' => 'Bir kullanıcı hesabı edinmek istiyor musunuz?',
	'articlefeedback-pitch-join-body' => 'Yeni bir hesap düzenlemelerinizi takip etmek, tartışmalarda yer almak ve topluluğun bir parçası olmak için size yardımcı olur.',
	'articlefeedback-pitch-join-accept' => 'Yeni hesap edin',
	'articlefeedback-pitch-join-login' => 'Oturum aç',
	'articlefeedback-pitch-edit-message' => 'Bu sayfayı düzenleyebileceğinizi biliyor muydunuz?',
	'articlefeedback-pitch-edit-accept' => 'Bu sayfayı değiştir',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Günün en yüksek ve en düşükleri',
	'articleFeedback-table-caption-dailyhighs' => 'En yüksek oy verilen sayfalar: $1',
	'articleFeedback-table-caption-dailylows' => 'En düşük oy verilen sayfalar: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Bu hafta en fazla değiştirilen',
	'articleFeedback-table-caption-recentlows' => 'Son düşenler',
	'articleFeedback-table-heading-page' => 'Madde',
	'articleFeedback-table-heading-average' => 'Ortalama',
	'articlefeedback-table-noratings' => '-',
	'articleFeedback-copy-above-highlow-tables' => 'Bu deneysel bir özelliktir.  Lütfen [ $1  tartışma sayfası]na geribildirimde bulunun.',
	'articlefeedback-dashboard-bottom' => "'''Not''': Bu pencerelerin sayfalar üzerinde nasıl durduğuna dair farklı yollar denenmeye devam edilecektir.  Şu anda sayfa pencerelerinin içeriğinde bulunanlar şunlardır:
* Sayfalardaki en düşük ve en yüksek beğenme oranları: son 24 saat içerisinde en az 10 oylama almış maddeler. Ortalamalar 24 saat içerisinde gönderilen tüm oylamaların ortalaması alınmak suretiyle hesaplanmaktadır.
* Son düşenler: herhangi bir kategoride son 24 saat içerisinde %70'ten daha düşük (2 yıldız veya daha düşük) oy almış maddeler. Son 24 saat içerisinde en az 10 oy almış maddeler dahil edilmektedir.",
	'articlefeedback-disable-preference' => 'Geri bildirim eklentisini makale sayfalarında gösterme',
	'articlefeedback-emailcapture-response-body' => 'Merhaba!

{{SITENAME}} sitesini geliştirmek için yardımcı olmak istemenizden dolayı teşekkür ederiz.

Lütfen aşağıdaki linke tıklayarak e-posta adresinizi onaylamak için bir dakikanızı ayırın: 

$1

İsterseniz bu işlemi manuel olarak yapabilirsiniz. Bunun için aşağıdaki linke tıklayın:

$2

Ve aşağıdaki onay kodunu belirtilen alana girin:

$3

{{SITENAME}} sitesini geliştirmek için nasıl yardımcı olacağınız ile ilgili sizinle iletişime geçilecektir.

Eğer bu isteği siz başlatmadıysanız, bu e-postayı gözardı edin. Bu durumda size başka bir ileti gönderilmeyecektir.

Sizin için en iyi dileklerimizi bildirir, teşekkür ederiz
{{SITENAME}} ekibi',
);

/** Ukrainian (українська)
 * @author Arturyatsko
 * @author Dim Grits
 * @author Microcell
 * @author Olvin
 * @author Sodmy
 * @author Тест
 */
$messages['uk'] = array(
	'articlefeedback' => 'Панель оцінювання статті',
	'articlefeedback-desc' => 'Оцінка статті',
	'articlefeedback-error' => 'Сталася помилка. Будь ласка, спробуйте пізніше.',
	'articlefeedback-form-switch-label' => 'Оцінить цю сторінку',
	'articlefeedback-form-panel-title' => 'Оцініть цю сторінку',
	'articlefeedback-form-panel-explanation' => 'Що це таке?',
	'articlefeedback-form-panel-explanation-link' => 'Project:ArticleFeedback',
	'articlefeedback-form-panel-clear' => 'Вилучити оцінку',
	'articlefeedback-form-panel-expertise' => "Я досить обізнаний в цій темі (необов'язково)",
	'articlefeedback-form-panel-expertise-studies' => 'Маю відповідну спеціальну освіту',
	'articlefeedback-form-panel-expertise-profession' => 'Це стосується моєї професії',
	'articlefeedback-form-panel-expertise-hobby' => 'Це моє палке особисте захоплення',
	'articlefeedback-form-panel-expertise-other' => 'Джерело моїх знань не зазначене в списку',
	'articlefeedback-form-panel-helpimprove' => 'Я хотів би допомогти в поліпшенні Вікіпедії, надішліть мені електронного листа (за бажанням)',
	'articlefeedback-form-panel-helpimprove-note' => 'Ми надішлемо вам підтвердження електронною поштою. Відповідно до нашого правила $1 ми не будемо передавати вашу адресу будь-кому іншому.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'email@example.org',
	'articlefeedback-form-panel-helpimprove-privacy' => "про конфіденційність зворотнього зв'язку",
	'articlefeedback-form-panel-submit' => 'Надіслати оцінки',
	'articlefeedback-form-panel-pending' => 'Ваші оцінки ще не були відправлені',
	'articlefeedback-form-panel-success' => 'Успішно збережено',
	'articlefeedback-form-panel-expiry-title' => 'Ваші оцінки застарілі',
	'articlefeedback-form-panel-expiry-message' => 'Будь ласка, перегляньте сторінку та поставте нові оцінки.',
	'articlefeedback-report-switch-label' => 'Показати оцінки сторінки',
	'articlefeedback-report-panel-title' => 'Рейтинг сторінки',
	'articlefeedback-report-panel-description' => 'Поточні середні оцінки.',
	'articlefeedback-report-empty' => 'Не оцінювалася',
	'articlefeedback-report-ratings' => 'Кількість оцінок: $1',
	'articlefeedback-field-trustworthy-label' => 'Достовірність',
	'articlefeedback-field-trustworthy-tip' => 'Як ви вважаєте, чи достатньо ця сторінка має цитат, чи узяті вони з надійних джерел?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Авторитетні джерела відсутні',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Недостатньо достовірних джерел',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Адекватні авторитетні джерела',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Гарні авторитетні джерела',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Чудові авторитетні джерела',
	'articlefeedback-field-complete-label' => 'Повнота',
	'articlefeedback-field-complete-tip' => 'Чи вважаєте ви, що ця сторінка в достатній мірі висвітлює основні питання з цієї теми?',
	'articlefeedback-field-complete-tooltip-1' => 'Відсутня велика частина інформації',
	'articlefeedback-field-complete-tooltip-2' => 'Містить деяку інформацію',
	'articlefeedback-field-complete-tooltip-3' => 'Містить ключову інформацію, але з прогалинами',
	'articlefeedback-field-complete-tooltip-4' => 'Містить загальну інформацію',
	'articlefeedback-field-complete-tooltip-5' => 'Всебічне висвітлення теми',
	'articlefeedback-field-objective-label' => 'Нейтральність',
	'articlefeedback-field-objective-tip' => "Чи вважаєте ви, що на цій сторінці об'єктивно висвітлений предмет з усіх точок зору?",
	'articlefeedback-field-objective-tooltip-1' => 'Досить упереджена',
	'articlefeedback-field-objective-tooltip-2' => 'Помірно упереджена',
	'articlefeedback-field-objective-tooltip-3' => 'Мінімально упереджена',
	'articlefeedback-field-objective-tooltip-4' => 'Немає вочевидь упереджених речень',
	'articlefeedback-field-objective-tooltip-5' => 'Абсолютно неупереджена',
	'articlefeedback-field-wellwritten-label' => 'Стиль',
	'articlefeedback-field-wellwritten-tip' => 'Чи вважаєте ви, що ця сторінка добре структурована і має гарний стиль викладення матеріалу?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Незрозуміла',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Важке сприйняття',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Адекватна ясність викладення матеріалу',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Легко читається',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Винятково легко читається',
	'articlefeedback-pitch-reject' => 'Можливо, пізніше',
	'articlefeedback-pitch-or' => 'або',
	'articlefeedback-pitch-thanks' => 'Дякуємо! Ваші оцінки були збережені.',
	'articlefeedback-pitch-join-message' => 'Ви хочете створити обліковий запис?',
	'articlefeedback-pitch-join-body' => 'Обліковий запис допоможе вам відстежувати зміни, брати участь в обговореннях і бути частиною спільноти.',
	'articlefeedback-pitch-join-accept' => 'Створити обліковий запис',
	'articlefeedback-pitch-join-login' => 'Увійти до системи',
	'articlefeedback-pitch-edit-message' => 'Чи знаєте ви, що цю сторінку можна редагувати?',
	'articlefeedback-pitch-edit-accept' => 'Редагувати цю сторінку',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Лідери та аутсайдери цього дня.',
	'articleFeedback-table-caption-dailyhighs' => 'Сторінки з найвищими оцінками: $1',
	'articleFeedback-table-caption-dailylows' => 'Сторінки з найнижчими оцінками: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'На цьому тижні найбільш змінилися',
	'articleFeedback-table-caption-recentlows' => 'Останні зниження рейтингу',
	'articleFeedback-table-heading-page' => 'Сторінка',
	'articleFeedback-table-heading-average' => 'Середнє значення',
	'articlefeedback-table-noratings' => '-',
	'articleFeedback-copy-above-highlow-tables' => 'Це експериментальна можливість. Прохання висловлювати коментарі на [$1 сторінці обговорення].',
	'articlefeedback-dashboard-bottom' => "'''Примітка''': Ми будемо продовжувати експериментувати з різними способами наповнення цієї панелі. На даний час панель включає такі статті:
* Сторінки з високим/низьким рейтингом: статті, які отримали щонайменше 10 оцінок протягом останніх 24 годин. Середня оцінка розраховується після обробки усіх оцінок за останні 24 години.
* Чинні аутсайдери: Статті, які отримали оцінку нижчу за 70% (1-2 зірки) у будь-якій категорії за останні 24 години. Враховуються тільки статті, які отримали щонайменше 10 оцінок за останні 24 години.",
	'articlefeedback-disable-preference' => 'Не показувати на сторінках віджет оцінювання сторінок',
	'articlefeedback-emailcapture-response-body' => 'Привіт! 
Дякуємо за інтерес до {{SITENAME}}! Будь ласка, знайдіть декілька секунд, щоб підтвердити адресу електронної пошти, натиснувши на посилання нижче:
$1
Ви також можете відвідати: 
$2
і ввести наступний код підтвердження:
$3
Ми повідомимо вам як можна допомогти у поліпшенні {{SITENAME}}.
Якщо ви не відправляли цей запит, не звертайте уваги на цей лист, і ми не потурбуємо вас більше.
З найкращими побажаннями, команда {{SITENAME}}.',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'articlefeedback' => 'مضمون کی رائے ڈیش بورڈ',
	'articlefeedback-desc' => 'مضمون کی رائے',
	'articlefeedback-error' => 'ایک غلطی واقع ہوئی ہے. براہ مہربانی کوشش کریں بعد میں دوبارہ.',
	'articlefeedback-form-switch-label' => 'اس صفحے کی شرح',
	'articlefeedback-form-panel-title' => 'اس صفحے کی شرح',
	'articlefeedback-form-panel-explanation' => 'یہ کیا ہے ؟',
	'articlefeedback-form-panel-clear' => 'اس کی درجہ بندی حذف کریں',
	'articlefeedback-form-panel-expertise-studies' => 'میں نے ایک متعلقہ کالج/یونیورسٹی کی ڈگری',
	'articlefeedback-form-panel-expertise-profession' => 'یہ میرے پیشے کا حصہ ہے',
	'articlefeedback-form-panel-expertise-hobby' => 'یہ ایک گہری ذاتی جنون ہے',
	'articlefeedback-form-panel-expertise-other' => 'ميرے علم كے مطابق کا ذریعہ نہیں درج کیا جاتا ہے یہاں',
	'articlefeedback-form-panel-helpimprove-privacy' => 'آپ کی رائے پرائیویسی اسٹیٹمینٹ',
	'articlefeedback-form-panel-submit' => 'درجہ بندی جمع کرائیں',
	'articlefeedback-form-panel-pending' => 'آپ درجہ بندی ہے نہیں کیا گیا ہے کیا ابھی تک',
	'articlefeedback-form-panel-success' => 'کامیابی سے بچا لیا',
	'articlefeedback-report-panel-title' => 'صفحہ درجہ بندی',
	'articlefeedback-report-panel-description' => 'موجودہ اوسط درجہ بندی.',
	'articlefeedback-report-empty' => 'کوئی درجہ بندی',
	'articlefeedback-field-trustworthy-label' => 'ثقہ',
	'articlefeedback-field-trustworthy-tooltip-1' => 'قابل بھروسہ ذرائع کا فقدان',
	'articlefeedback-field-trustworthy-tooltip-2' => 'چند قابل بھروسہ ذرائع',
	'articlefeedback-field-trustworthy-tooltip-3' => 'کافی قابل بھروسہ ذرائع',
	'articlefeedback-field-trustworthy-tooltip-4' => 'اچھا قابل بھروسہ ذرائع',
	'articlefeedback-field-trustworthy-tooltip-5' => 'عظیم قابل بھروسہ ذرائع',
	'articlefeedback-field-complete-label' => 'مکمل',
	'articlefeedback-field-complete-tip' => 'کیا آپ کو لگتا کہ اس صفحے پر علاقوں ضروری موضوع میں اسے چاہئے ؟',
	'articlefeedback-field-complete-tooltip-1' => 'سب سے زیادہ معلومات لاپتہ',
	'articlefeedback-field-complete-tooltip-2' => 'کچھ معلومات پر مشتمل ہے',
	'articlefeedback-field-complete-tooltip-3' => 'اہم معلومات پر مشتمل ہے لیکن فرق کے ساتھ',
	'articlefeedback-field-complete-tooltip-4' => 'سب سے زیادہ اہم معلومات پر مشتمل ہے',
	'articlefeedback-field-complete-tooltip-5' => 'جامع کوریج',
	'articlefeedback-field-objective-label' => 'مقصد',
	'articlefeedback-field-objective-tip' => 'کیا آپ کو لگتا کہ اس صفحے کے سب نقطہ نظر کے بارے ایک منصفانہ نمائندگی پر ظاہر کرتا ہے مسئلہ ؟',
	'articlefeedback-field-objective-tooltip-1' => 'بھاری مخصوص',
	'articlefeedback-field-objective-tooltip-2' => 'اعتدال پسند تعصب',
	'articlefeedback-field-objective-tooltip-3' => 'کم سے کم لیا',
	'articlefeedback-field-objective-tooltip-4' => 'کوئی واضح تعصب',
	'articlefeedback-field-wellwritten-tooltip-2' => 'کو سمجھنے کے لئے مشکل',
	'articlefeedback-field-wellwritten-tooltip-3' => 'کافی کی وضاحت',
	'articlefeedback-field-wellwritten-tooltip-4' => 'اچھی وضاحت',
	'articlefeedback-field-wellwritten-tooltip-5' => 'غیر معمولی کی وضاحت',
	'articlefeedback-pitch-reject' => 'صالحہ كا علم بعد میں',
	'articlefeedback-pitch-thanks' => 'شکریہ! آپ کی درجہ بندی کو محفوظ کیا گیا ہے.',
	'articlefeedback-pitch-join-message' => 'کیا آپ ایک اکاؤنٹ پیدا کرنے کے لئے چاہتے ہیں ؟',
	'articlefeedback-pitch-join-accept' => 'ایک اکاؤنٹ بنائیں',
	'articlefeedback-pitch-join-login' => 'میں لاگ ان کریں',
	'articlefeedback-pitch-edit-message' => 'کیا آپ جانتے ہیں کہ آپ اس صفحے میں ترمیم کر سکتے ہیں ؟',
	'articlefeedback-pitch-edit-accept' => 'اس صفحے میں ترمیم کریں',
	'articleFeedback-table-heading-page' => 'صفحہ',
	'articleFeedback-table-heading-average' => 'اوسط',
	'articlefeedback-disable-preference' => 'مت دکھائیں مضمون آراء ویجیٹ صفحات پر',
);

/** vèneto (vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'articlefeedback' => 'Valutassion pagina', # Fuzzy
	'articlefeedback-desc' => 'Valutassion pagina (version de prova)', # Fuzzy
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'articlefeedback-form-panel-explanation' => 'Mi nece om?',
	'articlefeedback-field-complete-label' => 'Kaik',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Trần Nguyễn Minh Huy
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'articlefeedback' => 'Bảng điều khiển phản hồi bài',
	'articlefeedback-desc' => 'Phản hồi bài',
	'articlefeedback-error' => 'Đã gặp lỗi. Xin vui lòng thử lại sau.',
	'articlefeedback-form-switch-label' => 'Đánh giá trang này',
	'articlefeedback-form-panel-title' => 'Đánh giá trang này',
	'articlefeedback-form-panel-explanation' => 'Đây là gì?',
	'articlefeedback-form-panel-explanation-link' => 'Project:Phản hồi bài',
	'articlefeedback-form-panel-clear' => 'Hủy đánh giá này',
	'articlefeedback-form-panel-expertise' => 'Tôi rất am hiểu về đề tài này (tùy chọn)',
	'articlefeedback-form-panel-expertise-studies' => 'Tôi đã lấy bằng có liên quan tại trường cao đẳng / đại học',
	'articlefeedback-form-panel-expertise-profession' => 'Nó thuộc về nghề nghiệp của tôi',
	'articlefeedback-form-panel-expertise-hobby' => 'Tôi quan tâm một cách thiết tha về đề tài này',
	'articlefeedback-form-panel-expertise-other' => 'Tôi hiểu về đề tài này vì lý do khác',
	'articlefeedback-form-panel-helpimprove' => 'Tôi muốn giúp cải tiến Wikipedia – gửi cho tôi một thư điện tử (tùy chọn)',
	'articlefeedback-form-panel-helpimprove-note' => 'Chúng tôi sẽ gửi cho bạn một thư điện tử xác nhận. Chúng tôi sẽ không chia sẽ địa chỉ thư điện tử của bạn với bên ngoài, tuân theo $1 của chúng tôi.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'tuyên bố riêng tư của thông tin phản hồi',
	'articlefeedback-form-panel-submit' => 'Gửi đánh giá',
	'articlefeedback-form-panel-pending' => 'Các đánh giá của bạn chưa được gửi',
	'articlefeedback-form-panel-success' => 'Lưu thành công',
	'articlefeedback-form-panel-expiry-title' => 'Các đánh giá của bạn đã hết hạn',
	'articlefeedback-form-panel-expiry-message' => 'Xin vui lòng coi lại và đánh giá lại trang này.',
	'articlefeedback-report-switch-label' => 'Xem các đánh giá của trang',
	'articlefeedback-report-panel-title' => 'Đánh giá của trang',
	'articlefeedback-report-panel-description' => 'Đánh giá trung bình hiện tại',
	'articlefeedback-report-empty' => 'Không có đánh giá',
	'articlefeedback-report-ratings' => '$1 đánh giá',
	'articlefeedback-field-trustworthy-label' => 'Đáng tin',
	'articlefeedback-field-trustworthy-tip' => 'Bạn có cảm thấy rằng bày này chú thích nguồn gốc đầy đủ và đáng tin các nguồn?',
	'articlefeedback-field-trustworthy-tooltip-1' => 'Thiếu những nguồn đáng tin',
	'articlefeedback-field-trustworthy-tooltip-2' => 'Ít nguồn đáng tin',
	'articlefeedback-field-trustworthy-tooltip-3' => 'Đủ nguồn đáng tin',
	'articlefeedback-field-trustworthy-tooltip-4' => 'Nhiều nguồn đáng tin',
	'articlefeedback-field-trustworthy-tooltip-5' => 'Rất nhiều nguồn đáng tin',
	'articlefeedback-field-complete-label' => 'Đầy đủ',
	'articlefeedback-field-complete-tip' => 'Bạn có cảm thấy rằng bài này bao gồm các đề tài cần thiết?',
	'articlefeedback-field-complete-tooltip-1' => 'Thiếu hầu hết thông tin',
	'articlefeedback-field-complete-tooltip-2' => 'Có một số thông tin',
	'articlefeedback-field-complete-tooltip-3' => 'Có những thông tin quan trọng nhưng với một số lỗ hổng',
	'articlefeedback-field-complete-tooltip-4' => 'Có phần nhiều thông tin quan trọng',
	'articlefeedback-field-complete-tooltip-5' => 'Có thông tin đầy đủ',
	'articlefeedback-field-objective-label' => 'Trung lập',
	'articlefeedback-field-objective-tip' => 'Bạn có cảm thấy rằng bài này đại diện công bằng cho tất cả các quan điểm về các vấn đề?',
	'articlefeedback-field-objective-tooltip-1' => 'Hoàn toàn mang tính thiên vị',
	'articlefeedback-field-objective-tooltip-2' => 'Mang tính thiên vị vừa vừa',
	'articlefeedback-field-objective-tooltip-3' => 'Ít mang tính thiên vị',
	'articlefeedback-field-objective-tooltip-4' => 'Không rõ ràng mang tính thiên vị',
	'articlefeedback-field-objective-tooltip-5' => 'Hoàn toàn không có mang tính thiên vị',
	'articlefeedback-field-wellwritten-label' => 'Viết hay',
	'articlefeedback-field-wellwritten-tip' => 'Bạn có cảm thấy rằng bài này được sắp xếp đàng hoàng có văn bản hay?',
	'articlefeedback-field-wellwritten-tooltip-1' => 'Không thể hiểu nổi',
	'articlefeedback-field-wellwritten-tooltip-2' => 'Khó hiểu',
	'articlefeedback-field-wellwritten-tooltip-3' => 'Đủ rõ ràng',
	'articlefeedback-field-wellwritten-tooltip-4' => 'Khá rõ ràng',
	'articlefeedback-field-wellwritten-tooltip-5' => 'Rất là rõ ràng',
	'articlefeedback-pitch-reject' => 'Có lẽ để sau',
	'articlefeedback-pitch-or' => 'hoặc',
	'articlefeedback-pitch-thanks' => 'Cám ơn! Đánh giá của bạn đã được lưu.',
	'articlefeedback-pitch-join-message' => 'Bạn có muốn mở tài khoản tại đây?',
	'articlefeedback-pitch-join-body' => 'Một tài khoản sẽ giúp bạn theo dõi các trang mà bạn sửa đổi và tham gia các cuộc thảo luận và hoạt động của cộng đồng.',
	'articlefeedback-pitch-join-accept' => 'Mở tài khoản',
	'articlefeedback-pitch-join-login' => 'Đăng nhập',
	'articlefeedback-pitch-edit-message' => 'Bạn có biết rằng bạn có thể sửa đổi trang này?',
	'articlefeedback-pitch-edit-accept' => 'Sửa đổi trang này',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement/vi',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Các điểm cao và thấp nhất hôm nay',
	'articleFeedback-table-caption-dailyhighs' => 'Các bài đánh giá cao nhất: $1',
	'articleFeedback-table-caption-dailylows' => 'Các bài đánh giá thấp nhất: $1',
	'articleFeedback-table-caption-weeklymostchanged' => 'Các điểm thay đổi nhiều nhất vào tuần này',
	'articleFeedback-table-caption-recentlows' => 'Các điểm thấp gần đây',
	'articleFeedback-table-heading-page' => 'Trang',
	'articleFeedback-table-heading-average' => 'Trung bình',
	'articleFeedback-copy-above-highlow-tables' => 'Đây là một tính năng thử nghiệm. Xin vui lòng đưa ra phản hồi tại [$1 trang thảo luận].',
	'articlefeedback-dashboard-bottom' => "'''Lưu ý:''' Chúng tôi sẽ tiếp tục thử nghiệm những cách chọn lọc bài trong cách bảng điều khiển. Hiện nay các bảng điều khiển bao gồm các bài sau:
* Các trang được đánh giá cao nhất hoặc thấp nhất: các bài đã được đánh giá 10 lần trở lên trong 24 giờ trước. Trung bình tính tất cả các đánh giá được nhận trong 24 giờ trước.
* Các điểm thấp gần đây: các bài được đánh giá 70% (2 sao) trở xuống trong thể loại này trong 24 giờ trước. Chỉ tính các bài được đánh giá 10 lần trở lên trong 24 giờ trước.",
	'articlefeedback-disable-preference' => 'Ẩn bảng Phản hồi bài khỏi các trang',
	'articlefeedback-emailcapture-response-body' => 'Xin chào!

Cám ơn bạn đã bày tỏ quan tâm về việc giúp cải tiến {{SITENAME}}.

Xin vui lòng dành một chút thời gian để xác nhận địa chỉ thư điện tử của bạn dùng liên kết dưới đây:

$1

Bạn cũng có thể ghé vào:

$2

và nhập mã xác nhận sau:

$3

Chúng tôi sẽ sớm liên lạc với bạn với thông tin về giúp cải tiến {{SITENAME}}.

Nếu bạn không phải là người yêu cầu thông tin này, xin vui lòng kệ thông điệp này và chúng tôi sẽ không gửi cho bạn bất cứ gì nữa.

Thân mến và cám ơn,
Nhóm {{SITENAME}}',
);

/** Yiddish (ייִדיש)
 * @author Imre
 * @author פוילישער
 */
$messages['yi'] = array(
	'articlefeedback-pitch-or' => 'אָדער',
	'articlefeedback-pitch-join-accept' => 'שאַפֿן אַ קאנטע',
	'articlefeedback-pitch-join-login' => 'אַרײַנלאָגירן',
	'articlefeedback-pitch-edit-accept' => 'ענדערן דעם בלאט',
	'articleFeedback-table-heading-page' => 'זײַט',
	'articleFeedback-table-heading-average' => 'דורכשניט',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'articlefeedback' => 'Ibi èsì àyọkà', # Fuzzy
	'articlefeedback-desc' => '条目评级（测试版）',
	'articlefeedback-form-switch-label' => 'Wọn ojúewé yìí',
	'articlefeedback-form-panel-title' => 'Wọn ojúewé yìí',
	'articlefeedback-form-panel-submit' => 'Ìkóólẹ̀ ìdíyelé',
	'articlefeedback-field-complete-label' => '完成',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Anakmalaysia
 * @author Bencmq
 * @author Hydra
 * @author Liangent
 * @author PhiLiP
 * @author Shizhao
 * @author Xiaomingyan
 * @author 白布飘扬
 * @author 阿pp
 */
$messages['zh-hans'] = array(
	'articlefeedback' => '条目评分面板',
	'articlefeedback-desc' => '条目评分',
	'articlefeedback-error' => '发生了一个错误。请稍后重试。',
	'articlefeedback-form-switch-label' => '给本文评分',
	'articlefeedback-form-panel-title' => '给本文评分',
	'articlefeedback-form-panel-explanation' => '这是什么？',
	'articlefeedback-form-panel-explanation-link' => 'Project:条目评分工具',
	'articlefeedback-form-panel-clear' => '移除该评分',
	'articlefeedback-form-panel-expertise' => '我非常了解与本主题相关的知识（可选）',
	'articlefeedback-form-panel-expertise-studies' => '我有与其有关的大学学位',
	'articlefeedback-form-panel-expertise-profession' => '这是我专业的一部分',
	'articlefeedback-form-panel-expertise-hobby' => '个人对此有深厚的兴趣',
	'articlefeedback-form-panel-expertise-other' => '文中未列出我所了解知识的来源',
	'articlefeedback-form-panel-helpimprove' => '我想帮助改善维基百科，请给我发送一封电子邮件（可选）',
	'articlefeedback-form-panel-helpimprove-note' => '我们将向您发送确认电子邮件。基于$1，我们不会与任何人共享您的地址。',
	'articlefeedback-form-panel-helpimprove-privacy' => '反馈隐私政策',
	'articlefeedback-form-panel-submit' => '提交评分',
	'articlefeedback-form-panel-pending' => '你的评分尚未提交',
	'articlefeedback-form-panel-success' => '保存成功',
	'articlefeedback-form-panel-expiry-title' => '你的评分已过期',
	'articlefeedback-form-panel-expiry-message' => '请重新评估本页并重新评分。',
	'articlefeedback-report-switch-label' => '查看条目评分',
	'articlefeedback-report-panel-title' => '条目评分',
	'articlefeedback-report-panel-description' => '当前平均分。',
	'articlefeedback-report-empty' => '无评分',
	'articlefeedback-report-ratings' => '$1人评分',
	'articlefeedback-field-trustworthy-label' => '可信度',
	'articlefeedback-field-trustworthy-tip' => '你觉得本条目有足够的参考文献，并且这些文献的来源可靠吗？',
	'articlefeedback-field-trustworthy-tooltip-1' => '缺乏可靠来源',
	'articlefeedback-field-trustworthy-tooltip-2' => '可靠来源很少',
	'articlefeedback-field-trustworthy-tooltip-3' => '有很多可靠来源',
	'articlefeedback-field-trustworthy-tooltip-4' => '来源相当可靠',
	'articlefeedback-field-trustworthy-tooltip-5' => '来源绝对可靠',
	'articlefeedback-field-complete-label' => '完整性',
	'articlefeedback-field-complete-tip' => '您觉得本条目是否已经涵盖了所有必要的内容？',
	'articlefeedback-field-complete-tooltip-1' => '缺少绝大多数信息',
	'articlefeedback-field-complete-tooltip-2' => '只含有少量信息',
	'articlefeedback-field-complete-tooltip-3' => '包括了主要的信息，但是还缺少很多',
	'articlefeedback-field-complete-tooltip-4' => '包括了大部分主要的信息',
	'articlefeedback-field-complete-tooltip-5' => '完整全面',
	'articlefeedback-field-objective-label' => '客观性',
	'articlefeedback-field-objective-tip' => '你觉得本条目所描述的所有观点对相关问题的表述是否公平合理，具有代表性？',
	'articlefeedback-field-objective-tooltip-1' => '存在严重的偏见',
	'articlefeedback-field-objective-tooltip-2' => '有一定偏见',
	'articlefeedback-field-objective-tooltip-3' => '稍有偏见',
	'articlefeedback-field-objective-tooltip-4' => '没有明显的偏见',
	'articlefeedback-field-objective-tooltip-5' => '完全没有偏见',
	'articlefeedback-field-wellwritten-label' => '可读性',
	'articlefeedback-field-wellwritten-tip' => '你觉得本条目内容的组织和撰写是否精心完美？',
	'articlefeedback-field-wellwritten-tooltip-1' => '不知所云',
	'articlefeedback-field-wellwritten-tooltip-2' => '难以理解',
	'articlefeedback-field-wellwritten-tooltip-3' => '比较清晰',
	'articlefeedback-field-wellwritten-tooltip-4' => '相当清晰',
	'articlefeedback-field-wellwritten-tooltip-5' => '非常清晰',
	'articlefeedback-pitch-reject' => '以后再说',
	'articlefeedback-pitch-or' => '或者',
	'articlefeedback-pitch-thanks' => '谢谢！你的评分已保存。',
	'articlefeedback-pitch-join-message' => '您要创建帐户吗？',
	'articlefeedback-pitch-join-body' => '帐户将帮助您跟踪您所做的编辑，参与讨论，并成为社群的一分子。',
	'articlefeedback-pitch-join-accept' => '创建帐户',
	'articlefeedback-pitch-join-login' => '登录',
	'articlefeedback-pitch-edit-message' => '您知道您可以编辑这个页面吗？',
	'articlefeedback-pitch-edit-accept' => '编辑本页',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => '今日评分动态',
	'articleFeedback-table-caption-dailyhighs' => '评分最高的条目：$1',
	'articleFeedback-table-caption-dailylows' => '评分最低的条目：$1',
	'articleFeedback-table-caption-weeklymostchanged' => '本周最多更改',
	'articleFeedback-table-caption-recentlows' => '近期低分',
	'articleFeedback-table-heading-page' => '页面',
	'articleFeedback-table-heading-average' => '平均',
	'articleFeedback-copy-above-highlow-tables' => '这是一个实验性功能。请在 [$1 讨论页] 提供反馈意见。',
	'articlefeedback-dashboard-bottom' => "'''注意'''：我们仍将尝试用各种不同的方式在面板上组织条目。目前，此面板包括下列条目：
* 最高或最低分的条目：在过去24小时内至少得到10次评分的条目。平均值计算以过去24小时内提交的所有评分为准。
* 近期低分：过去24小时内，在任何类别得到过70%或低分（2星或更低）的条目。只会展示在过去24小时内至少得到10次评分的条目。",
	'articlefeedback-disable-preference' => '不在页面上显示条目评分工具',
	'articlefeedback-emailcapture-response-body' => '您好！

谢谢您表示愿意帮助我们改善{{SITENAME}}。

请花一点时间，点击下面的链接来确认您的电子邮件：

$1

您还可以访问：

$2

然后输入下列确认码：

$3

我们会在短期内联系您，并向您介绍帮助我们改善{{SITENAME}}的方式。

如果这项请求并非由您发起，请忽略这封电子邮件，我们不会再向您发送任何邮件。

祝好，致谢，
{{SITENAME}}团队',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Anakmalaysia
 * @author Hydra
 * @author Mark85296341
 * @author Shizhao
 * @author Simon Shek
 * @author Waihorace
 * @author 白布飘扬
 */
$messages['zh-hant'] = array(
	'articlefeedback' => '條目評分公告板',
	'articlefeedback-desc' => '條目評分',
	'articlefeedback-error' => '發生了錯誤。請稍後再試。',
	'articlefeedback-form-switch-label' => '評價本頁',
	'articlefeedback-form-panel-title' => '評價本頁',
	'articlefeedback-form-panel-explanation' => '這是什麼？',
	'articlefeedback-form-panel-explanation-link' => 'Project:条目评分工具',
	'articlefeedback-form-panel-clear' => '刪除本次評分',
	'articlefeedback-form-panel-expertise' => '我非常了解與本主題相關的知識（可選）',
	'articlefeedback-form-panel-expertise-studies' => '我有與其有關學院/大學學位',
	'articlefeedback-form-panel-expertise-profession' => '這是我專業的一部分',
	'articlefeedback-form-panel-expertise-hobby' => '這是一個深刻個人興趣',
	'articlefeedback-form-panel-expertise-other' => '我的知識來源不在此列',
	'articlefeedback-form-panel-helpimprove' => '我想幫助改善維基百科，請給我發送一封電子郵件（可選）',
	'articlefeedback-form-panel-helpimprove-note' => '我們將向您發送確認電子郵件。基於$1，我們不會與第三方分享您的地址。',
	'articlefeedback-form-panel-helpimprove-privacy' => '反饋隱私政策',
	'articlefeedback-form-panel-submit' => '提交評分',
	'articlefeedback-form-panel-pending' => '你的評分尚未提交',
	'articlefeedback-form-panel-success' => '保存成功',
	'articlefeedback-form-panel-expiry-title' => '你的評分已過期',
	'articlefeedback-form-panel-expiry-message' => '請重新評估本頁並重新評分。',
	'articlefeedback-report-switch-label' => '查看本頁評分',
	'articlefeedback-report-panel-title' => '本頁評分',
	'articlefeedback-report-panel-description' => '目前平均評分。',
	'articlefeedback-report-empty' => '無評分',
	'articlefeedback-report-ratings' => '$1 評級',
	'articlefeedback-field-trustworthy-label' => '可靠',
	'articlefeedback-field-trustworthy-tip' => '你覺得這個頁面是否已經有足夠引文，以及這些引文是來自可靠來源嗎？',
	'articlefeedback-field-trustworthy-tooltip-1' => '缺乏可靠來源',
	'articlefeedback-field-trustworthy-tooltip-2' => '很少可靠来源',
	'articlefeedback-field-trustworthy-tooltip-3' => '充足可靠來源',
	'articlefeedback-field-trustworthy-tooltip-4' => '優質可靠來源',
	'articlefeedback-field-trustworthy-tooltip-5' => '完美可靠来源',
	'articlefeedback-field-complete-label' => '完成',
	'articlefeedback-field-complete-tip' => '您覺得此頁內容基本上是否已經全面涵蓋了該主題相關的內容？',
	'articlefeedback-field-complete-tooltip-1' => '缺少絕大多數信息',
	'articlefeedback-field-complete-tooltip-2' => '包含一些信息',
	'articlefeedback-field-complete-tooltip-3' => '包含關鍵信息，但還有缺少',
	'articlefeedback-field-complete-tooltip-4' => '包含大部分關鍵的信息',
	'articlefeedback-field-complete-tooltip-5' => '全面覆盖',
	'articlefeedback-field-objective-label' => '客觀性',
	'articlefeedback-field-objective-tip' => '你覺得本頁所顯示的觀點是否對本主題公平，能反映多方的意見？',
	'articlefeedback-field-objective-tooltip-1' => '嚴重偏見',
	'articlefeedback-field-objective-tooltip-2' => '有些偏見',
	'articlefeedback-field-objective-tooltip-3' => '稍有偏見',
	'articlefeedback-field-objective-tooltip-4' => '沒有明顯的偏見',
	'articlefeedback-field-objective-tooltip-5' => '完全不帶偏見',
	'articlefeedback-field-wellwritten-label' => '可讀性',
	'articlefeedback-field-wellwritten-tip' => '你覺得此頁內容組織和撰寫是否完美？',
	'articlefeedback-field-wellwritten-tooltip-1' => '不可理解',
	'articlefeedback-field-wellwritten-tooltip-2' => '很難理解',
	'articlefeedback-field-wellwritten-tooltip-3' => '足够清晰',
	'articlefeedback-field-wellwritten-tooltip-4' => '清楚明確',
	'articlefeedback-field-wellwritten-tooltip-5' => '非常清晰',
	'articlefeedback-pitch-reject' => '也許以後再說',
	'articlefeedback-pitch-or' => '或者',
	'articlefeedback-pitch-thanks' => '謝謝！您的評分已保存。',
	'articlefeedback-pitch-join-message' => '你想要創建帳戶嗎？',
	'articlefeedback-pitch-join-body' => '帳戶將幫助您跟蹤您所做的編輯，參與討論，並成為社區的一部分。',
	'articlefeedback-pitch-join-accept' => '創建帳戶',
	'articlefeedback-pitch-join-login' => '登入',
	'articlefeedback-pitch-edit-message' => '您知道您可以編輯此頁嗎？',
	'articlefeedback-pitch-edit-accept' => '編輯此頁',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => '今天的新鮮事',
	'articleFeedback-table-caption-dailyhighs' => '最高評級的頁面：$1',
	'articleFeedback-table-caption-dailylows' => '最低評級的頁面：$1',
	'articleFeedback-table-caption-weeklymostchanged' => '本週最多改變',
	'articleFeedback-table-caption-recentlows' => '近期低點',
	'articleFeedback-table-heading-page' => '頁面',
	'articleFeedback-table-heading-average' => '平均',
	'articleFeedback-copy-above-highlow-tables' => '這是一個試驗性的功能。請在[$1 討論頁]提供反饋意見。',
	'articlefeedback-dashboard-bottom' => "'''注意'''：我們仍將嘗試用各種不同的方式在面板上組織條目。目前，此面板包括下列條目：
* 最高或最低分的頁面：在過去24小時內至少得到10次評分的條目。平均值計算以過去24小時內提交的所有評分為準。
* 近期低分：過去24小時內，在任何類別得到過70%或低分（2星或更低）的條目。只會展示在過去24小時內至少得到10次評分的條目。",
	'articlefeedback-disable-preference' => '不在頁面顯示條目反饋部件',
	'articlefeedback-emailcapture-response-body' => '您好！

謝謝您表示願意幫助我們改善{{SITENAME}}。

請花一點時間，點擊下面的鏈接來確認您的電子郵件：

$1

您還可以訪問：

$2

然後輸入下列確認碼：

$3

我們會在短期內聯繫您，並向您介紹幫助我們改善{{SITENAME}}的方式。

如果這項請求並非由您發起，請忽略這封電子郵件，我們不會再向您發送任何郵件。

祝好，致謝，
{{SITENAME}}團隊',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author 白布飘扬
 */
$messages['zh-hk'] = array(
	'articlefeedback' => '條目評分公告板',
	'articlefeedback-desc' => '條目評分',
	'articlefeedback-error' => '發生了錯誤。請稍後再試。',
	'articlefeedback-form-switch-label' => '給本文評分',
	'articlefeedback-form-panel-title' => '給本文評分',
	'articlefeedback-form-panel-explanation' => '這是什麼？',
	'articlefeedback-form-panel-explanation-link' => 'Project:条目评分工具',
	'articlefeedback-form-panel-clear' => '移除該評分',
	'articlefeedback-form-panel-expertise' => '我非常了解與本主題相關的知識（可選）',
	'articlefeedback-form-panel-expertise-studies' => '我有與其有關的大學學位',
	'articlefeedback-form-panel-expertise-profession' => '這是我專業的一部分',
	'articlefeedback-form-panel-expertise-hobby' => '本人對此有深厚的興趣',
	'articlefeedback-form-panel-expertise-other' => '我的知識來源不在此列',
	'articlefeedback-form-panel-helpimprove' => '我想幫助改善維基百科，請給我發送一封電子郵件（可選）',
	'articlefeedback-form-panel-helpimprove-note' => '我們將向您發送確認電子郵件。我們不會與任何人分享您的地址。$1',
	'articlefeedback-form-panel-helpimprove-privacy' => '反饋隱私政策',
	'articlefeedback-form-panel-submit' => '提交評分',
	'articlefeedback-form-panel-pending' => '你的評分尚未提交',
	'articlefeedback-form-panel-success' => '保存成功',
	'articlefeedback-form-panel-expiry-title' => '你的評分已過期',
	'articlefeedback-form-panel-expiry-message' => '請重新評估本頁並重新評分。',
	'articlefeedback-report-switch-label' => '查看本頁評分',
	'articlefeedback-report-panel-title' => '本頁評分',
	'articlefeedback-report-panel-description' => '目前平均評分。',
	'articlefeedback-report-empty' => '無評分',
	'articlefeedback-report-ratings' => '$1人評級',
	'articlefeedback-field-trustworthy-label' => '可信度',
	'articlefeedback-field-trustworthy-tip' => '你覺得本條目有足夠的參考文獻，並且這些文獻的來源可靠嗎？',
	'articlefeedback-field-trustworthy-tooltip-1' => '缺乏可靠來源',
	'articlefeedback-field-trustworthy-tooltip-2' => '很少可靠來源',
	'articlefeedback-field-trustworthy-tooltip-3' => '有很多可靠來源',
	'articlefeedback-field-trustworthy-tooltip-4' => '來源相當可靠',
	'articlefeedback-field-trustworthy-tooltip-5' => '來源絕對可靠',
	'articlefeedback-field-complete-label' => '完整性',
	'articlefeedback-field-complete-tip' => '您覺得本條目是否已經涵蓋了所有必要的內容？',
	'articlefeedback-field-complete-tooltip-1' => '缺少絕大多數信息',
	'articlefeedback-field-complete-tooltip-2' => '只含有少量信息',
	'articlefeedback-field-complete-tooltip-3' => '包含關鍵信息，但還有所不足',
	'articlefeedback-field-complete-tooltip-4' => '包含大部分關鍵的信息',
	'articlefeedback-field-complete-tooltip-5' => '全面完整',
	'articlefeedback-field-objective-label' => '客觀性',
	'articlefeedback-field-objective-tip' => '你是否覺得本條目公正合理地描述了各方觀點？',
	'articlefeedback-field-objective-tooltip-1' => '存在嚴重的偏見',
	'articlefeedback-field-objective-tooltip-2' => '有一定偏見',
	'articlefeedback-field-objective-tooltip-3' => '稍有偏見',
	'articlefeedback-field-objective-tooltip-4' => '沒有明顯的偏見',
	'articlefeedback-field-objective-tooltip-5' => '完全不帶偏見',
	'articlefeedback-field-wellwritten-label' => '可讀性',
	'articlefeedback-field-wellwritten-tip' => '你覺得本條目內容的組織和撰寫是否精心完美？',
	'articlefeedback-field-wellwritten-tooltip-1' => '不知所云',
	'articlefeedback-field-wellwritten-tooltip-2' => '難以理解',
	'articlefeedback-field-wellwritten-tooltip-3' => '比較清晰',
	'articlefeedback-field-wellwritten-tooltip-4' => '相當清晰',
	'articlefeedback-field-wellwritten-tooltip-5' => '非常清晰',
	'articlefeedback-pitch-reject' => '以後再說',
	'articlefeedback-pitch-or' => '或者',
	'articlefeedback-pitch-thanks' => '謝謝！您的評分已保存。',
	'articlefeedback-pitch-join-message' => '你要創建帳戶嗎？',
	'articlefeedback-pitch-join-body' => '帳戶將幫助您跟蹤您所做的編輯，參與討論，並成為社區的一部分。',
	'articlefeedback-pitch-join-accept' => '創建帳戶',
	'articlefeedback-pitch-join-login' => '登入',
	'articlefeedback-pitch-edit-message' => '您知道您可以編輯此頁嗎？',
	'articlefeedback-pitch-edit-accept' => '編輯此頁',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => '今日評分動態',
	'articleFeedback-table-caption-dailyhighs' => '評分最高的條目：$1',
	'articleFeedback-table-caption-dailylows' => '評分最低的條目：$1',
	'articleFeedback-table-caption-weeklymostchanged' => '本週最多更改',
	'articleFeedback-table-caption-recentlows' => '近期低點',
	'articleFeedback-table-heading-page' => '頁面',
	'articleFeedback-table-heading-average' => '平均',
	'articleFeedback-copy-above-highlow-tables' => '這是一個試驗性功能。請在[$1 討論頁]提供反饋意見。',
	'articlefeedback-dashboard-bottom' => "'''注意'''：我們仍將嘗試用各種不同的方式在面板上組織條目。目前，此面板包括下列條目：
* 最高或最低分的頁面：在過去24小時內至少得到10次評分的條目。平均值計算以過去24小時內提交的所有評分為準。
* 近期低分：過去24小時內，在任何類別得到過70%或低分（2星或更低）的條目。只會展示在過去24小時內至少得到10次評分的條目。",
	'articlefeedback-disable-preference' => '不在頁面上顯示條目評分工具',
	'articlefeedback-emailcapture-response-body' => '謝謝您表示願意幫助我們改善{{SITENAME}}。

請花一點時間，點擊下面的鏈接來確認您的電子郵件：

$1

您還可以訪問：

$2

然後輸入下列確認碼：

$3

我們會在短期內聯繫您，並向您介紹幫助我們改善{{SITENAME}}的方式。

如果這項請求並非由您發起，請忽略這封電子郵件，我們不會再向您發送任何郵件。

祝好，致謝，
{{SITENAME}}團隊',
);

/** Chinese (Taiwan) (中文（台灣）‎)
 * @author 白布飘扬
 */
$messages['zh-tw'] = array(
	'articlefeedback' => '條目評分公告板',
	'articlefeedback-desc' => '條目評分',
	'articlefeedback-error' => '發生了錯誤。請稍後再試。',
	'articlefeedback-form-switch-label' => '給本文評分',
	'articlefeedback-form-panel-title' => '給本文評分',
	'articlefeedback-form-panel-explanation' => '這是什麼？',
	'articlefeedback-form-panel-explanation-link' => 'Project:条目评分工具',
	'articlefeedback-form-panel-clear' => '移除該評分',
	'articlefeedback-form-panel-expertise' => '我非常了解與本主題相關的知識（可選）',
	'articlefeedback-form-panel-expertise-studies' => '我有與其有關學院/大學學位',
	'articlefeedback-form-panel-expertise-profession' => '這是我專業的一部分',
	'articlefeedback-form-panel-expertise-hobby' => '個人對此有深厚的興趣',
	'articlefeedback-form-panel-expertise-other' => '此處未列出我的知識的來源',
	'articlefeedback-form-panel-helpimprove' => '我想幫助改善維基百科，請給我發送一封電子郵件（可選）',
	'articlefeedback-form-panel-helpimprove-note' => '我們將向您發送確認電子郵件。基於$1，我們不會與任何人分享您的地址。',
	'articlefeedback-form-panel-helpimprove-privacy' => '反饋隱私政策',
	'articlefeedback-form-panel-submit' => '提交評分',
	'articlefeedback-form-panel-pending' => '你的評分尚未提交',
	'articlefeedback-form-panel-success' => '保存成功',
	'articlefeedback-form-panel-expiry-title' => '你的評分已過期',
	'articlefeedback-form-panel-expiry-message' => '請重新評估本頁並重新評分。',
	'articlefeedback-report-switch-label' => '查看本頁評分',
	'articlefeedback-report-panel-title' => '本頁評分',
	'articlefeedback-report-panel-description' => '目前平均評分',
	'articlefeedback-report-empty' => '無評分',
	'articlefeedback-report-ratings' => '$1人評分',
	'articlefeedback-field-trustworthy-label' => '可信度',
	'articlefeedback-field-trustworthy-tip' => '你覺得本條目有足夠的參考文獻，並且這些文獻的來源可靠嗎？',
	'articlefeedback-field-trustworthy-tooltip-1' => '缺乏可靠來源',
	'articlefeedback-field-trustworthy-tooltip-2' => '很少可靠来源',
	'articlefeedback-field-trustworthy-tooltip-3' => '有很多可靠來源',
	'articlefeedback-field-trustworthy-tooltip-4' => '來源相當可靠',
	'articlefeedback-field-trustworthy-tooltip-5' => '來源絕對可靠',
	'articlefeedback-field-complete-label' => '完整性',
	'articlefeedback-field-complete-tip' => '您覺得本條目是否已經涵蓋了所有必要的內容？',
	'articlefeedback-field-complete-tooltip-1' => '缺少絕大多數信息',
	'articlefeedback-field-complete-tooltip-2' => '只含有少量信息',
	'articlefeedback-field-complete-tooltip-3' => '包含關鍵信息，但仍有所不足',
	'articlefeedback-field-complete-tooltip-4' => '包含了大部分關鍵信息',
	'articlefeedback-field-complete-tooltip-5' => '全面完整',
	'articlefeedback-field-objective-label' => '客觀性',
	'articlefeedback-field-objective-tip' => '你覺得本條目是否已經公正合理地描述了各方觀點？',
	'articlefeedback-field-objective-tooltip-1' => '存在嚴重的偏見',
	'articlefeedback-field-objective-tooltip-2' => '有一定偏見',
	'articlefeedback-field-objective-tooltip-3' => '稍有偏見',
	'articlefeedback-field-objective-tooltip-4' => '沒有明顯的偏見',
	'articlefeedback-field-objective-tooltip-5' => '完全不帶偏見',
	'articlefeedback-field-wellwritten-label' => '可讀性',
	'articlefeedback-field-wellwritten-tip' => '你覺得本條目內容的組織和撰寫是否精心完美？',
	'articlefeedback-field-wellwritten-tooltip-1' => '不知所云',
	'articlefeedback-field-wellwritten-tooltip-2' => '難以理解',
	'articlefeedback-field-wellwritten-tooltip-3' => '比較清晰',
	'articlefeedback-field-wellwritten-tooltip-4' => '相當清晰',
	'articlefeedback-field-wellwritten-tooltip-5' => '非常清晰',
	'articlefeedback-pitch-reject' => '以後再說',
	'articlefeedback-pitch-or' => '或者',
	'articlefeedback-pitch-thanks' => '謝謝！您的評分已保存。',
	'articlefeedback-pitch-join-message' => '你想要創建帳戶嗎？',
	'articlefeedback-pitch-join-body' => '帳戶將幫助您跟蹤您所做的編輯，參與討論，並成為社區的一部分。',
	'articlefeedback-pitch-join-accept' => '創建帳戶',
	'articlefeedback-pitch-join-login' => '登入',
	'articlefeedback-pitch-edit-message' => '您知道您可以編輯此頁嗎？',
	'articlefeedback-pitch-edit-accept' => '編輯本頁',
	'articlefeedback-privacyurl' => 'http://wikimediafoundation.org/wiki/Feedback_privacy_statement',
	'articleFeedback-table-caption-dailyhighsandlows' => '今日評分動態',
	'articleFeedback-table-caption-dailyhighs' => '評分最高的條目：$1',
	'articleFeedback-table-caption-dailylows' => '評分最低的條目：$1',
	'articleFeedback-table-caption-weeklymostchanged' => '本週最多更改',
	'articleFeedback-table-caption-recentlows' => '近期低分',
	'articleFeedback-table-heading-page' => '頁面',
	'articleFeedback-table-heading-average' => '平均',
	'articleFeedback-copy-above-highlow-tables' => '這是一項試驗性功能。請在[$1 討論頁]提供反饋意見。',
	'articlefeedback-dashboard-bottom' => "'''注意'''：我們仍將嘗試用各種不同的方式在面板上組織條目。目前，此面板包括下列條目：
* 最高或最低分的頁面：在過去24小時內至少得到10次評分的條目。平均值計算以過去24小時內提交的所有評分為準。
* 近期低分：過去24小時內，在任何類別得到過70%或低分（2星或更低）的條目。只會展示在過去24小時內至少得到10次評分的條目。",
	'articlefeedback-disable-preference' => '不在頁面上顯示條目評分工具',
	'articlefeedback-emailcapture-response-body' => '您好！

謝謝您表示願意幫助我們改善{{SITENAME}}。

請花一點時間，點擊下面的鏈接來確認您的電子郵件：

$1

您還可以訪問：

$2

然後輸入下列確認碼：

$3

我們會在短期內聯繫您，並向您介紹幫助我們改善{{SITENAME}}的方式。

如果這項請求並非由您發起，請忽略這封電子郵件，我們不會再向您發送任何郵件。

祝好，致謝，
{{SITENAME}}團隊',
);
