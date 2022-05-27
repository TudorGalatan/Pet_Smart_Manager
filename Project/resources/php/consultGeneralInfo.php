<?php
include('connect.php');

// -----

$return ="";  


$sql = "SELECT age,type,breed FROM pets WHERE id = '5';";
 
$result = mysqli_query($dbconn, $sql);
$row = mysqli_fetch_row($result);

if ($result) {

    $age = $row[0];
    $type = $row[1];
    $breed = $row[2];
   
    $age = $_GET['age'];


    $return .= $age;
    
    
            
} 
else {
    $return .= "Code error: " . $sql . " " . mysqli_error($dbconn);
 }





echo $return;

mysqli_close($dbconn);

?>
