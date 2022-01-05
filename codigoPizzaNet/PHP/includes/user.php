<?php

include_once 'db.php';

class User extends DB
{
	
	private $correo;
	private $contrasena;
	private $nombre;
	private $telefono;
	private $sexo;
	private $direccion1;
	private $direccion2;
	private $ciudad;

	public function userExists($user, $pass)
	{
		$query = $this->connect()->prepare('SELECT * FROM clientes WHERE correo = :user AND contrasena = :pass');
		$query->execute(['user' => $user, 'pass' => $pass]);

		if($query->rowCount()){
			return true;
		}
		else{
			return false;
		}
	}

	public function correoExiste($user)
	{
		$query = $this->connect()->prepare('SELECT * FROM clientes WHERE correo = :user');
		$query->execute(['user' => $user]);

		if($query->rowCount()){
			return true;
		}
		else{
			return false;
		}
	}

	public function setUser($user){
		$query = $this->connect()->prepare('SELECT * FROM clientes WHERE correo = :user');
		$query->execute(['user' => $user]);

		foreach ($query as $actualUser) {
			$this->correo = $actualUser['correo'];
			$this->contrasena = $actualUser['contrasena'];
			$this->nombre = $actualUser['nombre'];
			$this->telefono = $actualUser['telefono'];
			$this->sexo = $actualUser['sexo'];
			$this->direccion1 = $actualUser['direccion1'];
			$this->direccion2 = $actualUser['direccion2'];
			$this->ciudad = $actualUser['ciudad'];
		}
	}

	public function getCorreo(){
		return $this->correo;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function getDireccion1(){
		return $this->direccion1;
	}
	public function getDireccion2(){
		return $this->direccion2;
	}
	public function getCiudad(){
		return $this->ciudad;
	}
}

?>