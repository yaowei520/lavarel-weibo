<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>

@include("layout._header")

<div class="container">
    @yield('content')
    @include("layout._footer")
</div>
</body>
</html>