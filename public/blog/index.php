<?php
require_once __DIR__ . '/../../includes/config.php';

$title = 'Blog | Bin Naaem Industries';
$description = 'Insights on industrial design, manufacturing, and infrastructure from Bin Naaem Industries.';
$canonical = 'https://binnaeemindustries.com/blog/';
$currentPage = 'blog';
$isBlog = true;

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative pt-40 pb-20 px-6 md:px-12 max-w-[1600px] mx-auto">
  <div class="flex flex-col md:flex-row items-end justify-between gap-12">
    <div class="md:w-2/3">
      <span class="inline-block py-1 px-3 border border-edge rounded-full text-xs font-semibold uppercase tracking-widest text-muted mb-6">Insights</span>
      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-content">Blog</h1>
    </div>
    <div class="md:w-1/3 pb-2">
      <p class="text-muted text-lg leading-relaxed">Updates and perspectives on industrial engineering, sustainability, and the future of manufacturing.</p>
    </div>
  </div>
</header>

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php
      $posts = [
        ['slug' => 'industrial-trends-2024', 'title' => 'Industrial Trends Shaping 2024', 'excerpt' => 'A look at the key drivers in manufacturing and infrastructure for the year ahead.', 'date' => '2024-01-15'],
        ['slug' => 'sustainable-manufacturing', 'title' => 'Sustainable Manufacturing in Practice', 'excerpt' => 'How we integrate environmental stewardship into our production processes.', 'date' => '2024-01-08'],
      ];
      foreach ($posts as $p):
        $postUrl = 'post.php?slug=' . rawurlencode($p['slug']);
      ?>
      <a href="<?php echo htmlspecialchars($postUrl, ENT_QUOTES, 'UTF-8'); ?>" class="group block p-8 rounded-2xl border border-edge bg-surface hover:border-muted transition-colors">
        <span class="text-xs font-medium text-muted"><?php echo htmlspecialchars($p['date'], ENT_QUOTES, 'UTF-8'); ?></span>
        <h2 class="font-display text-2xl text-content mt-2 mb-4 group-hover:underline decoration-1 underline-offset-4"><?php echo htmlspecialchars($p['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <p class="text-muted text-sm leading-relaxed"><?php echo htmlspecialchars($p['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
        <span class="inline-flex items-center gap-1 mt-4 text-xs font-bold uppercase tracking-wider text-content">Read more <span class="material-symbols-outlined text-sm">arrow_forward</span></span>
      </a>
      <?php endforeach; ?>
    </div>
    <p class="mt-12 text-center text-muted text-sm">More articles coming soon. <a href="../contact.php" class="text-content underline hover:no-underline">Get in touch</a> for inquiries.</p>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
