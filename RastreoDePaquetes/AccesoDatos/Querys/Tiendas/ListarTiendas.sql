/*
Nombre:         ListarTiendas.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-03
Descripcion:    
Obtiene la lista de las tiendas almacenados en la base de datos.

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
