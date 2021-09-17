@extends('layout')

@section('content')
    
    <div class="header-container">
        <p>
            ブログ<br>
            BLOG
        </p>
    </div>
    
    <body>
        <h1>Blog Name</h1>
        <!-- enctype="multipart/form-data 画像・動画・音声等のファイルをアップロードする際に必要 -->
        <form action="/blog" method="post" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="blog[title]" placeholder="タイトル" value="{{ old('blog.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('blog.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="blog[body]" placeholder="今日も1日お疲れ様でした。" value="{{ old('blog.body') }}"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('blog.body') }}</p>
            </div>
            <input type="file" name="picture" value="写真">
            <br>
            <input type="submit" value="投稿"/>
        </form>
        <div class='back'><a href='/blog'>back</a></div>
    </body>

@endsection