<?php
    header("Content-Type: application/json");

    $response["message"] = "A required file has crashed. Please contact the administrator.";
    $response["status"] = 123;
    $response["color"] = "#FF9102";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);