@extends('layout')

@section('content')
    
    <body>
        <h1>編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content__title">
                <h2>Title</h2>
                 <input type="text" name="post[title]" value="{{ $post->title }}" placeholder="タイトル"/>
            </div>
            
            <div class="content__body">
                <h2>Body</h2>
                <textarea name="post[body]" value="{{ $post->body }}" placeholder="今日も1日お疲れ様でした。"/>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>

@endsection