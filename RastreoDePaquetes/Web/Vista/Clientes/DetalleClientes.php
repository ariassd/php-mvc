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
        <td class="campo">s_nombre:</td>
        <td><?php echo $Cliente->S_nombre; ?></td>
    </tr>
    <tr>
        <td class="campo">s_apellidos:</td>
        <td><?php echo $Cliente->S_apellidos; ?></td>
    </tr>
    <tr>
        <td class="campo">s_direccion:</td>
        <td><?php echo $Cliente->S_direccion; ?></td>
    </tr>
    <tr>
        <td class="campo">s_telefono:</td>
        <td><?php echo $Cliente->S_telefono; ?></td>
    </tr>
    <tr>
        <td class="campo">s_email:</td>
        <td><?php echo $Cliente->S_email; ?></td>
    </tr>
    <tr>
        <td class="campo">s_planContratado:</td>
        <td><?php echo $Cliente->S_plancontratado; ?></td>
    </tr>
    <tr>
        <td class="campo">s_codigoPais:</td>
        <td><?php echo $Cliente->S_codigopais; ?></td>
    </tr>
    <tr>
        <td class="campo">i_numCasillero:</td>
        <td><?php echo $Cliente->I_numcasillero; ?></td>
    </tr>
    <tr>
        <td class="campo">o_codigoTienda:</td>
        <td><?php echo $Cliente->O_codigotienda; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
