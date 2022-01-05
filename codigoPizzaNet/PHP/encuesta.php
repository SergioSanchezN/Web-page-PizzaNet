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

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Menu</title>


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

    <div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm-10">

      <img src="https://i.ibb.co/0htFpJK/logo.png" class="rounded mx-auto d-block" alt="logo" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal text-center">Diligencia este formulario sobre el uso de internet para ganar cupones.</h1>

  <div class="p-1 bg-white col-md-12"> 
  </div>
<div class="p-1 bg-danger col-md-12">  
</div> 


<form class="row g-3 needs-validation" novalidate>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre(s)</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="Digite su nombre(s)" required>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      Por favor introdusca su nombre.
    </div>
  </div>

  <div class="col-md-8">
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="validationCustom02" placeholder="Digite su apellido" required>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      Por favor introdusca su apellido completo.
    </div>
  </div>

  <div class="col-md-8">
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Edad</label>
    <input type="text" class="form-control" id="validationCustom02" placeholder="Digite su edad" required>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      Por favor introdusca su edad.
    </div>
  </div>

  <div class="col-md-8">
  </div>

  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Sexo</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Elegir...</option>
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
    </select>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      Por favor elija un sexo.
    </div>
  </div>

  <div class="col-md-8">
  </div>

  <div class="col-md-8">
    <label for="validationCustom04" class="form-label">¿Cuenta con conexcion a internet?</label>
  </div>

    <div class="form-check">
    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
    <label class="form-check-label" for="validationFormCheck2">Si</label>
  </div>
  <div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
    <label class="form-check-label" for="validationFormCheck3">No</label>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">Por favor responda esta pregunta para continuar con la encuesta.</div>
  </div>

  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">¿Que dispositivo utiliza para conectarse a internet?</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Elegir...</option>
        <option>SmartPhone</option>
        <option>Laptop</option>
        <option>Computador de mesa</option>
        <option>Tablet</option>
        <option>Otro</option>
    </select>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      Por favor elija un dispositivo.
    </div>
  </div>

  <div class="col-md-7">
  </div>

    <div class="col-md-5">
    <label for="validationCustom04" class="form-label">¿Cuantas horas se conecta usted al dia?</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Elegir...</option>
        <option>De 1 a 3 horas</option>
        <option>De 3 a 6 horas</option>
        <option>De 6 a 12 horas</option>
        <option>Mas de 12 horas</option>
    </select>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      Por favor elija la cantidad de horas.
    </div>
  </div>

  <div class="col-md-12">
    <label for="validationCustom04" class="form-label">¿En que lugares cuenta con conexcion a internet?</label>
  </div>

    <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1">
    <label class="form-check-label" for="validationFormCheck1">Casa</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1">
    <label class="form-check-label" for="validationFormCheck1">Cibercafe</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1">
    <label class="form-check-label" for="validationFormCheck1">Lugar de trabajo o estudio</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
    <label class="form-check-label" for="validationFormCheck1">
      <input type="text" class="form-control" id="validationCustom02" placeholder="Otro">
    </label>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      Por favor elija los lugares donde puede acceder a internet.
    </div>
  </div>


    <div class="col-md-12">
    <label for="validationCustom04" class="form-label">¿Cual es el principal uso que le da a internet?</label>
  </div>

    <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1">
    <label class="form-check-label" for="validationFormCheck1">Buscar informacion</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1">
    <label class="form-check-label" for="validationFormCheck1">Revisar las redes sociales</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1">
    <label class="form-check-label" for="validationFormCheck1">Jugar video juegos</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1">
    <label class="form-check-label" for="validationFormCheck1">Para estudiar</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1">
    <label class="form-check-label" for="validationFormCheck1">Para trabajar</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1">
    <label class="form-check-label" for="validationFormCheck1">Como medio de entretenimiento</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
    <label class="form-check-label" for="validationFormCheck1">
      <input type="text" class="form-control" id="validationCustom02" placeholder="Otro">
    </label>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      Por favor elija los usos que le da a internet.
    </div>
  </div>


  <div class="col-md-7">
  </div>

  <form class="was-validated">
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">¿Que opina usted acerca de el uso que le da a internet?</label>
    <textarea class="form-control" id="validationTextarea" required></textarea>
    <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      Por favor por favor responda esta pregunta.
    </div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepto que PizzaNet pueda hacer uso de esta informacion.
      </label>
      <div class="valid-feedback">
      Se ve bien!
    </div>
    <div class="invalid-feedback">
      De aceptar para enviar las respuestas de la encuesta.
    </div>
    </div>
  </div>



  <div class="col-12">
    <button class="btn btn-danger" type="submit">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>

    Enviar respuestas</button>
  </div>
</form>



    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
<br>

<footer class="p-4 bg-secondary">
   <div class="container">
      <div class="row justify-content-center mb-3">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-light font-weight-bold" title="Politicas de privacidad" href="codigoPizzaNet/HTML/politicas.html">Politicas de privacidad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light font-weight-bold" title="Contactanos" href="codigoPizzaNet/HTML/contactanos.html">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light font-weight-bold" title="Reclamos" href="codigoPizzaNet/HTML/reclamos.html">Reclamos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light font-weight-bold" title="Aviso legal" href="codigoPizzaNet/HTML/terminos.html">Términos y condiciones</a>
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