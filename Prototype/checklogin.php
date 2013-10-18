<?php
	//conncect to the database
	include_once('connect.inc.php');
	
	//start session must have to do this if want to use session in every page
	session_start();
	
	//save the current usermail and pass as variable
	$currentusermail = $_POST['login_usermail'];
	$currentpassword = $_POST['login_password'];
	
	//change the usermail and pass as pure string so it cannot generate html code
	$currentusermail = stripslashes($currentusermail);
	$currentpassword = stripslashes($currentpassword);
	$currentusermail = mysqli_real_escape_string($link,$currentusermail);
	$currentpassword = mysqli_real_escape_string($link,$currentpassword);
	
	//query for checking usermail and pass
	$query = "SELECT name FROM person WHERE Email='$currentusermail' and password = '$currentpassword'";
	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	
	//count the row number of the query
	$count = mysqli_num_rows($result);
		
	//check if the login match and do action
	if($count == 1)
	{
		//$_SESSION['$currentusermail'] = $_POST['$currentusermail'];		
		//$result = mysqli_real_escape_string($link,$result);	
		//$try = urlencode($result);	
		//$_SESSION['login_user'] = $result;
		header("location: home.php?username="."$name");
	}
	else
	{
		$_SESSION['login_msg'] = 1;
		$error = "Wrong Username or Password";
		header("location:login.php");  
	}
?>