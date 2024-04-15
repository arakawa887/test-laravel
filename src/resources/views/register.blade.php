@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-link')
<a class="register-bottun" href="login.blade.php">login</a>
@endsection

@section('content')
<div class="register-page">
  <div class="register-title">
    <h1>Register</h1>
  </div>
  <div class="register-content">
    <form class="rezister-form" action="/register" method="post">
      @csrf
      <div class="register-form__item">
        <label>お名前<br><input class="register-form__item__name" type="text" name="name" value="{{ old('name') }}"><br></label>
        <div>@error('name')
        {{ $message}}
        @enderror</div>
        <label>メールアドレス<br><input class="register-form__item__mail" type="email" name="email" value="{{ old('email') }}"><br></label>
        <div>@error('email')
        {{ $message}}
        @enderror</div>
        <label>パスワード<br><input class="register-form__item__password" type="text" name="password"><br></label>
        <div>@error('password')
        {{ $message }}
        @enderror</div>
        <input type="password" name="password_confirmation" />
      </div>
      <div class="register-form__button" >
      <button class="register-form__button-submit" type="submit">登録</button>
      </div>
    </form>
  </div>
</div>
@endsection