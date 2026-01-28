<?php
/**
 * Shared brand placeholder layout. Expects $brandName, $brandTagline, $brandDescription.
 */
?>
<header class="relative w-full h-[60vh] min-h-[500px] overflow-hidden flex items-end">
  <div class="absolute inset-0 z-0">
    <img alt="<?php echo htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8'); ?>" class="w-full h-full object-cover brightness-[0.5] dark:brightness-[0.35]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgcGo5xGO3N07RKZ_N1K5-Xaupso9oPY61bZ_LZaqwhX0cCE-xTzAOr8okqMJnGnwbxeWO--piZfKy7OvvsR5G_v888hsC2lkpfTKXsgZdVY7j519mI33-3t2f-ZcnoQJsF3Xxwgcj_4k64js9cOCUWOC7IKi1kA-Y3OH3oAck-5iX1qcq3IeswyZpERYfY0Bng7JF7LXmLceh3rCGocnapZ50bzcVu39XIB1sqtZXn7XSDx1y1edA_nXxT-t67gjS7O-PWf8f5o8" loading="eager" width="1600" height="900" />
    <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-black/40"></div>
  </div>
  <div class="relative z-10 w-full px-6 md:px-12 pb-20 max-w-[1600px] mx-auto">
    <span class="text-sm font-medium text-gray-400 uppercase tracking-widest block mb-4">Subsidiary</span>
    <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-white"><?php echo htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8'); ?> <br/><span class="italic font-light opacity-80"><?php echo htmlspecialchars($brandTagline, ENT_QUOTES, 'UTF-8'); ?></span></h1>
    <p class="mt-6 text-gray-300 text-lg max-w-2xl"><?php echo htmlspecialchars($brandDescription, ENT_QUOTES, 'UTF-8'); ?></p>
  </div>
</header>
<section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="mb-12">
      <h2 class="font-display text-4xl md:text-5xl text-gray-900 dark:text-white mb-8">Get in <span class="italic font-light text-gray-500">touch</span></h2>
      <p class="text-gray-600 dark:text-gray-400 mb-6">Explore our <a href="../projects.php" class="text-gray-900 dark:text-white underline hover:no-underline">project portfolio</a> or <a href="../contact.php" class="text-gray-900 dark:text-white underline hover:no-underline">contact us</a> to discuss your requirements.</p>
    </div>
    <div class="max-w-xl">
      <?php $inquiryFormAction = '../send-inquiry.php'; include INCLUDES_PATH . '/inquiry-form.php'; ?>
    </div>
  </div>
</section>
