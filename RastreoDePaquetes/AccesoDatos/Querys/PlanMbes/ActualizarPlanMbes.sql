/*
Nombre:         ActualizarPlanMbes.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Atualizar PlanMbe en la base de datos.

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
UPDATE mbeot_PlanMbe
SET
	i_id = @i_id
	,s_tipo = @s_tipo
	,d_seguroParaPaquetes = @d_seguroParaPaquetes

WHERE idPlanMbe = @idPlanMbe;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

