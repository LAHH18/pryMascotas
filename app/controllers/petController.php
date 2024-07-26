<?php
    namespace app\controllers;
    use app\models\mainModel;

    class petController extends mainModel{

        public function registrarPropiedad(){
            $mascota=$_POST['txtNombre'];
            $descripcion=$_POST['txtDescripcion'];
            $raza=$_POST['txtRaza'];
            $genero=$_POST['txtGenero'];
            $edad=$_POST['txtEdad'];
            $tamano=intval($_POST['txtTamano']);
            $ubicacion=$_POST['txtUbicacion'];
            $cuidador=$_POST['txtCuidador'];
            $imagen='';

            if (isset($_FILES['txtImagen'])) {
                $nombreImagen = $_FILES['txtImagen']['name'];
                $rutaImagenTemporal = $_FILES['txtImagen']['tmp_name'];
                $directorioDestino =  "../views/img/";
                $rutaImagenDestino = $directorioDestino . $nombreImagen;
    
                if (move_uploaded_file($rutaImagenTemporal, $rutaImagenDestino)) {
                    $imagen = $rutaImagenDestino;
                }
            }
            

            $registrar = $this->GuardarDatosMascota($mascota, $imagen, $descripcion, $raza, $genero, $edad, $tamano, $ubicacion, $cuidador);
    
                if ($registrar) {
                    header("Location: " . APP_URL . "addPet/");
                    exit(); // Salir después de redirigir
                }
        }

        public function consultaMascota(){
            $propiedad= new mainModel();
            $Consulta=$propiedad->ConsultaMascota();
            return $Consulta;
        }
    }

?>