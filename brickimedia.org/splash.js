var mainText = "<span class='big'>Welcome &nbsp;to&nbsp; <b>Brickimedia</b>&nbsp;<small><sup><i>ßeta</i></sup></small></span><br/><br/><span class='small'>An open project to create the largest LEGO fan network on the web</span>";
var aboutDowntime = "<span class='small'>About our downtime</span><br/><br/>Brickimedia is currently offline due to a recent attack on our server host. As a result, we lost all content on our server, and now have to start over. Although this is inconvenient, it's the only option we have in order to bring our service back into the public.<br /><br />Some changes that you will notice taking place include a refreshed user experience, with easier navigation, editing capability, and customization of the site for your needs. We will also be lessening the amount of projects we host for the time being. From now on, you may access the LEGO Message Boards Wiki <a href='http://legomessageboards.wikia.com'>on Wikia</a>.<br/><br/><img src='img/back.svg' width='30px' height='30px' onClick='defaultText()' style='float:right;cursor:pointer;' />";
var newsText = "<span class='small'>Recent updates</span><br/><br/><ul><li>You can now follow development and give feedback/issues on <a href='http://www.github.com/Brickimedia/brickimedia'>GitHub</a>!</li><li>Development has started back up!</li></ul><br/><br/><img src='img/back.svg' width='30px' height='30px' onClick='defaultText()' style='float:right;cursor:pointer;' />";
var stayTuned = "<span class='small'>Stay tuned</span><br/><br/>Placeholder<br/><br/>Social links will go here and stuff<br/><br/><img src='img/back.svg' width='30px' height='30px' onClick='defaultText()' style='float:right;cursor:pointer;' />";
function defaultText() {
	document.getElementById('middle').innerHTML = mainText;
};
function downtime() {
	document.getElementById('middle').innerHTML = aboutDowntime;
};
function news() {
	document.getElementById('middle').innerHTML = newsText;
};
function connect() {
	document.getElementById('middle').innerHTML = stayTuned;
};