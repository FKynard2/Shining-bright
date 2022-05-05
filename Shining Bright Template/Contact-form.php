<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = 'fkynard2@gmail.com';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                    "User Email: $vistor_email.\n".
                        "User Message: $message.\n";

    $to = "frank@kynard2.com";

    $headers = "From: $email_form \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers)

    header("Location: Contact.html");

?>