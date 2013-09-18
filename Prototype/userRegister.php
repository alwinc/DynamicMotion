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
</script><!--<![endif]-->
<body>
<div class="container-register">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> </div>
  <!-- end .header -->
  <div class="accountbar">
    <ul class="accountbar-bg" id="account-bar" name="account-bar">
      <li class="support-hm"><a href="index.html">Home</a></li>
      <li class="support-lg"><a href="login.php">Login</a> or <a href="userRegister.php">Register</a></li>
      <li class="support-ac"><a href="#">MyAccount</a></li>
      <li class="support-sp"><a href="#">Support</a></li>
    </ul>
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
        <form name="register" action="inputData.php" method=POST accept-charset="utf-8">
          <ul>
            <li id="header-signup">
              <h4>Account Creation</h4>
            </li>
            <li class="error" id="issue-massage"name="issue-massagee">
					<p>
						<?php	
						//display the error msg if the login credentials are wrong!
						if(isset($_GET['error']))
						{
							echo 'Email already registered!';
						}
						?>
					</p>
            </li>
            <li id="name_box">
              <label for="user_name_signup" class="u_name" data-icon="u">Name</label>
              <input id="F_name_signup" name="F_name_signup" required = "required"type="text" placeholder="First Name" required/>
              <input id="L_name_signup" name="L_name_signup" required = "required"type="text" placeholder="Last Name" required/>
            </li>
            <li id="mail_box">
			  <script src="js/emailConfirmation.js" type="text/javascript"></script>
              <label for="email_signup" class="u_mail" data-icon="e" >E-mail Address</label>
              <input id="email_signup" name="email_signupp" required = "required" type="email" placeholder="Enter E-mail Address" required/>
              <input id="email_signup_confirm" name="email_signup_confirm" required = "required" type="email" placeholder="Re-Enter E-mail Address" required/>
			  <p id="email-validate-status"></p>
            </li>
            <li id="password_box">
			  <script src="js/passwordConfirmation.js" type="text/javascript"></script>
              <label for="password_signup" class="u_password" data-icon="p">Your password </label>
              <input id="password_signup" name="password_signup" required = "required" type="password" placeholder="Enter Password" required/>
              <input id="password_signup_confirm" name="password_signup_confirm" required = "required" type="password" placeholder="Re-Enter Password" required/>
			  <p id="password-validate-status"></p>
            </li>
            <li id="dob">
              <label for="dob" class="u_dob" data-icon="dob">Date of Birth</label>
              <input id="Day_signup" name="Day_signup" required = "required" type="text" placeholder="dd" required/>
              <input id="Month_signup" name="Month_signup" required = "required" type="text" placeholder="mm" required/>
              <input id="Year_signup" name="Year_signup" required = "required" type="text" placeholder="yyyy" required/>
            </li>
            <li id = "type_box">
              <label for="User_type" class="u_type" data-icon="ut">User Type</label>
              <select name="User_type">
                <option value ="Ranger">Ranger</option>
                <option value ="Administrator">Administrator</option>
                <option value ="Clerical">Clerical</option>
              </select>
            </li>
            <li id = "park">
              <label for="park" class="u_park" data-icon="up">National Park Name</label>
              <input id="Park_signup" name="Park_signup" required = "required" type="text" placeholder="Which National Park are you sight to it?" required/>
            </li>
            <li class="siteup-button"> <a href="inputData.php" onclick="document.forms['register'].submit(); return false;">
              <input type="submit" id="siteup_button" name="siteup_button" value="Sign Up"/>
              </a></li>
            <ul class="support-bg-s "id="support-qa" name="support-qa">
              <li>
                <h5>Already a member ? <a href="login.php"> Go and log in </a> </h5>
              </li>
            </ul>
          </ul>
        </form>
      </section>
    </ul>
  </div>
  <!-- end .register -->
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
