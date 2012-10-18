<?php
/**
 * Vista listado para la entidad de Manifiestos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiesto.ListarManifiestos
 */

    $g_tituloPagina = 'Actualizar Manifiestos';
    $g_formAction = "";
    ob_start();
?>

	<h1>Actualizar Estado de los Manifiestos</h1>
        <table>
            <thead>
                <tr>
                    <th>id Manifiesto</th>
                    <th>Fecha de Registro</th>
                    <th>Estado</th>
                    <th>Formato</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_Manifiestos as $value) { ?>
                <tr>
                    <td><?php echo $value->S_idmanifiesto; ?></td>
                    <td><?php echo $value->Dt_fecharegistro; ?></td>
                    <td><?php echo $value->S_estadodelmanifiesto; ?></td>
                    <td><?php echo $value->S_formato; ?></td>
                    <td><a href="?vista=DetalleManifiesto&idManifiesto=<?php echo $value->I_idManifiesto; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
