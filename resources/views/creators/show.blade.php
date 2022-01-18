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
                @if(  $creator -> user_id == Auth::user()->id )
                  <a type="button" class="btn btn-primary" href="{{ route('creators.edit',$creator -> user_id) }}">編集する</a>
                @else
                <button type="button" class="btn btn-primary">連絡する</button>
                <button type="button" class="btn btn-primary">依頼する</button>
                @endif
              </div>
            </div>
          </div>
        </div>
        <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row">クリエイタ名</th>
                <td>{{ $creator->name }}</td>
              </tr>
              <tr>
                <th scope="row">メニュー①</th>
                <td>{{$creator->fee_1 }}円</td>
              </tr>
              <tr>
                <th scope="row">メニュー②</th>
                <td>{{$creator->fee_2 }}円</td>
              </tr>
              <tr>
                <th scope="row">メニュー③</th>
                <td>{{$creator->fee_3 }}円</td>
              </tr>
              <tr>
                <th scope="row">自己紹介・プランの説明</th>
                <td colspan="2">{{ $creator->self_pr }}</td>
              </tr> 
            </tbody>
          </table>
          @if(isset( $youtube_url ))
          <h3>関わった作品</h3>
          {!! $youtube_url !!}
          @endif
    </main>
@endsection