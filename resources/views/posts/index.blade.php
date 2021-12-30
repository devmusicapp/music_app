@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    @guest


    @else
    <a href="{{ route('posts.create') }}" class="btn btn-primary">
        掲示板に投稿する
    </a>
    @endguest
    <br>
<div class="mb-4">
</div>
<div class="row">
    @foreach ($posts as $post)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header"><a href="{{ route('posts.show', ['post' => $post]) }}"> {{$post->title}}</a></div>
                <div class="card-body">
                    {{$post->body}}
                </div>
                <div class="card-footer">
                    名前: {{$post->name}} <br>
                    投稿日時: {{$post->created_at}}
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>
@endsection