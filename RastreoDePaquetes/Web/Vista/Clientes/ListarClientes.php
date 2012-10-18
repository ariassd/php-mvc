<?php
/**
 * Vista listado para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.ListarClientes
 */

    $g_tituloPagina = 'Lista de Clientes';
    $g_formAction = "";
    ob_start();
?>

	<h1>Lista de Clientes</h1>
        <table>
            <thead>
                <tr>
                    <th>i_idCliente</th>
                    <th>s_nombre</th>
                    <th>s_apellidos</th>
                    <th>s_direccion</th>
                    <th>s_telefono</th>
                    <th>s_email</th>
                    <th>s_planContratado</th>
                    <th>s_codigoPais</th>
                    <th>i_numCasillero</th>
                    <th>o_codigoTienda</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_Clientes as $value) { ?>
                <tr>
                    <td><?php echo $value->I_idcliente; ?></td>
                    <td><?php echo $value->S_nombre; ?></td>
                    <td><?php echo $value->S_apellidos; ?></td>
                    <td><?php echo $value->S_direccion; ?></td>
                    <td><?php echo $value->S_telefono; ?></td>
                    <td><?php echo $value->S_email; ?></td>
                    <td><?php echo $value->S_plancontratado; ?></td>
                    <td><?php echo $value->S_codigopais; ?></td>
                    <td><?php echo $value->I_numcasillero; ?></td>
                    <td><?php echo $value->O_codigotienda; ?></td>
                    <td><a href="?vista=DetalleCliente&idCliente=<?php echo $value->I_idCliente; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
