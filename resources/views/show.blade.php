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
        <p class='edit'>[<a href="/blog/{{ $blog->id }}/edit">edit</a>]</p>
        <form action="/blog/{{ $blog->id }}" id="form_delete" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
        </form>
        <div class='post'>
            <h2 class="title">{{ $blog->title }}</h2>
            <img src="{{ $blog->image_path }}">
            <p class='body'>{{ $blog->body }}</p>  
            <p class='updated_at'>{{ $blog->updated_at }}</p>
        </div>
        <div class='back'>[<a href='/blog'>back</a>]</div>
            
        <script>
            function deletePost(e){
                'use strict';
                if(confirm('削除すると復元することができません。\n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>

@endsection