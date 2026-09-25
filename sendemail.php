<?php

define("RECIPIENT_NAME", "King Edward Travel");
define("RECIPIENT_EMAIL", "info@kingedwardtravel.com");

$success = false;

// Anti-bot honeypot
$honeypot = isset($_POST['website']) ? $_POST['website'] : '';
if (!empty($honeypot)) {
    header("Location: contact.php?message=BotDetected");
    exit;
}

// Clean input helper
function clean_input($data) {
    return preg_replace("/[\r\n]+/", " ", trim($data));
}

$name    = isset($_POST['name'])    ? clean_input($_POST['name'])    : "";
$email   = isset($_POST['email'])   ? clean_input($_POST['email'])   : "";
$subject = isset($_POST['subject']) ? clean_input($_POST['subject']) : "New Contact Form Message";
$phone   = isset($_POST['phone'])   ? clean_input($_POST['phone'])   : "";
$message = isset($_POST['message']) ? trim($_POST['message'])        : "";

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email = "";
}

if ($name && $email && $message) {
    $to = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
    $headers = "From: {$name} <{$email}>\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    $success = mail($to, $subject, $body, $headers);

    header("Location: contact.php?message=Successful");
    exit;
} else {
    header("Location: contact.php?message=Failed");
    exit;
}
?>
