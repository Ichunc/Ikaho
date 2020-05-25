@extends('layout.admin')

@section('title', '宿情報の変更確認')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>宿情報の変更確認</h5>
        <table class="table">
            <tr>
                <th>宿名：</th>
                <td>{{ $data['hotel_name']}}</td>
            </tr>
            <tr>
                <th>宿分類：</th>
                <td>{{ $data['hotel_code']}}</td>
            </tr>
            <tr>
                <th>郵便番号：</th>
                <td>{{ $data['hotel_postal']}}</td>
            </tr>
            <tr>
                <th>住所：</th>
                <td>{{ $data['hotel_prefecture'].$data['hotel_city'].$data['hotel_block']}}</td>
            </tr>
            <tr>
                <th>電話番号：</th>
                <td>{{ $data['hotel_tel']}}</td>
            </tr>
            <tr>
                <th>チェックイン時間：</th>
                <td>{{ $data['checkin_time']}}</td>
            </tr>
            <tr>
                <th>チェックアウト時間：</th>
                <td>{{ $data['checkout_time']}}</td>
            </tr>
            <input type="hidden" name='hotel_image' value="">
            <tr>
                <th>宿のイメージ写真：</th>
                <td>@if(isset($file_name))
                    <img src="{{ asset('storage/img/' . $file_name) }}">
                    @endif</td>
            </tr>
        </table>
        <form action="{{ route('hotel.update', $hotel_id) }}" method='post' enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name='hotel_name' value="{{ $data['hotel_name']}}">
            <input type="hidden" name='hotel_code' value="{{ $data['hotel_code']}}">
            <input type="hidden" name='hotel_postal' value="{{ $data['hotel_postal']}}">
            <input type="hidden" name='hotel_prefecture' value="{{ $data['hotel_prefecture']}}">
            <input type="hidden" name='hotel_city' value="{{ $data['hotel_city']}}">
            <input type="hidden" name='hotel_block' value="{{ $data['hotel_block']}}">
            <input type="hidden" name='hotel_tel' value="{{ $data['hotel_tel']}}">
            <input type="hidden" name='checkin_time' value="{{ $data['checkin_time']}}">
            <input type="hidden" name='checkout_time' value="{{ $data['checkout_time']}}">
            @if(isset($file_name))
            <input type="hidden" name='hotel_image' value="{{ $file_name}}">
            @endif
            <button class="btn"><a href="{{ route('hotel.edit', $hotel_id) }}">戻る</a></button>
            <button class="btn btn-primary" type='submit'>登録</button>
        </form>
    </div>
</div>
<br>
@endsection