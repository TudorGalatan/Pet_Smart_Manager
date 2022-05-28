<?php
include('connect.php');

$name = $_POST['name'];
$type = $_POST['type'];
$breed = $_POST['breed'];




// -----

$return ="";  



 
$sql = "INSERT INTO pets (name, username, type, breed)
            VALUES ('$name', 'celia', '$type', '$breed');";

if (mysqli_query($dbconn, $sql)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/pets.html");
    exit();
            
} 
else {
    $return .= "New pet not saved. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
