/*
Nombre:         ActualizarTiendas.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Atualizar Tienda en la base de datos.

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
UPDATE mbeot_Tienda
SET
	i_codigoTienda = @i_codigoTienda
	,b_estadoActivo = @b_estadoActivo
	,s_email = @s_email
	,s_telefono = @s_telefono
	,s_direccion = @s_direccion
	,s_descripcion = @s_descripcion

WHERE idTienda = @idTienda;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

