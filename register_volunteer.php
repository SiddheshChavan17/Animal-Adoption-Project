<!DOCTYPE html>
<html>
<head>
	<title>Volunteer Registration</title>
    <link rel="stylesheet" type="text/css" href="register_forms_style.css">
	<style>
	.logo {
            position: absolute;
            top: 230px;
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
	<a href="homepage.php" class="back-arrow"><img src="back.png"></img></a>
		<div class="registration-form">
		<h1 class="form-title"><center>Volunteer Registration Form</center></h1>
		<form id="volunteerForm" action="volunteersdata.php" method="post">
			<label for="name">Name :</label><br>
			<input type="text" id="name" name="name" required><br>
		
			<label for="contact">Phone :</label><br>
			<input type="text" id="phone" name="phone" required><br>
			
			<label for="address">Address :</label><br>
			<input type="text" id="address" name="address" required><br>
		
			<label for="email">Email :</label><br>
			<input type="email" id="email" name="email" required><br>
		
			<label for="skills">Skills:</label><br>
			<div class="skill-group">
            <input type="checkbox" id="skill1" name="skill1" value="Animal Care">
            <label for="skill1">Animal Care</label><br>
            <input type="checkbox" id="skill2" name="skill2" value="Adoption Counseling">
            <label for="skill2">Adoption Counseling</label><br>
            <input type="checkbox" id="skill3" name="skill3" value="Event Planning">
            <label for="skill3">Event Planning</label><br>
            <input type="checkbox" id="skill4" name="skill4" value="Fundraising">
            <label for="skill4">Fundraising</label><br><br>
			</div>
		
			<input type="submit" value="Register">
		</form>
		</div>
		
<script>
    // Function to handle form submission and display alert
    function submitFormAndDisplayAlert(event) {
        // Prevent default form submission behavior
        event.preventDefault();

        // Submit the form asynchronously
        fetch('volunteersdata.php', {
            method: 'POST',
            body: new FormData(document.getElementById("volunteerForm"))
        })
        .then(response => response.text())
        .then(message => {
            // Display the alert message
            alert(message);
        })
        .catch(error => console.error('Error:', error));
    }

    // Attach the event listener to the form submission
    document.getElementById("volunteerForm").addEventListener("submit", submitFormAndDisplayAlert);
</script>



	</body>
</html>
