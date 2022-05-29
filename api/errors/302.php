<?php
    header("Content-Type: application/json");

    $response["message"] = "The server cannot read the contents of the file with the extension lb. for some reason. Please contact the administrator.";
    $response["status"] = 302;
    $response["color"] = "#0273FF";
    $response["from"] = "LabyBOT API";

    echo json_encode($response, JSON_PRETTY_PRINT);