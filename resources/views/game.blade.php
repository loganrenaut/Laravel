<x-layout>

    <!-- View example, can be modified later  -->
    <main class="mx-auto w-full max-w-5xl flex-1 px-6 py-12 sm:py-16">
        <div class="hidden size-30 items-center justify-center rounded-full bg-linear-to-br from-indigo-500 to-sky-400 text-4xl font-semibold text-white shadow-lg md:flex">
                {{ $game_name }}
        </div>
        <h1 class="mt-2 text-4xl font-bold tracking-tight text-stone-900">Something this way comes...</h1>
        <p class="mt-4 max-w-2xl text-lg text-stone-600">We're counting on your patience.</p> 
        <p class="mt-4 max-w-2xl text-lg text-stone-600">In the meantime, enjoy this little Q&A.</p> 
    
        <section class="mt-16">
            <h2 class="text-2xl font-bold tracking-tight text-stone-900">Questions for {{ $owner_firstname }}</h2>

            <div class="mt-6 divide-y divide-stone-200 rounded-2xl bg-white ring-1 ring-stone-200">
                @foreach ($faqs as $faq)
                <div x-data="{open: false,}">
                    <button
                        type="button"
                        class="flex w-full items-center justify-between px-6 py-4 text-left font-medium text-stone-900"
                        x-on:click="open = ! open"
                    >
                        {{ $faq['question'] }}
                        <span class="text-indigo-600 transition-all">+</span>
                    </button>
                    <div
                        class=" px-6 pb-4 text-stone-600"
                        x-show="open"
                        x-collapse
                        x-claok
                    >
                        {{ $faq['answer'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>
    
</x-layout>