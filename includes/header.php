<?php
$navCurrent = isset($currentPage) ? $currentPage : '';
$u = function($p) { return $p ?: '#'; };
$base = (isset($isBrand) && $isBrand) ? '../' : ((isset($isBlog) && $isBlog) ? '../' : '');
$logoUrl = $base . 'assets/logos/bin-naeem.svg';
?>
<nav class="fixed top-0 left-0 right-0 z-50 py-6 px-6 md:px-12 transition-all duration-300">
  <div class="flex justify-between items-center max-w-[1600px] mx-auto">
    <a href="<?php echo $base ? $base . 'index.php' : 'index.php'; ?>" class="flex items-center gap-2 hover:opacity-90 transition-opacity">
      <img src="<?php echo htmlspecialchars($logoUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Bin Naaem Industries" class="h-8 md:h-9 w-auto" width="140" height="36" />
    </a>
    <div class="hidden md:flex items-center glass rounded-full px-8 py-3">
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'home' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('index.php'); ?>">Home</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'capabilities' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('capabilities.php'); ?>">Services</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'projects' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('projects.php'); ?>">Projects</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'industries' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('industries.php'); ?>">Industries</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'brands' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('brands.php'); ?>">Brands</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'leadership' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('leadership.php'); ?>">About</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'blog' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('blog/index.php'); ?>">Blog</a>
    </div>
    <div class="flex items-center gap-3">
      <button
        type="button"
        data-theme-toggle
        aria-label="Switch to dark mode"
        title="Switch to dark mode"
        class="inline-flex items-center justify-center w-11 h-11 rounded-full glass"
      >
        <span class="material-icons-outlined text-[20px] text-content" data-theme-toggle-icon>dark_mode</span>
        <span class="sr-only" data-theme-toggle-label>Switch to dark mode</span>
      </button>
      <a class="group flex items-center gap-2 glass px-6 py-3 rounded-full text-sm font-semibold text-content hover:opacity-90 transition-all" href="<?php echo $base . $u('contact.php'); ?>">
        Book a Consultation
        <span class="material-icons-outlined text-sm text-content transform group-hover:-rotate-45 transition-transform duration-300">arrow_forward</span>
      </a>
    </div>
  </div>
</nav>
