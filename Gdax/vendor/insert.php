<?php 
 
include "database.php";

$key = $_POST['key'];
$value = $_POST['value'];
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO gdax_data (Symbol, Price, timestamp) VALUES ('".$key."' , '".$value."','".$date ."')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
