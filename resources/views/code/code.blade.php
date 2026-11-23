<x-layout :title="$code['name'] . ' · Code'">
    <a href="{{ route('codes.index') }}" class="text-sm font-medium text-stone-500 hover:text-indigo-600">← Tous les codes</a>

    <div class="mt-6 flex flex-wrap items-center gap-4">
        <h1 class="text-4xl font-bold tracking-tight text-stone-900">{{ $code['title'] }}</h1>

    <div class="mt-10 grid gap-12 md:grid-cols-[3fr_2fr]">
        <div class="space-y-5 text-lg leading-relaxed text-stone-600">
            <p>{{ $code['code_snippet'] }}</p>
    <div class="mt-10 grid gap-12 md:grid-cols-[3fr_2fr]">
        <div class="space-y-5 text-lg leading-relaxed text-stone-600">
            <p>{{ $code['description'] }}</p>
    </div>