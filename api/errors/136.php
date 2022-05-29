<?php
    header("Content-Type: application/json");

    $response["message"] = "Unknown file extension. Please contact the administrator.";
    $response["status"] = 136;
    $response["color"] = "#FFEB02";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);