<?php
$navCurrent = isset($currentPage) ? $currentPage : '';
$u = function($p) { return $p ?: '#'; };
$base = (isset($isBrand) && $isBrand) ? '../' : '';
?>
<nav class="fixed top-0 left-0 right-0 z-50 py-6 px-6 md:px-12 transition-all duration-300">
  <div class="flex justify-between items-center max-w-[1600px] mx-auto">
    <a href="<?php echo $base ? $base . 'index.php' : 'index.php'; ?>" class="flex items-center gap-2">
      <span class="material-icons-outlined text-3xl dark:text-white text-gray-900">layers</span>
      <span class="font-bold text-lg tracking-widest uppercase dark:text-white text-gray-900">Bin Naaem</span>
    </a>
    <div class="hidden md:flex items-center bg-white/40 dark:bg-black/25 backdrop-blur-xl rounded-full px-8 py-3 border border-black/5 dark:border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.08)]">
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'home' ? 'text-gray-900 dark:text-white' : 'text-gray-900 dark:text-gray-100 hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('index.php'); ?>">Home</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'capabilities' ? 'text-gray-900 dark:text-white' : 'text-gray-900 dark:text-gray-100 hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('capabilities.php'); ?>">Services</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'projects' ? 'text-gray-900 dark:text-white' : 'text-gray-900 dark:text-gray-100 hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('projects.php'); ?>">Projects</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'industries' ? 'text-gray-900 dark:text-white' : 'text-gray-900 dark:text-gray-100 hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('industries.php'); ?>">Industries</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'brands' ? 'text-gray-900 dark:text-white' : 'text-gray-900 dark:text-gray-100 hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('brands.php'); ?>">Brands</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'leadership' ? 'text-gray-900 dark:text-white' : 'text-gray-900 dark:text-gray-100 hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('leadership.php'); ?>">About</a>
    </div>
    <div class="flex items-center gap-3">
      <button
        type="button"
        data-theme-toggle
        aria-label="Switch to dark mode"
        title="Switch to dark mode"
        class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/40 dark:bg-black/25 border border-black/5 dark:border-white/10 backdrop-blur-xl hover:bg-white/55 dark:hover:bg-white/5 transition-colors shadow-[0_10px_30px_rgba(0,0,0,0.08)]"
      >
        <span class="material-icons-outlined text-[20px] text-gray-900 dark:text-white" data-theme-toggle-icon>dark_mode</span>
        <span class="sr-only" data-theme-toggle-label>Switch to dark mode</span>
      </button>
      <a class="group flex items-center gap-2 bg-white dark:bg-white text-black px-6 py-3 rounded-full text-sm font-semibold hover:bg-gray-100 transition-all" href="<?php echo $base . $u('contact.php'); ?>">
        Book a Consultation
        <span class="material-icons-outlined text-sm transform group-hover:-rotate-45 transition-transform duration-300">arrow_forward</span>
      </a>
    </div>
  </div>
</nav>
