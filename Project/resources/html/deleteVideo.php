<?php
include('connect.php');
 
if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM video_gallery WHERE id=$id;";
    

    if (mysqli_query($dbconn, $sql)) {
        header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/gallery.php");
    
        exit();
                
    } 
    else {
        $return .= "Not deleted. Code error: " . $sql . " " . mysqli_error($dbconn);
     }

     
   
}



?>