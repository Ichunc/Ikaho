@extends('layout.member')

@section('title', '条件から宿を探す')

@section('content')
<h1>条件を指定して宿を検索</h1>
  <form action="" method='post'>
  @csrf
      <table>
        <tr>
          <th>場所：</th>
          <td><select name="prefectures">
                  <option value="" selected>選択してください</option>
                  <option value="北海道">北海道</option>
                  <option value="青森県">青森県</option>
                  <option value="岩手県">岩手県</option>
                  <option value="宮城県">宮城県</option>
                  <option value="秋田県">秋田県</option>
                  <option value="山形県">山形県</option>
                  <option value="福島県">福島県</option>
                  <option value="茨城県">茨城県</option>
                  <option value="栃木県">栃木県</option>
                  <option value="群馬県">群馬県</option>
                  <option value="埼玉県">埼玉県</option>
                  <option value="千葉県">千葉県</option>
                  <option value="東京都">東京都</option>
                  <option value="神奈川県">神奈川県</option>
                  <option value="新潟県">新潟県</option>
                  <option value="富山県">富山県</option>
                  <option value="石川県">石川県</option>
                  <option value="福井県">福井県</option>
                  <option value="山梨県">山梨県</option>
                  <option value="長野県">長野県</option>
                  <option value="岐阜県">岐阜県</option>
                  <option value="静岡県">静岡県</option>
                  <option value="愛知県">愛知県</option>
                  <option value="三重県">三重県</option>
                  <option value="滋賀県">滋賀県</option>
                  <option value="京都府">京都府</option>
                  <option value="大阪府">大阪府</option>
                  <option value="兵庫県">兵庫県</option>
                  <option value="奈良県">奈良県</option>
                  <option value="和歌山県">和歌山県</option>
                  <option value="鳥取県">鳥取県</option>
                  <option value="島根県">島根県</option>
                  <option value="岡山県">岡山県</option>
                  <option value="広島県">広島県</option>
                  <option value="山口県">山口県</option>
                  <option value="徳島県">徳島県</option>
                  <option value="香川県">香川県</option>
                  <option value="愛媛県">愛媛県</option>
                  <option value="高知県">高知県</option>
                  <option value="福岡県">福岡県</option>
                  <option value="佐賀県">佐賀県</option>
                  <option value="長崎県">長崎県</option>
                  <option value="熊本県">熊本県</option>
                  <option value="大分県">大分県</option>
                  <option value="宮崎県">宮崎県</option>
                  <option value="鹿児島県">鹿児島県</option>
                  <option value="沖縄県">沖縄県</option>
              </select></td>
        </tr>

        <tr>
          <th>宿の種類：</th>
          <td><select name="hotel_code">
              <option value="0" selected>選択してください</option>
              <option value="1">1.シティホテル</option>
              <option value="2">2.リゾートホテル</option>
              <option value="3">3.ビジネスホテル</option>
              <option value="4">4.旅館</option>
              <option value="5">5.民宿</option>
              <option value="6">6.ペンション</option>
          </select></td>
        </tr>

        <tr>
          <th>宿の名前：</th>
          <td><input type="text" name='hotel_name'></td>
        </tr>
        <tr>
          <th>宿泊料金：</th>
          <td><input type="number" name='price_min'> ～ <input type="number" name='price_max'></td>
        </tr>

        <tr>
        <!--ほんとはプルダウンのみ表示したい 小西-->
          <th>チェックイン日：</th>
          <td><input type="date" name="checkin_date" max="2100-12-31" min="2020-01-01"></td>
        </tr>
        <tr>
          <th>チェックアウト日：</th>
          <td><input type="date" name="checkout_date" max="2100-12-31" min="2020-01-01"></td>
        </tr>
      </table>
    <p><button type='submit'>検索する</button></p>
  </form>

<h2>検索結果</h2>
<p>20件中10件表示</p>
    <table border="1" style="border-collapse: collapse">
      <tr>
        <td rowspan="5">宿のイメージ図.jpg</td>
        <td>伊香保の宿</td>
      </tr>
      <tr>
        <td>【旅館】</td>
      </tr>
      <tr>
        <td>群馬県渋川市伊香保町</td>
      </tr>
      <tr>
        <td>チェックイン/アウト 15:00 ~ 11:00</td>
      </tr>
      <tr>
        <td>連絡先：03-0000-0000</td>
      </tr>
    </table>


    <!--※横幅の調整はCSSで行えばよい？　小西-->
    <table border="1" style="border-collapse: collapse">
      <caption>宿泊プラン</caption>
      <tr>
        <th>プラン名</th><th>部屋数</th><th>料金</th><th></th>
      </tr>
      <tr>
        <td>全部つきプラン</td><td>1/5</td><td>\12,000<td><button><!--ここではログイン画面に遷移させる--><a href="">予約する</a></button></td>
      </tr>
      <tr>
        <td>カジュアルプラン</td><td>2/20</td><td>\8,000<td><button><a href="">予約する</a></button></td>
      </tr>
    </table>


@endsection
