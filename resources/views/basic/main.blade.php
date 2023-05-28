<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/mycss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    .xep::-webkit-scrollbar{
      display: none;
    }
    .xep{
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    .overlay{
      opacity: 0;
      background-color: rgba(0, 0, 0, 0);
      cursor: pointer;
    }
    .overlay:hover{
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 1;
        animation:  all .7s ease-in-out;

    }
    .layer{
        width: 79.5%;
    }
    .layer2{
        width: 80%;
    }
    .carddalam{
      background-color: rgb(31, 31, 31);
    }
    .item:hover{
      background-color: rgb(170, 170, 170);
      color: rgb(31, 31, 31);
      animation-duration: .7s;
      animation: all .7s ease-in-out;
    }
    .prev{
      width: 20px;
      height: 20px;
    }
    .prev:hover{
      color: rgb(31, 31, 31);
    }
    .oniclik:hover{
      transform: scale(1.5);
    }


  </style>
  <body class="bg-dark xep">
    @yield('konten')
    
    <div class="h-25 mt-5 position-relative  w-100 deskripsi2 ">

      <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>  