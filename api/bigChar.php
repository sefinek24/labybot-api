<?php
    if(!isset($_GET["text"])) return require "errors/461.php"; else $text = $_GET["text"];

    // Sprawdź, czy parametr "text" jest pusty. Jeśli tak, daj błąd.
    if(empty($text)) return require "errors/462.php";


    $image = imagecreatetruecolor(1920, 1080);
    $white = imagecolorallocate($image, 255, 255, 255);

    $font = "fonts/arial.ttf";
    $bbox = imagettfbbox(280, 0, $font, $text);

    $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2) + -30;
    $y = $bbox[1] + (imagesy($image) / 2) - ($bbox[5] / 2);

    imagettftext($image, 280, 0, $x, $y, $white, $font, $text);

    header("Content-Type: image/png");
    imagepng($image);
    imagedestroy($image);