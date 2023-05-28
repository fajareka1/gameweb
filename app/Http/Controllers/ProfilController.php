<?php

namespace App\Http\Controllers;

use App\Models\favorit;
use App\Models\games;
use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $data = DB::table('profils')->where('user_id', $id)->first();
        $game_coba = favorit::all()->where('user_id',$id);


        return view('/sesi/user/profil')->with('data', $data)->with('game_coba', $game_coba);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('profils')->where('id', $id)->first();
        return view('/sesi/user/profiledit',compact('data'));
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
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'profil_img' => 'image|mimes:png,jpg,jpeg,svg',
            'user_id' => 'required'
        ]);
        $profil =  profil::find($id);
        $profil->username = $request->username;
        $profil->email = $request->email;
        $profil->user_id = $request->user_id;

        // image baru
        if($request->profil_img){
            $path = Storage::url('imgs/'.$profil->profil_img);
            if(File::exists($path))
            {
                File::delete($path);
            }
            $foto = $request->file('profil_img');
            $foto->storeAs('/public/imgs',$foto->hashName());
            $profil->profil_img = $foto->hashName();
        }
        $profil->update();
        return redirect()->route('profil.edit',$id);
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
}
