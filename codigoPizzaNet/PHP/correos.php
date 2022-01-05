<?php
	$email = $_POST['email'];
	$asunto = "Contraseña Pizzanet";
	$mensajeCompleto = "contraseña: f1258YaJ \nAtentamente: PizzaNet";
	$header = "Enviado desde la pagina de PizzaNet";
	
	mail($email, $asunto, $mensajeCompleto, $header);
	echo "<script>alert('correo enviado exitosamente')</script>";
	echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>"
?>