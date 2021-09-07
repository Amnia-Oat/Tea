@extends('layout')

@section('content')

    <!-- このアプリ内で記述されたデータだと保証するためのもの/セキュリティ -->
    @csrf
    <!-- 診断1の結果 自分に合う紅茶-->
    <div class="">
        <div class="">
            <p>診断結果</p>
        </div>
        <div class="">
            <p>{{ $tea->name }}</p>
        </div>
        <div class="">
            <p>{{ $tea->feature }}</p>
        </div>
    </div>


@endsection