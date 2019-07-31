<?php
    $email = $_GET['email'];
    if($email = ""){
        echo "Thank you for your donation. Please check your PayPal to accept the request for the money you wanted to donate.";
    } else {
        header("location:error.php?id=2");
    }

?>