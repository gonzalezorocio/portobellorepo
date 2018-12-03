<?php
    session_start();
    if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null)
    {
        print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
    }
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Inicio PortobelloWeb</title>
		<link rel="stylesheet" href="css/reset.css" type="text/css" />
		<link rel="stylesheet" href="css/styles.css" type="text/css" />
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/slider.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	</head>
	<body>
		<div id="container" class="width">
    		<header> 
				<div class="width">
    				<h1 ><a href="home.php">PortobelloWeb</a></h1>
					<nav>
    					<ul class="sf-menu dropdown">
        					<li class="selected"><a href="home.php">Inicio</a></li>
            				<li><a href="completo.php">Nuestros Productos</a>	
								<ul>
                					<li><a href="completo.php#comida">Comida</a></li>
						    		<li><a href="completo.php#bebidas">Bebidas</a></li>
                    				<li><a href="completo.php#postres">Postres</a></li>
                				</ul>
            				</li>
	     					<li><a href="pedidos.php">Tus pedidos</a></li>
	     					<li><a href="info.php">Portobello</a></li>
	     					<li class="exit"><a href="./php/logout.php">Salir</a></li>
       					</ul>
						<div class="clear"></div>
    				</nav>
       			</div>
				<div class="clear"></div>
    		</header>
    		<div id="intro">
				<div class="width">
					<div class="intro-content">
             <section id="content" class="two-column with-right-sidebar">

	    <article>
				
			
			<h2>Acerca de nosotros</h2>

            <p>Bienvenido a Portobello, comida deliciosa a un precio justo.</p>

			<p>Contamos con una gran variedad de productos para 
			todos los gustos. Además contamos con mobiliario en excelente 
			estado, personal con un excelente conocimiento en cocina y sobre todo
			una exclente calidad de servicio y productos.</p>
			<p>Este servicio fué creado para mejorar tu experiencia
			en la universidad y facilitar tus compras en nuestra cafetería asi 
			que ¡pide ahora!.</p>
			<p>Quejas y sugerencias sobre nuestros productos
			 o servicios dirigirse con la empleada en mostrador. 
			Encantados de atenderte.</p>

		




		
		</article>
        </section>
        
        <aside class="sidebar big-sidebar right-sidebar">
	
	
            <ul>	
               <li>
                    <ul class="blocklist">
                        <li>Nuestros horarios</li>
						<li>Lunes a Viernes</li> 
						<li>07:00 a 21:00 hrs</li>
						<li>Sábados</li>
						<li>07:00 a 13:00 hrs</li>
                    </ul>
                </li>
                
            </ul>
		
        </aside>
    	<div class="clear"></div>
    
      
        
            	</div>
			</div>

    
</div>

    <footer>
<div class="footer-bottom">
    <p>&copy; PortobelloWeb 2018.</p>
         </div>
    </footer>
</body>
</html>