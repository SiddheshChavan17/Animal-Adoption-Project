<?php
session_start();

// Define $error_message variable
$error_message = '';

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "animal_adoption";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize
    $organization_name = htmlspecialchars($_POST["organization_name"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $location = htmlspecialchars($_POST["location"]);
    $email = htmlspecialchars($_POST["email"]);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO shelter (organization_name, contact, location, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $organization_name, $contact, $location, $email);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Thank you for registering your shelter!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
