/*
Nombre:         DetalleArticuloCalculadoras.sql
Autor:          Luis Diego Arias Segura
Fecha creado:   2012-10-06
Descripcion:    
Obtiene el detalle de un ArticuloCalculadora almacenados en la base de datos.

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
	d_peso
	,d_porcentajeArancelario
	,d_valorComercial
	,s_descripcion

FROM    mbeot_ArticuloCalculadora
WHERE   i_idArticuloCalculadora = @idArticuloCalculadora
