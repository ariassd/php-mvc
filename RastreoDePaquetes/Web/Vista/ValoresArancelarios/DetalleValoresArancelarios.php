<?php
/**
 * Vista detalle para la entidad de ValoresArancelarios
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.ValoresArancelario.DetalleValoresArancelarios
 */

    $g_tituloPagina = 'Detalle de ValoresArancelarios';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de cliente</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">d_valorAdicional:</td>
        <td><?php echo $ValoresArancelario->D_valoradicional; ?></td>
    </tr>
    <tr>
        <td class="campo">d_valorBodegaje:</td>
        <td><?php echo $ValoresArancelario->D_valorbodegaje; ?></td>
    </tr>
    <tr>
        <td class="campo">d_valorDesalmacenaje:</td>
        <td><?php echo $ValoresArancelario->D_valordesalmacenaje; ?></td>
    </tr>
    <tr>
        <td class="campo">e_operacionValoradicional:</td>
        <td><?php echo $ValoresArancelario->E_operacionvaloradicional; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
