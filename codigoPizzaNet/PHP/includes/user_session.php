<?php



class UserSession 
{
	
	public function __construct()
	{
		session_name("user");
		session_start();
	}

	public function setActualUsuario($user){
		$_SESSION['user'] = $user;
	}

	public function getActualUsuario(){
		return $_SESSION['user'];
	}

	public function cerraSession(){
		session_unset();
		session_destroy();
	}
}

?>