<h2 class="text-center mt-3">Adopta a una mascota de tu eleccion</h2>
<div class="container mt-5">
    <div class="row">
        <?php
            require_once "./app/views/inc/head.php";
            require_once "./config/server.php";
            use app\controllers\petController;

            $cpropiedad = new petController();
            $Consulta = $cpropiedad->consultaMascota();

            foreach($Consulta as $dato){
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card text-center">';
                echo '<img src="'. $dato["url_img"]. '" class="card-img-top" alt="Imagen">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'. $dato["nombre"] .'</h5>';
                echo '<p class="card-text">'. $dato["descripcion"] .'</p>';
                echo '<a href="#" class="btn btn-secondary">Ver más</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
                
        ?>
    </div>
</div>