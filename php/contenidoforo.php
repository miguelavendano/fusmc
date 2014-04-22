<?php
require_once 'conexion.php';

$nombre = $_GET ['nombre']; 
$correo = $_GET ['correo']; 
$pass   = $_GET ['pass']; 

echo "Datos";


$query= "INSERT INTO registro (nombreusuario,correo,pass) "
        . "VALUES('".$nombre."','".$correo."','".$pass."')";


$conex = new Conexion();

if ($conex->ejecutar_query($query)){
    
    echo "ok";
}

else {
    
    echo "mal";
}
?> 