<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];



    $email_form = 'anubhav.jain.csds.20@ggits.net';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                     "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "anubhavjain.13092001@gmail.com";
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");
?>    