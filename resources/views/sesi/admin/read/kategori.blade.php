@extends('basic.main')
@include('komponen.adminnav')

@section('konten')

<h1>saya suka keqingggg</h1>
<div class="w-100 d-flex justify-content-center mb-3">
    <div class="w-75 d-flex">
        <h3 class="w-50 text-light ms-3 ps-2">Game List</h3>
        <div class="w-50 text-end me-3 pe-2">
            <a class="btn btn-outline-light ms-2" href="/create/game"> Tambah Data</a>
        </div>

    </div>
</div>
<div class="w-100 d-flex justify-content-center mb-3">
    <div class="layer row justify-content-center gap-1">
        <button class="btn btn-outline-light col-lg-2 m-0 p-0 mb-1" style="width: 17rem;">
                <a type="submit" id="btnall" href="/gamelist"  class="p-0  btn-outline-light text-decoration-none text-light  w-100"  >all</a>
        </button>
        @foreach($kategori as $item)
            <form action="/gamelist/kategori" method="post" class="col-lg-2 m-0 p-0" style="width: 17rem;">
                @csrf
                <input type="hidden" name="kategori_id" value="{{ $item->kategori_id }}">
                <button type="submit" name="submit"  class="btn btn-outline-light mb-1 w-100"  >{{ $item->kategori_name }}</button>
            </form>
        @endforeach

    </div>
</div>
<div class="w-100 d-flex justify-content-center " id="all">
    <div class="layer d-flex m-0 row gap-1 justify-content-center">
        @foreach($data as $item2)
        @php $path = Storage::url('imgs/'.$item2->poster_file); @endphp
        <div class="card p-0 col-lg-2 " style="width: 17rem;">
            <img src="{{ url($path) }}" class="card-img-top" alt="..." height="400px">
            <div class="card-body">
              <p class="card-text">{{ $item2->name_game }}</p>
              <div class="d-flex gap-1">
                <form action="gamelist/delete" class=" w-100" method="post">
                    @csrf
                    <input type="hidden" name="game_id" value="{{ $item2->game_id }}">
                    <button onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="w-100 me-1 btn btn-outline-danger" name="submit" type="submit">Hapus</button>
                </form>
                <form action="/view" class="w-100" method="post">
                    @csrf
                    <input type="hidden" name="game_id" value="{{ $item2->game_id }}">
                    <button onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="w-100 me-1 btn btn-outline-primary" name="submit" type="submit">view</button>
                </form>
                <form action="/ingame" class="w-100" method="post">
                    @csrf
                    <input type="hidden" name="game_id" value="{{ $item2->game_id }}">
                    <button onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="w-100 me-1 btn btn-outline-warning" name="submit" type="submit">edit</button>
                </form>                                                                                                     
              </div>
            </div>
        </div>
        @endforeach

    </div>
</div>


<script>
    const 
</script>
@endsection