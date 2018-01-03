<?php 
include "database.php";
$gdax_price = $_POST['value1'];
$binance_price = $_POST['value2'];
$diff = $_POST['value3'];
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO compareApi_data (gdaxPrice, binancePrice, difference, timestamp) VALUES ('".$gdax_price."' , '".$binance_price."','".$diff."','".$date ."')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
