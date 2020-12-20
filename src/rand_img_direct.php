<?php
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    $imagesDir = "quotes/";
    $images = glob($imagesDir . '*.{png}', GLOB_BRACE);
    $image = array_rand($images);
    $file = $images[$image];

    $type = 'image/png';
    header('Content-Type:'.$type);
    header('Content-Length: ' . filesize($file));
    readfile($file);
?>