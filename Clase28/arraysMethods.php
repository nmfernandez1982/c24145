<?php 
$cadena="Hola Mundo....";

$longitud=strlen($cadena);
echo "la cantidad de letras es:".$longitud."\n";

$cadena_mayuscula=strtoupper($cadena)."\n";
$cadena_minuscula=strtolower($cadena)."\n";
echo $cadena_mayuscula;
echo $cadena_minuscula;


$subcadena=substr($cadena,1,4);
echo $subcadena."\n";


$nuevaCadena=str_replace("Mundo","PHP",$cadena);
echo $nuevaCadena."\n";

$cadenaInvertida=strrev($cadena);
echo $cadenaInvertida;


?>