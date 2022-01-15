<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Artist;
use App\Models\User;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //もしartistsテーブルのuser idに現在のログインIDと一致するものがあれば、topにリダイレクト
        $isArtist = Artist::where('user_id', '=', Auth::user()->id )->exists();
        if($isArtist == true){
            return redirect()->route('top');
        }else{
            return view('artists.create');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->isYoutubeURL($request->youtube_url) == 0){
            //$changed_url = $this->convertYoutube($request->youtube_url);
            $request->merge(['youtube_url' => null]);
        }

        $params = $request->validate([
            'name' => 'required|string',
            'part' => 'nullable',
            'place' => 'nullable',
            'gender' => 'nullable',
            'age' => 'nullable|integer',
            'youtube_url' => 'nullable|string',
            'favorite_musician' => 'nullable|string',
            'self_pr' => 'nullable',
            'user_id' => 'required|integer',
        ]);


        $artist = Artist::create($params);
        //user テーブルのisArtistをfalse→trueに更新する
        $user = User::find(Auth::user()->id );
        $user -> is_Artist = 1;
        $user -> save();
        return redirect()->route('top');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::where('user_id',$id)->first();

        if($this->isYoutubeURL($artist -> youtube_url ) == true){
            $youtube_url = $this->convertYoutube($artist -> youtube_url);
        }elseif($this->isYoutubeMobileURL($artist -> youtube_url ) == true){
            $youtube_url = $this->convertMobileYoutube($artist -> youtube_url);
        }else{
            $youtube_url = null;
        }
        
        //$artist -> youtube_url = $this->convertYoutube($artist -> youtube_url);
        //$artist -> save();
        return view('artists.show',['artist'=> $artist,'youtube_url'=> $youtube_url]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // ログインしているユーザが該当データの処理を行う権限が有るかチェック
        if($this->CheckloginUser($id) == false){
            // 管理者管理　一覧画面へリダイレクト
            return redirect()->route('top');
        }
        $artist = Artist::where('user_id',$id)->first();
        return view('artists.edit', ['artist' => $artist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if($this->isYoutubeURL($request->youtube_url) == 1){
            //$changed_url = $this->convertYoutube($request->youtube_url);
            $request->merge(['youtube_url' => $request->youtube_url]);
        }elseif($this->isYoutubeMobileURL($request->youtube_url) == 1){
            $request->merge(['youtube_url' => $request->youtube_url]);
        }else{
            $request->merge(['youtube_url' => null]);
        }
        

        //$request->merge(['youtube_url' => $this->isYoutubeURL($request->youtube_url)]);
        //$changed_url = $this->convertYoutube($request->youtube_url);
        //$request->merge(['youtube_url' => $changed_url]);        

        $params = $request->validate([
            'name' => 'string|required',
            'part' => 'nullable',
            'place' => 'nullable',
            'gender' => 'nullable',
            'age' => 'nullable|integer',
            'youtube_url' => 'string|nullable',
            'favorite_musician' => 'string|nullable',
            'self_pr' => 'nullable',
        ]);

        $artist = Artist::find($id);
        $artist->fill($params)->save();

        return redirect()->route('artists.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function CheckloginUser($id)
    {
        // 判定結果フラグ
        $result = false;

        $login_user_id = Auth::id(); //ログインユーザのデータ取得

        // 一般管理者は、特権管理者や一般管理者のデータを変更できない
        if($login_user_id == $id){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    private function isYoutubeURL($str){
        $isYoutubeURL = false;
        if(substr($str, 0, 32)==="https://www.youtube.com/watch?v="){
            $isYoutubeURL = True;
        }
        return $isYoutubeURL;
    }
    private function isYoutubeMobileURL($str){
        $isYoutubeMobileURL = false;
        if(substr($str, 0, 17)==="https://youtu.be/"){
            $isYoutubeMobileURL = True;
        }
        return $isYoutubeMobileURL;
    }

    //Youtubeの短縮URLをiframe用の埋め込みURLに変換する
    private function convertYoutube($str, $width = 560, $height = 315) {
        //先頭のアドレスを除外する
        $str = str_replace("https://www.youtube.com/watch?v=","",$str);
    
        //iframe用のアドレスに変換する
        $return_ad = '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.$str.'" frameborder="0" allowfullscreen></iframe>';
    
        return $return_ad;
        }

        private function convertMobileYoutube($str, $width = 560, $height = 315) {
            //先頭のアドレスを除外する
            $str = str_replace("https://youtu.be/","",$str);
        
            //iframe用のアドレスに変換する
            $return_ad = '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.$str.'" frameborder="0" allowfullscreen></iframe>';
        
            return $return_ad;
            }
}
