@extends('layout')

@section('content')

    <!-- このアプリ内で記述されたデータだと保証するためのもの/セキュリティ -->
    @csrf
    <!-- 診断 1 自分に合う紅茶-->
    <div class="">
        <div class="">
            <a id="number">質問</a>
            <p id="question">質問内容</p>
        </div>
        <!-- required:入力必須-->
        <div class="">
            <label><input id="radio1" type="radio" name="question" required><span id="choice_1">選択肢1</span></label><br>
        </div>
        <div class="">
            <label><input id="radio2" type="radio" name="question" required><span id="choice_2">選択肢2</span></label><br>
        </div>
    </div>
    <div class="">
        <button id="button" onclick="next()">次へ</button>
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
        
        number.innerHTML = '質問'+cnt;
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
                        number.innerHTML = '質問'+cnt;
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
                        number.innerHTML = '質問'+cnt;
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
                        number.innerHTML = '質問'+cnt;
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
                        number.innerHTML = '質問'+cnt;
                        break;
                    case 1:
                        /* 質問2から質問5へ */
                        num = 4;
                        question.innerHTML = qs[num].question;
                        choice1.innerHTML = qs[num].choice_1;
                        choice2.innerHTML = qs[num].choice_2;
                        radio2.checked = false;
                        cnt++;
                        number.innerHTML = '質問'+cnt;
                        break;
                    case 2:
                        /* 質問3から質問7へ */
                        num = 6;
                        question.innerHTML = qs[num].question;
                        choice1.innerHTML = qs[num].choice_1;
                        choice2.innerHTML = qs[num].choice_2;
                        radio2.checked = false;
                        cnt++;
                        number.innerHTML = '質問'+cnt;
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