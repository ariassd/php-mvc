/*
Nombre:         InsertarManifiestos.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-05
Descripcion:    
Ingresa Manifiesto en la base de datos.

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
INSERT INTO Manifiesto
(
	s_idManifiesto
	,dt_fechaRegistro
	,s_estadoDelManifiesto
	,s_Formato

)
VALUES
(
	@s_idManifiesto
	,@dt_fechaRegistro
	,@s_estadoDelManifiesto
	,@s_Formato

);

select LAST_INSERT_ID() as ID_NUEVO;
