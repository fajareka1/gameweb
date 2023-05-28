@extends('basic.main')
@section('konten')
@include('komponen.navback')
    <div class="w-100 d-flex justify-content-center">
        <div class="layer d-flex justify-content-center">
            <h1>Top</h1>
            <div class="d-flex row">
                @foreach($data as $item)
                @php $path = Storage::url('imgs/'.$item->poster_file); @endphp

                    <div class="game rounded col-md-3 bg-dark m-2 mb-5 mt-5" style="width: 16rem;">
                        <img src="{{ url($path) }}"alt="" srcset="" class="rounded-top" width="100%" height="350px">
                        <div class="ms-2">
                            <h5 class="fw-bold text-light  mt-1" style="height: 10%">{{ $item->name_game }}</h5>
                            <div class="d-flex" style="height: 10%">
                            <div>
                                <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary">$00.000</p>
                                <p class="fw-bold text-light m-0">$00.000</p>
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
    </div>
@endsection
