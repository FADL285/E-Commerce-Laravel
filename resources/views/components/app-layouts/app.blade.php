<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="E-Commerce Website">
    <meta name="author" content="Mohamed Fadl <mohamed.fadl2852@gmail.com>">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <x-app-layouts.head-assets/>
</head>
<body>
<x-app-layouts.navbar/>
{{ $slot }}
<x-app-layouts.modal/>
<x-app-layouts.footer/>
<x-app-layouts.footer-assets/>
</body>
</html>
