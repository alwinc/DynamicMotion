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
<meta charset="utf-8">
<title>Animals Map</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="css/account_after_styles.css" rel="stylesheet" type="text/css">
<link href="css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="css/report_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body>
<div class="container-report">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="myAccount.php">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="logout.php">Log off</a></li>
        <li class ="php-user">
          <?php
			//session_start();
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
      <li id="home-wrap"> <a href="home.php">Home</a></li>
      <li id="login-wrap"><a href="login.php">Login</a></li>
      <li id="user-wrap"><a href="userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap"><a href="pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap" class="current_page_item"><a href="#">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestRegister.php">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="report">
    <ul class="reportform" id="report-bg" name="report-bg">      
      <li id ="main_report">
        <li id ="title_report"> Management Report <br>
        <p>TOTAL PEST SIGHTED THIS WEEK : 38</p>
        <p>TOTAL PEST SIGHTED LAST WEEK : 0</p>
        </li>
        <li id ="title_report"> Pest Sighting Report<br>
        <p>TOTAL FOX SIGHTED THIS WEEK : 10</p>
        <p>TOTAL CAT SIGHTED THIS WEEK : 7</p>
        <p>TOTAL DOG SIGHTED THIS WEEK : 7</p>
        <p>TOTAL RAT SIGHTED THIS WEEK : 7</p>
        <p>TOTAL RABBIT SIGHTED THIS WEEK : 7</p>
        </li>
        
        <li id ="title_report"> Most Reported Area:<br>
        <p>1. Conimbla National Park : 28</p>
        <p>2. Ku-Ring-Gai National Park : 10</p>
        </li>
        <!--<p>Feral animals impact on native species by predation, competition for food and shelter, destroying habitat and may spread diseases.Typically, feral animals may also have high reproductive rates. Consequently, their populations can increase rapidly if conditions are favourable. The purpose of this website is to help NSW Parks and Wildlife track feral pest in a more efficient and effective way. Users can register a new feral pest, update an existing feral pest, record and update feral pest sightings. </p>
        <p>Feral animals causing most public concern and economic damage includes:</p>
        <p> Red Fox:  Mostly sighted in mainland Australia and small numbers in Tasmania</p>
        <p>European rabbit: Throughout Australia</p>
        <p> Feral cat: Throughout Australia, except in tropical rain forests</p>
        <p>Feral rat: Sighted Throughout Australia</p>
        <p> Feral dog: Mostly sighted in urban areas of Australia </p>-->
      </li>
      <li id = "table_report"> <img src="image/Trend Analysis.png"> </li>
    </ul>
  </div>
  <!-- end .news -->
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
