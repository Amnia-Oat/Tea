@extends('layout')

@section('content')

    <!-- このアプリ内で記述されたデータだと保証するためのもの/セキュリティ -->
    @csrf
    <!-- 診断選択 -->
    <p>Have some tea?</p>
    <a href="/test/tea" class="circle-btn">Tea</a>
    <a href="/test/herb" class="circle-btn">Herb</a>


@endsection