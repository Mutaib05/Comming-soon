<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "mutoibmutoib2@gmail.com"; // Replace with your email address
        $subject = "New Subscriber";
        $message = "New subscriber: " . $email;
        $headers = "From: webmaster@example.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully.";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "No data received.";
}
?>