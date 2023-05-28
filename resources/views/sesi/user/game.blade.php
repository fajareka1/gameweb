@extends('basic/main')
@include('komponen.usernavbar')
@include('komponen/navushome')

@section('konten')
@php $path = Storage::url('imgs/'.$dataku->video_file); @endphp
@php $path2 = Storage::url('imgs/'.$dataku->banner_file); @endphp
@php $path3 = Storage::url('imgs/'.$dataku->gameplay_file); @endphp


<div class="w-100 d-flex justify-content-center">
    <div class="layer">
        <form action="/favorit" method="post" class="w-100 text-end">
            @csrf
            <input type="hidden" name="game_id" value="{{ $dataku->game_id }}">
            <input type="hidden" name="user_id" value="{{ $user_id->user_id }}">
            <input type="hidden" name="kategori_id" value="{{ $dataku->kategori_id }} col-md-6">
            <button type="submit" name="submit" class="btn btn-outline-light">Favorit</button>
        </form>
    </div>
</div>
    <div class="w-100 d-flex justify-content-center" >

        <div class="gameinfo d-flex justify-content-center">
            <div class="d-flex row w-100 justify-content-center mb-4 mt-4" >
                <div class="col-lg-7 rounded play me-1 p-2" style="background-color: rgb(32, 32, 32)">
                    <video controls autoplay loop class="w-full" src="{{ url($path) }}" alt="" srcset="" width="100%" height="auto"></video>
                    <div class=" mt-2 w-100 d-flex justify-content-center">
                        <img class="" src="{{ url($path3) }}" alt="" srcset="" width="100%" height="auto">
                    </div>
    
    
                </div>
                <div class="col-lg-4 rounded  p-2 ms-1 text-light " style="background-color: rgb(32, 32, 32)">
                    <img class="" src="{{ url($path2) }}" alt="" width="100%" height="auto" srcset="">
                    <h3 class="w-75 mt-3">{{ $dataku->name_game }}</h3>
                    <p class="w-100 text-start">Deskripsi : {{ $dataku->deskripsi_game }}</p>
                    <div class="d-flex mt-5 m-4">
                        @foreach ($kategori as $item)
                            <div class="genre bg-dark m-1 text-center w-auto"><p class="p-1 text-light fw-bold">{{ $item->kategori_name }}</p></div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    
    </div>

        <div class="detail ">



            <div class="card text-light w-100" style="background-color: rgb(32, 32, 32)">
                <img src="img/gowasli.png" class="card-img w-100" alt="...">
                <div class="ms-4 card-img-overlay">
                    <h5 class="card-title">Buy now</h5>
                    <p class="card-text text-decoration-line-through fst-italic">$00.000</p>
                    <p class="card-text fw-bold ">$00.000</p>
                    <div class="pt-4 mt-5 w-100 d-flex justify-content-end pe-4">
                        <form action="/addcart" method="post" class="w-100 text-end">
                            @csrf
                            <input type="hidden" name="game_id" value="{{ $dataku->game_id }}">
                            <input type="hidden" name="user_id" value="{{ $user_id->user_id }}">
                            <input type="hidden" name="kategori_id" value="{{ $dataku->kategori_id }} col-md-6">
                            <button class="btn btn-primary w-15 pe-3 ps-3" name="submit" type="submit">Add to cart</button>
                        </form>
                    </div>
                </div>
              </div>

            <div class="w-100 rounded mt-4 deskripsi text-light">
                <h2 class="m-5 pt-4 ">Description</h2>
                <p class="m-5">
                    {{ $dataku->deskripsi_game }}
                </p>
            </div>

            
            <div class="w-100 rounded mt-4 deskripsi text-light">
                <h2 class="m-5 pt-4 ">System Required</h2>
                <p class="m-5">
                    {{ $dataku->deskripsi_game }}
                </p>
            </div>

            <div class="w-100 mt-4">
                <img class="w-100" src="img/yelan2.png" alt="" srcset="">
            </div>

                    

            <div id="carouselExampleAutoplaying" class="carousel slide w-100 mt-3 mb-5" data-bs-ride="carousel" style="height: 400px">
                <div class="carousel-inner">
                    <div class="carousel-item active" >
                        <div class="w-100 rounded mt-4 h-100 text-light deskripsi2">
                            <div class="w-100 d-flex p-4">
                                <img class="rounded-circle " src="img/sakamoto.jpeg" alt="" srcset="" width="100px" height="auto">
                                <h4 class="h-100 m-4 text-center">nama</h4>
            
                            </div>
                            <div class="text-center p-4 pb-5 m-3 mb-5">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos animi necessitatibus, repudiandae ex itaque voluptates nisi tenetur, qui alias cupiditate adipisci incidunt sunt corrupti, voluptatibus quia illo? Aliquid, adipisci laboriosam?</p>
                            </div>
                        </div>
                      </div>
                    @foreach ($komentar as $komen)
                    <div class="carousel-item " v >
                        <div class="w-100 rounded mt-4 h-100 text-light deskripsi2">
                            <div class="w-100 d-flex p-4">
                                <img class="rounded-circle " src="img/sakamoto.jpeg" alt="" srcset="" width="100px" height="auto">
                                <h4 class="h-100 m-4 text-center">nama</h4>
            
                            </div>
                            <div class="text-center p-4 pb-5 m-3 mb-5">
                                <p>{{ $komen->komentar }}{{ $komen->komentar }}</p>
                            </div>
                        </div>
                      </div>
                      @endforeach
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                </div>
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> --}}
              </div>


            <div class="w-100 rounded d-flex justify-content-center deskripsi2 text-light h-50">
                <div class="w-75 mt-5 mb-5">
                    <form action="/komentar" method="post">
                        @csrf
                        <h2>Your Opinions</h2>
                        <input type="hidden" name="game_id" value="{{ $dataku->game_id }}">
                        <input type="hidden" name="user_id" value="{{ $user_id->user_id }}">
                        <input type="hidden" name="kategori_id" value="{{ $dataku->kategori_id }} col-md-6">
                        <textarea class="form-control mt-3 pb-5  text-light" name="komentar" style="background-color: rgb(32, 32, 32)" placeholder="isi pendapatmu......"></textarea>
                        <input class="btn btn-primary mt-3" type="submit" value="Submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    </form>
                </div>
                
            </div>
        </div>

  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Terkirim cuyyyy
          homesate
        </div>
        <div class="modal-footer p-3 mt-1">
        </div>
      </div>
    </div>
  </div>


{{-- guna tapi ndak penting --}}






@endsection
