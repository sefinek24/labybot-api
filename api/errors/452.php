<?php
    header("Content-Type: application/json; charset=utf-8");

    $response["message"] = "&power is not a number.";
    $response["status"] = 452;
    $response["color"] = "#02E0FF";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);