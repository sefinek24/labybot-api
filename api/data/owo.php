<?php
    // Sprawdzamy, czy istnieje plik z danymi.
    $filename = "data/db/owo.lb";
    if(!file_exists($filename)) return require "./errors/301.php";

    // Sprawdzamy, czy plik jest on możliwy do odczytu.
    if(!is_readable($filename)) return require "./errors/302.php";

    // Sprawdzamy, czy wszystko jest ok z plikiem.
    $patch = file($filename);
    if(!$patch) return require "./errors/123.php";


    header("Content-Type: application/json");
    $response["message"] = trim($patch[rand(0, count($patch) - 1)]);
    $response["color"] = "RANDOM";
    $response["status"] = 200;
    $response["get"] = "owo";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE);