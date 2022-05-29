<?php
    header("Content-Type: application/json");

    $response["message"] = "Service Unavailable";
    $response["status"] = 503;
    $response["color"] = "#FF2802";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);