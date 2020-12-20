<?php
    $imagesDir = "quotes/";
    $images = glob($imagesDir . '*.{png}', GLOB_BRACE);
    $image = array_rand($images);
    //$images[$image];
    header('Location: '. $images[$image]);
    exit();
?>