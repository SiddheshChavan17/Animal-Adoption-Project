<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css"> <!-- Your custom styles -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Contact Form Styles */
        .contact-section {
            padding: 40px 0;
            background-color: #f9f9f9;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
		
		.contact-section .container h2{
			font-size: 40px;
			margin-bottom: -70px;
		}

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form textarea {
            height: 150px;
        }

        .contact-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        /* Map Section Styles */
        .map-section {
            padding: 40px 0;
            text-align: center;
        }
		
		.map-section .container h2{
			font-size: 40px;
		}

        /* Information Section Styles */
        .info-section {
            padding: 80px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
		.info-section .container{
			display:flex;
		}		

        .info-section .info {
            flex: 1;
			padding-right:50px;
        }

        .info-section .info h2 {
            font-size: 40px;
            margin-bottom: 20px;
        }
		
		.info-section .info super {
            font-size: 30px;
        }

        .info-section .info p {
            font-size: 20px;
        }

        .info-section .image {
            flex: 1;
            text-align: center;
			max-width:400px;
        }

        .info-section .image img {
            max-width: 100%;
            border-radius: 10px;
        }
		
		hr{
			max-width:1600px;
			height: 1px; 
			background-color:black;
		}
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- First Section - Contact Form -->
    <section class="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-form">
                <form id="contactForm" action="#" method="post">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="phone" placeholder="Your Phone">
                    <textarea name="message" placeholder="Reason to Contact" required></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Second Section - Map View -->
    <section class="map-section">
        <div class="container">
		<h2>Location</h2>
            <!-- Embed your map here -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1124.717979206705!2d73.84738091435376!3d18.525048543958846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1bf326cd513%3A0xf5ddc2185be65463!2smodern%20college%20of%20business%20administration%7C!5e0!3m2!1sen!2sin!4v1710005490494!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
	<hr>

    <!-- Third Section - Information -->
    <section class="info-section">
        <div class="container">
            <div class="info">
                <h2>For Donation</h2>
                <p><strong>HDFC bank</strong><br><br>
					Pragati Nagar, Aundh Road, Pune 411020<br>
					A/c name : AdopTails<br>
					A/c no: 50200015589499<br>
					RTGS/NEFT/IFSC :HDFC0000169<br>
					A/c – Current account<br><br>

					For Gpay, Paytm and Phone pay – 7972086913</p>
            </div>
            <div class="image">
                <img src="d1.jpg" alt="donationqr">
            </div>
        </div>
    </section>
		<?php include 'footer.php'; ?>
		
		
		<script>
    // Function to handle form submission and display alert
    function submitFormAndDisplayAlert(event) {
        // Prevent default form submission behavior
        event.preventDefault();

        // Submit the form asynchronously
        fetch('contactusdata.php', {
            method: 'POST',
            body: new FormData(document.getElementById("contactForm"))
        })
        .then(response => response.text())
        .then(message => {
            // Display the alert message
            alert(message);
        })
        .catch(error => console.error('Error:', error));
    }

    // Attach the event listener to the form submission
    document.getElementById("contactForm").addEventListener("submit", submitFormAndDisplayAlert);
</script>

</body>
</html>
