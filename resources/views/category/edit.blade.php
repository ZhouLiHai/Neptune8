@extends('../layouts.app')

@section('content')
    @include('layouts.message')
    <div class="center-container">
        <form action="{{ route('category.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ isset($id) ? $id : old('id') }}">
            <div for="email" class="login-label">分类名称</div>
            <input name="name" class="login-input" value="{{ isset($name) ? $name : old('name') }}">
            <div class="login-line btn-line">
                <button class="login-btn" type="submit">发布</button>
            </div>
        </form>
    </div>
@endsection
