<?php

include 'database.php';

$servername = "localhost";
$username = "root";
$password = "gates@2";
$dbname = "enrollment_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$lrn = $_POST['lrn'];
$first_name = $_POST['Student-first-name'];
$middle_name = $_POST['Student-middle-name'];
$last_name = $_POST['Student-last-name'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$grade_level = $_POST['grade-level'];
$strand = $_POST['strand'];
$tvl_specification = $_POST['what-tvl'];
$father_name = $_POST['father-first-name'] . " " . $_POST['father-middle-name'] . " " . $_POST['father-last-name'];
$father_contact = $_POST['father_contact'];
$mother_name = $_POST['mother-first-name'] . " " . $_POST['mother-middle-name'] . " " . $_POST['mother-last-name'];
$mother_contact = $_POST['mother_contact'];
$guardian_name = $_POST['guardian_name'];
$guardian_relationship = $_POST['guardian_relationship'];
$guardian_contact = $_POST['guardian_contact'];
$allergies = isset($_POST['allergies']) ? $_POST['allergies'] : "No";
$chronic_illness = isset($_POST['chronic_illness']) ? $_POST['chronic_illness'] : "No";
$emergency_contact = $_POST['emergency_contact'];


$sql = "INSERT INTO students (lrn, first_name, middle_name, last_name, dob, age, gender, address, contact_number, email, nationality, religion, grade_level, strand, tvl_specification, father_name, father_contact, mother_name, mother_contact, guardian_name, guardian_relationship, guardian_contact, allergies, chronic_illness, emergency_contact) 
VALUES ('$lrn', '$first_name', '$middle_name', '$last_name', '$dob', '$age', '$gender', '$address', '$contact_number', '$email', '$nationality', '$religion', '$grade_level', '$strand', '$tvl_specification', '$father_name', '$father_contact', '$mother_name', '$mother_contact', '$guardian_name', '$guardian_relationship', '$guardian_contact', '$allergies', '$chronic_illness', '$emergency_contact')";

if ($conn->query($sql) === TRUE) {
    echo "Enrollment successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
