<?php
    require_once "./config/app.php"; #Manda a llamar al archivo app.php
    require_once "./autoload.php"; #Manda a llamar al archivo autoload.php
    require_once "./app/views/inc/session_start.php"; #Manda a llamar al archivo session_start.php

    if(isset($_GET['views'])){
        #divide a la variable views
        $url=explode("/",$_GET['views']);
        
    }else{
        $url=["login"];
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>
<body >

    <?php 
        #Manda a llamar a la funcion del controlador
        use app\controllers\viewsController;

        #Creacion de un objeto apartir de la funcion viewsController
        $viewsController=new viewsController();   
        $vista=$viewsController->obtenerVistasControlador($url[0]);

        if($vista=="login" || $vista=="404"){
            require_once "./app/views/content/".$vista."-view.php";
        }else{
            if($vista=="./app/views/content/adminbody-view.php" || $vista=="./app/views/content/crudMascotas-view.php" || $vista=="./app/views/content/crudSlider-view.php" || $vista=="./app/views/content/addslider-view.php" || $vista=="./app/views/content/crudDonar-view.php")
                require_once "./app/views/inc/adminnavbar.php";
            else
                require_once "./app/views/inc/navbar.php";

            require_once $vista;
            require_once "./app/views/inc/footer.php";

        }

        require_once "./app/views/inc/script.php"; 
    
    ?>

</body>
</html>