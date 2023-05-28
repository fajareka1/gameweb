<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\games;
use App\Models\favorit;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\komentar;
use Illuminate\Support\Facades\Redirect;

class game extends Controller
{

    function panggilgame(Request $request){
        $request->validate([
            'game_id' => 'required',
        ]);

        $dataku = games::where('game_id', $request->game_id)->first();
        return view('/sesi/user/game')->with('data', $dataku);
    }
    function morekategori(Request $request){
        $req = $request->kategori_id;
        $data = games::all()->where('kategori_id', $req);
        return view('/sesi/user/morekategori')->with('data',$data);
    }
    function viewgame(Request $request){
        $request->validate([
            'game_id'=> 'required',
        ]);
        $req = $request->game_id;
        $data = DB::table('games')->where('game_id', $req)->first();
        return view('/sesi/admin/read/gameview')->with('data', $data);
    }
    function favorit(Request $request){
        $request->validate([
            'game_id'=> 'required',
            'user_id'=> 'required',
            'kategori_id' => 'required',

        ]);
        $data = [
            'game_id'=> $request->game_id,
            'user_id'=> $request->user_id,
        ];
        favorit::create($data);
        $komentar = DB::table('komentars')->where('game_id', $request->game_id)->paginate(5);
        $id = auth()->user()->id;
        $data = DB::table('profils')->where('user_id', $id)->first();
        $kategori = DB::table('kategoris')->join('games', 'games.kategori_id', '=', 'kategoris.kategori_id')->paginate(5);
        return view('/sesi/user/game')->with('dataku', games::where('game_id', $request->game_id)->first())->with('kategori', $kategori)->with('user_id',$data)->with('komentar', $komentar);


    }

    function komentar(Request $request){
        $request->validate([
            'user_id' => 'required',
            'game_id' => 'required',
            'komentar' => 'required',
            'kategori_id' => 'required',
        ]);

        $data = [
            'user_id' => $request->user_id,
            'game_id' => $request->game_id,
            'komentar' => $request->komentar
        ];
        komentar::create($data);
        $komentar = DB::table('komentars')->where('game_id', $request->game_id)->paginate(5);
        $id = auth()->user()->id;
        $data = DB::table('profils')->where('user_id', $id)->first();
        $kategori = DB::table('kategoris')->join('games', 'games.kategori_id', '=', 'kategoris.kategori_id')->paginate(5);
        return view('/sesi/user/game')->with('dataku', games::where('game_id', $request->game_id)->first())->with('kategori', $kategori)->with('user_id',$data)->with('komentar', $komentar);
    }

    // cart
    function cart(){
        $id = auth()->user()->id;
        $game_coba = cart::all()->where('user_id',$id);

        return view('/sesi/user/cart')->with('game', $game_coba);
    }
    function addcart(Request $request){
        $request->validate([
            'game_id'=> 'required',
            'user_id'=> 'required',
            'kategori_id' => 'required',

        ]);
        $data = [
            'game_id'=> $request->game_id,
            'user_id'=> $request->user_id,
        ];
        cart::create($data);
        $komentar = DB::table('komentars')->where('game_id', $request->game_id)->paginate(5);
        $id = auth()->user()->id;
        $data = DB::table('profils')->where('user_id', $id)->first();
        $kategori = DB::table('kategoris')->join('games', 'games.kategori_id', '=', 'kategoris.kategori_id')->paginate(5);
        return view('/sesi/user/game')->with('dataku', games::where('game_id', $request->game_id)->first())->with('kategori', $kategori)->with('user_id',$data)->with('komentar', $komentar);


    }

    function cartdlt(Request $request){
        $request->validate([
            'id' => 'required']);
        cart::where('id', $request->id)->delete();
        return redirect('/cart');


    }
}
