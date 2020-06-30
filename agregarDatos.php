<?php

include('baseDatos.php');

if(isset($_POST["btnagregar"])){

    $nombre=$_POST["Nombre"];
    $correo=$_POST["Correo"];
    $password=$_POST["password"];

    $operacionBaseDatos = new BaseDatos();

    $consulta="INSERT INTO usuario(Nombre, Correo, Password) VALUES ('$nombre','$correo','$password')";
    
    
    $resultado=$operacionBaseDatos->alterarBaseDatos($consulta);

    if($resultado){
        echo("Transacción exitosa, datos agregados");
    }else
        die("Error de transacción");

    
}else{
    echo("No se presiono");
}

?>