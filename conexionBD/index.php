<?php
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET["op"];

switch ($op) {
	case "alta":
		$contenido = "php/alta-contacto.php";
		$titulo ="Registro";
		break;

	case "baja":
		$contenido = "php/baja-contacto.php";
		$titulo ="Baja de contacto";
		break;

	case "cambios":
		$contenido = "php/cambios-contacto.php";
		$titulo ="Notas proyecto";
		break;

	case "consultas":
		$contenido = "php/consultas-contacto.php";
		$titulo ="Consultas a contacto";
		break;
	case "notas":
		$contenido = "php/editor-notas/estructura-editor.php";
		$titulo ="NOTAS";
		break;
	
	default:
		$contenido="php/home.php";
		$titulo = "Mis contactos v1";

		break;
}


?>

<!DOCTYPE html>

<html lang="es">

<head>
	
	<meta charset="utf-8"/>
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" type="text/css" href="css/mis-contactos.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		!window.Jquery && document.write("<script src='../js/jquery.min.js'><\/script>");
	</script>
	<script src="js/mis-contactos.js"></script>

	<body>
<!---->
		<center>
			<a href="../index.php"><img class="zoom"src="../img/Titulo.png"></a>
	<article id="principal">
				<!--<ul>Para enviar variables por php se usa (?) ese signo indica que después de la URL viene una variable de la siguiente manera:<li><a class="cambio"href="?op=alta"> 
			<nav>
				<ul>Para enviar variables por php se usa (?) ese signo indica que después de la URL viene una variable de la siguiente manera:<li><a class="cambio"href="?op=alta"> 
					<li><a class="cambio"href="index.php">Home</a></li>
					<li><a class="cambio"href="?op=alta">Alta de contacto</a></li>
					<li><a class="cambio"href="?op=baja">Baja de contactos</a></li>
					<li><a class="cambio"href="?op=cambios">Cambios de contacto</a></li>
					<li><a class="cambio"href="?op=consultas">Consultas de contacto</a></li>
					
				</ul>

			</nav>-->
			<section id="principal">
				<?php include($contenido); ?>

			</center>

		</article>
<footer><p><b>&copy; Copyright</b> Fabián Durán <br/><br/></p></footer>	
</section>




	</body>

</head>