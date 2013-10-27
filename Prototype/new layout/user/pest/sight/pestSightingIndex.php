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
<script src="http://maps.google.com/maps?file=api&amp;v=2.133d&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
      type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/map-google.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script>
<!--<![endif]-->
<body onload="initialize()" onunload="GUnload()">
<div class="container-pestSightIndex">
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
  <div class="pest_sighting_index">
    <ul id="pest_sighting_index-bg" name="pest_sighting_index-bg">
      <section class="googlemap cf">
        <form name="google-map" action="inputPestSighting.php" method="post">
          <p><img src="image/loginpage-02.png"></p>
          <p id="animal-title">
            <label> *Select an animal: </label>
          </p>
          <p class="animal_wrapper">
            <label for="fox" class="feral_fox">
              <input type="radio" name="animaltype" id="fox" value="1" checked />
            </label>
            <label for="dog" class="feral_dog">
              <input type="radio" name="animaltype" id="dog" value="2"/>
            </label>
            <label for="cat" class="feral_cat">
              <input type="radio" name="animaltype" id="cat" value="3"/>
            </label>
            <label for="rat" class="feral_rat" >
              <input type="radio" name="animaltype" id="rat" value="4" />
            </label>
            <label for="rabbit" class="feral_rabbit">
              <input type="radio" name="animaltype" id="5" value="rabbit"/>
            </label>
          </p>
          <!-- end animal button -->
            <p>
              <?php				
					if(isset($_GET['error']))
						{
							echo "<font color=\"red\">Please fill the required form.</font>";
						}
				  ?>
              <br>
              *Choose the park you sighted in: </p>
            <p class="map-input-park"> 
              
              <!-- Dynamic Select Box based on Database -->
              <select name="address" id="address" onchange="showAddress(this.value); return false">
                <option value="">-- Select Park --</option>
                <?php
								include('connect.inc.php');						        
								
									$parkquery = "SELECT name FROM  `park`";
									if(mysqli_query($link,$parkquery)){    
									$parkresult = mysqli_query($link,$parkquery);    
									while($row = mysqli_fetch_array($parkresult)) {
										echo "<option value=\"".$row['name']."\">".$row['name']."</option>\n  ";										
									}
								}
								else{
									echo '<option value="QueryFail"> Query Fail </option>';
								}
							?>
                <script type="text/javascript">
								document.getElementById('Park').value = <?php echo json_encode(trim($_POST['Park']));?>;
							</script>
              </select>
              <!--End of Dynamic Select Box -->
              <input type="hidden" name="Latlng" id="Latitude" value=""/>
            </p>
            <p id="map_canvas"></p>
            <!--<div id="map-panel">
                <input id="latlng" type="text" value="40.714224,  -73.961452">
                <input class="google-gecode" type="submit" value="Reverse Geocode" onclick="codeLatLng()">
              </div>-->
            <p align="right">*Drag pinpoint to report accurately.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <p class="sight-time">
              <label for="manualdateandtime">
                <input type="radio" name="dateandtime" id="manualdateandtime" />
                Your date and time </label>
              <input name="mydate" id="mydate" type="date" value="dd/mm/yyyy"/>
              <input name="mytime" id="mytime" type="time" value="mm/hh"/>
            </p>
            <p class="sight-time">
              <label for="autodateandtime">
                <input type="radio" name="dateandtime" id="autodateandtime" checked />
                Automatic date and time </label>
              <input id="autodate" name="autodate" value="<?
                date_default_timezone_set('Australia/Sydney');
                echo date('m/d/Y, G:i:s');
                ?>"/>
            </p>
            <p class="sight-report">*Number of Pest Sighted</p>
            <p>
              <input id="sight-id" name="numberOfSighting" type="text" placeholder="How many pest do you sight approximately?"/>
            </p>
            <p class="sight-inform">Additional Information </p>
            <p>
              <textarea name="sight-commond" cols="60" rows="4" placeholder="Any Markings?"></textarea>
              <a href="#">
              <input id="autobutton" type="submit" value="Submit"/>
              </a> </p>
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
