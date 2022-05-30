<?php
include('connect.php');

$name = $_POST['name'];
$type = $_POST['type'];
$breed = $_POST['breed'];
$age = $_POST['age'];

$image_dir= './../images/';
move_uploaded_file($_FILES['file']['tmp_name'], $image_dir. $_FILES['ile']['name']);
$image = $image_dir . $_FILES['file']['name'];


// -----

$return ="";  


$id_pet = $_COOKIE["id_pet"];


 
$sql = "UPDATE pets SET name='$name',type='$type',breed='$breed',age='$age', img_dir='$image' WHERE id=$id_pet;";

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
