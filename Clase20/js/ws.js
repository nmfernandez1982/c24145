//Guardar datos en localStorage
localStorage.setItem('nombre','Nicolas');
localStorage.setItem('edad','43');

//obtener
var nombreUsuario=localStorage.getItem('nombre');
var edadUsuario=localStorage.getItem('edad');

console.log("Nombre: "+nombreUsuario);
console.log("Edad: "+localStorage.getItem('edad'));

localStorage.setItem('edad','44');
console.log("Edad: "+localStorage.getItem('edad'));

localStorage.removeItem('edad');
console.log("Edad: "+localStorage.getItem('edad'));//-> null



