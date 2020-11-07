<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title') | FORUM BTEC</title>
    <link rel="shortcut icon" href="client_assets/images/logo.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('style')
</head>
<body>
<!-- tt-mobile menu -->
@include('client/layouts/mobile/nav')
@include('client/layouts/header')
@yield('main')
@include('client/layouts/mobile/icon-create-post')
@include('client.layouts.search')
@yield('js')
@include('client/layouts/mobile/icon-menu')
</body>
</html>
