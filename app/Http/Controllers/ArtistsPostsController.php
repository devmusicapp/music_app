<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ArtistsPost;
use App\Models\Artist;
use App\Models\User;


class ArtistsPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = ArtistsPost::with('artist')->orderBy('created_at', 'desc')->get();
        return view('artistsposts.index',['posts'=>$posts]);
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
            $artist = Artist::where('user_id', '=', Auth::user()->id )->first();
            return view('artistsposts.create',['artist'=>$artist]);
        }else{
            return redirect()->route('artists_posts.index');
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
        $params = $request->validate([
            'title' => 'required|string',
            'message' => 'required|string',
            'artist_id' => 'nullable',
        ]);

        $artist = ArtistsPost::create($params);
        //user テーブルのisArtistをfalse→trueに更新する
        return redirect()->route('artists_posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = ArtistsPost::where('id',$id)->first();

        return view('artistsposts.show',['post'=> $post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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


}
