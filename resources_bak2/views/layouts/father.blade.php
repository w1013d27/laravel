<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>App Name - @yield('title')</title>
        <script src="{{ mix('/js/app.js') }} " defer></script>
</head>
<body>
<div id="app">
@yield('content')
</div>
</body>
</html>

