<?php
include('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];



// -----

$return =""; // variable de mensaje con la información 



// (1) INSERCIÓN EN TABLA Empleado 
$sql = "INSERT INTO users (username, password, name, email, type)
            VALUES ('$username', '$password', '$name', '$email', '$type');";

if (mysqli_query($dbconn, $sql)) {
    $return .=  "New user added.";
            
} 
else {
    $return .= "New user not saved. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
