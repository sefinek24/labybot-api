<?php
    header("Content-Type: application/json; charset=utf-8");

    $response["message"] = "The number specified in &power is too large negative number.";
    $response["status"] = 454;
    $response["color"] = "#02D7FF";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);