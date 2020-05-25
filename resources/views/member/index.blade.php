@extends('layout.member')
@section('title', '会員トップ')

@section('content')
<script>
@if(session('update_member'))
$(function() {
    toastr.success('会員情報更新完了');
});
@endif
</script>
<div class="layer layer-bg">
    <div class="layer-in layer-txt">
        <br><br><br><br><br>
        <h4> 新宿トラベル<br>快適な旅をご提案します</h4>
        <br><br><br><br><br>
    </div>
</div>
<br>
<div class="card">
    <div class="card-body m-3">
        <h5 class="card-title">条件を指定して宿を検索</h5>
        <form action="{{route('member.hotel.find')}}" method='post'>
            @csrf
            <div class="row">
                <div class="form-group col-4">
                    <label for="prefecture">都道府県</label>
                    <select class="form-control ml-3" name="prefecture">
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
                </div>
                <div class="form-group col-4">
                    <label for="hotel_code">宿の種類</label>
                    <select class="form-control ml-3" name="hotel_code">
                        <option value="0" selected>選択してください</option>
                        <option value="1">1.シティホテル</option>
                        <option value="2">2.リゾートホテル</option>
                        <option value="3">3.ビジネスホテル</option>
                        <option value="4">4.旅館</option>
                        <option value="5">5.民宿</option>
                        <option value="6">6.ペンション</option>
                    </select>
                </div>

                <div class="form-group col-4">
                    <label for="hotel_name">宿名</label>
                    <input class="form-control" type="text" name='hotel_name'>
                </div>
            </div>
            <div class="form-group row">

                <div class="col-4">
                    <label for="price_min">料金(下限)</label>
                    <input class="form-control" type="number" name='price_min'>
                </div>
                ~
                <div class="col-4">
                    <label for="price_min">料金(上限)</label>
                    <input class="form-control" type="number" name='price_max'>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-4">
                    <label for="checkin_date">チェックイン日</label>
                    <input class="form-control" type="date" name="checkin_date" max="2100-12-31" min="2020-01-01">
                </div>
                <div class="col-4">
                    <label for="checkout_date">チェックアウト日</label>
                    <input class="form-control" type="date" name="checkout_date" max="2100-12-31" min="2020-01-01">
                </div>
            </div>
            <button class="btn btn-primary" type='submit'>検索する</button>
            </forｍ>
    </div>
</div>
<br>
@endsection