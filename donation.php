<?php
    $price = htmlspecialchars($_GET["price"]);
    echo $price;
    if (!$price == "" || " "){
        echo $price;
    } else {
        header("location:error.php?id=1");  
    }
?>