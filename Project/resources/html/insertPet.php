<?php
include('connect.php');

$name = $_POST['name'];
$type = $_POST['type'];
$breed = $_POST['breed'];
$username = $_COOKIE["username"];


$image_dir= './../images/';
$temp = $_FILES['file']['tmp_name'];
$name_file = $_FILES['file']['name'];





$return ="";  





$sql = "INSERT INTO pets (name, username, type, breed, img_dir)
            VALUES ('$name','$username', '$type', '$breed','$image_dir/$name_file');";


if (mysqli_query($dbconn, $sql)) {
        if (move_uploaded_file($temp, '$image_dir/$name_file'))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/pets.php");
    exit();
            
} 
else {
    $return .= "New pet not saved. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
