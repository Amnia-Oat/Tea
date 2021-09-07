@extends('layout')

@section('content')
    
    <body>
        <h1>Blog Name</h1>
        <form action="/create" method="post">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れ様でした。" value="{{ old('post.body') }}"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>

            </div>
                <input type="submit" value="投稿"/>
        </form>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>

@endsection