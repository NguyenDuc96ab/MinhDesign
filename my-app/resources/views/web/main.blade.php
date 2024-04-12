<!doctype html>
<html lang="en">

<head>
@include('web.head')
</head>

<body>
    <header>
    @include('web.header')
    </header>

    @yield('content')

    <footer>
    @yield('footer')
      
    </footer>
    @include('web.style')
    <script src="main.js"></script>
</body>

@include('web.footer-js')

</html>