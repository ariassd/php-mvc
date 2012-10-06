/*
Nombre:         ListarBanners.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Obtiene la lista de los Banners almacenados en la base de datos.

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
SELECT  
	i_id
	,s_descripcion
	,dt_fechaIngreso
	,dt_fechaInicioPublicacion
	,dt_fechaFinPublicacion
	,s_textoPublicitario
	,s_linkDeVisita
	,s_posicion
	,s_estadoDePublicacion

FROM    mbeot_Banner
