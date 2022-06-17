<?php
include('connect.php');



$id_pet_guest = $_POST['id_pet_guest'];
$description = $_POST['description'];

// -----

$return ="";  




$id_pet = $_COOKIE["id_pet"];

 
$sql = "INSERT INTO friends (id_pet_host, id_pet_guest,description)
VALUES ($id_pet, $id_pet_guest ,'$description');";

if (mysqli_query($dbconn, $sql)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/pet_general_info.php");
    
    exit();
            
} 
else {
    $return .= "Not friend added. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>