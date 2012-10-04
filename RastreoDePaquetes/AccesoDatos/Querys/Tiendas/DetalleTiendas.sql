/*
Nombre:         DetalleTiendas.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-03
Descripcion:    
Obtiene el detalle de una tienda de la base de datos.

Historico de cambios
================================================================
=== FECHA ====  AUTOR ============  DETALLE ====================
2012-10-03      Luis Diego A        Creacion del procedimiento
            +                   +                               
            +                   +                               
            +                   +                               
            +                   +                               
*/
SELECT  idTienda as i_idTienda
	,Descripcion as s_descripcion
	,Estado as s_estado
FROM    Tiendas
WHERE   idTienda = @idTienda