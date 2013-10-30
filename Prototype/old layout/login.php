<!doctype html>
<html>
<head><link rel="icon" href="image/favicon.ico">
<meta charset="utf-8">
<title>Animals Map</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="css/account_styles.css" rel="stylesheet" type="text/css">
<link href="css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="css/page_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body>
<div class="container-login">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        <li class="support-hm"><a href="home.php">Home</a></li>
        <li class="support-lg"><a href="login.php">Login</a> or <a href="userRegister.php">Register</a></li>
        <li class="support-ac"><a href="myAccount.php">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
      </ul>
    </div>
  </div>
  <!-- end .accountbar -->
  <div class="header-wrap">
    <ul class="group" id="header-one" name="header-one">
      <li id="home-wrap" class="current_page_item"> <a href="#">Home</a></li>
      <li id="login-wrap"><a href="login.php">Login</a></li>
      <li id="user-wrap"><a href="userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap"><a href="pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestTracking.php">Pest Tracking</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="login">
    <ul id="loginform-bg" name="loginform-bg">
      <section class="loginform cf">
        <form name="login" action="checklogin.php" method="post" accept-charset="utf-8">
          <ul>
            <li><img src="image/loginpage-02.png"></li>
            <li>
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
            <li class="email-out">
              <label for="usermail" class="user_mail">E-Mail Address</label>
              <p id= "email-input" >
                <input type="email" required name="login_usermail" placeholder="Enter E-mail Address"/>
              </p>
              <label for="password" class="password">Password</label>
              <p id="password_input" >
                <input type="password" required name="login_password" placeholder="Enter Password"/>
              </p>
            </li>
            <li class="login-button"> <a href="checklogin.php" onclick="document.forms['login'].submit(); return false;">
              <input type="submit" id="login_button" name="login_button" value="Log In"/>
              </a> </li>
            <li class="login-check">
              <input type="checkbox" name="checkboxG1" value="checkbox" id="checkboxG1"/>
              <label class="checkbox">Keep me logged in</label>
            </li>
          </ul>
          <ul class="support-bg"id="support-qa" name="support-qa">
            <li>
              <p>Can't <a href="">log in </a>?</p>
              <p>Learn how to <a href="" onclick="document.forms[0].submit();return false;">protect your account</a>!</p>
              <p>Don't have an account yet?<a href=""> Sign up now </a>! </p>
            </li>
          </ul>
        </form>
      </section>
    </ul>
  </div>
  <!-- end .login -->
  <div>
    <ul id="footer-text" name="footer-text">
      <li><a>Blog</a> | <a>Support</a> | <a>About Us</a> | <a>Contact Us</a> | <a>Site Map</a> | <a>News Letter</a> | <a>Join Us</a> | <a>Disclaimer</a> | <a>Policies</a></li>
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
