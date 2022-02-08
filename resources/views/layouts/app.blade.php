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
    <nav class="navbar global-header">

      <layout-global-header>

        <template #home>
          <div class="navbar-item">
            <a href="{{ url('/') }}">
              LOGO
            </a>
          </div>
        </template>

        <template #search>
          <div class="navbar-item">
            <div class="field has-addons">
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="〇〇〇〇">
                <span class="icon is-right">
                  <i class="fas fa-search"></i>
                </span>
              </div>
              <div class="control">
                <a class="button" href="{{route('recruiting.index')}}">検索</a>
              </div>
            </div>
          </div>
        </template>

        <template #user>
          @guest
          <div class="navbar-item">
            <div class="field is-grouped">
              <div class="control">
                <a class="button" href="{{ route('register') }}">登録</a>
              </div>
              <div class="control">
                <a class="button" href="{{ route('login') }}">ログイン</a>
              </div>
            </div>
          </div>
          @endguest

          @auth
          <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-link is-arrowless">
              {{ Auth::user()->name }}
            </div>

            <ul class="navbar-dropdown is-boxed is-right">
            @if(Auth::user()->is_Artist == 0 )
              <li class="navbar-item">
                <a href="{{ route('artists.create') }}">アーティスト情報入力</a>
              </li>
            @endif
            @if(Auth::user()->is_Artist == 1 )
              <li class="navbar-item">
                <a href="{{ route('artists.edit',Auth::user()->id) }}">アーティスト情報編集</a>
              </li>
              <li class="navbar-item">
                <a href="{{ route('artists.show',Auth::user()->id) }}">アーティストメニュー</a>
              </li>
            @endif
            @if(Auth::user()->is_Creator == 0 )
              <li class="navbar-item">
                <a href="{{ route('creators.create') }}">クリエータ情報入力</a>
              </li>
            @endif
            @if(Auth::user()->is_Creator == 1 )
              <li class="navbar-item">
                <a href="{{ route('creators.edit',Auth::user()->id) }}">クリエータ情報編集</a>
              </li>
              <li class="navbar-item">
                <a href="{{ route('creators.show',Auth::user()->id) }}">クリエータメニュー</a>
              </li>
            @endif
              <li class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>            
            </ul>
            @endauth
          </div>

        </template>


      </layout-global-header>

      <nav class="navbar-menu container is-widescreen global-navigation">
        <div class="navbar-item">
          <a href="{{ route('artists_posts.index') }}">Collabolation</a>
        </div>
        <div class="navbar-item">
          <a href="">Mathing</a>
        </div>
        <div class="navbar-item">
          <a href="">Ranking</a>
        </div>
        <div class="navbar-item">
          <a href="">Talk Room</a>
        </div>
      </nav>
            @guest
              @if (Route::has('login'))
              @endif

              @if (Route::has('register'))
              @endif
            @else
            @endguest
    </nav>

    <main class="container">
      @yield('content')
    </main>

    <layout-global-footer></layout-global-footer>
  </div>
</body>

</html>