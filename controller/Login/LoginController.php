<?php
include_once '../model/Login/LoginModel.php';

class LoginController{
	
	private $objCD;
	
	public function __construct(){
		$this->objCD= new LoginModel();
	}
	
	public function ingresar(){
		$usuario=filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_SPECIAL_CHARS);
		$clave=filter_input(INPUT_POST,'clave',FILTER_SANITIZE_SPECIAL_CHARS);
		if(comprobarCaracteres($usuario)){
			if(comprobarCaracteres($clave)){
				//$clave=sha1(md5($clave));
				$login= $this->objCD->consultar(
				"*",
				"usuario",
				"usu_usuario='$usuario' and usu_clave='$clave'"
				);
				
				foreach($login as $user){
					$_SESSION['auth']="Autorizado";
					$_SESSION['usuario']=$user['usu_usuario'];
				
				}
				
			}
			else{
				alertas("la clave contiene caracteres incorrectos");
				
			}			
		}
		else{
			alertas("El usuario contiene caracteres incorrectos");
			
		}
		redirect("index.php");
	}
	public function cerrarSesion(){
		unset($_SESSION);
		session_destroy();
		redirect("login.php");
		
	}
	
	

}

?>