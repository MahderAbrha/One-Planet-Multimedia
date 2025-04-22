<?php
// Set your custom email here
$to = "abrhamahder07@gmail.com"; // Replace with your email
$subject = "New Inquiry from One Planet Multimedia Website";

// Sanitize and collect POST data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

// Create the email body
$body = "You have received a new inquiry:\n\n";
$body .= "Full Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Message:\n$message\n";

// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    // Redirect or show confirmation
    echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='contact.html';</script>";
} else {
    echo "<script>alert('Sorry, something went wrong. Please try again.'); window.history.back();</script>";
}
?>
