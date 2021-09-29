@extends('layout')

@section('content')

    <div class="header-container">
        <p>
            ハーブティーについて<br>
            ABOUT HERB TEA
        </p>
    </div>
    <div class="main-layer" style="min-height: 800px;">
        <div class="main-layer-green"></div>
        <div class="main-layer-yellow"></div>
        <div class="main-layer-container">
            <div class="tea-leaf-img">
                <img src="{{ asset('picture/project-tea/page-design/about-herb.jpeg') }}">
            </div>
            <div class="about-tea-title">
                <p>ハーブティーと紅茶の違い</p>
            </div>
            <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
                <p>
                    &nbsp;紅茶は茶の木から摘み取られた茶葉を発酵させて作られる一方、
                    ハーブティーは茶葉ではなく、様々な植物を原料としています。
                    さらに、葉だけではなく花や茎など様々な部分を使って作られています。<br>
                    &nbsp;また、フレーバーティーは、茶葉にハーブなどほかの植物を混合させ作られます。
                    例えば、茶葉をベースにバラの花びらを入れたのはローズフレーバーティー、
                    バラの花びらだけでいれたら、ローズのハーブティーになります。 
                </p>
            </div>
            <div class="about-tea-title">
                <p>ハーブティーの効能</p>
            </div>
            <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
                <p>
                    ハーブティーは、自然由来の成分ということもあり、古くから病気の治療や消毒などの民間療法に使用されてきました。
                    カフェインを含まないことから、不眠をはじめとしたさまざまな症状にも効果が期待できます。<br>
                    ハーブティーは種類がとても豊富で、100種類以上あると言われているほどです。
                    ブレンドをしたり、数種類飲むことで効果・効能はさらに広がっていきます。
                </p>
            </div>
            <div class="about-tea-title">
                <p>ハーブティーの淹れ方</p>
            </div>
            <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
                <p>
                    ① ポットにお湯を入れて、あらかじめ温めておきます。<br><br>
                    ② 茶葉(ティースプーン1~1.5杯)をポットへ入れます。<br><br>
                    ③ 熱湯(95℃くらい)を注ぎ入れます。高い温度で蒸らすことでハーブの成分をたくさん抽出することができます。<br><br>
                    ④ 香りを逃さぬよう、すぐに蓋をし、3~4分蒸らします。<br><br>
                    
                    <div class="about-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WGMRUiXkkNc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </p>
            </div>
            <div class="back-btn">
                <a class="back-btn" href="/about">BACK</a>
            </div>
        </div>
    </div>
</div>

@endsection