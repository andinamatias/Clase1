<?php 


if(isset($_POST['leer']))
{

$archivo = fopen("arch.txt","r");

while(!feof($archivo))
{
//$renglon=fgets($archivo);
//$listadoDePalabras[] = $renglon; 
$renglon=fgets($archivo);
$palabra=explode(" ",$renglon);
$listadoDePalabras[]=$palabra;
}

$cont = array();
foreach($listadoDePalabras[0] as $pala)
{
	switch(strlen($pala))
	{
		case 1:
			{	
			if($cont[0]!=0)//si esta inicializado //aca tira el error porque entra al if antes que al else.
			{
				$cont[0]++;
			}
			else//si no esta inicializado
			{
				$cont[0] = 1;
			}
		}
		case 2:
		{
			if($cont[1]!=0)
			{
				$cont[1]++;
			}
			else{
				$cont[1] = 1;
			}
		}

		case 3:
		{
			if($cont[2]!=0)
			{
				$cont[2]++;
			}
			else{
				$cont[2] = 1;
			}
		}

		default:
		{
			if($cont[3]!=0)
			{
				$cont[3]++;
			}
			else{
				$cont[3] = 1;
			}
		}
}
}

fclose($archivo);

echo "Palabras de 1 letra: ".$cont[0]."<br><br>";
echo "Palabras de 2 letras: ".$cont[1]."<br><br>";
echo "Palabras de 3 letras: ".$cont[2]."<br><br>";
echo "Palabras de 4 letras o mas: ".$cont[3]."<br><br>";

}



 ?>