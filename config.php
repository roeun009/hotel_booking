<?php
$servername = "sql301.infinityfree.com"; // check your InfinityFree DB hostname
$username = "if0_40180102";
$password = "Roeun009";
$database = "if0_40180102_hotelcita";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";
?>