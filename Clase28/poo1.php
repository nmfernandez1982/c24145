<?php

//defino una clase
class Persona
{ 
    //atributos
    public $nombre;
    public $edad;
    public $hobbie;


    //metodo constructor
    public function __construct($nombre,$edad,$hobbie)
    {
        //this-> referencia al atributo dentro de la clase.
     $this->nombre=$nombre; 
     $this->edad=$edad;
     $this->hobbie=$hobbie;
    }

    //metodo
    public function saludar()
    {
        //return "Hola Mundo... Mi nombre es:".$this->nombre;
        return "Hola Mundo... Mi nombre es:{$this->nombre}";
    }

    public function obtenerEdad()
    {
        return "Mi edad es:{$this->edad}";
    }

    public function imprimir()
    {
        return "Nombre: {$this->nombre} edad: {$this->edad} Hobbie: {$this->hobbie}";
    }


}

//crear objetos nuevos (instanciar objetos)

$persona1=new Persona("Nicolas",43,"Play 5");
$persona2=new Persona("Maria",27,"Play 4");

echo $persona1->saludar();
echo $persona2->saludar()."\n";

echo $persona1->imprimir();

?>