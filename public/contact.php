<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Contact Industrial Design Experts, Naeem Group';
$description = 'Request a quote or book a consultation for industrial design, manufacturing, or packaging solutions.';
$canonical = 'https://binnaeemindustries.com/contact';
$currentPage = 'contact';
$showWhatsApp = true;

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative pt-32 pb-16 px-6 md:px-12 max-w-[1600px] mx-auto">
  <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-4">(01)</span>
  <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-gray-900 dark:text-white max-w-4xl">Let's <span class="italic font-light opacity-80">talk</span></h1>
  <p class="mt-8 text-gray-600 dark:text-gray-400 text-lg max-w-2xl">Share your vision. Our team is ready to discuss projects, partnerships, and how we can support your industrial goals.</p>
</header>

<section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
      <div class="lg:col-span-5">
        <h2 class="font-display text-3xl md:text-4xl text-gray-900 dark:text-white mb-8">Contact <span class="italic font-light text-gray-500">information</span></h2>
        <div class="space-y-8">
          <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-2">Address</p>
            <p class="text-gray-900 dark:text-white">Jalil Centre, 231-Circular Road,<br />Bhati Gate, Lahore,<br />Pakistan. 54000</p>
          </div>
          <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-2">Phone</p>
            <a href="tel:+924237311809" class="text-gray-900 dark:text-white hover:underline block mb-1">+92-42-37311809</a>
            <a href="tel:+923215707070" class="text-gray-900 dark:text-white hover:underline block">+92-3215707070</a>
          </div>
          <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-2">Email</p>
            <a href="mailto:info@binnaeemindustries.com" class="text-gray-900 dark:text-white hover:underline">info@binnaeemindustries.com</a>
          </div>
        </div>
      </div>
      <div class="lg:col-span-7">
        <h2 class="font-display text-3xl md:text-4xl text-gray-900 dark:text-white mb-8">Send an <span class="italic font-light text-gray-500">inquiry</span></h2>
        <?php
        if (isset($_GET['sent']) && $_GET['sent'] === '1') {
          echo '<p class="mb-6 text-green-600 dark:text-green-400 text-sm">Thank you. Your inquiry has been received.</p>';
        }
        if (isset($_GET['error']) && $_GET['error'] === '1') {
          echo '<p class="mb-6 text-red-600 dark:text-red-400 text-sm">Please check your inputs and try again.</p>';
        }
        ?>
        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">We aim to respond quickly to all inquiries.</p>
        <div class="max-w-xl">
          <?php $inquiryFormAction = 'send-inquiry.php'; include INCLUDES_PATH . '/contact-form.php'; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface-light dark:bg-surface-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="max-w-4xl mx-auto">
      <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-4">(02) How It Works</span>
      <h2 class="font-display text-4xl md:text-5xl text-gray-900 dark:text-white mb-12">Our Process</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-gray-900 dark:bg-white text-white dark:text-black flex items-center justify-center font-bold text-lg">1</div>
          <div>
            <h3 class="font-display text-xl text-gray-900 dark:text-white mb-2">Submit Inquiry</h3>
            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Share your project requirements, timeline, and goals through our contact form or direct communication.</p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-gray-900 dark:bg-white text-white dark:text-black flex items-center justify-center font-bold text-lg">2</div>
          <div>
            <h3 class="font-display text-xl text-gray-900 dark:text-white mb-2">Discovery Call</h3>
            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">We schedule a consultation to understand your specific needs, challenges, and objectives in detail.</p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-gray-900 dark:bg-white text-white dark:text-black flex items-center justify-center font-bold text-lg">3</div>
          <div>
            <h3 class="font-display text-xl text-gray-900 dark:text-white mb-2">Requirements and Site Review</h3>
            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">We conduct a thorough analysis of your requirements and perform site visits when necessary to assess conditions.</p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-gray-900 dark:bg-white text-white dark:text-black flex items-center justify-center font-bold text-lg">4</div>
          <div>
            <h3 class="font-display text-xl text-gray-900 dark:text-white mb-2">Proposal and Timeline</h3>
            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">We deliver a comprehensive proposal with detailed specifications, timeline, pricing, and implementation plan.</p>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap gap-4 justify-center">
        <a href="https://wa.me/923215707070" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-[#25D366] text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-[#20ba5a] transition-all">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884Z"/>
          </svg>
          WhatsApp
        </a>
        <a href="mailto:info@binnaeemindustries.com" class="inline-flex items-center gap-2 bg-gray-900 dark:bg-white text-white dark:text-black px-6 py-3 rounded-full text-sm font-semibold hover:bg-gray-800 dark:hover:bg-gray-100 transition-all">
          <span class="material-icons-outlined text-sm">email</span>
          Email Us
        </a>
      </div>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
