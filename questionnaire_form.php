<!DOCTYPE html>
<html>
<head>
    <title>Adopter Questionnaire</title>
    <link rel="stylesheet" type="text/css" href="questionnaire_style.css">
	<style>
	.logo {
            position: absolute;
            top: 35px;
            left: 1595px;
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
    <div class="container">
        <h1>Adopter Questionnaire</h1>
        <form id="questionnaireForm">      
            <!-- Living Situation -->
            <fieldset>
                <legend>Living Situation:</legend>
                <label>Do you live in a house or apartment?</label><br>
                <input type="radio" id="house" name="living_situation" value="house" required>
                <label for="house">House</label><br>
                <input type="radio" id="apartment" name="living_situation" value="apartment" required>
                <label for="apartment">Apartment</label><br>

                <label>Do you own or rent your home?</label><br>
                <input type="radio" id="own" name="home_ownership" value="own" required>
                <label for="own">Own</label><br>
                <input type="radio" id="rent" name="home_ownership" value="rent" required>
                <label for="rent">Rent</label><br>

                <label>Do you have a fenced yard?</label><br>
                <input type="radio" id="yes_fence" name="fenced_yard" value="yes" required>
                <label for="yes_fence">Yes</label><br>
                <input type="radio" id="no_fence" name="fenced_yard" value="no" required>
                <label for="no_fence">No</label><br>
            </fieldset>

            <!-- Family and Household -->
            <fieldset>
                <legend>Family and Household:</legend>
                <label>How many adults live in your household?</label><br>
                <input type="number" id="adults" name="adults" required><br>

                <label>How many children live in your household?</label><br>
                <input type="number" id="children" name="children" required><br>

                <label>Do you have any other pets?</label><br>
                <input type="radio" id="yes_pets" name="other_pets" value="yes" required>
                <label for="yes_pets">Yes</label><br>
                <input type="radio" id="no_pets" name="other_pets" value="no" required>
                <label for="no_pets">No</label><br>

                <label for="pet_details">If yes, please specify type and number:</label><br>
                <textarea id="pet_details" name="pet_details" rows="3" cols="50"></textarea><br>
            </fieldset>

            <!-- Lifestyle and Activity Level -->
            <fieldset>
                <legend>Lifestyle and Activity Level:</legend>
                <label>Describe your typical daily routine:</label><br>
                <textarea id="daily_routine" name="daily_routine" rows="3" cols="50"></textarea><br>

                <label>How often do you exercise or go for walks?</label><br>
                <input type="text" id="exercise_frequency" name="exercise_frequency" required><br>
            </fieldset>

            <!-- Preferences and Expectations -->
            <fieldset>
                <legend>Preferences and Expectations:</legend>
                <label>What type of animal are you interested in adopting?</label><br>
                <input type="text" id="animal_type" name="animal_type" required><br>

                <label>What age range are you comfortable with for your new pet?</label><br>
                <input type="text" id="age_range" name="age_range" required><br>

                <label>Are you looking for a specific breed or size?</label><br>
                <input type="text" id="breed_size" name="breed_size" required><br>

                <label>What are your expectations for the pet's behavior and temperament?</label><br>
                <textarea id="expectations" name="expectations" rows="3" cols="50"></textarea><br>
            </fieldset>

            <!-- Experience and Commitment -->
            <fieldset>
                <legend>Experience and Commitment:</legend>
                <label>Have you owned pets before? If yes, describe your experience:</label><br>
                <textarea id="pet_experience" name="pet_experience" rows="3" cols="50"></textarea><br>

                <label>Are you willing to commit to caring for a pet for its entire life span?</label><br>
                <input type="radio" id="commitment_yes" name="commitment" value="yes" required>
                <label for="commitment_yes">Yes</label><br>
                <input type="radio" id="commitment_no" name="commitment" value="no" required>
                <label for="commitment_no">No</label><br>
            </fieldset>

            <!-- Additional Comments or Questions -->
            <fieldset>
                <legend>Additional Comments or Questions:</legend>
                <label for="comments">Is there anything else you would like to share or ask about?</label><br>
                <textarea id="comments" name="comments" rows="3" cols="50"></textarea><br>
            </fieldset>

            <button type="button" id="submitButton">Submit</button>
			
			<a href=adopter_login.php><p align=right>Skip</p></a>
        </form>
    </div>
	
	<script>
    document.getElementById("submitButton").addEventListener("click", function() {
        window.location.href = "adopter_login.php"; // Redirect to adopter login form
    });
</script>
</body>
</html>
