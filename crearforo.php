<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>	
	<title>
		
		Contactanos
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
        		<li class="inicio_nav"> <a href="indexadmin.php">Inicio</a> </li>
        		<li class="quees_nav"><a href="queesadmin.html">Que Es Fusm Community </a> </li>
        		<li class="contacto_nav"><a href="Contactanosadmin.html"> Contactanos</a> </li>
        		<li class="titulo_nav"><a >Bienvenido a Fusm Community </a>  </li>
        		
        		<li class= "publicar_nav"> <a href="index.php">  Salir..</a> </li>

        	</ul>
        </nav>  


		<section id="formulario">

			
			<article >

                                <h2 id="publicacontenido">Publica contenido!</h2>
                          
                                   
                              
                                
                                <form id="formulariopublicar" action="php/upload.php" method="post" enctype="multipart/form-data">

                                     <input class="titulo"  type="text" name="titulo" placeholder="Titulo del Foro" />
                                    
                                    <input class="contenido" type="text" name="contenido" placeholder="Contenido del Foro"/>
           
                                    <input name="archivo" type="file" size="35" />
                                    <input name="enviar" type="submit" value="CREAR FORO!" />
                                    <input class="btn btn-modal-si" name="action" type="hidden" value="upload" />     
                                </form> 

				
			</article>
		<section/>

</body>
</html>