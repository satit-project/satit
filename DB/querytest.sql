SELECT
 `id`,
 `puesto`,
 `active`
 FROM `satit`.`puestos` LIMIT 1000;


SELECT
 `id`,
 `nombre`,
 `apellidos`,
 `password`,
 `puesto_id`
 FROM `satit`.`empleados` LIMIT 1000;



 SELECT
  `id`,
  `repuesto`
  FROM `satit`.`` LIMIT 1000;



  SELECT
   `id`,
   `fecha`,
   `estatus`,
   `empleado_id`
   FROM `satit`.`carta_de_trabajo` LIMIT 1000;


   SELECT
    `id`,
    `departamento`
    FROM `satit`.`departamento` LIMIT 1000;

    SELECT
     `id`,
     `fecha`,
     `estatus`,
     `departamento_id`,
     `employeeID`,
     `comments`
     FROM `satit`.`cita` LIMIT 1000;

use satit;
SELECT empleados.id as 'employeeID', empleados.nombre, empleados.puesto_id,
       puestos.id, puestos.puesto
  FROM empleados INNER JOIN puestos ON empleados.puesto_id = puestos.id WHERE empleados.id = '999111';
  
  
# prueba de store procedure busqueda de permisos 
call nuevoPermiso("999111","2020/05/05","15:30");
call buscaPermisosEmpleado("999111")

USE satit;
ALTER TABLE material_request DROP FOREIGN KEY FK_material_repuestos;

USE satit;
ALTER TABLE material_request drop FK_material_repuestos;

/*Agregando constraint a la tabla*/
 alter table material_request
 add constraint FK_material_repuestos
  foreign key (materialID)
  references repuestos(id);


USE satit;

SELECT  * FROM  satit.carta_de_trabajo;