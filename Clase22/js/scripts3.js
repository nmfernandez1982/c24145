//crear una funcion que realice el pedido a la API
async function obtenerUsuarioAleatorio()
{
    try
    {
        //Realizar la peticion
        let respuesta = await fetch('https://randomuser.me/api/');
        let datos = await respuesta.json();
        return datos.results[0];

    }
    catch(error)
    {
        throw new error ("Error al obtener usuario",error);
    }
}

function agregarUsuarioAlDom(usuario)
{
    let contenedorUsuario = document.getElementById("usuarios");

    let nuevoUsuarioDiv=document.createElement("div");

    nuevoUsuarioDiv.innerHTML=`
        <img src="${usuario.picture.medium}" alt="usuario"> </img>
        <p>Nombre:${usuario.name.first}</p>
        <p>Correo:${usuario.email}</p>`;


    contenedorUsuario.appendChild(nuevoUsuarioDiv) ;  
}

let obtenerUsuarioBtn=document.getElementById("obtenerUsuarioBtn");

//al boton le agrego un evento

obtenerUsuarioBtn.addEventListener('click', async() => {
    try
    {
        //llamo y obtengo un usuario nuevo
        let usuario = await obtenerUsuarioAleatorio();
        // se lo paso a la otra funcion para agregarla en en DOm
        agregarUsuarioAlDom(usuario);
    }
    catch(error)
    {
        console.log("hay un error",error);
    }
});






