<?php
    header("Content-Type: application/json");

    $response["message"] = "The parameter value &url not specified by you.";
    $response["status"] = 442;
    $response["color"] = "#02FF9D";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);