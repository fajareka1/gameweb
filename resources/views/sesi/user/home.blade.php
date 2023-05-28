@extends('basic.main')
@include('komponen.usernavbar')
@include('komponen.navushome')

@section('konten')
<div class="w-100 d-flex justify-content-center">

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner gambar ">
          <div class="carousel-item active ">
            <img src="img/raden2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/zongli2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/venti2.png" class="d-block w-100" alt="... ah ah ah ah ah aha ah">
          </div>
        </div>
        <button class="carousel-control-prev mt-5" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next mt-5" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="w-100 d-flex justify-content-center mt-5">
  <div class="text recomended">
      <h1 class="text-light ms-2 fw-light">RECOMENDED</h1>
  </div>
</div>

<div class="w-100 d-flex justify-content-center">
  <div id="carouselExampleFade" class="w-100 carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="d-flex justify-content-center carousel-item active">
          <div class="layer d-flex justify-content-center ">
            @foreach($games as $item)

              <div class="game rounded m-2 mb-5 mt-5 " style="width: 16rem;">
                  <img src="imgs/{{ $item->poster_file }}" alt="" srcset="" class="rounded-top" width="100%" height="320px">
                  <div class="ms-2">
                      <h5 class="fw-bold text-light  mt-1" style="height: 10%">{{ $item->name_game }}</h5>
                      <div class="d-flex" style="height: 9%">
                        <div>
                          <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary m-0">$00.000</p>
                          <p class="fw-bold text-light m-0">$00.000</p>
                        </div>
                        <form class="w-100 justify-content-center text-center mt-2" action="/detail" method="POST">
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
        <div class="d-flex justify-content-center carousel-item">
          <div class="layer d-flex justify-content-center">
            @foreach($game as $item)

              <div class="game rounded  m-2 mb-5 mt-5  " style="width: 16rem;">
                  <img src="imgs/{{ $item->poster_file }}" alt="" srcset="" class="rounded-top" width="100%" height="320px">
                  <div class="ms-2">
                      <h5 class="fw-bold text-light  mt-1" style="height: 10%">{{ $item->name_game }}</h5>
                      <div class="d-flex" style="height: 9%">
                        <div>
                          <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary m-0">$00.000</p>
                          <p class="fw-bold text-light m-0">$00.0070</p>
                        </div>
                        <form class="w-100 justify-content-center text-center mt-2" action="/detail" method="POST">
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
        <div class="d-flex justify-content-center carousel-item ">
          <div class="layer d-flex justify-content-center">
            @foreach($games as $item)

              <div class="game rounded m-2 mb-5 mt-5 " style="width: 16rem;">
                  <img src="imgs/{{ $item->poster_file }}" alt="" srcset="" class="rounded-top" width="100%" height="320px">
                  <div class="ms-2">
                      <h5 class="fw-bold text-light  mt-1" style="height: 10%">{{ $item->name_game }}</h5>
                      <div class="d-flex" style="height: 9%">
                        <div>
                          <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary m-0">$00.000</p>
                          <p class="fw-bold text-light m-0">$00.00</p>
                        </div>
                        <form class="w-100 justify-content-center text-center mt-2" action="/detail" method="POST">
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
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="w-100 d-flex justify-content-center">
    <div class="layer d-flex ">
      <div class="w-50 position-relative m-1">
        <img class="w-100 h-auto rounded" src="img/ghost.jpg" alt="" srcset="">
        <div class="overlay rounded position-absolute bottom-0 end-0 top-0 start-0 w-100 h-100">
          <div class="bg-black opacity-25 w-100 h-100"></div>
          <div class="position-absolute top-50 start-50 translate-middle">
            <img class="" src="img/gowlog.png" alt="" width="300px" srcset="">
          </div>
        </div>
      </div>
      <div class="w-50 position-relative m-1">
        <img class="w-100 h-auto rounded" src="img/ghost.jpg" alt="" srcset="">
        <div class="overlay rounded position-absolute bottom-0 end-0 top-0 start-0 w-100 h-100">
          <div class="bg-black opacity-25 w-100 h-100"></div>
          <div class="position-absolute top-50 start-50 translate-middle">
            <img class="" src="img/gowlog.png" alt="" width="300px" srcset="">
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- diskonnn --}}
<div class="w-100 d-flex justify-content-center mt-5">

</div>

<div class=" w-100 d-flex justify-content-center mt-1">
    <div class="layer2 rounded d-flex justify-content-center">



      <div id="carouselExampleIndicators" class="w-100 carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="d-flex">
          <div class="w-50">
            <h3 class="text-light fw-light ms-2 mt-2">DISCOUNT</h3>
          </div>
          <div class="w-50 d-flex justify-content-end">
            <button class=" rounded  btn btn-outline-light m-1" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class=" rounded btn btn-outline-light m-1" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon prev" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="carousel-inner w-100">
          <div class="carousel-item active">
            <div class="d-flex justify-content-center w-100">
              
              @foreach($games as $item)

              <div class="game rounded bg-dark  mb-5 mt-5 m-2 " style="width: 16rem;">
                  <img src="imgs/{{ $item->poster_file }}"alt="" srcset="" class="rounded-top" width="100%" height="300px">
                  <div class="ms-2">
                      <h5 class="fw-bold text-light  mt-1" style="height: 10%">{{ $item->name_game }}</h5>
                      <div class="d-flex" style="height: 10%">
                        <div>
                          <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary m-0 mt-3">$00.000</p>
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
          <div class="carousel-item">
              <div class="d-flex justify-content-center">

                @foreach($games as $item)

                <div class="game rounded bg-dark m-2 mb-5 mt-5" style="width: 16rem;">
                    <img src="imgs/{{ $item->poster_file }}" alt="" srcset="" class="rounded-top" width="100%" height="300px">
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
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
              
              @foreach($games as $item)

              <div class="game rounded bg-dark m-2 mb-5 mt-5" style="width: 16rem;">
                  <img src="imgs/{{ $item->poster_file }}"alt="" srcset="" class="rounded-top" width="100%" height="300px">
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
      </div>


    </div>
</div>



<div class="w-100 d-flex justify-content-center mt-4">

  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/gowasli.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/gowasli.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/gowasli.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

</div>

<div class="w-100 d-flex justify-content-center  text-light mt-4">
  <div class="layer row">
      <div class="col-lg-4 border-end">
        <div class=" me-2 d-flex">
          <h4 class=" w-50 ms-2 mt-2">TOP CATEGORY</h4>
          <div class="w-50 text-end">
            <button class="btn btn-outline-light fw-light m-2">More Item</button>
          </div>
        </div>
        @foreach($games as $item)
        <form action="/detail" method="post">
          @csrf
          <input type="hidden" name="game_id" value="{{ $item->game_id }} col-md-6">
          <input type="hidden" name="kategori_id" value="{{ $item->kategori_id }} col-md-6">
          <div class="d-flex m-0 p-0 rounded item">
            <button type="submit" class=" d-flex btn w-100 text-light text-start m-0 p-0" name="submit">
            <img src="imgs/{{ $item->poster_file }}"class="rounded m-2" alt="" width="65px" height="85px" srcset="">
            <div class="m-2">
              <h5 class="fw-light">{{ $item->name_game }}</h5>
              <p>00000</p>
            </div>
            </button>
          </div>
        </form>
        @endforeach
      </div>
      <div class="col-lg-4">
        <div class=" me-2 d-flex">
          <h4 class=" w-50 ms-2 mt-2">TOP CATEGORY</h4>
          <div class="w-50 text-end">
            <button class="btn btn-outline-light fw-light m-2">More Item</button>
          </div>
        </div>
        @foreach($games as $item)
        <form action="/detail" method="post">
          @csrf
          <input type="hidden" name="game_id" value="{{ $item->game_id }} col-md-6">
          <input type="hidden" name="kategori_id" value="{{ $item->kategori_id }} col-md-6">
          <div class="d-flex m-0 p-0 rounded item">
            <button type="submit" class=" d-flex btn w-100 text-light text-start m-0 p-0" name="submit">
            <img src="imgs/{{ $item->poster_file }}"class="rounded m-2" alt="" width="65px" height="85px" srcset="">
            <div class="m-2">
              <h5 class="fw-light">{{ $item->name_game }}</h5>
              <p>00000</p>
            </div>
            </button>
          </div>
        </form>
        @endforeach
      </div>
        <div class="col-lg-4 border-start">
          <div class=" me-2 d-flex">
            <h4 class=" w-50 ms-2 mt-2">TOP CATEGORY</h4>
            <div class="w-50 text-end">
              <button class="btn btn-outline-light fw-light m-2">More Item</button>
            </div>
          </div>
        @foreach($games as $item)
        <form action="/detail" method="post">
          @csrf
          <input type="hidden" name="game_id" value="{{ $item->game_id }} col-md-6">
          <input type="hidden" name="kategori_id" value="{{ $item->kategori_id }} col-md-6">
          <div class="d-flex m-0 p-0 rounded item">
            <button type="submit" class=" d-flex btn w-100 button text-start text-light m-0 p-0" name="submit">
            <img src="imgs/{{ $item->poster_file }}"class="rounded m-2" alt="" width="65px" height="85px" srcset="">
            <div class="m-2">
              <h5 class="fw-light">{{ $item->name_game }}</h5>
              <p>00000</p>
            </div>
            </button>
          </div>
        </form>
        @endforeach
        </div>
  </div>
</div>


{{-- <div class="w-100 d-flex justify-content-center mt-4">

  <div class="card diskon text-bg-dark mt-2">
    <img src="img/transparant_bg.png" class="card-img" alt="...">
    <div class="card-img-overlay">
      <div class="w-100 bg-dark rounded p-3 bg-opacity-75">
        <h3 class="w-100 text-center card-title">NEW GAMES</h3>
        <p class="w-100 text-center card-text">LONTONG SATE.</p>
        <p class="w-100 text-center card-text"><small>Last updated 3 mins ago</small></p>
      </div>
      <div class="w-100 mt-3 rounded bg-dark bg-opacity-75 d-flex justify-content-center ">
        <div class="game rounded bg-dark m-2 mb-5 mt-5">
          <img src="img/tlou.png" alt="" srcset="" width="240px" height="280px">
          <div class="ms-2">
              <h4 class="fw-bold text-light">THE LAST OF US</h4>
              <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary">$00.000</p>
              <p class="fw-bold text-light">$00.000</p>
          </div>
        </div>
        <div class="game rounded bg-dark m-2 mb-5 mt-5">
          <img src="img/tlou.png" alt="" srcset="" width="240px" height="280px">
          <div class="ms-2">
              <h4 class="fw-bold text-light">THE LAST OF US</h4>
              <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary">$00.000</p>
              <p class="fw-bold text-light">$00.000</p>
          </div>
        </div>
        <div class="game rounded bg-dark m-2 mb-5 mt-5">
          <img src="img/tlou.png" alt="" srcset="" width="240px" height="280px">
          <div class="ms-2">
              <h4 class="fw-bold text-light">THE LAST OF US</h4>
              <p class="fw-bold text-decoration-line-through fst-italic fw-light text-secondary">$00.000</p>
              <p class="fw-bold text-light">$00.000</p>
          </div>
        </div>

      </div>
    </div>
  </div>

</div> --}}



{{-- kategori --}}
{{-- <div class="w-100 d-flex justify-content-center mt-5">
  <div class="text recomended">
      <h1 class="text-light">CATEGORY</h1>
  </div>
</div>


<div class="w-100 d-flex justify-content-center">

  <div class="kategori rounded h-auto ">

      <div class="d-flex w-100 justify-content-center mt-4 mb-4  "> --}}

              {{-- bagian ini di loop --}}
        {{-- <div class="rouneded position-block isi m-2  ">
          <img class=" position-absolute z-1" src="img/kategori.png" alt="" srcset="" width="200px" height="200px">
          <h3 class=" text-dark position-absolute p-2 m-3 fw-boled bg-light z-3">AKSI</h3>
        </div>

        <div class="rouneded isi position-block m-2  ">
          <img class=" position-absolute z-1" src="img/kategori.png" alt="" srcset="" width="200px" height="200px">
          <h3 class=" text-dark position-absolute p-2 m-3 fw-boled bg-light z-3">AKSI</h3>
        </div>

        <div class="rouneded isi position-block m-2  ">
          <img class=" position-absolute z-1" src="img/kategori.png" alt="" srcset="" width="200px" height="200px">
          <h3 class=" text-dark position-absolute p-2 m-3 fw-boled bg-light z-3">AKSI</h3>
        </div>


      </div>
  </div>
</div> --}}

{{-- comunity banner --}}


    
@endsection
