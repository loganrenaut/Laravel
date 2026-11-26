<x-layout title="Homepage . Schüts">
    <main class="mx-auto w-full max-w-5xl flex-1 px-6 py-12 sm:py-16">

        <section class="grid items-center gap-10 md:grid-cols-[1fr_auto]">

            <div>
                <h1 class="text-4xl font-bold tracking-tight text-stone-900 sm:text-5xl">
                    Bonjour, je suis <span class="text-indigo-600">{{ $owner_firstname }} !</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-stone-600">
                    Ce site a été fait pour présenter un de mes projets de jeu vidéo, nommé 
                    <a href="{{ route('shut') }}"
                        <span Class="text-indigo-600"> {{ $game_name }}!</span>
                    </a>
                </p>
                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-stone-600">
                    Vous pourrez ici trouver des infos sur la création du projet, l'argencement du code, les défis à relever et plus encore.</span>
                </p>
                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-stone-600">
                    Merci de consulter le site !</span>
                </p>

                <div class="mt-8 flex flex-wrap gap-3">

                    <a href="/contact" class="rounded-lg bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                        Nous contacter
                    </a>

                    <a href="/about" class="rounded-lg bg-white px-5 py-3 text-sm font-semibold text-stone-900 shadow-sm ring-1 ring-stone-300 hover:bg-stone-50">
                        En savoir plus
                    </a>
                </div>
            </div>

            <!-- Initiales dans un grand cercle (remplaçable par une photo) -->
            <div class="hidden size-48 items-center justify-center rounded-full bg-linear-to-br from-indigo-500 to-sky-400 text-6xl font-bold text-white shadow-lg md:flex">
                HL
            </div>
        </section>

        <section class="mt-20">
        <div class="flex items-end justify-between gap-4">
            <h2 class="text-2xl font-semibold tracking-tight text-stone-900">Projets récents</h2>
            <a href="{{ route('projects.index') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Tous les projets →</a>
        </div>

        <div class="mt-6 grid gap-6 sm:grid-cols-3">
            @forelse ($projects as $project)
                <article class="flex flex-col rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
                    <x-status-badge :status="$project['status']" />
                    <h3 class="mt-4 font-semibold text-stone-900">{{ $project['title'] }}</h3>
                    <p class="mt-2 flex-1 text-sm leading-relaxed text-stone-600">{{ $project['description'] }}</p>
                    <a href="{{ route('projects.show', $project['id']) }}" class="mt-4 text-sm font-semibold text-indigo-600 hover:text-indigo-500">Voir le projet →</a>
                </article>
            @empty
                <p class="text-stone-500 sm:col-span-3">Aucun projet pour le moment.</p>
            @endforelse
        </div>
        </section>
    </main>
</x-layout>