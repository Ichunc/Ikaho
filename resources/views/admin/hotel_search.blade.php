@extends('layout.admin')

@section('title', '宿の管理')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5 class="card-title">条件を指定して宿を検索</h5>
        <form action="{{ route('hotel.find') }}" method='post'>
            @csrf
            <div class="row">
                <div class="form-group col-4">
                    <label for="hotel_id">宿ID</label>
                    <input class="form-control" name="hotel_id" type="number" min='1'>
                </div>
                <div class="form-group col-4">
                    <label for="hotel_name">宿名</label>
                    <input type="text" class="form-control" name="hotel_name">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="prefectures">都道府県</label>
                    <select class="form-control" name="prefectures">
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
                    <select class="form-control" name="hotel_code">
                        <option value="0" selected>選択してください</option>
                        <option value="1">1.シティホテル</option>
                        <option value="2">2.リゾートホテル</option>
                        <option value="3">3.ビジネスホテル</option>
                        <option value="4">4.旅館</option>
                        <option value="5">5.民宿</option>
                        <option value="6">6.ペンション</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" type='submit'>検索する</button>
        </form>
    </div>
</div>
<br>

<p><a href="{{ route('hotel.add') }}">新しい宿を登録する</a></p>
<h5>検索結果</h5>
<p>件中10件表示</p>

@if(isset($list))
@foreach($list as $data)
<div class="card">
    <div class="card-body m-3">
        <h5>宿情報</h5>
        <table class="table">
            <tr>
                <th>宿ID</th>
                <td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>宿名：</th>
                <td>{{$data->hotel_name}}</td>
                </td>
            </tr>
            <tr>
                <th>分類：</th>
                <td>{{$data->hotel_code}}</td>
            </tr>
            <tr>
                <th>住所：</th>
                <td>{{$data->hotel_prefecture.$data->hotel_city.$data->hotel_block}}</td>
            </tr>
            <tr>
                <th>チェックイン：</th>
                <td>{{$data->checkin_time}}~</td>
            </tr>
            <tr>
                <th>チェックアウト：</th>
                <td>~{{$data->checkout_time}}</td>
            </tr>
        </table>
        <button class="btn"><a href="{{ url('edit_hotel'.'/'.$data->id) }}">宿情報を変更する</a></button>
        <button class="btn"><a href="{{ url('delete_hotel'.'/'.$data->id) }}">宿情報を削除する</a></button>
        <br>
        <h5>宿泊プラン情報</h5>
        @if (count($data->stayPlans) ==! 0)
        <table class="table">
            <thead>
                <tr>
                    <th>プランID</th>
                    <th>プラン名</th>
                    <th>プラン内容</th>
                    <th>料金</th>
                    <th>部屋数</th>
                    <th>営業状況</th>
                    <th>備考</th>
                </tr>
            </thead>
            @foreach ($data->stayPlans as $plan)
            <tbody>
                <tr>
                    <td>{{$plan->id}}</td>
                    <td>{{$plan->plan_name}}</td>
                    <td>{{$plan->discription}}</td>
                    <td>¥{{number_format($plan->price)}}(/泊)</td>
                    <td>{{$plan->room_amount}}</td>
                    <td>{{$plan->deleted}}</td>
                    <td>{{$plan->note}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        @else
        <p>プランは登録されていません</p>
        @endif
    </div>
</div>
<br>
@endforeach


{{ $list->links()}}
@endif
</div>
@endsection
