<?php
	session_start();	
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
<div class="container-pestupdate">
  <div class="header"> <a href="../index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="myAccount.php">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="logout.php">Log off</a></li>
        <li class ="php-user">
          <?php
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
      <li id="report-wrap"><a href="managementReport.php">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestTracking.php">Pest Tracking</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="pest_update">
    <ul id="pest_register-bg" name="pest_register-bg">
      <section class="pestSightingDelete cf">
		<li id="logo_image"><img src="image/loginpage-02.png"></li>
		<li id="pest_table">

              <table>
				<tr>
				<th>Sighting ID</th>
				<th>Pest ID</th>
				<th>Park ID</th>
				<th>Number of Pest Sighted</th>
				<th>Sighting Time </th>
				<th>Latitude, Longitude</th>
				<th>Pest Markings</th>
			</tr>
			<?php

//conncect to the database
include('connect.inc.php');
//choose database will be used
mysqli_select_db($link,"pesttracking");

//write code for update button to update pest information

if(isset($_POST['delete']))
{
	$UpdateQuery = "DELETE FROM sighting WHERE sightingId= '$_POST[sightingId]'";
	mysqli_query($link,$UpdateQuery);
};

//select any information from pest table in database
$sql = "SELECT * FROM sighting WHERE personId= ".$_SESSION['current_user'];

//create a viarable to store the result
$pestData = mysqli_query($link,$sql);

//update pest information
while($record = mysqli_fetch_array($pestData))
{
	echo "<form action=deletePestSighting.php method=post>";
	echo "<tr>";
	echo "<td>" . "<input type=text size=7 name=sightingId value=" . $record['sightingId'] . " style=border:0px readonly></td>";
	echo "<td>" . "<input type=text size=4 name=pestId value=" . $record['pestId'] . " style=border:0px></td>";
	echo "<td>" . "<input type=text size=4 name=parkId value=" . $record['parkId'] . " style=border:0px></td>";
	echo "<td>" . "<input type=text size=10 name=numberOfPestsSighted value=\"" . $record['numberOfPestsSighted'] . "\" style=border:0px></td>";
	echo "<td>" . "<input type=text size=10 name=time value=" . $record['time'] . " style=border:0px></td>";
	echo "<td>" . "<input type=text name=latlng value=\"" . $record['latlng'] . "\" style=border:0px></td>";
	echo "<td>" . "<input type=text name=pestDetails value=\"" . $record['pestDetails'] . "\" style=border:0px></td>";
	echo "<td>" . "<input type=submit name=delete value=delete></td>";
	echo "</tr>";
	echo "</form>";
}

echo "</table>";
?>

		</table>
		</li>
    </ul>
	</section>
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
