<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- SPLASH PAGE DESIGN BY GEORGE BARNICK -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#429ec8"/>
<meta name="msapplication-square70x70logo" content="tiny.png"/>
<meta name="msapplication-square150x150logo" content="square.png"/>
<meta name="msapplication-wide310x150logo" content="wide.png"/>
<meta name="msapplication-square310x310logo" content="large.png"/>
<title>Brickimedia</title>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-9543775174763951";
/* Splash page ad */
google_ad_slot = "9998611139";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<link rel="stylesheet" type="text/css" href="resources/fonts/lato/lato.css">
<style>
@media screen and (max-width: 1024px) {
	.tab {
		width: 16.67%;
		font-size: smaller;
		padding-bottom: none;
	}
	#middle {
		font-size: small;
	}
	select#searchSite {
		width: 100px;
	}
}

body {
	background: url(img/bg.jpg) 0px 100px no-repeat fixed;
	background-size: 100% auto;
	text-align: center;
}

#topbar {
	position: fixed;
	top: 50px;
	right: 0;
	width: 100%;
	height: 50px;
	background: #333333;
	z-index: 9999;
}

.announcebar {
	background: rgba(65,158,200,1);
	position: fixed;
	top: 0;
	right: 0;
	width: 100%;
	height: 50px;
	z-index: 10000;
	color: #ffffff;
	font-family: 'Lato', sans-serif;
}

.announcebig {
	font-size: 125%;
	margin-bottom: 15px;
	font-weight: bold;
}

.announcetri {
	height: 20px !important;
	width: 20px !important;
	position: fixed;
	top: 50px;
	left: 173px;
	background: url(img/announcetri-blue.png) 0 0 no-repeat;
	z-index: 10000;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
}

#toplinks {
	color: #eaeaea;
	font-family: 'Lato', sans-serif;
	font-size: 105%;
	position: fixed;
	top: 65px;
	right: 20px;
}

#toplinks a {
	text-decoration: none;
	color: #ffffff;
}

#middle {
	display: inline-block;
	width: 80%;
	background: rgba(65,158,200,0.6);
	margin-top: 150px;
	color: #ffffff;
	font-family: 'Lato', sans-serif;
	padding-top: 10px;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 25px;
}

.big {
	font-size: 330%;
}

.small {
	font-size: 170%;
}

#bottomContainer {
	position: absolute;
	top: 90%;
	right: 0;
	width: 100%;
	height: 200px;
	text-align: center;
	overflow: hidden;
	background: rgba(0,0,0,0.6);
}

#bottomContainer2 {
	position: absolute;
	bottom: 0;
	right: 0;
	width: 100%;
	height: 60px;
	background: #333333;
	text-align: center;
	overflow: hidden;
}

.tab {
	width: 15%;
	height: 100%;
	font-family: 'Lato', sans-serif;
	-webkit-transition: all .4s ease-in-out;
	-moz-transition: all .4s ease-in-out;
	-o-transition: all .4s ease-in-out;
	-ms-transition: all .4s ease-in-out;
	transition: all .4s ease-in-out;
	display: inline-block;
	cursor: pointer;
	padding: 10px;
}

.tab.meta:hover {
	background: #89959E;
}
.tab.en:hover {
	background: #3D9EC8;
}
.tab.customs:hover {
	background: #AD2B2B;
}
.tab.stories:hover {
	background: #608e8e;
}
.tab.cuusoo:hover {
	background: #FAC80A;
}

.tab b {
	font-size: 140%;
}

a {
	color: #ffffff;
	text-decoration: none;
}

img {
	margin-top: 7px;
}

/* these look really bad on 1920x1080 resolution, but the damn thing is floated. next update we should use percentages */
.secContainer {
	background: #eaeaea;
	width: 100%;
	position: absolute;
	top: 100%;
	right: 0;
	padding-top: 30px;
	pading-bottom: 40px;
	font-family: sans-serif;
	color: #555555;
	text-align: left !important;
	margin-bottom: 100px;
}

.secTitle {
	font-family: 'Lato', sans-serif;
	font-size: 300%;
	border-bottom: 1px solid #888888;
	padding-right: 250px;
	padding-left: 250px;
	color: #333333 !important;
}

.secSubtitle {
	font-family: 'Lato', sans-serif;
	font-size: 200%;
	color: #444444 !important;
}

.secMargin {
	margin-right: 200px;
	margin-left: 100px;
	width: 450px;
	padding-bottom: 25px;
}

.secMargin2 {
	margin-right: 150px;
	margin-left: 200px;
	width: 350px;
	padding-bottom: 100px;
	float: right;
}

.seemore {
	float: right;
	font-style: italic;
	font-family: sans-serif;
	font-size: 90%;
	color: #555555 !important;
	text-decoration: none;
	padding-right: 50px;
}

#video {
	float: right;
	margin-right: 125px;
	margin-top: 100px;
}

#twitterBlock {
	float: left;
	margin-left: 125px;
	margin-top: 35px;
	width: 400px;
}
#ad {
	width: 728px;
	height: 90px;
	background: #ffffff;
	display: inline-block;
	margin-bottom: 100px;
}
</style>
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<!-- BEGIN FACEBOOK LIKE BUTTON SCRIPT -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=170482364649";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- END FACEBOOK LIKE BUTTON SCRIPT -->
<div class="announcebar">
	<form class="search-form" action="search.php" method="get" style="text-align:left;border:none;position:absolute;top:56px;left:6px;">
		<fieldset style="border:none;">

			<input id="searchInput" name="search" type="search" size="20" autofocus accesskey="F">

			<select id="searchSite" name="site">
				<option value="meta">Brickimedia Meta</option>
				<option value="en" selected="selected">Brickipedia</option>
				<option value="customs">Brickipedia Customs</option>
				<option value="stories">LEGO Stories Wiki</option>
				<option value="cuusoo">LEGO CUUSOO Wiki</option>
			</select>

			<input id="formBtn" type="submit" value="Search" onClick="openSearchPage">

		</fieldset>
	</form>
	<span class="announcebig">Looking for something?</span><br/>
    Search for it among your favorite LEGO wikis!
</div>
<div class="announcetri">&nbsp;</div>
<div id="topbar">
	<img src="img/logo.png" alt="Brickimedia Logo" />
    <div id="toplinks">
    	<!--<a href="http://meta.brickimedia.org/wiki/Special:UserLogin">
        	Log in
        </a>
        &nbsp;|&nbsp;
        <a href="http://meta.brickimedia.org/wiki/Special:UserLogin/signup">
        	Sign up
        </a>-->
        <!--<a href="http://meta.brickimedia.org/wiki/Special:Mypage">
        	<?php //echo $_COOKIE['bmsharedUserName']; ?>
        </a> -->
        
        <?php
		if ( $_COOKIE['bmsharedUserName'] == "" ) {
			echo '
				<a href="http://meta.brickimedia.org/wiki/Special:UserLogin"> Log in </a>
				&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="http://meta.brickimedia.org/wiki/Special:UserLogin/signup"> Sign up </a>
			';
		} else {
			echo '
				<a href="http://meta.brickimedia.org/wiki/Special:Mypage">' . $_COOKIE['bmsharedUserName'] . '</a>
				&nbsp;&nbsp;|&nbsp;&nbsp;
				<!--<a href="http://meta.brickimedia.org/wiki/Special:Mytalk">Talk</a>
				&nbsp;&nbsp;|&nbsp;&nbsp;-->
				<a href="http://meta.brickimedia.org/wiki/Special:UserLogout">Log out</a>
			';
		}
		?>
    </div>
</div>
<div id="middle">
<span class="big">Welcome &nbsp;to&nbsp; <b>Brickimedia</b></span><br/><br/>
<span class="small">An open project to create the largest LEGO fan network on the web</span>
</div>
<div class="tab-background"></div>
<div id="bottomContainer">
	<a href="http://meta.brickimedia.org"><div class="tab meta">
    	<b>META</b>
    </div></a>
    <a href="http://en.brickimedia.org"><div class="tab en">
    	<b>BRICKIPEDIA</b>
    </div></a>
    <a href="http://customs.brickimedia.org"><div class="tab customs">
    	<b>CUSTOMS</b>
    </div></a>
    <a href="http://stories.brickimedia.org"><div class="tab stories">
    	<b>STORIES</b>
    </div></a>
    <a href="http://cuusoo.brickimedia.org"><div class="tab cuusoo">
    	<b>CUUSOO</b>
    </div></a>
</div>
<br clear="all"/>
<div class="secContainer">
	<center><span class="secTitle">About&nbsp; Brickimedia</span></center><br clear="all"/>
    <div id="video">
    	<iframe width="560" height="315" src="http://www.youtube.com/embed/TjpGeZvr7wQ?vq=hd720" frameborder="0" allowfullscreen>
        </iframe>
        <hr color="#888888" size="1"/>
        <div class="fb-like" data-href="http://www.facebook.com/brickimedia" data-send="true" data-width="450" data-show-faces="true" height="50px"></div>
    </div>
    <div class="secMargin">
    <center><span class="secSubtitle">Mission</span></center><br/>
    The <strong>Brickimedia Association</strong> is a privately held organization dedicated to maintaining and promoting a free encyclopedia on everything related to LEGO and LEGO products, as well as establishing a fan site and community around it.
    <br/><br/><br/><br/>
    <center><span class="secSubtitle">History</span></center><br/>
    The very first version of Brickipedia was created on March 4th, 2005, hosted under a Wikia domain. At first, it was a very vague and unorganised landscape, but quickly started to attract contributors and LEGO fans of all ages from across the globe to add information on their favourite themes and talk about the hobby. Brickipedia's administration team underwent many changes in the eight years since its conception, and in January the current team decided that it would be best for the community to move off Wikia and onto its own domain for the very first time.
    <br/><br/>
    Joining with other popular LEGO wikis similarly moving, Brickipedia became Brickimedia, an open project to create a large LEGO fan network for all ages.
    <br clear="all"/><br/>
    <a class="seemore" href="http://meta.brickimedia.org/wiki/Brickimedia_Association">Learn more</a>
    </div>
    <br clear="all"/><br/><br/><br/>
    <center><span class="secTitle">Be&nbsp; a &nbsp;Part</span></center><br clear="all"/>
    <center>The best way to be a part of Brickimedia is to <a href="http://meta.brickimedia.com/wiki/Special:UserLogin/signup" style="color:#a5a5a5;">sign up</a>. It's completely free, and grants you the ability to use all the features the network has to offer!</center>
    <br clear="all"/>
    <div id="twitterBlock">
    	<a class="twitter-timeline" href="https://twitter.com/Brickimedia" data-widget-id="321401343996731392">Tweets by @brickimedia</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <div class="secMargin2">
    <br/>
    <center><span class="secSubtitle">Socialize</span></center><br/>
    Join us on any of our social networks to stay up to date with Brickimedia, LEGO and the LEGO community
    <br/><br/>
    <center>
    	<a href="http://www.facebook.com/brickimedia" style="margin-right:20px;">
        	<img src="img/facebook.png" alt="Facebook" />
        </a>
        <a href="http://www.twitter.com/brickimedia" style="margin-right:20px;">
        	<img src="img/twitter.png" alt="Twitter" />
        </a>
        <a href="http://www.youtube.com/brickimedia">
        	<img src="img/youtube.png" alt="YouTube" />
        </a>
    </center>
    <br/><br/><br/><br/>
    <center><span class="secSubtitle">Donate</span></center><br/>
    As a private organization, we rely on ad revenue and donations to keep the site running. Every cent counts, so even the smallest donations help us to make a better site and a more successful network.
    <br/><br/>
    <center>
    <!-- BEGIN PAYPAL BUTTON CODE -->
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
			">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>
    <!-- END PAYPAL BUTTON CODE -->
	</center>
    <br clear="all"/><br/><br/>
</div>
    <center>
    <div id="ad">
		<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
	</div>
    </center>
<div id="bottomContainer2">
	<a href="http://meta.brickimedia.org"><div class="tab meta">
    	<b>META</b>
    </div></a>
    <a href="http://en.brickimedia.org"><div class="tab en">
    	<b>BRICKIPEDIA</b>
    </div></a>
    <a href="http://customs.brickimedia.org"><div class="tab customs">
    	<b>CUSTOMS</b>
    </div></a>
    <a href="http://lmbw.brickimedia.org"><div class="tab lmbw">
    	<b>LMB WIKI</b>
    </div></a>
    <a href="http://stories.brickimedia.org"><div class="tab stories">
    	<b>STORIES</b>
    </div></a>
    <a href="http://cuusoo.brickimedia.org"><div class="tab cuusoo">
    	<b>CUUSOO</b>
    </div></a>
</div>
</div>

<!-- BEGIN GOOGLE ANALYTICS CODE -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38958899-1']);      // Ask George or Adrian for access to Google Analytics
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- END GOOGLE ANALYTICS CODE -->
</body>
</html>