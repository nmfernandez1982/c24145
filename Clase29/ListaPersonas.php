<?php
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

?>