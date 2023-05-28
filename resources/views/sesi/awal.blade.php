@extends('basic.main2')
@extends('komponen.navbar')
@section('konten')
<div class="hitam w-100"></div>
<div class="paralax atas">
    <div class="abg">
        <img class="fot mb-4" src="img/mainlogo.png" alt="" srcset="" width="250px" height="250px">
        <h1 class="ti m-0">スタジオジブリ</h1>
        <h2 class="tu">GAME</h2>
    </div>
</div>
<div class="w-100 justify-content-center d-flex">
    <div class=" row bg-dark rounded gap-3 m-1"> 
        <div class="abg col text-start text-light ms-5 me-5">
            <h1 class="tit">What's About</h1>
            <p class="des">Studio Ghibli, Inc. (株式会社スタジオジブリ Kabushiki-gaisha Sutajio Jiburi) adalah sebuah studio film animasi yang berbasis di Koganei, Tokyo, Jepang.[1] Film-film animenya mengandung unsur-unsur provokatif, imajinatif, emosional, dan telah mendapatkan pujian yang luas dari seluruh dunia.
    
                    .</p>
            <a class="btn btn-primary" href="/sesi">Register</a>
    
           
        </div>
        <div class="abg col ms-5 mt-3" >
            <div id="carouselExampleSlidesOnly" class="carousel slide ms-5 ps-4" data-bs-ride="carousel">
                <div class="carousel-inner ms-4">
                  <div class="carousel-item active">
                    <img src="img/ventigp.png" class="d-block" width="740px" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/hutaogp.png" class="d-block" width="740px"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/ventigp.png" class="d-block" width="740px"  alt="...">
                  </div>
                </div>
              </div>
        </div>
    </div>
    
</div>
<div class="paralax bawah d-flex justify-content-center">
        <div class="w-75 abg text-center text-light ">
            <h1 class="tit">What's About</h1>
            <p class="">Studio Ghibli, Inc. (株式会社スタジオジブリ Kabushiki-gaisha Sutajio Jiburi) adalah sebuah studio film animasi yang berbasis di Koganei, Tokyo, Jepang.[1] Film-film animenya mengandung unsur-unsur provokatif, imajinatif, emosional, dan telah mendapatkan pujian yang luas dari seluruh dunia
                    .</p>
            <a class="btn btn-primary" href="/sesi">Register</a>
    
           
        </div>
        

</div>


<div class="w-100 d-flex justify-content-center">
    <h1 class="text-light position-absolute">absiojfog</h1>
    <video autoplay muted loop src="img/godd.mp4" class="video w-100 h-100 "></video>
</div>
<div class="paralax coy">

</div>
<div class="paralax coy">
    <div class=" cuy w-100 h-100">

    </div>

</div>
<div class="h-25 position-relative  w-100 bg-black ">

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0  text-light">© 2022 Company, Inc</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>
    
        <ul class="nav col-md-4 justify-content-end ">
            <li class="nav-item text-light"><a href="#" class="nav-link px-2 ">Home</a></li>
            <li class="nav-item text-light"><a href="#" class="nav-link px-2 ">Features</a></li>
            <li class="nav-item text-light"><a href="#" class="nav-link px-2 ">Pricing</a></li>
            <li class="nav-item text-light"><a href="#" class="nav-link px-2 ">FAQs</a></li>
            <li class="nav-item text-light"><a href="#" class="nav-link px-2 ">About</a></li>
        </ul>
        </footer>
    </div>
  </div>

@endsection