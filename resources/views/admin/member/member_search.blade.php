@extends('layout.admin')

@section('title', '会員の管理')

@section('content')

<script>
@if(session('update_admin'))
$(function() {
    toastr.success('会員情報更新完了');
});
@endif
@if(session('delete_admin'))
$(function() {
    toastr.success('会員情報削除完了');
});
@endif
</script>
<div class="card">
    <div class="card-body m-3">
        <h5 class="card-title">会員検索条件</h5>
        <form action="{{ route('admin.member.find') }}" method='post'>
            @csrf
            <div class="row">
                <div class="form-group col-4">
                    <label for="member_id">会員ID</label>
                    <input class="form-control" name="member_id" type="number" min='1'>
                </div>
                <div class="form-group col-4">
                    <label for="username">ユーザーネーム</label>
                    <input type="text" class="form-control" name="hotel_name">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="family_name_kana">会員名字(かな)</label>
                    <input class="form-control" name="family_name_kana" type="text">
                </div>
                <div class="form-group">
                    <label for="first_name_kana">会員名前(かな)</label>
                    <input class="form-control" name="first_name_kana" type="text">
                </div>
                <label class="control-label">性別</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" value="男性">
                    <label class="form-check-label">男性</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" value="女性">
                    <label class="form-check-label">女性</label>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="prefecture">都道府県</label>
                    <select class="form-control" name="prefecture">
                        <option value="" selected>選択してください</option>
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都">東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" type='submit'>検索する</button>
        </form>
    </div>
</div>
<br>

<h5>検索結果</h5>
<p>件中10件表示</p>

@if(isset($list))
@foreach($list as $data)
<div class="card">
    <div class="card-body m-3">
        <h5>会員情報</h5>
        <table class="table">
            <tr>
                <th>会員ID</th>
                <td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>ユーザーネーム</th>
                <td>{{$data->username}}</td>
            </tr>
            <tr>
                <th>会員氏名：</th>
                <td>{{$data->family_name . $data->first_name}}</td>
                </td>
            </tr>
            <tr>
                <th>会員氏名(かな)：</th>
                <td>{{$data->family_name_kana . $data->first_name_kana}}</td>
                </td>
            </tr>
            <tr>
                <th>性別</th>
                <td>{{$data->sex}}</td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td>{{$data->birthday}}</td>
            </tr>
            <tr>
                <th>住所：</th>
                <td>{{$data->prefecture.$data->city.$data->block}}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{$data->tel}}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{$data->email}}</td>
            </tr>
        </table>
        <button class="btn"><a href="{{ url('admin/edit_member'.'/'.$data->id) }}">会員情報を変更する</a></button>
        <button class="btn"><a href="{{ url('admin/delete_member'.'/'.$data->id) }}">会員情報を削除する</a></button>
        <br>
    </div>
</div>
<br>
@endforeach

{{ $list->links()}}
@endif
</div>

@endsection