<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Contact | Bin Naaem Industries';
$description = 'Get in touch with Bin Naaem Industries. Book a consultation, send an inquiry, or reach us by phone and email.';
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
        <div class="max-w-xl">
          <?php $inquiryFormAction = 'send-inquiry.php'; include INCLUDES_PATH . '/inquiry-form.php'; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
