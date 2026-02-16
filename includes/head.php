<?php
if (!isset($title)) $title = 'Bin Naaem Industries';
?>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
if (!empty($gscVerification)) {
  echo '<meta name="google-site-verification" content="' . htmlspecialchars($gscVerification, ENT_QUOTES, 'UTF-8') . '" />' . "\n";
}
?>
<?php include __DIR__ . DIRECTORY_SEPARATOR . 'seo.php'; ?>
<script>
  // Theme (default: light). Adds/removes the `dark` class on <html>.
  (function () {
    try {
      var root = document.documentElement;
      var stored = window.localStorage ? localStorage.getItem("theme") : null;
      var theme = stored === "dark" ? "dark" : "light";
      if (theme === "dark") root.classList.add("dark");
      else root.classList.remove("dark");
      root.setAttribute("data-theme", theme);
    } catch (e) {
      // If storage is blocked, keep light by default.
      document.documentElement.classList.remove("dark");
      document.documentElement.setAttribute("data-theme", "light");
    }
  })();
</script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&amp;family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&amp;display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
<script>
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        colors: {
          primary: "#FFFFFF",
          /* Tinted canvas theme (CSS vars: --bg etc. are space-separated RGB) */
          canvas: "rgb(var(--bg))",
          surface: "rgb(var(--surface))",
          surface2: "rgb(var(--surface2))",
          content: "rgb(var(--text))",
          muted: "rgb(var(--muted))",
          edge: "rgb(var(--border))",
          /* Legacy aliases */
          "background-light": "rgb(var(--bg))",
          "background-dark": "rgb(var(--bg))",
          "surface-light": "rgb(var(--surface))",
          "surface-dark": "rgb(var(--surface))",
          "border-light": "rgb(var(--border))",
          "border-dark": "rgb(var(--border))",
        },
        fontFamily: {
          display: ["Playfair Display", "serif"],
          sans: ["Inter", "sans-serif"],
        },
        borderRadius: {
          DEFAULT: "0.5rem",
          xl: "1rem",
          "2xl": "1.5rem",
          "3xl": "2rem",
        },
        fontSize: {
          "10xl": "10rem",
        },
      },
    },
  };
</script>
<style>
  /* Theme tokens: tinted canvas + softer surfaces (fixes light-mode “white sheet” feel). */
  :root {
    --bg: 245 247 250;
    --surface: 255 255 255;
    --surface2: 248 250 252;
    --text: 11 18 32;
    --muted: 86 96 110;
    --border: 226 232 240;
    --shadow-card: 0 1px 3px rgba(0,0,0,0.06);
  }
  html.dark {
    --bg: 8 12 18;
    --surface: 14 19 28;
    --surface2: 17 24 39;
    --text: 236 242 255;
    --muted: 160 174 192;
    --border: 38 48 64;
    --shadow-card: 0 4px 12px rgba(0,0,0,0.3);
  }
  .no-scrollbar::-webkit-scrollbar { display: none; }
  .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
  .animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
  .delay-100 { animation-delay: 100ms; }
  .delay-200 { animation-delay: 200ms; }
  .delay-300 { animation-delay: 300ms; }
  /* Hero: light scrim in light mode so hero stays bright; stronger scrim in dark mode for text. */
  .hero-scrim { background: linear-gradient(to top, rgba(0,0,0,0.18) 0%, rgba(0,0,0,0.02) 50%, transparent 100%); }
  html.dark .hero-scrim { background: linear-gradient(to top, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.1) 40%, transparent 100%); }
  .shadow-card { box-shadow: var(--shadow-card); }

  /* Design tokens: glass surfaces (consistent across light/dark). */
  :root{
    --glass-bg: rgba(255,255,255,0.42);
    --glass-bg-hover: rgba(255,255,255,0.58);
    --glass-border: rgba(0,0,0,0.06);
    --glass-shadow: 0 10px 30px rgba(0,0,0,0.08);

    --glass-soft-bg: rgba(255,255,255,0.18);
    --glass-soft-border: rgba(255,255,255,0.22);
  }
  html.dark{
    --glass-bg: rgba(0,0,0,0.28);
    --glass-bg-hover: rgba(255,255,255,0.06);
    --glass-border: rgba(255,255,255,0.10);
    --glass-shadow: 0 10px 30px rgba(0,0,0,0.50);

    --glass-soft-bg: rgba(0,0,0,0.30);
    --glass-soft-border: rgba(255,255,255,0.14);
  }
  .glass{
    background: var(--glass-bg);
    border: 1px solid var(--glass-border);
    box-shadow: var(--glass-shadow);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
    transition: background 200ms ease;
  }
  .glass:hover{ background: var(--glass-bg-hover); }
  .glass-soft{
    background: var(--glass-soft-bg);
    border: 1px solid var(--glass-soft-border);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    transition: background 200ms ease;
  }
</style>
<?php
$gaId = isset($ga4MeasurementId) && $ga4MeasurementId !== '' ? $ga4MeasurementId : '';
if ($gaId !== ''):
?>
<script>
  window.GA4_ID = <?php echo json_encode($gaId, JSON_UNESCAPED_SLASHES); ?>;
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  (function(){
    var consent = typeof localStorage !== 'undefined' ? localStorage.getItem('cookie_consent') : null;
    if (consent === 'accept' && window.GA4_ID) {
      var s = document.createElement('script'); s.async = true;
      s.src = 'https://www.googletagmanager.com/gtag/js?id=' + window.GA4_ID;
      document.head.appendChild(s);
      gtag('js', new Date());
      gtag('config', window.GA4_ID);
    } else {
      gtag = function(){};
    }
  })();
</script>
<?php endif; ?>
