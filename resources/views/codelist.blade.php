$codeList = Code::all


@foreach ($code as $i)
    <a href="code/{{ $i->pluck('url') }}">{{ $i->pluck('name')}}</a>
@endforeach