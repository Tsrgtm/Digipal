<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<script>
    function applyTheme() {
        const savedTheme = localStorage.getItem("theme") || "light";
        const html = document.documentElement;

        if (savedTheme === "dark") {
            html.classList.add("dark");
            html.setAttribute("data-theme", "dark");
        } else {
            html.classList.remove("dark");
            html.setAttribute("data-theme", "light");
        }
    }

    function toggleDarkMode() {
        const html = document.documentElement;
        const isDark = html.classList.contains("dark");
        const newTheme = isDark ? "light" : "dark";
        localStorage.setItem("theme", newTheme);
        applyTheme();
    }

    function bindThemeToggle() {
        const themeToggle = document.getElementById("theme-toggle");
        if (themeToggle) {
            themeToggle.removeEventListener("click", toggleDarkMode); // Clean any previous
            themeToggle.addEventListener("click", toggleDarkMode);
        }
    }

    // On initial load
    applyTheme();
    document.addEventListener("DOMContentLoaded", () => {
        bindThemeToggle();
    });

    // After Livewire navigation
    window.addEventListener("livewire:navigated", () => {
        applyTheme();
        bindThemeToggle(); // <== this is what was missing
    });
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
