<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Macari Cristian">
    <meta name="description" content="'@yield('seoDescription','My personal project')">
    <title>@yield('seoTitle','My personal project')</title>
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}">
@include('headScripts')
</head>
<body>
@include('header')
<main>
@yield('content')
</main>
@include('footer')
@include('footerScripts')
</body>
</html>
