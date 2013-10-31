<?php
session_start();
if(!isset($_SESSION['logged_in']))
{
header("location: login.php");
}
?>

<!doctype html>
<html>
<link rel="icon" href="image/websitelogo.ico">
<meta charset="utf-8">
<title>Animals Map</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="css/account_after_styles.css" rel="stylesheet" type="text/css">
<link href="css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="css/user_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container-delete">
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
      <li id="home-wrap"> <a href="home.php">Home</a></li>
      <li id="login-wrap"><a href="login.php">Login</a></li>
      <li id="user-wrap"><a href="userRegister.php">Register</a></li>
      <li id="account-wrap" class="current_page_item"><a href="myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap"><a href="pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestTracking.php">Pest Tracking</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="delete_user">
    <ul id="delete-bg" name="delete-bg">
      <section class="deleteform cf">
        <form name="deleteUser" action="userDelete.php" method=POST accept-charset="utf-8">
          <ul>
            <label id="myAccount-title-one"> Delete User </label>
            <p class="error" id="issue-massage"name="issue-massagee">
            <li>
              <?php	
						if(isset($_GET['error']))
						{
							echo 'Account does not exsit';
						}
						?>
              <?php
if(isset($_GET['success']))
                 {
                         echo 'Account has ben deleted';
                  }
?>
            </li>
            </p>
            <p id="myAccount-title-two">
              <label for="email_signup" data-icon="e">E-mail Address</label>
            </p>
            <p id="myAccount-title-two">
              <input name="email" required ="required" type="email" placeholder="Enter E-mail Address" required/>
            </p>
            <p class="confim-button"> <a href="userDelete.php" onclick="document.forms['deleteUser'].submit(); return false;">
              <input type="submit" id="confim_button" name="confim_button" value="Confim"/>
              </a></p>
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
