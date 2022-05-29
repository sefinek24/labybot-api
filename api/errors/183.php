<?php
    header("Content-Type: application/json");

    $response["message"] = "An error occurred while drawing the image. Please contact the administrator.";
    $response["status"] = 183;
    $response["color"] = "#FF5802";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);