/*
Nombre:         ActualizarBanners.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Atualizar Banner en la base de datos.

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
UPDATE mbeot_Banner
SET
	i_id = @i_id
	,s_descripcion = @s_descripcion
	,dt_fechaIngreso = @dt_fechaIngreso
	,dt_fechaInicioPublicacion = @dt_fechaInicioPublicacion
	,dt_fechaFinPublicacion = @dt_fechaFinPublicacion
	,s_textoPublicitario = @s_textoPublicitario
	,s_linkDeVisita = @s_linkDeVisita
	,s_posicion = @s_posicion
	,s_estadoDePublicacion = @s_estadoDePublicacion

WHERE idBanner = @idBanner;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

