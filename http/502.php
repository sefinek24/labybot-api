<?php
    header("Content-Type: application/json");

    $response["message"] = "Bad Gateway";
    $response["status"] = 502;
    $response["color"] = "#FF9602";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);