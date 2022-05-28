<?php
include('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];



// -----

$return ="";  



 
$sql = "INSERT INTO users (username, password, name, email, type)
            VALUES ('$username', '$password', '$name', '$email', '$type');";

if (mysqli_query($dbconn, $sql)) {
    setcookie("username", $username, 0, "/", null);
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/pets.php");
    exit();
            
} 
else {
    $return .= "New user not saved. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
