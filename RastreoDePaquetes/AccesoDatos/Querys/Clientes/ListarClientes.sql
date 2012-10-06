/*
Nombre:         ListarClientes.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Obtiene la lista de los Clientes almacenados en la base de datos.

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
	i_idCliente
	,s_nombre
	,s_apellidos
	,s_direccion
	,s_telefono
	,s_email
	,s_planContratado
	,s_codigoPais
	,i_numCasillero
	,o_codigoTienda

FROM    mbeot_Cliente
