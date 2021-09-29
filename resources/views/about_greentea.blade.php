@extends('layout')

@section('content')

    <div class="header-container">
        <p>
            緑茶 / 烏龍茶 について<br>
            ABOUT GREEN TEA AND OOLONG TEA
        </p>
    </div>
    <div class="main-layer" style="min-height: 800px;">
        <div class="main-layer-green"></div>
        <div class="main-layer-yellow"></div>
        <div class="main-layer-container">
            <div class="tea-leaf-img">
                <img src="{{ asset('picture/project-tea/page-design/about-greentea.jpeg') }}">
            </div>
            <div class="about-tea-title">
                <p>緑茶の歴史</p>
            </div>
            <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
                <p>
                    &nbsp;お茶は今から4000年以上も昔、中国で薬として食べられていました。
                    その後、飲み物として楽しまれるようになるお茶が日本に1200年前に伝わりました。
                    始めは貴重なものとしてお坊さんや貴族の飲み物として飲まれていましたが、
                    戦国時代から千利休によって「茶道」の文化が広められ、江戸時代になる頃には皆にも飲まれるようになりました。
                </p>
            </div>
        <div class="about-tea-title">
            <p>お茶の種類</p>
        </div>
        <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
            <p style="padding-top: 30px; padding-bottom: 10px;">
                <span class="marker" style="font-size: 23px;">玉露</span><br>
            </p>
            <p>
                新芽が2~3枚開き始めたら、日光を遮り育てたお茶です。<br>
                渋みがなく、旨味が豊富な味わいです。
            </p>
            <p style="padding-top: 0; padding-bottom: 10px;">
                <span class="marker" style="font-size: 23px;">煎茶</span><br>
            </p>
            <p>
                緑茶の中で一番飲まれるお茶です。<br>
                玉露と違い、日光を浴びて育つため、甘みと渋みのバランスが取れたさっぱりとした味わいになります。
            </p>
            <p style="padding-top: 0; padding-bottom: 10px;">
                <span class="marker" style="font-size: 23px;">番茶</span><br>
            </p>
            <p>
                柔らかな新芽ではなく、成長し硬化が進んだ茶葉を利用しています。<br>
                お茶は摘む時期が遅れるほど品質が落ちるため、昔は晩茶といわれていたようです。<br>
                健康面として、血糖降下作用のあるポリサッカライドを多く含んでおり、さっぱりとした味わいとなっています。。
            </p>
            <p style="padding-top: 0; padding-bottom: 10px;">
                <span class="marker" style="font-size: 23px;">抹茶</span><br>
            </p>
            <p>
                抹茶は、玉露と同じよう、茶葉に強い日差しが当たらぬよう育てた茶葉を石臼等で挽いた粉末状にしたものです。<br>
                茶道で点てるほか、和菓子・洋菓子・料理の素材として広く用いられます。
            </p>
            <p style="padding-top: 0; padding-bottom: 10px;">
                <span class="marker" style="font-size: 23px;">ほうじ茶</span><br>
            </p>
            <p>
                ほうじ茶は緑茶の一種であり、煎茶や番茶、茎茶を煎じ、香ばしい香りを引き出したお茶です。<br>
                苦み・渋み成分のカフェイン・カテキンが少ないため、幅広い年齢層に親しまれています。
            </p>
        </div>
        <div class="about-tea-title">
            <p>煎茶の淹れ方</p>
        </div>
        <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
            <p>
                ① 急須に人数分の茶葉を入れます。<br><br>
                ② 熱湯を70 ~ 75℃に冷まし、急須へ注ぎ蒸らします。(1.5~2分)<br><br>
                ③ 濃さが均一になるよう、湯飲むへ注ぎ分けます。<br>
                ( 最後の一滴まで注ぎ切りましょう！ )<br><br>
                ④ 同様に2煎目を入れます。<br>
                ( お茶のうまみを楽しみたい場合は低温で、爽やかな渋みと香りを楽しみたい場合は高温で短時間蒸らし、注ぎましょう )<br>
                
                <div class="about-video">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Tqo8JGFvCp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </p>
        </div>
        <div class="about-tea-title">
            <p>烏龍茶の淹れ方</p>
        </div>
        <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
            <p>
                ① 小さめの急須へ茶葉を入れ、熱湯をたっぷり注ぎます。<br><br>
                ② 45秒 ~ 1分間侵出させ、最後の一滴まで湯飲みに注ぎきります。<br><br>
                ③ 2煎目は10秒程短く侵出させ、3煎目からは約10秒ずつ増やしていくと、3 ~ 5煎楽しむことができます。<br><br>
            
                <div class="about-video">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/hydkN50JNdQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </p>
        </div>
        <div class="back-btn">
            <a class="back-btn" href="/about">BACK</a>
        </div>
    </div>
</div>

@endsection