@extends('layout.admin')

@section('title', '宿泊プラン情報の登録確認')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>宿泊プラン情報の登録確認</h5>
        <table class="table">
            <tr>
                <th>プラン名：</th>
                <td>{{ $data['plan_name']}}</td>
            </tr>
            <tr>
                <th>プランの特徴：</th>
                <td>{{ $data['description']}}</td>
            </tr>
            <tr>
                <th>料金(/泊)：</th>
                <td>\{{ number_format($data['price'])}}</td>
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
        <form action="{{ route('plan.add.complete') }}" method='post' enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name='plan_name' value="{{ $data['plan_name']}}">
            <input type="hidden" name='hotel_id' value="{{ $data['hotel_id']}}">
            <input type="hidden" name='description' value="{{ $data['description']}}">
            <input type="hidden" name='price' value="{{ $data['price']}}">
            <input type="hidden" name='room_amount' value="{{ $data['room_amount']}}">
            <input type="hidden" name='note' value="{{ $data['note']}}">
            <button class="btn"><a href="{{ route('plan.add') }}">戻る</a></button>
            <button class="btn btn-primary" type='submit'>登録</button>
        </form>
    </div>
</div>
<br>
@endsection