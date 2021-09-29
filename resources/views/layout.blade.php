<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF=8">
    <title>Tea</title>
    <link rel="stylesheet" href="{{ asset('css/tea.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/user.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</head>
<div class="header-menu">
    <div class="menu">
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
        <ul class="dropdwn">
            <!--<div class="user"></div>-->
            <li style="color: transparent;">User
                <ul class="dropdwn_menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

@yield('content')

<footer>
    <div class="inner-block">
        <div class="cont">
            <div class="cont-item">
                <div class="footer-nav">
                    <div class="fotter-title">
                        <span><a href="/">HOME</a></span>
                        <br>
                    </div>
                </div>
            </div>
            <div class="cont-item">
                <div class="footer-nav">
                    <div class="fotter-title">
                        <span><a href="/about">ABOUT</a></span>
                    </div>
                    <ul>
                        <li><a href="/about/teadiff"> - お茶について</a></li>
                        <li><a href="/about/tea"> - 紅茶について</a></li>
                        <li><a href="/about/herbtea"> - ハーブティーについて</a></li>
                        <li><a href="/about/greentea"> - 緑茶について</a></li>
                    </ul>
                </div>
            </div>
            <div class="cont-item">
                <div class="footer-nav">
                    <div class="fotter-title">
                        <span><a href="/test">TEST</a></span>
                    </div>
                    <ul>
                        <li><a href="/test/tea"> - 紅茶診断</a></li>
                        <li><a href="/test/herb"> - ハーブティー診断</a></li>
                    </ul>
                </div>
            </div>
            <div class="cont-item">
                <div class="footer-nav">
                    <div class="fotter-title">
                        <span><a href="/blog">BLOG</a></span>
                        <br>
                    </div>
                    <div class="fotter-title">
                        <span><a href="/contact">CONTACT</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>