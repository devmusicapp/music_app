@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row g-0  rounded  flex-md-row mb-4  h-md-250 ">
                <div class="col-auto d-lg-block">
                    <img src="{{ asset('img/school_man.png') }}" alt="">
                </div>
                <br>
              <div class=" p-4  flex-column position-static">
                @if(  $artist -> user_id == Auth::user()->id )
                  <a type="button" class="btn btn-primary" href="{{ route('artists.edit',$artist -> user_id) }}">編集する</a>
                  <a type="button" class="btn btn-primary" href="{{ route('artists_posts.create',$artist -> user_id) }}">依頼を掲示板に投稿する</a>
                @else
                <button type="button" class="btn btn-primary">連絡する</button>
                @endif
              </div>
            </div>
          </div>
        </div>
        <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row">アーティスト名</th>
                <td>{{ $artist->name }}</td>
              </tr>
              <tr>
                <th scope="row">担当パート</th>
                <td>{{ config('const.part')[$artist->part] }}</td>
              </tr>
              <tr>
                <th scope="row">活動拠点</th>
                <td colspan="2">{{ config('const.place')[$artist->place] }}</td>
              </tr>
              <tr>
                <th scope="row">年齢/性別</th>
                <td colspan="2">{{ $artist->age }}歳/{{ config('const.gender')[$artist->gender] }}</td>
              </tr> 
              <tr>
                <th scope="row">好きなアーティスト</th>
                <td colspan="2">{{ $artist->favorite_musician }}</td>
              </tr>
              <tr>
                <th scope="row">自己PR</th>
                <td colspan="2">{{ $artist->self_pr }}</td>
              </tr>   
            </tbody>
          </table>
          @if(isset( $youtube_url ))
          {{!! $youtube_url !!}}
          @endif
    </main>
@endsection