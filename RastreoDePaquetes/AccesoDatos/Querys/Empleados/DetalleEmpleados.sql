/*
Nombre:         DetalleEmpleados.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-05
Descripcion:    
Obtiene el detalle de un Empleado almacenados en la base de datos.

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
SELECT  
	i_id
	,s_nombre
	,s_nombreDeUsuario
	,s_clave
	,e_tipo
	,o_tiendaALaQuePertenece

FROM    Empleado
WHERE   i_idEmpleado = @idEmpleado
