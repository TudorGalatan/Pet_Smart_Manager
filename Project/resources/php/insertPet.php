<?php
include('connect.php');

$name = $_POST['name'];
$type = $_POST['type'];
$breed = $_POST['breed'];
$username = $_COOKIE["username"];


// -----

$return ="";  
 



$sql = "INSERT INTO pets (name, username, type, breed)
            VALUES ('$name','$username', '$type', '$breed');";


if (mysqli_query($dbconn, $sql)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/pets.php");
    exit();
            
} 
else {
    $return .= "New pet not saved. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
