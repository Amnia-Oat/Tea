@extends('layout')

@section('content')

    <div class="header-container">
        <p>
            ログイン / 新規登録<br>
            LOGIN / REGISTER
        </p>
    </div>
    
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

@endsection