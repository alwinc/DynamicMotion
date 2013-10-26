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
        <li class="support-ac"><a href="#">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="index.html">Log off</a></li>
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
      <li id="admin_pest_register-wrap" class="current_page_item"> <a href="pestRegister.php">Pest Register</a></li>
      <li id="admin_update_past-wrap"><a href="updatePestDetail.php">Pest update</a></li>
      <li id="admin_update_user-wrap"><a href="userUpdate.php">Update User</a></li>
      <li id="admin_delete_user-wrap"><a href="deleteUser.php">Delete User</a></li>
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
        1.Pest registration → you can add new pest
      </ol>
      <ol id="message-text">
        2.Update pest → you can update pest profile
      </ol>
      <ol id="message-text">
        3.User update → you can update user profile
      </ol>
      <ol id="message-text">
        4.Delete user → you can delete exsited user
      </ol>
      <p>&nbsp;</p>
      <ol id="goback">
        <a href="home.php">Back to Home page</a>
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
