<?php
/**
 * Vista detalle para la entidad de Banners
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Banner.DetalleBanners
 */

    $g_tituloPagina = 'Detalle de Banners';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de Banner</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">i_id:</td>
        <td><?php echo $Banner->I_id; ?></td>
    </tr>
    <tr>
        <td class="campo">s_descripcion:</td>
        <td><?php echo $Banner->S_descripcion; ?></td>
    </tr>
    <tr>
        <td class="campo">dt_fechaIngreso:</td>
        <td><?php echo $Banner->Dt_fechaingreso; ?></td>
    </tr>
    <tr>
        <td class="campo">dt_fechaInicioPublicacion:</td>
        <td><?php echo $Banner->Dt_fechainiciopublicacion; ?></td>
    </tr>
    <tr>
        <td class="campo">dt_fechaFinPublicacion:</td>
        <td><?php echo $Banner->Dt_fechafinpublicacion; ?></td>
    </tr>
    <tr>
        <td class="campo">s_textoPublicitario:</td>
        <td><?php echo $Banner->S_textopublicitario; ?></td>
    </tr>
    <tr>
        <td class="campo">s_linkDeVisita:</td>
        <td><?php echo $Banner->S_linkdevisita; ?></td>
    </tr>
    <tr>
        <td class="campo">s_posicion:</td>
        <td><?php echo $Banner->S_posicion; ?></td>
    </tr>
    <tr>
        <td class="campo">s_estadoDePublicacion:</td>
        <td><?php echo $Banner->S_estadodepublicacion; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
