<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ende</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
            <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ende</title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        ende
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('recruiting.index')}}">検索</a>
                            </li>                            

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cash_test1') }}">決済テスト</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://buy.stripe.com/test_8wMeV1cAJ5EO94kaEE">決済テスト3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('artists_posts.index') }}">アーティスト投稿一覧</a>
                            </li>
                            @auth
                                @if(Auth::user()->is_Artist == 0 )
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('artists.create') }}">アーティスト情報入力</a>
                                </li>
                                @endif
                                @if(Auth::user()->is_Artist == 1 )
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('artists.edit',Auth::user()->id) }}">アーティスト情報編集</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('artists.show',Auth::user()->id) }}">アーティストメニュー</a>
                                </li>
                                @endif
                                @if(Auth::user()->is_Creator == 0 )
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('creators.create') }}">クリエータ情報入力</a>
                                </li>
                                @endif
                                @if(Auth::user()->is_Creator == 1 )
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('creators.edit',Auth::user()->id) }}">クリエータ情報編集</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('creators.show',Auth::user()->id) }}">クリエータメニュー</a>
                                </li>
                                @endif
                            @endauth
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">登録</a>
                            </li>
                            @endguest
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                @endif
    
                                @if (Route::has('register'))
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
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
                    <h5 class="text-uppercase">検索</h5>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">決済テスト</h5>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">運営者概要</h5>
                </div>
                <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->
        
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <div>example-footer: <example-footer></example-footer></div>
                <div>layout-footer: <layout-footer></layout-footer></div>
            </div>
            <!-- Copyright -->
        </footer>
    
    </div>
</body>
</html>
