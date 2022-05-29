<?php
    header("Content-Type: application/json");

    $response["message"] = "Parameter &url does not exist.";
    $response["status"] = 441;
    $response["color"] = "#02FF9D";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);