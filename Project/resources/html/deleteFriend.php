<?php
include('connect.php');
 
if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM friends WHERE id=$id;";
    

    if (mysqli_query($dbconn, $sql)) {
        header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/pet_general_info.php");
    
        exit();
                
    } 
    else {
        $return .= "Not deleted. Code error: " . $sql . " " . mysqli_error($dbconn);
     }

     
   
}



?>