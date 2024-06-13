<?php
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

?>