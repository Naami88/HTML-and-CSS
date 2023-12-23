<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "User_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$nic = mysqli_real_escape_string($conn, $_POST['nic']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$userPassword = mysqli_real_escape_string($conn, $_POST['password']);  // Changed variable name to avoid conflict

// Insert data into the database
$insert_query = "INSERT INTO studentData (name, nic, email, address, gender, password) VALUES ('$name', '$nic', '$email', '$address', '$gender', '$userPassword')";

if ($conn->query($insert_query) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();

?>

