<?php
$base = (isset($isBrand) && $isBrand) ? '../' : '';
?>
<footer class="bg-surface-light dark:bg-surface-dark py-24 px-6 md:px-12 mt-12">
  <div class="max-w-[1600px] mx-auto">
    <span class="text-sm font-medium text-gray-500 dark:text-gray-400 block mb-8">(05) Contact Us</span>
    
    <!-- Main Contact Section: Let's Discuss -->
    <div class="mb-24">
      <h2 class="font-display text-6xl md:text-8xl lg:text-9xl text-gray-900 dark:text-white leading-none tracking-tight">
        Let's <span class="text-gray-400">discuss</span> your <br />
        vision
        <span class="inline-flex items-center align-middle mx-2">
          <a class="group flex items-center gap-3 bg-white text-black px-8 py-4 rounded-full text-lg font-bold hover:bg-gray-200 transition-all border border-gray-200" href="<?php echo $base; ?>contact.php">
            LET'S TALK
            <div class="w-8 h-8 bg-black rounded-full flex items-center justify-center group-hover:bg-gray-800 transition-colors">
              <span class="material-icons-outlined text-white text-sm transform -rotate-45">arrow_forward</span>
            </div>
          </a>
        </span>
        with us
      </h2>
    </div>

    <!-- Footer Bottom: 4 columns (Logo+contact, links 1, links 2, socials) --> 
    <div class="border-t border-gray-300 dark:border-gray-700 pt-12">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-10">

        <!-- Column 1: Logo + address + contact --> 
        <div class="space-y-4">
          <a href="<?php echo $base; ?>index.php" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
            <span class="material-icons-outlined text-2xl text-gray-900 dark:text-white">layers</span>
            <span class="font-bold text-lg tracking-widest uppercase text-gray-900 dark:text-white">Bin Naaem</span>
          </a>
          <div class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">
            <p>Jalil Centre, 231-Circular Road,<br />Bhati Gate, Lahore,<br />Pakistan. 54000</p>
            <p class="mt-3 text-gray-900 dark:text-white font-medium">
              <a href="tel:+924237311809" class="hover:underline">+92-42-37311809</a><br />
              <a href="tel:+923215707070" class="hover:underline">+92-3215707070</a><br />
              <a href="mailto:info@binnaeemindustries.com" class="hover:underline">info@binnaeemindustries.com</a>
            </p>
          </div>
        </div>

        <!-- Column 2: Nav links (set 1) --> 
        <div>
          <h3 class="text-xs font-semibold uppercase tracking-[0.15em] text-gray-500 dark:text-gray-400 mb-4">Navigate</h3>
          <div class="flex flex-col gap-2 text-sm">
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>index.php">Home</a>
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>capabilities.php">Services</a>
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>projects.php">Projects</a>
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>industries.php">Industries</a>
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>brands.php">Brands</a>
          </div>
        </div>

        <!-- Column 3: Nav links (set 2) --> 
        <div>
          <h3 class="text-xs font-semibold uppercase tracking-[0.15em] text-gray-500 dark:text-gray-400 mb-4">Company</h3>
          <div class="flex flex-col gap-2 text-sm">
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>leadership.php">About Us</a>
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>certifications.php">Certifications</a>
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>contact.php">Contact</a>
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>privacy-policy.php">Privacy</a>
            <a class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors" href="<?php echo $base; ?>terms.php">Terms</a>
          </div>
        </div>

        <!-- Column 4: Social icons + copyright --> 
        <div class="flex flex-col items-start md:items-end justify-between gap-4">
          <div>
            <h3 class="text-xs font-semibold uppercase tracking-[0.15em] text-gray-500 dark:text-gray-400 mb-4">Connect</h3>
            <div class="flex items-center gap-4">
              <a href="https://www.instagram.com/binnaeemindustries?igsh=YXB0bTUyYW45d2Fv" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Instagram" class="w-10 h-10 rounded-full border border-gray-300 dark:border-gray-600 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:border-gray-900 dark:hover:border-white transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
              </a>
              <a href="https://wa.me/923215707070" target="_blank" rel="noopener noreferrer" aria-label="Contact us on WhatsApp" class="w-10 h-10 rounded-full border border-gray-300 dark:border-gray-600 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:border-gray-900 dark:hover:border-white transition-all">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884Z"/>
                </svg>
              </a>
              <a href="https://www.facebook.com/binnaeemindustries" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Facebook" class="w-10 h-10 rounded-full border border-gray-300 dark:border-gray-600 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:border-gray-900 dark:hover:border-white transition-all">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="text-xs text-gray-500 dark:text-gray-400 pt-4 text-left md:text-right">
            © Bin Naaem Industries 2023. All Rights Reserved.
          </div>
        </div>

      </div>
    </div>
  </div>
</footer>
