<?php
    session_start();
    $id = $_GET["id"];
    if(!$id) {
        echo "ERROR! The error id number isn't in URL!";
    } elseif ($id == "1") {
        echo "ERROR! The donation number was blank!";
    } elseif ($id == "2") {
        echo "ERROR! The email input answer was blank.";
    } elseif ($id == "3") {
        echo "ERROR! Login information incorrect.";
    }
