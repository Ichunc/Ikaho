@extends('layout.guest')

@section('title', '条件から宿を探す')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5 class="card-title">条件を指定して宿を検索</h5>
        <forｍ action="{{route('member.hotel.find')}}" method='post'>
            @csrf
            <div class="row">
                <div class="form-group col-4">
                    <label for="prefectures">都道府県</label>
                    <select class="form-control ml-3" name="prefectures">
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
<h5>検索結果</h5>
<p>20件中10件表示</p>
@if ($list)
@foreach ($list as $data)
<div class="card">
    <div class="row no-gutters">
        <div class="col-md-4"><img src="" alt="" class="card-img">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $data['hotel_name']}}</li>
                    <li class="list-group-item">{{ $data['hotelClassification']}}</li>
                    <li class="list-group-item">{{ $data['hotel_prefecture'].$data['hotel_city'].$data['hotel_block']}}
                    </li>
                    <li class="list-group-item">【チェックイン/チェックアウト】{{ $data['checkin_time']}}/{{ $data['checkout_time']}}
                    </li>
                    <li class="list-group-item">【電話番号】{{ $data['hotel_tel']}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<p>【宿泊プラン一覧】</p>
@if (count($data->stayPlans) ==! 0)
<table class="table table-hover table-bordered">
    <thead class="text-center">
        <tr>
            <th>プラン名</th>
            <th>料金</th>
            <th>部屋数</th>
            <th></th>
        </tr>
    </thead>
    @foreach ($data->stayPlans as $plan)
    <tbody class="bg-white text-center">
        <td>{{$plan->plan_name}}</td>
        <td>¥{{number_format($plan->price)}}(/泊)</td>
        <td>{{$plan->room_amount}}</td>
        <td><a href="{{ route('guest.login') }}"><button class="btn btn-primary">予約する</button></a></td>
    </tbody>
    @endforeach
</table>
@else
<p>予約できるプランがありません</p>
@endif
<br>
@endforeach

@endif
@endsection
