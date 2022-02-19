@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{ route('creators.store') }}">
    @csrf
    {{ Auth::user()->id }}
    <fieldset class="mb-4">
        <div class="form-group">
            <label for="title">
                クリエータ名
            </label>
            <input
                id="name"
                name="name"
                class="form-control"
                value=""
                type="text"
            >
        </div>

        <div class="form-group">
            <label for="body">
                YouTube URL
            </label>
            <input
                id="youtube_url"
                name="youtube_url"
                class="form-control"
                value=""
                type="text"
            >
        </div>
        <div class="form-group">
            <label for="body">
                一言
            </label>
            <textarea
                id="self_pr"
                name="self_pr"
                class="form-control"
                value=""
                type="text"
            >
            </textarea>
        </div>


        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="mt-5">
            <button type="submit" class="btn btn-primary">
                クリエータ情報を登録する
            </button>
            <a class="btn btn-secondary" href="{{ route('top') }}">
                戻る
            </a>
        </div>
    </fieldset>
</form>

</div>
@endsection