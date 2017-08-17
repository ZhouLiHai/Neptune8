@extends('../layouts.app')

@section('content')
    @include('layouts.message')
    <div class="center-block">
    <form action="{{ route('article.store') }}" method="POST">
        {{ csrf_field() }}

        标题: <input type="text" name="title" value="{{ isset($article->title) ? $article->title : old('title') }}"><br>
        分类:
        <select name="category">
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>
        <br>
        标签:
            @foreach($tags as $tag)
                <input name="tag{{ $tag['id'] }}" type="checkbox">{{ $tag['name'] }}<br>
            @endforeach
        内容: <textarea  rows="4" cols="50" name="content" value="{{ isset($article->content) ? $article->content : old('content') }}"></textarea>
        <button type="submit">发布</button>
    </form>
    </div>
@endsection
