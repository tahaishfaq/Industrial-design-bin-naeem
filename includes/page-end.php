<?php
/**
 * Footer, WhatsApp CTA (if $showWhatsApp), and closing body/html.
 */
include __DIR__ . '/footer.php';
if (!empty($showWhatsApp)) {
  include __DIR__ . '/whatsapp-cta.php';
}
?>
</body>
</html>
