<!doctype html>
<html>
<head>
<link rel="icon" href="image/websitelogo.ico">
<meta charset="utf-8">
<title>Animals Map</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="css/account_styles.css" rel="stylesheet" type="text/css">
<link href="css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="css/page_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container-login">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        <li class="support-hm"><a href="home.php">Home</a></li>
        <li class="support-lg"><a href="login.php">Login</a> or <a href="userRegister.php">Register</a></li>
        <li class="support-ac"><a href="myAccount.php">MyAccount</a></li>
        <li class="support-sp"><a href="SupportPage.php">Support</a></li>
      </ul>
    </div>
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
  <div class="login">
    <ul id="loginform-bg" name="loginform-bg">
      <section class="loginform cf">

		<!--java script-->
		<script>
		function toggleElement(id)
		{
			if(document.getElementById(id).style.display == 'none')
			{
				document.getElementById(id).style.display = '';
			}
			else if(document.getElementById(id).style.display =='' && document.getElementById(id).style.display == 'none')
			{
				document.getElementById(id).style = '';
			}
			else
			{
				document.getElementById(id).style.display = 'none';
			}
		}
		</script>
		
		<!-- HTML questions & answer-->
		<h3>F.A.Q</h3>
		<a href="javascript:toggleElement('a1')">Q1 : How I can use this websites?</a><br><br>
		<div id="a1" id="a2" style="display:none"><b>
			Ans : you must to register then login into our system.</b>
		</div>
		
		<a href="javascript:toggleElement('a2')">Q2 : Can I register twice with same email address?</a><br><br>
		<div id="a2" style="display:none"><b>
			Ans : No, you cannot. you can register when your account has been deleted or haven't register yet in our system.</b>
		</div>
		
		<a href="javascript:toggleElement('a3')">Q3 : What the purpose of this website?</a><br><br>
		<div id="a3" style="display:none"><b>
			Ans : This website will provide you pest tracking, pest sighting, and the best in this website we provide
			to our user can have maps to track them. so it can become their own GPS.</b>
		</div>
		
		<a href="javascript:toggleElement('a4')">Q4 : Can I register unknown pest or unknown user in this website?</a><br><br>
		<div id="a4" style="display:none"><b>
			Ans : Yes!! You can!! if you register it, it will be register temporary and then in 1-2 days your pest or user account
			will be deleted by our administrator.</b>
		</div>
		
		<a href="javascript:toggleElement('a5')">Q5 : What I need to do, if I cannot find my question in F.A.Q page?</a><br><br>
		<div id="a5" style="display:none"><b>
			Ans : Don't Worry, just contact us<br>DYNAMIC MOTION<br>Phone: 9820-1213<br>Email: info@dynamicmotion.com</b>
		</div>
		<!--End of questions-->
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
