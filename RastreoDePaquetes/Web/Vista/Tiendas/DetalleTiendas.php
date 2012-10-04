<?php
/**
 * Vista detalle para la entidad de Tiendas
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Tienda.DetalleTiendas
 */

    $g_tituloPagina = 'Detalle de Tiendas';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de cliente</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">i_idTienda:</td>
        <td><?php echo $Tienda->I_idtienda; ?></td>
    </tr>
    <tr>
        <td class="campo">s_descripcion:</td>
        <td><?php echo $Tienda->S_descripcion; ?></td>
    </tr>
    <tr>
        <td class="campo">s_estado:</td>
        <td><?php echo $Tienda->S_estado; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
