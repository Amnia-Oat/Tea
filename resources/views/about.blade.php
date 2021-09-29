@extends('layout')

@section('content')

    <div class="header-container">
        <p>
            お茶について<br>
            ABOUT
        </p>
    </div>
    <div class="main-layer" style="min-height: 800px;">
        <div class="main-layer-green"></div>
        <div class="main-layer-yellow"></div>
        <div class="main-layer-container">
            <div class="about">
                <div>
                    <h1>ABOUT</h1>
                    <p>
                        <br>
                         - お茶の違い<br>
                         - 紅茶の効能<br>
                        <br><br><br>
                    </p>
                    <a class="about-btn" href="/about/teadiff">続きを読む</a>
                </div>
                <div>
                    <h1>TEA</h1>
                    <p>
                        <br>
                         - 紅茶の歴史<br>
                         - 世界の三大銘茶<br>
                         - 紅茶の淹れ方<br>
                         - ミルクティーの淹れ方<br>
                         <br>
                    </p>
                    <a class="about-btn" href="/about/tea">続きを読む</a>
                </div>
                <div>
                    <h1>HERB TEA</h1>
                    <p>
                        <br>
                         - 紅茶との違い<br>
                         - ハーブティーの効能<br>
                         - ハーブティーの淹れ方<br>
                         <br><br>
                    </p>
                    <a class="about-btn" href="/about/herbtea">続きを読む</a>
                </div>
                <div>
                    <h1>GREEN TEA</h1>
                    <p>
                        <br>
                         - 緑茶の歴史<br>
                         - お茶の種類<br>
                         - 煎茶の淹れ方<br>
                         - 烏龍茶の淹れ方<br>
                         <br>
                    </p>
                    <a class="about-btn" href="/about/greentea">続きを読む</a>
                </div>
            </div>
        </div>
    </div>

@endsection