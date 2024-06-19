<?php
class Pelicula
{
    public $id;
    public $titulo;
    public $genero;
    public $fecha_lanzamiento;
    public $duracion;
    public $director;
    public $reparto;
    public $sinopsis;

    public function __construct($titulo,$genero,$fecha_lanzamiento,$duracion=null,$director=null,$reparto=null,$sinopsis=null,$id=null)
    {
      $this->id=$id;  
      $this->titulo=$titulo;  
      $this->genero=$genero; 
      $this->fecha_lanzamiento=$fecha_lanzamiento; 
      $this->duracion=$duracion;   
      $this->director=$director; 
      $this->reparto=$reparto;  
      $this->sinopsis=$sinopsis;  
    }

    public function fromArray($data)
    {
        return new self
        (
            $data['titulo'] ?? null,
            $data['genero'] ?? null,
            $data['fecha_lanzamiento'] ?? null,
            $data['duracion'] ?? null,
            $data['director'] ?? null,
            $data['reparto'] ?? null,
            $data['sinopsis'] ?? null,
            $data['id'] ?? null,
        );






    }

    public function toArray()
    {
        return get_object_vars($this);
    }




}

?>