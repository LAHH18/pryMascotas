<?php
            require_once "./app/views/inc/head.php";
            require_once "./config/server.php";
            use app\controllers\empresaController;
            
            $cpropiedad = new empresaController();
            $Consulta = $cpropiedad->ConsultaDatosEmpresa();
            ?>
<body>
    <header class="bg-dark py-5 text-center">
        <div class="container">
            <img src="<?php echo APP_URL; ?>app/views/img/logo.png" alt="Logo de La's Patitas" class="img-fluid mb-3 rounded-pill">
            <h1 class="display-4 text-warning fw-bold">Quiénes Somos</h1>
        </div>
    </header>
    <main class="container py-5">
        <section class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>Nuestra Visión</h2>
                <?php
                    foreach($Consulta as $dato){
                        echo '<p class="lead">';
                        echo $dato["vision"];
                        echo '</p>';
                ?>
            </div>
        </section>
        <section class="row">
            <div class="col-md-12 text-center">
                <h2>Nuestra Misión</h2>
                <?php
                    
                        echo '<p class="lead">';
                        echo $dato["mision"];
                        echo '</p>';
                    }
                ?>
                
            </div>
        </section>
    </main>
    <footer class="text-center py-3 bg-light">
        
    </footer>
</body>
</html>
