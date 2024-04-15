@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/managment.css') }}">
@endsection

@section('header-link')
<form class="form" action="/logout" method="post">
@csrf
<button class="header-nav__button">ログアウト</button>
</form>
@endsection

@section('content')
<h1>Admin</h1>
<div class="search">
   <form class="search-form" action="/management/search" method="get">
     @csrf
    <div class="search-form__item">
       <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}">
         <select class="search-form__item-select" name="category_id">
         <option value="">カテゴリ</option>
           @foreach ($categories as $category)
           <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
           @endforeach
        </select>
    </div>
    <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">検索</button>
    </div>
  </form>
</div>
@endsection