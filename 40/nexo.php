<?php 
//FORMA DE SUBIR UN ARCHIVO A LA CARPETA QUE QUERAMOS

$NombreCompleto=explode(".", $_FILES['foto']['name']);
$Extension=  end($NombreCompleto);

$destino="fotos/".$_POST["nombreFoto"].".".$Extension;
var_dump($_POST);

if(isset($_POST['boton']))
{
	if (move_uploaded_file($_FILES["foto"]["tmp_name"],$destino))
    	{		
      		 echo "ok";
      		 echo "<img src=$destino>";//muestra la imagen
      	}
}




 ?>