<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Music App</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Music App
                    </a>          
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="">記事を探す</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" href="">メンバーを探す</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">サポート</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">ログイン</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">登録</a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link" href="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">記事を探す</h5>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">メンバーを探す</h5>

            <ul class="list-unstyled">
            <li>
                <a href="#!" class="text-dark">Link 1</a>
            </li>
            <li>
                <a href="#!" class="text-dark">Link 2</a>
            </li>
            <li>
                <a href="#!" class="text-dark">Link 3</a>
            </li>
            <li>
                <a href="#!" class="text-dark">Link 4</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">サポート</h5>

            <ul class="list-unstyled mb-0">
            <li>
                <a href="#!" class="text-dark">Link 1</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">運営者概要</h5>

            <ul class="list-unstyled">
            <li>
                <a href="#!" class="text-dark">Link 1</a>
            </li>
            <li>
                <a href="#!" class="text-dark">Link 2</a>
            </li>
            <li>
                <a href="#!" class="text-dark">Link 3</a>
            </li>
            <li>
                <a href="#!" class="text-dark">Link 4</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">aaaaa</a>
    </div>
    <!-- Copyright -->
</footer>
    </div>
</body>
</html>
