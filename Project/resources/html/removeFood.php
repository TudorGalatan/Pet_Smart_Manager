<?php
include('connect.php');





// -----

$return ="";  


$id_pet = $_COOKIE["id_pet"];
$sql = "UPDATE food SET can_eat='',cannot_eat='' WHERE id_pet=$id_pet;";


if (mysqli_query($dbconn, $sql)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/food_info.php");
    
    exit();
            
} 
else {
    $return .= "Not deleted. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
