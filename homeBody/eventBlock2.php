<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Adjust the height of the container */
        .carousel-item {
            height: 300px; /* Decrease the height */
        }

        /* Make the title and button larger and center them */
        .carousel-caption h1 {
            font-size: 2rem; /* Increase the font size */
        }

        .carousel-caption a.btn {
            font-size: 1.5rem; /* Increase the font size */
        }

        /* Make the image expand to the size of the container */
        .carousel-item img {
            object-fit: cover; /* Expand image to cover the container */
            width: 100%;
            height: 100%;
        }

        /* Center the carousel indicators (dots) horizontally */
        .carousel-indicators {
            text-align: center;
        }

        .carousel-indicators li {
            display: inline-block;
            width: 10px; /* Adjust the width of the dots */
            height: 10px; /* Adjust the height of the dots */
            margin: 0 5px; /* Adjust the spacing between dots */
            background-color: #888; /* Color of inactive dots */
            border-radius: 50%; /* Make them circular */
        }

        .carousel-indicators .active {
            background-color: #333; /* Color of the active dot */
        }
    </style>
</head>
<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>

    <!-- Slides -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="uploads/events/ND.png" alt="Image 1">
            <div class="carousel-caption">
                <h1>Slide 1 Title</h1>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="uploads/events/ND.png" alt="Image 2">
            <div class="carousel-caption">
                <h1>Slide 2 Title</h1>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="uploads/events/ND.png" alt="Image 3">
            <div class="carousel-caption">
                <h1>Slide 3 Title</h1>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>

    <!-- Navigation arrows -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Add Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

