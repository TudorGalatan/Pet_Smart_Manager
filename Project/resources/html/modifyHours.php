<?php
include('connect.php');

$lunch = $_POST['lunch'];
$dinner = $_POST['dinner'];


// -----

$return ="";  


$id_pet = $_COOKIE["id_pet"];


$sql = "SELECT  id_pet from food WHERE id_pet=$id_pet;";
$result = mysqli_query($dbconn, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
    $sql_new = "UPDATE food SET lunch='$lunch', dinner='$dinner' WHERE id_pet=$id_pet;";
}
else{
     
    $sql_new = "INSERT INTO food(id_pet,lunch, dinner)
    VALUES ($id_pet, '$lunch','$dinner');";

}

 

if (mysqli_query($dbconn, $sql_new)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/food_info.php");
    exit();
            
} 
else {
    $return .= "Food information not updated. Code error: " . $sql . " " . mysqli_error($dbconn);
 }