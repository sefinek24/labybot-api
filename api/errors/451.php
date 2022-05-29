<?php
    header("Content-Type: application/json; charset=utf-8");

    $response["message"] = "The parameter value &power was not specified by you.";
    $response["status"] = 451;
    $response["color"] = "#02FF9D";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);