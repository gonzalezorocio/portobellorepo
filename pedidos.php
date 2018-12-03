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
        					<li class="selected"><a href="index.php">Inicio</a></li>
            				<li><a href="completo.php">Nuestros Productos</a>	
								<ul>
                					<li><a href="comida.php">Comida</a></li>
						    		<li><a href="bebidas.php">Bebidas</a></li>
                    				<li><a href="postres.php">Postres</a></li>
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