@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header-link')
<a class="login-bottun" href="register.blade.php">register</a>
@endsection

@section('content')
<div class="login-page">
  <div class="login-title">
    <h1>Login</h1>
  </div>
  <div class="login-content">
    <form class="login-form" action="/login" method="post">
      @csrf
      <div class="login-form__item">
      <label>メールアドレス<br><input class="login-form__item__mail" type="email" name="email" value="{{ old('email') }}"><br></label>
      <div>@error('email')
      {{ $message}}
      @enderror</div>
      <label>パスワード<br><input class="login-form__item__password" type="text" name="password"><br></label>
      <div>@error('password')
      {{ $message }}
      @enderror</div>
      </div>
      <div class="login-form__button" >
      <button class="login-form__button-submit" type="submit">ログイン</button>
      </div>
    </form>
  </div>
</div>
@endsection