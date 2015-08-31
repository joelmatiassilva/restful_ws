<?php 	
	header('Content-type: application/json');
	//problemas de seguridad entonces se le agrega la siguiente liniea
	header('Access-Control-Allow-Origin: *');
 	
 	//DECLARACION DE MOCKS Y CONSTANTES
	define("MOCK_USER", "Diana");
	define("MOCK_PASS", 123456);
	$response_login = array("code"=>"number", "msg"=>"mensaje", "user"=>"user");
	$response_logout = array("code"=>"number", "msg"=>"mensaje", "user"=>"user");
	$response_signup = array("code"=>"number", "msg"=>"mensaje", "user"=>"user");
	
	//DECLARACION DE LA CLASE
	class Auth{
		
		// Declaración de una propiedad
    	// public $user;
    	// public $pass;

    	//DECLARACION DEL METODO
    	function login($user, $pass){
			if($user == MOCK_USER && $pass == MOCK_PASS){
				$response_login["code"] = 202;
				$response_login["msg"] = "BIENVENIDA!";
				$response_login["user"] = "user"; 
			}
			else{
				$response_login["code"] = 404;
				$response_login["msg"] = "No es bienvenido!";
				$response_login["user"] = "user"; 
			}

			echo json_encode($response_login);

    	}

    	function logout(){
    		echo json_encode($response_logout);

    	}
    	
    	function signup(){
    		echo json_encode($response_signup);
    	}

	}

	//TOMAR DATOS QUE VIENEN POR GET
	$tomar_usuario = $_GET['usuario'];
	$tomar_contra = $_GET['contra'];
	
	//CREAR OBJETO
	$auth = new Auth();

	//LLAMAR AL MÉTODO DEL OBJETO
	$auth->login($tomar_usuario, $tomar_contra);

 

?>