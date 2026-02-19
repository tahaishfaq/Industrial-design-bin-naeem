<?php
/**
 * Shared brand landing layout. Expects $brandName, $brandTagline, $brandDescription.
 * Optional: $brandLogo, $brandServices (array of [title, desc]), $brandIndustries (array of strings), $brandDifferentiators (array of [title, desc]).
 * Set $waPrefillText on the page for WhatsApp. Set $inquiryHiddenFields, $inquiryGa4* for tracking.
 */
$showBrandLogo = !empty($brandLogo);
$waCtaUrl = isset($waPrefillText) ? waUrl('brand_cta', null, $waPrefillText) : waUrl('brand_cta');
$services = isset($brandServices) && is_array($brandServices) ? $brandServices : [
  ['title' => 'Custom packaging', 'desc' => 'Tailored solutions for your product and supply chain.'],
  ['title' => 'Production &amp; finishing', 'desc' => 'High-volume production with quality controls.'],
  ['title' => 'Design &amp; prototyping', 'desc' => 'From concept to production-ready specs.'],
  ['title' => 'Logistics support', 'desc' => 'Integration with shipping and distribution.'],
];
$industries = isset($brandIndustries) && is_array($brandIndustries) ? $brandIndustries : ['FMCG', 'E-commerce', 'Retail', 'Logistics'];
$diffs = isset($brandDifferentiators) && is_array($brandDifferentiators) ? $brandDifferentiators : [
  ['title' => 'Quality assurance', 'desc' => 'Rigorous QA and compliance standards.'],
  ['title' => 'Lead times', 'desc' => 'Reliable turnaround to meet your deadlines.'],
  ['title' => 'Customization', 'desc' => 'Flexible options to match your brand and requirements.'],
];
$pagePath = isset($brandPagePath) ? $brandPagePath : '/brands/' . (isset($brandSlug) ? $brandSlug : '') . '.php';
?>
<header class="relative w-full h-[60vh] min-h-[500px] overflow-hidden flex items-end">
  <div class="absolute inset-0 z-0">
    <img alt="<?php echo htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8'); ?>" class="w-full h-full object-cover brightness-[0.5] dark:brightness-[0.35]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgcGo5xGO3N07RKZ_N1K5-Xaupso9oPY61bZ_LZaqwhX0cCE-xTzAOr8okqMJnGnwbxeWO--piZfKy7OvvsR5G_v888hsC2lkpfTKXsgZdVY7j519mI33-3t2f-ZcnoQJsF3Xxwgcj_4k64js9cOCUWOC7IKi1kA-Y3OH3oAck-5iX1qcq3IeswyZpERYfY0Bng7JF7LXmLceh3rCGocnapZ50bzcVu39XIB1sqtZXn7XSDx1y1edA_nXxT-t67gjS7O-PWf8f5o8" loading="eager" width="1600" height="900" />
    <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-black/40"></div>
  </div>
  <div class="relative z-10 w-full px-6 md:px-12 pb-20 max-w-[1600px] mx-auto flex flex-col md:flex-row md:items-end md:justify-between gap-8">
    <div>
      <span class="text-sm font-medium text-gray-400 uppercase tracking-widest block mb-4">Subsidiary</span>
      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-white"><?php echo htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8'); ?> <br/><span class="italic font-light opacity-80"><?php echo htmlspecialchars($brandTagline, ENT_QUOTES, 'UTF-8'); ?></span></h1>
      <p class="mt-6 text-gray-300 text-lg max-w-2xl"><?php echo htmlspecialchars($brandDescription, ENT_QUOTES, 'UTF-8'); ?></p>
      <div class="mt-8 flex flex-wrap gap-4">
        <a href="#inquiry" class="inline-flex items-center gap-2 glass px-6 py-3 rounded-full text-sm font-semibold text-white hover:opacity-90 transition-all">
          Get a Quote
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
        <a href="<?php echo htmlspecialchars($waCtaUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-semibold border border-white/30 text-white hover:bg-white/10 transition-all">
          WhatsApp
        </a>
      </div>
    </div>
    <?php if ($showBrandLogo): ?>
    <div class="flex-shrink-0 w-28 h-28 md:w-32 md:h-32 rounded-full border border-white/20 bg-white/5 backdrop-blur-md flex items-center justify-center p-1 overflow-hidden">
      <img src="<?php echo htmlspecialchars($brandLogo, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8'); ?>" class="w-full h-full object-cover object-center" />
    </div>
    <?php endif; ?>
  </div>
</header>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-8">Core services / product categories</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <?php foreach ($services as $s): ?>
      <div class="p-8 border border-edge rounded-2xl bg-surface hover:border-muted transition-colors">
        <h3 class="font-display text-xl text-content mb-2"><?php echo htmlspecialchars($s['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
        <p class="text-muted text-sm leading-relaxed"><?php echo htmlspecialchars($s['desc'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-16 px-6 md:px-12 bg-surface border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Industries served</h2>
    <div class="flex flex-wrap gap-3">
      <?php foreach ($industries as $ind): ?>
      <a href="../industries.php" class="px-4 py-2 rounded-full border border-edge text-sm text-content hover:bg-surface2 transition-all"><?php echo htmlspecialchars($ind, ENT_QUOTES, 'UTF-8'); ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-8">Why <?php echo htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8'); ?></h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <?php foreach ($diffs as $d): ?>
      <div class="p-8 border border-edge rounded-2xl bg-surface">
        <h3 class="font-display text-xl text-content mb-2"><?php echo htmlspecialchars($d['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
        <p class="text-muted text-sm leading-relaxed"><?php echo htmlspecialchars($d['desc'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-8">Portfolio / featured work</h2>
    <p class="text-muted">Portfolio coming soon.</p>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge" id="inquiry">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="font-display text-4xl md:text-5xl text-content mb-8">Get in <span class="italic font-light text-muted">touch</span></h2>
    <p class="text-muted mb-6">Explore our <a href="../projects.php" class="text-content underline hover:no-underline">project portfolio</a> or <a href="../contact.php" class="text-content underline hover:no-underline">contact us</a> to discuss your requirements.</p>
    <div class="max-w-xl">
      <?php
      $inquiryFormAction = '../send-inquiry.php';
      if (!isset($inquiryHiddenFields) || !is_array($inquiryHiddenFields)) {
        $inquiryHiddenFields = [
          ['name' => 'brand_name', 'value' => $brandName],
          ['name' => 'page_path', 'value' => $pagePath],
          ['name' => 'utm_source', 'value' => isset($_GET['utm_source']) ? trim(strip_tags((string) $_GET['utm_source'])) : ''],
          ['name' => 'utm_medium', 'value' => isset($_GET['utm_medium']) ? trim(strip_tags((string) $_GET['utm_medium'])) : ''],
          ['name' => 'utm_campaign', 'value' => isset($_GET['utm_campaign']) ? trim(strip_tags((string) $_GET['utm_campaign'])) : ''],
        ];
      }
      if (!isset($inquiryGa4LeadSubmit)) $inquiryGa4LeadSubmit = true;
      if (!isset($inquiryGa4BrandName)) $inquiryGa4BrandName = $brandName;
      if (!isset($inquiryGa4PagePath)) $inquiryGa4PagePath = $pagePath;
      if (!isset($inquiryGa4UtmCampaign)) $inquiryGa4UtmCampaign = isset($_GET['utm_campaign']) ? trim(strip_tags((string) $_GET['utm_campaign'])) : '';
      include INCLUDES_PATH . '/inquiry-form.php';
      ?>
    </div>
  </div>
</section>
