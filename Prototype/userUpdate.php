<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animals Map</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="css/page-styles.css" rel="stylesheet" type="text/css">
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
    <div class="accountbar">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        <li class="support-hm"><a href="index.html">Home</a></li>
        <li class="support-lg"><a href="login.php">Login</a> or <a href="userRegister.php">Register</a></li>
        <li class="support-ac"><a href="#">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
      </ul>
    </div>
  </div>
  <!-- end .accountbar -->
  <div class="header-wrap">
    <ul class="group" id="header-one" name="header-one">
      <li> <a href="#">Home</a></li>
      <li><a href="#">Login</a></li>
      <li class="current_page_item"><a href="#">Register</a></li>
      <li><a href="#">MyAccount</a></li>
      <li><a href="#">Pest Sight</a></li>
      <li><a href="#">Weekly Report</a></li>
      <li><a href="#">Pest Register</a></li>
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
<li id="name_box">
<label for="user_name_signup" class="u_name" data-icon="u">Name</label>
<input id="F_name_signup" name="F_name_signup" required = "required"type="text" placeholder="First Name" required/>
<input id="L_name_signup" name="L_name_signup" required = "required"type="text" placeholder="Last Name" required/>
</li>
<li id="password_box">
<script src="js/passwordConfirmation.js" type="text/javascript"></script>
<label for="password_signup" class="u_password" data-icon="p">Password </label>
<input id="password_signup" name="password_signup" required = "required" type="password" placeholder="Enter Password" required/>
<input id="password_signup_confirm" name="password_signup_confirm" required = "required" type="password" placeholder="Retype Password" required/>
<p id="password-validate-status"></p>
</li>
<li class="siteup-button"> <a href="inputData.php" onclick="document.forms['register'].submit(); return false;">
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