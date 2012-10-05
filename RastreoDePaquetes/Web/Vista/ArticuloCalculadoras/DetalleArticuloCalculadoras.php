<?php
/**
 * Vista detalle para la entidad de ArticuloCalculadoras
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.ArticuloCalculadora.DetalleArticuloCalculadoras
 */

    $g_tituloPagina = 'Detalle de ArticuloCalculadoras';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de cliente</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">d_peso:</td>
        <td><?php echo $ArticuloCalculadora->D_peso; ?></td>
    </tr>
    <tr>
        <td class="campo">d_porcentajeArancelario:</td>
        <td><?php echo $ArticuloCalculadora->D_porcentajearancelario; ?></td>
    </tr>
    <tr>
        <td class="campo">d_valorComercial:</td>
        <td><?php echo $ArticuloCalculadora->D_valorcomercial; ?></td>
    </tr>
    <tr>
        <td class="campo">s_descripcion:</td>
        <td><?php echo $ArticuloCalculadora->S_descripcion; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
