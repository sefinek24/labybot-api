<?php
    header("Content-Type: application/json");

    $response["message"] = "An error has occurred in the array. Please contact the administrator.";
    $response["status"] = 111;
    $response["color"] = "#FF9102";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);