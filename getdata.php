<?php
$host = "localhost";
$user = "prashuuu";
$pass = "123456";
$db   = "dmart_data";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    die("Connection failed");
}

$sql = "SELECT * FROM iot_data 
        WHERE name='iot1527'
        ORDER BY id DESC LIMIT 1";

$res = $conn->query($sql);
$row = $res->fetch_assoc();

echo json_encode($row);
?>
