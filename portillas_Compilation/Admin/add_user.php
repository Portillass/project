<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "compilation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input from POST request
$stud_id = $_POST['stud_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$age = $_POST['age'];
$address = $_POST['address'];

// SQL INSERT query to add a new user
$sql = "INSERT INTO student (student_id, firstname, lastname, email, age, address) 
        VALUES ('$stud_id', '$fname', '$lname', '$email', '$age', '$address')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
