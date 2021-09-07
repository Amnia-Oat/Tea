<?php

namespace App\Http\Controllers;

/* どこにあるクラス(モデル)を使うかの住所(定義) */
/* ホーム画面 */
use App\Post;

/* 診断画面 */
use APP\Test;
use App\Teaq;
use App\Tea;
use App\Herbq;
use App\Mood;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /* Modelは単数, tableは複数表記 */
    public function index(Post $post)
    {
        return view('home');
    }
    
    /* table, Model には数字を使わない - 中身が一目でわかるような名前をつけること */
    /* 数字だと内容がわかりづらいため、丁寧に記述する！ */
    /* 診断画面 */
    public function test(Post $post)
    {
        return view('test');    
    }
    
    /* 紅茶診断 */
    public function teaTest(Teaq $tea_question)
    { 
        /* bladeで呼び出す変数名 -> questions */
        return view('tea_test')->with(['questions' => $tea_question->get()]);
    }
    
    /* 紅茶診断の結果 */
    public function teaResult(Tea $tea)
    {
        // with->連想配列
        return view('tea_result')->with(['tea' => $tea]);
    }
    
    /* ハーブティー診断 */
    public function herbTest(Herbq $herb_question)
    {
        return view('herb_test')->with(['questions' => $herb_question->get()]);
    }
    
    /* ハーブティー診断の結果 */
    public function herbResult(Mood $mood, $id)
    {
        $mood = Mood::find($id);
        $herbteas = Mood::find($id)->herbteas;
        return view('herb_result',['mood' => $mood, 'herbteas' => $herbteas]);
    }

}
