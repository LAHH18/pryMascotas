<?php
    require_once "../../config/app.php";
	require_once "../views/inc/session_start.php";
	require_once "../../autoload.php";

    use app\controllers\petController;

    if(isset($_POST['modulo_mascota'])){

		$insUsuario = new petController();

		if($_POST['modulo_mascota']=="añadir"){
			echo $insUsuario->registrarPropiedad();
		}
    }
?>