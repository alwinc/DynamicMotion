﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animals Map</title>
<link href="../../css/styles.css" rel="stylesheet" type="text/css">
<link href="../../css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="../css/account_after_styles.css" rel="stylesheet" type="text/css">
<link href="../css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="../css/message_styles.css" rel="stylesheet" type="text/css">
<link href="css/admin_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body>
<div class="container-admin">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="../edit/myAccount.php">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="../../index.html">Log off</a></li>
        <li class ="php-user">
          <?php
			session_start();
			if(isset($_GET['username']))
			{
				echo "Welcome, ". $_GET['username'];
			}
		?>
        </li>
      </ul>
    </div>
    <!--Welcome word for user login--> 
    <!--li class="support-lg"--> 
  </div>
  
  <!-- end .accountbar -->
  <div class="header-wrap">
    <ul class="group" id="header-one" name="header-one">
      <li id="home-wrap" class="current_page_item"> <a href="../home/home.php">Home</a></li>
      <li id="login-wrap"><a href="../login.php">Login</a></li>
      <li id="user-wrap"><a href="../userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="../edit/myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap"><a href="../pest/sight/pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="../report/managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="../pest/pestRegister.php">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="message-admin">
    <ul id="message-bg" name="message-bg">
      <p>&nbsp;</p>
      <ol id="message-title">
        Guide Line:
      </ol>
      <ol id="message-text">
        <a href="../pest/pestRegister.php">1.Pest registration → you can add new pest</a>
      </ol>
      <ol id="message-text">
        2.Update pest → you can update pest profile
      </ol>
      <ol id="message-text">
        <a href="../edit/userUpdate.php">3.User update → you can update user profile</a>
      </ol>
      <ol id="message-text">
        <a href="../edit/deleteUser.php">4.Delete user → you can delete existed user</a>
      </ol>
      <p>&nbsp;</p>
      <ol id="goback">
        <a href="../home/home.php">Back to Home page</a>
      </ol>
    </ul>
  </div>
  <!-- end .message -->
  <div>
    <ul id="footer-text" name="footer-text">
      <li><a href="#">Blog</a> | <a href="#">Support</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Site Map</a> | <a href="#">News Letter</a> | <a href="#">Join Us</a> | <a href="#">Disclaimer</a> | <a href="#">Policies</a></li>
      <ol>
        ©2013 Dynamic Motion, INC. ALL RIGHTS RESERVED
      </ol>
    </ul>
    <li class="footer-img"> <img src="image/websignlayout-23.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/CompanyLogodesign-04.png"> </li>
  </div>
</div>
<!-- end .container -->
<div class="footer"> </div>
<!-- end .footer -->
</body>
</html>
