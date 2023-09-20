<?php


$logos = scandir('./logos');


echo '<div class="logo-slider">';


foreach ($logos as $logo) {
    if (strpos($logo, '.png', 'jpg') !== false) {
        echo '<img src="./logos/' . $logo . '" alt="">';
    }
}


echo '</div>';

?>
