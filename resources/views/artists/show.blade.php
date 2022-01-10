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
                <button type="button" class="btn btn-primary">連絡する</button>
                <button type="button" class="btn btn-primary">依頼する</button>
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
                <td>{{ $artist->part }}</td>
              </tr>
              <tr>
                <th scope="row">活動拠点</th>
                <td colspan="2">{{ $artist->place }}</td>
              </tr>
              <tr>
                <th scope="row">年齢/性別</th>
                <td colspan="2">{{ $artist->age }}/{{ $artist->gender }}</td>
              </tr> 
              <tr>
                <th scope="row">好きなアーティスト</th>
                <td colspan="2">{{ $artist->favorite_musician }}</td>
              </tr>
              <tr>
                <th scope="row">自己PR</th>
                <td colspan="2">精米した白米の表面には、通常の精米装置では取り切れない肌ヌカ（精白米の表面に残っている粘着性の高いヌカ）が残っています。この肌ヌカを取り除くために、精米した白米を炊く前は研ぎ洗いが必要となります。</td>
              </tr>   
            </tbody>
          </table>
          @if(isset( $youtube_url ))
          {{!! $youtube_url !!}}
          @endif
    </main>
@endsection