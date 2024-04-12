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
    <form class="login-form" action="" method="post">
      <div class="login-form__item">
      <label>メールアドレス<br><input class="login-form__item__mail" type="email" name="mail"></label>
      <label>パスワード<br><input class="login-form__item__password" type="text" name="password"></label>
      </div>
      <div class="login-form__button" >
      <button class="login-form__button-submit" type="submit">ログイン</button>
      </div>
    </form>
  </div>
</div>
@endsection