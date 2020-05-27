

use satit;
DROP IF EXISTS VIEW vista_empleados_puesto;

CREATE VIEW vista_empleados_puesto as 
SELECT  empleados.id nombre, apellidos, id_puesto 
FROM empleados;


/* Consulta vista empleados con puesto*/
use satit;
SELECT  * from vista_empleados_puesto;

