<?php

    namespace app\models;
    use \PDO;

        $file_path = __DIR__ . "/../../config/server.php";
        if (file_exists($file_path)) {
            require_once $file_path;
        }

    class mainModel{

        private $server= DB_SERVER;
        private $db= DB_NAME;
        private $user= DB_USER;
        private $pass= DB_PASS;

        #Base de datos 
        protected function conectar(){
            $conexion= new PDO("mysql:host=".$this->server.";dbname=".$this->db, $this->user, $this->pass);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        }
        
        protected function ejecutarConsulta($consulta){
            $sql=$this->conectar()->prepare($consulta);
            $sql->execute();
            return $sql;
        }

        #Funcion para seleccionar imagen
        public function seleccionarImgSliderACT(){
            $sql = $this->conectar()->prepare("SELECT * FROM slider WHERE status=1");
            $sql->execute();
            return $sql;
        }

        public function seleccionarImgSlider(){
            $sql = $this->conectar()->prepare("SELECT * FROM slider WHERE status=2");
            $sql->execute();
            return $sql;
        }

        public function ConsultaImgSlider(){
            $sql = $this->conectar()->prepare("SELECT * FROM slider");
            $sql->execute();
            return $sql;
        }

        #Funcion para prevenir inyecciones SQL
        public function limpiarCadena($cadena){
			$palabras=["<script>","</script>","<script src","<script type=","SELECT * FROM","SELECT "," SELECT ","DELETE FROM","INSERT INTO","DROP TABLE","DROP DATABASE","TRUNCATE TABLE","SHOW TABLES","SHOW DATABASES","<?php","?>","--","^","<",">","==","=",";","::"];

            $cadena=trim($cadena);
            $cadena=stripslashes($cadena);

            foreach($palabras as $palabra){
                $cadena-str_ireplace($palabra, "",$cadena);
            }

            $cadena=trim($cadena);
            $cadena=stripslashes($cadena);
            return $cadena;
        }

        public function ConsultaMascota(){
            $sql = $this->conectar()->prepare("SELECT * FROM tblmascotas");
            $sql->execute();
            return $sql;
        }
        
        public function ConsultaDatosEmpresa(){
            $sql = $this->conectar()->prepare("SELECT * FROM tblempresa");
            $sql->execute();
            return $sql;
        }



    }
?>