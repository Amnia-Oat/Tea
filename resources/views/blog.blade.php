@extends('layout')

@section('content')

    <div class="header-container">
        <p>
            ブログ<br>
            BLOG
        </p>
    </div>
    
    <div class="main-layer" style="min-height: 800px;">
    <div class="main-layer-green"></div>
    <div class="main-layer-yellow"></div>
    <div class="main-layer-container">
        <div class="blog-title-image">
            <img src="{{ asset('picture/project-tea/page-design/blog-title.jpeg') }}" alt="">
            <a href='/blog/create'>
                Wanna create your blog?
            </a>
        </div>

        @foreach ($blogs as $blog)
            <div class="blog-container">
                <div class="blog-image">
                    <img src="{{ $blog->image_path }}">
                </div>
                <p style="font-size: 18px;"><a href='/blog/{{ $blog->id }}'>「 {{ $blog->title }} 」</a></p>
                <p>{{ $blog->body }}</p>
            </div>
        @endforeach
        
        <nav class="cp_navi">
            <div class="cp_pagination">
                <a class="cp_pagenum prev" href="#">page</a>
                <span aria-current="page" class="cp_pagenum current">1</span>
                <a class="cp_pagenum" href="#">{{ $blogs->links() }}</a>
                <a class="cp_pagenum next" href="#">next</a>
            </div>
        </nav>

    </div>
</div>

@endsection