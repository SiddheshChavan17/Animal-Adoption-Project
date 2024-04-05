<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptails</title>
    <link rel="stylesheet" href="homepage_style.css">
</head>
<body>
<?php include 'header.php'; ?>

    <!-- Banner Section -->
    <section class="banner">
        <div class="banner-content">
            <h1>Welcome to AdopTails</h1>
            <p>Find your perfect furry companion today!</p>
            <a href="register_adopter.php" class="btn">Adopt a Pet</a>
        </div>
    </section>
    
    <!-- Image and Description Section -->
    <section class="image-description">
        <div class="container">
            <div class="content">
                <div class="image">
                    <img src="adop1.jpg" alt="Image">
                </div>
                <!-- Description Section -->
                <section class="description">
                    <div class="acontainer">
                        <h1>Your Pet Adoption Journey With AdopTails 🐾</h1>
                        <div class="description-item">
                            <div class="content">
                                <img src="searchlogo.png" alt="Search Pet Logo">
                                <div class="text">
                                    <h3>Search Pet</h3>
                                    <p>Adopt a dog or cat who's right for you. Simply browse through the list or filter accordingly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="description-item">
                            <div class="content">
                                <img src="call.png" alt="Connect Logo">
                                <div class="text">
                                    <h3>Contact Shelter</h3>
                                    <p>Once you find a pet, contact the respective shelter and learn more about how to meet and adopt the pet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="description-item">
                            <div class="content">
                                <img src="shelterlogo.png" alt="Free Vet Consultation Logo">
                                <div class="text">
                                    <h3>Visit Shelter</h3>
                                    <p>After contacting the shelter, you can then visit your selected pet during provided timeslots and learn more about your companion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="description-item">
                            <div class="content">
                                <img src="adoptlove.png" alt="AdoptLove Logo">
                                <div class="text">
                                    <h3>AdoptLove</h3>
                                    <p>The shelter volunteers will then walk you through their adoption process. Prepare your home for the arrival of your fur baby to help them adjust to their new family.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    
    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container">
            <h1 class="section-heading">How It Works</h1>
            <div class="step">
                <img src="search.png" alt="Step 1">
                <p>Search</p>
            </div>
            <div class="step">
                <img src="meet.png" alt="Step 2">
                <p>Meet</p>
            </div>
            <div class="step">
                <img src="adopt.png" alt="Step 3">
                <p>Adopt</p>
            </div>
        </div>
    </section>
	
	<!-- About Us Section -->
    <section class="about-us-section">
        <div class="container">
            <div class="image-container">
                <img src="aboutus2.jpg" alt="About Us Image">
            </div>
            <div class="card-block">
                <h2>Sunidhi Sharma</h2>
                <p>I am very happy to adopt Suzy. I was fortunate enough to find her on AdopTails.<br><br><br>
                <b>We’re The Pet People.</b> <i><a href="aboutus.php">Learn more</a></i></p>
                <span>Pune, India</span>
            </div>
        </div>
    </section>
    
	<!-- Adopt Section -->
    <section class="adopt-section">
        <!-- Container for content -->
        <div class="container">
            <!-- Left side: Image -->
            <div class="image-container">
                <img src="adoptlogo.png" alt="Image">
            </div>
            
            <!-- Right side: Heading and Description -->
            <div class="content">
                <h1>#AdoptLove</h1>
                <p>Approximately 1478 dogs & cats die every day on the road in India. AdopTails is on a mission to provide every dog and cat a home before 2035. It’s just one of the many ways AdopTails! gives back and helps you become a part of something larger. Join the AdopTails Community and help set up Pet houses in your surrounding for strays.</p>
                <!-- Button for Adopt a Pet -->
                <script>
                    function scrollToTop() {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth' // Smooth scrolling animation
                        });
                    }
                </script>
                <button onclick="scrollToTop()">Adopt a Pet</button>
            </div>
        </div>
    </section>
	
	
	<!-- Awareness Section -->
	<section class="adoptions-section">
		<div class="adoptions-content">
        <h2 class="adoptions-heading">Adoptions</h2>
        <p class="adoptions-info">Pet adoption is the process of taking responsibility for a pet that a previous owner has abandoned or released to a shelter or rescue organization. Common sources for adoptable pets are animal shelters and rescue groups.</p>
        <a href="adoptions.php" class="read-more-btn">Read More</a>
		</div>
		<div class="image-container">
            <img src="straycat.jpg" alt="Adoptions Image">
        </div>
    </section>
	
	
	<!-- Donation Section -->
	<section class="donation-section">
    <div class="banner-image">
        <div class="container">
            <div class="donation-content">
                <h2>Support Our Cause</h2>
                <p>Your donations help us provide care, shelter, and food to animals in need. Every contribution makes a difference.</p>
                <a href="donations.php"><button class="donate-btn">Donate Us</button></a>
            </div>
        </div>
    </div>
</section>


    <section class="accordion">
        <div class="container">
            <div class="accordion-item">
                <button class="accordion-button">How can I adopt a pet?<span class="accordion-toggle">+</span></button>
                <div class="accordion-content">
                    <p>You can adopt a pet by filling out our adoption form and visiting our adoption center.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button">What is the adoption process like?<span class="accordion-toggle">+</span></button>
                <div class="accordion-content">
                    <p>The adoption process involves filling out an application, meeting the pet, and completing an adoption contract.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button">Are the pets on your website vaccinated and spayed/neutered?<span class="accordion-toggle">+</span></button>
                <div class="accordion-content">
                    <p>Yes, all pets available for adoption are vaccinated and spayed/neutered.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button">Can I meet the pet before finalizing the adoption?<span class="accordion-toggle">+</span></button>
                <div class="accordion-content">
                    <p>Yes, you can schedule a meeting with the pet before finalizing the adoption.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button">What should I do if I encounter any issues after adopting a pet?<span class="accordion-toggle">+</span></button>
                <div class="accordion-content">
                    <p>If you encounter any issues after adopting a pet, please contact us for assistance.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button">Can I return the pet if it doesn't work out?<span class="accordion-toggle">+</span></button>
                <div class="accordion-content">
                    <p>We understand it can be hard to get an adjusted pet in the new home and vice versa, as long as your reason for returning is reasonable, you'll be welcome to put it up for adoption again.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Get all accordion items
        const accordionItems = document.querySelectorAll('.accordion-item');

        // Add event listener to each accordion item
        accordionItems.forEach(item => {
            item.addEventListener('click', () => {
                // Toggle active class on clicked accordion item
                item.classList.toggle('active');

                // Toggle "+" and "-" symbols
                const toggle = item.querySelector('.accordion-toggle');
                toggle.textContent = toggle.textContent === '+' ? '-' : '+';
            });
        });
		
		// Get the home link element
        const homeLink = document.getElementById('homeLink');

        // Get all links in the navigation menu
        const links = document.querySelectorAll('nav a');

        // Add click event listeners to each link
        links.forEach(link => {
            link.addEventListener('click', () => {
                // Remove the "active" class from all links
                links.forEach(link => {
                    link.classList.remove('active');
                });

                // Add the "active" class to the clicked link
                link.classList.add('active');
            });
        });
    </script>
<?php include 'footer.php'; ?>

</body>
</html>
