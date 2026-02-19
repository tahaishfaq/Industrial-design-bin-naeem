<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Industries We Serve, Naeem Group';
$description = 'Industrial solutions for FMCG, food and beverage, construction, e-commerce packaging, retail, and more.';
$canonical = 'https://binnaeemindustries.com/industries';
$currentPage = 'industries';
$showWhatsApp = true;
$waPrefillText = 'Hi, I would like an industry-specific quote.';

$compactTitle = 'Industries';
$compactSubtitle = 'Solutions tailored to each industry\'s needs';
$compactBreadcrumb = [['label' => 'Industries', 'url' => '']];
$compactPrimaryCta = ['label' => 'Get an industry-specific quote', 'url' => 'contact.php?industry=fmcg'];

$industries = [
  'fmcg' => [
    'name' => 'FMCG',
    'pain_points' => 'High-volume production demands, supply chain speed, and cost efficiency.',
    'deliver' => 'Manufacturing and packaging solutions, automated lines, and supply chain integration.',
    'compliance' => 'Quality and safety standards relevant to fast-moving consumer goods.',
    'deliverables' => 'Production lines, packaging systems, warehousing integration.',
    'capability_anchors' => ['#manufacturing', '#machinery', '#scale'],
    'brands' => ['naeem-packages' => 'Naeem Packages', 'box-pack' => 'Box Pack'],
  ],
  'food-beverage' => [
    'name' => 'Food & Beverage',
    'pain_points' => 'Hygiene-critical environments, traceability, and shelf-life requirements.',
    'deliver' => 'Hygiene-compliant packaging, filling solutions, and facility-grade infrastructure.',
    'compliance' => 'Food safety and hygiene standards; traceability where required.',
    'deliverables' => 'Packaging lines, filling equipment, clean-room solutions.',
    'capability_anchors' => ['#materials', '#quality', '#manufacturing'],
    'brands' => ['hanplas' => 'Hanplas', 'naeem-packages' => 'Naeem Packages'],
  ],
  'skincare-cosmetics' => [
    'name' => 'Skincare & Cosmetics',
    'pain_points' => 'Clean-room compliance, premium aesthetics, and regulatory requirements.',
    'deliver' => 'Clean-room compliant packaging, filling, and premium secondary packaging.',
    'compliance' => 'Cosmetic and personal care standards; GMP where applicable.',
    'deliverables' => 'Primary and secondary packaging, display units, gifting solutions.',
    'capability_anchors' => ['#materials', '#quality', '#machinery'],
    'brands' => ['box-pack' => 'Box Pack', 'hanplas' => 'Hanplas'],
  ],
  'ecommerce-packaging' => [
    'name' => 'E-commerce Packaging',
    'pain_points' => 'Durability in transit, unboxing experience, and sustainable materials.',
    'deliver' => 'E-commerce-ready packaging, protective solutions, and branded unboxing experiences.',
    'compliance' => 'Recyclability and sustainability requirements; carrier standards.',
    'deliverables' => 'Shipping cartons, protective packaging, branded boxes.',
    'capability_anchors' => ['#materials', '#manufacturing', '#scale'],
    'brands' => ['naeem-packages' => 'Naeem Packages', 'box-pack' => 'Box Pack', 'mondsub' => 'Mondsub'],
  ],
  'retail-gifting' => [
    'name' => 'Retail & Gifting',
    'pain_points' => 'Premium presentation, display readiness, and seasonal scalability.',
    'deliver' => 'Premium gifting and display packaging, modular retail solutions.',
    'compliance' => 'Retail and display standards as required.',
    'deliverables' => 'Gift boxes, display units, seasonal packaging.',
    'capability_anchors' => ['#materials', '#manufacturing'],
    'brands' => ['box-pack' => 'Box Pack', 'house-of-pinatas' => 'House of Piñatas'],
  ],
  'construction-infrastructure' => [
    'name' => 'Construction & Infrastructure',
    'pain_points' => 'Timelines, structural requirements, and multi-phase coordination.',
    'deliver' => 'Infrastructure and construction project delivery, structural and MEP scope.',
    'compliance' => 'Building codes, safety standards, and project certifications.',
    'deliverables' => 'Civil and structural work, building systems, project management.',
    'capability_anchors' => ['#manufacturing', '#machinery', '#scale'],
    'brands' => ['ns-builders' => 'NS Builders'],
  ],
];

$industrySlugs = array_keys($industries);
$firstSlug = $industrySlugs[0];

require INCLUDES_PATH . '/page-start.php';
include INCLUDES_PATH . '/compact-page-header.php';
?>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
      <aside class="lg:col-span-4">
        <h2 class="text-sm font-semibold uppercase tracking-wider text-muted mb-6">Select industry</h2>
        <nav class="space-y-2" aria-label="Industries">
          <?php foreach ($industries as $slug => $ind): ?>
          <button type="button" class="industry-tab w-full text-left px-6 py-4 rounded-2xl border border-edge text-content font-medium transition-all hover:bg-surface2 focus:outline-none focus:ring-2 focus:ring-muted <?php echo $slug === $firstSlug ? 'bg-surface2 border-muted' : 'bg-surface'; ?>" data-industry="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo htmlspecialchars($ind['name'], ENT_QUOTES, 'UTF-8'); ?>
          </button>
          <?php endforeach; ?>
        </nav>
      </aside>
      <div class="lg:col-span-8">
        <?php foreach ($industries as $slug => $ind): ?>
        <div class="industry-detail py-6 <?php echo $slug !== $firstSlug ? 'hidden' : ''; ?>" id="detail-<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>" data-industry="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>">
          <h3 class="font-display text-3xl md:text-4xl text-content mb-8"><?php echo htmlspecialchars($ind['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
          <div class="space-y-8">
            <div>
              <h4 class="text-sm font-semibold uppercase tracking-wider text-muted mb-2">Pain points</h4>
              <p class="text-content"><?php echo htmlspecialchars($ind['pain_points'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div>
              <h4 class="text-sm font-semibold uppercase tracking-wider text-muted mb-2">What we deliver</h4>
              <p class="text-content"><?php echo htmlspecialchars($ind['deliver'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div>
              <h4 class="text-sm font-semibold uppercase tracking-wider text-muted mb-2">Compliance</h4>
              <p class="text-content"><?php echo htmlspecialchars($ind['compliance'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div>
              <h4 class="text-sm font-semibold uppercase tracking-wider text-muted mb-2">Typical deliverables</h4>
              <p class="text-content"><?php echo htmlspecialchars($ind['deliverables'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div>
              <h4 class="text-sm font-semibold uppercase tracking-wider text-muted mb-3">Relevant capabilities</h4>
              <p class="text-muted text-sm mb-2">See <a href="capabilities.php" class="text-content underline hover:no-underline">Capabilities</a> for manufacturing, machinery, materials, quality, and scale.</p>
              <div class="flex flex-wrap gap-2">
                <?php foreach ($ind['capability_anchors'] as $anchor): ?>
                <a href="capabilities.php<?php echo htmlspecialchars($anchor, ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-2 rounded-full border border-edge text-sm text-content hover:bg-surface2 transition-all"><?php echo htmlspecialchars(trim($anchor, '#'), ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
              </div>
            </div>
            <div>
              <h4 class="text-sm font-semibold uppercase tracking-wider text-muted mb-3">Relevant brands</h4>
              <div class="flex flex-wrap gap-2">
                <?php foreach ($ind['brands'] as $brandSlug => $brandName): ?>
                <a href="brands/<?php echo htmlspecialchars($brandSlug, ENT_QUOTES, 'UTF-8'); ?>.php" class="px-4 py-2 rounded-full border border-edge text-sm text-content hover:bg-surface2 transition-all"><?php echo htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <div class="mt-12">
            <a href="contact.php?industry=<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>" class="industry-quote-cta inline-flex items-center gap-2 glass px-6 py-3 rounded-full text-sm font-semibold text-content hover:opacity-90 transition-all" data-industry="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>">
              Get an industry-specific quote
              <span class="material-icons-outlined text-sm">arrow_forward</span>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<script>
(function() {
  var tabs = document.querySelectorAll('.industry-tab');
  var details = document.querySelectorAll('.industry-detail');
  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      var slug = tab.getAttribute('data-industry');
      tabs.forEach(function(t) {
        t.classList.remove('bg-surface2', 'border-muted');
        t.classList.add('bg-surface');
        if (t.getAttribute('data-industry') === slug) {
          t.classList.add('bg-surface2', 'border-muted');
          t.classList.remove('bg-surface');
        }
      });
      details.forEach(function(d) {
        d.classList.add('hidden');
        if (d.getAttribute('data-industry') === slug) d.classList.remove('hidden');
      });
      var cta = document.querySelector('.industry-quote-cta[data-industry="' + slug + '"]');
      if (cta) {
        cta.href = 'contact.php?industry=' + encodeURIComponent(slug);
      }
    });
  });
  document.querySelectorAll('.industry-quote-cta').forEach(function(a) {
    a.addEventListener('click', function() {
      if (typeof gtag === 'function') {
        gtag('event', 'generate_lead', { event_category: 'industry_quote', event_label: a.getAttribute('data-industry') });
      }
    });
  });
})();
</script>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
