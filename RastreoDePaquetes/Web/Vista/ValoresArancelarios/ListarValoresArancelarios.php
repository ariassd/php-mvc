<?php
/**
 * Vista listado para la entidad de ValoresArancelarios
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.ValoresArancelario.ListarValoresArancelarios
 */

    $g_tituloPagina = 'Lista de ValoresArancelarios';
    $g_formAction = "";
    ob_start();
?>

	<h1>Lista de ValoresArancelarios</h1>
        <table>
            <thead>
                <tr>
                    <th>d_valorAdicional</th>
                    <th>d_valorBodegaje</th>
                    <th>d_valorDesalmacenaje</th>
                    <th>e_operacionValoradicional</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_ValoresArancelarios as $value) { ?>
                <tr>
                    <td><?php echo $value->D_valoradicional; ?></td>
                    <td><?php echo $value->D_valorbodegaje; ?></td>
                    <td><?php echo $value->D_valordesalmacenaje; ?></td>
                    <td><?php echo $value->E_operacionvaloradicional; ?></td>
                    <td><a href="?vista=DetalleValoresArancelario&idValoresArancelario=<?php echo $value->I_idValoresArancelario; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
