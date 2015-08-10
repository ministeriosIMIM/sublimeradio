<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sublime Radio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Raleway:800,500,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header">
        	<div class="container">
            	<h1 id="logo">
                	<a href="index.html"><i class="logo-a logo-b"></i><i class="logo-mini-a logo-mini-b"></i>Sublime Radio</a>
                </h1>
            	<nav id="menu-principal">
                	<div class="navbar-header">
                        <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
              			</button>
                    </div>
                	<div class="navbar-collapse collapse">
                        <ul class="redes-sociales">
                    		<li><a class="link-twitter" href="#"><i class="icono-twitter"></i>¡Síguenos por Twitter!</a></li>
                    		<li><a class="link-facebook" href="#"><i class="icono-facebook"></i>¡Síguenos por Facebook!</a></li>
                    	</ul>
                    	<ul class="menu">
                        	<li class="main-menu-item"><a class="menu-link" href="#">Inicio</a></li>
                            <li class="main-menu-item">
                            	<a class="menu-link" href="#">Lo Último</a>
                                <ul class="sub-menu">
                                	<li class="sub-menu-item"><a href="#">Item 1</a></li>
                                    <li class="sub-menu-item"><a href="#">Item 2</a></li>
                                    <li class="sub-menu-item"><a href="#">Texto con 2 Palabras</a></li>
                                    <li class="sub-menu-item"><a href="#">Palabralargamas</a></li>
                                    <li class="sub-menu-item"><a href="#">Item 5</a></li>
                                </ul>
                            </li>
                            <li class="main-menu-item"><a href="#">Programación</a></li>
                            <li class="main-menu-item"><a href="#">Recomendados</a></li>
                            <li class="main-menu-item"><a href="#">Equipo</a></li>
                            <li class="main-menu-item"><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="linea"></div>
        </header>
        <section id="slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
            	<div class="container">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/wp/foto1-slider.jpg" class="img-responsive">
                  <div class="carousel-caption">
                    <h2 class="tit-slide">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm</p>
                  </div>
                </div>
            </div>
            <div class="item">
              <div class="container">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/wp/foto2-slider.jpg" class="img-responsive">
                  <div class="carousel-caption">
                    <h2 class="tit-slide">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm</p>
                  </div>
               </div>
            </div>
          </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          <div class="textura"></div>
          <div class="banda"></div>
          <div class="mitad"></div>
        </section>
        <section id="cancion">
        	<div class="container">
            	<form>
            		<input class="form-control" type="text" placeholder="Pide tu canción favorita aquí...">
                </form>
            </div>
        </section>
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
