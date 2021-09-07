<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF=8">
    <title>Tea</title>
    <link rel="stylesheet" href="{{ asset('css/tea.css') }}">
</head>

<header>
    <div class="header-container">
        <a>Take a Break</a>
    </div>
</header>
<nav>
    <div class="nav-container">
        <ul>
            <li><a href="/">TOP</a></li>
            <li><a href="/about">お茶について</a></li>
            <li><a href="/test">診断</a></li>
            <li><a href="/blog">ブログ</a></li>
            <li><a href="/contact">お問い合わせ</a></li>
        </ul>
    </div>
</nav>
<main>
    @yield('content')
</main>
<footer>

</footer>

</html>