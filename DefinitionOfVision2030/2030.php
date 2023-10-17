<style>
/* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Apply a background color to the top container */
.top-container {
    background-color: #0077b6; /* You can change the color to your preference */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

/* Style for each card */
.card {
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-radius: 5px;
    text-align: center;
    max-width: 300px;
    width: 30%; /* Set the width to 30% of the container width */
    height: 300px; /* Set a fixed height for all cards */
    padding: 10px; /* Add padding to control spacing inside the cards */
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative; /* Relative positioning for the card */
}

/* Style for the card image */
.card img {
    max-width: 100%;
    height: auto;
}

/* Style for the card title */
.card h3 {
    font-size: 18px;
    color: #333;
    position: absolute; /* Absolute positioning for the title */
    bottom: 15px; /* Adjust the position from the bottom as needed */
    left: 50%;
    transform: translateX(-50%); /* Center the title horizontally */
}

/* team cards */
.teams-container {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.teams-card {
    width: 23%;
    margin-bottom: 20px;
    perspective: 1000px;
    cursor: pointer;
}

.teams-card .teams-card-inner {
    width: 100%;
    height: 0;
    transform-style: preserve-3d;
    transition: transform 0.5s;
}

.teams-card:hover .teams-card-inner {
    transform: rotateY(180deg);
}

.teams-card .teams-card-front,
.teams-card .teams-card-back {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden;
}

.teams-card .teams-card-front {
    background-color: #3498db;
    display: flex;
    justify-content: center;
    align-items: center;
}

.teams-card .teams-card-back {
    background-color: #e74c3c;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: rotateY(180deg);
}

.teams-card img {
    max-width: 100%;
    max-height: 100%;
}

.teams-card p {
    color: #fff;
    text-align: center;
}

/* Additional styling for responsiveness */
@media (max-width: 768px) {
    .teams-card {
        width: 48%;
    }
}

@media (max-width: 480px) {
    .teams-card {
        width: 100%;
    }
}



</style>
<!DOCTYPE html>
<html lang="en">
<head>
<meta dir="rtl" lang="ar">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Top Container with Cards</title>
</head>
<body>
    <div class="top-container">
        <div class="card">
            <img src="img/Saudi_Vision_2030_logo 1.svg" alt="Card 1">
            <h3>دعم</h3>
        </div>
        <div class="card">
            <img src="img/IMG_8873 1.svg" alt="Card 2">
            <h3>تفعيل</h3>
        </div>
        <div class="card">
            <img src="img/a.svg" alt="Card 3">
            <h3>تمكين</h3>
        </div>
    </div>

    <!-- team cards-->
    <div class="teams-container">
        <div class="teams-card">
            <div class="teams-card-inner">
                <div class="teams-card-front">
                    <img src="img/a.svg" alt="Image 1">
                </div>
                <div class="teams-card-back">
                    <p>Text for Card 1</p>
                </div>
            </div>
        </div>
        <!-- card 2 -->
        <div class="teams-card">
            <div class="teams-card-inner">
                <div class="teams-card-front">
                    <img src="img/a.svg" alt="Image 1">
                </div>
                <div class="teams-card-back">
                    <p>Text for Card 1</p>
                </div>
            </div>
        </div>

    </div>

    
</body>
</html>
