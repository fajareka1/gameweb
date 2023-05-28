@extends('basic.main')
@include('komponen.navback')

@section('konten')
<h1>saya suka keqingggg</h1>
<div class="w-100 d-flex justify-content-center mb-3 mt-3">
    <div class="w-75 d-flex">
        <h3 class="w-50 text-light">Tambah Game</h3>
    </div>
</div>
<div class="w-100 d-flex justify-content-center">
    <div class="w-75 ">

        <div class="">
    
            <form class=" text-light" action="/create/game/action" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2 d-flex w-100">
                    <label for="name" class="formlabel w-25">name</label>
                    <input type="text" class="form-control bg-dark text-light" name="name_game" value="{{ Session::get('name_game') }}">
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="name" class="formlabel w-25">Harga</label>
                    <input type="text" class="form-control bg-dark text-light" name="harga_game" value="{{ Session::get('harga_game') }}">
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="name" class="formlabel w-25">Diskon</label>
                    <input type="text" class="form-control bg-dark text-light" name="harga_diskon" value="{{ Session::get('harga_diskon') }}">
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="name" class="formlabel w-25">Status</label>
                    <input type="text" class="form-control bg-dark text-light" name="status_game" value="{{ Session::get('status_game') }}">
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="poster" class="formlabel w-25">Poster</label>
                    <input type="file" class="form-control bg-dark text-light" name="poster_file" value="">
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="banner" class="formlabel w-25">Banner</label>
                    <input type="file" class="form-control bg-dark text-light" name="banner_file" >
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="gameplay" class="formlabel w-25">Gameplay</label>
                    <input type="file" class="form-control bg-dark text-light" name="gameplay_file" >
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="gameplay" class="formlabel w-25">Video</label>
                    <input type="file" class="form-control bg-dark text-light" name="video_file" >
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="floatingSelect" class="w-25">Kategori</label>
                    <select class="form-select bg-dark text-light" name="kategori_id" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        @foreach($kategori as $item)
                            <option value="{{ $item->kategori_id }}">{{ $item->kategori_name }}</option>
                        @endforeach
                      </select>
                </div>
                  <div class="mb-2 d-flex w-100">
                        <label for="exampleFormControlTextarea1" class="form-label w-25">Deskripsi</label>
                        <textarea class="form-control bg-dark text-light" id="exampleFormControlTextarea1" name="deskripsi_game" rows="3"></textarea>
                  </div>
                <div class="mb-2 mt-3 d-grid">
                    <button class="btn btn-secondary" type="submit" name="submit">register</button>
                </div>
            </form>
    
        </div>

    
    </div>
</div>

@endsection