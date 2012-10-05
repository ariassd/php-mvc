/*
Nombre:         ActualizarPreAlertas.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-05
Descripcion:    
Atualizar PreAlerta en la base de datos.

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
UPDATE PreAlerta
SET
	i_id = @i_id
	,s_descripcion = @s_descripcion
	,d_valor = @d_valor
	,s_archivo = @s_archivo

WHERE idPreAlerta = @idPreAlerta;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

