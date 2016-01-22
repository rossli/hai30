<!DOCTYPE html>
<html lang="en">
<head>
    {{--这三行代码是  bootstrap 要求必须 放在最前面--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--这三行代码是  bootstrap 要求必须 放在最前面 end --}}

    <title>RossLi Blog</title>
    <title>@yield('title', 'RossLi Blog')</title>
    {{--@include('layout.partials._meta')--}}
    @yield('meta','<meta name="description" content="这是RossLi 的博客">
        <meta name="author" content="RossLi">')
    @include('layout.partials._styles')
    @include('layout.partials._ifie')

    @yield('styles')
</head>
<body id="page-top" class="index">
@include('layout.partials._header')
@include('layout.partials._navigation')

{{--主体内容--}}
<div class="container">
@yield('content')
</div>



{{--引入主footer--}}
@include('layout.partials._footer')
</body>
</html>