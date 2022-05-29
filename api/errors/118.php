<?php
    header("Content-Type: application/json");

    $response["message"] = "Something went wrong while parsing file extensions. Please contact the administrator.";
    $response["status"] = 118;
    $response["color"] = "#FF9F02";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);