<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */

    $g_tituloPagina = 'Detalle de Clientes';
    $g_formAction = "Clientes.php?vista=ActualizacionDatosCliente";
    ob_start();
?>

<center><h2>Detalle de cliente</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">Codigo de Tienda:</td>
        <td><?php echo $Cliente->O_codigotienda; ?></td>
    </tr>
    <tr>
        <td class="campo">Codigo de Pais:</td>
        <td><?php echo $Cliente->S_codigopais; ?></td>
    </tr>
    <tr>
        <td class="campo">Numero de Casillero:</td>
        <td><?php echo $Cliente->I_numcasillero; ?></td>
    </tr>
    <tr>
        <td class="campo">ID:</td>
        <td><?php echo $Cliente->I_idcliente; ?></td>
    </tr>
    <tr>
        <td class="campo">Nombre:</td>
        <td><?php echo $Cliente->S_apellidos; ?> , <?php echo $Cliente->S_nombre; ?></td>
    </tr>
    <tr>
        <td class="campo">Direccion:</td>
        <td><?php echo $Cliente->S_direccion; ?></td>
    </tr>
    <tr>
        <td class="campo">Teleono:</td>
        <td><?php echo $Cliente->S_telefono; ?></td>
    </tr>
    <tr>
        <td class="campo">Email:</td>
        <td><?php echo $Cliente->S_email; ?></td>
    </tr>
    <tr>
        <td class="campo">Plan Contratado:</td>
        <td><?php echo $Cliente->S_plancontratado; ?></td>
    </tr>
    
    

</table>


<input type="submit" name="b_ModificarCliente" value="Modificar"/></center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
