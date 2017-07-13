@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('layouts.message')
            <form action="{{ route('article.store') }}" method="POST">
                {{ csrf_field() }}
                <textarea class="form-control" rows="1" placeholder="标题" name="title">{{ isset($article->title) ? $article->title : old('title') }}
                </textarea>
                <textarea class="form-control" rows="1" placeholder="分类" name="category_id">{{ isset($article->category_id) ? $article->category_id : old('category_id') }}
                </textarea>
                <textarea class="form-control" rows="16" placeholder="内容" name="content">{{ isset($article->content) ? $article->content : old('content') }}
                </textarea>
                <button type="submit" class="btn btn-primary pull-right">发布</button>
            </form>
            </div>
        </div>
    </div>
@endsection
