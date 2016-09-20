<?php
					

					$archivo =@ fopen ("miarchivo.txt", "r");

					rewind($archivo);//levar el puntero al comienzo del fichero
					while(!fof($archivo))//contola que no este al final del archivo
					{


						if($linea )

					}

					/*
					$NombreCompleto=explode(".", $_FILES['foto']['name']);
					$Extension=  end($NombreCompleto);
					$arrayDeExtValida = array("jpg", "jpeg", "gif", "bmp","png");  //defino antes las extensiones que seran validas
					if(!in_array($Extension, $arrayDeExtValida))
					{
					   echo "Error archivo de extension invalida";
					}
					else
					{
						//$destino =  "fotos/".$_FILES["foto"]["name"];
						$destino = "fotos/". $_POST['text'] ."." .$Extension;
						//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
    					if (move_uploaded_file($_FILES["foto"]["tmp_name"],$destino))
    					{		
      						 echo "ok";
      					}
      					else
      					{   
      						 echo "algun error";
      					}

					}

					$archivo = fopen ("")

					*/
					

?>

