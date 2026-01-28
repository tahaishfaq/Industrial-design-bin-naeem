<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Capabilities | Bin Naaem Industries';
$description = 'Manufacturing capabilities across packaging, plastics, and construction. Precision engineering at macro and micro scales.';
$canonical = 'https://binnaeemindustries.com/capabilities';
$currentPage = 'capabilities';

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative w-full h-[85vh] min-h-[600px] overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img alt="Industrial texture dark background" class="w-full h-full object-cover brightness-[0.5] dark:brightness-[0.3]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgcGo5xGO3N07RKZ_N1K5-Xaupso9oPY61bZ_LZaqwhX0cCE-xTzAOr8okqMJnGnwbxeWO--piZfKy7OvvsR5G_v888hsC2lkpfTKXsgZdVY7j519mI33-3t2f-ZcnoQJsF3Xxwgcj_4k64js9cOCUWOC7IKi1kA-Y3OH3oAck-5iX1qcq3IeswyZpERYfY0Bng7JF7LXmLceh3rCGocnapZ50bzcVu39XIB1sqtZXn7XSDx1y1edA_nXxT-t67gjS7O-PWf8f5o8" loading="eager" width="1600" height="900" />
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-background-light dark:to-background-dark opacity-90"></div>
    <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/dark-matter.png')]"></div>
  </div>
  <div class="relative z-10 flex flex-col justify-center h-full px-6 md:px-12 max-w-[1600px] mx-auto pt-20">
    <div class="border-l border-white/30 pl-8 md:pl-12">
      <span class="text-sm md:text-base font-mono tracking-widest uppercase text-gray-300 mb-4 block">Core Competencies</span>
      <h1 class="font-display text-7xl md:text-8xl lg:text-9xl text-gray-900 dark:text-white tracking-tight mb-8">Capabilities</h1>
      <p class="max-w-2xl text-xl md:text-2xl text-gray-400 font-light leading-relaxed">Forging the future through precision engineering, advanced material science, and industrial scale that defines the skylines of tomorrow.</p>
    </div>
  </div>
  <div class="absolute bottom-12 left-6 md:left-12 z-10 animate-bounce">
    <span class="material-icons-outlined text-white/50 text-2xl">arrow_downward</span>
  </div>
</header>

<section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark relative border-t border-white/5">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col lg:flex-row gap-16 mb-20">
      <div class="lg:w-1/4">
        <span class="text-sm font-mono text-gray-500 dark:text-gray-400 block mb-2">(01)</span>
        <h3 class="text-lg font-semibold uppercase tracking-wider text-gray-900 dark:text-white">Manufacturing</h3>
      </div>
      <div class="lg:w-3/4">
        <h2 class="font-display text-4xl md:text-5xl lg:text-6xl leading-tight text-gray-900 dark:text-white mb-8">Precision engineering at <br/><span class="italic font-light text-gray-500">macro &amp; micro</span> scales.</h2>
        <p class="text-gray-400 max-w-2xl text-lg font-light">Our facilities leverage state-of-the-art automation and human expertise to deliver components that meet the rigorous demands of modern infrastructure.</p>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 border-t border-l border-gray-200 dark:border-white/10">
      <div class="group border-r border-b border-gray-200 dark:border-white/10 p-10 hover:bg-white/5 transition-colors duration-300">
        <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center mb-8 text-white group-hover:bg-white group-hover:text-black transition-all"><span class="material-symbols-outlined">precision_manufacturing</span></div>
        <h4 class="text-2xl font-display text-white mb-4">Automated Assembly</h4>
        <p class="text-gray-400 text-sm leading-relaxed mb-8">High-volume robotic assembly lines capable of 24/7 operation with micron-level precision tolerances for automotive and aerospace components.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-3 text-xs text-gray-500 uppercase tracking-wide"><span class="w-1.5 h-1.5 bg-white/50 rounded-full"></span> 6-Axis Robotics</li>
          <li class="flex items-center gap-3 text-xs text-gray-500 uppercase tracking-wide"><span class="w-1.5 h-1.5 bg-white/50 rounded-full"></span> AI Quality Control</li>
        </ul>
      </div>
      <div class="group border-r border-b border-gray-200 dark:border-white/10 p-10 hover:bg-white/5 transition-colors duration-300">
        <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center mb-8 text-white group-hover:bg-white group-hover:text-black transition-all"><span class="material-symbols-outlined">architecture</span></div>
        <h4 class="text-2xl font-display text-white mb-4">Structural Fabrication</h4>
        <p class="text-gray-400 text-sm leading-relaxed mb-8">Heavy industry fabrication for bridges, skyscrapers, and industrial plants. We shape steel and concrete into the skeletons of civilization.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-3 text-xs text-gray-500 uppercase tracking-wide"><span class="w-1.5 h-1.5 bg-white/50 rounded-full"></span> Laser Cutting</li>
          <li class="flex items-center gap-3 text-xs text-gray-500 uppercase tracking-wide"><span class="w-1.5 h-1.5 bg-white/50 rounded-full"></span> Heavy Welding</li>
        </ul>
      </div>
      <div class="group border-r border-b border-gray-200 dark:border-white/10 p-10 hover:bg-white/5 transition-colors duration-300">
        <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center mb-8 text-white group-hover:bg-white group-hover:text-black transition-all"><span class="material-symbols-outlined">factory</span></div>
        <h4 class="text-2xl font-display text-white mb-4">Sustainable Processing</h4>
        <p class="text-gray-400 text-sm leading-relaxed mb-8">Zero-waste manufacturing protocols that prioritize energy efficiency and material recycling without compromising on output quality.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-3 text-xs text-gray-500 uppercase tracking-wide"><span class="w-1.5 h-1.5 bg-white/50 rounded-full"></span> Solar Powered</li>
          <li class="flex items-center gap-3 text-xs text-gray-500 uppercase tracking-wide"><span class="w-1.5 h-1.5 bg-white/50 rounded-full"></span> Circular Economy</li>
        </ul>
      </div>
    </div>
    <div class="mt-12 h-[400px] w-full relative overflow-hidden rounded-xl group">
      <img alt="Manufacturing floor" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 filter grayscale hover:grayscale-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxmpkE7Vmn9bcdrShBbjhuWneY1D0Ie_TQRlMvjoRhEjjwneVaRIe9NOI98RbJdQI2kxe4ZYB-qUwyU9Xpw8kQbtODZdmf3Dnk9_vBtU1aaIsWN9uNxqLozupOhjkL4ENMgFmjeuDzBjUInjRLE5XvA7TiLWKYd0Ei2Tw1rKhMCNTiXJGnvHD2flwCww2rwxiwHjzrZ2GVRMF1klav4YvT2sQDEivP4M87tj9bJVt2UpbgdoxjSBPYyYSHdyQvgaQvg2w9xqiGchE" loading="lazy" width="1200" height="400" />
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
      <div class="absolute bottom-8 left-8">
        <span class="text-xs font-bold bg-white text-black px-3 py-1 rounded-full uppercase tracking-wider mb-2 inline-block">Facility 04</span>
        <h4 class="text-white font-display text-3xl">Turbine Assembly Line</h4>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface-dark relative">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 border-b border-white/10 pb-12">
      <div>
        <span class="text-sm font-mono text-gray-500 block mb-2">(02)</span>
        <h3 class="text-lg font-semibold uppercase tracking-wider text-white mb-4">Material Expertise</h3>
        <h2 class="font-display text-4xl md:text-5xl text-white">Alchemy of the <span class="italic text-gray-500">modern age.</span></h2>
      </div>
      <div class="mt-8 md:mt-0"><a class="text-sm text-white border-b border-white pb-1 hover:text-gray-300 hover:border-gray-300 transition-colors" href="#">Download Material Spec Sheet</a></div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div class="space-y-12">
        <div class="group cursor-pointer">
          <div class="flex items-start gap-6">
            <span class="text-2xl font-display text-gray-600 group-hover:text-white transition-colors">01.</span>
            <div>
              <h4 class="text-3xl font-display text-white mb-2 group-hover:translate-x-2 transition-transform duration-300">Advanced Composites</h4>
              <p class="text-gray-400 font-light leading-relaxed max-w-md">Ultra-lightweight carbon fiber and graphene-enhanced polymers designed for aerospace and high-performance automotive applications.</p>
            </div>
          </div>
        </div>
        <div class="w-full h-[1px] bg-white/10"></div>
        <div class="group cursor-pointer">
          <div class="flex items-start gap-6">
            <span class="text-2xl font-display text-gray-600 group-hover:text-white transition-colors">02.</span>
            <div>
              <h4 class="text-3xl font-display text-white mb-2 group-hover:translate-x-2 transition-transform duration-300">Industrial Alloys</h4>
              <p class="text-gray-400 font-light leading-relaxed max-w-md">Proprietary steel and titanium blends offering superior tensile strength and corrosion resistance for marine and off-shore environments.</p>
            </div>
          </div>
        </div>
        <div class="w-full h-[1px] bg-white/10"></div>
        <div class="group cursor-pointer">
          <div class="flex items-start gap-6">
            <span class="text-2xl font-display text-gray-600 group-hover:text-white transition-colors">03.</span>
            <div>
              <h4 class="text-3xl font-display text-white mb-2 group-hover:translate-x-2 transition-transform duration-300">Smart Concrete</h4>
              <p class="text-gray-400 font-light leading-relaxed max-w-md">Self-healing concrete mixtures embedded with sensors for real-time structural health monitoring in mega-projects.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="relative h-[600px] rounded-2xl overflow-hidden shadow-2xl">
        <img alt="Material close up abstract" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFV3i34lWRoH5e1v-t3Erke-0CSCw-29gWy_ASETj7P57atcA28U2wbH7h4j6CgBAXD1aRrhzZ8utR_nThZFvG0FMR_x60PzPyXTw9zB99Kt0ywqEIdQsB4p1wtavqBEi8p0E0R8eEXikBTeuhyl3QocJn1vLzFPEytKuX6W6qMixU6Jwpu3wc59e9XjYi8-LDoAF5CnUAd6nCM-L8MseRisn8lHNHFvDJjbzpqAy11PokHY8AYkYns10TWo85vsDXHcoO_ZyuH0o" loading="lazy" width="600" height="600" />
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute bottom-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-xl max-w-xs">
          <div class="flex items-center gap-3 mb-3"><span class="material-symbols-outlined text-white">science</span><span class="text-xs font-bold text-white uppercase tracking-widest">Lab Analysis</span></div>
          <div class="flex justify-between items-end">
            <div><span class="text-gray-400 text-xs uppercase block mb-1">Tensile Strength</span><span class="text-white font-mono text-xl">2450 MPa</span></div>
            <div class="h-8 w-[1px] bg-white/30 mx-4"></div>
            <div><span class="text-gray-400 text-xs uppercase block mb-1">Density</span><span class="text-white font-mono text-xl">1.8 g/cm³</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="mb-16">
      <span class="text-sm font-mono text-gray-500 dark:text-gray-400 block mb-2">(03)</span>
      <h3 class="text-lg font-semibold uppercase tracking-wider text-gray-900 dark:text-white mb-6">Production Scale</h3>
      <h2 class="font-display text-4xl md:text-5xl lg:text-7xl leading-none text-gray-900 dark:text-white">Built for <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-600">Global Demand.</span></h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
      <div class="p-8 border border-gray-200 dark:border-white/10 rounded-2xl bg-surface-light dark:bg-white/5"><span class="block text-5xl font-display text-gray-900 dark:text-white mb-2">3.5<span class="text-2xl text-gray-500">M</span></span><span class="text-sm text-gray-500 uppercase tracking-widest font-semibold">Square Feet Facilities</span></div>
      <div class="p-8 border border-gray-200 dark:border-white/10 rounded-2xl bg-surface-light dark:bg-white/5"><span class="block text-5xl font-display text-gray-900 dark:text-white mb-2">500<span class="text-2xl text-gray-500">k+</span></span><span class="text-sm text-gray-500 uppercase tracking-widest font-semibold">Annual Production Units</span></div>
      <div class="p-8 border border-gray-200 dark:border-white/10 rounded-2xl bg-surface-light dark:bg-white/5"><span class="block text-5xl font-display text-gray-900 dark:text-white mb-2">12</span><span class="text-sm text-gray-500 uppercase tracking-widest font-semibold">Global Distribution Hubs</span></div>
      <div class="p-8 border border-gray-200 dark:border-white/10 rounded-2xl bg-surface-light dark:bg-white/5"><span class="block text-5xl font-display text-gray-900 dark:text-white mb-2">24<span class="text-2xl text-gray-500">/7</span></span><span class="text-sm text-gray-500 uppercase tracking-widest font-semibold">Operational Capacity</span></div>
    </div>
    <div class="relative w-full h-[600px] rounded-3xl overflow-hidden group">
      <img alt="Large scale port operations" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105 filter brightness-75" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1R0EYTg5dXaDmB_vGLOYt0kizi-lRXsoH7z0bDF4rqER2-qgnGAgHA368rFoshE7A_tGSe1cmCEQYC2MMN_-Pmr6D9fQU6D_mOpWx5nMj_vX6Ogk_oHpTI39_rK2nwxT8hsiPGdeq8ecr1V1_V74CtbSvSLGIRNTAw1F1Isa9BAdYBoAETAryLmdMWFC1jzfZ9dWKWEMITWS8MJiIVbGL9xeX-yycbeRPHPGediCR6J0j_xe-yNGIKTpsHlJPFBAl8twp8m__RDs" loading="lazy" width="1200" height="600" />
      <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent p-8 md:p-16 flex flex-col justify-end">
        <div class="max-w-3xl">
          <span class="px-4 py-2 rounded-full border border-white/30 bg-black/30 backdrop-blur-md text-xs text-white uppercase tracking-wider mb-6 inline-block">Logistics Integration</span>
          <h3 class="text-3xl md:text-5xl font-display text-white leading-tight mb-4">Seamless integration from factory floor to global port.</h3>
          <p class="text-gray-300 text-lg font-light max-w-2xl">Our strategic locations near major ports ensure that scale never compromises speed. We deliver heavy industry solutions to any corner of the globe.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
