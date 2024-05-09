//basico
let persona={
    "nombre":"juan",
    "edad":"12",
    "ciudad":"Berazategui"
};

console.log(persona);
console.log(persona.nombre + "|" +persona.ciudad);


//json anidados

let pelicula = {
    "titulo":"EL cavallero de la noche",
    "director":
              {
               "nombre": "Chritopher Nolan",
               "nacionalidad":"Britanico"
              },
    "actores":["Actor1","Actor2","Actor3"],          
    "fechaDeEstreno":"2020-01-01"
};

console.log(pelicula);
console.log(pelicula.fechaDeEstreno);
console.log(pelicula.titulo);
console.log(pelicula.director.nombre);
console.log(pelicula.director.nacionalidad);





