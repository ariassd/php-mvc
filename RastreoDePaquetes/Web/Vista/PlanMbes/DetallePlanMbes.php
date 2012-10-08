<?php
/**
 * Vista detalle para la entidad de PlanMbes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.PlanMbe.DetallePlanMbes
 */

    $g_tituloPagina = 'Detalle de PlanMbes';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de Plan MBE</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">i_id:</td>
        <td><?php echo $PlanMbe->I_id; ?></td>
    </tr>
    <tr>
        <td class="campo">s_tipo:</td>
        <td><?php echo $PlanMbe->S_tipo; ?></td>
    </tr>
    <tr>
        <td class="campo">d_seguroParaPaquetes:</td>
        <td><?php echo $PlanMbe->D_seguroparapaquetes; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
