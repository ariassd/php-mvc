/*
Nombre:         InsertarTiendas.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Ingresa Tienda en la base de datos.

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
INSERT INTO mbeot_Tienda
(
	i_codigoTienda
	,b_estadoActivo
	,s_email
	,s_telefono
	,s_direccion

)
VALUES
(
	@i_codigoTienda
	,@b_estadoActivo
	,@s_email
	,@s_telefono
	,@s_direccion

);

select LAST_INSERT_ID() as ID_NUEVO;
