<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "jahnopaul00@gmail.com"; // Replace with your email address
    $subject = "Message from Portfolio Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
