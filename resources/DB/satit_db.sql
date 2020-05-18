drop database if exists satit_db;
create database if not exists satit_db;

create table cursos(
	id int primary key auto_increment not null,
    titulo varchar(45) not null,
    fecha date,
    descripcion varchar (255) not null,
    horario varchar(20)
);


create table puestos (
	id int primary key auto_increment not null,
	puesto varchar(45) not null
);

/* posiblemente ocupe una tabla temporal*/
create table encuesta_de_satisfaccion(
	id int primary key auto_increment not null,
    fecha date,
    excelente int,
    bien int,
    bueno int,
    regular int,
    malo int
);

/*verificar si faltan cambios*/
create table nomina(
	id int primary key auto_increment not null,
    horas int not null,
    pago int not null,
    bono int,
	id_empleado int 
);

create table repuestros(
	id int primary key auto_increment not null,
    repuesto varchar(45)

);


create table carta_de_trabajo(
	id int primary key auto_increment not null,
	id_empleado int , /*llave foranea*/
    fecha date,
    motivo varchar(45)
);

create table departamento(
	id int primary key auto_increment not null,
    departamento varchar(45)
    
);

create table cita(
	id int primary key auto_increment not null,
    fecha date,
    id_departamento int,/* Llave foranea*/
    id_empleado int /* llave foranea*/
    
);


create table sugerencias(
	id int primary key auto_increment not null,
    descripcion date,
    id_empleado int/* Llave foranea*/

);

create table prenomina(
	id int primary key auto_increment not null,
    horas int not null,
    pago int not null,
	id_empleado int not null,/* Llave foranea*/
	fecha date
);

create table vacaciones(
	id int primary key auto_increment not null,
	periodo varchar(45)
);


create table empleados(
	id int primary key auto_increment not null,
	nombre varchar(45) not null,
    nombre_secundario varchar(45),
    apellido_paterno varchar(45),
    apellido_materno varchar(45),
    id_empleado int not null,
    contrasena varchar(45) not null
    
);




