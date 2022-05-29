<?php
    header("Content-Type: application/json");

    $response["message"] = "Internal Server Error";
    $response["status"] = 500;
    $response["color"] = "#FF6602";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);