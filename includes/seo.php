<?php
/**
 * SEO & metadata include.
 * Set $title, $description, $canonical, $ogImage, $ogType before including.
 * Schema placeholders ready for future implementation.
 */

$seoTitle       = isset($title) ? $title : 'Bin Naaem Industries';
$seoDesc        = isset($description) ? $description : 'Engineering tomorrow\'s industrial reality & infrastructure.';
$seoCanonical   = isset($canonical) ? $canonical : '';
$seoOgImage     = isset($ogImage) ? $ogImage : 'https://lh3.googleusercontent.com/aida-public/AB6AXuAgcGo5xGO3N07RKZ_N1K5-Xaupso9oPY61bZ_LZaqwhX0cCE-xTzAOr8okqMJnGnwbxeWO--piZfKy7OvvsR5G_v888hsC2lkpfTKXsgZdVY7j519mI33-3t2f-ZcnoQJsF3Xxwgcj_4k64js9cOCUWOC7IKi1kA-Y3OH3oAck-5iX1qcq3IeswyZpERYfY0Bng7JF7LXmLceh3rCGocnapZ50bzcVu39XIB1sqtZXn7XSDx1y1edA_nXxT-t67gjS7O-PWf8f5o8';
$seoOgType      = isset($ogType) ? $ogType : 'website';
$seoSiteName    = 'Bin Naaem Industries';
?>
<title><?php echo htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($seoDesc, ENT_QUOTES, 'UTF-8'); ?>">
<?php if ($seoCanonical): ?>
<link rel="canonical" href="<?php echo htmlspecialchars($seoCanonical, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>

<meta property="og:title" content="<?php echo htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($seoDesc, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:type" content="<?php echo htmlspecialchars($seoOgType, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:site_name" content="<?php echo htmlspecialchars($seoSiteName, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($seoOgImage, ENT_QUOTES, 'UTF-8'); ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($seoDesc, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($seoOgImage, ENT_QUOTES, 'UTF-8'); ?>">

<?php
// JSON-LD Structured Data - Organization Schema
$orgSchema = [
  '@context' => 'https://schema.org',
  '@type' => 'Organization',
  'name' => 'Naeem Group',
  'alternateName' => 'Bin Naaem Industries',
  'url' => 'https://binnaeemindustries.com',
  'logo' => 'https://binnaeemindustries.com/assets/logos/bin-naeem.PNG',
  'description' => 'Industrial design, manufacturing, packaging, and infrastructure solutions across Pakistan and the MENA region.',
  'address' => [
    '@type' => 'PostalAddress',
    'streetAddress' => 'Jalil Centre, 231-Circular Road, Bhati Gate',
    'addressLocality' => 'Lahore',
    'postalCode' => '54000',
    'addressCountry' => 'PK'
  ],
  'contactPoint' => [
    '@type' => 'ContactPoint',
    'telephone' => '+92-42-37311809',
    'contactType' => 'Customer Service',
    'email' => 'info@binnaeemindustries.com',
    'areaServed' => 'PK',
    'availableLanguage' => ['en', 'ur']
  ],
  'sameAs' => [
    'https://www.instagram.com/binnaeemindustries',
    'https://www.facebook.com/binnaeemindustries'
  ]
];
?>
<script type="application/ld+json">
<?php echo json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<?php
// LocalBusiness schema for local search
$localBusinessSchema = [
  '@context' => 'https://schema.org',
  '@type' => 'LocalBusiness',
  'name' => 'Bin Naaem Industries',
  'alternateName' => 'Naeem Group',
  'url' => 'https://binnaeemindustries.com',
  'description' => 'Industrial design, manufacturing, packaging, and infrastructure solutions across Pakistan and the MENA region.',
  'address' => [
    '@type' => 'PostalAddress',
    'streetAddress' => 'Jalil Centre, 231-Circular Road, Bhati Gate',
    'addressLocality' => 'Lahore',
    'postalCode' => '54000',
    'addressCountry' => 'PK'
  ],
  'telephone' => '+92-42-37311809',
  'email' => 'info@binnaeemindustries.com',
  'sameAs' => [
    'https://www.instagram.com/binnaeemindustries',
    'https://www.facebook.com/binnaeemindustries'
  ]
];
?>
<script type="application/ld+json">
<?php echo json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
