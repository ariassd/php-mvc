<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */

    $g_tituloPagina = 'Detalle de Clientes';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de cliente</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">i_idCliente:</td>
        <td><?php echo $Cliente->I_idcliente; ?></td>
    </tr>
    <tr>
        <td class="campo">s_nombreCompleto:</td>
        <td><?php echo $Cliente->S_nombrecompleto; ?></td>
    </tr>
    <tr>
        <td class="campo">s_direccion:</td>
        <td><?php echo $Cliente->S_direccion; ?></td>
    </tr>
    <tr>
        <td class="campo">s_estado:</td>
        <td><?php echo $Cliente->S_estado; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
