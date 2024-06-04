<?php
/*for*/ 

for($x=0;$x<10;$x++)
{
echo "Hola mundo.....".$x;
}

$frutas=array("Peras","mazandas","uvas","Bananas");

//a partir de php 5.4 
$auto=["Audio","Fiat","Renault"];

echo("----------------");

foreach($frutas as $fruta)
{
    echo $fruta."\n";
}

$edades=array("Nicolas"=>43,"Julieta"=>45,"Luz"=>14);

foreach($edades as $nombre=>$edad)
{
    echo $nombre." tiene ".$edad."\n";
}

?>