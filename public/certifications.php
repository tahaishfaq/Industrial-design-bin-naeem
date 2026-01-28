<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Quality Assurance &amp; Certifications | Bin Naaem Industries';
$description = 'Bin Naaem Industries quality assurance, certifications, and engineering standards. ISO and industry compliance.';
$canonical = 'https://binnaeemindustries.com/certifications';
$currentPage = 'certifications';

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative w-full h-[50vh] min-h-[400px] overflow-hidden flex items-end">
  <div class="absolute inset-0 z-0">
    <img alt="Industrial quality and precision" class="w-full h-full object-cover brightness-[0.5] dark:brightness-[0.35]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgcGo5xGO3N07RKZ_N1K5-Xaupso9oPY61bZ_LZaqwhX0cCE-xTzAOr8okqMJnGnwbxeWO--piZfKy7OvvsR5G_v888hsC2lkpfTKXsgZdVY7j519mI33-3t2f-ZcnoQJsF3Xxwgcj_4k64js9cOCUWOC7IKi1kA-Y3OH3oAck-5iX1qcq3IeswyZpERYfY0Bng7JF7LXmLceh3rCGocnapZ50bzcVu39XIB1sqtZXn7XSDx1y1edA_nXxT-t67gjS7O-PWf8f5o8" loading="eager" width="1600" height="900" />
    <div class="absolute inset-0 bg-gradient-to-t from-background-light via-transparent to-transparent dark:from-background-dark opacity-100"></div>
    <div class="absolute inset-0 bg-black/30"></div>
  </div>
  <div class="relative z-10 w-full px-6 md:px-12 pb-16 max-w-[1600px] mx-auto">
    <span class="block text-sm font-bold tracking-[0.2em] uppercase text-gray-300 mb-4">Quality &amp; Compliance</span>
    <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[0.95] text-gray-900 dark:text-white max-w-4xl tracking-tight">Certifications</h1>
  </div>
</header>

<section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row gap-12 md:gap-24 mb-20">
      <div class="md:w-1/4">
        <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-2">(01)</span>
        <h3 class="text-lg font-semibold uppercase tracking-wider text-gray-900 dark:text-white">Our Standards</h3>
      </div>
      <div class="md:w-3/4">
        <h2 class="font-display text-4xl md:text-5xl leading-tight text-gray-900 dark:text-white mb-8">Quality assurance and <span class="italic font-light text-gray-500 dark:text-gray-400">certifications</span> that underpin every project.</h2>
        <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed max-w-2xl">We maintain rigorous quality management systems and hold industry-recognized certifications to ensure compliance, safety, and excellence across all operations.</p>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="p-10 border border-gray-200 dark:border-gray-800 rounded-2xl bg-surface-light dark:bg-surface-dark hover:border-gray-400 dark:hover:border-gray-600 transition-colors">
        <div class="w-14 h-14 rounded-full bg-white/5 dark:bg-black/20 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-gray-900 dark:text-white">verified</span></div>
        <h4 class="font-display text-2xl text-gray-900 dark:text-white mb-3">ISO 9001</h4>
        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Quality management systems certification ensuring consistent processes and continuous improvement.</p>
      </div>
      <div class="p-10 border border-gray-200 dark:border-gray-800 rounded-2xl bg-surface-light dark:bg-surface-dark hover:border-gray-400 dark:hover:border-gray-600 transition-colors">
        <div class="w-14 h-14 rounded-full bg-white/5 dark:bg-black/20 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-gray-900 dark:text-white">health_and_safety</span></div>
        <h4 class="font-display text-2xl text-gray-900 dark:text-white mb-3">Safety Excellence</h4>
        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Global Safety Excellence Award recognition and robust OH&amp;S protocols across all facilities.</p>
      </div>
      <div class="p-10 border border-gray-200 dark:border-gray-800 rounded-2xl bg-surface-light dark:bg-surface-dark hover:border-gray-400 dark:hover:border-gray-600 transition-colors">
        <div class="w-14 h-14 rounded-full bg-white/5 dark:bg-black/20 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-gray-900 dark:text-white">eco</span></div>
        <h4 class="font-display text-2xl text-gray-900 dark:text-white mb-3">Sustainable Practice</h4>
        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Sustainable manufacturing and environmental stewardship aligned with international standards.</p>
      </div>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
