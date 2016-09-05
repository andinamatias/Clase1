<html>
<head>
	<title></title>
</head>
<body>

	<form>

	
	<label> Nombre </label>
	<input type = "text" name = "nombre" placeholder = "escriba">

	<input type = "text" name = "numero uno">


	<input type = "submit">

	</form>


</body>
</html>

<?php

	if(isset($_GET['nombre']))
	{

		echo $_GET['nombre'];

	}else
	{

        echo "primer ingreso";

	}

	//var_dump($_GET)

?>

