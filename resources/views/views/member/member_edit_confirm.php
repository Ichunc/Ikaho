@extends('layout.member')

@section('title', '会員登録情報変更')

@section('content')
<div class="search-form">
  <h2>登録情報変更確認</h2>
  <form action="" method='post' enctype='multipart/form-data'>
    @csrf

    <table>
      <input type='hidden' name='name' value=''>
      <tr>
        <th>お名前：</th>
        <td>山田　太郎</td>
      </tr>

      <input type="hidden" name='name_kana' value=''>
      <tr>
        <th>ふりかな：</th>
        <td>やまだ　たろう</td>
      </tr>

      <input type="hidden" name='sex' value=''>
      <tr>
        <th>性別：</th>
        <td>男</td>
      </tr>

      <input type="hidden" name='postal' value=''>
      <tr>
        <th>郵便番号：</th>
        <td>〒123-1234</td>
      </tr>

      <input type="hidden" name='address' value=''>
      <tr>
        <th>住所：</th>
        <td>東京都渋谷区○○　○○</td>
      </tr>

      <input type="hidden" name='tel' value=''>
      <tr>
        <th>電話番号：</th>
        <td>09012345678</td>
      </tr>

      <input type="hidden" name='email' value=''>
      <tr>
        <th>Eメールアドレス：</th>
        <td>ikaho@gmail</td>
      </tr>

      <input type="hidden" name='birthday' value=''>
      <tr>
        <th>生年月日</th>
        <td>1990年1月1日</td>
      </tr>
    </table>
    <button><a href="">戻る</a></button>
    <button type='submit'>変更</button>
  </form>

</div>
@endsection
