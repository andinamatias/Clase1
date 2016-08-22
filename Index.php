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

echo "<h2> hola php soy '$nombre'</h2>";

echo(rand() . "<br>"); // numero random (aleatorio).
echo(rand(10,100)); // numero random entre 10 y 100.

while($cont < $veces)
{

echo(rand(0,9) . "<br>");
echo "'$cont'" . "<br>";
$cont = $cont +1;

switch ($cont) {
	case 1:
		echo "es uno"
		break;
	case 2:
		echo "es dos"
		break;
	default:
		# code...
		break;
}



}

?>
</body>
</html>