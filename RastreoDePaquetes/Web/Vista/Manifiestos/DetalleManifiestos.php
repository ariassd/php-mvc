<?php
/**
 * Vista detalle para la entidad de Manifiestos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiesto.DetalleManifiestos
 */

    $g_tituloPagina = 'Detalle de Manifiestos';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de Manifiesto</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">s_idManifiesto:</td>
        <td><?php echo $Manifiesto->S_idmanifiesto; ?></td>
    </tr>
    <tr>
        <td class="campo">dt_fechaRegistro:</td>
        <td><?php echo $Manifiesto->Dt_fecharegistro; ?></td>
    </tr>
    <tr>
        <td class="campo">s_estadoDelManifiesto:</td>
        <td><?php echo $Manifiesto->S_estadodelmanifiesto; ?></td>
    </tr>
    <tr>
        <td class="campo">s_Formato:</td>
        <td><?php echo $Manifiesto->S_formato; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
