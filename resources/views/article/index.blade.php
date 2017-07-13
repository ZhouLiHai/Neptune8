@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul>
                    @foreach ($articles as $article)
                            <lo>
                                <span class="badge">{{ $article['id'] }}</span>

                                <a href="{{ route('article.update',  ['id' => $article['id']]) }}">{{ $article['title'] }}</a>
                                ->
                                <a class="btn btn-danger btn-sm" href="{{ route('article.destroy', ['id' => $article['id']]) }}">删除</a>
                            </lo>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
