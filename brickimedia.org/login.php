<!-- Currently, it doesn't work near as I can tell; we should change it to a PHP-based login system anyway though, but someone more knowledgeable in PHP than I am should do that. Also, as it is set up currently the "remember me" button doesn't do anything and the "how come" link links to a random page on Meta (eventually, it might be good to have it trigger some JS to make a message appear). -MtMNC -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sign in - Brickimedia</title>
<link rel="stylesheet" type="text/css" href="resources/fonts/lato/lato.css">
<link rel="stylesheet" type="text/css" href="login.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
function wiki_auth(login, pass, ref){
    $.post('http://meta.brickimedia.org/api.php?action=login&lgname=' + login + 
            '&lgpassword=' + pass + '&format=json', function(data) {
        if(data.login.result == 'NeedToken') {
            $.post('http://meta.brickimedia.org/api.php?action=login&lgname=' + login + 
                    '&lgpassword=' + pass + '&lgtoken='+data.login.token+'&format=json', 
                    function(data) {
                if(!data.error){
                   if (data.login.result == "Success") { 
                        document.location.href=ref;
                   } else {
                        alert('Result: '+ data.login.result);
                   }
                } else {
                   alert('Error: ' + data.error);
                }
            });
        } else {
            alert('Result: ' + data.login.result);
        }
        if(data.error) {
            alert('Error: ' + data.error);
        }
    });
	alert("???");
}

$("#loginSubmit").click(function() {
    username = $("#loginUsername").val(); 
    password = $("#loginPassword").val(); 
    wiki_auth(username, password, "http://meta.brickimedia.org");
});
</script>
</head>

<body>
<a href="http://brickimedia.org"><img src="http://meta.brickimedia.org/images/c/cd/Brickimedia_logo_WHITE.svg" id="logoHeader" alt="Brickimedia Logo"/></a>
<h1>One account, seven wikis.</h1>
Log in to Brickimedia <a href="http://meta.brickimedia.org/wiki/Special:Random">(How come?)</a>

<div id="loginContainer">
	<form method="POST" action="">
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
</body>
</html>
