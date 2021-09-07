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
let qs = JSON($questions);

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
                window.location.href='/tea/test/result';
                button.innerHTML = "診断結果";
                break;
            case 4:
                /* 質問5から診断結果4へ */
                num = 0;
                cnt = 0;
                window.location.href='/tea/test/result';
                button.innerHTML = "診断結果";
                break;
            case 5:
                /* 質問6から診断結果6へ */
                num = 0;
                cnt = 0;
                window.location.href='/tea/test/result';
                button.innerHTML = "診断結果";
                break;
            case 6:
                /* 質問7から診断結果8へ */
                num = 0;
                cnt = 0;
                window.location.href='/tea/test/result';
                button.innerHTML = "診断結果";
                break;
        }
    }
}