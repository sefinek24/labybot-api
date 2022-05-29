<?php
	// Sprawdź, czy parametr "type" istnieje. Jeśli nie, daj błąd.
	if(!isset($_GET["type"])) return require "errors/431.php"; else $get = $_GET["type"];
	if(empty($get)) return require "errors/432.php";

	$apiList = Array("owo", "uwu", "lovefaces", "catfaces", "dogfaces", "eightball", "randomNumber", "cats", "foxes", "dogs", "fishes", "alpacas", "birds");
	if(!in_array($get, $apiList)) return require "errors/433.php";

	switch($get) {
        case "owo":
            require "data/owo.php"; break;
        case "uwu":
            require "data/uwu.php"; break;
        case "lovefaces":
            require "data/lovefaces.php"; break;
        case "catfaces":
            require "data/catfaces.php"; break;
        case "dogfaces":
            require "data/dogfaces.php"; break;
        case "eightball":
            require "data/eightball.php"; break;
        case "randomNumber":
            require "data/randomNumber.php"; break;

        case "cats":
            require "data/cats.php"; break;
        case "dogs":
            require "data/dogs.php"; break;
        case "foxes":
            require "data/foxes.php"; break;
        case "fishes":
            require "data/fishes.php"; break;
        case "alpacas":
            require "data/alpacas.php"; break;
        case "birds":
            require "data/birds.php"; break;
    }