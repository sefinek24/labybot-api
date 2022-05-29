<?php
    // Sprawdź, czy parametr "url" istnieje. Jeśli nie, daj błąd.
    if(!isset($_GET["url"])) return require "errors/441.php"; else $url = $_GET["url"];

    // Sprawdź, czy parametr "url" jest pusty. Jeśli tak, daj błąd.
    if(empty($url)) return require "errors/442.php";

    // Sprawdź, czy link podany w "url", aby na pewno prowadzi do obrazu.
    if(!@getimagesize($url)) return require "errors/443.php";


    $headers = get_headers($url, 1);
    switch ($headers["Content-Type"]) {
        case "image/jpeg":
            $image = imagecreatefromjpeg($url);
        break;

        case "image/gif":
            $image = imagecreatefromgif($url);
        break;

        case "image/png":
            $image = imagecreatefrompng($url);
        break;

        default:
            return require "errors/444.php";
    }

    header("Content-Type: image/png");
    imagefilter($image, IMG_FILTER_GRAYSCALE);

    imagepng($image);
    imagedestroy($image);