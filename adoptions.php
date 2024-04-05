<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .banner {
            position: relative;
            background-color: #f2f2f2;
        }

        .banner-content {
            position: absolute;
            top: 20%;
            left: 5%;
            text-align: center;
            color: #fff;
			
        }

        .banner-content h1 {
			padding:10px;
			font-size:42px;
			margin-bottom:10px;
			margin-top: -5px;
		}
        .banner-content p {
            padding:10px;
			margin-bottom:20px;
			font-size:22px;
        }

        .card-block {
            max-width: 20%;
            background-color: rgba(169, 154, 134, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: left;
        }

        .banner-image {
            width: 100%;
        }

        .banner-image img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
		
        .why-adopt {
            background-color: #fff;
            padding: 80px 0;
        }

        .why-adopt h2 {
            font-size: 40px;
            margin-bottom: 60px;
        }
		.why-adopt-content strong{
			font-size:30px;
			margin-bottom:20px;
		}
		.why-adopt-content p{
			font-size:20px;
			margin-bottom:40px;
		}

        .comparison {
    background-color: #f9f9f9;
    padding: 80px 0;
}

.comparison h2 {
    font-size: 40px;
    margin-bottom: 60px;
}

.comparison-content {
    display: flex;
    justify-content: space-between;
}

.comparison-left,
.comparison-right {
    flex: 1;
    padding: 0 20px;
}

.comparison-left h3,
.comparison-right h3 {
    font-size: 30px;
    margin-bottom: 20px;
}

.comparison-left ul,
.comparison-right ul {
    list-style-type: none;
    padding: 0;
}

.comparison-left ul li,
.comparison-right ul li {
    margin-bottom: 30px;
	font-size:22px;
}

.comparison-left ul li::before,
.comparison-right ul li::before {
    content: '\2022'; /* Bullet point */
    color: #007bff; /* Bullet point color */
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
}


        .adopted-animals {
            background-color: #fff;
            padding: 80px 0;
        }

        .adopted-animals h2 {
            font-size: 40px;
            margin-bottom: 30px;
        }

        .animal-images {
            display: flex;
			flex-wrap:wrap;
        }

        .animal-images img {
            width: 30%;
            margin-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Include header section -->
    <?php include 'header.php'; ?>

    <!-- Banner Section -->
    <section class="banner">
        <div class="banner-content">
            <div class="card-block">
                <h1>Why Adopt?</h1>
                <p>Choosing to adopt a pet is not just about bringing home a furry friend. It's about saving a life, offering a second chance, and making a lifelong commitment to a loyal companion. When you adopt, you're not just gaining a pet; you're becoming a hero to an animal in need. Join us in our mission to provide loving homes to those who need it most.</p>
            </div>
        </div>
        <div class="banner-image">
            <img src="b7.jpg" alt="Banner Image">
        </div>
    </section>

    <!-- Why Adopt Section -->
    <section class="why-adopt">
    <div class="container">
        <h2>Why Adopt Instead of Buying?</h2>
        <div class="why-adopt-content">
            
            <strong>1. Save a Life</strong><br>
            <p>Adopting a pet from a shelter or rescue organization can save a life. Many animals in shelters are in need of loving homes and may face euthanasia if not adopted. By choosing adoption, you're giving a deserving animal a second chance at life.</p>
            
            <strong>2. Reduce Overpopulation</strong><br>
            <p>Choosing to adopt helps reduce pet overpopulation. Every year, millions of animals end up in shelters, and not all of them find homes. By adopting, you're helping to alleviate the strain on shelters and reduce the number of animals in need of care.</p>
			
            <strong>3. Healthier Pets</strong><br>
            <p>Many shelter animals receive thorough medical evaluations and necessary treatments before adoption. By adopting, you're likely to bring home a pet that's already spayed or neutered, vaccinated, and microchipped. This can save you time and money on veterinary expenses.</p>
            
            <strong>4. Support Ethical Practices</strong><br>
            <p>Adopting a pet promotes ethical treatment of animals. Shelters and rescue organizations prioritize the welfare of animals and strive to find them suitable homes. By adopting, you're supporting organizations that advocate for animal rights and welfare.</p>
            
            <strong>5. Find Your Perfect Match</strong><br>
            <p>Shelters and rescue organizations have a diverse selection of animals, ranging in age, size, breed, and temperament. Whether you're looking for a playful puppy, a laid-back senior pet, or a specific breed, you're likely to find your perfect match through adoption.</p><br><br>
            
            <strong>Thus ,</strong><br>
            <p>Choosing to adopt a pet is a compassionate and responsible decision. Not only are you enriching your life by adding a furry companion, but you're also making a positive impact on the lives of animals in need. Consider adoption and make a difference today!</p>
        </div>
    </div>
</section>


    <!-- Comparison Section -->
    <section class="comparison">
    <div class="container">
        <h2>Comparison: Adopted Pets vs. Bought Pets</h2>
        <div class="comparison-content">
            <div class="comparison-left">
                <h3>Adopted Pets</h3>
                <ul>
                    <li>Are often already spayed or neutered, vaccinated, and microchipped.</li>
                    <li>Have been evaluated for temperament and behavior.</li>
                    <li>Are typically less expensive to adopt compared to buying from a breeder or pet store.</li>
                    <li>Have the satisfaction of knowing you're giving a deserving animal a second chance.</li>
                </ul>
            </div>
            <div class="comparison-right">
                <h3>Bought Pets</h3>
                <ul>
                    <li>May come from commercial breeding facilities (puppy mills) with poor living conditions.</li>
                    <li>May have unknown health or behavioral issues.</li>
                    <li>Can be expensive to purchase, with additional costs for vaccinations, spaying/neutering, etc.</li>
                    <li>Supports the demand for breeding and contributes to pet overpopulation.</li>
                </ul>
            </div>
        </div>
    </div>
</section>


    <!-- Adopted Animals Section -->
    <section class="adopted-animals">
        <div class="container">
            <h2>Adopted Animals Gallery 🐾</h2>
            <div class="animal-images">
                <!-- Include images of adopted animals here -->
                <img src="ad1.jpg" alt="Adopted Animal 1">
                <img src="ad2.jpg" alt="Adopted Animal 2">
                <img src="ad4.jpg" alt="Adopted Animal 4">
				<img src="ad3.jpg" alt="Adopted Animal 3">
				<img src="ad5.jpg" alt="Adopted Animal 5">
				<img src="ad6.jpg" alt="Adopted Animal 6">
                <!-- Add more images as needed -->
            </div>
        </div>
    </section>

<!-- Include footer section -->
    <?php include 'footer.php'; ?>
</body>
</html>
