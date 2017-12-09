<?php
error_reporting(E_ALL ^ E_NOTICE);
// asigno a variables php los valores que vienen del formulario como el campo del emailesta desahabilitadoen el form php no lo reconoce por eso tengo que guardar su valoren un campo oculto}
$email= $_POST["email_hdn"];
$titulo = $_POST["titulo_txt"];
$introduccion = $_POST["introduccion_txt"];
$objetivos = $_POST["objetivos_txt"];
$problema = $_POST["problema_txt"];
$justificacion = $_POST["justificacion_txt"];
$referente = $_POST["referente_txt"];
$metodologia = $_POST["metodologia_txt"];
$bibliografia = $_POST["bibliografia_txt"];
include("conexion.php");
//valido que el usuario  exista no este duplicado 
$consulta="SELECT *FROM contactos WHERE email='$email'";
$ejecutar_consulta= $conexion->query($consulta);
//trae el número de registro de consulta, la lógica es que esta variable este en 1 0 2 , 1 es porque el usuario ya exite 0 si no existe si da mas de dos ahí un error de normalización de BD
$num_regs=$ejecutar_consulta->num_rows;
if($num_regs==1)
{
	
		//actualizo los datos a la BD
		$consulta= "UPDATE contactos SET titulo='$titulo',introduccion='$introduccion',objetivos='$objetivos',problema='$problema',justificacion='$justificacion',referente='$referente',metodologia='$metodologia',bibliografia='$bibliografia' WHERE email='$email'";
		$ejecutar_consulta= $conexion->query(utf8_encode($consulta));
		if($ejecutar_consulta)
		{
			$mensaje = "Se han hecho los cambios al contacto con email <b>$email</b> :D";
			
         }
	else
		{
			$mensaje = "No se pudo modificar los datos del  contacto con email <b>$email</b> :__O";
         }
}
else
{
	//si es diferente de uno se manda un mensaje de error
	$mensaje="No se pudieron hacer los cambios en el contacto <b>$email</b>porque no existe o esta duplicado ";
}
session_start();
//redirijo el flujo de la página
if($_SESSION["usuario"]=="admin@hotmail.com")
     		{
     			 header("Location: ../indexadmin.php");
     		}
     			else
     				{
			header("Location: ../index.php?op=cambios&mensaje=$mensaje");}
//header("Location: ../index.php?op=cambios&mensaje=$mensaje");
			$conexion->close();
?>