@extends('layouts.app')

@section('content')
    <div class="article-header">
        <a href="{{ route('article.show', $article->id )}}">{{ $article->title }}</a>
        <p class="article-sub-header"> {{ $article->category['name'] }} {{ $article->created_at }} </p>
    </div>
    <div class="article-content">
        {!! $article['content'] !!}
    </div>
@endsection