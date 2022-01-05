<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Iniciar sesión en PizzaNet</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center p-3 mb-2 bg-warning text-dark">
    <form class="form-signin" action="" method="POST">

      <img class="mb-4" src="https://i.ibb.co/0htFpJK/logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Inicia sesión a tu perfil de PizzaNet</h1>
        <label for="inputEmail" class="sr-only">Correo electronico</label>
          <input type="email" name="correo" id="inputEmail" class="form-control" placeholder="Digite su correo electronico" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
          <input type="password" name="contrasena" id="inputPassword" class="form-control" placeholder="Digite su contraseña" required>

      <div class="card">
        <div class="card-body text-danger">
          <?php

            if(isset($errorLogin)){
              echo $errorLogin;
            }

          ?>
        </div>
      </div>

      <br>

      <button class="btn btn-lg btn-danger btn-block" type="submit">Ingresar</button>

      
      
  <a class="btn btn-lg btn-danger btn-block" href="registrarse.php" role="button">Registrarse</a>
  <div type="button" class="text-primary" data-toggle="modal" data-target="#exampleModal">
    <u class="nav-link">¿olvidaste tu contraseña?</u>
  </div>
</form>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Escribe el correo de tu cuenta</h5>
        <iframe src="https://pizzanett.000webhostapp.com/index.html"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>