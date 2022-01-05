<?php
include_once("includes/db.php");
include_once("includes/user.php");

$user = new User();
$db = new DB();

$query=$db->connect();

if (strlen($_POST['correo']) > 0 && strlen($_POST['contrasena']) > 0 && strlen($_POST['nombre']) > 0 && strlen($_POST['telefono']) > 0 && strlen($_POST['direccion1']) > 0 && strlen($_POST['ciudad']) > 0 && strlen($_POST['sexo']) > 0) {
	if ($user->correoExiste($_POST['correo'])) {
		echo "<br>";
	    echo "<div class='card'>";
	    echo "<div class='card-body text-danger'>";
        echo "El correo ya se encuentra registrado";
        echo "</div>";
        echo "</div>";

	}
	else{
		$correo = $_POST['correo'];
		$nombre = $_POST['nombre'];
		$contraseña = sha1(sha1($_POST['contrasena']));
		$telefono = $_POST['telefono'];
		$direccion1 = $_POST['direccion1'];
		$direccion2 = '';
		if (strlen($_POST['direccion1']) > 0) {
			$direccion2 = $_POST['direccion2'];
		}
		$ciudad = $_POST['ciudad'];
		$sexo = $_POST['sexo'];
		$consulta = "INSERT INTO clientes(correo, contrasena, nombre, telefono, sexo, direccion1, direccion2, ciudad) VALUES ('$correo','$contrasena','$nombre', '$telefono', '$sexo', '$direccion1', '$direccion2', '$ciudad')";

		

		$query->exec($consulta);

		echo "<br>";
	    echo "<div class='card'>";
	    echo "<div class='card-body text-success'>";
        echo "Registro con exito";
        echo "</div>";
        echo "</div>";


	}
	
}else
{
		echo "<br>";
	    echo "<div class='card'>";
	    echo "<div class='card-body text-danger'>";
        echo "Por favor ingrese todos los datos";
        echo "</div>";
        echo "</div>";

}
?>

