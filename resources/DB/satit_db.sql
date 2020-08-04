DROP DATABASE IF EXISTS  satit;
CREATE  DATABASE IF NOT EXISTS satit;
use satit;

DROP TABLE IF EXISTS cursos_empleados;
DROP TABLE IF EXISTS cursos;
DROP TABLE IF EXISTS encuesta_de_satisfaccion;
DROP TABLE IF EXISTS nomina;
DROP TABLE IF EXISTS material_request;
DROP TABLE IF EXISTS repuestos;
DROP TABLE IF EXISTS carta_de_trabajo;
DROP TABLE IF EXISTS cita;
DROP TABLE IF EXISTS departamento;
DROP TABLE IF EXISTS sugerencias;
DROP TABLE IF EXISTS prenomina;
DROP TABLE IF EXISTS vacaciones;
DROP TABLE IF EXISTS empleados;
DROP TABLE IF EXISTS puestos;
DROP TABLE IF EXISTS preguntas_seguridad;
DROP TABLE IF EXISTS master;



create table puestos (
	id int primary key AUTO_INCREMENT NOT NULL,
	puesto varchar(45) not null,
    active boolean DEFAULT TRUE
    /*Check*/
    /*todo one to many puestos - empleado*/

);


create table empleados(
	id varchar(64) primary key not null,
	nombre varchar(45) not null,
    apellidos varchar(45),
    password varchar(128) not null,
    puesto_id int not null,
    INDEX(puesto_id),
    FOREIGN KEY (puesto_id)
    REFERENCES puestos(id)
    ON DELETE CASCADE
    /*Check*/

     /*todo one to many epuesto - empleados */
);



create table master(
	  id varchar(64) primary key not null,
	  nombre varchar(45) not null,
    apellidos varchar(45),
    password varchar(128) not null,
    puesto_id int not null,
    INDEX(puesto_id),
    FOREIGN KEY (puesto_id)
    REFERENCES puestos(id)
    ON DELETE CASCADE
    /*Check*/

     /*todo one to many epuesto - empleados */
);




create table cursos(
	id int primary key auto_increment not null,
    fecha date,
    titulo varchar(45) not null,
    descripcion varchar (255) not null,
    horario varchar(20)

    /*todo many to many cursos - empleado*/

);

CREATE TABLE cursos_empleados(
	id int primary key auto_increment not null,
    id_curso int not null, /* Llave foranea*/
    FOREIGN KEY (id_curso)
    REFERENCES cursos(id)
    ON DELETE CASCADE,
    empleado_id varchar(64) not null,/* Llave foranea*/
    INDEX(empleado_id),
    FOREIGN KEY (empleado_id)
    REFERENCES empleados(id)
    ON DELETE CASCADE,
    asistencia int
    /*Check*/
);


create table encuesta_de_satisfaccion(
	id int primary key AUTO_INCREMENT  NOT NULL,
    fecha date,
    excelente int,
    bien int,
    bueno int,
    regular int,
    malo int

);


create table nomina(
	id int primary key AUTO_INCREMENT  NOT NULL,
    horas int not null,
    pago int not null,
    bono int DEFAULT 0,
	  empleado_id varchar(64) NOT NULL,
    INDEX(empleado_id),
    fecha date not null,

    FOREIGN KEY (empleado_id)
    REFERENCES empleados(id)
    ON DELETE CASCADE
    /*todo one to many empleado - nomina*/

);


create table repuestos(
	id int primary key auto_increment not null,
    repuesto varchar(45)

     /*todo one to many solicitud_repuestos - repuestros*/

);


create table material_request(
    id int primary key auto_increment not null,
    employeeID varchar(64)not null,/* Llave foranea*/
    materialID int not null,
    dateRequest date,
    status boolean DEFAULT 0,
    INDEX(employeeID),
    FOREIGN KEY (employeeID)
    REFERENCES empleados(id),
    INDEX(materialID),
    FOREIGN KEY (materialID)
    REFERENCES repuestos(id)

    /*todo one to many empleado - solicitud_repuestos */

);

create table carta_de_trabajo(
	  id int primary key auto_increment not null,
    fecha date DEFAULT NOW(),
		estatus int DEFAULT 0,
    empleado_id varchar(64) not null,/* Llave foranea*/
    INDEX(empleado_id),
    FOREIGN KEY (empleado_id)
    REFERENCES empleados(id)
    ON DELETE CASCADE



    /*todo one to many empleado - carta_de_trabajo */

);


create table departamento(
	id int primary key auto_increment not null,
    departamento varchar(45)

   /*todo one to many departamento - cita */

);


create table cita(
	id int primary key auto_increment not null,
    fecha date DEFAULT NOW(),
		estatus boolean DEFAULT 0,
    departamento_id int not null,/* Llave foranea*/
    INDEX(departamento_id),
    FOREIGN KEY (departamento_id)
    REFERENCES departamento(id)
    ON DELETE CASCADE,

    employeeID varchar(64)not null,/* Llave foranea*/
    INDEX(employeeID),
    FOREIGN KEY (employeeID)
    REFERENCES empleados(id)
    ON DELETE CASCADE,
		comments varchar(150)
     /*todo one to many empleado - cita */

);



create table sugerencias(
	id int primary key auto_increment not null,
    descripcion date,

    empleado_id varchar(64) not null,/* Llave foranea*/
    INDEX(empleado_id),
    FOREIGN KEY (empleado_id)
    REFERENCES empleados(id)
    ON DELETE CASCADE
    /*todo one to many empleado - sugerencias */


);



create table prenomina(
	id int primary key auto_increment not null,
    horas int not null,
    pago int not null,
	fecha date,
    empleado_id varchar(64) not null,/* Llave foranea*/
    INDEX(empleado_id),
    FOREIGN KEY (empleado_id)
    REFERENCES empleados(id)
    ON DELETE CASCADE

             /*todo one to many empleado - prenomina */

);

create table vacaciones(
	id int primary key auto_increment not null,
	periodo varchar(45),
    empleado_id varchar(64) not null,/* Llave foranea*/
    INDEX(empleado_id),
    FOREIGN KEY (empleado_id)
    REFERENCES
    empleados(id)


    /*todo one to many empleado - vacaciones */

);
/*nueva*/
use satit;
create table preguntas_seguridad(
	id int primary key auto_increment NOT NULL,
	pregunta_1 varchar(50) not null,
	respuesta_1 varchar(128) not null,
	pregunta_2 varchar(50) not null,
	respuesta_2 varchar(128) not null,
	empleado_id varchar(64) not null,/* Llave foranea*/
    INDEX(empleado_id),
    FOREIGN KEY (empleado_id) REFERENCES empleados(id)
);
