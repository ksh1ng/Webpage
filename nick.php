<?php
session_start();
  $handler = fopen("unique_count.txt", "r");
  $unique_count = (int)fread($handler, 20);
  fclose($handler);

  $count = 0;

  if (isset($_COOKIE['counter_v2'])) {
	  $count = strip_tags($_COOKIE['counter_v2']);
	  
  }
  else {  //user without  cookie is new visitor
	  $unique_count ++;
	  $handler = fopen("unique_count.txt", "w");
	  fwrite($handler, $unique_count);
	  fclose($handler);
  }


  if (!isset($_SESSION['entered'])) {
    $count += 1;
    $_SESSION['entered'] = 0;
    setcookie('counter_v2', $count, time() + 30*24*60*60);
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Endearing Green
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130425

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<style type="text/css">
	body {
		-moz-user-select : none;
		-webkit-user-select: none;
	}
</style>
</head>
<body>

  <script>
		

	var userName = prompt("What's your name?", "Enter your name here");
  	while (typeof userName === 'undefined'){
		
		alert("Sorry bro");
		var userName = prompt("What's your name?", "Enter your name here");
	}

	</script>

 
<div id="wrapper-bg">
	<div id="wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#"><span>Life</span>Strive</a></h1>
		<h2>Welcome <span id="welcome" style="text-decoration:underline; font-size:25px;"</span></h2>
<script>document.getElementById("welcome").innerHTML=userName</script>
	
			<h2><?php echo "You have entered this site {$count} time(s)!</br>";?></h2>

			</div>
			<div id="menu">
				<ul>
					<li class="active"><a href="#" accesskey="1" title="">Homepage</a></li>
			
	<li><a href="message_board/nick.php"  accesskey="2" title="">Let's Talk</a></li>

				<!--	<li><a href="#" accesskey="3" title="">About Us</a></li>
					<li><a href="#" accesskey="4" title="">Careers</a></li>
					<li><a href="#" accesskey="5" title="">Contact Us</a></li>  -->
				</ul>
			</div>
		</div>
		<div id="banner" class="container"> <img src="images/header-photo.jpg" width="1200" height="400" alt="" /> </div>
		<div id="three-column" class="container">
			<header>
				<h2>About me</h2>
			</header>
				<div class="tbox1">
				<div class="box-style box-style01">
					<div class="content"> <a href="#" class="image image-full"><img src="images/HGS.jpg" alt=""></a>
						<h2>Kshing</h2>
						<p> </p>
						<a href="#" class="button-style">Learn More</a> </div>
				</div>
			</div>
			<div class="tbox2">
				<div class="box-style box-style02">
					<div class="content"> <a href="#" class="image image-full"><img src="images/img03.jpg" alt=""></a>
						<h2>Interactive Area! </h2>

	<?php
// Chatroll Single Sign-On (SSO) Parameters
$uid = 1;                   // Current user id
$uname = 'test';            // Current user name
$ulink = 'http://example.com/profile/test';   // Current user profile URL (leave blank for none)
$upic = '';                 // Current user profile picture URL (leave blank for none)
$ismod = 0;                 // Is current user a moderator?
$sig = md5($uid . $uname . $ismod . 'huv9779khagx02dt');
$ssoParams = '&uid=' . $uid . "&uname=" . urlencode($uname) . "&ulink=" . urlencode($ulink) . "&upic=" . urlencode($upic) . "&ismod=" . $ismod . "&sig=" . $sig;
?>
<iframe width='450' height='350' src='https://chatroll.com/embed/chat/4smg?id=deoN9apkLvJ&platform=php<?= $ssoParams ?>' frameborder='0' scrolling='no' marginheight='10' marginwidth='10' allowtransparency='true'></iframe>

						<p>Loading...</p>
						<a href="#" class="button-style">Learn More</a> </div>
				</div>
			</div>
		</div>
		<div id="page">
			<div id="content"></div>
			<div id="sidebar"></div>
		</div>
	</div>
	<div id="footer-content" class="container">
		<div id="fbox1">
			<h1>Date</h1>
			<ul class="style3">
				<li class="first">
					<h2><b> Today is</b> </h2>
					<p class='date'><a href="#"><script> document.write(new Date().toLocaleDateString()); </script></a></p>
	
 		</li>

			</ul>
		</div>

		<div id="fbox2">
			<h1>Total number of Vistors<br></h1>
			<h1>==><strong> <?php echo $unique_count ; ?></h1>
					   </li>
	
			</ul>
		</div>

		<div id="fbox3">
			<h2>Contact</h2>
			<p>i.</p>
			<ul class="style5">
				<li class="first"><span class="address">Address</span> <span class="address-01">Somewhere...<br /></span> </li>
				<li> <span class="mail">Mail</span> <span class="mail-01"><a href="#">opompm841218@gmail.com</a></span> </li>
				<li> <span class="phone">Phone</span> <span class="phone-01">Loading...</span> </li>
			</ul>
		</div>
	</div>
</div>
<div id="footer">
	<p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>

<script type="text/javascript">
//<!--
function iEsc(){ return false; }
function iRec(){ return true; }
function DisableKeys() {
	if(event.ctrlKey || event.shiftKey || event.altKey) {
		window.event.returnValue=false;
		iEsc();
	}
}
document.ondragstart=iEsc;
document.onkeydown=DisableKeys;
document.oncontextmenu=iEsc;
if (typeof document.onselectstart !="undefined")
	document.onselectstart=iEsc;
else{
	document.onmousedown=iEsc;
	document.onmouseup=iRec;
}
function DisableRightClick(qsyzDOTnet){
	if (window.Event){
		if (qsyzDOTnet.which == 2 || qsyzDOTnet.which == 3)
			iEsc();
	}else if (event.button == 2 || event.button == 3){
		event.cancelBubble = true
		event.returnValue = false;
		iEsc();
	}
}
//-->
</script>
</body>
</html>
