<?php
session_start();

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
    $amount = $_POST["amount"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO donations (amount, first_name, last_name, email, phone) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $amount, $first_name, $last_name, $email, $phone);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Thank you for your donation!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
