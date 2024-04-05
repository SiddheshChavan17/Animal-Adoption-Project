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

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $address = htmlspecialchars($_POST["address"]);
    $email = htmlspecialchars($_POST["email"]);
    $skills = isset($_POST["skill1"]) ? $_POST["skill1"] . ", " : "";
    $skills .= isset($_POST["skill2"]) ? $_POST["skill2"] . ", " : "";
    $skills .= isset($_POST["skill3"]) ? $_POST["skill3"] . ", " : "";
    $skills .= isset($_POST["skill4"]) ? $_POST["skill4"] : "";

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO volunteers (name, phone, address, email, skills) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $phone, $address, $email, $skills);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Registration successful. Thank you for volunteering!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
