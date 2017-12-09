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
		$contenido = "php/cambiosadmin-contacto.php";
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
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		!window.Jquery && document.write("<script src='../js/jquery.min.js'><\/script>");
	</script>
	<script src="js/mis-contactos.js"></script>
</head>
	<body>
<!---->
		<center><section id="contenidosesion">
			<a href="../index.php"><img class="zoom"src="../img/Titulo.png"></a>
	<article id="principal">
			
			<nav id="menu-principal">
				<ul>
					
					<li><a class="cambio"href="?op=alta">Agregar usuario</a></li>
					<li><a class="cambio"href="?op=baja">Eliminar usuario</a></li>
					<li><a class="cambio"href="?op=cambios">Revisión de proyectos</a></li>
					<li><a class="cambio"href="?op=consultas">Consultas de estudiantes</a></li>
					<li><a class="cambio"href="sesion/salir.php">Salir</a></li>
					
				</ul>

			</nav>
			<section id="principal">
				<?php include($contenido); ?>
<footer><p><b>&copy; Copyright</b> Fabián Durán <br/><br/></p></footer>
			</section></center>

		</article>

</section>

	</body>

