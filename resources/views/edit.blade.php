@extends('layout')

@section('content')
    
    <div class="header-container">
        <p>
            ブログ<br>
            BLOG
        </p>
    </div>
    
    <body>
        <h1>編集画面</h1>
        <form action="/blog/{{ $blog->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content__title">
                <h2>Title</h2>
                 <input type="text" name="blog[title]" value="{{ $blog->title }}" placeholder="タイトル"/>
            </div>
            
            <div class="content__body">
                <h2>Body</h2>
                <textarea name="blog[body]" value="{{ $blog->body }}" placeholder="今日も1日お疲れ様でした。"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class='back'>[<a href='/blog'>back</a>]</div>
    </body>

@endsection