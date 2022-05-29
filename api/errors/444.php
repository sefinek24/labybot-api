<?php
    header("Content-Type: application/json+");

    $response["message"] = "The extension of the specified image in &url is not supported by the server.";
    $response["status"] = 444;
    $response["color"] = "#02FF9D";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);