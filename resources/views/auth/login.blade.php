@extends('layouts.app')

@section('content')
<div class="center-container">
    <div class="login-head">Login</div>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="login-line">
            <div for="email" class="login-label">电子邮件</div>
            <input id="email" type="email" class="login-input" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="login-line">
            <div for="password" class="login-label">密码</div>
            <input id="password" type="password" class="login-input" name="password" required>
        </div>
        <div class="login-line btn-line">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>记住我
            <button type="submit" class="login-btn">
                Login
            </button>
        </div>
    </form>
</div>
@endsection
