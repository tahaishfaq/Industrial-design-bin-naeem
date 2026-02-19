<?php
require_once __DIR__ . '/../../includes/config.php';

$title = 'Hanplas | Bin Naaem Industries';
$description = 'Innovative polymer solutions and sustainable plastics engineering for a circular economy.';
$canonical = 'https://binnaeemindustries.com/brands/hanplas';
$currentPage = 'brands';
$isBrand = true;
$showWhatsApp = true;

$brandName = 'Hanplas';
$brandTagline = 'Polymers';
$brandDescription = 'Innovative polymer solutions and sustainable plastics engineering for a circular economy.';
$brandLogo = '../assets/logos/hanplas.PNG';
$brandSlug = 'hanplas';
$waPrefillText = 'Hi, I want a quote for Hanplas.';

require INCLUDES_PATH . '/page-start.php';
include INCLUDES_PATH . '/brand-placeholder.php';
require INCLUDES_PATH . '/page-end.php';
?>
