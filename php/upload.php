<?php   

    include_once('conexion.php'); 
$titulo = $_POST ['titulo']; 

$contenido = $_POST ['contenido']; 
//$fecha= date("y-m-d h:i:s");
       $status = "";
       
       
        if ($_POST["action"] == "upload") {
            // obtenemos los datos del archivo
            $tamano = $_FILES["archivo"]['size'];
            $tipo = $_FILES["archivo"]['type'];
            $archivo = $_FILES["archivo"]['name'];
            $prefijo = substr(md5(uniqid(rand())),0,6);
            $bolean = 0;
            
            if ($archivo != "") {

                $archivo = $prefijo.$archivo;
                $destino =  "../img/".$archivo;
                if (move_uploaded_file($_FILES['archivo']['tmp_name'],$destino)) {


                    $con = new conexion();
                    
                $query= "INSERT INTO foro (nombreforo,contenidoforo,imagen) "
                          . "VALUES('".$titulo."','".$contenido."','img/".$archivo."')";
//                    $query = "INSERT INTO foro(imagen) VALUES ('img/".$archivo."');";                    
                    $respuesta = $con->ejecutar_query($query);

                    if($respuesta){
                        
                        echo '<script type="text/javascript">alert("Foro creado  exitosamente !!");</script>';
                        header("Location:../indexadmin.php");
                        
                    }else{
                        echo "<h1>Lo sentimos, ha ocurrido un error, intentalo mas tarde 1</h1>";
                    }
                    
                    
                } else {
                    $status = "<h1>Lo sentimos, ha ocurrido un error, intentalo mas tarde 2</h1>";
                }
            } else {
                $status = "<h1>Lo sentimos, ha ocurrido un error, intentalo mas tarde 3</h1>";
            }


        }
        ?>







