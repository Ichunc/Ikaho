@extends('layout.app')
@section('header-menu')
<li class="nav-item ml-5"><a href="">ログアウト</a></li>
@endsection
@section('side-menu')
<ul>
    <li><a href="">会員検索</a></li>
    <li><a href="{{ route('hotel.find')}}">宿検索</a></li>
    <li><a href="">宿泊プラン検索</a></li>
</ul>
@endsection
