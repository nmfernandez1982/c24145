<?php


//crear una funcion
function leerConsola($prompt)
{
    echo $prompt;
    $input=trim(fgets(STDIN));
    return $input;
}

//variables con datos guardados
$username="admin";
$pass="admin";

//capturar 2 datos desde la consola
$userConsole=leerConsola("Ingres su usuario");
$passConsole=leerConsola("Ingrese su password");

//comparar los datos y monstrar un mensaje por si o por no.




?>