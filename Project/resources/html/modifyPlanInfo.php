<?php
include('connect.php');

$monday_lunch = $_POST['monday_lunch'];
$monday_dinner = $_POST['monday_dinner'];
$tuesday_lunch = $_POST['tuesday_lunch'];
$tuesday_dinner = $_POST['tuesday_dinner'];
$wednesday_lunch = $_POST['wednesday_lunch'];
$wednesday_dinner = $_POST['wednesday_dinner'];
$thursday_lunch = $_POST['thursday_lunch'];
$thursday_dinner = $_POST['thursday_dinner'];
$friday_lunch = $_POST['friday_lunch'];
$friday_dinner = $_POST['friday_dinner'];
$saturday_lunch = $_POST['saturday_lunch'];
$saturday_dinner = $_POST['saturday_dinner'];
$sunday_lunch = $_POST['sunday_lunch'];
$sunday_dinner = $_POST['sunday_dinner'];


// -----

$return ="";  


$id_pet = $_COOKIE["id_pet"];


$sql = "SELECT  id_pet from calendar WHERE id_pet=$id_pet;";
$result = mysqli_query($dbconn, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
    $sql_new = "UPDATE calendar SET monday_lunch='$monday_lunch', monday_dinner='$monday_dinner',tuesday_lunch='$tuesday_lunch', tuesday_dinner='$tuesday_dinner',wednesday_lunch='$wednesday_lunch', wednesday_dinner='$wednesday_dinner',thursday_lunch='$thursday_lunch',thursday_dinner='$thursday_dinner', friday_lunch='$friday_lunch',friday_dinner='$friday_dinner', saturday_lunch='$saturday_lunch', saturday_dinner='$saturday_dinner',sunday_lunch='$sunday_lunch',sunday_dinner='$sunday_dinner' WHERE id_pet=$id_pet;";
}
else{
     
    $sql_new = "INSERT INTO calendar (id_pet,monday_lunch, monday_dinner, tuesday_lunch, tuesday_dinner, wednesday_lunch, wednesday_dinner, thursday_lunch, thursday_dinner, friday_lunch, friday_dinner, saturday_lunch, saturday_dinner, sunday_lunch, sunday_dinner)
    VALUES ($id_pet, '$monday_lunch','$monday_dinner',  '$tuesday_lunch','$tuesday_dinner','$wednesday_lunch', '$wednesday_dinner','$thursday_lunch' ,'$thursday_dinner' , '$friday_lunch','$friday_dinner',  '$saturday_lunch','$saturday_dinner', '$sunday_lunch', '$sunday_dinner');";

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