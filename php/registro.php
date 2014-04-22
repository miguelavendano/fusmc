<?php
require_once 'conexion.php';

$nombreusuario = $_GET ['nombreusuario']; 
$correo = $_GET ['correo']; 
$pass   = $_GET ['pass']; 

echo "Datos";
echo $nombreusuario;
echo $correo;
echo $pass;

$query= "INSERT INTO registro (nombreusuario,correo,pass) "
        . "VALUES('".$nombreusuario."','".$correo."','".$pass."')";


$conex = new Conexion();

if ($conex->ejecutar_query($query)){
    
   header("Location:../index.php"); 
}

else {
    
   header("Location:../registrarse.php"); 
}
?> 

