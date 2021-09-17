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
        <p class='create'>[<a href='/blog/create'>create</a>]</p>
        <div class='blogs'>
            @foreach ($blogs as $blog)
            <div class='blogs'>
                <h3><a href='/blog/{{ $blog->id }}'>
                <h2 class='title'>{{ $blog->title }}</h2></a></h3>
                <p class='body'>{{ $blog->body }}</p>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $blogs->links() }}
        </div>
    </body>

@endsection