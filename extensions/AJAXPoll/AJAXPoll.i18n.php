<?php
/**
 * Internationalization file for the AJAX Poll extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Dariusz Siedlecki
 * @author Thomas Gries
 */
$messages['en'] = array(
	'ajaxpoll-desc' => 'Allows AJAX-based polls with <tt>&lt;poll&gt;</tt> tag',
	////'ajaxpoll-tracking-category' => 'Pages with a poll',
	'ajaxpoll-vote-update' => 'Your vote has been updated.',
	'ajaxpoll-vote-add' => 'Your vote has been added.',
	'ajaxpoll-vote-error' => 'There was a problem with processing your vote, please try again.',
	'ajaxpoll-percent-votes' => '$1% of all votes',
	'ajaxpoll-your-vote' => 'You already voted for "$1" on $2, you can change your vote by clicking an answer below.',
	'ajaxpoll-no-vote' => 'Please vote below.', // http://trac.wikia-code.com/changeset/867
	'ajaxpoll-info' => 'There {{PLURAL:$1|was one vote|were $1 votes}} since the poll was created on $2.',
	'ajaxpoll-submitting' => 'Please wait, submitting your vote.',
	'ajaxpoll-vote-permission' => 'You are not entitled to vote.',
	'ajaxpoll-revoke-vote' => 'I want to revoke my vote',
	'ajaxpoll-vote-revoked' => 'You succesfully revoked your vote.',

	'right-ajaxpoll-vote' => 'Can vote in AJAX-based polls',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'ajaxpoll-desc' => '{{desc|name=AJAX Poll|url=http://www.mediawiki.org/wiki/Extension:AJAX_Poll}}',
	////'ajaxpoll-tracking-category' => 'The name of a category for all pages which use the &lt;poll&gt; parser extension tag. The category is automatically added unless the feature is disabled.',
	'ajaxpoll-percent-votes' => '$1 is the percentage number of the votes',
	'ajaxpoll-your-vote' => '$1 is the answer name, $2 is the date when the answer was casted',
	'ajaxpoll-info' => '$1 is the number of votes, $2 is when the poll was started',
	'ajaxpoll-vote-permission' => 'Text for viewers who do not have the right to vote',
	'ajaxpoll-revoke-vote' => 'Voters can revoke their vote and this is the message text to be clicked when a voter wants to revoke a previous vote. The text is only shown for persons who already voted, in an extra line below the block of answers.',
	'ajaxpoll-vote-revoked' => 'System response that the vote was successfully revoked.',
	'right-ajaxpoll-vote' => '{{doc-right|ajaxpoll-vote}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'ajaxpoll-vote-update' => 'U stem is opgedateer.',
	'ajaxpoll-vote-add' => 'U stem is bygevoeg.',
	'ajaxpoll-percent-votes' => '$1% van alle stemme',
	'ajaxpoll-no-vote' => 'Stem asseblief hier onder.',
);

/** Arabic (العربية)
 * @author Mido
 * @author OsamaK
 * @author Zanatos
 */
$messages['ar'] = array(
	'ajaxpoll-vote-update' => 'تم تحديث صوتك.',
	'ajaxpoll-vote-add' => 'تم إضافة تصويتك',
	'ajaxpoll-info' => 'هناك {{PLURAL:$1||تصويتا واحدا|تصويتين|$1 تصويت|$1 تصويتا|$1 تصويت}} منذ بداية التصويت في $2.',
	'ajaxpoll-submitting' => 'من فضلك انتظر، يرسل صوتك.',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'ajaxpoll-desc' => "Permite les encuestes basaes n'AJAX con <tt>&lt;poll&gt;</tt>",
	////'ajaxpoll-tracking-category' => 'Páxines con una encuesta',
	'ajaxpoll-vote-update' => "El to votu s'anovó.",
	'ajaxpoll-vote-add' => "Amestóse'l to votu.",
	'ajaxpoll-vote-error' => 'Hebo un problema al procesar el to votu; tentalo otra vuelta, por favor.',
	'ajaxpoll-percent-votes' => '$1% de tolos votos',
	'ajaxpoll-your-vote' => 'Ya votasti por "$1" el $2, pues camudar el to votu calcando nuna de les rempuestes d\'abaxo.',
	'ajaxpoll-no-vote' => 'Por favor, vota abaxo.',
	'ajaxpoll-info' => 'Hebo {{PLURAL:$1|un votu|$1 votos}} dende que se creó la encuesta el $2.',
	'ajaxpoll-submitting' => "Aguarda, por favor, ta unviandose'l to votu.",
	'ajaxpoll-vote-permission' => 'Nun tienes drechu al votu.',
	'ajaxpoll-revoke-vote' => 'Quiero anular el mio votu',
	'ajaxpoll-vote-revoked' => 'Anulasti el to votu correutamente.',
	'right-ajaxpoll-vote' => "Pue votar nes encuestes basaes n'AJAX",
);

/** South Azerbaijani (تورکجه)
 * @author Amir a57
 * @author Mousa
 */
$messages['azb'] = array(
	'ajaxpoll-desc' => '<tt>&lt;poll&gt;</tt> اِتیکِتی یاردیمی ایله AJAX-ه دایانان سس-وئرمگه ایجازه وئرر',
	////'ajaxpoll-tracking-category' => 'سس وئرمه‌لری اولان صحیفه‌لر',
	'ajaxpoll-vote-update' => 'سیزین سسینیز گونجل‌لنیبدیر.',
	'ajaxpoll-vote-add' => 'اویونوز علاوه اولوندو.',
	'ajaxpoll-vote-error' => 'سیزین سسینیزی اعمال ائتمک‌ده بیر موشکول قاباغا گلدی، لوطفاً یئنی‌دن چالیشین.',
	'ajaxpoll-percent-votes' => 'بوتون سسلرین $1٪-ی',
	'ajaxpoll-your-vote' => 'سیز قاباقجادان $2-ده «$1»-ه سس وئرمیسینیز، آشاغیدا بیر جاوابی تیکلاماقلا سسینیزی دَییشه بیلرسینیز.',
	'ajaxpoll-no-vote' => 'لوطفاً آشاغیدا سس وئرین.',
	'ajaxpoll-info' => 'سس وئرمه $2-ده یاراناندان بویانا {{PLURAL:$1|بیر|$1}} سس وار ایمیش.',
	'ajaxpoll-submitting' => 'لوطفاً دؤزون، سیزین سسینیز گؤندریلیر.',
	'ajaxpoll-vote-permission' => 'سیزین سس وئرمک حاقینیز یوخدور.',
	'ajaxpoll-revoke-vote' => 'من سسیمی گئری آلماق ایستیرم',
	'ajaxpoll-vote-revoked' => 'سیزین اوغورلا سسینیز گئری آلدینیز.',
	'right-ajaxpoll-vote' => 'AJAX-ی دایانان سس وئرمه‌لرده سس وئره بیلر',
);

/** Bashkir (башҡортса)
 * @author Sagan
 */
$messages['ba'] = array(
	'ajaxpoll-desc' => 'AJAX нигеҙендә <tt>&lt;poll&gt;</tt> тегы ярҙамы менән тауыш биреү мөмкинлеге бар',
	////'ajaxpoll-tracking-category' => 'Тауыш биреү бите',
	'ajaxpoll-vote-update' => 'Һеҙҙең тауыш биреү яңыртылды',
	'ajaxpoll-vote-add' => 'Һеҙҙең тауыш иҫәпкә алынды',
	'ajaxpoll-vote-error' => 'Һеҙҙең тауышты иҫәпкә алғанда хата китте, зинһар өсөн ҡабатлап ҡарағыҙ.',
	'ajaxpoll-percent-votes' => 'Бөтә тауыштың $1%',
	'ajaxpoll-your-vote' => 'Һеҙ тауыш бирҙегеҙ «$1» $2. Түбәндәге яуаптарҙы һайлап, яңынан тауыш бирә алаһығыҙ.',
	'ajaxpoll-no-vote' => 'Зинһар өсөн, түбәндә тауыш биреүҙә ҡатнашығыҙ.',
	'ajaxpoll-info' => '$2 тауыш биреү башланғандан башлап {{PLURAL:$1|кеше тауыш бирҙе}}.',
	'ajaxpoll-submitting' => 'Зинһар, һеҙҙең тауыш тураһында мәғлүмәт тапшырылғанын көтөгөз...',
	'ajaxpoll-vote-permission' => 'Һеҙҙең тауыш биреү хоҡуғы юҡ.',
	'ajaxpoll-revoke-vote' => 'Мин тауышымды кире алырға теләйем',
	'ajaxpoll-vote-revoked' => 'Һеҙ тауышығыҙҙы кире алдығыҙ.',
	'right-ajaxpoll-vote' => 'AJAX нигеҙендә һорау алыуҙа ҡатнаша алаһығыҙ.',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'ajaxpoll-desc' => 'Дазваляе AJAX-апытаньні, якія можна дадаць тэгам <tt>&lt;poll&gt;</tt>',
	////'ajaxpoll-tracking-category' => 'Старонкі з апытаньнямі',
	'ajaxpoll-vote-update' => 'Ваш голас быў абноўлены.',
	'ajaxpoll-vote-add' => 'Ваш голас быў даданы.',
	'ajaxpoll-vote-error' => 'Адбылася памылка падчас захаваньня Вашага голасу, калі ласка, паспрабуйце яшчэ.',
	'ajaxpoll-percent-votes' => '$1% ад усіх галасоў',
	'ajaxpoll-your-vote' => 'Вы ўжо прагаласавалі за варыянт «$1» $2, Вы можаце зьмяніць свой выбар, націснуўжы адзін з пададзеных ніжэй адказаў.',
	'ajaxpoll-no-vote' => 'Калі ласка, прагаласуйце ніжэй.',
	'ajaxpoll-info' => 'З моманту стварэньня галасаваньня $2 {{PLURAL:$1|пададзены $1 голас|пададзеныя $1 галасы|пададзена $1 галасоў}}.',
	'ajaxpoll-submitting' => 'Калі ласкай, чакайце, ваш голас дадаецца.',
	'ajaxpoll-vote-permission' => 'Вы ня можаце галасаваць.',
	'ajaxpoll-revoke-vote' => 'Я хачу адклікаць мой голас',
	'ajaxpoll-vote-revoked' => 'Вы пасьпяхова адклікалі ваш голас.',
	'right-ajaxpoll-vote' => 'магчымасьць галасаваць у AJAX-апытаньнях',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'ajaxpoll-percent-votes' => '$1% от всички гласове',
);

/** Bengali (বাংলা)
 * @author Nirupam
 */
$messages['bn'] = array(
	////'ajaxpoll-tracking-category' => 'আমার নাম নিরুপম । আমি কলকাতাই থাকি । আমি পুনে তে পরাশুনা করি ।',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	////'ajaxpoll-tracking-category' => 'Pajennoù enno ur sontadeg',
	'ajaxpoll-vote-update' => 'Hizivaet eo bet ho vot.',
	'ajaxpoll-vote-add' => 'Ouzhpennet eo bet ho vot.',
	'ajaxpoll-vote-error' => "Ur gudenn a zo bet pa vezer oc'h ober war-dro ho vot. Mar plij klaskit adarre.",
	'ajaxpoll-percent-votes' => '$1% eus hollad ar mouezhioù',
	'ajaxpoll-your-vote' => 'Votet ho peus dija evit "$1" d\'an $2, tu \'zo deoc\'h kemmañ ho vot en ur klikañ war unan eus ar respontoù da heul.',
	'ajaxpoll-no-vote' => 'Mar plij votit amañ dindan.',
	'ajaxpoll-info' => "{{PLURAL:$1|vot|$1 vot}} zo bet abaoe ma'z eo bet krouet ar sontadeg war $2.",
	'ajaxpoll-submitting' => "Mar plij gortozit, emeur oc'h ober war-dro ho vot.",
	'ajaxpoll-vote-permission' => "Ne c'hellit ket votiñ.",
	'ajaxpoll-revoke-vote' => "C'hoant am eus da zistreiñ war ar pezh am eus votet",
);

/** Catalan (català)
 * @author Pitort
 */
$messages['ca'] = array(
	'ajaxpoll-desc' => "Permet les enquestes basades en AJAX amb l'etiqueta <tt>&lt;poll&gt;</tt>",
	////'ajaxpoll-tracking-category' => 'Pàgines amb una enquesta',
	'ajaxpoll-vote-update' => 'El vostre vot ha estat enregistrat.',
	'ajaxpoll-vote-add' => 'El vostre vot ha estat afegit.',
	'ajaxpoll-vote-error' => 'Hi ha hagut un problema en processar el vostre vot, si us plau torneu a provar una altra vegada.',
	'ajaxpoll-percent-votes' => '$1% del total de vots',
	'ajaxpoll-your-vote' => 'Vostè ja va votar per " $1 " el  $2, podeu canviar el vostre vot fent clic sobre una de les respostes que hi ha més avall.',
	'ajaxpoll-no-vote' => 'Si us plau, voteu a sota.',
	'ajaxpoll-info' => "Hi ha hagut {{PLURAL:$1|un vot|$1 vots}} des que l'enquesta va ser creada el $2.",
	'ajaxpoll-submitting' => 'Espereu si us plau, estem precessant el vostre vot.',
	'ajaxpoll-vote-permission' => 'No teniu dret a vot.',
	'ajaxpoll-revoke-vote' => 'Vull anul·lar el meu vot',
	'ajaxpoll-vote-revoked' => 'Heu anul·lat el vostre vot',
	'right-ajaxpoll-vote' => 'Podeu votar a les enquestes basades en AJAX',
);

/** Czech (česky)
 * @author Paxt
 */
$messages['cs'] = array(
	////'ajaxpoll-tracking-category' => 'Stránky s dotazníkem',
	'ajaxpoll-vote-update' => 'Váš hlas byl aktualizován.',
	'ajaxpoll-vote-add' => 'Váš hlas byl přidán.',
	'ajaxpoll-vote-error' => 'Došlo k potížím se zpracováním Vašeho hlasu, zkuste to prosím znovu.',
	'ajaxpoll-percent-votes' => '$1% všech hlasů',
	'ajaxpoll-your-vote' => 'Již jste hlasovali pro " $1 " na  $2 , svůj hlas můžete změnit klepnutím na  odpověď níže.',
	'ajaxpoll-no-vote' => 'Prosím hlasujte níže.',
	'ajaxpoll-info' => '{{PLURAL:$1|Odevzdán jeden hlas|Odevzdány $1 hlasy|Odevzdáno $1 hlasů}} od zahájení ankety dne $2.',
	'ajaxpoll-submitting' => 'Prosím čekejte, Váš hlas se zpracovává...',
	'ajaxpoll-vote-permission' => 'Nemáte oprávnění hlasovat.',
	'ajaxpoll-revoke-vote' => 'Chci odvolat svůj hlas',
	'ajaxpoll-vote-revoked' => 'Váš hlas byl úspěšně odvolán.',
	'right-ajaxpoll-vote' => 'Může hlasovat v anketách založených na AJAXu',
);

/** Danish (dansk)
 * @author Tjernobyl
 */
$messages['da'] = array(
	'ajaxpoll-desc' => 'Giver mulighed for AJAX-baserede afstemninger med <tt>&lt;poll&gt;</tt> tag',
	////'ajaxpoll-tracking-category' => 'Sider med en afstemning',
	'ajaxpoll-vote-update' => 'Din stemme er blevet opdateret.',
	'ajaxpoll-vote-add' => 'Din stemme er blevet afgivet.',
	'ajaxpoll-vote-error' => 'Der opstod et problem med behandlingen af din stemme, prøv igen.',
	'ajaxpoll-percent-votes' => '$1% af alle stemmer',
	'ajaxpoll-your-vote' => 'Du har allerede stemt på "$1" $2. Du kan ændre din stemme ved at klikke på et af de nedenstående svar.',
	'ajaxpoll-no-vote' => 'Stem venligst nedenfor.',
	'ajaxpoll-info' => 'Der var {{PLURAL:$1|en stemme|$1 stemmer}} siden afstemningen blev oprettet $2.',
	'ajaxpoll-submitting' => 'Vent venligst, din stemme bliver afsendt.',
	'ajaxpoll-vote-permission' => 'Du har ikke ret til at stemme.',
	'ajaxpoll-revoke-vote' => 'Jeg vil gerne tilbagekalde min stemme',
	'ajaxpoll-vote-revoked' => 'Du har nu tilbagekaldt din stemme.',
	'right-ajaxpoll-vote' => 'Kan stemme i AJAX-baserede afstemninger',
);

/** German (Deutsch)
 * @author Geitost
 * @author Kghbln
 * @author Tim 'Avatar' Bartel
 * @author Wikinaut
 */
$messages['de'] = array(
	'ajaxpoll-desc' => 'Ergänzt das Tag <code>&lt;poll&gt;</code> zum Erstellen AJAX-gestützter Umfragen',
	////'ajaxpoll-tracking-category' => 'Seiten mit einer Umfrage',
	'ajaxpoll-vote-update' => 'Deine Stimme wurde aktualisiert.',
	'ajaxpoll-vote-add' => 'Deine Stimme wurde gezählt.',
	'ajaxpoll-vote-error' => 'Es gab ein Problem beim Verarbeiten deiner Stimme. Probiere es bitte noch einmal.',
	'ajaxpoll-percent-votes' => '$1 % aller Stimmen',
	'ajaxpoll-your-vote' => 'Du hast bereits am $2 für „$1“ abgestimmt. Du kannst deine Stimme ändern, indem du eine der untenstehenden Antworten anklickst.',
	'ajaxpoll-no-vote' => 'Bitte stimme unten ab.',
	'ajaxpoll-info' => 'Es {{PLURAL:$1|wurde|wurden}} seit Erstellung der Umfrage am $2 {{PLURAL:$1|eine Stimme|$1 Stimmen}} abgegeben.',
	'ajaxpoll-submitting' => 'Bitte warte kurz. Deine Stimme wird verarbeitet.',
	'ajaxpoll-vote-permission' => 'Du bist nicht stimmberechtigt.',
	'ajaxpoll-revoke-vote' => 'Ich möchte meine Stimme widerrufen',
	'ajaxpoll-vote-revoked' => 'Du hast deine Stimme erfolgreich widerrufen.',
	'right-ajaxpoll-vote' => 'An AJAX-gestützen Umfragen teilnehmen',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Geitost
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'ajaxpoll-vote-update' => 'Ihre Stimme wurde aktualisiert.',
	'ajaxpoll-vote-add' => 'Ihre Stimme wurde gezählt.',
	'ajaxpoll-vote-error' => 'Es gab ein Problem beim Verarbeiten Ihrer Stimme. Probieren Sie es bitte noch einmal.',
	'ajaxpoll-your-vote' => 'Sie haben bereits am $2 für „$1“ abgestimmt. Sie können Ihre Stimme ändern, indem Sie eine der untenstehenden Antworten anklicken.',
	'ajaxpoll-no-vote' => 'Bitte stimmen Sie unten ab.',
	'ajaxpoll-submitting' => 'Bitte warten Sie kurz. Ihre Stimme wird verarbeitet.',
	'ajaxpoll-vote-permission' => 'Sie sind nicht stimmberechtigt.',
	'ajaxpoll-vote-revoked' => 'Sie haben Ihre Stimme erfolgreich widerrufen.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'ajaxpoll-percent-votes' => '$1% rey heme',
	'ajaxpoll-no-vote' => 'Reya xo bıni de bıde.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'ajaxpoll-desc' => 'Pśidawa toflicku <tt>&lt;poll&gt;</tt> za wótgłosowanja na zakłaźe AJAX',
	////'ajaxpoll-tracking-category' => 'Boki z wótgłosowanim',
	'ajaxpoll-vote-update' => 'Twójo wótgłosowanje jo se zaktualizěrowało.',
	'ajaxpoll-vote-add' => 'Twójo wótgłosowanje jo se pśidało.',
	'ajaxpoll-vote-error' => 'Jo problem był pśi pśeźěłowanju twójogo głosa, pšosym wopytaj hyšći raz.',
	'ajaxpoll-percent-votes' => '$1 % wšyknych głosow',
	'ajaxpoll-your-vote' => 'Sy južo $2 za "$1" wótgłosował, móžoš swój głos změniś, z tym až kliknjoš dołojce na wótegrono.',
	'ajaxpoll-no-vote' => 'Pšosym wótgłosuj dołojce.',
	'ajaxpoll-info' => '{{PLURAL:$1|Jo se jaden głos wótedał|Stej se $1 głosa wótedałej|Su se $1 głose wótedali|Jo se $1 głosow wótedało}}, wót casa ako wótgłosowanje jo se $2 napórało.',
	'ajaxpoll-submitting' => 'Pšosym cakaj, twój głos se pśeźěłujo.',
	'ajaxpoll-vote-permission' => 'Njamóžoš wótgłosowaś.',
	'ajaxpoll-revoke-vote' => 'Cu swój głos anulěrowaś',
	'ajaxpoll-vote-revoked' => 'Sy swój głos wuspěšnje anulěrował.',
	'right-ajaxpoll-vote' => 'Na wótgłosowanjach bazěrowanych na AJAX se wobźěliś',
);

/** Greek (Ελληνικά)
 * @author Glavkos
 * @author Protnet
 * @author ZaDiak
 * @author Περίεργος
 */
$messages['el'] = array(
	'ajaxpoll-desc' => 'Επιτρέπει δημοσκοπήσεις βασισμένες σε AJAX με ετικέτα <tt>&lt;poll&gt;</tt>',
	////'ajaxpoll-tracking-category' => 'Σελίδες με δημοσκόπηση',
	'ajaxpoll-vote-update' => 'Η ψήφος σας έχει ενημερωθεί.',
	'ajaxpoll-vote-add' => 'Η ψήφος σας προστέθηκε.',
	'ajaxpoll-vote-error' => 'Παρουσιάστηκε πρόβλημα κατά την επεξεργασία της ψήφους σας, παρακαλώ ξαναπροσπαθήστε.',
	'ajaxpoll-percent-votes' => '$1% επί των συνολικών ψήφων',
	'ajaxpoll-your-vote' => 'Έχετε ήδη ψηφίσει το $1 στο $2, μπορείτε να αλλάξετε τη ψήφο σας πατώντας μια απάντηση παρακάτω.',
	'ajaxpoll-no-vote' => 'Παρακαλώ ψηφίστε παρακάτω.',
	'ajaxpoll-info' => '{{PLURAL:$1|Υπήρξε μια ψήφος|Υπήρξαν $1 ψήφοι}} από την έναρξη της δημοσκόπησης στις $2.',
	'ajaxpoll-submitting' => 'Παρακαλώ περιμένετε,η ψήφο σας υποβάλλεται.',
	'ajaxpoll-vote-permission' => 'Δεν έχετε δικαίωμα να ψηφίσετε.',
	'ajaxpoll-revoke-vote' => 'Θέλω να ανακαλέσω την ψήφο μου',
	'ajaxpoll-vote-revoked' => 'Αποσύρατε επιτυχώς την ψήφο σας.',
	'right-ajaxpoll-vote' => 'Μπορεί να ψηφίσει σε δημοσκοπήσεις βασισμένες σε AJAX',
);

/** Esperanto (Esperanto)
 * @author ArnoLagrange
 */
$messages['eo'] = array(
	'ajaxpoll-desc' => 'Ebligas enketojn bazitajn sur AJAX per markilo <tt>&lt;poll&gt;</tt>',
	////'ajaxpoll-tracking-category' => 'Paĝoj kun enketo',
	'ajaxpoll-vote-update' => 'Via baloto estis ĝisdatigita',
	'ajaxpoll-vote-add' => 'Via baloto estis aldonita',
	'ajaxpoll-vote-error' => 'Estiĝis problemo kun pritrakto de via baloto, bonvolu reprovi.',
	'ajaxpoll-percent-votes' => '$1% el ĉiuj balotoj',
	'ajaxpoll-your-vote' => 'Vi jam balotis por "$1" je "$2", vi povas ŝanĝi vian baloton alklakante iun respondon sube.',
	'ajaxpoll-no-vote' => 'Bonvolu baloti sube.',
	'ajaxpoll-info' => 'Estis {{PLURAL:$1|unu baloto|$1 balotoj}} post kiam la enketo estis kreita sur  $2.',
	'ajaxpoll-submitting' => 'Bonvolu atendi dum traktado de via baloto.',
	'ajaxpoll-vote-permission' => 'Vi ne rajtas baloti.',
	'ajaxpoll-revoke-vote' => 'Mi volas nuligi mian baloton.',
	'ajaxpoll-vote-revoked' => 'Vi sukcese nuligis vian baloton.',
	'right-ajaxpoll-vote' => 'Povas baloti en enketoj bazitaj sur AJAX',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Bola
 */
$messages['es'] = array(
	'ajaxpoll-desc' => 'Permite encuestas basadas en AJAX con etiqueta <tt>&lt;poll&gt;</tt>',
	////'ajaxpoll-tracking-category' => 'Páginas con una encuesta',
	'ajaxpoll-vote-update' => 'Tu voto ha sido actualizado.',
	'ajaxpoll-vote-add' => 'Tu voto ha sido añadido.',
	'ajaxpoll-vote-error' => 'Ha habido un problema cuando comprobábamos tu voto, por favor, inténtalo de nuevo.',
	'ajaxpoll-percent-votes' => '$1% de todos los votos',
	'ajaxpoll-your-vote' => 'Ya votaste por "$1" el $2, puedes cambiar tu voto haciendo clic en una respuesta debajo.',
	'ajaxpoll-no-vote' => 'Por favor, vota debajo.',
	'ajaxpoll-info' => 'Ha habido {{PLURAL:$1|un voto|$1 votos}} desde que la encuesta fue creada el $2.',
	'ajaxpoll-submitting' => 'Por favor espera, estamos comprobando tu voto, ten paciencia.',
	'ajaxpoll-vote-permission' => 'No puede votar.',
	'ajaxpoll-revoke-vote' => 'Quiero revocar mi voto',
	'ajaxpoll-vote-revoked' => 'Revocó su voto correctamente .',
	'right-ajaxpoll-vote' => 'Puede votar en las encuestas basadas en AJAX',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'ajaxpoll-vote-update' => 'Sinu hääl on värskendatud.',
	'ajaxpoll-vote-add' => 'Sinu hääl on lisatud.',
	'ajaxpoll-percent-votes' => '$1% kõigist häältest',
	'ajaxpoll-no-vote' => 'Palun hääleta allpool.',
	'ajaxpoll-submitting' => 'Palun oota, sinu häält lisatakse.',
	'ajaxpoll-vote-permission' => 'Sul ei ole õigust hääletada.',
);

/** Persian (فارسی)
 * @author Mehdi
 * @author Mjbmr
 * @author Reza1615
 */
$messages['fa'] = array(
	////'ajaxpoll-tracking-category' => 'صفحات با یک نظرسنجی',
	'ajaxpoll-vote-update' => 'رأی شما به روز شد.',
	'ajaxpoll-vote-add' => 'رأی شما افزوده شد.',
	'ajaxpoll-percent-votes' => '$1%از کل آرا',
	'ajaxpoll-no-vote' => 'لطفاً رای خود را در زیر ثبت کنید.',
	'ajaxpoll-submitting' => 'لطفاً صبر کنید، درحال ثبت رای شما...',
	'ajaxpoll-vote-permission' => 'شما دارای شرایط لازم برای رای‌دادن نمی‌باشید.',
	'ajaxpoll-revoke-vote' => 'قصد دارم رأیم را واگردانی کنم',
	'ajaxpoll-vote-revoked' => 'رأی شما با موفقیت واگردانی شد.',
);

/** Finnish (suomi)
 * @author Jack Phoenix
 * @author Nike
 * @author Stryn
 */
$messages['fi'] = array(
	'ajaxpoll-desc' => 'Mahdollistaa AJAX-pohjaiset gallupit <tt>&lt;poll&gt;</tt>-tagilla',
	////'ajaxpoll-tracking-category' => 'Sivut, joissa on kysely',
	'ajaxpoll-vote-update' => 'Äänesi on päivitetty',
	'ajaxpoll-vote-add' => 'Äänesi on lisätty.',
	'ajaxpoll-vote-error' => 'Äänesi prosessoimisessa oli ongelma, yritä uudelleen.',
	'ajaxpoll-percent-votes' => '$1 % kaikista äänistä',
	'ajaxpoll-your-vote' => 'Äänestit jo vaihtoehtoa ”$1” $2, voit muuttaa ääntäsi napsauttamalla vastausta alempana',
	'ajaxpoll-no-vote' => 'Voit äänestää alempana.',
	'ajaxpoll-info' => '{{PLURAL:$1|Yksi ääni|$1 ääntä}} on annettu siitä lähtien kun tämä äänestys tehtiin, $2.',
	'ajaxpoll-submitting' => 'Odota hetki, äänesi lähetetään kirjattavaksi.',
	'ajaxpoll-vote-permission' => 'Sinulla ei ole oikeutta äänestää.',
	'ajaxpoll-revoke-vote' => 'Haluan peruuttaa ääneni',
	'ajaxpoll-vote-revoked' => 'Peruutit onnistuneesti äänesi.',
	'right-ajaxpoll-vote' => 'Voi äänestää AJAX-pohjaisissa kyselyissä',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Tim 'Avatar' Bartel
 */
$messages['fr'] = array(
	'ajaxpoll-desc' => 'Autorise les interrogations basées sur AJAX avec <tt>&lt;poll&gt;</tt> tag',
	////'ajaxpoll-tracking-category' => 'Pages avec un sondage',
	'ajaxpoll-vote-update' => 'Ta voix est actualisé.',
	'ajaxpoll-vote-add' => 'Ta voix était compté.',
	'ajaxpoll-vote-error' => "Il y avait une problème avec le traitement de ta voix. Essaie-cela s'il te plaît encore une fois.",
	'ajaxpoll-percent-votes' => '$1% de tous voix.',
	'ajaxpoll-your-vote' => 'Tu a déjà voté pour $1 (à $2). Tu peux changer ta voix, si tu cliques à l’une des réponses en bas.',
	'ajaxpoll-no-vote' => 'Vote en bas.',
	'ajaxpoll-info' => 'Il y avait {{PLURAL:$1|une voix|$1 voix}}, depuis l’élaboration du sondage au $2.',
	'ajaxpoll-submitting' => 'Attends une moment, ta voix est traité...',
	'ajaxpoll-vote-permission' => 'Vous ne pouvez pas voter.',
	'ajaxpoll-revoke-vote' => 'Je veux annuler mon vote',
	'ajaxpoll-vote-revoked' => 'Vous avez annulé votre vote.',
	'right-ajaxpoll-vote' => 'Peut voter dans des sondages basés sur AJAX',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	////'ajaxpoll-tracking-category' => 'Pâges avouéc un sondâjo',
	'ajaxpoll-percent-votes' => '$1 % de tôs los votos',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'ajaxpoll-desc' => 'Permite as enquisas baseadas en AJAX mediante a etiqueta <tt>&lt;poll&gt;</tt>',
	////'ajaxpoll-tracking-category' => 'Páxinas cunha enquisa',
	'ajaxpoll-vote-update' => 'Actualizouse o seu voto.',
	'ajaxpoll-vote-add' => 'Engadiuse o seu voto.',
	'ajaxpoll-vote-error' => 'Houbo algún problema co procesamento do seu voto. Por favor, inténteo de novo.',
	'ajaxpoll-percent-votes' => '$1% do total dos votos',
	'ajaxpoll-your-vote' => 'Xa votou por "$1" o $2. Pode cambiar o seu voto premendo nunha resposta das que aparecen a continuación.',
	'ajaxpoll-no-vote' => 'Por favor, vote a continuación.',
	'ajaxpoll-info' => '{{PLURAL:$1|Recibiuse un voto|Recibíronse $1 votos}} desde que a enquisa foi creada o $2.',
	'ajaxpoll-submitting' => 'Por favor, agarde durante o envío do seu voto.',
	'ajaxpoll-vote-permission' => 'Non pode votar.',
	'ajaxpoll-revoke-vote' => 'Quero anular o meu voto',
	'ajaxpoll-vote-revoked' => 'Anulou o voto correctamente.',
	'right-ajaxpoll-vote' => 'Pode votar nas enquisas baseadas en AJAX',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'ajaxpoll-desc' => 'Ergänzt s Tag <code>&lt;poll&gt;</code> zum Aalege vu AJAX-gstitzte Umfroge',
	////'ajaxpoll-tracking-category' => 'Syte mit ere Umfrog',
	'ajaxpoll-vote-update' => 'Dyy Stimm isch aktualisiert wore.',
	'ajaxpoll-vote-add' => 'Dyy Stimm isch zellt wore.',
	'ajaxpoll-vote-error' => 'S het e Probläm gee bi dr Verarbeitig vu Dyyre Stimm! Versuch s bitte nonemol.',
	'ajaxpoll-percent-votes' => '$1 % vu allne Stimme',
	'ajaxpoll-your-vote' => 'Du hesch scho am $2 fir „$1“ abgstimmt. Du chasch Dyy Stimm ändere, dur des ass eini vu dr Antworte drucksch, wu unte stehn.',
	'ajaxpoll-no-vote' => 'Bitte stimm unte ab.',
	'ajaxpoll-info' => 'Syt em Aalege vu dr Umfrog am $2 {{PLURAL:$1|isch ei Stimm|sin $1 Stimme}} abgee wore.',
	'ajaxpoll-submitting' => 'Bitte warte e Wyyli. Am Ibermittle vu Dyyre Stimm ...',
	'ajaxpoll-vote-permission' => 'Du bisch nit stimmbrächtigt.',
	'ajaxpoll-revoke-vote' => 'Ich wett myy Stimm widerruefe',
	'ajaxpoll-vote-revoked' => 'Du hesch Dyy Stimm erfolgryych widerruefe.',
	'right-ajaxpoll-vote' => 'Cha bi AJAX-gstitze Umfroge abstimme',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'ajaxpoll-desc' => 'אפשרות להוסיף הצבעות בטכנולוגיית AJAX באמצעות התג <tt>&lt;poll&gt;</tt>',
	////'ajaxpoll-tracking-category' => 'דפים עם סקר',
	'ajaxpoll-vote-update' => 'הקול שלך עודכן.',
	'ajaxpoll-vote-add' => 'הקול שלך נוסף.',
	'ajaxpoll-vote-error' => 'הייתה בעיה בעיבוד הקול שלך, נא לנסות שוב.',
	'ajaxpoll-percent-votes' => '$1% מכל הקולות.',
	'ajaxpoll-your-vote' => 'כבר הצבעת בעד "$1" ב{{GRAMMAR:תחילית|$2}}, אפשר לשנות את קולך באמצעות לחיצה על תשובה להלן.',
	'ajaxpoll-no-vote' => 'נא להצביע להלן.',
	'ajaxpoll-info' => '{{PLURAL:$1|נקלט קול אחד|נקלטו $1 קולות}} מאז שההצבעה נוצרה ב־$2.',
	'ajaxpoll-submitting' => 'נא להמתין הזמן שליחת הצבעתך.',
	'ajaxpoll-vote-permission' => 'אין לך זכות הצבעה.',
	'ajaxpoll-revoke-vote' => 'אני רוצה לבטל את הקול שלי',
	'ajaxpoll-vote-revoked' => 'פסלת את הקול שלך.',
	'right-ajaxpoll-vote' => 'להצביע בסקרים מבוססי AJAX.',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 */
$messages['hi'] = array(
	'ajaxpoll-no-vote' => 'कृपया नीचे वोट दें।',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'ajaxpoll-desc' => 'Přidawa tafličku <tt>&lt;poll&gt;</tt> za wotghosowanja na zakładźe AJAX',
	////'ajaxpoll-tracking-category' => 'Strony z wothłosowanjom',
	'ajaxpoll-vote-update' => 'Twoje wothłosowanje je so zaktualizowało.',
	'ajaxpoll-vote-add' => 'Twoje wothłosowanje je so přidało.',
	'ajaxpoll-vote-error' => 'Je problem při předźěłowanju twojeho hłosa był, prošu spytaj hišće raz.',
	'ajaxpoll-percent-votes' => '$1 % wšěch hłosow',
	'ajaxpoll-your-vote' => 'Sy hižo $2 za "$1" wothłosował, móžeš swój hłós změnić, kliknjo deleka na wotmołwu.',
	'ajaxpoll-no-vote' => 'Prošu wothłosuj deleka.',
	'ajaxpoll-info' => '{{PLURAL:$1|Je so jedyn hłós wotedał|Stej so $1 hłosaj wotedałoj|Su so $1 hłosy wotedali|Je so $1 hłosow wotedało}}, wot toho časa, zo wothłosowanje je so $2 wutworiło.',
	'ajaxpoll-submitting' => 'Prošu čakaj, twój hłós so předźěłuje.',
	'ajaxpoll-vote-permission' => 'Njemóžeš wothłosować.',
	'ajaxpoll-revoke-vote' => 'Chcu swój hłós anulować',
	'ajaxpoll-vote-revoked' => 'Sy swój hłós wuspěšnje anulował.',
	'right-ajaxpoll-vote' => 'Na wothłosowanjach bazowanych na AJAX so wobdźělić',
);

/** Hungarian (magyar)
 * @author Dj
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'ajaxpoll-desc' => 'AJAX alapú közvélemény-kutatás <tt>&lt;poll&gt;</tt> cimkével',
	//'ajaxpoll-tracking-category' => 'Közvélemény-kutatást tartalmazó lapok',
	'ajaxpoll-vote-update' => 'A szavazatod frissítve.',
	'ajaxpoll-vote-add' => 'A szavazatod rögzítve.',
	'ajaxpoll-vote-error' => 'Hiba történt a szavazás feldolgozása során, próbáld meg később.',
	'ajaxpoll-percent-votes' => 'Az összes szavazat $1%-a',
	'ajaxpoll-your-vote' => 'Már szavaztál a "$1"-re a $2-n, megváltoztathatod a szavazatodat az alábbi válaszra kattintva.',
	'ajaxpoll-no-vote' => 'Kérlek szavazz alant.',
	'ajaxpoll-info' => 'Összesen {{PLURAL:$1|egy|$1}} szavazat érkezett a $2 óta.',
	'ajaxpoll-submitting' => 'Kérlek várj a szavazatod elküldésére.',
	'ajaxpoll-vote-permission' => 'Nem vagy jogosult szavazni.',
	'ajaxpoll-revoke-vote' => 'Vissza akarom vonni a szavazatomat',
	'ajaxpoll-vote-revoked' => 'Sikeresen visszavontad a szavazatodat.',
	'right-ajaxpoll-vote' => 'Szavazhat az AJAX alapú közvélemény-kutatásokban',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'ajaxpoll-desc' => 'Permitte sondages a base de AJAX con le etiquetta <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Paginas con sondage',
	'ajaxpoll-vote-update' => 'Tu voto ha essite actualisate.',
	'ajaxpoll-vote-add' => 'Tu voto ha essite addite.',
	'ajaxpoll-vote-error' => 'Un problema occurreva durante le tractamento de tu voto. Per favor reproba.',
	'ajaxpoll-percent-votes' => '$1% de tote le votos',
	'ajaxpoll-your-vote' => 'Tu ha ja votate pro "$1" in $2. Tu pote cambiar tu voto per cliccar super un responsa hic infra.',
	'ajaxpoll-no-vote' => 'Per favor vota hic infra.',
	'ajaxpoll-info' => 'Il habeva $1 {{PLURAL:$1|voto|votos}} post le creation del sondage al $2.',
	'ajaxpoll-submitting' => 'Un momento, tu voto es submittite.',
	'ajaxpoll-vote-permission' => 'Tu non pote votar.',
	'ajaxpoll-revoke-vote' => 'Io vole revocar mi voto',
	'ajaxpoll-vote-revoked' => 'Tu ha revocate tu voto con successo.',
	'right-ajaxpoll-vote' => 'Pote votar in sondages a base de AJAX',
);

/** Indonesian (Bahasa Indonesia)
 * @author Anashir
 * @author Farras
 */
$messages['id'] = array(
	'ajaxpoll-desc' => 'Memungkinkan jajak pendapat berbasis AJAX dengan tag <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Halaman dengan jajak pendapat',
	'ajaxpoll-vote-update' => 'Suara Anda telah diperbarui.',
	'ajaxpoll-vote-add' => 'Suara Anda telah ditambahkan.',
	'ajaxpoll-vote-error' => 'Ada masalah dengan pengolahan suara anda, silahkan coba lagi.',
	'ajaxpoll-percent-votes' => '$1% dari semua suara',
	'ajaxpoll-your-vote' => 'Anda sudah memberi suara untuk "$1" pada $2. Anda bisa mengubah suara Anda dengan mengklik jawaban di bawah.',
	'ajaxpoll-no-vote' => 'Silakan beri suara di bawah.',
	'ajaxpoll-info' => 'Ada {{PLURAL:$1|satu suara|$1 suara}} sejak jajak pendapat ini dibuat pada $2.',
	'ajaxpoll-submitting' => 'Silakan tunggu. Sedang mengirimkan suara Anda.',
	'ajaxpoll-vote-permission' => 'Anda tidak dapat memberikan suara.',
	'ajaxpoll-revoke-vote' => 'Saya ingin membatalkan suara saya',
	'ajaxpoll-vote-revoked' => 'Anda berhasil membatalkan suara Anda.',
	'right-ajaxpoll-vote' => 'Dapat memberi suara di jajak pendapat berbasis AJAX',
);

/** Icelandic (íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	//'ajaxpoll-tracking-category' => 'Síður með skoðanakönnun',
	'ajaxpoll-vote-update' => 'Atkvæði þitt hefur verið uppfært.',
	'ajaxpoll-vote-add' => 'Atkvæði þínu hefur verið viðbætt.',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'ajaxpoll-desc' => 'Permette sondaggi tramite AJAX con il tag <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Pagine con un sondaggio',
	'ajaxpoll-vote-update' => 'Il tuo voto è stato aggiornato.',
	'ajaxpoll-vote-add' => 'Il tuo voto è stato aggiunto.',
	'ajaxpoll-vote-error' => "C'è stato un problema con l'elaborazione del tuo voto, si prega di riprovare.",
	'ajaxpoll-percent-votes' => '$1% di tutti i voti',
	'ajaxpoll-your-vote' => 'Hai già votato per "$1" su $2, è possibile cambiare il tuo voto cliccando una risposta qui sotto.',
	'ajaxpoll-no-vote' => 'Si prega di votare sotto.',
	'ajaxpoll-info' => "{{PLURAL:$1|C'è stato un voto|Ci sono stati $1 voti}} dal quando il sondaggio è stato creato il $2.",
	'ajaxpoll-submitting' => 'Attendere prego, stiamo elaborando il tuo voto.',
	'ajaxpoll-vote-permission' => 'Non hai diritto di voto.',
	'ajaxpoll-revoke-vote' => 'Voglio revocare il mio voto',
	'ajaxpoll-vote-revoked' => 'Hai revocato con successo il tuo voto.',
	'right-ajaxpoll-vote' => 'Vota nei sondaggi tramite AJAX',
);

/** Japanese (日本語)
 * @author Shirayuki
 * @author Shun Fukuzawa
 */
$messages['ja'] = array(
	'ajaxpoll-desc' => '<tt>&lt;poll&gt;</tt> タグで Ajax ベースの投票所を使用できるようにする',
	//'ajaxpoll-tracking-category' => '投票所があるページ',
	'ajaxpoll-vote-update' => '投票を更新しました。',
	'ajaxpoll-vote-add' => '投票を追加しました。',
	'ajaxpoll-vote-error' => '投票の処理中に問題が発生しました。再投票してください。',
	'ajaxpoll-percent-votes' => '全体の $1%',
	'ajaxpoll-your-vote' => '$2について「$1」に投票済みです。以下の回答をクリックすると、投票を変更できます。',
	'ajaxpoll-no-vote' => '投票してください。',
	'ajaxpoll-info' => '$2 に投票所が作成されて以来、{{PLURAL:$1|$1 票}}の投票がありました。',
	'ajaxpoll-submitting' => '投票を送信しています。お待ちください。',
	'ajaxpoll-vote-permission' => 'あなたには投票権がありません。',
	'ajaxpoll-revoke-vote' => '自分の投票を取り消したい',
	'ajaxpoll-vote-revoked' => '投票を取り消しました。',
	'right-ajaxpoll-vote' => 'Ajax ベースの投票所で投票',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	//'ajaxpoll-tracking-category' => 'გვერდები გამოკითხვებით',
	'ajaxpoll-vote-update' => 'თქვენი ხმა განახლდა.',
	'ajaxpoll-vote-add' => 'თქვენი ხმა დაემატა.',
	'ajaxpoll-vote-error' => 'თქვენი ხმის დამუშავებისას მოხდა შეცდომა, გთხოვთ, კიდევ სცადეთ.',
	'ajaxpoll-percent-votes' => 'ყველა ხმის $1%',
	'ajaxpoll-no-vote' => 'გთხოვთ, ხმა მისცეთ ქვევით.',
	'ajaxpoll-submitting' => 'გთხოვთ, მოიცადეთ თქვენი ხმა მუშავდება.',
	'ajaxpoll-vote-permission' => 'თქვენ არ შეგიძლიათ ხმის მიცემა.',
	'ajaxpoll-revoke-vote' => 'მე მინდა ჩემი ხმის გაუქმება',
	'ajaxpoll-vote-revoked' => 'თქვენ წარმატებით გააუქმეთ თქვენი ხმა.',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'ajaxpoll-desc' => '<tt>&lt;poll&gt;</tt> 태그로 AJAX 기반 투표를 할 수 있습니다',
	//'ajaxpoll-tracking-category' => '설문 조사 문서',
	'ajaxpoll-vote-update' => '투표를 업데이트했습니다.',
	'ajaxpoll-vote-add' => '투표를 추가했습니다.',
	'ajaxpoll-vote-error' => '투표를 처리하는 데 문제가 있습니다. 다시 시도하세요.',
	'ajaxpoll-percent-votes' => '모든 투표 중 $1%',
	'ajaxpoll-your-vote' => '이미 $2에 "$1"(을)를 투표했습니다. 아래의 답변을 클릭하여 투표를 바꿀 수 있습니다.',
	'ajaxpoll-no-vote' => '아래에 투표하세요.',
	'ajaxpoll-info' => '$2에 설문 조사가 만들어진 뒤 {{PLURAL:$1|1표|$1표}}가 있습니다.',
	'ajaxpoll-submitting' => '투표를 제출하는 동안 잠시 기다려주세요.',
	'ajaxpoll-vote-permission' => '투표를 받을 수 없습니다.',
	'ajaxpoll-revoke-vote' => '투표를 취소합니다',
	'ajaxpoll-vote-revoked' => '성공적으로 투표를 취소했습니다.',
	'right-ajaxpoll-vote' => 'AJAX 기반 설문 조사에 투표할 수 있음',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'ajaxpoll-desc' => 'Deiht dä Befähl <code lang="en">&lt;poll&gt;</code> en et Wiki, öm Ömfroore maache ze künne, di op <i lang="en">AJAX</i> boue.',
	//'ajaxpoll-tracking-category' => 'Sigge med ener Ömfrooch',
	'ajaxpoll-vote-update' => 'Ding Schtemm es äänjepaß.',
	'ajaxpoll-vote-add' => 'Ding Schtemm es jezallt.',
	'ajaxpoll-vote-error' => 'Doh hät jät nit jeflupp mem Beärbeide vun Dinge Schtemm. Bes esu jood_un versöhg_et norr_ens.',
	'ajaxpoll-percent-votes' => '$1% vun all Schtemme',
	'ajaxpoll-your-vote' => 'Do häs aam $2 ald för „$1“ jeschtemmp. Do kanns Ding Scheimme ändere. Doför moß De onge op en Antwoot klecke.',
	'ajaxpoll-no-vote' => 'Onge kanns De afschtemme.',
	'ajaxpoll-info' => 'Et {{PLURAL:$1|wood ein Schtemm|woodte $1 Schtemme|wood kein Schtemm}} afjejovve zigg aam $2 di Ömfrooch aanjelaat wood.',
	'ajaxpoll-submitting' => 'Ene kleine Momang, Ding Schtemm weed enjedraare.',
	'ajaxpoll-vote-permission' => 'Do be nit schtemmberääschtesch.',
	'ajaxpoll-revoke-vote' => 'Esch well ming Schtemm zerökträcke',
	'ajaxpoll-vote-revoked' => 'Deng Schtemm es zerökjetroke.',
	'right-ajaxpoll-vote' => 'Darf en Afschtemmonge metmaache, di op <i lang="en">AJAX</i> boue',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'ajaxpoll-desc' => 'Erlaabt AJAX-baséiert Ëmfroe mam Tag <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Säite mat enger Ëmfro',
	'ajaxpoll-vote-update' => 'Är Stëmm gouf aktualiséiert.',
	'ajaxpoll-vote-add' => 'Är Stëmm gouf derbäigesat.',
	'ajaxpoll-vote-error' => 'Et gouf e Problem beim Verschaffe vun Ärer Stëmm, probéiert et w.e.g. nach eng kéier.',
	'ajaxpoll-percent-votes' => '$1% vun alle Stëmmen',
	'ajaxpoll-your-vote' => 'Dir hutt schonn den $2 fir "$1" gestëmmt, Dir kënnt Är Stëmm änneren an deem Dir op d\'Äntwert hei drënner klickt.',
	'ajaxpoll-no-vote' => 'Stëmmt w.e.g hei drënner mat of.',
	'ajaxpoll-info' => 'Zënter dem Ufank vun der Ëmfro den $2 {{PLURAL:$1 gouf eng Stëmm|goufe(n) $1 Stëmmen}} ofginn.',
	'ajaxpoll-submitting' => 'Waart w.e.g., Är Stëmm gëtt verschafft.',
	'ajaxpoll-vote-permission' => 'Dir sidd net berechtegt fir ofzestëmmen.',
	'ajaxpoll-revoke-vote' => 'Ech wëll meng Stëmm zréckzéien',
	'ajaxpoll-vote-revoked' => 'Dir hutt Är Stëmm zréckgezunn.',
	'right-ajaxpoll-vote' => 'Däerf bäi AJAX-baséierten Ëmfroe matmaachen',
);

/** Lithuanian (lietuvių)
 * @author Audriusa
 * @author Eitvys200
 */
$messages['lt'] = array(
	//'ajaxpoll-tracking-category' => 'Puslapiai su apklausa',
	'ajaxpoll-vote-update' => 'Jūsų balsas buvo atnaujintas.',
	'ajaxpoll-vote-add' => 'Jūsų balsas buvo pridėtas.',
	'ajaxpoll-percent-votes' => '$1% visų balsų',
	'ajaxpoll-no-vote' => 'Prašome balsuoti žemiau.',
	'ajaxpoll-submitting' => 'Prašome palaukti, siunčiame jūsų balsą.',
	'ajaxpoll-vote-permission' => 'Jūs neturite balsavimo teisės.',
	'ajaxpoll-revoke-vote' => 'Noriu atsiimti savo balsą',
	'ajaxpoll-vote-revoked' => 'Jūs atsiėmėte savo balsą.',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'ajaxpoll-vote-update' => 'Jūsu balss tika izmainīta.',
	'ajaxpoll-vote-add' => 'Jūsu balss tika pievienota.',
	'ajaxpoll-percent-votes' => '$1% no visām balsīm',
	'ajaxpoll-vote-permission' => 'Jums nav tiesību balsot.',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author StefanusRA
 */
$messages['map-bms'] = array(
	'ajaxpoll-desc' => 'Ngolihna jajak pendapat sing basise-AJAX nganggo tag <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Kaca sing karo jajak pendapat',
	'ajaxpoll-vote-update' => 'Swarane Rika wis dianyari.',
	'ajaxpoll-vote-add' => 'Swarane Rika wis ditambahna.',
	'ajaxpoll-vote-error' => 'Ana masalah dong lagi mroses swarane Rika, monggo jajal maning.',
	'ajaxpoll-percent-votes' => '$1% sekang kabeh swara',
	'ajaxpoll-your-vote' => 'Rika wis aweh swara nggo "$1" dong $2, Rika teyeng ngowaih swarane Rika yakuwe karo ngeklik jawaban nang ngisor kiye.',
	'ajaxpoll-no-vote' => 'Monggo aweh swara nang ngisor kiye.',
	'ajaxpoll-info' => 'Wis ana {{PLURAL:$1|siji swara|$1 swara}} wiwit jajak pendapat kiye digawe dong $2.',
	'ajaxpoll-submitting' => 'Monggo dienteni, lagi ngirimna swarane Rika.',
	'ajaxpoll-vote-permission' => 'Rika ora olih melu aweh swara.',
	'ajaxpoll-revoke-vote' => 'Inyong arep mbatalna swarane inyong.',
	'ajaxpoll-vote-revoked' => 'Rika wis sukses gole mbatalna swarane Rika.',
	'right-ajaxpoll-vote' => 'Teyeng aweh swara nang jajak pendapat basis-AJAX',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'ajaxpoll-desc' => 'Овозможува анкети на основа на AJAX со ознаката <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Страници со анкета',
	'ajaxpoll-vote-update' => 'Вашиот глас е подновен.',
	'ajaxpoll-vote-add' => 'Вашиот глас е додаден.',
	'ajaxpoll-vote-error' => 'Се појави проблем при обработката на вашиот глас. Обидете се повторно.',
	'ajaxpoll-percent-votes' => '$1% од вкупниот број на гласови',
	'ajaxpoll-your-vote' => 'Веќе имате гласано за „$1“ на $2; можете да го промените гласот со кликнување на еден од одговорите подолу.',
	'ajaxpoll-no-vote' => 'Гласајте подолу.',
	'ajaxpoll-info' => 'Откако е создадена анкетата ($2) {{PLURAL:$1|даден еден глас|дадени се $1 гласа}}.',
	'ajaxpoll-submitting' => 'Почекајте, го заведувам вашиот глас.',
	'ajaxpoll-vote-permission' => 'Не можете да гласате.',
	'ajaxpoll-revoke-vote' => 'Сакам да го повлечам гласот',
	'ajaxpoll-vote-revoked' => 'Успешно го повлековте гласот.',
	'right-ajaxpoll-vote' => 'Може да гласа на анкети на основа на AJAX.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'ajaxpoll-desc' => 'Membolehkan tinjauan berasaskan AJAX dengan teg <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Halaman dengan tinjauan',
	'ajaxpoll-vote-update' => 'Undian anda telah dikemaskinikan.',
	'ajaxpoll-vote-add' => 'Undian anda telah ditambahkan.',
	'ajaxpoll-vote-error' => 'Ada masalah dengan pemprosesan undian anda, sila cuba lagi.',
	'ajaxpoll-percent-votes' => '$1% daripada semua undian',
	'ajaxpoll-your-vote' => 'Anda sudah mengundi "$1" pada $2, tetapi anda boleh mengubah undian anda dengan mengklik jawapan di bawah.',
	'ajaxpoll-no-vote' => 'Sila undi di bawah.',
	'ajaxpoll-info' => 'Tinjauan ini menerima {{PLURAL:$1|satu|$1}} undian semenjak dibuka pada $2.',
	'ajaxpoll-submitting' => 'Sila tunggu, undian anda sedang diserahkan.',
	'ajaxpoll-vote-permission' => 'Anda tidak diberi hak untuk mengundi.',
	'ajaxpoll-revoke-vote' => 'Saya ingin menarik balik undian saya',
	'ajaxpoll-vote-revoked' => 'Anda berjaya menarik balik undian anda.',
	'right-ajaxpoll-vote' => 'Boleh mengundi dalam tinjauan berasaskan AJAX',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'ajaxpoll-vote-update' => 'Il-vot tiegħek ġie aġġornat.',
	'ajaxpoll-vote-add' => 'Il-vot tiegħek ġie miżjud.',
	'ajaxpoll-vote-error' => "Kien hemm problema fl-ipproċessar tal-vot tiegħek, jekk jogħġbok erġa' pprova.",
	'ajaxpoll-percent-votes' => '$1% tal-voti kollha',
	'ajaxpoll-your-vote' => 'Inti diġà vvutajt għal "$1" nhar il-$2, tista\' tbiddel il-vot tiegħek billi tagħżel risposta hawn taħt.',
	'ajaxpoll-no-vote' => 'Jekk jogħġbok ivvota hawn taħt.',
	'ajaxpoll-info' => 'Kien hemm {{PLURAL:$1|vot wieħed|$1 voti}} minn mindu dan is-sondaġġ ġie maħluq nhar il-$2.',
	'ajaxpoll-submitting' => 'Jekk jogħġbok stenna, il-vot tiegħek qiegħed jintbagħat.',
	'ajaxpoll-vote-permission' => "M'għandekx id-dritt tal-vot.",
	'ajaxpoll-revoke-vote' => 'Nixtieq nirrevoka l-vot tiegħi',
	'ajaxpoll-vote-revoked' => "Irnexxielek tirrevoka b'suċċess il-vot tiegħek.",
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'ajaxpoll-vote-update' => 'Din stemme har blitt oppdatert.',
	'ajaxpoll-vote-add' => 'Din stemme har blitt lagt til.',
	'ajaxpoll-vote-error' => 'Det oppstod et problem med behandlingen av din stemme, vennligst prøv igjen.',
	'ajaxpoll-percent-votes' => '$1% av alle stemmer',
	'ajaxpoll-your-vote' => 'Du har allerede stemt på «$1» den $2, du kan endre din stemme ved å klikke på et svar nedenfor.',
	'ajaxpoll-no-vote' => 'Vennligst stem nedenfor.',
	'ajaxpoll-info' => 'Det var $1 stemmer siden spørreundersøkelsen ble opprettet den $2.', # Fuzzy
	'ajaxpoll-submitting' => 'Vennligst vent, sender inn stemmen din.',
);

/** Dutch (Nederlands)
 * @author AvatarTeam
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'ajaxpoll-desc' => 'Maakt AJAX-gebaseerde polls mogelijk met de tag <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => "Pagina's met een peiling",
	'ajaxpoll-vote-update' => 'Uw stem is bijgewerkt.',
	'ajaxpoll-vote-add' => 'Uw stem is toegevoegd.',
	'ajaxpoll-vote-error' => 'Er is een probleem opgetreden tijdens het verwerken van uw stem. Probeer het opnieuw.',
	'ajaxpoll-percent-votes' => '$1% van alle stemmen',
	'ajaxpoll-your-vote' => 'U hebt al voor "$1" gestemd op $2. U kunt uw stem wijzigen door hieronder op een antwoord te klikken.',
	'ajaxpoll-no-vote' => 'Stem hieronder.',
	'ajaxpoll-info' => 'Er {{PLURAL:$1|is één stem|zijn $1 stemmen}} uitgebracht sinds de peiling op $2 is aangemaakt.',
	'ajaxpoll-submitting' => 'Even geduld alstublieft. Uw stem wordt opgeslagen...',
	'ajaxpoll-vote-permission' => 'U kunt niet stemmen.',
	'ajaxpoll-revoke-vote' => 'Ik wil mijn stem intrekken',
	'ajaxpoll-vote-revoked' => 'Uw stem is ingetrokken.',
	'right-ajaxpoll-vote' => 'Kan in AJAX-gebaseerde peilingen stemmen',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'ajaxpoll-vote-update' => 'Je stem is bijgewerkt.',
	'ajaxpoll-vote-add' => 'Je stem is toegevoegd.',
	'ajaxpoll-vote-error' => 'Er is een probleem opgetreden tijdens het verwerken van je stem. Probeer het opnieuw.',
	'ajaxpoll-your-vote' => 'Je hebt al voor "$1" gestemd op $2. Je kunt je stem wijzigen door hieronder op een antwoord te klikken.',
	'ajaxpoll-submitting' => 'Even geduld alsjeblieft. Je stem wordt opgeslagen...',
	'ajaxpoll-vote-permission' => 'Je kunt niet stemmen.',
	'ajaxpoll-vote-revoked' => 'Je stem is ingetrokken.',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author ଆଶୁତୋଷ କର
 */
$messages['or'] = array(
	//'ajaxpoll-tracking-category' => 'ମତଦାନ ଯୁକ୍ତ ପ୍ରୁଷ୍ଠା।',
	'ajaxpoll-vote-update' => 'ଆପଣଙ୍କ ମତ ଅପଡେଟ କରାଯାଇଛି।',
	'ajaxpoll-vote-add' => 'ଆପଣଙ୍କ ମତଟି ଯୋଡାଗଲା।',
	'ajaxpoll-percent-votes' => 'ସବୁ ଭୋଟର $1%',
	'ajaxpoll-no-vote' => 'ତଳେ ମତଦାନ କରନ୍ତୁ।',
	'ajaxpoll-submitting' => 'ମତ ଦେବାପାଇଁ ଦୟାକରି ଅପେକ୍ଷା କରନ୍ତୁ।',
	'ajaxpoll-vote-permission' => 'ଆପଣ ମତ ଦେବାପାଇଁ ହକଦାର ନୁହନ୍ତି।',
	'ajaxpoll-revoke-vote' => 'ମୁଁ ମୋ ମତ ଫେରାଇନେବାକୁ ଚାହୁଁଛି।',
	'ajaxpoll-vote-revoked' => 'ଆପଣ ମତ ଫେରାଇନେଲେ।',
	'right-ajaxpoll-vote' => 'ଆଜାକ୍ସ ଆଧାରିତ ମତଦାନରେ ମତ ଦେଇପାରିବେ',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Dariusz Siedlecki
 */
$messages['pl'] = array(
	'ajaxpoll-desc' => 'Umożliwia wstawienie opartych na technologii AJAX ankiet przy pomocy znacznika <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Strony z sondażami',
	'ajaxpoll-vote-update' => 'Twój głos został zmieniony.',
	'ajaxpoll-vote-add' => 'Twój głos został dodany.',
	'ajaxpoll-vote-error' => 'Wystąpił błąd w czasie dodawania głosu, proszę spróbować później.',
	'ajaxpoll-percent-votes' => '$1% wszystkich głosów',
	'ajaxpoll-your-vote' => 'Zagłosowałeś juz na "$1" $2, możesz zaktualizować swój głos klikając na odpowiedź poniżej.',
	'ajaxpoll-no-vote' => 'Podaj swój głos poniżej.',
	'ajaxpoll-info' => 'Oddano już {{PLURAL:$1|jeden głos|$1 głosy|$1 głosów}} od założenia ankiety dnia $2.',
	'ajaxpoll-submitting' => 'Proszę czekać, trwa dodawanie głosu.',
	'ajaxpoll-vote-permission' => 'Nie masz uprawnień do głosowania.',
	'ajaxpoll-revoke-vote' => 'Chcę wycofać swój głos',
	'ajaxpoll-vote-revoked' => 'Pomyślnie wycofano twój głos',
	'right-ajaxpoll-vote' => 'Można głosować w sondażach opartych na technologii AJAX',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'ajaxpoll-desc' => "A përmët j'anterogassion basà su AJAX con tichëtta <tt>&lt;poll&gt;</tt>",
	//'ajaxpoll-tracking-category' => 'Pagine con un sondagi',
	'ajaxpoll-vote-update' => "Tò vot a l'é stàit modificà.",
	'ajaxpoll-vote-add' => "Tò vot a l'é stàit giontà.",
	'ajaxpoll-vote-error' => "A l'é staje un problema an tratand sò vot, për piasì ch'a preuva torna.",
	'ajaxpoll-percent-votes' => '$1% ëd tùit ij vot',
	'ajaxpoll-your-vote' => 'A l\'ha già votà për "$1" su $2; a peul cangé sò vot an sgnacand su na rispòsta sì-sota.',
	'ajaxpoll-no-vote' => 'Për piasì, voté sì-sota.',
	'ajaxpoll-info' => "A {{PLURAL:$1|l'é staje un vot|son staje $1 vot}} da quand ël sondagi a l'é stàit creà su $2.",
	'ajaxpoll-submitting' => "Për piasì ch'a speta, sò vot a l'é an camin ch'a riva.",
	'ajaxpoll-vote-permission' => 'It ses pa titolà për voté.',
	'ajaxpoll-revoke-vote' => 'I veuj revoché mè vot',
	'ajaxpoll-vote-revoked' => "It l'has revocà da bin tò vot.",
	'right-ajaxpoll-vote' => 'A peul voté ant ij sondagi basà dzora a AJAX',
);

/** Portuguese (português)
 * @author SandroHc
 */
$messages['pt'] = array(
	'ajaxpoll-desc' => 'Permite votações baseadas em AJAX com a etiqueta <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Páginas com votação',
	'ajaxpoll-vote-update' => 'O seu voto foi atualizado.',
	'ajaxpoll-vote-add' => 'O seu voto foi adicionado.',
	'ajaxpoll-vote-error' => 'Ocorreu um erro ao processar o seu voto, por favor tente novamente.',
	'ajaxpoll-percent-votes' => '$1% de todos os votos',
	'ajaxpoll-your-vote' => 'Você já votou em "$1" em $2, você pode alterar o voto ao clicar numa opção abaixo.',
	'ajaxpoll-no-vote' => 'Por favor, vote abaixo.',
	'ajaxpoll-info' => '{{PLURAL:$1|Um voto|$1 votos}} desde a criação da votação em $2.',
	'ajaxpoll-submitting' => 'Por favor aguarde, enviando o seu voto.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Daemorris
 */
$messages['pt-br'] = array(
	'ajaxpoll-vote-update' => 'Seu voto foi atualizado.',
	'ajaxpoll-vote-add' => 'Seu voto foi adicionado.',
	'ajaxpoll-vote-error' => 'Houve um problema com o processamento de seu voto, por favor tente novamente.',
	'ajaxpoll-percent-votes' => '$1% de todos votos',
	'ajaxpoll-your-vote' => 'Vocâ já votou para "$1" em $2, você pode alterar seu voto clicando em uma opção abaixo.',
	'ajaxpoll-no-vote' => 'Por favor vote abaixo.',
	'ajaxpoll-info' => '{{PLURAL:$1|Um voto|$1 votos}} desde a criação da votação em $2.',
	'ajaxpoll-submitting' => 'Por favor aguarde, enviando sua opção.',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	//'ajaxpoll-tracking-category' => 'Pagini cu chestionar',
	'ajaxpoll-vote-update' => 'Votul dumneavoastră a fost actualizat.',
	'ajaxpoll-vote-add' => 'Votul dumneavoastră a fost adăugat.',
	'ajaxpoll-vote-error' => 'A apărut o problemă la procesarea votului dumneavoastră. Vă rugăm să încercați din nou.',
	'ajaxpoll-percent-votes' => '$1% din toate voturile',
	'ajaxpoll-no-vote' => 'Vă rugăm să votați mai jos.',
	'ajaxpoll-submitting' => 'Vă rugăm să așteptați, votul dumneavoastră se trimite.',
	'ajaxpoll-vote-permission' => 'Nu aveți drept de vot.',
	'ajaxpoll-revoke-vote' => 'Vreau să anulez votul meu',
	'ajaxpoll-vote-revoked' => 'V-ați anulat cu succes votul.',
	'right-ajaxpoll-vote' => 'Puteți vota în chestionare bazate pe AJAX',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'ajaxpoll-desc' => "Oermette sondagge basate sus a AJAX cu 'u tag <tt>&lt;poll&gt;</tt>",
	//'ajaxpoll-tracking-category' => "Pàgene cu 'nu sondagge",
	'ajaxpoll-vote-update' => "'U vote tune ha state aggiornate.",
	'ajaxpoll-vote-add' => "'U vote tune ha state aggiunde.",
	'ajaxpoll-vote-error' => "Stave 'nu probbleme cu l'elabborazione d'u vote tune, pe piacere pruève arrète.",
	'ajaxpoll-percent-votes' => '$1% de totte le vote',
	'ajaxpoll-no-vote' => "Pe' piacere, vote d'abbasce",
	'ajaxpoll-submitting' => "Pe piacere aspitte, stoche a elabbore 'u vote tune.",
	'ajaxpoll-vote-permission' => 'Tu non ge puè votà',
	'ajaxpoll-revoke-vote' => "Ije vogghie annullà 'u vote mije",
	'ajaxpoll-vote-revoked' => "'U vote tue ha state revocate cu successe.",
	'right-ajaxpoll-vote' => 'Puè vutà le sondagge in AJAX',
);

/** Russian (русский)
 * @author DCamer
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'ajaxpoll-desc' => 'Позволяет проводить голосования на основе AJAX с помощью тега <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Страницы с опросами',
	'ajaxpoll-vote-update' => 'Ваш голос обновлён.',
	'ajaxpoll-vote-add' => 'Ваш голос добавлен.',
	'ajaxpoll-vote-error' => 'Возникла проблема с обработкой вашего голоса, пожалуйста, попробуйте ещё раз.',
	'ajaxpoll-percent-votes' => '$1% от всех голосов',
	'ajaxpoll-your-vote' => 'Вы уже проголосовали «$1» $2. Вы можете изменить свой выбор, нажав на один из представленных ниже ответов.',
	'ajaxpoll-no-vote' => 'Пожалуйста, проголосуйте ниже.',
	'ajaxpoll-info' => 'С момента создания голосования $2 {{PLURAL:$1|поступил $1 голос|поступило $1 голоса|поступило $1 голосов}}.',
	'ajaxpoll-submitting' => 'Пожалуйста, подождите, ваш голос обрабатывается.',
	'ajaxpoll-vote-permission' => 'Вы не можете голосовать.',
	'ajaxpoll-revoke-vote' => 'Я хочу отменить свой голос',
	'ajaxpoll-vote-revoked' => 'Вы успешно отменили свой голос.',
	'right-ajaxpoll-vote' => 'Может голосовать в опросах на основе AJAX',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	//'ajaxpoll-tracking-category' => 'ඡන්ද විමසීමක් සහිත පිටු',
	'ajaxpoll-vote-update' => 'ඔබේ මනාපය යාවත්කාලීන කරන ලදී.',
	'ajaxpoll-vote-add' => 'ඔබේ මනාපය එක් කරන ලදී.',
	'ajaxpoll-percent-votes' => 'සියලුම මනාපයන්ගෙන් $1% ක්',
	'ajaxpoll-no-vote' => 'කරුණාකර පහතින් මනාපය දෙන්න.',
	'ajaxpoll-submitting' => 'කරුණාකර රැදී සිටින්න, ඔබේ මනාපය යොමු කරමින්.',
	'ajaxpoll-vote-permission' => 'ඔබ මනාප ලබා දීමට සුදුසුකම් ලබා නොමැත.',
	'ajaxpoll-revoke-vote' => 'මට මගේ මනාපය අස් කර ගන්න අවශ්‍යයි',
	'ajaxpoll-vote-revoked' => 'මට විසින් ඔබේ මනාපය සාර්ථකව අස් කර ගන්නා ලදී.',
	'right-ajaxpoll-vote' => 'AJAX-පාදක ඡන්ද විමසීම් හී මානාපය දිය හැක',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Verlor
 */
$messages['sr-ec'] = array(
	'ajaxpoll-vote-update' => 'аш глас је био урачунат.',
	'ajaxpoll-vote-add' => 'Ваш галс је додан',
	'ajaxpoll-percent-votes' => '$1% од свих гласова',
	'ajaxpoll-no-vote' => 'Молимо гласајте испод.',
	'ajaxpoll-submitting' => 'Чекајте, шаљемо ваш глас.',
	'ajaxpoll-vote-permission' => 'Не можете да гласате.',
	'ajaxpoll-revoke-vote' => 'Желим да повучем глас',
	'ajaxpoll-vote-revoked' => 'Успешно сте повукли глас.',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'ajaxpoll-vote-update' => 'aš glas je bio uračunat.',
	'ajaxpoll-vote-add' => 'Vaš gals je dodan',
	'ajaxpoll-percent-votes' => '$1% od svih glasova',
	'ajaxpoll-no-vote' => 'Molimo glasajte ispod.',
	'ajaxpoll-submitting' => 'Čekajte, šaljemo vaš glas.',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'ajaxpoll-desc' => 'Gör AJAX-baserade omröstningar med <tt>&lt;poll&gt;</tt>-tagg',
	//'ajaxpoll-tracking-category' => 'Sidor med en omröstning',
	'ajaxpoll-vote-update' => 'Din röst har uppdaterats.',
	'ajaxpoll-vote-add' => 'Din röst har lagts till.',
	'ajaxpoll-vote-error' => 'Det uppstod ett problem med bearbetningen av din röst, var god försök igen.',
	'ajaxpoll-percent-votes' => '$1% av alla röster',
	'ajaxpoll-your-vote' => 'Du har redan röstat på "$1" den $2, du kan ändra din röst genom att klicka på ett svar nedan.',
	'ajaxpoll-no-vote' => 'Var god rösta nedan.',
	'ajaxpoll-info' => 'Det var {{PLURAL:$1|en röst|$1 röster}} sedan omröstningen skapades den $2.',
	'ajaxpoll-submitting' => 'Var god vänta, skickar in din röst.',
	'ajaxpoll-vote-permission' => 'Du är inte berättigad att rösta.',
	'ajaxpoll-revoke-vote' => 'Jag vill återkalla min röst',
	'ajaxpoll-vote-revoked' => 'Du har återkallat din röst.',
	'right-ajaxpoll-vote' => 'Kan rösta i AJAX-baserade omröstningar',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'ajaxpoll-vote-update' => 'Kura yako imesasishwa.',
	'ajaxpoll-vote-add' => 'Kura yako imeongezwa.',
	'ajaxpoll-vote-error' => 'Kulikuwa na hitilafu katika mchakato wa kura yako, tafadhali jaribu tena.',
	'ajaxpoll-percent-votes' => 'Asilimia $1 ya kura zote',
	'ajaxpoll-no-vote' => 'Tafadhali piga kura hapa chini.',
	'ajaxpoll-submitting' => 'Tafadhali ngoja, inawasilisha kura yako.',
	'ajaxpoll-vote-permission' => 'Hauna haki ya kupiga kura.',
	'ajaxpoll-revoke-vote' => 'Nataka kubatilisha kura yangu',
	'ajaxpoll-vote-revoked' => 'Umefanikiwa kubatilisha kura yako.',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	//'ajaxpoll-tracking-category' => 'வாக்கெடுப்புடன் கூடிய பக்கங்கள்',
	'ajaxpoll-vote-update' => 'உங்கள் வாக்கு இற்றைப்படுத்தப்பட்டது.',
	'ajaxpoll-vote-add' => 'உங்கள் வாக்கு சேர்த்துக் கொள்ளப்பட்டது.',
	'ajaxpoll-vote-error' => 'உங்கள் வாக்கைச் செயற்படுத்துவதில் ஒரு சிக்கல் ஏற்பட்டது.
அருள்கூர்ந்து மீண்டும் முயற்சிக்கவும்.',
	'ajaxpoll-percent-votes' => 'எல்லா வாக்குகளினதும் $1%',
	'ajaxpoll-no-vote' => 'தயவுசெய்து கீழே வாக்களிக்கவும்.',
	'ajaxpoll-submitting' => 'தயவுசெய்து காத்திருக்கவும், உங்கள் வாக்கு சமர்ப்பிக்கப்படுகிறது.',
	'ajaxpoll-vote-permission' => 'உங்களுக்கு வாக்களிக்கும் உரிமை இல்லை.',
	'ajaxpoll-revoke-vote' => 'நான் எனது வாக்கைத் திரும்பப் பெற விரும்புகிறேன்.',
	'ajaxpoll-vote-revoked' => 'நீங்கள் உங்கள் வாக்கினை வெற்றிகரமாக திரும்பப் பெற்றுள்ளீர்கள்.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'ajaxpoll-desc' => 'Nagpapahintulot ng mga paghalal na nakabatay sa AJAX na may tatak na <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Mga pahinang may botohan',
	'ajaxpoll-vote-update' => 'Naisapanahon na ang boto mo.',
	'ajaxpoll-vote-add' => 'Naidagdag na ang boto mo.',
	'ajaxpoll-vote-error' => 'Nagkaroon ng isang suliranin sa pagsasagawa ng boto mo, pakisubukang muli.',
	'ajaxpoll-percent-votes' => '$1% ng lahat ng mga pagboto',
	'ajaxpoll-your-vote' => 'Bumoto ka na para kay "$1" noong $2, mababago mo ang iyong boto sa pamamagitan ng pagpindot sa isang sagot na nasa ibaba.',
	'ajaxpoll-no-vote' => 'Bumoto po sa ibaba.',
	'ajaxpoll-info' => 'Mayroong {{PLURAL:$1|isang pagboto|$1 na mga pagboto}} magmula noong likhain ang halalan noong $2.',
	'ajaxpoll-submitting' => 'Pakihintay, ipinapasa ang boto mo.',
	'ajaxpoll-vote-permission' => 'Hindi ka nabigyan ng karapatan upang makaboto.',
	'ajaxpoll-revoke-vote' => 'Nais kong pawalan ng bisa ang boto ko',
	'ajaxpoll-vote-revoked' => 'Matagumpay mong napawalangbisa ang boto mo.',
	'right-ajaxpoll-vote' => 'Makakaboto sa mga halalang nakabatay sa AJAX',
);

/** Turkish (Türkçe)
 * @author Hedda Gabler
 * @author Incelemeelemani
 */
$messages['tr'] = array(
	'ajaxpoll-vote-update' => 'Oyunuz güncelleştirildi.',
	'ajaxpoll-vote-add' => 'Oyunuz eklendi.',
	'ajaxpoll-revoke-vote' => 'Ben oyumu geri almak istiyorum',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Arlin
 * @author Sahran
 */
$messages['ug-arab'] = array(
	//'ajaxpoll-tracking-category' => 'ئاۋاز بار بەتلەر',
	'ajaxpoll-vote-update' => 'سىز بەرگەن ئاۋاز يېڭىلاندى.',
	'ajaxpoll-vote-add' => 'سىز بەرگەن ئاۋاز قېتىلدى.',
	'ajaxpoll-vote-error' => 'سىز بەرگەن ئاۋازنى بىرتەرەپ قىلىش جەريانىدا مەسىلە كۆرۈلدى، قايتا سىناڭ.',
	'ajaxpoll-percent-votes' => 'بارلىق ئاۋازنىڭ $1%',
	'ajaxpoll-no-vote' => 'ئاستىدا بىلەت تاشلاڭ.',
	'ajaxpoll-submitting' => 'سەل كۈتۈڭ، تاشلىغان بىلىتىڭىزنى يوللاۋاتىدۇ.',
	'ajaxpoll-vote-permission' => 'بىلەت تاشلاش ھوقۇقىڭىز يوق.',
	'ajaxpoll-revoke-vote' => 'تاشلىغان بىلىتىمنى بىكار قىلىمەن',
	'ajaxpoll-vote-revoked' => 'تاشلىغان بىلىتىڭىزنى مۇۋەپپەقىيەتلىك بىكار قىلدىڭىز.',
	'right-ajaxpoll-vote' => 'AJAX ئاساسىدىكى بىلەت تاشلاش رايونىدا بىلەت تاشلىيالايسىز',
);

/** Ukrainian (українська)
 * @author A1
 * @author Base
 */
$messages['uk'] = array(
	'ajaxpoll-desc' => 'Дозволяє голосування на основі AJAX з міткою <tt>&lt;poll&gt;</tt>',
	//'ajaxpoll-tracking-category' => 'Сторінки з опитуваннями',
	'ajaxpoll-vote-update' => 'Ваш голос був поновлений.',
	'ajaxpoll-vote-add' => 'Ваш голос був доданий.',
	'ajaxpoll-vote-error' => 'Виникла проблема з обробкою вашого голосу, будь-ласка, спробуйте знову.',
	'ajaxpoll-percent-votes' => '$1% усіх голосів',
	'ajaxpoll-your-vote' => 'Ви вже проголосували за " $1 " на  $2 , ви можете змінити свій голос, натиснувши відповідь нижче.',
	'ajaxpoll-no-vote' => 'Будь ласка, голосуйте нижче.',
	'ajaxpoll-info' => 'З моменту створення голосування $2 {{PLURAL:$1|надійшов $1 голос|надійшло $1 голоси|надійшло $1 голосів}}.',
	'ajaxpoll-submitting' => 'Будь ласка, почекайте, ваш голос обробляється  ...',
	'ajaxpoll-vote-permission' => 'Ви не можете голосувати',
	'ajaxpoll-revoke-vote' => 'Я хочу скасувати свій голос',
	'ajaxpoll-vote-revoked' => 'Ви успішно скасували свій голос',
	'right-ajaxpoll-vote' => 'Можете голосувати в опитуваннях на основі AJAX',
);

/** Chinese (中文)
 * @author 許瑜真 (Yuchen Hsu/KaurJmeb)
 */
$messages['zh'] = array(
	'ajaxpoll-no-vote' => '請於下方投票',
	'ajaxpoll-percent-votes' => '$1%',
	'ajaxpoll-submitting' => '正在處理您的投票，請稍候。',
	'ajaxpoll-vote-add' => '您的投票已計入',
	'ajaxpoll-vote-error' => '投票過程發生問題，請再試一次',
	'ajaxpoll-vote-update' => '你的投票已更新',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Simon Shek
 * @author Yfdyh000
 * @author Zoglun
 */
$messages['zh-hans'] = array(
	'ajaxpoll-desc' => '使用<tt>&lt;poll&gt;</tt> 标签（tag）添加基于AJAX的投票功能。',
	//'ajaxpoll-tracking-category' => '有投票的页面',
	'ajaxpoll-vote-update' => '已更新您的投票。',
	'ajaxpoll-vote-add' => '已计入您的投票。',
	'ajaxpoll-vote-error' => '处理您的投票出现问题，请再试一次。',
	'ajaxpoll-percent-votes' => '所有选票的$1%',
	'ajaxpoll-your-vote' => '您在$2已经投票给“$1”，您可以点击下面的答案更改您的投票。',
	'ajaxpoll-no-vote' => '请在下面投票。',
	'ajaxpoll-info' => '自$2创建以来共有{{PLURAL:$1|一人投票| $1 人投票}}。',
	'ajaxpoll-submitting' => '请稍候，正在提交您的投票。',
	'ajaxpoll-vote-permission' => '您没有投票权。',
	'ajaxpoll-revoke-vote' => '我想撤销我的投票',
	'ajaxpoll-vote-revoked' => '您已成功撤销您的投票。',
	'right-ajaxpoll-vote' => '可在基于AJAX的投票区投票',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'ajaxpoll-vote-update' => '已更新您的投票。',
	'ajaxpoll-vote-add' => '已添加您的投票。',
	'ajaxpoll-vote-error' => '處理您的投票發生問題，請再試一次。',
	'ajaxpoll-percent-votes' => '所有選票的$1%',
	'ajaxpoll-your-vote' => '您在$2已經投票給“$1”，您可以點擊下面的答案更改您的投票。',
	'ajaxpoll-no-vote' => '請在下面投票。',
	'ajaxpoll-submitting' => '請稍候，正提交您的投票.',
	'ajaxpoll-vote-permission' => '您無權投票。',
	'ajaxpoll-revoke-vote' => '我想撤銷我的投票',
	'ajaxpoll-vote-revoked' => '您已成功撤銷您的投票。',
	'right-ajaxpoll-vote' => '可在基於AJAX的投票區投票',
);
