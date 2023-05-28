@extends('basic.main')
@include('komponen.navback')

@section('konten')
@php
use Illuminate\Support\Facades\DB;   
@endphp
@php $path = Storage::url('imgs/'.$data->profil_img); @endphp
<div class="w-100 d-flex justify-content-center mt-5">
    <div class="layer row">
        <div class="col-lg-8 d-flex mt-4">
            <img src="{{ url($path) }}" width="200px" height="200px" alt="" srcset="" class="  border border-light">
            <div class="text-start">
                <h1 class="text-light ms-3 w-100">{{ $data->username }}</h1>
                <h4 class="text-light ms-3 w-100">{{ $data->email }}</h4>
            </div>
        </div>
        <div class="col-lg-4 mt-4">
            <a class="btn btn-outline-light p-2 w-100" href="{{ route('profil.edit',$data->id) }}">Edit</a>
        </div>
    </div>
</div>

<div class="w-100 d-flex justify-content-center mt-5">
    <div class="layer row">
        <div class="col-lg-8 ">
            <h4 class="fw-bold text-light">Favorit Game</h4>
            <div class="d-flex mt-3">
                @foreach($game_coba as $item)
                @php $game = DB::table('games')->where('game_id', $item->game_id)->first(); @endphp
                @php $path = Storage::url('imgs/'.$game->poster_file); @endphp
            
                <div class="game rounded  bg-dark me-2 " style="width: 12.5rem;">
                    <img class="w-100" src="{{ url($path) }}"alt="" srcset="" class="rounded-top" >
                    <div class="ms-2">
                        <h5 class="fw-bold text-light  mt-1" style="height: 10%">{{ $game->name_game }}</h5>
                        <div class="d-flex" style="height: 10%">
                        <div>
                            <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary">$00.000</p>
                            <p class="fw-bold text-light m-0">$00.000</p>
                        </div>
                        <form class="w-100 justify-content-end text-center mt-4" action="/detail" method="POST">
                            @csrf
                            <input type="hidden" name="game_id" value="{{ $game->game_id }}">
                            <input type="hidden" name="kategori_id" value="{{ $game->kategori_id }}">
                            <button type="submit" name="submit" class="w-75 btn btn-outline-light">Detail</button>
                        </form>
                        </div>
            
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <div class=" col-lg-4">
            <div class="d-flex">
                <h4 class="w-50 fw-bold text-light">Your Comment</h4>
                <a class="w-50 text-end text-decoration-none" href="/komentar">Other</a>
            </div>
            @php $komen = DB::table('komentars')->where('user_id', $data->user_id)->paginate(3); @endphp
            @foreach ($komen as $kom)
                <div class="mt-3 text-light">
                    <p class="fw-bold m-0">{{ $kom->created_at }}</p>
                    
                    <p>"{{ $kom->komentar }}"</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="w-100 d-flex justify-content-center mt-5 text-light ">
    <div class="layer ">
        <h4>Other Information</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit assumenda labore quis maiores error culpa eveniet saepe quaerat molestias aspernatur soluta maxime vero ex, in commodi minus minima ducimus sequi.</p>
    </div>

</div>


@endsection