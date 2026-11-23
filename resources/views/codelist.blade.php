$codeList = Code::all


@foreach ($code as $i)
                <article class="flex flex-col rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
                <h2 class="text-lg font-semibold texcot-stone-900">{{ $i['name'] }}</h2>
                    <a href="{{ route('projects.show', $i['url']) }}" class="rounded-lg px-3 py-2 text-sm font-semibold text-indigo-600 hover:bg-indigo-50">
                        Voir le code →
                    </a>
                </div>
            </article>
@endforeach