<?php
    include('connect.inc.php');
    
    $pest_ID = $_POST['show-id'];
    //$re_enter_pest_ID = $_POST['re_enter_pest_id'];
    $source_ID = $_POST['source_up'];
   // $pest_type = $_POST['pest_type'];
    //$pest_marking = $_post['pest_marking'];
    
    $addingPestQuery = "INSERT INTO `pest` VALUES ('$pest_ID', '$source_ID');";
	$checkingPestQuery= "SELECT * FROM pest WHERE pestId like '$pest_ID'";
    
	$result = mysqli_query($link, $checkingPestQuery);
	$count = mysqli_num_rows($result);
    
    if($count == 0)
    {
        if(mysqli_query($link, $addingPestQuery))
        {
            header("location: confirmRegister.html");
        }
        
        else
        {
            echo "Failed to adding new pest";
            echo "Error: ".mysqli_error($link);
        }
    }
?>