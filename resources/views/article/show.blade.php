@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('layouts.message')
                <div class="blog-header">
                    <h1 class="blog-title"> {{ $article->title  }} </h1>
                    <p class="lead blog-description"> {{ $article->category }} - {{ $article->created_at }} </p>
                </div>
                <div class="blog-main">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection