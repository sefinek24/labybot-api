<?php
    header("Content-Type: application/json");

    $response["message"] = "Too Many Requests";
    $response["status"] = 429;
    $response["color"] = "#179BFF";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);