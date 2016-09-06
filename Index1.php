<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">

	<title>
	</title>
</head>
	<body>
	<div class = "CajaInicio animated rotateInUpRight">

		

		<form method="Post" id="FormIngreso" >

		<?php

		$Respuesta = $_POST['txtDos'] * $_POST['txtUno'] / 2;

		?>
					
		<label> Ingrese Lado </label>
		<input type = "text" name = "txtUno" placeholder="Base de Rectangulo">

		<label> Ingrese Lado </label>
		<input type = "text" name = "txtDos" placeholder="Altura de Rectangulo">

		<input type = "text" name = "result" placeholder="Resultado" value= <?php echo "$Respuesta" ?>>

		<input type = "submit" class = "MiBotonUTNMenuinicio">

		</form>

	</div>
	</body>
</html>



