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
    $animal_category = $_POST["animal-category"];
    $lost_found = $_POST["lost-found"];
    $collar_tag = $_POST["collar-tag"];
    $pet_name = $_POST["pet-name"];
    $breed = $_POST["breed"];
    $report_date = $_POST["date"];
    $report_time = $_POST["time"];
    $location = $_POST["location"];
    $contact_info = $_POST["contact-info"];
    $description = $_POST["description"];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO lostandfound (animal_category, lost_found, collar_tag, pet_name, breed, report_date, report_time, location, contact_info, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $animal_category, $lost_found, $collar_tag, $pet_name, $breed, $report_date, $report_time, $location, $contact_info, $description);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Thank you for reporting!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
