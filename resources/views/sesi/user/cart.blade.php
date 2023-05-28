@extends('basic.main')
@include('komponen.usernavbar')
@include('komponen.navushome')

@section('konten')
<h1>saya suka keqingggg</h1>
<div class="w-100 d-flex justify-content-center">
    <div class="layer row row-col-2 ">
        @foreach($game as $item)
        @php $games = DB::table('games')->where('game_id', $item->game_id)->first(); @endphp
        @php $path = Storage::url('imgs/'.$games->poster_file); @endphp 
        @php
            $diskon = $games->harga_game - $games->harga_diskon;
        @endphp
        <div class="card me-2 bg-dark border border-light" style="width: 18rem;">
            <img src="{{ url($path) }}"alt="" height="400px" srcset=""class="mt-2 card-img-top" >
            <div class="card-body">
                <h5 class="fw-bold text-light ms-3  mt-1" >{{ $games->name_game }}</h5>
                <h5 class="fw-bold text-light ms-3  mt-1" >Rp.{{ $diskon }}</h5>
                <form class="  " action="/detail" method="POST">
                    @csrf
                    <input type="hidden" name="game_id" value="{{ $games->game_id }}">
                    <input type="hidden" name="kategori_id" value="{{ $games->kategori_id }}">
                    <button type="submit" name="submit" class="w-100 btn btn-outline-primary">Detail</button>
                </form>
                <form class=" " action="cart/delete" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <button type="submit" name="submit" class="w-100 btn btn-outline-danger">Delete</button>
                </form>
            </div>
          </div>


    @endforeach
    </div>

</div>

@endsection