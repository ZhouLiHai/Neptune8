@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div>
            <p>
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach