<?php
		session_start();
		if(!isset($_SESSION['logged_in']))
		{
			header("location: login.php");
		}
?>
<!doctype html>
<html>
<head><link rel="icon" href="image/favicon.ico">
<meta charset="utf-8">
<title>Animals Map</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="css/account_after_styles.css" rel="stylesheet" type="text/css">
<link href="css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="css/user_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script>
<body>
<div class="container-account">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        <li class ="php-user">
          <?php
			if(isset($_SESSION['username']))
			{
				echo "Welcome, ". $_SESSION['username'];
			}
		?>
          <!--Welcome word for user login--> 
          <!--li class="support-lg"--> 
        </li>
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="myAccount.php">MyAccount</a></li>
        <li class="support-sp"><a href="SupportPage.php">Support</a></li>
        <li class="support-lo"><a href="logout.php">Log off</a></li>
      </ul>
    </div>
  </div>
  <!-- end .accountbar -->
  <div class="header-wrap">
    <ul class="group" id="header-one" name="header-one">
      <li id="home-wrap"> <a href="home/home.php">Home</a></li>
      <li id="login-wrap"><a href="login.php">Login</a></li>
      <li id="user-wrap"><a href="userRegister.php">Register</a></li>
      <li id="account-wrap" class="current_page_item"><a href="myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap"><a href="pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestTracking.php">Pest Tracking</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="myAccount">
    <ul id="myAccount-bg" name="myAccount-bg">
      <section class="myAccountform cf">
        <form name="profileUser" action="" method=POST accept-charset="utf-8">
          <ul>
            <p> <img src="image/loginpage-02.png"></p>
            <p>
              <label id="myAccount-title-one">Account Details</label>
            </p>
            <p>
              <label id="myAccount-title-two">Account name</label>
            </p>
            <p id="myAccount-content">ruiyang@gmail.com</p>
            <p>
              <label id="myAccount-title-two">Your name</label>
            </p>
            <p id="myAccount-content">rui yang</p>
            <p>
              <label id="myAccount-title-two">Your Account Type</label>
            </p>
            <p id="myAccount-content">Administrator</p>
            <p>
              <label id="myAccount-title-two">Park of Registration</label>
            </p>
             <p id="myAccount-content">Hunter and Mid North Coest</p>
            <p>
              <label id="myAccount-title-one">Account Security</label>
            </p>
            <p>
              <label id="myAccount-title-two">Authenticator</label>
            </p>
            <p id="myAccount-content">No Authenticator</p>
            <p>
              <label id="myAccount-title-two">Animal Map SMS Protect</label>
            </p>
            <p id="myAccount-content">Alerts disabled</p>
            <p> <li class="update-button"> <a href="userUpdate.php">
              <input type="submit" id="update_button" name="update_button" value="Edit"/>
              </a> </li>
              <li class="delete-button"> <a href="deleteUser.php">
              <input type="submit" id="delete_button" name="delete_button" value="Delete"/>
              </a></li> </p>
          </ul>
        </form>
      </section>
    </ul>
  </div>
  <div>
    <ul id="footer-text" name="footer-text">
      <li><a>Blog</a> | <a>Support</a> | <a>About Us</a> | <a>Contact Us</a> | <a>Site Map</a> | <a>News Letter</a> | <a>Join Us</a> | <a>Disclaimer</a> | <a>Policies</a></li>
      <ol>
        ?2013 Dynamic Motion, INC. ALL RIGHTS RESERVED
      </ol>
    </ul>
    <li class="footer-img"><img src="image/websignlayout-23.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/CompanyLogodesign-04.png"> </li>
  </div>
</div>
<!-- end .container -->
<div class="footer"> </div>
<!-- end .footer -->
</body>
</html>
