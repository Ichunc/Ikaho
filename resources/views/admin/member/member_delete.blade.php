@extend('layout.admin')

@section('title', '会員削除')

@section('content')

<div class="card">
    <div class="card-body m-3">
        <h5>会員情報の削除</h5>
        <table class="table">
            <tr>
                <th>ユーザーネーム：</th>
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
                <td>{{ $data['prefecture']}}{{ $data['city'] }}{{ $data['block'] }}</td>
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
        <form action="{{ route('admin.member.remove', $data['id']) }}" method='post'>
            @csrf
            <button class="btn"><a href="{{ route('admin.member.find') }}">戻る</a></button>
            <button class="btn btn-danger" type='submit'>削除</button>
        </form>
    </div>
</div>
<br>
@endsection