<?php
include('connect.php');

$can_eat = $_POST['can_eat'];
$cannot_eat = $_POST['cannot_eat'];



// -----

$return ="";  


$id_pet = $_COOKIE["id_pet"];


$sql = "SELECT  id from food WHERE id_pet=$id_pet;";
$result = mysqli_query($dbconn, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
    $sql_new = "UPDATE food SET can_eat='$can_eat',cannot_eat='$cannot_eat' WHERE id_pet=$id_pet;";
}
else{
     
    $sql_new = "INSERT INTO food (id_pet,can_eat, cannot_eat)
    VALUES ($id_pet, '$can_eat', '$cannot_eat');";

}

 

if (mysqli_query($dbconn, $sql_new)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/food_info.php");
    exit();
            
} 
else {
    $return .= "Food information not updated. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>