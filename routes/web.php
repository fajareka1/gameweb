<?php

use App\Http\Controllers\crud;
use App\Http\Controllers\game;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('/sesi/awal') ;
});

Route::get('/sesi',[SessionController::class, 'index']);
Route::post('/sesi/login',[SessionController::class, 'login']);
Route::get('/register',[SessionController::class, 'register']);
Route::post('/sesi/register',[SessionController::class, 'createakun']);
Route::get('/sesi/logout',[SessionController::class, 'logout']);


Route::get('/admin',[SessionController::class, 'admin']);
// route user
Route::get('/user',[SessionController::class, 'user']);
Route::get('/kategori',[UserController::class, 'kategori']);

// crud
// create
Route::post('/create/admin',[crud::class, 'createadmin']);
Route::post('/create/game/action',[crud::class, 'creategame']);
Route::post('/detail',[crud::class, 'panggilgame']);
Route::post('/favorit',[game::class, 'favorit']);
Route::post('/komentar',[game::class, 'komentar']);




// read
Route::get('/create/user',[crud::class, 'userform']);
Route::get('/create/game',[crud::class, 'gameform']);
Route::post('/kategori/more',[game::class, 'morekategori']);
Route::post('/view',[game::class, 'viewgame']);






// Route::get('/detail',[game::class, 'tampil']);
Route::get('/userlist',[crud::class, 'user']);
Route::get('/export',[crud::class, 'export']);
Route::get('/gamelist',[crud::class, 'game']);
Route::post('/gamelist/kategori',[crud::class, 'gamekategori']);



// update
Route::post('/ingame',[crud::class, 'updategame']);
Route::post('/game/update',[crud::class, 'aksiupdate']);




// delete
Route::post('userlist/delete',[crud::class, 'userdlt']);
Route::post('gamelist/delete',[crud::class, 'gamedlt']);

// cari
Route::get('/game/cari',[SessionController::class, 'cari']);


// profil
Route::resource('/profil', ProfilController::class);

// cart
Route::get('/cart',[game::class, 'cart']);
Route::post('/addcart',[game::class, 'addcart']);
Route::post('cart/delete',[game::class, 'cartdlt']);


// komentar
Route::get('/komentar',[UserController::class, 'komentars']);
Route::post('komentar/delete',[UserController::class, 'komendlt']);


// discount
Route::get('/discount',[UserController::class, 'discount']);









