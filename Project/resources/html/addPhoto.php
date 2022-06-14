<?php
include('connect.php');




$image_dir= './../images/';
move_uploaded_file($_FILES['file']['tmp_name'], $image_dir. $_FILES['file']['name']);
$image = $image_dir . $_FILES['file']['name'];


// -----

$return ="";  


$id_pet = $_COOKIE["id_pet"];


$sql = "INSERT INTO gallery (id_pet,img_dir)
VALUES ($id_pet, '$image');";


if (mysqli_query($dbconn, $sql)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/gallery.php");
    exit();
            
} 
else {
    $return .= "Profile information not updated. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
