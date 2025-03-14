<?php
$host = "https://mnhs-project.github.io/Enrollment-MNHS/1.html"; // Replace with your remote MySQL host
$username = "root"; // MySQL username
$password = "gates@2"; // MySQL password
$database = "enrollment_db"; // Name of your MySQL database

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
