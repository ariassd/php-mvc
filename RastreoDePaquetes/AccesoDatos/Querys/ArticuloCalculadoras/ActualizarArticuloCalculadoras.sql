/*
Nombre:         ActualizarArticuloCalculadoras.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Atualizar ArticuloCalculadora en la base de datos.

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
UPDATE mbeot_ArticuloCalculadora
SET
	d_peso = @d_peso
	,d_porcentajeArancelario = @d_porcentajeArancelario
	,d_valorComercial = @d_valorComercial
	,s_descripcion = @s_descripcion

WHERE idArticuloCalculadora = @idArticuloCalculadora;

select ROW_COUNT() as TOTAL_ACTUALIZADO;

