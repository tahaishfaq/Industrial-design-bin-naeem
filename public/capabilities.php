<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Industrial Manufacturing and Material Capabilities, Naeem Group';
$description = 'Precision manufacturing, advanced materials, production scale, and quality systems for industrial clients.';
$canonical = 'https://binnaeemindustries.com/capabilities';
$currentPage = 'capabilities';
$showWhatsApp = true;
$waPrefillText = 'Hi, I would like to request the Capability Deck or Company Profile.';

$compactTitle = 'Capabilities';
$compactSubtitle = 'Manufacturing strengths, materials, machinery, and operational scale';
$compactBreadcrumb = [['label' => 'Capabilities', 'url' => '']];
$compactPrimaryCta = ['label' => 'Request Capability Deck / Company Profile', 'url' => 'contact.php'];
$compactSecondaryCta = ['label' => 'Book a Call', 'url' => 'contact.php'];

$hasCapabilityPdf = file_exists(__DIR__ . '/downloads/capability-statement.pdf');
$hasMaterialSpecPdf = file_exists(__DIR__ . '/downloads/material-spec-sheet.pdf');

require INCLUDES_PATH . '/page-start.php';
include INCLUDES_PATH . '/compact-page-header.php';
?>

<section class="py-24 px-6 md:px-12 bg-canvas" id="manufacturing">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Manufacturing Capabilities</h2>
    <p class="text-muted max-w-3xl mb-12">Processes, production types, and services across our facilities.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border-t border-edge pt-12">
      <div class="group border border-edge rounded-2xl p-10 bg-surface hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6 text-content"><span class="material-icons-outlined text-2xl">precision_manufacturing</span></div>
        <h3 class="font-display text-2xl text-content mb-4">Automated Assembly</h3>
        <p class="text-muted text-sm leading-relaxed">High-volume assembly lines with precision tolerances for automotive and industrial components.</p>
      </div>
      <div class="group border border-edge rounded-2xl p-10 bg-surface hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6 text-content"><span class="material-icons-outlined text-2xl">architecture</span></div>
        <h3 class="font-display text-2xl text-content mb-4">Structural Fabrication</h3>
        <p class="text-muted text-sm leading-relaxed">Heavy fabrication for construction and industrial plants. Laser cutting, welding, and finishing.</p>
      </div>
      <div class="group border border-edge rounded-2xl p-10 bg-surface hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6 text-content"><span class="material-icons-outlined text-2xl">factory</span></div>
        <h3 class="font-display text-2xl text-content mb-4">Packaging &amp; Converting</h3>
        <p class="text-muted text-sm leading-relaxed">Corrugated, folding cartons, and flexible packaging production and finishing.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface border-t border-edge" id="machinery">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Machinery &amp; Facilities</h2>
    <p class="text-muted max-w-3xl mb-12">Equipment categories and facility overview.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="p-8 border border-edge rounded-2xl bg-canvas">
        <h4 class="font-display text-xl text-content mb-2">CNC &amp; Precision</h4>
        <p class="text-muted text-sm">CNC machining, precision tooling, and quality-controlled production cells.</p>
      </div>
      <div class="p-8 border border-edge rounded-2xl bg-canvas">
        <h4 class="font-display text-xl text-content mb-2">Converting &amp; Finishing</h4>
        <p class="text-muted text-sm">Printing, coating, laminating, and finishing lines for packaging and materials.</p>
      </div>
      <div class="p-8 border border-edge rounded-2xl bg-canvas">
        <h4 class="font-display text-xl text-content mb-2">Material Handling</h4>
        <p class="text-muted text-sm">Automated handling, warehousing, and logistics integration.</p>
      </div>
      <div class="p-8 border border-edge rounded-2xl bg-canvas">
        <h4 class="font-display text-xl text-content mb-2">Quality &amp; Testing</h4>
        <p class="text-muted text-sm">Dedicated QA and testing facilities for materials and finished goods.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge" id="materials">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Materials &amp; Finishes</h2>
    <p class="text-muted max-w-3xl mb-12">Paper, board, plastics, inks, and coatings used in our operations.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="border-t border-edge pt-8">
        <h4 class="font-display text-xl text-content mb-2">Paper &amp; Board</h4>
        <p class="text-muted text-sm leading-relaxed">Kraft, recycled, and specialty boards. Folding carton and corrugated grades.</p>
      </div>
      <div class="border-t border-edge pt-8">
        <h4 class="font-display text-xl text-content mb-2">Plastics &amp; Films</h4>
        <p class="text-muted text-sm leading-relaxed">Flexible packaging films, rigid plastics, and sustainable alternatives where specified.</p>
      </div>
      <div class="border-t border-edge pt-8">
        <h4 class="font-display text-xl text-content mb-2">Inks &amp; Coatings</h4>
        <p class="text-muted text-sm leading-relaxed">Print-ready and food-safe inks and coatings. Compliance with relevant standards.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface border-t border-edge" id="quality">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Quality &amp; Process Controls</h2>
    <p class="text-muted max-w-3xl mb-12">QA checkpoints, tolerances, batch testing, and inspection stages.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 border border-edge rounded-2xl bg-canvas">
        <h4 class="font-display text-xl text-content mb-3">In-Process Controls</h4>
        <p class="text-muted text-sm leading-relaxed mb-4">Inline inspection, dimensional checks, and process monitoring at key stages.</p>
        <ul class="space-y-2 text-sm text-muted">
          <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-muted"></span> Incoming material verification</li>
          <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-muted"></span> In-process sampling and batch records</li>
          <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-muted"></span> Final inspection and release</li>
        </ul>
      </div>
      <div class="p-8 border border-edge rounded-2xl bg-canvas">
        <h4 class="font-display text-xl text-content mb-3">Testing &amp; Compliance</h4>
        <p class="text-muted text-sm leading-relaxed mb-4">Batch testing and documentation aligned with customer and regulatory requirements.</p>
        <p class="text-muted text-sm">See our <a href="certifications.php" class="text-content underline hover:no-underline">certifications</a> for quality and safety standards.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge" id="scale">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Scale &amp; Coverage</h2>
    <p class="text-muted max-w-3xl mb-12">Capacity, locations, lead times, and export coverage.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
      <div class="p-8 border border-edge rounded-2xl bg-surface">
        <span class="block text-4xl font-display text-content mb-2">Pakistan</span>
        <span class="text-sm text-muted uppercase tracking-widest">Primary operations</span>
      </div>
      <div class="p-8 border border-edge rounded-2xl bg-surface">
        <span class="block text-4xl font-display text-content mb-2">MENA</span>
        <span class="text-sm text-muted uppercase tracking-widest">Export coverage</span>
      </div>
      <div class="p-8 border border-edge rounded-2xl bg-surface">
        <span class="block text-4xl font-display text-content mb-2">Lead times</span>
        <span class="text-sm text-muted uppercase tracking-widest">Project-dependent</span>
      </div>
      <div class="p-8 border border-edge rounded-2xl bg-surface">
        <span class="block text-4xl font-display text-content mb-2">24/7</span>
        <span class="text-sm text-muted uppercase tracking-widest">Operational capacity</span>
      </div>
    </div>
    <div class="flex flex-wrap gap-6 items-center border-t border-edge pt-12">
      <p class="text-muted">See <a href="industries.php" class="text-content underline hover:no-underline">industries we support</a> and <a href="projects.php" class="text-content underline hover:no-underline">projects by capability</a>.</p>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Downloadables</h2>
    <div class="flex flex-col sm:flex-row gap-6">
      <?php if ($hasCapabilityPdf): ?>
      <a href="downloads/capability-statement.pdf" download class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-edge text-content font-semibold hover:bg-surface2 transition-all">
        <span class="material-icons-outlined text-lg">download</span>
        Capability Statement PDF
      </a>
      <?php else: ?>
      <span class="text-muted text-sm">Capability Statement: Available on request.</span>
      <a href="contact.php" class="inline-flex items-center gap-2 px-6 py-3 rounded-full glass text-content font-semibold hover:opacity-90 transition-all w-fit">Request via inquiry</a>
      <?php endif; ?>
      <?php if ($hasMaterialSpecPdf): ?>
      <a href="downloads/material-spec-sheet.pdf" download class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-edge text-content font-semibold hover:bg-surface2 transition-all">
        <span class="material-icons-outlined text-lg">download</span>
        Material Spec Sheet
      </a>
      <?php else: ?>
      <span class="text-muted text-sm">Material Spec Sheet: Available on request.</span>
      <a href="contact.php" class="inline-flex items-center gap-2 px-6 py-3 rounded-full glass text-content font-semibold hover:opacity-90 transition-all w-fit">Request via inquiry</a>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
