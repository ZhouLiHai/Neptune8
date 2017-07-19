@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('layouts.message')
                @foreach ($articles as $article)
                    <div class="blog-header">
                        <h1 class="blog-title"> <a href="{{ route('article.show', $article->id )}}">{{ $article->title }}</a></h1>

                        <p class="lead blog-description"> {{ $article->category }} - {{ $article->created_at }} </p>
                    </div>
                    <div class="blog-main">
                        {!! $article->content !!}
                    </div>
                @endforeach
                {!! $articles->render() !!}
            </div>
        </div>
    </div>
    </div>
@endsection