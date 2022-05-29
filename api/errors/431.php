<?php
    header("Content-Type: application/json");

    $response["message"] = "Parameter ?type does not exist.";
    $response["status"] = 431;
    $response["color"] = "#02FF9D";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);