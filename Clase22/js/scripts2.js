

//funcion que agregue la imagen 

function agregarImagen()
{
    //crear un  nuevo nodo de imagen
    var nuevaImagen=document.createElement("img");

    //agregar atributos
    nuevaImagen.src="messi.jpeg";
    nuevaImagen.alt="Messi";

    //obtener en donde la quiero agregar
    var nuevo=document.getElementById("nuevo");

    //insert imagen en DOM
    nuevo.appendChild(nuevaImagen);
}


//agregar evento al boton
var boton=document.getElementById("nuevoBoton");


boton.addEventListener("click",agregarImagen);





