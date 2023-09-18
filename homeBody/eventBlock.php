<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Block Slider</title>
    <style>
        /* Styling for the slider container */
        .slider-container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }

        /* Styling for individual slides */
        .slide {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-size: cover;
           
            padding: 20px;
        }

        /* Styling for the title and button */
        .slide h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .slide button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Styling for navigation dots */
        .dots {
            text-align: center;
            margin-top: 20px;
        }

        .dot {
            width: 12px;
            height: 12px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            margin: 0 5px;
            cursor: pointer;
        }

        .dot.active {
            background-color: #007bff;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .slide {
                height: 300px;
            }

            .slide h2 {
                font-size: 18px;
            }

            .slide button {
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="slider-container">
        <div class="slide" style="background-image: url('uploads/events/ND.png');">
            <h2>Slide 1</h2>
            <button>Learn More</button>
        </div>
        <div class="slide" style="background-image: url('homeBody/ND.png');">
            <h2>Slide 2</h2>
            <button>Explore</button>
        </div>
        <div class="slide" style="background-image: url('slide3.jpg');">
            <h2>Slide 3</h2>
            <button>Get Started</button>
        </div>
    </div>

    <div class="dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        // JavaScript for controlling the slider (same as previous example)
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? 'flex' : 'none';
            });

            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        }

        setInterval(nextSlide, 5000);

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                showSlide(i);
                currentIndex = i;
            });
        });

        showSlide(currentIndex);
    </script>
</body>
</html>

