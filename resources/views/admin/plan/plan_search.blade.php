@extends('layout.admin')

@section('title', '宿泊プラン検索')

@section('content')
<script>
@if(session('create_plan'))
$(function() {
    toastr.success('登録完了');
});
@endif
@if(session('update_plan'))
$(function() {
    toastr.success('更新完了');
});
@endif
@if(session('remove_plan'))
$(function() {
    toastr.success('削除完了');
});
@endif
</script>
<div class="card">
    <div class="card-body m-3">
        <h5 class="card-title">条件を指定して宿泊プランを検索</h5>
        <form action="{{ route('plan.find') }}" method='post'>
            @csrf
            <div class="form-group col-6">
                <label for="plan_name">プラン名</label>
                <input name="plan_name" type="text" class="form-control">
            </div>
            <div class="form-group row">
                <div class="col-4">
                    <label for="price">料金</label>
                    <input type="number" class="form-control" name="price_min">
                </div>
                ~
                <div class="col-4">
                    <input type="number" class="form-control" name="price_max">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-4">
                    <label for="price">部屋数</label>
                    <input type="number" class="form-control" name="room_min">
                </div>
                ~
                <div class="col-4">
                    <input type="number" class="form-control" name="room_max">
                </div>
            </div>
            <button class="btn btn-primary" type='submit'>検索する</button>
        </form>
    </div>
</div>
<br>

<p><a href="{{ route('plan.add') }}">新しい宿泊プランを登録する</a></p>
<h5>検索結果</h5>
<p>件中10件表示</p>

@if(isset($list))
@foreach($list as $data)
<div class="card">
    <div class="card-body m-3">
        <h5>宿情報</h5>
        <table class="table">
            <tr>
                <th>宿泊プランID</th>
                <td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>宿名：</th>
                <td>{{$data->hotel->hotel_name}}</td>
                </td>
            </tr>
            <tr>
                <th>宿泊プラン名：</th>
                <td>{{$data->plan_name}}</td>
            </tr>
            <tr>
                <th>プランの特徴：</th>
                <td>{{$data->description}}</td>
            </tr>
            <tr>
                <th>料金(/泊)：</th>
                <td>{{$data->price}}~</td>
            </tr>
            <tr>
                <th>部屋数：</th>
                <td>{{$data->room_amount}}</td>
            </tr>
            <tr>
                <th>備考：</th>
                <td>{{$data->note}}</td>
            </tr>
        </table>
        <button class="btn"><a href="{{ url('edit_plan'.'/'.$data->id) }}">宿泊プラン情報を変更する</a></button>
        <button class="btn"><a href="{{ url('delete_plan'.'/'.$data->id) }}">宿泊プラン情報を削除する</a></button>
    </div>
</div>
<br>
@endforeach

{{ $list->links()}}
@endif
</div>
@endsection