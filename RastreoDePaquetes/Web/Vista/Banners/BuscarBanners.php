<?php
$g_tituloPagina = 'Buscar Publicidad';
$g_formAction = "Banners.php?vista=CargarListaBusquedaBanners";
ob_start();
?>
<center>
    <table class="vistaDetalle">
        <tr>
            <th class="nombreFormulario" colspan="2">
            Datos de Busqueda
            </th>
        </tr>
        <tr>
            <td>Fecha Inicio Publicación:</td>
            <td><input class="datepicker" type="text" name="tf_fechaInicioPublicacion" size="12"/></td>
        </tr>
        <tr>
            <td>Fecha Fin Publicación:</td>
            <td><input class="datepicker" type="text" name="tf_fechaFinPublicacion" size="12"/></td>
        </tr>
        <tr>
            <td>Estado:</td>
            <td>
                <input name="activo" type="radio" value="activo"/>Activo
                <input name="activo" type="radio" value="inactivo"/>Inactivo
                  
            </td>
        </tr>
        <tr><th class="lineaFin" colspan="2"></th></tr>
    </table>
    <br/>
    <br/>
    <input type="submit" name="b_busquedaBanners" value="Buscar Publicidad"/>
</center>
<script>
    $(function() {
        $( ".datepicker" ).datepicker();
    });
</script>
<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>