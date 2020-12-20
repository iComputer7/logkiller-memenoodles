<?php
    header("Content-type: text/plain; charset=utf-8");
    $imagesDir = "quotes/";
    $images = glob($imagesDir . '*.{png}', GLOB_BRACE);
    $image = array_rand($images);
    echo $images[$image];
    exit();
?>