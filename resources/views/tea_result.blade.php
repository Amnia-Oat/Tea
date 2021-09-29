@extends('layout')

@section('content')

   <div class="header-container">
        <p>
            診断結果<br>
            RESULT
        </p>
    </div>
    
    <!-- このアプリ内で記述されたデータだと保証するためのもの/セキュリティ -->
    @csrf
    <div class="main-layer">
        <div class="main-layer-green"></div>
        <div class="main-layer-yellow"></div>
        <div class="main-layer-container">

            <!-- 診断1の結果 自分に合う紅茶-->
            <div class="QA-box" style="top: 100px; left: 30%;">
                <p style="font-size: 20px; text-align: center;">
                    あなたに合う紅茶は...
                </p>
            </div>
            <div class="tea-asw-img" style="top: 100px;">
                <img src="{{ $tea->image_path }}">
            </div>
            <div class="tea-asw">
                <p style="font-size: 20px; padding-bottom: 0;">{{ $tea->name }}</p>
                <p style="font-size: 19px;">{{ $tea->feature }}</p>
            </div>
            <div class="back-button-container">
                <div class="back-btn">
                    <a class="back-btn" href="/test/herb">Try Again</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>


@endsection