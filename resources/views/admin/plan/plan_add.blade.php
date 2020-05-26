@extends('layout.admin')

@section('title', '宿情報の新規登録')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h2>宿情報の新規登録</h2>
        <p>*は必須項目</p>
        <form action="{{ route('hotel.add.confirm') }}" method='post' enctype='multipart/form-data'>
            @csrf
            <div class="form-group col-6">
                <label for="hotel_name">*宿名</label>
                <input name="hotel_name" type="text" class="form-control @error('hotel_name') is-invalid @enderror">
                @error('hotel_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="form-group col-6">
                <label for="hotel_code">*宿分類</label>
                <select name="hotel_code" value="{{ old('hotel_code') }}"
                    class="form-control @error('hotel_code') is-invalid @enderror">
                    <option value="0" selected>選択してください</option>
                    <option value="1">1.シティホテル</option>
                    <option value="2">2.リゾートホテル</option>
                    <option value="3">3.ビジネスホテル</option>
                    <option value="4">4.旅館</option>
                    <option value="5">5.民宿</option>
                    <option value="6">6.ペンション</option>
                </select>
                @error('hotel_code')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="hotel_postal">*郵便番号</label>
                <input type="text" class="form-control @error('hotel_postal') is-invalid @enderror" name="hotel_postal"
                    describedby="help_postal">
                <small id="help_postal" class="text-muted">ハイフンあり</small>
                @error('hotel_postal')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="hotel_prefecture">*住所</label>
                <select class="form-control" name="hotel_prefecture" value="{{ old('hotel_prefecture') }}">
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
                </select>
                @error('hotel_prefecture')
                <small>{{$message}}</small>
                @enderror
                <br>
                <input name="hotel_city" type="text" class="form-control @error('hotel_city') is-invalid @enderror"
                    placeholder="市区町村名">
                @error('hotel_city')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <br>
                <input name="hotel_block" type="text" class="form-control @error('hotel_block') is-invalid @enderror"
                    placeholder="番地・ビル名">
                @error('hotel_block')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="hotel_tel">*電話番号</label>
                <input type="text" class="form-control @error('hotel_tel') is-invalid @enderror" name="hotel_tel"
                    describedby="help_hotel_tel">
                <small id="help_hotel_tel" class="text-muted">ハイフンあり</small>
                @error('hotel_tel')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-4">
                    <label for="checkin_time">チェックイン時間</label>
                    <input type="time" class="form-control" name="checkin_time">
                </div>
                <div class="col-4">
                    <label for="checkout_time">チェックアウト時間</label>
                    <input type="time" class="form-control" name="checkout_time">
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="hotel_image">宿のイメージ写真</label>
                    <input type="file" class="form-control" name="hotel_image">
                </div>
            </div>
            <button class="btn"><a href="{{ route('hotel.find') }}">戻る</a></button>
            <button class="btn btn-primary" type='submit'>確認</button>
        </form>
    </div>
</div>
<br>
@endsection
