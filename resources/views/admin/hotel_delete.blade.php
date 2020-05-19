@extends('layout.admin')

@section('title', '宿の管理')

@section('content')
<div class="search-form">
    <h2>宿情報の削除確認</h2>
    <form action="" method='post'>
        @csrf

        <table>
            <tr>
                <th>宿名：</th>
                <td>伊香保の宿</td>
            </tr>
            <tr>

                <th>宿分類：</th>
                <td>3.旅館</td>
            </tr>
            <tr>
                <th>郵便番号：</th>
                <td>123-4567</td>
            </tr>
            <tr>
                <th>住所：</th>
                <td>群馬県渋川市伊香保町</td>
            </tr>
            <tr>
                <th>電話番号：</th>
                <td>03-0000-0000</td>
            </tr>
            <tr>
                <th>宿のイメージ写真：</th>
                <td></td>
            </tr>
        </table>
        <button><a href="">戻る</a></button>
        <button type='submit'>削除実行</button>
    </form>
</div>
@endsection