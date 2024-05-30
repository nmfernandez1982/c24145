<?php
$mensaje="Hola Mundo....";
echo $mensaje;


//variables

//entera
$intVar=42;

$floatVar=3.24;

$stringVar="Hola Mundo......";

$boolVar=true;


$arrayVar=["manzanas","Peras","Bananas"];


//obetos

class Persona 
{
     public $nombre;
     public $apellido;

     public function __construct($nombre,$apellido)
     {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
     }
}

$objectVar=new Persona("Nicolas","Apellido");

$nullVar=null;

//echo "Entero: ",$intVar;

echo "Entero: $intVar\n";

?>