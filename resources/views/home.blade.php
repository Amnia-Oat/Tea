@extends('layout')

@section('content')

    <main>
        <div class="main-container">
            <div class="homeArea">
                <img src="{{ asset('picture/project-tea/page-design/home.jpeg') }}" alt="" style="margin-left: auto;">
                <!--https://ja.best-wallpaper.net/Top-view-two-cups-tea-flowers-berries-lemon_wallpapers.html-->
                <div class="homeArea-box">
                    <p>
                        No Tea<br> No Life
                    </p>
                </div>
            </div>
            <div class="homeArea">
                <img src="{{ asset('picture/project-tea/page-design/home2.jpeg') }}" alt="" style="margin-right: auto;">
                <div class="homeArea-box" style="margin: 3em 95% 3em 45em; margin-right: auto;">
                    <p style="padding: 30px 10px 100px 80px;">
                        A cup of tea is<br> the answer to<br> every problem
                    </p>
                </div>
            </div>
        </div>
    </main>

@endsection