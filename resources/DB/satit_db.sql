use u734165210_satit;
drop table IF EXISTS empleados;

create table IF NOT EXISTS empleados(
	id int primary key auto_increment not null,
	nombre varchar(45) not null,
    nombre_secundario varchar(45),
    apellido_paterno varchar(45),
    apellido_materno varchar(45),
    numero_empleado varchar(64) not null,
    contrasena varchar(128) not null

);


create table IF NOT EXISTS cursos(
	id int primary key auto_increment not null,
    titulo varchar(45) not null,
    fecha date,
    descripcion varchar (255) not null,
    horario varchar(20)
);


create table IF NOT EXISTS puestos (
	id int primary key AUTO_INCREMENT NOT NULL,
	puesto varchar(45) not null
);


/*verificar si faltan cambios*/
create table IF NOT EXISTS nomina(
	id int primary key AUTO_INCREMENT  NOT NULL,
    horas int not null,
    pago int not null,
    bono int,
	id_empleado int 
);


DROP  table IF  EXISTS repuestos;
create table  IF NOT EXISTS repuestos(
	id int primary key auto_increment not null,
    repuesto varchar(45)

);

create table IF NOT EXISTS solicitud_repuestos(
    id int primary key auto_increment not null,
    id_empleado int not null,/* Llave foranea*/
    id_repuesto int not null,
    fecha date,
    estatus int,
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado) REFERENCES empleados(id),
    INDEX(id_repuesto),
    FOREIGN KEY (id_repuesto) REFERENCES repuestos(id)
);

create table IF NOT EXISTS carta_de_trabajo(
	id int primary key auto_increment not null,
	id_empleado int , /*llave foranea*/
    fecha date,
    motivo varchar(45)
);

create table IF NOT EXISTS departamento(
	id int primary key auto_increment not null,
    departamento varchar(45)
    
);

create table IF NOT EXISTS cita(
	id int primary key auto_increment not null,
    fecha date,
    id_departamento int,/* Llave foranea*/
    id_empleado int /* llave foranea*/
    
);


create table IF NOT EXISTS sugerencias(
	id int primary key auto_increment not null,
    descripcion date,
    id_empleado int/* Llave foranea*/

);



create table IF NOT EXISTS prenomina(
	id int primary key auto_increment not null,
    horas int not null,
    pago int not null,
	fecha date,
    id_empleado int not null,/* Llave foranea*/
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado) REFERENCES empleados(id)
);

create table IF NOT EXISTS vacaciones(
	id int primary key auto_increment not null,
	periodo varchar(45)
);


/* posiblemente ocupe una tabla temporal*/
create table IF NOT EXISTS encuesta_de_satisfaccion(
	id int primary key AUTO_INCREMENT  NOT NULL,
    fecha date,
    excelente int,
    bien int,
    bueno int,
    regular int,
    malo int,
    id_empleado int not null,/* Llave foranea*/
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado) REFERENCES empleados(id)
    
);

create table IF NOT EXISTS login_satit(
	id int primary key AUTO_INCREMENT  NOT NULL,
	numero_empleado int not null,
	pass_hash varchar(255),
    nombre varchar(45),
    correo varchar(45),
    fecha date
);



