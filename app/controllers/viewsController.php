<?php
    namespace app\controllers;
    use app\models\viewsModel;

    class viewsController extends viewsModel{
        public function obtenerVistasControlador($vista){
            #Verifica que la variable no venga vacia
            if($vista!=""){
                #si no esta vacia, llama a la funcion del modelo con el parametro vista
                $respuesta=$this->obtenerVistasModelo($vista);
            }else{
                $respuesta="login";
            }

            return $respuesta;
        }
    }
?>