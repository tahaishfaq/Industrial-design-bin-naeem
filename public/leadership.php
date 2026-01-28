<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Leadership and Company Overview, Naeem Group';
$description = 'Our leadership team, mission, values, and commitment to industrial excellence and safety.';
$canonical = 'https://binnaeemindustries.com/leadership';
$currentPage = 'leadership';

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative w-full h-[70vh] min-h-[500px] overflow-hidden flex items-end">
  <div class="absolute inset-0 z-0">
    <img alt="Abstract industrial texture" class="w-full h-full object-cover brightness-[0.4] dark:brightness-[0.3] grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgcGo5xGO3N07RKZ_N1K5-Xaupso9oPY61bZ_LZaqwhX0cCE-xTzAOr8okqMJnGnwbxeWO--piZfKy7OvvsR5G_v888hsC2lkpfTKXsgZdVY7j519mI33-3t2f-ZcnoQJsF3Xxwgcj_4k64js9cOCUWOC7IKi1kA-Y3OH3oAck-5iX1qcq3IeswyZpERYfY0Bng7JF7LXmLceh3rCGocnapZ50bzcVu39XIB1sqtZXn7XSDx1y1edA_nXxT-t67gjS7O-PWf8f5o8" loading="eager" width="1600" height="900" />
    <div class="absolute inset-0 bg-gradient-to-t from-background-light via-transparent to-transparent dark:from-background-dark opacity-100"></div>
    <div class="absolute inset-0 bg-black/40"></div>
  </div>
  <div class="relative z-10 w-full px-6 md:px-12 pb-20 max-w-[1600px] mx-auto">
    <div class="border-l-2 border-white/30 pl-8 md:pl-12">
      <span class="block text-sm font-bold tracking-[0.2em] uppercase text-gray-300 mb-4">Governance &amp; Direction</span>
      <h1 class="font-display text-6xl md:text-8xl lg:text-9xl leading-[0.9] text-gray-900 dark:text-white max-w-5xl tracking-tight">Leadership</h1>
    </div>
  </div>
</header>

<section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-32">
      <div class="flex flex-col">
        <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-6 border-b border-gray-300 dark:border-gray-800 pb-2 w-full">(01) Vision</span>
        <h2 class="font-display text-4xl md:text-5xl lg:text-6xl leading-tight text-gray-900 dark:text-white mb-8">To be the <span class="italic font-light text-gray-500 dark:text-gray-400">global architect</span> of sustainable industrial ecosystems.</h2>
        <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed max-w-md">We envision a future where industrial progress and environmental stewardship are inseparable. Our goal is to redefine the landscape of infrastructure through design that honors both utility and beauty.</p>
      </div>
      <div class="flex flex-col md:mt-32">
        <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-6 border-b border-gray-300 dark:border-gray-800 pb-2 w-full">(02) Mission</span>
        <h2 class="font-display text-4xl md:text-5xl lg:text-6xl leading-tight text-gray-900 dark:text-white mb-8">Engineering <span class="italic font-light text-gray-500 dark:text-gray-400">resilience</span> into the fabric of society.</h2>
        <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed max-w-md">Our mission is to deliver world-class engineering solutions that empower communities, drive economic growth, and stand the test of time. We build not just for today, but for generations to come.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface-light dark:bg-surface-dark rounded-3xl mx-2 md:mx-6 overflow-hidden">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-end mb-20">
      <div class="max-w-2xl">
        <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-2">(03)</span>
        <h3 class="text-lg font-semibold uppercase tracking-wider text-gray-900 dark:text-white mb-4">Core Values</h3>
        <h2 class="font-display text-4xl md:text-5xl text-gray-900 dark:text-white leading-tight">The principles that <span class="italic font-light text-gray-500 dark:text-gray-400">ground</span> our ambition.</h2>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="group border-t border-gray-200 dark:border-gray-700 pt-8 hover:border-gray-900 dark:hover:border-white transition-colors duration-500">
        <span class="block text-xs font-mono text-gray-500 mb-4">01</span>
        <h3 class="font-display text-3xl text-gray-900 dark:text-white mb-4">Integrity</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">We uphold the highest ethical standards in every negotiation, blueprint, and brick laid. Trust is our most valuable asset.</p>
      </div>
      <div class="group border-t border-gray-200 dark:border-gray-700 pt-8 hover:border-gray-900 dark:hover:border-white transition-colors duration-500">
        <span class="block text-xs font-mono text-gray-500 mb-4">02</span>
        <h3 class="font-display text-3xl text-gray-900 dark:text-white mb-4">Innovation</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">We relentlessly pursue new technologies and methodologies to solve the complex challenges of modern infrastructure.</p>
      </div>
      <div class="group border-t border-gray-200 dark:border-gray-700 pt-8 hover:border-gray-900 dark:hover:border-white transition-colors duration-500">
        <span class="block text-xs font-mono text-gray-500 mb-4">03</span>
        <h3 class="font-display text-3xl text-gray-900 dark:text-white mb-4">Precision</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">Excellence is in the details. We approach every project with exacting standards and rigorous attention to quality.</p>
      </div>
      <div class="group border-t border-gray-200 dark:border-gray-700 pt-8 hover:border-gray-900 dark:hover:border-white transition-colors duration-500">
        <span class="block text-xs font-mono text-gray-500 mb-4">04</span>
        <h3 class="font-display text-3xl text-gray-900 dark:text-white mb-4">Sustainability</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">We are stewards of the environment, committed to practices that minimize impact and maximize efficiency.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row gap-12 mb-16">
      <div class="md:w-1/3">
        <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-2">(04)</span>
        <h3 class="text-lg font-semibold uppercase tracking-wider text-gray-900 dark:text-white">Executive Leadership</h3>
      </div>
      <div class="md:w-2/3">
        <h2 class="font-display text-3xl md:text-4xl lg:text-5xl text-gray-900 dark:text-white leading-tight">Guided by <span class="italic font-light text-gray-500">experience</span>, driven by <span class="font-bold">insight</span>.</h2>
        <p class="mt-6 text-gray-500 dark:text-gray-400 max-w-2xl">Our leadership team combines decades of expertise across engineering, finance, and global operations to steer Bin Naaem Industries towards a prosperous future.</p>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-surface-light dark:bg-surface-dark p-8 md:p-10 rounded-2xl border border-gray-200 dark:border-gray-800 hover:border-gray-400 dark:hover:border-gray-600 transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white">Dr. Ahmed Al-Naaem</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-gray-500 dark:text-gray-400 mt-2">Chairman of the Board</p>
        </div>
        <div class="h-[1px] w-full bg-gray-200 dark:bg-gray-800 mb-6 group-hover:bg-gray-400 dark:group-hover:bg-gray-600 transition-colors"></div>
        <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">With over 40 years of experience in industrial development, Dr. Al-Naaem provides the strategic vision that has established the company as a regional powerhouse.</p>
      </div>
      <div class="bg-surface-light dark:bg-surface-dark p-8 md:p-10 rounded-2xl border border-gray-200 dark:border-gray-800 hover:border-gray-400 dark:hover:border-gray-600 transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white">Sarah Jenkins</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-gray-500 dark:text-gray-400 mt-2">Chief Executive Officer</p>
        </div>
        <div class="h-[1px] w-full bg-gray-200 dark:bg-gray-800 mb-6 group-hover:bg-gray-400 dark:group-hover:bg-gray-600 transition-colors"></div>
        <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">Sarah brings a wealth of knowledge from global infrastructure projects, driving operational excellence and spearheading international expansion initiatives.</p>
      </div>
      <div class="bg-surface-light dark:bg-surface-dark p-8 md:p-10 rounded-2xl border border-gray-200 dark:border-gray-800 hover:border-gray-400 dark:hover:border-gray-600 transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white">Robert Chen</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-gray-500 dark:text-gray-400 mt-2">Chief Operations Officer</p>
        </div>
        <div class="h-[1px] w-full bg-gray-200 dark:bg-gray-800 mb-6 group-hover:bg-gray-400 dark:group-hover:bg-gray-600 transition-colors"></div>
        <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">An expert in logistics and supply chain optimization, Robert ensures that our complex network of subsidiaries operates with seamless efficiency.</p>
      </div>
      <div class="bg-surface-light dark:bg-surface-dark p-8 md:p-10 rounded-2xl border border-gray-200 dark:border-gray-800 hover:border-gray-400 dark:hover:border-gray-600 transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white">Amina Khalil</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-gray-500 dark:text-gray-400 mt-2">Chief Technology Officer</p>
        </div>
        <div class="h-[1px] w-full bg-gray-200 dark:bg-gray-800 mb-6 group-hover:bg-gray-400 dark:group-hover:bg-gray-600 transition-colors"></div>
        <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">Leading our innovation hubs, Amina is dedicated to integrating sustainable energy technologies into every facet of our industrial output.</p>
      </div>
      <div class="bg-surface-light dark:bg-surface-dark p-8 md:p-10 rounded-2xl border border-gray-200 dark:border-gray-800 hover:border-gray-400 dark:hover:border-gray-600 transition-colors group">
        <div class="mb-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white">David Ross</h3>
          <p class="text-xs font-bold uppercase tracking-widest text-gray-500 dark:text-gray-400 mt-2">Chief Financial Officer</p>
        </div>
        <div class="h-[1px] w-full bg-gray-200 dark:bg-gray-800 mb-6 group-hover:bg-gray-400 dark:group-hover:bg-gray-600 transition-colors"></div>
        <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">David oversees the financial health of the organization, ensuring robust fiscal strategies that support long-term sustainable growth.</p>
      </div>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
