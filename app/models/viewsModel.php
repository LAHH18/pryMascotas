<?php
    namespace app\models;

    class viewsModel{
        protected function obtenerVistasModelo($vista){
            $listaBlanca=["body","aboutUs","adopt","donations","logOut","userPhoto","userUpdate","addPet","petList","adminbody","addslider","crudMascotas","crudSlider","crudDonar"];

            #Verifica si la vista existe
            if(in_array($vista,$listaBlanca)){
                #Busca el archivo
                if(is_file("./app/views/content/".$vista."-view.php")){
                    #Pasa la ubicacion del archivo a una variable
                    $contenido="./app/views/content/".$vista."-view.php";
                }else{
                    #Sino existe su ubicacion en los archivos lo iguala a 404
                    $contenido="404";
                }
            }elseif($vista=="login" || $vista=="index"){
                #Si se busca login o index, lo iguala a login
                $contenido="login";
            }else{
                #Si no es igual a la lista del array, lo iguala a 404
                $contenido="404";
            }

            return $contenido;
        }
    }
?>
