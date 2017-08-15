@extends('../layouts.app')

@section('content')
    <div class="center-block">
    <ol>
        @foreach ($articles as $article)
                <li>
                    <a href="{{ route('article.update',  ['id' => $article['id']]) }}">{{ $article['title'] }}</a>
                    ->
                    <a class="btn btn-danger btn-sm" href="{{ route('article.destroy', ['id' => $article['id']]) }}">删除</a>
                </li>
        @endforeach
    </ol>
    </div>
@endsection
