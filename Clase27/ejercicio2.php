<?php
$usuarios=array(
"usuario1"=>"qweasd",
"usuario2"=>"qweasd",
"usuario3"=>"qweasd",
"usuario4"=>"qweasd");

echo "Ingrese un usuario: ";
$usuario=trim(fgets(STDIN));

echo "Ingrese un password: ";
$pass=trim(fgets(STDIN));

//verficar los datos contra la array

if(array_key_exists($usuario,$usuarios) && $usuarios[$usuario]== $pass)
{
    echo("bienvenido");
}
else
{
    echo("No puede ingresar");
}
echo ("------------------")."\n";
echo "\n".rand();
echo "\n".rand();
echo "\n".rand();
echo "\n".rand(5,15);

?>