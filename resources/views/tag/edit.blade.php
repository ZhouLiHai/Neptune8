@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('layouts.message')
            <form action="{{ route('tag.store') }}" method="POST">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ isset($id) ? $id : old('id') }}">
                <input class="form-control" rows="1" placeholder="名称" name="name" value="{{ isset($name) ? $name : old('name') }}">
                <button type="submit" class="btn btn-primary pull-right">发布</button>
            </form>
            </div>
        </div>
    </div>
@endsection
