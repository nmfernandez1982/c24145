//crear un nuevo elemento
var nuevoParrafo = document.createElement("p");

//crear contenido de texto para el parrafo
var texto=document.createTextNode("Hola Mundo.....");


//añadir el contenido de texto al parrafo
nuevoParrafo.appendChild(texto);

//obtengo el elemento a donde quiero agregar una P
var nuevo=document.getElementById("nuevo");

nuevo.appendChild(nuevoParrafo);