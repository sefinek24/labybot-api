<?php
    header("Content-Type: application/json; charset=utf-8");

    $response["message"] = "The parameter value &min was not specified by you.";
    $response["status"] = 472;
    $response["color"] = "#02FF9D";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);