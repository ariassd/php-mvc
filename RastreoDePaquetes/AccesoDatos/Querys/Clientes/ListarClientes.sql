/*
Nombre:         ListarClientes.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-03
Descripcion:    
Obtiene la lista de los clientes almacenados en la base de datos.

Historico de cambios
================================================================
=== FECHA ====  AUTOR ============  DETALLE ====================
2012-10-03      Luis Diego A        Creacion del procedimiento
            +                   +                               
            +                   +                               
            +                   +                               
            +                   +                               
*/
SELECT  idCliente as i_idCliente
        ,nombreCompleto as s_nombreCompleto
        ,direccion as s_direccion
        ,estado as s_estado
FROM    Clientes
