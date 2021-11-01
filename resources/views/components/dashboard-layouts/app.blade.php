<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="E-Commerce Website">
    <meta name="author" content="Mohamed Fadl <mohamed.fadl2852@gmail.com>">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} Dashboard</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <x-dashboard-layouts.head-assets/>
</head>

<body id="page-top">
{{ $slot }}
<x-dashboard-layouts.scroll-top/>
<x-dashboard.logout-modal/>
<x-dashboard-layouts.footer-assets>
    <!-- Page level plugins -->
    <script src="{{ asset('dashboard/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('dashboard/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('dashboard/js/demo/chart-pie-demo.js') }}"></script>
</x-dashboard-layouts.footer-assets>
</body>
</html>
