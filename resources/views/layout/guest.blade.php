@extends('layout.app')
@section('header-menu')
<li class="nav-item"><a href="{{ route('guest.register') }}">会員登録</a></li>
<li class="nav-item ml-5"><a href="">ログイン</a></li>
@endsection
@section('side-menu')
<ul>
    <li><a href="{{ route('guest.register') }}">会員登録</a></li>
    <li><a href="">ログイン</a></li>
    <li><a href="{{ route('guest.hotel.find') }}">宿を探す</a></li>
</ul>
@endsection
