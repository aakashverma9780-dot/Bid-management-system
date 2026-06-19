<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title> -->

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" /> -->


        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation') -->

            <!-- Page Heading -->
            <!-- @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset -->

            <!-- Page Content -->
            <!-- <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> -->


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bid Control') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
@stack('scripts')
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="font-sans antialiased bg-ink-50 text-ink-800">
    <div x-data="{ mobileOpen: false }">

        @include('layouts.navigation')

        <div class="lg:pl-64 min-h-screen flex flex-col">

            {{-- Top bar (mobile menu button + page header) --}}
            <header class="sticky top-0 z-20 bg-white/80 backdrop-blur border-b border-ink-100">
                <div class="flex items-center gap-4 px-4 sm:px-6 lg:px-8 h-16">
                    <button @click="mobileOpen = true" class="lg:hidden text-ink-500 hover:text-ink-800">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    @isset($header)
                        <div class="flex-1">{{ $header }}</div>
                    @endisset
                </div>
            </header>

            <main class="flex-1 px-4 sm:px-6 lg:px-8 py-8 animate-fade-in">
                {{ $slot }}
            </main>

        </div>
    </div>
     @stack('scripts')
</body>
</html>
