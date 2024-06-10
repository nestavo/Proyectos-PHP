
<?php
    require('Conexion.php');

    class devuelveProductos extends conexion 
    {
        public function __construct() //constructor versión moderna php 7.0 en adelante
        {
            parent::__construct(); //este es el constructor del archivo conexion.php
        }

        public function getProductos($dato)
        {
            $resultado=$this->conexion_db->query('SELECT * FROM artículos WHERE PAISDEORIGEN= "'  . $dato .' " ');

            $productos=$resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;
        }
    }


?>