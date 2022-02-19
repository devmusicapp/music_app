@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>
            <form method="POST" action="{{ route('artists_posts.store') }}">
                @csrf

                {{ $artist }}
                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            value=""
                            type="text"
                        >
                    </div>

                    <div class="form-group">
                        <label for="body">
                            投稿内容
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                            rows="4"
                        ></textarea>
                        @if ($errors->has('message'))
                            <div class="invalid-feedback">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                    </div>
                    <input type="hidden" name="artist_id" value="{{ $artist->id }}">

                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                        <a class="btn btn-secondary" href="{{ route('top') }}">
                            戻る
                        </a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection