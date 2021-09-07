@extends('tea-layout')

@section('navigation')

<!-- Styles -->
<link href="{{ asset('css/tea.css') }}" rel="stylesheet">

<nav>
    <div class="nav-container">
        <ul>
            <li><a href="tea.blade.php">TOP</a></li>
            <li><a href="tea-about.blade.php">お茶について</a></li>
            <li><a href="tea-test.blade.php">診断</a></li>
            <li><a href="tea-blog.blade.php">ブログ</a></li>
            <li><a href="tea-contact.blade.php">お問い合わせ</a></li>
        </ul>
    </div>
</nav>

@endsection