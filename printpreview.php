<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Preview</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.5);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
        }
        .headers h1, h3, h4 {
            text-align: center;
        }
		.headers h1{
			font-size:50px;
			margin-top:-20px;
		}
		.headers h3{
			font-size:25px;
			margin-top:70px;
			color:grey;
			text-align:left;
		}
		.form-group p{
			font-size:15px;
			margin-top:30px;
			font-style:italic;
		}
		.headers h4{
			margin-bottom:60px;
			color:grey;
			text-align:left;
		}
		h2{
			font-size:20px;
			margin-top:100px;
		}
        form {
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
		.form-group h2{
			font-size:27px;
			margin-bottom:30px;
			margin-top:30px;
		}
		hr{
			border:2px solid grey;
			margin-top:50px;
			max-width:100%
		}
		select{
			font-size:18px;
			font-weight: bold;
            margin-bottom: 5px;
			max-width:100%;
			padding: 10px;
		}
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"] {
            width: 98%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            display: block;
            width: 30%;
            padding: 20px;
			font-size:22px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .footerinfo {
            text-align: center;
            font-style: italic;
            color: #555;
        }
		.extra h5{
			text-align: center;
			font-size:22px;
			margin-top:60px;
			display:none;
		}
		.extra h2{
			display:none;
		}
		
		/* Print-specific styles */
        @media print {
            body * {
                visibility: hidden;
            }
            .container, .container * {
                visibility: visible;
            }
            .container {
                position: absolute;
                left: 0;
                top: 0;
            }
            button {
                display: none;
            }
			h3{
				display: none;
			}
			
			.extra h2{
				display:block;
			}
			
			.extra h5{
				display:block;
			}
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="homepage.php"><img src="l1.png" alt="Adoptails Logo"></a>
        </div>
		<div class="headers">
        <h1>Thank you for Adopting from Adoptails !</h1>
        <h3>Before you go, please provide the following details for our records :</h3>
        <h4><i>We'll also be reaching out to provide you with periodic updates about your newly adopted pet!</i></h4>
        </headers>
		
        <form id="myForm" action="finaladoptionsdata.php" method="post">
			<div class="extra">
                <center><h2>Summary </h2></center>
            </div>
			
            <div class="form-group" id="adopter-info">
				<h2>Adopter info ❣️</h2>
                <label for="name">Name :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact :</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <hr>
			
            <div class="form-group" id="pet-info">
			<h2>Pet info 🐾</h2>
			<label for="pettype">Pet Type :</label>
				<select id="pettype" name="pettype" required>
					<option value="Dog">Dog</option>
					<option value="Cat">Cat</option>
					<option value="Rabbit">Rabbit</option>
				</select>
			</div> 
			
			<div class="form-group">
                <label for="petname">Pet Name :</label>
                <input type="text" id="petname" name="petname" required>
            </div>
			
			<div class="form-group">
                <label for="breed">Breed :</label>
                <input type="text" id="breed" name="breed">
            </div>
            
            <div class="footerinfo">
                <h2>Once again, thank you for adopting! Your support means a lot to us.</h2>
            </div>
			
            <center>
				<button onclick="submitFormAndPrint()">Print Details</button>
			</center>
			
			<div class="extra">
                <h5>For any Queries , reach out to us at <br>
				<strong>adoptails2024@gmail.com</strong></h5>
            </div>
        </form>
    </div>
	
	<script>
        // Function to handle form submission and print
        function submitFormAndPrint() {
            // Prevent default form submission behavior
            event.preventDefault();

            // Submit the form asynchronously
            fetch('finaladoptionsdata.php', {
                method: 'POST',
                body: new FormData(document.getElementById("myForm"))
            })
            .then(response => response.text())
            .then(message => {
                alert(message);
                // Print the page after displaying the alert
                window.print();
            })
            .catch(error => console.error('Error:', error));
        }
    </script>


</body>
</html>
