<?php
$variable="100.25";
$entero=(int) $variable;
echo $entero."\n";
$cadena=(string) $variable;
echo $cadena."\n";
$float=(float) $variable;
echo $float."\n";
$boleano=(bool) $variable;
echo $boleano."\n";
$array = (array) $variable;
print_r($array) ;

echo "----------"."\n";

$variable="100.25";

$entero=intval($variable);
echo $entero."\n";

$cadena=strval($variable);
echo $cadena."\n";

$float=floatval($variable);
echo $float."\n";

$bool=boolval($variable);
echo $bool."\n";

?>