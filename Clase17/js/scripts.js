
saludar();


//desarrollo de la funcion.
function saludar()
{
    var x=0;
    do{
        console.log("Hola Mundo "+x);
        x++;
    }while(x<5);   
}

function saludarConNombre(nombre)
{
    console.log("Hola mundo.... Mi nombre es: "+nombre);
}

saludarConNombre("Nicolas");
saludarConNombre("Julieta");
saludarConNombre("Luz");


function sumar(dato1,dato2)
{
    var result=0;
    result=(dato1+dato2);
    console.log(result);
}



sumar(8,4);

sumar(1500,1500);


function notas(nota1,nota2)
{
    var result=0;
    result=(nota1+nota2)/2;    
    return result;
}

//var final=8;
//var final=(4+4);

var final = notas(10,1);
console.log("El promedio es:"+final);

if(final>=7)
{
    console.log("EL alumno Aprobo");
}
else
{
    console.log("EL alumno No Aprobo");
}

function saludoCompleto(nombre,apellido)
{
    var legajo=170;
    var cadena;    
    cadena="Nombre: "+nombre+" Apellido: "+apellido+" Legajo: "+legajo;
    return cadena;
}

//var dato=saludoCompleto("Luz","Fernandez");

console.log(saludoCompleto("Luz","Fernandez"));


function div(a=1,b=1)
{
    if(b==0)
    {
        b=1;
    }
    var resultado=a/b;
    console.log(resultado);
}

div(1,1);
div(4,2);
div(4);
div();





