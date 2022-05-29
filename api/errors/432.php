<?php
    header("Content-Type: application/json");

    $response["message"] = "The parameter value ?type not specified by you.";
    $response["status"] = 432;
    $response["color"] = "#02FF9D";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);