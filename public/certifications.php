<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Certifications and Compliance, Naeem Group';
$description = 'ISO and compliance standards, safety programs, sustainability commitments, and documentation.';
$canonical = 'https://binnaeemindustries.com/certifications';
$currentPage = 'certifications';

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative w-full h-screen min-h-[800px] overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img alt="Certifications and compliance" class="w-full h-full object-cover brightness-[0.95] dark:brightness-[0.4]" src="assets/images/hero-bin.jpg" loading="eager" width="1600" height="900" />
    <div class="absolute inset-0 pointer-events-none hero-scrim"></div>
  </div>
  <div class="relative z-10 flex flex-col justify-end h-full px-6 md:px-12 pb-20 max-w-[1600px] mx-auto">
    <div class="mb-12 md:mb-24">
      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-content max-w-5xl">Certifications</h1>
      <p class="mt-8 max-w-2xl text-xl text-muted font-light leading-relaxed">Quality assurance and compliance that underpin every project.</p>
    </div>
  </div>
</header>

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row gap-12 md:gap-24 mb-20">
      <div class="md:w-1/4">
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content">Our Standards</h3>
      </div>
      <div class="md:w-3/4">
        <h2 class="font-display text-4xl md:text-5xl leading-tight text-content mb-8">Quality assurance and <span class="italic font-light text-muted">certifications</span> that underpin every project.</h2>
        <p class="text-muted text-lg leading-relaxed max-w-2xl">We maintain rigorous quality management systems and hold industry-recognized certifications to ensure compliance, safety, and excellence across all operations.</p>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      <div class="p-10 border border-edge rounded-2xl bg-surface hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-content">verified</span></div>
        <h3 class="font-display text-2xl text-content mb-2">ISO 9001</h3>
        <p class="text-muted text-xs mb-4">International Organization for Standardization</p>
        <p class="text-muted text-sm leading-relaxed mb-4">Quality management systems certification ensuring consistent processes and continuous improvement across all operations.</p>
        <p class="text-muted text-xs mb-2">Status: <span class="text-green-600 dark:text-green-400 font-medium">Active</span></p>
        <a href="#" class="inline-flex items-center gap-2 text-xs font-semibold text-content hover:underline">
          Download Certificate PDF
          <span class="material-icons-outlined text-sm">download</span>
        </a>
      </div>
      <div class="p-10 border border-edge rounded-2xl bg-surface hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-content">health_and_safety</span></div>
        <h3 class="font-display text-2xl text-content mb-2">Safety Excellence Award</h3>
        <p class="text-muted text-xs mb-4">Global Safety Council</p>
        <p class="text-muted text-sm leading-relaxed mb-4">Recognition for robust occupational health and safety protocols and zero incident performance across all facilities.</p>
        <p class="text-muted text-xs mb-2">Status: <span class="text-green-600 dark:text-green-400 font-medium">Active</span></p>
        <a href="#" class="inline-flex items-center gap-2 text-xs font-semibold text-content hover:underline">
          Download Certificate PDF
          <span class="material-icons-outlined text-sm">download</span>
        </a>
      </div>
      <div class="p-10 border border-edge rounded-2xl bg-surface hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-content">eco</span></div>
        <h3 class="font-display text-2xl text-content mb-2">Environmental Management</h3>
        <p class="text-muted text-xs mb-4">Sustainable Manufacturing Standards</p>
        <p class="text-muted text-sm leading-relaxed mb-4">Sustainable manufacturing and environmental stewardship aligned with international standards and best practices.</p>
        <p class="text-muted text-xs mb-2">Status: <span class="text-green-600 dark:text-green-400 font-medium">Active</span></p>
        <a href="#" class="inline-flex items-center gap-2 text-xs font-semibold text-content hover:underline">
          Download Certificate PDF
          <span class="material-icons-outlined text-sm">download</span>
        </a>
      </div>
      <div class="p-10 border border-edge rounded-2xl bg-surface hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-content">factory</span></div>
        <h3 class="font-display text-2xl text-content mb-2">ISO 14001</h3>
        <p class="text-muted text-xs mb-4">International Organization for Standardization</p>
        <p class="text-muted text-sm leading-relaxed mb-4">Environmental management systems ensuring sustainable operations and compliance with environmental regulations.</p>
        <p class="text-muted text-xs mb-2">Status: <span class="text-green-600 dark:text-green-400 font-medium">Active</span></p>
        <a href="#" class="inline-flex items-center gap-2 text-xs font-semibold text-content hover:underline">
          Download Certificate PDF
          <span class="material-icons-outlined text-sm">download</span>
        </a>
      </div>
      <div class="p-10 border border-edge rounded-2xl bg-surface hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-content">security</span></div>
        <h3 class="font-display text-2xl text-content mb-2">ISO 45001</h3>
        <p class="text-muted text-xs mb-4">International Organization for Standardization</p>
        <p class="text-muted text-sm leading-relaxed mb-4">Occupational health and safety management systems ensuring worker safety and regulatory compliance.</p>
        <p class="text-muted text-xs mb-2">Status: <span class="text-green-600 dark:text-green-400 font-medium">Active</span></p>
        <a href="#" class="inline-flex items-center gap-2 text-xs font-semibold text-content hover:underline">
          Download Certificate PDF
          <span class="material-icons-outlined text-sm">download</span>
        </a>
      </div>
      <div class="p-10 border border-edge rounded-2xl bg-surface hover:border-muted transition-colors">
        <div class="w-14 h-14 rounded-full bg-surface2 flex items-center justify-center mb-6"><span class="material-icons-outlined text-2xl text-content">verified_user</span></div>
        <h3 class="font-display text-2xl text-content mb-2">Quality Assurance Program</h3>
        <p class="text-muted text-xs mb-4">Internal Quality Standards</p>
        <p class="text-muted text-sm leading-relaxed mb-4">Comprehensive quality assurance program with regular audits and continuous improvement processes.</p>
        <p class="text-muted text-xs mb-2">Status: <span class="text-green-600 dark:text-green-400 font-medium">Active</span></p>
        <a href="#" class="inline-flex items-center gap-2 text-xs font-semibold text-content hover:underline">
          Download Certificate PDF
          <span class="material-icons-outlined text-sm">download</span>
        </a>
      </div>
    </div>
    <div class="max-w-3xl mx-auto text-center mb-12">
      <p class="text-muted text-sm leading-relaxed mb-8">Certificates and audit documentation are available on request. Available on request, certifications and technical documentation.</p>
      <a href="contact.php" class="inline-flex items-center gap-3 bg-content text-surface px-8 py-4 rounded-full text-lg font-semibold hover:opacity-90 transition-all">
        Request Compliance Pack
        <span class="material-icons-outlined text-sm">arrow_forward</span>
      </a>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
