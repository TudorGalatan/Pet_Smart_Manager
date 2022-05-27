<?php
include('connect.php');

$name = $_POST['name'];
$type = $_POST['type'];
$breed = $_POST['breed'];
$age = $_POST['age'];




// -----

$return ="";  



 
$sql = "UPDATE pets SET name='$name',type='$type',breed='$breed',age='$age' WHERE id=9;";

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
