<?php
require_once 'php/conexion.php';

?> 

﻿<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>	
	<title>
		
		Registrarse 
	</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
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
        		<li class="titulo_nav"><a >Bienvenido a Fusm Community </a>  </li>
        		
        		<li class= "publicar_nav"> <a href="registrarse.html">  Registrate! </a> </li>

        	</ul>
        </nav>


		<section id="foro">

		 <?php
                                    $obj_conex= new Conexion();
                                    $sql = "SELECT nombreforo,contenidoforo FROM  foro order by id desc  ";
                                    $dato= $obj_conex->get_resultados_query($sql);
                                 
                                    
                                  foreach ($dato as $fila){ 	
                            echo
                    
			'<article class="contenido_foro">
				<h2 class="titulo_foro">
				 	'.$fila["nombreforo"].'
				</h2>
				<p class="autor_foro">
					Por <a href="#"> David Saavedra </a>
				</p>
				';


				echo '<p>'.$fila["contenidoforo"].'</p>
								
                                  

				
			</article> ';
                                      }
                                 ?> 
                                      
		<section/>
		   	

		
</body>
</html>