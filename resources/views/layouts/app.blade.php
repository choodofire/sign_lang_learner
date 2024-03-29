<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Жесты</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
</head>
<body>
@yield('content')
<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
@yield('script')
</body>
</html>
