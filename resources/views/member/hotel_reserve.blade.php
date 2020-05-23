@extends('layout.member')

@section('title', '予約情報入力')

@section('content')
<caption>選択中の宿泊プラン</caption>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>プラン名</th>
            <th>料金(/泊)</th>
        </tr>
    </thead>
    <tbody class="bg-white">
        <tr>
            <td>{{ $data->plan_name }}</td>
            <td>¥{{ number_format($data->price) }}</td>
        </tr>
    </tbody>
</table>

<div class="card">
    <div class="card-body m-3">
        <h5 class="card-title">予約情報の入力</h5>
        <form class="form" action="{{route('reservation.add.confirm', $data['id'])}}" method='post'>
            @csrf
            <div class="form-group row">
                <div class="col-3">
                    <label for="room_amount">部屋数</label>
                    <input class="form-control ml-3" type="number" name="room_amount" min="1" max=''>
                </div>

            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="checkin_date">チェックイン日</label>
                    <input class="form-control ml-3" type="date" name="checkin_date" max="2100-12-31" min="2020-01-01">
                </div>
                <div class="col">
                    <label for="checkout_date">チェックアウト日</label>
                    <input class="form-control ml-3" type="date" name="checkout_date" max="2100-12-31" min="2020-01-01">
                </div>
            </div>

            <div class="form-group row">
                <button class="btn"><a class="ml-3" href="{{route('member.hotel.find')}}">戻る</a></button>
                <button class="btn btn-primary ml-3" type='submit'>確認</button>
            </div>
        </form>
    </div>
</div>
<br>
@endsection
