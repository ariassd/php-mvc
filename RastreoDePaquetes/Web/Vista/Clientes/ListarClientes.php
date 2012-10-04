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
                    <th>s_nombreCompleto</th>
                    <th>s_direccion</th>
                    <th>s_estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_Clientes as $value) { ?>
                <tr>
                    <td><?php echo $value->I_idcliente; ?></td>
                    <td><?php echo $value->S_nombrecompleto; ?></td>
                    <td><?php echo $value->S_direccion; ?></td>
                    <td><?php echo $value->S_estado; ?></td>
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
