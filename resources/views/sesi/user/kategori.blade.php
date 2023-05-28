@extends('basic.main')
@include('komponen.usernavbar')
@include('komponen.navushome')

@section('konten')
<div class="w-100 d-flex justify-content-center mt-5 ">
  <div class="rounded text-light" style="width: 80%"><h1 class="m-3">TOP CATEGORY</h1></div>
</div>



<div class="w-100 d-flex justify-content-center ">
    {{-- bagisan kategori atas --}}
    <div class="kontainer2 d-flex justify-content-center p-2 rounded" style=" ">
        <form action="/kategori/more" method="post" class="card-kategori m-1 oniclick">
          @csrf
          <input type="hidden" name="kategori_id" value="{{ $action->kategori_id }}">
              <div class="card text-bg-dark w-100">
                  <button type="submit" class=" w-100 h-100 btn position-absolute" name="submit" style="background: linear-gradient(rgba(0,0,0,0), rgb(0,0,139) 100%">
                    <h3 class="card-title mt-5 pt-5 ">{{ $action->kategori_name }}</h3>
                  </button>
                  <img src="img/rpg.png" class="card-img " alt="..." width="100%" height="auto">
              </div>
        </form>

        <form action="/kategori/more" method="post" class="card-kategori m-1">
          @csrf
          <input type="hidden" name="kategori_id" value="{{ $simulator->kategori_id }}">
              <div class="card text-bg-dark w-100">
                  <button type="submit" class="z-2 w-100 h-100 btn opacity-15 position-absolute" name="submit" style="background: linear-gradient(rgba(0,0,0,0), rgb(118, 0, 0) 100%">
                      <h3 class="card-title mt-5 pt-5 ">{{ $simulator->kategori_name }}</h3>
                  </button>
                  <img src="img/visual_novel.png" class="card-img " alt="..." width="100%" height="auto">
              </div>
        </form>

        <form action="/kategori/more" method="post" class="card-kategori m-1">
          @csrf
          <input type="hidden" name="kategori_id" value="{{ $fps->kategori_id }}">
              <div class="card text-bg-dark w-100">
                  <button type="submit" class="z-2 w-100 h-100 btn opacity-15 position-absolute" name="submit" style="background: linear-gradient(rgba(0,0,0,0), rgb(184,134,11) 100%">
                    <h3 class="card-title mt-5 pt-5 ">{{ $fps->kategori_name }}</h3>
                  </button>
                  <img src="img/adventure.png" class="card-img " alt="..." width="100%" height="auto">
              </div>
        </form>

        <form action="/kategori/more" method="post" class="card-kategori m-1">
          @csrf
          <input type="hidden" name="kategori_id" value="{{ $rpg->kategori_id }}">
              <div class="card text-bg-dark w-100">
                  <button type="submit" class="z-2 w-100 h-100 btn opacity-15 position-absolute" name="submit" style="background: linear-gradient(rgba(0,0,0,0), rgb(0,100,0) 100%">
                    <h3 class="card-title mt-5 pt-5 ">{{ $rpg->kategori_name }}</h3>
                  </button>
                  <img src="img/survival.png" class="card-img " alt="..." width="100%" height="auto">
              </div>
        </form>

    </div>

</div>


<div class="w-100 d-flex justify-content-center ">

    {{-- bagian bawahnya --}}
    <div class="kontainer2 d-flex justify-content-center">

      {{-- sidebarr --}}
        <div class="flex-shrink-0 w-25 p-3 bg-dark rounded m-3" style="width: 400px;">
          <h3 class="fw-bold w-100 text-center text-light mb-4">KATEGORI</h3>
          <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <button class="fs-4 btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                Top
              </button>
              <div class="collapse" id="home-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3 small">
                  @foreach ($kakangku as $budi)
                    <li>
                      <a href="#" class="link-light d-inline-flex text-decoration-none rounded m-0">
                        <form action="/kategori/more" method="post" class="card-kategori ">
                          @csrf
                          <input type="hidden" name="kategori_id" value="{{ $budi->kategori_id }}">                
                          <button type="submit" class="bg-dark text-light border-dark btn p-0 fw-light m-0" name="submit" >{{ $budi->kategori_name }}</button>
                        </form>
                      </a>
                    </li>
                  @endforeach
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <button class="fs-4 btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light" data-bs-toggle="collapse" data-bs-target="#all-collapse" aria-expanded="false">
                All
              </button>
              <div class="collapse" id="all-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3 small">
                  @foreach ($dataku as $budi)
                  <li>
                    <a href="#" class="link-light d-inline-flex text-decoration-none rounded m-0">
                      <form action="/kategori/more" method="post" class="card-kategori ">
                        @csrf
                        <input type="hidden" name="kategori_id" value="{{ $budi->kategori_id }}">                
                        <button type="submit" class="bg-dark text-light border-dark btn p-0 fw-light m-0" name="submit" >{{ $budi->kategori_name }}</button>
                      </form>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </li>

          </ul>
        </div>
      {{-- akhirsidebarr --}}
      <div class="d-flex row w-75 justify-content-center mt-2 mb-2">
        <h3 class="text-light w-100 text-center">RECOMENDED GAME</h3>
        @foreach($data as $item)
        @php $path = Storage::url('imgs/'.$item->poster_file); @endphp

          <div class="game rounded bg-dark m-2 p-3 col-lg-3">
              <img class="w-100 m-0"  src="{{ url($path) }}" alt="" height="300px" srcset="">
              <div class="ms-2">
                  <h4 class="fw-bold text-light">{{ $item->name_game }}</h4>
                  <div class="d-flex">
                    <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary">$00.000</p>
                    <p class="fw-bold text-light">$00.000</p>
                  </div>
                  <form class="w-100 " action="/detail" method="POST">
                    @csrf
                    <input type="hidden" name="game_id" value="{{ $item->game_id }} col-md-6">
                    <input type="hidden" name="kategori_id" value="{{ $item->kategori_id }} col-md-6">
                    <button type="submit" name="submit" class=" btn btn-outline-light">Detail</button>
                  </form>
              </div>
          </div>
        @endforeach


      </div>

    </div>


</div>






<script>

function myFunction()
{
    document.getElementById('foo').setAttribute("class", "style2");
}

</script>

@endsection