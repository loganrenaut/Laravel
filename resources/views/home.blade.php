<x-layout title="Home . Schuts">
    <main class="mx-auto w-full max-w-5xl flex-1 px-6 py-12 sm:py-16">

        <section class="grid items-center gap-10 md:grid-cols-[1fr_auto]">

            <div>
                <h1 class="text-4xl font-bold tracking-tight text-stone-900 sm:text-5xl">
                    Hi, I'm <span class="text-indigo-600">{{ $owner_firstname }}!</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-stone-600">
                    I'm developing this game: <span Class="text-indigo-600"> {{ $game_name }}!</span>
                </p>

                <div class="mt-8 flex flex-wrap gap-3">

                    <a href="/contact" class="rounded-lg bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                        Contact me
                    </a>

                    <a href="/about" class="rounded-lg bg-white px-5 py-3 text-sm font-semibold text-stone-900 shadow-sm ring-1 ring-stone-300 hover:bg-stone-50">
                        To know more
                    </a>

                </div>
            </div>

            <!-- Initiales dans un grand cercle (remplaçable par une photo) -->
            <div class="hidden size-48 items-center justify-center rounded-full bg-linear-to-br from-indigo-500 to-sky-400 text-6xl font-bold text-white shadow-lg md:flex">
                HL
            </div>

        </section>
    </main>
</x-layout>