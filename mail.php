<?php

if(isset($_POST['submit'])){
    $to = "drod4eva@gmail.com"; // Replace this with the email address you want to receive the message
    $name = $_POST['name'];
    $subject = "New message from " . $name;
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html\r\n";

    $body = "<html><body>";
    $body .= "<h2>New message from " . $name . "</h2>";
    $body .= "<p>Email: " . $email . "</p>";
    $body .= "<p>Message: " . $message . "</p>";
    $body .= "</body></html>";

    if(mail($to, $subject, $body, $headers)){
        echo "<p>Message sent successfully.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}

?>