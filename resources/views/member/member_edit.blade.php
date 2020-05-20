@extends(layout.member)

@section('title', '会員登録情報変更')
<script type="text/javascript" {{ asset('JavaScript.js')}}> </script>
@endsction

@section('content')
<div class="search-form">
  <h2>登録情報変更</h2>
  <P><font color="#F00">＊は必須項目</font></p>

  <form action="" method='post' enctype='multipart/form-data'>
  @csrf
  <table>
    <tr>
      <th>お名前（姓）＊</th>
      <td><input type="text" name='family_name'></td>
    </tr>
    <tr>
      <th>お名前（名）＊</th>
      <td><input type="text" name='first_name'></td>
    </tr>
    <tr>
      <th>ふりかな（姓）＊</th>
      <td><input type="text" name='family_name_kana'></td>
    </tr>
    <tr>
      <th>ふりかな（名）＊</th>
      <td><input type="text" name='first_name_kana'></td>
    </tr>
    <tr>
      <th>性別＊</th>
      <td><select name="sex">
        <option value="" selected></option>
        <option value="男">男</option>
        <option value="女">女</option>
      </select></td>
    </tr>
    <tr>
      <th>郵便番号＊</th>
      <td>〒<input type="text" name='postal'></td>
    </tr>
    <tr>
      <th>都道府県＊</th>
      <td><input type="text" name='address'></td>
    </tr>
    <tr>
      <th>市区町村＊</th>
      <td><input type="text" name='address'></td>
    </tr>
    <tr>
      <th>番地以下</th>
      <td><input type="text" name='address'></td>
    </tr>
    <tr>
      <th>電話番号＊</th>
      <td><input type="text" name='tel'></td>
    </tr>
    <tr>
      <th>Eメールアドレス＊</th>
      <td><input type="text" name='email'></td>
    </tr>
    <tr>
      <th>Eメールアドレス（確認用）＊</th>
      <td><input type="text" name='email'></td>
    </tr>
    <tr>
      <th>生年月日＊</th>
      <td><select name="year">
        <option value="" selected>年▼</option>
        @php
          for ($i = 1; $i <= 2020 && $i >= 1950; $i++) {
            echo "<option value=\"".$i.>"
          }
        @endphp

      <td><select name="birthday">
        <script type="text/javascript" src=asset('JavaScript.html')>月</script>
      </select></td>
    </tr>
    <tr>
      <th>パスワード＊</th>
      <td><input type="password" name='password'></td>
    </tr>
    <tr>
      <th>パスワード（確認用）＊</th>
      <td><input type="password" name='password'></td>
    </tr>
  </table>
  <button><a href="">戻る</a></button>
  <button type='submit'>確認</button>
  </form>

</div>
@endsection
