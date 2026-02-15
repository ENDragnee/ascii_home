<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'Ascii Technologies - Strategic Technology Solutions')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Ascii Technologies partners with businesses..." />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>

    @stack('styles')
</head>
<body>
    <div class="cursor"></div>
    <div class="background-grid"></div>

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.9.3/tsparticles.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Global JS (Cursor, AOS Init, tsParticles Init)
        document.addEventListener("DOMContentLoaded", () => {
            AOS.init({ duration: 800, once: true });
            // ... tsParticles initialization
        });
    </script>
    @stack('scripts')
</body>
</html>
