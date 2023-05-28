@extends('basic.main')
@include('komponen.usernavbar')
@include('komponen.navushome')

@section('konten')

<div class="w-100 d-flex justify-content-center">
    <div class="w-75 d-flex justify-content-start">
    @foreach($games as $item)
    @php $path = Storage::url('imgs/'.$item->poster_file); @endphp
    @php $games = DB::table('games')->where('game_id', $item->game_id)->first(); @endphp 
    @php
        $diskon = $games->harga_game - $games->harga_diskon;
    @endphp

    <div class="game rounded col-md-3 bg-dark m-2 mb-5 mt-5" style="width: 16rem;">
        <img src="{{ url($path) }}"alt="" srcset="" class="rounded-top" width="100%">
        <div class="ms-2">
            <h5 class="fw-bold text-light  mt-1" style="height: 10%">{{ $item->name_game }}</h5>
            <div class="d-flex" style="height: 10%">
            <div>
                <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary">Rp.{{$item->harga_game}}</p>
                <p class="fw-bold text-light m-0">Rp.{{ $diskon }}</p>
            </div>
            <form class="w-100 justify-content-end text-center mt-4" action="/detail" method="POST">
                @csrf
                <input type="hidden" name="game_id" value="{{ $item->game_id }} col-md-6">
                <input type="hidden" name="kategori_id" value="{{ $item->kategori_id }} col-md-6">
                <button type="submit" name="submit" class="w-75 btn btn-outline-light">Detail</button>
            </form>
            </div>

        </div>
    </div>
    @endforeach
    </div>
</div>

@endsection