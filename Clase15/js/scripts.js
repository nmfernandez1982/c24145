

var nota=2;

function imprimirVariable()
{
//conjunto de instruccion
var elemento=document.getElementById("resultado");
elemento.innerHTML="La nota es igual a "+nota;
console.log("Por consola la nota vale: "+nota);
}

/*
nomber
string
boolean
*/

var nombre="Nicolas";
var valor=1300;
var sinDatos;

console.log("EL tipo de variable es: " + typeof(nombre));

console.log("EL tipo de variable es: " + typeof(valor));

console.log("EL tipo de variable es: " + typeof(sinDatos));

/*operadores aritmeticos*/
var result=0;
/*
+
-
*
/
%
*/ 

var valor1="12.5";
//valor1=Number(valor1);
//valor1=parseInt(valor1);
valor1=parseFloat(valor1);
var valor2=12;
result=valor1+valor2;
console.log("El resultado de la operacion es:" + result);

/*Operadores Logicos*/

/*
< menor
> mayor
<= menor o igual a
>= mayor o igual a
!= distinto de
=  operador de asignacion
== doble igualacion
=== triple igualacion
*/

var nota1=7;
var nota2=7;


if(nota1>=7 & nota2>=7)
{
    //se ejecuta si la respuesta de la expresion es true
    console.log("El alumno esta aprobado");
}
else
{
    //se ejecuta si la respuesta de la expresion es false
    console.log("El alumno no esta aprobado");
}

/*tabla de verdad del &*/

/*
V V = V
F V = F
V F = F
F F = F
*/



nota1=1; // es mayor que 5 
nota2=9; // es igual 10


if(nota1>=5 | nota2==10)
{
    //se ejecuta si la respuesta de la expresion es true
    console.log("El alumno esta aprobado");
}
else
{
    //se ejecuta si la respuesta de la expresion es false
    console.log("El alumno no esta aprobado");
}


/*tabla de verdad del |*/

/*
V V = V
F V = V
V F = V
F F = F
*/