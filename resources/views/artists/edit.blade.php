@extends('layouts.app')

@section('content')
<div class="container">
{{ $artist }}
<form method="POST" action="{{ route('artists.update',['artist' => $artist]) }}">
    @csrf
    @method('PUT')

    <fieldset class="mb-4">
        <div class="form-group">
            <label for="title">
                アーティスト名
            </label>
            <input
                id="name"
                name="name"
                class="form-control"
                value="{{ $artist->name }}"
                type="text"
            >
        </div>

        <div class="form-group">
            <label for="body">
                担当パート
            </label>
            <input
                id="part"
                name="part"
                class="form-control"
                value="{{ $artist->part }}"
                type="text"
            >
        </div>
        <div class="form-group">
            <label for="body">
                活動拠点
            </label>
            <input
                id="place"
                name="place"
                class="form-control"
                value="{{ $artist->place }}"
                type="text"
            >
        </div>
        <div class="form-group">
            <label for="body">
                性別
            </label>
            <input
                id="gender"
                name="gender"
                class="form-control"
                value="{{ $artist->gender }}"
                type="text"
            >
        </div>
        <div class="form-group">
            <label for="body">
                年齢
            </label>
            <input
                id="age"
                name="age"
                class="form-control"
                value="{{ $artist->age }}"
                type="text"
            >            
        </div>
        <div class="form-group">
            <label for="body">
                好きなアーティスト
            </label>
            <input
                id="favorite_musician"
                name="favorite_musician"
                class="form-control"
                value="{{ $artist->favorite_musician }}"
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
                value="{{ $artist->youtube_url }}"
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
            value="{{ $artist->self_pr }}"
            type="text"
            >{{ $artist->self_pr }}</textarea>
        </div>

        <input type="hidden" name="user_id" value="">

        <div class="mt-5">
            <button type="submit" class="btn btn-primary">
                アーティスト情報を更新する
            </button>
            <a class="btn btn-secondary" href="{{ route('top') }}">
                戻る
            </a>
        </div>
    </fieldset>
</form>

</div>
@endsection