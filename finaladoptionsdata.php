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
    $Name = htmlspecialchars($_POST["name"]);
    $Contact = htmlspecialchars($_POST["contact"]);
    $Email = htmlspecialchars($_POST["email"]);
    $PetType = htmlspecialchars($_POST["pettype"]);
    $PetName = htmlspecialchars($_POST["petname"]);
    $Breed = htmlspecialchars($_POST["breed"]);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO finaladoptions (name, contact, email, pettype, petname, breed) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Name, $Contact, $Email, $PetType, $PetName, $Breed);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Your details have been recorded successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
