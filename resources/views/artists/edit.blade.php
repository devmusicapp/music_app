@extends('layouts.app')

@section('content')
<div class="container">
{{ $artist }}
<form method="POST" action="{{ route('artists.update',['artist' => $artist]) }}">
    @csrf
    @method('PUT')
    {{ $artist->part }}

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
            <select id="part" name="part" class="form-control" value="" type="text">
                @foreach(config('const.part') as $key => $score)
                    @if ($artist->part == $key)
                    <option value="{{ $key }}" selected>{{ $score }}</option>
                    @else
                    <option value="{{ $key }}">{{ $score }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="body">
                活動拠点
            </label>
            <select id="place" name="place" class="form-control" value="" type="text">
                @foreach(config('const.place') as $key => $score)
                    @if ($artist->place === $key)
                    <option value="{{ $key }}" selected>{{ $score }}</option>
                    @else
                    <option value="{{ $key }}">{{ $score }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="body">
                性別
            </label>
            <select id="gender" name="gender" class="form-control" value="" type="text">
                @foreach(config('const.gender') as $key => $score)
                    @if ($artist->gender === $key)
                    <option value="{{ $key }}" selected>{{ $score }}</option>
                    @else
                    <option value="{{ $key }}">{{ $score }}</option>
                    @endif
                @endforeach
            </select>
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