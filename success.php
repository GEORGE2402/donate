<?php
    $email = $_GET['email'];
    if(!$email = ""){
        echo "Thank you for your donation. Please check your PayPal $email to accept the request for the money you wanted to donate.";
        echo $email;
    }

?>