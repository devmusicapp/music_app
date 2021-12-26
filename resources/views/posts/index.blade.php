@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">
        掲示板に投稿する
    </a>
    @guest

            <a href="{{ route('login') }}" class="btn btn-link">
                ログイン
            </a>
        
    @else
            <a class="btn btn-link" href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                ログアウト
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
            </form>
    @endguest
    <br>
<div class="mb-4">
</div>
<div class="row">
    @foreach ($posts as $post)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header"><a href="{{ route('posts.show', ['post' => $post]) }}"> {{$post->title}}</a></div>
                <a class="card-body">
                    {{$post->body}}
                </a>
                <div class="card-footer">
                    性別: {{$post->gender}} <br>
                    投稿日時: {{$post->created_at}}
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>
@endsection