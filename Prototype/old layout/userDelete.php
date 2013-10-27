<?php
include('connect.inc.php');

mysqli_select_db($link, 'person');

$email = $_POST['email'];

$deleteUserQuery = "DELETE FROM `person` WHERE email = '$email'";

$checkingQuery= "SELECT * FROM person WHERE email like '$email'";
		
	$result = mysqli_query($link, $checkingQuery);
	
	$count = mysqli_num_rows($result);

if($count == 1)
{
    
   if(mysqli_query($link,$deleteUserQuery))
    {
        header("location: deleteUser.php?success=1");
    }	
    else
    {
        echo "Failed <br>";
        echo "Error: ".mysqli_error($link);   
    }
     
}
else
{
     header("location: deleteUser.php?error=1");  
}	

?>



