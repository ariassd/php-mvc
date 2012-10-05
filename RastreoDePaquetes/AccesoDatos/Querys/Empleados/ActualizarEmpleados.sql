/*
Nombre:         ActualizarEmpleados.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-05
Descripcion:    
Atualizar Empleado en la base de datos.

Nota: Este codigo es autogenerado usando PhpGenerator.py, desarrollado
por Luis Diego Arias Segura
Debe de ser modificado segun la estructura de la base de datos para 
que su funcionalidad sea la adecuada

Historico de cambios
================================================================
=== FECHA ====  AUTOR ============  DETALLE ====================
2012-10-05      Luis Diego A        Creacion del procedimiento
            +                   +                               
            +                   +                               
            +                   +                               
            +                   +                               
*/
UPDATE Empleado
SET
	i_id = @i_id
	,s_nombre = @s_nombre
	,s_nombreDeUsuario = @s_nombreDeUsuario
	,s_clave = @s_clave
	,e_tipo = @e_tipo
	,o_tiendaALaQuePertenece = @o_tiendaALaQuePertenece

WHERE idEmpleado = @idEmpleado;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

