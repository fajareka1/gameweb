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
    *, html, body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    .xep::-webkit-scrollbar{
      display: none;
    }
    .xep{
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

        /* konten paralax */
.hitam{
    background-color: black;
    position: fixed;
    opacity: 30%;
    width: 100%;
    height: 100vh;
    z-index: 3;
}
.paralax{
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    width: 100%;
    height: 100vh;
}
.atas{
    background-image: url('img/kang.jpg');
}
.tengah{
    background-image: url('img/ku.jfif');
}
.bawah{
    background-image: url('img/kang.jpg');
}
.lagi{
    background-image: url('img/ki.jfif');
}
.coy{
    background-image: url('img/kang.jpg');
}
.cuy{
    background: linear-gradient(rgba(32, 32, 32, 0), rgb(0, 0, 0));
}
@font-face {
    font-family: "gibli";
    src: url('Ghibli.otf');
  }
  .abg{
    width: 100%;
    height: auto;
    text-align: center;
    color: white;
    position: relative;
    z-index: 4;

}
.fot{
  margin-top: 9%;
}
.tl{
    font-family: gibli;
    font-size: 8em;

}
.tit{
    font-size: 4em;
    padding-top: 20%;
}
.diver{
    width: 100%;
    display: flex;
    justify-content: center;
}
.des{
    width: 60%;
    font-size: 1em;
}
.tle{
    font-size: 4em;
    padding-top: 7%;
}
.clip{
    padding-top: 2%;
    width: 640px;
    height: 360px;
}
.trailer{
    display: flex;
    width: 80%;
    margin-left: 10%;
    height: auto;
}
.talis{
    padding-top: 2%;
    text-align: left;
    margin-left: 2%;
}
.tulus{
    text-align: right;
    display: grid;
    width: 78%;
    margin-right: 2%;
}
  </style>
  <body class="bg-black">
    @yield('konten')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>  