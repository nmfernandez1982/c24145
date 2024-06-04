<?php
$enteros=[9,11,1,8,2,4,200,21,3];

$maximo=max($enteros);
var_dump($maximo);

$maximo=0;

foreach($enteros as $entero)
{
    if($entero>$maximo)
    {
        $maximo=$entero;
    }    
}
echo "EL maximo es: ".$maximo;




?>