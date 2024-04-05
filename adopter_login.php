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
    $Name = htmlspecialchars($_POST["Name"]);
    $Contact = htmlspecialchars($_POST["Contact"]);

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM adopters WHERE Name=? AND Contact=?");
    $stmt->bind_param("ss", $Name, $Contact);
    
    // Execute the SQL statement
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();
    
    // Check if a matching record exists
    if ($result->num_rows > 0) {
        // Store user data in session
        $_SESSION['Name'] = $Name;
        $_SESSION['Contact'] = $Contact;
		
        // Redirect to animals
        header("Location: animals.php");
        exit();
    } else {
        // Display error message
        $error_message = "Incorrect Name or Contact information.";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adopter Login</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
	display: flex;
    justify-content: center;
    align-items: center;
}

.login-container {
    max-width: 100%;
    margin-top: 400px;
    margin-bottom: 400px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fdf5e6;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


.login-heading {
    text-align: center;
    font-size: 24px;
    color: #836953;
	margin-bottom: 20px;
}

.login-form {
    margin-top: 40px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 16px;
    margin-bottom: 5px;
    color: #555;
}

.form-group input[type="text"] {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.login-button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #a67b5b;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.login-button:hover {
    background-color: #836953;
}

h3{
	font-style: italic;
	margin: auto;
	color: #a67b5b;
}

.back-arrow img {
    position: absolute;
    top: 55px;
	margin-top:380px;
    margin-left: 5px;
	max-width: 40px;
    height: auto;
}
</style>
</head>

<body>
	<a href="homepage.php" class="back-arrow"><img src="back.png"></img></a>
    <div class="login-container">
        <h1 class="login-heading">Adopter Login</h1>
		<?php if(isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
		<?php } ?>
		<h3> You are just a step away from choosing your pawtner <3</h3>
        <form action="adopter_login.php" method="post" class="login-form">
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" id="Name" name="Name" required>
            </div>
            <div class="form-group">
                <label for="Contact">Contact:</label>
                <input type="text" id="Contact" name="Contact" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</body>
</html>

