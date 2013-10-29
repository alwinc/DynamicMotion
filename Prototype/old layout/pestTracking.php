<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animals Map</title>
-<link href="css/styles.css" rel="stylesheet" type="text/css">
-<link href="css/footer_styles.css" rel="stylesheet" type="text/css">
-<link href="css/account_after_styles.css" rel="stylesheet" type="text/css">
-<link href="css/warp_styles.css" rel="stylesheet" type="text/css">
-<link href="css/sight_styles.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=2.133d&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
      type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/map-google.js"></script>
</head>
<!--[if !IE]><!--><script onLoad="showAddress(Indonesia); return false">
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body onload="initialize()" onunload="GUnload()">
<div class="container-tracking">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="#">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="index.html">Log off</a></li>
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
      <li id="sighing-wrap"><a href="pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="#">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestRegister.php">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="pest_tracking">
    <ul id="Pest_track-bg" name="Pest_track-bg">
      <section class="trackingform cf">
        <form name="pest_tracking" action="pestTracking.php" method="post" accept-charset="utf-8">
          <ul>
            <li><img src="image/loginpage-02.png"></li>
            <li id = "search_bar">
              <label for="pest_search" class="pest_search">Search by Pest Id</label>
              <input id = "search_input" name="search_input" required type="text" placeholder="Please input Pest Id" />
            </li>
            <li class="submit-search"> <a href="#">
              <input type="submit" id="submit_button_search" name="submit_button_search" value="Submit" onClick="showAddress('Indonesia');"/>
              </a></li>
            <li class="search_result">
				<?php
					if(isset($_POST['search_input']))
					{
						include_once('connect.inc.php');
					
						$pestId = $_POST['search_input'];
						
						/*$query = "SELECT latlng FROM sighting WHERE `pestId`=$_POST[search_input] AND  `reportDate` > CURDATE( ) -7";
							
						$result = mysqli_query($link,$query);
						$row = mysqli_fetch_assoc($result);
						$latlng = $row['latlng'];*/					
						
						//select any information from pest table in database
						$sql = "SELECT * FROM sighting WHERE `pestId`= $_POST[search_input] AND  `reportDate` > CURDATE( ) -7";
						//create a viarable to store the result
						$pestData = mysqli_query($link,$sql);
						echo "
						
						<table  width=\"20\" border=1><div class=\"cell\">
						<tr>
						<th>Sighting ID</th>
						<th>Pest ID</th>
						<th>Park ID</th>
						<th>Number of Pest Sighted</th>
						<th>Sighting Time </th>
						<th>Latitude, Longitude</th>
						<th>Pest Markings</th>
						</tr>";

							//update pest information
							while($record = mysqli_fetch_array($pestData))
							{	
								echo "<tr>";
								echo "<td>" . "<input type=text size=3 name=sightingId value=" . $record['sightingId'] . " style=border:0px readonly></td>";
								echo "<td>" . "<input type=text size=4 name=pestId value=" . $record['pestId'] . " style=border:0px></td>";
								echo "<td>" . "<input type=text size=4 name=parkId value=" . $record['parkId'] . " style=border:0px></td>";
								echo "<td>" . "<input type=text size=17 name=numberOfPestsSighted value=\"" . $record['numberOfPestsSighted'] . "\" style=border:0px></td>";
								echo "<td>" . "<input type=text size=15 name=time value=" . $record['time'] . " style=border:0px></td>";
								echo "<td>" . "<input type=text name=latlng value=\"" . $record['latlng'] . "\" style=border:0px></td>";
								echo "<td>" . "<input type=text name=pestDetails value=\"" . $record['pestDetails'] . "\" style=border:0px></td>";
								echo  "<td>" . "<input type=\"button\" value=\"GO!\" onClick=\"showAddress('". $record['latlng'] ."');\"/></td>";  
								echo "</tr>";


							}
							echo "</div></table>";
					}	
				?>
				<script> document.getElementById("submit_button_search").innerHTML=showAddress('Indonesia');</script>;			
              <div id="map_canvas"></div>            
            </li>
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
