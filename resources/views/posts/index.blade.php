@extends('layouts.app')

@section('content')
<div class="container">
<div class="mb-4">
</div>
<div class="row">
    <h2>トップページ</h2>
    <h2>各サービスへのリンク</h2>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
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


</div>

</div>
@endsection