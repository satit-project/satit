DROP DATABASE satit;
CREATE  DATABASE IF NOT EXISTS satit;
use satit;

DROP TABLE IF EXISTS cursos_empleados;
DROP TABLE IF EXISTS cursos;
DROP TABLE IF EXISTS encuesta_de_satisfaccion;
DROP TABLE IF EXISTS nomina;
DROP TABLE IF EXISTS solicitud_repuestos;
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


create table puestos (
	id int primary key AUTO_INCREMENT NOT NULL,
	puesto varchar(45) not null
    /*Check*/
    /*todo one to many puestos - empleado*/

);


create table empleados(
	id int primary key auto_increment not null,
	nombre varchar(45) not null,
    apellidos varchar(45),
    numero_empleado varchar(64) not null,
    password varchar(128) not null,
    id_puesto int not null, 
    INDEX(id_puesto),
    FOREIGN KEY (id_puesto)
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
    INDEX(id_curso),
    FOREIGN KEY (id_curso)
    REFERENCES cursos(id) 
    ON DELETE CASCADE,
    id_empleado int not null,/* Llave foranea*/
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado)
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
	id_empleado INT NOT NULL,
    INDEX(id_empleado),
    fecha date not null,
    
    FOREIGN KEY (id_empleado) 
    REFERENCES empleados(id)
    ON DELETE CASCADE
    /*todo one to many empleado - nomina*/

);


create table repuestos(
	id int primary key auto_increment not null,
    repuesto varchar(45)
    
     /*todo one to many solicitud_repuestos - repuestros*/

);


create table solicitud_repuestos(
    id int primary key auto_increment not null,
    id_empleado int not null,/* Llave foranea*/
    id_repuesto int not null,
    fecha date,
    estatus int,
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado) 
    REFERENCES empleados(id)
    ON DELETE CASCADE,
    INDEX(id_repuesto),
    FOREIGN KEY (id_repuesto) 
    REFERENCES repuestos(id)
    ON DELETE CASCADE
  
    /*todo one to many empleado - solicitud_repuestos */

);

create table carta_de_trabajo(
	id int primary key auto_increment not null,
    fecha date DEFAULT NOW(),
    id_empleado int not null,/* Llave foranea*/
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado) 
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
    fecha date,
    id_departamento int not null,/* Llave foranea*/
    INDEX(id_departamento),
    FOREIGN KEY (id_departamento)
    REFERENCES departamento(id)
    ON DELETE CASCADE,
    
    id_empleado int not null,/* Llave foranea*/
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado) 
    REFERENCES empleados(id)
    ON DELETE CASCADE
     /*todo one to many empleado - cita */

);



create table sugerencias(
	id int primary key auto_increment not null,
    descripcion date,
        
    id_empleado int not null,/* Llave foranea*/
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado) 
    REFERENCES empleados(id)
    ON DELETE CASCADE
    /*todo one to many empleado - sugerencias */


);



create table prenomina(
	id int primary key auto_increment not null,
    horas int not null,
    pago int not null,
	fecha date,
    id_empleado int not null,/* Llave foranea*/
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado)
    REFERENCES empleados(id)
    ON DELETE CASCADE

             /*todo one to many empleado - prenomina */

);

create table vacaciones(
	id int primary key auto_increment not null,
	periodo varchar(45),
    id_empleado int not null,/* Llave foranea*/
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado)
    REFERENCES
    empleados(id)


    /*todo one to many empleado - vacaciones */

);
/*nueva*/
create table preguntas_seguridad(
	id int primary key auto_increment NOT NULL,
	pregunta_1 varchar(50) not null,
	respuesta_1 varchar(45) not null,
	pregunta_2 varchar(50) not null,
	respuesta_2 varchar(45) not null,
	id_empleado int not null,/* Llave foranea*/
    INDEX(id_empleado),
    FOREIGN KEY (id_empleado) REFERENCES empleados(id)
);



