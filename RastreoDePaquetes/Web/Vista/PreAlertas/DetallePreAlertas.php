<?php
/**
 * Vista detalle para la entidad de PreAlertas
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.PreAlerta.DetallePreAlertas
 */

    $g_tituloPagina = 'Detalle de PreAlertas';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de cliente</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">i_id:</td>
        <td><?php echo $PreAlerta->I_id; ?></td>
    </tr>
    <tr>
        <td class="campo">s_descripcion:</td>
        <td><?php echo $PreAlerta->S_descripcion; ?></td>
    </tr>
    <tr>
        <td class="campo">d_valor:</td>
        <td><?php echo $PreAlerta->D_valor; ?></td>
    </tr>
    <tr>
        <td class="campo">s_archivo:</td>
        <td><?php echo $PreAlerta->S_archivo; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
