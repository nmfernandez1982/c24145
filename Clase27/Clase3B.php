<?php
$frutas=array("Peras","Manzanas","Anana","Uvas");
$frutas1=array("Peras","Melones","Manzanas","Anana","Uvas");

var_dump($frutas);

$diferencia=array_diff($frutas1,$frutas);

$arrayNumero=array(1,2,3,4,5,10,1,22);
print_r($diferencia);




$cantidad=count($arrayNumero);
var_dump($cantidad);

array_push($frutas,"manzanas","duraznos");
var_dump($frutas);
?>