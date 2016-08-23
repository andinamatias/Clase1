<html>
<head>
	<title></title>
</head>
<body> <!--lo que el cliente va a ver o lo que se visualiza-->
hola mundo <!--lo que escribvo aca es codigo php-->
<?php

$nombre = "Matias";
$veces = 1000;
$cont = 0;
$porc = 0;
$numeroveces = 0;
$random;
$array();

//echo "<h2> hola php soy '$nombre'</h2>";

//echo(rand() . "<br>"); // numero random (aleatorio).
//echo(rand(10,100)); // numero random entre 10 y 100.

	echo "while" . "<br>";
	for($x = 0 ; $x < 10 ; $x++)
	{
		
	$random = rand(0,9);
	//echo "muestro random: " . $random;
	//echo(rand(0,9) . "<br>");
	//echo "'$cont'" . "<br>";

		if ($random == 7) {
			
			$numeroveces = $numeroveces + 1;
			$porc = $numeroveces * 100 / 10;
		}else
		{

			$x--;
			continue;

		}

	}

echo "$porc";

?>
</body>
</html>