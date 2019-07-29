<?php
    session_start();
    $id = $_GET["id"];
    if(!$id) {
        echo "ERROR! The error id number isn't in URL!";
    }

    if ($id = "1") {
        echo "ERROR! The donation number was blank!";
    } else {
        echo "ERROR! The error number is undefined!";
    }
?>