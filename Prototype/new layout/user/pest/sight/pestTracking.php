<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animals Map</title>
<link href="../../../css/styles.css" rel="stylesheet" type="text/css">
<link href="../../../css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="../../css/account_after_styles.css" rel="stylesheet" type="text/css">
<link href="../../css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="css/sight_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body>
<div class="container-tracking">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
        <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="../">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="../../index.html">Log off</a></li>
        <li class ="php-user">
          <?php
			session_start();
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
      <li id="home-wrap" > <a href="../../home/home.php">Home</a></li>
      <li id="login-wrap"><a href="../../login.php">Login</a></li>
      <li id="user-wrap"><a href="../../userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="../../edit/myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap" class="current_page_item"><a href="pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="../../report/managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="../pestRegister.html">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="pest_tracking">
    <ul id="Pest_track-bg" name="Pest_track-bg">
      <section class="trackingform cf">
        <form name="pest_tracking" action="index_submit" method="get" accept-charset="utf-8">
          <ul>
            <p><img src="image/loginpage-02.png"></p>
            <p id = "search_bar">
              <label for="pest_search" class="pest_search">Search the peat</label>
              <input id = "search_input" name="search_input" required type="text" placeholder="Enter New Pest ID" />
            </p>
            <p class="submit-search"> <a href="#">
              <input type="submit" id="submit_button_search" name="submit_button_search" value="Submit"/>
              </a></p>
            <p class="search_result">
              <textarea name="sight-commond" cols="70" rows="17"></textarea>
            </p>
          </ul>
        </form>
      </section>
    </ul>
  </div>
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
