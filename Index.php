<html>
<head>
	<title></title>
</head>
<body> <!--lo que el cliente va a ver o lo que se visualiza-->
hola mundo <!--lo que escribvo aca es codigo php-->
<?php

$nombre = "Matias";
$veces = 10;
$cont = 0;
$porc = 0;
$numeroveces = 0;
$random;

//echo "<h2> hola php soy '$nombre'</h2>";

//echo(rand() . "<br>"); // numero random (aleatorio).
//echo(rand(10,100)); // numero random entre 10 y 100.

	echo "while";
	while($cont <= $veces)
	{
		
	$random = rand(0,9);
	echo(rand(0,9) . "<br>");
	echo "'$cont'" . "<br>";
	$cont = $cont +1;

		switch ($random) {
			case 1:
				echo "es uno" . "<br>";
				$numeroveces = $numeroveces + 1;
				break;
			case 2:
				echo "es dos" . "<br>";
				break;
			default:
			//	# code...
				break;

		}

	}

$porc = $numeroveces * $veces / 100;

echo "$porc";

?>
</body>
</html>