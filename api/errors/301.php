<?php
    header("Content-Type: application/json");

    $response["message"] = "A required file with the extension lb was not found. Please contact the administrator.";
    $response["status"] = 301;
    $response["color"] = "#028FFF";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);