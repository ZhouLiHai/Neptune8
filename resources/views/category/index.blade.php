@extends('../layouts.app')

@section('content')
    <div class="center-block">
        <ol>
            @foreach ($categories as $category)
                <li>
                    <span>{{ $category['id'] }}</span>

                    <a href="{{ route('category.update',  ['id' => $category['id']]) }}">{{ $category['name'] }}</a>
                    ->
                    <a href="{{ route('category.destroy', ['id' => $category['id']]) }}">删除</a>
                </li>
            @endforeach
        </ol>
    </div>
@endsection
