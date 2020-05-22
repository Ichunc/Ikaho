@extends('layout.member')

@section('title', '予約情報入力')

@section('content')
<h2>予約情報入力</h2>
<table border="1" style="border-collapse: collapse">
    <caption>選択中の宿泊プラン</caption>
    <tr>
        <th>プラン名</th>
        <th>料金</th>
    </tr>
    <tr>
        <td>{{ $data->plan_name }}</td>
        <td>{{ $data->price }}</td>
    </tr>
</table>
<form action="{{route('reservation.add.confirm', $data['id'])}}" method="post">
    @csrf
    <table>
        <caption>予約フォーム</caption>
        <tr>
            <!--ここに表示されるプルダウンの総数は、DBをもとに決めたい　小西-->
            <th>予約部屋数：</th>
            <td><select name="room_amount">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select></td>
        </tr>
        <tr>
            <!--ほんとはプルダウンのみ表示したい 小西-->
            <th>チェックイン日：</th>
            <td><input type="date" name="checkin_date" max="2100-12-31" min="2020-01-01"></td>
        </tr>
        <tr>
            <th>チェックアウト日：</th>
            <td><input type="date" name="checkout_date" max="2100-12-31" min="2020-01-01"></td>
        </tr>
    </table>
    <button><a href="{{route('member.index')}}">戻る</a></button>
    <button type='submit'>確認する</button>
</form>

</form>

@endsection
