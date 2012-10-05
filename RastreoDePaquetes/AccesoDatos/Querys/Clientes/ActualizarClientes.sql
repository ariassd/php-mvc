/*
Nombre:         ActualizarClientes.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-05
Descripcion:    
Atualizar Cliente en la base de datos.

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
UPDATE Cliente
SET
	i_idCliente = @i_idCliente
	,s_nombre = @s_nombre
	,s_apellidos = @s_apellidos
	,s_direccion = @s_direccion
	,s_telefono = @s_telefono
	,s_email = @s_email
	,s_planContratado = @s_planContratado
	,s_codigoPais = @s_codigoPais
	,s_numCasillero = @s_numCasillero
	,o_codTienda = @o_codTienda

WHERE idCliente = @idCliente;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

