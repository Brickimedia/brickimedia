<?php
/*Currently, it doesn't work near as I can tell; we should change it to a PHP-based login system anyway though, but someone more knowledgeable in PHP than I am should do that. Also, as it is set up currently the "remember me" button doesn't do anything and the "how come" link links to a random page on Meta (eventually, it might be good to have it trigger some JS to make a message appear). -MtMNC */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sign in - Brickimedia</title>
<link rel="stylesheet" type="text/css" href="resources/fonts/lato/lato.css">
<link rel="stylesheet" type="text/css" href="login.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>

<body>
<div id="topbar">
        <a href="http://brickimedia.org"><img src="img/logo.png" alt="Brickimedia Logo" width="144" height="30" /></a>
</div>
<div id="middle">
<h1>One account, seven wikis.</h1>
Log in to Brickimedia <a href="http://meta.brickimedia.org/wiki/Special:Random">(How come?)</a>

<div id="loginContainer">
	<form method="POST" action="http://meta.brickimedia.org/api.php?action=login&lgtoken=c2c731e5515b8d2e5d20eb756b8acdc5" name="userlogin">
		<input class="loginInput" id="loginUsername" type="text" name="lgname" placeholder="username" autofocus="autofocus" tabindex="1"/>
		<input class="loginInput" id="loginPassword" type="password" name="lgpassword" placeholder="password" tabindex="2"/>
		<input name="wpRemember" type="checkbox" id="wpRemember" tabindex="3">				
        <label class="smallText" id="loginRemember" for="wpRemember">Remember me (up to 180 days)</label>
        <input id="loginSubmit" type="submit" value="Log in" name="login" tabindex="4"/>
	</form>
</div>
<div id="bottomLinkContainer">
	<a href="http://meta.brickimedia.org/wiki/Special:UserLogin/signup">Create an account</a><span class="smallText"> / </span><a href="http://meta.brickimedia.org/wiki/Special:PasswordReset">Forgotten your password?</a>
</div>
</div>
</body>
</html>
