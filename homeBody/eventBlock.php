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
            height: 600px; /* Decrease the height */
            position: relative;
            
        }
          /* Make the title and button larger and center them */
          .carousel-caption {
           
            flex-direction: column;
           
        }
        

        /* Make the title and button larger and center them */
        .carousel-caption h1 {
            font-family: "Open-Sans, sans serif";
            font-size: 8vw; /* Increase the font size */
            text-align: center; /* Center text horizontally */
        }

        .carousel-caption a.btn {
            font-size: 2vw; /* Increase the font size */
            background-color: #478ac9;
            color: #ffff;
            border-radius: 32%; /* Make them circular */
            margin-bottom: 30%;
        }

        /* Make the image expand to the size of the container */
        .carousel-item img {
            object-fit: cover; /*Expand image to cover the container*/
            width: 100%;
            height: 100%;
        }

        /* Center the carousel indicators (dots) horizontally */
        .carousel-indicators {
            text-align: center;
            align: center;
        }

        .carousel-indicators li {
            display: inline-block;
            width: 20px; /* Adjust the width of the dots */
            height: 20px; /* Adjust the height of the dots */
            margin: 0 8px; /* Adjust the spacing between dots */
            background-color: #888; /* Color of inactive dots */
            border-radius: 50%; /* Make them circular */
            align:center;
        }

        .carousel-indicators .active {
            background-color: #333; /* Color of the active dot */
        }
        /* Add transparent gray overlay */
        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Adjust the alpha (0.5 for 50% transparency) */
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
            <img src="uploads/events/ND.png" alt="">
            <div class="carousel-caption">
                <h1>اليوم الوطني</h1>
                <a href="Events.php" class="btn btn-primary">تابع المزيد</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="uploads/events/waad3.jpeg" alt="">
            <div class="carousel-caption">
                <h1>حفل الوعد</h1>
                <a href="Events.php" class="btn btn-primary">تابع المزيد</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="uploads/events/dewan2.jpg" alt="">
            <div class="carousel-caption">
                <h1>ديوان الإبداع</h1>
                <a href="Events.php" class="btn btn-primary">تابع المزيد</a>
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



