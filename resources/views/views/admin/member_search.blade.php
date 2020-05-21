@extends('layout.admin')

@section('title', '会員の管理')

@section('content')
<div class="search-form">
  <h2>会員の検索条件</h2>
  <form action="" method='post'>
    @csrf

    <table border='1'>
      <tr>
        <th>ID：</th>
        <td><input type="number" name='id' min='1'></td>
      </tr>

      <tr>
        <th>名前（姓）：</th>
        <td><input type="text" name='family_name'></td>
      </tr>

      <tr>
        <th>名前（名）：</th>
        <td><input type="text" name='first_name'></td>
      </tr>
    </table>
    <button type='submit'>検索</button>
  </form>


  <h2>検索結果</h2>
  <p>2件表示（2件中）</p>


  <table border='0'>
    <tr>
      <td>ID：1234</td><td>山田　太郎（やまだ　たろう）</td><td>男</td>
    </tr>
    <tr>
      <td>〒123-1234</td><td>東京都渋谷区○○　○○</td>
    </tr>
    <tr>
      <td>TEL：09012345678</td><td>Email：ikaho@gmail</td>
    </tr>
    <tr>
      <td>生年月日：1990年1月1日</td>
    </tr>
    <tr>
      <td><button><a href="">変更する</a></button></td>
      <td><button><a href="">削除する</a></button></td>
    </tr>
  </table>

</div>
@endsection
