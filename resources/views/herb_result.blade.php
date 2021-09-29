@extends('layout')

@section('content')

    <div class="header-container">
        <p>
            診断<br>
            TEST
        </p>
    </div>
    
    <!-- このアプリ内で記述されたデータだと保証するためのもの/セキュリティ -->
    @csrf
    <div class="main-layer">
        <div class="main-layer-green"></div>
        <div class="main-layer-yellow"></div>
        <div class="main-layer-container">
            <div class="QA-box" style="top: 100px; left: 30%;">
                <p style="font-size: 20px;">
                    あなたの気分は...
                </p>
                <p style="font-size: 25px; text-align: center;">
                    {{ $mood->mood }}
                </p>
                <p id="mood" style="font-size: 20px; text-align: center;">
                    {{ $mood->feature }}
                </p>
            </div>
            @foreach($herbteas as $herbtea)
                @if($herbtea->id == 1 || $herbtea->id == 3 || $herbtea->id == 5 || $herbtea->id == 7)
                    <div class="asw-image1">
                        <img src="{{ $herbtea->image_path }}">
                    </div>
                    <div class="asw-box1">
                        <p style="font-size: 20px;">{{ $herbtea->name }}</p>
                        <p style="font-size: 19px;">{{ $herbtea->feature }}</p>
                    </div>
                @endif
                @if($herbtea->id == 2 || $herbtea->id == 4 || $herbtea->id == 6 || $herbtea->id == 8)
                    <div class="asw-image2">
                        <img src="{{ $herbtea->image_path }}">
                    </div>
                    <div class="asw-box2">
                        <p style="font-size: 20px;">{{ $herbtea->name }}</p>
                        <p style="font-size: 19px;">{{ $herbtea->feature }}</p>
                    </div>
                @endif
            @endforeach
            <div class="back-button-container" style="top: 1150px;">
                <div class="back-btn">
                    <a class="back-btn" href="/test/herb">Try Again</a>
                </div>
            </div>
        </div>
        
        <!-- Script -->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    
    </div>

@endsection