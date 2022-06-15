<?php
include('connect.php');





// -----

$return ="";  


$id_pet = $_COOKIE["id_pet"];

$sql = "SELECT  id_pet from calendar WHERE id_pet=$id_pet;";
$result = mysqli_query($dbconn, $sql);

$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
    $sql = "UPDATE calendar SET monday_lunch='', monday_dinner='',tuesday_lunch='',tuesday_dinner='',  wednesday_lunch='',wednesday_dinner='', thursday_lunch='', thursday_dinner='',friday_lunch='',friday_dinner='', saturday_lunch='',saturday_dinner='', sunday_lunch='' , sunday_dinner='' WHERE id_pet=$id_pet;";
}






if (mysqli_query($dbconn, $sql)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/food_info.php");
    
    exit();
            
} 
else {
    $return .= "Not deleted. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>