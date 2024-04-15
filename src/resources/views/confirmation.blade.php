@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comfirmation.css') }}">
@endsection

@section('content')
<div class="input-page">
  <div class="input-title">
    <h1>Contact</h1>
  </div>
  
  <form class="form__confirm" action="/confirm" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table_row">
        <th class="confirm-table__header">お名前</th>
        <td class="confirm-table__text">
        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table_row">
        <th class="confirm-table__header">性別</th>
        <td class="confirm-table__text">
        <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table_row">
        <th class="confirm-table__header">メールアドレス</th>
        <td class="confirm-table__text">
        <input type="text" name="email" value="{{ $contact['email'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table_row">
        <th class="confirm-table__header">電話番号</th>
        <td class="confirm-table__text">
        <input type="text" name="tel" value="{{ $contact['tell'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table_row">
        <th class="confirm-table__header">住所</th>
        <td class="confirm-table__text">
        <input type="text" name="adress" value="{{ $contact['address'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table_row">
        <th class="confirm-table__header">建物名</th>
        <td class="confirm-table__text">
        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table_row">
        <th class="confirm-table__header">お問い合わせの種類</th>
        <td class="confirm-table__text">
        <input type="text" name="content" value="{{ $category['content'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table_row">
        <th class="confirm-table__header">お問い合わせの内容</th>
        <td class="confirm-table__text">
        <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
        </td>
        </tr>
      </table>
    </div>
    <button class="login-form__button-submit" type="submit">送信</button>
  </form>
  <form action="/" method="get">
  <button class="login-form__button-submit" type="submit">修正</button>
  </form>
</div>
@endsection
