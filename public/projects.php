<?php
require_once __DIR__ . '/../includes/config.php';

$title = 'Industrial Projects and Case Studies, Naeem Group';
$description = 'Case studies showing industrial delivery, packaging, manufacturing, and infrastructure outcomes. Request a quote.';
$canonical = 'https://binnaeemindustries.com/projects';
$currentPage = 'projects';
$showWhatsApp = true;

require INCLUDES_PATH . '/page-start.php';
?>

<header class="relative w-full h-[85vh] min-h-[600px] overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img alt="Industrial projects and case studies" class="w-full h-full object-cover brightness-[0.5] dark:brightness-[0.3]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgcGo5xGO3N07RKZ_N1K5-Xaupso9oPY61bZ_LZaqwhX0cCE-xTzAOr8okqMJnGnwbxeWO--piZfKy7OvvsR5G_v888hsC2lkpfTKXsgZdVY7j519mI33-3t2f-ZcnoQJsF3Xxwgcj_4k64js9cOCUWOC7IKi1kA-Y3OH3oAck-5iX1qcq3IeswyZpERYfY0Bng7JF7LXmLceh3rCGocnapZ50bzcVu39XIB1sqtZXn7XSDx1y1edA_nXxT-t67gjS7O-PWf8f5o8" loading="eager" width="1600" height="900" />
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-background-light dark:to-background-dark opacity-90"></div>
  </div>
  <div class="relative z-10 flex flex-col justify-center h-full px-6 md:px-12 max-w-[1600px] mx-auto pt-20">
    <div class="border-l border-white/30 pl-8 md:pl-12">
      <span class="text-sm md:text-base font-mono tracking-widest uppercase text-gray-300 mb-4 block">Portfolio</span>
      <h1 class="font-display text-7xl md:text-8xl lg:text-9xl text-gray-900 dark:text-white tracking-tight mb-8">Industrial Projects and Case Studies</h1>
      <p class="max-w-2xl text-xl md:text-2xl text-gray-400 font-light leading-relaxed">Real world outcomes across manufacturing, infrastructure, packaging, and logistics. Each project demonstrates our commitment to precision and excellence.</p>
    </div>
  </div>
</header>

<section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
      <div class="max-w-2xl">
        <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-2">(01) Our Work</span>
        <h2 class="font-display text-4xl md:text-5xl text-gray-900 dark:text-white leading-tight">Delivering industrial solutions that <span class="italic font-light text-gray-500 dark:text-gray-400">transform operations</span> and drive measurable results.</h2>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <!-- Project Card 1 -->
      <div class="group border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden bg-surface-light dark:bg-surface-dark hover:border-gray-400 dark:hover:border-gray-600 transition-all duration-300">
        <div class="h-64 overflow-hidden">
          <img alt="Automated Manufacturing Facility" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxmpkE7Vmn9bcdrShBbjhuWneY1D0Ie_TQRlMvjoRhEjjwneVaRIe9NOI98RbJdQI2kxe4ZYB-qUwyU9Xpw8kQbtODZdmf3Dnk9_vBtU1aaIsWN9uNxqLozupOhjkL4ENMgFmjeuDzBjUInjRLE5XvA7TiLWKYd0Ei2Tw1rKhMCNTiXJGnvHD2flwCww2rwxiwHjzrZ2GVRMF1klav4YvT2sQDEivP4M87tj9bJVt2UpbgdoxjSBPYyYSHdyQvgaQvg2w9xqiGchE" loading="lazy" width="600" height="256" />
        </div>
        <div class="p-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white mb-4">Automated Manufacturing Facility</h3>
          <div class="space-y-3 mb-6 text-sm">
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Industry:</span>
              <span class="text-gray-900 dark:text-white font-medium">FMCG Manufacturing</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Location:</span>
              <span class="text-gray-900 dark:text-white font-medium">Lahore, Pakistan</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Scope:</span>
              <span class="text-gray-900 dark:text-white font-medium">Full Production Line</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Timeline:</span>
              <span class="text-gray-900 dark:text-white font-medium">18 Months</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Outcomes:</span>
              <span class="text-gray-900 dark:text-white font-medium">40% Efficiency Increase</span>
            </div>
          </div>
          <a href="contact.php" class="inline-flex items-center gap-2 w-full justify-center px-6 py-3 bg-gray-900 dark:bg-white text-white dark:text-black rounded-full text-sm font-semibold hover:bg-gray-800 dark:hover:bg-gray-100 transition-all">
            Request a Similar Project Quote
            <span class="material-icons-outlined text-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="group border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden bg-surface-light dark:bg-surface-dark hover:border-gray-400 dark:hover:border-gray-600 transition-all duration-300">
        <div class="h-64 overflow-hidden">
          <img alt="Packaging Solutions Hub" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdo_fFfBNLBVSeVnMqsJYfWPqx2tQCeiHnBeVdmTGdcrsrnLuumD_uCAhhK3sPtGSXTif5u0QF9A0W2y4e6slVbEcOD5B-pomHxpm3f1kL2VKxf7SiXewulB4zhPEXo9DRXkJNFa-pGL-sJTkBziuohr1B2BRyYVngJVstjfkCX6kFcabukz6A16yrEBnn2wYvopefcU32w1QFSPoPX4hz_WmqvTbq-W2WdFU_1Wj9KPs265nf149pGsniaOLwchv6SqoDmbykrzE" loading="lazy" width="600" height="256" />
        </div>
        <div class="p-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white mb-4">Packaging Solutions Hub</h3>
          <div class="space-y-3 mb-6 text-sm">
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Industry:</span>
              <span class="text-gray-900 dark:text-white font-medium">Consumer Goods</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Location:</span>
              <span class="text-gray-900 dark:text-white font-medium">Karachi, Pakistan</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Scope:</span>
              <span class="text-gray-900 dark:text-white font-medium">Design and Production</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Timeline:</span>
              <span class="text-gray-900 dark:text-white font-medium">12 Months</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Outcomes:</span>
              <span class="text-gray-900 dark:text-white font-medium">Scalable Operations</span>
            </div>
          </div>
          <a href="contact.php" class="inline-flex items-center gap-2 w-full justify-center px-6 py-3 bg-gray-900 dark:bg-white text-white dark:text-black rounded-full text-sm font-semibold hover:bg-gray-800 dark:hover:bg-gray-100 transition-all">
            Request a Similar Project Quote
            <span class="material-icons-outlined text-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Project Card 3 -->
      <div class="group border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden bg-surface-light dark:bg-surface-dark hover:border-gray-400 dark:hover:border-gray-600 transition-all duration-300">
        <div class="h-64 overflow-hidden">
          <img alt="Infrastructure Development" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBN13H0psPt5cKfpbwGYETXbKT9-tJw6XLlFIp09Ubh50ZhcnqB9FQKQHeLa5gDWLte_fPw7mw7grCd7cvjb0L3dyTo09dph_ADEHjai54ixLRO3rDV5Hhlr2YnoSYH6ZVISTdiikmBhJxb0tW4vgePKX31QE4ULQC9DwxYtcwnid3cvl8gDZFbNCu-nYw55W5i4eKUDqSaASdZ18qKfaJamvBNrRw6ph8etNc9MgYdBwIbOKS_rhQTKtvau2F_qUv_84BlNcl8Ouo" loading="lazy" width="600" height="256" />
        </div>
        <div class="p-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white mb-4">Infrastructure Development</h3>
          <div class="space-y-3 mb-6 text-sm">
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Industry:</span>
              <span class="text-gray-900 dark:text-white font-medium">Construction</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Location:</span>
              <span class="text-gray-900 dark:text-white font-medium">Islamabad, Pakistan</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Scope:</span>
              <span class="text-gray-900 dark:text-white font-medium">Multi Phase Complex</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Timeline:</span>
              <span class="text-gray-900 dark:text-white font-medium">24 Months</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Outcomes:</span>
              <span class="text-gray-900 dark:text-white font-medium">On Time Delivery</span>
            </div>
          </div>
          <a href="contact.php" class="inline-flex items-center gap-2 w-full justify-center px-6 py-3 bg-gray-900 dark:bg-white text-white dark:text-black rounded-full text-sm font-semibold hover:bg-gray-800 dark:hover:bg-gray-100 transition-all">
            Request a Similar Project Quote
            <span class="material-icons-outlined text-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Project Card 4 -->
      <div class="group border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden bg-surface-light dark:bg-surface-dark hover:border-gray-400 dark:hover:border-gray-600 transition-all duration-300">
        <div class="h-64 overflow-hidden">
          <img alt="Logistics Center" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0bikdpbTnJ3JPPNA0q3fKk9Dq1kLKuoXvLzBYdGrkCcm0CRu0iKMh35v_CUD3YFx6wSIEev3Pm8ZOHHvl4YVLHRNFgGwhp9UGXpT6_4aijCjld_fKddCFyVoEABYUta4Q85wyubBj-wXbcCyvUaA-dgBXNu_OZFc6sdPmTr1TE-WNtA2Qk1MIah20aA04hB25OX-y4ZGTY4VDDgCztn2TMbVy8zFcezieHpfAAMTHgfHL0oZJrD2l6X6FekGrLtXgsMEuTZByRQU" loading="lazy" width="600" height="256" />
        </div>
        <div class="p-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white mb-4">Logistics Center</h3>
          <div class="space-y-3 mb-6 text-sm">
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Industry:</span>
              <span class="text-gray-900 dark:text-white font-medium">Supply Chain</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Location:</span>
              <span class="text-gray-900 dark:text-white font-medium">Faisalabad, Pakistan</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Scope:</span>
              <span class="text-gray-900 dark:text-white font-medium">Warehouse and Distribution</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Timeline:</span>
              <span class="text-gray-900 dark:text-white font-medium">14 Months</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Outcomes:</span>
              <span class="text-gray-900 dark:text-white font-medium">Streamlined Operations</span>
            </div>
          </div>
          <a href="contact.php" class="inline-flex items-center gap-2 w-full justify-center px-6 py-3 bg-gray-900 dark:bg-white text-white dark:text-black rounded-full text-sm font-semibold hover:bg-gray-800 dark:hover:bg-gray-100 transition-all">
            Request a Similar Project Quote
            <span class="material-icons-outlined text-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Project Card 5 -->
      <div class="group border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden bg-surface-light dark:bg-surface-dark hover:border-gray-400 dark:hover:border-gray-600 transition-all duration-300">
        <div class="h-64 overflow-hidden">
          <img alt="Energy Solutions Installation" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxmpkE7Vmn9bcdrShBbjhuWneY1D0Ie_TQRlMvjoRhEjjwneVaRIe9NOI98RbJdQI2kxe4ZYB-qUwyU9Xpw8kQbtODZdmf3Dnk9_vBtU1aaIsWN9uNxqLozupOhjkL4ENMgFmjeuDzBjUInjRLE5XvA7TiLWKYd0Ei2Tw1rKhMCNTiXJGnvHD2flwCww2rwxiwHjzrZ2GVRMF1klav4YvT2sQDEivP4M87tj9bJVt2UpbgdoxjSBPYyYSHdyQvgaQvg2w9xqiGchE" loading="lazy" width="600" height="256" />
        </div>
        <div class="p-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white mb-4">Energy Solutions Installation</h3>
          <div class="space-y-3 mb-6 text-sm">
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Industry:</span>
              <span class="text-gray-900 dark:text-white font-medium">Renewable Energy</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Location:</span>
              <span class="text-gray-900 dark:text-white font-medium">Multan, Pakistan</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Scope:</span>
              <span class="text-gray-900 dark:text-white font-medium">Solar Power System</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Timeline:</span>
              <span class="text-gray-900 dark:text-white font-medium">10 Months</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Outcomes:</span>
              <span class="text-gray-900 dark:text-white font-medium">Sustainable Power</span>
            </div>
          </div>
          <a href="contact.php" class="inline-flex items-center gap-2 w-full justify-center px-6 py-3 bg-gray-900 dark:bg-white text-white dark:text-black rounded-full text-sm font-semibold hover:bg-gray-800 dark:hover:bg-gray-100 transition-all">
            Request a Similar Project Quote
            <span class="material-icons-outlined text-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Project Card 6 -->
      <div class="group border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden bg-surface-light dark:bg-surface-dark hover:border-gray-400 dark:hover:border-gray-600 transition-all duration-300">
        <div class="h-64 overflow-hidden">
          <img alt="Food Processing Plant" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdo_fFfBNLBVSeVnMqsJYfWPqx2tQCeiHnBeVdmTGdcrsrnLuumD_uCAhhK3sPtGSXTif5u0QF9A0W2y4e6slVbEcOD5B-pomHxpm3f1kL2VKxf7SiXewulB4zhPEXo9DRXkJNFa-pGL-sJTkBziuohr1B2BRyYVngJVstjfkCX6kFcabukz6A16yrEBnn2wYvopefcU32w1QFSPoPX4hz_WmqvTbq-W2WdFU_1Wj9KPs265nf149pGsniaOLwchv6SqoDmbykrzE" loading="lazy" width="600" height="256" />
        </div>
        <div class="p-8">
          <h3 class="font-display text-2xl text-gray-900 dark:text-white mb-4">Food Processing Plant</h3>
          <div class="space-y-3 mb-6 text-sm">
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Industry:</span>
              <span class="text-gray-900 dark:text-white font-medium">Food and Beverage</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Location:</span>
              <span class="text-gray-900 dark:text-white font-medium">Gujranwala, Pakistan</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Scope:</span>
              <span class="text-gray-900 dark:text-white font-medium">Complete Facility</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Timeline:</span>
              <span class="text-gray-900 dark:text-white font-medium">20 Months</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 dark:text-gray-400">Outcomes:</span>
              <span class="text-gray-900 dark:text-white font-medium">Hygiene Certified</span>
            </div>
          </div>
          <a href="contact.php" class="inline-flex items-center gap-2 w-full justify-center px-6 py-3 bg-gray-900 dark:bg-white text-white dark:text-black rounded-full text-sm font-semibold hover:bg-gray-800 dark:hover:bg-gray-100 transition-all">
            Request a Similar Project Quote
            <span class="material-icons-outlined text-sm">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface-light dark:bg-surface-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="max-w-3xl mx-auto text-center">
      <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-4">(02) Confidentiality</span>
      <h2 class="font-display text-3xl md:text-4xl text-gray-900 dark:text-white mb-6">Client Confidentiality and NDAs</h2>
      <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8">Many of our projects operate under strict non disclosure agreements. Client names and specific project details may be withheld to protect proprietary information and competitive advantages. Available on request, we can provide detailed case studies and technical documentation for qualified prospects under appropriate confidentiality terms.</p>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="max-w-4xl mx-auto">
      <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-4">(03) Frequently Asked Questions</span>
      <h2 class="font-display text-4xl md:text-5xl text-gray-900 dark:text-white mb-12">Common Questions About Our Projects</h2>
      
      <div class="space-y-6">
        <!-- FAQ 1 -->
        <div class="border-b border-gray-200 dark:border-gray-800 pb-6">
          <h3 class="font-display text-xl text-gray-900 dark:text-white mb-3">What is the typical project timeline?</h3>
          <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Project timelines vary based on scope and complexity. Small scale projects typically range from 3 to 6 months, while large infrastructure projects may take 18 to 36 months. We provide detailed timelines during the proposal phase after understanding your specific requirements.</p>
        </div>

        <!-- FAQ 2 -->
        <div class="border-b border-gray-200 dark:border-gray-800 pb-6">
          <h3 class="font-display text-xl text-gray-900 dark:text-white mb-3">Do you have minimum order quantities for packaging projects?</h3>
          <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Minimum order quantities depend on the packaging type and material. For custom packaging solutions, MOQs typically start at 10,000 units. Standard packaging may have lower MOQs. We work with clients to find solutions that meet both quality and volume requirements.</p>
        </div>

        <!-- FAQ 3 -->
        <div class="border-b border-gray-200 dark:border-gray-800 pb-6">
          <h3 class="font-display text-xl text-gray-900 dark:text-white mb-3">What is your project process?</h3>
          <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Our process begins with an initial consultation to understand your needs. We then conduct a requirements analysis and site review if applicable. Next, we develop a detailed proposal with specifications, timeline, and pricing. Upon approval, we proceed with project execution, regular updates, and final delivery with documentation.</p>
        </div>

        <!-- FAQ 4 -->
        <div class="border-b border-gray-200 dark:border-gray-800 pb-6">
          <h3 class="font-display text-xl text-gray-900 dark:text-white mb-3">Do you conduct site visits?</h3>
          <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Yes, we conduct site visits for projects that require on site assessment. This is particularly important for infrastructure, construction, and facility upgrade projects. Site visits help us understand existing conditions, logistics, and specific requirements that impact project planning and execution.</p>
        </div>

        <!-- FAQ 5 -->
        <div class="pb-6">
          <h3 class="font-display text-xl text-gray-900 dark:text-white mb-3">How do you handle NDAs and confidentiality?</h3>
          <p class="text-gray-600 dark:text-gray-400 leading-relaxed">We respect client confidentiality and are experienced working under non disclosure agreements. Many project details shown here are anonymized to protect client interests. For qualified prospects, we can provide detailed case studies and technical documentation under appropriate confidentiality terms. Available on request, certifications and audit documentation.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-24 px-6 md:px-12 bg-surface-light dark:bg-surface-dark">
  <div class="max-w-[1600px] mx-auto">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="font-display text-4xl md:text-5xl text-gray-900 dark:text-white mb-6">Ready to Start Your Project?</h2>
      <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8">Let's discuss how we can deliver industrial solutions that meet your specific requirements and drive measurable results.</p>
      <a href="contact.php" class="inline-flex items-center gap-3 bg-gray-900 dark:bg-white text-white dark:text-black px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-800 dark:hover:bg-gray-100 transition-all">
        Book a Consultation
        <span class="material-icons-outlined text-sm">arrow_forward</span>
      </a>
    </div>
  </div>
</section>

<?php require INCLUDES_PATH . '/page-end.php'; ?>
