<?php

include_once 'Triangulo.php';
include_once 'FiguraGeometrica.php';

$string = 'Todo ok';

echo "hola todo instalado . $string";

$triangulo = new Triangulo();

$Figura = new FiguraGeometrica();

$triangulo->ContarHasta10();

?>