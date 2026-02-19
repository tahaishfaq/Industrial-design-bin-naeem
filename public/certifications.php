<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Certifications and Quality Assurance, Naeem Group';
$description = 'Quality standards, safety protocols, QA systems, and compliance documentation.';
$canonical = 'https://binnaeemindustries.com/certifications';
$currentPage = 'certifications';
$showWhatsApp = true;

$compactTitle = 'Certifications & Quality Assurance';
$compactSubtitle = 'Quality standards, safety protocols, and QA systems';
$compactBreadcrumb = [['label' => 'Certifications', 'url' => '']];
$compactPrimaryCta = ['label' => 'Request Compliance Pack', 'url' => 'contact.php'];

$certDir = __DIR__ . '/downloads/certificates';
$certs = [
  ['key' => 'iso-9001', 'title' => 'ISO 9001', 'org' => 'International Organization for Standardization', 'desc' => 'Quality management systems certification ensuring consistent processes and continuous improvement across all operations.', 'icon' => 'verified'],
  ['key' => 'safety-excellence', 'title' => 'Safety Excellence Award', 'org' => 'Global Safety Council', 'desc' => 'Recognition for robust occupational health and safety protocols and zero incident performance across all facilities.', 'icon' => 'health_and_safety'],
  ['key' => 'environmental', 'title' => 'Environmental Management', 'org' => 'Sustainable Manufacturing Standards', 'desc' => 'Sustainable manufacturing and environmental stewardship aligned with international standards and best practices.', 'icon' => 'eco'],
  ['key' => 'iso-14001', 'title' => 'ISO 14001', 'org' => 'International Organization for Standardization', 'desc' => 'Environmental management systems ensuring sustainable operations and compliance with environmental regulations.', 'icon' => 'factory'],
  ['key' => 'iso-45001', 'title' => 'ISO 45001', 'org' => 'International Organization for Standardization', 'desc' => 'Occupational health and safety management systems ensuring worker safety and regulatory compliance.', 'icon' => 'security'],
  ['key' => 'qa-program', 'title' => 'Quality Assurance Program', 'org' => 'Internal Quality Standards', 'desc' => 'Comprehensive quality assurance program with regular audits and continuous improvement processes.', 'icon' => 'verified_user'],
];

require INCLUDES_PATH . '/page-start.php';
include INCLUDES_PATH . '/compact-page-header.php';
?>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge" id="quality-standards">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Quality Standards</h2>
    <p class="text-muted max-w-3xl text-lg leading-relaxed mb-8">We maintain quality management systems aligned with international standards. Our operations are subject to internal and external audits to ensure consistent quality, traceability, and continuous improvement.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 border border-edge rounded-2xl bg-surface">
        <h4 class="font-display text-xl text-content mb-2">Management systems</h4>
        <p class="text-muted text-sm leading-relaxed">Quality, environment, and occupational health and safety management systems where applicable to our scope of work.</p>
      </div>
      <div class="p-8 border border-edge rounded-2xl bg-surface">
        <h4 class="font-display text-xl text-content mb-2">Documentation &amp; audits</h4>
        <p class="text-muted text-sm leading-relaxed">Documented procedures, audit cycles, and corrective action processes to maintain and improve performance.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface border-t border-edge" id="safety-protocols">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Manufacturing Safety Protocols</h2>
    <p class="text-muted max-w-3xl text-lg leading-relaxed mb-8">Safety is integral to our manufacturing operations. We implement protocols for equipment safety, personal protective equipment, hazard identification, training, and incident reporting. Our facilities follow applicable occupational health and safety standards.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="p-6 border border-edge rounded-2xl bg-canvas">
        <h4 class="font-display text-lg text-content mb-2">Equipment &amp; PPE</h4>
        <p class="text-muted text-sm leading-relaxed">Safe use of machinery and mandatory PPE where required.</p>
      </div>
      <div class="p-6 border border-edge rounded-2xl bg-canvas">
        <h4 class="font-display text-lg text-content mb-2">Training &amp; awareness</h4>
        <p class="text-muted text-sm leading-relaxed">Regular safety training and awareness programs for staff.</p>
      </div>
      <div class="p-6 border border-edge rounded-2xl bg-canvas">
        <h4 class="font-display text-lg text-content mb-2">Incident &amp; improvement</h4>
        <p class="text-muted text-sm leading-relaxed">Incident reporting and corrective actions to prevent recurrence.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge" id="qa-process">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">QA Process &amp; Statement</h2>
    <p class="text-muted max-w-3xl mb-12">Our quality assurance process is built on defined stages from incoming materials to final release.</p>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="relative">
        <span class="block text-4xl font-display text-content mb-2">01</span>
        <h4 class="font-display text-xl text-content mb-2">Incoming</h4>
        <p class="text-muted text-sm leading-relaxed">Verification of materials and inputs against specifications and supplier documentation.</p>
        <div class="hidden md:block absolute top-8 left-full h-[1px] bg-edge" style="width: calc(100% + 2rem);"></div>
      </div>
      <div class="relative">
        <span class="block text-4xl font-display text-content mb-2">02</span>
        <h4 class="font-display text-xl text-content mb-2">In-process</h4>
        <p class="text-muted text-sm leading-relaxed">Monitoring and controls at critical process stages with documented checkpoints.</p>
        <div class="hidden md:block absolute top-8 left-full w-full h-[1px] bg-edge" style="width: calc(100% + 2rem);"></div>
      </div>
      <div class="relative">
        <span class="block text-4xl font-display text-content mb-2">03</span>
        <h4 class="font-display text-xl text-content mb-2">Inspection &amp; testing</h4>
        <p class="text-muted text-sm leading-relaxed">Final inspection and testing against acceptance criteria before release.</p>
        <div class="hidden md:block absolute top-8 left-full w-full h-[1px] bg-edge" style="width: calc(100% + 2rem);"></div>
      </div>
      <div>
        <span class="block text-4xl font-display text-content mb-2">04</span>
        <h4 class="font-display text-xl text-content mb-2">Release &amp; documentation</h4>
        <p class="text-muted text-sm leading-relaxed">Release for delivery with traceability and documentation as required.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row gap-12 md:gap-24 mb-12">
      <div class="md:w-1/4">
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content">Certifications</h3>
      </div>
      <div class="md:w-3/4">
        <p class="text-muted text-lg leading-relaxed max-w-2xl mb-12">Industry-recognized certifications that support our commitment to quality, safety, and environmental responsibility.</p>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      <?php foreach ($certs as $c):
        $hasPdf = file_exists($certDir . '/' . $c['key'] . '.pdf');
      ?>
      <div class="p-10 border border-edge rounded-2xl bg-canvas hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-content"><?php echo htmlspecialchars($c['icon'], ENT_QUOTES, 'UTF-8'); ?></span></div>
        <h3 class="font-display text-2xl text-content mb-2"><?php echo htmlspecialchars($c['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
        <p class="text-muted text-xs mb-4"><?php echo htmlspecialchars($c['org'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p class="text-muted text-sm leading-relaxed mb-4"><?php echo htmlspecialchars($c['desc'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p class="text-muted text-xs mb-2">Status: <span class="text-green-600 dark:text-green-400 font-medium">Active</span></p>
        <?php if ($hasPdf): ?>
        <a href="downloads/certificates/<?php echo htmlspecialchars($c['key'], ENT_QUOTES, 'UTF-8'); ?>.pdf" download class="inline-flex items-center gap-2 text-xs font-semibold text-content hover:underline">
          Download Certificate PDF
          <span class="material-icons-outlined text-sm">download</span>
        </a>
        <?php else: ?>
        <p class="text-muted text-xs">Available on request.</p>
        <a href="contact.php" class="inline-flex items-center gap-2 text-xs font-semibold text-content hover:underline mt-1">Request via contact</a>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="max-w-3xl mx-auto text-center">
      <p class="text-muted text-sm leading-relaxed mb-8">Certificates and audit documentation are available on request.</p>
      <a href="contact.php" class="inline-flex items-center gap-3 bg-content text-surface px-8 py-4 rounded-full text-lg font-semibold hover:opacity-90 transition-all">
        Request Compliance Pack
        <span class="material-icons-outlined text-sm">arrow_forward</span>
      </a>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
