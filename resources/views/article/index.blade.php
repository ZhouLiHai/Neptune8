@extends('../layouts.app')

@section('content')
    <ol>
        @foreach ($articles as $article)
                <li>
                    <span class="badge">{{ $article['id'] }}</span>

                    <a href="{{ route('article.update',  ['id' => $article['id']]) }}">{{ $article['title'] }}</a>
                    ->
                    <a class="btn btn-danger btn-sm" href="{{ route('article.destroy', ['id' => $article['id']]) }}">删除</a>
                </li>
        @endforeach
    </ol>
@endsection
