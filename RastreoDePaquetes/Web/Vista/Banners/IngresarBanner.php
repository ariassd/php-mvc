<?php
$g_tituloPagina = 'Ingresar Banners';
$g_formAction = "Banners.php?vista=DetalleBannersSave";
ob_start();
?>
<center>
    <table class="vistaDetalle">
        <tr>
            <th class="nombreFormulario" colspan="2">
            Datos de la Publicidad
            </th>
        </tr>
        <tr>
            <td>Imagen Publicitaria:</td>
            <td><input type="file" name="tf_imagenPublicidad" size="30"/></td>
        </tr>
        <tr>
            <td>Descripción:</td>
            <td><textarea name="tf_descripcionBanners" resize:none cols="30" rows="2" wrap="physical"></textarea></td>
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
            <td>Texto Publicitario:</td>
            <td><textarea name="tf_textoPublicitario" resize:none cols="30" rows="2" wrap="physical"></textarea></td>
        </tr>
        <tr>
            <td>Link de Publicidad:</td>
            <td><input type="text" name="tf_linkPublicidad" size="12"/></td>
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
    <input type="submit" onclick="return confCambioEstado()" name="b_banners" value="Registrar Publicidad"/>
</center>
<script>
    $(function() {
        $( ".datepicker" ).datepicker();
    });
    
    function confCambioEstado(){
        return confirm('¿Seguro que desa Guardar los Cambios?');
    }
</script>
<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>