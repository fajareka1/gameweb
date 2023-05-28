<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\games;
use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{

    function register(){
        return view('sesi/register');
    }



    
    function createakun(Request $request){

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
    return redirect('/sesi');

    }



    function index(){
        return view("sesi/index",['title'=>'login']);
    }




    function login(Request $request){


        $request->validate([
            'email'=> 'required',
            'password'=> 'required',

        ],
        [
            'email.required'=>'email harus di isi',
            'password.required'=>'passworrd harus di isi',

        ]
    );

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
        
    ];
    if(Auth::attempt($infologin)){
        // buat ulang session login
        $request->session()->regenerate();

        if (auth()->user()->role_id === 1) {
            // jika admin
            return redirect()->intended('/admin');
        } else {
            // jika user 
            return redirect()->intended('/user');
        }
    }else{
        return redirect('/sesi');
    }

    }



                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/sesi')->with('succses', 'berhasil logout');
    }


    // direktori user dan admin
    function admin(){
        $id = auth()->user()->id;
        $akun = profil::all()->where('user_id', $id);
        return view('sesi/admin/home')->with('profil', $akun);
    }
    function user(){
        $data = DB::table('games')->paginate(5);
        $game = DB::table('games')->where('status_game', ['free'])->paginate(5);
        return view('sesi/user/home')->with('games', $data)->with('game',$game);
    }
    function cari(Request $request){
        $request->validate([
           'cari'=>'required', 
        ]);
        $games = DB::table('games')->where('name_game', 'like',"%".$request->cari."%")->paginate(5);
        return view('sesi.user.hasilsrc', compact('games'));
    }
    



}
