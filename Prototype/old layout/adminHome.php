<?php
		session_start();
		if(!isset($_SESSION['logged_in']))
		{
			header("location: login.php");
		}
?>
<!doctype html>
<html>
<head>
<head>
<link rel="icon" href="image/websitelogo.ico">
<meta charset="utf-8">
<title>Animals Map</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="css/account_after_styles.css" rel="stylesheet" type="text/css">
<link href="css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="css/message_styles.css" rel="stylesheet" type="text/css">
<link href="css/admin_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container-admin">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="myAccount.php">MyAccount</a></li>
        <li class="support-sp"><a href="SupportPage.php">Support</a></li>
        <li class="support-lo"><a href="logout.php">Log off</a></li>
        <li class ="php-user">
          <?php
			if(isset($_SESSION['username']))
			{
				echo "Welcome, ". $_SESSION['username'];
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
      <li id="home-wrap" class="current_page_item"> <a href="home.php">Home</a></li>
      <li id="login-wrap"><a href="login.php">Login</a></li>
      <li id="user-wrap"><a href="userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="userUpdate.php">User Update</a></li>
      <li id="sighing-wrap"><a href="pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestTracking.php">Pest Tracking</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="message-admin">
    <ul id="message-bg" name="message-bg">
      <section class="messageform cf">
        <p>&nbsp;</p>
        <ol id="message-title">
          Guide Line:
        </ol>
        <ol id="admin_main_text">
          <p id="admin-text"> <img src="image/orderedList1.png"><a href="pestRegister.php">&nbsp;Pest registration</a> → you can register new pest. </p>
          <p id="admin-text"> <img src="image/orderedList2.png"><a href="updatePestDetail.php">&nbsp;Update pest </a> → you can update pest profile </p>
          <p id="admin-text"> <img src="image/orderedList3.png"><a href="DeletePest.php">&nbsp;Delete pest</a> → you can delete exsited pest. </p>
          <p id="admin-text"> <img src="image/orderedList4.png"><a href="deletePestSighting.php">&nbsp;Delete pest sighting</a> → you can delete pest sighting. </p>
          <p id="admin-text"> <img src="image/orderedList5.png"><a href="userUpdate.php">&nbsp;User update</a> → you can update user profile. </p>
          <p id="admin-text"> <img src="image/orderedList6.png"><a href="deleteUser.php">&nbsp;Delete user</a> → you can delete existed user. </p>
        </ol>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p id="goback"> <a href="home.php">Back to Home page</a> </p>
      </section>
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
