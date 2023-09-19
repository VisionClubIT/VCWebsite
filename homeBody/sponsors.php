<style>
body {
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.logo-slider {
    overflow: hidden;
    width: 100%;
    position: relative;
    box-shadow: 0px 0px 10px rgba(0.3, 0, 0.3, 0.3); /* Box shadow for the container */
    height: 80px;
}

.logo-container {
    white-space: nowrap;
    animation: infiniteMove 30s linear infinite; /* Adjust animation duration as needed */
    height: 80px;
   
   

}

.logo {
    margin-top: 10px;
    display: inline-block;
    margin-right: 0px; /* Adjust spacing between logos */
}

.logo img {
    max-width: 100%;
    height: 60px;
}

    /* Create a new animation for infinite looping */
    @keyframes infiniteMove {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }



</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seamless Logo Slider</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<a href="Aboutus.php">
    <div class="logo-slider">
        <div class="logo-container" id="logoContainer" ></div>
    </div>
</a>
    <script src="script.js"></script>
</body>
</html>





<script>
    // 'Sponsors/Al-Tamimi.png',
    // 'Sponsors/educationMinistry.png',
    // 'Sponsors/elm.png',
    // 'Sponsors/pwc.png',
    // 'Sponsors/Stc-logo.png',
    const logoContainer = document.getElementById('logoContainer');

// Array of logo URLs
const logoUrls = [
    'Sponsors/Al-Tamimi.png',
    'Sponsors/educationMinistry.png',
    'Sponsors/elm.png',
    'Sponsors/pwc.png',
    'Sponsors/Stc-logo.png',
    // Add more logo URLs here
];

// Function to populate the logo container
function populateLogoContainer() {
    // Duplicate the logo URLs to create a seamless loop
    const doubledLogos = [...logoUrls, ...logoUrls, ...logoUrls, ...logoUrls, ...logoUrls, ...logoUrls];

    // Create logo elements and add them to the container
    doubledLogos.forEach((url) => {
        const logo = document.createElement('div');
        logo.classList.add('logo');
        const img = document.createElement('img');
        img.src = url;
        logo.appendChild(img);
        logoContainer.appendChild(logo);
    });
}

// Call the function to populate the logo container
populateLogoContainer();





</script>