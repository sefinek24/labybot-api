<?php
    header("Content-Type: application/json");

    $response["message"] = "Failed to receive data. Please contact the administrator.";
    $response["status"] = 326;
    $response["color"] = "#0248FF";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);