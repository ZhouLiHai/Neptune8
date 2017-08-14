@extends('layouts.app')

@section('content')
    <style>
        .home-container {
            width: 20%;
            height: inherit;
            margin-left: 50px;
        }
        .home-bar {
            margin-left: auto;
            margin-right: auto;
            border-right: 1px solid black;
        }

        .home-bar ul,li {
            list-style-type: none;
            line-height: 2em;
        }
    </style>

    <div class="home-container">
    <ul class="home-bar">
        <li>
            文章
        <ul>
            <li><a href="{{ route('article.edit') }}">添加文章</a></li>
            <li><a href="{{ route('article.index') }}">文章列表</a></li>
        </ul>
        </li>
        <li>
            分类
            <ul>
                <li><a href="{{ route('category.edit') }}">添加分类</a></li>
                <li><a href="{{ route('category.index') }}">分类列表</a></li>
            </ul>
        </li>
        <li>
            标签
            <ul>
                <li><a href="{{ route('tag.edit') }}">添加标签</a></li>
                <li><a href="{{ route('tag.index') }}">标签列表</a></li>
            </ul>
        </li>
    </ul>
    </div>

@endsection
