<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title', 'Ascii Technologies - Strategic Technology Solutions')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Meta Tags (Copy from your file) -->
    <meta name="description" content="Ascii Technologies partners with businesses..." />
    <link rel="canonical" href="https://www.ascii-technologies.com/" />

    <!-- Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- HTMX (Added for your industry filter) -->
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <!-- Compiled Assets via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <!-- Global UI Elements -->
    <div class="logo">
      <img src="{{ asset('ascii.png') }}" alt="ASCII Technologies Logo" />
    </div>

    <div class="cursor"></div>
    <div class="background-grid"></div>

    @include('partials.nav')

    <!-- Page Content -->
    @yield('content')

    @include('partials.footer')
  </body>
</html>
