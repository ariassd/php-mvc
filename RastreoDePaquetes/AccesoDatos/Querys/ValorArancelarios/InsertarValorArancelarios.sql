/*
Nombre:         InsertarValorArancelarios.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Ingresa ValorArancelario en la base de datos.

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
INSERT INTO mbeot_ValorArancelario
(
	d_valorAdicional
	,d_valorBodegaje
	,d_valorDesalmacenaje
	,e_operacionValoradicional

)
VALUES
(
	@d_valorAdicional
	,@d_valorBodegaje
	,@d_valorDesalmacenaje
	,@e_operacionValoradicional

);

select LAST_INSERT_ID() as ID_NUEVO;
