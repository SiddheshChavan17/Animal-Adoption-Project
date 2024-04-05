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
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO contactus (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Thank you for contacting us! We'll reach out to you soon.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
