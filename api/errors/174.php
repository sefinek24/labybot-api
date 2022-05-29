<?php
    header("Content-Type: application/json");

    $response["message"] = "Photo directory not found. Wait a few minutes. If the problem persists, please contact us.";
    $response["status"] = 174;
    $response["color"] = "#FFDD02";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);