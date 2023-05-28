<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\games;
use App\Models\kategori;
use App\Models\komentar;
use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function kategori(){
        $action = DB::table('kategoris')->where('kategori_id', [4])->first();
        $simulator = DB::table('kategoris')->where('kategori_id', [2])->first();
        $fps = DB::table('kategoris')->where('kategori_id', [1])->first();
        $rpg = DB::table('kategoris')->where('kategori_id', [3])->first();

        $kukang = kategori::latest()->paginate(4);
        $dataku = kategori::all();
        $data = DB::table('games')->where('kategori_id', [2])->paginate(6);
        return view('sesi/user/kategori')->with('data', $data)->with('dataku',$dataku)->with('kakangku',$kukang)->with('action' , $action)->with('simulator', $simulator)->with('fps', $fps)->with('rpg', $rpg);
    }

    function komentars(){
        $id = auth()->user()->id;
        $komentar = komentar::all()->where('user_id', $id);
        $user = profil::all()->where('user_id', $id);
        return view('/sesi/user/komentar')->with('komen',$komentar)->with('user', $user);
    }

    function komendlt(Request $request){
        $request->validate([
            'id' => 'required']);
        komentar::where('id', $request->id)->delete();
        return redirect('/komentar');


    }

    function discount(){
        $game = games::all()->where('status_game', 'diskon');
        return view('/sesi/user/discount')->with('games', $game);
    }



}
