@extends('layouts.app')

@section('content')
<div class="container">
@guest


@else
<a href="{{ route('artists_posts.create') }}" class="btn btn-primary">
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
            <div class="card-header"><a href="{{ route('artists_posts.show',$post->id) }}"> {{$post->title}}</a></div>
            <div class="card-body">
                {{$post->message}}
            </div>
            <div class="card-footer">
                名前: {{$post->title}} <br>
                投稿日時: {{$post->created_at}}
            </div>
        </div>
    </div>
@endforeach
</div>


</div>
@endsection