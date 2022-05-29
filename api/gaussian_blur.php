<?php
    // Sprawdź, czy istnieje parametr "power". Jeśli nie istnieje, przypisz domyślną wartość.
    if (!isset($_GET["power"])) $power = 13; else {
        $power = $_GET["power"];
        if(empty($power)) return require "errors/451.php";
    }

    // Sprawdź, czy parametr "power", aby na pewno jest liczbą.
    if(!is_numeric($power)) return require "errors/452.php";

    // Sprawdź, czy "power" jest większe od 70. Jeśli tak, daj błąd.
    if($power > 70) return require "errors/453.php";

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

    list($w, $h) = getimagesize($url);
    for($x=1; $x<=$power; $x++) imagefilter($image, IMG_FILTER_GAUSSIAN_BLUR);
    imagepng($image);
    imagedestroy($image);