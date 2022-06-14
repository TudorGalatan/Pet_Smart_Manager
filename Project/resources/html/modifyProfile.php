<?php
include('connect.php');

$name = $_POST['name'];
$type = $_POST['type'];
$email = $_POST['email'];


$image_dir= './../images/';
move_uploaded_file($_FILES['file']['tmp_name'], $image_dir. $_FILES['file']['name']);
$image = $image_dir . $_FILES['file']['name'];


// -----

$return ="";  


$username = $_COOKIE["username"];


 
$sql = "UPDATE users SET name='$name',type='$type',email='$email', img_dir='$image' WHERE username='$username';";

if (mysqli_query($dbconn, $sql)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/my_profile.php");
    exit();
            
} 
else {
    $return .= "Profile information not updated. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
