@extends('layouts.app')

@section('content')
    @include('layouts.message')
    @foreach ($articles as $article)
        <div class="article-header">
            <a href="{{ route('article.show', $article->id )}}">{{ $article->title }}</a>
            <p class="article-sub-header"> {{ $article->category['name'] }} {{ $article->created_at->toFormattedDateString() }} </p>
        </div>
        <div class="article-content">
            {!! print($article['content']) !!}
        </div>
    @endforeach
    {!! $articles->render() !!}
@endsection