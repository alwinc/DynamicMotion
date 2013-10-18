<?php
include('connect.inc.php');

$firstname = $_POST['F_name_update']; $lastname = $_POST['L_name_update'];
$username = $firstname." ".$lastname;
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];	
$day = $_POST['Day_update']; $month = $_POST['Month_update']; $year = $_POST['Year_update'];
$dob = $year."-".$month."-".$day;	
$usertype = $_POST['change_type'];

$updateQuery = "UPDATE `person` VALUES ( 'NULL','$username', 'NULL', 'NULL', $usertype, $dob, '$newPassword') WHERE personId = '_SESSION['sys_user_id']'";

if($newPassword == $confirmPassword)
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
      echo "The first password is different from the retyped                   password <br>";
      header("location: userUpdate.php?error=1");
}	

?>



