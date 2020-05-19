@extends(layout.member)

@section('content')
<div class="search-form">
  <h2>会員登録</h2>
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



      <td><select name="month">
        <option value="" selected>月▼</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select></td>
      <td><select name="day">
        <option value="" selected>日▼</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
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
  <button type='submit'>確認</button>
  </form>

</div>
@endsection
