@extends('layout.admin')

@section('title', '宿の管理')

@section('content')
<div class="search-form">
    <h2>宿情報の登録確認</h2>
    <form action="" method='post' enctype='multipart/form-data'>
        @csrf

        <table>
            <input type="hidden" name='hotel_name' value=''>
            <tr>

                <th>宿名：</th>
                <td>伊香保の宿</td>
            </tr>
            <input type="hidden" name='hotel_code' value=''>
            <tr>

                <th>宿分類：</th>
                <td>3.旅館</td>
            </tr>
            <input type="hidden" name='hotel_postal' value=''>
            <tr>
                <th>郵便番号：</th>
                <td>123-4567</td>
            </tr>
            <input type="hidden" name='hotel_address' value=''>
            <tr>
                <th>住所：</th>
                <td>群馬県渋川市伊香保町</td>
            </tr>
            <input type="hidden" name='hotel_tel' value=''>
            <tr>
                <th>電話番号：</th>
                <td>03-0000-0000</td>
            </tr>
            <input type="hidden" name='hotel_image' value=''>
            <tr>
                <th>宿のイメージ写真：</th>
                <td></td>
            </tr>
        </table>
        <button><a href="">戻る</a></button>
        <button type='submit'>登録</button>
    </form>

</div>
@endsection