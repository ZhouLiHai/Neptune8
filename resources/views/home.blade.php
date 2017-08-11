@extends('layouts.app')

@section('content')
    <div style="text-align: center">
        You are logged in!
    </div>

    <div>
        <ul>
            <li><a href="{{ route('article.edit') }}">添加文章</a></li>
            <li><a href="{{ route('article.index') }}">文章列表</a></li>
        </ul>
    </div>

    <div>
        <ul>
            <li><a href="{{ route('category.edit') }}">添加分类</a></li>
            <li><a href="{{ route('category.index') }}">分类列表</a></li>
        </ul>
    </div>

    <div>
        <ul>
            <li><a href="{{ route('tag.edit') }}">添加标签</a></li>
            <li><a href="{{ route('tag.index') }}">标签列表</a></li>
        </ul>
    </div>

@endsection
