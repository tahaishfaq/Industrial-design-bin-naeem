<?php
$base = (isset($isBrand) && $isBrand) ? '../' : ((isset($isBlog) && $isBlog) ? '../' : '');
$privacyUrl = $base . 'privacy-policy.php';
?>
<div id="cookie-consent-banner" class="fixed bottom-0 left-0 right-0 z-50 p-4 md:p-6 bg-surface border-t border-edge shadow-[0_-4px_20px_rgba(0,0,0,0.08)] hidden" role="dialog" aria-label="Cookie consent">
  <div class="max-w-[1600px] mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
    <p class="text-sm text-muted">
      We use cookies to improve your experience and for analytics. By continuing you agree to our use of cookies.
      <a href="<?php echo htmlspecialchars($privacyUrl, ENT_QUOTES, 'UTF-8'); ?>" class="underline hover:no-underline text-content">Privacy Policy</a>
    </p>
    <div class="flex items-center gap-3 shrink-0">
      <button type="button" id="cookie-consent-decline" class="px-4 py-2 text-sm font-medium text-muted hover:text-content transition-colors border border-edge">
        Decline
      </button>
      <button type="button" id="cookie-consent-accept" class="px-6 py-2.5 rounded-full bg-content text-surface text-sm font-semibold hover:opacity-90 transition-opacity">
        Accept
      </button>
    </div>
  </div>
</div>
<script>
(function() {
  var banner = document.getElementById('cookie-consent-banner');
  var stored = typeof localStorage !== 'undefined' ? localStorage.getItem('cookie_consent') : null;
  if (!stored) banner.classList.remove('hidden');

  function hide() { banner.classList.add('hidden'); }

  document.getElementById('cookie-consent-accept').addEventListener('click', function() {
    if (typeof localStorage !== 'undefined') localStorage.setItem('cookie_consent', 'accept');
    hide();
    location.reload();
  });

  document.getElementById('cookie-consent-decline').addEventListener('click', function() {
    if (typeof localStorage !== 'undefined') localStorage.setItem('cookie_consent', 'decline');
    hide();
  });
})();
</script>
