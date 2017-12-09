<?php
// acá digo si pais-select viene vacio incluye a conexión,pero cuando el país no este vacio no tiene que incluir la conexión si no  se evalue esto en la opción de consultas país marcara un fatal error ya que se duplica la conexión, dado que ya viene creada del archivo select que ya esta incluida
if(empty($_GET["pais_slc"]))
{
	include("conexion.php");	
}
include("funciones.php");
$ejecutar_consulta= $conexion->query($consulta);
$num_regs= $ejecutar_consulta->num_rows;
//echo $num_regs; muestra la cantidad de registros
if($num_regs==0)
{
	echo "<br/><br/><span class='mensajes'>No se encuentran registros en la busqueda:</span><br/><br/>";
}
else
{
?>
<br/><br/>
	<table>
		<thead>
			<tr>
				
				<th>nombre</th>
				<th>email</th>
				<th>sexo</th>
				
				<th>telefono</th>
				<th>Proyecto</th>
				<th>imagen</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 
			while ($registro= $ejecutar_consulta->fetch_assoc()) {
				?>
					<tr>
						
						<td><?php echo utf8_decode($registro["nombre"]); ?></td>
						<td><?php echo utf8_decode($registro["email"]); ?></td>
						<td><?php echo ($registro["sexo"]=="M")?"Masculino":"Femenino"; ?></td>
						
						<td><?php echo utf8_decode($registro["telefono"]); ?></td>
						<td><?php echo utf8_decode($registro["titulo"]); ?></td>
						<td><img src="img/fotos/<?php echo utf8_decode($registro["imagen"]); ?>"/></td>
					</tr>
			<?php
			}
			 ?>
		</tbody>
	</table>
<?php 
}
$conexion->close();
 ?>
  