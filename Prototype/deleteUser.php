<?php
include('connect.inc.php');

$UserID = $_POST['userID'];
$retypeUserID = $_POST['retype-userID'];

$deleteUserQuery = "DELETE FROM `person` WHERE personId = '$UserID'";

if($UserID == $retypeUserID)
{
    
   if(mysqli_query($link,$deleteUserQuery))
    {
        echo "User".$UserID."has been deleted";
    }	
    else
    {
        echo "Failed <br>";
        echo "Error: ".mysqli_error($link);   
    }
     
}
else
{
     echo "The two ID you typed are different <br>";
     header("location: deleteUser.php?error=1");  
}	

?>



