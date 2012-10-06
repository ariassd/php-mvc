/*
Nombre:         ActualizarPaquetes.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Atualizar Paquete en la base de datos.

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
UPDATE mbeot_Paquete
SET
	i_numeroEBL = @i_numeroEBL
	,s_trackingExterno = @s_trackingExterno
	,s_numeroDeBolsa = @s_numeroDeBolsa
	,s_codPais = @s_codPais
	,i_numCasillero = @i_numCasillero
	,s_descripcion = @s_descripcion
	,i_piezasEnInterior = @i_piezasEnInterior
	,i_piezas = @i_piezas
	,d_peso = @d_peso
	,d_largo = @d_largo
	,d_ancho = @d_ancho
	,d_espesor = @d_espesor
	,e_tipo = @e_tipo
	,d_valorComercial = @d_valorComercial
	,dt_fechaIngresoAMiami = @dt_fechaIngresoAMiami
	,dt_fechaUltimoEstado = @dt_fechaUltimoEstado
	,s_manifiesto = @s_manifiesto
	,s_estadoImportacion = @s_estadoImportacion
	,s_estadoArchivado = @s_estadoArchivado

WHERE idPaquete = @idPaquete;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

