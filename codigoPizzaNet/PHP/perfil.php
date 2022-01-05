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
      $correo = $_SESSION['user'];
      $nombre = '';
      $telefono ='';
      $direccion1 ='';
      $direccion2 ='';
      $ciudad ='';
      $sexo ='';

  	$query = $db->connect()->prepare('SELECT * FROM clientes WHERE correo = :correo');
  	$query->execute(['correo' => $correo]);

  	foreach ($query as $clientes) {
    $nombre = $clientes['nombre'];
    $telefono =$clientes['telefono'];
    $direccion1 =$clientes['direccion1'];
    $direccion2 =$clientes['direccion2'];
    $ciudad =$clientes['ciudad'];
    $sexo =$clientes['sexo'];


  }

  $query2 = $db->connect()->prepare('SELECT * FROM facturas WHERE correoclientes = :correo');
  	$query2->execute(['correo' => $correo]);

  	



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>Perfil</title>
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
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='codigoPizzaNet/PHP/menu.php'><u>MENU</u></a>";
            echo "</li>";

            echo "<li class='nav-item hidden-sm-down'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='codigoPizzaNet/HTML/tiendas.html'><u>NUESTRAS TIENDAS</u></a>";
            echo "</li>";

            echo "<li class='nav-item hidden-sm-down'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='codigoPizzaNet/PHP/user_validacion.php'><u>INGRESAR</u></a>";
            echo "</li>";

            echo "<li class='nav-item hidden-sm-down'>";
            echo "<a class='nav-link text-danger font-weight-bold mt-2' href='codigoPizzaNet/PHP/registrarse.php'><u>REGISTRARSE</u></a>";
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

    <h1 style="text-align: center;">Perfil de <?php
  		echo $nombre;
  	?></h1>


<div class="p-1 bg-warning">	
    </div>

    <div class="p-3 mb-2 bg-danger">
    </div>


    <div class="container">
  <div class="row">
    <div class="col-sm">
      

<ul class="list-group">
  <li class="list-group-item bg-red-500">
  	<?php
  		echo "Nombre: ". $nombre;
  	?>
  </li>
  <li class="list-group-item">
  	<?php
  		echo "Correo: ". $correo;
  	?></li>
  <li class="list-group-item">
  	<?php
  		echo "Telefono: ". $telefono;
  	?></li>
  <li class="list-group-item">
  <?php
  		echo "Direccion 1: ". $direccion1;
  	?></li>
  <li class="list-group-item"><?php
  		echo "Direccion 2: ". $direccion2;
  	?></li>
  <li class="list-group-item">
  <?php
  		echo "Ciudad: ". $ciudad;
  	?></li>
  <li class="list-group-item">
  	<?php
  		echo "Sexo: ". $sexo;
  	?></li>
</ul>




    </div>
  </div>
</div>

<div class="p-1 bg-warning">	
    </div>

    <div class="p-3 mb-2 bg-danger">
    </div>

<h1 style="text-align: center;">Facturas de <?php
  		echo $nombre;?></h1>

 <div class="p-1 bg-warning">	
    </div>

    <div class="p-3 mb-2 bg-danger">
    </div>


    <div class="container">
  <div class="row">
    <div class="col-sm">
      

<ul class="list-group">

	<?php

	foreach ($query2 as $facturas) {
    $id = $facturas['id'];
    $fecha =$facturas['fecha'];
    $valor =$facturas['valor'];
    $direccion =$facturas['direccion'];
    echo "<li class='list-group-item bg-red-500'>";
    echo "Factura No. ". $id. ". Con la fecha de: ". $fecha. ". Por un valor de: ".$valor. ". Al destino: ".$direccion;
    echo "</li>";
  }
  	
  

  ?>
</ul>




    </div>
  </div>
</div>

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