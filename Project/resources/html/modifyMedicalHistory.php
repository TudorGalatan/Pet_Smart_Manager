<?php
include('connect.php');

$allergies = $_POST['allergies'];
$diseases = $_POST['diseases'];
$next_date = $_POST['next_date'];
$previous_date = $_POST['previous_date'];
$previous_surgeries = $_POST['previous_surgeries'];


// -----

$return ="";  


$id_pet = $_COOKIE["id_pet"];


$sql = "SELECT  id from medical WHERE id_pet=$id_pet;";
$result = mysqli_query($dbconn, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
    $sql_new = "UPDATE medical SET allergies='$allergies',diseases='$diseases',next_date='$next_date', previous_date='$previous_date', previous_surgeries='$previous_surgeries' WHERE id_pet=$id_pet;";
}
else{
     
    $sql_new = "INSERT INTO medical (id_pet,allergies,diseases, next_date,previous_date, previous_surgeries)
    VALUES ($id_pet, '$allergies', '$diseases', '$next_date', '$previous_date','$previous_surgeries');";

}

 

if (mysqli_query($dbconn, $sql_new)) {
    header("Location: http://localhost/Pet_Smart_Manager/Project/resources/html/medical_history.php");
    exit();
            
} 
else {
    $return .= "Profile information not updated. Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
