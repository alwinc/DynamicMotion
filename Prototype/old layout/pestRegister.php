<?php
		session_start();
		if(!isset($_SESSION['logged_in']))
		{
			header("location: login.php");
		}
?>
<!doctype html>
<html>
<link rel="icon" href="image/websitelogo.ico">
<meta charset="utf-8">
<title>Animals Map</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="css/account_after_styles.css" rel="stylesheet" type="text/css">
<link href="css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="css/pest_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container-pestdetail">
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
      <li id="account-wrap"><a href="myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap"><a href="pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestTracking.php">Pest Tracking</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="pest_register">
    <ul id="pest_register-bg" name="pest_register-bg">
      <section class="pestform cf">
        <form name="pest_register" action="pestregistration.php" method="post" accept-charset="utf-8">
          <ul>
            <li><img src="image/loginpage-02.png"></li>
            
            <!--PEST ID-->
            <li id = "id_update">
              <label for="pest_id" class="pest_id">Pest ID</label>
              <p id="show-id">
                <?php
					//conncect to the database
					include_once('connect.inc.php');
					
					$get_Last_Row = "SELECT pestId FROM pest ORDER BY `pestId` DESC LIMIT 1";

					$result = mysqli_query($link,$get_Last_Row);
					$row = mysqli_fetch_assoc($result);
					$pestid = $row['pestId'];
					$increase_pest_id = $pestid + 1;
					echo "$increase_pest_id";
				?>
              </p>
            </li>
            
            <!--SOURCE OF ID-->
            <li id = "source_register" >
              <label for="source_up" class="source_up">Source of ID</label>
              <select name="source_up" id = "source_up">
                <option value ="None" selected = "selected">None</option>
                <option value ="Collar">Collar</option>
                <option value ="Microchip">Microchip</option>
              </select>
            </li>
            
            <!--TYPE OF REGISTER-->
            <li id = "type_register">
              <label for="type_up" class="type_up">Pest Type</label>
              <select name="type_up" id = "type_up">
                <option value ="None" selected = "selected">None</option>
                <option value ="FeralCat">Feral Cat</option>
                <option value ="Feral_Dog">Feral Dog</option>
                <option value ="Feral_Rat">Feral Rat</option>
                <option value ="European_Rabbit">European Rabbit</option>
                <option value ="Red_Fox">Red Fox</option>
              </select>
            </li>
            
            <!--PEST MARKING-->
            <li id = "mark_register">
              <label for="mark_up"class="mark_up">Pest Marking</label>
              <input id = "mark_up" name="mark_up" required type="text" placeholder="Marking Number or Colour"/>
            </li>
            
            <!-- button for submit and cancel registration -->
            
            <li class="submit-button-register"> <a href="pestregistration.php" onclick="document.forms['submit'].submit(); return false;">
              <input type="submit" id="submit_button" name="submit_button" value="Submit"/>
              </a></li>
            <li class="cancel-button-register"><a href="cancelRegister.php">
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
