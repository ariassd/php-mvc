<?php
/**
 * Vista detalle para la entidad de ValorArancelarios
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.ValorArancelario.DetalleValorArancelarios
 */

    $g_tituloPagina = 'Detalle de ValorArancelarios';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de Valor arancelario</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">d_valorAdicional:</td>
        <td><?php echo $ValorArancelario->D_valoradicional; ?></td>
    </tr>
    <tr>
        <td class="campo">d_valorBodegaje:</td>
        <td><?php echo $ValorArancelario->D_valorbodegaje; ?></td>
    </tr>
    <tr>
        <td class="campo">d_valorDesalmacenaje:</td>
        <td><?php echo $ValorArancelario->D_valordesalmacenaje; ?></td>
    </tr>
    <tr>
        <td class="campo">e_operacionValoradicional:</td>
        <td><?php echo $ValorArancelario->E_operacionvaloradicional; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
