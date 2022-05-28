<?php
include('connect.php');



$id_event = $_POST['id_event'];

// -----

$return ="";  



 
$sql = "DELETE FROM events WHERE id=$id_event;";

if (mysqli_query($dbconn, $sql)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/pet_general_info.php");
    
    exit();
            
} 
else {
    $return .= "Not deleted. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
