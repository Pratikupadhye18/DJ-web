<?php
include 'includes/session.php';
require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
$redirect = strtok($redirect, '?');

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['email'])) {
    header('Location: ' . $redirect . '?subscribe=invalid');
    exit;
}

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $redirect . '?subscribe=invalid');
    exit;
}

$email_safe = mysqli_real_escape_string($conn2, $email);
$check = mysqli_query($conn2, "SELECT id FROM register WHERE email='$email_safe' AND service='Newsletter' LIMIT 1");

if ($check && mysqli_num_rows($check) > 0) {
    header('Location: ' . $redirect . '?subscribe=exists');
    exit;
}

$sql = "INSERT INTO register (name, email, phone, subject, service, message) VALUES ('Newsletter Subscriber', '$email_safe', 'N/A', 'Newsletter Subscription', 'Newsletter', 'Footer Subscribe')";
mysqli_query($conn2, $sql);

$mail = new PHPMailer(true);

try {
    $mail->setFrom('ceo@digitalsjourney.com', 'Digitals Journey');
    $mail->addAddress('ceo@digitalsjourney.com');
    $mail->addReplyTo($email, 'Newsletter Subscriber');

    $admin_message = "<p>A new newsletter subscription was received from the website footer.</p>";
    $admin_message .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    $admin_message .= "<p>You can send future updates and notifications to this subscriber.</p>";

    $mail->isHTML(true);
    $mail->Subject = 'New Newsletter Subscriber - Digitals Journey';
    $mail->Body = $admin_message;
    $mail->send();

    $mail->clearAddresses();
    $mail->clearReplyTos();
    $mail->addAddress($email);
    $mail->addReplyTo('ceo@digitalsjourney.com', 'Digitals Journey');

    $welcome_message = "<p>Thank you for subscribing to Digitals Journey!</p>";
    $welcome_message .= "<p>You will now receive our latest updates, marketing insights, and notifications directly in your inbox.</p>";
    $welcome_message .= "<p>Regards,<br><strong>Team Digitals Journey</strong></p>";

    $mail->Subject = 'Welcome to Digitals Journey Updates';
    $mail->Body = $welcome_message;
    $mail->send();
} catch (Exception $e) {
    // Subscription is saved even if email delivery fails.
}

header('Location: ' . $redirect . '?subscribe=success');
exit;
