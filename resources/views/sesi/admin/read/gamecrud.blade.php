@extends('basic.main')
@include('komponen.adminnav')

@section('konten')
<h1>saya suka keqingggg</h1>
<div class="w-100 d-flex justify-content-center mb-3">
    <div class="layer d-flex">
        <h3 class="w-50 text-light ps-2 ms-5">Game List</h3>
        <div class="w-50 text-end pe-2 me-5">
            <a class="btn btn-outline-light ms-2" href="/create/game"> Tambah Data</a>
        </div>

    </div>
</div>
<div class="w-100 d-flex justify-content-center mb-3">
    <div class="layer row justify-content-center gap-1">
        <form action="/gamelist/kategori" method="post" class="col-lg-2 m-0 p-0" style="width: 17rem;">
                <input type="hidden" name="kategori_id" value="kembali">
                <button type="submit" id="btnall"  class="btn btn-outline-light mb-1 w-100"  >all</button>
        </form>
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
        @foreach($game as $item2)
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
                    <button class="w-100 me-1 btn btn-outline-primary" name="submit" type="submit">view</button>
                </form>
                <form action="/ingame" class="w-100" method="post">
                    @csrf
                    <input type="hidden" name="game_id" value="{{ $item2->game_id }}">
                    <button class="w-100 me-1 btn btn-outline-warning" name="submit" type="submit">edit</button>
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