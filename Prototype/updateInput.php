<?php
include('connect.inc.php');

mysqli_select_db($link, 'person');

$email = $_POST['email'];
$firstname = $_POST['F_name_update']; $lastname = $_POST['L_name_update'];
$username = $firstname." ".$lastname;
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];	
$day = $_POST['Day_update']; $month = $_POST['Month_update']; $year = $_POST['Year_update'];
$dob = $year."-".$month."-".$day;	
$usertype = $_POST['change_type'];

$updateQuery = "UPDATE `person` SET name='$username', type='$usertype', dob='$dob', password='$newPassword' WHERE email = '$email'";


	$checkingQuery= "SELECT * FROM person WHERE email like '$email'";
		
	$result = mysqli_query($link, $checkingQuery);
	
	$count = mysqli_num_rows($result);

if($count == 1)
{
    if(mysqli_query($link,$updateQuery))
    {
        header("location: updateSuccess.html");
    }	
    else
    {
        echo "Failed <br>";
        echo "Error: ".mysqli_error($link);
    }
}
else
{
      header("location: userUpdate.php?error=1");
}	

?>



