<?php
/*------------------------\
|        TTT STATS        |
|	       Beta           |
|=========================|
|© 2013 SNGaming.org      |
|	All Rights Reserved   |
|=========================|
| 	Website printout      |
| 	   beta testing       |
| 	   by Handy_man       |
\------------------------*/		
require("./includes/session_start.php");
if (isset($_SESSION['myusername'])){
//Do nothing we've logged in, we're happy. Might add more stuff here later.
}
else{
header('Location: http://www.thehiddennation.com/ttt_stats/');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link href="static/main.css" media="screen" rel="stylesheet" type="text/css" />
		<title>[Awesome Stats!] Trouble in Terrorist Town</title>
	</head>
			<body>
				<div id="page">
				
			

				<div id="logo">
				<a href="http://www.sngaming.org"><img src="./static/images/skynet_logo.png" alt="www.sngaming.org" title="www.sngaming.org"/></a>
				</div>
						<div id='search'>
							<a href="http://www.facebook.com/sngaming2013"><img src="./static/images/iconFacebook.png" alt="Follus us on Facebook" title="Follow us on Facebook"/></a>
							<a href="http://www.twitter.com/skynet_gaming"><img src="./static/images/iconTwitter.png" alt="Follus us on Twitter" title="Follow us on Twitter"/></a>
							<a href="http://www.youtube.com/SkyNetNation"><img src="./static/images/iconYoutube.png" alt="Subscribe to us on YouTube" title="Subscribe to us on YouTube"/></a>
							<a href="http://steamcommunity.com/groups/Sky-NetGaming"><img src="./static/images/iconSteam.png" alt="Join our Steam group!" title="Join our Steam group!"/></a>
							<a href="http://twitch.tv/skynetgaming"><img src="./static/images/iconTwitch.png" alt="Follow us on Twitch!" title="Follow us on Twitch!"/></a>
							
							
						</div>
					
					<nav>
						<ul>
						<li>
						<a href="index.php">Home</a>
						</li>
						<li>
							<a href="#">control</a>
							<ul>
							<li><a href="control-reports.php">Reports</a></li>
							</ul>
						</li>
						<li>
						<a href="logout.php">logout</a>
						</li>
						</ul>
					</nav>
					