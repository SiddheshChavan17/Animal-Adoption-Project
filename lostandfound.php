<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #f5f5f5;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .banner {
            position: relative;
            background-image: url('lnf3.jpg');
            background-size: cover;
            background-position: center;
            height: 500px; 
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .card-block {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            max-width: 40%;
        }

        .card-block h1 {
            font-size: 30px;
            margin-bottom: 10px;
        }
		
		.card-block hr {
            max-width: 160px;
            border: 3px solid;
            color:black;
        }
		
		.card-block p {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .form-section {
            margin-bottom: 20px;
			padding:10px;
        }

        .form-section label {
            font-weight: bold;
        }

        .form-section input[type="text"],
        .form-section input[type="date"],
        .form-section input[type="time"],
        .form-section select,
        .form-section textarea {
            width: 100%;
            padding: 20px;
            margin-top: 10px;
			margin-bottom: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-section input[type="radio"] {
            margin-right: 20px;
			padding: 20px;
            margin-top: 10px;
			margin-bottom: 30px;
        }

        .form-section textarea {
            height: 150px;
            resize: none;
        }

        .submit-button {
            text-align: center;
        }

        .submit-button button {
            margin-top:20px;
            padding: 20px 100px;
            font-size: 24px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            background-color: #007aa5;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .submit-button button:hover {
            background-color: #0056b3;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #777;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <!-- Banner Section -->
        <section class="banner">
            <div class="card-block">
                <h1>Lost and Found Form</h1>
                <hr>
                <p>Please fill out the form below to report a lost or found pet.</p>
            </div>
        </section>

        <!-- Animal Category Section -->
        <section class="form-section">
            <form id="lostandfoundForm" action="lostandfounddata.php" method="post">
                <label for="animal-category">Pet Category:</label>
                <select id="animal-category" name="animal-category">
                    <option value="cat">Cat</option>
                    <option value="dog">Dog</option>
                    <option value="rabbit">Rabbit</option>
                </select>
        </section>
        <hr>

        <!-- Radio Button Questions Section -->
        <section class="form-section">
            <label>Is the Pet lost or found?</label><br>
            <input type="radio" id="lost" name="lost-found" value="lost">
            <label for="lost">Lost</label>
            <input type="radio" id="found" name="lost-found" value="found">
            <label for="found">Found</label><br>

            <label>Does the Pet have a collar/name tag?</label><br>
            <input type="radio" id="yes" name="collar-tag" value="yes">
            <label for="yes">Yes</label>
            <input type="radio" id="no" name="collar-tag" value="no">
            <label for="no">No</label>
        </section>
        <hr>

        <!-- Pet's Name and Breed Section -->
        <section class="form-section">
            <label for="pet-name">Pet's Name:</label>
            <input type="text" id="pet-name" name="pet-name" placeholder="Enter Pet's Name">
            <label for="breed">Breed:</label>
            <input type="text" id="breed" name="breed" placeholder="Enter Breed">
        </section>
        <hr>

        <!-- Date, Time, and Location Section -->
        <section class="form-section">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date">
            <label for="time">Time:</label>
            <input type="time" id="time" name="time">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" placeholder="Enter Location">
        </section>
        <hr>

        <!-- Contact Info and Additional Description Section -->
        <section class="form-section">
            <label for="contact-info">Contact Number:</label>
            <input type="text" id="contact-info" name="contact-info" placeholder="Enter Contact Number">
            <label for="description">Additional Description:</label>
            <textarea id="description" name="description" placeholder="Enter Additional Description"></textarea>
        </section>

        <!-- Submit Button Section -->
        <section class="submit-button">
            <button type="submit">Report</button>
        </section>

        <!-- Footer Text Section -->
        <p class="footer-text">Thank you for helping reunite lost pets with their owners! 🐾</p>
        </form>
    </div>
    <?php include 'footer.php'; ?>

    <script>
        // Function to handle form submission and display alert
        function submitFormAndDisplayAlert(event) {
            // Prevent default form submission behavior
            event.preventDefault();

            // Submit the form asynchronously
            fetch('lostandfounddata.php', {
                    method: 'POST',
                    body: new FormData(document.getElementById("lostandfoundForm"))
                })
                .then(response => response.text())
                .then(message => {
                    // Display the alert message
                    alert(message);
                })
                .catch(error => console.error('Error:', error));
        }

        // Attach the event listener to the form submission
        document.getElementById("lostandfoundForm").addEventListener("submit", submitFormAndDisplayAlert);
    </script>
</body>
</html>
