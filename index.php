<?php
require_once 'php/conexion.php';

?> 


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>	
		<title>
			FusmComunnity
		</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
<!--               <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
                
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    

    
		<link rel="stylesheet" href="css/normalize.css">
	</head>


	<body>

		<header>
			<figure id="logo">
				<img src="img/logo.jpg"/>
			</figure>
			<h1 id="titulo_header"></h1>
			<figure id= "cabecera">
				<img src="img/cabecera.png"/>
				<figcaption>
					
				</figcaption>
			</figure>
			
			<figure id= "avatar">
				<img src="img/avatar.png"/>
				<figcaption>
					
				</figcaption>
			</figure>
		</header>
        
        <nav>
        	<ul>
        		<li class="inicio_nav"> <a href="index.php">Inicio</a> </li>
        		<li class="quees_nav"><a href="quees.html">Que Es Fusm Community </a> </li>
        		<li class="contacto_nav"><a href="Contactanos.html"> Contactanos</a> </li>
                        <li class="titulo_nav"><a href="ingresar.php" >Login</a>  </li>
        		
        		<li class= "publicar_nav"> <a href="registrarse.php">  Registrate! </a> </li>

        	</ul>
        </nav>
     
		<section id="contenido">
                      <?php
                                    $obj_conex= new Conexion();
                                    $sql = "SELECT id, nombreforo,usuario,imagen FROM  foro order by id desc  ";
                                    $datos= $obj_conex->get_resultados_query($sql);
                                 
                                    
                                  foreach ($datos as $fila){ 
                  
			echo '<article class="vistaforo">
                        	<figure class="imagen_vistaforo">
					<img src="'.$fila["imagen"].'" />
				</figure>
				<h2 class="titulo_vistaforo">
                                   
                                  <a href="contenidoforo.php?id='.$fila["id"].'">'.$fila["nombreforo"].'</a>
                        
				 </h2>
                                       <p class="autor_vistaforo">
                                            Por ';
                       
                         echo               '<a>'.$fila["usuario"].'</a>';

                                    
                                         				
			echo	'
			</article>';
                                  }
                                 ?> 

			

		</section>

		<footer>
			<p><strong> Realizado por David Saavedra y Moises Contreras</strong></p>
			<p>DappSolution 2014</p>
		</footer>

	</body>

</html>	 