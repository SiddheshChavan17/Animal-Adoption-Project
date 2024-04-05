<!DOCTYPE html>
<html>
<head>
	<title>Shelter Registration</title>
    <link rel="stylesheet" type="text/css" href="register_forms_style.css">
	<style>
	.logo {
            position: absolute;
            top: 300px;
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
	<a href="homepage.php" class="back-arrow-shelter"><img src="back.png"></img></a>
		<div class="registration-form">
		<h1 class="form-title"><center>Shelter Registration Form</center></h1>
		<form id="shelterForm" action="shelterdata.php" method="post">
			<label for="organization_name">Organization Name :</label><br>
			<input type="text" id="organization_name" name="organization_name" required><br>
		
			<label for="contact">Contact :</label><br>
			<input type="text" id="contact" name="contact" required><br>
			
			<label for="location">Location :</label><br>
			<input type="text" id="location" name="location" required><br>
		
			<label for="email">Email :</label><br>
			<input type="email" id="email" name="email" required><br>
		
			<input type="submit" value="Register">
		</form>
		</div>
		
		<script>
    // Function to handle form submission and display alert
    function submitFormAndDisplayAlert(event) {
        // Prevent default form submission behavior
        event.preventDefault();

        // Submit the form asynchronously
        fetch('shelterdata.php', {
            method: 'POST',
            body: new FormData(document.getElementById("shelterForm"))
        })
        .then(response => response.text())
        .then(message => {
            // Display the alert message
            alert(message);
        })
        .catch(error => console.error('Error:', error));
    }

    // Attach the event listener to the form submission
    document.getElementById("shelterForm").addEventListener("submit", submitFormAndDisplayAlert);
</script>

	</body>
</html>
