<?php

$servidor = "localhost";
$baseDatos = "website";
$usuario = "root";
$contrasena = "";


try{

    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $contrasena);
    

}catch(Exception $error){
    echo $error -> getMessage();
}

?>