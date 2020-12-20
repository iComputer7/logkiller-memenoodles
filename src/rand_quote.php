<?php
header("Content-type: application/json; charset=utf-8");
$images = glob('quotes/*.{png,gif,jpg,jpeg}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];
echo json_encode($randomImage);