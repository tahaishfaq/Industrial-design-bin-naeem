<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Industries We Serve | Bin Naaem Industries';
$description = 'Engineering precision across FMCG, food &amp; beverage, construction, and consumer solutions.';
$canonical = 'https://binnaeemindustries.com/industries';
$currentPage = 'industries';

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative pt-40 pb-20 px-6 md:px-12 max-w-[1600px] mx-auto">
  <div class="flex flex-col md:flex-row items-end justify-between gap-12">
    <div class="md:w-2/3">
      <span class="inline-block py-1 px-3 border border-gray-300 dark:border-gray-700 rounded-full text-xs font-semibold uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-6">Sectors &amp; Capabilities</span>
      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-gray-900 dark:text-white">Industries <br/><span class="italic font-light opacity-60">We Serve</span></h1>
    </div>
    <div class="md:w-1/3 pb-2">
      <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">Engineering precision across diverse ecosystems. From FMCG to heavy construction, we tailor infrastructure to specific industrial needs.</p>
    </div>
  </div>
</header>

<section class="pb-24 px-6 md:px-12">
  <div class="max-w-[1600px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 auto-rows-[500px]">
      <div class="md:col-span-7 group relative rounded-2xl overflow-hidden cursor-pointer">
        <img alt="FMCG Factory Line" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0bikdpbTnJ3JPPNA0q3fKk9Dq1kLKuoXvLzBYdGrkCcm0CRu0iKMh35v_CUD3YFx6wSIEev3Pm8ZOHHvl4YVLHRNFgGwhp9UGXpT6_4aijCjld_fKddCFyVoEABYUta4Q85wyubBj-wXbcCyvUaA-dgBXNu_OZFc6sdPmTr1TE-WNtA2Qk1MIah20aA04hB25OX-y4ZGTY4VDDgCztn2TMbVy8zFcezieHpfAAMTHgfHL0oZJrD2l6X6FekGrLtXgsMEuTZByRQU" loading="lazy" width="800" height="500" />
        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors duration-300"></div>
        <div class="absolute inset-0 p-8 flex flex-col justify-between">
          <div class="flex justify-between items-start">
            <span class="px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-white">01</span>
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center transform scale-0 group-hover:scale-100 transition-transform duration-300 origin-top-right"><span class="material-symbols-outlined text-black">arrow_outward</span></div>
          </div>
          <div>
            <h3 class="font-display text-4xl text-white mb-2">FMCG</h3>
            <p class="text-gray-200 text-sm max-w-md opacity-80 mb-6">High-speed manufacturing solutions and automated supply chain integration for fast-moving goods.</p>
            <a href="capabilities.php" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-white border-b border-white/30 pb-1 hover:border-white transition-colors">View Industry</a>
          </div>
        </div>
      </div>
      <div class="md:col-span-5 group relative rounded-2xl overflow-hidden cursor-pointer">
        <img alt="Food Processing" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdo_fFfBNLBVSeVnMqsJYfWPqx2tQCeiHnBeVdmTGdcrsrnLuumD_uCAhhK3sPtGSXTif5u0QF9A0W2y4e6slVbEcOD5B-pomHxpm3f1kL2VKxf7SiXewulB4zhPEXo9DRXkJNFa-pGL-sJTkBziuohr1B2BRyYVngJVstjfkCX6kFcabukz6A16yrEBnn2wYvopefcU32w1QFSPoPX4hz_WmqvTbq-W2WdFU_1Wj9KPs265nf149pGsniaOLwchv6SqoDmbykrzE" loading="lazy" width="600" height="500" />
        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors duration-300"></div>
        <div class="absolute inset-0 p-8 flex flex-col justify-between">
          <div class="flex justify-between items-start">
            <span class="px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-white">02</span>
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center transform scale-0 group-hover:scale-100 transition-transform duration-300 origin-top-right"><span class="material-symbols-outlined text-black">arrow_outward</span></div>
          </div>
          <div>
            <h3 class="font-display text-4xl text-white mb-2">Food &amp; Beverage</h3>
            <p class="text-gray-200 text-sm max-w-sm opacity-80 mb-6">Hygiene-critical infrastructure engineering ensuring safety and efficiency.</p>
            <a href="capabilities.php" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-white border-b border-white/30 pb-1 hover:border-white transition-colors">View Industry</a>
          </div>
        </div>
      </div>
      <div class="md:col-span-12 group relative rounded-2xl overflow-hidden cursor-pointer">
        <img alt="Construction Site" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 brightness-75" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBN13H0psPt5cKfpbwGYETXbKT9-tJw6XLlFIp09Ubh50ZhcnqB9FQKQHeLa5gDWLte_fPw7mw7grCd7cvjb0L3dyTo09dph_ADEHjai54ixLRO3rDV5Hhlr2YnoSYH6ZVISTdiikmBhJxb0tW4vgePKX31QE4ULQC9DwxYtcwnid3cvl8gDZFbNCu-nYw55W5i4eKUDqSaASdZ18qKfaJamvBNrRw6ph8etNc9MgYdBwIbOKS_rhQTKtvau2F_qUv_84BlNcl8Ouo" loading="lazy" width="1200" height="500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-80"></div>
        <div class="absolute inset-0 p-8 md:p-12 flex flex-col justify-end items-start">
          <span class="absolute top-8 left-8 md:left-12 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-white">03</span>
          <div class="max-w-3xl">
            <h3 class="font-display text-5xl md:text-6xl text-white mb-4">Construction</h3>
            <p class="text-gray-300 text-lg md:text-xl max-w-2xl opacity-90 mb-8 font-light">From urban skyscrapers to industrial complexes, we provide the foundational engineering that shapes modern skylines.</p>
            <a href="capabilities.php" class="px-8 py-4 bg-white text-black rounded-full text-sm font-bold uppercase tracking-widest hover:bg-gray-200 transition-all flex items-center gap-2 group-hover:gap-4">View Industry <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface-light dark:bg-surface-dark rounded-t-[3rem] mt-12 border-t border-gray-200 dark:border-gray-800">
  <div class="max-w-[1600px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-12 lg:gap-24">
      <div class="md:col-span-4">
        <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-4">(Consumer Solutions)</span>
        <h2 class="font-display text-4xl text-gray-900 dark:text-white leading-tight mb-8">Elevating the <span class="italic font-light text-gray-500">consumer experience</span> through smart design.</h2>
        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-8">Beyond heavy industry, Bin Naaem specializes in the nuanced requirements of consumer-facing sectors. We merge aesthetics with logistical precision.</p>
      </div>
      <div class="md:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="group">
          <div class="h-64 rounded-xl overflow-hidden mb-6 relative">
            <img alt="E-commerce Warehouse" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 grayscale group-hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgcGo5xGO3N07RKZ_N1K5-Xaupso9oPY61bZ_LZaqwhX0cCE-xTzAOr8okqMJnGnwbxeWO--piZfKy7OvvsR5G_v888hsC2lkpfTKXsgZdVY7j519mI33-3t2f-ZcnoQJsF3Xxwgcj_4k64js9cOCUWOC7IKi1kA-Y3OH3oAck-5iX1qcq3IeswyZpERYfY0Bng7JF7LXmLceh3rCGocnapZ50bzcVu39XIB1sqtZXn7XSDx1y1edA_nXxT-t67gjS7O-PWf8f5o8" loading="lazy" width="600" height="256" />
            <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
          </div>
          <h3 class="text-xl font-display text-gray-900 dark:text-white mb-3 group-hover:underline decoration-1 underline-offset-4">E-commerce Packaging</h3>
          <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed mb-4">Innovative packaging solutions designed for the rigors of modern logistics. Sustainable, durable, and brand-centric designs that enhance unboxing experiences while optimizing shipping efficiency.</p>
          <a class="inline-flex items-center gap-1 text-xs font-bold uppercase tracking-wider text-gray-900 dark:text-white" href="brands/naeem-packages.php">Learn More <span class="material-symbols-outlined text-sm">east</span></a>
        </div>
        <div class="group">
          <div class="h-64 rounded-xl overflow-hidden mb-6 relative">
            <img alt="Retail Interior" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 grayscale group-hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFV3i34lWRoH5e1v-t3Erke-0CSCw-29gWy_ASETj7P57atcA28U2wbH7h4j6CgBAXD1aRrhzZ8utR_nThZFvG0FMR_x60PzPyXTw9zB99Kt0ywqEIdQsB4p1wtavqBEi8p0E0R8eEXikBTeuhyl3QocJn1vLzFPEytKuX6W6qMixU6Jwpu3wc59e9XjYi8-LDoAF5CnUAd6nCM-L8MseRisn8lHNHFvDJjbzpqAy11PokHY8AYkYns10TWo85vsDXHcoO_ZyuH0o" loading="lazy" width="600" height="256" />
            <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
          </div>
          <h3 class="text-xl font-display text-gray-900 dark:text-white mb-3 group-hover:underline decoration-1 underline-offset-4">Retail Spaces</h3>
          <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed mb-4">Creating immersive physical environments. Our retail infrastructure division focuses on modular layouts, lighting integration, and customer flow optimization for high-end retail brands.</p>
          <a class="inline-flex items-center gap-1 text-xs font-bold uppercase tracking-wider text-gray-900 dark:text-white" href="capabilities.php">Learn More <span class="material-symbols-outlined text-sm">east</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
