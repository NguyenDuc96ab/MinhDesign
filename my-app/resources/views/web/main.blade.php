<!doctype html>
<html lang="en">

<head>
@include('web.head')
</head>

<body>
    <header>
    @include('web.header')
    </header>
    <div class="container-mp nav-wrapper">
        <!-- Begin: wrapper -->
        <div class="wrapper mp-pusher" id="mp-pusher">
            <div>
                @include('Web.menu-mobile')
            </div>
        

                <!--Scroll to Top-->
                @include('Web.style')
               

            </div>
        </div>
    </div>
    @yield('content')

    <footer>
    @yield('footer')
      
    </footer>
    @include('web.style')
    <script src="main.js"></script>
</body>

@include('web.footer-js')

</html>