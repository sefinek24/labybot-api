<?php
    header("Content-Type: application/json");

    $response["message"] = "The URL specified in &url does not lead to any image.";
    $response["status"] = 443;
    $response["color"] = "#02FF9D";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);