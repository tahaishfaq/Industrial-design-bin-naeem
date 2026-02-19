<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Industrial Projects and Case Studies, Naeem Group';
$description = 'Case studies showing industrial delivery, packaging, manufacturing, and infrastructure outcomes. Request a quote.';
$canonical = 'https://binnaeemindustries.com/projects';
$currentPage = 'projects';
$showWhatsApp = true;
$waPrefillText = 'Hi, I would like to request a quote for a similar project.';

$compactTitle = 'Projects';
$compactSubtitle = 'Case studies and work delivered across our brands';
$compactBreadcrumb = [['label' => 'Projects', 'url' => '']];
$compactPrimaryCta = ['label' => 'Request a Quote', 'url' => 'contact.php'];
$compactSecondaryCta = ['label' => 'WhatsApp', 'url' => waUrl('floating', null, $waPrefillText)];

$projects = [
  [
    'id' => 'automated-manufacturing',
    'title' => 'Automated Manufacturing Facility',
    'industry' => 'fmcg',
    'brand' => 'naeem-packages',
    'capability' => 'manufacturing',
    'location' => 'Lahore, Pakistan',
    'scope' => 'Full Production Line',
    'timeline' => '18 Months',
    'outcomes' => '40% Efficiency Increase',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBxmpkE7Vmn9bcdrShBbjhuWneY1D0Ie_TQRlMvjoRhEjjwneVaRIe9NOI98RbJdQI2kxe4ZYB-qUwyU9Xpw8kQbtODZdmf3Dnk9_vBtU1aaIsWN9uNxqLozupOhjkL4ENMgFmjeuDzBjUInjRLE5XvA7TiLWKYd0Ei2Tw1rKhMCNTiXJGnvHD2flwCww2rwxiwHjzrZ2GVRMF1klav4YvT2sQDEivP4M87tj9bJVt2UpbgdoxjSBPYyYSHdyQvgaQvg2w9xqiGchE',
  ],
  [
    'id' => 'packaging-solutions-hub',
    'title' => 'Packaging Solutions Hub',
    'industry' => 'consumer-goods',
    'brand' => 'box-pack',
    'capability' => 'packaging',
    'location' => 'Karachi, Pakistan',
    'scope' => 'Design and Production',
    'timeline' => '12 Months',
    'outcomes' => 'Scalable Operations',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDdo_fFfBNLBVSeVnMqsJYfWPqx2tQCeiHnBeVdmTGdcrsrnLuumD_uCAhhK3sPtGSXTif5u0QF9A0W2y4e6slVbEcOD5B-pomHxpm3f1kL2VKxf7SiXewulB4zhPEXo9DRXkJNFa-pGL-sJTkBziuohr1B2BRyYVngJVstjfkCX6kFcabukz6A16yrEBnn2wYvopefcU32w1QFSPoPX4hz_WmqvTbq-W2WdFU_1Wj9KPs265nf149pGsniaOLwchv6SqoDmbykrzE',
  ],
  [
    'id' => 'infrastructure-development',
    'title' => 'Infrastructure Development',
    'industry' => 'construction',
    'brand' => 'ns-builders',
    'capability' => 'construction',
    'location' => 'Islamabad, Pakistan',
    'scope' => 'Multi Phase Complex',
    'timeline' => '24 Months',
    'outcomes' => 'On Time Delivery',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBN13H0psPt5cKfpbwGYETXbKT9-tJw6XLlFIp09Ubh50ZhcnqB9FQKQHeLa5gDWLte_fPw7mw7grCd7cvjb0L3dyTo09dph_ADEHjai54ixLRO3rDV5Hhlr2YnoSYH6ZVISTdiikmBhJxb0tW4vgePKX31QE4ULQC9DwxYtcwnid3cvl8gDZFbNCu-nYw55W5i4eKUDqSaASdZ18qKfaJamvBNrRw6ph8etNc9MgYdBwIbOKS_rhQTKtvau2F_qUv_84BlNcl8Ouo',
  ],
  [
    'id' => 'logistics-center',
    'title' => 'Logistics Center',
    'industry' => 'logistics',
    'brand' => '',
    'capability' => 'logistics',
    'location' => 'Faisalabad, Pakistan',
    'scope' => 'Warehouse and Distribution',
    'timeline' => '14 Months',
    'outcomes' => 'Streamlined Operations',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB0bikdpbTnJ3JPPNA0q3fKk9Dq1kLKuoXvLzBYdGrkCcm0CRu0iKMh35v_CUD3YFx6wSIEev3Pm8ZOHHvl4YVLHRNFgGwhp9UGXpT6_4aijCjld_fKddCFyVoEABYUta4Q85wyubBj-wXbcCyvUaA-dgBXNu_OZFc6sdPmTr1TE-WNtA2Qk1MIah20aA04hB25OX-y4ZGTY4VDDgCztn2TMbVy8zFcezieHpfAAMTHgfHL0oZJrD2l6X6FekGrLtXgsMEuTZByRQU',
  ],
  [
    'id' => 'energy-solutions',
    'title' => 'Energy Solutions Installation',
    'industry' => 'energy',
    'brand' => '',
    'capability' => 'energy',
    'location' => 'Multan, Pakistan',
    'scope' => 'Solar Power System',
    'timeline' => '10 Months',
    'outcomes' => 'Sustainable Power',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBxmpkE7Vmn9bcdrShBbjhuWneY1D0Ie_TQRlMvjoRhEjjwneVaRIe9NOI98RbJdQI2kxe4ZYB-qUwyU9Xpw8kQbtODZdmf3Dnk9_vBtU1aaIsWN9uNxqLozupOhjkL4ENMgFmjeuDzBjUInjRLE5XvA7TiLWKYd0Ei2Tw1rKhMCNTiXJGnvHD2flwCww2rwxiwHjzrZ2GVRMF1klav4YvT2sQDEivP4M87tj9bJVt2UpbgdoxjSBPYyYSHdyQvgaQvg2w9xqiGchE',
  ],
  [
    'id' => 'food-processing-plant',
    'title' => 'Food Processing Plant',
    'industry' => 'food-beverage',
    'brand' => 'hanplas',
    'capability' => 'manufacturing',
    'location' => 'Gujranwala, Pakistan',
    'scope' => 'Complete Facility',
    'timeline' => '20 Months',
    'outcomes' => 'Hygiene Certified',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDdo_fFfBNLBVSeVnMqsJYfWPqx2tQCeiHnBeVdmTGdcrsrnLuumD_uCAhhK3sPtGSXTif5u0QF9A0W2y4e6slVbEcOD5B-pomHxpm3f1kL2VKxf7SiXewulB4zhPEXo9DRXkJNFa-pGL-sJTkBziuohr1B2BRyYVngJVstjfkCX6kFcabukz6A16yrEBnn2wYvopefcU32w1QFSPoPX4hz_WmqvTbq-W2WdFU_1Wj9KPs265nf149pGsniaOLwchv6SqoDmbykrzE',
  ],
];

$brandLabels = [
  'naeem-packages' => 'Naeem Packages',
  'box-pack' => 'Box Pack',
  'mondsub' => 'Mondsub',
  'ns-builders' => 'NS Builders',
  'house-of-pinatas' => 'House of Piñatas',
  'hanplas' => 'Hanplas',
];
$industryLabels = [
  'fmcg' => 'FMCG Manufacturing',
  'consumer-goods' => 'Consumer Goods',
  'construction' => 'Construction',
  'logistics' => 'Supply Chain',
  'energy' => 'Renewable Energy',
  'food-beverage' => 'Food and Beverage',
];
$capabilityLabels = [
  'manufacturing' => 'Manufacturing',
  'packaging' => 'Packaging',
  'construction' => 'Construction',
  'logistics' => 'Logistics',
  'energy' => 'Energy',
];

require INCLUDES_PATH . '/page-start.php';
include INCLUDES_PATH . '/compact-page-header.php';
?>

<section class="py-12 px-6 md:px-12 bg-canvas border-b border-edge">
  <div class="max-w-[1600px] mx-auto">
    <p class="text-sm font-medium text-muted mb-4">Filter by</p>
    <div class="flex flex-col gap-6">
      <div>
        <span class="text-xs uppercase tracking-wider text-muted mr-3">Industry:</span>
        <div class="flex flex-wrap gap-2 mt-2" id="filter-industry">
          <button type="button" class="projects-filter-chip px-4 py-2 rounded-full border border-edge text-sm font-medium text-content hover:bg-surface2 transition-all" data-value="">All</button>
          <?php foreach ($industryLabels as $slug => $label): ?>
          <button type="button" class="projects-filter-chip px-4 py-2 rounded-full border border-edge text-sm font-medium text-muted hover:bg-surface2 hover:text-content transition-all" data-filter="industry" data-value="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></button>
          <?php endforeach; ?>
        </div>
      </div>
      <div>
        <span class="text-xs uppercase tracking-wider text-muted mr-3">Brand:</span>
        <div class="flex flex-wrap gap-2 mt-2" id="filter-brand">
          <button type="button" class="projects-filter-chip px-4 py-2 rounded-full border border-edge text-sm font-medium text-content hover:bg-surface2 transition-all" data-value="">All</button>
          <?php foreach ($brandLabels as $slug => $label): ?>
          <button type="button" class="projects-filter-chip px-4 py-2 rounded-full border border-edge text-sm font-medium text-muted hover:bg-surface2 hover:text-content transition-all" data-filter="brand" data-value="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></button>
          <?php endforeach; ?>
        </div>
      </div>
      <div>
        <span class="text-xs uppercase tracking-wider text-muted mr-3">Capability:</span>
        <div class="flex flex-wrap gap-2 mt-2" id="filter-capability">
          <button type="button" class="projects-filter-chip px-4 py-2 rounded-full border border-edge text-sm font-medium text-content hover:bg-surface2 transition-all" data-value="">All</button>
          <?php foreach ($capabilityLabels as $slug => $label): ?>
          <button type="button" class="projects-filter-chip px-4 py-2 rounded-full border border-edge text-sm font-medium text-muted hover:bg-surface2 hover:text-content transition-all" data-filter="capability" data-value="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></button>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16" id="projects-grid">
      <?php foreach ($projects as $p):
        $ctaUrl = !empty($p['brand']) ? 'brands/' . $p['brand'] . '.php#inquiry' : 'contact.php';
        $ctaParams = [];
        if (!empty($p['brand'])) $ctaParams['brand'] = $p['brand'];
        if (!empty($p['industry'])) $ctaParams['industry'] = $p['industry'];
        $ctaParams['ref'] = 'project';
        $ctaParams['project'] = $p['title'];
        if ($ctaUrl === 'contact.php') $ctaUrl .= '?' . http_build_query($ctaParams);
        else $ctaUrl .= (strpos($ctaUrl, '?') !== false ? '&' : '?') . http_build_query($ctaParams);
        $brandDisplay = !empty($p['brand']) ? $brandLabels[$p['brand']] : '—';
      ?>
      <div class="project-card group border border-edge rounded-2xl overflow-hidden bg-surface hover:border-muted transition-all duration-300" data-industry="<?php echo htmlspecialchars($p['industry'], ENT_QUOTES, 'UTF-8'); ?>" data-brand="<?php echo htmlspecialchars($p['brand'], ENT_QUOTES, 'UTF-8'); ?>" data-capability="<?php echo htmlspecialchars($p['capability'], ENT_QUOTES, 'UTF-8'); ?>">
        <div class="h-64 overflow-hidden">
          <img alt="<?php echo htmlspecialchars($p['title'], ENT_QUOTES, 'UTF-8'); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="<?php echo htmlspecialchars($p['image'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy" width="600" height="256" />
        </div>
        <div class="p-8">
          <h3 class="font-display text-2xl text-content mb-4"><?php echo htmlspecialchars($p['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
          <div class="space-y-3 mb-6 text-sm">
            <div class="flex justify-between">
              <span class="text-muted">Industry:</span>
              <span class="text-content font-medium"><?php echo htmlspecialchars($industryLabels[$p['industry']] ?? $p['industry'], ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <div class="flex justify-between">
              <span class="text-muted">Delivered by:</span>
              <span class="text-content font-medium"><?php echo htmlspecialchars($brandDisplay, ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <div class="flex justify-between">
              <span class="text-muted">Location:</span>
              <span class="text-content font-medium"><?php echo htmlspecialchars($p['location'], ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <div class="flex justify-between">
              <span class="text-muted">Scope:</span>
              <span class="text-content font-medium"><?php echo htmlspecialchars($p['scope'], ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <div class="flex justify-between">
              <span class="text-muted">Timeline:</span>
              <span class="text-content font-medium"><?php echo htmlspecialchars($p['timeline'], ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <div class="flex justify-between">
              <span class="text-muted">Outcomes:</span>
              <span class="text-content font-medium"><?php echo htmlspecialchars($p['outcomes'], ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
          </div>
          <a href="<?php echo htmlspecialchars($ctaUrl, ENT_QUOTES, 'UTF-8'); ?>" class="project-cta inline-flex items-center gap-2 w-full justify-center px-6 py-3 bg-content text-surface rounded-full text-sm font-semibold hover:opacity-90 transition-all" data-project="<?php echo htmlspecialchars($p['title'], ENT_QUOTES, 'UTF-8'); ?>" data-brand="<?php echo htmlspecialchars($p['brand'], ENT_QUOTES, 'UTF-8'); ?>" data-industry="<?php echo htmlspecialchars($p['industry'], ENT_QUOTES, 'UTF-8'); ?>">
            Request a similar project
            <span class="material-icons-outlined text-sm">arrow_forward</span>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface">
  <div class="max-w-[1600px] mx-auto">
    <div class="max-w-3xl mx-auto text-center">
      <span class="text-sm font-medium text-muted block mb-4">Confidentiality</span>
      <h2 class="font-display text-3xl md:text-4xl text-content mb-6">Client Confidentiality and NDAs</h2>
      <p class="text-muted text-lg leading-relaxed mb-8">Many of our projects operate under strict non disclosure agreements. Client names and specific project details may be withheld to protect proprietary information. Detailed case studies and technical documentation are available on request for qualified prospects under appropriate confidentiality terms.</p>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="font-display text-4xl md:text-5xl text-content mb-6">Ready to Start Your Project?</h2>
      <p class="text-muted text-lg leading-relaxed mb-8">Discuss how we can deliver solutions that meet your requirements and drive measurable results.</p>
      <a href="contact.php" class="inline-flex items-center gap-3 bg-content text-surface px-8 py-4 rounded-full text-lg font-semibold hover:opacity-90 transition-all">
        Book a Consultation
        <span class="material-icons-outlined text-sm">arrow_forward</span>
      </a>
    </div>
  </div>
</section>

<script>
(function() {
  var filters = { industry: '', brand: '', capability: '' };
  function updateChips(containerId, key) {
    var container = document.getElementById(containerId);
    if (!container) return;
    var buttons = container.querySelectorAll('.projects-filter-chip');
    buttons.forEach(function(btn) {
      var val = btn.getAttribute('data-value') || '';
      if (val === filters[key]) {
        btn.classList.remove('text-muted');
        btn.classList.add('text-content');
        btn.classList.add('bg-surface2');
      } else {
        btn.classList.add('text-muted');
        btn.classList.remove('text-content');
        btn.classList.remove('bg-surface2');
      }
    });
  }
  function filterCards() {
    var cards = document.querySelectorAll('.project-card');
    cards.forEach(function(card) {
      var show = true;
      if (filters.industry && card.getAttribute('data-industry') !== filters.industry) show = false;
      if (filters.brand && card.getAttribute('data-brand') !== filters.brand) show = false;
      if (filters.capability && card.getAttribute('data-capability') !== filters.capability) show = false;
      card.style.display = show ? '' : 'none';
    });
  }
  document.querySelectorAll('.projects-filter-chip').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var value = btn.getAttribute('data-value') || '';
      var filterType = btn.getAttribute('data-filter');
      if (!filterType) {
        var p = btn.closest('[id^="filter-"]');
        if (p) filterType = p.id.replace('filter-', '');
      }
      if (filterType && filters.hasOwnProperty(filterType)) filters[filterType] = value;
      updateChips('filter-industry', 'industry');
      updateChips('filter-brand', 'brand');
      updateChips('filter-capability', 'capability');
      filterCards();
    });
  });
  document.querySelectorAll('.project-cta').forEach(function(a) {
    a.addEventListener('click', function() {
      if (typeof gtag === 'function') {
        gtag('event', 'generate_lead', {
          event_category: 'project_cta',
          event_label: a.getAttribute('data-project'),
          brand: a.getAttribute('data-brand') || '',
          industry: a.getAttribute('data-industry') || ''
        });
      }
    });
  });
})();
</script>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
