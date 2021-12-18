<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>MusicApp</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('top')}}"">MusicApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('recruiting.index')}}">記事を探す</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('member.index')}}">メンバーを探す</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">サポート</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ログイン</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">登録</a>
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
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">サポート</h5>
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
</footer>        <script src= "{{asset('js/app.js')}}"></script>
      </body>
</html>