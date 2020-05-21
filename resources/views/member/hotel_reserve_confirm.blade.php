@extends('layout.member')

@section('title', '予約情報確認')

@section('content')
  <h2>予約内容の確認</h2>
  <form action="" method='post'>
    @csrf
      <table>
      <input type="hidden" name='room_amount' value=''>
      <tr>
          <th>宿泊プラン：</th><td>極楽全部つきプラン</td>
      </tr>
      <tr>
        <th>金額：</th><td>\12,000</td>
      </tr>
      <tr>
        <th>予約部屋数：</th><td>1</td>
      </tr>
      <tr>
        <th>チェックイン日：</th><td>2020年5月16日</td>
      </tr>
      <tr>
        <th>チェックアウト日：</th><td>2020年5月18日</td>
      </tr>
  </table>
  <a href=""><button>戻る</button></a>
  <button type='submit'>予約確定</button>

</form>

@endsection
