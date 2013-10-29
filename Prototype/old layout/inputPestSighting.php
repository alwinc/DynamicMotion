<?php
	include('connect.inc.php');
	
	session_start();
	
	$pestType = $_POST['animaltype'];
	$parkName = $_POST['address'];
	$latlng = $_POST['Latlng'];
	$dateandtimeChoice= $_POST['dateandtime'];
	$date=$_POST['mydate']; $time=$_POST['mytime'];
	$dateandtime=$date." ".$time;
	$autodateandtime=$_POST['autodate'];	
	$numberOfSighting = $_POST['numberOfSighting'];
	$markings=$_POST['sight-commond'];
	$personId=$_SESSION['current_user'];
	
	if(empty($pestType) || empty($parkName) || empty($latlng) || empty($dateandtimeChoice) || empty($numberOfSighting))
	{
		$error = "1";
		header("location: pestSightingIndex.php?error="."$error");
	}
	else
	{
		//Get the park Id		
		$parkQuery = "SELECT parkId FROM park WHERE Name like '$parkName'";
		$result = mysqli_query($link, $parkQuery);
		$row = mysqli_fetch_array($result);
		$parkId=$row['parkId'];
		
		//Get choosen time
		if($dateandtimeChoice = "manualdateandtime")
		{
			$chosenTime = $dateandtime;
		}
		else if($dateandtimeChoice = "autodateandtime")
		{
			$chosenTime = $autodateandtime;
		}
		
		echo $chosenTime;
		$addingQuery = "INSERT INTO  `sighting` VALUES 
		( 'NULL','$pestType', '$parkId', '$personId',  '$numberOfSighting', '$chosenTime', now() , '$latlng' ,'$markings')";
		
		if(mysqli_query($link,$addingQuery))
		{
			header("location: SightingSuccess.php");
		}		
		else
		{
			echo "Failed <br>";
			echo "Error: ".mysqli_error($link);
		}
		
	}
		
	
	//$checkingQuery= "SELECT * FROM person WHERE email like '$email'";
		
	/*$result = mysqli_query($link, $checkingQuery);
	
	$count = mysqli_num_rows($result);
	
	if($count == 0)
	{
		if(mysqli_query($link,$addingQuery))
		{
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
		header("location: userRegister.php?error=1");
	}	*/	
	
?>

