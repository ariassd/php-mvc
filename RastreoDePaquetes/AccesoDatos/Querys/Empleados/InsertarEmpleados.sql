/*
Nombre:         InsertarEmpleados.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Ingresa Empleado en la base de datos.

Nota: Este codigo es autogenerado usando PhpGenerator.py, desarrollado
por Luis Diego Arias Segura
Debe de ser modificado segun la estructura de la base de datos para 
que su funcionalidad sea la adecuada

Historico de cambios
================================================================
=== FECHA ====  AUTOR ============  DETALLE ====================
2012-10-06      Luis Diego A        Creacion del procedimiento
            +                   +                               
            +                   +                               
            +                   +                               
            +                   +                               
*/
INSERT INTO mbeot_Empleado
(
	i_id
	,s_nombre
	,s_nombreDeUsuario
	,s_clave
	,e_tipo
	,o_tiendaALaQuePertenece

)
VALUES
(
	@i_id
	,@s_nombre
	,@s_nombreDeUsuario
	,@s_clave
	,@e_tipo
	,@o_tiendaALaQuePertenece

);

select LAST_INSERT_ID() as ID_NUEVO;
