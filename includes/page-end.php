<?php
/**
 * Cookie consent, footer, WhatsApp CTA (if $showWhatsApp), and closing body/html.
 */
include __DIR__ . '/cookie-consent.php';
include __DIR__ . '/footer.php';
if (!empty($showWhatsApp)) {
  include __DIR__ . '/whatsapp-cta.php';
}
?>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof lucide !== 'undefined' && lucide.createIcons) lucide.createIcons();
  });
</script>
</body>
</html>
