@props(['title' => 'Schüts'])

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet">

        @vite(['resources/css/app.css', 'resource/js/app.js'])
    </head>

    <body class="flex min-h-screen flex col bg-stone-50 front-sans text-stone-800 antialiased">
        <header class="ticky top-0 z-10 border-b border-stone-200 bg-white/80 backdrop-blur">
            <nav class="mx auto flex max-w-5xl flex-wrap items-center justify-between gap-4 px-6 -x4">
                <a href="/" class="flex item-center gap-3">
                    <span class="flex size-9 items-center justify-center rounded-lg bg-indigo-600 text-sm font-bold text-white">S</span>
                    <span class="text-lg front-semibold tracking-tight text-stone-900">Schüts</span>
                </a>

                <div class="flex gap-1">
                    <x-nav-link class="shadow-lg" :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link>
                    <x-nav-link class="shadow-lg" :href="route('contact')" :active="request()->routeIs('contact')">Contact</x-nav-link>
                    <x-nav-link class="shadow-lg" :href="route('game')" :active="request()->routeIs('game')">Game</x-nav-link>
                </div>
            </nav>
        </header>

        <main class="mx-auto w-full max-w-5xl flex-1 px-6 py-12 sm:py-16">

            {{ $slot }}

        </main>

        <footer class="border-t border-stone-200 bg-white">
            <div class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-4 px-6 py-6 text-sm text-stone-500">
                <p>&copy; 2026 . Website created with Laravel</p>
                <div class="flex gap-4">
                    <a href="https://github.com/" class="hover: text-indigo-600">GitHub</a>
                    <a href="https://linkedin.com/" class="hover: text-indigo-600">LinkedIn</a>
                </div>
            </div>
        </footer>

    </body>
</html>