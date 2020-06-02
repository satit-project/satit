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

