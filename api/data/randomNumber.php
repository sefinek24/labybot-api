<?php
    // Sprawdzamy, czy istnieje parametr "min".
    if(!isset($_GET["min"])) return require "errors/471.php"; else $min = $_GET["min"];
    // Sprawdzamy, czy wartość parametru "min" została podana przez użytkownika.
    if(empty($min)) return require "errors/472.php";
    // Sprawdzamy, czy wartość "min" jest na pewno liczbą.
    if(!is_numeric($min)) return require "errors/475.php";

    // Sprawdzamy, czy liczba nie jest przypadkiem za duża.
    if($min > 999999999999999999) return require "errors/477.php";

    // Sprawdzamy, czy istnieje parametr "max".
    if(!isset($_GET["max"])) return require "errors/473.php"; else $max = $_GET["max"];
    // Sprawdzamy, czy wartość parametru "max" została podana przez użytkownika.
    if(empty($max)) return require "errors/474.php";
    // Sprawdzamy, czy wartość "max" jest na pewno liczbą.
    if(!is_numeric($max)) return require "errors/476.php";
    // Sprawdzamy, czy liczba nie jest przypadkiem za duża.
    if($max > 999999999999999999) return require "errors/478.php";


    $number = rand($min, $max);

    header("Content-Type: application/json");
    $response["number"] = $number;
    $response["string"] = "$number";
    $response["min"] = (int)$min;
    $response["minString"] = "$min";
    $response["max"] = (int)$max;
    $response["maxString"] = "$max";
    $response["color"] = "RANDOM";
    $response["status"] = 200;
    $response["get"] = "randomNumber";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);