<?php
$servername = "localhost";
$username = "root";
$password = "gates@2";
$dbname = "enrollment_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
?>

