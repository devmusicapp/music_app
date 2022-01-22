@extends('layouts.app')

@section('content')
<div class="container">
    {{ $post }}

    <div class="container mt-4">
        <div class="border p-4">
            <h5 class="h5 mb-4">
                {{ $post->title }}
            </h5>
            <p class="mb-5">
                {!! nl2br(e($post->message)) !!}
            </p>
        </div>
        <div class="mt-4">
            <a class="btn btn-secondary" href="{{ route('artists.show',$post->artists_id) }}">
                投稿者のプロフィール
            </a>
            <a class="btn btn-secondary" href="{{ route('artists.show',$post->artists_id) }}">
                投稿者へ連絡
            </a>
            <a class="btn btn-secondary" href="{{ route('artists_posts.index') }}">
            戻る
            </a>
        </div>
</div>
@endsection