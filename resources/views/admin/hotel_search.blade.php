@extends('layout.admin')

@section('title', '宿の管理')

@section('content')
<div class="search-form">
    <h2>宿の検索条件</h2>
    <form action="" method='post'>
        @csrf

        <table border='1'>
            <tr>
                <th>宿ID：</th>
                <td><input type="number" name='hotel_id' min='1'></td>
                <th>宿泊プランID：</th>
                <td><input type="number" name='plan_id' min='1'></td>
            </tr>
            <tr>
                <th>宿名：</th>
                <td><input type="text" name='hotel_name' placeholder='宿名'></td>
                <th>宿泊プラン名：</th>
                <td><input type="text" name='plan-name'></td>
            </tr>
            <tr>
                <th>宿分類：</th>
                <td><select name="hotel_code">
                        <option value="0" selected>選択してください</option>
                        <option value="1">1.シティホテル</option>
                        <option value="2">2.リゾートホテル</option>
                        <option value="3">3.ビジネスホテル</option>
                        <option value="4">4.旅館</option>
                        <option value="5">5.民宿</option>
                        <option value="6">6.ペンション</option>
                    </select></td>
                <th>都道府県：</th>
                <td><select name="prefectures">
                        <option value="0" selected>選択してください</option>
                    </select></td>
            </tr>
        </table>
        <!-- <label for="postal">郵便番号：<input type="text" name='postal_front'>-
            <input type="text" name='postal_back'></label>
        <label for="address">住所：<input type="text" name="address"></label>
        <label for="plan_id">：電話番号：<input type="number" name='plan_id'></label> -->
        <button type='submit'>検索</button>
    </form>

    <h2>検索結果</h2>
    <p>20件中10件表示</p>
    <p><a href="">新しい宿を登録する</a></p>

    <table border='1'>
        <tr>
            <th>宿ID</th>
            <td>2</td>
        </tr>
        <tr>
            <th>宿名：</th>
            <td>伊香保の宿</td>
            </td>
        </tr>
        <tr>
            <th>分類：</th>
            <td>旅館</td>
        </tr>

        <tr>
            <th>住所：</th>
            <td>群馬県渋川市伊香保町</td>
        </tr>
        <tr>
            <th>チェックイン：</th>
            <td>15:00</td>
        </tr>

        <tr>
            <th>チェックアウト：</th>
            <td>11:00</td>
        </tr>
        <tr>
            <th rowspan='3'>プランID:プラン名</th>
            <td>3:全部つきプラン</td>
        </tr>
        <tr>
            <td>4:ライトプラン</td>
        </tr>
        <tr>
            <td>5:日帰りプラン</td>
        </tr>
        <tr>
            <td><button><a href="">変更する</a></button>
            </td>
            <td><button><a href="">削除する</a></button></td>
        </tr>
    </table>



</div>
@endsection
