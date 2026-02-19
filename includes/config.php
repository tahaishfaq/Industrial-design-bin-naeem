<?php
/**
 * Bin Naaem Industries — Shared config.
 * Base paths and URLs for includes, assets, and links.
 */

defined('BASE_PATH') || define('BASE_PATH', dirname(__DIR__));
defined('INCLUDES_PATH') || define('INCLUDES_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'includes');

// Load environment variables from .env file
if (file_exists(BASE_PATH . '/.env')) {
    $envFile = file_get_contents(BASE_PATH . '/.env');
    $lines = explode("\n", $envFile);
    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line) || strpos($line, '#') === 0) {
            continue;
        }
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            // Remove quotes if present
            $value = trim($value, '"\'');
            if (!empty($key)) {
                $_ENV[$key] = $value;
                putenv("$key=$value");
            }
        }
    }
}

// Base URL for links (trailing slash optional). Use '' for relative paths.
$baseUrl = '';

// Email configuration (cPanel SMTP)
$smtpHost = $_ENV['SMTP_HOST'] ?? getenv('SMTP_HOST') ?? 'localhost';
$smtpPort = $_ENV['SMTP_PORT'] ?? getenv('SMTP_PORT') ?? 587;
$smtpUsername = $_ENV['SMTP_USERNAME'] ?? getenv('SMTP_USERNAME') ?? '';
$smtpPassword = $_ENV['SMTP_PASSWORD'] ?? getenv('SMTP_PASSWORD') ?? '';
$smtpFromEmail = $_ENV['SMTP_FROM_EMAIL'] ?? getenv('SMTP_FROM_EMAIL') ?? 'info@binnaeemindustries.com';
$smtpFromName = $_ENV['SMTP_FROM_NAME'] ?? getenv('SMTP_FROM_NAME') ?? 'Bin Naaem Industries';
$smtpToEmail = $_ENV['SMTP_TO_EMAIL'] ?? getenv('SMTP_TO_EMAIL') ?? 'info@binnaeemindustries.com';

// Google Analytics 4 (optional: set in .env as GA4_MEASUREMENT_ID to override)
$ga4MeasurementId = $_ENV['GA4_MEASUREMENT_ID'] ?? getenv('GA4_MEASUREMENT_ID') ?? 'G-5D3XWNL69Q';

// Google Search Console verification (optional: set in .env as GSC_VERIFICATION)
$gscVerification = $_ENV['GSC_VERIFICATION'] ?? getenv('GSC_VERIFICATION') ?? '';

// Company profile PDF path (relative to site root). Replace file in public/downloads/ with real PDF.
$companyProfileUrl = $_ENV['COMPANY_PROFILE_URL'] ?? getenv('COMPANY_PROFILE_URL') ?? 'downloads/company-profile.pdf';

// WhatsApp default number (no spaces). Override per-page with $whatsappNumber.
$waDefaultNumber = '923215707070';

function waUrl($utmContent = 'cta', $number = null, $prefillText = null) {
  global $waDefaultNumber;
  $num = $number !== null ? preg_replace('/\D/', '', $number) : preg_replace('/\D/', '', $waDefaultNumber);
  $params = ['utm_source' => 'website', 'utm_medium' => 'whatsapp', 'utm_campaign' => 'cta', 'utm_content' => $utmContent];
  if ($prefillText !== null && $prefillText !== '') {
    $params['text'] = $prefillText;
  }
  return 'https://wa.me/' . $num . '?' . http_build_query($params);
}

function url($path) {
    global $baseUrl;
    $path = ltrim($path, '/');
    return $baseUrl === '' ? $path : rtrim($baseUrl, '/') . '/' . $path;
}
