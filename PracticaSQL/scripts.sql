create database practica;

use practica;


create table usuario
(
id int auto_increment primary key,
nombre varchar(40),
apellido varchar(40),
email varchar(40) unique,
provincia_id int
);



create table provincia
(
id int auto_increment primary key,
descripcion varchar(40)
);

alter table usuario
add foreign key usuario(provincia_id)
references provincia(id);


select * from usuario;


/*inner join*/
select usuario.id,nombre,apellido,email,descripcion from usuario
join provincia on usuario.provincia_id=provincia.id;

/*left join*/
select usuario.id,nombre,apellido,email,descripcion from usuario
left join  provincia on usuario.provincia_id=provincia.id;


/*right join*/
select usuario.id,nombre,apellido,email,descripcion from usuario
right join  provincia on usuario.provincia_id=provincia.id;

