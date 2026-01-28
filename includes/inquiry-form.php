<?php
/**
 * Inquiry form include.
 * Structure only; form action prepared for future handler.
 * Use $formAction to override (e.g. contact page handler).
 */
$formAction = isset($inquiryFormAction) ? $inquiryFormAction : 'send-inquiry.php';
$formId     = isset($inquiryFormId) ? $inquiryFormId : 'inquiry-form';
?>
<form id="<?php echo htmlspecialchars($formId, ENT_QUOTES, 'UTF-8'); ?>" class="space-y-6" method="post" action="<?php echo $formAction ? htmlspecialchars($formAction, ENT_QUOTES, 'UTF-8') : ''; ?>" novalidate>
  <div>
    <label for="inquiry-name" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Name</label>
    <input type="text" id="inquiry-name" name="name" required autocomplete="name" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-surface-dark text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-gray-400 dark:focus:ring-gray-500 focus:border-transparent transition-all" placeholder="Your name" />
  </div>
  <div>
    <label for="inquiry-email" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Email</label>
    <input type="email" id="inquiry-email" name="email" required autocomplete="email" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-surface-dark text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-gray-400 dark:focus:ring-gray-500 focus:border-transparent transition-all" placeholder="you@example.com" />
  </div>
  <div>
    <label for="inquiry-company" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Company <span class="text-gray-500 dark:text-gray-400 font-normal">(optional)</span></label>
    <input type="text" id="inquiry-company" name="company" autocomplete="organization" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-surface-dark text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-gray-400 dark:focus:ring-gray-500 focus:border-transparent transition-all" placeholder="Company name" />
  </div>
  <div>
    <label for="inquiry-message" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Message</label>
    <textarea id="inquiry-message" name="message" required rows="5" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-surface-dark text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-gray-400 dark:focus:ring-gray-500 focus:border-transparent transition-all resize-y" placeholder="How can we help?"></textarea>
  </div>
  <div>
    <button type="submit" class="inline-flex items-center gap-2 bg-white dark:bg-white text-black px-8 py-4 rounded-full text-sm font-semibold hover:bg-gray-100 transition-all border border-gray-200 shadow-sm hover:shadow-md">
      Send Inquiry
      <span class="material-icons-outlined text-sm">arrow_forward</span>
    </button>
  </div>
</form>
