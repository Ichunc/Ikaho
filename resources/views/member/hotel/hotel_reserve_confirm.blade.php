@extends('layout.member')

@section('title', '予約情報確認')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>予約内容の確認</h5>
        <form action="{{route('reservation.create', $plan->id )}}" method='post'>
            @csrf
            <input type="hidden" name='room_amount' value="{{ $data['room_amount'] }}">
            <input type="hidden" name='checkin_date' value="{{ $data['checkin_date'] }}">
            <input type="hidden" name='checkout_date' value="{{ $data['checkout_date'] }}">
            <input type="hidden" name='reserve_date' value="<?= date('Y-m-d') ?>">
            <table class="table">
                <tr>
                    <th>宿泊プラン：</th>
                    <td>{{ $plan->plan_name }}</td>
                </tr>
                <tr>
                    <th>料金：</th>
                    <!-- 一泊金額×日数×部屋数 -->
                    <td>¥{{ number_format($plan->price * $interval_format * $data['room_amount']) }}</td>
                </tr>
                <tr>
                    <th>予約部屋数：</th>
                    <td>{{ $data['room_amount'] }}</td>
                </tr>
                <tr>
                    <th>チェックイン日：</th>
                    <td>{{ $data['checkin_date'] }}</td>
                </tr>
                <tr>
                    <th>チェックアウト日：</th>
                    <td>{{ $data['checkout_date'] }}</td>
                </tr>
            </table>
            <button class="btn"><a href="{{ route('reservation.add', $plan->id) }}">戻る</a></button>
            <button class="btn btn-primary" type='submit'>予約確定</button>
        </form>
    </div>
</div>
<br>

<div class="card">
    <div class="card-body m-3">
        <h5>会員情報</h5>
        </table>
        <table class="table">
            <tr>
                <th>氏名：</th>
                <!-- $member->family_name.$member->first_name -->
                <td>伊香保 太郎</td>
            </tr>
            <tr>
                <th>性別：</th>
                <td>男性</td>
            </tr>
            <tr>
                <th>生年月日：</th>
                <td>1990年1月1日</td>
            </tr>
            <tr>
                <th>ご住所：</th>
                <td>栃木県坂本市工藤町中村7-8-5</td>
            </tr>
            <tr>
                <th>お電話番号：</th>
                <td>080-0000-0000</td>
            </tr>
            <tr>
                <th>メールアドレス：</th>
                <td>ikaho@gmail.com</td>
            </tr>
        </table>
    </div>
</div>
<br>
@endsection