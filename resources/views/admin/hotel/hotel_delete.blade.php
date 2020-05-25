@extends('layout.admin')

@section('title', '宿情報の削除')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>宿情報の削除</h5>
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
                <td></td>
            </tr>
        </table>
        <form action="{{ route('hotel.remove', $data['id']) }}" method='post'>
            @csrf
            <button class="btn"><a href="{{ route('hotel.find') }}">戻る</a></button>
            <button class="btn btn-danger" type='submit'>削除</button>
        </form>
    </div>
</div>
<br>
@endsection