/*
Nombre:         ActualizarManifiestos.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-05
Descripcion:    
Atualizar Manifiesto en la base de datos.

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
UPDATE Manifiesto
SET
	s_idManifiesto = @s_idManifiesto
	,dt_fechaRegistro = @dt_fechaRegistro
	,s_estadoDelManifiesto = @s_estadoDelManifiesto
	,s_Formato = @s_Formato

WHERE idManifiesto = @idManifiesto;

select ROW_COUNT() as TOTAL_ACTUALIZADO;
