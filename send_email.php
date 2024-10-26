<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['contactName']);
    $email = htmlspecialchars($_POST['contactEmail']);
    $subject = htmlspecialchars($_POST['contactSubject']);
    $message = htmlspecialchars($_POST['contactMessage']);

    // Set recipient email address
    $to = "thummanapallytilak@gmail.com";
    
    // Set email subject
    $email_subject = "New message from $name: $subject";
    
    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Prepare email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";
    
    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
