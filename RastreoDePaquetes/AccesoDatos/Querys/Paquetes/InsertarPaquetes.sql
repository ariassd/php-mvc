/*
Nombre:         InsertarPaquetes.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Ingresa Paquete en la base de datos.

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
INSERT INTO mbeot_Paquete
(
	i_numeroEBL
	,s_trackingExterno
	,s_numeroDeBolsa
	,s_codPais
	,i_numCasillero
	,s_descripcion
	,i_piezasEnInterior
	,i_piezas
	,d_peso
	,d_largo
	,d_ancho
	,d_espesor
	,e_tipo
	,d_valorComercial
	,dt_fechaIngresoAMiami
	,dt_fechaUltimoEstado
	,s_manifiesto
	,s_estadoImportacion
	,s_estadoArchivado

)
VALUES
(
	@i_numeroEBL
	,@s_trackingExterno
	,@s_numeroDeBolsa
	,@s_codPais
	,@i_numCasillero
	,@s_descripcion
	,@i_piezasEnInterior
	,@i_piezas
	,@d_peso
	,@d_largo
	,@d_ancho
	,@d_espesor
	,@e_tipo
	,@d_valorComercial
	,@dt_fechaIngresoAMiami
	,@dt_fechaUltimoEstado
	,@s_manifiesto
	,@s_estadoImportacion
	,@s_estadoArchivado

);

select LAST_INSERT_ID() as ID_NUEVO;
