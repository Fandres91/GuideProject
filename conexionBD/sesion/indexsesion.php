<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Guide Project </title>
	<meta name="description"content="Bienvenido a Guide project"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/><!-- meta especifica. el viewport sirve para que el dispositivo que este visualizando el sitio web lo veo según el ancho del dispositivo -->
	<link rel="shortcut icon" type="image/x-icon" href="../../faviconGp.ico"/>
	<link rel="stylesheet" type="text/css" href="../css/mis-contactos.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		!window.Jquery && document.write("<script src='../../js/jquery.min.js'><\/script>");
	</script>
	<script src="../js/mis-contactos.js"></script>
	<style>
		
	</style>
</head>
<body>
<section id="contenidosesion">
	<a href="../../index.php"><img class="zoom"src="../../img/Titulo.png"></a>
	<article id="principal">
		
	<!--Siempre que se usa la etiqueta form tiene que determinar el nombre y usar la etiqueta action que indica a donde va ir la info del formlario-->
	<form id="responsive"class="cambio"name="autentificación_frm" action="control.php"method="post" entype="application/x-www-form-urlencoded">
		<?php
		// con esta linea de código y (E_ALL^ E_NOTICE) estamos diciendo solamente mandame mensajes de errores que tenga mi aplicación, avizos o alartas no las va a mostrar
		error_reporting(E_ALL^ E_NOTICE);
		////
		if($_GET["error"]=="si")
		{
			echo "<span>Verifica los datos</span>";
		}
		else
		{
			echo "<p class='res'>Introduce los datos<p>";
		}
		?>
	
		
		<br/><br/>
		<p class="res">Usuario:</p>
		<input type="email" name="emailsesion_txt"placeholder="Correo electronico"/>
		<br/><br/>
		<p class="res">Password</p>
		<input type="password" name="contrasena_txt"placeholder="Contraseña">
		<br/><br/><br/>
		<input type="submit"name="entrar_btn"value="Entrar"/>
		<br/><br/>
		<a href="../index.php?op=alta">
		<input type="button"name="registro"value="Registro"/></a>
		
	</form>
	</article>
<footer><p><b>&copy; Copyright</b> Fabián Durán <br/><br/></p></footer>	
</section>
		
</body>
</html>