<?php
    header("Content-type: application/json; charset=utf-8");
    //made by Alyx#9952
    $imagesDir = 'quotes/';
    $images = glob($imagesDir . '*.{png}', GLOB_BRACE);
    echo json_encode($images);
?>