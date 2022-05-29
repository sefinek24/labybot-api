<?php
    header("Content-Type: application/json");

    $response["message"] = "Gateway Timeout Error";
    $response["status"] = 504;
    $response["color"] = "#FF8C02";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);