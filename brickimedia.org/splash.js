var pageURL = document.URL;
var splitVal = pageURL.split("#");
var pageDisplay = splitVal[1];
if (pageDisplay == "news") {
	window.onload = function news() {document.getElementById('middle').innerHTML = newsText;document.getElementById('ad').style.display = 'none';};
} else if (pageDisplay == "downtime") {
	window.onload = function downtime() {document.getElementById('middle').innerHTML = aboutDowntime;document.getElementById('ad').style.display = 'none';};
} else if (pageDisplay == "connect") {
	window.onload = function connect() {document.getElementById('middle').innerHTML = stayTuned;document.getElementById('ad').style.display = 'none';};
} else if (pageDisplay == "login") {
	window.onload = function login() {document.getElementById('middle').innerHTML = logIn;document.getElementById('ad').style.display = 'none';};
};

var mainText = "<span class='big'>Welcome &nbsp;to&nbsp; <b>Brickimedia</b>&nbsp;<small><sup><i>ßeta</i></sup></small></span><br/><br/><span class='small'>An open project to create the largest LEGO fan network on the web</span>";
var aboutDowntime = "<span class='small'>About our downtime</span><p>Brickimedia is currently offline due to a recent attack on our server host. As a result, we lost all content on our server, and now have to start over. Although this is inconvenient, it's the only option we have in order to bring our service back into the public.<br /><br />Some changes that you will notice taking place include a refreshed user experience, with easier navigation, editing capability, and customization of the site for your needs. We will also be lessening the amount of projects we host for the time being. From now on, you may access the LEGO Message Boards Wiki <a href='http://legomessageboards.wikia.com' target='_blank'>on Wikia</a>.</p><img src='img/back.svg' width='30px' height='30px' onClick='defaultText()' style='float:right;cursor:pointer;' />";
var newsText = "<span class='small'>Recent updates</span><p><ul><li>Brickimedia is now in a closed beta stage. <a href='http://www.brickimedia.org/george-test/2013-2014-beta-planning.pdf' target='_blank'>Download this PDF</a> to learn more about our beta and release planning schedule.</li><li>An alpha preview of the Brickimedia wikis can be seen on <a href='http://meta.brickimedia.org/wiki/Main_Page'>Brickimedia Meta</a>. As this is in alpha stage, you should expect errors and frequent changes. Anything you add (user accounts, edits, etc) may not transfer over after the alpha period ends.</li><li>You can now follow development and give feedback/issues on <a href='http://www.github.com/Brickimedia/brickimedia'>GitHub</a>!</li><li>Development has started back up!</li><li>The LEGO Message Boards Wiki has <a href='http://legomessageboards.wikia.com/wiki/User_blog:Danielboone6702/The_LMBW_is_not_moving.' target='_blank'>announced</a> they will not move back to Brickimedia for relaunch. You may access their wiki <a href='http://legomessageboards.wikia.com' target='_blank'>on Wikia</a> from now on.</li><li>Unfortunately, Brickimedia data was lost due to an attack on our webhost. <a onClick='downtime()'>Click here</a> for more information.</li></ul></p><img src='img/back.svg' width='30px' height='30px' onClick='defaultText()' style='float:right;cursor:pointer;' />";
var stayTuned = "<span class='small'>Stay tuned</span><p>You can stay up to date with Brickimedia developments on the following networks:<br/><br/><a href='http://www.facebook.com/brickimedia' class='social' target='_blank'><img src='img/c-facebook.png' /></a><a href='http://www.twitter.com/brickimedia' class='social' target='_blank'><img src='img/c-twitter.png' /></a><a href='http://plus.google.com/112287617429747667081' class='social' target='_blank'><img src='img/c-gplus.png' /></a><a href='http://www.github.com/Brickimedia' class='social' target='_blank'><img src='img/c-github.png' /></a><a href='http://www.youtube.com/brickimedia' class='social' target='_blank'><img src='img/c-youtube.png' /></a></p><img src='img/back.svg' width='30px' height='30px' onClick='defaultText()' style='float:right;cursor:pointer;' />";
var logIn = "<h1>One account, seven wikis.</h1>Log in to Brickimedia <a href='http://meta.brickimedia.org/wiki/Special:Random'>(How come?)</a><div id='loginContainer'><form method='POST' action='http://meta.brickimedia.org/api.php?action=login&lgtoken=c2c731e5515b8d2e5d20eb756b8acdc5&format=xml' name='userlogin'><input class='loginInput' id='loginUsername' type='text' name='lgname' placeholder='username' autofocus='autofocus' tabindex='1'/><input class='loginInput' id='loginPassword' type='password' name='lgpassword' placeholder='password' tabindex='2'/><input name='wpRemember' type='checkbox' id='wpRemember' tabindex='3'><label class='smallText' id='loginRemember' for='wpRemember'>Remember me (up to 180 days)</label><input id='loginSubmit' type='submit' value='Log in' name='login' tabindex='4'/></form></div><div id='bottomLinkContainer'><a href='http://meta.brickimedia.org/wiki/Special:UserLogin/signup'>Create an account</a><span class='smallText'> / </span><a href='http://meta.brickimedia.org/wiki/Special:PasswordReset'>Forgotten your password?</a></div>";
function defaultText() {
	document.getElementById('middle').innerHTML = mainText;
	document.getElementById('ad').style.display = 'block';
};
function downtime() {
	var stateObj = { text: "downtime" };
	history.pushState(stateObj, "About our downtime - Brickimedia", "#downtime");
	document.getElementById('middle').innerHTML = aboutDowntime;
	document.getElementById('ad').style.display = 'none';
};
function news() {
	var stateObj = { text: "news" };
	history.pushState(stateObj, "Recent updates - Brickimedia", "#news");
	document.getElementById('middle').innerHTML = newsText;
	document.getElementById('ad').style.display = 'none';
};
function connect() {
	var stateObj = { text: "connect" };
	history.pushState(stateObj, "Stay tuned - Brickimedia", "#connect");
	document.getElementById('middle').innerHTML = stayTuned;
	document.getElementById('ad').style.display = 'none';
};
function login() {
	var stateObj = { text: "login" };
	history.pushState(stateObj, "Log in - Brickimedia", "#login");
	document.getElementById('middle').innerHTML = logIn;
	document.getElementById('ad').style.display = 'none';
};

/* START GOOGLE ANALYTICS CODE */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-38958899-1']);
_gaq.push(['_trackPageview']);
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
/* END GOOGLE ANALYTICS CODE */

/* START GOOGLE AD CODE */
<!--
google_ad_client = "ca-pub-9543775174763951";
google_ad_slot = "9998611139";
google_ad_width = 728;
google_ad_height = 90;
//-->
/* END GOOGLE AD CODE */
