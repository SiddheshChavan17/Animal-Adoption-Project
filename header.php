<!-- header.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptails header</title>
    <style>
        body {
            font-family: Trebuchet MS, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            font-size: 24px;
            background-color: #fdf5e6;
        }
        
        .logo img {
            max-width: 100px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #644117;
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <a href="homepage.php"><img src="adoptailslogo.png" alt="Adoptails Logo"></a>
    </div>
    <nav>
        <ul>
            <li><a id="homeLink" href="homepage.php">Home 🏠</a></li>
            <li> | </li>
            <li><a a id="adminLink" href="admin_login_form.php">Admin Login 🛠️</a></li>
            <li> | </li>
			<li><a a id="adopLink" href="adoptions.php">Adoptions 💡</a></li>
            <li> | </li>
            <li><a id="lostLink" href="lostandfound.php">Lost and Found 📃</a></li>
            <li> | </li>
            <li><a id="#SterilizationLink" href="sterlization.php">Sterilization 💉</a></li>
            <li> | </li>
            <li><a id="aboutLink" href="aboutus.php">About 🐾</a></li>
            <li> | </li>
			<li><a id="donateLink" href="donations.php">Donate ❣️</a></li>
            <li> | </li>
            <li><a id="#contactLink" href="contactus.php">Contact ☎️</a></li>
        </ul>
    </nav>
</header>

</body>
</html>

