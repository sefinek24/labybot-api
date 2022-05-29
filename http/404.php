<?php
    header("Content-Type: application/json");

    $response["message"] = "File not found on the server.";
    $response["status"] = 404;
    $response["color"] = "#3CABFF";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);