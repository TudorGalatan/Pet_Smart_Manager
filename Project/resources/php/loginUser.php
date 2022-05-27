<?php
include('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];




// -----

$return ="";  


$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
 
$result = mysqli_query($dbconn, $sql);

if ($result) {

    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0){
        header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/pets.html");
        exit();
    }
    else{
        $return .= "User not found";
    }
    
            
} 
else {
    $return .= "Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
