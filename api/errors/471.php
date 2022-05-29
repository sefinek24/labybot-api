<?php
    header("Content-Type: application/json; charset=utf-8");

    $response["message"] = "Parameter &min does not exist.";
    $response["status"] = 471;
    $response["color"] = "#02F3FF";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);