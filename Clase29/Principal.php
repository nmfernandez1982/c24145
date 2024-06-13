<?php

include 'Persona.php';
include 'ListaPersonas.php';


try
{
//crear instacias de persona
$persona1=new Persona("Julieta",45);
$persona2=new Persona("Nicolas",43);
$persona3=new Persona("Valentina",18);
//$persona4=new Persona("Valentina",-5);

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