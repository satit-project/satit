use satit;
SELECT  nombre FROM empleados 
INNER JOIN 
puestos 
ON empleados.id_puesto  = puestos.id  ;




use satit;
SELECT * FROM empleados;
use satit;
SELECT * FROM nomina;
use satit;
INSERT INTO  nomina (id_empleado, horas, pago,fecha ) VALUES (2,40,2800,"2020-05-01")

use satit;
INSERT INTO carta_de_trabajo(id_empleado) VALUES(1);


use satit;
SELECT * from carta_de_trabajo;

use satit;
SHOW TABLES;

USE SATIT;
SELECT * FROM carta_de_trabajo;