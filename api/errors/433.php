<?php
    header("Content-Type: application/json");

    $response["message"] = "The value of the ?type parameter is not in the array.";
    $response["status"] = 433;
    $response["color"] = "#02FF9D";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);