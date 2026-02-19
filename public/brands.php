<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Our Brands, Bin Naeem Industries';
$description = 'Specialized companies under Bin Naeem Industries: Naeem Packages, Box Pack, Mondsub, NS Builders, House of Piñatas, Hanplas.';
$canonical = 'https://binnaeemindustries.com/brands';
$currentPage = 'brands';
$showWhatsApp = true;
$waPrefillText = 'Hi, I would like a quote from one of your brands.';

$compactTitle = 'Our Brands';
$compactSubtitle = 'Specialized companies under Bin Naeem Industries';
$compactBreadcrumb = [['label' => 'Brands', 'url' => '']];

$brandsList = [
  [
    'slug' => 'naeem-packages',
    'name' => 'Naeem Packages',
    'summary' => 'Packaging and supply chain solutions for industrial and consumer markets.',
    'tag' => 'Packaging',
    'industries' => ['FMCG', 'E-commerce', 'Logistics'],
    'segment' => 'industrial',
    'logo' => 'assets/logos/naeem-packages.PNG',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB0bikdpbTnJ3JPPNA0q3fKk9Dq1kLKuoXvLzBYdGrkCcm0CRu0iKMh35v_CUD3YFx6wSIEev3Pm8ZOHHvl4YVLHRNFgGwhp9UGXpT6_4aijCjld_fKddCFyVoEABYUta4Q85wyubBj-wXbcCyvUaA-dgBXNu_OZFc6sdPmTr1TE-WNtA2Qk1MIah20aA04hB25OX-y4ZGTY4VDDgCztn2TMbVy8zFcezieHpfAAMTHgfHL0oZJrD2l6X6FekGrLtXgsMEuTZByRQU',
  ],
  [
    'slug' => 'box-pack',
    'name' => 'Box Pack',
    'summary' => 'Industrial and consumer packaging solutions for safety and efficiency in supply chains.',
    'tag' => 'Packaging',
    'industries' => ['FMCG', 'Retail', 'E-commerce'],
    'segment' => 'industrial',
    'logo' => 'assets/logos/box-pack.PNG',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD1R0EYTg5dXaDmB_vGLOYt0kizi-lRXsoH7z0bDF4rqER2-qgnGAgHA368rFoshE7A_tGSe1cmCEQYC2MMN_-Pmr6D9fQU6D_mOpWx5nMj_vX6Ogk_oHpTI39_rK2nwxT8hsiPGdeq8ecr1V1_V74CtbSvSLGIRNTAw1F1Isa9BAdYBoAETAryLmdMWFC1jzfZ9dWKWEMITWS8MJiIVbGL9xeX-yycbeRPHPGediCR6J0j_xe-yNGIKTpsHlJPFBAl8twp8m__RDs',
  ],
  [
    'slug' => 'mondsub',
    'name' => 'Mondsub',
    'summary' => 'Industrial chemical synthesis and raw material processing for manufacturing.',
    'tag' => 'Chemicals',
    'industries' => ['Manufacturing', 'FMCG'],
    'segment' => 'industrial',
    'logo' => 'assets/logos/mondsub.PNG',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAFV3i34lWRoH5e1v-t3Erke-0CSCw-29gWy_ASETj7P57atcA28U2wbH7h4j6CgBAXD1aRrhzZ8utR_nThZFvG0FMR_x60PzPyXTw9zB99Kt0ywqEIdQsB4p1wtavqBEi8p0E0R8eEXikBTeuhyl3QocJn1vLzFPEytKuX6W6qMixU6Jwpu3wc59e9XjYi8-LDoAF5CnUAd6nCM-L8MseRisn8lHNHFvDJjbzpqAy11PokHY8AYkYns10TWo85vsDXHcoO_ZyuH0o',
  ],
  [
    'slug' => 'ns-builders',
    'name' => 'NS Builders',
    'summary' => 'Construction and infrastructure with engineering and safety standards.',
    'tag' => 'Infrastructure',
    'industries' => ['Construction', 'Infrastructure'],
    'segment' => 'industrial',
    'logo' => 'assets/logos/ns-builders.PNG',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDFCE3TeM_RSmldhflkSqLbEJ9h1-T5bgoMF8rOIDxA4Ho7CHsOrEHmu9L9lAfI7noNfeBVecCVvGCYAAJvJIc319DT7M6iyZ2czw03YbFeFAQULMSoajuCehgtsZBGJiVq39ij2ivVPBRdjzGz1TMaBWJTYvNIcuLjfMdIWCdBmKjAlHk5t-K7s2NxT-9AOonBChV4NX5n2JkurSK5Q23gFKXkUla-JLbMqLcCOKiIDHqXHWZJYenv5cfOPBQbdJTgMrVNkyMSjwc',
  ],
  [
    'slug' => 'house-of-pinatas',
    'name' => 'House of Piñatas',
    'summary' => 'Premium piñatas and celebration products for retail and gifting.',
    'tag' => 'Consumer',
    'industries' => ['Retail', 'Gifting', 'Events'],
    'segment' => 'consumer',
    'logo' => 'assets/logos/pinatas.PNG',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDdo_fFfBNLBVSeVnMqsJYfWPqx2tQCeiHnBeVdmTGdcrsrnLuumD_uCAhhK3sPtGSXTif5u0QF9A0W2y4e6slVbEcOD5B-pomHxpm3f1kL2VKxf7SiXewulB4zhPEXo9DRXkJNFa-pGL-sJTkBziuohr1B2BRyYVngJVstjfkCX6kFcabukz6A16yrEBnn2wYvopefcU32w1QFSPoPX4hz_WmqvTbq-W2WdFU_1Wj9KPs265nf149pGsniaOLwchv6SqoDmbykrzE',
  ],
  [
    'slug' => 'hanplas',
    'name' => 'Hanplas',
    'summary' => 'Polymer solutions and sustainable plastics engineering.',
    'tag' => 'Polymers',
    'industries' => ['Food & Beverage', 'FMCG', 'Packaging'],
    'segment' => 'industrial',
    'logo' => 'assets/logos/hanplas.PNG',
    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBxmpkE7Vmn9bcdrShBbjhuWneY1D0Ie_TQRlMvjoRhEjjwneVaRIe9NOI98RbJdQI2kxe4ZYB-qUwyU9Xpw8kQbtODZdmf3Dnk9_vBtU1aaIsWN9uNxqLozupOhjkL4ENMgFmjeuDzBjUInjRLE5XvA7TiLWKYd0Ei2Tw1rKhMCNTiXJGnvHD2flwCww2rwxiwHjzrZ2GVRMF1klav4YvT2sQDEivP4M87tj9bJVt2UpbgdoxjSBPYyYSHdyQvgaQvg2w9xqiGchE',
  ],
];

require INCLUDES_PATH . '/page-start.php';
include INCLUDES_PATH . '/compact-page-header.php';
?>

<section class="py-12 px-6 md:px-12 bg-canvas border-b border-edge">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-6">
      <p class="text-sm font-medium text-muted">Filter by segment</p>
      <div class="flex gap-2" id="brand-filter">
        <button type="button" class="brand-segment-chip px-6 py-2 rounded-full border border-edge text-sm font-semibold text-content bg-surface2 transition-all" data-segment="">All</button>
        <button type="button" class="brand-segment-chip px-6 py-2 rounded-full border border-edge text-sm font-semibold text-muted hover:bg-surface2 transition-all" data-segment="industrial">Industrial</button>
        <button type="button" class="brand-segment-chip px-6 py-2 rounded-full border border-edge text-sm font-semibold text-muted hover:bg-surface2 transition-all" data-segment="consumer">Consumer</button>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="brands-grid">
      <?php foreach ($brandsList as $b): ?>
      <div class="brand-card group relative h-[580px] rounded-2xl overflow-hidden bg-surface2 border border-edge hover:border-muted transition-all duration-500" data-segment="<?php echo htmlspecialchars($b['segment'], ENT_QUOTES, 'UTF-8'); ?>">
        <img alt="<?php echo htmlspecialchars($b['name'], ENT_QUOTES, 'UTF-8'); ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-40" src="<?php echo htmlspecialchars($b['image'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy" />
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
        <div class="absolute inset-0 p-8 flex flex-col justify-between z-10">
          <div class="flex justify-between items-start">
            <span class="text-[10px] font-bold uppercase tracking-widest border border-white/20 px-3 py-1 rounded-full backdrop-blur-md text-white/80"><?php echo htmlspecialchars($b['tag'], ENT_QUOTES, 'UTF-8'); ?></span>
            <div class="w-14 h-14 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 group-hover:bg-white group-hover:text-black transition-colors duration-300 p-1 overflow-hidden">
              <img src="<?php echo htmlspecialchars($b['logo'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($b['name'], ENT_QUOTES, 'UTF-8'); ?>" class="w-full h-full object-cover object-center" />
            </div>
          </div>
          <div>
            <h3 class="font-display text-4xl text-white mb-3 group-hover:translate-x-2 transition-transform duration-300"><?php echo htmlspecialchars($b['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
            <p class="text-gray-400 text-sm leading-relaxed mb-4 border-l border-white/30 pl-4 line-clamp-2 group-hover:text-gray-200"><?php echo htmlspecialchars($b['summary'], ENT_QUOTES, 'UTF-8'); ?></p>
            <div class="flex flex-wrap gap-2 mb-6">
              <?php foreach ($b['industries'] as $ind): ?>
              <span class="text-[10px] uppercase tracking-wider text-white/70 border border-white/20 px-2 py-0.5 rounded"><?php echo htmlspecialchars($ind, ENT_QUOTES, 'UTF-8'); ?></span>
              <?php endforeach; ?>
            </div>
            <div class="border-t border-white/10 pt-6 flex flex-wrap gap-4">
              <a href="brands/<?php echo htmlspecialchars($b['slug'], ENT_QUOTES, 'UTF-8'); ?>.php" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-white hover:underline">
                View Brand
                <span class="material-icons-outlined text-sm">arrow_forward</span>
              </a>
              <a href="contact.php?brand=<?php echo htmlspecialchars($b['slug'], ENT_QUOTES, 'UTF-8'); ?>#contact-form" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-white/80 hover:text-white border-l border-white/20 pl-4">
                Get Quote
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
(function() {
  var segment = '';
  document.querySelectorAll('.brand-segment-chip').forEach(function(btn) {
    btn.addEventListener('click', function() {
      segment = btn.getAttribute('data-segment') || '';
      document.querySelectorAll('.brand-segment-chip').forEach(function(b) {
        if ((b.getAttribute('data-segment') || '') === segment) {
          b.classList.add('text-content', 'bg-surface2');
          b.classList.remove('text-muted');
        } else {
          b.classList.remove('text-content', 'bg-surface2');
          b.classList.add('text-muted');
        }
      });
      document.querySelectorAll('.brand-card').forEach(function(card) {
        var s = card.getAttribute('data-segment') || '';
        card.style.display = (segment === '' || s === segment) ? '' : 'none';
      });
    });
  });
})();
</script>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
