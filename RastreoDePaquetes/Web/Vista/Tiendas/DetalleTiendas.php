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

<h2>Detalle de Tienda</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">i_codigoTienda:</td>
        <td><?php echo $Tienda->I_codigotienda; ?></td>
    </tr>
    <tr>
        <td class="campo">b_estadoActivo:</td>
        <td><?php echo $Tienda->B_estadoactivo; ?></td>
    </tr>
    <tr>
        <td class="campo">s_email:</td>
        <td><?php echo $Tienda->S_email; ?></td>
    </tr>
    <tr>
        <td class="campo">s_telefono:</td>
        <td><?php echo $Tienda->S_telefono; ?></td>
    </tr>
    <tr>
        <td class="campo">s_direccion:</td>
        <td><?php echo $Tienda->S_direccion; ?></td>
    </tr>
    <tr>
        <td class="campo">s_descripcion:</td>
        <td><?php echo $Tienda->S_descripcion; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
