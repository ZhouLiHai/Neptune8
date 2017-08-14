@extends('../layouts.app')

@section('content')
    <style>
    </style>
    <div class="center-block">
        <ol>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('category.update',  ['id' => $category['id']]) }}">{{ $category['name'] }}</a>
                    ->
                    <a href="{{ route('category.destroy', ['id' => $category['id']]) }}">删除</a>
                </li>
            @endforeach
        </ol>
    </div>
@endsection
