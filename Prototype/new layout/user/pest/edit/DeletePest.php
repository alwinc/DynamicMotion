<?php
	session_start();	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animals Map</title>
<link href="../../../css/styles.css" rel="stylesheet" type="text/css">
<link href="../../../css/footer_styles.css" rel="stylesheet" type="text/css">
<link href="../../css/account_after_styles.css" rel="stylesheet" type="text/css">
<link href="../../css/warp_styles.css" rel="stylesheet" type="text/css">
<link href="../css/pest_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<body>
<div class="container-pestdetail">
  <div class="header"> <a href="../index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar-after">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        
        <!-- Check if already login then write welcome-->
        <li class="support-ac"><a href="../edit/myAccount.php">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="../../index.html">Log off</a></li>
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
      <li id="home-wrap"> <a href="../home/home.php">Home</a></li>
      <li id="login-wrap"><a href="../login.php">Login</a></li>
      <li id="user-wrap"><a href="../userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="../edit/myAccount.php">MyAccount</a></li>
      <li id="sighing-wrap"><a href="sight/pestSightingIndex.php">Pest Sight</a></li>
      <li id="report-wrap"><a href="../report/managementReport.php">Weekly Report</a></li>
      <li id="register-wrap" class="current_page_item"><a href="pestRegister.html">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="pest_register">
    <ul id="pest_register-bg" name="pest_register-bg">
      <section class="pestform cf">
        <form name="login" action="checklogin.php" method="post" accept-charset="utf-8">
          <ul>
            <li><img src="image/loginpage-02.png"></li>
            <li id="pest-table">
            <?php
		//conncect to the database
		include('../../connect.inc.php');

		//choose database will be used
		mysqli_select_db($link,"pesttracking");

		//write code for delete button to update pest information

		if(isset($_POST['delete']))
		{
   		$DeleteQuery = "DELETE FROM pest WHERE pestId= '$_POST[id_update]'";
   		mysqli_query($link,$DeleteQuery);
    
		}
    
		//select any information from pest table in database
		$sql = "SELECT * FROM pest";

		//create a viarable to store the result
		$pestData = mysqli_query($link,$sql);
		echo "<table border=1>
		<tr>
		<th>pestId</th>
		<th>sourceOfId</th>
		<th>pestType</th>
		<th>pestMarking</th>
		</tr>";
		
		//delete pest information
		while($record = mysqli_fetch_array($pestData))
		{
			echo "<form action=DeletePest.php method=post>";
			echo "<tr>";
			echo "<td>" . "<input type=number name=id_update value=" . $record['pestId'] . " </td>";
			echo "<td>" . "<input type=text name=source_update value=" . $record['soureOfId'] . " </td>";
			echo "<td>" . "<input type=text name=type_update value=" . $record['pestType'] . " </td>";
			echo "<td>" . "<input type=text name=mark_update value=" . $record['pestMarking'] . " </td>";
			echo "<td>" . "<input type=hidden name=hidden value=" . $record['pestId'] . " </td>";
			echo "<td>" . "<input type=submit name=delete value=delete " . " </td>";
			echo "</tr>";
			echo "</form>";
		}
		echo "</table>";
		?>
          </ul>
        </form>
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