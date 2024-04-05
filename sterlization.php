<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sterlization</title>
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
			font-size:44px;
			margin-bottom:10px;
			margin-top: -5px;
		}
        .banner-content p {
            padding:10px;
			margin-bottom:20px;
			font-size:26px;
        }

        .card-block {
            max-width: 30%;
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
		
		.section {
    background-color: #f9f9f9;
    padding: 80px 0;
}

.whycontainer {
    max-width: 2000px;
    margin: 0 auto;
	background-color: #f9f9f9;
}

.whencontainer {
    max-width: 2000px;
    margin: 0 auto;
	background-color: #f9f9f9;
}

.whencontainer .section-content{
	flex-direction: row-reverse;

}

.section-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.image {
    flex: 1;
    margin-right: 0px;
	padding: 40px;
}

.image img {
    max-width: 100%;
    height: auto;
}

.content {
    flex: 1;
}

.content h2 {
    font-size: 52px;
    margin-bottom: 20px;
}

.content p {
    font-size: 26px;
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
                <h1>What is Sterlization?</h1>
                <p>“Spaying” is the surgical removal of the reproductive organs of female animals. “Neutering” is the surgical removal of male animal’s testicles. Both surgeries occur while the animals are under anesthesia. The veterinarian may keep your pet under observation for a couple hours to several days, depending on the animal’s age, size, health, and reaction to the anesthesia.</p>
            </div>
        </div>
        <div class="banner-image">
            <img src="st1.jpg" alt="Banner Image">
        </div>
    </section>
	
	<section class="section">
    <div class="whycontainer">
        <div class="section-content">
            <div class="image">
                <img src="st2.jpg" alt="Image 1">
            </div>
            <div class="content">
                <h2>Why Sterilization?</h2>
					<p><strong>1. Population Control:</strong> <br>Prevents unplanned litters, reducing the number of stray animals and overcrowding in shelters.</p>

					<p><strong>2. Health Benefits:</strong><br> Reduces the risk of reproductive-related health issues such as cancer and infections.</p>

					<p><strong>3. Behavioral Improvement:</strong><br> Leads to calmer behavior and reduces undesirable mating-related behaviors.</p>

					<p><strong>4. Promotes Responsible Ownership:</strong><br> Encourages planning and consideration for the long-term welfare of pets, emphasizing responsible pet ownership.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="whencontainer">
        <div class="section-content">
            <div class="image">
                <img src="st4.jpg" alt="Image 2">
            </div>
            <div class="content">
                <h2>When Should you Spay/Neuter Pets?</h2>
					<p><strong>	For dogs:</strong> Typically, owners sterilize their pups between six to nine months. However, puppies as young as eight weeks old can be neutered as long as they are healthy. Dogs can be sterilized as adults as well, although there may be more risk for postoperative complications in older dogs.</p>

					<p><strong>	For cats:</strong> It is considered safe for kittens as young as eight weeks old to be spayed or neutered.</p>

					<p>	Consult with the vet about the best time to spay or neuter. Each animal is different and will require a specific treatment plan.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>

