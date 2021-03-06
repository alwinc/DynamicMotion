﻿<?php
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
        <li class="support-sp"><a href="SupportPage.php">Support</a></li>
        <li class="support-lo"><a href="logout.php">Log off</a></li>
        <li class ="php-user">
          <?php
			//session_start();
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
      <li id="report-wrap" class="current_page_item"><a href="managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestTracking.php">Pest Tracking</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="report">
    <ul class="reportform" id="report-bg" name="report-bg">      
      <li id ="main_report">
        <li id ="title_report"> Management Report <br>
        <p>TOTAL PEST SIGHTED THIS WEEK :	
        <?php
			include('connect.inc.php');
			$query = "SELECT COUNT(sightingId) as total FROM sighting WHERE `reportDate` > CURDATE() - 7";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$total = $row['total'];
			
			echo $total;
        ?></p>
        <p>TOTAL PEST SIGHTED LAST WEEK : <?php
			include('connect.inc.php');
			$query = "SELECT COUNT(sightingId) as total FROM sighting WHERE `reportDate` > CURDATE() - 14 AND `reportDate` < CURDATE() - 7";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$total = $row['total'];
			
			echo $total;
        ?></p>
        </li>
        <li id ="title_report"> Pest Sighting Report<br>
        <p>TOTAL FOX SIGHTED THIS WEEK : <?php
			include('connect.inc.php');
			$query = "SELECT COUNT(sightingId) as total FROM sighting WHERE `reportDate` > CURDATE() - 7 AND `pestId` = 1;";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$total = $row['total'];
			
			echo $total;
        ?></p>
        <p>TOTAL DOG SIGHTED THIS WEEK :  <?php
			include('connect.inc.php');
			$query = "SELECT COUNT(sightingId) as total FROM sighting WHERE `reportDate` > CURDATE() - 7 AND `pestId` = 2;";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$total = $row['total'];
			
			echo $total;
        ?></p>
        <p>TOTAL CAT SIGHTED THIS WEEK :  <?php
			include('connect.inc.php');
			$query = "SELECT COUNT(sightingId) as total FROM sighting WHERE `reportDate` > CURDATE() - 7 AND `pestId` = 3;";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$total = $row['total'];
			
			echo $total;
        ?></p>
        <p>TOTAL RAT SIGHTED THIS WEEK :  <?php
			include('connect.inc.php');
			$query = "SELECT COUNT(sightingId) as total FROM sighting WHERE `reportDate` > CURDATE() - 7 AND `pestId` = 4;";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$total = $row['total'];
			
			echo $total;
        ?></p>
        <p>TOTAL RABBIT SIGHTED THIS WEEK :  <?php
			include('connect.inc.php');
			$query = "SELECT COUNT(sightingId) as total FROM sighting WHERE `reportDate` > CURDATE() - 7 AND `pestId` = 5;";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$total = $row['total'];
			
			echo $total;
        ?></p>
        </li>
        
        <li id ="title_report"> Most Reported Area:<br>
        <p>1. <?php
			include('connect.inc.php');
			$query = "SELECT park.name as name, COUNT( sighting.parkId ) as count 
						FROM sighting
						JOIN park ON sighting.parkId = park.parkId
						GROUP BY sighting.parkId
						LIMIT 0 , 1";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$name = $row['name']; $total = $row['count'];
			$name2 = $row['name'];
			
			echo $name." : ".$total." Sighting"
        ?>
        </p>
        <p>2. <?php
			include('connect.inc.php');
			$query = "SELECT park.name as name, COUNT( sighting.parkId ) as count 
						FROM sighting
						JOIN park ON sighting.parkId = park.parkId
						GROUP BY sighting.parkId
						LIMIT 1 , 2";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$name = $row['name']; $total = $row['count'];
			$name2 = $row['name'];
			
			echo $name." : ".$total." Sighting"
        ?></p>
        <p>3. <?php
			include('connect.inc.php');
			$query = "SELECT park.name as name, COUNT( sighting.parkId ) as count 
						FROM sighting
						JOIN park ON sighting.parkId = park.parkId
						GROUP BY sighting.parkId
						LIMIT 2 , 3";
			
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_assoc($result);
			$name = $row['name']; $total = $row['count'];
			$name2 = $row['name'];
			
			echo $name." : ".$total." Sighting"
        ?></p>
        </li>
        <!--<p>Feral animals impact on native species by predation, competition for food and shelter, destroying habitat and may spread diseases.Typically, feral animals may also have high reproductive rates. Consequently, their populations can increase rapidly if conditions are favourable. The purpose of this website is to help NSW Parks and Wildlife track feral pest in a more efficient and effective way. Users can register a new feral pest, update an existing feral pest, record and update feral pest sightings. </p>
        <p>Feral animals causing most public concern and economic damage includes:</p>
        <p> Red Fox:  Mostly sighted in mainland Australia and small numbers in Tasmania</p>
        <p>European rabbit: Throughout Australia</p>
        <p> Feral cat: Throughout Australia, except in tropical rain forests</p>
        <p>Feral rat: Sighted Throughout Australia</p>
        <p> Feral dog: Mostly sighted in urban areas of Australia </p>-->
      </li>
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
