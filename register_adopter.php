<!DOCTYPE html>
<html>
<head>
	<title>Adopter Registration</title>
    <link rel="stylesheet" type="text/css" href="register_forms_style.css">
	
	<style>
	.login {
		text-align: center;
		font-size: 20px; 
		margin-top: 20px; 
	}

	.login a {
		color: #a67b5b; 
		text-decoration: none; 
	}

	.login a:hover {
		text-decoration: underline; 
		color:#836953;
	}
	
	.back-arrow-adopter img {
	max-width:2%;
	position: absolute;
	top: 190px;
    margin-left: 5px;
    height: auto;
}

.logo {
            position: absolute;
            top: 195px;
            left: 1495px;
        }
		
.logo img {
	max-width:65px;
}
	</style>
</head>
	<body>
		<div class="logo">
        <img src="adoptailslogo.png" alt="Adoptails Logo">
		</div>
		<a href="homepage.php" class="back-arrow-adopter"><img src="back.png"></img></a>
		<div class="registration-form">
		<h1 class="form-title"><center>Adopter Registration Form</center></h1>
		<form action="register_adopter.php" method="post">
			<label for="name">Name :</label><br>
			<input type="text" id="name" name="name" required><br>
		
			<label for="contact">Contact :</label><br>
			<input type="text" id="contact" name="contact" required><br>
			
			<label for="location">Location :</label><br>
			<input type="text" id="location" name="location" required><br>
		
			<label for="email">Email :</label><br>
			<input type="email" id="email" name="email" required><br>
		
			<label for="preferences">Preferences for Adoption :</label><br>
			<textarea id="preferences" name="preferences" rows="4" cols="50" 
			placeholder="Species, breed, age, size, gender, color, etc."></textarea><br>
			
			<div class="login">
			<input type="submit" value="Register"><br><br>
			<label for="login1">Already registered? <br> <a href="adopter_login.php"> Login  here</a></label>
			</div>
		</form>
		</div>
	</body>
</html>


<?php
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
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO adopters (name, contact, location, email, preferences) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $contact, $location, $email, $preferences);

    // Set parameters
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $location = $_POST["location"];
    $email = $_POST["email"];
    $preferences = $_POST["preferences"];

    // Execute the SQL statement
if ($stmt->execute()) {
    // Redirect to questionnaire_form.php
    echo "<script>window.location.href = 'questionnaire_form.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
