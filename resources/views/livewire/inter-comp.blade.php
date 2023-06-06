<div>
    <ul>
        @foreach ($users as $v)
            @if (Auth::user()->id != $v->id)
                <li><a href="{{ route('window', [$v->id]) }}">{{ $v->name }}</a></li>
            @endif
        @endforeach
    </ul>
</div>
