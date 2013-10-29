<?php
    include('connect.inc.php');
    //for make an auto increment
	
    $source_ID = $_POST['source_up'];
    $pest_type = $_POST['type_up'];
    $pest_marking = $_POST['mark_up'];
    
    $addingPestQuery = "INSERT INTO `pest` VALUES (NULL, '$source_ID','$pest_type', '$pest_marking');";


        if(mysqli_query($link, $addingPestQuery))
        {
            header("location: confirmRegister.php");
        }
        
        else
        {
            echo "Failed to adding new pest";
            echo "Error: ".mysqli_error($link);
        }
?>
