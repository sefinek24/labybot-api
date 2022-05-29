<?php
    if(!isset($_GET["text"])) return require "errors/461.php"; else $text = $_GET["text"];

    // Sprawdź, czy parametr "text" jest pusty. Jeśli tak, daj błąd.
    if(empty($text)) return require "errors/462.php";

    $image = imagecreatetruecolor(802, 482);

    $white = imagecolorallocate($image, 255, 255, 255);

    $font = "fonts/terminal.ttf";
    imagettftext($image, 12, 0, 23, 35, $white, $font, $text);

    header("Content-Type: image/png");
    imagepng($image);
    imagedestroy($image);