@extends('layout.member')

@section('title', '会員退会')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>会員退会</h5>
        <p>本当に退会を行いますか？</p>
        <p>退会処理を行うと取り消しはできません。</p>
        <p>退会が完了すると自動的にログアウト致します。</p>
        <form action="{{ route('member.remove') }}" method='post'>
            @csrf
            <button class="btn"><a href="{{ route('member.hotel.find') }}">戻る</a></button>
            <button class="btn btn-danger" type='submit'>削除</button>
        </form>
    </div>
</div>
<br>
@endsection