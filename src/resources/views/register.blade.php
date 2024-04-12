@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-link')
<a class="login-bottun" href="login.blade.php">login</a>
@endsection

@section('content')
<div class="register-page">
  <div class="register-title">
    <h1>Register</h1>
  </div>
  <div class="register-content">
    <form class="rezister-form" action="" method="post">
      <div class="register-form__item">
        <label>お名前<br><input class="register-form__item__name" type="text" name="name"></label>
        <label>メールアドレス<br><input class="register-form__item__mail" type="email" name="mail"></label>
        <label>パスワード<br><input class="register-form__item__password" type="text" name="password"></label>
      </div>
      <div class="register-form__button" >
      <button class="register-form__button-submit" type="submit">登録</button>
      </div>
    </form>
  </div>
</div>
@endsection