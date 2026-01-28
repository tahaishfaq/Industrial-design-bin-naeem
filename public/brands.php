<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Brands and Subsidiaries, Naeem Group';
$description = 'Explore our industrial and consumer subsidiaries and the solutions they deliver.';
$canonical = 'https://binnaeemindustries.com/brands';
$currentPage = 'brands';

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative w-full h-[60vh] min-h-[500px] overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img alt="Industrial abstract architecture" class="w-full h-full object-cover brightness-[0.5] dark:brightness-[0.3]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgcGo5xGO3N07RKZ_N1K5-Xaupso9oPY61bZ_LZaqwhX0cCE-xTzAOr8okqMJnGnwbxeWO--piZfKy7OvvsR5G_v888hsC2lkpfTKXsgZdVY7j519mI33-3t2f-ZcnoQJsF3Xxwgcj_4k64js9cOCUWOC7IKi1kA-Y3OH3oAck-5iX1qcq3IeswyZpERYfY0Bng7JF7LXmLceh3rCGocnapZ50bzcVu39XIB1sqtZXn7XSDx1y1edA_nXxT-t67gjS7O-PWf8f5o8" loading="eager" width="1600" height="900" />
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-background-light dark:to-background-dark opacity-100"></div>
  </div>
  <div class="relative z-10 flex flex-col justify-end h-full px-6 md:px-12 pb-20 max-w-[1600px] mx-auto animate-fade-in">
    <div class="mb-8">
      <span class="text-sm font-medium text-gray-400 uppercase tracking-widest block mb-4 border-l-2 border-white pl-4">Subsidiaries Overview</span>
      <h1 class="font-display text-5xl md:text-7xl leading-[1.1] text-gray-900 dark:text-white max-w-4xl">A Collective of <br/><span class="italic font-light opacity-80">Industry Leaders</span> &amp; <br/>Innovators</h1>
    </div>
  </div>
</header>

<section class="py-12 px-6 md:px-12 bg-background-light dark:bg-background-dark min-h-screen">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8 border-b border-gray-800 pb-12 animate-fade-in delay-100">
      <div class="max-w-2xl">
        <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-2">(01) Our Brands</span>
        <h2 class="font-display text-3xl md:text-4xl text-gray-900 dark:text-white leading-tight">Our portfolio represents a diverse ecosystem of specialized subsidiaries, each engineered to define the future of its sector.</h2>
      </div>
      <div class="flex gap-4">
        <span class="px-6 py-2 rounded-full border border-gray-700 bg-white/5 text-white text-sm uppercase tracking-wider">All</span>
        <span class="px-6 py-2 rounded-full border border-gray-700 bg-transparent text-gray-400 text-sm uppercase tracking-wider">Industrial</span>
        <span class="px-6 py-2 rounded-full border border-gray-700 bg-transparent text-gray-400 text-sm uppercase tracking-wider">Consumer</span>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fade-in delay-200">
      <a href="brands/box-pack.php" class="group relative h-[550px] rounded-2xl overflow-hidden bg-surface-dark border border-white/5 hover:border-white/20 transition-all duration-500 cursor-pointer block">
        <img alt="Box Pack Logistics" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-40" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1R0EYTg5dXaDmB_vGLOYt0kizi-lRXsoH7z0bDF4rqER2-qgnGAgHA368rFoshE7A_tGSe1cmCEQYC2MMN_-Pmr6D9fQU6D_mOpWx5nMj_vX6Ogk_oHpTI39_rK2nwxT8hsiPGdeq8ecr1V1_V74CtbSvSLGIRNTAw1F1Isa9BAdYBoAETAryLmdMWFC1jzfZ9dWKWEMITWS8MJiIVbGL9xeX-yycbeRPHPGediCR6J0j_xe-yNGIKTpsHlJPFBAl8twp8m__RDs" loading="lazy" />
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
        <div class="absolute inset-0 p-8 flex flex-col justify-between z-10">
          <div class="flex justify-between items-start">
            <span class="text-[10px] font-bold uppercase tracking-widest border border-white/20 px-3 py-1 rounded-full backdrop-blur-md text-white/80">Packaging</span>
            <div class="w-14 h-14 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 group-hover:bg-white group-hover:text-black transition-colors duration-300"><span class="material-icons-outlined text-2xl">inventory_2</span></div>
          </div>
          <div>
            <h3 class="font-display text-4xl text-white mb-3 group-hover:translate-x-2 transition-transform duration-300">Box Pack</h3>
            <p class="text-gray-400 text-sm leading-relaxed mb-8 border-l border-white/30 pl-4 h-10 line-clamp-2 group-hover:text-gray-200">Delivering advanced industrial packaging solutions that ensure safety and efficiency in global supply chains.</p>
            <div class="border-t border-white/10 pt-6 flex items-center justify-between group-hover:border-white/30 transition-colors">
              <span class="text-xs font-bold uppercase tracking-widest text-white">View Brand</span>
              <span class="material-icons-outlined text-white text-sm transform group-hover:translate-x-2 transition-transform">arrow_forward</span>
            </div>
          </div>
        </div>
      </a>
      <a href="brands/mondsub.php" class="group relative h-[550px] rounded-2xl overflow-hidden bg-surface-dark border border-white/5 hover:border-white/20 transition-all duration-500 cursor-pointer block">
        <img alt="Mondsub Chemical Facility" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-40" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFV3i34lWRoH5e1v-t3Erke-0CSCw-29gWy_ASETj7P57atcA28U2wbH7h4j6CgBAXD1aRrhzZ8utR_nThZFvG0FMR_x60PzPyXTw9zB99Kt0ywqEIdQsB4p1wtavqBEi8p0E0R8eEXikBTeuhyl3QocJn1vLzFPEytKuX6W6qMixU6Jwpu3wc59e9XjYi8-LDoAF5CnUAd6nCM-L8MseRisn8lHNHFvDJjbzpqAy11PokHY8AYkYns10TWo85vsDXHcoO_ZyuH0o" loading="lazy" />
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
        <div class="absolute inset-0 p-8 flex flex-col justify-between z-10">
          <div class="flex justify-between items-start">
            <span class="text-[10px] font-bold uppercase tracking-widest border border-white/20 px-3 py-1 rounded-full backdrop-blur-md text-white/80">Chemicals</span>
            <div class="w-14 h-14 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 group-hover:bg-white group-hover:text-black transition-colors duration-300"><span class="material-icons-outlined text-2xl">science</span></div>
          </div>
          <div>
            <h3 class="font-display text-4xl text-white mb-3 group-hover:translate-x-2 transition-transform duration-300">Mondsub</h3>
            <p class="text-gray-400 text-sm leading-relaxed mb-8 border-l border-white/30 pl-4 h-10 line-clamp-2 group-hover:text-gray-200">Pioneering industrial chemical synthesis and raw material processing for next-generation manufacturing.</p>
            <div class="border-t border-white/10 pt-6 flex items-center justify-between group-hover:border-white/30 transition-colors">
              <span class="text-xs font-bold uppercase tracking-widest text-white">View Brand</span>
              <span class="material-icons-outlined text-white text-sm transform group-hover:translate-x-2 transition-transform">arrow_forward</span>
            </div>
          </div>
        </div>
      </a>
      <a href="brands/hanplas.php" class="group relative h-[550px] rounded-2xl overflow-hidden bg-surface-dark border border-white/5 hover:border-white/20 transition-all duration-500 cursor-pointer block">
        <img alt="Hanplas Manufacturing" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-40" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxmpkE7Vmn9bcdrShBbjhuWneY1D0Ie_TQRlMvjoRhEjjwneVaRIe9NOI98RbJdQI2kxe4ZYB-qUwyU9Xpw8kQbtODZdmf3Dnk9_vBtU1aaIsWN9uNxqLozupOhjkL4ENMgFmjeuDzBjUInjRLE5XvA7TiLWKYd0Ei2Tw1rKhMCNTiXJGnvHD2flwCww2rwxiwHjzrZ2GVRMF1klav4YvT2sQDEivP4M87tj9bJVt2UpbgdoxjSBPYyYSHdyQvgaQvg2w9xqiGchE" loading="lazy" />
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
        <div class="absolute inset-0 p-8 flex flex-col justify-between z-10">
          <div class="flex justify-between items-start">
            <span class="text-[10px] font-bold uppercase tracking-widest border border-white/20 px-3 py-1 rounded-full backdrop-blur-md text-white/80">Polymers</span>
            <div class="w-14 h-14 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 group-hover:bg-white group-hover:text-black transition-colors duration-300"><span class="material-icons-outlined text-2xl">recycling</span></div>
          </div>
          <div>
            <h3 class="font-display text-4xl text-white mb-3 group-hover:translate-x-2 transition-transform duration-300">Hanplas</h3>
            <p class="text-gray-400 text-sm leading-relaxed mb-8 border-l border-white/30 pl-4 h-10 line-clamp-2 group-hover:text-gray-200">Innovative polymer solutions and sustainable plastics engineering for a circular economy.</p>
            <div class="border-t border-white/10 pt-6 flex items-center justify-between group-hover:border-white/30 transition-colors">
              <span class="text-xs font-bold uppercase tracking-widest text-white">View Brand</span>
              <span class="material-icons-outlined text-white text-sm transform group-hover:translate-x-2 transition-transform">arrow_forward</span>
            </div>
          </div>
        </div>
      </a>
      <a href="brands/house-of-pinatas.php" class="group relative h-[550px] rounded-2xl overflow-hidden bg-surface-dark border border-white/5 hover:border-white/20 transition-all duration-500 cursor-pointer block">
        <img alt="Solar Energy Farm" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-40" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdo_fFfBNLBVSeVnMqsJYfWPqx2tQCeiHnBeVdmTGdcrsrnLuumD_uCAhhK3sPtGSXTif5u0QF9A0W2y4e6slVbEcOD5B-pomHxpm3f1kL2VKxf7SiXewulB4zhPEXo9DRXkJNFa-pGL-sJTkBziuohr1B2BRyYVngJVstjfkCX6kFcabukz6A16yrEBnn2wYvopefcU32w1QFSPoPX4hz_WmqvTbq-W2WdFU_1Wj9KPs265nf149pGsniaOLwchv6SqoDmbykrzE" loading="lazy" />
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
        <div class="absolute inset-0 p-8 flex flex-col justify-between z-10">
          <div class="flex justify-between items-start">
            <span class="text-[10px] font-bold uppercase tracking-widest border border-white/20 px-3 py-1 rounded-full backdrop-blur-md text-white/80">Renewables</span>
            <div class="w-14 h-14 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 group-hover:bg-white group-hover:text-black transition-colors duration-300"><span class="material-icons-outlined text-2xl">bolt</span></div>
          </div>
          <div>
            <h3 class="font-display text-4xl text-white mb-3 group-hover:translate-x-2 transition-transform duration-300">BN Energy</h3>
            <p class="text-gray-400 text-sm leading-relaxed mb-8 border-l border-white/30 pl-4 h-10 line-clamp-2 group-hover:text-gray-200">Powering the grid with sustainable, renewable solutions across the MENA region.</p>
            <div class="border-t border-white/10 pt-6 flex items-center justify-between group-hover:border-white/30 transition-colors">
              <span class="text-xs font-bold uppercase tracking-widest text-white">View Brand</span>
              <span class="material-icons-outlined text-white text-sm transform group-hover:translate-x-2 transition-transform">arrow_forward</span>
            </div>
          </div>
        </div>
      </a>
      <a href="brands/ns-builders.php" class="group relative h-[550px] rounded-2xl overflow-hidden bg-surface-dark border border-white/5 hover:border-white/20 transition-all duration-500 cursor-pointer block">
        <img alt="Construction Site" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-40" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFCE3TeM_RSmldhflkSqLbEJ9h1-T5bgoMF8rOIDxA4Ho7CHsOrEHmu9L9lAfI7noNfeBVecCVvGCYAAJvJIc319DT7M6iyZ2czw03YbFeFAQULMSoajuCehgtsZBGJiVq39ij2ivVPBRdjzGz1TMaBWJTYvNIcuLjfMdIWCdBmKjAlHk5t-K7s2NxT-9AOonBChV4NX5n2JkurSK5Q23gFKXkUla-JLbMqLcCOKiIDHqXHWZJYenv5cfOPBQbdJTgMrVNkyMSjwc" loading="lazy" />
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
        <div class="absolute inset-0 p-8 flex flex-col justify-between z-10">
          <div class="flex justify-between items-start">
            <span class="text-[10px] font-bold uppercase tracking-widest border border-white/20 px-3 py-1 rounded-full backdrop-blur-md text-white/80">Infrastructure</span>
            <div class="w-14 h-14 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 group-hover:bg-white group-hover:text-black transition-colors duration-300"><span class="material-icons-outlined text-2xl">apartment</span></div>
          </div>
          <div>
            <h3 class="font-display text-4xl text-white mb-3 group-hover:translate-x-2 transition-transform duration-300">BN Construct</h3>
            <p class="text-gray-400 text-sm leading-relaxed mb-8 border-l border-white/30 pl-4 h-10 line-clamp-2 group-hover:text-gray-200">Building the skylines of tomorrow with state-of-the-art engineering practices and safety standards.</p>
            <div class="border-t border-white/10 pt-6 flex items-center justify-between group-hover:border-white/30 transition-colors">
              <span class="text-xs font-bold uppercase tracking-widest text-white">View Brand</span>
              <span class="material-icons-outlined text-white text-sm transform group-hover:translate-x-2 transition-transform">arrow_forward</span>
            </div>
          </div>
        </div>
      </a>
      <a href="brands/naeem-packages.php" class="group relative h-[550px] rounded-2xl overflow-hidden bg-surface-dark border border-white/5 hover:border-white/20 transition-all duration-500 cursor-pointer block">
        <img alt="Global Logistics" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-40" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0bikdpbTnJ3JPPNA0q3fKk9Dq1kLKuoXvLzBYdGrkCcm0CRu0iKMh35v_CUD3YFx6wSIEev3Pm8ZOHHvl4YVLHRNFgGwhp9UGXpT6_4aijCjld_fKddCFyVoEABYUta4Q85wyubBj-wXbcCyvUaA-dgBXNu_OZFc6sdPmTr1TE-WNtA2Qk1MIah20aA04hB25OX-y4ZGTY4VDDgCztn2TMbVy8zFcezieHpfAAMTHgfHL0oZJrD2l6X6FekGrLtXgsMEuTZByRQU" loading="lazy" />
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
        <div class="absolute inset-0 p-8 flex flex-col justify-between z-10">
          <div class="flex justify-between items-start">
            <span class="text-[10px] font-bold uppercase tracking-widest border border-white/20 px-3 py-1 rounded-full backdrop-blur-md text-white/80">Transport</span>
            <div class="w-14 h-14 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 group-hover:bg-white group-hover:text-black transition-colors duration-300"><span class="material-icons-outlined text-2xl">local_shipping</span></div>
          </div>
          <div>
            <h3 class="font-display text-4xl text-white mb-3 group-hover:translate-x-2 transition-transform duration-300">BN Logistics</h3>
            <p class="text-gray-400 text-sm leading-relaxed mb-8 border-l border-white/30 pl-4 h-10 line-clamp-2 group-hover:text-gray-200">Connecting markets through efficient, reliable, and swift supply chain solutions worldwide.</p>
            <div class="border-t border-white/10 pt-6 flex items-center justify-between group-hover:border-white/30 transition-colors">
              <span class="text-xs font-bold uppercase tracking-widest text-white">View Brand</span>
              <span class="material-icons-outlined text-white text-sm transform group-hover:translate-x-2 transition-transform">arrow_forward</span>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
