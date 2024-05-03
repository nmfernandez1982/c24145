
/*variable gloal*/ 
var global="Variable Global";

function escribirTexto()
{
    console.log(global);
}
escribirTexto();

/* variable local */

function escribirTexto2()
{
    var local="Variable Local";
    //console.log(local);
}
//console.log(local);
//escribirTexto2();

/*Otra variable local*/

function login()
{
    var habilitado;
    if(1==1 & 2==2)
    {
        habilitado=true;        
    }
    else
    {
        habilitado=false;
    }

    return habilitado;
}


if(habilitado=true)
{
    //codigo para mostar una a.
}

function ejemplo()
{
    if(1==1)
    {
        var bloque="Variable en bloque";
        console.log(bloque);
    }
    console.log(bloque);
}

ejemplo();

