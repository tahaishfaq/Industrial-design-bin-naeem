<?php
if (!isset($title)) $title = 'Bin Naaem Industries';
?>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php include __DIR__ . DIRECTORY_SEPARATOR . 'seo.php'; ?>
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
</style>
