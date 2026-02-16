<script>
  // Theme toggle + persistence (default: light)
  (function () {
    var STORAGE_KEY = "theme";
    var root = document.documentElement;

    function getTheme() {
      try {
        var stored = window.localStorage ? localStorage.getItem(STORAGE_KEY) : null;
        return stored === "dark" ? "dark" : "light";
      } catch (e) {
        return "light";
      }
    }

    function applyTheme(theme) {
      if (theme === "dark") root.classList.add("dark");
      else root.classList.remove("dark");
      root.setAttribute("data-theme", theme);

      var toggles = document.querySelectorAll("[data-theme-toggle]");
      toggles.forEach(function (btn) {
        var nextTheme = theme === "dark" ? "light" : "dark";
        var icon = btn.querySelector("[data-theme-toggle-icon]");
        var label = btn.querySelector("[data-theme-toggle-label]");

        if (icon) icon.textContent = nextTheme === "dark" ? "dark_mode" : "light_mode";
        if (label) label.textContent = nextTheme === "dark" ? "Switch to dark mode" : "Switch to light mode";
        btn.setAttribute("aria-label", nextTheme === "dark" ? "Switch to dark mode" : "Switch to light mode");
        btn.setAttribute("title", nextTheme === "dark" ? "Switch to dark mode" : "Switch to light mode");
      });
    }

    function setTheme(theme) {
      try {
        if (window.localStorage) localStorage.setItem(STORAGE_KEY, theme);
      } catch (e) {}
      applyTheme(theme);
    }

    document.addEventListener("DOMContentLoaded", function () {
      applyTheme(getTheme());

      document.querySelectorAll("[data-theme-toggle]").forEach(function (btn) {
        btn.addEventListener("click", function () {
          var current = root.classList.contains("dark") ? "dark" : "light";
          setTheme(current === "dark" ? "light" : "dark");
        });
      });

      // GA4 contact events (phone/email clicks)
      document.querySelectorAll(".ga-contact").forEach(function (el) {
        el.addEventListener("click", function () {
          if (typeof gtag === "function") {
            var method = el.getAttribute("data-ga-method") || "contact";
            gtag("event", "contact", { method: method });
          }
        });
      });
    });
  })();
</script>
