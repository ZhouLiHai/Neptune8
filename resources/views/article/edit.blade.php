@extends('../layouts.app')

@section('content')
    @include('layouts.message')
    <div class="center-block">
    <form action="{{ route('article.store') }}" method="POST">
        {{ csrf_field() }}

        标题: <input type="text" name="title" value="{{ isset($article->title) ? $article->title : old('title') }}"><br>
        分类: <input type="text" name="category" value="{{ isset($article->category) ? $article->category : old('category') }}"><br>
        内容: <input type="text" name="content" value="{{ isset($article->content) ? $article->content : old('content') }}"><br>
        <button type="submit">发布</button>
    </form>
    </div>
@endsection
