<?php

include_once 'db.php';

$db = new DB();

$query=$db->connect();


	$query = $db->connect()->prepare('SELECT * FROM pizza');
	$query->execute();
	foreach ($query as $pizzas) {
		$nombre = $pizzas['nombre'];
		echo $nombre;
	}




?>