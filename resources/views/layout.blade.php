<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF=8">
    <title>Tea</title>
    <link rel="stylesheet" href="{{ asset('css/tea.css') }}">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>

</head>
<div class="header-menu">
    <!-- メニューバー -->
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <nav>
        <div class="nav-content">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/test">TEST</a></li>
                <li><a href="/blog">BLOG</a></li>
                <li><a href="/contact">CONTACT</a></li>
            </ul>
        </div>
    </nav>
    <!-- ユーザーアイコン -->
    <div class="user"></div>
</div>

@yield('content')

<footer>

</footer>

</html>