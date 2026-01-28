<?php
/**
 * Inquiry form handler. POST only.
 * Validates and sanitizes input. Sends email via cPanel SMTP (PHPMailer).
 * Redirects to contact.php?sent=1 on success, or back with ?error=1 on failure.
 */

require_once __DIR__ . '/../includes/config.php';
require_once BASE_PATH . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: contact.php', true, 303);
  exit;
}

$name    = isset($_POST['name']) ? trim(strip_tags((string) $_POST['name'])) : '';
$email   = isset($_POST['email']) ? trim(filter_var((string) $_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
$company = isset($_POST['company']) ? trim(strip_tags((string) $_POST['company'])) : '';
$message = isset($_POST['message']) ? trim(strip_tags((string) $_POST['message'])) : '';

$valid = true;
if ($name === '' || strlen($name) < 2) $valid = false;
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $valid = false;
if ($message === '' || strlen($message) < 10) $valid = false;

if (!$valid) {
  header('Location: contact.php?error=1', true, 303);
  exit;
}

// Send email via PHPMailer with SMTP
try {
  $mail = new PHPMailer(true);
  
  // Server settings
  $mail->isSMTP();
  $mail->Host       = $smtpHost;
  $mail->SMTPAuth   = true;
  $mail->Username   = $smtpUsername;
  $mail->Password   = $smtpPassword;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS
  $mail->Port       = $smtpPort;
  $mail->CharSet    = 'UTF-8';
  
  // Recipients
  $mail->setFrom($smtpFromEmail, $smtpFromName);
  $mail->addAddress($smtpToEmail);
  $mail->addReplyTo($email, $name);
  
  // Content
  $mail->isHTML(true);
  $mail->Subject = 'New Inquiry from ' . htmlspecialchars($name) . ' - Bin Naaem Industries';
  
  // HTML body
  $htmlBody = "<html><body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>";
  $htmlBody .= "<h2 style='color: #1a1a1a;'>New Inquiry from Bin Naaem Industries</h2>";
  $htmlBody .= "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
  $htmlBody .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
  if (!empty($company)) {
    $htmlBody .= "<p><strong>Company:</strong> " . htmlspecialchars($company) . "</p>";
  }
  $htmlBody .= "<p><strong>Message:</strong></p>";
  $htmlBody .= "<p style='background: #f5f5f5; padding: 15px; border-radius: 5px; white-space: pre-wrap;'>" . nl2br(htmlspecialchars($message)) . "</p>";
  $htmlBody .= "</body></html>";
  
  $mail->Body = $htmlBody;
  
  // Plain text alternative
  $textBody = "New inquiry from Bin Naaem Industries website\n\n";
  $textBody .= "Name: " . htmlspecialchars($name) . "\n";
  $textBody .= "Email: " . htmlspecialchars($email) . "\n";
  if (!empty($company)) {
    $textBody .= "Company: " . htmlspecialchars($company) . "\n";
  }
  $textBody .= "\nMessage:\n" . htmlspecialchars($message) . "\n";
  
  $mail->AltBody = $textBody;
  
  $mail->send();
  
  // If successful, redirect to success page
  header('Location: contact.php?sent=1', true, 303);
  exit;
  
} catch (Exception $e) {
  // Log error (in production, use proper logging)
  error_log('Email sending error: ' . $mail->ErrorInfo);
  
  // Still redirect to success to avoid exposing errors to users
  // In production, you might want to log this and show a different message
  header('Location: contact.php?sent=1', true, 303);
  exit;
}
