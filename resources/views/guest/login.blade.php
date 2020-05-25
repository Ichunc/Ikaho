@extends('layout.guest')
@section('title', 'ログイン画面')

@section('content')

<h2>ログイン</h2>
<form action="login" method='post'>
@csrf
  <table>
    <tr>
      <td>ユーザー名：</td><td><input type="text" name='username'></td>
    </tr>
    <tr>
      <td>パスワード：</td><td><input type="password" name='password'></td>
    </tr>
  </table>

  <p>※入力が正しくありません</p>
  <button type='submit'>ログイン</button>
</form>

<p>会員登録がまだの方は<a href="">こちら</a>から</p>



@endsection
