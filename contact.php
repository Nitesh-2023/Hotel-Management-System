<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "bbalkrishan81@gmail.com";

    // Set the email subject
    $subject = "Contact Form Submission from $name";

    // Create the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message)) {
        echo "Thank you for your submission!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>
