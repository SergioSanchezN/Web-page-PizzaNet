<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"  href="css/index.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="icon" href="imagenes/logo.png">
	<title>PizzaNet</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $('.carousel').carousel();
  </script>

</head>

<body>

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
            echo $user->getNombre();
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

    <div class="p-1 bg-warning">	
    </div>

    <div class="p-3 mb-2 bg-danger">
    </div>

  </div>

  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3 p-3 mb-2 bg-danger jumbotron"> 

        <div class="card mb-2 bg-warning">
          <h5 class="card-title text-center mt-2">Ofertas</h5>

          <div id="carousel2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card p-3 bg-warning">
                  <img src="https://i.ibb.co/Pc6VF5y/oferta.png" class="card-img-top" alt="...">
                  <div class="card-body">                  
                    <p class="card-text">Compra una pizza y lleva la segunta con un 50% de descuento</p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="card p-3 bg-warning">
                  <img src="https://i.ibb.co/gtTmd0D/oferta2.png" class="card-img-top" alt="...">
                  <div class="card-body">                  
                    <p class="card-text">pizza grande con cualquier masa por solo 29.900</p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="card p-3 bg-warning">
                  <img src="https://i.ibb.co/SftK1Ly/oferta3.png" class="card-img-top" alt="...">
                  <div class="card-body">                  
                    <p class="card-text">Por la compra de una pizza familiar lleva gratis bebida 1.5 litros</p>
                  </div>
                </div>
              </div>
            </div>           
              <!--Controles NEXT y PREV-->
              <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>             
          </div>
        </div>

        <div class="card mb-2 bg-warning mb-0">
          <h5 class="card-title text-center mt-2">Eventos</h5>
          <div class="card mb-2 bg-warning ">
            <img src="https://i.ibb.co/VmSJrCn/pizza-navide-a.jpg" class="card-img-top" alt="...">
            <div class="card-body mb-0">
              <h5 class="card-title">Pizza navideña</h5>             
              <p class="card-text">Mira nuestras pizzas en temporada de navidad</p>
            </div>
          </div>
        </div>


        <div class="card bg-warning mb-2">
          <div class="card bg-warning collapsed" id="heading5" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <button type="button" class="btn btn-warning p-2 nav-item text-danger font-weight-bold">
                  <h5 class="float-left mb-0  font-weight-bold">
                    Gana cupones
                  </h5>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down float-right mt-2 mb-0" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg> 
                </button>                 
          </div>
          <div id="collapse5" class="collapse p-2 mb-2" aria-labelledby="heading4" data-parent="#accordion">
            <p>llena la encuesta del día y obtendras un cupon de descuento</p>
            <?php
            if(isset($_SESSION['user'])){
            echo "<a href='../HTML/usoInternet.html' class='btn btn-danger'>Hacer encuesta</a>";
          }
          else
          {
            echo "<a href='codigoPizzaNet/PHP/user_validacion.php' class='btn btn-danger'>Hacer encuesta</a> ";
          }
          ?>
            <!--<a href="codigoPizzaNet/HTML/usoInternet.html" class="btn btn-danger">Hacer encuesta</a>-->            
          </div>
        </div>       


      </div>
      
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
        <div class="jumbotron p-2 mb-1 bg-danger text-white">
          <div id="carousel1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://i.ibb.co/RpmW28G/pizza1.jpg" alt="" width="100%" height="200">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Pizza de Peperoni</h5>
                      </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://i.ibb.co/41NzGm2/pizza2.jpg" alt="" width="100%" height="200">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Pizza de jamon y pollo</h5>
                        </div>
                    </div>

                    <div class="carousel-item">
                       <img src="https://i.ibb.co/Z1j4XDv/pizza3.jpg" alt="" width="100%" height="200">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Pizza de jamon y pollo</h5>
                        </div>
                    </div>

                    </div>           
                    <!--Controles NEXT y PREV-->
                    <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--Controles de indicadores-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel1" data-slide-to="1"></li>
                        <li data-target="#carousel1" data-slide-to="2"></li>
                    </ol>                
          </div>
        </div>

        <?php

        if(isset($_SESSION['user'])){
            echo "<div class='jumbotron p-3 mb-2 bg-danger text-white'>";
            echo "<h2 class='display-4'>Menu de Pizzas</h2>";
            echo "<img class='mb-2' src='https://i.ibb.co/q0G21WM/pizza4.jpg' class='rounded mx-auto d-block' width='100%'' height='200rem'>";
            echo "<a class='btn btn-warning btn-lg text-white' href='menu.php' role='button'>Ver mas</a>";
            echo "</div>";

            echo "<div class='jumbotron p-3 mb-2 bg-danger text-white'>";
            echo "<h2 class='display-4'>Combos</h2>";
            echo "<img class='mb-2' src='https://i.ibb.co/RCjSScT/combo.jpg' class='rounded mx-auto d-block' width='100%'' height='200rem'>";
            echo "<a class='btn btn-warning btn-lg text-white' href='combos.php' role='button'>Ver mas</a>";
            echo "</div>";

            echo "<div class='jumbotron p-3 mb-2 bg-danger text-white'>";
            echo "<h2 class='display-4'>Cupones</h2>";
            echo "<img class='mb-2' src='https://i.ibb.co/kVLGHC8/cupon.jpg' class='rounded mx-auto d-block' width='100%'' height='200rem'>";
            echo "<a class='btn btn-warning btn-lg text-white' href='../HTML/cupones.html' role='button'>Ver mas</a>";
            echo "</div>";
          }
          else
          {
            echo "<div class='jumbotron p-3 mb-2 bg-danger text-white'>";
            echo "<h2 class='display-4'>Menu de Pizzas</h2>";
            echo "<img class='mb-2' src='https://i.ibb.co/q0G21WM/pizza4.jpg' class='rounded mx-auto d-block' width='100%'' height='200rem'>";
            echo "<a class='btn btn-warning btn-lg text-white' href='codigoPizzaNet/HTML/menu.html' role='button'>Ver mas</a>";
            echo "</div>";

            echo "<div class='jumbotron p-3 mb-2 bg-danger text-white'>";
            echo "<h2 class='display-4'>Combos</h2>";
            echo "<img class='mb-2' src='https://i.ibb.co/RCjSScT/combo.jpg' class='rounded mx-auto d-block' width='100%'' height='200rem'>";
            echo "<a class='btn btn-warning btn-lg text-white' href='codigoPizzaNet/PHP/combos.php' role='button'>Ver mas</a>";
            echo "</div>";

            echo "<div class='jumbotron p-3 mb-2 bg-danger text-white'>";
            echo "<h2 class='display-4'>Cupones</h2>";
            echo "<img class='mb-2' src='https://i.ibb.co/kVLGHC8/cupon.jpg' class='rounded mx-auto d-block' width='100%'' height='200rem'>";
            echo "<a class='btn btn-warning btn-lg text-white' href='codigoPizzaNet/HTML/cupones.html' role='button'>Ver mas</a>";
            echo "</div>";
          }
          ?>

        <!--<div class="jumbotron p-3 mb-2 bg-danger text-white">
          <h2 class="display-4">Menu de Pizzas</h2>
          <img class="mb-2" src="https://i.ibb.co/q0G21WM/pizza4.jpg" class="rounded mx-auto d-block" width="100%" height="200rem">
          <a class="btn btn-warning btn-lg text-white" href="codigoPizzaNet/HTML/menu.html" role="button">Ver mas</a>
        </div>

        <div class="jumbotron p-3 mb-2 bg-danger text-white">
          <h1 class="display-4">Combos</h1>
          <img class="mb-2" src="https://i.ibb.co/RCjSScT/combo.jpg" class="rounded mx-auto d-block" width="100%" height="200rem">
          <a class="btn btn-warning btn-lg text-white" href="codigoPizzaNet/PHP/combos.php" role="button">Ver mas</a>
        </div>

        <div class="jumbotron p-3 mb-2 bg-danger text-white">
          <h1 class="display-4">Cupones</h1>
          <img class="mb-2" src="https://i.ibb.co/kVLGHC8/cupon.jpg" class="rounded mx-auto d-block" width="100%" height="200rem">
          <a class="btn btn-warning btn-lg text-white" href="codigoPizzaNet/HTML/cupones.html" role="button">Ver mas</a>
        </div>-->

        <div class="jumbotron p-3 mb-2 bg-danger text-white">
          <div class="card bg-warning mb-2">
          <div class="card bg-warning collapsed" id="heading4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <button type="button" class="btn btn-warning p-2 nav-item text-danger font-weight-bold">
                  <h5 class="float-left mb-0  font-weight-bold">
                    Escucha algo de musica mientras navegas
                  </h5>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down float-right mt-2 mb-0" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>                 
          </div>
          <div id="collapse4" class="collapse p-2 mb-2" aria-labelledby="heading4" data-parent="#accordion">
            
            <figure>
              <audio width="50" height="32" controls="controls">
                <source src="https://drive.google.com/uc?id=1ffRbJ_V_XVVSDFaHVR9VqABAzucMVCbL">
              </audio>
            </figure>

          </div>
        </div>
        </div>

      </div>

      

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-2 p-3 jumbotron bg-danger">  


        <div class="bg-warning rounded mb-2">          
            
              <h5 class="text-danger p-2 font-weight-bold">
                Apps para tus domicilios
              </h5>
        
          <div id="accordion">
            <div class="card bg-warning">
              <div class="card bg-warning collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <button type="button" class="btn btn-warning p-2 nav-item text-danger font-weight-bold mb-0">
                  <p class="float-left mb-0">
                    Rappi
                  </p>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down float-right mt-2 mb-0" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>                 
              </div>
              <div id="collapseOne" class="collapse p-1" aria-labelledby="headingOne" data-parent="#accordion">
                <div class=" jumbotron bg-dark p-1 mb-1">
                  <iframe class="col-12 mt-4 p-1" width="853" height="480" src="https://www.youtube.com/embed/E5bdVwN7Uks" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> 
                <a href="https://play.google.com/store/apps/details?id=com.grability.rappi&hl=es_CO">
                  <button class="btn btn-danger">
                    hacer pedido
                  </button>
                </a>              
              </div>
            </div>

            <div class="card bg-warning">
              <div class="card bg-warning collapsed" id="heading2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <button type="button" class="btn btn-warning p-2 nav-item text-danger font-weight-bold">
                  <p class="float-left mb-0">
                    ifood
                  </p>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down float-right mt-2 mb-0" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>                 
              </div>
              <div id="collapse2" class="collapse p-1" aria-labelledby="heading2" data-parent="#accordion">
                <div class=" jumbotron bg-dark p-1 mb-1">
                  <iframe class="col-12 mt-4 p-1" width="853" height="480" src="https://www.youtube.com/embed/7gg3p186P58" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> 
                <a href="https://play.google.com/store/apps/details?id=comeya.android&hl=es_CO">
                  <button class="btn btn-danger">
                    hacer pedido
                  </button>
                </a>               
              </div>
            </div>

            <div class="card bg-warning">
              <div class="card bg-warning collapsed" id="heading3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    <button type="button" class="btn btn-warning p-2 nav-item text-danger font-weight-bold">
                      <p class="float-left mb-0">
                        Domicilios.com
                      </p>
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down float-right mt-2 mb-0" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>                 
              </div>
              <div id="collapse3" class="collapse p-1" aria-labelledby="heading2" data-parent="#accordion">
                
                  <div class=" jumbotron bg-dark p-1 mb-1">
                    <iframe class="col-12 mt-4 p-1" width="853" height="480" src="https://www.youtube.com/embed/7gg3p186P58" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <a href="https://play.google.com/store/apps/details?id=com.clickdelivery.android.domiciliosbogota&hl=es_CO">
                  <button class="btn btn-danger">
                    hacer pedido
                  </button>
                </a>         
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-warning mb-2">
          <div class="card bg-warning collapsed" id="heading4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <button type="button" class="btn btn-warning p-2 nav-item text-danger font-weight-bold">
                  <h5 class="float-left mb-0  font-weight-bold">
                    Trabaja con nosotros
                  </h5>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down float-right mt-2 mb-0" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>                 
          </div>
          <div id="collapse4" class="collapse p-2 mb-2" aria-labelledby="heading4" data-parent="#accordion">
            <p>Se necesita personal de atencion al cliente</p>

            <?php
            if(isset($_SESSION['user'])){
            echo "<a href='../HTML/hojadevida.html' class='btn btn-danger'>Enviar mi hoja de vida</a>";
          }
          else
          {
            echo "<a href='codigoPizzaNet/HTML/hojadevida.html' class='btn btn-danger'>Enviar mi hoja de vida</a> ";
          }
          ?>
            <!--<a href="codigoPizzaNet/HTML/hojadevida.html" class="btn btn-danger">Enviar mi hoja de vida</a>-->            
          </div>
        </div>
        <a type="button" class="btn btn-warning text-danger" style="width: 100%" href="codigoPizzaNet/PHP/traductormoneda.php">Traductor de monedas</a>
        <a type="button" class="btn btn-warning text-danger" style="width: 100%; margin-top: 1%" href="codigoPizzaNet/PHP/mostrardoc.php">Ver documentacion</a>
        
      </div>      
    </div>
  </div>

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

 <aside class="bg-secondary">
  <div class="row justify-content-center mb-0">
    <h5 class="text-white font-weight-bold">Estilos bootstrap</h5>
    <ul>
      <li>
        <a class="text-white" href="https://getbootstrap.com/docs/5.0/utilities/colors/">https://getbootstrap.com/docs/5.0/utilities/colors/</a>
      </li>
      <li>
        <a class="text-white" href="https://getbootstrap.com/docs/4.0/layout/overview/">https://getbootstrap.com/docs/4.0/layout/overview/</a>
      </li>
      <li>
        <a class="text-white" href="https://getbootstrap.com/docs/4.0/components/card/">https://getbootstrap.com/docs/4.0/components/card/</a>
      </li>
      <li>
        <a class="text-white" href="https://getbootstrap.com/docs/4.0/components/carousel/">https://getbootstrap.com/docs/4.0/components/carousel/</a>
      </li>
      <li>
        <a class="text-white" href="https://getbootstrap.com/docs/4.0/components/jumbotron/">https://getbootstrap.com/docs/4.0/components/jumbotron/</a>
      </li>
    </ul>
  </div>
 </aside>

</body>
</html>