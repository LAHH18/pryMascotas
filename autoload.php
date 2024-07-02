<?php
    #obtener el nombre de la clase a utilizar 
    spl_autoload_register(function($clase){
        #obtener el directorio
        $archivo=__DIR__."/". $clase .".php";
        $archivo=str_replace("\\","/",$archivo);#Evita problemas en servidores linux

        if(is_file($archivo)){
            require_once $archivo;
        }

    });

?>
