@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/input.css') }}">
@endsection

@section('content')
<div class="input-page">
  <div class="input-title">
    <h1>Contact</h1>
  </div>
  <div class="input-form">
    <form class="contact-form" action="/" method="post">
      @csrf
      <div class="form-content">
        <label>お名前※<input class="input-form__item__last_name" type="text" name="last_name" value="例　山田"><input class="input-form__item__first_name" type="text" name="first_name" value="例　太郎"></label><br>
        <label>性別※
          <input type="radio" name="gender" value="1">1 男性
          <input type="radio" name="gender" value="2">2 女性
          <input type="radio" name="gender" value="3">3 その他
       </label><br>
        <label>メールアドレス※<input class="input-form__item__mail" type="email" name="email" value="例 test@example.com"></label><br>
        <label>電話番号※<input class="input-form__item__tel" type="tel" name="tell" value="080">-<input class="input-form__item__tel" type="tel" name="tel" value="1234">-<input class="input-form__item__tel" type="tel" name="tel" value="5678"></label><br>
        <label>住所※<input class="input-form__item__adress" type="text" name="address" value="例 東京都千代田区千駄ヶ谷1-2-3"></label><br>
        <label>建物名<input class="input-form__item__building" type="text" name="building" value="例 千駄ヶ谷ビル"></label><br>
        <label>お問い合わせの種類※<select class="input-form__item__contents" name="content">
        <option value="未入力">選択してください</option>
        <option value="1.商品のお届けについて">商品のお届けについて</option>
        <option value="2.商品の交換について">商品の交換について</option>
        <option value="3.商品トラブル">商品トラブル</option>
        <option value="4.ショップへのお問い合わせ">ショップへのお問い合わせ</option>
        <option value="5.その他">その他</option>
          </select></label><br>
        <label>お問い合わせの内容※<textarea class="input-form__item__kinds" name="detail" cols="30" rows="4" value="お問い合わせの内容をご記ください"></textarea></label><br>
        <button class="login-form__button-submit" type="submit">確認画面</button>
      </div>
    </form>
  </div>
</div>
@endsection
