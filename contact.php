<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "yactam20@gmail.com";

    $email_subject = "New Contact Form Submission: $subject";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n\n";
    $email_body .= "Message:\n$message";

    $headers = "From: $name <$email>";

    mail($to, $email_subject, $email_body, $headers);

    exit();
}
?>
