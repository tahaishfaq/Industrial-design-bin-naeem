<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Leadership and Company Overview, Naeem Group';
$description = 'Our leadership team, mission, values, and commitment to industrial excellence and safety.';
$canonical = 'https://binnaeemindustries.com/leadership';
$currentPage = 'leadership';
$showWhatsApp = true;

$compactTitle = 'Leadership';
$compactSubtitle = 'Vision, governance, and the leadership behind our brands';
$compactBreadcrumb = [['label' => 'Leadership', 'url' => '']];

require INCLUDES_PATH . '/page-start.php';
include INCLUDES_PATH . '/compact-page-header.php';
?>

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-32">
      <div class="flex flex-col">
        <span class="text-sm font-medium text-muted block mb-6 border-b border-edge pb-2 w-full">Vision</span>
        <h2 class="font-display text-4xl md:text-5xl lg:text-6xl leading-tight text-content mb-8">To be the <span class="italic font-light text-muted">global architect</span> of sustainable industrial ecosystems.</h2>
        <p class="text-muted text-lg leading-relaxed max-w-md">We envision a future where industrial progress and environmental stewardship are inseparable. Our goal is to redefine the landscape of infrastructure through design that honors both utility and beauty.</p>
      </div>
      <div class="flex flex-col md:mt-32">
        <span class="text-sm font-medium text-muted block mb-6 border-b border-edge pb-2 w-full">Mission</span>
        <h2 class="font-display text-4xl md:text-5xl lg:text-6xl leading-tight text-content mb-8">Engineering <span class="italic font-light text-muted">resilience</span> into the fabric of society.</h2>
        <p class="text-muted text-lg leading-relaxed max-w-md">Our mission is to deliver world-class engineering solutions that empower communities, drive economic growth, and stand the test of time. We build not just for today, but for generations to come.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-end mb-20">
      <div class="max-w-2xl">
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content mb-4">Core Values</h3>
        <h2 class="font-display text-4xl md:text-5xl text-content leading-tight">The principles that <span class="italic font-light text-muted">ground</span> our ambition.</h2>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="group border-t border-edge pt-8 hover:border-content transition-colors duration-500">
        <span class="block text-xs font-mono text-muted mb-4">01</span>
        <h3 class="font-display text-3xl text-content mb-4">Integrity</h3>
        <p class="text-sm text-muted leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">We uphold the highest ethical standards in every negotiation, blueprint, and brick laid. Trust is our most valuable asset.</p>
      </div>
      <div class="group border-t border-edge pt-8 hover:border-content transition-colors duration-500">
        <span class="block text-xs font-mono text-muted mb-4">02</span>
        <h3 class="font-display text-3xl text-content mb-4">Innovation</h3>
        <p class="text-sm text-muted leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">We relentlessly pursue new technologies and methodologies to solve the complex challenges of modern infrastructure.</p>
      </div>
      <div class="group border-t border-edge pt-8 hover:border-content transition-colors duration-500">
        <span class="block text-xs font-mono text-muted mb-4">03</span>
        <h3 class="font-display text-3xl text-content mb-4">Precision</h3>
        <p class="text-sm text-muted leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">Excellence is in the details. We approach every project with exacting standards and rigorous attention to quality.</p>
      </div>
      <div class="group border-t border-edge pt-8 hover:border-content transition-colors duration-500">
        <span class="block text-xs font-mono text-muted mb-4">04</span>
        <h3 class="font-display text-3xl text-content mb-4">Sustainability</h3>
        <p class="text-sm text-muted leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">We are stewards of the environment, committed to practices that minimize impact and maximize efficiency.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Governance</h2>
    <p class="text-muted max-w-3xl text-lg leading-relaxed mb-8">Bin Naeem Industries is governed by a board and executive structure that ensures accountability, strategic oversight, and alignment with long-term objectives. Governance practices follow applicable regulatory and corporate standards.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl">
      <div class="p-8 border border-edge rounded-2xl bg-surface">
        <h4 class="font-display text-xl text-content mb-2">Board oversight</h4>
        <p class="text-muted text-sm leading-relaxed">The board provides strategic direction, risk oversight, and governance of the group and its subsidiaries.</p>
      </div>
      <div class="p-8 border border-edge rounded-2xl bg-surface">
        <h4 class="font-display text-xl text-content mb-2">Executive management</h4>
        <p class="text-muted text-sm leading-relaxed">Executive leadership is responsible for day-to-day operations, performance, and delivery across all brands.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <h2 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Operational leadership across brands</h2>
    <p class="text-muted max-w-3xl text-lg leading-relaxed">Leadership supports multi-brand operations through shared governance, resource allocation, and strategic alignment. Each brand has dedicated management while benefiting from group-wide capabilities in quality, safety, and compliance.</p>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas border-t border-edge">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row gap-12 mb-16">
      <div class="md:w-1/3">
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content">Leadership roles</h3>
      </div>
      <div class="md:w-2/3">
        <p class="text-muted max-w-2xl mb-10">Our leadership combines experience across engineering, operations, and global business to steer the group and its brands.</p>
        <?php if (!empty($companyProfileUrl)): ?>
        <p class="mb-10"><a href="<?php echo htmlspecialchars($companyProfileUrl, ENT_QUOTES, 'UTF-8'); ?>" download class="inline-flex items-center gap-2 text-sm font-semibold text-content hover:underline"><span class="material-icons-outlined text-lg">download</span>Download company profile</a></p>
        <?php endif; ?>
        <div class="space-y-6">
          <div class="border-t border-edge pt-6">
            <h4 class="font-display text-xl text-content">Board Chair</h4>
            <p class="text-muted text-sm mt-1">Strategic vision and governance of the group.</p>
          </div>
          <div class="border-t border-edge pt-6">
            <h4 class="font-display text-xl text-content">Chief Executive</h4>
            <p class="text-muted text-sm mt-1">Overall operations and execution across brands and geographies.</p>
          </div>
          <div class="border-t border-edge pt-6">
            <h4 class="font-display text-xl text-content">Chief Operations</h4>
            <p class="text-muted text-sm mt-1">Operational excellence, supply chain, and multi-brand coordination.</p>
          </div>
          <div class="border-t border-edge pt-6">
            <h4 class="font-display text-xl text-content">Chief Financial Officer</h4>
            <p class="text-muted text-sm mt-1">Financial strategy, reporting, and sustainable growth.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
