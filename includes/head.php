<?php
if (!isset($title)) $title = 'Bin Naaem Industries';
?>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
          "background-light": "#F3F4F6",
          "background-dark": "#121212",
          "surface-light": "#FFFFFF",
          "surface-dark": "#1E1E1E",
          "border-light": "#E5E7EB",
          "border-dark": "#333333",
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
  .no-scrollbar::-webkit-scrollbar { display: none; }
  .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
  .animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
  .delay-100 { animation-delay: 100ms; }
  .delay-200 { animation-delay: 200ms; }
  .delay-300 { animation-delay: 300ms; }

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
