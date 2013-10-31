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
<link href="css/page_styles.css" rel="stylesheet" type="text/css">
<link href="css/user_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script>
<body>
<div class="container-register">
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
  <div class="register">
    <ul id="register-bg" name="register-bg">
      <section class="registerform cf">
        <form name="profileUpdate" action="updateInput.php" method=POST accept-charset="utf-8">
          <ul>
            <li id="header-signup">
              <h4>Profile  Update</h4>
            </li>
<li class="error" id="issue-massage"name="issue-massagee">
              <p>
                <?php	
						if(isset($_GET['error']))
						{
							echo 'Account does not exsit';
						}
						?>
              </p>
            </li>
<li id="mail_box"> 
              <label for="email_signup" class="u_mail" data-icon="e" >E-mail Address</label>
              <input id="email_signup" name="email" required = "required" type="email" placeholder="Enter E-mail Address" required/>
<li id="name_box">
<label for="user_name_signup" class="u_name" data-icon="u">Name</label>
<input id="F_name_signup" name="F_name_update" required = "required"type="text" placeholder="First Name" required/>
<input id="L_name_signup" name="L_name_update" required = "required"type="text" placeholder="Last Name" required/>
</li>
<li id="password_box">
<script src="js/passwordConfirmation.js" type="text/javascript"></script>
<label for="password_signup" class="u_password" data-icon="p">Password </label>
<input id="password_signup" name="newPassword" required = "required" type="password" placeholder="Enter Password" required/>
<input id="password_signup_confirm" name="confirmPassword" required = "required" type="password" placeholder="Retype Password" required/>
<p id="password-validate-status"></p>
</li>
<li id="dob">
              <label for="dob" class="u_dob" data-icon="dob">Date of Birth</label>
              <input id="Day_signup" name="Day_update" required = "required" type="text" placeholder="dd" required/>
              <input id="Month_signup" name="Month_update" required = "required" type="text" placeholder="mm" required/>
              <input id="Year_signup" name="Year_update" required = "required" type="text" placeholder="yyyy" required/>
            </li>
<li id = "type_box">
              <label for="User_type" class="u_type" data-icon="ut">User Type</label>
              <select name="change_type">
                <option value ="Ranger">Ranger</option>
                <option value ="Administrator">Administrator</option>
                <option value ="Clerical">Clerical</option>
              </select>
            </li>
            <li id = "park">
              <label for="park" class="u_park" data-icon="up">National Park Name</label>
              <input id="Park_signup" name="Park_signup" required = "required" type="text" placeholder="Which National Park are you sight to it?" required/>
            </li>
<li class="siteup-button"> <a href="updateInput.php" onclick="document.forms['profileUpdate'].submit(); return false;">
<input type="submit" id="siteup_button" name="siteup_button" value="Submit"/>
</a></li>
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
