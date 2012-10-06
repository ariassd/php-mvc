/*
Nombre:         ActualizarValorArancelarios.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Atualizar ValorArancelario en la base de datos.

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
UPDATE mbeot_ValorArancelario
SET
	d_valorAdicional = @d_valorAdicional
	,d_valorBodegaje = @d_valorBodegaje
	,d_valorDesalmacenaje = @d_valorDesalmacenaje
	,e_operacionValoradicional = @e_operacionValoradicional

WHERE idValorArancelario = @idValorArancelario;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

