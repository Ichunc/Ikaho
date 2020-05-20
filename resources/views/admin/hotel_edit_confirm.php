@extends('layout.admin')

@section('title', '宿情報の変更確認')

@section('content')
<div class="search-form">
    <h2>宿情報の変更確認</h2>
    <form action="{{ route('hotel.update', $hotel_id) }}" method='post' enctype='multipart/form-data'>
        @csrf
        <table>
            <input type="hidden" name='hotel_name' value="{{ $data['hotel_name']}}">
            <tr>
                <th>宿名：</th>
                <td>{{ $data['hotel_name']}}</td>
            </tr>
            <input type="hidden" name='hotel_code' value="{{ $data['hotel_code']}}">
            <tr>
                <th>宿分類：</th>
                <td>{{ $data['hotel_code']}}</td>
            </tr>
            <input type="hidden" name='hotel_postal' value="{{ $data['hotel_postal']}}">
            <tr>
                <th>郵便番号：</th>
                <td>{{ $data['hotel_postal']}}</td>
            </tr>
            <input type="hidden" name='hotel_address' value="{{ $data['prefectures'].$data['city'].$data['block']}}">
            <tr>
                <th>住所：</th>
                <td>{{ $data['prefectures'].$data['city'].$data['block']}}</td>
            </tr>
            <input type="hidden" name='hotel_tel' value="{{ $data['hotel_tel']}}">
            <tr>
                <th>電話番号：</th>
                <td>{{ $data['hotel_tel']}}</td>
            </tr>
            <input type="hidden" name='checkin_time' value="{{ $data['checkin_time'] }}">
            <tr>
                <th>チェックイン時間：</th>
                <td>{{ $data['checkin_time'] }}</td>
            </tr>
            <input type="hidden" name='checkout_time' value="{{ $data['checkout_time'] }}">
            <tr>
                <th>チェックアウト時間：</th>
                <td>{{ $data['checkout_time'] }}</td>
            </tr>
            <input type="hidden" name='hotel_image' value="">
            <tr>
                <th>宿のイメージ写真：</th>
                <td></td>
            </tr>
        </table>
        <button><a href="{{ route('hotel.edit', $hotel_id) }}">戻る</a></button>
        <button type='submit'>変更</button>
    </form>

</div>
@endsection
