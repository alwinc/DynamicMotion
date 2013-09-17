<?php
	include('connect.inc.php');
	
	$firstname = $_POST['F_name_signup']; $lastname = $_POST['L_name_signup']; $username = $firstname." ".$lastname;
	$email = $_POST['email_signupp'];
	$password = $_POST['password_signup'];
	$confirm_pass = $_POST['password_signup_confirm'];
	$day = $_POST['Day_signup']; $month = $_POST['Month_signup']; $year = $_POST['Year_signup'];
	$dob = $year."/".$month."/".$year;
		
	$addingQuery = "INSERT INTO  `person` VALUES ( 'NULL','$username',  '$email',  now(),  'user',  '$dob',  '$password')";
	
	$checkingQuery= "SELECT * FROM person WHERE email like '$email'";
		
	$result = mysqli_query($link, $checkingQuery);
	
	$count = mysqli_num_rows($result);
	
	if($count == 0)
	{
		if(mysqli_query($link,$addingQuery))
		{
		echo "Successfull!";
			header("location: registerSuccess.html");
		}		
		else
		{
			echo "Failed <br>";
			echo "Error: ".mysqli_error($link);
		}
	}
	else
	{
		header("location: register.php?error=1");
	}		
	
?>
