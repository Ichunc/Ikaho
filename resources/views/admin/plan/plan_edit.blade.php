@extends('layout.admin')

@section('title', '宿泊プラン情報の変更')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>宿泊プラン情報の変更</h5>
        <p>*は必須項目</p>
        <form action="{{ route('plan.edit.confirm', $data['id']) }}" method='post'>
            @csrf
            <div class="form-group col-6">
                <label for="plan_name">*プラン名</label>
                <input name="plan_name" type="text" class="form-control @error('plan_name') is-invalid @enderror"
                    value="{{ $data['plan_name'] }}">
                @error('plan_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="hotel_code">*宿の特徴</label>
                <input type="text" name="description" class="form-control" value="{{ $data['description'] }}">
                @error('description')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="price">*料金</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                    value="{{ $data['price'] }}">
                @error('price')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="room_amount">*部屋数</label>
                <input type="number" class="form-control" name="room_amount" value="{{ $data['room_amount'] }}">
                @error('room_amount')
                <small>{{$message}}</small>
                @enderror
                <br>
                <label for="note">備考</label>
                <input name="note" type="text" class="form-control" value="{{ $data['note'] }}">
            </div>
            <button class="btn"><a href="{{ route('plan.find') }}">戻る</a></button>
            <button class="btn btn-primary" type='submit'>確認</button>
        </form>
    </div>
</div>
<br>
@endsection