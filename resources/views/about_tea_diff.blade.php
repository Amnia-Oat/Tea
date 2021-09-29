@extends('layout')

@section('content')

    <div class="header-container">
        <p>
            お茶について<br>
            DIFFERENCE
        </p>
    </div>
    <div class="main-layer" style="min-height: 800px;">
        <div class="main-layer-green"></div>
        <div class="main-layer-yellow"></div>
        <div class="main-layer-container">
            <div class="tea-leaf-img">
                <img src="{{ asset('picture/project-tea/page-design/tea-leaf.png') }}">
            </div>
            <div class="about-tea-title">
                <p>お茶の違い</p>
            </div>
            <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
                <p>
                    &nbsp;紅茶も緑茶も烏龍茶も、すべてカメリア・シネンシスというツバキ科の植物であるチャの木から作られています。
                    <br><br>
                    &nbsp;茶の新芽や若葉を摘んでもみ込み、放置することで空気中の酸素とお茶のエキスが結びつき、自然に酸化します。
                    この過程を酸化発酵と呼び、酸化発酵のタイミングを調整することで1つの茶葉から、以下のような風味や香りの異なるお茶を作ることが可能です。
                    <br>
                    <img src="{{ asset('picture/project-tea/page-design/tea-diff.jpeg') }}">
                    <ul>
                        <li>緑茶(無発酵茶)</li>
                        <li>白茶(弱発酵茶)</li>
                        <li>黄茶(弱後発酵茶)</li>
                        <li>烏龍茶 = 青茶(半発酵茶)</li>
                        <li>紅茶(完全発酵茶)</li>
                        <li>黒茶(後発酵茶)</li>
                    </ul>
                </p>
            </div>
            <div class="about-tea-title">
                <p>お茶の効能</p>
            </div>
            <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
                <p>
                    &nbsp;茶葉にはもともとカテキンが含まれており、
                    それが発酵することでことでテアフラビンという紅茶特有の
                    ポリフェノールへ変化します。
                    近年での研究では、このテアフラビンは血糖値上昇や脂肪吸収を抑制する
                    効果があると考えられており、朝昼晩の食後に1杯飲むことで効果が期待できます。<br>
                    &nbsp;その他にも、紅茶にはインフルエンザ予防、リラックス効果、
                    お肌のアンチエイジングにも効果があるといわれています。
                </p>
            </div>
            <div class="back-btn">
                <a class="back-btn" href="/about">BACK</a>
            </div>
        </div>
    </div>

@endsection