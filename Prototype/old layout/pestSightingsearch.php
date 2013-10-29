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
<link href="css/sight_styles.css" rel="stylesheet" type="text/css">
<script src="http://maps.google.com/maps?file=api&amp;v=2.133d&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
      type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/map-google.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body onload="initialize()" onunload="GUnload()">
<div class="container-pestSightIndex">
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
			session_start();
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
      <li id="home-wrap" > <a href="home.php">Home</a></li>
      <li id="login-wrap"><a href="login.php">Login</a></li>
      <li id="user-wrap"><a href="userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap" class="current_page_item"><a href="pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestRegister.php">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="pest_sighting_index">
    <ul id="pest_sighting_index-bg" name="pest_sighting_index-bg">
      <section class="googlemap cf">
        <form name="google-map" action="#" onsubmit="showAddress(this.address.value); return false">
          <p><img src="image/loginpage-02.png"></p>
          <p id="animal-title">
            <label> Select an animal: </label>
          </p>
          <p class="animal_wrapper">
          <div class="feral_fox"><a href="#"></a></div>
          <div class="feral_dog"><a href="#"></a></div>
          <div class="feral_cat"><a href="#"></a></div>
          <div class="feral_rat"><a href="#"></a></div>
          <div class="feral_rabbit"><a href="#"></a></div>
          </p>
          <!-- end animal button -->
          <div id="sighting-bottom">
            <p>
              <label> Enter an address and you may drag the tack to reposition it.</label>
            </p>
            <p class="map-input-park">
              <input type="text" style="width:350px" name="address" value="KU-RING-GAI Chase National Park" />
              <input class="google-go" type="submit" value="Go" />
            </p>
            <p id="map_canvas"></p>
            <p id="map-panel">
              <input id="latlng" type="text" value="40.714224,  -73.961452">
              <input class="google-gecode" type="submit" value="Reverse Geocode" onclick="codeLatLng()">
            </p>
          </div>
        </form>
        <!--end .googlemap--> 
      </section>
    </ul>
  </div>
  <!-- end .pest_sighting_index -->
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
