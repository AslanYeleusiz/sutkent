<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Сүткент ауылының ресми сайты. Ауылдың барлық тыныс-тіршілігімен танысыңыз!">
    <meta name="keywords" content="Сүткент, ауыл, ауыл шаруашылығы, Шардара, Түркістан облысы, суткент, sutkent, ауылдастар, село, Сүткент ауылы, село Суткент">
    <title>@yield('title') | Сүткент ауылы</title>
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
    @yield('links')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.mask.js')}}"></script>
</head>

<body>
    @if(session()->has('success'))
        @include('components.successPopup')
    @endif
    @include('components.loginPopup')
    <header>
        @include('components.mobileMenuBar')
        @include('components.header')
    </header>
    <div class="content">
        @yield('content')
    </div>


    <footer>
        @include('components.footer')
    </footer>

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>
