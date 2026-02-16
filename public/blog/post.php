<?php
require_once __DIR__ . '/../../includes/config.php';

$slug = isset($_GET['slug']) ? trim((string) $_GET['slug']) : '';
$posts = [
  'industrial-trends-2024' => ['title' => 'Industrial Trends Shaping 2024', 'date' => '2024-01-15', 'body' => '<p>The industrial landscape continues to evolve with automation, sustainability, and supply chain resilience at the forefront. At Bin Naaem Industries, we are aligning our capabilities with these trends to deliver solutions that meet the demands of tomorrow.</p><p>Key areas we are focused on include smart manufacturing, renewable energy integration, and modular infrastructure that can adapt to changing market conditions.</p>'],
  'sustainable-manufacturing' => ['title' => 'Sustainable Manufacturing in Practice', 'date' => '2024-01-08', 'body' => '<p>Environmental stewardship is integral to our operations. From material selection to energy-efficient processes, we implement sustainable practices across our manufacturing and infrastructure projects.</p><p>We work with clients to achieve their sustainability goals while maintaining the quality and reliability they expect.</p>'],
];

$post = $slug !== '' && isset($posts[$slug]) ? $posts[$slug] : null;
if (!$post) {
  header('Location: index.php', true, 302);
  exit;
}

$title = $post['title'] . ' | Bin Naaem Industries';
$description = strip_tags($post['body']);
$description = strlen($description) > 160 ? substr($description, 0, 157) . '...' : $description;
$canonical = 'https://binnaeemindustries.com/blog/post.php?slug=' . rawurlencode($slug);
$currentPage = 'blog';
$isBlog = true;

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative pt-40 pb-12 px-6 md:px-12 max-w-[1600px] mx-auto">
  <a href="index.php" class="inline-flex items-center gap-1 text-sm font-medium text-muted hover:text-content mb-8">← Back to Blog</a>
  <span class="text-xs font-medium text-muted"><?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?></span>
  <h1 class="font-display text-4xl md:text-6xl lg:text-7xl leading-tight text-content mt-2 max-w-4xl"><?php echo htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
</header>

<article class="py-16 px-6 md:px-12 bg-canvas">
  <div class="max-w-3xl mx-auto prose prose-lg dark:prose-invert prose-gray max-w-none">
    <div class="text-muted leading-relaxed">
      <?php echo $post['body']; ?>
    </div>
  </div>
  <div class="max-w-3xl mx-auto mt-12 pt-8 border-t border-edge">
    <a href="index.php" class="inline-flex items-center gap-2 text-sm font-semibold text-content hover:underline">← Back to Blog</a>
  </div>
</article>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
