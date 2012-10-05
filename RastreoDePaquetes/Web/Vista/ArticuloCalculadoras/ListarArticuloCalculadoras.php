<?php
/**
 * Vista listado para la entidad de ArticuloCalculadoras
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.ArticuloCalculadora.ListarArticuloCalculadoras
 */

    $g_tituloPagina = 'Lista de ArticuloCalculadoras';
    $g_formAction = "";
    ob_start();
?>

	<h1>Lista de ArticuloCalculadoras</h1>
        <table>
            <thead>
                <tr>
                    <th>d_peso</th>
                    <th>d_porcentajeArancelario</th>
                    <th>d_valorComercial</th>
                    <th>s_descripcion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_ArticuloCalculadoras as $value) { ?>
                <tr>
                    <td><?php echo $value->D_peso; ?></td>
                    <td><?php echo $value->D_porcentajearancelario; ?></td>
                    <td><?php echo $value->D_valorcomercial; ?></td>
                    <td><?php echo $value->S_descripcion; ?></td>
                    <td><a href="?vista=DetalleArticuloCalculadora&idArticuloCalculadora=<?php echo $value->I_idArticuloCalculadora; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
