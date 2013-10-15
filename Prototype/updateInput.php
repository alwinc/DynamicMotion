<?php
include('connect.inc.php');

$firstname = $_POST['F_name_signup']; $lastname = $_POST['L_name_signup'];
$username = $firstname." ".$lastname;
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];	

$updateQuery = "UPDATE `person` VALUES ( 'NULL','$username', 'NULL', 'NULL', 'NULL', 'NULLL', '$newPassword')";

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



