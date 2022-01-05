<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
	$user->setUser($userSession->getActualUsuario());
	include_once '../../index.php';
}elseif (isset($_POST['correo']) && isset($_POST['contrasena'])) {
	//echo "Validacion";
	$correoForm = $_POST['correo'];
	$contrasenaForm = sha1(sha1($_POST['contrasena']));

	if($user->userExists($correoForm, $contrasenaForm))
	{
		$userSession->setActualUsuario($correoForm);
		$user->setUser($correoForm);
		include_once '../../index.php';

		//echo "Usuario existe";
	}else{
		//echo "Correo de usuario y/o contraseña incorrecta";
		$errorLogin = "Correo y/o contraseña incorrecta";
		include_once 'ingresar.php';
	}
}else{
	include_once 'ingresar.php';
}


?>