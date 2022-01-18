@extends('layouts.app')

@section('content')
<div class="container">
{{ $creator }}
<form method="POST" action="{{ route('creators.update',['creator' => $creator]) }}">
    @csrf
    @method('PUT')

    <fieldset class="mb-4">
        <div class="form-group">
            <label for="title">
                クリエータ名
            </label>
            <input
                id="name"
                name="name"
                class="form-control"
                value="{{ $creator->name }}"
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
                value="{{ $creator->youtube_url }}"
                type="text"
            >   
        </div>
        <div class="form-group">
            <label for="body">
                金額①
            </label>
            <input
                id="fee_1"
                name="fee_1"
                class="form-control"
                value="{{ $creator->fee_1 }}"
                type="text"
            >   
        </div>
        <div class="form-group">
            <label for="body">
                金額②
            </label>
            <input
                id="fee_2"
                name="fee_2"
                class="form-control"
                value="{{ $creator->fee_2 }}"
                type="text"
            >   
        </div>
        <div class="form-group">
            <label for="body">
                金額③
            </label>
            <input
                id="fee_3"
                name="fee_3"
                class="form-control"
                value="{{ $creator->fee_3 }}"
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
            value="{{ $creator->self_pr }}"
            type="text"
            >{{ $creator->self_pr }}</textarea>
        </div>

        <input type="hidden" name="user_id" value="">

        <div class="mt-5">
            <button type="submit" class="btn btn-primary">
                クリエータ情報を更新する
            </button>
            <a class="btn btn-secondary" href="{{ route('top') }}">
                戻る
            </a>
        </div>
    </fieldset>
</form>

</div>
@endsection