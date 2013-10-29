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
<link href="css/pest_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body>
<div class="container-pestdetail">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a>
    <!-- end .header -->
    <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="#">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="logout.php">Log off</a></li>
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
      <li id="home-wrap" class="current_page_item"> <a href="#">Home</a></li>
      <li id="login-wrap"><a href="login.php">Login</a></li>
      <li id="user-wrap"><a href="userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="#">MyAccount</a></li>
      <li id="sighing-wrap"><a href="pestSightingIndex.html">Pest Sight</a></li>
      <li id="report-wrap"><a href="#">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestRegister.html">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="pest_register">
    <ul id="pest_register-bg" name="pest_register-bg">
      <section class="pestform cf">
        <form name="pest_register" action="PestUpdate.php" method="post" accept-charset="utf-8">
          <ul>
            <li><img src="image/loginpage-02.png"></li>
            <li id = "id_update">
              <label for="pest_id" class="pest_id">Pest ID</label>
              <input id = "old_up" name="pest_id_old" required type="text" placeholder="Enter Pest ID" />
            </li>
            <li id = "source_update" >
              <label for="source_up" class="source_up">Source of ID</label>
              <select name="source_up" id = "source_up">
                <option value ="None" selected = "selected">None</option>
                <option value ="Collar">Collar</option>
                <option value ="Micropchip">Micropchip</option>
              </select>
            </li>
            <li id = "type_update">
              <label for="type_up" class="type_up">Pest Type</label>
              <select name="type_up" id = "type_up">
                <option value ="None" selected = "selected">None</option>
                <option value ="Feral_Cat">Feral Cat</option>
                <option value ="Feral_Dog">Feral Dog</option>
                <option value ="Feral_Rat">Feral Rat</option>
                <option value ="European_Rabbit">European Rabbit</option>
                <option value ="Red_Fox">Red Fox</option>
              </select>
            </li>
            <li id = "mark_update">
              <label for="mark_up"class="mark_up">Pest Marking</label>
              <input id = "mark_up" name="mark_up" required type="text" placeholder="Marking Number or Colour"/>
            </li>
            <li class="submit-button"> <a href="PestUpdate.php">
              <input type="submit" id="submit_button" name="submit_button" value="Submit"/>
              </a></li>
            <li class="cancel-button"> <a href="cancelRegistration.html">
              <input type="submit" id="cancel_button" name="cancel_button" value="Cancel"/>
              </a></li>
          </ul>
        </form>
      </section>
      <!--Ends the div wrapper here-->
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