<?php
require_once __DIR__ . '/../includes/config.php';

$title       = 'Industrial Design and Manufacturing Solutions, Naeem Group';
$description = 'Industrial design, manufacturing, packaging, and infrastructure solutions across Pakistan and the MENA region. Book a consultation.';
$canonical   = 'https://binnaeemindustries.com/';
$currentPage = 'home';
$showWhatsApp = true;

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative w-full h-screen min-h-[800px] overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img
      alt="Modern industrial architecture, Bin Naaem"
      class="w-full h-full object-cover brightness-[0.95] dark:brightness-[0.4]"
      src="assets/images/hero-bin.jpg"
      loading="eager"
      width="1600"
      height="900"
    />
    <div class="absolute inset-0 pointer-events-none hero-scrim"></div>
  </div>
  <div class="relative z-10 flex flex-col justify-end h-full px-6 md:px-12 pb-20 max-w-[1600px] mx-auto">
    <div class="mb-12 md:mb-24">
      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-content max-w-5xl">
        Engineering <br />
        <span class="italic font-light opacity-80">tomorrow's</span>
        industrial <br />
        reality &amp; infrastructure
      </h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-end">
      <div class="col-span-1 md:col-span-5 flex flex-wrap gap-3">
        <span class="px-6 py-2 rounded-full glass-soft text-sm text-content">Infrastructure</span>
        <span class="px-6 py-2 rounded-full glass-soft text-sm text-content">Energy</span>
        <span class="px-6 py-2 rounded-full glass-soft text-sm text-content">Logistics</span>
        <span class="px-6 py-2 rounded-full glass-soft text-sm text-content">Manufacturing</span>
      </div>
      <div class="col-span-1 md:col-span-7 flex justify-end gap-4 overflow-x-auto no-scrollbar">
        <div class="relative w-64 h-40 rounded-xl overflow-hidden group cursor-pointer border border-white/10 flex-shrink-0">
          <img alt="Wind Turbines" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxmpkE7Vmn9bcdrShBbjhuWneY1D0Ie_TQRlMvjoRhEjjwneVaRIe9NOI98RbJdQI2kxe4ZYB-qUwyU9Xpw8kQbtODZdmf3Dnk9_vBtU1aaIsWN9uNxqLozupOhjkL4ENMgFmjeuDzBjUInjRLE5XvA7TiLWKYd0Ei2Tw1rKhMCNTiXJGnvHD2flwCww2rwxiwHjzrZ2GVRMF1klav4YvT2sQDEivP4M87tj9bJVt2UpbgdoxjSBPYyYSHdyQvgaQvg2w9xqiGchE" loading="lazy" width="256" height="160" />
          <div class="absolute inset-0 bg-black/40 p-4 flex flex-col justify-end">
            <span class="text-xs text-white/70 uppercase tracking-wider">Sustainable Energy</span>
            <p class="text-white font-serif text-lg leading-tight">Project Helios Alpha</p>
          </div>
        </div>
        <div class="relative w-64 h-40 rounded-xl overflow-hidden group cursor-pointer border border-white/10 hidden sm:block flex-shrink-0">
          <img alt="Industrial Port" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1R0EYTg5dXaDmB_vGLOYt0kizi-lRXsoH7z0bDF4rqER2-qgnGAgHA368rFoshE7A_tGSe1cmCEQYC2MMN_-Pmr6D9fQU6D_mOpWx5nMj_vX6Ogk_oHpTI39_rK2nwxT8hsiPGdeq8ecr1V1_V74CtbSvSLGIRNTAw1F1Isa9BAdYBoAETAryLmdMWFC1jzfZ9dWKWEMITWS8MJiIVbGL9xeX-yycbeRPHPGediCR6J0j_xe-yNGIKTpsHlJPFBAl8twp8m__RDs" loading="lazy" width="256" height="160" />
          <div class="absolute inset-0 bg-black/40 p-4 flex flex-col justify-end">
            <span class="text-xs text-white/70 uppercase tracking-wider">Global Logistics</span>
            <p class="text-white font-serif text-lg leading-tight">Port Expansion IV</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row gap-12 md:gap-24">
      <div class="md:w-1/4">
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content">About Us</h3>
      </div>
      <div class="md:w-3/4">
        <h2 class="font-display text-4xl md:text-5xl lg:text-6xl leading-tight text-content mb-12">
          <span class="font-bold">Bin Naaem Industries</span> is driven by a
          deep passion for capturing
          <span class="italic font-light text-muted">industrial potential</span>
          and engineering life's most essential infrastructures with
          precision and a touch of
          <span class="italic font-light text-muted">innovation</span>.
        </h2>
        <div class="flex flex-col sm:flex-row gap-8 items-start sm:items-center">
          <p class="text-muted max-w-md text-sm leading-relaxed">
            We ardently strive to encapsulate engineering excellence,
            weaving a tapestry of technical artistry and sustainable growth.
            With the timeless essence of industrial progress.
          </p>
          <div class="flex flex-wrap gap-4">
            <a class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-edge hover:bg-content hover:text-surface transition-all text-xs font-bold tracking-widest uppercase" href="capabilities.php">Capabilities</a>
            <a class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-edge hover:bg-content hover:text-surface transition-all text-xs font-bold tracking-widest uppercase" href="industries.php">Industries</a>
            <a class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-edge hover:bg-content hover:text-surface transition-all text-xs font-bold tracking-widest uppercase" href="projects.php">Projects</a>
            <a class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-edge hover:bg-content hover:text-surface transition-all text-xs font-bold tracking-widest uppercase" href="certifications.php">Certifications</a>
            <a class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-edge hover:bg-content hover:text-surface transition-all text-xs font-bold tracking-widest uppercase" href="contact.php">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface rounded-3xl mx-2 md:mx-6 overflow-hidden border border-edge shadow-card">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex justify-between items-start mb-16">
      <div>
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content mb-6">Our Expertise</h3>
        <h2 class="font-display text-4xl md:text-5xl text-content max-w-2xl leading-tight">
          When vision is engineered, <br />
          every blueprint is crafted into <br />
          <span class="italic font-light text-muted">tangible reality.</span>
        </h2>
      </div>
      <div class="hidden md:flex flex-col gap-4 text-right">
        <a class="text-2xl font-display text-content hover:italic transition-all" href="capabilities.php">Infrastructure</a>
        <a class="text-2xl font-display text-muted hover:text-content hover:italic transition-all" href="capabilities.php">Energy</a>
        <a class="text-2xl font-display text-muted hover:text-content hover:italic transition-all" href="capabilities.php">Logistics</a>
        <a class="text-2xl font-display text-muted hover:text-content hover:italic transition-all" href="capabilities.php">Technology</a>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 h-[500px]">
      <div class="md:col-span-8 h-full relative group overflow-hidden rounded-2xl">
        <img alt="Corporate Building Interior" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFV3i34lWRoH5e1v-t3Erke-0CSCw-29gWy_ASETj7P57atcA28U2wbH7h4j6CgBAXD1aRrhzZ8utR_nThZFvG0FMR_x60PzPyXTw9zB99Kt0ywqEIdQsB4p1wtavqBEi8p0E0R8eEXikBTeuhyl3QocJn1vLzFPEytKuX6W6qMixU6Jwpu3wc59e9XjYi8-LDoAF5CnUAd6nCM-L8MseRisn8lHNHFvDJjbzpqAy11PokHY8AYkYns10TWo85vsDXHcoO_ZyuH0o" loading="lazy" width="800" height="500" />
        <div class="absolute bottom-0 left-0 p-8 w-full bg-gradient-to-t from-black/80 to-transparent">
          <h4 class="text-white font-display text-2xl">Corporate Headquarters</h4>
          <p class="text-gray-300 text-sm mt-1">Dubai, UAE</p>
        </div>
      </div>
      <div class="md:col-span-4 h-full relative group overflow-hidden rounded-2xl hidden md:block">
        <img alt="Construction Site" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBN13H0psPt5cKfpbwGYETXbKT9-tJw6XLlFIp09Ubh50ZhcnqB9FQKQHeLa5gDWLte_fPw7mw7grCd7cvjb0L3dyTo09dph_ADEHjai54ixLRO3rDV5Hhlr2YnoSYH6ZVISTdiikmBhJxb0tW4vgePKX31QE4ULQC9DwxYtcwnid3cvl8gDZFbNCu-nYw55W5i4eKUDqSaASdZ18qKfaJamvBNrRw6ph8etNc9MgYdBwIbOKS_rhQTKtvau2F_qUv_84BlNcl8Ouo" loading="lazy" width="400" height="500" />
        <div class="absolute bottom-0 left-0 p-8 w-full bg-gradient-to-t from-black/80 to-transparent">
          <h4 class="text-white font-display text-2xl">Urban Development</h4>
          <p class="text-gray-300 text-sm mt-1">Riyadh, KSA</p>
        </div>
      </div>
    </div>
    <div class="flex items-center gap-4 mt-8">
      <button type="button" class="w-10 h-10 rounded-full border border-edge flex items-center justify-center hover:bg-surface2 transition-colors" aria-label="Previous"><span class="material-icons-outlined text-sm text-content">west</span></button>
      <button type="button" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-gray-200 transition-colors" aria-label="Next"><span class="material-icons-outlined text-sm">east</span></button>
      <div class="h-[1px] bg-edge flex-grow ml-4"></div>
      <a class="text-xs font-bold uppercase tracking-widest text-content" href="projects.php">See all projects</a>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
      <div class="max-w-2xl">
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content mb-4">Our Work</h3>
        <h2 class="font-display text-4xl md:text-5xl text-content leading-tight">
          Explore the <span class="italic font-light">artistry</span> and
          precision behind our <span class="font-bold">portfolio</span> of
          timeless subsidiaries.
        </h2>
      </div>
      <a class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-edge hover:bg-content hover:text-surface transition-all text-xs font-bold tracking-widest uppercase whitespace-nowrap" href="brands.php">
        Explore More
        <span class="material-icons-outlined text-sm">north_east</span>
      </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <a href="brands.php" class="group relative rounded-2xl overflow-hidden aspect-[4/5] cursor-pointer block">
        <img alt="Solar Energy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 filter brightness-75 group-hover:brightness-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdo_fFfBNLBVSeVnMqsJYfWPqx2tQCeiHnBeVdmTGdcrsrnLuumD_uCAhhK3sPtGSXTif5u0QF9A0W2y4e6slVbEcOD5B-pomHxpm3f1kL2VKxf7SiXewulB4zhPEXo9DRXkJNFa-pGL-sJTkBziuohr1B2BRyYVngJVstjfkCX6kFcabukz6A16yrEBnn2wYvopefcU32w1QFSPoPX4hz_WmqvTbq-W2WdFU_1Wj9KPs265nf149pGsniaOLwchv6SqoDmbykrzE" loading="lazy" width="600" height="750" />
        <div class="absolute top-4 right-4 flex flex-wrap justify-end gap-2">
          <span class="px-3 py-1 glass-soft rounded-full text-[10px] text-white uppercase font-bold tracking-wide">Solar</span>
          <span class="px-3 py-1 glass-soft rounded-full text-[10px] text-white uppercase font-bold tracking-wide">Energy</span>
        </div>
        <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-black/90 via-black/50 to-transparent">
          <h4 class="text-2xl font-display text-white mb-2">Bin Naaem Energy</h4>
          <p class="text-gray-300 text-xs mb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-2 group-hover:translate-y-0">Powering the grid with sustainable, renewable solutions across the MENA region.</p>
          <div class="w-full py-3 bg-white text-black text-center text-xs font-bold uppercase rounded-full hover:bg-gray-200 transition-colors">More Details</div>
        </div>
      </a>
      <a href="brands.php" class="group relative rounded-2xl overflow-hidden aspect-[4/5] cursor-pointer block">
        <img alt="Construction" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 filter brightness-75 group-hover:brightness-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFCE3TeM_RSmldhflkSqLbEJ9h1-T5bgoMF8rOIDxA4Ho7CHsOrEHmu9L9lAfI7noNfeBVecCVvGCYAAJvJIc319DT7M6iyZ2czw03YbFeFAQULMSoajuCehgtsZBGJiVq39ij2ivVPBRdjzGz1TMaBWJTYvNIcuLjfMdIWCdBmKjAlHk5t-K7s2NxT-9AOonBChV4NX5n2JkurSK5Q23gFKXkUla-JLbMqLcCOKiIDHqXHWZJYenv5cfOPBQbdJTgMrVNkyMSjwc" loading="lazy" width="600" height="750" />
        <div class="absolute top-4 right-4 flex flex-wrap justify-end gap-2">
          <span class="px-3 py-1 glass-soft rounded-full text-[10px] text-white uppercase font-bold tracking-wide">Build</span>
          <span class="px-3 py-1 glass-soft rounded-full text-[10px] text-white uppercase font-bold tracking-wide">Construct</span>
        </div>
        <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-black/90 via-black/50 to-transparent">
          <h4 class="text-2xl font-display text-white mb-2">BN Construction</h4>
          <p class="text-gray-300 text-xs mb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-2 group-hover:translate-y-0">Building the skylines of tomorrow with state-of-the-art engineering practices.</p>
          <div class="w-full py-3 bg-transparent border border-white text-white text-center text-xs font-bold uppercase rounded-full group-hover:bg-white group-hover:text-black transition-colors">More Details</div>
        </div>
      </a>
      <a href="brands/naeem-packages.php" class="group relative rounded-2xl overflow-hidden aspect-[4/5] cursor-pointer block">
        <img alt="Logistics" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 filter brightness-75 group-hover:brightness-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0bikdpbTnJ3JPPNA0q3fKk9Dq1kLKuoXvLzBYdGrkCcm0CRu0iKMh35v_CUD3YFx6wSIEev3Pm8ZOHHvl4YVLHRNFgGwhp9UGXpT6_4aijCjld_fKddCFyVoEABYUta4Q85wyubBj-wXbcCyvUaA-dgBXNu_OZFc6sdPmTr1TE-WNtA2Qk1MIah20aA04hB25OX-y4ZGTY4VDDgCztn2TMbVy8zFcezieHpfAAMTHgfHL0oZJrD2l6X6FekGrLtXgsMEuTZByRQU" loading="lazy" width="600" height="750" />
        <div class="absolute top-4 right-4 flex flex-wrap justify-end gap-2">
          <span class="px-3 py-1 glass-soft rounded-full text-[10px] text-white uppercase font-bold tracking-wide">Global</span>
          <span class="px-3 py-1 glass-soft rounded-full text-[10px] text-white uppercase font-bold tracking-wide">Logistics</span>
        </div>
        <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-black/90 via-black/50 to-transparent">
          <h4 class="text-2xl font-display text-white mb-2">BN Logistics</h4>
          <p class="text-gray-300 text-xs mb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-2 group-hover:translate-y-0">Connecting markets through efficient, reliable, and swift supply chain solutions.</p>
          <div class="w-full py-3 bg-transparent border border-white text-white text-center text-xs font-bold uppercase rounded-full group-hover:bg-white group-hover:text-black transition-colors">More Details</div>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-canvas">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row gap-12 mb-16">
      <div class="md:w-1/3">
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content">Awards</h3>
      </div>
      <div class="md:w-2/3">
        <h2 class="font-display text-3xl md:text-4xl lg:text-5xl text-content leading-tight">
          Awards reflect our ongoing
          <span class="font-bold">dedication</span> to innovation and
          excellence. Available on request, certifications and technical documentation.
        </h2>
      </div>
    </div>
    <div class="flex flex-col md:flex-row gap-8">
      <div class="w-full md:w-2/3">
        <div class="border-t border-edge">
          <div class="group flex items-center justify-between py-8 border-b border-edge cursor-pointer hover:bg-surface2 transition-colors px-4">
            <span class="text-sm font-mono text-muted w-24">2023</span>
            <span class="flex-grow font-display text-xl text-content">Global Safety Excellence Award</span>
            <div class="w-10 h-10 rounded-full border border-edge flex items-center justify-center bg-surface group-hover:bg-content group-hover:text-surface transition-all"><span class="material-icons-outlined text-sm transform group-hover:-rotate-45 transition-transform">arrow_forward</span></div>
          </div>
          <div class="group flex items-center justify-between py-8 border-b border-edge cursor-pointer hover:bg-surface2 transition-colors px-4">
            <span class="text-sm font-mono text-muted w-24">2022</span>
            <span class="flex-grow font-display text-xl text-content">Innovation in Industrial Engineering</span>
            <div class="w-10 h-10 rounded-full border border-edge flex items-center justify-center bg-surface group-hover:bg-content group-hover:text-surface transition-all"><span class="material-icons-outlined text-sm">arrow_forward</span></div>
          </div>
          <div class="group flex items-center justify-between py-8 border-b border-edge cursor-pointer hover:bg-surface2 transition-colors px-4">
            <span class="text-sm font-mono text-muted w-24">2021</span>
            <span class="flex-grow font-display text-xl text-content">Sustainable Manufacturing Practice</span>
            <div class="w-10 h-10 rounded-full border border-edge flex items-center justify-center bg-surface group-hover:bg-content group-hover:text-surface transition-all"><span class="material-icons-outlined text-sm">arrow_forward</span></div>
          </div>
          <div class="group flex items-center justify-between py-8 border-b border-edge cursor-pointer hover:bg-surface2 transition-colors px-4">
            <span class="text-sm font-mono text-muted w-24">2020</span>
            <span class="flex-grow font-display text-xl text-content">Regional Logistics Leader</span>
            <div class="w-10 h-10 rounded-full border border-edge flex items-center justify-center bg-surface group-hover:bg-content group-hover:text-surface transition-all"><span class="material-icons-outlined text-sm">arrow_forward</span></div>
          </div>
        </div>
      </div>
      <div class="hidden md:block w-1/3">
        <div class="relative rounded-2xl overflow-hidden h-full min-h-[400px]">
          <img alt="Award Ceremony / Abstract Landscape" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCP3Phj8oulBWqDk0a5PkFtYb2-WTQBdpic5I0W01fKYveNX3Blb9o7VfNafBtOzrW0X-vPppN5TwoClSCCsrzgTU4jRBPjt-dixUmDlSLhbu5CbZ5ZHr2a7abWjFzdkAjuV-zVLBTPoGIrQq0kzo4wPTNX8S4dYjnU5btfll9X2pCKypAta4YcoVMBePqkG8WMqTow7CFkgDQ6vv_etL3BLFxAghdClnAGoXt-a3qwO5TYTmvn1QXVyK5H9k808GpkKdwHy5fOnjg" loading="lazy" width="400" height="400" />
          <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
            <p class="text-white text-sm font-bold uppercase">A Quiet Afternoon in the Countryside</p>
            <p class="text-gray-300 text-xs mt-2">Symbolizing our commitment to harmony between industry and nature.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface rounded-3xl mx-2 md:mx-6">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row gap-12 mb-16">
      <div class="md:w-1/4">
        <h3 class="text-lg font-semibold uppercase tracking-wider text-content">Testimonials</h3>
      </div>
      <div class="md:w-3/4">
        <h2 class="font-display text-4xl md:text-5xl lg:text-6xl leading-tight text-content">
          Trusted by leaders who value
          <span class="italic font-light text-muted">precision</span> and
          <span class="font-bold">excellence</span>.
        </h2>
      </div>
    </div>
    
    <div class="relative" data-testimonials-carousel>
      <div class="overflow-hidden">
        <div class="flex gap-6 md:gap-8 overflow-x-auto snap-x snap-mandatory no-scrollbar" data-carousel-track>
          <!-- Slide 1 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "Bin Naaem Industries transformed our infrastructure project with exceptional attention to detail and innovative solutions. Their engineering expertise is unmatched."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">AM</span>
              </div>
              <div>
                <p class="font-semibold text-content">Ahmed Malik</p>
                <p class="text-sm text-muted">CEO, Global Infrastructure Group</p>
              </div>
            </div>
          </article>

          <!-- Slide 2 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "Working with Bin Naaem has been a game-changer. Their commitment to sustainable practices and cutting-edge technology sets them apart in the industry."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">SK</span>
              </div>
              <div>
                <p class="font-semibold text-content">Sarah Khan</p>
                <p class="text-sm text-muted">Director, Energy Solutions Ltd</p>
              </div>
            </div>
          </article>

          <!-- Slide 3 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "The precision and reliability of Bin Naaem's manufacturing capabilities have exceeded our expectations. They are true partners in innovation."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">MR</span>
              </div>
              <div>
                <p class="font-semibold text-content">Mohammed Raza</p>
                <p class="text-sm text-muted">VP Operations, Tech Manufacturing Co</p>
              </div>
            </div>
          </article>

          <!-- Slide 4 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "Bin Naaem's logistics solutions have streamlined our supply chain operations significantly. Their global network and efficiency are remarkable."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">FA</span>
              </div>
              <div>
                <p class="font-semibold text-content">Fatima Ali</p>
                <p class="text-sm text-muted">Supply Chain Director, International Trade Corp</p>
              </div>
            </div>
          </article>

          <!-- Slide 5 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "Their energy division delivered a solar project ahead of schedule. The quality of work and professional approach exceeded all our benchmarks."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">HK</span>
              </div>
              <div>
                <p class="font-semibold text-content">Hassan Khan</p>
                <p class="text-sm text-muted">Project Manager, Renewable Energy Partners</p>
              </div>
            </div>
          </article>

          <!-- Slide 6 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "The packaging solutions from Bin Naaem have revolutionized our product distribution. Durable, sustainable, and cost-effective."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">ZA</span>
              </div>
              <div>
                <p class="font-semibold text-content">Zainab Ahmed</p>
                <p class="text-sm text-muted">Operations Head, Consumer Goods International</p>
              </div>
            </div>
          </article>

          <!-- Slide 7 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "Working with Bin Naaem on our industrial facility expansion was seamless. Their team's expertise and attention to safety standards is exemplary."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">OS</span>
              </div>
              <div>
                <p class="font-semibold text-content">Omar Sheikh</p>
                <p class="text-sm text-muted">Facilities Director, Heavy Industries Ltd</p>
              </div>
            </div>
          </article>

          <!-- Slide 8 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "Bin Naaem's construction division built our headquarters with incredible precision. The project was completed on time and within budget."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">NA</span>
              </div>
              <div>
                <p class="font-semibold text-content">Nadia Aslam</p>
                <p class="text-sm text-muted">CFO, Corporate Holdings Group</p>
              </div>
            </div>
          </article>

          <!-- Slide 9 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "The automation systems implemented by Bin Naaem have increased our production efficiency by 40%. Outstanding results and excellent support."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">IR</span>
              </div>
              <div>
                <p class="font-semibold text-content">Imran Raza</p>
                <p class="text-sm text-muted">Production Manager, Advanced Manufacturing Systems</p>
              </div>
            </div>
          </article>

          <!-- Slide 10 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "Bin Naaem's commitment to sustainable manufacturing aligns perfectly with our values. They've helped us achieve our environmental goals."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">LS</span>
              </div>
              <div>
                <p class="font-semibold text-content">Layla Shah</p>
                <p class="text-sm text-muted">Sustainability Officer, Green Industries Alliance</p>
              </div>
            </div>
          </article>

          <!-- Slide 11 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "Their technical expertise and problem-solving approach helped us overcome complex engineering challenges. Truly a world-class partner."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">YK</span>
              </div>
              <div>
                <p class="font-semibold text-content">Yusuf Kamal</p>
                <p class="text-sm text-muted">Chief Engineer, Mega Projects Corporation</p>
              </div>
            </div>
          </article>

          <!-- Slide 12 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "The quality control standards at Bin Naaem are exceptional. Every product meets the highest international specifications."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">AA</span>
              </div>
              <div>
                <p class="font-semibold text-content">Ayesha Aziz</p>
                <p class="text-sm text-muted">Quality Assurance Director, Precision Components Inc</p>
              </div>
            </div>
          </article>

          <!-- Slide 13 -->
          <article class="snap-center shrink-0 w-full md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto group border border-edge rounded-2xl p-8 bg-canvas/60 hover:bg-surface transition-all duration-500">
            <div class="flex items-center gap-1 mb-6 text-yellow-400">
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
              <span class="material-icons-outlined text-xl">star</span>
            </div>
            <p class="text-muted text-lg leading-relaxed mb-6 font-light">
              "Bin Naaem's integrated approach to infrastructure development has been transformative. They deliver end-to-end solutions with unmatched professionalism."
            </p>
            <div class="flex items-center gap-4 pt-6 border-t border-edge">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-400 dark:from-gray-600 dark:to-gray-700 flex items-center justify-center">
                <span class="text-white font-bold text-lg">BH</span>
              </div>
              <div>
                <p class="font-semibold text-content">Bilal Hassan</p>
                <p class="text-sm text-muted">Managing Director, Urban Development Authority</p>
              </div>
            </div>
          </article>
        </div>
      </div>

      <!-- Controls --> 
      <div class="mt-10 flex items-center justify-center">
        <div class="flex items-center gap-2 flex-wrap justify-center">
          <button type="button" class="w-2 h-2 rounded-full bg-content opacity-100 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 1"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 2"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 3"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 4"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 5"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 6"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 7"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 8"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 9"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 10"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 11"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 12"></button>
          <button type="button" class="w-2 h-2 rounded-full bg-muted opacity-40 transition-all duration-300" data-carousel-dot aria-label="Go to testimonial 13"></button>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.querySelector('[data-testimonials-carousel]');
  if (!carousel) return;

  const track = carousel.querySelector('[data-carousel-track]');
  const slides = Array.from(track.children);
  const dots = Array.from(carousel.querySelectorAll('[data-carousel-dot]'));

  let index = 0;

  function scrollToIndex(newIndex) {
    if (!slides.length) return;
    index = (newIndex + slides.length) % slides.length;
    const target = slides[index];
    track.scrollTo({ left: target.offsetLeft, behavior: 'smooth' });

    if (dots.length) {
      dots.forEach((dot, i) => {
        if (i === index) {
          dot.classList.remove('opacity-40', 'bg-muted');
          dot.classList.add('opacity-100', 'bg-content');
        } else {
          dot.classList.remove('opacity-100', 'bg-content');
          dot.classList.add('opacity-40', 'bg-muted');
        }
      });
    }
  }

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => scrollToIndex(i));
  });

  let auto = setInterval(() => scrollToIndex(index + 1), 8000);

  carousel.addEventListener('mouseenter', () => {
    if (auto) {
      clearInterval(auto);
      auto = null;
    }
  });

  carousel.addEventListener('mouseleave', () => {
    if (!auto) {
      auto = setInterval(() => scrollToIndex(index + 1), 8000);
    }
  });
});
</script>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
