<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @if (isset($headTitle) && $headTitle)
            {{ $headTitle }} -
        @endif{{ config('app.name', 'SINODE GKPB') }}
    </title>

    <link rel="icon" href="/assets/images/logo.png" sizes="any">
    <link rel="icon" href="/assets/images/logo.png" type="image/png">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Add Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Dark mode script (must run before page renders) -->
    <script>
        // Initialize theme on page load (before page renders to avoid flash)
        (function() {
            const savedAppearance = localStorage.getItem('appearance') || 'system';
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const isDark = savedAppearance === 'dark' || (savedAppearance === 'system' && prefersDark);

            if (isDark) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>

    @production
        @php
            $manifestPath = public_path('build/manifest.json');
            $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp
        <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
        <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}"></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endproduction
</head>

<body class="font-sans antialiased scroll-smooth bg-stone-50">
    {{ $slot }}
    @stack('scripts')

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/animation/navbar.js') }}"></script>
</body>

</html>
