@extends('../layouts.app')

@section('content')
    @include('layouts.message')
    <div class="center-block">
        <form action="{{ route('tag.store') }}" method="POST">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ isset($id) ? $id : old('id') }}">
            标签名称:<input name="name" value="{{ isset($name) ? $name : old('name') }}">
            <button type="submit">发布</button>
        </form>
    </div>
@endsection
