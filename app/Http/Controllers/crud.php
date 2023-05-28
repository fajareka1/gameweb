<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\games;
use App\Models\profil;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


  
class crud extends Controller
{
    function userform(){
        $data = DB::table('roles')
        ->join('users', 'users.role_id', '=', 'roles.role_id')->get();
        $i= 1;
        
        return view('sesi/admin/read/createuser')->with('data', $data)->with('i', $i);
    }
    function user(){
        $data = DB::table('roles')->join('users', 'users.role_id', '=', 'roles.role_id')->get();
        $i= 1;
        
        return view('sesi/admin/read/userread')->with('data', $data)->with('i', $i);
    }
    function export(){
        $data = DB::table('roles')->join('users', 'users.role_id', '=', 'roles.role_id')->get();
        $i= 1;
        
        return view('sesi/admin/read/export')->with('data', $data)->with('i', $i);
    }

    function userdlt(Request $request){
        $request->validate([
            'id' => 'required']);
        User::where('id', $request->id)->delete();
        return redirect('/userlist');


    }
    function createadmin(Request $request){

        $request->validate([
            'name' => 'required',
            'email'=> 'required | email | unique:users',
            'password'=> 'required | min:6',
            'role_id' => 'required',

        ],
        [
            'name.required'=>'name harus di isi',
            'email.required'=>'email harus di isi',
            'email.email'=>'email harus di isi valid',
            'email.unique'=>'email sudah ada',
            'password.required'=>'passworrd harus di isi',
            'password.min'=>'minim 6 karakter',
            

        ]
    );

    $data = [
        'name'=> $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role_id' => $request->role_id
    ];

    User::create($data);
    $user_id = DB::table('users')->where('email', $request->email)->first();
    $data2 = [
        'username'=> $request->name,
        'email'=> $request->email,
        'profil_img' => 'fajar.png',
        'user_id' => $user_id->id
    ];

    profil::create($data2);
    return redirect('/userlist');

    }
    public function gameform(){
        $data = kategori::all();
        $game = games::all();

        return view('sesi/admin/read/creategame')->with('kategori', $data)->with('game', $game);
    }

    public function game(){
        $game = games::all();
        $kategori = kategori::all(); 
        
        return view('sesi/admin/read/gamecrud')->with('game', $game)->with('kategori', $kategori);
    }
    public function gamekategori(Request $request){
        $kategori = kategori::all(); 
        $req = $request->kategori_id;
        $data = DB::table('games')->where('kategori_id', $req)->paginate(110);
        return view('/sesi/admin/read/kategori', compact('data'))->with('kategori', $kategori);
}

    public function creategame(Request $request){

            $request->validate([
                'name_game' => 'required',
                'kategori_id'=> 'required',
                'deskripsi_game'=> 'required',
                'harga_game'=> 'required', 
                'harga_diskon' => 'required',
                'status_game'=> 'required', 
                'banner_file' => 'required|image|mimes:png,jpg,jpeg',
                'poster_file' => 'required|image|mimes:png,jpg,jpeg',
                'gameplay_file' => 'required|image|mimes:png,jpg,jpeg',
                'video_file' => 'required|mimes:png,jpg,jpeg,mp4',

    
            ]
        );

        $banner_file = $request->file('banner_file');
        $banner_file->storeAs('/public/imgs',$banner_file->hashName());

        
        $poster_file = $request->file('poster_file');
        $poster_file->storeAs('/public/imgs',$poster_file->hashName());

        
        $gameplay_file = $request->file('gameplay_file');
        $gameplay_file->storeAs('/public/imgs',$gameplay_file->hashName());

        $video_file = $request->file('video_file');
        $video_file->storeAs('/public/imgs',$video_file->hashName());
    
        $data = [
            'name_game'=> $request->name_game,
            'harga_game'=> $request->harga_game,
            'harga_diskon' => $request->harga_diskon,
            'status_game'=> $request->status_game,
            'kategori_id' => $request->kategori_id,
            'deskripsi_game' => $request->deskripsi_game,
            'banner_file' => $banner_file->hashName(),
            'poster_file' => $poster_file->hashName(),
            'gameplay_file' => $gameplay_file->hashName(),
            'video_file' => $video_file->hashName(),
        ];
    
        games::create($data);
        return redirect('/gamelist');
    }
    function gamedlt(Request $request){
        $request->validate([
            'game_id' => 'required']);
        games::where('game_id', $request->game_id)->delete();
        return redirect('/gamelist');


    }

    function updategame(Request $request){
        $request->validate([
            'game_id'=> 'required',
        ]);
        $data = kategori::all();
        $dataku = games::where('game_id', $request->game_id)->first();
        return view('sesi/admin/update/gameuptd')->with('data', $data)->with('dataku', $dataku);
    }

    function aksiupdate(Request $request){
        $request->validate([
            'game_id' => 'required',
            'name_game' => 'required',
            'harga_game' => 'required',
            'harga_diskon' => 'required',
            'status_game' => 'required',
            'kategori_id'=> 'required',
            'deskripsi_game'=> 'required',
            'poster_file' => 'required|image|mimes:png,jpg,jpeg',
            'banner_file' => 'required|image|mimes:png,jpg,jpeg',
            'gameplay_file' => 'required|image|mimes:png,jpg,jpeg',
            'video_file' => 'required|mimes:mp4',

        ]
    );
    $poster = $request->file('poster_file');
    $banner = $request->file('banner_file');
    $gameplay = $request->file('gameplay_file');
    $video = $request->file('video_file');


    if ($poster) {
        $poster->storeAs('/public/imgs',$poster->hashName());
    } else {
        $poster = $request->poster_file;
    }

    if ($video) {
        $video->storeAs('/public/imgs',$video->hashName());
    } else {
        $video = $request->video_file;
    }
    if ($gameplay) {
        $gameplay->storeAs('/public/imgs',$gameplay->hashName());
    } else {
        $gameplay = $request->gameplay_file;
    }

    if ($banner) {
        $banner->storeAs('/public/imgs',$banner->hashName());
    } else {
        $banner = $request->poster_file;
    }


    $data = [
        'game_id' => $request->game_id,
        'name_game' => $request->name_game,
        'harga_game' => $request->harga_game,
        'harga_diskon' => $request->harga_diskon,
        'status_game' => $request->status_game,
        'kategori_id' => $request->kategori_id,
        'deskripsi_game' => $request->deskripsi_game,
        'poster_file' => $poster->hashName(),
        'banner_file' => $banner->hashName(),
        'gameplay_file' => $gameplay->hashName(),
        'video_file' => $video->hashName(),

    ];
    games::where('game_id', $request->game_id)->update($data);
    return redirect('/gamelist')->with('success','kamu berhasil pajarunudin');

    }

    function panggilgame(Request $request){
        $request->validate([
            'game_id' => 'required',
            'kategori_id' => 'required',
        ]);
        $komentar = DB::table('komentars')->where('game_id', $request->game_id)->paginate(5);
        $id = auth()->user()->id;
        $data = DB::table('profils')->where('user_id', $id)->first();
        $kategori = DB::table('kategoris')->join('games', 'games.kategori_id', '=', 'kategoris.kategori_id')->paginate(5);
        return view('/sesi/user/game')->with('dataku', games::where('game_id', $request->game_id)->first())->with('kategori', $kategori)->with('user_id',$data)->with('komentar', $komentar);
    }


}
