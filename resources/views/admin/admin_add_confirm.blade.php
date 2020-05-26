@extends('layout.guest')

@section('title', '管理者登録')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>管理者登録確認</h5>
        @csrf
        <table class="table">
            <tr>
                <th>管理者ID：</th>
                <td>{{ $data['username'] }}</td>
            </tr>
            <tr>
                <th>氏名：</th>
                <td>{{ $data['family_name'] }}　{{ $data['first_name'] }}</td>
            </tr>
            <tr>
                <th>ふりがな：</th>
                <td>{{ $data['family_name_kana'] }}　{{ $data['first_name_kana'] }}</td>
            </tr>
            <tr>
                <th>生年月日：</th>
                <td>{{ $data['year'] }}年{{ $data['month'] }}月{{ $data['day'] }}日</td>
            </tr>
            <tr>
                <th>性別：</th>
                <td>{{ $data['sex'] }}</td>
            </tr>
            <tr>
                <th>郵便番号：</th>
                <td>〒{{ $data['postal'] }}</td>
            </tr>
            <tr>
                <th>住所：</th>
                <td>{{ $data['prefectures'] }}{{ $data['city'] }}{{ $data['block'] }}</td>
            </tr>
            <tr>
                <th>電話番号：</th>
                <td>{{ $data['family_name_kana'] }}</td>
            </tr>
            <tr>
                <th>Eメールアドレス：</th>
                <td>{{ $data['email'] }}</td>
            </tr>
        </table>
        <form action="createMember" method='post'>
          @csrf
            <input type='hidden' name='username' value="{{ $data['username'] }}">
            <input type='hidden' name='family_name' value="{{ $data['family_name'] }}">
            <input type='hidden' name='first_name' value="{{ $data['first_name'] }}">
            <input type='hidden' name='family_name_kana' value="{{ $data['family_name_kana'] }}">
            <input type='hidden' name='first_name_kana' value="{{ $data['first_name_kana'] }}">
            <input type="hidden" name='sex' value="{{ $data['sex'] }}">
            <input type="hidden" name='postal' value="{{ $data['postal'] }}">
            <input type="hidden" name='prefectures' value="{{ $data['prefectures'] }}">
            <input type="hidden" name='city' value="{{ $data['city'] }}">
            <input type="hidden" name='block' value="{{ $data['block'] }}">
            <input type="hidden" name='tel' value="{{ $data['tel'] }}">
            <input type="hidden" name='email' value="{{ $data['email'] }}">
            <input type="hidden" name='year' value="{{ $data['year'] }}">
            <input type="hidden" name='month' value="{{ $data['month'] }}">
            <input type="hidden" name='day' value="{{ $data['month'] }}">
            <input type="hidden" name='password' value="{{ $data['password'] }}">
            <input type="hidden" name='role' value=1>
            <button class="btn"><a href="{{route('guest.register')}}"></a> 戻る</a></button>
            <button class="btn btn-primary" type='submit'>登録</button>
        </form>
    </div>
</div>
</div><br>
@endsection
