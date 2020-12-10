create database login;

use login;

create table personas
(idUser smallint not null auto_increment,
login varchar(100),
password varchar(100),
nombre varchar(100),
apellidoPaterno varchar(100),
apellidoMaterno varchar(100),
email varchar(100),
telefono int(25),
direccion varchar(100)
sexo VARCHAR(30),
fechaNacimiento VARCHAR(100),
ciudad varchar (100),


PRIMARY KEY(idUser)
);

insert into idUser (login,password,nombre,apellidoPaterno,apellidoMaterno,email,telefono,direccion,sexo,fechaNacimiento,ciudad)
VALUES('s03','123456','Luis','Sotres','Luis@gmail.com',1234,'jalisco 23','Masculino','12-may-12','Nuevo Laredo');

select * from personas;