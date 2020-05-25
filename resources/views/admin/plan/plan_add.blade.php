@extends('layout.admin')

@section('title', '宿泊プランの登録')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>宿泊プランの登録</h5>
        <p>*は必須項目</p>
        <form action="{{ route('plan.add.confirm') }}" method='post'>
            @csrf
            <div class="form-group col-6">
                <label for="plan_name">*プラン名</label>
                <input name="plan_name" type="text" class="form-control @error('plan_name') is-invalid @enderror">
                @error('plan_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="hotel_code">*宿の特徴</label>
                <input type="text" name="description" class="form-control">
                @error('description')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="price">*料金</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price">
                @error('price')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="room_amount">*部屋数</label>
                <input type="number" class="form-control" name="room_amount">
                @error('room_amount')
                <small>{{$message}}</small>
                @enderror
                <br>
                <label for="note">備考</label>
                <input name="note" type="text" class="form-control">
            </div>
            <button class="btn"><a href="{{ route('plan.find') }}">戻る</a></button>
            <button class="btn btn-primary" type='submit'>確認</button>
        </form>
    </div>
</div>
<br>
@endsection