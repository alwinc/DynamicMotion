<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animals Map</title>
<link href="../../css/styles.css" rel="stylesheet" type="text/css">
<link href="../../css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="../css/account_after_styles.css" rel="stylesheet" type="text/css">
<link href="../css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="css/home_styles.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="js/imageslider.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body class="background" onLoad="Marquee4(),Mouse()">
<div class="container-After">
  <div class="header"> <a href="../../index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        <li class ="php-user">
          <?php
			session_start();
			if(isset($_GET['username']))
			{
				echo "Welcome, ". $_GET['username'];
			}
		?>
          <!--Welcome word for user login--> 
          <!--li class="support-lg"--> 
        </li>
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="../edit/myAccount.php">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="../../index.html">Log off</a></li>
      </ul>
    </div>
  </div>
  <!-- end .accountbar -->
  <div class="header-wrap">
    <ul class="group" id="header-one" name="header-one">
      <li id="home-wrap" class="current_page_item"> <a href="home.php">Home</a></li>
      <li id="login-wrap"><a href="../login.php">Login</a></li>
      <li id="user-wrap"><a href="../userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="../edit/myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap"><a href="../pest/sight/pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="../report/managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="../pest/pestRegister.php">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="image-wrap"> <!-- The image while loop to right-->
    <ul class="image-middle">
      <div id="colee_right">
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td id="colee_right1" valign="top" align="center"><table cellpadding="2" cellspacing="0" border="0">
                <tr align="center">
                  <td><p><img src="image/goanna1.jpg"></p></td>
                  <td><p><img src="image/goanna-closeup.jpg"></p></td>
                  <td><p><img src="image/heritage-walking-track-03.jpg"></p></td>
                  <td><p><img src="image/little-bay-01.jpg"></p></td>
                  <td><p><img src="image/little-bay-02.jpg"></p></td>
                  <td><p><img src="image/osprey.jpg"></p></td>
                  <td><p><img src="image/sea-acres.jpg"></p></td>
                  <td><p><img src="image/trial-bay.jpg"></p></td>
                  <td><p><img src="image/wildflowers.jpg"></p></td>
                  <td><p><img src="image/monument-hill.jpg"></p></td>
                </tr>
              </table></td>
            <td id="colee_right2" valign="top"></td>
          </tr>
        </table>
      </div>
    </ul>
  </div>
  <!-- end .image-warp -->
  <div class="middle-wrap">
    <ul class="group" id="header-two" name="header-two">
      <li><a href="../report/managementReport.php"><img src="image/websignlayout-15.png"></a></li>
      <li><a href="#"><img src="image/websignlayout-16.png"></a></li>
      <li><a href="../pest/sight/pestSightingIndex.php"><img src="image/websignlayout-17.png"></a></li>
      <li><a href="../pest/pestRegister.php"><img src="image/websignlayout-18.png"></a></li>
      <li id="readme"><a href="#">Read me</a></li>
      <li id="readme"><a href="#">Read me</a></li>
      <li id="readme"><a href="#">Read me</a></li>
      <li id="readme"><a href="#">Read me</a></li>
    </ul>
  </div>
  <!-- end .middle-wrap -->
  <div class="news">
    <ul class="news-bg" id="news-text" name="news-text">
      <p class="news-image-01"></p>
      <label class="news-label-01"> How to help? </label>
      <p class="news-text-01">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.﻿</p>
      <label class="news-label-02">Award Winner!</label>
      <p class="news-text-02">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>
      <label class="news-label-03">Winston Yang</label>
      <p class="news-text-03"> I'm a web developer. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font.</p>
      <p class="news-image-02"> </p>
      <label class="news-label-04">Future Planning</label>
      <li class="news-text-04">
        <p>Methods for learning about the future have been in use by businesses for decades, but the process was simply too complex for most individuals. The Personal Futures Network introduces some new, easily understood approaches that will help you to think and plan like a futurist. You will be able learn about and plan for your personal futures.</p>
        <p>Think like a futurist? What does that really mean, think like a futurist? Well, each futurist may have some different thoughts, but generally futurists think about longer term futures, usually 10 or more years ahead. Futurists believe that the future is not predetermined, but that several futures are possible.</p>
      </li>
      <p class="news-image-03"> </p>
    </ul>
  </div>
  <!-- end .news -->
  <div>
    <ul id="footer-text" name="footer-text">
      <li><a href="#">Blog</a> | <a href="#">Support</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="userRegistration.html">Site Map</a> | <a href="#">News Letter</a> | <a href="#">Join Us</a> | <a href="#">Disclaimer</a> | <a href="#">Policies</a></li>
      <ol>
        ©2013 Dynamic Motion, INC. ALL RIGHTS RESERVED
      </ol>
    </ul>
    <li class="footer-img"><img src="image/websignlayout-23.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/CompanyLogodesign-04.png"></li>
  </div>
</div>
<!-- end .container -->
<div class="footer"> </div>
<!-- end .footer -->
</body>
</html>
