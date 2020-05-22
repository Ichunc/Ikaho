@extends('layout.member')

@section('title', '会員登録')

@section('content')
  <h2>会員登録確認</h2>
  <form action="createAccount" method='post'>
    @csrf
    <table>
      <input type='hidden' name='username' value="{{ $data['username'] }}">
      <tr>
        <th>ユーザーネーム：</th>
        <td>{{ $data['username'] }}</td>
      </tr>
      <input type='hidden' name='family_name' value="{{ $data['family_name'] }}">
      <input type='hidden' name='first_name' value="{{ $data['first_name'] }}">
      <tr>
        <th>お名前：</th>
        <td>{{ $data['family_name'] }}　{{ $data['first_name'] }}</td>
      </tr>

      <input type='hidden' name='family_name_kana' value="{{ $data['family_name_kana'] }}">
      <input type='hidden' name='first_name_kana' value="{{ $data['first_name_kana'] }}">
      <tr>
        <th>かな：</th>
        <td>{{ $data['family_name_kana'] }}　{{ $data['first_name_kana'] }}</td>
      </tr>

      <input type="hidden" name='sex' value="{{ $data['sex'] }}">
      <tr>
        <th>性別：</th>
        <td>{{ $data['sex'] }}</td>
      </tr>

      <input type="hidden" name='postal' value="{{ $data['postal'] }}">
      <tr>
        <th>郵便番号：</th>
        <td>〒{{ $data['postal'] }}</td>
      </tr>

      <input type="hidden" name='prefectures' value="{{ $data['prefectures'] }}">
      <input type="hidden" name='city' value="{{ $data['city'] }}">
      <input type="hidden" name='block' value="{{ $data['block'] }}">
      <tr>
        <th>住所：</th>
        <td>{{ $data['prefectures'] }}{{ $data['city'] }}{{ $data['block'] }}</td>
      </tr>

      <input type="hidden" name='tel' value="{{ $data['tel'] }}">
      <tr>
        <th>電話番号：</th>
        <td>{{ $data['tel'] }}</td>
      </tr>

      <input type="hidden" name='email' value="{{ $data['email'] }}">
      <tr>
        <th>Eメールアドレス：</th>
        <td>{{ $data['email'] }}</td>
      </tr>

      <input type="hidden" name='year' value="{{ $data['year'] }}">
      <input type="hidden" name='month' value="{{ $data['month'] }}">
      <input type="hidden" name='day' value="{{ $data['month'] }}">

      <tr>
        <th>生年月日：</th>
        <td>{{ $data['year'] }}年{{ $data['month'] }}月{{ $data['day'] }}日</td>
      </tr>
      <input type="hidden" name='password' value="{{ $data['password'] }}">

    </table>
      <button type="button" onclick="history.back()">戻る</button>
      <button type='submit'>登録</button>
  </form>

</div>
@endsection
