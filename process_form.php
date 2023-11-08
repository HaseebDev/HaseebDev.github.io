<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Customize the email content and recipient
    $to = "funzonegplay@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    // Redirect to a thank you page
    header("Location: thank_you.html");
} else {
    header("Location: contact.html");
}
?>
