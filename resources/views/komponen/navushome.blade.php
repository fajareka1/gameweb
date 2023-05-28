@php 
use Illuminate\Support\Facades\DB;

$id = auth()->user()->id;
if(auth()->user()){

  $foto = DB::table('profils')->where('user_id', $id)->first();
  $path = Storage::url('imgs/'.$foto->profil_img);

}else {
  $path = Storage::url('imgs/fajar.png');
  
}

@endphp


<nav class="p-3 mb-3 bg-dark d-flex justify-content-center  sticky-top ">

      <div class="d-flex flex-wrap align-items-center justify-content-center  navbar2">


        <form class=" d-flex mb-2 me-2 mt-2 " role="search " action="/game/cari" method="get">
            <input type="search" name="cari" class="form-control bg-dark text-light me-1" value="" aria-label="Search">
            <button class="btn btn-outline-light d-flex" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-light mt-1 me-2" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>Cari</button>
        </form>

        <ul class="  nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-end mb-md-0 ">
          <li><a href="/user" class="nav-link px-2 link-light">Home</a></li>
          <li><a href="/kategori" class="nav-link px-2 link-light">Category</a></li>
          <li><a href="/discount" class="nav-link px-2 link-light">Discount</a></li>
          <li><a href="/cart" class="nav-link px-2 link-light">Cart</a></li>
        </ul>

        <div class="dropdown  drop justify-content-end d-flex">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle me-3" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ url($path) }}" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu  ">
            <li>   <a class="dropdown-item" href="/profil">Profil</a></li>
            <li>
            <li>   <a class="dropdown-item" href="#">Settings</a></li>

            </li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/sesi/logout">Sign out</a></li>
          </ul>
        </div>


       
      </div>

    </nav>