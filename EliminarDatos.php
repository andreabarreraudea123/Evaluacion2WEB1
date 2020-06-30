<?php

include('baseDatos.php');

if(isset($_POST["btneliminar"])){
    $nombre=$_POST["eliminarUsuario"];

    //Crear objeto

    $operacionBaseDatos = new BaseDatos();

    //creo consulta
    $consulta="DELETE from usuario where nombre='$nombre'";
    $resultado=$operacionBaseDatos->alterarBaseDatos($consulta);
    if($resultado)
    {
        echo("<br>");
        echo("Transaccion exitosa");
    }
    else{
        echo("<br>");
        echo("error en la transaccion");
    }
}
else{
    echo("No se presiono");
}  
   
    

?>