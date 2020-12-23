use satit;

delimiter //
create procedure cuentaUsuarios()
begin
select count(*)  from satit.empleados;
end//


drop procedure if exists buscaPermisosEmpleado;
delimiter //
create procedure buscaPermisosEmpleado(in empleado varchar(64) )
begin
select * from permisos where empleado_id = empleado;
end//


drop procedure if exists nuevoPermiso;

delimiter //
create procedure nuevoPermiso(in empleado int , in fecha date, in hora time)
begin
insert into permisos(empleado_id, fecha, hora) values(empleado, fecha, hora);
end//
