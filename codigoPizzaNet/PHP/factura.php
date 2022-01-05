<?php


    include_once 'includes/user_session.php';
    include_once 'includes/user.php';
    include_once 'includes/db.php';
    $db = new DB();
    $usuario = new User();
    $query=$db->connect();

    


     if(isset($_SESSION['user'])){

     	$usuario->setUser($_SESSION['user']);
     	$direccion = $usuario->getDireccion1();
     	$correo = $_SESSION['user'];

     	$bebida = $_POST['bebida'];
     	$fecha = date('d-m-Y');

     	if ($bebida=='Elegir...') {

     		$consulta = "INSERT INTO facturas(id, correoclientes, fecha, valor, direccion) VALUES ('null','$correo','$fecha','20000','$direccion')";
     		$query->exec($consulta);
     		

     		$consulta = "INSERT INTO clientepizza(id, correoclientes, codigopizza) VALUES ('null','$correo','$idpizza')";
     		$query->exec($consulta);

     		echo "<br>";
	    	echo "<div class='card'>";
	    	echo "<div class='card-body text-success'>";
        	echo "Factura realizada con exito, puedes mirarla en tu perfil. Tu pedido llegara en 30 minutos, si demora mas de lo acordado, no le cobraremos en domicilio. ";
        	echo "</div>";
        	echo "</div>";
     	}
     	else{

     		$consulta = "INSERT INTO facturas(id, correoclientes, fecha, valor, direccion) VALUES ('null','$correo','$fecha','25000','$direccion')";
     		$query->exec($consulta);

     		$consulta = "INSERT INTO clientepizza(id, correoclientes, codigopizza) VALUES ('null','$correo','$idpizza')";
     		$query->exec($consulta);

     		echo "<br>";
	    	echo "<div class='card'>";
	    	echo "<div class='card-body text-success'>";
        	echo "Factura realizada con exito, puedes mirarla en tu perfil. Tu pedido llegara en 30 minutos, si demora mas de lo acordado, no le cobraremos en domicilio.";
        	echo "</div>";
        	echo "</div>";
     	}

     }/*else{
     	 header("location: user_validacion.php");
     }*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>