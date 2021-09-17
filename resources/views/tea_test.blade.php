@extends('layout')

@section('content')

    <!-- ヘッダータイトル -->
    <div class="header-container">
        <p>診断<br>TEST</p>
    </div>
    <!-- このアプリ内で記述されたデータだと保証するためのもの/セキュリティ -->
    @csrf
    <div class="test-home-parent">
        <div class="test-children-box"></div>
        <div class="opacity">
            <img src="{{ asset('picture/tea-test.jpeg') }}" style="width: 100%; min-width: 1200px; min-height: 500px; padding: 50px 250px 0 200px; position: relative; z-index: 1;">
        </div>
    </div>
    <!-- 診断 1 自分に合う紅茶-->
    <div class="QA-box">
        <p>Question <a id="number">番号</a></p>
        <p id="question" style="font-size: 20px;">質問内容</p>
        <div class="radio-space">
            <!-- required:入力必須-->
            <input id="radio1" type="radio" name="question" required><label for="radio1" class="radio-label"><span id="choice_1" style="font-size: 20px;">選択肢1</span></label><br>
            <input id="radio2" type="radio" name="question" required><label for="radio2" class="radio-label"><span id="choice_2" style="font-size: 20px;">選択肢2</span></label><br>
            <div class="next-btn">
                <button id="button" onclick="next()">次へ</button>
            </div>
        </div>
    </div>
    
    <script>
        /* 質問・選択肢のID取得 */
        let number = document.getElementById('number');
        let question = document.getElementById('question');
        let choice1 = document.getElementById('choice_1');
        let choice2 = document.getElementById('choice_2');
        let radio1 = document.getElementById('radio1');
        let radio2 = document.getElementById('radio2');
        let button = document.getElementById('button');
                
        /* 質問番号の設定 */
        let num = 0;
        /* 質問数のカウント */
        let cnt = 1;
        
        /* データベースよりデータをqsへ取得 */
        let qs = @json($questions);
        
        number.innerHTML = cnt;
        question.innerHTML = qs[num].question;
        choice1.innerHTML = qs[num].choice_1;
        choice2.innerHTML = qs[num].choice_2;
        
        function next(){
            /* 選択肢1の場合 */
            if(radio1.checked){
                switch(num){
                    case 0:
                        /* 質問1から質問2へ */
                        num = 1;
                        question.innerHTML = qs[num].question;
                        choice1.innerHTML = qs[num].choice_1;
                        choice2.innerHTML = qs[num].choice_2;
                        radio1.checked = false;
                        cnt++;
                        number.innerHTML = cnt;
                        break;
                    case 1:
                        /* 質問2から質問4へ */
                        console.log(cnt);
                        num = 3;
                        question.innerHTML = qs[num].question;
                        choice1.innerHTML = qs[num].choice_1;
                        choice2.innerHTML = qs[num].choice_2;
                        radio1.checked = false;
                        cnt++;
                        number.innerHTML = cnt;
                        button.innerHTML = "診断結果";
                        break;
                    case 2:
                        /* 質問3から質問6へ */
                        num = 5;
                        question.innerHTML = qs[num].question;
                        choice1.innerHTML = qs[num].choice_1;
                        choice2.innerHTML = qs[num].choice_2;
                        radio1.checked = false;
                        cnt++;
                        number.innerHTML = cnt;
                        button.innerHTML = "診断結果";
                        break;
                    case 3:
                        /* 質問4から診断結果1へ */
                        num = 0;
                        cnt = 0;
                        window.location.href='/test/tea/result/1';
                        break;
                    case 4:
                        /* 質問5から診断結果3へ */
                        num = 0;
                        cnt = 0;
                        window.location.href='/test/tea/result/3';
                        break;
                    case 5:
                        /* 質問6から診断結果5へ */
                        num = 0;
                        cnt = 0;
                        window.location.href='/test/tea/result/5';
                        break;
                    case 6:
                        /* 質問7から診断結果7へ */
                        num = 0;
                        cnt = 0;
                        window.location.href='/test/tea/result/7';
                        break;
                }
            /* 選択肢2の場合 */
            }else if(radio2.checked){
                switch(num){
                    case 0:
                        /* 質問1から質問3へ */
                        num = 2;
                        question.innerHTML = qs[num].question;
                        choice1.innerHTML = qs[num].choice_1;
                        choice2.innerHTML = qs[num].choice_2;
                        radio2.checked = false;
                        cnt++;
                        number.innerHTML = cnt;
                        break;
                    case 1:
                        /* 質問2から質問5へ */
                        num = 4;
                        question.innerHTML = qs[num].question;
                        choice1.innerHTML = qs[num].choice_1;
                        choice2.innerHTML = qs[num].choice_2;
                        radio2.checked = false;
                        cnt++;
                        number.innerHTML = cnt;
                        break;
                    case 2:
                        /* 質問3から質問7へ */
                        num = 6;
                        question.innerHTML = qs[num].question;
                        choice1.innerHTML = qs[num].choice_1;
                        choice2.innerHTML = qs[num].choice_2;
                        radio2.checked = false;
                        cnt++;
                        number.innerHTML = cnt;
                        break;
                    case 3:
                        /* 質問4から診断結果2へ */
                        num = 0;
                        cnt = 0;
                        window.location.href='/test/tea/result';
                        button.innerHTML = "診断結果";
                        break;
                    case 4:
                        /* 質問5から診断結果4へ */
                        num = 0;
                        cnt = 0;
                        window.location.href='/test/tea/result';
                        button.innerHTML = "診断結果";
                        break;
                    case 5:
                        /* 質問6から診断結果6へ */
                        num = 0;
                        cnt = 0;
                        window.location.href='/test/tea/result';
                        button.innerHTML = "診断結果";
                        break;
                    case 6:
                        /* 質問7から診断結果8へ */
                        num = 0;
                        cnt = 0;
                        window.location.href='/test/tea/result';
                        button.innerHTML = "診断結果";
                        break;
                }
            }
        }
    </script>
@endsection