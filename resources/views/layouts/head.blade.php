@extends('tea-layout')

@section('head')

<meta charset="utf-8">
<title>Tea</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Styles -->
<link href="{{ asset('css/tea.css') }}" rel="stylesheet">

@yield('header')

@yield('navigation')

@yield('footer')

@endsection