@extends('layout')

@section('content')

    <div class="header-container">
        <p>
            紅茶について<br>
            ABOUT TEA
        </p>
    </div>
    <div class="main-layer" style="min-height: 800px;">
        <div class="main-layer-green"></div>
        <div class="main-layer-yellow"></div>
        <div class="main-layer-container">
            <div class="tea-leaf-img">
                <img src="{{ asset('picture/project-tea/page-design/about-tea.jpeg') }}">
            </div>
            <div class="about-tea-title">
                <p>紅茶の歴史</p>
            </div>
            <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
                <p>
                    &nbsp;アジアで生産されていた紅茶がヨーロッパの人々に楽しまれるようになったのは17世紀です。 
                    当時にもたらされたお茶は緑茶でしたが、中国の烏龍茶系のお茶がヨーロッパ人の人気をよび、
                    買い手の嗜好に合わせて酸化発酵が進められ、強く発酵した紅茶が誕生したといわれています。
                </p>
            </div>
        <div class="about-tea-title">
            <p>世界三大銘茶</p>
        </div>
        <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
            <p>
                紅茶には、「ダージリン」「ウバ」「キーマン」という3つの山地で収穫される茶葉である世界三大銘茶と呼ばれるものがあります。
            </p>
            <p style="padding-top: 0;">
                <span class="marker" style="font-size: 23px;">ダージリン ~ Darjeeling ~ </span><br>
            </p>
            <div class="about-contents">
                &nbsp;インド北東部のダージリン地方で収穫され、ヒマラヤ山麓の標高2,000メートルを超える高地で育ちます。
                世界的に有名な高級紅茶の産地で育つダージリンは、寒暖差が大きく霧の多い山岳地帯特有の気候などにより、
                独特な香りや味わいを楽しむことができます。<br>
                &nbsp;ダージリンの収穫シーズンは年に3回です。時期の違いで香りや味の変化を楽しむことができます。<br>
                <div class="about-types">
                    <span class="line">ファーストフラッシュ</span> ~ 春摘み 3月中旬-5月初旬 ~ <br>
                        長い冬を経て芽吹いた新緑の葉で、圧倒的な爽やかさとフルーティな香りを楽しむことができます。<br><br>
                    
                    <span class="line">セカンドフラッシュ</span> ~ 夏摘み 5月中旬-7月 ~ <br>
                        「紅茶のシャンパン」と称されるダージリンのセカンドフラッシュはバランスの良いマスカテルフレーバーを楽しむことができます。<br>
                        ( マスカテルフレーバー : お茶本来の味・香りのことです。 )<br><br>
                        
                    <span class="line">オータムナル</span> ~ 秋摘み 9月-11月中旬 ~ <br>
                        ミルクティでも負けない、コクのある深い味わいを楽しむことができます。当たり年ならば、コクのある極上のブランデーのような味になります。<br><br>
                </div>
            </div>
            
            <p style="padding-top: 0;">
                <span class="marker" style="font-size: 23px;">ウバ ~ Uva ~ </span><br>
            </p>
            <div class="about-contents">
                &nbsp;スリランカ南東部にある標高900m ~ 1500mの丘陵地帯で収穫されます。
                力強い味わいと爽やかな香りが特徴であるウバですが、他の紅茶と比べ個性的なため、好き嫌いが分かれるかもしれません。<br><br>
                &nbsp;冷たく乾燥した寄生つ風が吹くは7~8月頃に風味が凝縮するため、ウバのフレーバリーシーズンは7~9月となっています。<br><br>
                &nbsp;飲む際は、ゴールデンリングを楽しむため、ストレートで飲むことがおすすめですが、ミルクティにも良く合います。<br>
                &nbsp;( ゴールデンリング : カップの内側にできる黄金色の輪のことで、良質な紅茶を上手に淹れた際にできます。
                                        タンニン・フラボン色素を多く含み、香り・味・色ともにバランスの良い上級茶である証明となります。)
                
            </div>
            
            <p style="padding-top: 0;">
                <span class="marker" style="font-size: 23px;">キーマン ~ Keeman ~ </span><br>
            </p>
            <div class="about-contents">
                &nbsp;中国の上海の西にある安徽省祁門県で生産される古典的な紅茶です。<br><br>
                時期が6~9月と短く、他の紅茶に比べごく少量しか収穫がされません。そのため、値段は少々お高めとなっています。
                &nbsp;また、8月に採れる茶葉が最も品質が良いとされています。<br><br>
                花や果実を思わせる香りと、独特なスモーキーなフレーバーが特徴で、水色は澄んだ明るい色をしています。
                
            </div>
        </div>
        
        <div class="about-tea-title">
            <p>紅茶の淹れ方</p>
        </div>
        <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
            <p>
                ① ポットにお湯を入れて、あらかじめ温めておきます。<br>
                ( ポットは保温性が良く、丸く膨らみのある磁気製のものがおすすめです )<br><br>
                ② 茶葉をポットへ入れ、熱湯を注ぎ蒸らします。<br><br>
                ③ 味見をし、美味しく出たらカップへ注ぎます。<br>

                <div class="about-video">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/RIAXuNbsq8A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </p>
        </div>
        
        <div class="about-tea-title">
            <p>ミルクティーの作り方</p>
        </div>
        <div class="about-tea-box" style="margin-top: 20px; margin-bottom: 30px;">
            <p>
                ① ポットとカップをしっかりと温めておきます。<br><br>
                ② いつもより茶葉を多めにポットへ入れ、熱湯を注ぎ、長めに蒸らします。<br><br>
                ③ そこへミルクを注ぎ完成です。<br>
                ( ミルクをたっぷり使用する場合は、常温のミルクがおすすめです )<br>
                
                <div class="about-video">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/KOGn7yLfCJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </p>
        </div>
        
        <div class="back-btn">
            <a class="back-btn" href="/about">BACK</a>
        </div>
        
    </div>

@endsection