/*
Nombre:         ActualizarTiendas.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-05
Descripcion:    
Atualizar Tienda en la base de datos.

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
UPDATE Tienda
SET
	s_codigoTienda = @s_codigoTienda
	,s_estadoActivo = @s_estadoActivo
	,s_email = @s_email
	,s_telefono = @s_telefono
	,s_direccion = @s_direccion

WHERE idTienda = @idTienda;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

