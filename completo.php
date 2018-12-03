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
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
	
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
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
                					<li><a href="#comida">Comida</a></li>
						    		<li><a href="#bebidas">Bebidas</a></li>
                    				<li><a href="#postres">Postres</a></li>
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
    				
       			</div>
				<div class="clear"></div>
    		</header>
    		<div id="intro">
				<div class="width">
					
					<div class="intro-content">
						<div class="title text-center">
								<h2>Nuestro menú</h2>
							</div>
						<hr>
							<h1 id="bebidas"><font color="  #D9D5D5">Bebidas</font></h1>
						<div class="row">
							
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Vaso de Agua</h4>
									<p class="price float-right">
										$13.00
									</p>
								</div>
								<p><img src="img/menu/jelp-app-tijuana-ricardos-agua-de-frutas-naturales_800x.png"></p>
									<a href="#" class="genric-btn info radius">Comprar</a>					
							</div>
						</div>
							
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Jarra de Agua</h4>
									<p class="price float-right">
										$20.00
									</p>
								</div>
								<p><img src="img/menu/aguas-frescas-2.jpg"></p>
									<a href="#" class="genric-btn info radius">Comprar</a>							
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Licuado</h4>
									<p class="price float-right">
										$20.00
									</p>
								</div>
								<p><img src="img/menu/040ff020-e239-4574-b146-aa50124097dd.jpg"></p>
									<a href="#" class="genric-btn info radius">Comprar</a>							
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Vaso de Café</h4>
									<p class="price float-right">
										$17.00
									</p>
								</div>
								<p><img src="img/menu/images.jpg"></p>
									<a href="#" class="genric-btn info radius">Comprar</a>								
							</div>
						</div>
						</div>	
						<hr>
						<h1 id="comida"><font color="  #D9D5D5">Comida</font></h1>
						<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Papas a la francesa</h4>
									<p class="price float-right">
										$21.00
									</p>
								</div>
								<p><img src="img/menu/papasalafrancesa660x550-1200x800.jpg"></p>
									<a href="#" class="genric-btn info radius">Comprar</a>							
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Quesadillas</h4>
									<p class="price float-right">
										$20.00
									</p>
								</div>	
								<p><img src="img/menu/Quesadilla_2.jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Tortas</h4>
									<p class="price float-right">
										$17.00
									</p>
								</div>
								<p><img src="img/menu/320x180-Q90_01ce593f1e743530694dd8225de52db7.jpg"></p>
									<a href="#" class="genric-btn info radius">Comprar</a>							
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Tecolota</h4>
									<p class="price float-right">
										$29.00
									</p>
								</div>
								<p><img src="img/menu/el-caifan.jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Sopes</h4>
									<p class="price float-right">
										$21.00
									</p>
								</div>	
								<p><img src="img/menu/r_3891_1475601177.jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Chilaquiles</h4>
									<p class="price float-right">
										$25.00
									</p>
								</div>	
								<p><img src="img/menu/d73e60cc-7b35-4e11-b1b5-9a16f7c741ec.jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							
							<div class="single-menu" >
								
								<div class="title-div justify-content-between d-flex">
									<h4>Sincronizada</h4>
									<p class="float-right">
										$18.00
									</p>
									
									
								</div>
								<p><img src="img/menu/descarga.jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Tacos de bistec</h4>
									<p class="price float-right">
										$20.00
									</p>
								</div>	
								<p><img src="img/menu/descarga (1).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Tacos de maíz</h4>
									<p class="price float-right">
										$18.00
									</p>
								</div>	
								<p><img src="img/menu/getlstd-property-photo.jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Flautas de pollo</h4>
									<p class="price float-right">
										$26.00
									</p>
								</div>		
								<p><img src="img/menu/img_flautas_de_pollo_mexicanas_56335_600.jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Burrito</h4>
									<p class="price float-right">
										$13.00
									</p>
								</div>	
								<p><img src="img/menu/images (1).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Burrazo</h4>
									<p class="price float-right">
										$21.00
									</p>
								</div>	
								<p><img src="img/menu/images (2).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Gringa</h4>
									<p class="price float-right">
										$18.00
									</p>
								</div>	
								<p><img src="img/menu/gringa-de-arrachera-con.jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Sandwich Vegan</h4>
									<p class="price float-right">
										$23.00
									</p>
								</div>	
								<p><img src="img/menu/images (3).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Sandwich go green</h4>
									<p class="price float-right">
										$25.00
									</p>
								</div>	
								<p><img src="img/menu/descarga (2).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Club Sandwich</h4>
									<p class="price float-right">
										$29.00
									</p>
								</div>	
								<p><img src="img/menu/descarga (3).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Sandwich tropical</h4>
									<p class="price float-right">
										$30.00
									</p>
								</div>	
								<p><img src="img/menu/images (4).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Pegasus</h4>
									<p class="price float-right">
										$45.00
									</p>
								</div>
								<p><img src="img/menu/descarga (4).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Hamburguesa</h4>
									<p class="price float-right">
										$23.00
									</p>
								</div>	
								<p><img src="img/menu/images (5).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Hotdog</h4>
									<p class="price float-right">
										$20.00
									</p>
								</div>	
								<p><img src="img/menu/images (6).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Banderillas</h4>
									<p class="price float-right">
										$24.00
									</p>
								</div>	
								<p><img src="img/menu/descarga (5).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Salchipapas</h4>
									<p class="price float-right">
										$22.00
									</p>
								</div>	
								<p><img src="img/menu/images (7).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Nachos</h4>
									<p class="price float-right">
										$20.00
									</p>
								</div>	
								<p><img src="img/menu/images (8).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Cheese Balls</h4>
									<p class="price float-right">
										$26.00
									</p>
								</div>	
								<p><img src="img/menu/descarga (6).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Maruchan</h4>
									<p class="price float-right">
										$17.00
									</p>
								</div>	
								<p><img src="img/menu/descarga (7).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Vaso de fruta</h4>
									<p class="price float-right">
										$20.00
									</p>
								</div>	
								<p><img src="img/menu/descarga (8).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Omelette</h4>
									<p class="price float-right">
										$30.00
									</p>
								</div>	
								<p><img src="img/menu/descarga (9).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Tazón de ensalada</h4>
									<p class="price float-right">
										$40.00
									</p>
								</div>	
								<p><img src="img/menu/images (9).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
						</div>
						<hr>
						<h1 id="postres"><font color="  #D9D5D5">Postres</font></h1>
						<div class="row">
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Churros Pegaso</h4>
									<p class="price float-right">
										$13.00
									</p>
								</div>	
								<p><img src="img/menu/images (10).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Vaso de arroz con leche</h4>
									<p class="price float-right">
										$12.00
									</p>
								</div>	
								<p><img src="img/menu/images (11).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Vaso de flan</h4>
									<p class="price float-right">
										$12.00
									</p>
								</div>	
								<p><img src="img/menu/descarga (10).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>VAso de gelatina</h4>
									<p class="price float-right">
										$12.00
									</p>
								</div>
								<p><img src="img/menu/images (12).jpg"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
							
							<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Rebanada de pastel</h4>
									<p class="price float-right">
										$17.00
									</p>
								</div>	
								<p><img src="img/menu/95ae47a0d807ac822259ba90a456b2bd.png"></p>
								<a href="#" class="genric-btn info radius">Comprar</a>	
							</div>
						</div>	
					</div>
						
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