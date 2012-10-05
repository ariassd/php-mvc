<?php
/**
 * Vista listado para la entidad de Tiendas
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Tienda.ListarTiendas
 */

    $g_tituloPagina = 'Lista de Tiendas';
    $g_formAction = "";
    ob_start();
?>

	<h1>Lista de Tiendas</h1>
        <table>
            <thead>
                <tr>
                    <th>s_codigoTienda</th>
                    <th>s_estadoActivo</th>
                    <th>s_email</th>
                    <th>s_telefono</th>
                    <th>s_direccion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_Tiendas as $value) { ?>
                <tr>
                    <td><?php echo $value->S_codigotienda; ?></td>
                    <td><?php echo $value->S_estadoactivo; ?></td>
                    <td><?php echo $value->S_email; ?></td>
                    <td><?php echo $value->S_telefono; ?></td>
                    <td><?php echo $value->S_direccion; ?></td>
                    <td><a href="?vista=DetalleTienda&idTienda=<?php echo $value->I_idTienda; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
