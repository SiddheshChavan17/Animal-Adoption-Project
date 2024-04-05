<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding:20px;
            justify-content:center;
            align-items:center;
        }

        /* Banner Section */
        .banner {
            position: relative;
            background-image: url('don4.jpg');
            background-size: cover;
            background-position: center;
            height: 400px; 
            color: #fff;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-bottom: 20px;
        }

        .banner .card-block{
            position: absolute;
            top: 50%;
            left: 5%;
            transform: translateY(-50%);
            background-color: rgba(300, 300, 325, 0.6);
            padding: 20px;
            max-width: 35%;
            color: black;
        }

        .banner h1{
            font-size:30px;
            padding-left:10px;
        }

        .banner h2{
            font-size:22px;
            padding-left:10px;
        }

        .banner hr{
            max-width: 160px;
            border: 3px solid;
            color:black;
        }

        /* Donation Amount Section */
        .donation-amount,
        .donor-info,
        .terms,
        .summary,
        .donate-now {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .donation-amount h2,
        .donor-info h2,
        .terms h2,
        .summary h2,
        .donate-now h2 {
            margin-top: 0;
        }

        .donation-buttons {
            margin-bottom: 20px;
        }

        .donation-buttons button {
            padding: 20px 30px;
            margin: 0 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .donation-buttons button:hover {
            background-color: #a9a9a9;
        }

        .donation-buttons input[type="text"] {
            max-width:800px;
            margin-top: 30px;
            padding: 25px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .donor-info {
            display: flex;
            flex-direction: column;
			background-color:#d3d3d3;
        }

        .donor-info input[type="text"],
        .donor-info input[type="email"],
        .donor-info input[type="tel"] {
            width: 95%; /* Maximize the width */
            max-width: 800px;
            margin-top: 20px; /* Adjust margin as needed */
            margin-bottom: 10px; /* Adjust margin as needed */
            padding: 20px; /* Adjust padding as needed */
            border: 1px solid black;
            border-radius: 5px;
        }

        .donor-info .name-inputs {
            display: flex;
            justify-content: space-between; 
            width: 100%;
        }

        .donor-info .name-inputs input[type="text"] {
            width:40%;
            padding: 20px;
        }

        .terms label {
            display: block;
            margin-top:20px;
        }

        .terms hr {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .donate-now{
            text-align:center;
        }

        .donate-now p{
            font-size:18px;
        }

        .donate-now button {
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
		
		.print-donation button {
            margin-top:20px;
            padding: 15px 40px;
            font-size: 18px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            background-color: #4CAF50;
            color: #fff;
            transition: background-color 0.3s ease;
        }
		
		.print-donation button:hover {
            background-color: #45a049;
        }

        .donate-now button:hover {
            background-color: #0056b3;
        }
		
		.summary {
			background-color:#d3d3d3;
		}
		
		.extra img{
			margin-right:auto;
			max-width: 100px;
			margin-bottom:-110px;
		}
		.extra{
			display:none;
			align-items: center;
			justify-content: center; /* Centers content horizontally */
		}
		
		.extra h1{
			text-align: center;
			font-size:42px;
		}
		
		.extra h3{
			text-align: center;
			font-size:26px;
			font-style:italic;
			margin-top:70px;

		}
		
		.extra h5{
			text-align: center;
			font-size:16px;
			margin-top:70px;
		}
		
		 @media print {
        /* Hide all sections except for donor-info and summary */
        .banner,
		.donation-buttons,
		.card-block,
		.donation-amount,
		.print-header,
		.print-footer,
		.terms,
		.print-donation,
		.donate-now{
            display: none;
        }
		
		.extra,
        .donor-info,
        .summary{
            display: block;
        }
    }
    </style>
</head>
<body>

<section class="print-header">
<?php include 'header.php'; ?>
</section>

<section class="extra">
<img src="l1.png" alt="Adoptails Logo">
<h1>Donation Receipt</h1>
</section>

<div class="container">
    <!-- Banner Section -->
    <section class="banner">
        <div class="card-block">
            <h1>Support Our Cause</h1>
            <hr>
            <h2>Help our organization by donating today! All donations go directly to making a difference for our cause.</h2>
        </div>
    </section>
	
	<form id="donationForm" action="donationdata.php" method="post">

    <!-- Donation Amount Section -->
	<section class="donation-amount">
		<h2>How much would you like to donate?</h2>
		<hr>
		<p>All donations directly impact our organization and help us further our mission.<p><br>
		<div class="donation-buttons">
			<button type="button">₹100</button>
			<button type="button">₹300</button>
			<button type="button">₹500</button>
			<button type="button">₹1000</button>
			<button type="button">₹2500</button>
			<button type="button">₹5000</button>
			<input type="text" placeholder="Enter Custom Amount"  id="amount" name="amount">
		</div>
	</section>


    <!-- Donor Information Section -->
    <section class="donor-info">
        <h2>Your Information</h2>
        <div class="name-inputs">
            <input type="text" placeholder="First Name" id="first_name" name="first_name">
            <input type="text" placeholder="Last Name" id="last_name" name="last_name">
        </div>
        <input type="email" placeholder="Email" id="email" name="email">
        <input type="tel" placeholder="Phone Number" id="phone" name="phone">
    </section>


    <!-- Terms and Conditions Section -->
    <section class="terms">
        <h2>Terms and Conditions</h2>
        <hr>
        <a href="#" id="toggle-terms">Show Terms</a>

        <div id="terms-content" style="display: none;">        
            AdopTails Welfare Charitable Trust, Pune, operates under a set of principles governing the acceptance of contributions, ensuring alignment with its mission.
            Donations are subject to discretion, with a commitment to preserving the donor's financial security.
            While offering no tax advice, the Trust accepts cash, securities, and in-kind services, scrutinizing certain gifts for transparency and compatibility. 
            Acknowledgments are provided for tax-compliant donations, respecting donor intent and anonymity preferences. 
            The Trust refrains from compensating third parties for directing gifts, maintaining integrity in its fundraising practices.
        </div>
        <label><input type="checkbox" id="termsCheckbox"> I agree to the terms and conditions</label>
    </section>

    <!-- Donation Summary Section -->
    <section class="summary">
        <h2>Donation Summary</h2>
        <hr>
        <p>Payable Amount: ₹<span id="payableAmount">0</span></p>
        <hr>
        <b><p>Total: ₹<span id="totalAmount">0</span></p></b>
    </section>
	
	<section class="extra">
	<h3>Together, we can make a positive impact!</h3>
	<h5>For any Queries , reach out to us at <br>
	<strong>adoptails2024@gmail.com</strong></h5>
	</section>

    <!-- Donate Now Section -->
    <section class="donate-now">
        <button type="submit" id="donateNowButton">Donate Now</button>
        <p>Thank you for your support ❣️</p><br>
	</section>	
	
	<section class="print-donation">
		 <center><button id="printButton" type="button">Print Donation</button></center>
    </section>
</div>

<section class="print-footer">
<?php include 'footer.php'; ?>
</section>

<script>
    //terms and Conditions script
    document.addEventListener("DOMContentLoaded", function() {
        var toggleTerms = document.getElementById("toggle-terms");
        var termsContent = document.getElementById("terms-content");

        toggleTerms.addEventListener("click", function(event) {
            event.preventDefault();
            if (termsContent.style.display === "none") {
                termsContent.style.display = "block";
                toggleTerms.textContent = "Hide Terms";
            } else {
                termsContent.style.display = "none";
                toggleTerms.textContent = "Show Terms";
            }
        });

        //script for donation display in donation-summary
        var donationButtons = document.querySelectorAll(".donation-buttons button");
        var customAmountInput = document.querySelector(".donation-buttons input[type='text']");
        var payableAmount = document.getElementById("payableAmount");
        var totalAmount = document.getElementById("totalAmount");

        // Function to update summary
        function updateSummary(amount) {
            payableAmount.textContent = amount;
            totalAmount.textContent = amount;
        }

        // Event listener for donation buttons
        donationButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                var amount = parseInt(button.textContent.slice(1)); // Remove '₹' symbol and parse to integer
                customAmountInput.value = amount; // Set the custom amount input value
                updateSummary(amount);
            });
        });

        // Event listener for custom amount input
        customAmountInput.addEventListener("input", function() {
            var amount = parseInt(this.value);
            if (!isNaN(amount)) { // Check if the input is a valid number
                updateSummary(amount);
            }
        });

        // Event listener for donate now button
        document.getElementById("donateNowButton").addEventListener("click", function(event) {
            var termsCheckbox = document.getElementById("termsCheckbox");
            if (!termsCheckbox.checked) {
                alert("Please check the terms and conditions !");
                event.preventDefault(); // Prevent form submission
            }
        });
    });

    // Function to handle form submission and display alert
    function submitDonationFormAndDisplayAlert(event) {
        // Prevent default form submission behavior
        event.preventDefault();

        // Submit the form asynchronously
        fetch('donationdata.php', {
            method: 'POST',
            body: new FormData(document.getElementById("donationForm"))
        })
        .then(response => response.text())
        .then(message => {
            // Display the alert message
            alert(message);
            // If successful, print the form
            if (message === "Thank you for your donation!") {
                printDonationForm();
            }
        })
        .catch(error => console.error('Error:', error));
    }

    // Attach the event listener to the form submission
    document.getElementById("donationForm").addEventListener("submit", submitDonationFormAndDisplayAlert);

    // Function to print the donation form
    function printDonationForm() {
        window.print();
    }

    // Attach event listener to the print button
    document.getElementById("printButton").addEventListener("click", printDonationForm);
</script>
</script>



</body>
</html>
