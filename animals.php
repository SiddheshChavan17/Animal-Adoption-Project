<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Adoption Form</title>
    <link rel="stylesheet" href="animals.css">
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <div class="filters">
            <h2>Filter Options</h2>
            <label for="species">Species:</label>
            <select id="species">
                <option value="all">All</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="rabbit">Rabbit</option>
            </select>
            <label for="breed">Breed:</label>
            <select id="breed">
                <option value="all">All</option>
                <!-- Breed options will be dynamically populated -->
            </select>
            <label for="age">Age:</label>
            <select id="age">
                <option value="all">All</option>
                <option value="0-1">Less than 1 year</option>
                <option value="1-2">1-2 years</option>
                <option value="2-3">2-3 years</option>
                <option value="3-4">3-4 years</option>
                <option value="4-5">4-5 years</option>
                <option value="5+">5+ years</option>
            </select>
            <label for="gender">Gender:</label>
            <select id="gender">
                <option value="all">All</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label for="color">Color:</label>
            <select id="color">
                <option value="all">All</option>
                <option value="black">Black</option>
                <option value="white">White</option>
                <option value="brown">Brown</option>
                <option value="golden">Golden</option>
                <option value="multi">Multi</option>
            </select>
            <button onclick="applyFilters()">Apply Filters</button>
			<button onclick="clearFilters()">Clear Filters</button>
        </div>
        <div class="animals">
            <!-- Display animals dynamically using JavaScript -->
        </div>
    </div>
	
	 <!-- Individual animal card popup -->
    <div class="overlay" id="overlay" onclick="closeAnimalPopup()"></div>
    <div class="animal-popup" id="animal-popup">
        <img src="" alt="Animal Image" id="popup-image">
        <h2 id="popup-name"></h2>
        <p id="popup-breed"></p>
        <p id="popup-age"></p>
		<br><hr>
		<div class="desc">
        <p id="popup-description"></p>
		</div>
		<hr><br>	
		<div class="end-card-container">
        <label for="commitment-checkbox">
            <input type="checkbox" id="commitment-checkbox">
            I am willing to commit to caring for the pet's entire life span.
        </label><br>
        <button onclick="takeHome()">Adopt Me 💖</button>
		</div>
	</div>


    <script>
const animals = [
    { name: 'Max',species: 'dog', breed: 'Labrador', age: 2, gender: 'male', color: 'black', image: 'a6.jpg', description: "Meet Max, a loyal and affectionate Labrador with a sleek black coat that glistens in the sun. At 2 years old, Max is bursting with energy and loves nothing more than long walks in the park and playing fetch. With his gentle eyes and wagging tail, Max is sure to bring joy and love to any family." },
    { name: 'Thumper',species: 'rabbit', breed: 'Polish', age: 1, gender: 'male', color: 'brown', image: 'a11.jpg', description: "Thumper is an adorable Polish rabbit known for his curious nature and fluffy brown fur. At just 1 year old, Thumper is full of energy, hopping around and exploring his surroundings with boundless enthusiasm. With his twitchy nose and perky ears, Thumper is sure to capture the hearts of all who meet him." },
    { name: 'Simba' ,species: 'cat', breed: 'Persian', age: 1, gender: 'male', color: 'white', image: 'a8.jpg', description: "Simba is a majestic Persian cat with a stunning white coat and piercing blue eyes. At 1 year old, Simba exudes grace and elegance, moving with a regal air that commands attention. Despite his dignified appearance, Simba is a playful and affectionate companion who loves nothing more than curling up in a sunny spot for a catnap." },
	{ name: 'Bella',species: 'dog', breed: 'Golden Retriever', age: 6, gender: 'female', color: 'golden', image: 'a7.jpg', description: "Bella is a golden-hearted Golden Retriever with a radiant smile and a heart of gold. At 6 years old, Bella is a seasoned companion who knows the true meaning of loyalty and love. Whether she's fetching a ball or cuddling up on the couch, Bella's gentle nature and unwavering devotion make her the perfect family pet."  },
	{ name: 'Whiskers' ,species: 'cat', breed: 'Bengal', age: 0.3, gender: 'female', color: 'black', image: 'a14.jpg', description: "Whiskers is a playful Bengal kitten with sleek black fur and bright green eyes. At just 3 months old, Whiskers is full of curiosity and mischief, always getting into playful antics and exploring every nook and cranny of his environment. With his playful spirit and adorable antics, Whiskers is sure to keep his new family entertained for hours on end."  },
	{ name: 'Charlie',species: 'dog', breed: 'Indie', age: 0.2, gender: 'male', color: 'multi', image: 'a18.jpg', description: "Meet Charlie, an adventurous Indie puppy with a colorful coat and a boundless zest for life. At 2 months old, Charlie is a bundle of energy, always on the lookout for his next big adventure. Whether he's chasing butterflies in the garden or snuggling up for a nap, Charlie's playful personality and infectious enthusiasm are sure to brighten any day."  },
	{ name: 'Luna',species: 'dog', breed: 'German-Shephard', age: 4, gender: 'female', color: 'brown', image: 'a19.jpg', description: " Luna is a graceful German-Shephard with striking brown fur and soulful eyes that seem to hold a world of wisdom. At 4 years old, Luna is a loyal and devoted companion who takes her role as protector of the pack very seriously. Whether she's going for a run or lounging by the fireplace, Luna's calm demeanor and gentle nature make her the perfect addition to any family."  },
	{ name: 'Clover',species: 'rabbit', breed: 'Polish', age: 0.4, gender: 'male', color: 'white', image: 'a12.jpg', description: "Clover is a fluffy Polish bunny with a snow-white coat and adorable floppy ears. At 4 months old, Clover is full of energy and curiosity, always hopping around and exploring his surroundings with enthusiasm. With her gentle nature and affectionate personality, Clover is sure to bring joy and happiness to her new family."  },
	{ name: 'Cooper',species: 'dog', breed: 'Golden Retriever', age: 3, gender: 'male', color: 'white', image: 'a20.jpg', description: "Cooper is a friendly Golden Retriever with a soft white fur coat and a wagging tail that never stops. At 3 years old, Cooper is a social butterfly who loves nothing more than making new friends and spreading happiness wherever he goes. Whether he's playing fetch in the backyard or going for a swim in the lake, Cooper's playful spirit and boundless enthusiasm are sure to brighten any day."  },
	{ name: 'Mittens' ,species: 'cat', breed: 'Ragdoll', age: 0.8, gender: 'female', color: 'golden', image: 'a15.jpg', description: "Mittens is a cuddly Ragdoll kitten with soft golden fur and big blue eyes that sparkle with mischief. At 8 months old, Mittens is full of personality, always ready to pounce on a toy or curl up in a cozy spot for a catnap. With her gentle nature and affectionate demeanor, Mittens is sure to steal the hearts of all who meet her."  },
	{ name: 'Daisy',species: 'dog', breed: 'Indie', age: 0.5, gender: 'female', color: 'black', image: 'a21.jpg', description: "Daisy is a playful Indie pup with shiny black fur and a wagging tail that never stops. At 6 months old, Daisy is full of energy and enthusiasm, always ready for an adventure or a game of fetch in the park. Whether she's chasing butterflies in the garden or cuddling up on the couch, Daisy's playful personality and sweet nature make her the perfect companion for any family."  },
	{ name: 'Shadow' ,species: 'cat', breed: 'Sphynx', age: 3, gender: 'male', color: 'black', image: 'a16.jpg', description: "Shadow is a mysterious Sphynx cat with sleek black fur and piercing green eyes that seem to see straight into your soul. At 3 years old, Shadow is a quiet and observant companion who enjoys lounging in the sun and watching the world go by. With his calm demeanor and quiet grace, Shadow is sure to bring a sense of peace and tranquility to his new home."  },
	{ name: 'Bun-Bun',species: 'rabbit', breed: 'Polish', age: 3, gender: 'female', color: 'multi', image: 'a13.jpg', description: "Bun-Bun is a lively Polish rabbit with a multi-colored coat and a playful personality to match. At 3 years old, Bun-Bun is always on the go, hopping around and exploring her surroundings with endless curiosity. Whether she's munching on carrots or burrowing in her favorite blanket, Bun-Bun's playful antics and sweet nature are sure to bring joy to her new family."  },
	{ name: 'Rocky',species: 'dog', breed: 'Pug', age: 7, gender: 'male', color: 'White', image: 'a22.jpg', description: "Rocky is a charming Pug with a heart of gold. Despite his small size, he's full of personality and loves to be the center of attention. With his affectionate nature and adorable wrinkled face, Rocky is sure to steal your heart. He enjoys leisurely walks in the park and cuddling up on the couch with his favorite humans."  },
	{ name: 'Tigeress' ,species: 'cat', breed: 'Ragdoll', age: 2, gender: 'female', color: 'multi', image: 'a17.jpg', description: "Tigeress is a charming Ragdoll cat with striking green eyes and a plush coat. Known for her gentle nature, she enjoys lounging in sunny spots and playful pursuits like chasing toys. Tigeress brings warmth and joy to her family's home with her affectionate demeanor and graceful presence."  },
	{ name: 'Bailey',species: 'dog', breed: 'Labrador', age: 2, gender: 'female', color: 'Brown', image: 'a23.jpg', description: "Meet Bailey, the loyal Labrador with boundless energy and a heartwarming smile. This gentle giant is known for his friendly demeanor and unwavering loyalty. Whether it's playing fetch in the backyard or going for a swim in the lake, Bailey is always up for an adventure. She thrives on love and attention, making her the perfect companion for an active family."  },
    // Include more sample data as needed
];

function initializePage() {
            populateBreeds();
            displayAnimals(animals); // Display all animals initially
        }

        // Function to populate breed options
function populateBreeds() {
    const breedSelect = document.getElementById('breed');
    breedSelect.innerHTML = '<option value="all">All</option>'; // Reset breed options

    const breeds = ['Labrador', 'Polish', 'Persian', 'Golden Retriever', 'Bengal', 'Indie', 'German-Shephard', 'Ragdoll', 'Sphynx', 'Pug'];

    breeds.forEach(breed => {
        const option = document.createElement('option');
        option.value = breed;
        option.textContent = breed;
        breedSelect.appendChild(option);
    });
}

        // Function to apply filters
        function applyFilters() {
            const speciesFilter = document.getElementById('species').value;
            const breedFilter = document.getElementById('breed').value;
            const ageFilter = document.getElementById('age').value;
            const genderFilter = document.getElementById('gender').value;
            const colorFilter = document.getElementById('color').value;

            // Filter animals based on selected filters
            let filteredAnimals = animals.filter(animal => {
                if (speciesFilter !== 'all' && animal.species !== speciesFilter) return false;
                if (breedFilter !== 'all' && animal.breed !== breedFilter) return false;
                if (ageFilter !== 'all') {
                    const [minAge, maxAge] = ageFilter.split('-').map(val => parseInt(val));
                    if (minAge === 5) {
                        if (animal.age < minAge) return false;
                    } else {
                        if (!(animal.age >= minAge && animal.age < maxAge)) return false;
                    }
                }
                if (genderFilter !== 'all' && animal.gender !== genderFilter) return false;
                if (colorFilter !== 'all' && animal.color !== colorFilter) return false;
                return true;
            });

            displayAnimals(filteredAnimals); // Display filtered animals
        }
		
		// Function to clear filters
		function clearFilters() {
			document.getElementById('species').value = 'all';
			document.getElementById('breed').value = 'all';
			document.getElementById('age').value = 'all';
			document.getElementById('gender').value = 'all';
			document.getElementById('color').value = 'all';

			applyFilters(); // Reapply filters to display all animals
			
		}

        // Function to display animals
        function displayAnimals(animals) {
            const animalsContainer = document.querySelector('.animals');
            animalsContainer.innerHTML = ''; // Clear previous content

            animals.forEach(animal => {
                const animalElement = document.createElement('div');
                animalElement.classList.add('animal');

                const imageElement = document.createElement('img');
                imageElement.src = animal.image;
                imageElement.alt = animal.species;

                const nameElement = document.createElement('h2');
                nameElement.textContent = animal.name; // Display the name of the animal

                const breedElement = document.createElement('i');
                breedElement.textContent = animal.breed; // Display the breed of the animal

                const ageElement = document.createElement('p');
                ageElement.textContent = `Age: ${animal.age} year(s)`;

                const adoptButton = document.createElement('button');
                adoptButton.textContent = 'View Details';
                adoptButton.addEventListener('click', () => adoptAnimal(animal));

                animalElement.appendChild(imageElement);
                animalElement.appendChild(nameElement);
                animalElement.appendChild(breedElement);
                animalElement.appendChild(ageElement);
                animalElement.appendChild(adoptButton);

                animalsContainer.appendChild(animalElement);
            });
        }

        // Function to handle adoption of an animal
        function adoptAnimal(animal) {
             showAnimalPopup(animal);
		}
		
		// Function to display the individual animal card popup
function showAnimalPopup(animal) {
    const overlay = document.getElementById('overlay');
    const animalPopup = document.getElementById('animal-popup');
    const popupImage = document.getElementById('popup-image');
    const popupName = document.getElementById('popup-name');
    const popupBreed = document.getElementById('popup-breed');
    const popupAge = document.getElementById('popup-age');
	const popupDescription = document.getElementById('popup-description');

    popupImage.src = animal.image;
    popupImage.alt = animal.species;
    popupName.textContent = animal.name;
    popupBreed.textContent = `Breed: ${animal.breed}`;
    popupAge.textContent = `Age: ${animal.age} year(s)`;
	popupDescription.textContent = animal.description;

    overlay.style.display = 'block';
    animalPopup.style.display = 'block';
}

 function closeAnimalPopup() {
        const overlay = document.getElementById('overlay');
        const animalPopup = document.getElementById('animal-popup');

        overlay.style.display = 'none';
        animalPopup.style.display = 'none';
    }
		
		// Function to handle taking the animal home
    function takeHome() {
        // Check if the commitment checkbox is checked
        if (document.getElementById('commitment-checkbox').checked) {
             // Redirect the user to printpreview.php
        window.location.href = 'printpreview.php';
        } else {
            alert('Please agree to the commitment.');
        }
    }

        // Populate breed options when species is changed
        document.getElementById('species').addEventListener('change', populateBreeds);

        // Initialize the page
        initializePage();
		
		
    </script>
    <?php include 'footer.php'; ?>
</body>
</html>