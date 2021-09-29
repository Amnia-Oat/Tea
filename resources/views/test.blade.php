@extends('layout')

@section('content')
    
    <!-- ヘッダータイトル -->
    <header>
        <div class="header-container">
            <p>診断<br>TEST</p>
        </div>
    </header>
    <!-- このアプリ内で記述されたデータだと保証するためのもの/セキュリティ -->
    @csrf
    <div class="test-home-parent">
        <div class="test-children-box"></div>
        <img src="{{ asset('picture/project-tea/page-design/tea-test.jpeg') }}" style="width: 100%; min-width: 1200px; min-height: 500px; padding: 50px 250px 0 200px; position: relative; z-index: 1;">
        <div class="btn-container">
            <!-- 診断ボタンを表示 -->
            <a href="javascript:void(0)" class="btn" id="link_show" onclick="show(); return false;">
                <svg width="277" height="62">
                    <defs>
                        <linearGradient id="grad1">
                            <stop offset="0%" stop-color="#FAF9FE"/>
                            <stop offset="100%" stop-color="#bee2af"/>
                        </linearGradient>
                    </defs>
                    <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
                </svg>
                <span>Want some tea?</span>
            </a>
            <div class="btn-animation" id="show_area" style="display: none; z-index: 20;">
                <a href="/test/tea" class="circle-btn">Tea</a>
                <a href="/test/herb" class="circle-btn">Herb</a>
            </div>
        </div>
        <!-- 診断ボタンを非表示 -->
        <div class="btn-container">
            <a href="javascript:void(0)" class="btn" id="link_hide" onclick="hide(); return false;" style="display: none;">
                <svg width="277" height="62">
                    <defs>
                        <linearGradient id="grad1">
                            <stop offset="0%" stop-color="#FAF9FE"/>
                            <stop offset="100%" stop-color="#bee2af"/>
                        </linearGradient>
                    </defs>
                    <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
                </svg>
                <span>Want some tea?</span>
            </a>
        </div>
    
    <!-- Script -->
    <script type="text/javascript" src="{{ asset('js/test.js') }}"></script>
    
    </div>
    
@endsection