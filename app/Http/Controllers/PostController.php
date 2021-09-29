<?php

namespace App\Http\Controllers;

// どこにあるクラス(モデル)を使うかの住所(定義)
// ホーム画面

// 診断画面
use APP\Test;
use App\Teaq;
use App\Tea;
use App\Herbq;
use App\Mood;

// ブログ画面
use App\Blog;
use App\Http\Requests\BlogRequest;
use Storage;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    // Modelは単数, tableは複数表記
    public function home()
    {
        // viewsの中にあるbladeが渡される 
        // viewメソッド -> viewsフォルダまでのパスが設定されてる
        return view('home');
    }
    
    public function login()
    {
        return view('user');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function teadiff()
    {
        return view('about_tea_diff');
    }
    
    public function abouttea()
    {
        return view('about_tea');
    }

    public function aboutherb()
    {
        return view('about_herbtea');
    }
    
    public function aboutgreentea()
    {
        return view('about_greentea');
    }
    
    // table, Model には数字を使わない - 中身が一目でわかるような名前をつけること
    // 数字だと内容がわかりづらいため、丁寧に記述する！
    // 診断画面
    public function test()
    {
        return view('test');    
    }
    
    // 紅茶診断 
    public function teaTest(Teaq $tea_question)
    { 
        // bladeで呼び出す変数名 -> questions
        return view('tea_test')->with(['questions' => $tea_question->get()]);
    }
    
    // 紅茶診断の結果
    public function teaResult(Tea $tea)
    {
        // with->連想配列
        return view('tea_result')->with(['tea' => $tea]);
    }
    
    // ハーブティー診断
    public function herbTest(Herbq $herb_question)
    {
        return view('herb_test')->with(['questions' => $herb_question->get()]);
    }
    
    // ハーブティー診断の結果
    public function herbResult(Mood $mood, $id, Request $request)
    {
        $mood = Mood::find($id);
        $herbteas = Mood::find($id)->herbteas;
        return view('herb_result')->with([
            'mood' => $mood,
            'herbteas' => $herbteas
            ]);
    }
    
    // ブログ画面
    public function blog(Blog $blog)
    {
        return view('blog')->with(['blogs' => $blog->getPaginateByLimit()]);
    }
    
    // ブログ一覧
    public function show(Blog $blog)
    {
        // 'blog' がviewで呼び出す変数
        return view('show')->with(['blog' => $blog]);
    }
    
    // ブログ作成・投稿
    public function create()
    {
        return view('create');
    }

    public function store(BlogRequest $request, Blog $blog)
    {
        // ブログ内容
        $input = $request['blog'];
        
        if($request->hasFile('picture')){
            // 画像が投稿されれば、s3アップロード開始
            $image = $request->file('picture');
            // バケットの'blogimage'フォルダへアップロード
            $path = Storage::disk('s3')->putFile('blogimage', $image, 'public');
            // アップロードした画像のフルパスを取得
            $blog->image_path = Storage::disk('s3')->url($path);
        }
        
        $blog->fill($input)->save();
        
        return redirect('/blog/' . $blog->id);
    }
    
    // ブログ編集・更新
    public function edit(Blog $blog)
    {
        return view('edit')->with(['blog' => $blog]);
    }
    
    public function update(BlogRequest $request, Blog $blog)
    {
        $input = $request['blog'];
        $blog->fill($input)->save();
        return redirect('/blog/' . $blog->id);
    }
    
    // ブログ削除
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/blog');
    }

}
