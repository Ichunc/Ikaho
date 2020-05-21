@extends('layout.guest')
@section('title', '新宿トラベル')

@section('content')
<p>ようこそ！新宿トラベルへ。快適な旅をご案内します。</p>

<h2>・宿を検索</h2>
  <form action="" method='post'>
  @csrf
      <table>
        <tr>
          <th>場所</th>
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
              </select>
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


<h2>・おすすめ宿泊プラン</h2>
          <table>
            <tr>
                <td colspan="2">[宿の画像.jpg]</td>
            </tr>
              <input type="hidden" name='hotel_name' value=''>
              <tr>
                  <th>宿名：</th>
                  <td>伊香保の宿</td>
              </tr>
              <tr>
                  <th>宿泊プラン名：</th>
                  <td>夕食付プラン</td>
              </tr>
              <tr>
                  <th>値段：</th>
                  <td>10000円</td>
              </tr>

              <input type="hidden" name='hotel_postal' value=''>
              <tr>
                  <th>郵便番号：</th>
                  <td>123-4567</td>
              </tr>
              <input type="hidden" name='hotel_address' value=''>
              <tr>
                  <th>住所：</th>
                  <td>群馬県渋川市伊香保町</td>
              </tr>
              <input type="hidden" name='hotel_tel' value=''>
              <tr>
                  <th>電話番号：</th>
                  <td>03-0000-0000</td>
              </tr>
          </table>
      </form>
    </ul>

@endsection
