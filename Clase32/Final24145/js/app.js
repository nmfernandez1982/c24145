document.addEventListener('DOMContentLoaded',function()
{
    const itemsTableBody=this.getElementById('itemsTableBody');

    //va a cargar la tabla en la vista
    function loadItems() {
        fetch('http://localhost/_Final2024php/api/api.php')
        //fetch('http://localhost/_Final2024php/api/api.php')
        .then(response => response.json())
        .then(data => {
            itemsTableBody.innerHTML = '';
            if (data.peliculas) 
                {
                data.peliculas.forEach(pelicula => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${pelicula.id}</td>
                        <td>${pelicula.titulo}</td>
                        <td>${pelicula.fecha_lanzamiento}</td>
                        <td>${pelicula.genero}</td>
                        <td>${pelicula.duracion}</td>
                        <td>${pelicula.director}</td>
                        <td>${pelicula.reparto}</td>
                        <td>${pelicula.sinopsis}</td>                    
                        <td>
                            <button class="btn btn-danger" onclick="deleteItem(${pelicula.id})">Eliminar</button>
                        </td>
                        <td>
                            <button class="btn btn-success" onclick="editItem(
                            ${pelicula.id}, 
                            '${pelicula.titulo}', 
                            '${pelicula.fecha_lanzamiento}', 
                            '${pelicula.genero}', 
                            '${pelicula.duracion}', 
                            '${pelicula.director}', 
                            '${pelicula.reparto}',
                            '${pelicula.sinopsis}')">Editar</button>
                        </td>
                    `;
                    itemsTableBody.appendChild(row);
                });
            } 
            else 
            {
                console.error('No se encontraron películas');
            }
        })
        .catch(error => console.error('Error:', error));
    }
       
    
      // Función para borrar una pelicula
      function deleteItem(id) 
      {
        fetch(`http://localhost/_Final2024php/api/api.php?id=${id}`, 
            {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => 
            {           
                loadItems();                      
            })
        ;
        loadItems();
    }


window.editItem=function(id,titulo,fecha_lanzamiento,genero,duracion,director,reparto,sinopsis)
{
    document.getElementById('id').value=id;
    document.getElementById('titulo').value=titulo;
    document.getElementById('fecha_lanzamiento').value=fecha_lanzamiento;
    document.getElementById('genero').value=genero;
    document.getElementById('duracion').value=duracion;
    document.getElementById('director').value=director;
    document.getElementById('reparto').value=reparto;
    document.getElementById('sinopsis').value=sinopsis;
}






window.deleteItem=deleteItem;
    loadItems();    
});