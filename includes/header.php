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
    <div class="hidden md:flex items-center bg-white/10 dark:bg-black/20 backdrop-blur-md rounded-full px-8 py-3 border border-gray-200/20 dark:border-white/10 shadow-lg">
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'home' ? 'text-white' : 'hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('index.php'); ?>">Home</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'capabilities' ? 'text-white' : 'hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('capabilities.php'); ?>">Services</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'industries' ? 'text-white' : 'hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('industries.php'); ?>">Projects</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'brands' ? 'text-white' : 'hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('brands.php'); ?>">Brands</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'leadership' ? 'text-white' : 'hover:text-gray-500 dark:hover:text-gray-300 transition-colors'; ?>" href="<?php echo $base . $u('leadership.php'); ?>">About</a>
    </div>
    <a class="group flex items-center gap-2 bg-white dark:bg-white text-black px-6 py-3 rounded-full text-sm font-semibold hover:bg-gray-100 transition-all" href="<?php echo $base . $u('contact.php'); ?>">
      Book a Consultation
      <span class="material-icons-outlined text-sm transform group-hover:-rotate-45 transition-transform duration-300">arrow_forward</span>
    </a>
  </div>
</nav>
