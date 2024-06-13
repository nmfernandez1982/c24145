<?php

class EdadNovalidaException extends Exception{}

class Persona
{
    public $nombre;
    public $edad;

    public function __construct($nombre,$edad)
    {   
        if($edad<0|| !is_numeric($edad))
        {
            throw new EdadNovalidaException("Tiene que ser un numero y no puede ser menor que 0");
        }
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
}






class ListaPersonas
{
private $lista=[];

        public function agregarPersona(Persona $persona)
        {
            $this->lista[]=$persona;
        }

        public function obtenerLista()
        {
            return $this->lista;
        }
}




try
{
//crear instacias de persona
$persona1=new Persona("Julieta",45);
$persona2=new Persona("Nicolas",43);
$persona3=new Persona("Valentina",18);
$persona4=new Persona("Valentina",-5);

//crear una instacia del tipo ListaPersona y agregar Persona;
$listaPersonas=new ListaPersonas();
$listaPersonas->agregarPersona($persona1);
$listaPersonas->agregarPersona($persona2);
$listaPersonas->agregarPersona($persona3);
}
catch(EdadNovalidaException $e)
{
    echo "Error".$e->getMessage();
}
catch(Exception $e)
{
    echo "Error General".$e->getMessage();
}






//obtener la lista e imprimir.
$listado=$listaPersonas->obtenerLista();

foreach($listado as $persona)
{
    echo "Nombre : ".$persona->nombre." ,Edad:".$persona->edad."\n" ;
}


?>