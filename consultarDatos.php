<?php

include('baseDatos.php');

if(isset($_POST["btnbuscar"])){

    $nombre=$_POST["usuario"];

    //Crear objeto

    $operacionBaseDatos = new BaseDatos();

    //creo consulta
    $consulta="SELECT nombre,correo,password from usuario where nombre='$nombre'";

    //buscar        
    $resultado=$operacionBaseDatos->consultarEnBaseDatos($consulta);
    print_r($resultado);

}else{
    echo("No se presiono");
}


?>