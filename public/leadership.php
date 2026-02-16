<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Leadership and Company Overview, Naeem Group';
$description = 'Our leadership team, mission, values, and commitment to industrial excellence and safety.';
$canonical = 'https://binnaeemindustries.com/leadership';
$currentPage = 'leadership';

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative w-full h-screen min-h-[800px] overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img alt="Leadership" class="w-full h-full object-cover brightness-[0.95] dark:brightness-[0.4]" src="assets/images/hero-bin.jpg" loading="eager" width="1600" height="900" />
    <div class="absolute inset-0 pointer-events-none hero-scrim"></div>
  </div>
  <div class="relative z-10 flex flex-col justify-end h-full px-6 md:px-12 pb-20 max-w-[1600px] mx-auto">
    <div class="mb-12 md:mb-24">
      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-content max-w-5xl">Leadership</h1>
      <p class="mt-8 max-w-2xl text-xl text-muted font-light leading-relaxed">Governance, vision, and the team driving industrial excellence.</p>
    </div>
  </div>
</header>

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

<section class="py-24 px-6 md:px-12 bg-surface rounded-3xl mx-2 md:mx-6 overflow-hidden">
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

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row gap-12 mb-16">
      <div class="md:w-1/3">
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content">Executive Leadership</h3>
      </div>
      <div class="md:w-2/3">
        <h2 class="font-display text-3xl md:text-4xl lg:text-5xl text-content leading-tight">Guided by <span class="italic font-light text-muted">experience</span>, driven by <span class="font-bold">insight</span>.</h2>
        <p class="mt-6 text-muted max-w-2xl">Our leadership team combines decades of expertise across engineering, finance, and global operations to steer Bin Naaem Industries towards a prosperous future.</p>
        <?php if (!empty($companyProfileUrl)): ?>
        <p class="mt-4"><a href="<?php echo htmlspecialchars($companyProfileUrl, ENT_QUOTES, 'UTF-8'); ?>" download class="inline-flex items-center gap-2 text-sm font-semibold text-content hover:underline"><span class="material-icons-outlined text-lg">download</span>Download company profile</a></p>
        <?php endif; ?>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-surface p-8 md:p-10 rounded-2xl border border-edge hover:border-muted transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-content">Dr. Ahmed Al-Naaem</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-muted mt-2">Chairman of the Board</p>
        </div>
        <div class="h-[1px] w-full bg-edge mb-6 group-hover:bg-muted transition-colors"></div>
        <p class="text-sm text-muted leading-relaxed">With over 40 years of experience in industrial development, Dr. Al-Naaem provides the strategic vision that has established the company as a regional powerhouse.</p>
      </div>
      <div class="bg-surface p-8 md:p-10 rounded-2xl border border-edge hover:border-muted transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-content">Sarah Jenkins</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-muted mt-2">Chief Executive Officer</p>
        </div>
        <div class="h-[1px] w-full bg-edge mb-6 group-hover:bg-muted transition-colors"></div>
        <p class="text-sm text-muted leading-relaxed">Sarah brings a wealth of knowledge from global infrastructure projects, driving operational excellence and spearheading international expansion initiatives.</p>
      </div>
      <div class="bg-surface p-8 md:p-10 rounded-2xl border border-edge hover:border-muted transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-content">Robert Chen</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-muted mt-2">Chief Operations Officer</p>
        </div>
        <div class="h-[1px] w-full bg-edge mb-6 group-hover:bg-muted transition-colors"></div>
        <p class="text-sm text-muted leading-relaxed">An expert in logistics and supply chain optimization, Robert ensures that our complex network of subsidiaries operates with seamless efficiency.</p>
      </div>
      <div class="bg-surface p-8 md:p-10 rounded-2xl border border-edge hover:border-muted transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-content">Amina Khalil</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-muted mt-2">Chief Technology Officer</p>
        </div>
        <div class="h-[1px] w-full bg-edge mb-6 group-hover:bg-muted transition-colors"></div>
        <p class="text-sm text-muted leading-relaxed">Leading our innovation hubs, Amina is dedicated to integrating sustainable energy technologies into every facet of our industrial output.</p>
      </div>
      <div class="bg-surface p-8 md:p-10 rounded-2xl border border-edge hover:border-muted transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-content">David Ross</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-muted mt-2">Chief Financial Officer</p>
        </div>
        <div class="h-[1px] w-full bg-edge mb-6 group-hover:bg-muted transition-colors"></div>
        <p class="text-sm text-muted leading-relaxed">David oversees the financial health of the organization, ensuring robust fiscal strategies that support long-term sustainable growth.</p>
      </div>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
