<?php
include('connect.php');

$name = $_POST['name'];
$type = $_POST['type'];
$breed = $_POST['breed'];
$username = $_COOKIE["username"];

echo "1";
$image_dir= './../images/';
$temp = $_FILES['file']['tmp_name'];
$name_file = $_FILES['file']['name'];
if (move_uploaded_file($temp, '$image_dir/$name_file')) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}



echo "2";
$image = $image_dir . $_FILES['file']['name'];
$return ="";  

echo "3";



$sql = "INSERT INTO pets (name, username, type, breed, img_dir)
            VALUES ('$name','$username', '$type', '$breed','$image_dir/$name_file');";


if (mysqli_query($dbconn, $sql)) {
        if (move_uploaded_file($tempname, $folder))  {
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
