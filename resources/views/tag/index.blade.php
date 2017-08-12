@extends('../layouts.app')

@section('content')
    <div class="center-block">
        <ol>
            @foreach ($tags as $tag)
                <li>
                    <span>{{ $tag['id'] }}</span>

                    <a href="{{ route('tag.update',  ['id' => $tag['id']]) }}">{{ $tag['name'] }}</a>
                    ->
                    <a href="{{ route('tag.destroy', ['id' => $tag['id']]) }}">删除</a>
                </li>
            @endforeach
        </ol>
    </div>
@endsection
