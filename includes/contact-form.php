<?php
/**
 * Enhanced contact form for contact page with additional fields.
 */
$formAction = isset($inquiryFormAction) ? $inquiryFormAction : 'send-inquiry.php';
$formId     = isset($inquiryFormId) ? $inquiryFormId : 'contact-form';
$presetIndustry = isset($contactPresetIndustry) ? $contactPresetIndustry : '';
$presetBrand = isset($contactPresetBrand) ? $contactPresetBrand : '';
$presetProject = isset($contactPresetProject) ? $contactPresetProject : '';
?>
<form id="<?php echo htmlspecialchars($formId, ENT_QUOTES, 'UTF-8'); ?>" class="space-y-6" method="post" action="<?php echo $formAction ? htmlspecialchars($formAction, ENT_QUOTES, 'UTF-8') : ''; ?>" novalidate>
  <?php if ($presetBrand !== ''): ?><input type="hidden" name="brand_name" value="<?php echo htmlspecialchars($presetBrand, ENT_QUOTES, 'UTF-8'); ?>" /><?php endif; ?>
  <?php if ($presetProject !== ''): ?><input type="hidden" name="project_reference" value="<?php echo htmlspecialchars($presetProject, ENT_QUOTES, 'UTF-8'); ?>" /><?php endif; ?>
  <div>
    <label for="contact-name" class="block text-sm font-medium text-content mb-2">Name</label>
    <input type="text" id="contact-name" name="name" required autocomplete="name" class="w-full px-4 py-3 rounded-xl border border-edge bg-surface text-content placeholder:text-muted focus:ring-2 focus:ring-muted focus:border-transparent transition-all" placeholder="Your name" />
  </div>
  <div>
    <label for="contact-email" class="block text-sm font-medium text-content mb-2">Email</label>
    <input type="email" id="contact-email" name="email" required autocomplete="email" class="w-full px-4 py-3 rounded-xl border border-edge bg-surface text-content placeholder:text-muted focus:ring-2 focus:ring-muted focus:border-transparent transition-all" placeholder="you@example.com" />
  </div>
  <div>
    <label for="contact-industry" class="block text-sm font-medium text-content mb-2">Industry</label>
    <select id="contact-industry" name="industry" class="w-full px-4 py-3 rounded-xl border border-edge bg-surface text-content focus:ring-2 focus:ring-muted focus:border-transparent transition-all">
      <option value="">Select Industry</option>
      <option value="fmcg"<?php if ($presetIndustry === 'fmcg') echo ' selected'; ?>>FMCG</option>
      <option value="food-beverage"<?php if ($presetIndustry === 'food-beverage') echo ' selected'; ?>>Food and Beverage</option>
      <option value="skincare-cosmetics"<?php if ($presetIndustry === 'skincare-cosmetics') echo ' selected'; ?>>Skincare &amp; Cosmetics</option>
      <option value="ecommerce-packaging"<?php if ($presetIndustry === 'ecommerce-packaging') echo ' selected'; ?>>E-commerce Packaging</option>
      <option value="retail-gifting"<?php if ($presetIndustry === 'retail-gifting') echo ' selected'; ?>>Retail &amp; Gifting</option>
      <option value="construction-infrastructure"<?php if ($presetIndustry === 'construction-infrastructure') echo ' selected'; ?>>Construction &amp; Infrastructure</option>
      <option value="construction"<?php if ($presetIndustry === 'construction') echo ' selected'; ?>>Construction</option>
      <option value="manufacturing">Manufacturing</option>
      <option value="logistics">Logistics</option>
      <option value="energy">Energy</option>
      <option value="packaging">Packaging</option>
      <option value="other">Other</option>
    </select>
  </div>
  <div>
    <label for="contact-project-type" class="block text-sm font-medium text-content mb-2">Project Type</label>
    <select id="contact-project-type" name="project_type" class="w-full px-4 py-3 rounded-xl border border-edge bg-surface text-content focus:ring-2 focus:ring-muted focus:border-transparent transition-all">
      <option value="">Select Project Type</option>
      <option value="manufacturing">Manufacturing Facility</option>
      <option value="packaging">Packaging Solutions</option>
      <option value="infrastructure">Infrastructure Development</option>
      <option value="logistics">Logistics and Distribution</option>
      <option value="energy">Energy Solutions</option>
      <option value="consultation">Consultation</option>
      <option value="other">Other</option>
    </select>
  </div>
  <div>
    <label for="contact-timeline" class="block text-sm font-medium text-content mb-2">Timeline</label>
    <select id="contact-timeline" name="timeline" class="w-full px-4 py-3 rounded-xl border border-edge bg-surface text-content focus:ring-2 focus:ring-muted focus:border-transparent transition-all">
      <option value="">Select Timeline</option>
      <option value="asap">As Soon As Possible</option>
      <option value="1-3-months">1 to 3 Months</option>
      <option value="3-6-months">3 to 6 Months</option>
      <option value="6-12-months">6 to 12 Months</option>
      <option value="12-plus-months">12+ Months</option>
      <option value="exploring">Just Exploring</option>
    </select>
  </div>
  <div>
    <label for="contact-budget" class="block text-sm font-medium text-content mb-2">Budget Range <span class="text-muted font-normal">(optional)</span></label>
    <select id="contact-budget" name="budget" class="w-full px-4 py-3 rounded-xl border border-edge bg-surface text-content focus:ring-2 focus:ring-muted focus:border-transparent transition-all">
      <option value="">Select Budget Range</option>
      <option value="under-50k">Under $50,000</option>
      <option value="50k-100k">$50,000 to $100,000</option>
      <option value="100k-500k">$100,000 to $500,000</option>
      <option value="500k-1m">$500,000 to $1,000,000</option>
      <option value="1m-plus">$1,000,000+</option>
      <option value="prefer-not-to-say">Prefer Not to Say</option>
    </select>
  </div>
  <div>
    <label for="contact-message" class="block text-sm font-medium text-content mb-2">Message</label>
    <textarea id="contact-message" name="message" required rows="5" class="w-full px-4 py-3 rounded-xl border border-edge bg-surface text-content placeholder:text-muted focus:ring-2 focus:ring-muted focus:border-transparent transition-all resize-y" placeholder="How can we help?"></textarea>
  </div>
  <div>
    <button type="submit" class="inline-flex items-center gap-2 bg-content text-surface px-8 py-4 rounded-full text-sm font-semibold hover:bg-surface2 transition-all border border-edge shadow-sm hover:shadow-md">
      Send Inquiry
      <i data-lucide="arrow-right" class="w-4 h-4"></i>
    </button>
  </div>
</form>
