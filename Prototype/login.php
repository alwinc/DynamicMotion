<?php
	session_start();	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animal Map</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="css/page-styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body>
<div class="container-login">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> </div>
  <!-- end .header -->
  <div class="accountbar">
    <ul class="accountbar-bg" id="account-bar" name="account-bar">
      <li class="support-hm"><a href="index.html">Home</a></li>
      <li class="support-lg"><a href="login.php">Login</a> or <a href="register.html">Register</a></li>
      <li class="support-ac"><a href="#">MyAccount</a></li>
      <li class="support-sp"><a href="#">Support</a></li>
    </ul>
  </div>
  <!-- end .accountbar -->
  <div class="header-wrap">
    <ul class="group" id="header-one" name="header-one">
      <li> <a href="index.html">Home</a></li>
      <li class="current_page_item" name="login_loginpage"><a href="login.php">Login</a></li>
      <li name="login_Registerpage"><a href="register.html">Register</a></li>
      <li name="login_Userpage"><a href="#">MyAccount</a></li>
      <li name="login_Pest Fight"><a href="#">Pest Fight</a></li>
      <li name="login_Reportpage"><a href="#">Weekly Report</a></li>
      <li name="login_P_Registerpage"><a href="#">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="login">
    <ul id="loginform-bg" name="loginform-bg">
      <section class="loginform cf">
        <form name="login" action="checklogin.php" method="post" accept-charset="utf-8">
          <ul>
            <li><img src="image/loginpage-02.png"></li>
            <li class="error" id="issue-massage"name="issue-massagee">
              <p style="color:red;">
					<?php	
						//display the error msg if the login credentials are wrong!
						if(isset($_SESSION['login_msg']))
						{
							echo $_SESSION['login_msg'];
							unset($_SESSION['login_msg']);
						}
					?>
				</p>
            </li>
            <li>
              <label for="usermail" class="user_mail">E-Mail Address</label>
              <input type="email" required="required" name="login_usermail" placeholder="Enter E-mail Address" required>
            </li>
            <li>
              <label for="password" class="password">Password</label>
              <input type="password" required="required" name="login_password" placeholder="Enter Password" required>
            </li>
            <li class="login_button" name="login_button"> <a href="checklogin.php" onclick="document.forms['login'].submit(); return false;">Log in</a> </li>
            <li>
              <input type="checkbox" name="checkboxG1" value="checkbox" id="checkboxG1">
              <label class="checkbox">Keep me logged in</label>
            </li>
          </ul>
          <ul class="support-bg"id="support-qa" name="support-qa">
            <li>
              <h5>Can't <a href="">log in </a>?</h5>
              <h5>Learn how to <a href="" onclick="document.forms[0].submit();return false;">protent your account</a>!</h5>
              <h5>Don't have an account yet?<a href=""> Sign up now </a>! </h5>
            </li>
          </ul>
        </form>
      </section>
    </ul>
  </div>
  <!-- end .login -->
  <div>
    <ul id="footer-text" name="footer-text">
      <li><a href="#">Blog</a> | <a href="#">Support</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Site Map</a> | <a href="#">News Letter</a> | <a href="#">Join Us</a> | <a href="#">Disclaimer</a> | <a href="#">Policies</a></li>
      <ol>
        ©2013 Dynamic Motion, INC. ALL RIGHTS RESERVED
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
