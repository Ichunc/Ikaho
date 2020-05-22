@extends('layout.member')

@section('title', '予約情報確認')

@section('content')
<h2>予約内容の確認</h2>
<form action="{{route('reservation.create', $plan->id )}}" method='post'>
    @csrf
    <table>
        <input type="hidden" name='room_amount' value="{{ $data['room_amount'] }}">
        <input type="hidden" name='checkin_date' value="{{ $data['checkin_date'] }}">
        <input type="hidden" name='checkout_date' value="{{ $data['checkout_date'] }}">
        <input type="hidden" name='reserve_date' value="<?= date('Y-m-d') ?>">
        <tr>
            <th>宿泊プラン：</th>
            <td>{{ $plan->plan_name }}</td>
        </tr>
        <tr>
            <th>金額：</th>
            <td>{{ $plan->price }}</td>
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

    <h3>会員情報</h3>
    <table>
        <tr>
            <th>氏名：</th>
            <td>{{ $plan->plan_name }}</td>
        </tr>
        <tr>
            <th>性別：</th>
            <td>{{ $data['checkin_date'] }}</td>
        </tr>
        <tr>
            <th>生年月日：</th>
            <td>{{ $data['checkout_date'] }}</td>
        </tr>
        <tr>
            <th>ご住所：</th>
            <td>{{ $data['room_amount'] }}</td>
        </tr>
        <tr>
            <th>お電話番号：</th>
            <td>{{ $plan->price }}</td>
        </tr>
        <tr>
            <th>メールアドレス：</th>
            <td>{{ $data['checkout_date'] }}</td>
        </tr>

    </table>

    <button><a href="{{ route('reservation.add', $plan->id) }}">戻る</a></button>
    <button type='submit'>予約確定</button>

</form>

@endsection
