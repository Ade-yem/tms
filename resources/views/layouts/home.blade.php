<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white">
        <div class="bg-white">
            @include('layouts.header')
            @isset($header)
            <header class="absolute inset-x-0 top-0 z-50">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endisset

            <div class="relative isolate px-6 sm:px-8">
              {{ $slot }}
            </div>
          </div>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        &copy; Adeyemi 2024.
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
