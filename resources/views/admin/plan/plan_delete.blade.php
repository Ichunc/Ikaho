@extends('layout.admin')

@section('title', '宿泊プラン情報の削除')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>宿泊プラン情報の削除確認</h5>
        <table class="table">
            <tr>
                <th>プラン名：</th>
                <td>{{ $data['plan_name']}}</td>
            </tr>
            <tr>
                <th>宿名：</th>
                <td>{{ $data['hotel_name']}}</td>
            </tr>
            <tr>
                <th>プランの特徴：</th>
                <td>{{ $data['description']}}</td>
            </tr>
            <tr>
                <th>料金(/泊)：</th>
                <td>¥{{ number_format($data['price'])}}</td>
            </tr>
            <tr>
                <th>部屋数：</th>
                <td>{{ $data['room_amount']}}</td>
            </tr>
            <tr>
                <th>備考：</th>
                <td>{{ $data['note']}}</td>
            </tr>
        </table>
        <form action="{{ route('plan.remove', $plan_id) }}" method='post'>
            @csrf
            <button class="btn"><a href="{{ route('plan.find') }}">戻る</a></button>
            <button class="btn btn-danger" type='submit'>削除</button>
        </form>
    </div>
</div>
<br>
@endsection