<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Guide Project </title>
	<!--la etiqueta meta se utiliza para agregar información a la página-->
	<!--el meta charset detemina como se verán ciertos caracateres -->
	
	<meta name="description"content="Bienvenido a mi p&aacute;ginota"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/><!-- meta especifica. el 

viewport sirve para que el dispositivo que este visualizando el sitio web lo veo según el ancho del 

dispositivo -->
	<link rel="shortcut icon" type="image/x-icon" href="faviconGp.ico"/>
	<link rcl="author" type="text/plain" href="humans.txt"/>
	<link rel="sitemap" type="aplication/xml"title="sitemap" href="sitemap.xml"/>
	<!-- se recomienda que los plug-in esten antes de cargar la libreria de css-->
	<link rel="stylesheet" href="css/flexslider.css"/>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<link rel="stylesheet" href="css/webix.css" type="text/css" media="screen" />
	<!--Scrit del calendario-->
	<script type="text/javascript" src="../js/testdata.js"></script>
	
    <script src="js/webix.js" type="text/javascript"></script>
	
	<!--Se invoca desde los servidores de google la librería de Jquery, por eso solo funciona con 

internet -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><!--

este link actualiza automaticamente las versiones de jquery-->

	<!--este comando carga jquery cuando el dispositivo no es ta conectado a internet..->como la 

barra es un caracter especial en javaScript hay que comentarla para que la considere como candena de 

texto,entonces hay que escaparla contra la barra <\/script>");.(video 8) -->
	<script>
		!window.Jquery && document.write("<script src='js/jquery.min.js'><\/script>");
	</script>
  
    <!--este es el que habilita la funcióm de menú responsibe-->
   

	<script src="js/jquery.flexslider.js"></script>
	<!-- este script ejecuta el flexslider, se crea un objeto window. este analiza hasta que 

window a cargado y ejecuta la función-->
	<!-- $('.flexslider').flexslider(); los puntos indican que es una clase de html por eso 

.flexslider..este comando busca en el elemento que tenga la clase flexslider que en este caso es 

<div>de flexslider y ejecuta el metódo -->
	<script>
		$(window).on("load",function() {
			
			$('.flexslider').flexslider();
		});
	</script>
	<!-- script que crea el calendario-->
	
</head>
<body>
   <!-- Navigation -->
  <section id="navigation" class="navbar-fixed-top ">
    <div class="menu-position">
      <div class="nav-logo"> 
        <a href="index.php" class="logo">
          <img src="img/Titulo.png" class="fade  rotarY"id="animated_div"alt="logo"/></a>
      
      </div >
      <!--................................................-->
      <?php 
      session_start(); 
     
     ?>
    <div id="divsesion">
 <?php error_reporting(E_ALL ^ E_NOTICE);

     if(!$_SESSION["usuario"])
     {
     	

     echo '<a id="none"href="conexionBD/sesion/indexsesion.php"><img id="sesion"src="img/sesion.svg"title="Iniciar sesión"alt="Sesión"/></a></br><figcation id="nombreusuarió">Iniciar sesión</figcation> ';
      }
    	 else
     	{
     		if($_SESSION["usuario"]=="admin@hotmail.com")
     		{
     			 header("Location: conexionBD/indexadmin.php");
     		}
     			else
     				{

     			echo '<a id="none" href="conexionBD/sesion/salir.php"><img id="sesion"class="login"src="img/sesion.svg"title="Salir"alt="Sesión"/></a></br>';
     			echo $_SESSION["usuario"];
 	 				}

 	 	}

 ?>
     
	    
  </div>

    <!-- ................................................-->
      <a class="mini-nav-button"><i class="nav-fa fa fa-bars"></i></a>
		
      <div class="nav-menu"> 
    <nav id="menu-principal"><!--es una etiqueta de menú de navegación, o conjunto de enlaces a otras 

páginas-->
<ul>
	<li class="active"><a href="index.php"class="active">Inicio</a><li/>
	
	<li><a href="servicio.html">Proyecto </a><li/>
	<li><a href="icontec.html">Icontec</a><li/>
	<li><a href="contacto.html">Contacto</a><li/>	

</ul>
	</nav>	
      </div>
    </div>
  </section>
	
<!--la etiqueta section permite trabajar por secciones, es decir por bloques donde se puede colocar un 

título diferente a cada seccción -->
<section id="contenido">
	<p class="bienvenido"id="bienvenida">Bienvenidos a Guia de Proyectos</p>
	
	
		<!--la etiqueta article se usa para separar algo de la seccion o bloque, son 

fragmentos independientes del contenido-->
<article id="nuestros-servicio">
		<article id="galeria-inicio">
			<h3>Proyectos destacados</h3>
			<div class="flexslider">
				
				<ul class="slides">
					
					<li><a href="#" ><img class="imagen" src="img/grafico.jpg"/></a>
						<center><p class="flex-caption">Gráficador de funciones trigonometrica</p></center>
					</li>
					<li>
						<img class="imagen" src="img/moster.png"/>
						<center><p class="flex-caption">Video juego educativo</p></center>
					</li>
					
					<li><a href="#"><img class="imagen" src="img/panela.jpg"></a>
						<center><p class="flex-caption">Maquina pulverizadora de panela</p></center>
					</li>
				</ul>
			</div>

		</article>
</article>
	
    <aside id="pagina-principal"><!--widgets sociales-->
    	<!--Twitter-->

    	<script src="http://platform.twitter.com/widgets.js"></script>
    	<a href="http://twitter.com/share" class="twitter-share-button" data-text="#fabian.com " data 

url="http//gp.com" >Twitter</a><!--El data url si se quiere twittear y dentro del twitt hay una 

dirección..data-count muestra cuantas veces se a twtteado el botón..data-text lo que se quiere 

twittear..data-count="vertical">>esto muestra la cajad de conteo ensima del botón de twitter-->
		<!--facebook-->
		
		<br/><br/>
   		<h3>Investigación</h3>
   		<br/>
   		<span id="text-inicio">
   		<p>Es la actividad de búsqueda que se caracteriza por ser reflexiva, sistemática y 

metódica; tiene por finalidad obtener conocimientos y solucionar problemas científicos, filosóficos o 

empírico-técnicos, y se desarrolla mediante un proceso.&nbsp; <a 

href="http://www.olacefs.com/Olacefs/ShowProperty/BEA

%20Repository/Olacefs/uploaded/content/category/07.pdf" target="_blank"><cite>

(OLACEFS,2010)</cite></a></p>
   		
   		</span>

   		
   		<center><div id="listA"></div></center>
   		<h3>Niveles en el proceso de investigación</h3>	
   		<figure>
   						
   			<img class="zoom" src="img/fases-investigacion.png" alt="Fases"/>
   			
   			<figcaption><a href="http://www.unilibrebaq.edu.co/unilibrebaq/images/CEUL/mod3recoleccioninform.pdf"><cite>Gallardo & Moreno. 1999. Niveles en el proceso de investigación</cite></a></figcaption>
   		</figure>
		
</aside>		
</section>
<center><img src="img/unisangil.png"id="img-unisangil"></center>

 <!-- Include all compiled plugins (below), or include individual files as needed -->
	  <script type="text/javascript" src="js/n/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/n/plugins.js"></script>
     <script async type="text/javascript">
				$(document).ready(function(){
					$("#bienvenida").fadeTo(5000,0);
					$("#bienvenida").show(20, function(){
					
												      

});
											});
		</script>	
</body>
<html/>


