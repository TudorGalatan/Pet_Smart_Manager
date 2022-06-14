<?php
include('connect.php');

$monday = $_POST['monday'];
$tuesday = $_POST['tuesday'];
$wednesday = $_POST['wednesday'];
$thursday = $_POST['thursday'];
$friday = $_POST['friday'];
$saturday = $_POST['saturday'];
$sunday = $_POST['sunday'];


// -----

$return ="";  


$id_pet = $_COOKIE["id_pet"];


$sql = "SELECT  id from food WHERE id_pet=$id_pet;";
$result = mysqli_query($dbconn, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
    $sql_new = "UPDATE food SET monday='$monday',tuesday='$tuesday',wednesday='$wednesday',thursday='$thursday', friday='$friday', saturday='$saturday', sunday='$sunday' WHERE id_pet=$id_pet;";
}
else{
     
    $sql_new = "INSERT INTO food (id_pet,monday, tuesday, wednesday, thursday, friday, saturday, sunday)
    VALUES ($id_pet, '$monday', '$tuesday','$wednesday', '$thursday' , '$friday', '$saturday', '$sunday');";

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