<?php

    class BaseDatos{


        //atributos

            private $servidor="localhost";
            private $usuario="root";
            private $clave="";
            private $nombreBaseDatos="bd_tienda";
            private $conexion;


        //constructor

            public function __construct(){}


        //merodos
        public function conectarConBaseDatos(){

            //configurar conexion

            $this->conexion= mysqli_connect(

               $this->servidor,
               $this->usuario,
               $this->clave,
               $this->nombreBaseDatos
            );


            //verificar conexion
            if(!($this->conexion)){
                die('Error de conexion');
            }else{
                echo("Conexión exitosa");
            }
        }

        public function alterarBaseDatos($consultaSQL){

            $this->conectarConBaseDatos();

            $resultado=$this->conexion->query($consultaSQL);

            return($resultado);

            $this->conexion->close();
        }
            //Buscar-consultar
            public function consultarEnBaseDatos($consultaSQL){

                $this->conectarConBaseDatos();
                $resultado=$this->conexion->query($consultaSQL);
                

                $arregloFilas=array();
                foreach($resultado as $registros){
                    
                    $arregloFilas[]=$registros;

                }
                return($arregloFilas);
                $this->conexion->close();

            }

            // public function EliminarEnBaseDatos($consultaSQL){

            //     $this->conectarConBaseDatos();
    
            //     $resultado=$this->conexion->query($consultaSQL);
    
            //     return($resultado);
    
            //     $this->conexion->close();
            // }
            



    }




?>