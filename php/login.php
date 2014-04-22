<?php
require_once 'conexion.php';
 
$correo = $_GET ['correo']; 
$pass   = $_GET ['pass']; 

$admin1='david';
$admin2='moises';

//echo $correo;
//echo $pass;

$sql1="SELECT correo,pass FROM registro where correo='".$correo."'and pass='".$pass."';";
//$sql2="SELECT correo,pass FROM registro where correo='".$correo."'and pass='".$pass."';";
//$sql3="SELECT correo,pass FROM registro where correo='".$correo."'and pass='".$pass."';";

$con = new Conexion();

$datos=$con->get_resultados_query($sql1);

if ($datos){
    
    if($correo===$admin1||$correo===$admin2){ 
    header("Location:../indexadmin.php");
    }
     
    else{
        header("Location:../indexusuario.php");       
    }
    
}else{

    header("Location:../ingresar.php"); 
}

?> 
