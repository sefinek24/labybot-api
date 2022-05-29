<?php
    // Sprawdzamy, czy istnieje parametr "json", jeśli nie istnieje, daj domyślną wartość, czyli false.
    if(!isset($_GET["json"])) $json = false; else $json = $_GET["json"];

    // Sprawdzamy, czy istnieje plik z danymi.
    $filename = "data/db/dogfaces.lb";
    if(!file_exists($filename)) return require "./errors/301.php";

    // Sprawdzamy, czy istnieje plik z danymi oraz, czy jest on możliwy do odczytu.
    if(!is_readable($filename)) return require "./errors/302.php";

    // Spprawdzamy, czy wszystko jest ok z plikiem.
    $patch = file($filename);
    if(!$patch) return require "./errors/326.php";



    header("Content-Type: application/json");
    $response["message"] = trim($patch[rand(0, count($patch) - 1)]);
    $response["color"] = "RANDOM";
    $response["status"] = 200;
    $response["get"] = "dogfaces";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE);