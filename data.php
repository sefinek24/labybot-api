<?php
    require "config.php";

    header("Content-Type: application/json");
    $response["status"] = 200;
    $response["version"] = $version;
    $response["lastupdate"] = $lastupdate;
    $response["date"] = $date;
    echo json_encode($response, JSON_PRETTY_PRINT);