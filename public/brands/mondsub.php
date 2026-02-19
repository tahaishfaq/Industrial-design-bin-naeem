<?php
require_once __DIR__ . '/../../includes/config.php';

$title = 'Mondsub | Bin Naaem Industries';
$description = 'Industrial chemical synthesis and raw material processing for next-generation manufacturing.';
$canonical = 'https://binnaeemindustries.com/brands/mondsub';
$currentPage = 'brands';
$isBrand = true;
$showWhatsApp = true;

$brandName = 'Mondsub';
$brandTagline = 'Chemicals';
$brandDescription = 'Pioneering industrial chemical synthesis and raw material processing for next-generation manufacturing.';
$brandLogo = '../assets/logos/mondsub.PNG';
$brandSlug = 'mondsub';
$waPrefillText = 'Hi, I want a quote for Mondsub.';

require INCLUDES_PATH . '/page-start.php';
include INCLUDES_PATH . '/brand-placeholder.php';
require INCLUDES_PATH . '/page-end.php';
?>
