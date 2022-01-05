<?php

    include_once 'includes/user_session.php';
    include_once 'includes/user.php';
    include_once 'includes/db.php';
    $db = new DB();
    $usuario = new User();

    $user_session = new UserSession();

     if(isset($_SESSION['user'])){

        $usuario->setUser($_SESSION['user']);



     }

      $query=$db->connect();
      $idpizza = "1";
      $nombre = '';
      $tipomasa ='';
      $tamaño ='';
      $numporciones ='';
      $basepizza ='';

  $query = $db->connect()->prepare('SELECT * FROM pizza WHERE codigo = :id');
  $query->execute(['id' => $idpizza]);

  foreach ($query as $pizzas) {
    $nombre = $pizzas['nombre'];
    $tipomasa =$pizzas['tipomasa'];
    $tamaño =$pizzas['tamaño'];
    $numporciones =$pizzas['numporciones'];
    $basepizza =$pizzas['basepizza'];


  }





?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Pagina de la pizza</title>

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
  <body class="bg-warning text-dark">

 <div class="sticky-top">
    <div class="p-4 bg-white">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <img src="https://i.ibb.co/0htFpJK/logo.png" class="rounded float-top" alt="Logo PizzaNet" width="60" height="50">
          </li>
          <?php
          if(isset($_SESSION['user'])){
            echo "<li class='nav-item'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='menu.php'><u>MENU</u></a>";
            echo "</li>";

            echo "<li class='nav-item hidden-sm-down'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='../HTML/tiendas.html'><u>NUESTRAS TIENDAS</u></a>";
            echo "</li>";
          
            echo "<li class='nav-item hidden-sm-down'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='perfil.php'><u>";
            echo $usuario->getNombre();
            echo "</u></a>";
            echo "</li>";

            echo "<li class='nav-item hidden-sm-down'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='includes/logout.php'><u>CERRAR SESION</u></a>";
            echo "</li>";
          }
          else
          {
            echo "<li class='nav-item'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='menu.php'><u>MENU</u></a>";
            echo "</li>";

            echo "<li class='nav-item hidden-sm-down'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='../HTML/tiendas.html'><u>NUESTRAS TIENDAS</u></a>";
            echo "</li>";

            echo "<li class='nav-item hidden-sm-down'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='user_validacion.php'><u>INGRESAR</u></a>";
            echo "</li>";

            echo "<li class='nav-item hidden-sm-down'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='registrarse.php'><u>REGISTRARSE</u></a>";
            echo "</li>";
          }
          ?>
          <!--<li class="nav-item">
            <a class="nav-link text-danger font-weight-bold mt-2" href="menu.php"><u>MENU</u></a>
          </li>
          <li class="nav-item hidden-sm-down">
            <a class="nav-link text-danger font-weight-bold mt-2" href="codigoPizzaNet/HTML/tiendas.html"><u>NUESTRAS TIENDAS</u></a>
          </li>
          <li class="nav-item hidden-sm-down">
            <a class="nav-link text-danger font-weight-bold mt-2" href="codigoPizzaNet/HTML/domicilio.html"><u>PIDE TU DOMICILIO</u></a>
          </li>
          <li class="nav-item hidden-sm-down">
            <a class="nav-link text-danger font-weight-bold mt-2" href="codigoPizzaNet/HTML/ingresar.html"><u>INGRESAR</u></a>
          </li>
          <li class="nav-item hidden-sm-down">
            <a class="nav-link text-danger font-weight-bold mt-2" href="codigoPizzaNet/HTML/registrarse.html"><u>REGISTRARSE</u></a>
          </li>-->
          <li class="nav-item hidden-sm-down">
            <img src="https://i.ibb.co/mX5cdg7/carrito.png" class="rounded float-top" alt="Logo PizzaNet" width="45" height="40">   
          </li>
        </ul>
    </div>
    </div>

    <div class="p-1 bg-warning">  
    </div>

    <div class="p-3 mb-2 bg-danger">
    </div>

  </div>



 <div class="container">
  <div class="row">
    <div class="col-sm">
      <form class="form-signin" action="" method="POST">
        
  <img src="https://i.ibb.co/YXZRdrm/combopareja.jpg" class="rounded mx-auto d-block img-fluid" width="50%" height="50%">
  <h1 class="h3 mb-3 font-weight-normal text-center">Combo familiar</h1>

  <h5 >Pizza de tamaño grande, del sabor que prefiera el cliente. Se incluye gaseosa de 3L del sabor de preferencia del cliente.</h5>

  <div class="p-1 bg-white">  
</div>
<div class="p-3 mb-2 bg-danger">
</div>

  <div class="form-group col-md-6">
      <label for="inputState">Escoje la pizza de tu preferencia</label>
      <select id="inputState" name="bebida" class="form-control">
        <?php
        $query = $db->connect()->prepare('SELECT * FROM pizza');
        $query->execute();

        foreach ($query as $pizzas) {
          echo "<option>". $pizzas['nombre']."</option>";
          }
        ?>
       <!-- <option>Gaseosa personal</option>
        <option>Gaseosa 3L</option>
        <option>Limonada</option>
        <option>Jugo Hit personal</option>
        <option>Jugo hit 1.5 L</option>-->
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">Escoje tu bebida</label>
      <select id="inputState" name="bebida" class="form-control">
        <option>Elegir...</option>
        <?php
        $query = $db->connect()->prepare('SELECT * FROM bebidas');
        $query->execute();

        foreach ($query as $bebidas) {
          echo "<option>". $bebidas['nombre']."</option>";
          }
        ?>
       <!-- <option>Gaseosa personal</option>
        <option>Gaseosa 3L</option>
        <option>Limonada</option>
        <option>Jugo Hit personal</option>
        <option>Jugo hit 1.5 L</option>-->
      </select>
    </div>


<button type="submit" href="factura.php" class="btn btn-danger">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg>
    Pedir

  </button>

  <a style="margin-left: 1%;" href="combos.php" class="btn btn-danger">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>
    Cancelar

  </a>
</form>

  
    </div>
  </div>
</div>
<br>


  </div>
  <br>

  <?php
      include_once("factura.php");
  ?>

  <footer class="p-4 bg-secondary">
   <div class="container">
      <div class="row justify-content-center mb-3">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-light font-weight-bold" title="Politicas de privacidad" href="../HTML/politicas.html">Politicas de privacidad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light font-weight-bold" title="Contactanos" href="../HTML/contactanos.html">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light font-weight-bold" title="Reclamos" href="../HTML/reclamos.html">Reclamos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light font-weight-bold" title="Aviso legal" href="../HTML/terminos.html">Términos y condiciones</a>
          </li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a title="Twiter" href="https://twitter.com/?lang=es">
              <img src="https://i.ibb.co/NtNDVBN/iconotwiter.png" alt="twitter" width="30em" height="30em" />
            </a>
          </li>
          <li class="nav-item">
              <br>
          </li>
          <li class="nav-item">
            <a title="Instagram" href="https://www.instagram.com/pizzanetcol/">
              <img src="https://i.ibb.co/ww7RNjF/iconoinstagram.png" alt="instagram" width="30em" height="30em" />
            </a>
          </li>
          <li class="nav-item">
            <a title="Facebook" href="https://www.facebook.com/pizzanetcol">
              <img src="https://i.ibb.co/sPW3cXw/iconofacebook.png" alt="facebook" width="30em" height="30em" />
            </a>
          </li>
          <li class="nav-item">
            <a title="linkedin" href="www.linkedin.com/in/pizza-net-343537201">
              <img src="https://i.ibb.co/KK5H0sn/iconolinkedin.png" alt="linkedin" width="30em" height="30em" />
            </a>
          </li>
        </ul>
      </div>
   </div>
 </footer>
   
</body>
</html>