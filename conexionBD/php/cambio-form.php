<meta charset="utf-8"/>
<link rel="shortcut icon" type="image/x-icon" href="../../faviconGp.ico"/>

<link type="text/css" rel="stylesheet" href="../editor/jquery-te-1.4.0.css">

        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="../editor/jquery-te-1.4.0.min.js" charset="utf-8"></script>

		

<div>

		<label for="email">Usuario:</label>
	<input id="hidcolor"type="email" id="email"class="cambio"name="email_txt"placeholder="Escribe tu email"title="Tu email" value="<?php echo $registro_contacto["email"]; ?>"disabled required/>
		<!--como se ha colocado el email disabled osea qeu no se puede editar al enviar los datos por automatico se envia vacio, para solocionar este problema se usa un input oculto-->
		<input type="hidden"name="email_hdn"value="<?php echo $registro_contacto["email"]; ?>"/>
	</div>

	<div>
    	
    	<!--.......................TITULO........................-->
    	<h1>Titulo:<h1>
    	<input type="text"id="titulo"class="cambio jqte-test"name="titulo_txt"placeholder="Escribe tu titulo"title="Tu titulo"value="<?php echo utf8_decode($registro_contacto["titulo"]); ?>"/>
    		
			
   	</div>
   		<!--.......................INTRODUCCION........................-->
	<h1>introducción:<h1>
	<div>
       	<input type="text"id="introduccion"class="cambio jqte-test"name="introduccion_txt"placeholder="Escribe tu introduccion"title="Tu introduccion"value="<?php echo utf8_decode($registro_contacto["introduccion"]); ?>" />
       
	</div>
	<!--.......................OBJETIVOS........................-->
	<div>
    	   <h1>Objetivos:<h1> 	
    	<input type="text"id="objetivos"class="cambio jqte-test"name="objetivos_txt"placeholder="Escribe tu objetivos"title="Tu objetivos"value="<?php echo utf8_decode($registro_contacto["objetivos"]); ?>" />
    	
    	
	</div>
	<!--.......................PLANTEAMIENTO DEL PROBLEMA........................-->
	<div>
    	   <h1>Planteamiento del problema:<h1> 	
    	<input type="text"id="problema"class="cambio jqte-test"name="problema_txt"placeholder="Plantea tu problema"title="Tu problema"value="<?php echo utf8_decode($registro_contacto["problema"]); ?>" />
    	
    	
	</div>
	<!--.......................JUSTIFICACIÓN........................-->
	<div>
    	   <h1>Justificación:<h1> 	
    	<input type="text"id="justificacion"class="cambio jqte-test"name="justificacion_txt"placeholder="Escribe tu justificación"title="Tu justificación"value="<?php echo utf8_decode($registro_contacto["justificacion"]); ?>" />
    	
    	
	</div>
	<!--.......................REFERENTE TEÓRICO........................-->
	<div>
    	   <h1>Referente teórico:<h1> 	
    	<input type="text"id="referente"class="cambio jqte-test"name="referente_txt"placeholder="Escribe tu referente teórico"title="Referente teórico"value="<?php echo utf8_decode($registro_contacto["referente"]); ?>" />
    	
    	
	</div>
	<!--.......................Metodología........................-->
	<div>
    	   <h1>Metodología:<h1> 	
    	<input type="text"id="metodologia"class="cambio jqte-test"name="metodologia_txt"placeholder="Escribe tu Metodología"title="Tu Metodología"value="<?php echo utf8_decode($registro_contacto["metodologia"]); ?>" />
    	
    	
	</div>
	<!--.......................Bibliografía........................-->
	<div>
    	   <h1>Bibliografía:<h1> 	
    	<input type="text"id="bibliografia"class="cambio jqte-test"name="bibliografia_txt"placeholder="Escribe tu Bibliografía"title="Tu Bibliografía"value="<?php echo utf8_decode($registro_contacto["bibliografia"]); ?>" />
    	
    	
	</div>
	<!--.......................Botón submit........................-->
	<div>
		<input type="submit"id="enviar-cambio"class="cambio"name="enviar_btn"value="Actualizar"/>
	</div>
	<script>
	$('.jqte-test').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
</script>

<body>




	