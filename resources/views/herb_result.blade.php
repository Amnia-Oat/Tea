@extends('layout')

@section('content')

    <!-- このアプリ内で記述されたデータだと保証するためのもの/セキュリティ -->
    @csrf
    <!-- 診断2の結果 気分にあうハーブティー -->
    <div class="">
        <div class="">
            <p>診断結果</p>
        </div>
        <div class="" id="mood">
            <p>{{ $mood->mood }}</p>
        </div>
        <div class="">
            <p>{{ $mood->feature }}</p>
        </div>
        @foreach($herbteas as $herbtea)
            <div class="">
                <p>{{ $herbtea->name }}</p>
            </div>
            <div class="">
                <p>{{ $herbtea->feature }}</p>
            </div>
        @endforeach
    </div>

@endsection