<?php
/**
 * Compact page header for corporate pages (no full-screen hero).
 * Expects: $compactTitle, $compactSubtitle, optional $compactBreadcrumb, $compactPrimaryCta, $compactSecondaryCta.
 * Uses existing design classes only.
 */
$base = (isset($isBrand) && $isBrand) ? '../' : ((isset($isBlog) && $isBlog) ? '../' : '');
?>
<header class="relative pt-32 pb-16 px-6 md:px-12 max-w-[1600px] mx-auto border-b border-edge">
  <?php if (!empty($compactBreadcrumb) && is_array($compactBreadcrumb)): ?>
  <nav class="text-sm text-muted mb-6" aria-label="Breadcrumb">
    <a href="<?php echo $base ? $base . 'index.php' : 'index.php'; ?>" class="hover:text-content transition-colors">Home</a>
    <?php foreach ($compactBreadcrumb as $i => $item): ?>
      <span class="mx-2">/</span>
      <?php if (!empty($item['url'])): ?>
      <a href="<?php echo htmlspecialchars($base . $item['url'], ENT_QUOTES, 'UTF-8'); ?>" class="hover:text-content transition-colors"><?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?></a>
      <?php else: ?>
      <span class="text-content"><?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?></span>
      <?php endif; ?>
    <?php endforeach; ?>
  </nav>
  <?php endif; ?>
  <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-8">
    <div>
      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-content max-w-5xl"><?php echo htmlspecialchars($compactTitle ?? '', ENT_QUOTES, 'UTF-8'); ?></h1>
      <?php if (!empty($compactSubtitle)): ?>
      <p class="mt-6 text-muted text-lg max-w-2xl"><?php echo htmlspecialchars($compactSubtitle, ENT_QUOTES, 'UTF-8'); ?></p>
      <?php endif; ?>
    </div>
    <?php if (!empty($compactPrimaryCta) || !empty($compactSecondaryCta)): ?>
    <div class="flex flex-wrap gap-4">
      <?php if (!empty($compactPrimaryCta['url']) && !empty($compactPrimaryCta['label'])): ?>
      <a href="<?php echo htmlspecialchars($base . $compactPrimaryCta['url'], ENT_QUOTES, 'UTF-8'); ?>" class="inline-flex items-center gap-2 glass px-6 py-3 rounded-full text-sm font-semibold text-content hover:opacity-90 transition-all">
        <?php echo htmlspecialchars($compactPrimaryCta['label'], ENT_QUOTES, 'UTF-8'); ?>
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
      <?php endif; ?>
      <?php if (!empty($compactSecondaryCta['url']) && !empty($compactSecondaryCta['label'])): ?>
      <?php $secUrl = (strpos($compactSecondaryCta['url'], 'http') === 0) ? $compactSecondaryCta['url'] : ($base . $compactSecondaryCta['url']); $secExternal = (strpos($secUrl, 'http') === 0); ?>
      <a href="<?php echo htmlspecialchars($secUrl, ENT_QUOTES, 'UTF-8'); ?>" <?php if ($secExternal) echo 'target="_blank" rel="noopener noreferrer"'; ?> class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-semibold border border-edge text-content hover:bg-surface2 transition-all">
        <?php echo htmlspecialchars($compactSecondaryCta['label'], ENT_QUOTES, 'UTF-8'); ?>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
</header>
