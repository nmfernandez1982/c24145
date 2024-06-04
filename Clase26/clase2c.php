<?php
//condicionales
$edad=16;

if($edad>=18)
{
    //salida x true
    echo ("Es mayor de 18 puede ingresar...");
}
else
{
    //salida x false
    echo ("No puede ingresar..")."\n";
}

$dia=date("N");

if($dia==1)
{
    echo ("hoy es lunes")."\n";
}
elseif($dia==4)
{
    echo ("hoy tenemos clase, es jueves")."\n";
}
else
{
    echo ("Al menos no es lunes")."\n";
}

$dia=date("N");

switch($dia)
{
    case 1:
            echo "Hoy es lunes";
            break;
    case 4:
            echo "Hoy es jueves en el switch";
            break;
    default:
             echo "Hoy es otro dia";
            break;
}





?>