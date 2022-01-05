<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Registrarse en PizzaNet</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
  </head>
  <body class="p-3 mb-2 bg-warning text-dark">

  <div class="container">
  <div class="row">
    <div class="col-sm">
      <form class="form-signin" action="" method="POST">
  <img src="https://i.ibb.co/0htFpJK/logo.png" class="rounded mx-auto d-block" alt="logo" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal text-center">Registrate en PizzaNet</h1>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo electronico</label>
      <input type="email" name="correo" class="form-control" id="inputEmail4" placeholder="Digite su correo electronico">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Confirmar correo electronico</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Digite de nuevo su correo electronico">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" name="contrasena" class="form-control" id="inputPassword4" placeholder="Digite una contraseña">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirmar contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Digite de nuevo la contraseña">
    </div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Nombre de usuario</label>
    <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Digite su numero de contacto">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Numero de contacto</label>
    <input type="text" name="telefono" class="form-control" id="formGroupExampleInput" placeholder="Digite su numero de contacto">
  </div>
  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input type="text" name="direccion1" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Direccion 2</label>
    <input type="text" name="direccion2" class="form-control" id="inputAddress2" placeholder="Apartamento, piso, etc.">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" name="ciudad" class="form-control" id="inputCity" placeholder="Digite su ciudad de residencia">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Sexo</label>
      <select id="inputState" name="sexo" class="form-control">
        <option selected>Elegir...</option>
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        No soy un robot
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-danger">Registrarse</button>
</form>

<?php

include("registrobase.php");

echo "<br>";
echo "<br>";
echo "<a class='btn btn-lg btn-danger btn-block' href='../../index.php' role='button'>Volver a inicio</a>";
echo "</div>";
echo "</div>";

?>
    </div>
  </div>
</div>
   
</body>
</html>