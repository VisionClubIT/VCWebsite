<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <title>Logo Slider</title>
</head>
<body>
    <div class="logo-slider">
        <?php
        $logosDir = 'logos/';
        $logos = scandir($logosDir);
        foreach ($logos as $logo) {
            if (is_file($logosDir . $logo)) {
                echo '<div class="logo"><img src="' . $logosDir . $logo . '" alt="Logo"></div>';
            }
        }
        ?>
    </div>
</body>
</html>
