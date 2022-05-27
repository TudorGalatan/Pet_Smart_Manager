<?php
include('connect.php');

$name = $_POST['name'];
$date = $_POST['date'];
$description = $_POST['description'];




// -----

$return ="";  



 
$sql = "INSERT INTO events (id_pet,name, date, description)
            VALUES (9, '$name', '$date', '$description');";

if (mysqli_query($dbconn, $sql)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/pet_general_info.php");
    exit();
            
} 
else {
    $return .= "New user not saved. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
