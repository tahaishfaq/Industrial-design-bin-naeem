<?php
$navCurrent = isset($currentPage) ? $currentPage : '';
$u = function($p) { return $p ?: '#'; };
$base = (isset($isBrand) && $isBrand) ? '../' : ((isset($isBlog) && $isBlog) ? '../' : '');
$logoUrl = $base . 'assets/logos/bin-naeem.PNG';
?>
<nav class="fixed top-0 left-0 right-0 z-50 py-4 px-4 sm:py-5 sm:px-6 md:py-6 md:px-12 transition-all duration-300" aria-label="Main navigation">
  <div class="flex justify-between items-center max-w-[1600px] mx-auto">
    <a href="<?php echo $base ? $base . 'index.php' : 'index.php'; ?>" class="flex items-center gap-2 hover:opacity-90 transition-opacity h-9 sm:h-10 md:h-11 w-[140px] sm:w-[180px] md:w-[220px] flex-shrink-0 overflow-hidden">
      <img src="<?php echo htmlspecialchars($logoUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Bin Naaem Industries" class="w-full h-full object-cover object-center" loading="eager" />
    </a>

    <!-- Desktop nav -->
    <div class="hidden md:flex items-center glass rounded-full px-8 py-3">
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'home' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base ? $base . 'index.php' : 'index.php'; ?>">Home</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'capabilities' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('capabilities.php'); ?>">Capabilities</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'projects' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('projects.php'); ?>">Projects</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'industries' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('industries.php'); ?>">Industries</a>
      <a class="px-4 text-sm font-medium <?php echo $navCurrent === 'brands' ? 'text-content font-semibold' : 'text-content hover:text-muted transition-colors'; ?>" href="<?php echo $base . $u('brands.php'); ?>">Brands</a>
    </div>

    <!-- Right: theme toggle + CTA (desktop) / hamburger (mobile) -->
    <div class="flex items-center gap-2 sm:gap-3">
      <button
        type="button"
        data-theme-toggle
        aria-label="Switch to dark mode"
        title="Switch to dark mode"
        class="inline-flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 md:w-11 md:h-11 rounded-full glass flex-shrink-0 text-content"
      >
        <i data-lucide="moon" class="w-[18px] h-[18px] sm:w-5 sm:h-5 dark:hidden" data-theme-icon="dark"></i>
        <i data-lucide="sun" class="w-[18px] h-[18px] sm:w-5 sm:h-5 hidden dark:block" data-theme-icon="light"></i>
        <span class="sr-only" data-theme-toggle-label>Switch to dark mode</span>
      </button>
      <a class="hidden md:inline-flex group items-center gap-2 glass px-6 py-3 rounded-full text-sm font-semibold text-content hover:opacity-90 transition-all" href="<?php echo $base . $u('contact.php'); ?>">
        Book a Consultation
        <i data-lucide="arrow-right" class="w-4 h-4 text-content transform group-hover:-rotate-45 transition-transform duration-300"></i>
      </a>
      <button
        type="button"
        id="mobile-menu-btn"
        class="md:hidden inline-flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-full glass flex-shrink-0 text-content"
        aria-label="Open menu"
        aria-expanded="false"
        aria-controls="mobile-menu-panel"
      >
        <i data-lucide="menu" class="w-6 h-6 mobile-menu-icon-open" aria-hidden="true"></i>
        <i data-lucide="x" class="w-6 h-6 mobile-menu-icon-close hidden" aria-hidden="true"></i>
      </button>
    </div>
  </div>
</nav>

<!-- Mobile menu overlay (backdrop only; panel sits on top) -->
<div id="mobile-menu-overlay" class="fixed inset-0 z-[60] bg-black/30 backdrop-blur-[2px] md:hidden opacity-0 pointer-events-none transition-opacity duration-300 ease-out" aria-hidden="true"></div>

<!-- Mobile menu: panel – fully off-screen when closed (right:0 + translate-x-full), no visible bar -->
<div
  id="mobile-menu-panel"
  class="fixed top-0 right-0 bottom-0 z-[70] w-[min(300px,100vw)] rounded-l-2xl glass border-l border-edge shadow-2xl md:hidden flex flex-col translate-x-full transition-[transform] duration-300 ease-out will-change-transform"
  aria-label="Mobile menu"
  aria-hidden="true"
>
  <div class="flex justify-end items-center p-4 border-b border-edge rounded-t-2xl">
    <button type="button" id="mobile-menu-close" class="inline-flex items-center justify-center w-10 h-10 rounded-full glass text-content" aria-label="Close menu">
      <i data-lucide="x" class="w-5 h-5"></i>
    </button>
  </div>
  <div class="flex-1 overflow-y-auto py-6 px-4">
    <nav class="flex flex-col gap-1" aria-label="Mobile navigation">
      <a class="mobile-menu-link block py-3 px-4 rounded-xl text-base font-medium <?php echo $navCurrent === 'home' ? 'text-content bg-white/10 dark:bg-white/5' : 'text-content hover:bg-white/5'; ?>" href="<?php echo $base ? $base . 'index.php' : 'index.php'; ?>">Home</a>
      <a class="mobile-menu-link block py-3 px-4 rounded-xl text-base font-medium <?php echo $navCurrent === 'capabilities' ? 'text-content bg-white/10 dark:bg-white/5' : 'text-content hover:bg-white/5'; ?>" href="<?php echo $base . $u('capabilities.php'); ?>">Capabilities</a>
      <a class="mobile-menu-link block py-3 px-4 rounded-xl text-base font-medium <?php echo $navCurrent === 'projects' ? 'text-content bg-white/10 dark:bg-white/5' : 'text-content hover:bg-white/5'; ?>" href="<?php echo $base . $u('projects.php'); ?>">Projects</a>
      <a class="mobile-menu-link block py-3 px-4 rounded-xl text-base font-medium <?php echo $navCurrent === 'industries' ? 'text-content bg-white/10 dark:bg-white/5' : 'text-content hover:bg-white/5'; ?>" href="<?php echo $base . $u('industries.php'); ?>">Industries</a>
      <a class="mobile-menu-link block py-3 px-4 rounded-xl text-base font-medium <?php echo $navCurrent === 'brands' ? 'text-content bg-white/10 dark:bg-white/5' : 'text-content hover:bg-white/5'; ?>" href="<?php echo $base . $u('brands.php'); ?>">Brands</a>
      <a class="mobile-menu-link block py-3 px-4 rounded-xl text-base font-medium <?php echo $navCurrent === 'contact' ? 'text-content bg-white/10 dark:bg-white/5' : 'text-content hover:bg-white/5'; ?> mt-4 border-t border-edge pt-6" href="<?php echo $base . $u('contact.php'); ?>">Contact</a>
    </nav>
  </div>
</div>

<script>
(function() {
  var btn = document.getElementById('mobile-menu-btn');
  var panel = document.getElementById('mobile-menu-panel');
  var overlay = document.getElementById('mobile-menu-overlay');
  var closeBtn = document.getElementById('mobile-menu-close');
  var links = document.querySelectorAll('.mobile-menu-link');
  var iconOpen = document.querySelector('.mobile-menu-icon-open');
  var iconClose = document.querySelector('.mobile-menu-icon-close');

  function openMenu() {
    if (!panel || !overlay) return;
    panel.classList.remove('translate-x-full');
    panel.setAttribute('aria-hidden', 'false');
    overlay.classList.remove('opacity-0', 'pointer-events-none');
    overlay.setAttribute('aria-hidden', 'false');
    if (btn) {
      btn.setAttribute('aria-expanded', 'true');
      btn.setAttribute('aria-label', 'Close menu');
    }
    if (iconOpen) iconOpen.classList.add('hidden');
    if (iconClose) iconClose.classList.remove('hidden');
    document.documentElement.style.overflow = 'hidden';
    if (typeof lucide !== 'undefined' && lucide.createIcons) lucide.createIcons();
  }

  function closeMenu() {
    if (!panel || !overlay) return;
    panel.classList.add('translate-x-full');
    panel.setAttribute('aria-hidden', 'true');
    overlay.classList.add('opacity-0', 'pointer-events-none');
    overlay.setAttribute('aria-hidden', 'true');
    if (btn) {
      btn.setAttribute('aria-expanded', 'false');
      btn.setAttribute('aria-label', 'Open menu');
    }
    if (iconOpen) iconOpen.classList.remove('hidden');
    if (iconClose) iconClose.classList.add('hidden');
    document.documentElement.style.overflow = '';
  }

  if (btn) btn.addEventListener('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    if (panel.classList.contains('translate-x-full')) openMenu();
    else closeMenu();
  });
  if (closeBtn) closeBtn.addEventListener('click', closeMenu);
  if (overlay) overlay.addEventListener('click', closeMenu);
  links.forEach(function(link) { link.addEventListener('click', closeMenu); });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && panel && panel.classList.contains('translate-x-full') === false) closeMenu();
  });
})();
</script>
