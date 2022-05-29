<?php
    // Sprawdzamy, czy istnieje katalog ze zdjęciami.
    $dir = "../images/cats";
    if(!file_exists($dir)) return require "./errors/174.php";

    // Sprawdzamy, czy wszystko zostało dobrze pobrane.
    $dirArr = scandir($dir);
    if(!$dirArr) return require "./errors/110.php";

    // Test tablicy (tak jak by).
    $arrFiles = array_diff($dirArr, array(".", ".."));
    if(!$arrFiles) return require "./errors/111.php";

    $ImgsArray = array();
    foreach ($arrFiles as $file) {
        $ext = pathinfo($dir."/".$file, PATHINFO_EXTENSION);
        // Sprawdzamy rozszerzenia.
        if(!$ext) return require "./errors/118.php";

        if ($ext === "jpg" || $ext === "png" || $ext === "JPG" || $ext === "PNG") $ImgsArray[] = $file; else {
            return require "./errors/136.php";
        }
    }


    $randomImage = $ImgsArray[rand(0, count($ImgsArray) - 1)];
    if(!$randomImage) return require "../errors/183.php";

    header("Content-Type: application/json");
    $response["message"] = "https://api.atsumi.xyz/images/cats/" . $randomImage;
    $response["color"] = "RANDOM";
    $response["status"] = 200;
    $response["get"] = "cats";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);