<?php
    header("Content-Type: application/json");

    $response["message"] = "An error occurred while retrieving all photos from the directory. Please contact the administrator.";
    $response["status"] = 110;
    $response["color"] = "#FFA402";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);