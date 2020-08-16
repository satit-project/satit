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
  FROM `satit`.`repuestos` LIMIT 1000;



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