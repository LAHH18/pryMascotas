<?php
    require_once "./app/views/content/slider-view.php";
?>  


    <div class="fond container-fluid text-center">
        <h2 class="text-warning fw-bold">Bienvenidos al Refugio de Mascotas LA's Patitas</h2>
        <p class="fw-bold">En nuestro refugio, nos dedicamos a cuidar y encontrar un hogar amoroso para mascotas en necesidad.</p>

        <div class="container">
        <div class="row">
        <?php
            require_once "./app/views/inc/head.php";
            require_once "./config/server.php";
            use app\controllers\petController;

            $cpropiedad = new petController();
            $Consulta = $cpropiedad->consultaMascota();

            $num1=0;
            foreach($Consulta as $dato){
                if($num1<3){
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
                else{
                    break;
                }
                $num1++;
            }
                
        ?>
    </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-4">
                <h3 class="mb-4">Nuestros Servicios</h3>
                <p>
                    En La's Patitas ofrecemos servicios esenciales para el bienestar de los animales, como atención veterinaria, alimentación adecuada, y programas de socialización. 
                    Nuestro equipo está comprometido en brindar el mejor cuidado posible a cada animal que llega al refugio.
                </p>
            </div>
            <div class="col-md-3 p-4 ">
                <h3 class="mb-4">Nuestros Programas</h3>
                <p>
                    Ofrecemos varios programas para apoyar a los animales y a la comunidad, incluyendo campañas de adopción, 
                    programas de educación sobre el bienestar animal, y actividades de recaudación de fondos.
                </p>
            </div>
            <div class="col-md-3 p-4 ">
                <h3 class="mb-4">Cómo Puedes Ayudar</h3>
                <p>
                    Tu apoyo es fundamental para nosotros. Puedes ayudar a través de donaciones, voluntariado o adoptando a uno de nuestros 
                    adorables residentes. Cada pequeño gesto hace una gran diferencia en la vida de los animales que cuidamos.
                </p>
            </div>
            <div class="col-md-3 p-4 ">
                <h3 class="mb-4">Contacto</h3>
                <p>
                    Si tienes preguntas o quieres más información sobre cómo puedes involucrarte, no dudes en contactarnos. 
                    Puedes enviarnos un correo a contacto@laspatitas.org o llamarnos al (555) 123-4567.
                </p>
            </div>
        </div>
    </div>



    