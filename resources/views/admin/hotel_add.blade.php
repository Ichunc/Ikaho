@extends('layout.admin')

@section('title', '宿情報の新規登録')

@section('content')
<div class="search-form">
    <h2>宿情報の新規登録</h2>
    <form action="{{ route('hotel.add.confirm') }}" method='post' enctype='multipart/form-data'>
        @csrf
        <table>
            <tr>
                <th>宿名：</th>
                <td><input type="text" name='hotel_name' value="{{ old('hotel_name') }}"></td>
            </tr>
            <tr>
                <th>宿分類：</th>
                <td><select name="hotel_code" value="{{ old('hotel_code') }}">
                        <option value="0" selected>選択してください</option>
                        <option value="1.シティホテル">1.シティホテル</option>
                        <option value="2.リゾートホテル">2.リゾートホテル</option>
                        <option value="3.ビジネスホテル">3.ビジネスホテル</option>
                        <option value="4.旅館">4.旅館</option>
                        <option value="5.民宿">5.民宿</option>
                        <option value="6.ペンション">6.ペンション</option>
                    </select></td>
            </tr>
            <tr>
                <th>郵便番号：</th>
                <td><input type="text" name='hotel_postal' value="{{ old('hotel_postal') }}"><small>※ハイフンあり</small></td>
            </tr>
            <tr>
                <th rowspan='3'>住所：</th>
                <td><select name="prefectures" value="{{ old('prefectures') }}">
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
                <td><input type="text" name='city' placeholder='市区町村' value="{{ old('city') }}"></td>
            </tr>
            <tr>
                <td><input type="text" name='block' placeholder='番地' value="{{ old('block') }}"></td>
            </tr>
            <tr>
                <th>電話番号：</th>
                <td><input type="text" name='hotel_tel' value="{{ old('hotel_tel') }}"><small>※ハイフンあり</small></td>
            </tr>
            <tr>
                <th>チェックイン時間：</th>
                <td><input type="time" name='checkin_time' value="{{ old('checkin_time') }}"></td>
            </tr>
            <tr>
                <th>チェックアウト時間：</th>
                <td><input type="time" name='checkout_time' value="{{ old('checkout_time') }}"></td>
            </tr>
            <tr>
                <th>宿のイメージ写真：</th>
                <td><input type="file" name='hotel_image'></td>
            </tr>
        </table>
        <button><a href="{{ route('hotel.find') }}">戻る</a></button>
        <button type='submit'>確認</button>
    </form>
</div>
@endsection
